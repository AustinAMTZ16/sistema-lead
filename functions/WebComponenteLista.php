<?php
    //Iniciar la sesión
    require_once './connection/conexion.php';

    $usuario = $_SESSION["usuario"];
    $isUser = $_SESSION["isUser"];

    $sqlListaComponentes = " SELECT * FROM tb_cms_componente_web";

    $componente = $conn->query($sqlListaComponentes);