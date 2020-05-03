<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class c_register extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_register');
		$this->load->helper('url');
	}
 
	public function index($status = ''){		
		$data['judul'] = "Register";
		$data['status'] = $status;
		$this->load->view('v_register', $data);
	}
	
	public function tambahAkun(){
        if ($this->input->post('password', true) == $this->input->post('passwordKonf', true)) {
			$this->m_register->insertAkun();
			$id = $this->m_register->getLastId();
			print_r($id);
			redirect('c_profil_biodataDiri/index/'.$id);
        }else{
			redirect('c_register/index/passSalah');
        }
	}

}