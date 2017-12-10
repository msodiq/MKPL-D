<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Co_login extends CI_Controller {
	
	public function __Construct(){
		parent::__Construct ();
		$this->load->database(); 
		$this->load->model('model_Login');
	}

	public function login(){
		$this->load->view('view_Login');
	}

	public function loginWrong(){
		echo "<script>alert('Username atau Password salah')</script>";
		$this->load->view('view_Login');
	}
	public function getLogin(){
		$u = $this->input->post('username');	
		$p = $this->input->post('password');
		$this->load->model('model_Login');
		$this->model_Login->getLogin($u,$p);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome');

	}
}