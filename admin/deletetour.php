<?php ob_start();
 include "koneksi.php";
 mysqli_query($con,"delete from jadwalkonser where id_konser='$_GET[id_konser];'");
 header('location:tour-dates.php');
?>