<?php

class PostModel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function get_posts($story_id = FALSE) {
        $this->db->select('story_id,story.user_id,title,description,story.vote_id,nickname,pfp,count(account_vote.account_id) as total_like');
        $this->db->from('story');
        $this->db->join('user', 'story.user_id = user.user_id');
        $this->db->join('account_vote', 'story.vote_id = account_vote.vote_id', 'left');
        $this->db->group_by('story_id');
        $this->db->order_by('story_id', 'DESC');    
        if ($story_id === FALSE) {
            $query = $this->db->get();
            return $query->result_array();
        }

        $this->db->where(array('story_id' => $story_id));
        $query = $this->db->get();
        return $query->result_array();

    }

    public function get_comment($id = FALSE) {
        $this->db->select('comment_id,story_id,article_id,user_id,comment.comment,comment.vote_id,nickname,pfp,count(account_vote.account_id) as total_like');
        $this->db->from('comment');
        $this->db->join('user', 'comment.account_id=user.account_id');
        $this->db->join('account_vote', 'comment.vote_id = account_vote.vote_id', 'left');
        $this->db->group_by('comment_id');
        $this->db->order_by('total_like', 'DESC');
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

    public function like($vote_id) {

        $this->db->trans_begin();

        $account_vote = array(
            'account_id' => $this->session->userdata('id'),
            'vote_id' => $vote_id
        );

        $this->db->insert('account_vote', $account_vote);

        if ($this->db->trans_status() === FALSE) {
            $this->db->trans_rollback();
        } else {
            $this->db->trans_commit();
        }
    }

}
