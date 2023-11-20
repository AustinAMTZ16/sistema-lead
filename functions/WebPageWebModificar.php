<?php
    require_once './connection/conexion.php';
    /** logica de web_page_web_modficacion
     * idPageweb = identificador de seccion a modificar
     * idempresaUser = identificador del usuario logeado en el sistema obtenido de la tabla tb_empresa
     * idPerfilNegocio = identificador del negocio de la tabla tb_cms_perfil_negocio
     * 
     * Para poder modificar los registros de la tabla tb_cms_page_web que representan las secciones de las paginas de los clientes es necesario lo siguiente:
     * Identifdicar el usuario logeado (20)
     * Buscar el perfil de usuario logeado en la tabla tb_cms_perfil_negocio y traer la informacion cuando exista coicidencia con el usuario logeado. (1)
     * Seguido identificar la page web en la tabla tb_cms_page_web correspondiente al perfil del usuario logeado (1)
    */
    $idPageWeb = $_GET["idPageWeb"]; //Data Formulario web IdPageWeb
    $idEmpresaUser=$_SESSION["isUser"]; //Data Sesision IdUsuarioLogeado
    $idPerfilNegocio = 0; //sqlRelacionNegocio
    
    $sqlRelacionNegocio = "SELECT idPerfilNegocio FROM tb_cms_perfil_negocio WHERE idEmpresaUser = $idEmpresaUser";
    $result = $conn->query($sqlRelacionNegocio); 
    if($result->num_rows > 0){
        $fila = $result->fetch_assoc();
        $idPerfilWeb = $fila['idPerfilNegocio']; //(Se obtine idPerfilNegocio)
        //echo 'Sesion Usuario: ' . $idEmpresaUser . " Formulario Page Web: ". $idPageWeb . "SQL PerfilWeb" . $idPerfilWeb;

        $sqlRelacionPageWeb = "SELECT idPageWeb, namePageWebMenu, fileNameWeb, filePatchServer, headTitle, headDescription, headKeywords, headPlugins, bodyheadFooterScriptPlugins, bodybtnWhatsapp,  idPerfilNegocio FROM tb_cms_page_web WHERE idPageWeb = $idPageWeb";
        $res = $conn->query($sqlRelacionPageWeb);
        if($res->num_rows > 0){
            $PageWeb = $res->fetch_assoc();
        }else{
            //echo 'No se encontro Pagina de perfil.';
        }
    }else{
        echo 'No se encontro Perfil de negocio.';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idEmpresaUser=$_SESSION["isUser"];
        $idPageWeb=$_POST['idPageWeb'];
        $namePageWebMenu=$_POST['namePageWebMenu'];
        $fileNameWeb=$_POST['fileNameWeb'];
        $filePatchServer=$_POST['filePatchServer'];
        $headTitle=$_POST['headTitle'];
        $headDescription=$_POST['headDescription'];
        $headKeywords=$_POST['headKeywords'];
        //$headPlugins=$_POST['headPlugins'];
        //$headPlugins = htmlspecialchars($headPlugins, ENT_QUOTES, 'UTF-8');
        // $bodyheadFooterScriptPlugins=$_POST['bodyheadFooterScriptPlugins'];
        // $bodyheadFooterScriptPlugins = htmlspecialchars($bodyheadFooterScriptPlugins, ENT_QUOTES, 'UTF-8');
        // $bodybtnWhatsapp=$_POST['bodybtnWhatsapp'];
        // $bodybtnWhatsapp = htmlspecialchars($bodybtnWhatsapp, ENT_QUOTES, 'UTF-8');

        $sqlPageWebModificar = "UPDATE tb_cms_page_web SET namePageWebMenu='$namePageWebMenu', fileNameWeb='$fileNameWeb', filePatchServer='$filePatchServer', headTitle='$headTitle', headDescription='$headDescription', headKeywords='$headKeywords' WHERE idPageWeb = $idPageWeb";

        if ($conn->query($sqlPageWebModificar) === TRUE) {
            //$file = EditarPath($head_titulo, $BlogImagen64, $BlogTitulo, $BlogSubtitulo,$BlogCuerpo, $BlogSlogan, $nombreArchivo);
            header("Location: viewWebLista.php"); // Redireccionar a la página principal después de actualizar el registro
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }