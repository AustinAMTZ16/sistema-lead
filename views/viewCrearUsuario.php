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
                                <label for="email" class="form-label ">Usuario </label>
                                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label ">Usuario </label>
                                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label ">Usuario </label>
                                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="name@example.com" required>
                            </div>
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
                            <div class="d-grid">
                                <button class="btn btn-outline-dark" type="submit" onclick="window.location.href='../index.php'">Regresar al Menu</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once './head-section/web-js.php'; ?>
</body>
</html>