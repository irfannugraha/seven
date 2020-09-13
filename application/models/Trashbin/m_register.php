<?php

class m_register extends CI_model
{
    public function __construct(){
        $this->load->database();
    }

    public function insertAkun(){
        $pelanggan = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "password" => $this->input->post('password', true),
            "last_update" => date("Y - m - d"),
            "id_pelanggan" => $this->auto_increment($this->getLastId()),
        ];
        $this->db->insert('pelanggan',$pelanggan);
    }

    public function getLastId(){
        $this->db->select('max(id_pelanggan)');
        $data = $this->db->get('pelanggan');
        $data = $data->result_array();
        return $data[0]['max(id_pelanggan)'];
    }

    public function auto_increment($lastId){
        $arr = str_split($lastId, 3);
        $arr[1] = sprintf('%03d', ($arr[1] + 1));
        return implode($arr);
    }

}