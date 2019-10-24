<html>
 <head>
 <title>Convertir Temperatura </title>
 </head>
 <body>
 <h2 style = "color: red" >Convertir grados Centigrados a grados Farenheit</h2>
 <form name = 'form1' method = 'POST' action = ''>
 <label>Ingresa grados centigrados:</label>
 <input type = 'text' name = 'txt1' style='width:45px;' />
 <input type = 'submit' name = 'btnConvertir' value='CONVERTIR' />
 </form>
 
 <br />
 
 <h2 style = "color: red" >Convertir grados Farenheit a grados Centigrados</h2>
 <form name = 'form2' method = 'POST' action = ''>
 <label>Ingresa grados farenheit:</label>
 <input type = 'text' name = 'txt2' style='width:45px;' />
 <input type = 'submit' name = 'btnConvertir2' value='CONVERTIR' />
 </form>

 <?php
 include 'Temperatura.php';
 
 if(isset($_POST['btnConvertir'])){
 
 echo '<div>';
 $objCon = new Temperatura();
 $objCon->ConvertirCentigrados($_POST['txt1']);
 
 echo 'El resultado de la conversión<br />';
 print_r ($_POST['txt1']);
 echo ' °C = '.$objCon->res.'°F';
 echo '</div>';
 }
 
 if(isset($_POST['btnConvertir2'])){
 
 echo '<div>';
 $objCon = new Temperatura();
 $objCon->ConvertirFarenheit($_POST['txt2']);
 
 echo 'El resultado de la conversión<br />';
 print_r ($_POST['txt2']);
 echo ' °F = '.$objCon->res.'°C';
 echo '</div>';
 } 
?>
 </body>
 </html>