<?php ob_start();
include "koneksi.php";

$nama   = $_POST['nama'];
$email   = $_POST['email'];
$kota   = $_POST['kota']; 
$pesan   = $_POST['pesan'];

mysqli_query($con,"INSERT INTO pesan(nama,email,kota,pesan)
VALUE('$nama','$email','$kota','$pesan')")or die("Database Tidak Bisa Di Buka ");
header('location:../contacts.php');
?>
