<?php
    // Iniciar la sesión
    session_start();

    require_once './../connection/conexion.php';
    
    // Obtener el ID del registro a editar
    $id = $_GET["idProspecto"];

    // Verificar si se envió el formulario
    if ($id != null){
        $sqlDelate = "UPDATE tb_prospecto SET estadoSistema='False'
        WHERE idProspecto=$id";
        if ($conn->query($sqlDelate) === TRUE) {
            //echo "Se borro del sistema: "; 
            header("Location: ./../viewProspectoLista.php"); 
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            //header("Location: panelcontrol.php"); 
        }
    }else{
        header("Location: ./../viewProspectoLista.php");
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