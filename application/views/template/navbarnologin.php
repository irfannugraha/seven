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
    <!-- navbar no login -->
    
    <nav class="row navbar fixed-top navbar-expand-md navbar-dark bg-primary navbar-shadow">
        <div class="container-fluid">
            <a href="<?= base_url()?>" class="navbar-brand ml-5">
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

                <ul class="navbar-nav ml-5">
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Rental produk</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#" class="nav-link">Sewa jasa</a>
                    </li>
                    <div class="vr mx-3"></div>
                </ul>

                <form class="form-inline" method="post" action="<?php echo base_url(). 'c_login/index' ?>">
                    <button class="btn btn-login mx-md-2 px-4 py-1">
                        Masuk
                    </button>
                </form>
                <form class="form-inline" method="post" action="<?php echo base_url(). 'c_register/index' ?>">
                    <button class="btn btn-register mx-md-2 px-4 py-1">
                        Daftar
                    </button>
            </form>
            </div>
        </div>
    </nav>
