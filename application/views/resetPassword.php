<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" href="<?php echo base_url() . 'asset/foto/logokoperasibaru.jpg' ?>" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"
            href="<?php echo base_url() . 'asset/login/vendor/bootstrap/css/bootstrap.min.css' ?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"
            href="<?php echo base_url() . 'asset/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css' ?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"
            href="<?php echo base_url() . 'asset/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css' ?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"
            href="<?php echo base_url() . 'asset/login/vendor/animate/animate.css' ?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"
            href="<?php echo base_url() . 'asset/login/vendor/css-hamburgers/hamburgers.min.css' ?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"
            href="<?php echo base_url() . 'asset/login/vendor/animsition/css/animsition.min.css' ?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"
            href="<?php echo base_url() . 'asset/login/vendor/select2/select2.min.css' ?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css"
            href="<?php echo base_url() . 'asset/login/vendor/daterangepicker/daterangepicker.css' ?>">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'asset/login/css/util.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'asset/login/css/main.css' ?>">
        <!--===============================================================================================-->
    </head>

    <body>
        <?php
echo $this->session->flashdata('sukses');
?>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
                    <form class="login100-form validate-form" action="<?=base_url()?>index.php/Login/changePassword"
                        method="POST">
                        <span class="login100-form-title p-b-10">
                            Reset Password
                        </span>


                        <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="password" placeholder="password">
                            <span class="focus-input100-1"></span>
                            <span class="focus-input100-2"></span>
                        </div>
                        <?=form_error('password', '<small class="text-danger pl-3">', '</small>');?>

                        <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="password2" placeholder="confirm password">
                            <span class="focus-input100-1"></span>
                            <span class="focus-input100-2"></span>
                        </div>
                        <?=form_error('password2', '<small class="text-danger pl-3">', '</small>');?>

                        <div class="container-login100-form-btn m-t-20">
                            <button class="login100-form-btn">
                                Reset Password
                            </button>


                    </form>
                    <br>
                </div>
                <br>
                <?php if ($this->session->flashdata('pesan')) {?>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('pesan'); ?>
                </div>
                <?php }?>

                <a href="<?=base_url()?>index.php/Login">Sudah Terdaftar? login disini</a>
            </div>
        </div>

        <!--===============================================================================================-->
        <script src="<?php echo base_url() . 'asset/login/vendor/jquery/jquery-3.2.1.min.js' ?>"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url() . 'asset/login/vendor/animsition/js/animsition.min.js' ?>"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url() . 'asset/login/vendor/bootstrap/js/popper.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/login/vendor/bootstrap/js/bootstrap.min.js' ?>"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url() . 'asset/login/vendor/select2/select2.min.js' ?>"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url() . 'asset/login/vendor/daterangepicker/moment.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/login/vendor/daterangepicker/daterangepicker.js' ?>"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url() . 'asset/login/vendor/countdowntime/countdowntime.js' ?>"></script>
        <!--===============================================================================================-->
        <script src="<?php echo base_url() . 'asset/login/js/main.js' ?>"></script>

    </body>

</html>