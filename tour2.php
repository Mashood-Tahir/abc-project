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
<?php 
$card = array("UMMRAH" , "Singapore" , "India" , "Tickets" , "Bangladesh" , "DUBAI" , "Malaysia" , "Thailand" , "Azerbaijan" , "Nature" , "Euorp" , "Documents", "Beach", "Fotolia", "Hotal");
$a=count($card);

$text = array("The Best UMMRAH package are available in TravelOnline." ,"All Singapore Vist's Visas are available in TravelOnline." , "All India Vist's Visas are available in TravelOnline" , "The Best Tickets are available in TravelOnlin." , "All Bangladesh Vist's Visas are available in TravelOnline." , "The Best Dubai Tour's package are available in TravelOnlin." , "All Malaysia Vist's Visas are available in TravelOnline" , "All Thailand Vist's Visas are available in TravelOnline." , "All Azerbaijan Vist's Visas are available in TravelOnline" , "Mountain's Tours is the best way to relax the mind." , "Euorp Countries" , "Documents maintains" , "Beach tour" , "Fotolia" , "Hotaling" );
$link= array('datainput.php','datainput.php','datainput.php','datainput.php','datainput.php','datainput.php','datainput.php','datainput.php','datainput.php','datainput.php','datainput.php','datainput.php','datainput.php','datainput.php','datainput.php',);

for ($i=0; $i < $a ; $i++) { 
 



 ?>

<div class="card m-5  ml-5 col-lg-3 d-inline-flex">
  <img src="<?php echo 'tourimage/tour' . $i . '.jpg'?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">
      <?php echo $card[$i] ;?>
        
      </h5>
    <p class="card-text"><?php echo $text[$i]?></p>
    <a href="<?php echo $link[$i] ?>" class="btn btn-primary">Submit</a>
  </div>
</div>
<?php 
}
 ?>
            <ul class="list-unstyled footer-link d-flex footer-social" style="margin-left: 530px">
              <li><a href="https://www.facebook.com/" class="p-2"><i class="fab fa-facebook-f"></i></span></a></li>
              <li><a href="https://www.instagram.com/" class="p-2"><i class="fab fa-instagram"></i></a></li>
              <li><a href="https://twitter.com/" class="p-2"><i class="fab fa-twitter"></i></a></li>
              <li><a href="https://mail.google.com/" class="p-2"><i class="fas fa-mail-bulk"></i></a></li>
            </ul>

          </div>
			</div>
			</div>
</div>
<?php

include "ftrslicing.php";

?>