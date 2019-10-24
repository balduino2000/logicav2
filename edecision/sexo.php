<?php
//evalua el mayor de 2 numeros, los casos pueden ser:
//1=femenino, 2=masculino
//autor: balduinorollins
$xsexo = $_POST['cbonumero'];

if($xsexo ==1){
	echo "El sexo del cliente es Femenino";
}elseif($xdianumero ==2){
	echo "El sexo del cliente es Masculino";
}else{
	echo "Por favor seleccione uno de los valores en la opcion sexo";
}
echo "<br><a href='sexo.html'>Realizar otro calculo</a>";
?>