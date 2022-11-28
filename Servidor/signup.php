<?php
session_start();

include 'database.php';

$name = "";
$password = "";
$confirm_password = "";
$email = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $password = $_POST['password'];
  $confirm_password = $_POST['confirm_password'];
  $email = $_POST['email'];

  if (isset($_SESSION['name'])) {
    header("Location: login.php"); //lugar para redirigir cuanto esta logueado 
  }
  if ($_POST['name'] == "" || $_POST['password'] == "") {
    echo "Faltan campos";
  } else {
    if ($password == $confirm_password) {
      $sql = "SELECT * FROM users where name='$name'";
      $result = mysqli_query($conn, $sql);
      if (!$result->num_rows > 0) {
        $sql = "INSERT INTO users (name,password,email) VALUES ('$name','$password','$email')";
        $result = mysqli_query($conn, $sql);
        $sql = "INSERT INTO Partida (nombre,partidas_ganadas,aciertos,fallos) VALUES ('$name',0,0,0)";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          echo "Usuario registrado con exito";
          $name = "";
          $_POST["password"] = "";
          $_POST["confirm_password"] = "";
        } else {
          echo "Hay un error";
        }
      } else {
        echo "El usuario ya existe";
      }
    } else {
      echo "Las contraseñas no coinciden";
    }
  }
}
?>
<!DOCTYPE html>
<html>
<?php require 'header.php' ?>

<head>
  <meta charset="utf-8">
  <title>SignUp</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="estilo.css">

</head>

<body>
  <h1>SignUp</h1>
  <span>or <a href="login.php">Login</a></span>

  <form action="" method="POST">
    <input name="name" type="text" required pattern="[A-Za-z0-9]{5,40}" placeholder="Enter your name">
    <input name="email" type="text" required pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Enter your Email">
    <input name="password" type="password" required pattern="[A-Za-z0-9]{5,40}" placeholder="Enter your Password">
    <input name="confirm_password" type="password" required pattern="[A-Za-z0-9]{5,40}" placeholder="Confirm Password">
    <input type="submit" id="validar" value="Submit">
  </form>

</body>

</html>

