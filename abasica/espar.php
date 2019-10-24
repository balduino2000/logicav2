<?php


$numero1 = $_POST['txtnumero1'];

echo "<h3>Programa para sumar 2 numeros</h3><br>";
echo "<h1>El numero digitado es: " . $numero1 . "</h1><br>";
if($numero1 % 2 == 0){
	echo "<h1>El numero digitado es par </h1><br>";
}
else{
	echo "<h1>El numero digitado NO es par </h1><br>";
}

echo "<a href='espar.html'>Realizar otro calculo</a>";
?>