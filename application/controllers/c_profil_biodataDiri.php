<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class c_profil_biodataDiri extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_profil_biodataDiri');
		$this->load->helper('url');
	}
 
	public function index($idU){
		$data['judul'] = "Profile - Biodata Diri";
		$data['pelanggan'] = $this->m_profil_biodataDiri->get_user($idU);
		$idV = $data['pelanggan'][0]['id_vendor'];
		$data['vendor'] = $this->m_profil_biodataDiri->get_vendor($idV);
		$this->load->view('template/navbarlogin', $data);
		$this->load->view('v_profil_biodataDiri',$data);
		$this->load->view('template/footer');
	}
	
	public function tambahAkun(){
		$this->m_profil_biodataDiri->insert_akun();
	}

	public function update_pelanggan($status, $idU){
		switch ($status) {
			case 'gambar':
				$config['upload_path'] = base_url()."assets/i/pelanggan_pict";
				$config['allowed_types'] = 'jpg|png|jpeg|gif';

				$this->load->library('upload', $config);

				print_r($this->upload->do_upload('gambar'));

				if ($this->upload->do_upload('gambar')) {
					echo 'sukses';
					$file = $this->upload->data();
					$gambar = $file['file_name'];
					$this->m_profil_biodataDiri->update_image($idU, $gambar);	
				}else {
					echo "Gagal";
				};
				break;
			case 'informasi':
				$this->m_profil_biodataDiri->update_user_informasiUmum($idU);
				break;
			case 'emtel':
				$this->m_profil_biodataDiri->update_user_emailtelp($idU);
				break;
			case 'alamat':
				$this->m_profil_biodataDiri->update_user_alamat($idU);
				break;
		}
		redirect('c_profil_biodataDiri/index/'.$idU);
	}

	public function update_vendor($status, $idU){
		$data['pelanggan'] = $this->m_profil_biodataDiri->get_user($idU);
		$idV = $data['pelanggan'][0]['id_vendor'];
		switch ($status) {
			case 'informasi':
				$this->m_profil_biodataDiri->update_vendor_informasiUmum($idV);
				break;
			case 'emtel':
				$this->m_profil_biodataDiri->update_vendor_emailTelp($idV);
				break;
			case 'alamat':
				$this->m_profil_biodataDiri->update_vendor_alamat($idV);
				break;
		}
		redirect('c_profil_biodataDiri/index/'.$idU);
	}

	public function tambah_vendor($id){
		$this->m_profil_biodataDiri->update_vendor_status($id);
		$idV = ($this->m_profil_biodataDiri->get_user($id))[0]['id_vendor'];
		redirect('c_registerVendor/index/'.$idV.'/'.$id);
	}

	public function delete_vendor($id){
		$idV = ($this->m_profil_biodataDiri->get_user($id))[0]['id_vendor'];
		$this->m_profil_biodataDiri->delete_vendor($idV);
		redirect('c_profil_biodataDiri/index/'.$id);
	}
}