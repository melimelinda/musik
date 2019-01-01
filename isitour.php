<article id="content">
   <?php include "col1.php" ?>
    <div class="col-2">

      <h2 class="pl">Tour Dates</h2>
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
    <div class="col-3">
      <?php include "col3.php" ?>
    </div>
  </article>