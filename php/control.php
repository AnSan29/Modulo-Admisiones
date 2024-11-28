<?php
/* controlar acceso a la aplicacion */
    if($_POST["usuario_txt"] == "admin" && $_POST["password_txt"] == "12345"){
        //inicio la sesión:
        session_start();

        //Declaro mis variables de sesión
        $_SESSION["autentificado"]= true;
        $_SESSION["usuario"] = $_POST["usuario_txt"];

        header("Location: agendar-cita.php");
    }else{
        header("Location: ../index.php?error=si");
    }
?>