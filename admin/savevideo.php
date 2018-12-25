<?php ob_start();
include "koneksi.php";

$singer   = $_POST['singer'];
$link   = $_POST['link'];

mysqli_query($con,"INSERT INTO vidio(artis,link_vidio)
VALUE('$singer','$link')")or die(mysqli_error());
header('location:video.php');
?>