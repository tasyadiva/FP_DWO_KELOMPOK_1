    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
<!-- KOTAK KOTAK DI HALAMAN UTAMA YANG ISI INFO REALTIME -->
        <?php include('koneksi.php')?>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>
                  <?php 
                    $sql = "select sum(fp.orderQty) as total_produk
                    from fakta_production fp";
                    $produk = mysqli_query($conn, $sql);
                    while($row=mysqli_fetch_array($produk)){
                      echo number_format($row['total_produk'],0,".",",");
                    }
                  ?>
                </h3>
                <p>Total Produk</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>
                  <?php
                    $sql = "select sum(fp.TotalDue) as ttl_biaya_transaksi 
                    from fakta_purchasing fp";
                    $biaya = mysqli_query($conn, $sql);
                    while($row2=mysqli_fetch_array($biaya)){
                      echo "$".number_format($row2['ttl_biaya_transaksi'],0,".",",");
                    }
                  ?>
                </h3>

                <p>Total Biaya Transaksi</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>
                  <?php 
                   $sql= "select sum(fp2.jumlah) as jml_produkpurchase
                   from fakta_purchasing fp2";
                   $produk_purchase = mysqli_query($conn, $sql);
                   while($row3=mysqli_fetch_array($produk_purchase)){
                    echo number_format($row3['jml_produkpurchase'],0,".",",");
                   }
                  ?>
                </h3>

                <p>Total Produk Purchase</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>
                  <?php
                    $sql = "select sum(fp.cost) as cost_produksi 
                    from fakta_production fp";
                    $cost = mysqli_query($conn, $sql);
                    while($row4=mysqli_fetch_array($cost)){
                      echo "$".number_format($row4['cost_produksi'],0,".",",");
                    }
                  ?>
                </h3>

                <p>Total Biaya Produksi</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
        </div>
<!-- KOTAK KOTAK DI HALAMAN UTAMA YANG ISI INFO REALTIME -->
        <!-- /.row -->
        <!-- Main row -->
    <div id="content">
                    <!-- Begin Page Content -->
                    <p class="highcharts-description">
                    Berikut merupakan tampilan OLAP dari Adventureworks yang di integrasikan dengan Mondrian.
                    </p>
                    <!-- /.container-fluid -->
                    <br>
                    <iframe name="mondrian" src="http://localhost:8087/mondrian"></iframe>
                    <br>
    </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>