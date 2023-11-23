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
$descripcion = trim ($_POST ['Descripcion'])
$precio = trim ($_POST ['precio']);

$clave_primaria = $id_producto;
$sql = "SELECT * FROM productos WHERE id_producto = $clave_primaria";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) == 0) {

} else {
    echo "Error: La clave primaria ya existe en la tabla.";
}

$mandato = "INSERT INTO productos (id_producto,nombre) VALUES ('$id_producto','$nombre')";

$resultado = mysqli_query($conexion,$mandato);

if ($resultado){
   echo "Registro ".$codigo." incluido con exito";
}

?>