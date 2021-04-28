<?php 
session_start();
$usuario = $_SESSION['username'];
echo "$usuario";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">   
</head>
<body>
	<div id="particles-js"></div>
	<header>
		<nav class="navegacion">
			<ul class="menu">
				<li><a href="principal.php">Inicio</a></li>
				<li><a href="artistacom.php">Crear Artista</a></li>
				<li><a href="album.php">Crear Album</a></li>
				<li><a href="#">Quienes Somos</a></li>
				<li><a href="#" ><span><?php $usuario ?></span></a>
					<ul class="submenu">
						<li><a href="salir.php">Salir</a></li>
						<li><a href="subir.php">Subir Musica</a></li>
						<li><a href="mimusica.php">Mi Musica</a></li>
					</ul>
				</li>				
			</ul>
		</nav>
	</header>
	<script src="../js/particles.min.js"></script>
    <script src="../js/app.js"></script>
</body>