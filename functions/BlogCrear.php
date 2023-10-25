<?php
    require_once './connection/conexion.php';

    $tituloBlog = $_POST['tituloBlog'];
    $descripcionBlog = $_POST['decripcionBlog'];
    $accionBlog = $_POST['accionBlog'];
    $webOrigen = $_SESSION["usuario"];
    
    // Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Leer el archivo de la imagen y convertirlo a base64
        $imagenBlog = base64_encode(file_get_contents($_FILES['imgBlog']['tmp_name']));
            

        // Paso 2: Guardar la imagen en base64 en la base de datos

        $sqlBlog = "INSERT INTO tb_blog (
            tituloBlog, decripcionBlog, imagenBlog, accionBlog, webOrigen
                )VALUES (
            '$tituloBlog', '$descripcionBlog', '$imagenBlog', '$accionBlog', '$webOrigen'
        )";

        if ($conn->query($sqlBlog) === TRUE) {
            // echo "La imagen se ha guardado en la base de datos correctamente.";
            header("Location: panelEmpresa.php"); // Redireccionar a la página principal después de crear el registro
            exit();
        } else {
            echo "Error al guardar 0" .$imagenBlog. $conn->error;
        }

    } else {
        // echo "Error al guardar 1.". $tituloBlog.$descripcionBlog.$accionBlog.$webOrigen.$_FILES['imgBlog'];
    }
?>