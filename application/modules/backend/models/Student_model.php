<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_model extends CI_Model {
	public function get_student_list()
	{
		$this->db->select('name,email,mobile,profile_pic,status');
		$this->db->from('vec_users_tbl');
		$qry = $this->db->get();
		$res=$qry->num_rows();
		if($res>0){
			return $qry->result();
		}else{
			return array();
		}
	}
}
