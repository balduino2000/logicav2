<?php
//evalua el mayor de 2 numeros, los casos pueden ser:
//uno de los numeros es mayor
//ambos son iguales
//autor: balduinorollins
$xdianumero = $_POST['dianumero'];

echo "<p>El numero digitado fue: " . $xdianumero . "<br>";
if($xdianumero ==1 ){
	echo "Corresponde a Lunes";
}elseif($xdianumero ==2){
	echo "Corresponde a Martes";
}elseif($xdianumero ==3){
	echo "Corresponde a Miercoles";
}elseif($xdianumero ==4){
	echo "Corresponde a Jueves";
}elseif($xdianumero ==5){
	echo "Corresponde a Viernes";
}elseif($xdianumero ==6){
	echo "Corresponde a Sabado";
}else{
	echo "Corresponde a Domingo";
}
echo "<br><a href='diasem.html'>Realizar otro calculo</a>";
?>