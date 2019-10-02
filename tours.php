<?php
include "navslicing.php";


?>
<div class="container-fluid" style="
			position: relative;
			width: 100%;
			min-height: 800px;
			margin: auto;
			background-image: url(backgroundimage/passport-cover-plane-rustic-wood-table-background-travel-traveling-theme-copy-space-97163164-1.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;">
  <div class="container-fluid">
    
    <?php 
      $query= "SELECT * FROM tour";
      $select= mysqli_query($con, $query);

?>
    <div class="row">
      <?php  while ($row = mysqli_fetch_assoc($select)) {  
    ?>
   <div class="card col-lg-3" style="margin: 50px; ">
    <div class="card-img">
        <img src="admin/akkhor/media/<?php echo $row['file']; ?>" class="card-img-top"  alt="...">

    </div>
    
    <div class="card-body">
      <h5 class="card-title text-success"><?php echo $row["titlename"]; ?></h5>
      <p class="card-text text-dark"><?php echo $row['textarea']; ?></p>
      <a href="datainput.php" class="btn btn-primary">Submit</a>
    </div>
          </div>
<?php 
}
 ?>
  
  
  
            <div class="text-center">
              <a href="https://www.facebook.com/" class="p-2"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/" class="p-2"><i class="fab fa-instagram"></i></a>
              <a href="https://twitter.com/" class="p-2"><i class="fab fa-twitter"></i></a>
              <a href="https://mail.google.com/" class="p-2"><i class="fas fa-mail-bulk"></i></a>
</div>

          </div>
			</div>
			</div>
</div>
<?php

include "ftrslicing.php";

?>