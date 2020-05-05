<!DOCTYPE html>
<html>
<head>
	<title>Slip Gaji Pegawai</title>
	<base href="<?php echo base_url() ?>">
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url().'asset/masuk/vendor/fontawesome-free/css/all.min.css'?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url().'asset/masuk/css/sb-admin-2.min.css" rel="stylesheet'?>">

</head>
<body onload="print()">


	<center>
		<table>
			<tr>
				<td>
					<img src="http://localhost/magang/gambar/1_b_al7C5p26tbZG4sy-CWqw.png" width="100" height="100">
					
				</td>
				<td>
					<center>
						<h3>PT. AWS TEXTILE</h3>
					<h5>Rukan Aries Niaga Blok A1 No 3A dan 3B Jl. Taman Aries no telp (021) 58906959, faks  (021) 58907350.</h5>
					</center>
				</td>
			</tr>
		</table>
		<h4>SLIP GAJI</h4>
	</center>
	<hr>
	
	<table class="table">
		
		<tr>
			<td width="10%">ID Gaji</td>
			<td>:</td>
			<td><?php echo $penggajian->id_gaji; ?></td>
			<td width="10%">Alamat</td>
			<td>:</td>
			<td><?php echo $penggajian->alamat; ?></td>
			<td width="10%">Tanggal</td>
			<td>:</td>
			<td><?php echo $penggajian->tgl; ?></td>
		</tr>
		<tr>
			<td width="10%">Nama</td>
			<td>:</td>
			<td><?php echo $penggajian->nama; ?></td>
			<td width="10%">Pekerjaan</td>
			<td>:</td>
			<td><?php echo $penggajian->pekerjaan; ?></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		
	</table>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>NO</th>
				<th>KETERANGAN</th>
				<th>JUMLAH</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th>1</th>
				<td>Gaji Pokok</td>
				<td>Rp. <?php echo number_format($penggajian->gapok) ?></td>
			</tr>
			<tr>
				<th>2</th>
				<td>Lembur</td>
				<td>Rp. <?php echo number_format($penggajian->lembur) ?></td>
			</tr>
			<tr>
				<th>3</th>
				<td>Lainnya</td>
				<td>Rp. <?php echo number_format($penggajian->lainnya) ?></td>
			</tr>
			
			<tr>
				<th colspan="2">TOTAL DITERIMA</th>
				<th>Rp. 
					<?php 
					$total = $penggajian->gapok+$penggajian->lembur+$penggajian->lainnya;
					echo number_format($total);
					 ?>
				</th>
			</tr>
		</tbody>
	</table>
	<p style="text-align: right;">
		Penerima,
		<br><br><br><br>

		<b><?php echo $penggajian->nama; ?></b>
	</p>
	
</body>
</html>