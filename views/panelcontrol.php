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

      

        <div class="padre">
          <div class="hijo">
            <div class="fila">

              <div class="columna8" style="overflow: auto; width:100%;">
                <h4>Listado de Prospecto</h4>
                <a class="btn btn-primary mb-3" href="./create.php">Crear nuevo</a>
                  <div class="fila">
                    <div class="columna12">
                      <table class="table table-responsive" id="myTable">
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
                  </div>
              </div>
            <!--</div>
            
            <div class="fila"> -->
              <div class="columna4" style="overflow: auto; width:100%; ">
                <h4>Listado de Blog</h4>
                <a class="btn btn-primary mb-3" href="./createBlog.php">Crear nuevo POST</a>
                <div class="fila">
                  <div class="columna12">
                      <table class="table table-responsive" id="myTable2">
                        <thead>
                          <tr>
                            <th>idBlog</th>
                            <th>tituloBlog</th>
                            <th>decripcionBlog</th>
                            <th>imagenBlog</th>
                            <th>accionBlog</th>
                            <th>webOrigen</th>
                            <th>&nbsp;</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php while ($row = $result2->fetch_assoc()) : ?>
                            <tr>
                              <td><?php echo $row['idBlog']; ?></td>
                              <td><?php echo $row['tituloBlog']; ?></td>
                              <td><?php echo $row['decripcionBlog']; ?></td>
                              <td><?php echo'<img width="50%" src="data:image/jpeg;base64,' . $row['imagenBlog'] . '" alt="Imagen en base64">'; ?></td>
                              <td><?php echo $row['accionBlog']; ?></td>
                              <td><?php echo $row['webOrigen']; ?></td>
                              
                              <td>
                                <a class="btn btn-primary btn-sm" href="x.php?idBlog=<?php echo $row['idBlog']; ?>">Modificar POST</a>
                                
                                <a class="btn btn-danger btn-sm" href="./../functions/x.php?idBlog=<?php echo $row['idBlog']; ?>" onclick="return confirm('¿Está seguro de eliminar este registro?')">Quitar </a>

                                <!--Llamar a funcion cambiar estado(sqlCambiar estado dentro de  la tabla tb_Prospecto va buscar el registro seleccionado y va a modificar propiedad estadoSistema='Falso') -->
                              </td>
                            </tr>
                          <?php endwhile; ?>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>



      <?php require_once './head-section/web-js.php'; ?>
    </body>

</html>