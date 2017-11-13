<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
        $this->load->library('ssp');
	}


	function data_pengajuan_cuti() {
        $table = 'v_pengajuan_cuti';
        $primaryKey = 'id_pengajuan';
        $columns = array(
            array('db' => 'nama_pegawai', 'dt' => 'nama_pegawai'),
            array('db' => 'type', 'dt' => 'type'),
            array('db' => 'tgl_sekarang', 'dt' => 'tgl_sekarang'),
            array('db' => 'tgl_mulai', 'dt' => 'tgl_mulai'),
            array('db' => 'tgl_selesai', 'dt' => 'tgl_selesai'),
            array('db' => 'nama_kota', 'dt' => 'nama_kota'),
            array('db' => 'alasan', 'dt' => 'alasan'),
            array('db' => 'disetujui_pimpinan', 'dt' => 'disetujui_pimpinan'),
            array('db' => 'disetujui_hr', 'dt' => 'disetujui_hr'),
            array(
                'db' => 'id_pengajuan',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                    return anchor('pengajuan/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('pengajuan/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
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
		$this->template_admin->load('admin/template','admin/pengajuan/list_pengajuan');
	}

}

/* End of file Pengajuan.php */
/* Location: ./application/controllers/Pengajuan.php */