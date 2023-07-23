<?php
session_start();
// Iniciar la sesión
require_once 'conexion.php';

$usuario = $_SESSION["usuario"];
$isUser = $_SESSION["isUser"];

// Obtener todos los registros de la base de datos P/Llenar tabla
$sql = "SELECT 
            tp.idProspecto,
            tp.nombre,
            tp.apellidoPaterno,	
            tp.telefono,	
            tp.correo,
            tp.mensaje,
            tp.fechaNacimiento,
            tp.lugarNacimiento,
            tc.puntosRecompensa,
            tp.estadoSistema 
            FROM tb_prospecto tp
            LEFT JOIN tb_recompensa tc
            on tp.idProspecto = tc.idProspecto
            where dominioOrigen = '$usuario' 
            and estadoSistema = 'Activo'"; //'Falso'
$result = $conn->query($sql);
// Obtener todos los registros de la base de datos P/Obtener el logotipo base64
$sqlLogotipo = "SELECT logotipoEmpresa FROM tb_empresa where id_login = $isUser";
$arregloLogo = $conn->query($sqlLogotipo);


// Cerrar la conexión
$conn->close();
//validacion doble comprueba por url
// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION["usuario"])) {
  // Redireccionar al usuario a la página de inicio de sesión
  header("Location: index.php");
  exit();
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Inicio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
  </link>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<!-- Aquí empieza el formulario HTML -->

<body>
  <header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li>
            <a href="#" class="nav-link px-2 link-dark">Bienvenido,
              <b>
                <?php echo $_SESSION["usuario"];?>
              </b>
            </a>
          </li>
        </ul>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">

            <?php
            if ($arregloLogo->num_rows > 0) {
              // Paso 3: Obtener el valor de la imagen en base64
              $fila = $arregloLogo->fetch_assoc();
              $imagenBase64 = $fila["logotipoEmpresa"];

              // Paso 4: Mostrar la imagen en HTML utilizando la etiqueta <img>
              echo '<img width="18%" src="data:image/jpeg;base64,' . $imagenBase64 . '" alt="Imagen en base64">';
            } else {
              echo "No se encontró la imagen en la base de datos.";
            }
            ?>
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" >
            <!-- <li><a class="dropdown-item" href="#">Mi perfil</a></li> -->
            <li><a class="dropdown-item" href="logout.php">Cerrar sesion</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <h4>Listado de Prospecto</h4>
    <a class="btn btn-primary mb-3" href="create.php">Crear nuevo</a>
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
              <a class="btn btn-danger btn-sm" href="./delete.php?idProspecto=<?php echo $row['idProspecto']; ?>" onclick="return confirm('¿Está seguro de eliminar este registro?')">Quitar </a>
              <!--Llamar a funcion cambiar estado(sqlCambiar estado dentro de  la tabla tb_Prospecto va buscar el registro seleccionado y va a modificar propiedad estadoSistema='Falso') -->
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="./jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
</body>

</html>