<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('id')== '') {
            redirect('Login');
        }

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

    public function logout() {
        $data = $this->session->all_userdata();
        foreach ($data as $row => $rows_value){
            $this->session->unset_userdata($row);
        }
        redirect('user');
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
