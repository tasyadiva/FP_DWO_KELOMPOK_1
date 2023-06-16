  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="">Adventureworks by Group 1</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>
 <?php 
            $servername='localhost';    
            $dbusername='root';  
            $dbpassword='';  
            $dbname='dwadventureworks'; 
       
            $host = 'localhost';        
        
            connecttodb($servername,$dbname,$dbusername,$dbpassword);
        
        
            function connecttodb($servername,$dbname,$dbuser,$dbpassword) {
            global $link;
            $link=mysqli_connect("$servername","$dbuser","$dbpassword");
            if(!$link)
            {
            die("Server Database tidak bisa dibuka!");
            }
            mysqli_select_db($link,$dbname) or die ("Database tidak bisa dibuka".mysqli_error());
            }

		   $bulan = array (1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
        
   
 ?>
 <?php 
    //data barchart
    include 'data3.php';
    $data3 = json_decode($data3, TRUE);
?>
   
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
 

<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

<script type="text/javascript"> 
	var chart1; 
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container', 
            type: 'column'
         },   
         title: {
             text: "GRAFIK PRODUK PER TAHUN "
         },
		 subtitle: {
        text: 'Source: dwadventureworks'
    },
         xAxis: {
            categories: ['Tahun']
         },
         yAxis: {
            title: {
               text: 'Jumlah Produk'
            }
         },
              series:             
            [
            <?php      
  
$sql   = "select  t.tahun as tahun, sum(fp.orderQty) as jumlah_produk
from timeproduction t, fakta_production fp 
where t.timeID = fp.timeID
group by tahun";
       
    $temp = $link->prepare($sql);
    $temp->execute();
    $result = $temp->get_result();
    $a=0;
    while($ret = $result->fetch_assoc()){
               $JN = $ret['tahun'];   
                                                  
                 $sql_jumlah   = "select  t.tahun as tahun, sum(fp.orderQty) as jumlah_produk
from timeproduction t, fakta_production fp 
where t.timeID = fp.timeID
and tahun='$JN' "; 
                       
    $temp2 = $link->prepare($sql_jumlah);
    $temp2->execute();
    $result2 = $temp2->get_result();
    while( $data = $result2->fetch_assoc()){
      $a++;
                    $jumlah = $data['jumlah_produk'];    
                  }             
                  ?>
                  {
                      name: '<?php echo $a.'. '.$JN; ?>',
                      data: [<?php echo $jumlah; ?>],
					  dataLabels: {
            enabled: true,
            color: '#222222',
            align: 'center',
            format: '{point.y:.f}', 
            y: -3, // -10 pixels down from the top
            style: {
                fontSize: '11px',
                fontFamily: 'Calibri'
            }
        }
                  },
                  <?php } ?>
            ]
      });
   });	
</script>

<script src="https://code.highcharts.com/themes/grid-bold.js"></script>
<script type="text/javascript"> 
	var chart2; 
   $(document).ready(function() {
      chart2 = new Highcharts.Chart({
         chart: {
            renderTo: 'container2', 
            type: 'column'
         },   
         title: {
             text: "Grafik Jumlah Produk Purchase Per Tahun"
         },
		 subtitle: {
        text: 'Source: dwadventureworks'
    },
         xAxis: {
            categories: ['Tahun']
         },
         yAxis: {
            title: {
               text: 'Jumlah Produk'
            }
         },
              series:             
            [
            <?php      
      
$sql   = "select t2.tahun as tahun, sum(fp2.jumlah) as jml_produkpurchase
from timepurchasing t2, fakta_purchasing fp2 
where t2.timeID = fp2.timeID
group by tahun";
          //die($sql); 
    $temp = $link->prepare($sql);
    $temp->execute();
    $result = $temp->get_result();
    $a=0;
    while($ret = $result->fetch_assoc()){
               $JN = $ret['tahun'];   
                                                  
                 $sql_jumlah   = "select  t2.tahun as tahun, sum(fp2.jumlah) as jml_produkpurchase
from timepurchasing t2, fakta_purchasing fp2 
where t2.timeID = fp2.timeID
and tahun='$JN' "; 
                       
    $temp2 = $link->prepare($sql_jumlah);
    $temp2->execute();
    $result2 = $temp2->get_result();
    while( $data = $result2->fetch_assoc()){
      $a++;
                    $jumlah = $data['jml_produkpurchase'];    
                              
                  }             
                  ?>
                  {
                      name: '<?php echo $a.'. '.$JN; ?>',
                      data: [<?php echo $jumlah; ?>],
					  dataLabels: {
            enabled: true,
            color: '#222222',
            align: 'center',
            format: '{point.y:.f}', 
            y: -3, // -10 pixels down from the top
            style: {
                fontSize: '11px',
                fontFamily: 'Calibri'
            }
        }
                  },
                  <?php } ?>
            ]
      });
   });	
</script>

<div class="daterangepicker ltr show-ranges opensright"><div class="ranges"><ul><li data-range-key="Today">Today</li><li data-range-key="Yesterday">Yesterday</li><li data-range-key="Last 7 Days">Last 7 Days</li><li data-range-key="Last 30 Days">Last 30 Days</li><li data-range-key="This Month">This Month</li><li data-range-key="Last Month">Last Month</li><li data-range-key="Custom Range">Custom Range</li></ul></div><div class="drp-calendar left"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-calendar right"><div class="calendar-table"></div><div class="calendar-time" style="display: none;"></div></div><div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div></div><div class="jqvmap-label" style="display: none;"></div></body></html>