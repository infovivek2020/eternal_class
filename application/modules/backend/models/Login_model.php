<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	public function user_exist_or_not()
	{
		$username = set_value("username");
		$password = set_value("password");
		if(is_numeric($username)){
			$query = $this->db->where('mobile',$username)
				 ->where('password',$password)
				 ->get('vec_admin_tbl');
		}
		if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
		$query = $this->db->where('email',$username)
				 ->where('password',$password)
				 ->get('vec_admin_tbl');
		}
		if($query->num_rows()>0){
			return $query->row();
		}else{
			return array();
		}

	}
	public function user_active_or_not()
	{
		$username = set_value("username");
		$password = set_value("password");
		$status   = '1';
		if(is_numeric($username)){
			$query = $this->db->where('mobile',$username)
				 ->where('password',$password)
				 ->where('status',$status)
				 ->get('vec_admin_tbl');
		}
		if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
		$query = $this->db->where('email',$username)
				 ->where('password',$password)
				 ->where('status',$status)
				 ->get('vec_admin_tbl');
		}
		if($query->num_rows()>0){
			return $query->row();
		}else{
			return array();
		}
	}

}
