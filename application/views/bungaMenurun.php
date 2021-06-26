<!DOCTYPE html>
<html>

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() . 'asset/masuk/vendor/fontawesome-free/css/all.min.css' ?>" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() . 'asset/masuk/css/sb-admin-2.min.css" rel="stylesheet' ?>">

    <!-- Themify FOnt-->
    <link href="<?php echo base_url() . 'asset/tifont/themify-icons.css" rel="stylesheet' ?>">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <img src="<?= base_url() . 'asset/foto/logokoperasibaru.jpg' ?>" style="width: 2rem; height: 2rem;">
                <div style="width: 50%;">
                    <b>Koperasi Bunga Biraeng</b>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url() . 'Dashboard' ?>">
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
            <?php include 'sidebar.php'; ?>

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
                        <li class="nav-item dropdown no-arrow mx-1" hidden>
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to
                                            download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                    Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1" hidden>
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with
                                            a
                                            problem I've been having.
                                        </div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month,
                                            how would
                                            you like them sent to you?
                                        </div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy
                                            with the
                                            progress so far, keep up the good work!
                                        </div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because
                                            someone told
                                            me that people say this to all dogs, even if they aren't good...
                                        </div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More
                                    Messages</a>
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
                                <a class="dropdown-item" href="#">
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

                    <div class="row">


                        <div class="container">

                            <?php

                            $jumlah_pinjaman = $jml_pinjaman;

                            $jangka_waktu = $bulann - 1;

                            $bunga = 2 / 100;

                            ?>


                            <table class="table mt-5">
                                <thead>
                                    <tr>

                                        <td scope="col">Jumlah Pinjaman</td>
                                        <td scope="col"><?= "Rp. " . number_format($jumlah_pinjaman, 2, ',', '.') ?>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>Jangka Waktu (Bulan)</td>
                                        <td><?= $jangka_waktu ?></td>
                                    </tr>

                                    <tr>

                                        <td>Bunga</td>
                                        <td><?= $bunga * 100 . "%" ?></td>
                                    </tr>


                                </tbody>
                            </table>

                            <?php if ($jangka_waktu > 0) : ?>
                                <table class="table mt-5 mb-5">
                                    <thead>
                                        <tr>
                                            <th scope="col">Bulan</th>
                                            <th scope="col">Angsuran/Bulan</th>
                                            <th scope="col">Bunga</th>
                                            <th scope="col">Angsuran Pokok</th>
                                            <th scope="col">Sisa Pinjaman</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $bulan = 1;
                                        $angsuran = round($jumlah_pinjaman / $jangka_waktu, 0);
                                        $bungaaa = 0;
                                        $sisa_pinjaman = $jumlah_pinjaman;
                                        $angsuranbulan = 0;

                                        $total_angsuran = 0;

                                        for ($i = 0; $i < $jangka_waktu; $i++) { ?>
                                            <?php
                                            if ($i == $jangka_waktu - 1) {
                                                $angsuran = $sisa_pinjaman;
                                            }
                                            $bungaaa = round($sisa_pinjaman * $bunga, 0);
                                            $angsuranbulan = $bungaaa + $angsuran;
                                            $sisa_pinjaman = $sisa_pinjaman - $angsuran;

                                            $total_angsuran = $total_angsuran + $angsuranbulan;
                                            ?>

                                            <tr>
                                                <th scope="row"><?= $bulan++ ?></th>
                                                <td><?= "Rp. " . number_format($angsuranbulan, 2, ',', '.') ?></td>
                                                <td><?= "Rp. " . number_format($bungaaa, 2, ',', '.') ?></td>
                                                <td><?= "Rp. " . number_format($angsuran, 2, ',', '.') ?></td>
                                                <?php if ($sisa_pinjaman < 0) { ?>
                                                    <td><?= "Rp. " . number_format(0, 2, ',', '.') ?></td>
                                                <?php } else { ?>
                                                    <td><?= "Rp. " . number_format($sisa_pinjaman, 2, ',', '.') ?></td>
                                                <?php } ?>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>

                                <h5><strong>Total Angsuran :
                                        <?= "Rp. " . number_format($total_angsuran, 2, ',', '.') ?></strong>
                                </h5>

                            <?php else : ?>
                                <center>
                                    <img src="https://www.jalarambookstore.com/img/nodata.png" alt="">


                                </center>

                            <?php endif ?>





                        </div>


                    </div>
                    <!-- End of Content Wrapper -->

                </div>
                <!-- End of Page Wrapper -->

                <script type="text/javascript">
                    $(document).ready(function() {

                        demo.initChartist();

                        <?php if ($this->session->flashdata('login_status') == 'ok') : ?>
                            $.notify({
                                icon: 'ti-face-smile',
                                message: "Selamat datang di <b>Bunga Biraeng</b> - Sistem Informasi Koperasi Simpan Pinjam."

                            }, {
                                type: 'success',
                                timer: 300
                            });
                        <?php endif; ?>

                    });
                </script>

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
                <script src="<?php echo base_url() . 'asset/masuk/vendor/jquery/jquery.min.js' ?>"></script>
                <script src="<?php echo base_url() . 'asset/masuk/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>">
                </script>

                <!-- Core plugin JavaScript-->
                <script src="<?php echo base_url() . 'asset/masuk/vendor/jquery-easing/jquery.easing.min.js' ?>">
                </script>

                <!-- Custom scripts for all pages-->
                <script src="<?php echo base_url() . 'asset/masuk/js/sb-admin-2.min.js' ?>"></script>
                <script src="<?php echo base_url() . 'asset/js/bootstrap-notify.js' ?>"></script>

                <!-- Page level plugins -->
                <script src="<?php echo base_url() . 'asset/masuk/vendor/chart.js/Chart.min.js' ?>"></script>

                <!-- Page level custom scripts -->
                <script src="<?php echo base_url() . 'asset/masuk/js/demo/chart-area-demo.js' ?>"></script>
                <script src="<?php echo base_url() . 'asset/masuk/js/demo/chart-pie-demo.js' ?>"></script>


</body>