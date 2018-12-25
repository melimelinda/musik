<?php 
          $query=mysqli_query($con,"SELECT * FROM kontak ORDER BY id_kontak");
          $no=1;
          while($var=mysqli_fetch_array($query)){
         ?>
<div class="col-3">
      <h2>Find Me</h2>
      <ul class="soc-ico">
        <li><a href="<?php echo "$var[fb]"; ?>"><img src="images/facebook.png" alt=""></a></li>
        <li><a href="<?php echo "$var[tw]"; ?>"><img src="images/twitter.png" alt=""></a></li>
        <li><a href="<?php echo "$var[ig]"; ?>"><img src="images/ig2.png" height="30px" width="30px"; alt=""></a></li>
      </ul>
    </div>
    <?php } ?>