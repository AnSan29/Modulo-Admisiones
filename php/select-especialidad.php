<?php
include("conexion.php");

$consulta_especialidad = "SELECT * FROM especialidad";

/* orientado a objetos */
$ejecutar_consulta = $conexion->query($consulta_especialidad);
while($especialidad=$ejecutar_consulta->fetch_assoc()){
    echo "<option value='".$especialidad["nombre"]."'>".$especialidad["nombre"]."</option>";
}

?>