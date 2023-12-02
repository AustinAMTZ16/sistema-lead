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
            $row = mysqli_fetch_assoc($result);
            // Usuario válido, redireccionar a la página de inicio
            $isUser = $row['idLogin'];
            // Obtener todos los registros de la base de datos P/Obtener el logotipo base64
            $sqlLogotipo = "SELECT logotipoEmpresa FROM tb_empresa where id_login = $isUser";
            $arregloLogo = $conn->query($sqlLogotipo);
            if ($arregloLogo->num_rows > 0) {
                // Paso 3: Obtener el valor de la imagen en base64
                $fila = $arregloLogo->fetch_assoc();
                $imagenBase64 = $fila["logotipoEmpresa"];

                // Paso 4: Mostrar la imagen en HTML utilizando la etiqueta <img>
                $imgEmpresa = '<img width="50%" src="data:image/jpeg;base64,' . $imagenBase64 . '" alt="Imagen en base64">';
            } else {
                $imgEmpresa = "No se encontró la imagen en la base de datos.";
            }
            $_SESSION["isUser"] = $row['idLogin']; //75
            $_SESSION['usuario'] = $row['dominioB2B']; //icmetal.mx
            $_SESSION['giroDominio'] = $row['giroDominio']; //Comercialización de metales
            $_SESSION['imgEmpresa'] = $imgEmpresa; //IMAGEN -> tb_empresa


            header("Location: ./panelEmpresa.php");
            exit();
        } else {
            // Usuario inválido, mostrar mensaje de error
            $mensaje_error = "Nombre de usuario o contraseña incorrectos.";
        }
    }
?>