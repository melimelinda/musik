<?php ob_start();
include "koneksi.php";

$id_konser = $_POST['id_konser'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tgl = $_POST['tgl'];
$info = $_POST['info'];


$query=mysqli_query($con,"update jadwalkonser set nama_artis='$nama', tempat='$tempat', tgl='$tgl', informasi='$info' where id_konser='$id_konser'");
header('location:tour-dates.php');
?>