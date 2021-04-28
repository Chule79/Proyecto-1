 
<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['cuenta']) >= 1 && strlen($_POST['clave']) >= 1 && strlen($_POST['correo']) >= 1)  {
	 	$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$usuario = $_POST["cuenta"];
		$clave = $_POST["clave"];
		$correo = $_POST["correo"];
	    $consulta = "INSERT INTO `usuario`(`nombre`, `apellido`, `cuenta`, `clave`, `correo`) VALUES ('$nombre','$apellido','$usuario','$clave','$correo')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente, difruta de tu musica!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Algo a ido mal!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>