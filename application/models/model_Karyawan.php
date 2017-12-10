
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Karyawan extends CI_model {

	function __Construct(){
		parent::__Construct ();
		$this->load->database();
	}
	public function tambahKaryawan($nama,$ttl,$jk,$sts,$agama,$alamat)
	{
		$data = array(
			'Nama'=>$nama,
			'TTL'=>$ttl,
			'JK'=>$jk,
			'Status'=>$sts,
			'Agama'=>$agama,
			'Alamat'=>$alamat
			);
		$this->db->insert('karyawan',$data);
		redirect('Co_karyawan/view_tambah');
	}
	public function tambah_nilai($nama,$bulan,$jk,$kinerja,$disiplin){
		$data = array(
			'Nama'=>$nama,
			'Bulan'=>$bulan,
			'Jam_Kerja'=>$jk,
			'Kinerja'=>$kinerja,
			'Disiplin'=>$disiplin
			);
		$this->db->insert('nilai',$data);
		redirect('Co_karyawan/showData');
	}
	public function getData(){
		$this->db->select('Nama, TTL, JK, Status, Agama, Alamat'); 
		$this->db->from('karyawan');
		$this->db->order_by('Nama','ASC');
		$query = $this->db->get();
		return $query->result();
	}

	public function hapus_data($nama){
		$this->db->where('Nama',$nama);
		$this->db->delete('karyawan');
	}
	public function updateKaryawan($nama,$ttl,$jk,$sts,$agama,$alamat){
		$data = array(
			'Nama'=>$nama,
			'TTL'=>$ttl,
			'JK'=>$jk,
			'Status'=>$sts,
			'Agama'=>$agama,
			'Alamat'=>$alamat
			);
		$this->db->update('karyawan',$data);
		redirect('Co_karyawan/showData');

	}
	public function getBonus(){
		$queryRank = "SELECT nilai.Nama, (nilai.Disiplin+nilai.Kinerja+nilai.Jam_Kerja) as Total, @curRank := @curRank + 1 as Ranking
		from nilai cross join (select @curRank := 0) as param 
		ORDER BY total DESC";
		$query = $this->db->query($queryRank);
return $query ->result();
	}
}