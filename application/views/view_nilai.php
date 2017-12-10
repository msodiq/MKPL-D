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
            <div class="form-group"  style="width: 100px;">
              <a href="#"><button type="submit" class="btn btn-block btn-success" data-toggle="modal" data-target="#Januari">Januari</button></a>
            </div>
            <div class="form-group"  style="width: 100px;">
              <a href="#"><button type="submit" class="btn btn-block btn-success" data-toggle="modal" data-target="#Februari">Februari</button></a>
            </div>
            <div class="form-group"  style="width: 100px;">
              <a href="#"><button type="submit" class="btn btn-block btn-success" data-toggle="modal" data-target="#Maret">Maret</button></a>
            </div>
            <div class="form-group"  style="width: 100px;">
              <a href="#"><button type="submit" class="btn btn-block btn-success" data-toggle="modal" data-target="#April">April</button></a>
            </div>
            <div class="form-group"  style="width: 100px;">
              <a href="#"><button type="submit" class="btn btn-block btn-success" data-toggle="modal" data-target="#Mei">Mei</button></a>
            </div>
            <div class="form-group"  style="width: 100px;">
              <a href="#"><button type="submit" class="btn btn-block btn-success" data-toggle="modal" data-target="#Juni">Juni</button></a>
            </div>
            <div class="form-group"  style="width: 50px;">
              <a href="#"><button type="submit" class="btn btn-block btn-success" data-toggle="modal" data-target="#Juni"><i class="fa fa-mail-reply"></i></button></a>
            </div>
          </div> 
        <!-- /.col -->
        <div class="col-md-2">
          <div class="form-group"  style="width: 100px;">
            <a href="#"><button type="submit" class="btn btn-block btn-info" data-toggle="modal" data-target="#Juli">Juli</button></a>
          </div>
          <div class="form-group"  style="width: 100px;">
            <a href="#"><button type="submit" class="btn btn-block btn-info" data-toggle="modal" data-target="#Agustus">Agustus</button></a>
          </div>
          <div class="form-group"  style="width: 100px;">
            <a href="#"><button type="submit" class="btn btn-block btn-info" data-toggle="modal" data-target="#September">September</button></a>
          </div>
          <div class="form-group"  style="width: 100px;">
            <a href="#"><button type="submit" class="btn btn-block btn-info" data-toggle="modal" data-target="#Oktober">Oktober</button></a>
          </div>
          <div class="form-group"  style="width: 100px;">
            <a href="#"><button type="submit" class="btn btn-block btn-info" data-toggle="modal" data-target="#November">November</button></a>
          </div>
          <div class="form-group"  style="width: 100px;">
            <a href="#"><button type="submit" class="btn btn-block btn-info" data-toggle="modal" data-target="#Desember">Desember</button></a>
          </div>
        </div>
      </div>    
    </div>

    <div class="modal fade" id="Januari">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Januari</h4>
            </div>
            <div class="modal-body">
                 <?php include "popup.php"; ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Keluar</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>

    <div class="modal fade" id="Februari">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Februari</h4>
            </div>
            <div class="modal-body">
                 <?php include "popup.php"; ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Keluar</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="Maret">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Maret</h4>
            </div>
            <div class="modal-body">
                 <?php include "popup.php"; ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Keluar</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="April">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">April</h4>
            </div>
            <div class="modal-body">
                 <?php include "popup.php"; ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Keluar</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="Mei">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Mei</h4>
            </div>
            <div class="modal-body">
                 <?php include "popup.php"; ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Keluar</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="Juni">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Juni</h4>
            </div>
            <div class="modal-body">
                 <?php include "popup.php"; ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Keluar</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="Juli">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Juli</h4>
            </div>
            <div class="modal-body">
                 <?php include "popup.php"; ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Keluar</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="Agustus">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Agustus</h4>
            </div>
            <div class="modal-body">
                 <?php include "popup.php"; ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Keluar</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="September">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">September</h4>
            </div>
            <div class="modal-body">
                 <?php include "popup.php"; ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Keluar</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="Oktober">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Oktober</h4>
            </div>
            <div class="modal-body">
                 <?php include "popup.php"; ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Keluar</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="November">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">November</h4>
            </div>
            <div class="modal-body">
                 <?php include "popup.php"; ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Keluar</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>

<div class="modal fade" id="Desember">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Desember</h4>
            </div>
            <div class="modal-body">
                 <?php include "popup.php"; ?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Keluar</button>
              <button type="button" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
      </div>

      <!-- /.modal -->
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
