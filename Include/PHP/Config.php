<?php 

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "contactDB";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if(!$conn){
	echo "Connection faild!";
	exit();
}	
?>