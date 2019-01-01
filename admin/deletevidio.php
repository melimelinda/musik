<?php ob_start();
 include "koneksi.php";
 mysqli_query($con,"delete from vidio where id_vidio='$_GET[id_vidio];'");
 header('location:video.php');
?>