<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto numero 7 Recib</title>
</head>
<body>

    <h1>Datos empleados</h1>

    
<!-- 
    <?php
  
  $empleados = array();

  for ($i=0; $i < 10; $i++) { 
    array_push($empleados, $_POST['empleados$i']);
  }

    ?>-->

  <?php
   
    $departamento1 = $_POST['departamento1'];
    $departamento2 = $_POST['departamento2'];
    $departamento3 = $_POST['departamento3'];
    $departamento4 = $_POST['departamento4'];
    $departamento5 = $_POST['departamento5'];
    $departamento6 = $_POST['departamento6'];
    $departamento7 = $_POST['departamento7'];
    $departamento8 = $_POST['departamento8'];
    $departamento9 = $_POST['departamento9'];
    $departamento10 = $_POST['departamento10'];
    $empleados = array(     array('Nombre'=>$_POST['nombre1'],
                             'Salario'=> $_POST['salario1'],
                              'Departamento'=> $departamento1[0] 
                             ),
                             array('Nombre'=>$_POST['nombre2'],
                             'Salario'=> $_POST['salario2'],
                              'Departamento'=> $departamento2[0] 
                             ),
                             
                             array('Nombre'=>$_POST['nombre3'],
                             'Salario'=> $_POST['salario3'],
                              'Departamento'=> $departamento3[0] 
                             ),
                             array('Nombre'=>$_POST['nombre4'],
                             'Salario'=> $_POST['salario4'],
                              'Departamento'=> $departamento4[0] 
                             ),
                             array('Nombre'=>$_POST['nombre5'],
                             'Salario'=> $_POST['salario5'],
                              'Departamento'=> $departamento5[0] 
                             ),
                             array('Nombre'=>$_POST['nombre6'],
                             'Salario'=> $_POST['salario6'],
                              'Departamento'=> $departamento6[0] 
                             ),
                             array('Nombre'=>$_POST['nombre7'],
                             'Salario'=> $_POST['salario7'],
                              'Departamento'=> $departamento7[0] 
                             ),
                             array('Nombre'=>$_POST['nombre8'],
                             'Salario'=> $_POST['salario8'],
                              'Departamento'=> $departamento8[0] 
                             ),
                             array('Nombre'=>$_POST['nombre9'],
                             'Salario'=> $_POST['salario9'],
                              'Departamento'=> $departamento9[0] 
                             ),
                             array('Nombre'=>$_POST['nombre10'],
                             'Salario'=> $_POST['salario10'],
                              'Departamento'=> $departamento10[0] 
                             ),
                            ); 


    for ($i=0; $i < 10; $i++) { 
        if ($empleados[$i]['Salario'] > 1000000) {
            
            echo "Empleado: ".$empleados[$i]['Nombre']."<br/>";
            echo "Salario: ".$empleados[$i]['Salario']."$"."<br/>";
            $empleados[$i]['Salario']-=$empleados[$i]['Salario']*0.10;
            echo "Salario Neto: ".$empleados[$i]['Salario']."$"."<br/>";
            echo "Descuento de : ".$empleados[$i]['Salario']*0.10."$"."<br/>";
            echo "Departamento: ".$empleados[$i]['Departamento']."<br/>";
            echo "<br/><br/>";    
        }else{
            
            echo "Empleado: ".$empleados[$i]['Nombre']."<br/>";
            echo "Salario: ".$empleados[$i]['Salario']."$"."<br/>";
            echo "Aumento de : ".$empleados[$i]['Salario']*0.15."$"."<br/>";
            $empleados[$i]['Salario']+=$empleados[$i]['Salario']*0.15;
            echo "Salario Neto: ".$empleados[$i]['Salario']."$"."<br/>";
            echo "Departamento: ".$empleados[$i]['Departamento']."<br/>";
            echo "<br/><br/>";   
        }
    }
  ?>  
    <a href="PuntoNueve.php">Volver</a>
</body>
</html>