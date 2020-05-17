<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pack</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <center>
        <h1>Edit Data Barang</h1>
        <?php foreach($pack as $x) { ?>
        <?php echo form_open('pack_controller/aksi2'); ?>
        <form method='POST' enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Kode Barang</td>
                    <td>:</td>
                    <td><input type="text" name="id_brg_pack" value="<?php echo $x->id_brg_pack?>"></td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><input type="text" name="nama_barang" value="<?php echo $x->nama_barang?>"></td>
                </tr>
            </table>
            <input type="submit" name="submit" class="tombol">
        </form>
        <?php } ?>
    </center>
</body>
</html>