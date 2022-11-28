<?php

include 'funciones.php';



function validacion_color($campo)
{
    
    if (isset($_POST['color'])) {

        if ($campo != "#ffffff") {
            echo "Color incorrecto.<br>";
            $return = true;
        }
        $return=false;
    }
    return $return;
}

function validacion_nombre($campo)
{
    if (strlen($campo) < 3 || strlen($campo) > 20) {
        if (ctype_upper($campo[0]) != true) {
            echo "Error. El campo tiene que tener una longitud entre 3 y 20 caracteres y la primera letra tiene que ser mayuscula. <br>";
            return true;
        } else {
            echo "Error. El campo tiene que tener una longitud entre 3 y 20 caracteres. <br>";
            return  true;
        }
    } elseif (ctype_upper($campo[0]) != true) {
        echo "Error. La primera letra del campo tiene que ser mayuscula. <br>";
        return   true;
    } else {
        return  false;
    }
   
}




function validacion_apellido($campo)
{

    if (strlen($campo) < 3 || strlen($campo) > 20) {
        if (ctype_upper($campo[0]) != true) {
            echo "Error. El campo tiene que tener una longitud entre 3 y 20 caracteres y la primera letra tiene que ser mayuscula. <br>";
            return  true;
        } else {
            echo "Error. El campo tiene que tener una longitud entre 3 y 20 caracteres. <br>";
            return  true;
        }
    } elseif (ctype_upper($campo[0]) != true) {
        echo "Error. La primera letra del campo tiene que ser mayuscula. <br>";
        return  true;
    } else {
        return false;
    }
    
}

function validacion_buscar($campo)
{

    if (strlen($campo) < 5 || strlen($campo) > 10) {
        echo "Error. El campo tiene que tener una longitud entre 3 y 20 caracteres";
        return  true;
    } else {
        return  false;
    }
   
}

function validacion_email($campo)
{
    $return = true;
    if (isset($_POST['email'])) {
        if (strpos($campo, "@") === false) {
            echo "Falta el @. <br>";
            return true;
        } else if ($campo == "") {
            echo "Email vacio .<br>";
            return  true;
        }
    } else {
        return  false;
    }
   
}

function validacion_edad($campo)
{
    if (isset($_POST['edad'])) {
        if (strlen($campo < 18) || $campo == "") {
            echo "edad no valida.<br>";
            return true;
        } else {
            return false;
        }
    }
    
}

function validacion_fecha($campo)
{

    if (isset($_POST['fecha'])) {
        if (date('y', strtotime($campo)) > 2022) {
            echo "fecha no valida. <br> ";
            return  true;
        }
    } else {
        return  false;
    }
    
}







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
    $fecha = $_POST['fecha'];
    $color = $_POST['color'];
    $bandera = false;

  
 
    $fechayhora = $_POST['fechayhora'];
    if ($_POST["fechayhora"]) {
      $date_clicked = getdate();
      print_r($date_clicked);
    }

  }
    

    $estaciones = $_REQUEST['estaciones'];
    foreach ($estaciones as $estacion)
      echo $estacion . "<br>";


      
    $ubi = $_POST['ubi'];
    $descripcion = $_POST['descripcion'];
    $errores = array(
        0 => 'Se subió correctamente',
        1 => 'El tamaño del archivo excede el admitido por el servidor',
        2 => 'El tamaño del archivo excede el admitido por el cliente',
        3 => 'El archivo no se pudo subir completamente',
        4 => 'No existe un directorio temporal donde subir el archivo',
        5 => 'No se ha incluído una descripción del archivo',
    );
  
    foreach ($errores as $key => $value) {
        if ($_FILES['imagen']['error'] == $key) {
            if(empty($descripcion)){
                echo $errores[5];
            }
            
            else if ($_FILES['imagen']['error'] == 0) {
                if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
                    $nombreDirectorio = "$ubi./";
                    $nombreFichero = $_FILES['imagen']['name'];
                    $nombreCompleto = $nombreDirectorio . $nombreFichero;
                    echo $value."<br>";
                    move_uploaded_file($_FILES['imagen']['tmp_name'], $nombreCompleto);
                } 
            }
            else{
                echo $value."<br>";
            }
        }
      
        }
    
  
    echo "Nombre: " . $_FILES['imagen']['name'] . "<br>";
    echo "Tipo: " . $_FILES['imagen']['type'] . "<br>";
    echo "Tamaño: " . $_FILES['imagen']['size'] . "<br>";
    echo "Nombre temporal: " . $_FILES['imagen']['tmp_name'] . "<br>";
    echo "Error: " . $_FILES['imagen']['error'] . "<br>";

      
      
  
  
  
   
  if(!validacion_nombre($nombre)){
    $bandera=true;
  }

  if(!validacion_color($color)){
    $bandera=true;
  }
 
  if(!validacion_apellido($apellido)){
    $bandera=true;
  }

  if(! validacion_buscar($buscar)){
    $bandera=true;
  }
 
  if(! validacion_email($email)){
    $bandera=true;
  }

  if(! validacion_fecha($fecha)){
    $bandera=true;
  }
  
  if(! validacion_edad($edad)){
    $bandera=true;
  }

  if (!$bandera ) {
    header('Location: bienvenido.php');
  }

}

  

function seleccion_m($campo)
{
  if (isset($_POST["estaciones"])) {
    $coincide = true;
    foreach ($_POST["estaciones"] as $key => $value) {
      if ($value == "$campo") {
        $coincide = true;
      }
    }
    if ($coincide) {
      echo "selected";
    }
  }
}


function seleccion_m2($campo)
{
  if (isset($_POST["extras"])) {
    $coincide = true;
    foreach ($_POST["extras"] as $key => $value) {
      if ($value == "$campo") {
        $coincide = true;
      }
    }
    if ($coincide) {
      echo "CHECKED";
    }
  }
}


?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
    <label for="quantity">Estaciones </label>
    <select multiple size="4" name="estaciones[]">
      <option value="Primavera" <?php seleccion_m("Primavera") ?>>Primavera</option>
      <option value="Verano" <?php seleccion_m("Verano") ?>>Verano</option>
      <option value="Otoño" <?php seleccion_m("Otoño") ?>>Otoño</option>
      <option value="Invierno" <?php seleccion_m("Invierno") ?>>Invierno</option>
    </select>
    </br>
    <label for="quantity">Color Favorito </label>
    <input type="color" name="color" value="<?php if (isset($color)) echo $color; ?>"></br>
    <label for="quantity">Buscar:</label>
    <input type="search" name="buscar" value="<?php if (isset($buscar)) echo $buscar; ?>"></br>
    <label for="quantity">Nombre</label>
    <input type="text" name="nombre" value="<?php if (isset($nombre)) echo $nombre; ?>"></br>
    <label for="quantity">Apelldio </label>
    <input type="text" name="apellido" value="<?php if (isset($apellido)) echo $apellido; ?>"></br>
    <label for="quantity">Email</label>
    <input type="email" name="email" value="<?php if (isset($email)) echo $email; ?>"></br>
    <label for="quantity">Fecha de nacimientos </label>
    <input type="date" name="fecha" value="<?php if (isset($fecha)) echo $fecha; ?>"></br>
    <label for="quantity">Edad ( 1 a 150):</label>
    <input type="number" id="quantity" name="edad" min="1" max="150" value="<?php if (isset($edad)) echo $edad; ?>"></br>
    <label for="quantity">Area Personal </label>
    <input type="url" name="url" value="<?php if (isset($url)) echo $url; ?>">
    </br>
    <!-- <input type="month" name="mes"> </br> -->
    Sexo:
    <INPUT TYPE="radio" name="sexo" VALUE="M">Mujer
    <INPUT TYPE="radio" name="sexo" VALUE="H">Hombre
    <br>
    <INPUT TYPE="checkbox" NAME="extras[]" VALUE="garaje" CHECKED <?php seleccion_m2("garaje")?>>Garaje
    <INPUT TYPE="checkbox" NAME="extras[]" VALUE="piscina"<?php seleccion_m2("piscina")?>>Piscina
    <INPUT TYPE="checkbox" NAME="extras[]" VALUE="jardin"<?php seleccion_m2("jardin")?>>Jardín
<br>
    <span>Indique el nombre del directorio donde se ubicar el archivo</span><input type="text" name="ubi" value="<?php echo array_key_exists('ubi', $_POST) ? $_POST['ubi'] : ''; ?>">
    <br><textarea name="descripcion" ><?php if (isset($descripcion)) echo $descripcion?></textarea>
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000000" />
    <br>
    <input type="file" name="imagen">
    <br>
    <input type="submit" value="Submit">
  </form>
</body>

</html>