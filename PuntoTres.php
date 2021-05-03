<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto numero 3</title>
</head>
<body>
    
    <h1>3) Construye un formulario que me permita capturar los datos y luego calcule y muestre el área
de 5 figuras geométricas.</h1>

   
    <form action="PuntoTresRecib.php" method="post">
    
    <select multiple name="figuras[]">
    
    <option value="Cuadrado">Cuadrado</option>
    <option value="Triangulo">Triangulo</option>
    <option value="Octogono">Octogono</option>
    <option value="Romboide">Romboide</option>
    <option value="Rectangulo">Rectangulo</option>
    
    </select><br/>

    <h3>Ingrese la base de la figuras</h3>
    <input type="text" name="base" id="base">
    <h3>Ingrese la base de la figuras</h3>
    <input type="text" name="altura" id="altura">
    <input type="submit" value="Enviar">
    </form>

  

</body>
</html>