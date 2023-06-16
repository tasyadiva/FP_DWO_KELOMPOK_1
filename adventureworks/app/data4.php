<?php
require('koneksi.php');

$sql = "select t.tahun as tahun, sum(fp.cost) as ttlproduksi
from timeproduction t, fakta_production fp 
where t.timeID = fp.timeID
group by tahun";

$result = mysqli_query($conn, $sql);

$ttlproduksi = array();

while($row = mysqli_fetch_array($result)){
    array_push($ttlproduksi,array(
        "ttlproduksi"=>$row['ttlproduksi'],
        "tahun"=>$row['tahun']
    ));
}

$data4 = json_encode($ttlproduksi);
?>