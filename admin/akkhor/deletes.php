<?php 
include "includes/connections.php";

$id = $_GET['id'];


$query="DELETE FROM datainpute WHERE id = '$id'";
$delete = mysqli_query($con, $query);


if ($delete) {
	header("location:booking-data.php");
}
else {
	echo "error";
}
?>