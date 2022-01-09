<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ProfileController extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/welcome
	 *    - or -
	 *        http://example.com/index.php/welcome/index
	 *    - or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('uid') == '') {
			redirect('Login');
		}
		$this->load->helper('url_helper');
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->model('Crud_model');
	}

	public function index()
	{
		$user = $this->Crud_model->getUserData();

		$data['profile']['id'] = $user;
		$data['profile']['f_name'] = $user->f_name ?? "";
		$data['profile']['l_name'] = $user->l_name ?? "";
		$data['profile']['created_at'] = 2;
		$data['profile']['email'] = $user->email ?? "";
		$data['profile']['address'] = $user->address ?? "";
		$data['profile']['postal'] = $user->postcode ?? "";
		$data['profile']['number'] = $user->phone_number ?? 0;
		$data['profile']['role'] = 2;
		$this->load->view('template/header');
		$this->load->view('profile', $data);
		$this->load->view('template/footer');

		$this->session->set_flashdata('success', '');
		$this->session->set_flashdata('error', '');
	}

	public function update()
	{
		$this->form_validation->set_rules('f_name', 'First Name', 'trim|required|alpha');
		$this->form_validation->set_rules('l_name', 'Last Name', 'trim|required|alpha');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('postal', 'Postal Code', 'trim|required|numeric');
		$this->form_validation->set_rules('number', 'Phone Number', 'trim|required|numeric');

		$user = $this->Crud_model->getUserData();
		if ($this->input->post('email') != $user->email) {
			$is_unique = '|is_unique[account.email]';
		} else {
			$is_unique = '';
		}
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email' . $is_unique);

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$data = array(
				'f_name' => $this->input->post('f_name'),
				'l_name' => $this->input->post('l_name'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'postcode' => $this->input->post('postal'),
				'phone_number' => $this->input->post('number'),
			);

			$this->Crud_model->update_profile($data);
			$this->session->set_flashdata('success', 'Profile successfully updated.');

			$this->index();

		}
	}

	public function updatePassword()
	{
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$encryption_password = $this->encrypt->encode($this->input->post('password'));
			$data = array(
				'password' => $encryption_password,
			);

			$this->Crud_model->update_profile($data);
			$this->session->set_flashdata('success', 'Password successfully updated.');

			$this->index();

		}
	}

}
