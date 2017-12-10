 <header class="main-header">
  <a href="<?php echo base_url();?>Co_karyawan/showData" class="logo">
    <img src="<?php echo base_url();?>asset/fronthome/img/SPK_logo.png" style="height: 40px; width: 150px;">
  </a>
  <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown" data-toggle="modal" data-target="#modal-info">
          <a href="#"><i class="fa fa-sign-out"></i> Logout</a>
        </li>
      <li>
        <a href="#" data-toggle="control-sidebar"><i class="fa fa-spin fa-spinner"></i></a>
      </li>
    </ul>
  </div>
</nav>
</header>
<div class="modal modal-info fade" id="modal-info">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" style="color: black">Warning</h4>
        </div>
        <div class="modal-body">
          <p style="color: black">You Sure Exit &hellip;</p>
        </div>
        <div class="modal-footer" style="color: black">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal" style="color: black">Cancel</button>
          <a href="<?php echo base_url();?>Co_login/logout"><button type="button" class="btn btn-outline" style="color: black">Oke</button></a>
        </div>
      </div>
    </div>
  </div>