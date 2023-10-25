<?php
    //Iniciar la sesión
    require_once './connection/conexion.php';

    $usuario = $_SESSION["usuario"];
    $isUser = $_SESSION["isUser"];

    // Obtener todos los registros de la base de datos P/Llenar tabla
    $sqlProspectos = "SELECT 
                tp.idProspecto,
                tp.nombre,
                tp.apellidoPaterno,	
                tp.telefono,	
                tp.correo,
                tp.mensaje,
                tp.fechaNacimiento,
                tp.lugarNacimiento,
                tc.puntosRecompensa,
                tp.estadoSistema,
                tp.fechaCreacion
                FROM tb_prospecto tp
                LEFT JOIN tb_recompensa tc
                on tp.idProspecto = tc.idProspecto
                where dominioOrigen = '$usuario' 
                and estadoSistema = 'Activo'
    "; //'Falso'
    $result = $conn->query($sqlProspectos);

    $sqlBlog = "SELECT 
        idBlog,
        tituloBlog,
        decripcionBlog,
        imagenBlog,
        accionBlog,
        webOrigen
        FROM tb_blog tp
        where tp.webOrigen = '$usuario' 
        Order by tp.idBlog DESC
    ";
    $result2 = $conn->query($sqlBlog);
    
    // Obtener todos los registros de la base de datos P/Obtener el logotipo base64
    $sqlLogotipo = "SELECT logotipoEmpresa FROM tb_empresa where id_login = $isUser";
    $arregloLogo = $conn->query($sqlLogotipo);
?>