<?php

//programa para calcular la suma de tres numeros

$numero1 = $_POST['txtnumero1'];
$numero2 = $_POST['txtnumero2'];
$numero3 = $_POST['txtnumero3'];

//realizar la suma de las variables $numero1 + $numero2 + $numero3

echo "<h3>Programa para sumar 3 numeros</h3><br>";
echo "<h1>El primer numero digitado es: " . $numero1 . "</h1><br>";
echo "<h1>El segundo numero digitado es: " . $numero2 . "</h1><br>";
echo "<h1>El tercer numero digitado es: " . $numero3 . "</h1><br>";
echo "<h1>El resultado de la suma es: " . ($numero1+$numero2+$numero3) . "</h1><br>";
echo "<a href='suma3n.html'>Realizar otro calculo</a>";
?>