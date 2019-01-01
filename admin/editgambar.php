<?php ob_start();
include "koneksi.php";

$id_gambar = $_POST['id_gambar'];
$nama = $_POST['nama'];
$gambar = $_POST['gambar'];
$ket = $_POST['ket'];


$query=mysqli_query($con,"update gambar set nama='$nama', gambar='$gambar', ket='$ket' where id_gambar='$id_gambar'");
header('location:gallery.php');
?>