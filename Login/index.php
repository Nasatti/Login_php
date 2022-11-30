<!DOCTYPE html>
<html>
<body>
<h1>Login</h1>
<form action="index.php" method="post">
  <label>Username:</label><br>
  <input type="text" name="username"><br>
  <label>Password:</label><br>
  <input type="password" name="password"><br><br>
  <input type="submit" value="Submit">
  <label>Non sei registrato? <a href="/5ID/registrati.php">REGISTRATI</a></label>

<?php
    require('functions.php');
  if (isset($_POST['username']) && isset($_POST['password'])){
  if(login($_POST['username'], $_POST['password'])==true){
      header("Location: accesso.php");
   }
   else{
      header("Location: index.php");
   }
  }
?>
</form> 
</body>
</html>