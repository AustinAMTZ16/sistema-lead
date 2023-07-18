<?php
session_start();

$host = '45.89.204.4';
$user = 'u115254492_rootdck';
$password = '1~wR>Qs3FC';
$database = 'u115254492_apidck';


// Conecta a la base de datos

// Crear la conexión
$conn = new mysqli($host, $user, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
$usuario = $_SESSION["usuario"];
// Obtener todos los registros de la base de datos
$sql = "SELECT 
        tp.idProspecto,
		tp.nombre,	
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

// Cerrar la conexión
$conn->close();

// session_start();

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

</head>
<body>
    <h5>Bienvenido, <?php echo $_SESSION["usuario"]; ?></h5>
    <button type="button" class="btn btn-outline-success"><a href="logout.php">Salir</a></button>
    <!-- <a href="logout.php">Salir</a><br><br><br> -->
    <div class="container">
        <h4>Listado de Prospecto</h4>
        <a class="btn btn-primary mb-3" href="create.php">Crear nuevo</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Telefono</th>
                    <th>Correo</th>
                    <th>Puntos Lealtad</th>
                    <th>Mensaje</th>
                    <!-- <th>Mensaje</th> 
                    <th>Dominio</th>
                    <th>Giro Dominio</th>
                    <th>Categoria Propecto</th>
                    <th>Fech. Creacion</th>
                    <th>Estado. Sistema</th>
                    <th>Conversacion</th>-->
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['idProspecto']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['apellidoPaterno']; ?></td>
                        <td><?php echo $row['telefono']; ?></td>
                        <td><?php echo $row['correo']; ?></td>
                        <td><?php echo $row['puntosRecompensa']; ?></td>
                        <td><?php echo $row['mensaje']; ?></td>
                        <!-- <td><?php //echo $row['mensaje']; ?></td>
                        <td><?php //echo $row['dominioOrigen']; ?></td>
                        <td><?php //echo $row['giroDominio']; ?></td>
                        <td><?php //echo $row['categoriaProspecto']; ?></td>
                        <td><?php //echo $row['fechaCreacion']; ?></td>
                        <td><?php //echo $row['estadoSistema']; ?></td>
                        <td><?php //echo $row['conversacion']; ?></td> 
                        <td><?php //echo $row['fechaNacimiento']; ?></td>
                        <td><?php //echo $row['lugarNacimiento']; ?></td>-->

                        <td>
                            <a class="btn btn-primary btn-sm" href="editar.php?idProspecto=<?php echo $row['idProspecto']; ?>">Modificar Cliente</a>
                            <!-- <a class="btn btn-primary btn-sm" href="editar.php?id=<?php echo $row['idProspecto']; ?>">Modificar Cliente</a> -->
                            
                            <a class="btn btn-warning btn-sm" href="createpuntos.php?idProspecto=<?php echo $row['idProspecto']; ?>">Puntos Lealtad</a>
                            <a class="btn btn-danger btn-sm" href="">Quitar </a> 
                            <!--Llamar a funcion cambiar estado(sqlCambiar estado dentro de  la tabla tb_Prospecto va buscar el registro seleccionado y va a modificar propiedad estadoSistema='Falso') -->
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

<!--  -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>




