<!DOCTYPE html>
<html>
<body>
<h1>Registrazione</h1>
<form action="registrati.php" method="post">
        <input type="email" name="email" placeholder="Email"><br>
        <input type="text" name="name" placeholder="Nome Utente"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit">
    </form>
<?php
require("functions.php");
if (isset($_POST['email'])) {
    register($_POST['email'], $_POST['name'], md5($_POST['password']));
    header('Location: index.php');
}
?>