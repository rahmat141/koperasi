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
				<a class="nav-link" href="<?php echo base_url() . 'index.php/Dashboard/dashboard_petugas' ?>">
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
			<?php include('sidebar_petugas.php'); ?>

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
					<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="<?php echo site_url('Pinjaman/searchAcc'); ?>" method="post">
						<div class="input-group">
							<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="search">
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
								<img class="img-profile rounded-circle" src="<?php echo base_url('gambar/admin.png'); ?>">
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
					<center>
						<h1 class="text-gray-800"><b>Approval Pinjaman</b></h1>
					</center>
					<hr>
					<hr>

					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Approval Pinjaman</h6>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead align="center">

										<tr>
											<th class="text-gray-800">No</th>
											<th class="text-gray-800">Nama</th>
											<th class="text-gray-800">Jumlah Pinjaman</th>
											<th class="text-gray-800">Tanggal Pinjaman</th>
											<th class="text-gray-800">Batas Tgl Pengembalian</th>
											<th class="text-gray-800">Bunga</th>
											<th class="text-gray-800">Jaminan</th>
											<th class="text-gray-800">Status</th>
											<th class="text-gray-800">Kelola</th>
											<th class="text-gray-800">Kelola</th>
										</tr>
									</thead>

									<?php
									$i = 1;
									foreach ($pinjaman as $data) {
									?>

										<tr>
											<td class="text-gray-800"><?php echo $i; ?></td>
											<td class="text-gray-800"><?php echo $data->nama; ?></td>
											<td class="text-gray-800">Rp<?php echo number_format($data->jml_pinjaman, 2, ',', '.'); ?></td>
											<td class="text-gray-800"><?php echo $data->tgl_pinjaman; ?></td>
											<td class="text-gray-800"><?php echo $data->tenor; ?></td>
											<td class="text-gray-800"><?php echo $data->bunga; ?>%</td>
											<td class="text-gray-800"><?php echo $data->jenis_jaminan; ?><br><a href="#" class="badge badge-info lihatBukti float-left" data-toggle="modal" data-target="#BuktiJaminan" data-ktp="<?= $data->jaminan_ktp ?>" data-surat="<?= $data->jaminan_surat ?>" data-pajak="<?= $data->jaminan_pajak ?>" data-stnk="<?= $data->jaminan_stnk ?>" data-foto="<?= $data->jaminan_foto ?>" data-taksiran="<?= $data->taksiran_jaminan ?>" data-id="<?= $data->id_pinjaman ?>">Lihat bukti</a></td>
											<td class="text-gray-800"><?php echo $data->status; ?></td>
											<td class="text-gray-800">
												<form action="<?= base_url() . 'index.php/Pinjaman/approval/' . $data->id_pinjaman; ?>" method="POST">
													<input type="hidden" name="jml_pinjaman" value="<?php echo $data->jml_pinjaman; ?>">
													<input type="hidden" name="tgl_pinjaman" value="<?php echo $data->tgl_pinjaman; ?>">
													<input type="hidden" name="tenor" value="<?php echo $data->tenor; ?>">
													<input type="hidden" name="bunga" value="<?php echo $data->bunga; ?>">
													<input type="hidden" name="status" value="<?php echo $data->status; ?>">
													<input type="hidden" name="plafon" value="<?php echo $data->plafon; ?>">
													<input type="hidden" name="id_pinjaman" value="<?php echo $data->id_pinjaman; ?>">
													<input type="hidden" name="id_anggota" value="<?php echo $data->id_anggota; ?>">
													<?php if ($data->status == "On Going") { ?>
														<input type="submit" name="submit" class="btn btn-primary" value="Accept" style="width: 100%">
													<?php } else { ?>
														<input type="submit" name="submit" class="btn btn-primary" value="Accept" style="width: 100%">
													<?php } ?>
											</td>
											<td>
												<?php if ($data->status == "On Going") { ?>
													<a href="<?= base_url() . 'index.php/Pinjaman/tolak/' . $data->id_pinjaman . '/' . $data->id_anggota?>" class="btn btn-danger">Deny</a>
												<?php } else { ?>
													<button href="<?= base_url() . 'index.php/Pinjaman/tolak/' . $data->id_pinjaman . '/' . $data->id_anggota?>" class="btn btn-danger">Deny</button>
												<?php } ?>

											</td>
										</tr>
										</form>
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
					<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
						<a class="btn btn-primary" href="<?= site_url('Login/logout') ?>">Logout</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal -->
		<div class="modal fade" id="BuktiJaminan" tabindex="-1" aria-labelledby="BuktiJaminanLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="BuktiJaminanLabel">Bukti Jaminan</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form id="form-taksiran" action="" method="post">
						<div class="modal-body">
							<div id="file-jaminan">
							</div>
							<label>Taksiran Harga Jaminan</label>
							<input type='number' class='form-control input-taksiran' id="input-taksiran" name='taksiran' required placeholder='Masukkan Jumlah Taksiran'>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
							<button type="submit" class="btn btn-primary">Simpan</button>
						</div>
					</form>
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
		<script>
			$('.lihatBukti').on('click', function() {
				var urlImg = '<?= base_url('storage/upload_jaminan/'); ?>';
				var ktp = $(this).data('ktp');
				var surat = $(this).data('surat');
				var pajak = $(this).data('pajak');
				console.log(pajak);
				var stnk = $(this).data('stnk');
				var foto = $(this).data('foto');
				var taksiran = $(this).data('taksiran');
				var url = "<?= base_url() ?>index.php/Pinjaman/update_taksiran/" + $(this).data('id');
				if (pajak != '') {
					var html = `
					<label for="foto-ktp">Foto KTP</label>
					<img src=" ${urlImg+ktp}" class='img-thumbnail' id="foto-ktp">
					<label for="foto-surat">Surat Tanah</label>
					<img src="${urlImg+surat}" class='img-thumbnail' id="foto-surat">
					<label for="foto-pajak">Pajak Tahunan</label>
					<img src="${urlImg+pajak}" class='img-thumbnail' id="foto-pajak">
					`;
					$('#file-jaminan').html(html);
					$('.input-taksiran').val(taksiran);
					$('#form-taksiran').attr('action', url);
				} else {
					var html = `
					<label for="foto-ktp">Foto KTP</label>
					<img src=" ${urlImg+ktp}" class='img-thumbnail' id="foto-ktp">
					<label for="foto-surat">Surat Kendaraan</label>
					<img src="${urlImg+surat}" class='img-thumbnail' id="foto-surat">
					<label for="foto-stnk">STNK Kendaraan</label>
					<img src="${urlImg+stnk}" class='img-thumbnail' id="foto-stnk">
					<label for="foto-kendaraan">Foto Kendaraan</label>
					<img src="${urlImg+foto}" class='img-thumbnail' id="foto-kendaraan">
					`;
					$('#file-jaminan').html(html);
					$('.input-taksiran').val(taksiran);
					$('#form-taksiran').attr('action', url);
				}

			});
		</script>
</body>

</html>