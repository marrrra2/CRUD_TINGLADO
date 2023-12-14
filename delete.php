<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD: ELIMINACIÓN de ARTÍCULOS</title>
</head>
<body>
    <?php
        include("con_db.php");

        $id_producto = $_GET['id_producto']; //LLEGA DE READ.PHP, BOTÓN "BORRAR"
        $sql = "DELETE FROM productos WHERE id_producto = $id_producto";

        $mandato = mysqli_query($conexion,$sql);
       


        if ($mandato){
            echo "Registro ".$id_producto." BORRADO CORRECTAMENTE";
            header("Refresh: 2; url=read.php");
        }
        else{
            echo "NO HAY CONEXIÓN, O VETE TÚ A SABER...";
        }
    ?>