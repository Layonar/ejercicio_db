<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Listado de alumnos</title>
    </head>
    <body>
        <center>
        <h1>Lista de alumnos</h1>
        
        <hr>
        
        <table border="4">
            <tr>
                <td>Codigo</td>
                <td>Nombres</td>
                <td>Apellidos</td>
                <td>Cedula</td>
                <td>Telefono</td>
                <td>Celular</td>
                <td>Domicilio</td>
                <td>Email</td>
 
            </tr>
        <?php
            require("./conexion/cnn.php");
            
            $rst = $mysql->query("select * from alumnos");
           // $mysqli->use_result();
            
            while($fila = $rst->fetch_object()){
                echo "<tr>";
                echo "<td>". $fila->codigo.'</td>';
                echo "<td>". $fila->nombres.'</td>';
                echo "<td>". $fila->apellidos.'</td>';
                echo "<td>". $fila->cedula.'</td>';
                echo "<td>". $fila->telefono.'</td>';
                echo "<td>". $fila->celular.'</td>';
                echo "<td>". $fila->domicilio.'</td>';
                echo "<td>". $fila->email.'</td>';
                echo "</br>";
            }
            
            $rst->close();
        
        ?>
                    </table>
        </center>
    </body>
</html>
