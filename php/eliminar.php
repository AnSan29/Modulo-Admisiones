<?php
include("conexion.php");

$id = $_GET['id'];

$eliminar_cita = "DELETE FROM citas WHERE id = '$id'";
$ejecutar4 = mysqli_query($conexion,$eliminar_cita);

if($eliminar_cita){
    ?>
    <script>
        alert("Cita eliminada");
        window.location.href="ver-cita.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Error al eliminar cita");
        window.location.href="ver-cita.php";
    </script>
    <?php
}

?>