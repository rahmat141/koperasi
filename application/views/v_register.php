<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url().'asset/masuk/vendor/fontawesome-free/css/all.min.css'?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url().'asset/masuk/css/sb-admin-2.min.css" rel="stylesheet'?>">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
            <!-- Nav Item - Alerts -->
            <!--===============================================================================================-->  
    <link rel="icon" type="izmage/png" href="<?php echo base_url().'asset/login/images/icons/favicon.ico'?>"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/bootstrap/css/bootstrap.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/animate/animate.css'?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/css-hamburgers/hamburgers.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/animsition/css/animsition.min.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/select2/select2.min.css'?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/vendor/daterangepicker/daterangepicker.css'?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/css/util.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/login/css/main.css'?>">
<!--===============================================================================================-->
          
<div class="container-fluid">
  <div class="limiter">
        <div class="container-login100">

<div class="limiter">
  <div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                    Registrasi Anggota
                </h4>
            </div>
            <div class="card-body">
                <!-- <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="foto">Foto</label>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-3">
                               <img class="img-profile rounded-circle" src="<?php echo base_url('gambar/anggota1.png'); ?>" height = "100">
                            </div>
                            <div class="col-9">
                                <input type="file" name="foto" id="foto">
                            </div>
                        </div>
                    </div>
                </div>
                <hr> -->
        <form action="<?= base_url() ?>index.php/Login/register_aksi" method="POST" enctype="multipart/form-data">
          <table style="margin: 20px auto;">
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="nama">Nama Lengkap</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user-circle-o"></i></span>
                            </div>
                            <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama Lengkap...">
                            <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="nama">Username</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-user"></i></span>
                            </div>
                            <input name="username" id="username" type="text" class="form-control" placeholder="Username...">
                            <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="nama">Password</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-lock"></i></span>
                            </div>
                            <input name="password" id="password" type="password" class="form-control" placeholder="Password...">
                            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="nama">Ulangi Password</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-lock"></i></span>
                            </div>
                            <input name="password2" id="password2" type="password" class="form-control" placeholder="Password...">
                            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="nama">Jenis Kelamin</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-mars"></i></span>
                            </div>
                            <input value="Laki-laki" name="jenis_kelamin" id="jenis_kelamin" type="radio" >Laki-Laki
                            <input value="Perempuan" name="jenis_kelamin" id="jenis_kelamin" type="radio" >Perempuan
                            
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="no_telp">Email</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-envelope"></i></span>
                            </div>
                            <input name="email" id="email" type="text" class="form-control" placeholder="Email...">
                            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="no_telp">Nomor HP</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-phone"></i></span>
                            </div>
                            <input name="no_hp" id="no_hp" type="number" class="form-control" placeholder="Nomor HP...">
                            <?= form_error('no_hp', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="email">NIK</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-id-card"></i></span>
                            </div>
                            <input name="nik" id="nik" type="number" class="form-control" placeholder="NIK...">
                            <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="email">KTP</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-id-card"></i></span>
                            </div>
                            <input name="ktp" id="ktp" type="file" class="form-control" placeholder="KTP...">
                            <?= form_error('ktp', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <label class="col-md-3 text-md-right" for="no_telp">Alamat</label>
                    <div class="col-md-9">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-fw fa-home"></i></span>
                            </div>
                            <input name="alamat" id="alamat" type="text" class="form-control" placeholder="Alamat...">
                            <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row form-group">
                    <div class="col-md-8 offset-md-3">
                        <input type="submit" name="submit" value="Register" class="btn btn-primary">
                        <input type="reset" name="reset" class="btn btn-secondary">
                    </div>
                </div>
                <?= form_close(); ?>
                <div class="row form-group">
                    <div class="col-md-8 offset-md-3">
                       <a href="<?= base_url() ?>index.php/Login">Sudah punya akun? Login</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
  </div>


          
        </div>
    </div>
</div>


  <!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/login/vendor/jquery/jquery-3.2.1.min.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/login/vendor/animsition/js/animsition.min.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/login/vendor/bootstrap/js/popper.js'?>"></script>
    <script src="<?php echo base_url().'asset/login/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/login/vendor/select2/select2.min.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/login/vendor/daterangepicker/moment.min.js'?>"></script>
    <script src="<?php echo base_url().'asset/login/vendor/daterangepicker/daterangepicker.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/login/vendor/countdowntime/countdowntime.js'?>"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url().'asset/login/js/main.js'?>"></script>

	 <!-- Footer -->
  <!--     <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Koperasi </span>
          </div>
        </div>
      </footer> -->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?= site_url('Admin/logout') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url().'asset/vendor/jquery/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'asset/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url().'asset/vendor/jquery-easing/jquery.easing.min.js'?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url().'asset/js/sb-admin-2.min.js'?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url().'asset/vendor/chart.js/Chart.min.js'?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url().'asset/js/demo/chart-area-demo.js'?>"></script>
  <script src="<?php echo base_url().'asset/js/demo/chart-pie-demo.js'?>"></script>
</body>
</html>