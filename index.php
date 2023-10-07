<?php
// Iniciar la sesión
session_start();
require_once './functions/sistemav1/RecuperarPassword.php';
// Cerrar la conexión
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once './views/head-section/head.php'; ?>
</head>

<body>
    
    <section>
        <?
            // require_once(__DIR__ . '/config.php');
            // require_once(__DIR__ . '/router.php');
            // $router = new Router();
            // $router->run();
            require_once './views/viewLogin/login.php';
        ?>
    </section>

    <?php require_once './views/head-section/web-js.php'; ?>
</body>

</html>