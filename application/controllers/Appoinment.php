<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appoinment extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('AppoinmentModel');

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('security');
	}  

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('appoinment/index');
		$this->load->view('template/footer');
	}

	public function appoinment_list(){
		$draw = intval($this->input->get("draw"));
        $user_id = $this->session->userdata['account_id'];
        log_message('debug', 'USER ID :'. $user_id );
        $query = $this->AppoinmentModel->appoinment_list($user_id);

        if (empty($query->result())){
            $data[] = array();
            echo json_encode($data);
        }else{
            foreach($query->result() as $r) {
                $data[] = array(
                        $r->title,
                        $r->booking_date,
                        $r->consultation_date,
                        $r->btime,
                        '<button class="btn btn-mint btn-xs apptInfo" data-appt="'. $r->oa_id .'" data-target="#orderDetails" data-toggle="modal">More</button>'
                    ); 
            }
            $result = array(
                "draw" => $draw,
                "recordsTotal" => $query->num_rows(),
                "recordsFiltered" => $query->num_rows(),
                "data" => $data
            );
            echo json_encode($result);
        }
	}

    public function appt_details(){
        $appt_id = $this->input->get('appt_id');
        $data = $this->AppoinmentModel->appt_details($appt_id);

        echo json_encode($data);
    }

    public function set_appt(){
        $data = array(
            'oa_id' => $this->input->post('oa_id'),
            'user_id' => $this->session->userdata['account_id'],
            'physician_id' => $this->input->post('physician'),
            'booking_date' => date('Y-m-d'),
            'consultation_date' => $this->input->post('c_date'),
            'time' => $this->input->post('btime'),
        );

        // $data = array(
        //     'oa_id' => '',
        //     'user_id' => 1,
        //     'physician_id' => 1,
        //     'booking_date' => date('Y-m-d'),
        //     'consultation_date' => 2022-02-10,
        //     'time' => '10:00:00',
        // );

        echo $this->AppoinmentModel->set_appt($data);
        
    }
}
