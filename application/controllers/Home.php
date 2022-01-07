<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('id') == '') {
            redirect('Login');
        }
        $this->load->library('form_validation');
        $this->load->model('PostModel');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    public function index() {
        $data['posts'] = $this->PostModel->get_posts();

        $this->load->view('template/header');
        $this->load->view('home/homepage', $data);
        $this->load->view('template/footer');
    }

    public function view_post($story_id) {
//        $story_id =  $this->uri->segment(3);
        $data['posts'] = $this->PostModel->get_posts($story_id);
        $data['comment'] = $this->PostModel->get_comment($story_id);

        $this->load->view('template/header');
        $this->load->view('home/post', $data);
        $this->load->view('template/footer');
    }

    public function posting() {
        if ($this->form_validation->run('post') == FALSE) {
            redirect('home');
        } else {
            $data = array(
                'user_id' => $this->session->userdata('uid'),
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
            );

            $this->PostModel->posting($data);
            redirect('home');
        }
    }

    public function comment_story() {
        if ($this->form_validation->run('comment') == FALSE) {
            redirect($_SERVER['HTTP_REFERER']);
        } else {
            $data = array(
                'account_id' => $this->session->userdata('id'),
                'story_id' => $this->input->post('story_id'),
                'comment' => $this->input->post('comment')
            );

            $this->PostModel->post_comment($data);
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function like($vote_id) {
        $this->PostModel->like($vote_id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function logout() {
        $data = $this->session->all_userdata();
        foreach ($data as $row => $rows_value) {
            $this->session->unset_userdata($row);
        }
        redirect('login');
    }

    public function view($slug = NULL) {
        $data['news_item'] = $this->news_model->get_news($slug);
    }

    // public function index()
    // {
    // 	$this->load->view('template/header');
    // 	$this->load->view('home/index');
    // 	$this->load->view('template/footer');
    // }
}
