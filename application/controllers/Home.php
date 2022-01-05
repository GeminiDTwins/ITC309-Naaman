<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PostModel');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    public function index()
    {
        $data['posts'] = $this->PostModel->get_posts();

        $this->load->view('template/header');
            $this->load->view('home/homepage', $data);
        $this->load->view('template/footer');
    }

    public function view($slug = NULL)
    {
        $data['news_item'] = $this->news_model->get_news($slug);
    }

    // public function index()
	// {
	// 	$this->load->view('template/header');
	// 	$this->load->view('home/index');
	// 	$this->load->view('template/footer');
	// }
}