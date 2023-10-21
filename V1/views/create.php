<?php
    // Iniciar la sesión
    session_start();
    require_once './../functions/CrearProspecto.php';
    // Cerrar la conexión
    $conn->close();
    // Verificar si el usuario ha iniciado sesión
    if (!isset($_SESSION["usuario"])) {
        // Redireccionar al usuario a la página de inicio de sesión
        header("Location: ../index.php");
        exit();
    }
    ?>
<!DOCTYPE html>
<html>

    <head>
        <?php require_once './head-section/head.php'; ?>
    </head>

    <body>
        <?php require_once './head-section/sectionMenu.php'; ?>
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="card bg-white">
                            <div class="card-body p-5">
                                <h3>Crear Prospecto</h3>
                                <form action="create.php" method="POST">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre " required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="apellidoPaterno" placeholder="Ingrese Apellido Paterno " required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="apellidoMaterno" placeholder="Ingrese Apellido Materno " required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="number" class="form-control" name="telefono" placeholder="Ingrese Telefono ">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" name="correo" placeholder="Ingrese Correo " required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="date" class="form-control" name="fechaNacimiento" placeholder="Ingrese Fecha Nacimiento ">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="lugarNacimiento" placeholder="Ingrese Lugar Nacimiento ">
                                    </div>
                                    <!-- <div class="mb-3">
                                        <input type="text" class="form-control" name="origenProspecto" placeholder="Red Social, Formulario WEB o Usuario Presente">
                                    </div> -->
                                    <div class="mb-3">
                                        <select name="origenProspecto" class="form-select" aria-label="Default select example">
                                            <option selected>Seleccione </option>
                                            <option>Red Social</option>
                                            <option>Formulario WEB</option>
                                            <option>Usuario Presente</option>
                                        </select>
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-outline-dark" type="submit" onclick="return confirm('¿Está seguro de Crear este registro?')">Crear</button>
                                    </div><br>
                                    <div class="d-grid">
                                        <button class="btn btn-outline-dark" type="submit" onclick="window.location.href='panelcontrol.php'">Regresar al Menu</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once './head-section/web-js.php'; ?>
    </body>

</html>