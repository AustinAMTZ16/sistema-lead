<?php
    // Iniciar la sesión
    session_start();
    require_once './../functions/CrearBlog.php';
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
        <?php //require_once './head-section/sectionMenu.php'; ?>
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="card bg-white">
                            <div class="card-body p-5">
                                <h3>Crear nuevo blog</h3>
                                <form action="createBlog.php" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="tituloBlog" placeholder="Titulo Blog " required>
                                    </div>
                                    <div class="mb-3">
                                        <textarea type="text" class="form-control" name="decripcionBlog" placeholder="Descripcion Blog " required></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="accionBlog" placeholder="URL Acción" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="file" name="imgBlog" id="imgBlog" >
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