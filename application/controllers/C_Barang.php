<?php

class c_Barang extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        // $this->load->model('DetailBarangModel');
        $this->load->model('class/Model');
    }

    public function index($id_barang, $idU=null)
    {
        // $data['detailbrng'] = $this->DetailBarangModel->getBarangById($id_barang);
        $data['detailBarang'] = $this->Model->Get_Barang($id_barang)[0];
        $data['detailVendor'] = $this->Model->Get_Vendor( ($data['detailBarang']->Get_Id_vendor()) )[0];
        $data['judul'] = $data['detailBarang'] -> Get_Nama()." | Seven";
        

        if ($idU){
            $data['pelanggan'] = $this->Model->Get_Pelanggan($idU)[0];
            $data['vendor'] = $this->Model->Get_Vendor($data['pelanggan']->Get_Id_vendor())[0];
            $this->load->view('template/navbarlogin', $data);
        }
        else
            $this->load->view('template/navbarnologin', $data);

        $this->load->view('detailbarang/detailbarang', $data);
        $this->load->view('template/footer');
    }

}
