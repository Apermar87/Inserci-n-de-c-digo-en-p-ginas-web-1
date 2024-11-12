
<!-- localhost/Tema2/video1.php -->

<?php
$varTexto="hola"; //Cadena de texto
$varEntero=1234; //Entero
$varBoolean= false; //Boolean
$varFloat= 1.2; //Float
$varArray= array("true", "false");

echo "Variable concatenada: ". $varTexto . $varEntero. "</br>";
echo "Variable de tipo Boolean: ". $varBoolean. "</br>";
echo "Variable de tipo float: ". intval($varFloat). "</br>";
echo "Variable de tipo compuesto: " ;
print_r($varArray); #La función print_r es la utilizada para imprimir el contenido de un array

?>