<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('M_auth');

	}

	public function index()
	{
		$this->load->view('auth/login');
	}

	function chek_login(){
		if (isset($_POST['submit'])){
			//Proses Login di sini

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$result = $this->M_auth->chekLogin($username, $password);

			if (!empty($result)){
				$this->session->set_userdata($result);
				redirect('admin','refresh');
			}else{
				redirect('auth','refresh');
			}
			// print_r($result);
		}else{
			redirect('auth');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('auth','refresh');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */