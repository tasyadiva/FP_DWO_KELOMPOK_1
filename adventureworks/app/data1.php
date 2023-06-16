<?php
require('koneksi.php');

$sql = "select t.tahun as tahun, sum(fp.orderQty) as jumlah_produk
from timeproduction t, fakta_production fp 
where t.timeID = fp.timeID
group by t.tahun";

$hasil1 = mysqli_query($conn, $sql);

$ttltahun = array();

while($row = mysqli_fetch_array($hasil1)){
    array_push($ttltahun,array(
        "jumlah_produk"=>$row['jumlah_produk'],
        "tahun"=>$row['tahun']
    ));
}

$data1 = json_encode($ttltahun);
?>