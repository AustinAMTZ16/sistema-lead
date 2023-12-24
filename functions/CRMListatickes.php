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
            $sqlListaProductos = "  SELECT DISTINCT ticket.id_ticket, 
                                                    ticket.fecha_venta, 
                                                    ticket.total_ticket, 
                                                    ticket.estado_ticket,
                                                    ticket.metodo_pago,
                                                    lead.nombre AS nombre_prospecto,
                                                    lead.telefono AS telefono_prospecto,
                                                    lead.correo AS correo_prospecto,
                                                    producto.nombre_producto 
                                    FROM tb_crm_tickets AS ticket 
                                    INNER JOIN tb_crm_detalles_ticket AS detalle ON ticket.id_ticket = detalle.ticket_id 
                                    INNER JOIN tb_prospecto AS lead ON ticket.cliente_id = lead.idProspecto 
                                    INNER JOIN tb_crm_productos AS producto ON detalle.producto_id = producto.id_producto 
                                    WHERE perfil_negocio_id = '$idPerfilWeb';";

            $ListaProductos = $conn->query($sqlListaProductos);
    }