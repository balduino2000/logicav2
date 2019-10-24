<?php
//evalua el mayor de 2 numeros, los casos pueden ser:
//uno de los numeros es mayor
//ambos son iguales
//autor: balduinorollins
$xdianumero = $_POST['dianumero'];

echo "<p>El numero digitado fue: " . $xdianumero . "<br>";
if($xdianumero ==1 ){
	echo "Corresponde a Enero";
}elseif($xdianumero ==2){
	echo "Corresponde a Febrero";
}elseif($xdianumero ==3){
	echo "Corresponde a Marzo";
}elseif($xdianumero ==4){
	echo "Corresponde a Abril";
}elseif($xdianumero ==5){
	echo "Corresponde a Mayo";
}elseif($xdianumero ==6){
	echo "Corresponde a Junio";
}elseif($xdianumero ==7){
	echo "Corresponde a Julio";
}elseif($xdianumero ==8){
	echo "Corresponde a Agosto";
}elseif($xdianumero ==9){
	echo "Corresponde a Septiembre";
}elseif($xdianumero ==10){
	echo "Corresponde a Octubre";
}elseif($xdianumero ==11){
	echo "Corresponde a Noviembre";
}else{
	echo "Corresponde a Diciembre";
}
echo "<br><a href='diasem.html'>Realizar otro calculo</a>";
?>