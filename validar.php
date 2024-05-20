<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;
$conexion = mysqli_connect("localhost:3307","root","","crud_tinglado");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);
$filas= mysqli_fetch_array($resultado);
 if($filas ['id_cargo']==1)//admin 
 {
    header("location:crud.html");
 }else 
 if ($filas)['id_cargo']==2 //usuario
{header ("location.index.html");} 

mysqli_free_result($resultado);
mysqli_close($conexion);
?>