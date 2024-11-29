<?php
include("conexion.php");

if($_POST){
    $id = $_POST['id'];
    $t_documento = $_POST["tipo_documento_slc"];
    $documento = $_POST["documento_num"];
    $nombre = $_POST["nombre_txt"];
    $telefono = $_POST["telefono_num"];
    $fecha_nacimiento = $_POST["fecha_nacimiento_txt"];
    $especialidad = $_POST["especialidad_slc"];
    $fecha_cita = $_POST["fecha_cita_txt"];
    $regimen = $_POST["regimen_txt"];

    switch ($especialidad) {
        case 'Medicina_General':
            $valor_consulta = 20000;
            break;
        case 'Medicina_Familiar':
            $valor_consulta = 25000;
            break;
        case 'Cardiologia':
            $valor_consulta = 50000;
            break;
        case 'Nefrologia':
            $valor_consulta = 80000;
            break;
        case 'Urologia':
            $valor_consulta = 80000;
            break;
        case 'Ginecologia':
            $valor_consulta = 60000;
            break;
        case 'Odontologia':
            $valor_consulta = 15000;
            break;
        case 'Cirugia_General':
            $valor_consulta = 70000;
            break;
        default:
            $valor_consulta = 0;
            break;
    }

    $actualizar_cita = "UPDATE citas SET usuario_id= '$documento', tipo_documento= '$t_documento', nombre_usuario= '$nombre', telefono= '$telefono', fecha_cita= '$fecha_cita', especialidad= '$especialidad', valor_consulta= '$valor_consulta', regimen= '$regimen' WHERE id= '$id'";
    $ejecutar6 = mysqli_query($conexion,$actualizar_cita);

    if($actualizar_cita){
        ?>
        <script>
            alert("Registro exitoso!!")
            window.location.href="ver-cita.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Error")
            window.location.href="ver-cita.php";
        </script>
        <?php
    }


}
?>