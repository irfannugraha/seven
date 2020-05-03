<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class c_profil_vendor_barang extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_profil_vendor_barang');
		$this->load->helper('url');
	}
 
	public function index($id = ''){
		$data['judul'] = "Profile - Biodata Diri";
		$data['barang'] = $this->m_profil_vendor_barang->get_barang($id);
		$this->load->view('v_profil_vendor_barang',$data);
	}

	public function insertBarang(){
		$idV = "VEN001";
		$this->m_profil_vendor_barang->insertBarang($idV);
		redirect($this);
	}

	public function updateBarang($id){
		$this->m_profil_vendor_barang->updateBarang($id);
		redirect($this);
	}

	public function deleteBarang($id){
		$this->m_profil_vendor_barang->deleteBarang($id);
		redirect($this);
	}
}