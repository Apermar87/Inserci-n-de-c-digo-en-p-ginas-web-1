<!-- localhost/Tema2/caso_practico2.php -->

<?php
    $varTexto="hola"; //Cadena de texto
    $varEntero=1234; //Entero
    $varBoolean=false; //Boolean
    $varFloat=1.2; //Float
    $varArray= array("true","false"); //Array

    /* Para introducir un salto de carro y ser mostrado por pantalla utilizamos </br> */

    echo "Variable concatenada: " . $varTexto . $varEntero . "</br>" ;
    echo "Variable de tipo Boolean: " . $varBoolean . "</br>" ;
    echo "Variable de tipo Float: " . $varFloat . "</br>" ;
    echo "Variable de tipo compuesto: ";
        print_r($varArray);         #La funcion print_r es la utilizada para imprimir el contenido de un array
        
    ?>