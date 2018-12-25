<?php ob_start();
include "koneksi.php";

$id_kontak = $_POST['id_kontak'];
$name = $_POST['name'];
$country = $_POST['country'];
$city = $_POST['city'];
$notelp = $_POST['notelp'];
$email = $_POST['email'];
$tw = $_POST['tw'];
$fb = $_POST['fb'];
$ig = $_POST['ig'];


$query=mysqli_query($con,"update kontak set nama='$name', negara='$country', kota='$city', notelp='$notelp', email='$email', tw='$tw', fb='$fb
	', ig='$ig' where id_kontak='$id_kontak'");
header('location:contacts.php');
?>