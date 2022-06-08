<?php
    $conexion =  new mysqli("localhost", "root" ,"", "transitdolls");

    if($conexion->connect_errno)
    {
        echo "Fallo a la conexión ".$conexion->connect_errno;
    }
    
    $conexion->set_charset("utf8");
    $resul=$conexion->query("");
    while($fila=$resul->fetch_assoc()){
        echo "<table>
                <tr>
                <th>Company</th>
                <th>Contact</th>
                <th>Country</th>
              </tr>
              <tr>";

    }
?>