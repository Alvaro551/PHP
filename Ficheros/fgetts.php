<?php
$gestor = @fopen("fichero_ejemplo.txt", "r");
if ($gestor) {
    while (($búfer = fgets($gestor, 4096)) !== false) {
        echo $búfer;
    }
    if (!feof($gestor)) {
        echo "Error: fallo inesperado de fgets()\n";
    }
    fclose($gestor);
}
?>