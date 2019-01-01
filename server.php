<?php 
	if ($_GET['konten']=='isitour') {
		include ("isitour.php");
	}elseif ($_GET['konten']=='isiaudio') {
		include ("isiaudio.php");
	}elseif ($_GET['konten']=='isividio') {
		include ("isividio.php");
	}elseif ($_GET['konten']=='isiindex') {
		include ("isiindex.php");
	}else ($_GET['konten']=='isikontak') {
		include ("isikontak.php")
	}
?>