<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Co_karyawan extends CI_Controller {
	public function __Construct(){
		parent::__Construct ();
		$this->load->database(); 

	}
	public function view_tambah(){
		include "cek_session.php";
		$this->load->view('view_tambah');
		
	}   
	public function tambah(){
		include "cek_session.php";
		$nama=$this->input->post('nama');
		$ttl=$this->input->post('ttl');
		$jk=$this->input->post('jk');
		$sts=$this->input->post('sts');
		$agama=$this->input->post('agama');
		$alamat=$this->input->post('alamat');
	  $this->load->model('model_Karyawan'); // load model 
	  $this->model_Karyawan->tambahKaryawan($nama,$ttl,$jk,$sts,$agama,$alamat);
	}

	public function tambah_nilai(){
		include "cek_session.php";
		$a = $this->input->post('Nama1');
		$this->session->set_userdata('nama',$a);
		$this->load->view('view_nilai2');
	}  

	public function set_nilai(){
		$nama=$this->input->post('Nama1');
		$bulan=$this->input->post('bulan');
		$jk=$this->input->post('jk');
		$kinerja=$this->input->post('kinerja');
		$disiplin=$this->input->post('disiplin');
	  $this->load->model('model_Karyawan'); // load model 
	  $this->model_Karyawan->tambah_nilai($nama,$bulan,$jk,$kinerja,$disiplin);
	}  

	public function showData(){
		$this->load->model('model_Karyawan');
		$this->data['group'] = $this->model_Karyawan->getData(); 
		$this->load->view('view_Home', $this->data);
	}

	public function hapusKaryawan(){
		$this->load->model('model_Karyawan');
		$nama =$this->input->post('Nama2');
		$this->model_Karyawan->hapus_data($nama);
		$this->data['group'] = $this->model_Karyawan->getData();
		$this->load->view('view_Home', $this->data);
	}

	public function update(){
		include "cek_session.php";
		$this->load->view('view_update');
	}

	public function update_karyawan(){
		include "cek_session.php";
		$nama=$this->input->post('nama');
		$ttl=$this->input->post('ttl');
		$jk=$this->input->post('jk');
		$sts=$this->input->post('sts');
		$agama=$this->input->post('agama');
		$alamat=$this->input->post('alamat');
		$this->load->model('model_Karyawan'); // load model 
		$this->model_Karyawan->updateKaryawan($nama,$ttl,$jk,$sts,$agama,$alamat);
	}
	public function showbonus(){
		$this->load->model('model_Karyawan');
		$this->data['group'] = $this->model_Karyawan->getBonus(); 
		$this->load->view('view_bonus', $this->data);
	}
}
