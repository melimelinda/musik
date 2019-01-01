<article id="content">
    <?php include "col1.php" ?>
    <div class="col-2">
      <h2>Video</h2>
      <div class="p0">
         <?php 
          $query=mysqli_query($con,"SELECT * FROM vidio ORDER BY id_vidio DESC");
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
      <!-- <p><a href="#">Download Lilly Watson - One More Chance Music Video</a></p> -->
    </div>
    <div class="col-3">
      <?php include "col3.php" ?>
    </div>
  </article>