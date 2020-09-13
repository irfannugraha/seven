<?php

class Barang
{
    var $id_barang;
    var $id_vendor;
    var $jenis;
    var $nama;
    var $stok;
    var $harga_awal;
    var $harga_akhir;
    var $deskripsi;
    var $foto;
    var $rating;
    var $date_upload;
    var $deleted;

    public function __construct($idBarang, $idVendor, $jenisBarang, $namaBarang, $stok, $harga_awal, $harga_akhir, $deskripsi, $date_upload, $foto='assets/assets/images/no_image.jpg', $rating=0, $deleted=0){
        $this->id_barang = $idBarang;
        $this->id_vendor = $idVendor;
        $this->nama = $namaBarang;
        $this->jenis = $jenisBarang;
        $this->stok = $stok;
        $this->harga_awal = $harga_awal;
        $this->harga_akhir = $harga_akhir;
        $this->deskripsi = $deskripsi;
        $this->foto = $foto;
        $this->rating = $rating;
        $this->date_upload = $date_upload;
        $this->deleted = $deleted;
    }

    // setter
    public function Set_Id_barang($id_barang){
        $this->id_barang = $id_barang;

    }

    public function Set_Id_vendor($id_vendor){
        $this->id_vendor = $id_vendor;
    }

    public function Set_Nama($nama){
        $this->nama = $nama;
    }

    public function Set_Jenis($jenis){
        $this->jenis = $jenis;
    }

    public function Set_stok($stok){
        $this->stok = $stok;
    }

    public function Set_Harga_awal($harga_awal){
        $this->harga_awal = $harga_awal;
    }

    public function Set_Harga_akhir($harga_akhir){
        $this->harga_akhir = $harga_akhir;
    }

    public function Set_Deskripsi($deskripsi){
        $this->deskripsi = $deskripsi;
    }

    public function Set_Foto($foto){
        $this->foto = $foto;
    }

    public function Set_Rating($rating){
        $this->rating = $rating;
    }

    public function Set_Date_upload($date_upload){
        $this->date_upload = $date_upload;
    }

    public function Set_Deleted($deleted){
        $this->deleted = $deleted;
    }

    // getter   
    public function Get_Id_barang(){
        return $this->id_barang;
    }

    public function Get_Id_vendor(){
        return $this->id_vendor;
    }

    public function Get_Nama(){
        return $this->nama;
    }

    public function Get_Jenis(){
        return $this->jenis;
    }

    public function Get_Stok(){
        return $this->stok;
    }

    public function Get_Harga_awal(){
        return $this->harga_awal;
    }

    public function Get_Harga_akhir(){
        return $this->harga_akhir;
    }

    public function Get_Deskripsi(){
        return $this->deskripsi;
    }

    public function Get_Foto(){
        return $this->foto;
    }

    public function Get_Rating(){
        return $this->rating;
    }

    public function Get_Date_upload(){
        return $this->date_upload;
    }

    public function Get_Deleted(){
        return $this->deleted;
    }

}