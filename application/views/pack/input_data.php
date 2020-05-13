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
        <h1>Data Barang</h1>
        <?php echo form_open('pack_controller/aksi'); ?>
        <form method='POST' enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Kode Barang</td>
                    <td>:</td>
                    <td> <input type="text" name="id_brg_pack" placeholder="Masukkan kode barang"></td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><input type="text" name="nama_barang" placeholder="Masukkan nama barang"></td>
                </tr>
            </table>
            <input type="submit" name="submit" class="tombol">
        </form>
    </center>
</body>
</html>