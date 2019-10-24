<?php 
 
 
$Numero1=$_REQUEST['n1'];
$Numero2=$_REQUEST['n2'];
$Opciones=$_REQUEST['Operacion'];
switch ($Opciones) {
	case 1: $suma = $Numero1 + $Numero2;
	echo "la suma es:  " . $suma;
	break;
	case 2: $resta = $Numero1 - $Numero2;
	echo "la resta es:  " . $resta;
	break;
	case 3: $mult = $Numero1 * $Numero2;
	echo "la Multiplicacion es:   " . $mult;
	break;
	case 4: $div = $Numero1 / $Numero2;
	echo "la Divicion es:   " . $div;
	break;
}
?>