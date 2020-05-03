<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class c_admin extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->helper('url');
	}
 
	public function index(){
		$id = "ADM001"; // PERBAIKI !!!
		$data['user'] = $this->m_admin->show_user();
		$data['admin'] = $this->m_admin->show_admin($id);
		$data['judul'] = 'Seven - admin ' .$data['admin'][0]['nama'];
		$this->load->view('v_admin', $data);
	}

	
	public function delete_user($id){
		$id = "ADM001";
		$this->m_admin->delete_user($id);
	}
}