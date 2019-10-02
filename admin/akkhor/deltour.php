<?php 
include "includes/connections.php";

$id = $_GET['id'];


$query="DELETE FROM tour WHERE id = '$id'";
$delete = mysqli_query($con, $query);


if ($delete) {
	header("location:tour.php");
}
?>