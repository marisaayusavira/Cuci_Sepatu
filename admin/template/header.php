<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= $base_url ?>asset/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>asset/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>asset/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>asset/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>asset/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>asset/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <link rel="stylesheet" href="<?= $base_url ?>asset/plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?= $base_url ?>asset/plugins/summernote/summernote-bs4.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Dashboard</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      &nbsp;
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <img src="<?= $base_url ?>asset/dist/img/user2-160x160.jpg" width="30px" class="img-circle elevation-" alt="User Image">
        </a>
         <div style="position:center;" class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <i class="fas fa-user">&nbsp;&nbsp;&nbsp;Profil</i>
            </a>
            <a href="logout.php" class="dropdown-item">
              <i class="fas fa-sign-out-alt">&nbsp;&nbsp;&nbsp;Log out</i>
            </a>
         </div>
      </li>
    </ul>
  </nav>