<?php
    //Iniciar la sesión
    require_once './connection/conexion.php';

    $usuario = $_SESSION["usuario"];
    $isUser = $_SESSION["isUser"];

    // Ejecutar el procedimientos almacenado
    // TotalProspectosDominio
    // TotalProspectosDominioDia
    // TotalRegistrosActualizados	
    // TotalPOSTEstado
    $sqlTotalProspectosDominio = "CALL TotalProspectosDominio(?)";
    $sqlTotalBlogDominio = "CALL TotalBogDominio(?)";
    $sqlTotalProspectoDominioDia = "CALL TotalProspectosDominioDia(?)";
    $sqlTotalPOSTEstado = "CALL TotalPOSTEstado(?)";
    $sqlTotalRegistrosActualizados = "CALL TotalRegistrosActualizados(?)";
    // Consulta para contar registros con blogEstado = 0
    $sqlActivo = "SELECT COUNT(*) AS contador_activo FROM tb_blog WHERE webOrigen = ? AND blogEstado = 0";
    // Consulta para contar registros con blogEstado = 1
    $sqlOculto = "SELECT COUNT(*) AS contador_oculto FROM tb_blog WHERE webOrigen = ? AND blogEstado = 1";

    $sqlRegistrosFedback = "SELECT au.*, pro.*
                FROM tb_prospecto_auditoria au
                INNER JOIN tb_prospecto pro
                WHERE pro.idProspecto = au.idProspecto AND DATE(au.fecha_modificacion) = CURDATE()";


    $TotalProspectosDominio = $conn->prepare($sqlTotalProspectosDominio);
    $TotalProspectosDominio->bind_param("s", $usuario);
    $TotalProspectosDominio->execute();
    $TotalProspectosDominio->bind_result($total_prospectos);
    $TotalProspectosDominio->fetch();
    $TotalProspectosDominio->close();

    $TotalBlogDominio = $conn->prepare($sqlTotalBlogDominio);
    $TotalBlogDominio->bind_param("s", $usuario);
    $TotalBlogDominio->execute();
    $TotalBlogDominio->bind_result($total_blog);
    $TotalBlogDominio->fetch();
    $TotalBlogDominio->close();

    $TotalProspectoDominioDia = $conn->prepare($sqlTotalProspectoDominioDia);
    $TotalProspectoDominioDia -> bind_param("s", $usuario);
    $TotalProspectoDominioDia->execute();
    $TotalProspectoDominioDia->bind_result($total_blog_dia);
    $TotalProspectoDominioDia->fetch();
    $TotalProspectoDominioDia->close();

    // Preparar las consultas Activos
    $stmtActivo = $conn->prepare($sqlActivo);
    $stmtActivo->bind_param("s", $usuario);
    // Ejecutar la consulta para contar registros activos
    $stmtActivo->execute();
    $stmtActivo->bind_result($contador_activo);
    $stmtActivo->fetch();
    // Cerrar las consultas preparadas
    $stmtActivo->close();
    // Preparar las consultas Ocultas
    $stmtOculto = $conn->prepare($sqlOculto);
    $stmtOculto->bind_param("s", $usuario);
    // Ejecutar la consulta para contar registros ocultos
    $stmtOculto->execute();
    $stmtOculto->bind_result($contador_oculto);
    $stmtOculto->fetch();
    // Cerrar las consultas preparadas
    $stmtOculto->close();

    
    $TotalRegistrosActualizados = $conn->prepare($sqlTotalRegistrosActualizados);
    $TotalRegistrosActualizados -> bind_param("s", $usuario);
    $TotalRegistrosActualizados -> execute();
    $TotalRegistrosActualizados -> bind_result($RegistrosActualizados);
    $TotalRegistrosActualizados -> fetch();
    $TotalRegistrosActualizados -> close();

    $result = $conn->query($sqlRegistrosFedback);

    $conn->close();

?>



