<?php
class UserModel extends CI_Model{
    
    public function user_list(){
        $query = $this->db->query('SELECT u.user_id, u.user_name AS user_name, u.user_email AS user_email, s.status_name AS user_status, t.user_type_name AS user_type 
                                    FROM user_details u
                                    INNER JOIN tbl_user_type t ON t.user_type_id = u.user_type
                                    INNER JOIN tbl_status s ON s.status_id = u.user_status ;');
        return $query;
    }

    public function user_details($user_id){
        $query = $this->db->query('SELECT u.user_id, u.user_name AS user_name, u.user_status AS user_status, u.user_type AS user_type, u.user_email AS user_email
                                    FROM user_details u 
                                    WHERE u.user_id = '. $user_id);
        return $query->row();
    }

    public function set_user($data){
        if($data['account_id'] == NULL){
            $this->db->insert('account', $data);

            $last_id = $this->db->insert_id();
            $u_data[] = array (
                'user_id' => $last_id,
                'nickname' => $data['username'],
                'user_description' => NULL,
                'pfp' => NULL,
                'account_id' => $last_id,
            );
            
        }else{
            return $this->db->update('account', $data, array('account_id' => $data['account_id']));
        }
    }

    public function login($data) {

        //$condition = "user_email =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
        $condition = "username =" . "'" . $data['username']."'";
        $this->db->select('*');
        $this->db->from('account');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if ($query->num_rows() == 1) {

            $user_data = $query->result();
            
            if(password_verify($data['password'], $user_data[0]->password))
            {
                return $user_data;
            }else{
                return false;
            }

            //return true;
        } else {
            return false;
        }
    }

    public function read_user_information($username) {

        $condition = "username =" . "'" . $username . "'";
        $this->db->select('*');
        $this->db->from('account');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}