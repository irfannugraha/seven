<?php

class Home extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('HomeModel');
        $this->load->model('class/Model');
    }

    public function index(){
    $data = [
        'judul' => 'SEVEN - Sewa Vendor',
        'carouselimg' => $this->HomeModel->get_CarouselImage(),
        'popular' => $this->Model->Sort_By_Defined('rating', 'barang', 5),
        'lokasiPopular' => [],
        'lokasiLastest' => [],
        'lastest' => $this->Model->Sort_By_Defined('date_upload', 'barang', 5)
        // 'jasa' => $this->HomeModel->get_lastSewaJasa()
    ];

    foreach ($data['popular'] as $i => $popular) {
        $vendor = $this->Model->Get_Vendor($popular['id_vendor']);
        array_push( $data['lokasiPopular'], $vendor[0]['daerah_vendor'] );
    };

    foreach ($data['lastest'] as $i => $lastest) {
        $vendor = $this->Model->Get_Vendor($lastest['id_vendor']);
        array_push( $data['lokasiLastest'], $vendor[0]['daerah_vendor'] );
    };
    
    $this->load->view('template/navbarnologin', $data);
    $this->load->view('home/index', $data);
    $this->load->view('template/footer', $data);
    }

}