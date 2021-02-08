<!DOCTYPE html>
<html lang="en">
<head><title>CALCULO DE LA HIPOTENUSA</title></head>
<body>
   <?php
    if(isset($_POST['btn'])&&($_POST['btn'] == 'Calcular')){

       $cateto1 = 3;
       $cateto2 = 4;
       $hipotenusa = null;
         
        echo "<h1><center>RESULTADO DE LA HIPOTENUSA</center></h1>";
        
        $hipotenusa = sqrt(pow($cateto1,2) + pow($cateto2,2));
        echo "<h2><b>Cateto 1: </h2>" . $cateto1;
        echo "<h2><b>Cateto 2: </h2>" . $cateto2;
        echo "<br/><br/>";
        echo "<h2><br><b>La hipotenusa es: </h2>" . $hipotenusa;     
    } 
   ?> 
<body>
<br><br>
<button><a href="http://localhost/hipotenusa/datos.html">REGRESAR</a></button>
</html>