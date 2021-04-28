<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaos-Music Registro Artista</title>
    <!-- Estilos CSS -->
    <link rel="stylesheet" href="../css/artista.css">   
</head>
<body>

    <div id="particles-js"></div>
                <form action="artistaen.php" class="principal" method="post" enctype="multipart/form-data">
                    <h1 class="titulo">Rellene los datos</h1>
                    <div class="container--flex">
                        <label for="" class="form__label">Nombre</label>
                        <input type="text" class="caja" name="nombre" >
                    </div>
                    <input type="submit" class="buscar" name="register">
                </form>
                <?php
                    include ("artistaen.php");
                ?>
    <script src="../js/particles.min.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>