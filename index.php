
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<?php 

$numeroA = 230;

$numerob = 40;
$nombre = "joel";

//$resultado = $numerob + $numeroA;

//echo "la suma de las dos variables es  " . $resultado ."<br>";

   echo "la variable uno es " . $numeroA + $numerob."<br>";

function primerafuncion (){

   //echo "esta funcion va llamar a las variables 1 y dos y la va a dividir <br>";
  // $numeroA = 230;
   $nombre = "maria";
  // $numerob = 40;
  // $resultado = $numeroA / $numerob;
   //echo $resultado . "<br>";
   echo $nombre . "<br>";

}

primerafuncion();

?>
</body>


<style>
   div{
      margin-left:20px;
      margin-top:20px;
      border-style: solid;
      height: auto;
      width: 200px;
   }
   p{
    
   }
   a{
      color: blue;
      text-decoration: none;
      margin-left: 5px;
   }
   a:hover{
      background-color: red;
   }
</style>

<div>
   <?php
   
   echo $nombre . "<br>";
   echo '<a href = "bucles.php">ejemplos de incremento</a>' . "<br>";
   echo '<a href = "strings.php">strings</a>' . "<br>";
   echo '<a href = "ejercicio1.php">ejercicio 1</a>' . "<br>";
   echo '<a href = "constantes.php">constantes</a>' . "<br>";
   echo '<a href = "ejercicio2.php">ejercicio de operadores</a>' . "<br>";
   echo '<a href = "calcu_html.html">calculadora con funciones</a>' . "<br>";
   echo '<a href = "funcion_math.php">Funciones matematicas</a>' . "<br>";
   echo '<a href = "while.php">while y Do-while</a>' . "<br>";
   echo '<a href = "for.php">FOR</a>' . "<br>";
   echo '<a href = "funcion.php">Funciones</a>' . "<br>";
   echo '<a href = "POO.php">POO(programacion orientada a objetos)</a>' . "<br>";
   ?>

</div>




</html>