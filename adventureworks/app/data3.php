<?php
require('koneksi.php');

$sql = "select  t.tahun as tahun, sum(fpr.totaldue) as total_transaksi
from timepurchasing t, fakta_purchasing fpr
where t.timeID = fpr.timeID
group by tahun";

$hasil3 = mysqli_query($conn, $sql);

$ttlpurchase = array();

while($row = mysqli_fetch_array($hasil3)){
    array_push($ttlpurchase,array(
        "total_transaksi"=>$row['total_transaksi'],
        "tahun"=>$row['tahun']
    ));
}

$data3 = json_encode($ttlpurchase);
?>