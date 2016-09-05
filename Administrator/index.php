<?php 
session_start();
$user_name = $_SESSION['user'];
if(empty($user_name)){
  header("location:../Login/login.php");
}

include '../Config/koneksi.php';

$sql ="SELECT * FROM tb_admin WHERE user='$user_name'";
$result = $koneksi->query($sql);

?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/bootstrap/css/AdminLTE.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/bootstrap/css/skins/_all-skins.min.css">
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Administrator</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
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
        <div class="text-center">
          <img src="../assets/img/me.jpg" width="120px" height="115px" class="img-circle">
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="treeview">
          <a href="#">
            <?php 
            while ($row = $result->fetch_object()){  ?>
                <i class="fa fa-user"></i><span><?php echo $row->nama_admin; ?></span> <i class="fa fa-angle-left pull-right"></i>
            <?php } ?>
          </a>
          <ul class="treeview-menu">
            <li><a href="../Login/logout.php"><i class="fa fa-sign-out"></i> Sign-out </a></li>
            <li><a href="#"><i class="fa fa-info-circle"></i> Info </a></li>
          </ul>
        </li>
        <li class="header">MENU NAVIGASI</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i> <span>MASTER</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?master=berita"><i class="fa fa-table"></i> Berita </a></li>
            <li><a href="index.php?master=kategori"><i class="fa fa-table"></i> Kategori</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span>LAPORAN</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php"><i class="fa fa-file-pdf-o"></i> Berita</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

      <!-- Main content -->
      <section class="content">
          <?php 
          if ((isset($_GET['master']))||(isset($_GET['laporan']))) {

            if ($_GET['master']=='berita') {
                    include 'Berita/tampil_berita.php';
                }
            elseif ($_GET['master']=='kategori') {
                    include 'Kategori/tampil_kategori.php';
                }
            elseif ($_GET['master']=='form_tambah_kategori') {
                    include 'Kategori/form_tambah_kategori.php';
                }
            elseif ($_GET['master']=='form_edit_kategori') {
                    include 'Kategori/form_edit_kategori.php';
                }                

          }else{
            include 'beranda.php';
          }
           ?>

      </section>
      <!-- end content -->

  </div>
  <!-- content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> Alpha
    </div>
    <strong>Copyright &copy; <?php echo date('Y'); ?> <a href="index.php">Fahruddin Yusuf H</a>.</strong> All rights reserved.
  </footer>

</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.0 -->
<script src="../assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/bootstrap/js/app.min.js"></script>

</body>
</html>