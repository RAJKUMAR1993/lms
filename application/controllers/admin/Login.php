<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
				
		parent::__construct();
		$this->load->model("Admin");
		$this->load->model("Alert");
    }
	
	public function index(){
	

		$this->load->view('admin/login');
	}
	
	public function access(){
        $data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
			'status' => 1
        );
		$user_id = $this->Admin->login_user($data);
		//echo  $this->db->last_query();die;
		if ($user_id) {
			//Create Session
			$user_data = array(
				'user_id' => $user_id->id,
				'first_name' => $user_id->first_name,
				'last_name'=> $user_id->last_name,
				'email' => $user_id->email,
				'login' => true,
				'access_control' => $user_id->access_control,
			);
			$this->session->set_userdata($user_data);
			$this->Alert->pnotify("success"," Successfully Login .$user_data->first_name.","success");
			redirect('dashboard');
                
		} else {
			$this->Alert->pnotify("error"," Please Enter Correct Password","error");
			redirect('admin-login');
		}
	
	
	}

	public function logout(){
	
		$this->session->sess_destroy();
		$this->Alert->pnotify("success"," Successfully Logout ","success");
		redirect("admin-login");
	}
}

?>