<?php

class PostModel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_posts($id = FALSE) {
        if ($id === FALSE) {
            $this->db->order_by('story_id', 'DESC');
            $query = $this->db->get('story');
            return $query->result_array();
        }

        $query = $this->db->get_where('story', array('id' => $id));
        return $query->row_array();
    }

    public function posting($data) {
        $this->db->select_max('vote_id');
        $query = $this->db->get('vote');
        foreach ($query->result()as $row) {
            $x = $row->vote_id;
        }
        $x++;
        $this->db->reset_query();
        $vote_id = array('vote_id' => $x);
        $this->db->insert('vote', $vote_id);
        $this->db->reset_query();
        
        $this->db->set($data)->get_compiled_insert('story', FALSE);
        $this->db->set($vote_id)->get_compiled_insert('story', FALSE);
        $this->db->insert();
        
        }

}
