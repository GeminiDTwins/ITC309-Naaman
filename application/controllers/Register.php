<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->model('Crud_model');
		$this->load->helper('date');
	}

	public function index()
	{
		$this->load->view('form/signup');
	}

	public function store()
	{
		$this->form_validation->set_rules('f_name', 'First Name', 'trim|required|alpha');
		$this->form_validation->set_rules('l_name', 'Last Name', 'trim|required|alpha');
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[account.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirmpassword', 'Confirm Password', 'trim|required|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			// failed
			$this->session->set_flashdata('message', 'Invalid Data');
			$this->index();
		} else {

			$encryption_password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			$data = array(
				'username' => $this->input->post('email'),
				'email' => $this->input->post('email'),
				'password' => $encryption_password,
			);

			$id = $this->Crud_model->registerUser($data);

			if ($id) {
				$this->session->set_flashdata('register_error', 'Register Successful '
					. 'Please enter user detail to access to the website');
			} else {
				$this->session->set_flashdata('register_error', 'Registration Failed');
			}
			redirect('login');
		}
	}
}
