<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model {
	public function __construct(){
				
		parent::__construct();
       
    }

    public function login_user($data){
        $this->db->where('email', $data['email']);
        $this->db->where("password", $data['password']);
        $this->db->where("status",1);     
        $query = $this->db->get('admin');
        if ($query->num_rows() == 1) {
            return $query->row(0);
        } else {
            return false;
        }
    }

}
