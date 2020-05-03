<?php

class Vendor extends CI_Model
{
    var $id_pelanggan;
    var $id_vendor;
    var $nama;
    var $tanggal_lahir;
    var $jenis_kelamin;
    var $email;
    var $password;
    var $last_update;
    var $alamat;
    var $no_hp;
    var $profil_image;

    // var $barang;

    public function __construct($id_pelanggan, $id_vendor, $nama, $tanggal_lahir, $jenis_kelamin, $email, $password, $last_update, $alamat, $no_hp, $profil_image){
        $this->id_pelanggan = $id_pelanggan;
        $this->id_vendor = $id_vendor;
        $this->nama = $nama;
        $this->tanggal_lahir = $tanggal_lahir;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->email = $email;
        $this->password = $password;
        $this->last_update = $last_update;
        $this->alamat = $alamat;
        $this->no_hp = $no_hp;
        $this->profil_image = $profil_image;
    }

    // public function __construct(){
    // }

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
    public function Set_Id_pelanggan($id_pelanggan)
    {
        $this->id_pelanggan = $id_pelanggan;
    }

    public function Set_Id_vendor($id_vendor)
    {
        $this->id_vendor = $id_vendor;
    }

    public function Set_Nama($nama)
    {
        $this->nama = $nama;
    }

    public function Set_Tanggal_lahir($tanggal_lahir)
    {
        $this->tanggal_lahir = $tanggal_lahir;
    }

    public function Set_Jenis_kelamin($jenis_kelamin)
    {
        $this->jenis_kelamin = $jenis_kelamin;
    }

    public function Set_Email($email)
    {
        $this->email = $email;
    }

    public function Set_Password($password)
    {
        $this->password = $password;
    }

    public function Set_Last_update($last_update)
    {
        $this->last_update = $last_update;
    }

    public function Set_Alamat($alamat)
    {
        $this->alamat = $alamat;
    }

    public function Set_No_hp($no_hp)
    {
        $this->no_hp = $no_hp;
    }

    public function Set_Profil_image($profil_image)
    {
        $this->profil_image = $profil_image;
    }


    // getter
    public function Get_Id_pelanggan()
    {
        return $this->id_pelanggan;
    }

    public function Get_Id_vendor()
    {
        return $this->id_vendor;
    }

    public function Get_Nama()
    {
        return $this->nama;
    }

    public function Get_Tanggal_lahir()
    {
        return $this->tanggal_lahir;
    }

    public function Get_Jenis_kelamin()
    {
        return $this->jenis_kelamin;
    }

    public function Get_Email()
    {
        return $this->email;
    }

    public function Get_Password()
    {
        return $this->password;
    }

    public function Get_Last_update()
    {
        return $this->last_update;
    }

    public function Get_Alamat()
    {
        return $this->alamat;
    }

    public function Get_No_hp()
    {
        return $this->no_hp;
    }

    public function Get_Profil_image()
    {
        return $this->profil_image;
    }


}