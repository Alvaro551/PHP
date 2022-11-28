<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
/*
$post =   (isset($_POST['nombre']) && !empty($_POST['nombre'])) &&
          (isset($_POST['buscar']) && !empty($_POST['buscar'])) &&
        (isset($_POST['apellido']) && !empty($_POST['apellido'])) &&
        (isset($_POST['email']) && !empty($_POST['email'])) &&
        (isset($_POST['fecha']) && !empty($_POST['fecha'])) &&
        (isset($_POST['url']) && !empty($_POST['url'])) &&
        (isset($_POST['mes']) && !empty($_POST['mes'])) &&
        (isset($_POST['color']) && !empty($_POST['color'])) &&
        (isset($_POST['edad']) && !empty($_POST['edad']));


// Si $post es true (verdadero), entonces se mostrarán los resultados:
if ( $post ) {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $buscar = htmlspecialchars($_POST["buscar"]); 
    $apellido = htmlspecialchars($_POST["apellido"]);
    $email = htmlspecialchars($_POST["email"]);
    $fecha = htmlspecialchars($_POST["fecha"]);
    $url = htmlspecialchars($_POST["url"]);
    $edad = htmlspecialchars($_POST["edad"]);
    $mes =  htmlspecialchars($_POST["mes"]);
    $color =  htmlspecialchars($_POST["color"]);

 
}else {
 
  header("Location: ./");

}

*/

if ($_SERVER["REQUEST_METHOD"] == "POST") {



  if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email'])) {
    $nombre = $_POST['nombre'];
    $buscar = $_POST['buscar'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $fecha = $_POST['fecha'];
    $url = $_POST['url'];
    $edad = $_POST['edad'];
    $mes = $_POST['mes'];
    $color = $_POST['color'];

  $bool = false;

  $errores = array();

  if ($nombre == "") {
    array_push($errores, "Falta el nombre");
    $bool = true;
  }

  if ($buscar == "") {
    array_push($errores, "Falta el buscar");
    $bool = true;
  }
  if ($apellido == "") {
    array_push($errores, "Falta el apellido");

    $bool = true;
  }
  if ($email == "") {
    array_push($errores, "Falta el email");

    $bool = true;
  }
  if ($fecha == "") {
    array_push($errores, "Falta el fecha");

    $bool = true;
  }
  if ($url == "") {
    array_push($errores, "Falta la url");

    $bool = true;
  }
  if ($edad == "") {
    array_push($errores, "Falta la edad");

    $bool = true;
  }
  if ($mes == "") {
    array_push($errores, "Falta el mes");

    $bool = true;
  }
  if ($color == "") {
    array_push($errores, "Falta el color");

    $bool = true;
  }

}


$i=0;
  if (count($errores) > 0) {
    for ($i < 0; $i < count($errores); $i++) {
      echo "$errores[$i].</br>";
    }
  }

  
 
}

?>

<form action="formulario.html" method="post">
  <input type="submit" value="Volver">
  </form>

</form>
</body>
</html>




