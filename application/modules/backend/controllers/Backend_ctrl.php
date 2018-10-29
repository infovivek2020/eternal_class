<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend_ctrl extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index()
	{
		$ses_id = $this->session->userdata('userid');
		if(!empty($ses_id)){
		 $this->load->view('index');
		}else{
			redirect('ecadmin/login');
		}
	}
	public function blank()
	{
		$this->load->view('blank');
	}
	public function listing_student()
	{
		$ses_id = $this->session->userdata('userid');
		if(!empty($ses_id)){
			
		 $this->load->view('student-listing');
		}else{
			redirect('ecadmin/login');
		}
	}
	
}
