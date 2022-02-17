<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Physicians extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('interface') == '1') {
			redirect('Home');
		}

		$this->load->helper('url_helper');
		$this->load->library('form_validation');
		$this->load->library('encrypt');
		$this->load->model('Crud_model');
		$this->load->model('PostModel');
	}

	public function index()
	{
		if ($this->input->get('user_id') && $this->session->userdata('interface') == 2) {

			$user = $this->Crud_model->getUserData($this->input->get('user_id'));
		} else {

			$user = $this->Crud_model->getUserData();
		}
		$physician = $this->Crud_model->getPhysicianData();

		$data['profile']['id'] = $user->account_id;
		$data['profile']['f_name'] = $user->f_name ?? "";
		$data['profile']['l_name'] = $user->l_name ?? "";
		$data['profile']['created_at'] = 2;
		$data['profile']['email'] = $user->email ?? "";
		$data['profile']['address'] = $user->address ?? "";
		$data['profile']['postal'] = $user->postcode ?? "";
		$data['profile']['number'] = $user->phone_number ?? 0;
		$data['profile']['role'] = 2;
		$data['profile']['description'] = $physician->physician_description ?? "";
		$data['profile']['title'] = $physician->title ?? "";

		$this->load->view('template/header');
		$this->load->view('physician/profile', $data);
		$this->load->view('template/footer');

		$this->session->set_flashdata('success', '');
		$this->session->set_flashdata('error', '');
	}

	public function appointment()
	{
		$data['appointments'] = $this->Crud_model->getPhysiciansAppointments();

		$this->load->view('template/header');
		$this->load->view('physician/appointments', $data);
		$this->load->view('template/footer');

		$this->session->set_flashdata('success', '');
		$this->session->set_flashdata('error', '');
	}

	public function userProfile($userId = 0)
	{
		$user = $this->Crud_model->getUserData($userId);

		$data['profile']['id'] = $user->account_id;
		$data['profile']['f_name'] = $user->f_name ?? "";
		$data['profile']['l_name'] = $user->l_name ?? "";
		$data['profile']['created_at'] = 2;
		$data['profile']['email'] = $user->email ?? "";
		$data['profile']['address'] = $user->address ?? "";
		$data['profile']['postal'] = $user->postcode ?? "";
		$data['profile']['number'] = $user->phone_number ?? 0;
		$data['profile']['role'] = 2;
		$data['profile']['image'] = $user->pfp??"";

		$this->load->view('template/header');
		$this->load->view('physician/user_profile', $data);
		$this->load->view('template/footer');

		$this->session->set_flashdata('success', '');
		$this->session->set_flashdata('error', '');
	}

	public function updateProfile()
	{
		$this->form_validation->set_rules('title', 'Title', 'trim|required');
		$this->form_validation->set_rules('description', 'Description', 'trim|required');
		$this->form_validation->set_rules('f_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('l_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('address', 'Address', 'trim|required');
		$this->form_validation->set_rules('postal', 'Postal Code', 'trim|required|numeric');
		$this->form_validation->set_rules('number', 'Phone Number', 'trim|required|numeric');

		if ($this->input->get('user_id') && $this->session->userdata('interface') == 1) {

			$user = $this->Crud_model->getUserData($this->input->get('user_id'));
		} else {

			$user = $this->Crud_model->getUserData();
		}
		if ($this->input->post('email') != $user->email) {
			$is_unique = '|is_unique[account.email]';
		} else {
			$is_unique = '';
		}
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email' . $is_unique);

		if ($this->form_validation->run() == FALSE) {
			//redirect('/physicians', 'refresh');
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

			$this->Crud_model->update_profile($data, $user->account_id);
			$this->session->set_flashdata('success', 'Profile successfully updated.');

			if ($this->session->userdata('interface') == 1) {
				redirect('admin');
			} else {
				redirect('/physicians', 'refresh');
			}
		}
	}

	public function view_article($article_id)
	{
		$data['posts'] = $this->PostModel->get_article($article_id);
		$data['comment'] = $this->PostModel->get_commentarticle($article_id);
		$data['user'] = $this->PostModel->get_phys();

		$this->load->view('template/header');
		$this->load->view('physician/article', $data);
		$this->load->view('template/footer');
	}

	public function articles()
	{
		$physician = $this->Crud_model->getPhysicianData();
		$data['articles'] = $this->PostModel->get_article_by_physician($physician->physician_id);

		$this->load->view('template/header');
		$this->load->view('physician/article_list', $data);
		$this->load->view('template/footer');

		$this->session->set_flashdata('success', '');
		$this->session->set_flashdata('error', '');
	}

	public function viewArticleCreate($article_id = null)
	{
		
		$physician = $this->Crud_model->getPhysicianData();
		$data['physician_id'] = $physician->physician_id;
		$data['article'] = null;
		if($article_id){
			$data['article'] = $this->PostModel->get_article($article_id);
		}
		$this->load->view('template/header');
		$this->load->view('physician/add_article', $data);
		$this->load->view('template/footer');

		$this->session->set_flashdata('success', '');
		$this->session->set_flashdata('error', '');
	}

	public function posting($article_id = null) 
	{
        if ($this->form_validation->run('post') == FALSE) {
            redirect('/Physicians/viewArticleCreate');
        } else {
            $data = array(
                'physician_id' => $this->input->post('physician_id'),
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
            );

			if($article_id){
				$this->PostModel->articleEdit($data, $article_id);
			}else{
				$this->PostModel->articleCreate($data);
			}
            
            redirect('/Physicians/articles');
        }
    }

	public function deleteArticle()
	{
		if ($this->input->post('article_id')) {
			$this->PostModel->deleteArticle($this->input->post('article_id'));
			$this->session->set_flashdata('success', 'Article Successfully Deleted.');
		}
		redirect('/Physicians/articles');
	}
}
