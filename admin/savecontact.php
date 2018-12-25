<?php ob_start();
include "koneksi.php";

$name   = $_POST['name'];
$country   = $_POST['country'];
$city   = $_POST['city'];
$notelp   = $_POST['notelp'];
$email   = $_POST['email'];
$tw   = $_POST['tw'];
$fb   = $_POST['fb'];
$ig   = $_POST['ig'];

mysqli_query($con,"INSERT INTO kontak(nama,negara,kota,notelp,email,tw,ig,fb)
VALUE('$name','$country','$city','$notelp','$email','$tw','$ig','$fb')")or die("Database Tidak Bisa Di Buka ");
header('location:contacts.php');
?>