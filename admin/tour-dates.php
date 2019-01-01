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
<title>MM Music | Tour Dates</title>
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
<body id="page5">
<!-- START PAGE SOURCE -->
<div id="main">
  <?php include "head.php"; ?>
  <article id="content">
    <?php include "../col1.php" ?>
    <div class="col-2">
      <h2 class="pl">Tour Dates</h2>
      <form action="savetour.php" id="form1" method="POST">
        <fieldset>
          <label>Singer:
            <input type="text" name="singer">
          </label>
          <label>Location:
            <input type="text" name="location">
          </label>
          <label>Date:
            <input type="date" name="date">
          </label>
          <label>Information:
            <textarea name="information"></textarea>
          </label>
          <div class="btns">
            <button class="btn btn-primary" type="submit">Save</button>
          </div>
        </fieldset>
      </form>
      <br>
      <h2 class="pl">Tour Dates</h2>
      <table class="dates" cellpadding="0" cellspacing="0" border="0">
        
        <tr class="thead">
          <td class="col2">Singer</td>
          <td class="col1">Date & Location</td>
          <td class="col3">Information</td>
          <td class="col2"><a href="#"></td>
        </tr>
        <tr class="even">
          <?php 
          $query=mysqli_query($con,"SELECT * FROM jadwalkonser ORDER BY id_konser DESC");
          $i=1;
          while($var=mysqli_fetch_array($query)){
            # code...
         ?>
          <td class="col1"><?php echo "$var[nama_artis]"; ?><br>
          <td><?php echo "$var[tgl]"; ?><br>
            <?php echo "$var[tempat]"; ?></td>
          <td><?php echo "$var[informasi]"; ?></td>
          <td><a <?php echo "href='deletetour.php?id_konser=$var[id_konser]'"; ?>><img src="../images/delete.png" alt="" height="30px" width="30px";></a>
          <a <?php echo "href='formedittour.php?id_konser=$var[id_konser]'"; ?>><img src="../images/edit.png" alt="" height="30px" width="30px";></a></td>
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