<?php

class Barang extends CI_Model
{
    var $id_barang;
    var $id_vendor;
    var $nama;
    var $jenis;
    var $stock;
    var $harga_awal;
    var $harga_akhir;
    var $deskripsi;
    var $foto;
    var $rating;
    var $date_upload;

    public function __construct($idBarang, $idVendor, $namaBarang, $jenisBarang, $stock, $harga_awal, $harga_akhir, $deskripsi, $foto, $rating, $date_upload){
        $this->id_barang = $idBarang;
        $this->id_vendor = $idVendor;
        $this->nama = $namaBarang;
        $this->jenis = $jenisBarang;

        $this->stock = $stock;
        $this->harga_awal = $harga_awal;
        $this->harga_akhir = $harga_akhir;
        $this->deskripsi = $deskripsi;
        $this->foto = $foto;
        $this->rating = $rating;
        $this->date_upload = $date_upload;
    }

    // setter
    public function Set_Id_barang($id_barang)
    {
        $this->id_barang = $id_barang;

    }
    public function Set_Id_vendor($id_vendor)
    {
        $this->id_vendor = $id_vendor;
    }

    public function Set_Nama($nama)
    {
        $this->nama = $nama;
    }

    public function Set_Jenis($jenis)
    {
        $this->jenis = $jenis;
    }

    public function Set_Stock($stock)
    {
        $this->stock = $stock;
    }

    public function Set_Harga_awal($harga_awal)
    {
        $this->harga_awal = $harga_awal;
    }

    public function Set_Harga_akhir($harga_akhir)
    {
        $this->harga_akhir = $harga_akhir;
    }

    public function Set_Deskripsi($deskripsi)
    {
        $this->deskripsi = $deskripsi;
    }

    public function Set_Foto($foto)
    {
        $this->foto = $foto;
    }

    public function Set_Rating($rating)
    {
        $this->rating = $rating;
    }

    public function Set_Date_upload($date_upload)
    {
        $this->date_upload = $date_upload;
    }

    // getter   
    public function Get_Id_barang()
    {
        return $this->id_barang;
    }

    public function Get_Id_vendor()
    {
        return $this->id_vendor;
    }

    public function Get_Nama()
    {
        return $this->nama;
    }

    public function Get_Jenis()
    {
        return $this->jenis;
    }

    public function Get_Stock()
    {
        return $this->stock;
    }

    public function Get_Harga_awal()
    {
        return $this->harga_awal;
    }

    public function Get_Harga_akhir()
    {
        return $this->harga_akhir;
    }

    public function Get_Deskripsi()
    {
        return $this->deskripsi;
    }

    public function Get_Foto()
    {
        return $this->foto;
    }

    public function Get_Rating()
    {
        return $this->rating;
    }

    public function Get_Date_upload()
    {
        return $this->date_upload;
    }

}