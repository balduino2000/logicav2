<?php
/*
Programa para calcular tablas de multiplicar
autor=balduinorollins
*/

for($x=1; $x<=15; $x++){
	echo "<p>Tabla del " .$x. "<br />";
	for($y=1; $y<=15; $y++){
		echo $x . " X " . $y . " = " . $x*$y . "<br />";
	} //fin de los multiplicadores
	echo "========== <br />";
}//fin de los multiplicandos

echo "<p><a href='tablas.html'>Realizar otro calculo</p>";

?>