<?php
    require_once './connection/conexion.php';

    $idComponente = $_GET["idComponente"]; //id del componente selecionando
    $idEmpresaUser=$_SESSION["isUser"]; //Data Sesision IdUsuarioLogeado
    //$idPerfilNegocio = 0; //sqlRelacionNegocio
    

    $sqlComponenteSelecionado = "SELECT * FROM tb_cms_componente_web WHERE idComponente = $idComponente";
    $componenteSelecionado = $conn->query($sqlComponenteSelecionado); 
    if($componenteSelecionado->num_rows > 0){
        $fila = $componenteSelecionado->fetch_assoc(); 
        //echo $sqlComponenteSelecionado;
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idComponente = $_POST['idComponente'];
        $imagen_componente=base64_encode(file_get_contents($_FILES['imagen_componente']['tmp_name']));
        $title_componente=$_POST['title_componente']; 
        $description_componente=$_POST['description_componente']; 
        $title_btn_action=$_POST['title_btn_action']; 
        $action_btn_link=$_POST['action_btn_link']; 
        $estado_componente=$_POST['estado_componente']; 
        $page_seccion=$_POST['page_seccion']; 
        $type_componente=$_POST['type_componente']; 

        $sqlComponenteModificar = "UPDATE tb_cms_componente_web SET imagen_componente='$imagen_componente', title_componente='$title_componente', description_componente='$description_componente', title_btn_action='$title_btn_action', action_btn_link='$action_btn_link', estado_componente='$estado_componente', page_seccion='$page_seccion', type_componente='$type_componente'  WHERE idComponente = $idComponente";

        if ($conn->query($sqlComponenteModificar) === TRUE) {
            header("Location: viewWebComponenteLista.php"); // Redireccionar a la página principal después de actualizar el registro
            exit();

            //echo $sqlComponenteModificar;
        } else {
            echo "Error: " . $conn->error . $sqlComponenteModificar;
        }
    } 