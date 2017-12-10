<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title class="fa fa-flash">Sistem Pendukung Keputusan</title>
  <link rel="shortcut icon" href="<?php echo base_url();?>asset/fronthome/img/spk.png">

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/fronthome/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/fronthome/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/fronthome/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/fronthome/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/fronthome/dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/fronthome/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet"
  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
   <?php include "header.php"; ?>
   <?php include "menu.php"; ?>
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="fa fa-database">
        Karyawan
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Co_home/view_home');?>"><i class="fa fa-home"></i> Home</a></li>
      </ol>
    </section>
    <section class="content">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-file-text-o"> Biodata Form</i></h3>
          </div>
          <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/Co_karyawan/tambah" onsubmit="return cekform();">
            <div class="box-body">
              <div class="form-group">
                <label  class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required="">
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">Tempat Tanggal Lahir</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="ttl" name="ttl" placeholder="Malang, 03 Februari 2017" required="">
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">Jenis Kelamin</label>
                <div class="col-sm-3">
                  <select class="form-control select2" id="jk" name="jk" required="">
                    <option selected="selected">Default</option>
                    <option>L</option>
                    <option>P</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">Status</label>
                <div class="col-sm-3">
                  <select class="form-control select2" id="sts" name="sts" >
                    <option selected="selected">Default</option>
                    <option>Kawin</option>
                    <option>Belum Kawin</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label  class="col-sm-2 control-label">Agama</label>
                <div class="col-sm-3">
                  <select class="form-control select2" id="agama" name="agama" >
                    <option selected="selected">Default</option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Katolik</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-3">
                  <textarea class="form-control" rows="3" id="alamat" name="alamat" placeholder="Jalan Kenangan Yang Indah" required=""></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label"></label>
                <div class="col-sm-2">
                  <a href="#"><button type="submit" class="btn btn-block btn-info">Simpan</button></a>
                </div>
              </div>
            </div>
            </form>
          </section>
        </div>
        <!-- /.content-wrapper -->
        <?php include "footer.php";?>
      </div>
      <!-- jQuery 3 -->
      <script src="<?php echo base_url();?>asset/fronthome/bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="<?php echo base_url();?>asset/fronthome/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- DataTables -->
      <script src="<?php echo base_url();?>asset/fronthome/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url();?>asset/fronthome/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
      <!-- SlimScroll -->
      <script src="<?php echo base_url();?>asset/fronthome/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
      <!-- FastClick -->
      <script src="<?php echo base_url();?>asset/fronthome/bower_components/fastclick/lib/fastclick.js"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo base_url();?>asset/fronthome/dist/js/adminlte.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="<?php echo base_url();?>asset/fronthome/dist/js/demo.js"></script>
      <!-- page script -->

    </body>

    </html>
