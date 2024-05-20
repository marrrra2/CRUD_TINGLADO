<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD: MODIFICACIONES de COLORES</title>
</head>
<body>
    <?php
        include("con_db.php");
        $id_producto = $_GET['id_producto'];
        $sql = "SELECT * FROM productos WHERE id_producto = $id_producto";
        $resultado = mysqli_query($conexion,$sql);
        $mostrar = mysqli_fetch_array($resultado);
        //$id =$mostrar['id_producto'];
    ?>

    <div class="container">
    <form action= "update2.php".$id method="post" autocomplete="off">
        <!-- VALUE: valor que procede de la Tabla COLORES, que entendermos 'por defecto' para cada campo -->
       
        <!-- Código será READONLY, no se puede cambiar -->
        //input type="hidden" name="id" value='<php $id ?>'>
        <label>Nombre </label>
        <input type="text" name="id_producto" value="<?php echo $mostrar['id_producto']?>"><br>
        <input type="text" name="nombre" value="<?php echo $mostrar['nombre']?>"><br>
        <input type="text" name="tipo" value="<?php echo $mostrar['tipo']?>"><br>
        <input type="text" name="talla" value="<?php echo $mostrar['talla']?>"><br>
        <input type="text" name="descripcion" value="<?php echo $mostrar['descripcion']?>"><br>
        <input type="text" name="precio" value="<?php echo $mostrar['precio']?>"><br>
        <input type="text" name="existencias" value="<?php echo $mostrar['existencias']?>"><br>

        <input type="submit" value="ENVIAR DATOS">
    </form>
    </div>

    
</body>
</html>