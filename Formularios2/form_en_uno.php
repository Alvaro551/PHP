<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["user"];
    $password = $_POST["password"];
    $data = array("alvaro" => "1234", "alex" => "a");
    if ($password === $data[$user]) {
        header("Location: principal.php");
    } else {

        $err = true;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Formulario de login</title>
    <meta charset="UTF-8">
</head>

<body>
    <?php if (isset($err)) {
        echo "<p> Revise usuario y contraseña</p>";
    } ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="user">Usuario</label>
        <input value="<?php if (isset($user)) echo $user; ?>" id="user" name="user" type="text">

        <label for="clave">Clave</label>
        <input id="password" name="password" type="password">

        <input type="submit">
    </form>
    <form action="registro.php" method="POST"> 
         <input type="submit">
    </form>
</body>
</html