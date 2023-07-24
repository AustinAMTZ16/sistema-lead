<?php
    session_start();
    // Iniciar la sesión
    require_once 'conexion.php';
    echo $$_SESSION["usuario"];
    // Verificar si el usuario ha iniciado sesión
    if ($_SESSION["usuario"] != 'innova.com') {
        //Redireccionar al usuario a la página de inicio de sesión
        header("Location: index.php");
        exit();
    }

    if (isset($_POST['subir'])) {
        // Verificar si se seleccionó una imagen
        if (isset($_FILES['logotipoEmpresa']) && $_FILES['logotipoEmpresa']['error'] === 0) {
            // Leer el archivo de la imagen y convertirlo a base64
            $imagen_base64 = base64_encode(file_get_contents($_FILES['logotipoEmpresa']['tmp_name']));
            $id_login = $_POST['id_login'];


            // Paso 2: Guardar la imagen en base64 en la base de datos
            
            $sql = "UPDATE tb_empresa SET logotipoEmpresa='$imagen_base64' WHERE id_login=$id_login";

            if ($conn->query($sql) === TRUE) {
                echo "La imagen se ha guardado en la base de datos correctamente.";
            } else {
                echo "Error al guardar la imagen en la base de datos: " .$_POST['id_login']. $conn->error;
            }

            // Paso 3: Cerrar la conexión
            $conn->close();
        } else {
            echo "Error al subir la imagen.";
            
        }
    }
    // Cerrar la conexión
    $conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ROOT</title>
</head>
<body>
    <h2>Subir Imagen</h2>
    <form action="./devNew.php" method="POST" enctype="multipart/form-data">
        <p>ID Empresa Registrada : </p>
        <input type="text" name="id_login" id="id_login" >
        <input type="file" name="logotipoEmpresa" id="logotipoEmpresa" >

        <br><br><br>
        <input type="submit" name="subir" value="Subir Imagen">
    </form>
</body>
</html>