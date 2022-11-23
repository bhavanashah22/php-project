<!DOCTYPE HTML>
<html> 
	<head>
		<title>Delete Page</title>
	<style>
	table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 35px 70px 50px 90px;
}
</style>

	</head> 
<body>
	<h1>delete Page</h1>
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
while($row = mysqli_fetch_assoc($result)) {
 $name = $row["proname"];
 $email = $row["proquntiy"];

}
} else {
echo "0 results";
}

if(isset($_POST['delete'])){
echo $name = $_POST['proname'];
echo $prodcut = $_POST['proquntiy'];
echo $id_name = $_post["id"]; 
 $sql = "DELETE FROM `my_shop` WHERE id= '".$id."' ";
if ($conn->query($sql) === TRUE) {
 header("location:db.php");
} else {
echo "not delete " . $conn->error;
}

}
?>
<form method="POST">
      <label for="proname">proname :</label><br>
     <input type="text" name= "proname" value="">
     <label for="proquntiy">proquntiy :</label>
     <input type="text" name= "proquntiy" value="">
    <label for="prointre">prointre :</label>
     <input type="text" name= "prointre" >
    <label for="id"> id_name </label>
    <input type="text" name= "id"  value= "">
    <input type="submit" name="delete" value ="delete data">

</form>
