<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	function save(){
		$data = array(
			'nama_lengkap' 	=> $this->input->post('nama_lengkap', TRUE),
			'username' 		=> $this->input->post('username', TRUE),
			'password' 		=> md5($this->input->post('password', TRUE)),
			'id_level_user' => $this->input->post('id_level_user', TRUE),
			'foto' 			=> $foto

		);
	}

}

/* End of file M_user.php */
/* Location: ./application/models/M_user.php */