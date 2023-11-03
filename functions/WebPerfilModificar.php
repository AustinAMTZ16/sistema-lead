<?php
    require_once './connection/conexion.php';
    // Obtener el ID del registro a editar
    $idEmpresaUser=$_SESSION["isUser"];
    // Consulta SQL para obtener el registro específico
    $sqlPerfilNegocio = "SELECT idPerfilNegocio, bodyFooterLogo, bodyFooterSlogan, bodyFooterLinkFacebook, bodyFooterLinkInstagram, bodyFooterLinkTwitter, bodyFooterLinkLinkedIn, bodyFooterLinkTikTok, bodyFooterTitleContacto, bodyFooterDireccionNegocio_uno, bodyFooterDireccionNegocio_dos, bodyFooterTelefonoNegocio_uno, bodyFooterTelefonoNegocio_dos, bodyFooterEmailNegocio_uno, bodyFooterEmailNegocio_dos, bodyFooterCopyright, idEmpresaUser FROM  tb_cms_perfil_negocio WHERE idEmpresaUser = $idEmpresaUser";
    $result = $conn->query($sqlPerfilNegocio);
    $Perfil = $result->fetch_assoc();

    //Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $idEmpresaUser=$_SESSION["isUser"];
        $bodyFooterLogo=base64_encode(file_get_contents($_FILES['bodyFooterLogo']['tmp_name']));
        $bodyFooterSlogan=$_POST['bodyFooterSlogan'];
        $bodyFooterLinkFacebook=$_POST['bodyFooterLinkFacebook'];
        $bodyFooterLinkInstagram=$_POST['bodyFooterLinkInstagram'];
        $bodyFooterLinkTwitter=$_POST['bodyFooterLinkTwitter'];
        $bodyFooterLinkLinkedIn=$_POST['bodyFooterLinkLinkedIn'];
        $bodyFooterLinkTikTok=$_POST['bodyFooterLinkTikTok'];
        $bodyFooterTitleContacto=$_POST['bodyFooterTitleContacto'];
        $bodyFooterDireccionNegocio_uno=$_POST['bodyFooterDireccionNegocio_uno'];
        $bodyFooterDireccionNegocio_dos=$_POST['bodyFooterDireccionNegocio_dos'];
        $bodyFooterTelefonoNegocio_uno=$_POST['bodyFooterTelefonoNegocio_uno'];
        $bodyFooterTelefonoNegocio_dos=$_POST['bodyFooterTelefonoNegocio_dos'];
        $bodyFooterEmailNegocio_uno=$_POST['bodyFooterEmailNegocio_uno'];
        $bodyFooterEmailNegocio_dos=$_POST['bodyFooterEmailNegocio_dos'];
        $bodyFooterCopyright=$_POST['bodyFooterCopyright'];

        //Consulta SQL para actualizar el registro (head_titulo, tituloBlog, BlogSubtitulo ,decripcionBlog, BlogSlogan, imagenBlog, FileTituloPOST, accionBlog, webOrigen)

        $sqlPerfilModificar = "UPDATE tb_cms_perfil_negocio SET bodyFooterLogo='$bodyFooterLogo', bodyFooterSlogan='$bodyFooterSlogan', bodyFooterLinkFacebook='$bodyFooterLinkFacebook', bodyFooterLinkInstagram='$bodyFooterLinkInstagram', bodyFooterLinkTwitter='$bodyFooterLinkTwitter', bodyFooterLinkLinkedIn='$bodyFooterLinkLinkedIn', bodyFooterLinkTikTok='$bodyFooterLinkTikTok', bodyFooterTitleContacto='$bodyFooterTitleContacto', bodyFooterDireccionNegocio_uno='$bodyFooterDireccionNegocio_uno', bodyFooterDireccionNegocio_dos='$bodyFooterDireccionNegocio_dos', bodyFooterTelefonoNegocio_uno='$bodyFooterTelefonoNegocio_uno', bodyFooterTelefonoNegocio_dos='$bodyFooterTelefonoNegocio_dos', bodyFooterEmailNegocio_uno='$bodyFooterEmailNegocio_uno', bodyFooterEmailNegocio_dos='$bodyFooterEmailNegocio_dos', bodyFooterCopyright='$bodyFooterCopyright', idEmpresaUser='$idEmpresaUser'";

        //echo $sqlBlogModificar;
        if ($conn->query($sqlPerfilModificar) === TRUE) {
            //$file = EditarPath($head_titulo, $BlogImagen64, $BlogTitulo, $BlogSubtitulo,$BlogCuerpo, $BlogSlogan, $nombreArchivo);
            header("Location: viewWebLista.php"); // Redireccionar a la página principal después de actualizar el registro
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }