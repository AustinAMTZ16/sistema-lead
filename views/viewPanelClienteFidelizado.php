<?php
  session_start();
  require_once './../functions/PanelClienteFidelizado.php';
  // Cerrar la conexión
  $conn->close();
  //validacion doble comprueba por url
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

      <div class="container">
        <h4>Bienvenido <?php echo $_SESSION["usuario"];?>!</h4>
      </div>

      <?php require_once './head-section/web-js.php'; ?>
    </body>

</html>