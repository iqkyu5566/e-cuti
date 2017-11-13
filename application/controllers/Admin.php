<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('ssp');
	}


	public function index()
	{
		$this->template_admin->load('admin/template','admin/dashboard');
	}

	

    

	

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */