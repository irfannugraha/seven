<?php

class Admin extends CI_Model
{
    var $id_admin;
    var $nama;
    var $alamat;
    var $no_hp;
    var $email;
    var $password;

    public function __construct($id_admin, $nama, $alamat, $no_hp, $email, $password){
        $this->id_admin = $id_admin;
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->no_hp = $no_hp;
        $this->email = $email;
        $this->password = $password;
    }

    // setter
    public function Set_id_admin($id_admin){
        $this->id_admin = $id_admin;
    }

    public function Set_nama($nama){
        $this->nama = $nama;
    }

    public function Set_alamat($alamat){
        $this->alamat = $alamat;
    }

    public function Set_no_hp($no_hp){
        $this->no_hp = $no_hp;
    }

    public function Set_email($email){
        $this->email = $email;
    }

    public function Set_password($password){
        $this->password = $password;
    }

    // getter
    public function Get_id_admin(){
        return $this->id_admin;
    }

    public function Get_nama(){
        return $this->nama;
    }

    public function Get_alamat(){
        return $this->alamat;
    }

    public function Get_no_hp(){
        return $this->no_hp;
    }

    public function Get_email(){
        return $this->email;
    }

    public function Get_password(){
        return $this->password;
    }    


    public function Delete_User(){

    }

    public function Delete_Pemesanan(){
        
    }


}