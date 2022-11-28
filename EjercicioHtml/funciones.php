<?php

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
