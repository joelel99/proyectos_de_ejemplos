<?php
// se recomienda que se incie con mayuscula
    class Coche{
        // propiedades dadas por la palabra VAR
        var $ruedas;
        var $color;
        var $puertas;
        var $motor;
        var $veloMax;

        //para crear un estado inicial
        function __construct(){
            //cuando se crea una funcion con el mismo nombre de la clase
            // este se llamaria un metodo contructor 
            // cuando ponemos la palabra THIS es cuando nos referimos a la propia clase
            $this->ruedas = 4;
            $this->color ="";
            $this->motor =1400;
            $this->veloMax = 120;
            $this->Puertas ="";
        }

        // cuando una funcion se crea adentro de una clase  se crea un metodo/funcionalidades
        function arrancar(){
            echo "Estoy Arrancando<br>";
        }
        function girar(){
            echo "Estoy girando<br>";   
        }
        function avanzar(){
            echo"estoy avanzando<br>";
        }
        function establecercolor($var_color,$nombre_auto){
            $this->color=$var_color;
            echo "el color del coche ".$nombre_auto."es : " . $this->color."<br>";
        }
    }


    // se intacia la clase coche
    $fiat = new Coche();
    $chevrolet = new Coche();
    $kia = new Coche();
    $kia->establecercolor("azul","kia   ");
    $fiat->establecercolor("rojo","fiat ");

    //metodo
    $fiat->girar();

    // estamos ingresando a la propiedad de nuestro objeto
    echo $fiat->ruedas;

?>
