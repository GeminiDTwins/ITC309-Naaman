<?php

class Crud_model extends CI_Model {
    /* View */

    function insert($data) {
        $this->db->insert('account', $data);
        $accountid = $this->db->insert_id();

        $this->db->where('account_id', $accountid);
        $query = $this->db->get('account');
        foreach ($query->result()as $row) {
            $nickname = $row->username;
        }
        if ($this->session->userdata('regis')=="staff"){
            $query = 'INSERT INTO `' . $this->db->database . '`.`physician`(`account_id`,`pfp`,`title`)VALUES (' . $accountid . ', "default_pp.png", "Dr.' . $lastname . '");';
        }else {
			$query = 'INSERT INTO `' . $this->db->database . '`.`user`(`account_id`,`pfp`,`nickname`)VALUES (' . $accountid . ', "default_pp.png", "' . $nickname . '");';
		}
        $this->db->query($query);
        return $accountid;
    }

    function insertdetail($data) {
        $id = $this->session->userdata('tempid');
        $this->db->where('account_id', $id);
        $this->db->update('account', $data);
        return $id;
    }

    function can_login($username, $password) {
        $this->db->where('username', $username);
        $query = $this->db->get('account');
        if ($query->num_rows() > 0) {
            foreach ($query->result()as $row) {
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

    function login_session() {

        $this->db->where('account_id', $this->session->userdata('id'));
        $query = $this->db->get('user');

        if ($this->session->userdata('username') == "admin") {
            $this->session->set_userdata('interface', 1);
        } elseif ($query->num_rows() == 0) {
            $this->db->where('account_id', $this->session->userdata('id'));
            $que = $this->db->get('physician');
            foreach ($que->result()as $row) {
                $this->session->set_userdata('uid', $row->physician_id);
                $this->session->set_userdata('pfp', 'assets/Images/'.$row->pfp);
                if ($this->session->userdata('pfp') == "") {
                    $this->session->set_userdata('pfp', 'assets/Images/default_pp.png');
                }

                $this->session->set_userdata('nick', $row->title);
                if ($this->session->userdata('nick') == "") {
                    $this->session->set_userdata('nick', $this->session->userdata('username'));
                }

                $this->session->set_userdata('status', $row->physician_description);
                $this->session->set_userdata('interface', 2);
            }            
        } elseif ($query->num_rows() > 0) {
            foreach ($query->result()as $row) {
                $this->session->set_userdata('uid', $row->user_id);
                $this->session->set_userdata('pfp', 'assets/Images/'.$row->pfp);
                if ($this->session->userdata('pfp') == "") {
                    $this->session->set_userdata('pfp', 'assets/Images/default_pp.png');
                }

                $this->session->set_userdata('nick', $row->nickname);
                if (!$this->session->set_userdata('nick', $row->nickname)) {
                    $this->session->set_userdata('nick', $this->session->userdata('username'));
                }

                $this->session->set_userdata('status', $row->user_description);
                $this->session->set_userdata('interface', 3);
            }
        }
    }

    function update_profile($data) {
        $id = $this->session->userdata('id');
        $where = "account_id = '$id'";
        $str = $this->db->update_string('account', $data, $where);
        $this->db->query($str);
    }

    //^not finished

    function display_records() {
        $query = $this->db->get("account");
        return $query->result();
    }

    function displayuserpass($username, $password) {
		$query = $this->db->get("`" . $this->db->database . "`.`account` where username='$username' and password='$password'");
		return $query->result();
	}

	function displaymatch($username, $password)
	{
		$query = $this->db->get("`" . $this->db->database . "`.`account` where username='$username' and password='$password'");
		$row = $query->num_rows();
		return $row;
	}

	public function getUserData()
	{
		return $this->db->get_where('account', ['account_id' => $this->session->userdata('id')])->row();
	}
}
