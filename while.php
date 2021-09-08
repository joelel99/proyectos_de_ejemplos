<?php

$a = 0;
$b = 5;
$contador = 1 ;
while ($a < 10)  {
    echo $contador. " hola<br>";
    $contador++;
    $a++;
}
//ojo con usar las mismas variables por que pasan incrementadas si ya anteriormente fueron incrementadas
//el DO-WHILE entra almenos una vez al bucle osea que se ejecuta almenos una vez
do {
    echo $contador ."joel <br>";
    $b++;
    $contador++;
} while ($b < 10);




?>