<?php
// Iniciar la sesión
session_start();
require_once 'conexion.php';

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha_actual = date("Y-m-d");
    $fechaAlex = date('Y-m-d', strtotime($fecha_actual));

    //tb_Prospectos
    $nombre = $_POST["nombre"];
    $apellidoPaterno = $_POST["apellidoPaterno"];
    $apellidoMaterno = $_POST['apellidoMaterno'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $asunto = 'Sistema DCK-LEAD';
    $mensaje = '';
    $categoriaProspecto = 'Prospecto';
    //$fechaCreacion = 'Fecha del día del registro';
    $estadoSistema = 'Activo';
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $lugarNacimiento = $_POST['lugarNacimiento'];
    $origenProspecto = $_POST['origenProspecto'];
    $dominioOrigen = $_SESSION["usuario"]; //obtener el dominio del usuario en sesion 
    $giroDominio = $_SESSION["giroDominio"]; //obtener el giro del usuario en sesion 
    //tb_Recompensa
    $puntosRecompensa = '1';
    //$fechaModificacion = '';
    $idProstecto = ''; //Obtener el ID del usuario

    $sqlProspecto = "INSERT INTO tb_prospecto (
                    nombre, apellidoPaterno, apellidoMaterno, telefono, correo, asunto, mensaje, dominioOrigen, giroDominio, categoriaProspecto, fechaCreacion, estadoSistema, fechaNacimiento, lugarNacimiento, origenProspecto
                )VALUES (
                    '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$telefono', '$correo', '$asunto', '$mensaje', '$dominioOrigen', '$giroDominio', '$categoriaProspecto', '$fechaAlex', '$estadoSistema',  '$fechaNacimiento','$lugarNacimiento', '$origenProspecto')";

    if ($conn->query($sqlProspecto) === TRUE) {
        //header("Seguardo prospecto 'idProspecto = 509'"); // Redireccionar a la página principal después de crear el registro
        if ($conn->affected_rows) {
            $idProstectos = $conn->insert_id;
            $idProstecto = json_encode($idProstectos);
        } //end if
        //echo "Registro insertado, el id insertado ha sido el " . $idProstecto = $conn->insert_id();

    } else {
        header("Location: panelcontrol.php");
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // consulta para conocer el ultimo registro que se hizo en la tabla tb_prospecto 
    // $sqlBuscarProspecto =  idProspecto Que guarde el idProspecto del ultimo registro guardado.
    // $idProstecto = $sqlBuscarProspecto;
    $sqlPuntos = "INSERT INTO tb_recompensa(
                    puntosRecompensa, idProspecto
                ) VALUES('
                    $puntosRecompensa', '$idProstecto')";

    if ($conn->query($sqlPuntos) === TRUE) {
        header("Location: panelcontrol.php"); // Redireccionar a la página principal después de crear el registro
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<!-- Aquí empieza el formulario HTML -->

<body>
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card bg-white">
                        <div class="card-body p-5">
                            <h3>Crear Prospecto</h3>
                            <form action="create.php" method="POST">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre " required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="apellidoPaterno" placeholder="Ingrese Apellido Paterno " required>
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="apellidoMaterno" placeholder="Ingrese Apellido Materno " required>
                                </div>
                                <div class="mb-3">
                                    <input type="number" class="form-control" name="telefono" placeholder="Ingrese Telefono ">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="correo" placeholder="Ingrese Correo " required>
                                </div>
                                <div class="mb-3">
                                    <input type="date" class="form-control" name="fechaNacimiento" placeholder="Ingrese Fecha Nacimiento ">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="lugarNacimiento" placeholder="Ingrese Lugar Nacimiento ">
                                </div>
                                <!-- <div class="mb-3">
                                    <input type="text" class="form-control" name="origenProspecto" placeholder="Red Social, Formulario WEB o Usuario Presente">
                                </div> -->
                                <div class="mb-3">
                                    <select name="origenProspecto" class="form-select" aria-label="Default select example">
                                        <option selected>Seleccione </option>
                                        <option>Red Social</option>
                                        <option>Formulario WEB</option>
                                        <option>Usuario Presente</option>
                                    </select>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-outline-dark" type="submit" onclick="return confirm('¿Está seguro de Crear este registro?')">Crear</button>
                                </div><br>
                                <div class="d-grid">
                                    <button class="btn btn-outline-dark" type="submit" onclick="window.location.href='panelcontrol.php'">Regresar al Menu</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>