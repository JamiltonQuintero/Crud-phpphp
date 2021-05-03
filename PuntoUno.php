<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto numero 1</title>
</head>
<body>
    
    <h1>Crea e imprime un arreglo para una biblioteca de 10 elementos</h1>

   <?php

$biblioteca = array("Colección", "Selección", "Adquisición", "Descarte ", "Expurgo", "Registro", "Libros ", "Revistas ", "Recortes de diarios", "Folletos");

for ($i = 0; $i < count($biblioteca); $i++){

    echo $biblioteca[$i]."<br/>";
}

   ?>

</body>
</html>