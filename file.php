<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	

<form action="upload.php" method="post" enctype="multipart/form-data">

<input type="file" name="file">
<input type="submit" name="upload">

</form>

<?php 


if (isset($_POST['upload'])) {
	

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

}


?>




</body>
</html>