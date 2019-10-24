<?php


$numero1 = $_POST['txtnumero1'];
$residuos = 0;

echo "<h3>Programa para determinar si un numero es primo</h3><br>";
echo "<h1>El numero digitado es: " . $numero1 . "</h1><br>";

for($i=1; $i <= $numero1; $i++){
	echo $numero1 . "divido entre " . $i . " cociente igual a " . ($numero / $i) . ", residuo igual a " . ($numero % $i) . ">br>";
	if($numero1 % $i ==0){
		$residuos++;
	}

}

if($residuos == 2){
	echo "El numero SI es primo";
}
else{
	echo "el numero NO ES PRIMO";
}

echo "<a href='esprimo.html'>Realizar otro calculo</a>";
?>