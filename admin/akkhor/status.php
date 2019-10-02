<?php 
include "includes/connections.php";
$id = $_GET['id'];
$status = $_GET['status'];

$query = "UPDATE datainpute SET status = '$status'  WHERE id = '$id'";
$update= mysqli_query($con , $query);
if ($update) {
		header("location:booking-data.php");
	}

 ?>
