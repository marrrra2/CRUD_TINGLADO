<?php
// <<<< Datos procedentes de UPDATE.PHP
// Fichero con la CONEXION
include("con_db.php");



$id_producto = $_POST['id_producto'];
$nombre = $_POST['nombre'];
$tipo = $_POST['tipo'];
$talla = $_POST['talla'];
$descripcion = $_POST ['descripcion'];
$precio = $_POST ['precio'];
$existencias =  $_POST ['existencias'];


$mandato = "UPDATE productos SET nombre='$nombre', tipo='$tipo', talla='$talla', descripcion='$descripcion', precio='$precio', existencias='$existencias' WHERE id_producto='$id_producto'";

$resultado = mysqli_query ($conexion,$mandato);

print "se ha actualizado";

header("Refresh:1; URL:read.php");
?>