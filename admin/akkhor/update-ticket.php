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
$query="select * from ticket where id = '$id'";
$select=mysqli_query($con, $query);
$row=mysqli_fetch_assoc($select)
 ?>



	<form action="" method="POST">
		 Departure: <input type="text" name="departure" value=" <?php echo $row['departure'] ?> "><br>
		Arrival to: <input type="text" name="arrival" value=" <?php echo $row['arrival'] ?> "><br>
		Date: <input type="date" name="dates" value="<?php echo $row['pass'] ?>"><br>
		Passport Number: <input type="text" name="passport" value="<?php echo $row['passport'] ?>">
		<br>
		Phone Number: <input type="phone" name="phone" value="<?php echo $row['phone'] ?>">
		<br>
		Air Line :<input type="text" name="air" value="<?php echo $row['air'] ?>">
		<input type="submit" name="submit" value="Update">
	</form>
<?php 
	if (isset($_POST['submit'])) {
		$departure=$_POST['departure'];
		$arrival=$_POST['arrival'];
		$dates=$_POST['dates'];
		$passport=$_POST['passport'];
		$phone=$_POST['phone'];
		$air=$_POST['air'];

$query = "UPDATE ticket SET departure = '$departure' , arrival = '$arrival' , dates = '$dates' , passport = '$passport', phone = '$phone', air = '$air' WHERE id = '$id'";
$update= mysqli_query($con , $query);
if ($update) {
		header("location:ticket-details.php");
	}
}

 ?>


</body>
</html>