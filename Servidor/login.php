<?php

session_start();

include 'database.php';

$name = "";
$password = "";
$confirm_password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $password = $_POST['password'];

  if (isset($_SESSION["name"])) {
    header("Location: index.php"); //lugar para redirigir cuanto esta logueado 
  }


  $name = $_POST["name"];
  $password = ($_POST["password"]);
  $sql = "SELECT * FROM users where name='$name' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION["name"] = $row["name"];
    header("Location: hiragana.php"); //lugar para redirigir cuanto esta logueado 
  } else {
    echo "Contraseña o usuario incorrecto";
  }
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php require 'header.php' ?>

  <?php if (!empty($message)) : ?>
    <p> <?php $message ?></p>
  <?php endif; ?>

  <h1>Login</h1>
  <span>or <a href="signup.php">SignUp</a></span>

  <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST" enctype="multipart/form-data">
    <input name="name" type="text" required pattern="[A-Za-z0-9]{5,40}" placeholder="Enter your name">
    <input name="password" type="password" required pattern="[A-Za-z0-9]{5,40}" placeholder="Enter your Password">
    <input type="submit" id="validar" value="Submit">
  </form>
</body>

</html>


