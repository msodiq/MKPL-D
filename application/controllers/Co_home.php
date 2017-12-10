<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Co_home extends CI_Controller {
	public function __Construct(){
		parent::__Construct ();
	   $this->load->database(); // load database
	}
	public function view_Home(){
		if (empty($_SESSION['username'])){
			redirect('Co_login/login');  
		}
		else{
			$this->load->view('view_Home');
		}


	}
	// public function showData(){
	// 	$this->load->library('datatables');
	// 	$this->datatables->select('id_karyawan,Nama, TTL, JK, Status, Agama, Alamat');
	// 	$this->datatables->add_column('action', anchor('Co_karyawan/tambah_nilai/.$1','detail',array('class'=>'btn btn-sm btn-success')), 'Nama');
	// 	$this->datatables->from('karyawan');
	// 	return print_r($this->datatables->generate());
	// }

	public function nilai(){
		$this->load->view('view_nilai');
	}
}
