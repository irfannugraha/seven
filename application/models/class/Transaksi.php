<?php

class Transaksi
{
    var $id_transaksi;
    var $id_pelanggan;
    var $id_barang;
    var $tanggal_pembayaran;
    var $tanggal_pemesanan;

    public function __construct($idTransaksi, $idPelanggan, $idBarang, $tglPemesanan, $tglPembayaran=null){
        $this->id_transaksi = $idTransaksi;
        $this->id_pelanggan = $idPelanggan;
        $this->id_barang = $idBarang;
        $this->tanggal_pembayaran = $tglPembayaran;
        $this->tanggal_pemesanan = $tglPemesanan;
    }

    // public function __construct(){
    // }

    public function View_Transaksi(){
        
    }

    // setter
    public function Set_IdTransaksi($idTransaksi){
        $this->idTransaksi = $idTransaksi;
    }

    public function Set_IdPelanggan($idPelanggan){
        $this->idPelanggan = $idPelanggan;
    }

    public function Set_IdBarang($idBarang){
        $this->idBarang = $idBarang;
    }

    public function Set_TglPembayaran($tglPembayaran){
        $this->tglPembayaran = $tglPembayaran;
    }

    public function Set_TglPemesanan($tglPemesanan){
        $this->tglPemesanan = $tglPemesanan;
    }

    public function Set_Status($status){
        $this->status = $status;
    }

    // getter
    public function Get_IdTransaksi(){
        return $this->idTransaksi;
    }

    public function Get_IdPelanggan(){
        return $this->idPelanggan;
    }

    public function Get_IdBarang(){
        return $this->idBarang;
    }

    public function Get_NamaBarang(){
        return $this->tglPembayaran;
    }

    public function Get_JenisBarang(){
        return $this->tglPemesanan;
    }

    public function Get_Status(){
        return $this->status;
    }

}