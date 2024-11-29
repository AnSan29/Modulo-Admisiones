<?php 
include("sesion.php");
include("mostrar.php");

?>


<!doctype html>
<html lang="en">
    <head>
        <title>Asignacion de citas</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        
        
    </head>

    <body><br>
        <header>
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                  <a class="nav-link" aria-current="" href="agendar-cita.php">Asignar nueva cita</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link active" href="ver-cita.php">Historico de citas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="salir.php">Cerrar sesion</a>
                </li>
            </ul>
        </header>
        <main class="container my-4"><br>
            <h3>
                Citas agendadas:
                
            </h3>
            <br>
            <br>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Documento</th>
                <th scope="col">Tipo documento</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Fecha Asignada</th>
                <th scope="col">Especialidad</th>
                <th scope="col">Valor consulta</th>
                <th scope="col">Regimen</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <?php foreach($ejecutar_3 as $fila){ ?>
            <tbody>

              <tr>
                <th scope="row"><?= $fila['id'] ?></th>
                <td><?= $fila['usuario_id'] ?></td>
                <td><?= $fila['tipo_documento'] ?></td>
                <td><?= $fila['nombre_usuario'] ?></td>
                <td><?= $fila['telefono'] ?></td>
                <td><?= $fila['fecha_cita'] ?></td>
                <td><?= $fila['especialidad'] ?></td>
                <td><?= "$".number_format($fila['valor_consulta']) ?></td>
                <td><?= $fila['regimen'] ?></td>
                <td>
                  <a
                    name=""
                    id=""
                    class="btn btn-warning"
                    href="editar.php?id=<?= $fila['id']?>"
                    role="button"
                    >Editar</a>

                  <a
                    name=""
                    id=""
                    class="btn btn-danger"
                    href="eliminar.php?id=<?= $fila['id']?>"
                    role="button"
                    onclick="return verificar()">Eliminar</a>
                </td>
              </tr>
              <?php } ?>
        </table>
            


        
        
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
<script>
  function verificar(){
    let respuesta = confirm("Desea eliminar esta cita?");

    if(respuesta){
      return true;
    }else{
      return false;
    }
  }
</script>