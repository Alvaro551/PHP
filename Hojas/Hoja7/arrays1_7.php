
<?php

$productos["procesador"]["AMD"][0]="K7 XP 1900";
$productos["procesador"]["AMD"][1]="K7 XP 1800";
$productos["procesador"]["AMD"][2]="K7 XP 1700";
$productos["procesador"]["PENTIUM"][0]="IV 2,5 Ghz";
$productos["procesador"]["PENTIUM"][1]="IV 2,4 Ghz";
$productos["procesador"]["PENTIUM"][2]="IV 2,3 Ghz";
$productos["procesador"]["PENTIUM"][3]="IV 2,2 Ghz";
$productos["disco_duro"]["SEAGATE"][0]=" 40GB 10000 rpm";
$productos["disco_duro"]["SEAGATE"][1]=" 80GB 7200 rpm";
$productos["disco_duro"]["SEAGATE"][2]=" 160GB 7200 rpm";
$productos["disco_duro"]["SAMSUNG"][0]=" 40GB 7200 rpm";
$productos["disco_duro"]["WESTERN_DIGITAL"][0]=" 60GB 7200 rpm 8MB cache";
$productos["disco_duro"]["WESTERN_DIGITAL"][1]="80GB 10000 rpm 16MB cache";  



foreach($productos as $componentes =>$v){
    echo "<br><b>" . $componentes . "</b>: ";
    foreach($v as $detalles =>$k){
        echo "<br><b>".$detalles ."</b>: ";
        foreach($k as $detalless => $kk){
            echo "<br><b>" .$detalless ."</b>: ". $kk;
        }
    }
}


?>