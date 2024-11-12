
<!-- localhost/Tema2/actividad2.php -->

<?php

$varNumero1 = 5;
$varNumero2 = 10;
$varNumero3 = 7;
$varNumero4 = 5;

echo "Valor del numero 1: " . $varNumero1 . "</br>";
echo "Valor del numero 2: " . $varNumero2 . "</br>";
echo "Valor del numero 3: " . $varNumero3 . "</br>";
echo "Valor del numero 4: " . $varNumero4 . "</br>";

echo "<h3>Postincremento</h3>";
echo "Muestra el valor de la variable 1: " . $varNumero1++ . "</br>" ;
echo "Incrementa la variable 1: " . $varNumero1 . "</br>";

echo "<h3>Preincremento</h3>";
echo "Muestra directamente el valor incrementado de la variable 2: " . ++$varNumero2 . "</br>";

echo "<h3>Postdecremento</h3>";
echo "Muestra el valor de la variable 1: " . $varNumero1-- . "</br>" ;
echo "Decrementa la variable 1: " . $varNumero1 . "</br>";

echo "<h3>Predecremento</h3>";
echo "Muestra directamente el valor decrementado de la variable 2: " . --$varNumero2 . "</br>";

echo "<h3>Suma</h3>";
echo "El resultado de la suma de " . $varNumero3 . " + " .  $varNumero4 . " = " .$varNumero3+$varNumero4 . "</br>";

echo "<h3>Resta</h3>";
echo "El resultado de la resta de " . $varNumero3 . " - " .  $varNumero4 . " = " .$varNumero3-$varNumero4 . "</br>";

echo "<h3>División</h3>";
echo "El resultado de la división de " . $varNumero3 . " / " .  $varNumero4 . " = " .$varNumero3/$varNumero4 . "</br>";

echo "<h3>Multiplicación</h3>";
echo "El resultado de la multiplicación de " . $varNumero3 . " * " .  $varNumero4 . " = " .$varNumero3*$varNumero4 . "</br>";

echo "Suma y asigna 2 al numero 3: " . $varNumero3+=2 . "</br>";
echo "¿Cuanto vale ahora el numero 3?: " . $varNumero3 . "</br>";

echo "Resta y asigna 4 al numero 3: " . $varNumero3-=4 . "</br>";
echo "¿Cuanto vale ahora el numero 3?: " . $varNumero3 . "</br>";

echo "Divide y asigna 5 al numero 3: " . $varNumero3/=5 . "</br>";
echo "¿Cuanto vale ahora el numero 3?: " . $varNumero3 . "</br>";

echo "Multiplica y asigna 20 al numero 3: " . $varNumero3*=20 . "</br>";
echo "¿Cuanto vale ahora el numero 3?: " . $varNumero3 . "</br>";


?>