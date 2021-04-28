<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

include('con_db.php');

$consulta="SELECT * FROM usuario WHERE cuenta='$usuario' and clave='$contraseña'";
$resultado=mysqli_query($conex,$consulta);

$filas=mysqli_num_rows($resultado);
 
	if($filas['cuenta']>0){
	$_SESSION['username'] = $usuario;
	header("location: menu.php");
} ?>
mysqli_free_result($resultado);
mysqli_close($conexion);
