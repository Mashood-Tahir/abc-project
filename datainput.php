<?php
require_once "navslicing.php";
?>
<?php 
if (empty($_SESSION['id'])) {
  header('location:connect.php');
}


?>

<div class="container-fluid" style="
			position: relative;
			width: 100%;
			height: 850px;
			margin: auto;
			background-image: url(backgroundimage/passport-cover-plane-rustic-wood-table-background-travel-traveling-theme-copy-space-97163164-1.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;">
			<div class="col-lg-12 text-white text-center" style="padding-top: 100px;">
				<div class="col-lg-12 text-white text-center" >
				          <div class="">
        <div class="container-fluid">
  <div class="row" style="color: gray;">
    <div class="col-12">
      <form method="POST" >
  <div class="form-row">
    <div class="col-12 text-center">
    <h1 class="text-uppercase">Find your Tour</h1>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault01"><b>First name</b></label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="First name" name="fname" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02"><b>Last name </b></label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" name="lname" required>
    </div>
    <div class="col-md-2 mb-3">
      <label for="validationDefaultUsername"><b>Category</b></label>
       <select  class="custom-select mr-sm-2" id="inlineFormCustomSelect" required name="catagory">
        <option selected>Choose...</option>
        <option value="Asia">Asia</option>
        <option value="Europe">Europe</option>
        <option value="North America">North America</option>
        <option value="South America">South America</option>
      </select>
    </div>
    <div class="col-md-2 mb-3">
      <label for="validationDefaultUsername"><b>Duration</b></label>
       <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required name="duration">
        <option selected>Choose...</option>
        <option value="1-7 Days Tour">1-7 Days Tour</option>
        <option value="1-15 Days Tour">1-15 Days Tour</option>
        <option value="1 Month Tour">1 Month Tour</option>
        <option value="3 Month Tour">3 Month Tour</option>
      </select>
    </div>
  </div>
  <div class="form-row">
   <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername"><b>City</b></label>
       <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required name="city">
        <option selected>Choose...</option>
        <option value="FAISALABAD">FAISALABAD</option>
        <option value="MULTAN">MULTAN</option>
        <option value="LAHORE">LAHORE</option>
        <option value="KARACHI">KARACHI</option>
        <option value="ISLAMABAD">ISLAMABAD</option>
        <option value="PASHAWER">PASHAWER</option>
      </select>
    </div>
     <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername"><b>country</b></label>
       <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required name="country">
        <option selected>Choose...</option>
        <option value="PAKISTAN">PAKISTAN</option>
        <option value="INDIA">INDIA</option>
        <option value="NORTH AMERICA">NORTH AMERICA</option>
        <option value="SOUTH AMERICA">SOUTH AMERICA</option>
        <option value="AFGHANISTAN">AFGHANISTAN</option>
        <option value="PASHAWER">PASHAWER</option>
      </select>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault05"><b>Date</b></label>
      <input type="date" class="form-control" id="validationDefault05" required name="date">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <button class="btn btn-primary badge-pill pl-4 pr-4" type="submit" name="submit">Submit</button>
</form>
<?php
  if (isset($_POST['submit'])) {
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $catagory=$_POST['catagory'];
      $duration=$_POST['duration'];
      $city=$_POST['city'];
      $country=$_POST['country'];
      $date=$_POST['date'];

     // $status=$_POST['status'];

      $query="insert into datainpute(fname, lname, catagory,duration, city, country, date, status, trash) values('$fname','$lname','$catagory','$duration', '$city','$country', '$date', 'unapproved', 'no')";

          if (mysqli_query($con, $query)) {
     echo "your tour is book";
          }
          else{
            echo "error";
          }
         


  }


?>





      </div>
      </div>

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