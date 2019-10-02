<?php include "navslicing.php"; ?>
<?php ob_start(); ?>
<div class="container-fluid" style="
			position: relative;
			width: 100%;
			min-height: 800px;
			margin: auto;
			background-image: url(backgroundimage/bckgrnfimg2.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			background-attachment: fixed;">
    <div class="row">	
    <div class="col-lg-4 content-center">
    <form action="" method="POST" enctype="multipart/form-data">
    

 <div class="form-group">
      <label for="exampleDropdownFormEmail1" class="text-white">First Name</label>
      <input type="text" class="form-control" name="fname" id="exampleDropdownFormEmail1" placeholder="First Name">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormEmail1" class="text-white">Last Name</label>
      <input type="text" class="form-control" name="lname" id="exampleDropdownFormEmail1" placeholder="Last Name">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormEmail1 text-dark"  class="text-white">Email address</label>
      <input type="email" class="form-control" name="mail" id="exampleDropdownFormEmail1" placeholder="email@example.com">
    </div>
    <div class="form-group">
      <label for="exampleDropdownFormPassword1" class="text-white">Password</label>
      <input type="password" class="form-control" name="pass" id="exampleDropdownFormPassword1" placeholder="Password">
    </div>
     <div class="form-group">
      <label for="exampleDropdownFormPassword1" class="text-white">Re-Password</label>
      <input type="password" class="form-control" name="pass" id="exampleDropdownFormPassword1" placeholder="ReType-Password">
      <input type="file" name="file">
    </div>
    <div class="form-group">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" name="rem" id="dropdownCheck">
        <label class="form-check-label text-white" for="dropdownCheck">
          Remember me
        </label>
      </div>
    </div>
     <input type="submit" class="btn-primary badge-pill " name="submit">
</form>
    	</div>
    </div>
<?php
  if (isset($_POST['submit'])) {
      
      $target_dir = "media/";
      $target_file = $target_dir . basename($_FILES["file"]["name"]);
      $file = basename($_FILES["file"]["name"]);
              move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);


      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $mail=$_POST['mail'];
      $pass=$_POST['pass'];
      $rem=$_POST['rem'];

      $query="insert into users(fname, lname, mail, pass, file, rem) values('$fname','$lname','$mail','$pass', '$file','$rem')";

          if (mysqli_query($con, $query)) {
     
            header("location:connect.php");
          }
         


  }


?>





			</div>
			</div>
<?php

include "ftrslicing.php";

?>