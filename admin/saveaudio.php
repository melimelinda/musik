<?php ob_start();
include "koneksi.php";


$set = true;
  $msg = "";
//tentukan variabel file yg diupload dan tipe file
  $tipe_file = $_FILES['musik']['type'];
  $lokasi_file = $_FILES['musik']['tmp_name'];
  $nama_file = $_FILES['musik']['name'];
  $save_file =move_uploaded_file($lokasi_file,"audio/$nama_file");
  if(empty($lokasi_file))
  {
    $set=false;
    $msg= $msg. 'Upload gagal, Anda Lupa Mengambil audio..';
  }
  else
  {
 //tentukan tipe file harus image
    if ($tipe_file != "audio/mpeg")
    {
      $set=false;
      $msg= $msg. 'Upload gagal, tipe file harus mp3..';
    }
    else
    {
      
    }
    isset($save_file);
//replace di server
    if($save_file)
    {
      chmod("audio/$nama_file", 0777);
    }
    else
    {
      $msg = $msg.'Upload musik gagal..';
      $set = false;
    }
  }
  if($set)
  {
    $nama   = $_POST['nama'];
	$judul   = $_POST['judul'];
	$genre   = $_POST['genre'];
	$lirik   = $_POST['lirik'];

    $sql=mysqli_query($con,"insert into
      musik(penyanyi,judul_lagu,file,lirik,genre)values('$nama','$judul','$nama_file','$lirik','$genre')");
    $msg= $msg.'Upload musik Sukses..';
    header('Location:audio.php');
  }
  echo "$msg";

// mysqli_query($con,"INSERT INTO galeri(nama,tgl_galeri,gambar,deskripsi)
// VALUE('$judul','$tglupload','$gambar','$deskripsi')")or die("Database Tidak Bisa Di Buka ");
// header('location:galery.php');
?>