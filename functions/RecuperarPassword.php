<?php
    require_once './connection/conexion.php'; 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores ingresados en el formulario
        $correo = $_POST['correo'];
        
        // Consultar la base de datos para verificar el usuario
        $sql = "SELECT * FROM tb_login WHERE correo = '$correo'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Usuario válido, redireccionar a la página de inicio

            $row = mysqli_fetch_assoc($result);
            $password = $row['password'];
            $dominio = $row['dominioB2B'];
            mail($_POST['correo'], "Recuperacion de tu perfil MexiClientes", "Buenas tardes, es un gusto ayudarle, mandamos su clave: $password & Dominio: $dominio & Correo: $correo" );
            header("Location: ../index.php");
            exit();
        } else {
            // Usuario inválido, mostrar mensaje de error
            $mensaje_error = "Nombre de usuario o contraseña incorrectos.";
        }
    }
?>