<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class c_profil_vendor_barang extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('m_profil_vendor_barang');
		$this->load->model('class/Model');
		$this->load->helper('url');
	}
 
	public function index($idU, $idV){
		$data = [
			'barang' => $this->Model->Get_Barang($idV, 'id_vendor'),
			'vendor' => $this->Model->Get_Vendor($idV)[0],
			'pelanggan' => $this->Model->Get_Pelanggan($idU)[0]
		];

		foreach ($data['barang'] as $key => $barang) {
			if ($barang->Get_Deleted() == 1) {
				unset($data['barang'][$key]);
			}
		}

		$data['judul'] = "Profile - Biodata Diri";

		$this->load->view('template/navbarlogin', $data);
		$this->load->view('v_profil_vendor_barang',$data);
		$this->load->view('template/footer');
	}

	public function insertBarang($idU, $idV){
		$idB = $this->Model->Get_Last('id_barang', 'barang');
		$idB = $this->Model->Auto_IncrementId($idB);
		
		$barang = new Barang(
			$idB,
			$idV,
			$this->input->post('jenis'),
			$this->input->post('nama'),
			$this->input->post('stok'),
			$this->input->post('harga_awal'),
			$this->input->post('harga_awal') * $this->input->post('stok'),
			$this->input->post('deskripsi'),
			date("Y-m-d")
		);
		
		$this->Model->Insert_Barang($barang);

		redirect('c_profil_vendor_barang/index/'.$idU.'/'.$idV);
	}

	public function updateBarang($idB, $idU, $idV){
		$barang = [
			'jenis' => $this->input->post('jenis'),
			'nama' => $this->input->post('nama'),
			'stok' => $this->input->post('stok'),
			'harga_awal' => $this->input->post('harga_awal'),
			'harga_akhir' => $this->input->post('harga_awal') * $this->input->post('stok'),
			'deskripsi' => $this->input->post('deskripsi'),
		];
		
		$this->Model->Update_Barang($idB, $barang);

		redirect('c_profil_vendor_barang/index/'.$idU.'/'.$idV);
	}

	public function deleteBarang($idB, $idU, $idV){
		$barang = [
			'deleted' => 1,
		];
		
		$this->Model->Update_Barang($idB, $barang);

		redirect('c_profil_vendor_barang/index/'.$idU.'/'.$idV);
	}

}