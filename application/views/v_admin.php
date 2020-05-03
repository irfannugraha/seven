<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <title><?php echo $judul?></title>
</head>
<body id="page-top">
    <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <?php foreach ($admin as $admin) :  ?>
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <li class="nav-item dropdown no-arrow">
                                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">
                                        <span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $admin['nama'] ?></span>
                                        <img class="border rounded-circle img-profile" src="<?php echo base_url() ?>assets/img/avatars/avatar1.jpeg">
                                    </a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu">
                                        <a class="dropdown-item" role="presentation" href="<?php echo base_url() ."c_login" ?>">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout
                                        </a>
                                    </div>
                                </li>
                            </li>
                        </ul>
                    </div>
                </nav>
                <?php endforeach ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="text-primary font-weight-bold m-0" id="header">User list</h6>
                            </div>
                            <ul class="list-group list-group-flush">
                                <?php foreach ($user as $user) : ?>
                                <li class="list-group-item">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2">
                                            <h6 class="mb-0"><strong><?php echo $user['bio']['nama'];?></strong></h6><span class="text-xs">
                                                <?php echo $user['newId'];?>
                                            </span></div>
                                        <div class="col-auto">
                                            <a href="#" data-toggle="tooltip" id="phone" title="<?php echo $user['bio']['no_hp'];?>" onclick="copyToClipboard('#inPhone')" >
                                                <i class="icon ion-ios-telephone"></i>
                                                <a id="inPhone" hidden><?php echo $user['bio']['no_hp'];?><a>
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#" data-toggle="tooltip" id="email" title="<?php echo $user['email'] ?>" onclick="copyToClipboard('#inEmail')" >
                                                <i class="fas fa-envelope"></i>
                                                <a id="inEmail" hidden><?php echo $user['email'] ?><a>
                                            </a>
                                        </div>
                                        <div class="col-auto">
                                            <div class="divider"></div>
                                        </div>
                                        <div class="col-auto">
                                            <a class="remove-icon" href="<?php echo base_url(). 'c_admin/delete_user/' .$user['newId']."/".$admin['id_admin']; ?>">
                                                <i class="fa fa-remove"></i>
                                            </a>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <a href="#" onclick="">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </div> -->
                                    </div>
                                </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © 2019 SEVEN - Sewa Vendor</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" id="scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="<?php echo base_url() ?>assets/js/theme.js"></script>
</body>
</html>