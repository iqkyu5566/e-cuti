<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cutibackdate extends CI_Controller {

	public function index()
	{
		$this->template->load('user/template','user/pengajuan/backdate_list');
	}

}

/* End of file Cutibackdate.php */
/* Location: ./application/controllers/Cutibackdate.php */