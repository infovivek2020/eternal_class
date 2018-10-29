<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_ctrl extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('student_model');
		$this->load->library('Ajax_pagination');
		$this->perPage = 2;
	}
	
	public function index()
	{
		$this->load->view('index');
	}
	public function blank()
	{
		$this->load->view('blank');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function listing_student2()
	{

		$ses_id = $this->session->userdata('userid');
		if(!empty($ses_id)){
			$data['student_list'] = $this->student_model->get_student_list();	
		 $this->load->view('student-listing',$data);
		}else{
			redirect('ecadmin/login');
		}
	}
	public function listing_student()
	{
		$data=array();
		$ses_id = $this->session->userdata('userid');
		if(!empty($ses_id)){
			$totalRec = count($this->student_model->get_student_list());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'ecadmin/listing-student';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->ajax_pagination->initialize($config);	
		 $this->load->view('student-listing',$data);
		}else{
			redirect('ecadmin/login');
		}
	}
	public function ajaxpagination()
	{
		
	}
}
