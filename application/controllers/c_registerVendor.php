<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class c_registerVendor extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		// $this->load->model('m_registerVendor');
		$this->load->model('class/Model');
		$this->load->helper('url');
	}
 
	public function index($idV, $idU){
		$data['judul'] = "Register";
		$data['id_vendor'] = $idV;
		$data['id_pelanggan'] = $idU;
		$this->load->view('v_registerVendor', $data);
	}
	
	public function tambahAkun($idV, $idU){
		$vendor = new Vendor(
			$idV,
			$this->input->post('nama'),
			$this->input->post('telepon'),
			$this->input->post('alamat')
		);
		$this->Model->Insert_Vendor($vendor);
		$this->Model->Update_Pelanggan($idU, ['id_vendor' =>$idV]);

		redirect('c_profil_biodataDiri/index/'.$idU.'/'.$idV);
	}

}