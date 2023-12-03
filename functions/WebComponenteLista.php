<?php
    //Iniciar la sesión
    require_once './connection/conexion.php';

    $usuario = $_SESSION["usuario"];
    $isUser = $_SESSION["isUser"];

    $idEmpresaUser=$_SESSION["isUser"]; //Data Sesision IdUsuarioLogeado

    $sqlRelacionNegocio = "SELECT idPerfilNegocio FROM tb_cms_perfil_negocio WHERE idEmpresaUser = $idEmpresaUser";
    $result = $conn->query($sqlRelacionNegocio); 
    if($result->num_rows > 0){
            $fila = $result->fetch_assoc();
            $idPerfilWeb = $fila['idPerfilNegocio']; //(Se obtine idPerfilNegocio)
            //echo 'Sesion Usuario: ' . $idEmpresaUser . " Formulario Page Web: ". $idPageWeb . "SQL PerfilWeb" . $idPerfilWeb;
            $sqlListaComponentes = " SELECT * FROM tb_cms_componente_web WHERE idPerfilNegocio = $idPerfilWeb";

            $componente = $conn->query($sqlListaComponentes);
    }