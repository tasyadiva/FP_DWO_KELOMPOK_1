<!DOCTYPE html>
<html lang="en">

<?php 
    //data barchart
    include 'data4.php';
    $data4 = json_decode($data4, TRUE);
?>

<?php include('header.php');?>
<style>
    .highcharts-figure,
.highcharts-data-table table {
  min-width: 310px;
  max-width: 800px;
  margin: 1em auto;
}

#container {
  height: 400px;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #ebebeb;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}

.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}

.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
  padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}

.highcharts-data-table tr:hover {
  background: #f1f7ff;
}
</style>
 <!-- Custom fonts for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/css/sb-admin-2.min.css" rel="stylesheet">


    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="img/logo6.png" alt="AdminLTELogo" height="140" width="140">
  </div>

  <!-- Navbar -->
  <?php include('navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="img/logo5.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .9">
      <span class="brand-text font-weight-light">Adventureworks</span>
    </a>
    <!-- Sidebar -->
       <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
       <!-- dashboard -->
         <li class="nav-item menu-open">
            <a href="index.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>
       
      <li class="nav-header">GRAFIK CHART</li>

<li class="nav-item ">
         <a class="nav-link " href="coba.php">
         <i class="fas fa-shopping-cart"></i>
             <span>Produksi Produk</span></a>
      </li>
          
          <li class="nav-item ">
            <a href="coba2.php" class="nav-link ">
              <i class="nav-icon fas fa-edit"></i>
              <p>
               Produk Purchasing
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="coba3.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p> 
                Transaksi Purchasing
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="coba4.php" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p> 
                Biaya Produksi
                <!-- <i class="fas fa-angle-left right"></i> -->
              </p>
            </a>
          </li>
          
          <li class="nav-header">OLAP</li>
          
          <li class="nav-item">
            <a href="olap.php" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Mondrian
              </p>
            </a>
          </li>

          <li class="nav-header">LOG-OUT</li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Log-out
              </p>
            </a>
          </li>
          
   <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Grafik</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
           
<script src="https://code.highcharts.com/themes/grid-light.js"></script>
    <figure class="highcharts-figure">
        <div id="linechart"></div>
        <p class="highcharts-description">
            Chart showing browser market shares. Clicking on individual columns
            brings up more detailed data. This chart makes use of the drilldown
            feature in Highcharts to easily switch between datasets.
        </p>
    </figure>
    <script type="text/javascript">
        "use strict";
        Highcharts.chart('linechart', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Data Total Biaya Produksi '
            },
            subtitle: {
                text: 'Source: Database dwadventureworks'
            },
            accessibility: {
                announceNewData: {
                    enabled: true
                }
            },
            xAxis: {
                type: 'category'
            },
            yAxis: {
                title: {
                    text: 'Banyak Cost'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                series: {
                    borderWidth: 0,
                    dataLabels: {
                        enabled: true,
                        format: '{point.y:.1f}$'
                    }
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}$</b> of total<br/>'
            },
            series: [
                {
                    name: "Tahun",
                    colorByPoint: true,
                    data: [
                        <?php foreach ($data4 as $data):?>
                        {
                            name: '<?= $data["tahun"]; ?>',
                            y: <?= $data["ttlproduksi"]; ?>,
                          
                        },
                        <?php endforeach;?>
                    ]
                }
            ]
        });
    </script>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- //footer// -->
  <?php include('grafik.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- grafik -->

<!-- /grafik -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-sb-admin-2/4.1.3/js/sb-admin-2.min.js"></script>

<!-- js -->
</body>
</html>
