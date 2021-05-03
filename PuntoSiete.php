<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto numero 7</title>
</head>
<body>
    
    <h1>7) Crea un formulario que capture los datos de un cliente, y que cuente además con una lista 
desplegable, que me permita seleccionar 4 diferentes tipos de platos de comida de un 
restaurante, y de acuerdo a la selección imprima los valores con el nombre del plato y los 
datos del cliente</h1>

<form action="PuntoSieteRecib.php" method="post">

    <h4>platos del dia: 
     <select multiple name="plato[]"> 
    <option value="Frijoles">Frijoles</option>
    <option value="Mondongo">Mondongo</option>
    <option value="Arroz">Arroz chino</option>
    <option value="Sancocho">Sancocho</option>
    <option value="Asadura">Asadura</option> 
    </select><br/>
    </h4>
    
    <h3>Digite el nombre del cliente</h3>
    <input type="text" name="nombre" id="nombre">
    <h3>Digite la mesa del cliente</h3>
    <input type="text" name="mesa" id="mesa">
    <br><br>
    <input type="submit" value="Enviar">
    
    </form>
    
</body>
</html>