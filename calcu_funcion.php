<?php 
 if (isset($_POST["enviar"])) {
      
    $numero1 = $_POST["dato1"];
    $numero2 = $_POST["dato2"];
    $operacion = $_POST["operacion"];
    calculando($operacion);
  }
di
  function calculando($igualdad_de_operaciones){

    if (!strcmp("Suma",$igualdad_de_operaciones) ) {
        global $numero1;
        global $numero2;
        echo "<p>La suma de los datos es : </p>" . ($numero1 + $numero2);
    }
    if (!strcmp("Resta",$igualdad_de_operaciones) ) {
        global $numero1;
        global $numero2;
        echo "<p>La resta de los datos es : </p>" . ($numero1 - $numero2);
    }
    if (!strcmp("Division",$igualdad_de_operaciones) ) {
        global $numero1;
        global $numero2;
        echo "<p>La division de los datos es : </p>" . ($numero1 / $numero2);
    }
    if (!strcmp("Multiplicación",$igualdad_de_operaciones) ) {
        global $numero1;
        global $numero2;
        echo "<p>La multiplicacion de los datos es : </p>" . ($numero1 * $numero2);
    }
    if (!strcmp("Modulo",$igualdad_de_operaciones) ) {
        global $numero1;
        global $numero2;
        echo "<h3>el modulo es : </h3>" . ($numero1 % $numero2);
    }
    
  }
?>