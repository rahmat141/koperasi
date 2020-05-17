<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pemasukan Barang Packing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <center>
        <h1>Pemasukan Barang Packing</h1>
        <?php echo form_open('packing_controller/aksi'); ?>
        <form method='POST' enctype="multipart/form-data">
            <table>
                <!-- <tr>
                    <td>Kode Barang</td>
                    <td>:</td>
                    <td>
                        <input type="hidden" name="id_packing">
                        <input type="text" name="id_brg_pack" placeholder="Masukkan kode barang">
                    </td>
                </tr> -->
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td>
                        <!-- <select class="form-control" id="id_brg_pack" name="id_brg_pack">
                        
                        </select> -->
                        <select name="nama_barang" class="form-control">
                            <?php foreach ($packing as $x) { ?>
                            <option value="<?php echo $x->id_brg_pack; ?>"><?php echo $x->nama_barang; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td>:</td>
                    <td><input type="text" name="jumlah" placeholder="Masukkan jumlah barang"></td>
                </tr>
                <tr>
                    <td>Tanggal Masuk</td>
                    <td>:</td>
                    <td><input type="date" name="tgl_masuk" placeholder="Masukkan tanggal"></td>
                </tr>
            </table>
            <input type="submit" name="submit" class="tombol">
        </form>
    </center>
</body>
</html>