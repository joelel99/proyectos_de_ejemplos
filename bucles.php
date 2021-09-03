<?php 
function incremento(){
     static $numeoro1 = 0 ;

    $numeoro1++;
    echo $numeoro1 . "<br>";

}

incremento();
incremento();
incremento();
incremento();
?>