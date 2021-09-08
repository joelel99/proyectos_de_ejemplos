<?php

for ($i=1; $i <= 10; $i++) { 
    echo $i;
}
echo"<br><br>la suma de un bucle pero de 2 en dos";
for ($a=0; $a < 14 ; $a+=2) { 
    echo "<br>".$a;
    if ($a >= 10) {
        echo "codigo interumpido<br>";
        break;
    }
}
for ($tabla=0; $tabla <= 10 ; $tabla++) { 
    echo "2 x $tabla =". 2* $tabla . "<br>";

}



?>