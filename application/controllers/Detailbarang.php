<?php

class Detailbarang extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        // $this->load->model('DetailBarangModel');
        $this->load->model('class/Model');
    }

    public function index($id_barang)
    {
        // $data['detailbrng'] = $this->DetailBarangModel->getBarangById($id_barang);
        $data['detailBarang'] = $this->Model->Get_Barang($id_barang)[0];
        $data['judul'] = $data['detailBarang']['nama']." | Seven";
        print_r($data);
        $this->load->view('template/navbarnologin', $data);
        $this->load->view('detailbarang/detailbarang', $data);
        $this->load->view('template/footer');
    }

}
