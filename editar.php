<?php
    // Iniciar la sesión
    session_start();
    require_once 'conexion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["idProspecto"];
        $nombre = $_POST["nombre"];
        $apellidoPaterno = $_POST["apellidoPaterno"];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $conversacion = $_POST['conversacion'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $lugarNacimiento = $_POST['lugarNacimiento'];




        // Consulta SQL para actualizar el registro
        $sql = "UPDATE tb_prospecto SET nombre='$nombre', apellidoPaterno='$apellidoPaterno',apellidoMaterno='$apellidoMaterno',telefono='$telefono',
        correo='$correo', asunto='$asunto' , mensaje='$mensaje' , conversacion='$conversacion', fechaNacimiento='$fechaNacimiento', lugarNacimiento='$lugarNacimiento'
        WHERE idProspecto=$id";

        if ($conn->query($sql) === TRUE) {
            header("Location: panelcontrol.php"); // Redireccionar a la página principal después de actualizar el registro
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Obtener el ID del registro a editar
    $id = $_GET["idProspecto"];

    // Consulta SQL para obtener el registro específico
    $sql = "SELECT * FROM tb_prospecto WHERE idProspecto = $id";
    $result = $conn->query($sql);

    $usuario = $result->fetch_assoc();

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
    <title>Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card bg-white">
                        <div class="card-body p-5">
                            <h2>Editar Prospecto</h2>

                            <form action="editar.php" method="POST">
                                <input type="hidden" name="idProspecto" value="<?php echo $usuario['idProspecto']; ?>">
                                <!-- Nombre: <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>"><br><br>
                                Apellido Paterno: <input type="text" name="apellidoPaterno" value="<?php echo $usuario['apellidoPaterno']; ?>"><br><br>
                                Apellido Materno: <input type="text" name="apellidoMaterno" value="<?php echo $usuario['apellidoMaterno']; ?>"><br><br>
                                Telefono: <input type="text" name="telefono" value="<?php echo $usuario['telefono']; ?>"><br><br>
                                Correo: <input type="text" name="correo" value="<?php echo $usuario['correo']; ?>"><br><br>
                                Asunto: <input type="text" name="asunto" value="<?php echo $usuario['asunto']; ?>"><br><br>
                                Mensaje: <input type="text" name="mensaje" value="<?php echo $usuario['mensaje']; ?>"><br><br>
                                Conversacion: <input type="text" name="conversacion" value="<?php echo $usuario['conversacion']; ?>"><br><br>
                                Fecha Nacimiento: <input type="text" name="fechaNacimiento" value="<?php echo $usuario['fechaNacimiento']; ?>"><br><br>
                                Lugar Nacimiento: <input type="text" name="lugarNacimiento" value="<?php echo $usuario['lugarNacimiento']; ?>"><br><br>
                                <input type="submit" value="Actualizar"> -->

                                <div class="mb-3">
                                    <input type="text" class="form-control" name="nombre" value="<?php echo $usuario['nombre']; ?>">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="apellidoPaterno" value="<?php echo $usuario['apellidoPaterno']; ?>" placeholder="Ingrese Apellido Paterno ">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="apellidoMaterno" value="<?php echo $usuario['apellidoMaterno']; ?>" placeholder="Ingrese Apellido Materno " >
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="telefono" value="<?php echo $usuario['telefono']; ?>" placeholder="Ingrese Telefono ">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" name="correo" value="<?php echo $usuario['correo']; ?>" placeholder="Ingrese Correo " >
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="asunto" value="<?php echo $usuario['asunto']; ?>" placeholder="Ingrese Asunto ">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="mensaje" value="<?php echo $usuario['mensaje']; ?>" placeholder="Ingrese Mensaje ">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="conversacion" value="<?php echo $usuario['conversacion']; ?>" placeholder="Ingrese Conversacion ">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="fechaNacimiento" value="<?php echo $usuario['fechaNacimiento']; ?>" placeholder="Ingrese Fecha Nacimiento ">
                                </div>
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="lugarNacimiento" value="<?php echo $usuario['lugarNacimiento']; ?>" placeholder="Ingrese Lugar Nacimiento ">
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-outline-dark" type="submit">Actualizar</button>
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