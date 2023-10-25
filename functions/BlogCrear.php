<?php
    require_once './connection/conexion.php';
    require_once  './functions/BlogGenerarPath.php';
    // Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Leer el archivo de la imagen y convertirlo a base64
        $imagenBlog = base64_encode(file_get_contents($_FILES['imgBlog']['tmp_name']));
        
        $head_titulo = $_POST['head_titulo'];
        $BlogImagen64 = 'data:image/jpeg;base64,'. $imagenBlog;
        $BlogTitulo = $_POST['tituloBlog'];
        $BlogSubtitulo = $_POST['BlogSubtitulo'];
        $BlogCuerpo = $_POST['decripcionBlog'];
        $BlogSlogan = $_POST['BlogSlogan'];
        $DominioOrigen = $_SESSION["usuario"];
        $FileTituloPOST = $_POST['accionBlog'];
        $nombreArchivo = $FileTituloPOST.'.html';
        $URLVinculoPOST = 'https://'.$DominioOrigen.'/blog/'.$nombreArchivo;
        $accionBlog = $URLVinculoPOST;

        // Paso 2: Guardar la imagen en base64 en la base de datos
        $sqlBlog = "INSERT INTO tb_blog (head_titulo, tituloBlog, BlogSubtitulo ,decripcionBlog, BlogSlogan, imagenBlog, FileTituloPOST, accionBlog, webOrigen)VALUES ('$head_titulo', '$BlogTitulo', '$BlogSubtitulo' ,'$BlogCuerpo', '$BlogSlogan', '$imagenBlog', '$FileTituloPOST', '$accionBlog', '$DominioOrigen'
        )";
        
        if ($conn->query($sqlBlog) === TRUE) {
            $file = GenerarPath($head_titulo, $BlogImagen64, $BlogTitulo, $BlogSubtitulo,$BlogCuerpo, $BlogSlogan, $nombreArchivo);
            // echo "La imagen se ha guardado en la base de datos correctamente.";
            header("Location: viewBlogLista.php"); // Redireccionar a la página principal después de crear el registro
            exit();
        } else {
            echo "Error al guardar 0" .$imagenBlog. $conn->error;
        }
    }
?>