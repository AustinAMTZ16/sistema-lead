<?php
    //Iniciar la sesión
    require_once './../connection/conexion.php';

    $usuario = $_SESSION["usuario"];
    $isUser = $_SESSION["isUser"];

    // Obtener todos los registros de la base de datos P/Llenar tabla
    $sql = "SELECT 
                tp.idProspecto,
                tp.nombre,
                tp.apellidoPaterno,	
                tp.telefono,	
                tp.correo,
                tp.mensaje,
                tp.fechaNacimiento,
                tp.lugarNacimiento,
                tc.puntosRecompensa,
                tp.estadoSistema 
                FROM tb_prospecto tp
                LEFT JOIN tb_recompensa tc
                on tp.idProspecto = tc.idProspecto
                where dominioOrigen = '$usuario' 
                and estadoSistema = 'Activo'"; //'Falso'
    $result = $conn->query($sql);
    // Obtener todos los registros de la base de datos P/Obtener el logotipo base64
    $sqlLogotipo = "SELECT logotipoEmpresa FROM tb_empresa where id_login = $isUser";
    $arregloLogo = $conn->query($sqlLogotipo);
?>