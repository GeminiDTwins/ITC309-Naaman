<?php

class Crud_model extends CI_Model
{
	/* View */

	function insert($data)
	{
		$this->db->insert('account', $data);
		$accountid = $this->db->insert_id();

		$this->db->where('account_id', $accountid);
		$query = $this->db->get('account');
		foreach ($query->result() as $row) {
			$nickname = $row->username;
		}
		if ($this->session->userdata('regis') == "staff") {
			$query = 'INSERT INTO `' . $this->db->database . '`.`physician`(`account_id`,`pfp`,`title`)VALUES (' . $accountid . ', "default_pp.png", "Dr.' . $lastname . '");';
		} else {
			$query = 'INSERT INTO `' . $this->db->database . '`.`user`(`account_id`,`pfp`,`nickname`)VALUES (' . $accountid . ', "default_pp.png", "' . $nickname . '");';
		}
		$this->db->query($query);
		return $accountid;
	}

	function insertdetail($data)
	{
		$id = $this->session->userdata('tempid');
		$this->db->where('account_id', $id);
		$this->db->update('account', $data);
		return $id;
	}

	function can_login($username, $password)
	{
		$this->db->where('username', $username);
		$query = $this->db->get('account');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$store_password = $this->encrypt->decode($row->password);
				if ($password = $store_password) {
					$this->session->set_userdata('id', $row->account_id);
					$this->session->set_userdata('username', $row->username);
				} else {
					return 'Wrong Password';
				}
			}
		} else {
			return 'username do not exist';
		}
	}

	function login_session()
	{

		$this->db->where('account_id', $this->session->userdata('id'));
		$query = $this->db->get('user');

		if ($this->session->userdata('username') == "admin") {
			$this->session->set_userdata('interface', 1);
		} elseif ($query->num_rows() == 0) {
			$query = $this->db->get('physician');
			foreach ($query->result() as $row) {
				$this->session->set_userdata('uid', $row->physician_id);
				$this->session->set_userdata('pfp', 'assets/Images/'.$row->pfp);
				if ($this->session->userdata('pfp') == "assets/Images/") {
					$this->session->set_userdata('pfp', 'assets/Images/default_pp.png');
				}

				$this->session->set_userdata('nick', $row->title);
				if (!$this->session->set_userdata('nick', $row->title)) {
					$this->session->set_userdata('nick', $this->session->userdata('username'));
				}

				$this->session->set_userdata('status', $row->physician_description);
				$this->session->set_userdata('interface', 2);
			}
		} elseif ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$this->session->set_userdata('uid', $row->user_id);
				$this->session->set_userdata('pfp', 'assets/Images/'.$row->pfp);
				if ($this->session->userdata('pfp') == "assets/Images/") {
					$this->session->set_userdata('pfp', 'assets/Images/default_pp.png');
				}

				$this->session->set_userdata('nick', $row->nickname);
				if (!$this->session->userdata('nick', $row->nickname)) {
					$this->session->set_userdata('nick', $this->session->userdata('username'));
				}

				$this->session->set_userdata('status', $row->user_description);
				$this->session->set_userdata('interface', 3);
			}
		}
	}

	function update_profile($data, $id = null)
	{
		if (!$id) {
			$id = $this->session->userdata('id');
		}
		$where = "account_id = '$id'";
		$str = $this->db->update_string('account', $data, $where);
		$this->db->query($str);
	}

	//^not finished

	function display_records()
	{
		$query = $this->db->get("account");
		return $query->result();
	}

	function displayuserpass($username, $password)
	{
		$query = $this->db->get("`" . $this->db->database . "`.`account` where username='$username' and password='$password'");
		return $query->result();
	}

	function displaymatch($username, $password)
	{
		$query = $this->db->get("`" . $this->db->database . "`.`account` where username='$username' and password='$password'");
		$row = $query->num_rows();
		return $row;
	}

	public function getUserData($id = null)
	{
		$this->db->select('*');
		$this->db->from('account');
	
		if (!$id) {
			$id = $this->session->userdata('id');
		}else{
			$this->db->join('user', 'account.account_id = user.account_id');
		}

		$this->db->where('account.account_id', $id);
		return $this->db->get()->row();
	}

	public function getPhysicianData()
	{
		
		$id = $this->session->userdata('id');
		
		return $this->db->get_where('physician', ['account_id' => $id])->row();
	}

	public function getAllUsers()
	{
		$this->db->select('account.account_id,user.user_id,nickname,f_name,l_name,email,address, '
			. 'postcode,phone_number,gender,user_description,pfp,created_at');
		$this->db->from('account');
		$this->db->join('user', 'account.account_id = user.account_id ');
		return $this->db->get()->result();
	}

	public function getAllPhysicians()
	{
		$this->db->select('account.account_id,physician_id,username,title,f_name,l_name,email,address, '
			. 'postcode,phone_number,gender,physician_description,pfp,created_at');
		$this->db->from('account');
		$this->db->join('physician', 'account.account_id = physician.account_id ');
		return $this->db->get()->result();
	}

	public function getPhysician($id)
	{
		$this->db->select('account.account_id,physician_id,username,title,f_name,l_name,email,address, '
			. 'postcode,phone_number,gender,physician_description,pfp,created_at,title');
		$this->db->join('physician', 'account.account_id = physician.account_id ');
		return $this->db->get_where('account', ['account.account_id' => $id])->row();
	}

	function update_Physician($data, $id)
	{
		$pdata = array(
			'title' => $data['title'],
			'physician_description' => $data['description'],
		);
		unset($data['title']);
		unset($data['description']);

		$this->update_profile($data, $id);

		$where = "account_id = '$id'";
		$str = $this->db->update_string('physician', $pdata, $where);
		$this->db->query($str);
	}

	function add_physician($data)
	{
		$pdata = array(
			'title' => $data['title'],
			'physician_description' => $data['description'],
		);
		unset($data['title']);
		unset($data['description']);

		$this->db->insert('account', $data);
		$accountid = $this->db->insert_id();

		$pdata['account_id'] = $accountid;

		$this->db->insert('physician', $pdata);
	}

	public function getAllAppointments()
	{
		$this->db->select('oa_id,booking_date, consultation_date, time,' .
			'CONCAT(physician.title, \' \', pa.f_name, \' \', pa.l_name) as physician_name, ' .
			'CONCAT(ua.f_name, \' \', ua.l_name) as patient_name');
		$this->db->from('online_consultation');
		$this->db->join('user', 'online_consultation.user_id = user.user_id ');
		$this->db->join('physician', 'online_consultation.physician_id = physician.physician_id ');
		$this->db->join('account as pa', 'physician.account_id = pa.account_id ');
		$this->db->join('account as ua', 'user.account_id = ua.account_id ');
		return $this->db->get()->result();
	}

	public function getPhysiciansAppointments()
	{
		$id = $this->session->userdata('id');
		$this->db->select('oa_id,booking_date, consultation_date, time,' .
			'CONCAT(physician.title, \' \', pa.f_name, \' \', pa.l_name) as physician_name, ' .
			'CONCAT(ua.f_name, \' \', ua.l_name) as patient_name, ua.account_id as user_account_id');
		$this->db->from('online_consultation');
		$this->db->join('user', 'online_consultation.user_id = user.user_id ');
		$this->db->join('physician', 'online_consultation.physician_id = physician.physician_id ');
		$this->db->join('account as pa', 'physician.account_id = pa.account_id ');
		$this->db->join('account as ua', 'user.account_id = ua.account_id ');
		$this->db->where('physician.account_id',$id);

		return $this->db->get()->result();
	}

	public function getAppointment($id)
	{
		$this->db->select('*');
		return $this->db->get_where('online_consultation', ['oa_id' => $id])->row();
	}

	function add_appointment($data)
	{
		$this->db->insert('online_consultation', $data);
	}

	function update_appointment($data, $id)
	{
		$where = "oa_id = '$id'";
		$str = $this->db->update_string('online_consultation', $data, $where);
		$this->db->query($str);
	}

	public function deleteAppointment($id)
	{
		$this->db->where('oa_id', $id);
		$this->db->delete('online_consultation');
	}

	public function deleteUser($id)
	{
		$this->db->where('account_id', $id);
		$this->db->delete('account');
	}

}
