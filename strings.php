<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .color{
            color : red;
            font-size : 20px;
        }
    </style>
    <?php
    //la diferencia entre usar comillas dobles y comillas simples 
    // comillas padres y comillas hijas
    echo "<p class='color'>esto es un texto</p>";
    
    //puede usarse una variable de tipo string dentro de otro string
    $nombre = "joel";
    echo "hola $nombre <br>";
        //cosas que puedes
    // strcmp y strcasecmp
    // strcmp = compara mayusculas 
    // strcasecmp = compara valores de string ignorando mayusculas y minusculas
    
    $variable1 = "JOE";
    $variable2 = "JOEL";
    $resultado = strcasecmp($variable1,$variable2);

    echo "el resultao es " . $resultado;




    ?>
</body>
</html>