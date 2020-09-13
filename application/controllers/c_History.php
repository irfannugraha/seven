<?php
 
class c_History extends CI_Controller {
	function __construct(){
		parent::__construct();
		// $this->load->model('m_profil_vendor_barang');
		$this->load->model('class/Model');
		$this->load->helper('url');
	}
 
	public function index($idU){
		$data = [
			'pelanggan' => $this->Model->Get_Pelanggan($idU)[0],
			'transaksi' => $this->Model->Get_Transaksi($idU, 'id_pelanggan'),
			'barang' => []
		];
		$data['vendor'] = $this->Model->Get_Vendor($data['pelanggan']->Get_Id_vendor())[0];

		foreach ($data['transaksi'] as $key => $transaksi) {
			if ($transaksi->Get_Deleted() == 1) {
				unset($data['transaksi'][$key]);
			}else{
				$barang = $this->Model->Get_Barang( $transaksi->Get_Id_barang() )[0];
				array_push($data['barang'], $barang);
			}
		}

		$data['judul'] = "Profile - History";

		$this->load->view('template/navbarlogin', $data);
		$this->load->view('v_history',$data);
		$this->load->view('template/footer');
	}

	public function delete_transaksi($idT, $idU){
		$transaksi = [
			'deleted' => 1,
		];

		$this->Model->Update_transaksi($idT, $transaksi);

		redirect('c_History/index/'.$idU);
	}

}