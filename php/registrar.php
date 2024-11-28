<?php
include("conexion.php");

if($_POST){
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

    $insertar_usuario = "INSERT INTO usuario(documento,nombre,tipo_documento,telefono,fecha_nacimiento) VALUES('$documento','$nombre','$t_documento','$telefono','$fecha_nacimiento')";
    $ejecutar_1 = mysqli_query($conexion,$insertar_usuario);

    $insertar_cita = "INSERT INTO citas(usuario_id,tipo_documento,nombre_usuario,telefono,fecha_cita,especialidad,valor_consulta,regimen) VALUES('$documento','$t_documento','$nombre','$telefono','$fecha_cita','$especialidad','$valor_consulta','$regimen')";
    $ejecutar_2 = mysqli_query($conexion,$insertar_cita);

    if($ejecutar_1 && $ejecutar_2){
        ?>
        <script>
            alert("Registro exitoso!!")
            window.location.href="agendar-cita.php";
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Error en el Registro");
            window.location.href="agendar-cita.php";
        </script>
        <?php
    }

    

}
?>