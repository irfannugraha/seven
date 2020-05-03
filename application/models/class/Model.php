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
    public function Get_Pelanggan($id = null){
        if ($id) {
            $this->db->where('id_pelanggan',$id);
        }
        $data = $this->db->get('pelanggan');
        return $data->result_array();
    }

    public function Get_Vendor($id = null){
        if ($id) {
            $this->db->where('id_vendor',$id);
        }
        $data = $this->db->get('vendor');
        return $data->result_array();
    }

    public function Get_Transaksi($id = null){
        if ($id) {
            $this->db->where('id_transaksi',$id);
        }
        $data = $this->db->get('transaksi');
        return $data->result_array();
    }

    public function Get_Barang($id = null){
        if ($id) {
            $this->db->where('id_barang',$id);
        }
        $data = $this->db->get('barang');
        return $data->result_array();
    }

    public function Get_Admin($id = null){
        if ($id) {
            $this->db->where('id_admin',$id);
        }
        $data = $this->db->get('admin');
        return $data->result_array();
    }


    public function Get_LastId($id, $table){
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

    public function Sort_By_Defined($sortBy, $table, $limit, $order='DESC'){
        $this->db->where('deleted', 0);
        $this->db->order_by($sortBy, $order);
        $this->db->limit($limit);
        $data = $this->db->get($table)->result_array();

        return $data;
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