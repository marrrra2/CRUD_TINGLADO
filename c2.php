<?php

include("con_db.php");

if ($conexion){
    echo "Conexión establecida con éxito<br>";
}
else{
    echo"Error en la conexión: ".mysqli_connect_error();
}

$id_producto = trim($_POST['id_producto']);
$nombre = trim($_POST['nombre']);
$tipo = trim ($_POST['tipo']);
$talla = trim ($_POST['talla']);
$descripcion = trim ($_POST ['descripcion']);
$precio = trim ($_POST ['precio']);
$existencias = trim ($_POST ['existencias']);

$clave_primaria = $id_producto;
$sql = "SELECT * FROM productos WHERE id_producto = $clave_primaria";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) == 0) {

} else {
    echo "Error: La clave primaria ya existe en la tabla.";
}

$mandato = "INSERT INTO productos (id_producto,nombre,tipo,talla,descripcion,precio,existencias) VALUES ('$id_producto','$nombre', '$tipo', '$talla', '$descripcion', '$precio', '$existencias')";

$resultado = mysqli_query($conexion,$mandato);

if ($resultado){
   echo "Registro ".$id_producto." incluido con exito";
}

?>