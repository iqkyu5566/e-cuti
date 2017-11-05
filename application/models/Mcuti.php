<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcuti extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	function search($name){
		$this->db->like('name', $name, 'both');
		return $this->db->get('regencies')->result();
	}

}

/* End of file Mcuti.php */
/* Location: ./application/models/Mcuti.php */