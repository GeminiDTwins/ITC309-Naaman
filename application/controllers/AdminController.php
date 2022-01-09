<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminController extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('interface') != 1) {
			redirect('Home');
		}
		$this->load->helper('url_helper');
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->model('Crud_model');
	}

	public function index()
	{
		$data['users'] = $this->Crud_model->getAllUsers();
		$data['physicians'] = $this->Crud_model->getAllPhysicians();
		$data['appointments'] = $this->Crud_model->getAllAppointments();

		$this->load->view('template/header');
		$this->load->view('admin/panel', $data);
		$this->load->view('template/footer');

		$this->session->set_flashdata('success', '');
		$this->session->set_flashdata('error', '');
	}

	public function delete()
	{
		if ($this->input->post('appointment_id')) {
			$this->Crud_model->deleteAppointment($this->input->post('appointment_id'));
			$this->session->set_flashdata('success', 'Appointment Successfully Deleted.');
		} else if ($this->input->post('user_id')) {
			$this->Crud_model->deleteUser($this->input->post('user_id'));
			$this->session->set_flashdata('success', 'User Successfully Deleted.');
		} else if ($this->input->post('physician_id')) {
			$this->Crud_model->deleteUser($this->input->post('physician_id'));
			$this->session->set_flashdata('success', 'Physician Successfully Deleted.');
		}
		redirect('admin');
	}

	public function add()
	{
		$type = $this->input->get('type');
		if ($type == 'appointment') {
			$data['users'] = $this->Crud_model->getAllUsers();
			$data['physicians'] = $this->Crud_model->getAllPhysicians();
			$data['formType'] = 'Add';

			$this->load->view('template/header');
			$this->load->view('admin/forms/appointment', $data);
			$this->load->view('template/footer');

			$this->session->set_flashdata('success', '');
			$this->session->set_flashdata('error', '');
		} else if ($type == 'physician') {
			$data['formType'] = 'Add';

			$this->load->view('template/header');
			$this->load->view('admin/forms/physician', $data);
			$this->load->view('template/footer');

			$this->session->set_flashdata('success', '');
			$this->session->set_flashdata('error', '');
		}
	}

	public function edit()
	{
		if ($this->input->get('appointment_id')) {
			$data['users'] = $this->Crud_model->getAllUsers();
			$data['physicians'] = $this->Crud_model->getAllPhysicians();

			$user = $this->Crud_model->getAppointment($this->input->get('appointment_id'));
			$data['appointment']['patient_id'] = $user->user_id;
			$data['appointment']['physician_id'] = $user->physician_id;
			$data['appointment']['cdate'] = $user->consultation_date ?? "";
			$data['appointment']['ctime'] = $user->time ?? "";
			$data['formType'] = 'Update';

			$this->load->view('template/header');
			$this->load->view('admin/forms/appointment', $data);
			$this->load->view('template/footer');

			$this->session->set_flashdata('success', '');
			$this->session->set_flashdata('error', '');
		} else if ($this->input->get('physician_id')) {
			$user = $this->Crud_model->getPhysician($this->input->get('physician_id'));
			$data['profile']['id'] = $user->account_id;
			$data['profile']['title'] = $user->title;
			$data['profile']['f_name'] = $user->f_name ?? "";
			$data['profile']['l_name'] = $user->l_name ?? "";
			$data['profile']['email'] = $user->email ?? "";
			$data['profile']['address'] = $user->address ?? "";
			$data['profile']['postal'] = $user->postcode ?? "";
			$data['profile']['number'] = $user->phone_number ?? 0;
			$data['formType'] = 'Update';

			$this->load->view('template/header');
			$this->load->view('admin/forms/physician', $data);
			$this->load->view('template/footer');

			$this->session->set_flashdata('success', '');
			$this->session->set_flashdata('error', '');
		}
	}

	// Physicians form actions
	public function addPhysician()
	{
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('f_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('l_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('postal', 'Postal Code', 'trim|required|numeric');
		$this->form_validation->set_rules('number', 'Phone Number', 'trim|required|numeric');
		$this->form_validation->set_rules('description', 'Description', 'trim');
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[account.email]');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			redirect('AdminController/add?type=physician');
		} else {
			$encryption_password = $this->encrypt->encode($this->input->post('password'));
			$data = array(
				'f_name' => $this->input->post('f_name'),
				'l_name' => $this->input->post('l_name'),
				'username' => $this->input->post('email'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'postcode' => $this->input->post('postal'),
				'phone_number' => $this->input->post('number'),
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description') ?? "",
				'password' => $encryption_password,
			);

			$this->Crud_model->add_physician($data);
			$this->session->set_flashdata('success', 'Physician successfully added.');

			redirect('admin');

		}
	}

	public function updatePhysician()
	{
		$uid = $this->input->get('user_id');
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('f_name', 'First Name', 'trim|required|alpha');
		$this->form_validation->set_rules('l_name', 'Last Name', 'trim|required|alpha');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('postal', 'Postal Code', 'trim|required|numeric');
		$this->form_validation->set_rules('number', 'Phone Number', 'trim|required|numeric');
		$this->form_validation->set_rules('description', 'Description', 'trim');

		$user = $this->Crud_model->getUserData($uid);

		if ($this->input->post('email') != $user->email) {
			$is_unique = '|is_unique[account.email]';
		} else {
			$is_unique = '';
		}
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email' . $is_unique);

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			redirect('AdminController/edit?physician_id=' . $uid);
		} else {
			$data = array(
				'f_name' => $this->input->post('f_name'),
				'l_name' => $this->input->post('l_name'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'postcode' => $this->input->post('postal'),
				'phone_number' => $this->input->post('number'),
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description') ?? "",
			);

			$this->Crud_model->update_Physician($data, $user->account_id);
			$this->session->set_flashdata('success', 'Profile successfully updated.');

			redirect('admin');

		}
	}

	// appointment form actions
	public function addAppointment()
	{
		$this->form_validation->set_rules('patient', 'Patient', 'trim|required|numeric');
		$this->form_validation->set_rules('physician', 'Physician', 'trim|required|numeric');
		$this->form_validation->set_rules('cdate', 'Consultation Date', 'trim|required');
		$this->form_validation->set_rules('ctime', 'Consultation Time', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			redirect('AdminController/add?type=appointment');
		} else {
			$data = array(
				'user_id' => $this->input->post('patient'),
				'physician_id' => $this->input->post('physician'),
				'booking_date' => date("Y-m-d"),
				'consultation_date' => $this->input->post('cdate'),
				'time' => $this->input->post('ctime'),
			);

			$this->Crud_model->add_appointment($data);
			$this->session->set_flashdata('success', 'Appointment successfully added.');

			redirect('admin');

		}
	}

	public function updateAppointment()
	{
		$aId = $this->input->get('appointment_id');
		$this->form_validation->set_rules('patient', 'Patient', 'trim|required|numeric');
		$this->form_validation->set_rules('physician', 'Physician', 'trim|required|numeric');
		$this->form_validation->set_rules('cdate', 'Consultation Date', 'trim|required');
		$this->form_validation->set_rules('ctime', 'Consultation Time', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			redirect('AdminController/edit?appointment_id=' . $aId);
		} else {
			$data = array(
				'user_id' => $this->input->post('patient'),
				'physician_id' => $this->input->post('physician'),
				'booking_date' => date("Y-m-d"),
				'consultation_date' => $this->input->post('cdate'),
				'time' => $this->input->post('ctime'),
			);

			$this->Crud_model->update_appointment($data, $aId);
			$this->session->set_flashdata('success', 'Appointment successfully updated.');

			redirect('admin');
		}
	}

}
