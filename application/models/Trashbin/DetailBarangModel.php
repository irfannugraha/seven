<?php

class DetailBarangModel extends CI_Model
{
    public function getBarangById($id_barang)
    {
        $this->db->where('id_barang', $id_barang);
        $data = $this->db->get('barang')->row_array();

        $sumRating = $this->db->select_sum('rating')->where('id_barang', $id_barang)->get('rating')->row_array();
        $jumRating = $this->db->where('id_barang', $id_barang)->from('rating')->count_all_results();
        $hasil = floor($sumRating['rating']/$jumRating);
        $data['jumlahRating'] = $hasil;

        $place =  $this->db->where('id_vendor', $data['id_vendor'])->get('vendor')->row_array();
        $data['vendorPlace'] = $place['daerah_vendor'];
        $data['vendorName'] = $place['nama_vendor'];
        $data['vendorImg'] = $place['profile_img'];


        $produk_img =  $this->db->where('id_barang', $data['id_barang'])->get('produk_img')->result_array();
        $data['produk_img'] = $produk_img;

        return $data;
    }
}
