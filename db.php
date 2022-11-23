<!DOCTYPE HTML>
<html> 
	<head>
	<style>
	table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
padding: 10px 10px 10px 10px;

}
	</style>
	</head> 
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
require_once "vendor/autoload.php";
use Faker\Factory as F;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fileproject";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("database not connected" . $conn->connect_error);
}

$faker = F::create();
// generate data by calling methods
//echo $faker->phoneNumber();
$faker->name();

/*for ($x = 0; $x < 10; $x++) {
   $name = $faker->name();
    $email = $faker->email();
   $insert = "INSERT INTO `my_shop`( `proname`, `proquntiy`) VALUES('". $name ."','". $email ."')";
   if ($conn->query($insert) !== TRUE) {
  echo "Error" . $conn->error;
} 
}
*/





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



   if(isset($_POST['send'])){
	
	
  if($_SERVER["REQUEST_METHOD"] == "POST") {
     $proname = $_POST['proname'];
     $proquntiy = $_POST['proquntiy'];
     $fekar =  $_POST['prointre'];




}
} 
*/
// Insert Query 
/*$sql = "INSERT INTO my_shop (`proname` , `proquntiy`, `prointre`)
VALUES ('".$proname ."' , '". $proquntiy . "' ,'". $prointre ."')";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
}*/

//Delete Query 
/*$delet = "DELETE FROM `my_shop` WHERE id=115";

if ($conn->query($delet) === TRUE) {
  echo "Record deleted ";
} else {
  echo " not deleted " . $conn->error;
}
*/

$sql = "SELECT * FROM my_shop";
if ($res = mysqli_query($conn, $sql)) {
if (mysqli_num_rows($res) > 0) {
echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Firstname</th>";
echo "<th>Lastname</th>";
echo "<th>Edit</th>";
echo "<th>Delete</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($res)) {
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['proname']."</td>";
echo "<td>".$row['proquntiy']."</td>";  ?>
<td><a href=edit.php?id=<?php echo $row['id'];?>>Edit</a></td>
<td><a href=delete.php?id=<?php echo $row['id'];?>>Delete</a></td>
<?php echo "</tr>";
}
echo "</table>";
mysqli_free_result($res);
}
else {
echo "No matching records are found.";
}
}
else {
echo "ERROR: Could not able to execute";
}
mysqli_close($conn);

?>
</body>

</html>
