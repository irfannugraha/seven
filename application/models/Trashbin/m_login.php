<?php

class m_login extends CI_model
{
    public function __construct(){
        $this->load->database();
    }

    public function cek_email($email){
        $this->db->where('email', $email);
        $data = $this->db->get('pelanggan');
        $data = $data->result_array();
        if ( ! $data) {
            $this->db->where('email', $email);
            $data = $this->db->get('admin');
            $data = $data->result_array();
        }
        return $data;
    }

    public function get_id($email, $pass){
        $this->db->where(array('email' => $email, 'password' => $pass));
        $data = $this->db->get('pelanggan');
        $data = $data->result_array();
        if ( ! $data) {
            $this->db->where(array('email' => $email, 'password' => $pass));
            $data = $this->db->get('admin');
            $data = $data->result_array();
        }
        return $data;
    }
    
    public function updatePassword($id){
        $data = [
            "password" => $this->input->post('konfPassword'),
        ];
        $this->db->where('id_pelanggan', $id);
        $this->db->update('pelanggan', $data);
    }
}