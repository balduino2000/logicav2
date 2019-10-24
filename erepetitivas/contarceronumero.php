<?php
/*
Programa para calcular una serie de numeros hasta un límite
autor=balduinorollins
*/

$xnumero = $_POST['txtnumero'];

echo "El numero digitado fue: " . $xnumero. "<br />";

//limite inferior, hasta limite superior, aumentar en 1
for($x=0; $x<=$xnumero; $x++){
	echo $x . "<br />";
}

echo "<p><a href='contarceronumero.html'>Realizar otro calculo</p>";

?>