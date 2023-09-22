<?php
  session_start();
  require_once './../functions/CrearUsuario.php';
  // Cerrar la conexión
  $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once './head-section/head.php'; ?>
</head>
<body>
    <br><br><br><br><br><br>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-6">
                <div class="container text-center">
                    <div class="row justify-content-center">
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER    ["PHP_SELF"]); ?>">
                            <h3>Crea tu perfil MexiClientes</h3>
                            <div class="mb-3">
                                <label for="text" class="form-label ">Nombre del negocio: </label>
                                <input type="text" class="form-control" name="nombreEmpresa" id="nombreEmpresa" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label ">Pagina web del negocio: </label>
                                <input type="text" class="form-control" name="dominioB2B" id="dominioB2B" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label ">Correo electrónico del negocio: </label>
                                <input type="email" class="form-control" name="correo" id="correo" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label ">Giro del negocio: </label>
                                <input type="text" class="form-control" name="giroDominio" id="giroDominio" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label ">Contraseña del perfil</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="*******" required>
                            </div>
                            
                            <div class="d-grid">
                                <button class="btn btn-outline-dark" name="saveCompany" type="submit">Iniciar Sesión</button>
                            </div>
                            
                        </form>
                        <div class="d-grid">
                            <button class="btn btn-outline-dark" type="submit" ><a href="../index.php">Regresar al Menu</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once './head-section/web-js.php'; ?>
</body>
</html>