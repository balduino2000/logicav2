<?php
/*
Programa para calcular una serie de numeros hasta un límite
autor=balduinorollins
*/

$xnumero = $_POST['txtnumero'];
$suma = 0;
echo "El numero digitado fue: " .$xnumero. "<br />";

//limite superior, hasta limite inferior, disminuir en 1
for($x=$xnumero; $x >= 0; $x--){
	echo $x ."<br />";
	$suma = $suma + $x;
}

echo "<p>La suma de la serie de numeros es: " .$suma."<br />";
echo "<p><a href='contarnumerocero.html'>Realizar otro calculo</p>";

?>