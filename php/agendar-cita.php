<?php include("sesion.php");?>


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
                  <a class="nav-link active" aria-current="page" href="#">Asignar nueva cita</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="ver-cita.php">Historico de citas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="salir.php">Cerrar sesion</a>
                </li>
            </ul>
        </header>
        <main class="container my-4"><br>
            <h3>
                Te damos la bienvenida:
                <small class="text-muted"><?php echo $_SESSION["usuario"]; ?></small>
            </h3>
            <br>
            <br>
            <form action="registrar.php" method="post">
                <fieldset>
                  <legend>Diligencie datos de usuario:</legend>
                    <div class="mb-3">
                      <label for="tipo_documento" class="form-label">Tipo de documento:</label>
                      <select 
                        id="tipo_documento" 
                        class="form-select"
                        name="tipo_documento_slc"
                        >
                        <option value="">Seleccione un tipo de documento</option>
                        <option value="CC">Cedula Ciudadania</option>
                        <option value="RC">Registro Civil</option>
                        <option value="TI">Tarjeta De Identidad</option>
                      </select>
                    </div>

                    <div class="mb-3">
                      <label for="documento" class="form-label">N&uacute;mero de documento:</label>
                      <input
                          type="number"
                          class="form-control"
                          name="documento_num"
                          id="documento"                                    
                          placeholder="Ingrese documento"
                      />
                    </div>

                    <div class="mb-3">
                      <label for="nombre" class="form-label">Nombre:</label>
                      <input
                          type="text"
                          class="form-control"
                          name="nombre_txt"
                          id="nombre"                                    
                          placeholder="Ingrese nombre de usuario"
                      />
                    </div>
                    <div class="mb-3">
                      <label for="telefono" class="form-label">Telefono:</label>
                      <input
                          type="number"
                          class="form-control"
                          name="telefono_num"
                          id="telefono"                                    
                          placeholder="Ingrese numero de telefono"
                      />
                    </div>

                    <div class="mb-3">
                      <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento:</label>
                      <input
                          type="date"
                          class="form-control"
                          name="fecha_nacimiento_txt"
                          id="fecha_nacimiento"                                    
                      />
                    </div><br>

                  <legend>Diligencie datos cita a asignar:</legend>

                  <div class="mb-3">
                      <label for="especialidad" class="form-label">Especialidad:</label>
                      <select 
                        id="especialidad" 
                        class="form-select"
                        name="especialidad_slc"
                        >
                        <option value="">- - - -</option>
                        <!-- agregamos opciones de manera dinámica desde base de datos -->
                        <?php include("select-especialidad.php"); ?>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="fecha_cita" class="form-label">Fecha de cita:</label>
                      <input
                          type="date"
                          class="form-control"
                          name="fecha_cita_txt"
                          id="fecha_cita"                                    
                      />
                    </div>
                    <div class="mb-3">
                      <label for="regimen" class="form-label">Indique su regimen:</label>
                      <select 
                        id="regimen" 
                        class="form-select"
                        name="regimen_txt"
                        >
                        <option value="">- - - - -</option>
                        <option value="contributivo">Contributivo</option>
                        <option value="subsidiado">Subsidiado</option>
                      </select>
                    </div>

                    <button
                     type="submit" 
                     class="btn btn-primary">Agendar</button>

                
                </fieldset>
            </form>


        
        
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
