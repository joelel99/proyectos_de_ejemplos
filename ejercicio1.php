<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- la palabra reservada ACTION hace que llame al archivo que se llama validacion php gracias a las varibles globales -->
    <form action="validacion.php" method="post" id = "datos usuario">
      <table class = "tabla">
            <tr>
                <td>nombre:</td>
                <td><input type="text" name="nombre_uno" id="nombre_uno">
            </tr>
            <tr>
                <td>edad:</td>
                <td><input type="text" name="edad_uno" id="edad_uno">
            </tr>
            <tr>
                <td><input type="submit" class="boton" name="enviar" value ="enviar" id="envio">
            </tr>

      </table>
      <?php
      // creacion de un array 
        if(isset($_POST["enviar"])){
            $usuario = $_POST["nombre_uno"];
            $edad = $_POST["edad_uno"];

            if ($usuario == "joel" && $edad > 18) {
                echo "<p>puedes entrar</p>";
            }else{
                print "no puedes entrar ";
            }

        }
      
      ?>

    </form>
</body>
</html>