<?php
include("sesion.php");
include("conexion.php");
$id = $_GET['id'];
$editar_cita = "SELECT * FROM citas WHERE id = '$id'";
$ejecutar5 = mysqli_query($conexion,$editar_cita);
$fila = mysqli_fetch_array($ejecutar5);
?>

<!doctype html>
<html lang="en">
    <head>
        <title>Edici&oacute;n de citas</title>
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
        <main class="container my-4"><br>
            <h3>
                Edici&oacute;n de cita m&eacute;dica:
            </h3>
            <br>
            <br>
            <form action="actualizar.php" method="post">
                <fieldset>
                  <legend>Datos del usuario:</legend><br>

                  <div class="mb-3">
                    <input type="hidden" name="id" value="<?= $fila['id']?>">
                      <label for="" class="form-label">Id de cita:</label>
                      <input
                          type="number"
                          class="form-control"
                          name="id"
                          disabled
                          value="<?= $fila['id'] ?>"
                          id=""                                    
                          placeholder="id"
                      />
                    </div>
                    <div class="mb-3">
                    <input type="hidden" name="tipo_documento_slc" value="<?= $fila['tipo_documento']?>">
                      <label for="tipo_documento" class="form-label">Tipo de documento:</label>
                      <select 
                        id="tipo_documento" 
                        class="form-select"
                        name="tipo_documento_slc"
                        disabled
                        >
                        <option value=""><?= $fila['tipo_documento']?></option>
                        <option value="CC">Cedula Ciudadania</option>
                        <option value="RC">Registro Civil</option>
                        <option value="TI">Tarjeta De Identidad</option>
                      </select>
                    </div>

                    <div class="mb-3">
                    <input type="hidden" name="documento_num" value="<?= $fila['usuario_id']?>">
                      <label for="documento" class="form-label">N&uacute;mero de documento:</label>
                      <input
                          type="number"
                          class="form-control"
                          name="documento_num"
                          id="documento"      
                          disabled
                          value="<?= $fila['usuario_id']?>"                              
                          placeholder="Ingrese documento"
                      />
                    </div>

                    <div class="mb-3">
                    <input type="hidden" name="nombre_txt" value="<?= $fila['nombre_usuario']?>">
                      <label for="nombre" class="form-label">Nombre:</label>
                      <input
                          type="text"
                          class="form-control"
                          name="nombre_txt"
                          id="nombre"    
                          disabled
                          value="<?= $fila['nombre_usuario'] ?>"                                
                          placeholder="Ingrese nombre de usuario"
                      />
                    </div>
                    <div class="mb-3">
                    <input type="hidden" name="telefono_num" value="<?= $fila['telefono']?>">
                      <label for="telefono" class="form-label">Telefono:</label>
                      <input
                          type="number"
                          class="form-control"
                          name="telefono_num"
                          disabled
                          value="<?= $fila['telefono'] ?>"
                          id="telefono"                                    
                          placeholder="Ingrese numero de telefono"
                      />
                    </div>

                  <legend>Diligencie datos cita a asignar:</legend>

                  <div class="mb-3">
                      <label for="especialidad" class="form-label">Especialidad:</label>
                      <select 
                        id="especialidad" 
                        class="form-select"
                        name="especialidad_slc"
                        >
                        <option value=""><?= $fila['especialidad'] ?></option>
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
                          value="<?= $fila['fecha_cita'] ?>"
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
                        <option value="<?= $fila['regimen'] ?>"><?= $fila['regimen'] ?></option>
                        <option value="contributivo">Contributivo</option>
                        <option value="subsidiado">Subsidiado</option>
                      </select>
                    </div>

                    <button
                     type="submit" 
                     class="btn btn-primary">Agendar</button>
                    
                     <a
                            name=""
                            id=""
                            class="btn btn-danger"
                            href="ver-cita.php"
                            role="button"

                            >Cancelar</a
                        >

                
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
