<?php ob_start();
include "koneksi.php";

$singer   = $_POST['singer'];
$location   = $_POST['location'];
$date   = $_POST['date'];
$information   = $_POST['information'];

mysqli_query($con,"INSERT INTO jadwalkonser(nama_artis,tempat,tgl,informasi)
VALUE('$singer','$location','$date','$information')")or die("Database Tidak Bisa Di Buka ");
header('location:tour-dates.php');
?>