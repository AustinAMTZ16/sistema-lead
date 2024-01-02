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
            $sqlListaProductos = "SELECT DISTINCT t.id_ticket, 
                                        t.fecha_venta, 
                                        t.total_ticket, 
                                        t.estado_ticket,
                                        t.metodo_pago,
                                        p.nombre AS nombre_prospecto,
                                        p.telefono AS telefono_prospecto,
                                        p.correo AS correo_prospecto,
                                        pr.nombre_producto 
                                FROM tb_crm_tickets t
                                INNER JOIN tb_crm_detalles_ticket d ON t.id_ticket = d.ticket_id 
                                INNER JOIN tb_prospecto p ON t.cliente_id = p.idProspecto 
                                INNER JOIN tb_crm_productos pr ON d.producto_id = pr.id_producto 
                                WHERE t.perfil_negocio_id = '$idPerfilWeb';";

            $ListaProductos = $conn->query($sqlListaProductos);
    }