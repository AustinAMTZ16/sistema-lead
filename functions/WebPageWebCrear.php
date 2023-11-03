<?php
    require_once './connection/conexion.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idEmpresaUser=$_SESSION["isUser"];
        $idPageWeb=0;
        $namePageWebMenu=$_POST['namePageWebMenu'];
        $fileNameWeb=$_POST['fileNameWeb'];
        $filePatchServer=$_POST['filePatchServer'];
        $headTitle=$_POST['headTitle'];
        $headDescription=$_POST['headDescription'];
        $headKeywords=$_POST['headKeywords'];
        $headPlugins=$_POST['headPlugins'];
        $headPlugins = htmlspecialchars($headPlugins, ENT_QUOTES, 'UTF-8');
        $bodyheadFooterScriptPlugins=$_POST['bodyheadFooterScriptPlugins'];
        $bodyheadFooterScriptPlugins = htmlspecialchars($bodyheadFooterScriptPlugins, ENT_QUOTES, 'UTF-8');
        $bodybtnWhatsapp=$_POST['bodybtnWhatsapp'];
        $bodybtnWhatsapp = htmlspecialchars($bodybtnWhatsapp, ENT_QUOTES, 'UTF-8');
        //$idPerfilNegocio=0;

        $sqlRelacionNegocio = "SELECT idPerfilNegocio FROM tb_cms_perfil_negocio WHERE idEmpresaUser = $idEmpresaUser";
        $resultado = $conn->query($sqlRelacionNegocio);

        if ($resultado->num_rows > 0) {
            $fila = $resultado->fetch_assoc();
            $idPerfilNegocio = $fila['idPerfilNegocio'];
            //echo "ID Perfil de negocio en la tabla tb_cmd_perfil_negocio:  " . $idPerfilNegocio;

            $sqlPaginaCrear = " INSERT INTO tb_cms_page_web (namePageWebMenu, fileNameWeb, filePatchServer, headTitle, headDescription, headKeywords, headPlugins, bodyheadFooterScriptPlugins, bodybtnWhatsapp, idPerfilNegocio) VALUES ('$namePageWebMenu', '$fileNameWeb', '$filePatchServer', '$headTitle', '$headDescription', '$headKeywords', '$headPlugins', '$bodyheadFooterScriptPlugins', '$bodybtnWhatsapp', $idPerfilNegocio)";

            if ($conn->query($sqlPaginaCrear) === TRUE) {
                //$file = GenerarPath($head_titulo, $BlogImagen64, $BlogTitulo, $BlogSubtitulo,$BlogCuerpo, $BlogSlogan, $nombreArchivo);
                header("Location: viewWebLista.php"); // Redireccionar a la página principal después de crear el registro
                exit();
            } else {
                echo "Error al guardar " . $conn->error;
            }
            exit();
        } else {
            echo "No existe perfil de negocio.";
        }
    }