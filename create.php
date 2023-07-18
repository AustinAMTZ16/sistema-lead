<?php
require_once 'conexion.php';


session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    $idProstecto =''; //Obtener el ID del usuario

    // Consulta SQL para insertar un nuevo registro
    // $sql = "INSERT INTO tb_prospecto (nombre,apellidoPaterno,apellidoMaterno,telefono,correo,asunto,mensaje,conversacion,fechaNacimiento,lugarNacimiento) 
    // VALUES ('$nombre', '$apellidoPaterno',' $apellidoMaterno',' $telefono','$correo','$asunto','$mensaje','$conversacion','$fechaNacimiento','$lugarNacimiento')";

    $sqlProspecto = "INSERT INTO tb_prospecto (
            nombre, apellidoPaterno, apellidoMaterno, telefono, correo, asunto, mensaje, dominioOrigen, giroDominio, categoriaProspecto, estadoSistema, fechaNacimiento, lugarNacimiento, origenProspecto
        )VALUES (
            '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$telefono', '$correo', '$asunto', '$mensaje', '$dominioOrigen', '$giroDominio', '$categoriaProspecto', '$estadoSistema',  '$fechaNacimiento','$lugarNacimiento', '$origenProspecto')";

    if ($conn->query($sqlProspecto) === TRUE ){
        //header("Seguardo prospecto 'idProspecto = 509'"); // Redireccionar a la página principal después de crear el registro
        if($conn->affected_rows) {
            $idProstectos = $conn->insert_id; 
            $idProstecto = json_encode($idProstectos);
        }//end if
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

    if ( $conn->query($sqlPuntos) === TRUE){
        header("Location: panelcontrol.php"); // Redireccionar a la página principal después de crear el registro
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();

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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
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
                                    <input type="text" class="form-control" name="telefono" placeholder="Ingrese Telefono ">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="correo" placeholder="Ingrese Correo " required>
                                </div>                              
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="fechaNacimiento" placeholder="Ingrese Fecha Nacimiento ">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="lugarNacimiento" placeholder="Ingrese Lugar Nacimiento ">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="origenProspecto" placeholder="Red Social, Formulario WEB o Usuario Presente">
                                </div>
                                <!-- Nombre: <input type="text" name="nombre"><br><br>
                                Apellido Paterno: <input type="text" name="apellidoPaterno"><br><br>
                                Apellido Materno: <input type="text" name="apellidoMaterno"><br><br>
                                Telefono: <input type="text" name="telefono"><br><br>
                                Correo: <input type="text" name="correo"><br><br>
                                Asunto: <input type="text" name="asunto"><br><br>
                                Mensaje: <input type="text" name="mensaje"><br><br>
                                Conversacion: <input type="text" name="conversacion"><br><br>
                                Fecha. Nacimiento: <input type="text" name="fechaNacimiento"><br><br>
                                Lugar. Nacimiento: <input type="text" name="lugarNacimiento"><br><br>
                                <input type="submit" value="Crear"> -->

                                <div class="d-grid">
                                    <button class="btn btn-outline-dark" type="submit">Crear</button>
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