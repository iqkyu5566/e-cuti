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

	function data_pengajuan_cuti() {
        $table = 'pengajuan_cuti';
        $primaryKey = 'id';
        $columns = array(
            array('db' => 'nik', 'dt' => 'nik'),
            array('db' => 'id_cuti', 'dt' => 'id_cuti'),
            array('db' => 'tanggal', 'dt' => 'tanggal'),
            array('db' => 'mulai', 'dt' => 'mulai'),
            array('db' => 'selesai', 'dt' => 'selesai'),
            array('db' => 'alasan', 'dt' => 'alasan'),
            array('db' => 'status', 'dt' => 'status'),
            array('db' => 'disetujui_pimpinan', 'dt' => 'disetujui_pimpinan'),
            array('db' => 'disetujui_hr', 'dt' => 'disetujui_hr'),
            array(
                'db' => 'id',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    return "<a href='edit.php?id=$d'>EDIT</a>";
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

	function list_pengajuan(){
		$this->template_admin->load('admin/template','admin/list_pengajuan');
	}

	function list_pegawai(){
		$this->template_admin->load('admin/template','admin/list_pegawai');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */