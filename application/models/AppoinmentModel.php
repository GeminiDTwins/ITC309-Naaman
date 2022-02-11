<?php
class AppoinmentModel extends CI_Model{
    
    public function appoinment_list($user_id){
        //$user_id = 1;
        $query = $this->db->query('SELECT c.oa_id, c.booking_date AS booking_date, c.consultation_date AS consultation_date, c.time AS btime, p.title as title 
                                    FROM  online_consultation c
                                    INNER JOIN physician p ON p.physician_id = c.physician_id
                                    WHERE c.user_id = '. $user_id);

        return $query;
    }

    public function appt_details($appt_id){
        $query = $this->db->query('SELECT c.oa_id, c.booking_date AS booking_date, c.consultation_date AS consultation_date, c.time AS btime, c.physician_id AS physician 
                                    FROM  online_consultation c
                                    WHERE c.oa_id = '. $appt_id);
        return $query->row();
    }

    public function set_appt($data){
        if($data['oa_id'] == NULL){
            return $this->db->insert('online_consultation', $data);
        }else{
            return $this->db->update('online_consultation', $data, array('oa_id' => $data['oa_id']));
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