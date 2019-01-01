<?php
session_start();
include "admin/koneksi.php";
?>
  <!DOCTYPE HTML>
<html lang="en">
<head>
<title>Lilly Watson | Audio</title>
<meta charset="UTF-8">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css">
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
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<!--[if lt IE 7]> <div style=' clear: both; height: 59px; padding:0 0 0 15px; position: relative;'> <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div> <![endif]-->
<!--[if lt IE 9]><script src="js/html5.js" type="text/javascript"></script><![endif]-->
<!--[if IE]><link href="css/ie_style.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body id="page2">
<!-- START PAGE SOURCE -->
<div id="main">
  <?php include "head.php" ?>
  <article id="content">
    <?php include "col1.php" ?>
    <div class="col-2">
      <h2>Lyrics</h2>
      <ul class="audio">
        
        <?php
          $id_musik=$_GET['id_musik'];
          $query=mysqli_query($con,"select * from musik where id_musik='$id_musik'");
                      while($row=mysqli_fetch_array($query)){
                    ?>
          <?php echo $row['lirik'];?>
        
      <!-- <div class="img-box fl"> 
        <a href="#" rel="prettyPhoto[pp_gal]"><img src="<?php echo "admin/images/$var[gambar]"; ?>" alt="" height="200px" width="200px";><br></a> 
      </div> -->
        
        <!-- <li><a href="#"><?php echo "$var[penyanyi]"; ?> - <?php echo "$var[judul_lagu]"; ?></a> <span class="info"></span> <a href="#">Lyrics</a>
          <div class="cntrls"><a href="#" class="mute"></a><span class="separator"></span><a href="#" class="play"></a></div>
        </li> -->
        <!-- <?php echo "$var[lirik]"; ?> -->
        <?php 
          }
         ?>
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
    $('a[rel=prettyPhoto]').each(function () {
        var th = $(this),
            pb
            th.append(pb = $('<span class="playbutt"></span>').css({
                opacity: .7
            }))
            pb.bind('mouseenter', function () {
                $(this).stop().animate({
                    opacity: .9
                })
            }).bind('mouseleave', function () {
                $(this).stop().animate({
                    opacity: .7
                })
            })
    }).prettyPhoto({
        theme: 'dark_square'
    })
})
</script>
<!-- END PAGE SOURCE -->
</body>
</html>