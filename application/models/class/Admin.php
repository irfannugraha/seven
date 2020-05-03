<?php

class Admin extends CI_Model
{
    var $username;
    var $password;

    public function __construct($username,$password){
        $this->username = $username;
        $this->password = $password;
    }

    // public function __construct(){
    // }

    // setter
    public function Set_Username($username){
        $this->username = $username;
    }

    public function Set_Password($password){
        $this->password = $password;
    }

    // getter
    public function Get_Username(){
        return $this->username;
    }

    public function Get_Password(){
        return $this->password;
    }


    public function Delete_User(){

    }

    public function Delete_Pemesanan(){
        
    }


}