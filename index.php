<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> KARTU KENDALI | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="aset/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="aset/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="aset/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="aset/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="aset/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="aset/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="aset/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="aset/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="aset/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="aset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
   <!-- DataTables -->
  <link rel="stylesheet" href="aset/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


  <!-- jQuery 3 -->
<script src="aset/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="aset/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<!-- DataTables -->
<script src="aset/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="aset/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="aset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="aset/bower_components/raphael/raphael.min.js"></script>
<script src="aset/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="aset/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="aset/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="aset/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="aset/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="aset/bower_components/moment/min/moment.min.js"></script>
<script src="aset/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="aset/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="aset/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="aset/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="aset/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="aset/dist/js/adminlte.min.js"></script>
</head>
<?php
    session_start();
    if(!isset($_SESSION['nama'])){
    header("location:login.php");
    }
    if($_SESSION['level']=='Admin') {
      $a="";
    }else if($_SESSION['level']=='Admin' || $_SESSION['level']=='Petugas' || $_SESSION['level']=='Lain - Lain') {
      $a="hidden";
    }else{
      $a="hidden";
    }


  ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b>BAU</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>KARTU KENDALI</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="aset/dist/img/Logo_stikes_kudus.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['nama']?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="aset/dist/img/Logo_stikes_kudus.jpg" class="img-square" alt="User Image">
                <p><?php echo $_SESSION['nama']?></p>
                <p>
                  <small><?php echo date('d-M-Y'); ?></small>
                </p>
              </li>
             
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="aset/dist/img/Logo_stikes_kudus - Copy.jpg" class="img-square" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['nama']?></p>
          <p><i><?php echo $_SESSION['level']?></i></p>
        
        </div>
      </div>
      <!-- search form -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="?lihat=home">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope-o"></i>
            <span> Surat Masuk</span>
            <i class="fa fa-angle-left pull-right"></i>
           
          </a>
          <ul class="treeview-menu">
            <li><a href="?lihat=form_surat_masuk"><i class="fa fa-circle-o"></i> Entri Baru</a></li>
            <li><a href="?lihat=data_masuk"><i class="fa fa-circle-o"></i> Data Surat Masuk</a></li>
           
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope-open-o"></i>
            <span> Surat Keluar</span>
             <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="?lihat=form_surat_keluar"><i class="fa fa-circle-o"></i> Entri Baru</a></li>
            <li><a href="?lihat=data_keluar"><i class="fa fa-circle-o"></i> Data Surat Keluar</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-money"></i>
            <span> Surat Keuangan</span>
            <i class="fa fa-angle-left pull-right"></i>
           
          </a>
          <ul class="treeview-menu">
            <li><a href="?lihat=form_surat_keuangan"><i class="fa fa-circle-o"></i> Entri Baru</a></li>
            <li><a href="?lihat=data_keuangan"><i class="fa fa-circle-o"></i> Data Surat Keuangan</a></li>
           
          </ul>
        </li>
        <li class="">
          <a href="?lihat=petugas">
            <i class="fa fa-user-o"></i><span>Petugas</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>
        </ul>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
    <section class="content">
       <?php
          if (empty($_GET['lihat'])){
          include"page/home.php";
        }else{
        $ambil=$_GET['lihat'];
        include"page/$ambil.php";
      }
      ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2018-2019 <a href="#">stikesmuhkudus</a>.</strong> All rights
    reserved.
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

</body>
</html>
