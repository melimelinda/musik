<?php
session_start();
include "koneksi.php";

  if(!isset($_SESSION['username'])){
    header("location:../index.php");
    exit();
  }else{
    $username = $_SESSION['username'];
  }
  ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>MM Music | Audio</title>
<meta charset="UTF-8">
<script type="text/javascript" src="../tinymce/tiny_mce.js"></script>
<script type="text/javascript">
  tinymce.init({
    mode:"textareas",
    theme:"advanced"
  });
</script>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link href="../css/layout.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../css/prettyPhoto.css" type="text/css">
<script src="../js/jquery.min.js" type="text/javascript"></script>
<script src="../js/cufon-yui.js" type="text/javascript"></script>
<script src="../js/cufon-replace.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/Josefin_Sans_600.font.js"></script>
<script type="text/javascript" src="../js/Lobster_400.font.js"></script>
<script type="text/javascript" src="../js/sprites.js"></script>
<script type="text/javascript" src="../js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="../js/jquery.jplayer.settings.js"></script>
<script type="text/javascript" src="../js/gSlider.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.prettyPhoto.js"></script>
</head>
<body id="page2">
<!-- START PAGE SOURCE -->
<div id="main">
 <?php include "head.php"; ?>
  <article id="content">
    <?php include "../col1.php" ?>
    <div class="col-2">
      <h2>Audio</h2>
      <div class="col-2">
      <form action="upload.php" id="form1" method="POST" enctype="multipart/form-data">
        <fieldset>
          <!-- <input type="hidden" name="id"> -->
          <label>Singer:
            <input type="text" name="nama">
          </label>
          <label>Title of song:
            <input type="text" name="judul">
          </label>
          <label>Music:
            <input type="file" name="audioFile"/>
          </label>
          <label>Genre:
            <input type="text" name="genre">
          </label>
          Lyrics:
            <p align="right"><textarea name="lirik"></textarea></p> 
          <div class="btns">
            
            <input type="submit" value="Upload Audio" name="save_audio"/>
          </div>
        </fieldset>
      </form>
    </div>
    <br><br>
    <table class="dates" cellpadding="0" cellspacing="0" border="0">
        
        <tr class="thead">
          <td class="col2">Singer</td>
          <td class="col1">Title of Song</td>
          <td class="col3">Lyrics</td>
          <td class="col2"><a href="#"></td>
        </tr>
        <tr class="even">
          <?php 
            if (!$con) {
              die('server tidak konek');
            }
            $query="select * from musik order by id_musik desc";
            $r=mysqli_query($con,$query);
            while ($var = mysqli_fetch_array($r)) {
         ?>
          <td class="col1"><?php echo "$var[penyanyi]"; ?><br>
          <td><?php echo "$var[judul_lagu]"; ?></td>
          <td><?php echo "$var[lirik]"; ?></td>
          <td><a <?php echo "href='deletemusik.php?id_musik=$var[id_musik]'"; ?>><img src="../images/delete.png" alt="" height="30px" width="30px";></a></td>
        </tr>
        <?php 
        
              
          }
         ?>
      </table>
    </div>
    <div class="col-3">
      <?php include "../col3.php" ?>
    </div>
  </article>
  <div class="af clear"></div>
</div>
<?php include "footer.php" ?>
<!-- END PAGE SOURCE -->
</body>
</html>