<?php 
if(isset($_POST['save_audio']) && $_POST['save_audio']=="Upload Audio")
{
  $dir='audio/';
  $audio_path=$dir.basename($_FILES['audioFile']['name']);

  if (move_uploaded_file($_FILES['audioFile']['tmp_name'],$audio_path)) 
  {
    echo 'Upload sukses';
    saveAudio($audio_path);
    header('Location:audio.php');
  }
}

function saveAudio($fileName)
{
  include "koneksi.php";

  $nama   = $_POST['nama'];
  $judul   = $_POST['judul'];
  $genre   = $_POST['genre'];
  $lirik   = $_POST['lirik'];

  if (!$con) {
    die('server tidak konek');
  }
  $query="insert into musik(penyanyi,judul_lagu,file,lirik,genre)values('$nama','$judul','$fileName','$lirik','$genre')";
    mysqli_query($con,$query);

    if (mysqli_affected_rows($con)>0) {
      echo "file tersimpan";
    }
    mysqli_close($con);
}

// function displayAudios()
// {
//   include "koneksi.php";
//   if (!$con) {
//     die('server tidak konek');
//   }
//   $query="select * from musik";
//   $r=mysqli_query($con,$query);
//   while ($row = mysqli_fetch_array($r)) {
//     echo '<a href="play.php?name='.$row['file'].'">'.$row['file'].'</a>';
//     echo "<br/>";
//   }
//   mysqli_close($con);
// }
?>