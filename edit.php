<!DOCTYPE HTML>
<html> 
	<head>
		<title>Edit Page</title>
	<style>
	table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>

	</head> 
<body>
	<h1>Edit Page</h1>
<?php 

 $id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fileproject";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("database not connected" . $conn->connect_error);
}
$sql = "SELECT * FROM `my_shop` WHERE `id`='".$id."'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
while($row = mysqli_fetch_assoc($result)) {
 $name = $row["proname"];
 $email = $row["proquntiy"];
//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	}
} else {
echo "0 results";
}

?>
<form method="POST">
      <label for="proname">proname :</label><br>
     <input type="text" name= "proname" value="<?php echo $name;?>" >
     <label for="proquntiy">proquntiy :</label>
     <input type="text" name= "proquntiy" value="<?php echo $email;?>">
    <label for="prointre">prointre :</label>
     <input type="text" name= "prointre" >
    <input type="submit" name="update" value ="Update data">

</form>


<?php

if(isset($_POST['update'])){
	
echo $name = $_POST['proname'];
echo $prodcut = $_POST['proquntiy'];
$sql = "UPDATE `my_shop` SET `proname`='".$name."',`proquntiy`='".$prodcut."' WHERE `id`='".$id."'";
//$sql = "UPDATE `my_shop` SET `proname`='".$name ."',`proquntiy`='".$prodcut ."' WHERE `id`='".$id."'";

if ($conn->query($sql) === TRUE) {
 header("location:db.php");
} else {
echo "Error updating record: " . $conn->error;
}

}


?>
</body>

</html>
