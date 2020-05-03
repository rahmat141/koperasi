<center>
	<h1>Penjualan Sarung</h1>
	<hr>
	<hr>
	<form action="<?= base_url() ?>index.php/Sarung/simpan_penjualan" method="POST" enctype="multipart/form-data">
	<table>
  <div class="form-group">
	<tr>
		<td>Tanggal</td>
		<td><input type="text" name="tanggal" class="form-control form-control-user"></td>
	</tr>
  </div>
  <div class="form-group">
	<tr>
		<td>Sales</td> 
		<td><input type="text" name="sales" class="form-control form-control-user"></td>
	</tr>
  </div>
  <div class="form-group">
	<tr>
		<td>No Nota</td>
		<td><input type="text" name="no_Nota" class="form-control form-control-user"></td>
	</tr>
  </div>
  <div class="form-group">
	<tr>
		<td>Item</td>
		<td><input type="text" name="item" class="form-control form-control-user"></td>
	</tr>
  </div>
  <div class="form-group">
	<tr>
		<td>Qyt</td>
		<td><input type="text" name="qyt" class="form-control form-control-user"></td>
	</tr>
  </div>
  <div class="form-group">
	<tr>
		<td>Harga/Qyt</td>
		<td><input type="text" name="harga_perqyt" class="form-control form-control-user"></td>
	</tr>
  </div>
  <div class="form-group">
	<tr>
		<td>Keterangan</td>
		<td><input type="text" name="keterangan" class="form-control form-control-user"></td>
	</tr>
  </div>
	<tr><td></td>
		<td align="center">
			<input type="submit" name="submit" class="btn btn-success btn-user btn-block" value="Hadir" style="width: 100%">
		</td>
	</tr>	
	</table>