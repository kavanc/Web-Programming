<?php
if ( !empty( $_POST ) ){


	$dbhost="localhost";
	$dbuser="form_user";
	$dbpass="1234";
	$dbname="reg_form";
	$connection= mysqli_connect ($dbhost,$dbuser,$dbpass,$dbname);
	if(mysqli_connect_errno()){
		die("Database connection failed: " . mysqli_connect_error(). "(" . mysqli_connect_errno() . ")");
	}
	$sql = "INSERT INTO information (name, city,gender,age ) VALUES ('{$connection->real_escape_string($_POST['name'])}','{$connection->real_escape_string($_POST['city'])}','{$connection->real_escape_string($_POST['gender'])}','{$connection->real_escape_string($_POST['age'])}')";
		$insert = $connection->query($sql);
		if ($insert == TRUE){
		  echo"<h1>Success! Thank you for your time! <h1>";
		}else{
			die("Error: {$connection->error} : {$connection->error}");
		}
$connection->close();
}		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
</head>
<body>
<h1 align="center">Sign up for updates about our new project</h1>
<form method="post" action="">
<fieldset>
<legend>Registration form</legend>
	Name: <input name="name" type="text"><br><br>
	City: <input name="city" type="text"><br><br>
	Gender: <input name="gender" type="text"><br><br>
	Age: <input name="age" type="text"><br><br>
	<input type="submit" value="Submit form"><br><br>
</fieldset>
</form>
<?php
?>
</body>
</html>