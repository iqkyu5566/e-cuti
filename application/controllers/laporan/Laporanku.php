<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporanku extends CI_Controller {

	public function index()
	{
		$this->template->load('user/template','user/Laporan/laporanku_list');
	}

}

/* End of file Laporanku.php */
/* Location: ./application/controllers/laporan/Laporanku.php */