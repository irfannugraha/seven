<?php

class m_profil_vendor_barang extends CI_model
{
    public function __construct(){
        $this->load->database();
    }

    public function get_barang($id){
        $this->db->where('id_vendor',$id);
        $data = $this->db->get('barang');
        return $data->result_array();
    }

    public function insertBarang($id_vendors){
        $barang = [
            // "foto" => base64_encode(file_get_contents(($this->input->post('fotoBarang', true)))),
            "nama" => $this->input->post('namaBarang', true),
            "harga" => $this->input->post('hargaBarang', true),
            "deskripsi" => $this->input->post('deskBarang', true),
            "stok" => $this->input->post('stokBarang', true),
            "id_barang" => $this->auto_increment($this->getLastId()),
            "id_vendor" => $id_vendors,
        ];
        $this->db->insert('barang',$barang);
    }

    public function updateBarang($id_barang){
        $barang = [
            // "foto" => base64_encode(file_get_contents(($this->input->post('fotoBarang', true)))),
            "nama" => $this->input->post('namaBarang', true),
            "harga" => $this->input->post('hargaBarang', true),
            "deskripsi" => $this->input->post('deskBarang', true),
            "stok" => $this->input->post('stokBarang', true),
        ];
        $this->db->where('id_barang',$id_barang);
        $this->db->update('barang', $barang);
    }

    public function deleteBarang($id_barang){
        $this->db->where('id_barang', $id_barang);
        $this->db->delete('barang');
    }

    public function get_LastId($user, $table){
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