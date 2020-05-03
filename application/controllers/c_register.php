<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class c_register extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		// $this->load->model('m_register');
		$this->load->model('class/Model');
		$this->load->helper('url');
	}
 
	public function index($status = ''){		
		$data['judul'] = "Register";
		$data['status'] = $status;
		$this->load->view('v_register', $data);
	}
	
	public function tambahAkun(){
        if ($this->input->post('password', true) == $this->input->post('passwordKonf', true)) {
			$id = $this->Model->Get_Last('id_pelanggan', 'pelanggan');
			$id = $this->Model->Auto_IncrementId($id);
			$pelanggan = new Pelanggan(
				$id,
				$this->input->post('email'),
				$this->input->post('password'),
				$this->input->post('nama'),
				date("Y-m-d")
			);
			$this->Model->Insert_Pelanggan($pelanggan);
			redirect('c_profil_biodataDiri/index/'. $id );
        }else{
			redirect('c_register/index/passSalah');
        }
	}

}