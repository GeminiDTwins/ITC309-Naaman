<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->model('UserModel');

        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('security');
	}

	public function index()
	{
		if(isset($this->session->userdata['logged_in'])){
            //$this->load->view('Order/index');
            header("location:".site_url('home'));
        }else{
            $this->load->view('users/login');
        }
    }

    public function register()
	{
		if(isset($this->session->userdata['logged_in'])){
            //$this->load->view('Order/index');
            header("location:".site_url('home'));
        }else{
            $this->load->view('users/register');
        }
    }
    
    public function auth_user(){

        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

        if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['logged_in'])){
                header("location:".site_url('home'));
            }else{
                $this->load->view('users/login');
            }
        }else {
            $data = array(
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password')
            );
            $result = $this->UserModel->login($data);
            if ($result != FALSE) {
            
                $session_data = array(
                    'account_id' => $result[0]->account_id,
                    'username' => $result[0]->username,
                    'email' => $result[0]->email,
                    'logged_in' => TRUE
                );

                log_message('debug', 'USERNAME :'. $result[0]->username);

                // Add user data in session
                $this->session->set_userdata($session_data);
                //$this->session->set_userdata('logged_in', TRUE);

                log_message('debug', 'USERNAME :'. $this->session->userdata() );
                header("location:".site_url('home'));

            } else {
                $data = array(
                'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('users/login', $data);
            }
        }
    }

    public function logout() {
        $sess_array = array('username' => '');
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        header("location:".site_url('User'));
    }
        

	public function manage()
	{
		$this->load->view('template/header');
		$this->load->view('users/manage');
		$this->load->view('template/footer');
	}

	public function user_list(){
		$draw = intval($this->input->get("draw"));

        $query = $this->UserModel->user_list();

        if (empty($query->result())){
            echo json_encode('<script>alert("No Data Found")</script>');
        }else{
            foreach($query->result() as $r) {
                $data[] = array(
                        $r->user_name,
                        $r->user_type,
                        $r->user_status,
                        '<button class="btn btn-mint btn-xs userInfo" data-user="'. $r->user_id .'" data-target="#orderDetails" data-toggle="modal">More</button>'
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

    public function user_details(){
        $user_id = $this->input->get('user_id');
        $data = $this->UserModel->user_details($user_id);

        echo json_encode($data);
    }

    public function set_user(){
        $data = array(
            'account_id' => $this->input->post('accountid'),
            'f_name' => $this->input->post('fname'),
            'l_name' => $this->input->post('lname'),
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'created_at' => date("D, j-M-Y G:i:s T"),
        );

        if($this->input->post('password') != NULL){
            $data['password'] = password_hash($_POST["password"], PASSWORD_DEFAULT);
        }

        echo $this->UserModel->set_user($data);
        
    }
}
