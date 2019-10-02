<?php
$host = 'localhost';
$uname = 'root';
$password = '';
$dbname = 'agency';


  $con = mysqli_connect($host, $uname, $password, $dbname);


if (!$con) {
	echo "Error";
}	
session_start();
?>