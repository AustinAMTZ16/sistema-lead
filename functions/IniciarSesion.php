<?php
    require_once './connection/conexion.php';

    // Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores ingresados en el formulario
        $usuario = $_POST["usuario"];
        $contraseña = $_POST["contraseña"];
        // Consultar la base de datos para verificar el usuario
        $sql = "SELECT * FROM tb_login WHERE dominioB2B = '$usuario' and password = '$contraseña'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Usuario válido, redireccionar a la página de inicio

            $row = mysqli_fetch_assoc($result);
            $_SESSION["isUser"] = $row['idLogin'];
            $_SESSION['usuario'] = $row['dominioB2B'];
            $_SESSION['giroDominio'] = $row['giroDominio'];


            header("Location: ./views/panelcontrol.php");
            exit();
        } else {
            // Usuario inválido, mostrar mensaje de error
            $mensaje_error = "Nombre de usuario o contraseña incorrectos.";
        }
    }
?>