<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 2</title>
</head>
<body>
<form action="" method="post" id = "datos usuario">
      <table class = "tabla">
            <tr>
                <td>dato 1:<input type="text" name="dato1" id="dato1"></td>
                <td>dato 2: <input type="text" name="dato2" id="dato2"></td>
                <td><select name="operacion" id="operacion">
                    <option>Suma</option>
                    <option>Resta</option>
                    <option>Division</option>
                    <option>Multiplicación</option>
                    <option>Modulo</option>
                </select></td>
            </tr>
            <tr>
                <td><br><input type="submit" class="boton" name="enviar" value ="enviar" id="envio"></td>
            </tr>
      </table>
</form>
<?php
    if (isset($_POST["enviar"])) {
      
        $numero1 = $_POST["dato1"];
        $numero2 = $_POST["dato2"];
        $operacion = $_POST["operacion"];

        if (!strcmp("Suma",$operacion) ) {
            echo "<p>La suma de los datos es : </p>" . ($numero1 + $numero2);
        }
        if (!strcmp("Resta",$operacion) ) {
            echo "<p>La resta de los datos es : </p>" . ($numero1 - $numero2);
        }
        if (!strcmp("Division",$operacion) ) {
            echo "<p>La division de los datos es : </p>" . ($numero1 / $numero2);
        }
        if (!strcmp("Multiplicación",$operacion) ) {
            echo "<p>La multiplicacion de los datos es : </p>" . ($numero1 * $numero2);
        }
        if (!strcmp("Modulo",$operacion) ) {
            echo "<p>el modulo es : </p>" . ($numero1 % $numero2);
        }
        
    }


?>


</body>
</html>