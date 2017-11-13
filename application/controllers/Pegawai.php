<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	function data_pegawai() {
        $table = 'pegawai';
        $primaryKey = 'nik';
        $columns = array(
            array('db' => 'nik', 'dt' => 'nik'),
            array('db' => 'nama', 'dt' => 'nama'),
            array('db' => 'tanggal_masuk_kerja', 'dt' => 'tanggal_masuk_kerja'),
            array('db' => 'alamat', 'dt' => 'alamat'),
            array('db' => 'jabatan', 'dt' => 'jabatan'),
            array('db' => 'username', 'dt' => 'username'),
            array('db' => 'password', 'dt' => 'password'),
           
            array(
                'db' => 'nik',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    return "<a href='edit.php?nik=$d'>EDIT</a>";
                }
            )
        );
        $sql_details = array(
            'user' => $this->db->username,
            'pass' => $this->db->password,
            'db' => $this->db->database,
            'host' => $this->db->hostname
        );
 
        echo json_encode(
                SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns)
        );
    }

	public function index()
	{
		$this->template_admin->load('admin/template','admin/pengajuan/list_pegawai');
	}

}

/* End of file Pegawai.php */
/* Location: ./application/controllers/Pegawai.php */