<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

    public function index(){
		if ($this->session->userdata('user_id') != '') {
			redirect('Home');
		}
		$this->load->view('form/login');
	}

	public function validation()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('form/login');
		} else {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->Crud_model->login($email);
			$this->session->set_flashdata('login_error', $user);

			if (!$user) {
				$this->session->set_flashdata('login_error', 'Please check your email or password and try again.');
				redirect('Login');
			}

			if (!password_verify($password, $user->password)) {
				$this->session->set_flashdata('login_error', 'Please check your email or password and try again.');
				redirect('Login');
			}

			unset($_SESSION['login_error']);
			$this->Crud_model->setSession($user);
			redirect('home');
		}
    }

}
