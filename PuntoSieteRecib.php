<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto numero 7 Recib</title>
</head>
<body>

    <h1>Datos pedido</h1>

    <?php
    setlocale(LC_ALL,"es_ES");

    $plato = $_POST['plato'];
    $nombre = $_POST['nombre'];
    $mesa = $_POST['mesa'];

    
 
    $fecha =  date("d") . " del " . date("m") . " de " . date("Y") . " hora: ".date("g")." ".date("A");;


    echo "Plato Selecionado: ".$plato[0]."<br/>Cliente: ".$nombre."<br/>Mesa: ".$mesa."<br/>Hora y fecha del pedido: ".$fecha

?>
</body>
</html>