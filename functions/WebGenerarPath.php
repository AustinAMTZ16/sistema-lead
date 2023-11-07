<?php
    //LOGICA PARA SISTEMA DE GESTIÓN DE CONTENIDO DEL SITIO WEB
    //INDEX.HTML
    /**
    *VARIABLES SEO Y PAGINAS WEB:
    *   fileNameWeb: Nombre del archivo html [varchar30]
    *   filePatchServer: Ruta donde se alamacenara el archivo [varchar100]
    *       idPageWeb: Identificador de las paginas del negocio [int10 A_I FK]
    *   namePageWeb: Nombre de la sección esta se usara para identificar la seccion y hacer dinamico el menu.
    *   headTitle: Titulo de pestaña de la pagina web SEO [varchar100]
    *   headDescription: Descripcion de archivo web SEO [varchar300]
    *   headKeywords: Palabras clave de archivo web SEO [longtext]
    *   headPlugins: Seccion libre con el objetivo de poder integrar plugins de terceros [longtext]
    *   bodyheadFooterScript: Seccion de scripts en el body [longtext]
    *   bodyheadFooterScriptPlugins: Seccion libre con el objetivo de poder integrar plugins de terceros [longtext]
    *   bodybtnWhatsapp: Control de la visibilidad del boton whatsapp [text]
    *       idPerfilNegocio: Identificador del negocio  [int10 A_I FK]
    *   bodyFooterLogo: logotipo de la negocio [longtext]
    *   bodyFooterSlogan: Descripcion corta del giro de la empresa [varchar200]
    *   bodyFooterLinkFacebook: Red social de la empresa [varchar200]
    *   bodyFooterLinkInstagram: Red social de la empresa [varchar200]
    *   bodyFooterLinkTwitter: Red socila de la empresa [varchar200]
    *   bodyFooterLinkLinkedIn: Red social de la empresa [varchar200]
    *   bodyFooterLinkTikTok: Red social de la empresa [varchar200]
    *   bodyFooterTitleContacto: Titulo seccion de contacto [varchar100]
    *   bodyFooterDireccionNegocio_uno: Direccion del negocio [varchar100]
    *   bodyFooterDireccionNegocio_dos: Direccion del negocio [varchar100]
    *   bodyFooterTelefonoNegocio_uno: Telefono del negocio [varchar12]
    *   bodyFooterTelefonoNegocio_dos: Telefono del negocio [varchar12]
    *   bodyFooterEmailNegocio_uno: Correo electronico del negocio [varchar20]
    *   bodyFooterEmailNegocio_dos: Correo electronico del negocio [varchar20]
    *   bodyFooterCopyright: Seccion de copyright y politicas de privaciodad [varchar200]
    *
    *   bodyheadCarrusel: {
            imagen_componente: imagen del carrusel 
            title_componente: titulo del carrusel
            description_componente: descripcion del carrusel
            title_btn_action: titulo del boton del carrusel
            action_btn_link: accion del boton 
            estado_componente: estado del componente visible - false
            page_seccion: Pagina web relacionada
            type_componente: tipo de componente
        }   
        {
            ídComponente: 1;
            imagenComponente: "data64";
            title: "LAS CASUALIDADES NO EXISTEN ";
            description: "Tu quieres hacer crecer tu negocio y nosotros hacemos crecer a las empresas en Mexico mediante marketing y programación. <br>
            ¡Es hora de tomar acción! ¡Ponte en contacto con nosotros hoy y descubre cómo podemos impulsar tu éxito en línea!";
            title_btn_action: "Contactar";
            action_btn_link: "./contacto.html";
            estado_componet: true;
            page_seccion: 1;
            type_component: "bodyheadCarrusel_1";
        }
        bodysectionProductosDestacados: {
            imagen: imagen del carrusel 
            title: titulo del carrusel
            description: descripcion del carrusel
            title_btn_action: titulo del boton del carrusel
            action_btn_link: accion del boton 
            estado_componet: estado del componente visible - false
            page_seccion: Pagina web relacionada
            type_component: tipo de componente
        }
        bodysectionAcercaNegocio: {
            imagen: imagen del carrusel 
            title: titulo del carrusel
            description: descripcion del carrusel
            title_btn_action: titulo del boton del carrusel
            action_btn_link: accion del boton 
            estado_componet: estado del componente visible - false
            page_seccion: Pagina web relacionada
            type_component: tipo de componente
        }
        bodysectionServicio: {
            imagen: imagen del carrusel 
            title: titulo del carrusel
            description: descripcion del carrusel
            title_btn_action: titulo del boton del carrusel
            action_btn_link: accion del boton 
            estado_componet: estado del componente visible - false
            page_seccion: Pagina web relacionada
            type_component: tipo de componente
        }
        bodysectionClientes: {
            imagen: imagen del carrusel 
            title: titulo del carrusel
            description: descripcion del carrusel
            title_btn_action: titulo del boton del carrusel
            action_btn_link: accion del boton 
            estado_componet: estado del componente visible - false
            page_seccion: Pagina web relacionada
            type_component: tipo de componente
        }
        bodysectionRecomendaciones: {
            imagen: imagen del carrusel 
            title: titulo del carrusel
            description: descripcion del carrusel
            title_btn_action: titulo del boton del carrusel
            action_btn_link: accion del boton 
            estado_componet: estado del componente visible - false
            page_seccion: Pagina web relacionada
            type_component: tipo de componente
        }
        form_actions_text: {
            imagen: imagen del carrusel 
            title: titulo del carrusel
            description: descripcion del carrusel
            title_btn_action: titulo del boton del carrusel
            estado_componet: estado del componente visible - false
            page_seccion: Pagina web relacionada
            type_component: tipo de componente
        }
        Area_Start{}
    */
    require_once '../connection/conexion.php';
    // Obtener el ID del registro a editar
    $idEmpresaUser=$_GET['idEmpresaUser'];
    $idPageWeb = $_GET['idPageWeb']; //Data Formulario web IdPageWeb
    
    // Consulta SQL para obtener el registro específico  
    $sqlPerfilNegocio = 'SELECT idPerfilNegocio, bodyFooterLogo, bodyFooterSlogan, bodyFooterLinkFacebook, bodyFooterLinkInstagram, bodyFooterLinkTwitter, bodyFooterLinkLinkedIn, bodyFooterLinkTikTok, bodyFooterTitleContacto, bodyFooterDireccionNegocio_uno, bodyFooterDireccionNegocio_dos, bodyFooterTelefonoNegocio_uno, bodyFooterTelefonoNegocio_dos, bodyFooterEmailNegocio_uno, bodyFooterEmailNegocio_dos, bodyFooterCopyright, idEmpresaUser FROM tb_cms_perfil_negocio WHERE idEmpresaUser = '.$idEmpresaUser.'';

    $data = $conn->query($sqlPerfilNegocio);
    if($data > 0){
        $Perfil = $data ->fetch_assoc(); 
        // header('Location: viewProspectoLista.php'); // Redireccionar a la página principal después de actualizar el registro
        // exit();
    }

    $idPerfilNegocio=$Perfil['idPerfilNegocio'];
    $bodyFooterLogo='data:image/jpeg;base64,' . $Perfil['bodyFooterLogo'];
    $bodyFooterSlogan=$Perfil['bodyFooterSlogan'];
    $bodyFooterLinkFacebook=$Perfil['bodyFooterLinkFacebook'];
    $bodyFooterLinkInstagram=$Perfil['bodyFooterLinkInstagram'];
    $bodyFooterLinkTwitter=$Perfil['bodyFooterLinkTwitter'];
    $bodyFooterLinkLinkedIn=$Perfil['bodyFooterLinkLinkedIn'];
    $bodyFooterLinkTikTok=$Perfil['bodyFooterLinkTikTok'];
    $bodyFooterTitleContacto=$Perfil['bodyFooterTitleContacto'];
    $bodyFooterDireccionNegocio_uno=$Perfil['bodyFooterDireccionNegocio_uno'];
    $bodyFooterDireccionNegocio_dos=$Perfil['bodyFooterDireccionNegocio_dos'];
    $bodyFooterTelefonoNegocio_uno=$Perfil['bodyFooterTelefonoNegocio_uno'];
    $bodyFooterTelefonoNegocio_dos=$Perfil['bodyFooterTelefonoNegocio_dos'];
    $bodyFooterEmailNegocio_uno=$Perfil['bodyFooterEmailNegocio_uno'];
    $bodyFooterEmailNegocio_dos=$Perfil['bodyFooterEmailNegocio_dos'];
    $bodyFooterCopyright=$Perfil['bodyFooterCopyright'];
    $idEmpresaUser=$Perfil['idEmpresaUser'];

    // Consulta SQL para obtener la seccion a modificar
    $sqlPageWebSeccion = 'SELECT * FROM tb_cms_page_web WHERE idPageWeb = '.$idPageWeb.'';
    $dataPage = $conn->query($sqlPageWebSeccion);
    if($dataPage > 0){
        $PageWeb = $dataPage ->fetch_assoc(); 
        // header('Location: viewWebLista.php'); // Redireccionar a la página principal después de actualizar el registro
        // exit();
    }

    $namePageWebMenu=$PageWeb['namePageWebMenu'];
    $fileNameWeb=$PageWeb['fileNameWeb'].'.html';
    $filePatchServer=$PageWeb['filePatchServer'];
    $headTitle=$PageWeb['headTitle'];
    $headDescription=$PageWeb['headDescription'];
    $headKeywords=$PageWeb['headKeywords'];
    $headPlugins=$PageWeb['headPlugins'];
    $bodyheadFooterScriptPlugins=$PageWeb['bodyheadFooterScriptPlugins'];
    $bodybtnWhatsapp=$PageWeb['bodybtnWhatsapp'];
    $idPerfilNegocio=$PageWeb['idPerfilNegocio'];
    //echo $idPageWeb  . $bodyFooterSlogan . $fileNameWeb;

    $sqlContenidoSeccion="SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = 1 AND page_seccion = 1 AND type_componente = 'bodyheadCarrusel'";
    $datacomponentes = $conn->query($sqlContenidoSeccion);
    if($dataPage > 0){
        $ArrayComponente = $datacomponentes ->fetch_assoc(); 
        // header('Location: viewWebLista.php'); // Redireccionar a la página principal después de actualizar el registro
        // exit();
    }


    switch ($idPageWeb){
        case 1:
            $sqlContenidobodyheadCarrusel = "SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'bodyheadCarrusel'";
            $datacomponentes = $conn->query($sqlContenidobodyheadCarrusel);
            if ($datacomponentes->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $datacomponentes->fetch_assoc();
                $resultados[] = $row;
                $idComponente =  $resultados[0]['idComponente'];
                $imagen_componente = 'data:image/jpeg;base64,' . $resultados[0]['imagen_componente'];
                $title_componente =  $resultados[0]['title_componente'];
                $description_componente =  $resultados[0]['description_componente'];
                $title_btn_action =  $resultados[0]['title_btn_action'];
                $action_btn_link =  $resultados[0]['action_btn_link'];
                $estado_componente =  $resultados[0]['estado_componente'];
                $page_seccion =  $resultados[0]['page_seccion'];
                $type_componente =  $resultados[0]['type_componente'];
            }            
            if ($datacomponentes->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $datacomponentes->fetch_assoc();
                $resultados[1] = $row;
                $idComponente_2 =  $resultados[1]['idComponente'];
                $imagen_componente_2 = 'data:image/jpeg;base64,' . $resultados[1]['imagen_componente'];
                $title_componente_2 =  $resultados[1]['title_componente'];
                $description_componente_2 =  $resultados[1]['description_componente'];
                $title_btn_action_2 =  $resultados[1]['title_btn_action'];
                $action_btn_link_2 =  $resultados[1]['action_btn_link'];
                $estado_componente_2 =  $resultados[1]['estado_componente'];
                $page_seccion_2 =  $resultados[1]['page_seccion'];
                $type_componente_2 =  $resultados[1]['type_componente'];
            }
            if ($datacomponentes->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $datacomponentes->fetch_assoc();
                $resultados[2] = $row;
                $idComponente_3 =  $resultados[2]['idComponente'];
                $imagen_componente_3 = 'data:image/jpeg;base64,' . $resultados[2]['imagen_componente'];
                $title_componente_3 =  $resultados[2]['title_componente'];
                $description_componente_3 =  $resultados[2]['description_componente'];
                $title_btn_action_3 =  $resultados[2]['title_btn_action'];
                $action_btn_link_3 =  $resultados[2]['action_btn_link'];
                $estado_componente_3 =  $resultados[2]['estado_componente'];
                $page_seccion_3 =  $resultados[2]['page_seccion'];
                $type_componente_3 =  $resultados[2]['type_componente'];
            }

            $sqlContenidobodysectionProductosDestacados = "SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'bodysectionProductosDestacados'";
            $databodysectionProductosDestacados = $conn->query($sqlContenidobodysectionProductosDestacados);
            if ($databodysectionProductosDestacados->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionProductosDestacados->fetch_assoc();

                $resultados[] = $row;
                $idComponentePD1 =  $resultados[0]['idComponente'];
                $imagen_componentePD1 = 'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componentePD1 =  $resultados[0]['title_componente'];
                $description_componentePD1 =  $resultados[0]['description_componente'];
                $title_btn_actionPD1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkPD1 =  $resultados[0]['action_btn_link'];
                $estado_componentePD1 =  $resultados[0]['estado_componente'];
                $page_seccionPD1 =  $resultados[0]['page_seccion'];
                $type_componentePD1 =  $resultados[0]['type_componente'];
            }
            if ($databodysectionProductosDestacados->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionProductosDestacados->fetch_assoc();

                $resultados[1] = $row;
                $idComponentePD2 =  $resultados[1]['idComponente'];
                $imagen_componentePD2 =  'data:image/jpeg;base64,'.$resultados[1]['imagen_componente'];
                $title_componentePD2 =  $resultados[1]['title_componente'];
                $description_componentePD2 =  $resultados[1]['description_componente'];
                $title_btn_actionPD2 =  $resultados[1]['title_btn_action'];
                $action_btn_linkPD2 =  $resultados[1]['action_btn_link'];
                $estado_componentePD2 =  $resultados[1]['estado_componente'];
                $page_seccionPD2 =  $resultados[1]['page_seccion'];
                $type_componentePD2 =  $resultados[1]['type_componente'];
            }
            if ($databodysectionProductosDestacados->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionProductosDestacados->fetch_assoc();

                $resultados[2] = $row;
                $idComponentePD3 =  $resultados[2]['idComponente'];
                $imagen_componentePD3 =  'data:image/jpeg;base64,'.$resultados[2]['imagen_componente'];
                $title_componentePD3 =  $resultados[2]['title_componente'];
                $description_componentePD3 =  $resultados[2]['description_componente'];
                $title_btn_actionPD3 =  $resultados[2]['title_btn_action'];
                $action_btn_linkPD3 =  $resultados[2]['action_btn_link'];
                $estado_componentePD3 =  $resultados[2]['estado_componente'];
                $page_seccionPD3 =  $resultados[2]['page_seccion'];
                $type_componentePD3 =  $resultados[2]['type_componente'];
            }

            $sqlContenidobodysectionAcercaNegocio ="SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'bodysectionAcercaNegocio'";
            $databodysectionAcercaNegocio = $conn->query($sqlContenidobodysectionAcercaNegocio);
            if ($databodysectionAcercaNegocio->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionAcercaNegocio->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteAN1 =  $resultados[0]['idComponente'];
                $imagen_componenteAN1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteAN1 =  $resultados[0]['title_componente'];
                $description_componenteAN1 =  $resultados[0]['description_componente'];
                $title_btn_actionAN1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkAN1 =  $resultados[0]['action_btn_link'];
                $estado_componenteAN1 =  $resultados[0]['estado_componente'];
                $page_seccionAN1 =  $resultados[0]['page_seccion'];
                $type_componenteAN1 =  $resultados[0]['type_componente'];
            }

            $sqlContenidobodysectionServicio = "SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'bodysectionServicio'";
            $databodysectionServicio = $conn->query($sqlContenidobodysectionServicio);
            if ($databodysectionServicio->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionServicio->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteSS1 =  $resultados[0]['idComponente'];
                $imagen_componenteSS1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteSS1 =  $resultados[0]['title_componente'];
                $description_componenteSS1 =  $resultados[0]['description_componente'];
                $title_btn_actionSS1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkSS1 =  $resultados[0]['action_btn_link'];
                $estado_componenteSS1 =  $resultados[0]['estado_componente'];
                $page_seccionSS1 =  $resultados[0]['page_seccion'];
                $type_componenteSS1 =  $resultados[0]['type_componente'];
            }
            if ($databodysectionServicio->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionServicio->fetch_assoc();

                $resultados[1] = $row;
                $idComponenteSS2 =  $resultados[1]['idComponente'];
                $imagen_componenteSS2 =  'data:image/jpeg;base64,'.$resultados[1]['imagen_componente'];
                $title_componenteSS2 =  $resultados[1]['title_componente'];
                $description_componenteSS2 =  $resultados[1]['description_componente'];
                $title_btn_actionSS2 =  $resultados[1]['title_btn_action'];
                $action_btn_linkSS2 =  $resultados[1]['action_btn_link'];
                $estado_componenteSS2 =  $resultados[1]['estado_componente'];
                $page_seccionSS2 =  $resultados[1]['page_seccion'];
                $type_componenteSS2 =  $resultados[1]['type_componente'];
            }
            if ($databodysectionServicio->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionServicio->fetch_assoc();

                $resultados[2] = $row;
                $idComponenteSS3 =  $resultados[2]['idComponente'];
                $imagen_componenteSS3 =  'data:image/jpeg;base64,'.$resultados[2]['imagen_componente'];
                $title_componenteSS3 =  $resultados[2]['title_componente'];
                $description_componenteSS3 =  $resultados[2]['description_componente'];
                $title_btn_actionSS3 =  $resultados[2]['title_btn_action'];
                $action_btn_linkSS3 =  $resultados[2]['action_btn_link'];
                $estado_componenteSS3 =  $resultados[2]['estado_componente'];
                $page_seccionSS3 =  $resultados[2]['page_seccion'];
                $type_componenteSS3 =  $resultados[2]['type_componente'];
            }

            $sqlContenidobodysectionClientes = "SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'bodysectionClientes'";
            $databodysectionClientes = $conn->query($sqlContenidobodysectionClientes);
            if ($databodysectionClientes->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionClientes->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteSC1 =  $resultados[0]['idComponente'];
                $imagen_componenteSC1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteSC1 =  $resultados[0]['title_componente'];
                $description_componenteSC1 =  $resultados[0]['description_componente'];
                $title_btn_actionSC1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkSC1 =  $resultados[0]['action_btn_link'];
                $estado_componenteSC1 =  $resultados[0]['estado_componente'];
                $page_seccionSC1 =  $resultados[0]['page_seccion'];
                $type_componenteSC1 =  $resultados[0]['type_componente'];
            }
            if ($databodysectionClientes->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionClientes->fetch_assoc();

                $resultados[1] = $row;
                $idComponenteSC2 =  $resultados[1]['idComponente'];
                $imagen_componenteSC2 =  'data:image/jpeg;base64,'.$resultados[1]['imagen_componente'];
                $title_componenteSC2 =  $resultados[1]['title_componente'];
                $description_componenteSC2 =  $resultados[1]['description_componente'];
                $title_btn_actionSC2 =  $resultados[1]['title_btn_action'];
                $action_btn_linkSC2 =  $resultados[1]['action_btn_link'];
                $estado_componenteSC2 =  $resultados[1]['estado_componente'];
                $page_seccionSC2 =  $resultados[1]['page_seccion'];
                $type_componenteSC2 =  $resultados[1]['type_componente'];
            }
            if ($databodysectionClientes->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionClientes->fetch_assoc();

                $resultados[2] = $row;
                $idComponenteSC3 =  $resultados[2]['idComponente'];
                $imagen_componenteSC3 =  'data:image/jpeg;base64,'.$resultados[2]['imagen_componente'];
                $title_componenteSC3 =  $resultados[2]['title_componente'];
                $description_componenteSC3 =  $resultados[2]['description_componente'];
                $title_btn_actionSC3 =  $resultados[2]['title_btn_action'];
                $action_btn_linkSC3 =  $resultados[2]['action_btn_link'];
                $estado_componenteSC3 =  $resultados[2]['estado_componente'];
                $page_seccionSC3 =  $resultados[2]['page_seccion'];
                $type_componenteSC3 =  $resultados[2]['type_componente'];
            }
            if ($databodysectionClientes->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionClientes->fetch_assoc();

                $resultados[3] = $row;
                $idComponenteSC4 =  $resultados[3]['idComponente'];
                $imagen_componenteSC4 =  'data:image/jpeg;base64,'.$resultados[3]['imagen_componente'];
                $title_componenteSC4 =  $resultados[3]['title_componente'];
                $description_componenteSC4 =  $resultados[3]['description_componente'];
                $title_btn_actionSC4 =  $resultados[3]['title_btn_action'];
                $action_btn_linkSC4 =  $resultados[3]['action_btn_link'];
                $estado_componenteSC4 =  $resultados[3]['estado_componente'];
                $page_seccionSC4 =  $resultados[3]['page_seccion'];
                $type_componenteSC4 =  $resultados[3]['type_componente'];
            }
            if ($databodysectionClientes->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionClientes->fetch_assoc();

                $resultados[4] = $row;
                $idComponenteSC5 =  $resultados[4]['idComponente'];
                $imagen_componenteSC5 =  'data:image/jpeg;base64,'.$resultados[4]['imagen_componente'];
                $title_componenteSC5 =  $resultados[4]['title_componente'];
                $description_componenteSC5 =  $resultados[4]['description_componente'];
                $title_btn_actionSC5 =  $resultados[4]['title_btn_action'];
                $action_btn_linkSC5 =  $resultados[4]['action_btn_link'];
                $estado_componenteSC5 =  $resultados[4]['estado_componente'];
                $page_seccionSC5 =  $resultados[4]['page_seccion'];
                $type_componenteSC5 =  $resultados[4]['type_componente'];
            }

            $sqlContenidbodysectionRecomendaciones="SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'bodysectionRecomendaciones'";
            $databodysectionRecomendaciones = $conn->query($sqlContenidbodysectionRecomendaciones);
            if ($databodysectionRecomendaciones->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionRecomendaciones->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteSR1 =  $resultados[0]['idComponente'];
                $imagen_componenteSR1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteSR1 =  $resultados[0]['title_componente'];
                $description_componenteSR1 =  $resultados[0]['description_componente'];
                $title_btn_actionSR1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkSR1 =  $resultados[0]['action_btn_link'];
                $estado_componenteSR1 =  $resultados[0]['estado_componente'];
                $page_seccionSR1 =  $resultados[0]['page_seccion'];
                $type_componenteSR1 =  $resultados[0]['type_componente'];
            }

            $sqlContenidoform_actions_text="SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'form_actions_text'";
            $dataform_actions_text = $conn->query($sqlContenidoform_actions_text);
            if ($dataform_actions_text->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $dataform_actions_text->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteFA1 =  $resultados[0]['idComponente'];
                $imagen_componenteFA1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteFA1 =  $resultados[0]['title_componente'];
                $description_componenteFA1 =  $resultados[0]['description_componente'];
                $title_btn_actionFA1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkFA1 =  $resultados[0]['action_btn_link'];
                $estado_componenteFA1 =  $resultados[0]['estado_componente'];
                $page_seccionFA1 =  $resultados[0]['page_seccion'];
                $type_componenteFA1 =  $resultados[0]['type_componente'];
            }

            $sqlContenidoform_actions_text="SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'form_actions_text'";
            $dataform_actions_text = $conn->query($sqlContenidoform_actions_text);
            if ($dataform_actions_text->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $dataform_actions_text->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteFA1 =  $resultados[0]['idComponente'];
                $imagen_componenteFA1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteFA1 =  $resultados[0]['title_componente'];
                $description_componenteFA1 =  $resultados[0]['description_componente'];
                $title_btn_actionFA1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkFA1 =  $resultados[0]['action_btn_link'];
                $estado_componenteFA1 =  $resultados[0]['estado_componente'];
                $page_seccionFA1 =  $resultados[0]['page_seccion'];
                $type_componenteFA1 =  $resultados[0]['type_componente'];
            }
            
            $PageWebFile = "
                <!doctype html>
                <html class='no-js' lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>$headTitle</title>
                        <meta name='viewport' content='width=device-width, initial-scale=1'>
                        <!-- Favicon, robots, description,keywords -->
                        <link rel='shortcut icon' type='image/x-icon' href='./img/engranet/logo.jpg'> 
                        <meta name='robots' content='index,follow'>
                        <meta name='description' content='$headDescription'>
                        <meta name='keywords' content='$headKeywords'>
                        <!-- Favicon, robots, description,keywords -->
                        <!-- Link css, js -->
                        <link rel='stylesheet' href='css/bootstrap.min.css'>
                        <link rel='stylesheet' href='css/animate.min.css'>
                        <link rel='stylesheet' href='css/meanmenu.css'>
                        <link rel='stylesheet' href='css/magnific-popup.css'>
                        <link rel='stylesheet' href='css/owl.carousel.min.css'>
                        <link rel='stylesheet' href='css/font-awesome.min.css'>
                        <link rel='stylesheet' href='css/et-line-icon.css'>
                        <link rel='stylesheet' href='css/reset.css'>
                        <link rel='stylesheet' href='css/ionicons.min.css'>
                        <link rel='stylesheet' href='css/material-design-iconic-font.min.css'>
                        <link rel='stylesheet' href='css/style.css'>
                        <link rel='stylesheet' href='css/responsive.css'>
                        <script src='js/vendor/modernizr-3.11.2.min.js'></script>
                        <!-- Link css, js -->
                        $headPlugins
                    </head>
                    <body>
                        <header class='top'>
                            <div class='header-top'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-12 col-sm-12'>
                                            <div class='header-top-left'>
                                                <p> 
                                                    $bodyFooterTitleContacto
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_uno'>$bodyFooterTelefonoNegocio_uno</a> /
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_dos'>$bodyFooterTelefonoNegocio_uno</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='header-area two header-sticky'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-3 col-sm-5 col-6'>
                                            <div class='logo'>
                                                <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome' /></a>
                                            </div>
                                        </div>
                                        <div class='col-md-9 col-sm-7 col-6'>
                                            <div class='content-wrapper text-end'>
                                                <!-- Main Menu Start -->
                                                <div class='main-menu'>
                                                    <nav>
                                                        <ul>
                                                            <li><a class='nav-link' href='index.html'>Inicio</a></li>
                                                            <li><a class='nav-link' href='acerca.html'>Acerca de</a></li>
                                                            <li><a class='nav-link' href='servicios.html'>Servicios</a></li>
                                                            <li><a class='nav-link' href='blog-lista.php'>blog</a></li>
                                                            <li><a class='nav-link' href='contacto.html'>Contacto</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-12'>
                                            <div class='mobile-menu hidden-sm'></div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- Header Area End -->
        
                        <!-- Carrusel Page Start -->
                        <section id='slider-container' class='slider-area two'> 
                            <div class='slider-owl owl-theme owl-carousel'> 
                                <!-- Start Slingle Slide -->
                                <div class='single-slide item' style='background-image: url($imagen_componente);'>
                                    <!-- Start Slider Content -->
                                    <div class='slider-content-area'>  
                                        <div class='container'>
                                            <div class='row'>
                                                <div class='col-md-10 offset-md-1'> 
                                                    <div class='slide-content-wrapper'>
                                                        <div class='slide-content text-center'>
                                                            <h2>
                                                                $title_componente
                                                            </h2>
                                                            <p>
                                                                $description_componente
                                                            </p>
                                                            <a class='default-btn' href='$action_btn_link'>$title_btn_action</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Start Slider Content -->
                                </div>
                                <!-- End Slingle Slide -->
                                <!-- Start Slingle Slide -->
                                <div class='single-slide item' style='background-image: url($imagen_componente_2)'>
                                    <!-- Start Slider Content -->
                                    <div class='slider-content-area'>   
                                        <div class='container'>
                                            <div class='row'>
                                                <div class='col-md-10 offset-md-1'> 
                                                    <div class='slide-content-wrapper'>
                                                        <div class='slide-content text-center'>
                                                            <h2>
                                                                $title_componente_2
                                                            </h2>
                                                            <p>
                                                                $description_componente_2
                                                            </p>
                                                            <a class='default-btn' href='$action_btn_link_2'>$title_btn_action_2</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Start Slider Content -->
                                </div>
                                <!-- End Slingle Slide -->
                                <!-- Start Slingle Slide -->
                                <div class='single-slide item' style='background-image: url($imagen_componente_3)'>
                                    <!-- Start Slider Content -->
                                    <div class='slider-content-area'>  
                                        <div class='container'>
                                            <div class='row'>
                                                <div class='col-md-10 offset-md-1'> 
                                                    <div class='slide-content-wrapper'>
                                                        <div class='slide-content text-center'>
                                                            <h2>
                                                                $title_componente_3
                                                            </h2>
                                                            <p>
                                                                $description_componente_3
                                                            </p>
                                                            <a class='default-btn' href='$action_btn_link_3'>$title_btn_action_3</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Start Slider Content -->
                                </div>
                                <!-- End Slingle Slide -->								
                            </div>
                        </section>
                        <!-- Carrusel Page End -->
        
                        <!-- Servicios Start -->
                        <div class='service-area two pt-150 pb-150'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-md-4'>
                                        <div class='single-service'>
                                            <h3><a href='$action_btn_linkPD1' target='_blank'>$title_componentePD1</a></h3>
                                            <p>$description_componentePD1</p> <br>
                                            <a class='default-btn' href='$action_btn_linkPD1' target='_blank' style='background-color: #229655;'>$title_btn_actionPD1</a>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <div class='single-service'>
                                            <h3><a href='$action_btn_linkPD2' target='_blank'>$title_componentePD2</a></h3>
                                            <p>$description_componentePD2</p> <br>
                                            <a class='default-btn' href='$action_btn_linkPD2' target='_blank' style='background-color: #229655;'>$title_btn_actionPD2</a>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <div class='single-service'>
                                            <h3><a href='$action_btn_linkPD3' target='_blank'>$title_componentePD3</a></h3>
                                            <p>$description_componentePD3</p> <br>
                                            <a class='default-btn' href='$action_btn_linkPD3' target='_blank' style='background-color: #229655;'>$title_btn_actionPD3</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Servicios End -->
        
                        <!-- Acerca de Start -->
                        <div class='about-area pb-155'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-md-6 col-sm-6'>
                                        <div class='about-content'>
                                            <h2>$title_componenteAN1</h2>
                                            <p>$description_componenteAN1</p>
                                            <a class='default-btn' href='$action_btn_linkAN1'>$title_btn_actionAN1</a>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-sm-6'>
                                        <div class='about-img'>
                                            <img src='$imagen_componenteAN1' alt='about'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Acerca de End -->
        
                        <!-- Servicios digitales Start -->
                        <div class='courses-area two pt-150 pb-150 text-center' id='servicios'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='section-title'>
                                            <img src='img/icon/servicio.png' alt='section-title'>
                                            <h2>Servicios Digitales</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-4 col-md-6'>
                                        <div class='single-course'>
                                            <div class='course-img'>
                                                <a href='$action_btn_linkSS1'><img src='$imagen_componenteSS1' alt='course'>
                                                    <div class='course-hover'>
                                                        <i class='fa fa-link'></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class='course-content'>
                                                <h3><a href='$action_btn_linkSS1'>$title_componenteSS1</a></h3>
                                                <p>$description_componenteSS1</p>
                                                <a class='default-btn' href='$action_btn_linkSS1'>$title_btn_actionSS1</a>
                                            </div>   
                                        </div>
                                    </div>
                                    <div class='col-lg-4 col-md-6'>
                                        <div class='single-course'>
                                            <div class='course-img'>
                                                <a href='$action_btn_linkSS2'><img src='$imagen_componenteSS2' alt='course'>
                                                    <div class='course-hover'>
                                                        <i class='fa fa-link'></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class='course-content'>
                                                <h3><a href='$action_btn_linkSS2'>$title_componenteSS2</a></h3>
                                                <p>$description_componenteSS2</p>
                                                <a class='default-btn' href='$action_btn_linkSS2'>$title_btn_actionSS2</a>
                                            </div>   
                                        </div>
                                    </div>
                                    <div class='col-lg-4 col-md-6 pt-4 pt-lg-0'>
                                        <div class='single-course'>
                                            <div class='course-img'>
                                                <a href='$action_btn_linkSS3'><img src='$imagen_componenteSS3' alt='course'>
                                                    <div class='course-hover'>
                                                        <i class='fa fa-link'></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class='course-content'>
                                                <h3><a href='$action_btn_linkSS3'>$title_componenteSS3</a></h3>
                                                <p>$description_componenteSS3</p>
                                                <a class='default-btn' href='$action_btn_linkSS3'>$title_btn_actionSS3</a>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Servicios digitales End -->
                        
                        <!-- Principales Clientes Start-->
                        <div class='event-area two text-center pt-100 pb-145'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='section-title'>
                                            <img src='img/icon/clientes.png' alt='section-title'>
                                            <h2>PRINCIPALESS CLIENTES</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-6'>
                                        <div class='single-event mb-35'>
                                            <div class='event-img'>
                                                <a href='$action_btn_linkSC1'><img src='$imagen_componenteSC1' alt='event'></a>
                                            </div>
                                        </div>
                                        <div class='single-event mb-35 mb-md-0'>
                                            <div class='event-img'>
                                                <a href='$action_btn_linkSC2'><img src='$imagen_componenteSC2' alt='event'></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-lg-6'>
                                        <div class='single-event mb-35'>
                                            <div class='event-img'>
                                                <a href='$action_btn_linkSC3'><img src='$imagen_componenteSC3' alt='event'></a>
                                            </div>
                                        </div>
                                        <div class='single-event'>
                                            <div class='event-img'>
                                                <a href='$action_btn_linkSC4'><img src='$imagen_componenteSC4' alt='event'></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-lg-6'>
                                        <div class='single-event mb-35'>
                                            <div class='event-img'>
                                                <a href='$action_btn_linkSC5'><img src='$imagen_componenteSC5' alt='event'></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Principales Clientes End-->
        
                        <!-- Testimonio Engranet Start-->
                        <div class='testimonial-area pt-110 pb-105 text-center'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='testimonial-owl owl-theme owl-carousel'>
                                        <div class='col-lg-8 offset-lg-2'>
                                            <div class='single-testimonial'>
                                                <div class='testimonial-info'>
                                                    <div class='testimonial-img'>
                                                        <img src='$imagen_componenteSR1' alt='testimonial'>
                                                    </div>
                                                    <div class='testimonial-content'>
                                                        <p>$title_componenteSR1</p>
                                                        <h4>$description_componenteSR1</h4>
                                                        <h5>$title_btn_actionSR1</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Testimonio Engranet End -->
                        
                        <!-- Subscribe Start -->
                        <div class='subscribe-area pt-60 pb-70'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-lg-8 offset-lg-2'>
                                        <div class='subscribe-content section-title text-center'>
                                            <h2>$title_componenteFA1</h2>
                                            <p>$description_componenteFA1</p>
                                        </div>
                                        <div class='newsletter-form mc_embed_signup'>
                                            <form class='formSucriptor' action='registroweb.php' method='post'>
                                                <div id='mc_embed_signup_scroll' class='mc-form'> 
        
                                                    <input type='email' value='' name='correo' class='email'  placeholder='Introduzca su dirección de correo electrónico' required>
                                                    <input type='text' name='nombre' value='Suscriptor' hidden>
                                                    <input type='text' name='telefono' value='Suscriptor' hidden>
                                                    <input type='text' name='mensaje' value='Suscriptor' hidden>
        
                                                    <button id='mc-embedded-subscribe' class='default-btn' type='submit' name='subscribe'><span>$title_btn_actionFA1</span></button> 
                                                </div>    
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Subscribe End -->
        
                        <!-- Footer Start -->
                        <footer class='footer-area'>
                            <div class='main-footer'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget pr-60'>
                                                <div class='footer-logo pb-25'>
                                                    <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome'></a>
                                                </div>
                                                <p>$bodyFooterSlogan</p>
                                                <div class='footer-social'>
                                                    <ul>
                                                        <li><a href='$bodyFooterLinkFacebook' target='_blank'><i class='zmdi zmdi-facebook'></i></a></li>
                                                        <!--<li><a href='https://twitter.com/devitemsllc'><i class='zmdi zmdi-instagram'></i></a></li> -->
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget'>
                                                <h3>$bodyFooterTitleContacto</h3>
                                                <p>$bodyFooterDireccionNegocio_uno</p>
                                                <p>$bodyFooterDireccionNegocio_dos</p>
                                                <p>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_uno' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a>
                                                    <br>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_dos' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a></p>
                                                <!-- <p>$bodyFooterEmailNegocio_uno</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class='footer-bottom text-center'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <p>$bodyFooterCopyright</p>
                                        </div> 
                                    </div>
                                </div>    
                            </div>
                        </footer>
                        <!-- Footer End -->
                        $bodyheadFooterScript
                        <script src='js/vendor/jquery-3.6.0.min.js'></script>
                        <script src='js/vendor/jquery-migrate-3.3.2.min.js'></script>
                        <script src='js/bootstrap.bundle.min.js'></script>
                        <script src='js/jquery.meanmenu.js'></script>
                        <script src='js/jquery.magnific-popup.js'></script>
                        <script src='js/ajax-mail.js'></script>
                        <script src='js/owl.carousel.min.js'></script>
                        <script src='js/jquery.mb.YTPlayer.js'></script>
                        <script src='js/jquery.nicescroll.min.js'></script>
                        <script src='js/plugins.js'></script>
                        <script src='js/main.js'></script>
                        $bodybtnWhatsapp
                    </body>
                </html>
            ";
            $Ruta = '../'.$filePatchServer.$fileNameWeb;
            //echo $Ruta;
            if (file_put_contents($Ruta, $PageWebFile)) {
                header('Location: ../viewWebLista.php'); // Redireccionar a la página principal después de actualizar el registro
                exit();
            } else {
                return  'Hubo un error al crear el archivo.';
            }
            break; // Termina el caso actual y sale del switch
        case 2:
            $sqlContenidoArea_Start = "SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'Area_Start'";
            $dataArea_Start = $conn->query($sqlContenidoArea_Start);
            if ($dataArea_Start->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $dataArea_Start->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteAS1 =  $resultados[0]['idComponente'];
                $imagen_componenteAS1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteAS1 =  $resultados[0]['title_componente'];
                $description_componenteAS1 =  $resultados[0]['description_componente'];
                $title_btn_actionAS1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkAS1 =  $resultados[0]['action_btn_link'];
                $estado_componenteAS1 =  $resultados[0]['estado_componente'];
                $page_seccionAS1 =  $resultados[0]['page_seccion'];
                $type_componenteAS1 =  $resultados[0]['type_componente'];
            }

            $sqlContenidobodysectionAcercaNegocio ="SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'bodysectionAcercaNegocio'";
            $databodysectionAcercaNegocio = $conn->query($sqlContenidobodysectionAcercaNegocio);
            if ($databodysectionAcercaNegocio->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionAcercaNegocio->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteAN1 =  $resultados[0]['idComponente'];
                $imagen_componenteAN1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteAN1 =  $resultados[0]['title_componente'];
                $description_componenteAN1 =  $resultados[0]['description_componente'];
                $title_btn_actionAN1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkAN1 =  $resultados[0]['action_btn_link'];
                $estado_componenteAN1 =  $resultados[0]['estado_componente'];
                $page_seccionAN1 =  $resultados[0]['page_seccion'];
                $type_componenteAN1 =  $resultados[0]['type_componente'];
            }

            $sqlContenidobodysectionClientes = "SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'bodysectionClientes'";
            $databodysectionClientes = $conn->query($sqlContenidobodysectionClientes);
            if ($databodysectionClientes->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionClientes->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteSC1 =  $resultados[0]['idComponente'];
                $imagen_componenteSC1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteSC1 =  $resultados[0]['title_componente'];
                $description_componenteSC1 =  $resultados[0]['description_componente'];
                $title_btn_actionSC1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkSC1 =  $resultados[0]['action_btn_link'];
                $estado_componenteSC1 =  $resultados[0]['estado_componente'];
                $page_seccionSC1 =  $resultados[0]['page_seccion'];
                $type_componenteSC1 =  $resultados[0]['type_componente'];
            }
            if ($databodysectionClientes->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionClientes->fetch_assoc();

                $resultados[1] = $row;
                $idComponenteSC2 =  $resultados[1]['idComponente'];
                $imagen_componenteSC2 =  'data:image/jpeg;base64,'.$resultados[1]['imagen_componente'];
                $title_componenteSC2 =  $resultados[1]['title_componente'];
                $description_componenteSC2 =  $resultados[1]['description_componente'];
                $title_btn_actionSC2 =  $resultados[1]['title_btn_action'];
                $action_btn_linkSC2 =  $resultados[1]['action_btn_link'];
                $estado_componenteSC2 =  $resultados[1]['estado_componente'];
                $page_seccionSC2 =  $resultados[1]['page_seccion'];
                $type_componenteSC2 =  $resultados[1]['type_componente'];
            }
            if ($databodysectionClientes->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionClientes->fetch_assoc();

                $resultados[2] = $row;
                $idComponenteSC3 =  $resultados[2]['idComponente'];
                $imagen_componenteSC3 =  'data:image/jpeg;base64,'.$resultados[2]['imagen_componente'];
                $title_componenteSC3 =  $resultados[2]['title_componente'];
                $description_componenteSC3 =  $resultados[2]['description_componente'];
                $title_btn_actionSC3 =  $resultados[2]['title_btn_action'];
                $action_btn_linkSC3 =  $resultados[2]['action_btn_link'];
                $estado_componenteSC3 =  $resultados[2]['estado_componente'];
                $page_seccionSC3 =  $resultados[2]['page_seccion'];
                $type_componenteSC3 =  $resultados[2]['type_componente'];
            }
            if ($databodysectionClientes->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionClientes->fetch_assoc();

                $resultados[3] = $row;
                $idComponenteSC4 =  $resultados[3]['idComponente'];
                $imagen_componenteSC4 =  'data:image/jpeg;base64,'.$resultados[3]['imagen_componente'];
                $title_componenteSC4 =  $resultados[3]['title_componente'];
                $description_componenteSC4 =  $resultados[3]['description_componente'];
                $title_btn_actionSC4 =  $resultados[3]['title_btn_action'];
                $action_btn_linkSC4 =  $resultados[3]['action_btn_link'];
                $estado_componenteSC4 =  $resultados[3]['estado_componente'];
                $page_seccionSC4 =  $resultados[3]['page_seccion'];
                $type_componenteSC4 =  $resultados[3]['type_componente'];
            }
            if ($databodysectionClientes->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionClientes->fetch_assoc();

                $resultados[4] = $row;
                $idComponenteSC5 =  $resultados[4]['idComponente'];
                $imagen_componenteSC5 =  'data:image/jpeg;base64,'.$resultados[4]['imagen_componente'];
                $title_componenteSC5 =  $resultados[4]['title_componente'];
                $description_componenteSC5 =  $resultados[4]['description_componente'];
                $title_btn_actionSC5 =  $resultados[4]['title_btn_action'];
                $action_btn_linkSC5 =  $resultados[4]['action_btn_link'];
                $estado_componenteSC5 =  $resultados[4]['estado_componente'];
                $page_seccionSC5 =  $resultados[4]['page_seccion'];
                $type_componenteSC5 =  $resultados[4]['type_componente'];
            }

            $sqlContenidoform_actions_text="SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'form_actions_text'";
            $dataform_actions_text = $conn->query($sqlContenidoform_actions_text);
            if ($dataform_actions_text->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $dataform_actions_text->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteFA1 =  $resultados[0]['idComponente'];
                $imagen_componenteFA1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteFA1 =  $resultados[0]['title_componente'];
                $description_componenteFA1 =  $resultados[0]['description_componente'];
                $title_btn_actionFA1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkFA1 =  $resultados[0]['action_btn_link'];
                $estado_componenteFA1 =  $resultados[0]['estado_componente'];
                $page_seccionFA1 =  $resultados[0]['page_seccion'];
                $type_componenteFA1 =  $resultados[0]['type_componente'];
            }

            $sqlContenidobodysectionTeam = "SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = 1 AND page_seccion = 2 AND type_componente = 'bodysectionTeam'";
            $databodysectionTeam = $conn->query($sqlContenidobodysectionTeam);
            if ($databodysectionTeam->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionTeam->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteST1 =  $resultados[0]['idComponente'];
                $imagen_componenteST1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteST1 =  $resultados[0]['title_componente'];
                $description_componenteST1 =  $resultados[0]['description_componente'];
                $title_btn_actionST1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkST1 =  $resultados[0]['action_btn_link'];
                $estado_componenteST1 =  $resultados[0]['estado_componente'];
                $page_seccionST1 =  $resultados[0]['page_seccion'];
                $type_componenteST1 =  $resultados[0]['type_componente'];
            }
            if ($databodysectionTeam->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionTeam->fetch_assoc();

                $resultados[1] = $row;
                $idComponenteST2 =  $resultados[1]['idComponente'];
                $imagen_componenteST2 =  'data:image/jpeg;base64,'.$resultados[1]['imagen_componente'];
                $title_componenteST2 =  $resultados[1]['title_componente'];
                $description_componenteST2 =  $resultados[1]['description_componente'];
                $title_btn_actionST2 =  $resultados[1]['title_btn_action'];
                $action_btn_linkST2 =  $resultados[1]['action_btn_link'];
                $estado_componenteST2 =  $resultados[1]['estado_componente'];
                $page_seccionST2 =  $resultados[1]['page_seccion'];
                $type_componenteST2 =  $resultados[1]['type_componente'];
            }

            $PageWebFile = "
                <!doctype html>
                <html class='no-js' lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>$headTitle</title>
                        <meta name='viewport' content='width=device-width, initial-scale=1'>
                        <!-- Favicon, robots, description,keywords -->
                        <link rel='shortcut icon' type='image/x-icon' href='./img/engranet/logo.jpg'> 
                        <meta name='robots' content='index,follow'>
                        <meta name='description' content='$headDescription'>
                        <meta name='keywords' content='$headKeywords'>
                        <!-- Favicon, robots, description,keywords -->
                        <!-- Link css, js -->
                        <link rel='stylesheet' href='css/bootstrap.min.css'>
                        <link rel='stylesheet' href='css/animate.min.css'>
                        <link rel='stylesheet' href='css/meanmenu.css'>
                        <link rel='stylesheet' href='css/magnific-popup.css'>
                        <link rel='stylesheet' href='css/owl.carousel.min.css'>
                        <link rel='stylesheet' href='css/font-awesome.min.css'>
                        <link rel='stylesheet' href='css/et-line-icon.css'>
                        <link rel='stylesheet' href='css/reset.css'>
                        <link rel='stylesheet' href='css/ionicons.min.css'>
                        <link rel='stylesheet' href='css/material-design-iconic-font.min.css'>
                        <link rel='stylesheet' href='css/style.css'>
                        <link rel='stylesheet' href='css/responsive.css'>
                        <script src='js/vendor/modernizr-3.11.2.min.js'></script>
                        <!-- Link css, js -->
                        $headPlugins
                    </head>
                    <body>
                        <header class='top'>
                            <div class='header-top'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-12 col-sm-12'>
                                            <div class='header-top-left'>
                                                <p> 
                                                    $bodyFooterTitleContacto
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_uno'>$bodyFooterTelefonoNegocio_uno</a> /
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_dos'>$bodyFooterTelefonoNegocio_uno</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='header-area two header-sticky'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-3 col-sm-5 col-6'>
                                            <div class='logo'>
                                                <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome' /></a>
                                            </div>
                                        </div>
                                        <div class='col-md-9 col-sm-7 col-6'>
                                            <div class='content-wrapper text-end'>
                                                <!-- Main Menu Start -->
                                                <div class='main-menu'>
                                                    <nav>
                                                        <ul>
                                                            <li><a class='nav-link' href='index.html'>Inicio</a></li>
                                                            <li><a class='nav-link' href='acerca.html'>Acerca de</a></li>
                                                            <li><a class='nav-link' href='servicios.html'>Servicios</a></li>
                                                            <li><a class='nav-link' href='blog-lista.php'>blog</a></li>
                                                            <li><a class='nav-link' href='contacto.html'>Contacto</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-12'>
                                            <div class='mobile-menu hidden-sm'></div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- Header Area End -->
        
                        <!-- Banner Area Start -->
                        <div class='banner-area-wrapper'>
                            <div class='banner-area text-center'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <div class='banner-content-wrapper'>
                                                <div class='banner-content'>
                                                    <h2>$title_componenteAS1</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Banner Area End -->

                        <!-- About Start -->
                        <div class='about-area pt-145 pb-155'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-md-6 col-sm-6'>
                                        <div class='about-content'>
                                            <h2>$title_componenteAN1</h2>
                                            <p>$description_componenteAN1</p>
                                            <a class='default-btn' href='$action_btn_linkAN1' target='_blank' style='background-color: #229655;'>$title_btn_actionAN1</a>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-sm-6'>
                                        <div class='about-img'>
                                            <img src='$imagen_componenteAN1' alt='about'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- About End -->

                        <!-- Principales Clientes Start-->
                        <div class='event-area two text-center pt-100 pb-145'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='section-title'>
                                            <img src='img/icon/clientes.png' alt='section-title'>
                                            <h2>PRINCIPALESS CLIENTES</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-6'>
                                        <div class='single-event mb-35'>
                                            <div class='event-img'>
                                                <a href='$action_btn_linkSC1'><img src='$imagen_componenteSC1' alt='event'></a>
                                            </div>
                                        </div>
                                        <div class='single-event mb-35 mb-md-0'>
                                            <div class='event-img'>
                                                <a href='$action_btn_linkSC2'><img src='$imagen_componenteSC2' alt='event'></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-lg-6'>
                                        <div class='single-event mb-35'>
                                            <div class='event-img'>
                                                <a href='$action_btn_linkSC3'><img src='$imagen_componenteSC3' alt='event'></a>
                                            </div>
                                        </div>
                                        <div class='single-event'>
                                            <div class='event-img'>
                                                <a href='$action_btn_linkSC4'><img src='$imagen_componenteSC4' alt='event'></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-lg-6'>
                                        <div class='single-event mb-35'>
                                            <div class='event-img'>
                                                <a href='$action_btn_linkSC5'><img src='$imagen_componenteSC5' alt='event'></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Principales Clientes End-->

                        <!-- Teacher Start -->
                        <div class='teacher-area pb-150'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='section-title text-center'>
                                            <img src='img/icon/team.png' alt='title'>
                                            <h2>Nuestro equipo</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-6 col-sm-6'>
                                        <div class='single-teacher'>
                                            <div class='single-teacher-img'>
                                                <img src='$imagen_componenteST1' alt='teacher'>
                                            </div>
                                            <div class='single-teacher-content text-center'>
                                                <h2>$title_componenteST1</h2>
                                                <h4>$title_btn_actionST1</h4>
                                                <ul>
                                                    <li>
                                                        <p>
                                                            $description_componenteST1
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-lg-6 col-sm-6'>
                                        <div class='single-teacher'>
                                            <div class='single-teacher-img'>
                                                <img src='$imagen_componenteST2' alt='teacher'>
                                            </div>
                                            <div class='single-teacher-content text-center'>
                                                <h2>$title_componenteST2</h2>
                                                <h4>$title_btn_actionST2</h4>
                                                <ul>
                                                    <li>
                                                        <p>
                                                            $description_componenteST2
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Teacher End -->

                        <!-- Subscribe Start -->
                        <div class='subscribe-area pt-60 pb-70'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-lg-8 offset-lg-2'>
                                        <div class='subscribe-content section-title text-center'>
                                            <h2>$title_componenteFA1</h2>
                                            <p>$description_componenteFA1</p>
                                        </div>
                                        <div class='newsletter-form mc_embed_signup'>
                                            <form class='formSucriptor' action='registroweb.php' method='post'>
                                                <div id='mc_embed_signup_scroll' class='mc-form'> 
        
                                                    <input type='email' value='' name='correo' class='email'  placeholder='Introduzca su dirección de correo electrónico' required>
                                                    <input type='text' name='nombre' value='Suscriptor' hidden>
                                                    <input type='text' name='telefono' value='Suscriptor' hidden>
                                                    <input type='text' name='mensaje' value='Suscriptor' hidden>
        
                                                    <button id='mc-embedded-subscribe' class='default-btn' type='submit' name='subscribe'><span>$title_btn_actionFA1</span></button> 
                                                </div>    
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Subscribe End -->
        
                        <!-- Footer Start -->
                        <footer class='footer-area'>
                            <div class='main-footer'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget pr-60'>
                                                <div class='footer-logo pb-25'>
                                                    <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome'></a>
                                                </div>
                                                <p>$bodyFooterSlogan</p>
                                                <div class='footer-social'>
                                                    <ul>
                                                        <li><a href='$bodyFooterLinkFacebook' target='_blank'><i class='zmdi zmdi-facebook'></i></a></li>
                                                        <!--<li><a href='https://twitter.com/devitemsllc'><i class='zmdi zmdi-instagram'></i></a></li> -->
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget'>
                                                <h3>$bodyFooterTitleContacto</h3>
                                                <p>$bodyFooterDireccionNegocio_uno</p>
                                                <p>$bodyFooterDireccionNegocio_dos</p>
                                                <p>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_uno' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a>
                                                    <br>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_dos' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a></p>
                                                <!-- <p>$bodyFooterEmailNegocio_uno</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class='footer-bottom text-center'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <p>$bodyFooterCopyright</p>
                                        </div> 
                                    </div>
                                </div>    
                            </div>
                        </footer>
                        <!-- Footer End -->
                        $bodyheadFooterScript
                        <script src='js/vendor/jquery-3.6.0.min.js'></script>
                        <script src='js/vendor/jquery-migrate-3.3.2.min.js'></script>
                        <script src='js/bootstrap.bundle.min.js'></script>
                        <script src='js/jquery.meanmenu.js'></script>
                        <script src='js/jquery.magnific-popup.js'></script>
                        <script src='js/ajax-mail.js'></script>
                        <script src='js/owl.carousel.min.js'></script>
                        <script src='js/jquery.mb.YTPlayer.js'></script>
                        <script src='js/jquery.nicescroll.min.js'></script>
                        <script src='js/plugins.js'></script>
                        <script src='js/main.js'></script>
                        $bodybtnWhatsapp
                    </body>
                </html>
            ";
            $Ruta = '../'.$filePatchServer.$fileNameWeb;
            //echo $Ruta;
            if (file_put_contents($Ruta, $PageWebFile)) {
                header('Location: ../viewWebLista.php'); // Redireccionar a la página principal después de actualizar el registro
                exit();
            } else {
                return  'Hubo un error al crear el archivo.';
            }
            break;
        case 3:
            $sqlContenidoArea_Start = "SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'Area_Start'";
            $dataArea_Start = $conn->query($sqlContenidoArea_Start);
            if ($dataArea_Start->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $dataArea_Start->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteAS1 =  $resultados[0]['idComponente'];
                $imagen_componenteAS1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteAS1 =  $resultados[0]['title_componente'];
                $description_componenteAS1 =  $resultados[0]['description_componente'];
                $title_btn_actionAS1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkAS1 =  $resultados[0]['action_btn_link'];
                $estado_componenteAS1 =  $resultados[0]['estado_componente'];
                $page_seccionAS1 =  $resultados[0]['page_seccion'];
                $type_componenteAS1 =  $resultados[0]['type_componente'];
            }

            $sqlContenidoform_actions_text="SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'form_actions_text'";
            $dataform_actions_text = $conn->query($sqlContenidoform_actions_text);
            if ($dataform_actions_text->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $dataform_actions_text->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteFA1 =  $resultados[0]['idComponente'];
                $imagen_componenteFA1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteFA1 =  $resultados[0]['title_componente'];
                $description_componenteFA1 =  $resultados[0]['description_componente'];
                $title_btn_actionFA1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkFA1 =  $resultados[0]['action_btn_link'];
                $estado_componenteFA1 =  $resultados[0]['estado_componente'];
                $page_seccionFA1 =  $resultados[0]['page_seccion'];
                $type_componenteFA1 =  $resultados[0]['type_componente'];
            }

            $sqlContenidobodysectionServicio = "SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'bodysectionServicio'";
            $databodysectionServicio = $conn->query($sqlContenidobodysectionServicio);
            if ($databodysectionServicio->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionServicio->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteSS1 =  $resultados[0]['idComponente'];
                $imagen_componenteSS1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteSS1 =  $resultados[0]['title_componente'];
                $description_componenteSS1 =  $resultados[0]['description_componente'];
                $title_btn_actionSS1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkSS1 =  $resultados[0]['action_btn_link'];
                $estado_componenteSS1 =  $resultados[0]['estado_componente'];
                $page_seccionSS1 =  $resultados[0]['page_seccion'];
                $type_componenteSS1 =  $resultados[0]['type_componente'];
            }
            if ($databodysectionServicio->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionServicio->fetch_assoc();

                $resultados[1] = $row;
                $idComponenteSS2 =  $resultados[1]['idComponente'];
                $imagen_componenteSS2 =  'data:image/jpeg;base64,'.$resultados[1]['imagen_componente'];
                $title_componenteSS2 =  $resultados[1]['title_componente'];
                $description_componenteSS2 =  $resultados[1]['description_componente'];
                $title_btn_actionSS2 =  $resultados[1]['title_btn_action'];
                $action_btn_linkSS2 =  $resultados[1]['action_btn_link'];
                $estado_componenteSS2 =  $resultados[1]['estado_componente'];
                $page_seccionSS2 =  $resultados[1]['page_seccion'];
                $type_componenteSS2 =  $resultados[1]['type_componente'];
            }
            if ($databodysectionServicio->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionServicio->fetch_assoc();

                $resultados[2] = $row;
                $idComponenteSS3 =  $resultados[2]['idComponente'];
                $imagen_componenteSS3 =  'data:image/jpeg;base64,'.$resultados[2]['imagen_componente'];
                $title_componenteSS3 =  $resultados[2]['title_componente'];
                $description_componenteSS3 =  $resultados[2]['description_componente'];
                $title_btn_actionSS3 =  $resultados[2]['title_btn_action'];
                $action_btn_linkSS3 =  $resultados[2]['action_btn_link'];
                $estado_componenteSS3 =  $resultados[2]['estado_componente'];
                $page_seccionSS3 =  $resultados[2]['page_seccion'];
                $type_componenteSS3 =  $resultados[2]['type_componente'];
            }

            $PageWebFile = "
                <!doctype html>
                <html class='no-js' lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>$headTitle</title>
                        <meta name='viewport' content='width=device-width, initial-scale=1'>
                        <!-- Favicon, robots, description,keywords -->
                        <link rel='shortcut icon' type='image/x-icon' href='./img/engranet/logo.jpg'> 
                        <meta name='robots' content='index,follow'>
                        <meta name='description' content='$headDescription'>
                        <meta name='keywords' content='$headKeywords'>
                        <!-- Favicon, robots, description,keywords -->
                        <!-- Link css, js -->
                        <link rel='stylesheet' href='css/bootstrap.min.css'>
                        <link rel='stylesheet' href='css/animate.min.css'>
                        <link rel='stylesheet' href='css/meanmenu.css'>
                        <link rel='stylesheet' href='css/magnific-popup.css'>
                        <link rel='stylesheet' href='css/owl.carousel.min.css'>
                        <link rel='stylesheet' href='css/font-awesome.min.css'>
                        <link rel='stylesheet' href='css/et-line-icon.css'>
                        <link rel='stylesheet' href='css/reset.css'>
                        <link rel='stylesheet' href='css/ionicons.min.css'>
                        <link rel='stylesheet' href='css/material-design-iconic-font.min.css'>
                        <link rel='stylesheet' href='css/style.css'>
                        <link rel='stylesheet' href='css/responsive.css'>
                        <script src='js/vendor/modernizr-3.11.2.min.js'></script>
                        <!-- Link css, js -->
                        $headPlugins
                    </head>
                    <body>
                        <header class='top'>
                            <div class='header-top'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-12 col-sm-12'>
                                            <div class='header-top-left'>
                                                <p> 
                                                    $bodyFooterTitleContacto
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_uno'>$bodyFooterTelefonoNegocio_uno</a> /
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_dos'>$bodyFooterTelefonoNegocio_uno</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='header-area two header-sticky'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-3 col-sm-5 col-6'>
                                            <div class='logo'>
                                                <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome' /></a>
                                            </div>
                                        </div>
                                        <div class='col-md-9 col-sm-7 col-6'>
                                            <div class='content-wrapper text-end'>
                                                <!-- Main Menu Start -->
                                                <div class='main-menu'>
                                                    <nav>
                                                        <ul>
                                                            <li><a class='nav-link' href='index.html'>Inicio</a></li>
                                                            <li><a class='nav-link' href='acerca.html'>Acerca de</a></li>
                                                            <li><a class='nav-link' href='servicios.html'>Servicios</a></li>
                                                            <li><a class='nav-link' href='blog-lista.php'>blog</a></li>
                                                            <li><a class='nav-link' href='contacto.html'>Contacto</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-12'>
                                            <div class='mobile-menu hidden-sm'></div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- Header Area End -->
                        
                        <!-- Banner Area Start -->
                        <div class='banner-area-wrapper'>
                            <div class='banner-area text-center'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <div class='banner-content-wrapper'>
                                                <div class='banner-content'>
                                                    <h2>$title_componenteAS1</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Banner Area End -->
                
                        <!-- Course Start -->
                        <div class='course-area pt-150 pb-150'>
                            <div class='container'>    
                            <div class='row'>
                                <div class='col-lg-4 col-md-6'>
                                    <div class='single-course mb-70'>
                                        <div class='course-img'>
                                            <a href='$action_btn_linkSS1'><img src='$imagen_componenteSS1' alt='course'>
                                                <div class='course-hover'>
                                                    <i class='fa fa-link'></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class='course-content'>
                                            <h3><a href='$action_btn_linkSS1'>$title_componenteSS1</a></h3>
                                            <p>$description_componenteSS1</p>
                                            <a class='default-btn' href='$action_btn_linkSS1'>$title_btn_actionSS1</a>
                                        </div>   
                                    </div>
                                </div>
                                <div class='col-lg-4 col-md-6'>
                                    <div class='single-course mb-70'>
                                        <div class='course-img'>
                                            <a href='$action_btn_linkSS2'><img src='$imagen_componenteSS2' alt='course'>
                                                <div class='course-hover'>
                                                    <i class='fa fa-link'></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class='course-content'>
                                            <h3><a href='$action_btn_linkSS2'>$title_componenteSS2</a></h3>
                                            <p>$description_componenteSS2</p>
                                            <a class='default-btn' href='$action_btn_linkSS2'>$title_btn_actionSS2</a>
                                        </div>   
                                    </div>
                                </div>
                                <div class='col-lg-4 col-md-6'>
                                    <div class='single-course mb-70'>
                                        <div class='course-img'>
                                            <a href='$action_btn_linkSS3'><img src='$imagen_componenteSS3' alt='course'>
                                                <div class='course-hover'>
                                                    <i class='fa fa-link'></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class='course-content'>
                                            <h3><a href='$action_btn_linkSS3'>$title_componenteSS3</a></h3>
                                            <p>$description_componenteSS3</p>
                                            <a class='default-btn' href='$action_btn_linkSS3'>$title_btn_actionSS3</a>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div> 
                        </div>       
                        <!-- Course End -->

                        <!-- Subscribe Start -->
                        <div class='subscribe-area pt-60 pb-70'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-lg-8 offset-lg-2'>
                                        <div class='subscribe-content section-title text-center'>
                                            <h2>$title_componenteFA1</h2>
                                            <p>$description_componenteFA1</p>
                                        </div>
                                        <div class='newsletter-form mc_embed_signup'>
                                            <form class='formSucriptor' action='registroweb.php' method='post'>
                                                <div id='mc_embed_signup_scroll' class='mc-form'> 
        
                                                    <input type='email' value='' name='correo' class='email'  placeholder='Introduzca su dirección de correo electrónico' required>
                                                    <input type='text' name='nombre' value='Suscriptor' hidden>
                                                    <input type='text' name='telefono' value='Suscriptor' hidden>
                                                    <input type='text' name='mensaje' value='Suscriptor' hidden>
        
                                                    <button id='mc-embedded-subscribe' class='default-btn' type='submit' name='subscribe'><span>$title_btn_actionFA1</span></button> 
                                                </div>    
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Subscribe End -->
        
                        <!-- Footer Start -->
                        <footer class='footer-area'>
                            <div class='main-footer'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget pr-60'>
                                                <div class='footer-logo pb-25'>
                                                    <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome'></a>
                                                </div>
                                                <p>$bodyFooterSlogan</p>
                                                <div class='footer-social'>
                                                    <ul>
                                                        <li><a href='$bodyFooterLinkFacebook' target='_blank'><i class='zmdi zmdi-facebook'></i></a></li>
                                                        <!--<li><a href='https://twitter.com/devitemsllc'><i class='zmdi zmdi-instagram'></i></a></li> -->
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget'>
                                                <h3>$bodyFooterTitleContacto</h3>
                                                <p>$bodyFooterDireccionNegocio_uno</p>
                                                <p>$bodyFooterDireccionNegocio_dos</p>
                                                <p>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_uno' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a>
                                                    <br>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_dos' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a></p>
                                                <!-- <p>$bodyFooterEmailNegocio_uno</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class='footer-bottom text-center'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <p>$bodyFooterCopyright</p>
                                        </div> 
                                    </div>
                                </div>    
                            </div>
                        </footer>
                        <!-- Footer End -->
                        $bodyheadFooterScript
                        <script src='js/vendor/jquery-3.6.0.min.js'></script>
                        <script src='js/vendor/jquery-migrate-3.3.2.min.js'></script>
                        <script src='js/bootstrap.bundle.min.js'></script>
                        <script src='js/jquery.meanmenu.js'></script>
                        <script src='js/jquery.magnific-popup.js'></script>
                        <script src='js/ajax-mail.js'></script>
                        <script src='js/owl.carousel.min.js'></script>
                        <script src='js/jquery.mb.YTPlayer.js'></script>
                        <script src='js/jquery.nicescroll.min.js'></script>
                        <script src='js/plugins.js'></script>
                        <script src='js/main.js'></script>
                        $bodybtnWhatsapp
                    </body>
                </html>
            ";
            $Ruta = '../'.$filePatchServer.$fileNameWeb;
            //echo $Ruta;
            if (file_put_contents($Ruta, $PageWebFile)) {
                header('Location: ../viewWebLista.php'); // Redireccionar a la página principal después de actualizar el registro
                exit();
            } else {
                return  'Hubo un error al crear el archivo.';
            }
        break;
        case 4:
            $sqlContenidoArea_Start = "SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'Area_Start'";
            $dataArea_Start = $conn->query($sqlContenidoArea_Start);
            if ($dataArea_Start->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $dataArea_Start->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteAS1 =  $resultados[0]['idComponente'];
                $imagen_componenteAS1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteAS1 =  $resultados[0]['title_componente'];
                $description_componenteAS1 =  $resultados[0]['description_componente'];
                $title_btn_actionAS1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkAS1 =  $resultados[0]['action_btn_link'];
                $estado_componenteAS1 =  $resultados[0]['estado_componente'];
                $page_seccionAS1 =  $resultados[0]['page_seccion'];
                $type_componenteAS1 =  $resultados[0]['type_componente'];
            }

            $sqlContenidoform_actions_text="SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'form_actions_text'";
            $dataform_actions_text = $conn->query($sqlContenidoform_actions_text);
            if ($dataform_actions_text->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $dataform_actions_text->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteFA1 =  $resultados[0]['idComponente'];
                $imagen_componenteFA1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteFA1 =  $resultados[0]['title_componente'];
                $description_componenteFA1 =  $resultados[0]['description_componente'];
                $title_btn_actionFA1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkFA1 =  $resultados[0]['action_btn_link'];
                $estado_componenteFA1 =  $resultados[0]['estado_componente'];
                $page_seccionFA1 =  $resultados[0]['page_seccion'];
                $type_componenteFA1 =  $resultados[0]['type_componente'];
            }

            $PageWebFile = "
                <!doctype html>
                <html class='no-js' lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>$headTitle</title>
                        <meta name='viewport' content='width=device-width, initial-scale=1'>
                        <!-- Favicon, robots, description,keywords -->
                        <link rel='shortcut icon' type='image/x-icon' href='./img/engranet/logo.jpg'> 
                        <meta name='robots' content='index,follow'>
                        <meta name='description' content='$headDescription'>
                        <meta name='keywords' content='$headKeywords'>
                        <!-- Favicon, robots, description,keywords -->
                        <!-- Link css, js -->
                        <link rel='stylesheet' href='css/bootstrap.min.css'>
                        <link rel='stylesheet' href='css/animate.min.css'>
                        <link rel='stylesheet' href='css/meanmenu.css'>
                        <link rel='stylesheet' href='css/magnific-popup.css'>
                        <link rel='stylesheet' href='css/owl.carousel.min.css'>
                        <link rel='stylesheet' href='css/font-awesome.min.css'>
                        <link rel='stylesheet' href='css/et-line-icon.css'>
                        <link rel='stylesheet' href='css/reset.css'>
                        <link rel='stylesheet' href='css/ionicons.min.css'>
                        <link rel='stylesheet' href='css/material-design-iconic-font.min.css'>
                        <link rel='stylesheet' href='css/style.css'>
                        <link rel='stylesheet' href='css/responsive.css'>
                        <script src='js/vendor/modernizr-3.11.2.min.js'></script>
                        <!-- Link css, js -->
                        $headPlugins
                    </head>
                    <body>
                        <header class='top'>
                            <div class='header-top'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-12 col-sm-12'>
                                            <div class='header-top-left'>
                                                <p> 
                                                    $bodyFooterTitleContacto
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_uno'>$bodyFooterTelefonoNegocio_uno</a> /
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_dos'>$bodyFooterTelefonoNegocio_uno</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='header-area two header-sticky'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-3 col-sm-5 col-6'>
                                            <div class='logo'>
                                                <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome' /></a>
                                            </div>
                                        </div>
                                        <div class='col-md-9 col-sm-7 col-6'>
                                            <div class='content-wrapper text-end'>
                                                <!-- Main Menu Start -->
                                                <div class='main-menu'>
                                                    <nav>
                                                        <ul>
                                                            <li><a class='nav-link' href='index.html'>Inicio</a></li>
                                                            <li><a class='nav-link' href='acerca.html'>Acerca de</a></li>
                                                            <li><a class='nav-link' href='servicios.html'>Servicios</a></li>
                                                            <li><a class='nav-link' href='blog-lista.php'>blog</a></li>
                                                            <li><a class='nav-link' href='contacto.html'>Contacto</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-12'>
                                            <div class='mobile-menu hidden-sm'></div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- Header Area End -->

                        <!-- Banner Area Start -->
                        <div class='banner-area-wrapper'>
                            <div class='banner-area text-center'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <div class='banner-content-wrapper'>
                                                <div class='banner-content'>
                                                    <h2>$title_componenteAS1</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Banner Area End -->
                        
                        <!-- Course Start -->
                        <div class='course-area pt-150 pb-150'>
                            <div class='container'>   
                                <div class='row'>

                                </div>
                            </div> 
                        </div>    

                        <!-- Subscribe Start -->
                        <div class='subscribe-area pt-60 pb-70'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-lg-8 offset-lg-2'>
                                        <div class='subscribe-content section-title text-center'>
                                            <h2>$title_componenteFA1</h2>
                                            <p>$description_componenteFA1</p>
                                        </div>
                                        <div class='newsletter-form mc_embed_signup'>
                                            <form class='formSucriptor' action='registroweb.php' method='post'>
                                                <div id='mc_embed_signup_scroll' class='mc-form'> 
        
                                                    <input type='email' value='' name='correo' class='email'  placeholder='Introduzca su dirección de correo electrónico' required>
                                                    <input type='text' name='nombre' value='Suscriptor' hidden>
                                                    <input type='text' name='telefono' value='Suscriptor' hidden>
                                                    <input type='text' name='mensaje' value='Suscriptor' hidden>
        
                                                    <button id='mc-embedded-subscribe' class='default-btn' type='submit' name='subscribe'><span>$title_btn_actionFA1</span></button> 
                                                </div>    
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Subscribe End -->
        
                        <!-- Footer Start -->
                        <footer class='footer-area'>
                            <div class='main-footer'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget pr-60'>
                                                <div class='footer-logo pb-25'>
                                                    <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome'></a>
                                                </div>
                                                <p>$bodyFooterSlogan</p>
                                                <div class='footer-social'>
                                                    <ul>
                                                        <li><a href='$bodyFooterLinkFacebook' target='_blank'><i class='zmdi zmdi-facebook'></i></a></li>
                                                        <!--<li><a href='https://twitter.com/devitemsllc'><i class='zmdi zmdi-instagram'></i></a></li> -->
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget'>
                                                <h3>$bodyFooterTitleContacto</h3>
                                                <p>$bodyFooterDireccionNegocio_uno</p>
                                                <p>$bodyFooterDireccionNegocio_dos</p>
                                                <p>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_uno' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a>
                                                    <br>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_dos' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a></p>
                                                <!-- <p>$bodyFooterEmailNegocio_uno</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class='footer-bottom text-center'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <p>$bodyFooterCopyright</p>
                                        </div> 
                                    </div>
                                </div>    
                            </div>
                        </footer>
                        <!-- Footer End -->
                        $bodyheadFooterScript
                        <script src='js/vendor/jquery-3.6.0.min.js'></script>
                        <script src='js/vendor/jquery-migrate-3.3.2.min.js'></script>
                        <script src='js/bootstrap.bundle.min.js'></script>
                        <script src='js/jquery.meanmenu.js'></script>
                        <script src='js/jquery.magnific-popup.js'></script>
                        <script src='js/ajax-mail.js'></script>
                        <script src='js/owl.carousel.min.js'></script>
                        <script src='js/jquery.mb.YTPlayer.js'></script>
                        <script src='js/jquery.nicescroll.min.js'></script>
                        <script src='js/plugins.js'></script>
                        <script src='js/main.js'></script>
                        $bodybtnWhatsapp
                    </body>
                </html>
            ";
            $Ruta = '../'.$filePatchServer.$PageWeb['fileNameWeb'].'.php';
            //echo $Ruta;
            if (file_put_contents($Ruta, $PageWebFile)) {
                header('Location: ../viewWebLista.php'); // Redireccionar a la página principal después de actualizar el registro
                exit();
            } else {
                return  'Hubo un error al crear el archivo.';
            }
            break;
        case 5:
            $sqlContenidoArea_Start = "SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'Area_Start'";
            $dataArea_Start = $conn->query($sqlContenidoArea_Start);
            if ($dataArea_Start->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $dataArea_Start->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteAS1 =  $resultados[0]['idComponente'];
                $imagen_componenteAS1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteAS1 =  $resultados[0]['title_componente'];
                $description_componenteAS1 =  $resultados[0]['description_componente'];
                $title_btn_actionAS1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkAS1 =  $resultados[0]['action_btn_link'];
                $estado_componenteAS1 =  $resultados[0]['estado_componente'];
                $page_seccionAS1 =  $resultados[0]['page_seccion'];
                $type_componenteAS1 =  $resultados[0]['type_componente'];
            }

            $sqlContenidoform_actions_text="SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'form_actions_text'";
            $dataform_actions_text = $conn->query($sqlContenidoform_actions_text);
            if ($dataform_actions_text->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $dataform_actions_text->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteFA1 =  $resultados[0]['idComponente'];
                $imagen_componenteFA1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteFA1 =  $resultados[0]['title_componente'];
                $description_componenteFA1 =  $resultados[0]['description_componente'];
                $title_btn_actionFA1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkFA1 =  $resultados[0]['action_btn_link'];
                $estado_componenteFA1 =  $resultados[0]['estado_componente'];
                $page_seccionFA1 =  $resultados[0]['page_seccion'];
                $type_componenteFA1 =  $resultados[0]['type_componente'];
            }

            $sqlContenidobodysectionAcercaNegocio ="SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilNegocio AND page_seccion = $idPageWeb AND type_componente = 'bodysectionAcercaNegocio'";
            $databodysectionAcercaNegocio = $conn->query($sqlContenidobodysectionAcercaNegocio);
            if ($databodysectionAcercaNegocio->num_rows > 0) {
                // Inicializa un arreglo para almacenar los resultados
                $resultados = array();
                // Itera a través de los resultados y almacénalos en el arreglo
                $row = $databodysectionAcercaNegocio->fetch_assoc();

                $resultados[0] = $row;
                $idComponenteAN1 =  $resultados[0]['idComponente'];
                $imagen_componenteAN1 =  'data:image/jpeg;base64,'.$resultados[0]['imagen_componente'];
                $title_componenteAN1 =  $resultados[0]['title_componente'];
                $description_componenteAN1 =  $resultados[0]['description_componente'];
                $title_btn_actionAN1 =  $resultados[0]['title_btn_action'];
                $action_btn_linkAN1 =  $resultados[0]['action_btn_link'];
                $estado_componenteAN1 =  $resultados[0]['estado_componente'];
                $page_seccionAN1 =  $resultados[0]['page_seccion'];
                $type_componenteAN1 =  $resultados[0]['type_componente'];
            }

            $PageWebFile = "
                <!doctype html>
                <html class='no-js' lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>$headTitle</title>
                        <meta name='viewport' content='width=device-width, initial-scale=1'>
                        <!-- Favicon, robots, description,keywords -->
                        <link rel='shortcut icon' type='image/x-icon' href='./img/engranet/logo.jpg'> 
                        <meta name='robots' content='index,follow'>
                        <meta name='description' content='$headDescription'>
                        <meta name='keywords' content='$headKeywords'>
                        <!-- Favicon, robots, description,keywords -->
                        <!-- Link css, js -->
                        <link rel='stylesheet' href='css/bootstrap.min.css'>
                        <link rel='stylesheet' href='css/animate.min.css'>
                        <link rel='stylesheet' href='css/meanmenu.css'>
                        <link rel='stylesheet' href='css/magnific-popup.css'>
                        <link rel='stylesheet' href='css/owl.carousel.min.css'>
                        <link rel='stylesheet' href='css/font-awesome.min.css'>
                        <link rel='stylesheet' href='css/et-line-icon.css'>
                        <link rel='stylesheet' href='css/reset.css'>
                        <link rel='stylesheet' href='css/ionicons.min.css'>
                        <link rel='stylesheet' href='css/material-design-iconic-font.min.css'>
                        <link rel='stylesheet' href='css/style.css'>
                        <link rel='stylesheet' href='css/responsive.css'>
                        <script src='js/vendor/modernizr-3.11.2.min.js'></script>
                        <!-- Link css, js -->
                        $headPlugins
                    </head>
                    <body>
                        <header class='top'>
                            <div class='header-top'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-12 col-sm-12'>
                                            <div class='header-top-left'>
                                                <p> 
                                                    $bodyFooterTitleContacto
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_uno'>$bodyFooterTelefonoNegocio_uno</a> /
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_dos'>$bodyFooterTelefonoNegocio_uno</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='header-area two header-sticky'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-3 col-sm-5 col-6'>
                                            <div class='logo'>
                                                <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome' /></a>
                                            </div>
                                        </div>
                                        <div class='col-md-9 col-sm-7 col-6'>
                                            <div class='content-wrapper text-end'>
                                                <!-- Main Menu Start -->
                                                <div class='main-menu'>
                                                    <nav>
                                                        <ul>
                                                            <li><a class='nav-link' href='index.html'>Inicio</a></li>
                                                            <li><a class='nav-link' href='acerca.html'>Acerca de</a></li>
                                                            <li><a class='nav-link' href='servicios.html'>Servicios</a></li>
                                                            <li><a class='nav-link' href='blog-lista.php'>blog</a></li>
                                                            <li><a class='nav-link' href='contacto.html'>Contacto</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-12'>
                                            <div class='mobile-menu hidden-sm'></div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- Header Area End -->
                        
                        <!-- Banner Area Start -->
                        <div class='banner-area-wrapper'>
                            <div class='banner-area text-center'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <div class='banner-content-wrapper'>
                                                <div class='banner-content'>
                                                    <h2>$title_componenteAS1</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Banner Area End -->

                        <!-- Contact Start -->
                        <div class='map-area'>
                            <!-- google-map-area start -->
                            <div class='google-map-area'>
                                <!--  Map Section -->
                                <div id='contacts' class='map-area'>
                                    <div>
                                        $description_componenteAN1
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='contact-area pt-150 pb-140'> 
                            <div class='container'>     
                                <div class='row'>
                                    <div class='col-lg-5 col-md-5'>
                                        <div class='contact-contents text-center'>
                                            <div class='single-contact mb-65'>
                                                <div class='contact-icon'>
                                                    <img src='img/contact/contact1.png' alt='contact'>
                                                </div>
                                                <div class='contact-add'>
                                                    <h3>Dirección</h3>
                                                    <p>$bodyFooterDireccionNegocio_uno</p>
                                                </div>
                                            </div>
                                            <div class='single-contact mb-65'>
                                                <div class='contact-icon'>
                                                    <img src='img/contact/contact1.png' alt='contact'>
                                                </div>
                                                <div class='contact-add'>
                                                    <h3>Dirección</h3>
                                                    <p>$bodyFooterDireccionNegocio_dos</p>
                                                </div>
                                            </div>
                                            <div class='single-contact mb-65'>
                                                <div class='contact-icon'>
                                                    <img src='img/contact/contact2.png' alt='contact'>
                                                </div>
                                                <div class='contact-add'>
                                                    <h3>Telefonos</h3>
                                                    <p><a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_uno'>$bodyFooterTelefonoNegocio_uno</a></p>
                                                    <p><a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_dos'>$bodyFooterTelefonoNegocio_dos</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class='col-lg-7 col-md-7'>
                                        <div class='reply-area'>
                                            <h3>$title_componenteFA1</h3>
                                            <p>$description_componenteFA1</p>

                                            <form class='formInteresado' action='registroweb.php' method='POST'>
                                                <div class='row'>
                                                    <div class='col-md-12'>
                                                        <p>Nombre completo</p>
                                                        <input type='text' name='nombre'>
                                                    </div>
                                                    <div class='col-md-12'>
                                                        <p>Correo Electronico</p>
                                                        <input type='text' name='correo'>
                                                    </div>
                                                    <div class='col-md-12'>
                                                        <p>Telefono</p>
                                                        <input type='text' name='telefono'>
                                                        <p>Mensaje</p>
                                                        <textarea name='mensaje' cols='15' rows='10'></textarea>
                                                    </div>
                                                </div>
                                                <button class='reply-btn' type='submit'><span>$title_btn_actionFA1</span></button>
                                                <p class='form-message'></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Contact End -->
        
                        <!-- Footer Start -->
                        <footer class='footer-area'>
                            <div class='main-footer'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget pr-60'>
                                                <div class='footer-logo pb-25'>
                                                    <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome'></a>
                                                </div>
                                                <p>$bodyFooterSlogan</p>
                                                <div class='footer-social'>
                                                    <ul>
                                                        <li><a href='$bodyFooterLinkFacebook' target='_blank'><i class='zmdi zmdi-facebook'></i></a></li>
                                                        <!--<li><a href='https://twitter.com/devitemsllc'><i class='zmdi zmdi-instagram'></i></a></li> -->
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget'>
                                                <h3>$bodyFooterTitleContacto</h3>
                                                <p>$bodyFooterDireccionNegocio_uno</p>
                                                <p>$bodyFooterDireccionNegocio_dos</p>
                                                <p>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_uno' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a>
                                                    <br>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_dos' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a></p>
                                                <!-- <p>$bodyFooterEmailNegocio_uno</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class='footer-bottom text-center'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <p>$bodyFooterCopyright</p>
                                        </div> 
                                    </div>
                                </div>    
                            </div>
                        </footer>
                        <!-- Footer End -->
                        $bodyheadFooterScript
                        <script src='js/vendor/jquery-3.6.0.min.js'></script>
                        <script src='js/vendor/jquery-migrate-3.3.2.min.js'></script>
                        <script src='js/bootstrap.bundle.min.js'></script>
                        <script src='js/jquery.meanmenu.js'></script>
                        <script src='js/jquery.magnific-popup.js'></script>
                        <script src='js/ajax-mail.js'></script>
                        <script src='js/owl.carousel.min.js'></script>
                        <script src='js/jquery.mb.YTPlayer.js'></script>
                        <script src='js/jquery.nicescroll.min.js'></script>
                        <script src='js/plugins.js'></script>
                        <script src='js/main.js'></script>
                        $bodybtnWhatsapp
                    </body>
                </html>
            ";
            $Ruta = '../'.$filePatchServer.$fileNameWeb;
            //echo $Ruta;
            if (file_put_contents($Ruta, $PageWebFile)) {
                header('Location: ../viewWebLista.php'); // Redireccionar a la página principal después de actualizar el registro
                exit();
            } else {
                return  'Hubo un error al crear el archivo.';
            }
            break;
        default:
            echo 'Opción no válida';
    }
?>


