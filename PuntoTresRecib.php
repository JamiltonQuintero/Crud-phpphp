<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto numero 3 recib</title>
</head>
<body>
    
    <h1>Datos figuras</h1>

   <?php

     $figura = $_POST['figuras'];
     $base = $_POST['base'];
     $altura = $_POST['altura'];

     if ($figura == ""){
        echo "Debes seleccionar una figura para calcular su area ";
        echo '<a href="PuntoTres.php">Volver</a> <br/>';
  
     } 

     if ($base == "") {
        echo "Debes ingresar la base del ".$figura[0]." ";
        echo '<a href="PuntoTres.php">Volver</a> <br/>';
     } 
     
     if ($altura == ""){
        echo "Debes ingresar la altura del ".$figura[0]." ";
        echo '<a href="PuntoTres.php">Volver</a><br/>';
     } 

     if($base != "" && $altura != "" && $figura!=""){
        $area = $base * $altura;
        echo "El area del ".$figura[0]." es de ".$area;
     }
   ?>
  

</body>
</html>