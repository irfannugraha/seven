<?php

class Vendor extends CI_Model
{
    var $id_vendor;
    var $nama_vendor;
    var $hp_vendor;
    var $alamat_vendor;

    var $daerah_vendor;
    var $profile_img;
    var $header_vendor;
    var $deskripsi_vendor;
    var $email_vendor;
    var $deleted;

    // var $barang;

    public function __construct($id_vendor, $nama_vendor, $hp_vendor, $alamat_vendor, $daerah_vendor=null, $profile_img=null, $header_vendor=null, $deskripsi_vendor=null, $email_vendor=null, $deleted=0){
        $this->id_vendor = $id_vendor;
        $this->nama_vendor = $nama_vendor;
        $this->alamat_vendor = $alamat_vendor;
        $this->daerah_vendor = $daerah_vendor;
        $this->hp_vendor = $hp_vendor;
        $this->profile_img = $profile_img;
        $this->header_vendor = $header_vendor;
        $this->deskripsi_vendor = $deskripsi_vendor;
        $this->email_vendor = $email_vendor;
        $this->deleted = $deleted;
    }

    public function Add_Barang($barang){
        // $this->barang = new Barang();
    }

    public function View_Barang(){

    }

    public function Edit_Barang(){

    }

    public function Delete_Barang(){
        
    }

    // setter
    public function Set_Id_vendor($id_vendor){
        $this->id_vendor = $id_vendor;
    }

    public function Set_Nama_vendor($nama_vendor){
        $this->nama_vendor = $nama_vendor;
    }

    public function Set_Alamat_vendor($alamat_vendor){
        $this->alamat_vendor = $alamat_vendor;
    }

    public function Set_Daerah_vendor($daerah_vendor){
        $this->daerah_vendor = $daerah_vendor;
    }

    public function Set_Hp_vendor($hp_vendor){
        $this->hp_vendor = $hp_vendor;
    }

    public function Set_Profile_img($profile_img){
        $this->profile_img = $profile_img;
    }

    public function Set_Header_vendor($header_vendor){
        $this->header_vendor = $header_vendor;
    }

    public function Set_Deskripsi_vendor($deskripsi_vendor){
        $this->deskripsi_vendor = $deskripsi_vendor;
    }

    public function Set_Email_vendor($email_vendor){
        $this->email_vendor = $email_vendor;
    }

    public function Set_Deleted($deleted){
        $this->deleted = $deleted;
    }

    // getter
    public function Get_Id_vendor(){
        return $this->id_vendor;
    }

    public function Get_Nama_vendor(){
        return $this->nama_vendor;
    }

    public function Get_Alamat_vendor(){
        return $this->alamat_vendor;
    }

    public function Get_Daerah_vendor(){
        return $this->daerah_vendor;
    }

    public function Get_Hp_vendor(){
        return $this->hp_vendor;
    }

    public function Get_Profile_img(){
        return $this->profile_img;
    }

    public function Get_Header_vendor(){
        return $this->header_vendor;
    }

    public function Get_Deskripsi_vendor(){
        return $this->deskripsi_vendor;
    }

    public function Get_Email_vendor(){
        return $this->email_vendor;
    }

    public function Get_Deleted(){
        return $this->deleted;
    }


}