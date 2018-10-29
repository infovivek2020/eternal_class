<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend_controller extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{	
		$this->seodata['title']='Registeration';
		$this->seodata['keyword']='online education';
		//$this->seodata['breadcrum']='Registeration/Login';
		$this->load->view('header-universal',$this->seodata);
		$this->load->view('home');
		//$this->load->view('welcome_message');
	}
	public function signup()
	{
		$this->seodata['title']='Registeration';
		$this->seodata['keyword']='online education';
		$this->seodata['breadcrum']='Registeration/Login';
		$this->load->view('header-universal',$this->seodata);
		$this->load->view('register-login');
	}
	public function contact()
	{
		$this->seodata['title']='Contact Us';
		$this->seodata['keyword']='Contact US';
		$this->seodata['breadcrum']='Contact Us';
		$this->load->view('header-universal',$this->seodata);
		$this->load->view('contact-us');
	}
	public function about()
	{	
		$this->seodata['title']='About Us';
		$this->seodata['keyword']='About Us';
		$this->seodata['breadcrum']='About Us';
		$this->load->view('header-universal',$this->seodata);
		$this->load->view('about-us');
	}
	public function faq()
	{	
		$this->seodata['title']='Faq';
		$this->seodata['keyword']='Faq';
		$this->seodata['breadcrum']='Faq';
		$this->load->view('header-universal',$this->seodata);
		$this->load->view('faq');
	}
	public function our_team()
	{
		$this->seodata['title']='Our Team';
		$this->seodata['keyword']='Our Team';
		$this->seodata['breadcrum']='Our Team';
		$this->load->view('header-universal',$this->seodata);
		$this->load->view('our-team');
	}
	public function price_plan()
	{
		$this->seodata['title']='Price Plan';
		$this->seodata['keyword']='Price Plan';
		$this->seodata['breadcrum']='Price Plan';
		$this->load->view('header-universal',$this->seodata);
		$this->load->view('price-plan');
	}
	public function notification()
	{
		$this->seodata['title']='Exam Notication';
		$this->seodata['keyword']='Exam Notication';
		$this->seodata['breadcrum']='Exam Notication';
		$this->load->view('header-universal',$this->seodata);
		$this->load->view('exam-notification');
	}
	public function error()
	{
		$this->seodata['title']='Error 404';
		$this->seodata['keyword']='Error 404';
		$this->seodata['breadcrum']='Error 404';
		$this->load->view('header-universal',$this->seodata);
		$this->load->view('error-404');
	}
	public function mock_test(){
		$this->seodata['title']='Mock Test';
		$this->seodata['keyword']='Mock Test';
		$this->seodata['breadcrum']='Mock Test';
		$this->load->view('header-universal',$this->seodata);
		$this->load->view('mock-test');
	}
	public function testview()
	{
		//echo 'no'; die;
		$this->load->view('test');
	}
	
}
