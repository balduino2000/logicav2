<?php
//Asignacion de fila segun el color del carnet

$xcolor = $_POST['cbocolor'];

echo "El color seleccionado es: " . $xcolor . "<br />";

switch ($xcolor) {
	case 'amarillo';
	echo "Su fila Asignada es la Numero 1";
	break;

	case 'azul';
	echo "Su fila Asignada es la Numero 2";
	break;

	case 'verde';
	echo "Su fila Asignada es la Numero 3";
	break;

	case 'rojo';
	echo "Su fila Asignada es la Numero 4";
	break;

	case 'magenta';
	echo "Su fila Asignada es la Numero 5";
	break;

	default:
		echo "Por favor haga una seleccion valida";
		break;
}
echo "<br /><a href='colores.html'>Hacer otra selección</a>";

?>