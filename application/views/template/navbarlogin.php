<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo $judul ?></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/libraries/bootstrap/css/bootstrap.css">

    <!-- Icon -->
    <script src="https://kit.fontawesome.com/c37dbc5499.js" crossorigin="anonymous"></script>

    <!-- slick -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/libraries/slick/slick/slick-theme.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/libraries/slick/slick/slick.css">

    <!-- CSS file -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/styles/profilPage_biodataDiri.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/styles/login.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/styles/main.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/styles/detailbarang.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/styles/profilevendor.css">

</head>
<body>

    <!-- navbar login -->

    <nav class="row navbar fixed-top navbar-expand-md navbar-dark bg-primary navbar-shadow">
            <div class="container-fluid">
                <a href="<?php echo base_url(). 'C_Home/index/'.$pelanggan->Get_Id_pelanggan() ?>" class="navbar-brand ml-5">
                    <img class="d-flex align-items-center" src="<?= base_url() ?>assets/assets/images/title.svg" alt="logo SEVEN">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHome">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarHome">
                    <form class="form-inline my-2">
                        <div class="input-group ml-5">
                            <input type="text" class="form-control px-3" placeholder="Cari vendor atau barang" aria-label="searchBarang" aria-describedby="btnSearchBarang">
                            <div class="input-group-append">
                                <button class="btn btn-search px-3 py-1" id="btnSearchBarang">
                                    <img class="d-flex align-items-center" src="<?= base_url() ?>assets/assets/images/serch_icon.svg" alt="SearchIcon">
                                </button>
                            </div>
                        </div>
                    </form>
    
                    <ul class="navbar-nav ml-4">
                        <li class="nav-item mx-md-2">
                            <a href="#" class="nav-link text-center px-3 icon-navbar">
                                <i class="fas fa-bell"></i>
                            </a>
                        </li>
                        <li class="nav-item mx-md-2">
                            <a href="<?php echo base_url(). 'c_History/index/' .$pelanggan->Get_Id_pelanggan()?>" class="nav-link text-center px-3 icon-navbar">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </li>
                        <div class="vr mx-3"></div>
                        <li class="nav-item mx-md-2">
                            <a href="<?php echo base_url(). 'c_profil_biodataDiri/index/'.$pelanggan->Get_Id_pelanggan().'/vendor' ;?>" class="nav-link text-center pl-3 pr-5 icon-navbar">
                                <i class="fas fa-store"></i>
                                <span class=" ml-2 title-navbar">
                                    <?php 
                                        if (!$pelanggan->Get_Id_vendor()) {
                                            echo "Vendor";
                                        }else{
                                            echo $vendor->Get_Nama_vendor();
                                        }
                                    ?>
                                </span>
                            </a>
                        </li>
                        <li class="nav-item mx-md-2">
                            <a href="<?php echo base_url(). 'c_profil_biodataDiri/index/'.$pelanggan->Get_Id_pelanggan() ;?>" class="nav-link d-flex align-items-center pl-3 pr-5 icon-navbar">
                                <img class="foto-profil" src="https://via.placeholder.com/50" alt="">
                                <span class="ml-2 title-navbar"><?php echo $pelanggan->Get_Nama() ?></span>
                            </a>
                        </li>
                        <li class="nav-item mx-md-1">
                            <a href="<?php echo base_url(). 'C_Home' ?>" class="nav-link d-flex align-items-center pl-3 pr-5 icon-navbar">
                                <span class="ml-2 title-navbar">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>