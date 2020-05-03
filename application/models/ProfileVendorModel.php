<?php

class ProfileVendorModel extends CI_Model
{
    public function getVendorbyId($id_vendor)
    {
        $this->db->where('id_vendor', $id_vendor);
        $data = $this->db->get('vendor')->row_array();

        return $data;
    }

    public function getProdukByVendor($id_vendor, $limit, $start)
    {
        $this->db->where('status', 'available');
        $this->db->where('jenis', 'rentalproduk');
        $this->db->where('id_vendor', $id_vendor);
        $data = $this->db->get('barang', $limit, $start)->result_array();
        for ($i=0; $i < count($data); $i++) { 
            $sumRating = $this->db->select_sum('rating')->where('id_barang', $data[$i]['id_barang'])->get('rating')->row();
            $jumRating = $this->db->where('id_barang', $data[$i]['id_barang'])->from('rating')->count_all_results();
            $hasil = floor($sumRating->rating/$jumRating);
            $data[$i]['jumlahRating'] = $hasil;

            $first_img = $this->db->where('id_barang', $data[$i]['id_barang'])->get('produk_img')->row_array();
            $data[$i]['foto'] = $first_img['url_image'];

            $place =  $this->db->where('id_vendor', $data[$i]['id_vendor'])->get('vendor')->row_array();
            $data[$i]['vendorPlace'] = $place['daerah_vendor'];

        }
        return $data;
    }

    public function countProdukVendor($id_vendor)
    {
        $this->db->where('status', 'available');
        $this->db->where('jenis', 'rentalproduk');
        $this->db->where('id_vendor', $id_vendor);
        return $this->db->get('barang')->num_rows();
    }

}
