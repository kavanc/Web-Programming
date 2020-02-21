<?php
   include('checkUser.php');
?>
<html">
   
   <head>
      <title>Welcome to my website </title>
   </head>
   
   <body>
      <h1>Welcome
      <?php 
      echo $login_session; 
      ?>
      	 </h1> 
     
   </body>
   
</html>