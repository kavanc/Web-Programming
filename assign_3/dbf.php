<?php
$servername = "localhost";
$username = "root";
$password = "assassin5";
$dbname = "assignment3";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn){
	die("Connection failed: ");
}
?>