<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "fileproject";
$conn = new mysqli($servername, $username, $password, $dbname);
/*if($conn->connect_error){
	die("database not connected". $conn->connect_error);
}
else {
	echo "database connected";
}

$sql = "CREATE DATABASE  fileproject";
if($conn->query($sql) == true){
   echo "database crteated";
}
else {

	die("databse not created". $conn->error);
}
*/

$sql = "CREATE TABLE my_shop (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
proname VARCHAR(30) NOT NULL,
proquntiy VARCHAR(30) NOT NULL,
prointre VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

//my teble create//










//my name is  bhawana //
