<?php
    // Iniciar la sesión
    session_start();
    require_once './../functions/EditarProspecto.php';
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
                                <h2>Editar Prospecto</h2>

                                <form action="editar.php" method="POST">
                                    <input type="hidden" name="idProspecto" value="<?php echo $usuario['idProspecto']; ?>">

                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="nombre" value="<?php echo $usuario['nombre']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="apellidoPaterno" value="<?php echo $usuario['apellidoPaterno']; ?>" placeholder="Ingrese Apellido Paterno ">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="apellidoMaterno" value="<?php echo $usuario['apellidoMaterno']; ?>" placeholder="Ingrese Apellido Materno " >
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="telefono" value="<?php echo $usuario['telefono']; ?>" placeholder="Ingrese Telefono ">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" name="correo" value="<?php echo $usuario['correo']; ?>" placeholder="Ingrese Correo " >
                                    </div>
                                    
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="mensaje" value="<?php echo $usuario['mensaje']; ?>" placeholder="Ingrese Mensaje ">
                                    </div>
                                
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="fechaNacimiento" value="<?php echo $usuario['fechaNacimiento']; ?>" placeholder="Ingrese Fecha Nacimiento ">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="lugarNacimiento" value="<?php echo $usuario['lugarNacimiento']; ?>" placeholder="Ingrese Lugar Nacimiento ">
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-outline-dark" type="submit" onclick="return confirm('¿Está seguro de Actualizar este registro?')">Actualizar</button>
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