<?php
    require_once './connection/conexion.php';
    //require_once  './functions/BlogGenerarPath.php';
    
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

        $sqlValidacionNegocio = "SELECT idPerfilNegocio FROM tb_cms_perfil_negocio WHERE idEmpresaUser = $idEmpresaUser";
        $resultado = $conn->query($sqlValidacionNegocio);
        if ($resultado->num_rows > 0) {
            echo "<a href='./viewWebLista.php'>Existe registro</a>";
            exit();
        } else {
            $sqlPerfilNegocio = "INSERT INTO tb_cms_perfil_negocio (bodyFooterLogo, bodyFooterSlogan, bodyFooterLinkFacebook, bodyFooterLinkInstagram, bodyFooterLinkTwitter, bodyFooterLinkLinkedIn, bodyFooterLinkTikTok, bodyFooterTitleContacto, bodyFooterDireccionNegocio_uno, bodyFooterDireccionNegocio_dos, bodyFooterTelefonoNegocio_uno, bodyFooterTelefonoNegocio_dos, bodyFooterEmailNegocio_uno, bodyFooterEmailNegocio_dos, bodyFooterCopyright, idEmpresaUser) VALUES ('$bodyFooterLogo', '$bodyFooterSlogan', '$bodyFooterLinkFacebook', '$bodyFooterLinkInstagram', '$bodyFooterLinkTwitter', '$bodyFooterLinkLinkedIn', '$bodyFooterLinkTikTok', '$bodyFooterTitleContacto', '$bodyFooterDireccionNegocio_uno', '$bodyFooterDireccionNegocio_dos', '$bodyFooterTelefonoNegocio_uno', '$bodyFooterTelefonoNegocio_dos', '$bodyFooterEmailNegocio_uno', '$bodyFooterEmailNegocio_dos', '$bodyFooterCopyright', $idEmpresaUser)";
            if ($conn->query($sqlPerfilNegocio) === TRUE) {
                //$file = GenerarPath($head_titulo, $BlogImagen64, $BlogTitulo, $BlogSubtitulo,$BlogCuerpo, $BlogSlogan, $nombreArchivo);
                header("Location: viewWebLista.php"); // Redireccionar a la página principal después de crear el registro
                exit();
            } else {
                echo "Error al guardar " . $conn->error;
            }
        }
    }
?>

