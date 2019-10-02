<?php
require_once "navslicing.php";
?>
<?php require_once "connections.php"; 
if (empty($_SESSION['id'])) {
  header('location:connect.php');
}
?>

<div class="container-fluid" style="
			position: relative;
			width: 100%;
			height: 800px;
			margin: auto;
			background-image: url(backgroundimage/passport-cover-plane-rustic-wood-table-background-travel-traveling-theme-copy-space-97163164-1.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;">
			<div class="col-lg-12 text-white text-center" style="padding-top: 120px;">
				<div class="col-lg-12 text-white text-center" >
				          <div class="">
        <div class="container-fluid">
  <div class="row">
  
                    <!-- Add Transport Area Start Here -->
                    <div class="col-4-xxxl col-12">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h1 class="">Find Your Route</h1>
                                    </div>
                                </div>
                                <form class="new-added-form" method="POST">
                                    <div class="row">
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Departure to</label>
                                            <input type="text" name="departure" placeholder="Faisalabad" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Arrival to</label>
                                            <input type="text" name="arrival" placeholder="Karachi" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>date</label>
                                            <input type="date" name="dates" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Passport Number</label>
                                            <input type="text" name="passport" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group">
                                            <label>Phone Number</label>
                                            <input type="text" name="phone" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-12-xxxl col-xl-4 col-sm-6 col-12 form-group formc">
                                            <label>Air Line</label>
                                            <select class="custom-select mr-sm-2 form-control" name="air" id="inlineFormCustomSelect" required name="city">
        <option selected>Choose...</option>
        <option value="Fly Dubai">Fly Dubai</option>
        <option value="EMIRATES">EMIRATES</option>
        <option value="Fly Nas">Fly Nas</option>
        <option value="Shaheen Air">Shaheen Air</option>
        <option value="Sareen Air">Sareen Air</option>
        <option value="Etihad">Etihad</option>
        <option value="Kuwait">Kuwait</option>
        <option value="Saudi Airline">Saudi Airline</option>
        <option value="PIA">PIA</option>
        <option value="Other">Other</option>
      </select>
                                        </div>
                                        <div class="col-12 form-group mg-t-8">
<button type="submit" name="submit" class="btn-lg btn-secondary badge-pill ">Save</button>
<button type="reset" class="btn-lg btn-secondary badge-pill">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
 <?php
  if (isset($_POST['submit'])) {
      $departure=$_POST['departure'];
      $arrival=$_POST['arrival'];
      $dates=$_POST['dates'];
      $passport=$_POST['passport'];
      $phone=$_POST['phone'];
      $air=$_POST['air'];

      $query="INSERT INTO ticket(departure, arrival, dates, passport, phone, air) values('$departure','$arrival','$dates','$passport', '$phone','$air')";

          if (mysqli_query($con, $query)) {
     echo "your tourticket ditail is submit";
          }
          else{
            echo "error";
          }
         


  }


?>





      

    </div>
  </div>
  </div>
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