<?php
    // Iniciar la sesión
    session_start();
    require_once './../functions/PuntosLealtadUpdate.php';
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
                                <h3>Crear Puntos Recompensa</h3><br><br>
                                <p>Puntos Lealtad actuales: <?php echo $ResponsePuntosUsuario['puntosRecompensa']; ?></p>
                                <p>Fecha modificación: <?php echo $ResponsePuntosUsuario['fechaModificacion']; ?></p>
                                <form action="createpuntos.php" method="POST">


                                    <input type="hidden"  name="idProspecto" value="<?php echo isset($_GET['idProspecto']) ? $_GET['idProspecto'] : ''; ?>">


                                    <div class="mb-3">
                                        <input type="number" class="form-control" name="puntosRecompensaF" required placeholder="Ingrese  Puntos Recompensa">
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-outline-dark" type="submit" onclick="return confirm('¿Está seguro de Crear este registro?')">Asignar</button>
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