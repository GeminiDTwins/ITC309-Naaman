<?php

class Crud_model extends CI_Model {
    /* View */

    function insert($data) {
        $this->db->insert('account', $data);
        $accountid = $this->db->insert_id();
        $query = 'INSERT INTO `naaman`.`user`(`account_id`)VALUES (' . $accountid . ');';
        $this->db->query($query);
        return $accountid;
    }

    function insertdetail($data) {
        $id = $this->session->userdata('tempid');
        $where = "account_id = '$id'";
        $str = $this->db->update_string('account', $data, $where);
        $this->db->query($str);
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
                    $this->session->set_userdata('username',$row->username);
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
        if ($query->num_rows() > 0) {
            foreach ($query->result()as $row) {
                $this->session->set_userdata('pfp', $row->pfp);
                if (!$this->session->set_userdata('pfp', $row->pfp)) {
                    $this->session->set_userdata('pfp', 'assets/Images/default_pp.png');
                }

                $this->session->set_userdata('nick', $row->nickname);
                if (!$this->session->set_userdata('nick', $row->nickname)) {
                    $this->session->set_userdata('nick', $this->session->userdata('username'));
                }
                
                $this->session->set_userdata('status', $row->user_description);
            }
        }
    }

    function display_records() {
        $query = $this->db->get("account");
        return $query->result();
    }

    function displayuserpass($username, $password) {
        $query = $this->db->get("`naaman`.`account` where username='$username' and password='$password'");
        return $query->result();
    }

    function displaymatch($username, $password) {
        $query = $this->db->get("`naaman`.`account` where username='$username' and password='$password'");
        $row = $query->num_rows();
        return $row;
    }

}
