<?php

class PostModel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_posts($id = FALSE) {
        $this->db->order_by('story_id', 'DESC');
        $this->db->from('story');
        $this->db->join('user', 'story.user_id = user.user_id');
        if ($id === FALSE) {
            $query = $this->db->get();
            return $query->result_array();
        }

        $this->db->where(array('story_id' => $id));
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function get_comment($id = FALSE) {
        $this->db->order_by('comment_id', 'ASC');
        $this->db->from('comment');
        $this->db->join('user', 'comment.account_id=user.account_id');
        if ($id === FALSE) {
            $query = $this->db->get();
            return $query->result_array();
        }

        $this->db->where(array('story_id' => $id));
        $query = $this->db->get();
        return $query->result_array();
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

    public function post_comment($data) {
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

        $this->db->set($data)->get_compiled_insert('comment', FALSE);
        $this->db->set($vote_id)->get_compiled_insert('comment', FALSE);
        $this->db->insert();
    }

}
