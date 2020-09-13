<?php

class Transaksi
{
    var $id_transaksi;
    var $id_pelanggan;
    var $id_barang;
    var $tanggal_pembayaran;
    var $tanggal_pengembalian;
    var $tanggal_pemesanan;
    var $foto_bukti;
    var $biaya;
    var $deleted;

    public function __construct($idTransaksi, $idPelanggan, $idBarang, $tanggal_pemesanan, $tanggal_pengembalian, $tanggal_pembayaran=null, $foto_bukti=null, $biaya=null, $deleted=0){
        $this->id_transaksi = $idTransaksi;
        $this->id_pelanggan = $idPelanggan;
        $this->id_barang = $idBarang;
        $this->tanggal_pembayaran = $tanggal_pembayaran;
        $this->tanggal_pengembalian = $tanggal_pengembalian;
        $this->tanggal_pemesanan = $tanggal_pemesanan;
        $this->foto_bukti = $foto_bukti;
        $this->biaya = $biaya;
        $this->deleted = $deleted;
    }

    // setter
    public function Set_Id_transaksi($idTransaksi){
        $this->id_transaksi = $idTransaksi;
    }

    public function Set_Id_pelanggan($idPelanggan){
        $this->id_pelanggan = $idPelanggan;
    }

    public function Set_Id_barang($idBarang){
        $this->id_barang = $idBarang;
    }

    public function Set_Tanggal_pembayaran($tanggal_pembayaran){
        $this->tanggal_pembayaran = $tanggal_pembayaran;
    }

    public function Set_Tanggal_pengembalian($tanggal_pengembalian){
        $this->tanggal_pengembalian = $tanggal_pengembalian;
    }

    public function Set_Tanggal_pemesanan($tanggal_pemesanan){
        $this->tanggal_pemesanan = $tanggal_pemesanan;
    }

    public function Set_Foto_bukti($foto_bukti){
        $this->foto_bukti = $foto_bukti;
    }

    public function Set_Biaya($biaya){
        $this->biaya = $biaya;
    }

    public function Set_Deleted($deleted){
        $this->deleted = $deleted;
    }

    // getter
    public function Get_Id_transaksi(){
        return $this->id_transaksi;
    }

    public function Get_Id_pelanggan(){
        return $this->id_pelanggan;
    }

    public function Get_Id_barang(){
        return $this->id_barang;
    }

    public function Get_tanggal_pembayaran(){
        return $this->tanggal_pembayaran;
    }

    public function Get_Tanggal_pengembalian(){
        return $this->tanggal_pengembalian;
    }

    public function Get_Tanggal_pemesanan(){
        return $this->tanggal_pemesanan;
    }

    public function Get_Foto_bukti(){
        return $this->foto_bukti;
    }

    public function Get_Biaya(){
        return $this->biaya;
    }

    public function Get_Deleted(){
        return $this->deleted;
    }

}