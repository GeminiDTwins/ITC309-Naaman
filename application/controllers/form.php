<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
        
    
    
        public function signup()
        {
                $this->load->helper(array('form', 'url'));
                $this->load->database();
                $this->load->library('form_validation');

                if ($this->form_validation->run('signup') == FALSE)
                {
                        $this->load->view('form/myform');
                }
                else
                {
                        $this->load->view('form/myform2');
                }
        }
        
        public function detail()
        {
            $this->load->library('form_validation');
            
            if ($this->form_validation->run('detail') == FALSE)
                {
                        $this->load->view('form/myform2');
                }
                else
                {
                        $this->load->view('form/formsuccess');
                }
        }
        
        public function username_check($str)
        {
                if ($str == 'Admin'||$str == 'admin')
                {
                        $this->form_validation->set_message('username_check', 'The {field} field can not be the word "Admin"');
                        return FALSE;
                }
                else
                {
                        return TRUE;
                }
        }
}