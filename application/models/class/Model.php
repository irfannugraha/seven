<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

class Model extends CI_Model
{

    public function __construct(){
        $this->load->database();
    }

    // insert
    public function Insert_Pelanggan($pelanggan){
        $this->db->insert('pelanggan',$pelanggan);
    }

    public function Insert_Vendor($vendor){
        $this->db->insert('vendor',$vendor);
    }

    public function Insert_Barang($barang){
        $this->db->insert('barang', $barang);
    }

    public function Insert_Transaksi($transaksi){
        $this->db->insert('transaksi', $transaksi);
    }

    // read
    public function Get_Pelanggan($Value=null, $Where=null, $sortBy=null, $limit=null, $order='DESC'){
        if ($Value) {
            if (!$Where) {
                $Where = 'id_pelanggan';
            }
            $this->db->where($Where, $Value);
        }

        if($sortBy){
            $this->db->order_by($sortBy, $order);
            $this->db->limit($limit);
        }

        $data = $this->db->get('pelanggan')->result_array();

        $pelangganArray = [];
        foreach ($data as $data) {
            $pelanggan = new Pelanggan(
                $data['id_pelanggan'],
                $data['email'],
                $data['password'],
                $data['nama'],
                $data['alamat'],
                $data['no_hp'],
                $data['tanggal_lahir'],
                $data['jenis_kelamin'],
                $data['last_update'],
                $data['profile_image'],
                $data['id_vendor'],
                $data['deleted']
            );
            array_push($pelangganArray, $pelanggan);
        }

        return $pelangganArray;
    }

    public function Get_Vendor($Value=null, $Where=null, $sortBy=null, $limit=null, $order='DESC'){
        if ($Value) {
            if (!$Where) {
                $Where = 'id_vendor';
            }
            $this->db->where($Where, $Value);
        }

        if($sortBy){
            $this->db->order_by($sortBy, $order);
            $this->db->limit($limit);
        }

        $data = $this->db->get('vendor')->result_array();

        $VendorArray = [];
        foreach ($data as $data) {
            $Vendor = new Vendor(
                $data['id_vendor'],
                $data['nama_vendor'],
                $data['alamat_vendor'],
                $data['daerah_vendor'],
                $data['hp_vendor'],
                $data['profile_img'],
                $data['header_vendor'],
                $data['deskripsi_vendor'],
                $data['email_vendor'],
                $data['deleted']
            );
            array_push($VendorArray, $Vendor);
        }
        return $VendorArray;
    }

    public function Get_Transaksi($Value=null, $Where=null, $sortBy=null, $limit=null, $order='DESC'){
        if ($Value) {
            if (!$Where) {
                $Where = 'id_transaksi';
            }
            $this->db->where($Where, $Value);
        }

        if($sortBy){
            $this->db->order_by($sortBy, $order);
            $this->db->limit($limit);
        }

        $data = $this->db->get('transaksi')->result_array();

        $TransaksiArray = [];
        foreach ($data as $data) {
            $Transaksi = new Transaksi(
                $data['id_transaksi'],
                $data['id_pelanggan'],
                $data['id_barang'],
                $data['tanggal_pembayaran'],
                $data['tanggal_pemesanan'],
                $data['deleted']
            );
            array_push($TransaksiArray, $Transaksi);
        }
        return $TransaksiArray;
    }

    public function Get_Barang($Value=null, $Where=null, $sortBy=null, $limit=null, $order='DESC'){
        if ($Value) {
            if (!$Where) {
                $Where = 'id_barang';
            }
            $this->db->where($Where, $Value);
        }

        if($sortBy){
            $this->db->order_by($sortBy, $order);
            $this->db->limit($limit);
        }

        $data = $this->db->get('barang')->result_array();

        $BarangArray = [];
        foreach ($data as $data) {
            $Barang = new Barang(
                $data['id_barang'],
                $data['id_vendor'],
                $data['jenis'],
                $data['nama'],
                $data['stok'],
                $data['harga_awal'],
                $data['harga_akhir'],
                $data['deskripsi'],
                $data['date_upload'],
                $data['foto'],
                $data['rating'],
                $data['deleted']
            );
            array_push($BarangArray, $Barang);
        }
        return $BarangArray;
    }

    public function Get_Admin($Value=null, $Where=null, $sortBy=null, $limit=null, $order='DESC'){
        if ($Value) {
            if (!$Where) {
                $Where = 'id_admin';
            }
            $this->db->where($Where, $Value);
        }

        if($sortBy){
            $this->db->order_by($sortBy, $order);
            $this->db->limit($limit);
        }

        $data = $this->db->get('admin')->result_array();

        $AdminArray = [];
        foreach ($data as $data) {
            $Admin = new Admin(
                $data['id_admin'],
                $data['nama'],
                $data['alamat'],
                $data['no_hp'],
                $data['email'],
                $data['password']
            );
            array_push($AdminArray, $Admin);
        }
        return $AdminArray;
    }


    public function Get_Last($id, $table){
        $this->db->select('max(' . $id . ')');
        $data = $this->db->get($table);
        $data = $data->result_array();

        return $data[0]['max(' . $id . ')'];
    }

    public function Auto_IncrementId($lastId){
        $arr = str_split($lastId, 3);
        $arr[1] = sprintf('%03d', ($arr[1] + 1));

        return implode($arr);
    }

    // Update
    public function Update_Pelanggan($id, $data){
        $this->db->where('id_pelanggan',$id);
        $this->db->update('pelanggan', $data);
    }

    public function Update_Vendor($id, $data){
        print_r($data);
        $this->db->where('id_vendor',$id);
        $this->db->update('vendor', $data);
    }

    public function Update_Transaksi($id, $data){
        $this->db->where('id_transaksi',$id);
        $this->db->update('transaksi', $data);
    }

    public function Update_Barang($id, $data){
        $this->db->where('id_barang',$id);
        $this->db->update('barang', $data);
    }

    public function Update_Admin($id, $data){
        $this->db->where('id_admin',$id);
        $this->db->update('admin', $data);
    }

}