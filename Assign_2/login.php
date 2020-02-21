<?php
$servername = "localhost";
$username = "root";
$password = "assassin5";
$dbname = "test";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
	die("Connection failed: " .mysqli_connect_error());
}

if (isset($_POST['username'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
$sql="SELECT * FROM login WHERE UserName='".$username."' AND password='".$password."' LIMIT 1";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)==1){
	echo "You have successfully logged in.";
	exit();
}else{
	echo "Invalid Login Information. Please Try again.";

}
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<title></title>
</head>
<body>
<form method="post" action="login.php">

	Username: <input type="text" name="username"><br/><br/>
	Password : <input type="password" name="password"><br/><br/>
	<input type="submit" value="Log in">
</form>
</body>
</html>