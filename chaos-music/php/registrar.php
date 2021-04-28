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
                <form action="registro.php" class="form-register" method="post" enctype="multipart/form-data">
                    <h1 class="form__title">Rellene los datos</h1>
                    <div class="container--flex">
                        <label for="" class="form__label">Nombre</label>
                        <input type="text" class="form__input" name="nombre" >
                    </div>
                     <div class="container--flex">
                        <label for="" class="form__label">Apellido</label>
                        <input type="text" class="form__input" name="apellido"  >
                    </div>
                    <div class="container--flex">
                        <label for="" class="form__label">Nombre de la cuenta</label>
                        <input type="text" class="form__input" name="cuenta"  >
                    </div>
                    <div class="container--flex">
                        <label for="" class="form__label">Contraseña</label>
                        <input type="text" class="form__input" name="clave" >
                    </div>
                    <div class="container--flex">
                        <label for="" class="form__label">Correo</label>
                        <input type="text" class="form__input" name="correo" id="correo" >
                    </div>
                    <input type="submit" class="form__submit" name="register">
                </form>
                <?php
                    include ("registro.php");
                ?>
    <script src="../js/particles.min.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>