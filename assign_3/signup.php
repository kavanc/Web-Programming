<?php
if(isset($_POST['sign-sub'])){

  require 'dbf.php';

  $username = $_POST['user'];
  $email = $_POST['email1'];
  $firstName = $_POST['first'];
  $lastName = $_POST['last'];
  $password = $_POST['passw'];
  

 if(!(filter_var($email, FILTER_VALIDATE_EMAIL)) ) {
    header("Location: /login_assign_3.html?error=invalidemail");
    exit();
  }
  else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: /login_assign_3.html?error=invalidusername");
    exit();
  }
  else if(!preg_match("/^[a-zA-Z0-9]*$/", $firstName)) {
    header("Location: /login_assign_3.html?error=invalidfirstname");
    exit();
  }
  else if(!preg_match("/^[a-zA-Z0-9]*$/", $lastName)) {
    header("Location: /login_assign_3.html?error=invalidlastname");
    exit();
  }
 
 else {

      $sql = "INSERT INTO users (FirstName, LastName, Username, Password, EmailAddress) VALUES(?, ?, ?, ?, ?)";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location /login_assign_3.html?error-sqlerror");
        exit();
      }else{
        mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $username, $password, $email);
        mysqli_stmt_execute($stmt);
        echo '<script type="text/javascript">';
        echo ' alert("Sign Up Success")';
        echo '</script>';
        header("Location: /login_assign_3.html");
      }


    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);


  }else{
    header("Location: /login_assign_3.html");
    exit();

  }


?>