<article id="content">
    <?php include "col1.php" ?>
    <div class="col-2">
      <h2>Audio</h2>
      <ul class="audio">
        <?php 
          $query=mysqli_query($con,"SELECT * FROM musik ORDER BY id_musik DESC");
            while ($var = mysqli_fetch_array($query)) {
         ?>
        
        <li><span class="info"><?php echo "$var[penyanyi]"; ?> - <?php echo "$var[judul_lagu]"; ?></span> 
          <?php echo '<a href="play.php?name='.$var['file'].'">'.$var['file'].'</a>'; ?>
          <a <?php echo "href='lirik.php?id_musik=$var[id_musik]'"; ?>>Lyrics</a>
        </li>
        <?php 
        
              
          }
         ?>
    </div>
    <div class="col-3">
      <?php include "col3.php" ?>
    </div>
  </article>