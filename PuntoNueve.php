<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto nueve</title>
</head>
<body>
    
    <h1>9) Genera un algoritmo que me permita capturar el sueldo de 10 empleados, y al final permita 
visualizar el sueldo de cada uno, aplicando una retención de la fuente del 10% a aquellos que 
ganan más de 1000000 pesos y una bonificación para transporte del 15% a aquellos que ganan 
menos de 1000000 pesos.</h1>
<form action="PuntoNueveRecib.php" method="post">
   <!-- 
   <?php

    $empleados = array();
   
for ($i = 0; $i < 10 ;$i++){

    echo "digite el sueldo del empleado numero ".($i+1);
    array_push($empleados, "<input type='text' name='sueldo'.'$i'>");

}

foreach($empleados as $empleado){
    echo $empleado;
}

   ?>-->





    <h1>Datos de los empleados</h1>

    <h5>Empleado 1:
    <input type="text" name="nombre1"  placeholder="Nombre empleado">
    <input type="text" name="salario1" placeholder="Salario empleado">
    Departamento: 
    <select multiple name="departamento1[]"> 
    <option value="Ventas">Ventas</option>
    <option value="Entrega">Entrega</option>
    <option value="Recursos">Recursos Humanos</option>
    <option value="Despacho">Despacho</option>
    <option value="Administrativo">Administrativo</option> 
    </select><br/>
    </h5>

    <h5>Empleado 2:
    <input type="text" name="nombre2" placeholder="Nombre empleado">
    <input type="text" name="salario2" placeholder="Salario empleado">
     Departamento: 
    <select multiple name="departamento2[]"> 
    <option value="Ventas">Ventas</option>
    <option value="Entrega">Entrega</option>
    <option value="Recursos Humanos">Recursos Humanos</option>
    <option value="Despacho">Despacho</option>
    <option value="Administrativo">Administrativo</option> 
    </select><br/>
    </h5>

    <h5>Empleado 3:
    <input type="text" name="nombre3" placeholder="Nombre empleado">
    <input type="text" name="salario3" placeholder="Salario empleado">
     Departamento: 
    <select multiple name="departamento3[]"> 
    <option value="Ventas">Ventas</option>
    <option value="Entrega">Entrega</option>
    <option value="Recursos">Recursos Humanos</option>
    <option value="Despacho">Despacho</option>
    <option value="Administrativo">Administrativo</option> 
    </select><br/>
    </h5>

    <h5>Empleado 4:
    <input type="text" name="nombre4" placeholder="Nombre empleado">
    <input type="text" name="salario4" placeholder="Salario empleado">
     Departamento: 
    <select multiple name="departamento4[]"> 
    <option value="Ventas">Ventas</option>
    <option value="Entrega">Entrega</option>
    <option value="Recursos">Recursos Humanos</option>
    <option value="Despacho">Despacho</option>
    <option value="Administrativo">Administrativo</option> 
    </select><br/>
    </h5>
       
    <h5>Empleado 5:
    <input type="text" name="nombre5" placeholder="Nombre empleado">
    <input type="text" name="salario5" placeholder="Salario empleado">   
     Departamento: 
    <select multiple name="departamento5[]"> 
    <option value="Ventas">Ventas</option>
    <option value="Entrega">Entrega</option>
    <option value="Recursos">Recursos Humanos</option>
    <option value="Despacho">Despacho</option>
    <option value="Administrativo">Administrativo</option> 
    </select><br/>
    </h5>
    
    <h5>Empleado 6: 
    <input type="text" name="nombre6" placeholder="Nombre empleado">
    <input type="text" name="salario6" placeholder="Salario empleado">
     Departamento: 
    <select multiple name="departamento6[]"> 
    <option value="Ventas">Ventas</option>
    <option value="Entrega">Entrega</option>
    <option value="Recursos">Recursos Humanos</option>
    <option value="Despacho">Despacho</option>
    <option value="Administrativo">Administrativo</option> 
    </select><br/>
    </h5>
    

    <h5>Empleado 7: 
    <input type="text" name="nombre7" placeholder="Nombre empleado">
    <input type="text" name="salario7" placeholder="Salario empleado">
     Departamento: 
    <select multiple name="departamento7[]"> 
    <option value="Ventas">Ventas</option>
    <option value="Entrega">Entrega</option>
    <option value="Recursos">Recursos Humanos</option>
    <option value="Despacho">Despacho</option>
    <option value="Administrativo">Administrativo</option> 
    </select><br/>
    </h5>
    

    <h5>Empleado 8: 
    <input type="text" name="nombre8" placeholder="Nombre empleado">
    <input type="text" name="salario8" placeholder="Salario empleado">
     Departamento
    <select multiple name="departamento8[]"> 
    <option value="Ventas">Ventas</option>
    <option value="Entrega">Entrega</option>
    <option value="Recursos">Recursos Humanos</option>
    <option value="Despacho">Despacho</option>
    <option value="Administrativo">Administrativo</option> 
    </select><br/>
    </h5>
    
    
    <h5>Empleado 9: 
    <input type="text" name="nombre9" placeholder="Nombre empleado">
    <input type="text" name="salario9" placeholder="Salario empleado">
    Departamento:
    
    <select multiple name="departamento9[]"> 
    <option value="Ventas">Ventas</option>
    <option value="Entrega">Entrega</option>
    <option value="Recursos">Recursos Humanos</option>
    <option value="Despacho">Despacho</option>
    <option value="Administrativo">Administrativo</option> 
    </select><br/>
    </h5>
    

    <h5>Empleado 10 : 
    <input type="text" name="nombre10" placeholder="Nombre empleado">
    <input type="text" name="salario10"placeholder="Salario empleado">
    Departamento: 
    <select multiple name="departamento10[]"> 
    <option value="Ventas">Ventas</option>
    <option value="Entrega">Entrega</option>
    <option value="Recursos">Recursos Humanos</option>
    <option value="Despacho">Despacho</option>
    <option value="Administrativo">Administrativo</option> 
    </select><br/>
    
    </h5>   
    <br><br>
   <input type="submit" value="Enviar">

</form>
</body>
</html>