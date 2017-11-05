<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cutinew extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->template->load('user/template', 'user/pengajuan/cutinew_add');

	}

	public function search() {
	//tangkap Variabel Keyword dari URL
		$keyword = $this->uri->segment(3);

		//cari di database
		$data = $this->db->from('regencies')->like('name', $keyword)->get();

		//format keluaran di dalam array
		foreach ($data->result() as $row) {
			# code...
			$arr['query'] = $keyword;
			$arr ['suggestions'][] = array(
				'value' => $row->name
			);
		}
		//Minimal PHP 5.2
		echo json_encode($arr);

	}
}

/* End of file Cutinew.php */
/* Location: ./application/controllers/pengajuan/Cutinew.php */