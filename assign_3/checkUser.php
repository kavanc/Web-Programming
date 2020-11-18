<?php
require("dbf.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")){

	$username=mysqli_real_escape_string($conn,$_POST['email']);
	$password==mysqli_real_escape_string($conn,$_POST['pass']);

$sql="SELECT id FROM login admin username = '$username' AND password = '$password' LIMIT 1";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$active = $row['active'];

$count = mysqli_num_rows($result);

 if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }

else{
  header("Location: /login_assign_3.html);
  exit();
}
?>
