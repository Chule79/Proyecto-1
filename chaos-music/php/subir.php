<?php
include('con_db.php');
$consulta= "SELECT id, nombre FROM  artista";

$resultado=mysqli_query($conex,$consulta);

$filas=mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaos-Music Registro</title>
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="../css/registro.css">   
</head>
<body>
    <div id="particles-js"></div>
                <form action="subido.php" class="form-register" method="post" enctype="multipart/form-data">
                    <h1 class="form__title">Rellene los datos</h1>
                    <div class="container--flex">
                        <label for="" class="form__label">Cuenta</label>
                        <input type="text" class="form__input" name="cuenta" >
                    </div>
                     <div class="container--flex">
                        <label for="" class="form__label">Artista</label>
                        <input type="text" class="form__input" name="artista"  >
                    </div>
                    <div class="container--flex">
                        <label for="" class="form__label">Titulo</label>
                        <input type="text" class="form__input" name="titulo"  >
                    </div>
                    <div class="container--flex">
                        <label for="" class="form__label">Album</label>
                        <input type="text" class="form__input" name="album" >
                    </div>
                    <div class="container--flex">
                        <label for="" class="form__label">Musica</label>
                        <input type="file" class="form__input" name="musica" >
                    </div>
                    <input type="submit" class="form__submit" name="register">
                </form>
                <?php
                    include ("subido.php");
                ?>
    <script src="../js/particles.min.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>