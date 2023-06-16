<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'dwadventureworks');

    //pengecekkan koneksi 
    if(!$conn){
        echo("Koneksi Gagal Terhubung");
    }
?>