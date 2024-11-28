<?php
include("conexion.php");

$mostrar_cita = "SELECT * FROM citas";
$ejecutar_3 = mysqli_query($conexion,$mostrar_cita);

?>