<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title class="fa fa-flash">Login</title>
  <link rel="shortcut icon" href="<?php echo base_url();?>asset/fronthome/img/spk.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/fronthome/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/fronthome/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/fronthome/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/fronthome./dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/fronthome/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

<style>
  #bg{
      background: #135f9a;

    }
  </style>

</head>
<body class="hold-transition login-page" id="bg">
  <div class="login-box">
    <div class="login-logo">
      <a href="<?php echo base_url();?>Welcome">
        <img src="<?php echo base_url();?>asset/fronthome/img/SPK_logo.png" style="height: 60px; width: 250px;">
      </a> 
    </div>

    <div class="login-box-body" >
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="POST" action="<?php echo base_url();?>index.php/Co_login/getLogin">
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Username" name="username" required="required" >
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password" required="required" >
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
        </div>
      </form>
      <hr>
      <hr>
    </div>
  </div>
  <script src="<?php echo base_url();?>asset/fronthome/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url();?>asset/fronthome/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>asset/fronthome/plugins/iCheck/icheck.min.js"></script>
</body>
</html>
