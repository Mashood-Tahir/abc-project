<?php 
include "connections.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mashood Tahir</title>
</head>
<body>
<?php 
$query="select * from users";
$select=mysqli_query($con,$query);



 ?>

<table border="2px">
	<tr>
		<th>ID</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Password</th>
		<th>DELETE</th>
		<th>UPDATE</th>
	</tr>
	<?php while ($row=mysqli_fetch_assoc($select)) {
		
	 ?>
	<tr>
		<td> <?php echo $row['id']; ?> </td>
		<td> <?php echo $row['fname']; ?> </td>
		<td> <?php echo $row['lname']; ?> </td>
		<td> <?php echo $row['pass']; ?> </td>
		<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a> </td>
		<td><a href="update.php?id=<?php echo $row['id']; ?>">Update</a> </td>
	</tr>
	<?php 
	} 
	?>
</table>









</body>
</html>