<?php
//evalua el mayor de 2 numeros, los casos pueden ser:
//uno de los numeros es mayor
//ambos son iguales
//autor: balduinorollins
$xnumero1 = $_POST['numero1'];
$xnumero2 = $_POST['numero2'];
$xnumero3 = $_POST['numero3'];

echo "<p>Los Numeros digitados fueron: <br>";
echo "Primer Numero: " . $xnumero1 . " . El segundo Numero es: " .$xnumero2 . " . El tercer Numero: " . $xnumero3 . "</p>";
echo "<a href='mayor3n.html'>Realizar otro calculo</a>";

if($xnumero1 > $xnumero2){
	echo "<h1>El numero " . $xnumero1. " es el mayor";
}elseif($xnumero1 < $xnumero2){
	echo "<h1>El numero " . $xnumero2. " es el mayor";
}elseif($xnumero1 < $xnumero3){
	echo "<h1>El numero " . $xnumero3. " es el mayor";
}else{
	echo "<h1>Los tres numeros son iguales ";
}
?>