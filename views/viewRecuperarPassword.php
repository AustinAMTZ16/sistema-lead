<?php
  //session_start();
  require_once './../functions/RecuperarPassword.php';
  // Cerrar la conexión
  //$conn->close();
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
                        <form method="POST">
                            <h3>Recupera tu perfil MexiClientes</h3>
                            <div class="mb-3">
                                <label for="email" class="form-label ">Dirección de correo electrónico </label>
                                <input type="email" autocomplete="off" class="form-control" name="correo" id="correo" value="<?php if(isset($_POST['correo'])) echo $_POST['correo']?>
                                
                                " require placeholder="name@example.com">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-outline-dark" name="md_insert" type="submit">Recuperar cuenta</button>
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