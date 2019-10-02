<?php 
ob_start();
if (!empty($_SESSION['id'])) {
    header('location:datainput.php');
}

?>
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
<div class="card-body text-center">
    </div>
<form method="POST">
    <div class="col-lg-5">
          <div class="form-group">
            <label for="exampleDropdownFormEmail1 text-dark" class="text-white">Email address</label>
            <input type="email" name="mail" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
          </div>
          <div class="form-group">
            <label for="exampleDropdownFormPassword1" class="text-white">Password</label>
            <input type="password" name="pass" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
          </div>
    <div class="form-group">
          <div class="form-check">
            <input type="checkbox" name="rem" class="form-check-input" id="dropdownCheck">
            <label class="form-check-label text-white" for="dropdownCheck">
              Remember me
            </label>
            <br>
            <a href="account.php" class="text-white">create new account</a>
          </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Sign In</button>

      </div>

    </div>
    </div>
</form>
<?php

if (isset($_POST['submit'])) {
  $mail=$_POST['mail'];
  $pass=$_POST['pass'];
  $query ="select * from users where mail = '$mail'";
  $select=mysqli_query($con, $query);
  $row = mysqli_fetch_assoc($select); 

  if ($mail==$row['mail'] and $pass==$row['pass']) {

    $_SESSION['id'] = $row['id'];

  header("location:datainput.php");
  }
else{
    echo 'Username or password didnt match';

  }

}
?>




<?php
  
include "ftrslicing.php";

?>