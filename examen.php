<?php
//Calcule la nota final, los casos pueden ser:
//Mayor a 8.0 -> Aprobado Sobresaliente
//Nota Final entyre 6.0 y 8.0 -> Aprobado
//Nota Final entre 5.1 y 5.99 -> Recuperacion
//Nota Final igual o menor a 5.0 -> Reprobrado
//autor:Balduino

$nombredelestudiante = $_POST['txtnombre'];
$apellidos = $_POST['txtapellidos'];
$materia = $_POST['txtmateria'];
$nota1 = $_POST['txtnota1'];
$nota2 = $_POST['txtnota2'];
$nota3 = $_POST['txtnota3'];
$notafinal = ($nota1 * 0.3) + ($nota2 * 0.3) + ($nota3 * 0.4);

//Capturar los datos y las notas del estudiante
echo "<h3>Programa para calcular la nota final</h3><br>";
echo "<h1>El nombre del estudiante es: " . $nombredelestudiante . "</h1><br>";
echo "<h1>El apellido es: " . $apellidos . "</h1><br>";
echo "<h1>La materia es: " . $materia . "</h1><br>";
echo "<h1>La primer nota es: " . $nota1 * 0.3 . "</h1><br>";
echo "<h1>La segunda nota es: " . $nota2 * 0.3 . "</h1><br>";
echo "<h1>La tercer nota es: " . $nota3 * 0.4 . "</h1><br>";
echo "<h1>El promedio de las 3 notas es: " . $notafinal . "</h1><br>";

//Calcular la categoria que tiene el alumno
if ($notafinal >8){
	echo "El alumno tiene la categoria de Aprobado sobresaliente <br />";	
}else if ($notafinal >=6.0 and $notafinal <= 8.0){
	echo "El alumno tiene la categoria de Aprobado <br>";
}
else if ($notafinal >=5.1 and $notafinal <= 5.99){
	echo "El alumno tiene la categoria de Recuperacion <br>";
}else{
	echo "EL alumno tiene la categoria de Reprobado <br>";
}

echo "<a href='examen.html'>Realizar otro calculo</a>";
?>