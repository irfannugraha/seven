<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $judul?></title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/libraries/bootstrap/css/bootstrap.css">
    <script src="https://kit.fontawesome.com/c37dbc5499.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/styles/login.css">
</head>

<body>
    <!-- Start: Registration Form with Photo -->
    <div class="register" style="background-image: url(&quot;<?php echo base_url() ?>assets/assets/images/Group%202.png&quot;);background-position: center;background-size: contain;background-repeat: no-repeat;"><h2 class="text-center">SEVEN</h2>
        <!-- Start: Form Container -->
        <div class="form-container">
            <form method="post" action="<?php echo base_url(). 'c_login/login'; ?>">
                <h1>Masuk</h1>
                <div class="form-group"><label class="form-label">Email</label><input class="form-control" type="email" name="email" placeholder="example@email.com">
                    <label id="statusEmail" style="color: red" class="form-label d-lg-none">Email tidak terdaftar</label>
                </div>
                <div class="form-group"><label class="form-label">Kata sandi</label><input class="form-control" name="password" type="password">
                    <label id="statusPass" style="color: red" class="form-label d-lg-none">Password salah</label>
                </div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Masuk</button></div>
                <div class="form-group">
                    <div class="separator"><span>atau login dengan</span></div>
                </div>
                <div class="form-group">
                    <a class="Lupa_Sandi" href="<?php echo base_url(). 'c_login/send'; ?>">Lupa Kata Sandi?</a>
                </div>
                <div class="form-group"><button class="btn btn-outline-primary btn-block" type="submit"><i class="fab fa-google"></i>Google</button></div>
                <div class="form-group"><button class="btn btn-outline-primary btn-block" type="submit"><i class="fab fa-facebook-square"></i>Facebook</button></div>
                <div class="form-group">
                    <div class="already"><span>Belum punya akun?&nbsp;</span><a href="<?php echo base_url(). 'c_register'; ?>">Daftar</a></div>
                </div>
            </form>
        </div>
        <!-- End: Form Container -->
    </div>
    <!-- End: Registration Form with Photo -->
    <script src="<?= base_url() ?>/assets/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>/assets/libraries/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?= base_url() ?>/assets/libraries/bootstrap/js/bootstrap.js"></script>
    <?php
        if ($status == 'emailSalah') {
            echo '
            <script>
                function myfunction() {
                    var d = document.getElementById("statusEmail");
                    d.classList.remove("d-lg-none");
                };
                myfunction();
            </script>';
        }else if($status == 'passSalah'){
            echo '
            <script>
                function myfunction() {
                    var d = document.getElementById("statusPass");
                    d.classList.remove("d-lg-none");
                };
                myfunction();
            </script>';
        }
    ?>
</body>

</html>