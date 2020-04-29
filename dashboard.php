<?php require_once("auth.php"); ?>

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
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="assets/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"
    media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
  <link href="assets/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="assets/css/fullcalendar.css">
  <link href="assets/css/widgets.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style-responsive.css" rel="stylesheet" />
  <link href="assets/css/xcharts.min.css" rel=" stylesheet">
  <link href="assets/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
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
              <li><a class="" href="app/views/bamer/read.php">Bawang Merah</a></li>
              <li><a class="" href="app/views/baput/read.php">Bawang Putih</a></li>
            </ul>
          </li>
         

          <li class="sub-menu">
            <a href="logout.php" class="">
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
        <marquee behavior="" direction=""> Selamat Datang di penjualan Bawang Merah dan bawang putih saat Ramadhan</marquee>

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->

        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery-ui-1.10.4.min.js"></script>
  <script src="assets/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="assets/js/jquery.scrollTo.min.js"></script>
  <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="assets/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="assets/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="assets/js/fullcalendar.min.js">
    </script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/assets//fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="assets/js/calendar-custom.js"></script>
    <script src="assets/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="assets/js/jquery.customSelect.min.js"></script>
    <script src="assets/assets//chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="assets/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>
    <script src="assets/js/easy-pie-chart.js"></script>
    <script src="assets/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/js/xcharts.min.js"></script>
    <script src="assets/js/jquery.autosize.min.js"></script>
    <script src="assets/js/jquery.placeholder.min.js"></script>
    <script src="assets/js/gdp-data.js"></script>
    <script src="assets/js/morris.min.js"></script>
    <script src="assets/js/sparklines.js"></script>
    <script src="assets/js/charts.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function () {
        $(".knob").knob({
          'draw': function () {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function () {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function () {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function () {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function (e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>