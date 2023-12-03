<?php
    require_once './connection/conexion.php';
    $idEmpresaUser=$_SESSION["isUser"]; //Data Sesision IdUsuarioLogeado

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $imagen_componente=base64_encode(file_get_contents($_FILES['imagen_componente']['tmp_name']));
        $title_componente=$_POST['title_componente']; 
        $description_componente=$_POST['description_componente']; 
        $title_btn_action=$_POST['title_btn_action']; 
        $action_btn_link=$_POST['action_btn_link']; 
        $estado_componente=$_POST['estado_componente']; 
        $page_seccion=$_POST['page_seccion']; 
        $type_componente=$_POST['type_componente'];   

        $sqlRelacionNegocio = "SELECT idPerfilNegocio FROM tb_cms_perfil_negocio WHERE idEmpresaUser = $idEmpresaUser";
        $result = $conn->query($sqlRelacionNegocio); 
        if($result->num_rows > 0){
            $fila = $result->fetch_assoc();
            $idPerfilWeb = $fila['idPerfilNegocio']; //(Se obtine idPerfilNegocio)
            //echo 'Sesion Usuario: ' . $idEmpresaUser . " Formulario Page Web: ". $idPageWeb . "SQL PerfilWeb" . $idPerfilWeb;
            $sqlCrearComponente = "INSERT INTO tb_cms_componente_web (imagen_componente, title_componente, description_componente, title_btn_action, action_btn_link, estado_componente, page_seccion, type_componente, idPerfilNegocio) VALUES ('$imagen_componente', '$title_componente', '$description_componente', '$title_btn_action', '$action_btn_link', '$estado_componente', '$page_seccion', '$type_componente', $idPerfilWeb)";
            if ($conn->query($sqlCrearComponente) === TRUE) {
                //$file = GenerarPath($head_titulo, $BlogImagen64, $BlogTitulo, $BlogSubtitulo,$BlogCuerpo, $BlogSlogan, $nombreArchivo);
                header("Location: viewWebLista.php"); // Redireccionar a la página principal después de crear el registro
                exit();
            } else {
                echo "Error al guardar " . $conn->error;
            }
        }

        
        exit();
    } 