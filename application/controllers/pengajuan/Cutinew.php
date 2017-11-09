<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cutinew extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Mcuti');

	}

	public function index()
	{
		$data['kota' ] = $this->Mcuti->tampil_kota();
		$this->template->load('user/template', 'user/pengajuan/cutinew_add', $data);

	}

	
}

/* End of file Cutinew.php */
/* Location: ./application/controllers/pengajuan/Cutinew.php */