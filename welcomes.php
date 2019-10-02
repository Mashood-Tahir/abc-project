<?php
include "connections.php";
// if (empty($_SESSION['id'])) {
// 	header("location:connect.php");
// 	}
?>


<?php
include "navslicing.php";
?>
<!-- 	<?php 
		// $id = $_SESSION['id'];
		// $query="select * from users where id = '$id'";
		// $select= mysqli_query($con, $query);
		// $row=mysqli_fetch_assoc($select);

		echo "Welcome " . $row['fname'];


	 ?> -->
<br>
	<img src="media/<?php echo $row['file'] ?>" alt="">
	 <a href="logouts.php">Log Out</a>


<?php

include "ftrslicing.php";

?>

