    <!DOCTYPE html>
<html>
<head>
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

  <!-- Themify FOnt-->
  <link href="<?php echo base_url().'asset/tifont/themify-icons.css" rel="stylesheet'?>">
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url().'index.php/Dashboard'?>">
        <img src="<?= base_url().'asset/foto/logokoperasibaru.jpg' ?>" style="width: 2rem; height: 2rem;">
        <div style="width: 50%;">
        <b>Koperasi Bunga Biraeng</b>
        </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url().'index.php/Dashboard'?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        <!-- Interface -->
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <?php include('sidebar.php'); ?>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->



      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">1</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Notifikasi
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <!-- <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a> -->
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $this->session->nama ?></span>
                <img class="img-profile rounded-circle" src="<?php echo base_url('gambar/anggota1.png'); ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?= base_url() ?>index.php/Login/lihat_akun/<?=$this->session->id_anggota?>">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Akun
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Pengaturan
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Log Aktifitas
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Keluar
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
          <!-- Content Row -->
        

          <!-- Content Row -->

           <div class="row">
           <div class="col-xl-4 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Pinjaman</h6>
                </div>
                <br>
                <!-- Card Body -->
                <div class="text">
                  <div class="text text-gray-900">
                    <center><img src="<?php echo base_url('gambar/pinjam.png')?>" width="100" height="100"><br><br>
                    <b>Jumlah Pinjaman = <?php foreach ($pinjaman as $key) { ?>
                      Rp<?php echo number_format($key->jml_pinjaman,0,',','.')?></b><br>
                    <?php } ?>
                    <b><a class="collapse-item" href="<?= base_url() ?>index.php/Pinjaman/show_pinjaman/<?=$this->session->id_anggota?>" style="text-decoration: none">-> Lihat Pinjaman <-</a></b></center>
                  </div>
                </div>
              </div>
            </div>
          
           <div class="col-xl-4 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Simpanan</h6>
                </div>
                <br>
                <!-- Card Body -->
                <div class="text">
                  <div class="text text-gray-900">
                    <center><img src="<?php echo base_url('gambar/savings.png')?>" width="100" height="100"><br><br>
                    <b>Simpanan Sukarela = <?php foreach ($totalSimpananSukarela as $total) { ?>
                      Rp<?php echo number_format($total->jml_simpanansukarela,0,',','.')?></b><br>
                    <?php } ?>
                     <b> Simpanan Wajib = <?php foreach ($simpananW as $key) { ?>
                      Rp<?php echo number_format($key->jml_simpanan,0,',','.')?></b><br>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Utang</h6>
                </div>
                <br>
                <!-- Card Body -->
                <div class="text">
                  <div class="text text-gray-900">
                    <center><img src="<?php echo base_url('gambar/debt (2).png')?>" width="100" height="100"><br><br>
                    <b>Jumlah Utang = <?php foreach ($angsuran as $key) { ?>
                      Rp<?php echo number_format($key->total,0,',','.')?></b><br>
                    <?php } ?>
                    <b><a class="collapse-item" href="<?= base_url() ?>index.php/Angsuran/show_angsuran/<?=$this->session->id_anggota?>" style="text-decoration: none">-> Lihat Angsuran <-</a></b></center>
                  </div>
                </div>
              </div>
            </div>

<div class="col-xl-4 col-lg-6">
            <div class="card shadow mb-4">
              <!-- Card Header - Dropdown -->
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Angsuran</h6>
              </div>
              <br>
              <!-- Card Body -->
              <div class="text">
                <div class="text-center text-gray-900 mb-4">
                  <img src="<?php echo base_url('gambar/pinjam.png') ?>" width="100" height="100"><br><br>
                  <b>Telah Melakukan Angsuran ke : <?= $total_angsuran ?></b><br>
                  <!-- <b>Telah Melakukan Angsuran ke : <?php foreach ($angsuran
                    as $key) { ?>
                    <?php echo $this->db->count_all('angsuran'); ?></b><br>
                  <?php } ?> -->

                </div>
              </div>
            </div>
          </div>

      
<div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header bg-primary py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-white">Jenis Simpanan</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4 pb-2">
                    <div class="chartjs-size-monitor">
                        <div class="chartjs-size-monitor-expand">
                            <div class=""></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink">
                            <div class=""></div>
                        </div>
                    </div>
                    <canvas id="myPieChart" width="302" height="245" class="chartjs-render-monitor" style="display: block; width: 302px; height: 245px;"></canvas>
                </div>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-danger"></i> Simpanan Pokok
                    </span>
                    <span class="mr-2">
                        <i class="fas fa-circle text-warning"></i> Simpanan Wajib
                    </span> <br>
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Simpanan Sukarela
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
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
          <h5 class="modal-title" id="exampleModalLabel">Yakin ingin Keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih Keluar Jika Kamu Ingin Mengakhiri Sesi Ini</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="<?= site_url('Login/logout') ?>">Keluar</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->

  

  <script src="<?php echo base_url().'asset/masuk/vendor/jquery/jquery.min.js'?>"></script>
  <script src="<?php echo base_url().'asset/masuk/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url().'asset/masuk/vendor/jquery-easing/jquery.easing.min.js'?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url().'asset/masuk/js/sb-admin-2.min.js'?>"></script>
  <script src="<?php echo base_url().'asset/js/bootstrap-notify.js'?>"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url().'asset/masuk/vendor/chart.js/Chart.min.js'?>"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url().'asset/masuk/js/demo/chart-area-demo.js'?>"></script>
  <script src="<?php echo base_url().'asset/masuk/js/demo/chart-pie-demo.js'?>"></script>

  <script type="text/javascript">
      // Pie Chart Example
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ["Simpanan Pokok", "Simpanan Wajib", "Simpanan Sukarela"],
            datasets: [{
              data: [<?php foreach ($simpananP as $key) { ?>
                      <?php echo $key->jml_simpanan;?>
                    <?php } ?>, <?php foreach ($simpananW as $key) { ?>
                      <?php echo $key->jml_simpanan;?>
                    <?php } ?>, <?php foreach ($totalSimpananSukarela as $total) { ?>
                      <?php echo $total->jml_simpanansukarela;?>
                    <?php } ?>],
              backgroundColor: ['#e74a3b', '#f6c23e', '#4e73df'],
              hoverBackgroundColor: ['#c43c29', '#e8b533', '#3e5fbd'],
              hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
          },
          options: {
            maintainAspectRatio: false,
            tooltips: {
              backgroundColor: "rgb(255,255,255)",
              bodyFontColor: "#858796",
              borderColor: '#dddfeb',
              borderWidth: 1,
              xPadding: 15,
              yPadding: 15,
              displayColors: false,
              caretPadding: 10,
            },
            legend: {
              display: false
            },
            cutoutPercentage: 80,
          },
        });
    </script>
</body>
