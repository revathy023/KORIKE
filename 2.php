<?php   session_start();  ?>

<html>
  <head>
       <title> Home </title>
  </head>
  <body>
<?php
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:1.php");  
       }

          echo $_SESSION['use'];

          echo "Login Success";

          echo "<a href='3.php'> Logout</a> "; 
?>
</body>
</html>