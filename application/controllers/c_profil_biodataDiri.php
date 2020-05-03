<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class c_profil_biodataDiri extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('m_profil_biodataDiri');
		$this->load->model('class/Model');
	}
 
	public function index($idU, $tab='biodata'){
		$data['pelanggan'] = $this->Model->Get_Pelanggan($idU)[0];
		$idV = $data['pelanggan'] -> Get_Id_Vendor();
		$data['vendor'] = $this->Model->Get_Vendor($idV)[0];
		$data['judul'] = "Biodata Diri - ". $data['pelanggan'] -> Get_Nama();

		$data['tab'] = $tab;

		$this->load->view('template/navbarlogin', $data);
		$this->load->view('v_profil_biodataDiri',$data);
		$this->load->view('template/footer');
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
				$data = [
					"nama" => $this->input->post('nama'),
					"tanggal_lahir" => $this->input->post('tanggal_lahir'),
					"jenis_kelamin" => $this->input->post('jenis_kelamin'),
				];
				break;
			case 'emtel':
				$data = [
					"email" => $this->input->post('email'),
					"no_hp" => $this->input->post('telepon'),
				];
				break;
			case 'alamat':
				$data = [
					"alamat" => $this->input->post('alamat'),
				];
				break;
		}
		$this->Model->update_pelanggan($idU, $data);
		redirect('c_profil_biodataDiri/index/'.$idU);
	}

	public function update_vendor($status, $idU, $idV){
		switch ($status) {
			case 'informasi':
				$data = [
					"nama_vendor" => $this->input->post('nama_vendor'),
					"deskripsi_vendor" => $this->input->post('deskripsi_vendor'),
					"hp_vendor" => $this->input->post('telepon_vendor'),
					// "header_vendor" => $gambar,
				];
				break;
			case 'emtel':
				$data = [
					"email_vendor" => $this->input->post('email_vendor'),
					"hp_vendor" => $this->input->post('telepon_vendor'),
				];
				break;
			case 'alamat':
				$data = [
					"alamat_vendor" => $this->input->post('alamat_vendor'),
				];
				break;
		}
		$this->Model->update_vendor($idV, $data);
		redirect('c_profil_biodataDiri/index/'.$idU);
	}

	public function tambah_vendor($idU){
		$idV = $this->Model->Get_Last('id_vendor', 'vendor');
		$idV = $this->Model->Auto_IncrementId($idV);

		redirect('c_registerVendor/index/'.$idV.'/'.$idU);
	}

	// public function delete_vendor($id){
	// 	$idV = ($this->m_profil_biodataDiri->get_user($id))[0]->Get_Id_vendor();
	// 	$this->m_profil_biodataDiri->delete_vendor($idV);
		
	// 	redirect('c_profil_biodataDiri/index/'.$id);
	// }
	
}