<?php

class c_Barang extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        // $this->load->model('DetailBarangModel');
        $this->load->model('class/Model');
    }

    public function index($id_barang, $idU=null){
        // $data['detailbrng'] = $this->DetailBarangModel->getBarangById($id_barang);
        $data['detailBarang'] = $this->Model->Get_Barang($id_barang)[0];
        $data['detailVendor'] = $this->Model->Get_Vendor( ($data['detailBarang']->Get_Id_vendor()) )[0];
        $data['judul'] = $data['detailBarang'] -> Get_Nama()." | Seven";

        $data['pelanggan'] = null;
        if ($idU){
            $data['pelanggan'] = $this->Model->Get_Pelanggan($idU)[0];
            $data['vendor'] = $this->Model->Get_Vendor($data['pelanggan']->Get_Id_vendor())[0];
            $data['cek_keranjang'] = $this->any_Undone_Transaksi($data['pelanggan']->Get_Id_pelanggan());
            $this->load->view('template/navbarlogin', $data);
        }
        else{
            $this->load->view('template/navbarnologin', $data);
            $data['cek_keranjang'] = null;
        }

        $this->load->view('detailbarang/detailbarang', $data);
        $this->load->view('template/footer');
    }

    public function transaksi($idB, $idU){
        $id = $this->Model->Get_Last('id_transaksi', 'transaksi');
        $id = $this->Model->Auto_IncrementId($id);
        $transaksi = new Transaksi(
            $id,
            $idU,
            $idB,
            date("Y-m-d"),
            date("Y-m-d", strtotime('+30 days')),
            null,
            null,
            $this->input->post('total')
        );
        $this->Model->Insert_Transaksi($transaksi);

        redirect('c_History/index/'.$idU);
    }

    public function any_Undone_Transaksi($idU){
        $transaksi = $this->Model->Get_Transaksi( $idU, 'id_pelanggan');
        foreach ($transaksi as $transaksi) {
            if (!$transaksi->Get_Tanggal_pembayaran()) {
                return 1;
            }else
                return 0;
        }
    }

}
