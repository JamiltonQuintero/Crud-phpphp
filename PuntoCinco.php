<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto numero 5</title>
</head>
<body>
    
    <h1>5) Desarrolla un algoritmo con PHP que me permita visualizar los números pares del 1 al 50.</h1>

    <?php
        echo "Pares del 1 al 50 <br/>";
        for ($i=1; $i <= 50; $i++) { 
            if ($i%2==0){
                echo $i."<br/>";
            }
        }

    ?>

</body>
</html>