<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Formulario</title>
        <link rel="stylesheet" href="estilos.css"/>
        <!-- de Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,800;0,900;1,400&display=swap" rel="stylesheet">
    </head>
    <body>
        <form action="correo.php" method="POST">
            <div>
                <h1>Formulario</h1>
                <h3>Bienvenidos al formuladio de la I.E "Nuevo Mundo"</h3>
                <div class="grupo">
                    <input type="texto" name="nombre" id="" required=""><span class="barra"></span>
                    <label>Nombre:</label>
                </div>
                <div class="grupo">
                    <input type="texto" name="apellido" id="" required=""><span class="barra"></span>
                    <label>Apellido:</label>
                </div>
                <div class="grupo">
                    <input type="number" name="telefono" id="" required=""><span class="barra"></span>
                    <label>Telefono:</label>
                </div>
                <div class="grupo">
                    <input type="email" name="email" id="" required=""><span class="barra"></span>
                    <label>Email:</label>
                </div>
                <button type="submit">Registrarse</button>
            </div>
        </form>
        <?php
        ?>
    </body>
</html>

