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
<title>MM Music | Contacts</title>
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
<body id="page6">
<!-- START PAGE SOURCE -->
<div id="main">
  <?php include "head.php"; ?>
  <article id="content">
    <?php include "../col1.php" ?>
    <div class="col-2">
      <h2>Latest Tweets</h2>
      <div class="und">
        <?php 
          $query=mysqli_query($con,"SELECT * FROM pesan ORDER BY id_pesan DESC");
          $i=1;
          while($var=mysqli_fetch_array($query)){
            # code...
         ?>
        <p>
          <h3 style="color: red"><?php echo "$var[nama]"; ?><br></h3>
          <h5 style="color: green"><?php echo "$var[kota]"; ?><br></h5>
          <h5><?php echo "$var[pesan]"; ?><br></h5>
          <h5 style="color: green"><?php echo "$var[email]"; ?></h5>
        </p>
          <?php 
        $i++;
          }
         ?>
        
      </div>
    </div>
    <div class="col-3">
      <h2>Our Contacts</h2>
      <ul class="contacts blo">
        <?php 
          $query=mysqli_query($con,"SELECT * FROM kontak ORDER BY id_kontak");
          $no=1;
          while($var=mysqli_fetch_array($query)){
         ?>
        <li><span>Name:</span><?php echo "$var[nama]"; ?></li>
        <li><span>Country:</span><?php echo "$var[negara]"; ?></li>
        <li><span>City:</span><?php echo "$var[kota]"; ?></li>
        <li><span>Telephone:</span><?php echo "$var[notelp]"; ?></li>
        <li><span>Email:</span><?php echo "$var[email]"; ?></li>
        
         <br>
         <a <?php echo "href='formeditkontak.php?id_kontak=$var[id_kontak]'"; ?>><button class="btn btn-primary" type="submit">Edit</button></a> 
      </ul>
      
      <?php include "../col3.php" ?>
    </div>
    <?php 
      }
     ?>
  </article>
  <div class="af clear"></div>
</div>
<?php include "footer.php" ?>
<!-- END PAGE SOURCE -->
</body>
</html>