<?php

class databasetest extends CI_Controller {

    public function __construct() {
        /* call CodeIgniter's default Constructor */
        parent::__construct();

        /* load database libray manually */
        $this->load->database();

        /* load Model */
        $this->load->model('Crud_model');
    }

    /* Display */

    public function displaydata() {
        $result['data'] = $this->Crud_model->display_records();
        $this->load->view('/CRUD/display_records', $result);
    }

    public function displayuserpass() {
        $result['data'] = $this->Crud_model->displayuserpass('admin','admin12!');
        $this->load->view('/CRUD/display_records', $result);
    }
    
    public function displaymatch() {
        $result['data'] = $this->Crud_model->displaymatch('admin','admin12!');
        $this->load->view('/CRUD/displaymatch', $result);
    }

}

?>