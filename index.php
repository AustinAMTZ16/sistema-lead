<?php
// Iniciar la sesión
//session_start();
require_once './functions/IniciarSesion.php';
// Cerrar la conexión
//$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once './views/head-section/head.php'; ?>
</head>

<body>
    <br><br><br><br><br><br>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-6">
                <div class="container text-center">
                    <div class="row justify-content-center">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER    ["PHP_SELF"]); ?>">
                        <h3>Bienvenido MexiClientes</h3>
                        <div class="mb-3">
                            <label for="email" class="form-label ">Correo electrónico / Dominio </label>
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="ejemplo: test@engranetmx.com / engranetmx.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label ">Contraseña</label>
                            <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder="*******" required>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-outline-dark" type="submit">Iniciar Sesión</button>
                        </div>
                    </form>
                    <?php
                        // Mostrar mensaje de error, si existe
                        if (isset($mensaje_error)) {
                            echo '<p style="color: red;">' . $mensaje_error . '</p>';
                        }
                    ?>
                    </div>
                </div>
                <br>
                <div class="container text-center">
                    <div class="row justify-content-center">
                        <a href="./views/viewCrearUsuarioProspecto.php"><strong>Crear mi perfil.</strong></a>
                        <a href="./views/viewRecuperarPassword.php"><strong>Recuperar contraseña.</strong></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="padre">
        <div class="hijo">
            <div class="columna12">
                <div class="fila">
                    <a href="./views/viewCrearUsuarioProspecto.php"></a>
                    <a href="./views/viewCrearUsuario.php"><strong>Crear negocio.</strong></a>
                </div>
            </div>
        </div>
    </div>

    <?php require_once './views/head-section/web-js.php'; ?>
</body>

</html>