<?    require_once './../connection/conexion.php';

    // Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id = $_POST["idProspecto"];
        $nombre = $_POST["nombre"];
        $apellidoPaterno = $_POST["apellidoPaterno"];
        $apellidoMaterno = $_POST['apellidoMaterno'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $lugarNacimiento = $_POST['lugarNacimiento'];
        $origenProspecto = $_POST['origenProspecto'];

        // Consulta SQL para actualizar el registro
        $sql = "UPDATE tb_prospecto SET nombre='$nombre', apellidoPaterno='$apellidoPaterno',apellidoMaterno='$apellidoMaterno',telefono='$telefono',
        mensaje='$mensaje' , fechaNacimiento='$fechaNacimiento', lugarNacimiento='$lugarNacimiento',
        origenProspecto='$origenProspecto'
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
?>