<article id="content">
  <div class="col-lg-3">
    <?php include "col1.php" ?>
  </div>
  <div class="col-lg-6">
    <div class="col-2">
      <h2>Contact Form</h2>
      <form action="admin/savemsg.php" id="form1" method="POST">
        <fieldset>
          <label>Your Name:
            <input type="text" name="nama">
          </label>
          <label>Your E-mail:
            <input type="email" name="email">
          </label>
          <label>Your City:
            <input type="text" name="kota">
          </label>
          <label class="msg">Your Message:
            <textarea name="pesan"></textarea>
          </label>
          <div class="btns">
            <button class="btn btn-primary" type="submit">Save</button>
            <button class="btn btn-default" type="button">Cancel</button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
  <div class="col-lg-3">
    <h2>Our Contacts</h2>
      <ul class="contacts blo">
        <?php 
          $query=mysqli_query($con,"SELECT * FROM kontak ORDER BY id_kontak");
          $no=1;
          while($var=mysqli_fetch_array($query)){
         ?>
        <li><span>Name     :</span><?php echo "$var[nama]"; ?></li>
        <li><span>Country  :</span><?php echo "$var[negara]"; ?></li>
        <li><span>City     :</span><?php echo "$var[kota]"; ?></li>
        <li><span>Telephone:</span><?php echo "$var[notelp]"; ?></li>
        <li><span>Email:</span><?php echo "$var[email]"; ?></li>
        <?php 
          }
         ?>
      </ul>
    <?php 
      include "col3.php";
     ?>
  </div>
  </article>