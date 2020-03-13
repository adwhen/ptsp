<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>KEJAKSAAN TINGGI PROVINSI BENGKULU</title>
  <link href="<?= base_url('asset/gambar/icon/kajati.png') ?>" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/adminlte') ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/adminlte') ?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/adminlte') ?>/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/adminlte') ?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/adminlte') ?>/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/adminlte') ?>/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/adminlte') ?>/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/adminlte') ?>/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/adminlte') ?>/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url('/asset/adminlte') ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- DataTables -->
<!---tambahan--->
  <link rel="stylesheet" href="<?php echo base_url('/asset/adminlte') ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/adminlte/balloon/balloon.css');?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/adminlte/balloon/balloon.min.css');?>"/>
  <link rel="stylesheet" href="<?php echo base_url('/asset/adminlte') ?>/bower_components/select2/dist/css/select2.min.css">
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    .masukkan{
        border-radius: 4px;
    border: 1px solid #eee;
    background-color: #fff;
    height: 35px;
    color: #444;
    padding-left: 10px;
    }
    .faqHeader {
        font-size: 27px;
        margin: 20px;
    }
    .panel-heading [data-toggle="collapse"]:after {
        font-family: 'Glyphicons Halflings';
        content: "\e072"; /* "play" icon */
        float: right;
        color: #238e59;
        font-size: 18px;
        line-height: 22px;
        /* rotate "play" icon from > (right arrow) to down arrow */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);
        -ms-transform: rotate(-90deg);
        -o-transform: rotate(-90deg);
        transform: rotate(-90deg);
    }

    .panel-heading [data-toggle="collapse"].collapsed:after {
        /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg);
        color: #454444;
    }
  </style>
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini" style="font-size: 12px;"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>PTSP-KEJATI</b></span>
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
            <a href="#" data-toggle="modal" data-target="#keluar" class="dropdown-toggle" data-toggle="dropdown" data-balloon="Keluar Dari Sistem" data-balloon-pos="left">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                <span class="hidden-xs">Keluar</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="keluar" class="modal fade">
    <div class="modal-dialog" style="width:50%;margin-top: 150px;margin-right:25%;margin-left:25%;">
      <div class="modal-content">
        <div class="modal-header">
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
            <h4 class="modal-title">Anda Yakin Ingin Keluar Dari Sistem ? </h4>
        </div>
        <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-footer">
            <a href="<?php echo base_url('login/logout')?>" class="btn btn-danger" style="width: 70px;"> Ya&nbsp;</a>
            <button type="button" class="btn btn-success" data-dismiss="modal" style="width: 70px;" selected> Tidak</button>
        </div>
        </form>
      </div>
    </div>
  </div>