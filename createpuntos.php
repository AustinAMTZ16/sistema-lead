<?php
require_once 'conexion.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Campos que modificar o agregar sea el caso.
    $idProspecto = $_POST['idProspecto'];
    $puntosRecompensa = $_POST["puntosRecompensa"];

    //Consulta para validar el registro existente.
    $sql = "SELECT * FROM tb_recompensa WHERE idProspecto = '$idProspecto'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        // El registro ya existe, realizar una operación de actualización
        $fila = $resultado->fetch_assoc();
        $idProspectoR = $fila["idProspecto"];

        $sqlActualizar = "UPDATE tb_recompensa SET puntosRecompensa = '$puntosRecompensa' WHERE idProspecto = $idProspectoR";
        if ($conn->query($sqlActualizar) === TRUE) {
            echo "Registro actualizado correctamente.";
            header("Location: panelcontrol.php");
        } else {
            echo "Error al actualizar el registro: " . $conn->error;
            header("Location: panelcontrol.php");
        }
    } else {
        // El registro no existe, realizar una operación de inserción
        $sqlInsertar = "INSERT INTO tb_recompensa (idProspecto, puntosRecompensa) VALUES ('$idProspecto', '$puntosRecompensa')";
        if ($conn->query($sqlInsertar) === TRUE) {
            echo "Registro insertado correctamente.";
            header("Location: panelcontrol.php");
        } else {
            echo "Error al insertar el registro: " . $conn->error;
            header("Location: panelcontrol.php");
        }
    }


    if (!isset($_SESSION["usuario"])) {
        // Redireccionar al usuario a la página de inicio de sesión
        header("Location: index.php");
        exit();
    }
}

$conn->close();
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
                            <h3>Crear Puntos Recompensa</h3><br><br>
                            <form action="createpuntos.php" method="POST">
                                <!-- <input type="hidden"  value="idProspecto"><?php echo $id = $_GET['idProspecto']; ?> -->
                                <!-- <input type="text" name="idProspecto" value="<?php echo $_GET['idProspecto']; ?>"> -->
                                <input type="text" name="idProspecto" value="<?php echo isset($_GET['idProspecto']) ? $_GET['idProspecto'] : ''; ?>">
                                <!-- Puntos Recompensa: <input type="text" name="puntosRecompensa"><br><br>
                                <input type="submit" value="Crear"> -->
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="puntosRecompensa" placeholder="Ingrese  Puntos Recompensa">
                                </div>
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