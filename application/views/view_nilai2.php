<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Penilaian</title>
  <link rel="shortcut icon" href="<?php echo base_url();?>asset/fronthome/img/spk.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/fronthome/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/fronthome/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/fronthome/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/fronthome/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>asset/fronthome/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
   <?php include "header.php"; ?>
   <?php include "menu.php"; ?>
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="fa fa-database">
        Penilaian
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('Co_home/view_home');?>"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">penilaian</li>
      </ol>
    </section>
    <section class="content">
      <div class="box box-primary">
        <div class="box-header">
          <div class="box-title">
            Silahkan Pilih Bulan
          </div>
        </div>
        <div class="box-body">
         <div class="row">
          <div class="col-md-1">
           <form method="POST" action="<?php echo base_url();?>index.php/Co_karyawan/set_nilai" onsubmit="return cekform();">
          <div class="form-group"  style="width: 300px;">
              <label>Bulan</label>
              <select class="form-control select2" name="bulan" style="width: 100%;">
                <option selected="selected"  >Default</option>
                <option value="1">Januari</option>
                <option value="2"> Februari</option>
                <option value="3">Maret</option>
                <option value="4">April</option>
                <option value="5">Mei</option>
                <option value="6">Juni</option>
                <option value="7">Juli</option>
                <option value="8">Agustus</option>
                <option value="9">September</option>
                <option value="10">Oktober</option>
                <option value="11">November</option>
                <option value="12">Desember</option>
              </select>
            </div>
            <div class="form-group"  style="width: 300px;">
              <label>Jam Kerja</label>
              <select class="form-control select2" name="jk" style="width: 100%;">
                <option selected="selected"  >Default</option>
                 <option value="3">Sangat Baik</option>
                <option value="2">Baik</option>
                <option value="1">cCukup</option>
              </select>
            </div>
            <div class="form-group"  style="width: 300px;">
              <label>Kinerja</label>
              <select class="form-control select2"  name="kinerja" style="width: 100%;">
                <option selected="selected" >Default</option>
                <option value="3">Sangat Baik</option>
                <option value="2">Baik</option>
                <option value="1">cCukup</option>
              </select>
            </div>
            <div class="form-group"  style="width: 300px;">
              <label>Disiplin</label>
              <select class="form-control select2"  name="disiplin" style="width: 100%;">
                <option selected="selected"  >Default</option>
                <option value="3">Sangat Baik</option>
                <option value="2">Baik</option>
                <option value="1">cCukup</option>
              </select>
            </div>
            <input type="hidden" name="Nama1" value="<?php $a = $this->session->userdata('nama'); echo $a;?>">
             <div class="form-group" style="width: 100px;" style="">
              <button type="submit" class="btn btn-block btn-info">Simpan</button></a>
                </div>
              </div>
            <!-- /.modal -->
            </form>

          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery 3 -->
        <script src="<?php echo base_url();?>asset/fronthome/bower_components/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="<?php echo base_url();?>asset/fronthome./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url();?>asset/fronthome/bower_components/fastclick/lib/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url();?>asset/fronthome/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url();?>asset/fronthome./dist/js/demo.js"></script>
      </body>
      </html>
