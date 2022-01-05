<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->model('Crud_model');
    }

    public function login() {

        if ($this->input->post('form/login')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $que = $this->db->query("`naaman`.`account` where username='$username' and password='$password'");
            $row = $que->num_rows();
            if (count($row) > 0) {
                redirect('home');
            } else {
                $data['error'] = "<h3 style='color:red'>Invalid username or password !</h3>";
            }
        }
        $this->load->view('form/login', @$data);
    }

    public function signup() {
        $this->load->view('form');
    }
    
    public function signout() {
        $this->session->sess_destroy();
    }

}
