  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Print Bukti Simpanan</title>
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url().'asset/masuk/vendor/fontawesome-free/css/all.min.css'?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url().'asset/masuk/css/sb-admin-2.min.css" rel="stylesheet'?>">

  <link href="<?php echo base_url().'asset/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet'?>"> 
<!-- Themify FOnt-->
  <link href="<?php echo base_url().'asset/tifont/themify-icons.css" rel="stylesheet'?>">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
  <!-- 
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
   -->


  <!-- jquery 
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>-->
</head>
<body>



<body id="page-top">

          <div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card shadow-sm border-bottom-primary">
            <div class="card-header bg-white py-3">
                <div class="row">
                    <div class="col">
                        <h4 class="h5 align-middle m-0 font-weight-bold text-primary">
                          Invoice Simpanan
                        </h4>
                    </div>
                    
                </div>
            </div>
                        
    <div class="card-body">
      <div class="table-responsive">

        <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row text-gray-800"> 
                <div class="col-12">
                  <h4>
                    <img class="img-profile rounded-circle" width="8%" height="8%" src="<?php echo base_url('asset/foto/logokoperasibaru.jpg'); ?>"> Koperasi Bunga Biraeng.
                    <small class="float-right">Tanggal : <?= date('d-m-Y'); ?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col text-gray-800">
                  From :
                  <address>
                    <strong>Leonardo (Petugas)</strong><br>
                    Kabupaten Gowa<br>
                    92152<br>
                    Sulawesi Selatan
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col text-gray-800">
                  To :
                  <address>
                    <?php
                  $i=1;
                  foreach ($simpanan as $data) { 
                  ?>
                    <strong><?php echo $data->nama; ?></strong><br>
                    <?php echo $data->alamat; ?></br>
                    0<?php echo $data->no_hp; ?><br>
                    <?php }?>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col text-gray-800">
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th class="text-gray-800">No</th>
                      <th class="text-gray-800">No. Anggota</th>
                      <th class="text-gray-800">No. Simpanan</th>
                      <th class="text-gray-800">Nama</th>
                      <th class="text-gray-800">Jumlah Simpanan</th>
                      <th class="text-gray-800">Tgl Simpanan Terakhir</th>
                      <th class="text-gray-800">Tipe Simpanan</th>
                    </tr>
                    </thead>


                  <?php
                  $i=1;
                  foreach ($simpanan as $get){
                  ?>
                    <tbody>
                    <tr>
                        <td class="text-gray-800"><?php echo $i; ?></td>
                        <td class="text-gray-800">AGT-<?php echo $data->id_anggota; ?></td>
                        <td class="text-gray-800">SPN-<?php echo $data->id_simpanan; ?></td>
                        <td class="text-gray-800"><?php echo $data->nama; ?></td>
                        <td  class="text-gray-800">Rp<?php echo number_format($data->jml_simpanan,0,',','.'); ?></td>
                        <td class="text-gray-800"><?php echo $data->tanggal_simpanan; ?></td>
                        <td class="text-gray-800"><?php echo $data->tipe; ?></td>
                                                      
                    </tr>
                        <?php $i++; ?>
                        <?php }?>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead"></p>
                  

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                   
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead"></p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th class="text-gray-800">Total:</th>
                        <td class="text-gray-800">Rp<?php echo number_format($data->jml_simpanan,0,',','.'); ?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              Simpanlah Struk Ini Sebagai Bukti Pembayaran Anda</br>
              Terima kasih
            <!-- /.invoice -->

      </div>
    </div>
        </div>
        <!-- End of Content Wrapper -->

     
  <script type="text/javascript">
    window.print();
  </script>

 <script src="<?php echo base_url().'asset/vendor/bootstrap/js/bootstrap.bundle.min.js'?>"></script>

</body>
</html>