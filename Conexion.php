<?php
    $conexion =  new mysqli("localhost", "root" ,"", "transitdolls");

    if($conexion->connect_errno)
    {
        echo "Fallo a la conexión ".$conexion->connect_errno;
    }
    
    $conexion->set_charset("utf8");
    $resul=$conexion->query("SELECT type, material, made_in from dolls");
echo "<table>
                <tr>
                <th>type</th>
                <th>material</th>
                <th>made_in</th>
              </tr>";
    while($fila=$resul->fetch_assoc()){
        echo "<tr>
                <td>".$fila['type']."</td>
                <td>".$fila['material']."</td>
                <td>".$fila['made_in']."</td>
              </tr>
              ";

    }
?>