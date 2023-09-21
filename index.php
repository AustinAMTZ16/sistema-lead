<?php
    // Iniciar la sesión
    session_start();
    require_once './functions/IniciarSesion.php';
    // Cerrar la conexión
    $conn->close();
?>
<!DOCTYPE html>
<html>

    <head>
        <?php require_once './views/head-section/head.php'; ?>
    </head>

    <body>
        <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 col-md-8 col-lg-6">
                        <div class="card bg-white">
                            <div class="card-body p-5">
                                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <h3>Bienvenido MexiClientes</h3>
                                    <div class="mb-3">
                                        <label for="email" class="form-label ">Usuario </label>
                                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="name@example.com" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label ">Contraseña</label>
                                        <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder="*******" required>
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-outline-dark" type="submit">Iniciar Sesión</button>
                                    </div>
                                </form>
                                <div class="padre">
                                    <div class="hijo">
                                        <div class="columna12">
                                            <div class="fila">
                                                <a href="#" target="_blank" rel="noopener noreferrer"><strong>Crear mi perfil.</strong></a>
                                            </div>
                                            <div class="fila">
                                                <a href="#" target="_blank" rel="noopener noreferrer"><strong>Recuperar contraseña.</strong></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            // Mostrar mensaje de error, si existe
                            if (isset($mensaje_error)) {
                                echo '<p style="color: red;">' . $mensaje_error . '</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once './views/head-section/web-js.php'; ?>
    </body>
</html>