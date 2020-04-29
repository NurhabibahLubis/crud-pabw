<?php require_once("../../../auth.php"); ?>
<?php
require("../../config/db.php");

try{
    $sql ="SELECT * FROM bamer";
    $result = $db->query($sql);
}

catch(Exception $e){

    echo "Error" . $e->getMessage();
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="../../../assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../../../assets/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../../../assets/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../../../assets/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="../../../assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="../../../assets/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="../../../assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"
    media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="../../../assets/css/owl.carousel.css" type="text/css">
  <link href="../../../assets/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="../../../assets/css/fullcalendar.css">
  <link href="../../../assets/css/widgets.css" rel="stylesheet">
  <link href="../../../assets/css/style.css" rel="stylesheet">
  <link href="../../../assets/css/style-responsive.css" rel="stylesheet" />
  <link href="../../../assets/css/xcharts.min.css" rel=" stylesheet">
  <link href="../../../assets/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i
            class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Nice <span class="lite">Admin</span></a>
      <!--logo end-->

     
      
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="dashboard.php">
              <i class="icon_house_alt"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
              <i class="icon_document_alt"></i>
              <span>Penjualan</span>
              <span class="menu-arrow arrow_carrot-right"></span>
            </a>
            <ul class="sub">
              <li><a class="" href="read.php">Bawang Merah</a></li>
              <li><a class="" href="../baput/read.php">Bawang Putih</a></li>
            </ul>
          </li>
         

          <li class="sub-menu">
            <a href="../../../logout.php" class="">
              <i class="icon_documents_alt"></i>
              <span>Logout</span>
              <span class="fas fa-left"></span>
            </a>
           
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->