<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model {

	public function getLogin($u,$p)
	{
		$pwd = md5($p);
		$this->db->where('username',$u);
		$this->db->where('password',$p);
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$sess = array('username'=>$row->username,
					'password'=>$row->password);
				$this->session->set_userdata($sess);
				$_SESSION['username']=$u;
				redirect('Co_karyawan/showData');
			}
		}
		
		else{
			redirect('Co_login/loginWrong');

		}
	}
}
