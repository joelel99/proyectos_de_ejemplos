<?php 

    $var1 = "hola MUNDOndo";

    // strtolower = cambia la cadena de string a todas a minusculas
    //strtoupper = cambia la cadena de string a todas mayusculas
    echo strtolower($var1)."<br>";
    echo strtoupper($var1);

    function suma($numero1,$numero2){
        $resultado = $numero1 + $numero2;

        return $resultado ;
    }

echo "<br>".(suma(5,7));

?>