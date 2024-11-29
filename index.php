<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar cita</title>
</head>
<body>
    <div class="contenedor">
        <form action="php/control.php" name="login_frm" method="post">
            <!-- TITULO DE FORMULARIO: -->
            <?php
            /* Método para manejar la cnfiguracion de errores. */
            error_reporting(E_ALL ^E_NOTICE);
            /* condicional para mostrar mensaje dependiendo si hay o no errores en validacion de datos */
            if($_GET["error"] == "si"){
                echo "<span style='color: red;'' >Verifica tus datos</span><p>Usuario o password inv&aacute;lidos</p>";
            }else{
                echo "<span>Ingresa tus datos</span>";
            }
            ?>
            <br><br>
            <label for="usuario">Usuario:</label>
            <br>
            <input type="text" name="usuario_txt" id="usuario">
            <br><br>
            <label for="password">Password:</label>
            <br>
            <input type="password" name="password_txt" id="password">
            <br><br><br>
            <input type="submit" value="Ingresar"><br>
        </form>
        

    </div>
</body>
</html>