
<!-- localhost/Tema2/actividad1.php -->

<?php

$varEntero = 17; // Entero
$varTexto = "Hola, soy Antonio"; // Cadena de texto
$varFloat = 1.7; // Decimal
$varBoolean = true; // Boolean
$varArray = array(5, 10); //Array

echo "El numero entero es " . $varEntero . "</br>" ;
echo "La cadena de texto dice: " . $varTexto . "</br>";
echo "El numero decimal es: " . $varFloat . "</br>";
echo "El valor del Boolean es: " . $varBoolean . "</br>";
echo "Dentro del array esta: ";
        print_r( $varArray);


?>