<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class c_registerVendor extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_registerVendor');
		$this->load->helper('url');
	}
 
	public function index($idV, $idU){
		$data['judul'] = "Register";
		$data['id_vendor'] = $idV;
		$data['id_pelanggan'] = $idU;
		$this->load->view('v_registerVendor',$data);
	}
	
	public function tambahAkun($idV, $idU){
		$this->m_registerVendor->insert_akun($idV);
		redirect('c_profil_biodataDiri/index/'.$idU);
	}

}