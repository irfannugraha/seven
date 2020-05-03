<?php

class HomeModel extends CI_Model
{
    public function get_CarouselImage()
    {
        return $this->db->get('carousel_image')->result_array();
    }

    public function get_popularProduk()
    {
        $this->db->where('status', 'available');
        $this->db->order_by('jumrating', 'DESC');
        $this->db->limit(5);
        $data = $this->db->get('barang')->result_array();
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

    public function get_lastRentalProduk()
    {
        $this->db->where('status', 'available');
        $this->db->where('jenis', 'rentalproduk');
        $this->db->order_by('date_upload', 'DESC');
        $this->db->limit(5);
        $data = $this->db->get('barang')->result_array();
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

    public function get_lastSewaJasa()
    {
        $this->db->where('status', 'available');
        $this->db->where('jenis', 'sewajasa');
        $this->db->order_by('date_upload', 'DESC');
        $this->db->limit(5);
        $data = $this->db->get('barang')->result_array();
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
}