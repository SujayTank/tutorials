<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->library('session');
	// 	if(!$this->session->userdata('id'))
	// 	return redirect('admin/login');
	// }
	

	public function dashboard()
	{
		$this->load->helper(array('form', 'url'));	
		$this->form_validation->set_rules('uname','username','required|alpha');
		$this->form_validation->set_rules('password','password','required|min_length[4]|max_length[8]');
		
		if($this->form_validation->run()){
			$uname = $this->input->post('uname');
			$password = $this->input->post('password');
			$this->load->model('LoginModel');

			$login_id = $this->LoginModel->isValidate($uname,$password);
			if($login_id)
			{
				$this->load->library('session');
				$this->session->set_userdata('id',$login_id);
				if($login_id==1){
					return redirect('admin/welcome');
				}
				else{
					$this->load->view('homepage'); 
				}
			}
			else
			{
				echo "Details not match";
			}
			
		}
		else{
			$this->load->view('login'); 
		}

	}

	public function store(){
		$this->form_validation->set_rules('firstname','First Name','required|alpha');
		$this->form_validation->set_rules('lastname','Last Name','required|alpha');
		$this->form_validation->set_rules('uname','Username','required|alpha');
		$this->form_validation->set_rules('email','Email','required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password','Password','required|min_length[4]|max_length[8]');
		$this->form_validation->set_rules('rePassword','Password','required|min_length[4]|max_length[8]');

		if($this->form_validation->run()){
			$this->load->library('email');

			$this->email->from(set_value('email'),set_value('firstname'));
			$this->email->to("sujaytank16595@gmail.com");
			$this->email->subject("registration");
			$this->email->message("Thank you..");
			$this->email->set_newline("\r\n");
			$this->email->send();

			if(!$this->email->send()){ 
				show_error($this->email->print_debugger());
			}
			else{ 
				echo "Thank you fo mail";
			}
		}
		else{
			$this->load->view("register");
		}
	}

	public function login(){
		$this->load->view('login');
	}

	public function welcome(){
		$this->load->library('session');
		if( ! $this->session->userdata('id') )
		return redirect('admin/login');
		$this->load->view('admin_dashboard');
	}

	public function logout(){
		// echo "heloo";
		$this->load->library('session');
		$this->session->unset_userdata('id');
		return redirect('admin/login');
	}

}
