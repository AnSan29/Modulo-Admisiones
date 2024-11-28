<?php
session_start();
//Evaluo que la sesion continue verificando una de las variables creadas en contro.php, cuando esta ya no coincida con su valor inicial se redirije al archivo de: salir.php
if($_SESSION["autentificado"] != true){
    header("Location: salir.php");
}

?>