<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('homepage');
	}

	public function login(){
		$this->load->view('login');
	}

	public function categories(){
		$this->load->view('categories');
	}

	public function register(){
		$this->load->view('register');
	}

	public function setting(){
		$this->load->view('setting');
	}

	public function courseintro(){
		$this->load->view('courseintro');
	}

}
