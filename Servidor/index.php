<?php
session_start();


$date = date('m/d/Y g:i A', time() + 3600 * 24);
setcookie("hora", date('m/d/Y g:i A'));


require 'database.php';

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Welcome to you WebApp</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php include 'header.php' ?>

  <?php if (isset($_SESSION["name"])) : ?>
    <br> Welcome <?= $_SESSION["name"]; ?>
    <br>You are Successfully Logged In
    <a href="logout.php">
      Logout
    </a>
    <br>
    <a href="hiragana.php">
      Jugar hiragana
    </a>
    </a>
  <?php else : ?>
    <h1>Please Login or SignUp</h1>
    <a href="login.php">Login</a> or
    <a href="signup.php">SignUp</a>
  <?php endif; ?>
</body>

</html>