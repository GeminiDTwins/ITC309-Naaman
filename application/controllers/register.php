<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->model('Crud_model');
        $this->load->helper('date');
    }
    
    public function index() {
        $this->load->view('account/register1');
    }


    public function validation() {

        if ($this->form_validation->run('signup') == FALSE) {
            $this->load->view('form/myform');
        } else {
            $encryption_password = $this->encrypt->encode($this->input->post('password'));
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => $encryption_password,
            );

            $id = $this->Crud_model->insert($data);

            if ($id > 0) {
                $this->session->set_flashdata('message', 'Register Successful '
                        . 'Please enter user detail to access to the website');
                $this->session->set_userdata('tempid', $id);
                redirect('register/detail');
            }
        }
    }

    public function detail() {
        $this->load->view('account/register2');
    }

    public function insertdetail() {
        if ($this->form_validation->run('detail') == FALSE) {
            $this->load->view('account/register2');
        } else {

            $data = array(
                'f_name' => $this->input->post('fname'),
                'l_name' => $this->input->post('lname'),
                'address' => $this->input->post('address'),
                'postcode' => $this->input->post('postcode'),
                'phone_number' => $this->input->post('pnumber'),
                'gender' => $this->input->post('gender'),
                'created_at' => date(DATE_COOKIE, time()) ,
            );

            $id = $this->Crud_model->insertdetail($data);

            if ($id > 0) {
                $this->session->set_flashdata('message', '');
                redirect('Login');
            }
        }
    }

}
