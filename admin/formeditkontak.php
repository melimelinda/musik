<?php
session_start();
include "koneksi.php";


  if(!isset($_SESSION['username'])){
    header("location:../login.php");
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
      <!-- <h2>Latest Tweets</h2>
      <div class="und">
        <?php 
          $query=mysqli_query($con,"SELECT * FROM pesan ORDER BY id_pesan DESC");
          $i=1;
          while($var=mysqli_fetch_array($query)){
            # code...
         ?>
        <p><?php echo "$var[nama]"; ?><br>
          <?php echo "$var[kota]"; ?><br>
          <?php echo "$var[pesan]"; ?><br>
          <?php echo "$var[email]"; ?>
        </p>
          <?php 
        $i++;
          }
         ?>
        
      </div> -->
      <h2>Contact Form</h2>
      <form action="editkontak.php" id="form1" method="POST">
        <fieldset>
          <?php
          $id_kontak=$_GET['id_kontak'];
          $query=mysqli_query($con,"select * from kontak where id_kontak='$id_kontak'");
                      while($row=mysqli_fetch_array($query)){
                    ?>
          <input class="form-control" id="nama" name="id_kontak" type="hidden" value="<?php echo $row['id_kontak'];?>" required />
          <label>Name         :
            <input type="text" name="name" value="<?php echo $row['nama'];?>">
          </label>
          <label>Country      :
            <input type="text" name="country" value="<?php echo $row['negara'];?>">
          </label>
          <label>City:
            <input type="text" name="city" value="<?php echo $row['kota'];?>">
          </label>
          <label>No. Telephone:
            <input type="number" name="notelp" value="<?php echo $row['notelp'];?>">
          </label>
          <label>E-mail       :
            <input type="email" name="email" value="<?php echo $row['email'];?>">
          </label>
          <label>Tweeter      :
            <input type="text" name="tw" value="<?php echo $row['tw'];?>">
          </label>
          <label>facebook     :
            <input type="text" name="fb" value="<?php echo $row['fb'];?>">
          </label>
          <label>Instagram    :
            <input type="text" name="ig" value="<?php echo $row['ig'];?>">
          </label>
          <div class="btns">
            <button class="btn btn-primary" type="submit">Update</button>
            <a href="contacts.php"><button class="btn btn-default" type="button">Cancel</button></a> 
          </div>
          <?php 
            }
           ?>
        </fieldset>
      </form>
    </div>
    <?php include "../col3.php" ?>
  </article>
  <div class="af clear"></div>
</div>
<?php include "footer.php" ?>
<!-- END PAGE SOURCE -->
</body>
</html>