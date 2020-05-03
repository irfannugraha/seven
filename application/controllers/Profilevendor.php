<?php

class Profilevendor extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('ProfileVendorModel');
    }


    public function index($id_vendor)
    {
        $this->load->library('pagination');
        
        $config['base_url'] = 'http://localhost/sewavendor/profilevendor/index';
        $config['total_rows'] = $this->ProfileVendorModel->countProdukVendor($id_vendor);
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
        $data['profileVen'] = $this->ProfileVendorModel->getVendorbyId($id_vendor);
        $data['produkVen'] = $this->ProfileVendorModel->getProdukByVendor($id_vendor, $config['per_page'], $data['start']);
        $data['judul'] = $data['profileVen']['nama_vendor']." | Seven";
        $this->load->view('template/navbarnologin', $data);
        $this->load->view('profilevendor/profilevendor', $data);
        $this->load->view('template/footer');
    }
}
