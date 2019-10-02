<?php require_once "includes/connections.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mashood Tahir</title>
</head>
<body>
<?php 
$id=$_GET['id'];
$query="SELECT * FROM users WHERE id = '$id'";
$select=mysqli_query($con, $query);
$row=mysqli_fetch_assoc($select);
 ?>



	<form action="" method="POST">
		 Enter Firstname: <input type="text" name="fname" value=" <?php echo $row['fname'] ?> "><br>
		Enter Lastname: <input type="text" name="lname" value=" <?php echo $row['lname'] ?> "><br>
		Enter Password: <input type="text" name="pass" value="<?php echo $row['pass'] ?>"><br>
		<input type="submit" name="submit" value="Update">
	</form>
<?php 
	if (isset($_POST['submit'])) {
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$pass=$_POST['pass'];

$query = "UPDATE users SET fname = '$fname' , lname = '$lname' , pass = '$pass' WHERE id = '$id'";
$update= mysqli_query($con , $query);
if ($update) {
		header("location:customer-data.php");
	}
}

 ?>


</body>
</html>