<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Question_ctrl extends CI_Controller {

	
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
}
