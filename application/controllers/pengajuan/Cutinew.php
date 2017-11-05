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
		if (isset($_GET['term'])){
			
			$result = $this->Mcuti->search($_GET['term']);
			if(count($result) > 0){
			foreach ($rsult as $pr) 
				$arr_result[] = $pr->name;
			echo json_encode($arr_result);
			}	
		}
		

	}
}

/* End of file Cutinew.php */
/* Location: ./application/controllers/pengajuan/Cutinew.php */