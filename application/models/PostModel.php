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
        $this->db->select('comment_id,story_id,article_id,physician_id,user_id,comment.comment,comment.vote_id,title,nickname,COALESCE(physician.pfp,user.pfp) as pfp,count(account_vote.account_id) as total_like');
        $this->db->from('comment');
        $this->db->join('user', 'comment.account_id=user.account_id', 'left');
        $this->db->join('physician', 'comment.account_id=physician.account_id', 'left');
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

    public function get_appointment($id = false) {
        $this->db->select('oa_id,booking_date, consultation_date, time, online_consultation.physician_id as physician_id,' .
                'CONCAT(physician.title, \' \', pa.f_name, \' \', pa.l_name) as physician_name, ' .
                'CONCAT(ua.f_name, \' \', ua.l_name) as patient_name');
        $this->db->from('online_consultation');
        $this->db->join('user', 'online_consultation.user_id = user.user_id ');
        $this->db->join('physician', 'online_consultation.physician_id = physician.physician_id ');
        $this->db->join('account as pa', 'physician.account_id = pa.account_id ');
        $this->db->join('account as ua', 'user.account_id = ua.account_id ');
        if ($id === FALSE) {
            $this->db->where(array('online_consultation.user_id' => $this->session->userdata('uid')));
            return $this->db->get()->result();
        }
        $this->db->where(array('online_consultation.user_id' => $id));
        return $this->db->get()->result();
    }

    public function get_phys() {
        $this->db->from('physician');
        $this->db->limit(5);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_user() {
        $this->db->from('user');
        $this->db->limit(5);
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
