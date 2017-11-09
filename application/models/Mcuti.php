<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcuti extends CI_Model {

	function tampil_kota(){
		$query = "SELECT * FROM pengajuan_cuti as pc, kota as k WHERE pc.id_kota = k.id_kota ";
		return $this->db->query($query);
	}
		
	

}

/* End of file Mcuti.php */
/* Location: ./application/models/Mcuti.php */