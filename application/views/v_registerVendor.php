<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $judul?></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/register-vendor.css">
</head>

<body>
    <!-- Start: Registration Form with Photo -->
    <div class="register" style="background-image: url(&quot;<?php echo base_url()?>assets/img/background%20page%20vendor.png&quot;);background-position: center;background-size: contain;background-repeat: no-repeat;">
    <a href="<?= base_url().'C_Home/index/'.$id_pelanggan ?>"><h2 class="text-center" style="font-family: Mermaid; font-size: 50px; color: #0D0C52;">SEVEN</h2></a>
        <!-- Start: Form Container -->
        <div class="form-container">
            <form method="post" action="<?php echo base_url(). 'c_registerVendor/tambahAkun/' .$id_vendor. '/' .$id_pelanggan; ?>">
                <h1>Daftar Vendor</h1>
                <div class="form-group"><label class="form-label">Nama Vendor</label><input class="form-control name" type="text" placeholder="Nama vendor" name="nama" maxlength="20" required>
                    <div>
                        <!-- <label class="form-info">Nama Tidak dapat diubah</label> -->
                        <div class="float-right form-countable"><label class="form-info countable">0</label><label class="form-info">/20</label></div>
                    </div>
                </div>
                <div class="form-group"><label class="form-label">No Telepon</label><input class="form-control" type="number" name="telepon" placeholder="Nomor vendor" required></div>
                <div class="form-group"><label class="form-label">Alamat Lengkap</label><textarea class="form-control" name="alamat" placeholder="JL. contoh jalan, kota, provinsi, post id" required></textarea></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Daftar</button></div>
            </form>
        </div>
        <!-- End: Form Container -->
    </div>
    <!-- End: Registration Form with Photo -->
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/registerVendor.js"></script>
</body>

</html>