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
      <div class="box box-primary">
        <div class="box-header">
          <div class="box-title" ><i class="fa fa-file-text-o">
            Data Karyawan</i>
          </div>
        </div>
        
        <div class="box-body">
          <table id="table" class="table table-bordered table-striped">
            <!-- <thead>
              <tr>
              <th>ID</th>
               <th>Nama</th>
               <th>TTL</th>
               <th>Jenis Kelamin</th>
               <th>Status</th>   
               <th>Agama</th>    
               <th>Alamat</th>   
               <th>Action</th> 
             </tr>
           </thead>
           <tbody>
           </tbody> -->
           <thead>
            <tr>
             <th>Nama</th>
             <th>TTL</th>
             <th>Jenis Kelamin</th>
             <th>Status</th>      
             <th>Agama</th>
             <th>Alamat</th>
             <th>Bobot</th>
             <th>Update</th>
           </tr>
           <?php foreach($group as $post)
           {?>
         </thead>
         <tbody>
          <tr >
            <td><?php echo $post->Nama;?></td>
            <td><?php echo $post->TTL;?></td>
            <td><?php echo $post->JK;?></td>
            <td><?php echo $post->Status;?></td>
            <td><?php echo $post->Agama;?></td>
            <td><?php echo $post->Alamat;?></td>
            <form action="<?php echo base_url() ?>index.php/Co_karyawan/tambah_nilai" method="post"><td>
             <input type="hidden" name="Nama1" value="<?php echo $post->Nama;?>">
             <button type="submit" class="btn btn-sm btn-primary" ><i class="glyphicon glyphicon-edit"></i></button>

           </td></form>
             <form action="<?php echo base_url() ?>index.php/Co_karyawan/update" method="post"><td>
             <input type="hidden" name="nama" value="<?php echo $post->Nama;?>">
             <input type="hidden" name="ttl" value="<?php echo $post->TTL;?>">
             <input type="hidden" name="jk" value="<?php echo $post->JK;?>">
             <input type="hidden" name="sts" value="<?php echo $post->Status;?>">
             <input type="hidden" name="agama" value="<?php echo $post->Agama;?>">
             <input type="hidden" name="alamat" value="<?php echo $post->Alamat;?>">
             <button type="submit" class="btn btn-sm btn-success" ><i class="glyphicon glyphicon-pencil"></i></button>
             
           </td></form>
         </tr>
         <?php } ?>
       </tbody>
     </table>
   </table>
 </div>
</div>
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
<!-- <script type="text/javascript">

            var save_method; //for save method string
            var table;

            $(document).ready(function() {
                //datatables
                table = $('#table').DataTable({ 
                    "processing": true, //Feature control the processing indicator.
                    "serverSide": true, //Feature control DataTables' server-side processing mode.
                    "order": [], //Initial no order.
                    // Load data for the table's content from an Ajax source
                    "ajax": {
                      "url": '<?php echo base_url('Co_home/showData'); ?>',
                      "type": "POST"
                    },
                    //Set column definition initialisation properties.

                  });

              });
            </script> -->

          </body>

          </html>
