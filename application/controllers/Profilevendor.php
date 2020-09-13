<?php

class Profilevendor extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        // $this->load->model('ProfileVendorModel');
        $this->load->model('class/Model');
    }


    public function index($idV, $idU=null)
    {
        $data['profileVen'] = $this->Model->Get_Vendor($idV)[0];
        $data['produkVen'] = $this->Model->Get_Barang($idV, 'id_vendor');

        $this->load->library('pagination');
        
        $config['base_url'] = 'http://localhost/sewavendor/profilevendor/index';
        $config['total_rows'] = count($data['produkVen']);
        $config['per_page'] = 15;

        $config['full_tag_open'] = "<nav aria-label='Page navigation example'><ul class='pagination justify-content-center mt-5 mb-0'>";
        $config['full_tag_close'] = "</ul></nav>";

        $config['previous_link'] = "<i class='fa fa-chevron-left'></i>";
        $config['previous_tag_open'] = "<li class='page-item mx-3'><a class='page-link' href='#'>";
        $config['previous_tag_close'] = "</a></li>";

        $config['next_link'] = "<i class='fa fa-chevron-right'></i>";
        $config['next_tag_open'] = "<li class='page-item mx-3'><a class='page-link' href='#'>";
        $config['next_tag_close'] = "</a></li>";

        $config['cur_tag_open'] = "<li class='page-item active'><a class='page-link' href='#'>";
        $config['cur_tag_close'] = "</a></li>";

        $config['num_tag_open'] = "<li class='page-item'>";
        $config['num_tag_close'] = "</li>";

        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(4);
        $data['judul'] = $data['profileVen']->Get_Nama_vendor()." | Seven";
        
        if ($idU){
            $data['pelanggan'] = $this->Model->Get_Pelanggan($idU)[0];
            $data['vendor'] = $this->Model->Get_Vendor($data['pelanggan']->Get_Id_vendor())[0];
            $this->load->view('template/navbarlogin', $data);
        }
        else{
            $data['pelanggan'] = null;
            $this->load->view('template/navbarnologin', $data);
        }

        $this->load->view('profilevendor/profilevendor', $data);
        $this->load->view('template/footer');
    }
}
