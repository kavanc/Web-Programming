<?php
$servername = "localhost";
$username = "root";
$password = "assassin5";
$dbname = "test";

$conn= mysqli_connect ($servername, $username, $password, $dbname);
if (!$conn){
	die("Connection failed: " . mysqli_connect_error());
	if(isset($_POST['name'])){
		$username=$_POST['name'];

	 $sql = "SELECT * FROM view WHERE name='".$username."' ";	
	 $result = mysqli_query($conn,$sql);

	 if(mysqli_num_rows($result)>0){
	 	while ($row = mysqli_fetch_assoc($result)) {
	 		echo "id: " . $row["id"]. "- Name: " . $row["name"]. "Email: ". $row["email"]. "Postal: " . $row["Postal"]. "<br>";
	 	}
	 }else{
	 	echo "None";
	 }

	}
	mysqli_close($conn);

}