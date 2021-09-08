<?php
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
