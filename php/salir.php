<?php
/* iniciamos sesion para poder manipular */
session_start(); 
/* limpio todas las variables */
session_unset(); 
/* destruimos la sesion para que sea necesario volver a ingresar datos en el formulario */
session_destroy(); 
header("Location: ../index.php"); 
exit(); 
?>
