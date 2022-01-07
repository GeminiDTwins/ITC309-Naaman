<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('interface') == '1') {
            redirect('Home');
        }
        $this->load->library('form_validation');
        $this->load->helper('url_helper');
    }

    
}
