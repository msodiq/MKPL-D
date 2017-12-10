<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .loader {
          border: 16px solid #f3f3f3;
          border-radius: 50%;
          border-top: 16px solid red;
          border-bottom: 16px solid blue;
          width: 70px;
          height: 70px;
          -webkit-animation: spin 2s linear infinite;
          animation: spin 2s linear infinite;
      }

      @-webkit-keyframes spin {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
      }

      @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
      }

  </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SPK</title>
  <link rel="shortcut icon" href="<?php echo base_url();?>asset/fronthome/img/spk.png">
  <link href="<?php echo base_url();?>asset/frontpage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>asset/frontpage/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>asset/frontpage/css/grayscale.min.css" rel="stylesheet">
        <script>
            function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('txt').innerHTML =
                h + ":" + m + ":" + s;
                var t = setTimeout(startTime, 500);
            }
            function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" onload="startTime()">
    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-pencil" style="color:yellow"></i><i style="color: red">S</i><i style="color: blue">PK</i><span class="light"></span>
                </a>
            </div>
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about"><i class="fa fa fa-home"></i> About</a> 
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url(); ?>index.php/Co_login/login"><i class="fa fa-sign-in"></i> login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 ><i style="color: red">SISTEM</i><i><i style="color: blue"> PENDUKUNG KEPUTUSAN</i></h1>
                        <p>Selamat Datang Di Website Sistem Pendukung Keputusan
                        <br>Pemberian Bonus Tahunan Karyawan 
                            <br>Created by Kelompok 6</p>
                            <hr>
                            <div style="font-size: 40px; color: #ff0; "  id="txt"></div>
                            <center><div class="loader"></div></center>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Kelompok 6</h2>
                <p>Helman Taufiqurrahman
                <br>Muhammad Sodiq
                <br>Tony Varian Yoditanto
                <br>Rivaldi Raihan S.</p>
               </div>
           </div>
       </section>
       <footer>
        <div class="container text-center">
            <p>Copyright Kelompok 6 2017</p>
            <p>+685258713694</p>
            <p><a href="http://www.ub.ac.id" target="blank">Join</a>
               <!--  <p><a href="https://youtu.be/3jtfr0yMbNA" target="blank" class=" fa fa-youtube " style="font-style: bold"> Indonesia Power</a></p> -->
            </div>

        </footer>
        <script src="<?php echo base_url();?>asset/frontpage/vendor/jquery/jquery.js"></script>
        <script src="<?php echo base_url();?>asset/frontpage/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
        <script src="<?php echo base_url();?>asset/frontpage/js/grayscale.min.js"></script>
    </body>
    </html>
