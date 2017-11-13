<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('ssp');
        $this->load->model('M_user');
	}

	function data() {
        $table = 'v_user';
        $primaryKey = 'id_user';
        $columns = array(
            array('db' => 'foto', 'dt' => 'foto'),
            array('db' => 'nama_lengkap', 'dt' => 'nama_lengkap'),
            array('db' => 'nama_level', 'dt' => 'nama_level'),
            
            array(
                'db' => 'id_user',
                'dt' => 'aksi',
                'formatter' => function( $d) {
                   // return "<a href='edit.php?id=$d'>EDIT</a>";
                     return anchor('user/edit/'.$d,'<i class="fa fa-edit"></i>','class="btn btn-xs btn-teal tooltips" data-placement="top" data-original-title="Edit"').' 
                        '.anchor('user/delete/'.$d,'<i class="fa fa-trash"></i>','class="btn btn-xs btn-danger tooltips" data-placement="top" data-original-title="Delete"');
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

    function index(){
        $this->template_admin->load('admin/template', 'admin/user/list_user');
        
    }

    function add(){
        if (isset($_POST['submit'])){
            $uploadFoto = $this->upload_foto_user();
            $this->M_user->save($uploadFoto);
            redirect('user','refresh');
        }else{
        $this->template_admin->load('admin/template', 'admin/user/add_user');    
        }
    }

    function upload_foto_user(){
        $config['upload_path']          = './uploads/foto_user/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1024; // imb
        $this->load->library('upload', $config);
            // proses upload
        $this->upload->do_upload('userfile');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }


}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */