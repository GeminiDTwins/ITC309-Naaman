<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('AdminModel');
		$this->load->library('session');
		//$this->load->helper('load_controller');
	}

	public function index()
	{
		//$data = load_controller('Stats', 'stats_home');
		$data = $this->AdminModel->get_stats_home();
		$this->load->view('template/header');
		$this->load->view('admin/index', $data);
		$this->load->view('template/footer');
	}

	public function order_list(){
		$draw = intval($this->input->get("draw"));
		$query = $this->AdminModel->order_list();
		if (empty($query->result())){
				$result = array(
						"draw" => $draw,
						"recordsTotal" => $query->num_rows(),
						"recordsFiltered" => $query->num_rows(),
						"data" => $data[] = array()
				);
				echo json_encode($result);
		}else{
			foreach($query->result() as $r) {

				$url = site_url("order/order_details/"). $r->order_number;
				$data[] = array(
						$r->order_number,
						$r->Cust_Name,
						$r->Cust_ID_Number,
						$r->order_date,
						($r->payment_status == "cash") ? '<span class="label label-success">Cash</span>' : '<span class="label label-danger">Credit</span>',
						($r->order_status == "pending") ? '<span class="label label-danger">Pending</span>' : '<span class="label label-success">Campleted</span>',
						'<a href="'. $url  .'" class="btn btn-info btn-xs">View Order</a>'
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
}
