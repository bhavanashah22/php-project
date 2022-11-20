<?php 
$servername = "localhost";
$username = "root";
$password = "";
//$dbname  = "project_c";
$conn = new mysqli($servername, $username, $password,);
/*if($conn->connect_error){
	die("database not connected". $conn->connect_error);
}
else {
	echo "database connected";
}
*/
$sql = "CREATE DATABASE  fileproject";
if($conn->query($sql) == true){
   echo "database crteated";
}
else {

	die("databse not created". $conn->error);
}
//my name is  bhawana //
