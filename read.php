<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD: LISTAR REGISTROS de ARTÍCULOS</title>
    <link rel="stylesheet" href="style.css">

<body>

    <?php
        include("con_db.php");
        $sql = "SELECT * FROM productos ORDER BY id_producto";
        $result = mysqli_query($conexion,$sql);

        if (mysqli_num_rows($result)){          
        echo "<table border='1' cellpadding='0' cellspacing='0' align='center'>";
         echo "<tr>";
         
                echo "<th>id_producto</th>";   
                echo "<th>nombre</th>";
                echo "<th>tipo</th>";
                echo "<th>talla</th>";
                echo "<th>descripcion</th>";
                echo "<th>precio</th>";
                echo "<th>existencias</th>";

                echo "<th>BORRAR</th>";
                echo "<th>MODIFICAR</th>";
            echo "</tr><br>";
            while ($mostrar = mysqli_fetch_array($result) ) { 
                echo "<tr>";                  
                    echo "<td>".$mostrar['id_producto']."</td>";
                    echo "<td>".$mostrar['nombre']."</td>";
                    echo "<td>".$mostrar['tipo']."</td>";
                    echo '<td>'.$mostrar['talla'].'</td>';
                    echo "<td>".$mostrar['descripcion']."</td>";
                    echo '<td>'.$mostrar['precio'].'</td>';
                    echo '<td>'.$mostrar['existencias'].'</td>';
                    echo "<td><a href='delete.php?id_producto=".$mostrar['id_producto']."'>BORRAR</td>"; 
                    echo "<td><a href='update.php?id_producto=".$mostrar['id_producto']."'>MODIFICAR ".$mostrar['id_producto']."</td>";

                }
        echo "</table>";

        }else{                                  
            echo "ATENCION, no hay registros para listar...";     
        }
        ?>

        
</body>
</html>