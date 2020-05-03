<?php

class coba extends CI_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->model('class/Model');
    }

    public function index(){
        // $data['img'] = '/assets/assets/images/Twitter.svg';
        $this->load->view('coba');
    }


    public function exUpdate(){
        $ven = [
            "rating" => 1
        ];
        $this->Model->Update_Vendor("VEN003", $ven);
    }

    public function exaRead(){
        $pel = $this->Model->Read_Pelanggan();
        for ($i=0; $i < count($pel); $i++) { 
            print_r($pel[1]);
        }
    }

    public function exampleInsert(){
        $id = $this->Model->Auto_IncrementId($this->Model->Read_LastId('id_transaksi', 'transaksi'));
        $pelanggan = new Transaksi(
            $id,
            "PEL001",
            "BAR002",
            date("Y-m-d")
        );
        $this->Model->Insert_Transaksi($pelanggan);
    }
}