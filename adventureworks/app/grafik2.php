<html>
    <head>
        <title>Adventure Works</title>
        <!-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.2/jquery.min.js"></script>
        <script src = "https://code.highcharts.com/highcharts.js"></script> -->
    </head>
    <body>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Grafik |<a href="coba2.php">Home</a></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description">
            Berikut grafik drilldown yang menampilkan jumlah produk yang dibeli dari vendor per tahun dan per bulan.
        </p>
    </figure>
    <script type = "text/javascript">
        // Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

        // Create the chart
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Grafik Jumlah Produk Purchase Per Tahun'
            },
            subtitle: {
                text: 'dwadventureworks'
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
                    text: 'Total produk'
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
                        format: '{point.y:.1f}'
                    }
                }
            },
            series: [
            {
                name: 'Tahun',
                colorByPoint: true,
                data: [
                    <?php
                        include 'koneksi.php';
                        $sql = "SELECT t.tahun, SUM(fp.jumlah) AS jmlpurchase
                                FROM timepurchasing t
                                JOIN fakta_purchasing fp ON t.timeID = fp.timeID 
                                GROUP BY t.tahun
                                ORDER BY t.tahun";
                        $query = mysqli_query($conn, $sql);

                        while ($temp = mysqli_fetch_array($query)) {
                            $tahun = $temp['tahun'];
                            $jml = $temp['jmlpurchase'];
                            echo "{
                                name: '" . $tahun . "',
                                y: " . $jml . ",
                                drilldown: '" . $tahun . "'
                            },";
                        }
                    ?>
                ]
            }
        ],
        drilldown: {
            series: [
                <?php
                    $drilldown_sql = "SELECT t.tahun AS tahun, t.bulan AS bulan, SUM(fp.jumlah) AS jmlpurchase
                                    FROM timepurchasing t
                                    JOIN fakta_purchasing fp ON t.timeID = fp.timeID
                                    GROUP BY t.tahun, t.bulan
                                    ORDER BY bulan";
                    $drilldown_query = mysqli_query($conn, $drilldown_sql);
                    while ($drilldown_temp = mysqli_fetch_array($drilldown_query)) {
                        $tahun = $drilldown_temp['tahun'];
                        $bulan = $drilldown_temp['bulan'];
                        $jml = $drilldown_temp['jmlpurchase'];
                        echo "{
                            name: '" . $tahun . "',
                            id: '" . $tahun . "',
                            data: [";

                        $bulan_query = mysqli_query($conn, "SELECT t.bulan, SUM(fp.jumlah) AS jmlpurchase
                        FROM timepurchasing t 
                        JOIN fakta_purchasing fp ON t.timeID = fp.timeID
                        WHERE tahun = '".$tahun."'
                        GROUP BY t.bulan");
                        while ($bulan_data = mysqli_fetch_array($bulan_query)) {
                            $bulan = $bulan_data['bulan'];
                            $jml = $bulan_data['jmlpurchase'];
                            echo "['" . $bulan . "', " . $jml . "],";
                        }

                        echo "]
                        },";
                    }
                ?>
            ]
        }

        });

    </script>

    </body>
</html>