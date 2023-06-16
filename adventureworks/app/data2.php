<?php
require('koneksi.php');

$sql = "select t2.tahun as tahun, sum(fp2.jumlah) as jml_produkpurchase
from timepurchasing t2, fakta_purchasing fp2 
where t2.timeID = fp2.timeID
group by tahun";

$hasil2 = mysqli_query($conn, $sql);

$ttlppurchase = array();

while($row = mysqli_fetch_array($hasil2)){
    array_push($ttlppurchase,array(
        "jml_produkpurchase"=>$row['jml_produkpurchase'],
        "tahun"=>$row['tahun']
    ));
}

$data2 = json_encode($ttlppurchase);
?>