<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('PostModel');
		$this->load->library('session');
		$this->load->helper('url_helper');
		//$this->load->helper('load_controller');
	}

	public function index()
	{
		$data['posts'] = $this->PostModel->get_posts();
		$this->load->view('template/header');
		$this->load->view('home/index', $data);
		$this->load->view('template/footer');
		
	}

	public function edit()
	{
		//$data = load_controller('Stats', 'stats_home');
		//$data = $this->AdminModel->get_stats_home();
		$this->load->view('template/header');
		$this->load->view('home/edit');
		$this->load->view('template/footer');
	}

	public function view($slug = NULL)
	{
		$data['item'] = $this->PostModel->get_posts($slug);
		$data['comments'] = $this->PostModel->get_comments($slug);
		
		if (empty($data['item']))
        {
            $this.index();
        }

		//echo($data['post']['title']);
		$this->load->view('template/header');
		$this->load->view('home/view', $data);
		$this->load->view('template/footer');
	}

	public function set_article(){
        $data = array(
			'physician_id' => $this->session->userdata['account_id'],
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
			'vote_id' => 1,
            'created_date' => date('Y-m-d'),
			'vote_count' => 0,
			'img_name' => $this->input->post('img_name'),
        );
        
		//echo json_encode($data['title'].' - '.$data['physician_id']);
        echo $this->PostModel->set_post($data);
        
    }

	public function vote_article(){
        $data = array(
			'article_id' => $this->input->post('article_id'),
        );
        
		//echo json_encode($data['article_id']);
        echo $this->PostModel->vote_post($data);
        
    }

	public function set_comment(){
        $data = array(
			'article_id' => $this->input->post('article_id'),
			'comment' => $this->input->post('comment'),
			'account_id' => $this->session->userdata['account_id'],
			'vote_id' => 1,
			'created_date' => date('Y-m-d'),
        );
        
		if($data['article_id'] == NULL && $data['comment'] == NULL && $data['account_id'] == NULL){
            echo 0;
		}else{
			echo $this->PostModel->set_comment($data);
		}
		//echo json_encode($data['article_id']);
            
    }

	// File upload
	public function fileUpload(){

		if(!empty($_FILES['file']['name'])){
		
			// Set preference
			$config['upload_path'] = 'assets/img/uploads/'; 
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['max_size'] = '1024'; // max_size in kb
			$config['file_name'] = date('Ymd').'_'.$_FILES['file']['name'];
		
			//Load upload library
			$this->load->library('upload',$config); 
		
			// File upload
			if($this->upload->do_upload('file')){
				// Get data about the file
				$uploadData = $this->upload->data();
				echo json_encode($uploadData);
			}
		}
	
	}

}