<?php 
include "includes/connections.php";
$id = $_GET['id'];
$trash = $_GET['trash'];

$query = "UPDATE datainpute SET trash = '$trash'  WHERE id = '$id'";
$update= mysqli_query($con , $query);
if ($update) {
		header("location:booking-data.php");
	}

 ?>
