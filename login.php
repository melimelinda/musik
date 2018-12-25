<?php
include "admin/koneksi.php";
$login=mysqli_query($con,"SELECT * from login where
	username='$_POST[username]' and password='$_POST[password]'");

$dapat=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);
	//apabila username dan password ditemukan
if($dapat > 0)
{
	session_start();
	if($_SESSION['kodecap']!=$_POST['kodeval']){
		  //awal session
		print "<script>
		alert(\"kode captcha salah\");
		location.href = \"index.php\";
		</script>";
	}else{
		//isi dari variabel session
		$_SESSION['username']=$r['username'];
		$_SESSION['password']=$r['password'];
		//buka halaman utama administrator
		header('location:admin/home.php');
	}
} 
else
{
	print "<script>
	alert(\"Periksa Pengisian Form\");
	location.href = \"index.php\";
	</script>";
}
?>