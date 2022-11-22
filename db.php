<!DOCTYPE HTML>
<html>  
<body>

<form method="POST">
      <label for="proname">proname :</label><br>
     <input type="text" name= "proname" ><br>
     <label for="proquntiy">proquntiy :</label><br>
     <input type="text" name= "proquntiy" ><br>
    <label for="prointre">prointre :</label><br>
     <input type="text" name= "prointre" ><br>
    <input type="submit" name="send" value ="insert data">

</form>


<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname  = "fileproject";
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("database not connected". $conn->connect_error);
}

/*$sql = "CREATE DATABASE  fileproject";
if($conn->query($sql) == true){
   echo "database crteated";
}
else {

	die("databse not created". $conn->error);
}


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

*/

/*if(isset($_POST['send'])){
	
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $proname = $_POST['proname'];
     $proquntiy = $_POST['proquntiy'];
     $prointre =  $_POST['prointre'];


$insert = "INSERT INTO `my_shop`(proname , proquntiy , prointre) VALUES('".$proname ."' , '". $proquntiy . "' ,'". $prointre ."')";

if ($conn->query($insert) === TRUE) {
  echo "New record successfully";
} else {
  echo "Error" . $conn->error;
}

}
} 
$sql = "INSERT INTO my_shop (proname , proquntiy, prointre)
VALUES ('".$proname ."' , '". $proquntiy . "' ,'". $prointre ."')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}

$delet = "DELETE FROM `my_shop` WHERE id=115";

if ($conn->query($delet) === TRUE) {
  echo "Record deleted ";
} else {
  echo " not deleted " . $conn->error;
}*/

?>
</body>

</html>
