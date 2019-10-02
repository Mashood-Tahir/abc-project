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
$query="SELECT * FROM hotel WHERE id = '$id'";
$select=mysqli_query($con, $query);
$row=mysqli_fetch_assoc($select)
 ?>



	<form action="" method="POST">
		 Full-Name: <input type="text" name="fullname" value=" <?php echo $row['fullname'] ?> "><br>
		Father Name: <input type="text" name="fathername" value=" <?php echo $row['fathername'] ?> "><br>
		Phone Number: <input type="text" name="phone" value="<?php echo $row['phone'] ?>">
		<br>
		Catagory: <input type="text" name="catagory" value="<?php echo $row['catagory'] ?>">
		<br>
		Rome Type :<input type="text" name="room" value="<?php echo $row['room'] ?>">
		<br>
		Number Of Bed: <input type="text" name="bed" value="<?php echo $row['bed'] ?>">
		<input type="submit" name="submit" value="Update">
	</form>
<?php 
	if (isset($_POST['submit'])) {
		$fullname=$_POST['fullname'];
		$fathername=$_POST['fathername'];
		$catagory=$_POST['catagory'];
		$phone=$_POST['phone'];
		$room=$_POST['room'];
		$bed=$_POST['bed'];

$query = "UPDATE hotel SET fullname = '$fullname' , fathername = '$fathername' , catagory = '$catagory' , phone = '$phone', room = '$room', bed = '$bed' WHERE id = '$id'";
$update= mysqli_query($con , $query);
if ($update) {
		header("location:hotel-detail.php");
	}
}

 ?>


</body>
</html>