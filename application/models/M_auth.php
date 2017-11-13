<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {

	public $table ="user";

	function chekLogin($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$user = $this->db->get('users')->row_array();
		return $user;
	}

	
	

}

/* End of file Muser.php */
/* Location: ./application/models/Muser.php */