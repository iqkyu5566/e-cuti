<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_cuti extends CI_Model {

	function tampil_kota(){
		$query = "SELECT * FROM pengajuan_cuti as pc, kota as k WHERE pc.id_kota = k.id_kota ";
		return $this->db->query($query);
	}

	function tampil_pegawai()
  	{
  		$this->db->select("*");
  		$this->db->join("pegawai","pengajuan_cuti.id_pegawai=pegawai.id_pegawai");
  		//$this->db->like('nama_edc',$keyword);
  		$data=$this->db->get("pengajuan_cuti");
  		return $data->result_array();

  	}
		
	

}

/* End of file Mcuti.php */
/* Location: ./application/models/Mcuti.php */