<?php
  session_start();
  require_once './../functions/PanelControl.php';
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
        <h4>Listado de Prospecto</h4>
        <a class="btn btn-primary mb-3" href="./create.php">Crear nuevo</a>
        <table class="table" id="myTable">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Apellido Paterno</th>
              <th>Telefono</th>
              <th>Correo</th>
              <th>Puntos Lealtad</th>
              <th>Mensaje</th>
              <th>&nbsp;</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()) : ?>
              <tr>
                <td><?php echo $row['idProspecto']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['apellidoPaterno']; ?></td>
                <td><?php echo $row['telefono']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['puntosRecompensa']; ?></td>
                <td><?php echo $row['mensaje']; ?></td>

                <td>
                  <a class="btn btn-primary btn-sm" href="editar.php?idProspecto=<?php echo $row['idProspecto']; ?>">Modificar Cliente</a>
                  <a class="btn btn-warning btn-sm" href="createpuntos.php?idProspecto=<?php echo $row['idProspecto']; ?>">Puntos Lealtad</a>
                  <a class="btn btn-danger btn-sm" href="./../functions/EliminarProspecto.php?idProspecto=<?php echo $row['idProspecto']; ?>" onclick="return confirm('¿Está seguro de eliminar este registro?')">Quitar </a>
                  <!--Llamar a funcion cambiar estado(sqlCambiar estado dentro de  la tabla tb_Prospecto va buscar el registro seleccionado y va a modificar propiedad estadoSistema='Falso') -->
                </td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>
      </div>

      <?php require_once './head-section/web-js.php'; ?>
    </body>

</html>