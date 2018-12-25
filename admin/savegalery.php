<?php ob_start();
include "koneksi.php";


$set = true;
  $msg = "";
//tentukan variabel file yg diupload dan tipe file
  $tipe_file = $_FILES['gambar']['type'];
  $lokasi_file = $_FILES['gambar']['tmp_name'];
  $nama_file = $_FILES['gambar']['name'];
  $save_file =move_uploaded_file($lokasi_file,"images/$nama_file");
  if(empty($lokasi_file))
  {
    $set=false;
    $msg= $msg. 'Upload gagal, Anda Lupa Mengambil Gambar..';
  }
  else
  {
 //tentukan tipe file harus image
    if ($tipe_file != "image/gif" and
      $tipe_file != "image/jpeg" and
      $tipe_file != "image/jpg" and
      $tipe_file != "image/pjpeg" and
      $tipe_file != "image/png")
    {
      $set=false;
      $msg= $msg. 'Upload gagal, tipe file harus image..';
    }
    else
    {
      isset($save_file);
    }
//replace di server
    if($save_file)
    {
      chmod("images/$nama_file", 0777);
    }
    else
    {
      $msg = $msg.'Upload Image gagal..';
      $set = false;
    }
  }
  if($set)
  {
    $name   = $_POST['name'];
    //$tglupload = date('Y-m-d');
    $desc  = $_POST['desc'];

    $sql=mysqli_query($con,"insert into
      gambar(nama,gambar,ket)values('$name','$nama_file','$desc')");
    $msg= $msg.'Upload Galeri Sukses..';
    header('Location:gallery.php');
  }
  echo "$msg";

// mysqli_query($con,"INSERT INTO galeri(nama,tgl_galeri,gambar,deskripsi)
// VALUE('$judul','$tglupload','$gambar','$deskripsi')")or die("Database Tidak Bisa Di Buka ");
// header('location:galery.php');
?>