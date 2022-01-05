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
    
    public function index(){
        $this->load->view('form/login');
    }
    
    public function validation(){
        if ($this->form_validation->run('login') == FALSE) {
            $this->load->view('form/login');
        } else {
            $result = $this->Crud_model->can_login($this->input->post('username'),$this->input->post('password'));
            if ($result == ''){
                $this->Crud_model->login_session();
                redirect('Home');
            }
            else{
                $this->session->set_flashdata('message',$result);
                redirect('user');
            }
        }
    }

    public function signup() {
        $this->load->view('form');
    }
    
    public function signout() {
        $data = $this->session->all_userdata();
        foreach ($data as $row => $rows_value){
            $this->session->unset_userdata($row);
        }
        redirect('user');
    }

}
