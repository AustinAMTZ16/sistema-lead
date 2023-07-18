<?php
require_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $id = $_POST["idProspecto"];
    $id = $_POST['idProspecto'];
    $puntosRecompensa = $_POST["puntosRecompensa"];

    if (isset($id)) {
         // Consulta SQL para insertar un nuevo registro
    $sql = "INSERT INTO tb_recompensa (puntosRecompensa,idProspecto) 
    VALUES ('$puntosRecompensa','$id')";

    if ($conn->query($sql) === TRUE) {
        header("Location: panelcontrol.php"); // Redireccionar a la página principal después de crear el registro
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
        // echo "VALORES IGUALES";

        // Consulta SQL para insertar un nuevo registro

    } else if(isset($id) and $id == isset($id)) {
        // echo "VALORES DESIAGUALES";
    $sql = "UPDATE tb_recompensa SET puntosRecompensa = '$puntosRecompensa' WHERE idProspecto = '$id'";
    header("Location: panelcontrol.php"); 
    }


    // Consulta SQL para insertar un nuevo registro


    // $sql = "SELECT * FROM tb_recompensa";
    // $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //     $idRecompensaArray = array();

    //     while ($row = $result->fetch_assoc()) {
    //         $idRecompensaArray[] = $row["idRecompensa"];
    //     }

    //     // Imprimir los valores de idRecompensa
    //     foreach ($idRecompensaArray as $idRecompensa) {
    //         echo $idRecompensa . "<br>";
    //          $sql = "UPDATE tb_recompensa SET puntosRecompensa = '$puntosRecompensa',idProspecto = '$id'  WHERE idRecompensa = '$idRecompensa'";
    //     }
    //     if ($conn->query($sql) === TRUE) {
    //         header("Location: panelcontrol.php"); // Redireccionar a la página principal después de crear el registro
    //         exit();
    //     } else {
    //         echo "Error: " . $sql . "<br>" . $conn->error;
    //     }
    // }
}

//consulta
// $sql = "SELECT * FROM tb_recompensa ";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     $idRecompensaArray = array();

//     while ($row = $result->fetch_assoc()) {
//         $idRecompensaArray[] = $row["idRecompensa"];
//     }

//     // Imprimir los valores de idRecompensa
//     foreach ($idRecompensaArray as $idRecompensa) {
//         echo $idRecompensa . "<br>";
//     }
// } else {
//     echo "No se encontraron resultados.";
// }


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