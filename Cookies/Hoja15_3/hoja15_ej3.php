<?php
if(!isset($_COOKIE['color'])){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $color= $_POST['color'];
     setcookie("color",$color,time()+5000, $_SERVER['REQUEST_URI'], '', 0);
} else{
    include 'hoja15_ej3_recepcion.php';
} 
} else{
    include 'mostrar_color.php';
}


?>