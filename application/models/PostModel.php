<?php
class PostModel extends CI_Model
{
    
    public function get_posts($slug = FALSE)
    {
        if ($slug === FALSE)
        {
                //$query = $this->db->get('article');
                $this->db->select('article.article_id, article.physician_id, article.title, article.description, article.created_date, article.vote_count, article.img_name,
                                   CONCAT(ac.f_name, " ", ac.l_name) AS name, (SELECT COUNT(comment.comment_id) from comment WHERE article_id = article.article_id) AS comment_count');
                $this->db->from('article');
                $this->db->join('account ac', 'ac.account_id = article.physician_id');
                //$this->db->join('comment c', 'c.article_id = a.article_id', 'left');
                //$this->db->group_by("c.article_id");
                $query = $this->db->get();
                return $query->result_array();
        }

        $this->db->select('article.article_id, article.physician_id, article.title, article.description, article.created_date, article.vote_count, article.img_name,
                           CONCAT(f_name, " ", l_name) AS name, (SELECT COUNT(comment.comment_id) from comment WHERE article_id = article.article_id) AS comment_count');
        $this->db->from('article');
        //$this->db->join('comment c', 'c.article_id = a.article_id', 'left');
        $this->db->join('account ac', 'ac.account_id = article.physician_id');
        $this->db->where('article.article_id', $slug);
        //$this->db->group_by("c.article_id");
        $query = $this->db->get();
        //$query = $this->db->get_where('article', array('article_id' => $slug));
        return $query->row_array();

        // select article.article_id, article.physician_id, article.title, article.description, article.created_date, article.vote_count, article.img_name, 
        // CONCAT(account.f_name, ' ', account.l_name), (SELECT COUNT(comment.comment_id) from comment WHERE article_id = article.article_id) AS comment_count
        // FROM article
        // INNER JOIN account on account.account_id = article.physician_id

        // $this->db->select('a.*, count(c.comment_id) AS comment_count, CONCAT(f_name, " ", l_name) AS name');
        // $this->db->from('article a');
        // $this->db->join('comment c', 'c.article_id = a.article_id', 'left');
        // $this->db->join('account ac', 'ac.account_id = a.physician_id');
        // $this->db->where('a.article_id', $slug);
        // $this->db->group_by("c.article_id");
    }

    public function set_post($data)
    {
        $this->load->helper('url');
        $article_id = $this->input->post('article_id');
        
        if($article_id == NULL){
            return $this->db->insert('article', $data);
        }else{
            return $this->db->update('article', $data, array('article_id' => $article_id));
        }
    }

    public function vote_post($data)
    {
        //$this->load->helper('url');       
        if($data['article_id'] == NULL){
            return 0;
        }else{
            $this->db->set('vote_count', 'vote_count+1', FALSE);
            $this->db->where('article_id', $data['article_id']);
            return $this->db->update('article');
            //return $this->db->update('article', array('vote_count' => '1'), array('article_id' => $data['article_id']));
        }
    }

    public function set_comment($data)
    {
        //$this->load->helper('url');       
        if($data['article_id'] == NULL && $data['comment'] == NULL){
            return 0;
        }else{
            return $this->db->insert('comment', $data);
        }
    }

    public function get_comments($slug = FALSE)
    {
        if ($slug !== FALSE)
        {
            $this->db->select('*');
            $this->db->from('comment');
            $this->db->join('account', 'account.account_id = comment.account_id');
            $this->db->where('article_id', $slug);
            $query = $this->db->get();

            //$query = $this->db->get_where('comment', array('article_id' => $slug));
            return $query->result_array();
        }
    }
}

// $this->db->select('a.*, count(c.comment_id) AS comment_count');
// $this->db->from('article a');
// $this->db->join('comment c', 'c.article_id = a.article_id');
// $this->db->where('article_id', $slug);
// $this->db->group_by("c.article_id");
// $query = $this->db->get();



// SELECT a.* , count(c.comment_id)
// FROM article a 
// join comment c on c.article_id = a.article_id
// WHERE a.article_id = 1
// GROUP BY c.article_id