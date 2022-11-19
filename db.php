<?php 
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if($conn->connect_error){
	die("database not connected". $conn->connect_error);
}
else {
	echo "database connected";
}
$sql = "CREATE DATABASE shop";
if($conn->query($sql) == true){
   echo "database crteated";
}
else {

	die("databse not created". $conn->error);
}