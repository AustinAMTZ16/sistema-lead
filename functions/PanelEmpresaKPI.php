<?php
    //Iniciar la sesión
    require_once './connection/conexion.php';

    $usuario = $_SESSION["usuario"];
    $isUser = $_SESSION["isUser"];

    // Ejecutar el procedimientos almacenado
    $sqlTotalProspectosDominio = "CALL TotalProspectosDominio(?)";
    $sqlTotalBogDominio = "CALL TotalBogDominio(?)";

    $TotalProspectosDominio = $conn->prepare($sqlTotalProspectosDominio);
    $TotalProspectosDominio->bind_param("s", $usuario);
    $TotalProspectosDominio->execute();
    $TotalProspectosDominio->bind_result($total_prospectos);
    $TotalProspectosDominio->fetch();
    $TotalProspectosDominio->close();

    $sqlTotalBogDominio = $conn->prepare($sqlTotalBogDominio);
    $sqlTotalBogDominio->bind_param("s", $usuario);
    $sqlTotalBogDominio->execute();
    $sqlTotalBogDominio->bind_result($total_blog);
    $sqlTotalBogDominio->fetch();
    $sqlTotalBogDominio->close();
    
    // Cierra la conexión
    $conn->close();
    
?>