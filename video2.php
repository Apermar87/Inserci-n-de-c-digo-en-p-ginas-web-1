
<!-- localhost/Tema2/video2.php -->

<?php

$varTexto="hola"; //Cadena de texto
$varEntero=1234; //Entero
$varBoolean= true; //Boolean
$varFloat= 1.2; //Float
$varArray= array("true", "false");


//--------------------------------------------------
define("IRPF", 15);
echo IRPF . "</br>" ; #Correcto
//--------------------------------------------------

echo "¿La variable varTexto es String? " . (is_string($varTexto));
echo "¿La variable varTexto es Entero? " . (is_int($varEntero));


?>