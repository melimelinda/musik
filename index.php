<?php 
include "admin/koneksi.php";
 ?>
 <!DOCTYPE HTML>
<html lang="en">
<head>
<title>MM Music</title>
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
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div id="main">
  <?php include "head.php" ?>
  <div class="tumbvr">
    <div class="tumbvr-mask"></div>
    <ul>
      <li><img src="images/ariana.jpg" alt=""></li>
      <li><img src="images/via.jpg" alt=""></li>
      <li><img src="images/jesie.jpg" alt=""></li>
      <li><img src="images/bts.jpg" alt=""></li>
      <li><img src="images/adelle.jpg" alt=""></li>
      <li><img src="images/annie.jpg" alt=""></li>
      <li><img src="images/lesti.jpg" alt=""></li>
      <!-- <li><img src="images/exo.jpg" alt=""></li> -->
      <li><img src="images/snsd.jpg" alt=""></li>
    </ul>
  </div>
  <article id="content">
    <?php include "col1.php" ?>
    <div class="col-2">
      <!-- audio player begin -->
      <div id="jplayer"></div>
      <div class="jp-audio">
        <h2>New Song</h2>
        <div class="jp-type-single">
          <div id="jp_interface_1" class="jp-interface">
            <ul class="jp-controls">

              <li><a href="#" class="jp-play"></a></li>
              <li><a href="#" class="jp-pause"></a></li>
              <li><a href="#" class="jp-prev">Previous Track</a></li>
              <li><a href="#" class="jp-next">Next Track</a></li>
              <li><a href="#" class="jp-more-songs">Listen to More Songs</a></li>
            </ul>
            <div class="jp-progress">
              <div class="jp-seek-bar">
                <div class="jp-play-bar"></div>
              </div>
            </div>
            <div class="jp-title"></div>
          </div>
        </div>
      </div>
      <!-- audio player end -->
      <h2 class="pl">Upcoming Tour Dates</h2>
      <div class="table-border">
      <table class="dates" cellpadding="0" cellspacing="0" border="0">
        
        <tr class="thead">
          <td class="col2">Singer</td>
          <td class="col1">Date & Location</td>
          <td class="col3">Information</td>
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
        </tr>
        <?php 
        $i++;
          }
         ?>
      </table>
      </div>
    </div>
    <div class="col-3">
      <h2>Login</h2>
      <form action="login.php" method="POST"  id="form1">
        <fieldset>
          Username :<br>
            <input type="text" name="username"></input>
            <br>
          Password :<br>
            <input type="password" name="password">
            <br><br>
          <div>
          Captcha:<br>
          <input name="kodeval" type="text" id="kodeval" size="6" maxlength="6" />
          <img src="kodeacak.php" width="75" height="25" alt="Kode Acak" />
          </div><br>
          <button type="submit" class="btn btn-primary" name="kirim">Submit</button>
        </fieldset>
      </form>
      <br>
      <br>
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
$(window).load(function () {
    $('.tumbvr')._fw({
        tumbvr: {
            duration: 2000,
            easing: 'easeOutQuart'
        }
    }).bind('click', function () {
        location = "index-3.html"
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