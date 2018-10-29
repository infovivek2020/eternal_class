<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_ctrl extends CI_Controller {
	public function __construct(){
    parent::__construct();
    //$this->load->library('session');
  	}
	public function index()
	{
		$this->load->view('login');
	}
	public function login_action()
	{
		$username = $this->input->post("username");
		$password = md5($this->input->post("password"));
		if(is_numeric($username)===true){
			$this->form_validation->set_rules('username','Mobile','required|exact_length[10]|xss_clean|match_regex[/^[6-9]{1}[0-9]{9}$/]');

		}else{
		$this->form_validation->set_rules('username','Email','required|valid_email|trim|xss_clean');
		}
		$this->form_validation->set_rules('password','Password','trim|required|md5|xss_clean');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		if($this->form_validation->run()==false){
			$this->load->view('login');
		}else{
			$this->load->model('Login_model');
			$exist = $this->Login_model->user_exist_or_not();
			$active = $this->Login_model->user_active_or_not();
			if($exist==false){
				if($active==false){
					$this->session->set_flashdata('errorMsg','You Do not have permission to access.');					
				}else{					
					$this->session->set_flashdata('errorMsg','User Does not exist.');
				}
				redirect('ecadmin');
				
			}else{
				
					$this->session->set_userdata('username',$exist->name);
					$this->session->set_userdata('userid',$exist->id);
					$ses_name = $this->session->userdata('username');
					$ses_id = $this->session->userdata('userid');
					redirect('ecadmin/dashboard');
					//echo $ses_name;
					//print_r($this->session->all_userdata());die;
				}
		}
		
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('userid');
		redirect('ecadmin');
	}	
}
