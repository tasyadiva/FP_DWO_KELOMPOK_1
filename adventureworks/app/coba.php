<!DOCTYPE html>
<html lang="en">
<?php include('koneksi.php');?>

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
         <a class="nav-link active" href="coba.php">
         <i class="fas fa-shopping-cart"></i>
             <span>Produksi Produk</span></a>
      </li>
          
          <li class="nav-item ">
            <a href="coba2.php" class="nav-link">
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
            <a href="coba4.php" class="nav-link">
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
            <h1 class="m-0">Grafik |<a href="grafik1.php">Drilldown</a></h1>
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
           
  <div id="container"></div>

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
<!-- js -->
</body>
</html>
