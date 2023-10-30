<?    
    require_once './connection/conexion.php';
    require_once  './functions/BlogEditaPath.php';
    // Obtener el ID del registro a editar
    $id = $_GET["idBlog"];

    

    //Verificar si se envió el formulario
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
        $idBlog = $_POST['idBlog'];

        //Consulta SQL para actualizar el registro (head_titulo, tituloBlog, BlogSubtitulo ,decripcionBlog, BlogSlogan, imagenBlog, FileTituloPOST, accionBlog, webOrigen)

        $sqlBlogModificar = "UPDATE tb_blog SET head_titulo = '$head_titulo', tituloBlog = '$BlogTitulo', BlogSubtitulo = '$BlogSubtitulo', decripcionBlog = '$BlogCuerpo', BlogSlogan = '$BlogSlogan', imagenBlog = '$imagenBlog', FileTituloPOST = '$FileTituloPOST', accionBlog = '$accionBlog', webOrigen = '$DominioOrigen' WHERE idBlog = '$idBlog'";
        //echo $sqlBlogModificar;
        if ($conn->query($sqlBlogModificar) === TRUE) {
            $file = EditarPath($head_titulo, $BlogImagen64, $BlogTitulo, $BlogSubtitulo,$BlogCuerpo, $BlogSlogan, $nombreArchivo);

            header("Location: viewBlogLista.php"); // Redireccionar a la página principal después de actualizar el registro
            exit();
        } else {
            echo "Error: " . $sqlBlogModificar . "<br>" . $conn->error;
        }
    }

    
    // Consulta SQL para obtener el registro específico
    $sql = "SELECT * FROM tb_blog WHERE idBlog = $id";
    $result = $conn->query($sql);
    $blog = $result->fetch_assoc();


?>