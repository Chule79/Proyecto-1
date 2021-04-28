<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaos-Music Registro</title>
    <link rel="stylesheet" href="../css/registro.css">   
</head>
<body>
    <div id="particles-js"></div>
                <form action="validar.php" class="form-register" method="post" enctype="multipart/form-data">
                    <h1 class="form__title">Inicie Sesion</h1>
                    <div class="container--flex">
                        <label for="" class="form__label">Usuario</label>
                        <input type="text" class="form__input" name="usuario" >
                    </div>
                     <div class="container--flex">
                        <label for="" class="form__label">Contraseña</label>
                        <input type="text" class="form__input" name="contraseña"  >
                    </div>
                    <input type="submit" class="form__submit" name="register">
                </form>
    <script src="../js/particles.min.js"></script>
    <script src="../js/app.js"></script>
</body>
</html>