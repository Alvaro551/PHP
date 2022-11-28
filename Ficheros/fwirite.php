<?php
$fp = fopen('data.txt', 'w'); //w
fwrite($fp, '1');
fwrite($fp, '23');
fclose($fp);


?>