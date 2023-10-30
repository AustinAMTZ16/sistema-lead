<?php
    // Iniciar la sesión
    session_start();

    require_once './../connection/conexion.php';
    
    // Obtener el ID del registro a editar
    $id = $_GET["idBlog"];

    // Verificar si se envió el formulario
    if ($id != null){
        $sqlDelate = "DELETE FROM tb_blog WHERE idBlog=$id";
        if ($conn->query($sqlDelate) === TRUE) {
            //echo "Se borro del sistema: "; 
            header("Location: ./../viewBlogLista.php"); 
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            //header("Location: panelcontrol.php"); 
        }
    }else{
        header("Location: ./../viewBlogLista.php");
        exit();
    }
    // Cerrar la conexión
    $conn->close();
    // Verificar si el usuario ha iniciado sesión
    if (!isset($_SESSION["usuario"])) {
        // Redireccionar al usuario a la página de inicio de sesión
        header("Location: ./../index.php");
        exit();
    }
?>