<center>
    <h1>Detail Penjualan</h1>
    <hr><hr>
    <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="1">
       
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Sales</th>
            <th>No Nota</th>
            <th>Item</th>
            <th>Qyt</th>
            <th>Harga/Qyt</th>
            <th>Keterangan</th>
        </tr>
        <?php
            $i=1;
            foreach ($penjualan as $data) {
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $data->tanggal; ?></td>
            <td><?php echo $data->sales; ?></td>
            <td><?php echo $data->no_Nota; ?></td>
            <td><?php echo $data->item; ?></td>
            <td><?php echo $data->qyt; ?></td>
            <td><?php echo $data->harga_perqyt; ?></td>
            <td><?php echo $data->keterangan; ?></td>
        </tr>
        <?php $i++; }?>
    </table>
     <a href="<?= base_url().'index.php/sekertaris/index'?>" class="btn btn-primary">Input Kehadiran</a>
    </center>