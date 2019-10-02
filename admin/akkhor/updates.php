<?php require_once "includes/connections.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mashood Tahir</title>
</head>
<body>
<?php 
$id = $_GET['id'];	
$query="select * from datainpute where id = '$id'";
$select=mysqli_query($con, $query);
$row=mysqli_fetch_assoc($select);
 ?>



	<form action="" method="POST">
		<div class="form-row">
    <div class="col-12 text-center">
    <h1 class="text-uppercase">Find your Tour</h1>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault01"><b>First name</b></label>
      <input type="text" placeholder="First name" name="fname" value=" <?php echo $row['fname'] ?>"  required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02"><b>Last name </b></label>
      <input type="text" placeholder="Last name" value="<?php echo $row['lname'] ?>" name="lname" required>
    </div>
    <div class="col-md-2 mb-3">
      <label for="validationDefaultUsername"><b>Category</b></label>
       <select required name="catagory" value=" <?php echo $row['catagory'] ?>">
        <option selected>Choose...</option>
        <option value="Asia">Asia</option>
        <option value="Europe">Europe</option>
        <option value="North America">North America</option>
        <option value="South America">South America</option>
      </select>
    </div>
    <div class="col-md-2 mb-3">
      <label for="validationDefaultUsername"><b>Duration</b></label>
       <select value=" <?php echo $row['duration'] ?>" required name="duration">
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
       <select value=" <?php echo $row['city'] ?>" required name="city">
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
       <select value=" <?php echo $row['country'] ?>" required name="country">
        <option selected>Choose...</option>
        <option value="PAKISTAN">PAKISTAN</option>
        <option value="INDIA">INDIA</option>
        <option value="NORTH AMERICA">NORTH AMERICA</option>
        <option value="SOUTH AMERICA">SOUTH AMERICA</option>
        <option value="AFGHANISTAN">AFGHANISTAN</option>
        <option value="PASHAWER">PASHAWER</option>
      </select>
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
  <button class="btn btn-primary badge-pill pl-4 pr-4" type="submit" name="submit">UpDate</button>
	</form>
<?php 
	if (isset($_POST['submit'])) {
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$catagory=$_POST['catagory'];
		$duration=$_POST['duration'];
		$city=$_POST['city'];
		$country=$_POST['country'];

$query = "UPDATE datainpute  SET fname = '$fname' , lname = '$lname' , catagory = '$catagory' , duration = '$duration' , city = '$city' , country = '$country' WHERE id = '$id'";
$update= mysqli_query($con , $query);
if ($update) {
		header("location:booking-data.php");
	}
}

 ?>


</body>
</html>