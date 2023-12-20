<?php
    //Iniciar la sesión
    require_once './connection/conexion.php';

    $usuario = $_SESSION["usuario"];
    $isUser = $_SESSION["isUser"];

    $idEmpresaUser=$_SESSION["isUser"]; //Data Sesision IdUsuarioLogeado

    $sqlRelacionNegocio = "SELECT idPerfilNegocio, idEmpresaUser FROM tb_cms_perfil_negocio WHERE idEmpresaUser = $idEmpresaUser";
    $result = $conn->query($sqlRelacionNegocio); 

    if($result->num_rows > 0){
            $fila = $result->fetch_assoc();
            $idPerfilWeb = $fila['idEmpresaUser']; //(Se obtine idPerfilNegocio)
            //echo 'Sesion Usuario: ' . $idEmpresaUser . " Formulario Page Web: ". $idPageWeb . "SQL PerfilWeb" . $idPerfilWeb;
            $sqlListaProductos = " SELECT * FROM tb_crm_productos WHERE id_perfil_cliente = $idPerfilWeb";

            $ListaProductos = $conn->query($sqlListaProductos);
    }