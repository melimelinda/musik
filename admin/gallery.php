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
<title>MM Music | Gallery</title>
<meta charset="UTF-8">
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
<!--[if lt IE 7]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative;'> <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->
<!--[if lt IE 9]><script src="js/html5.js" type="text/javascript"></script><![endif]-->
<!--[if IE]><link href="css/ie_style.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body id="page4">
<!-- START PAGE SOURCE -->
<div id="main">
  <?php include "head.php"; ?>
  <article id="content">
    <?php include "../col1.php" ?>
    <div class="col-2">
      <h2>Galleries</h2>
      <form action="savegalery.php" method="POST"  id="form1" enctype="multipart/form-data">
        <fieldset>
          <label>Name:
            <input type="text" name="name">
          </label>
          <label>Picture:
            <input type="file" name="gambar">
          </label>
          <label class="msg">Descryption:
            <textarea name="desc"></textarea>
          </label>
          <div class="btns"><button type="submit" class="btn btn-primary">Save</button>
        </div>
        </fieldset>
      </form>
      <table class="dates" cellpadding="0" cellspacing="0" border="0">
        
        <tr class="thead">
          <td class="col2">Name</td>
          <td class="col1">Picture</td>
          <td class="col3">Descryption</td>
          <td class="col2"><a href="#"></td>
        </tr>
        <tr class="even">
          <?php 
          $query=mysqli_query($con,"SELECT * FROM gambar ORDER BY id_gambar DESC");
          $i=1;
          while($var=mysqli_fetch_array($query)){
            # code...
         ?>
          <td class="col1"><?php echo "$var[nama]"; ?><br>
          <td><?php echo "images/$var[gambar]"; ?></td>
          <td><?php echo "$var[ket]"; ?></td>
          <td><a <?php echo "href='deletegambar.php?id_gambar=$var[id_gambar]'"; ?>><img src="../images/delete.png" alt="" height="30px" width="30px";></a>
          <a <?php echo "href='formeditgambar.php?id_gambar=$var[id_gambar]'"; ?>><img src="../images/edit.png" alt="" height="30px" width="30px";></a></td>
        </tr>
        <?php 
        $i++;
          }
         ?>
      </table>
    </div>
    <?php include "../col3.php" ?>
  </article>
  <div class="af clear"></div>
</div>
<?php include "footer.php" ?>
<!-- END PAGE SOURCE -->
</body>
</html>