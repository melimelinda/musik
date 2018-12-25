<?php ob_start();
 include "koneksi.php";
 mysqli_query($con,"delete from musik where id_musik='$_GET[id_musik];'");
 header('location:audio.php');
?>