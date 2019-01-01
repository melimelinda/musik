<?php ob_start();
 include "koneksi.php";
 mysqli_query($con,"delete from gambar where id_gambar='$_GET[id_gambar];'");
 header('location:gallery.php');
?>