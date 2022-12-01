<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles.css">
<body>
<h1>Login</h1>
<form action="index.php" method="post">
  <label>Username:</label><br>
  <input type="text" name="username"><br>
  <label>Password:</label><br>
  <input type="password" name="password"><br>
  <div class="center">
    <button type="submit">Submit</button><br><br>
  </div>
  <label>Non sei registrato? <a href="signup.php">REGISTRATI</a></label>

<?php
    require('functions.php');
  if (isset($_POST['username']) && isset($_POST['password'])){
  if(login($_POST['username'], $_POST['password'])==true){
      header("Location: 5ID.php");
   }
   else{
    header('Location: index.php?error=login');
   }
  }
?>
</form> 
</body>
</html>