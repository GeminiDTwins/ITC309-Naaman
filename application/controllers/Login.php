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
        $this->load->view('account/login');
    }
    
    public function validation(){
        if ($this->form_validation->run('login') == FALSE) {
            $this->load->view('account/login');
        } else {
            $result = $this->Crud_model->can_login($this->input->post('username'),$this->input->post('password'));
            if ($result == ''){
                $this->Crud_model->login_session();
                if ($this->session->userdata("interface") == 1){
                    redirect('admin');
                }
                elseif ($this->session->userdata("interface") == 2){
                    $this->session->set_userdata("link","staff");
                    redirect('Staff');
                }elseif ($this->session->userdata("interface") == 3){
                    $this->session->set_userdata("link","home");
                    redirect('Home');
                }
            }
            else{
                $this->session->set_flashdata('message',$result);
                redirect('Login');
            }
        }
    }

    
    
    public function signup() {
        $this->load->view('register');
    }
    
    public function signout() {
        $data = $this->session->all_userdata();
        foreach ($data as $row => $rows_value){
            $this->session->unset_userdata($row);
        }
        redirect('Login');
    }

}
