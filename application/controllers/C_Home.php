<?php

class C_Home extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        // $this->load->model('HomeModel');
        $this->load->model('class/Model');
    }

    public function index($idU=null){
        $data = [
            'judul' => 'SEVEN - Sewa Vendor',
            'carouselimg' => $this->Model->get_CarouselImage(),
            'popular' => $this->Model->Get_Barang(null, null, 'rating', 5),
            'lokasiPopular' => [],
            'lokasiLastest' => [],
            'lastest' => $this->Model->Get_Barang(null, null, 'date_upload', 5)
        ];

        foreach ($data['popular'] as $i => $popular) {
            $temp = $this->Model->Get_Vendor($popular->Get_Id_vendor());
            array_push( $data['lokasiPopular'], $temp[0]->Get_Daerah_vendor() );
        };

        foreach ($data['lastest'] as $i => $lastest) {
            $temp = $this->Model->Get_Vendor($lastest->Get_Id_vendor());
            array_push( $data['lokasiLastest'], $temp[0]->Get_Daerah_vendor() );
        };        


        if ($idU){
            $data['pelanggan'] = $this->Model->Get_Pelanggan($idU)[0];
            $data['vendor'] = $this->Model->Get_Vendor($data['pelanggan']->Get_Id_vendor())[0];
            $this->load->view('template/navbarlogin', $data);
        }
        else{
            $data['pelanggan'] = null;
            $this->load->view('template/navbarnologin', $data);
        }

        $this->load->view('home/index', $data);
        $this->load->view('template/footer');
    }

}