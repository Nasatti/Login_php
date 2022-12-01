<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles.css">
<body>
    <h1>Benvenuti nella 5ID!</h1>
    <div class="right">
        <button type="submit" value="Logout">logout</button>
    </div>
    <p class="center"><b>Elenco studenti:</b></p>

<?php
require('functions.php');
directory();

#session_destroy();
#header('Location: index.php');
?>
</body>
</html>