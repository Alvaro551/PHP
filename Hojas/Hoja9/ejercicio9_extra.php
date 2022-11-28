

<?php
$personas = array(

    'dni' => array(
        'apellido' => "Medina",
        'apellido2'  => "Vena",
        'nombre'  => "Alvaro"
    ),

    'dni2' => array(
        'apellido' => "Teja",
        'apellido2'  => "Nomeacuerdo",
        'nombre'  => "Alvaro"
    ),

    'dni3' => array(
        'apellido' => "Lius",
        'apellido2'  => "Jose",
        'nombre'  => "Pepe"
    ),

    'dni4' => array(
        'apellido' => "Cosas que poca gente sabe",
        'apellido2'  => "Nana",
        'nombre'  => "De locos"
    ),

    'dni5' => array(
        'apellido' => "China",
        'apellido2'  => "Chino",
        'nombre'  => "Han"
    )


);
foreach ($personas as $k => $v) {
    echo "<h1> $k </h1>";

    foreach ($v as $kk => $vv) {
        echo "<p> $kk:$vv </p>";
    }
}

echo "<br>";
asort($personas);

foreach ($personas as $k => $v) {
    echo "<h1> $k </h1>";

    foreach ($v as $kk => $vv) {
        echo "<p> $kk:$vv </p>";
    }
}



?>