<?php 
include "admin/koneksi.php";
 ?>
 <!DOCTYPE HTML>
<html lang="en">
<head>
<title>Lilly Watson | Video</title>
<meta charset="UTF-8">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script type="text/javascript" src="js/Josefin_Sans_600.font.js"></script>
<script type="text/javascript" src="js/Lobster_400.font.js"></script>
<script type="text/javascript" src="js/sprites.js"></script>
<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="js/jquery.jplayer.settings.js"></script>
<script type="text/javascript" src="js/gSlider.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<!--[if lt IE 7]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative;'> <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->
<!--[if lt IE 9]><script src="js/html5.js" type="text/javascript"></script><![endif]-->
<!--[if IE]><link href="css/ie_style.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body id="page3">
<!-- START PAGE SOURCE -->
<div id="main">
  <?php include "head.php" ?>
  <article id="content">
    <?php include "col1.php" ?>
    <div class="col-2">
      <h2>Video</h2>
      <div class="p0">
         <?php 
          $query=mysqli_query($con,"SELECT * FROM vidio ORDER BY id_vidio ASC");
          $i=1;
          while($var=mysqli_fetch_array($query)){
            # code...
         ?>
        <iframe width="501" height="346"  frameborder="0" allowfullscreen src="<?php echo "$var[link_vidio]";?>"></iframe>
        <!-- <video width="400" controls>
          <source src="<?php echo "$var[link_vidio]";?>" type="video/mp4">
          <source src="mov_bbb.ogg" type="video/ogg">
          Your browser does not support HTML5 video.
        </video> -->
        <?php 
          }
         ?>
      </div>
      <p><a href="#">Download Lilly Watson - One More Chance Music Video</a></p>
    </div>
    <div class="col-3">
      <?php include "col3.php" ?>
    </div>
  </article>
  <div class="af clear"></div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2011 <a href="#">SiteName</a> - All Rights Reserved</p>
    <p class="rf">Design by <a href="http://www.templatemonster.com/">TemplateMonster</a></p>
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript">Cufon.now()
$(function () {
    $('nav,.more,.header-more').sprites()
    $('.header-slider').gSlider({
        prevBu: '.hs-prev',
        nextBu: '.hs-next'
    })
})
</script>
<!-- END PAGE SOURCE -->
</body>
</html>