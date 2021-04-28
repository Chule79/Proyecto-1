 
<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['cuenta']) >= 1 && strlen($_POST['artista']) >= 1 && strlen($_POST['titulo']) >= 1 && strlen($_POST['album']) >= 1 )  {
	 	$cuenta = $_POST["cuenta"];
		$artista = $_POST["artista"];
		$titulo = $_POST["titulo"];
		$album = $_POST["album"];
		if ($_FILES["musica"]) {
			$nombre_base = basename($_FILES["musica"]["name"]);
			$ruta = "../musica/" . $nombre_base;
			$subirmusica = move_uploaded_file($_FILES["musica"]["tmp_name"], $ruta);
			if($subirmusica){
				    $consulta = "INSERT INTO `musica`(`id_usuario`, `id_artista`, `titulo`, `id_album`, `objeto`) VALUES ('$cuenta','$artista','$titulo','$album','$ruta')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Cancion registrada correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Esta cancion ya existe!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
			}
		}
	
    }
}

?>