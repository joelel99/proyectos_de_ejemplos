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
    <form action="" method="post" id = "datos usuario">
      <table class = "tabla">
            <tr>
                <td>usuario:</td>
                <td><input type="text" name="nombre_uno" id="nombre_uno">
            </tr>
            <tr>
                <td>contraseña:</td>
                <td><input type="text" name="contraseña" id="contraseña">
            </tr>
            <tr>
                <td><input type="submit" class="boton" name="enviar" value ="enviar" id="envio">
            </tr>

      </table>
      <?php
        if (isset($_POST["enviar"])) {

            $nombre =$_POST["nombre_uno"];
            $contraseña = $_POST["contraseña"];
            // el switch iria con un valor true si es que se cumple las condiciones dadas en los case
            // tambien se puede usar switch ($nombre) -> que seria que se evalue la codicion de nombre
            switch (true) {
                case $nombre == "maria" && $contraseña == "1234":
                    echo "usuario autorizado.... HOLA ". $nombre;
                    break;
                case $nombre == "pedro" && $contraseña == "1234":
                    echo "usuario autorizado.... HOLA ". $nombre;
                    break;
                case $nombre == "juan" && $contraseña == "12345":
                    echo "usuario autorizado.... HOLA ". $nombre;
                    break;
                
                default:
                    echo "Usuario no autorizado";
                break;
            }

        }




      ?>

    </form>
</body>
</html>