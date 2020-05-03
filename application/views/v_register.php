<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $judul?></title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/styles/Register.css">
</head>

<body>
<div class="register" style="background-image: url(&quot;<?php echo base_url() ?>assets/assets/images/Group%201.png&quot;);background-position: center;background-size: contain;background-repeat: no-repeat;">
    <h2 class="text-center">SEVEN</h2>
    <div class="form-container">
        <form method="post" action="<?php echo base_url(). 'c_register/tambahAkun/'; ?>">
            <h1>Daftar</h1>
            <div class="form-group"><label class="form-label">Nama Lengkap</label><input class="form-control" type="text" placeholder="Nama anda" style="background-repeat: no-repeat;" name="nama" required></div>
            <div class="form-group"><label class="form-label">Email</label><input class="form-control" type="email" name="email" placeholder="example@email.com" name="email" required></div>
            <div class="form-group"><label class="form-label">Kata sandi</label><input class="form-control" type="password" name="password" required></div>
            <div class="form-group"><label class="form-label">Konfirmasi kata sandi</label><input class="form-control" type="password" name="passwordKonf" required>
                <label id="status" style="color: red" class="form-label d-lg-none">Kata sandi berbeda</label>
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Daftar</button></div>
            <div class="form-group">
                <div class="separator"><span>atau login dengan</span></div>
            </div>
            <div class="form-group"><button class="btn btn-outline-primary btn-block google" type="submit">Google</button></div>
            <div class="form-group"><button class="btn btn-outline-primary btn-block facebook" type="submit">Facebook</button></div>
            <div class="form-group">
                <div class="already"><span>Sudah punya akun?&nbsp;</span><a href="<?php echo base_url(). 'c_login'; ?>">Masuk</a></div>
            </div>            
        </form>
    </div>
</div>
    <script src="<?= base_url() ?>/assets/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>/assets/libraries/bootstrap/js/bootstrap.js"></script>
    <?php
        if ($status == 'passSalah') {
            echo '
            <script>
                function myfunction() {
                    var d = document.getElementById("status");
                    d.classList.remove("d-lg-none");
                };
                myfunction();
            </script>';
        }
    ?>
</body>

</html>