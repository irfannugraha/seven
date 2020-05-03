<?php

class Pelanggan
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

    public function __construct($idPelanggan, $idVendor=null, $email, $password, $nama, $alamat, $telepon, $tanggal_lahir, $jenis_kelamin, $last_update, $profil_image){
        $this->id_pelanggan = $idPelanggan;
        $this->id_vendor = $idVendor;
        $this->nama = $nama;
        $this->tanggal_lahir = $tanggal_lahir;
        $this->jenis_kelamin = $jenis_kelamin;
        $this->email = $email;
        $this->password = $password;
        $this->last_update = $last_update;
        $this->alamat = $alamat;
        $this->no_hp = $telepon;
        $this->profil_image = $profil_image;
    }

    public function Create_Vendor($idVendor, $rating){
        // $this->idVendor = $idVendor;
        // $vendor = new Vendor($this->idVendor, $rating);
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