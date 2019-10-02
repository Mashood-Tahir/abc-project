 <?php 
include "includes/connections.php";

$id = $_GET['id'];


$query="DELETE FROM hotel WHERE id = '$id'";
$delete = mysqli_query($con, $query);


if ($delete) {
	header("location:hotel-detail.php");
}
?>