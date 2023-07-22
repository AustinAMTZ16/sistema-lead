<?php
// Iniciar la sesión
session_start();
require_once 'conexion.php';


// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Campos que modificar o agregar sea el caso.
    $idProspecto = $_POST['idProspecto'];
    $puntosRecompensa = $_POST["puntosRecompensaF"];

    $puntosRecompensaformat = trim($puntosRecompensa);


    //Consulta para validar el registro existente.
    $sql = "SELECT idProspecto FROM tb_recompensa WHERE idProspecto = '$idProspecto'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        // El registro ya existe, realizar una operación de actualización
        $fila = $resultado->fetch_assoc();
        $idProspectoR = $fila["idProspecto"];
        // $fecha_actual = date("d-m-Y h:i:s"); 
        $fecha_actual = date("Y-m-d");
        $fechaAlex = date('Y-m-d', strtotime($fecha_actual));

        $sqlActualizar = "UPDATE tb_recompensa SET puntosRecompensa = '$puntosRecompensaformat',fechaModificacion = '$fechaAlex' WHERE idProspecto = $idProspectoR";
        if ($conn->query($sqlActualizar) === TRUE) {
            //echo "Registro actualizado correctamente1.";
            header("Location: panelcontrol.php");
        } else {
            echo "Error al actualizar el registro: " . $conn->error;
            header("Location: panelcontrol.php");
        }
        //header("Location: panelcontrol.php");
    } else {
        // El registro no existe, realizar una operación de inserción
        $sqlInsertar = "INSERT INTO tb_recompensa (idProspecto, puntosRecompensa,fechaModificacion) VALUES ('$idProspecto', '$puntosRecompensaformat','$fechaAlex')";
        if ($conn->query($sqlInsertar) === TRUE) {
            //echo "Registro insertado correctamente2.";
            header("Location: panelcontrol.php");
        } else {
            echo "Error al insertar el registro: " . $conn->error;
            header("Location: panelcontrol.php");
        }
    }
}


$idUser = $_GET['idProspecto']; //540
$sqlBuscarUserPuntos = "SELECT * FROM tb_recompensa WHERE idProspecto='$idUser'"; //Consulta puntos del usuario(IdUsuario) 2, 10, 10-20-23, 540
$Response = $conn->query($sqlBuscarUserPuntos);
$ResponsePuntosUsuario = $Response->fetch_assoc();



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
                            <h3>Crear Puntos Recompensa</h3><br><br>
                            <p>Puntos Lealtad actuales: <?php echo $ResponsePuntosUsuario['puntosRecompensa']; ?></p>
                            <p>Fecha modificación: <?php echo date('Y-m-d', strtotime($ResponsePuntosUsuario['fechaModificacion'])); ?></p>
                            <form action="createpuntos.php" method="POST">


                                <input type="hidden" name="idProspecto" value="<?php echo isset($_GET['idProspecto']) ? $_GET['idProspecto'] : ''; ?>">


                                <div class="mb-3">
                                    <input type="number" class="form-control" name="puntosRecompensaF" placeholder="Ingrese  Puntos Recompensa">
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-outline-dark" type="submit" onclick="return confirm('¿Está seguro de Crear este registro?')">Asignar</button>
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