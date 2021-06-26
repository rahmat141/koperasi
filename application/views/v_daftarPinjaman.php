<!DOCTYPE html>
<html>

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Formulir Daftar Pinjaman</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() . 'asset/masuk/vendor/fontawesome-free/css/all.min.css' ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() . 'asset/masuk/css/sb-admin-2.min.css" rel="stylesheet' ?>">
    <link href="<?php echo base_url() . 'asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet' ?>">
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
                <a class="nav-link" href="<?php echo base_url() . 'index.php/Dashboard' ?>">
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
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <h1 class="text-center"><b>DAFTAR PINJAMAN</b></h1>
                    <hr>
                    <hr>
                    <table>
                        <tr>
                            <td>
                                <b>Total Pinjaman: </b>
                                <?php
                                foreach ($totalPinjaman as $total) { ?>
                                    <b class="text-success">Rp <?php echo number_format($total->total, 2, ',', '.'); ?></b>
                                <?php } ?>
                            </td>

                        </tr>
                        <tr>
                            <td>
                                <b>Total Angsuran: </b>
                                <?php
                                        foreach ($totalAngsuran as $total) { ?>
                                    <b class="text-success">Rp <?php echo number_format($total->total, 2, ',', '.'); ?></b>
                                <?php } ?>
                            </td>
                        </tr>
                    </table>

                    <div class="card shadow mt-2 mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Pinjaman</h6>
                        </div>
                        <!-- <?= var_dump($pinjaman) ?> -->

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead align="center">
                                        <tr>
                                            <th>No</th>
                                            <th>Jumlah Pinjaman</th>
                                            <th>Tanggal Pengembalian</th>
                                            <th>Bunga</th>
                                            <th>Total Setoran</th>
                                            <th>Total Denda</th>
                                            <th>Status</th>
                                            <th>Kelola</th>
                                        </tr>
                                    </thead>

                                    <?php
                                    $i = 1;
                                    foreach ($pinjaman as $data) {
                                    ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td>Rp<?php echo number_format($data->jml_pinjaman, 2, ',', '.'); ?></td>
                                            <td><?php if (date("Y-m-d") > $data->tenor) { ?>
                                                    <font color="red"> <?php echo $data->tenor;
                                                                        echo " (Terlambat)"; ?></font>
                                                <?php } else {
                                                    echo $data->tenor;
                                                } ?>
                                            </td>
                                            <td><?php echo $data->bunga; ?>%</td>
                                            <!-- <td>Rp<?php echo number_format($data->angsuran + $data->denda, 2, ',', '.'); ?></td> -->
                                            <td>Rp<?php echo number_format($data->angsuran, 2, ',', '.'); ?></td>

                                            <?php
                                            $tglskrg = date("Y-m-d");
                                            $date1 = date_create($data->tgl_pinjaman);
                                            $date2 = date_create($tglskrg);
                                            $diff = date_diff($date1, $date2);
                                            $tgl_bayar = strtotime("next month", strtotime($data->tgl_pinjaman));
                                            $tgl_bayar = date('Y-m-d', $tgl_bayar);
                                            if ($tglskrg > $tgl_bayar) {
                                                while ($tgl_bayar < $tglskrg) {
                                                    $tgl_bayar = strtotime("next month", strtotime($tgl_bayar));
                                                    $tgl_bayar = date('Y-m-d', $tgl_bayar);
                                                }
                                                $denda = (50000 * ($diff->m - $jml_angsuran));
                                                // $this->db->query('  UPDATE pinjaman
                                                //                     SET denda = ' . $denda . '
                                                //                     WHERE id_pinjaman = ' . $data->id_pinjaman);
                                            } else {
                                                $denda = 0;
                                                // $this->db->query('  UPDATE pinjaman
                                                //                     SET denda = ' . $denda . '
                                                //                     WHERE id_pinjaman = ' . $data->id_pinjaman);
                                            }
                                            // echo $diff->m - $jml_angsuran . ' bulan ';
                                            // echo 'Bayar Sebelum Tanggal ' . substr($tgl_bayar, -2);
                                            echo 'Bayar Sebelum Tanggal ' . $tgl_bayar;
                                            echo ' sekarang tanggal ' . $tglskrg;
                                            ?>
                                            <!-- <td>Rp<?php echo number_format($denda, 2, ',', '.'); ?></td> -->
                                            <td>Rp<?php echo number_format($data->denda, 2, ',', '.'); ?></td>
                                            <td><?php echo $data->status; ?></td>
                                            <?php if ($data->jml_pinjaman <= 0 and $data->status == 'Accepted') { ?>
                                                <td align="center"><a href="#" class="btn btn-dark">Edit</a></td>
                                            <?php
                                            } else { ?>
                                                <div class="btn-group">
                                                    <td>
                                                        <a href="<?php echo base_url() . 'index.php/Pinjaman/editPinjaman/' . $data->id_pinjaman; ?>" class="btn btn-primary">Edit</a>
                                                    <?php } ?>
                                                    <?php if ($data->angsuran <= 0 and $data->status == 'Accepted') { ?>
                                                        <a href="<?php echo base_url() . 'index.php/Pinjaman/cetak_resi/' . $data->id_pinjaman; ?>" class="btn btn-primary">Resi</a>
                                                    <?php } else if ($data->status == 'Accepted') { ?>
                                                        <a href="<?php echo base_url() . 'index.php/Pinjaman/cetak_resi/' . $data->id_pinjaman; ?>" class="btn btn-primary">Resi</a>
                                                    <?php
                                                    } else { ?>
                                                        <a href="#" class="btn btn-dark">Resi</a>
                                                    <?php } ?>

                                                    <?php if ($data->angsuran <= 0 and $data->status == 'Accepted') { ?>
                                                        <a href="#" class="btn btn-success">Lunas</a>
                                                    <?php } else if ($data->status == 'Accepted') { ?>
                                                        <a href="<?php echo base_url() . 'index.php/Angsuran/bayar/' . $data->id_pinjaman ?> " class="btn btn-primary">Setor</a>
                                                        <a href="<?php echo base_url() . 'index.php/Angsuran/bayarLunas/' . $data->id_pinjaman ?> " class="btn btn-primary">Pelunasan</a>
                                                    <?php
                                                    } else { ?>
                                                        <a href="#" class="btn btn-dark">Setor</a>
                                                    <?php } ?>
                                                    </td>
                                                </div>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php } ?>
                                    </tbody>

                                </table>
                            </div>
                            </center>
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
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= site_url('Login/logout') ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url() . 'asset/vendor/jquery/jquery.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url() . 'asset/vendor/jquery-easing/jquery.easing.min.js' ?>"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo base_url() . 'asset/js/sb-admin-2.min.js' ?>"></script>

        <!-- Page level plugins -->
        <script src="<?php echo base_url() . 'asset/vendor/chart.js/Chart.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/vendor/datatables/jquery.dataTables.min.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/vendor/datatables/dataTables.bootstrap4.min.js' ?>"></script>

        <!-- Page level custom scripts -->
        <script src="<?php echo base_url() . 'asset/js/demo/chart-area-demo.js' ?>"></script>
        <script src="<?php echo base_url() . 'asset/js/demo/chart-pie-demo.js' ?>"></script>

        <!-- Page level custom scripts -->
        <script src="<?php echo base_url() . 'asset/js/demo/datatables-demo.js' ?>"></script>
</body>

</html>