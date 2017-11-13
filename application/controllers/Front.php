<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->view('template');
		$this->template->load('user/template', 'user/dashboard');
	}

	function pencari()
	{
		$data['kota' ] = $this->Mcuti->tampil_kota();
		// tangkap variabel keyword dari URL
		$nik = $_GET['nik'];
		// cari di database
		$data = $this->db->select("*");
  		$data = $this->db->join("pengajuan_cuti","pegawai.id_pegawai=pengajuan_cuti.id_pegawai");
		$data = $this->db->from('pegawai')->where('$nik');

		//$data=$this->M_data->tampil_edc($keyword);
		// format keluaran di dalam array
		$data = array(
				'nama_pegawai'	=>$peg['nama_pegawai'],
				'jabatan'	=>$peg['jabatan']
			);
	
		echo json_encode($data);
	}
}
