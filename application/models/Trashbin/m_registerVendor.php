<?php

class m_registerVendor extends CI_model
{
    public function __construct(){
        $this->load->database();
    }

    public function insert_akun($id){
        $bio = [
            "nama" => $this->input->post('nama', true),
            "no_hp" => $this->input->post('telepon', true),
            "alamat" => $this->input->post('alamat', true),
            "id_vendor" => $this->auto_increment($this->getLastId('vendor', 'vendor')),
        ];
        $id = [
            "id_vendor" => $bio['id_vendor'],
        ];
        $this->db->insert('vendor', $bio);

        $this->db->where('id_pelanggan', $id);
        $this->db->update('pelanggan', $id);
    }

    public function getLastId($user, $table){
        $this->db->select('max(id_'.$user.')');
        $data = $this->db->get($table);
        $data = $data->result_array();
        return $data[0]['max(id_'.$user.')'];
    }

    public function auto_increment($lastId){
        $arr = str_split($lastId, 3);
        $arr[1] = sprintf('%03d', ($arr[1] + 1));
        return implode($arr);
    }

}