<?php
    // Conectar a la base de datos (modifica con tus propios datos)
    require_once './connection/conexion.php';
    // Verificar si se han enviado datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_SESSION["usuario"];
        $isUser = $_SESSION["isUser"];

        // Recibir datos del formulario para tabla tb_crm_tickets
        $cliente = $_POST['cliente_id']; //SE RECIBE DEL FORMULARIO DE CATALOGO DE CLIENTES DE LA TABLA TB_PROSPECTOS
        $fecha_venta = " "; //FECHA SE GENERA EN AUTOMATICO POR LA BD 
        $total_ticket = 0 ;//SE OBTIENE DATO DEL CALCULO EN OPERACION
        $estado_ticket = $_POST['estado_ticket']; //SE RECIBE DEL FORMULARIO DE CATALOGO PENDIENTE-PAGADO-CANCELADO
        $metodo_pago = $_POST['metodo_pago']; //SE RECIBE DEL FORMUALRIO DE CATALOGO EFECTIVO-TDC-TDB

        // Recibir datos del formulario para tabla tb_crm_detalles_ticket   
        $tickt_id = "";//SE RECIBE DATO DESPUES DE AGREGAR TICKET sql_ticket
        $productos = $_POST['productos'];//SE RECIBE DATO DEL FORMULARIO TIPO DE DATO ARRAY
        $cantidades = $_POST['cantidades'];//SE RECIBE DATO DEL FORMULARIO TIPO DE DATO ARRAY
        $precio_unitario = 0; //SE OBTIENE DATO DEL CALCULO EN OPERACION
        $subtotal = 0;//SE OBTIENE DATO DEL CALCULO EN OPERACION
        $descuento = $_POST['descuentos'];//SE RECIBE DEL FORMULARIO RANGO DEL 0-100
        $impuesto = $_POST['impuestos'];//SE RECIBE DEL FORMULARIO RANGO DEL 0-100
        $total = 0;//SE OBTIENE DATO DEL CALCULO EN OPERACION

        $subtotal_descuento = 0;
        $total_total= 0;
        
        // echo    'Cliente: ' . $cliente . 
        //         '<br>Estado: ' . $estado_ticket .
        //         '<br>Metodo: ' . $estado_ticket .
        //         '<br>Productos: ' . $productos[1] .
        //         '<br>Cantidad: ' . $cantidades[1] . '<br>';

        // Iniciar una transacción para asegurar la integridad de los datos
        $conn->autocommit(false);

        //echo $cliente . ' - ' . $estado_ticket . ' - ' . $metodo_pago . ' - ' . $productos[1] . ' - ' . $cantidades[1]  . ' - ' . $descuento . ' - ' . $impuesto;

        // Insertar el ticket de venta
        $sql_ticket = "INSERT INTO tb_crm_tickets (cliente_id, total_ticket, estado_ticket, metodo_pago, perfil_negocio_id) 
                     VALUES ('$cliente', 0, '$estado_ticket', '$metodo_pago', '$isUser')";
        //echo $sql_ticket.'<br>';

        if ($conn->query($sql_ticket) === TRUE) {
            // Obtener el ID del ticket recién insertado
            $ticket_id = $conn->insert_id;

            // Iterar a través de los productos y cantidades para insertar en Detalles del Ticket
            for ($i = 0; $i < count($productos); $i++) {
                $nombre_producto = $productos[$i];
                $cantidad = $cantidades[$i];

                // Consultar la base de datos para obtener el ID del producto
                $sql_producto = "SELECT id_producto, precio_venta FROM tb_crm_productos WHERE id_producto = '$nombre_producto'";
                $result = $conn->query($sql_producto);
                //echo $sql_producto.'<br>';

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    $producto_id = $row["id_producto"];
                    $precio_unitario = $row["precio_venta"];

                    // Calcular el subtotal para este producto
                    //Operacion para sacar Subtotal - Subtotal aplicando descuento - Subtotal aplicando imputos
                    //R= ((catidad * precio_unitario)/descuento_aplicado)*impuesto_aplicado

                    $subtotal = $cantidad * $precio_unitario;

                    if($descuento > 0){
                        $subtotal_descuento = ($subtotal / 100)*$descuento;
                        $total = $subtotal - $subtotal_descuento;
                    }else{
                        $total = $subtotal;
                    }

                    if($impuesto>0 && $descuento > 0){
                        $subtotal_impuesto = ($total * $impuesto)/100;
                        $total = $total + $subtotal_impuesto;
                        
                    }else if ($impuesto>0 && $descuento == 0){
                        $subtotal_impuesto = ($total * $impuesto)/100;
                        $total = $total + $subtotal_impuesto;
                    }

                    $total_total = $total_total+$total;

                    // Insertar el detalle del producto en Detalles del Ticket
                    $sql_detalle = "INSERT INTO tb_crm_detalles_ticket (ticket_id, producto_id, cantidad, precio_unitario, subtotal, descuentos, impuestos, total) VALUES ('$ticket_id', '$producto_id', '$cantidad', '$precio_unitario', '$subtotal', '$descuento', '$impuesto', '$total')";

                    //echo $sql_detalle .'<br>';

                    if (!$conn->query($sql_detalle)) {
                        $conn->rollback(); // Revertir la transacción si hay un error
                        echo "Error al insertar detalles del ticket: " . $conn->error;
                        exit();
                    }
                } else {
                    $conn->rollback(); // Revertir la transacción si hay un error
                    echo "Producto '$nombre_producto' no encontrado.";
                    exit();
                }
            }
            
            $sqlUpdateTicket = "UPDATE tb_crm_tickets SET total_ticket = '$total_total' WHERE id_ticket = '$ticket_id'";
            if ($conn->query($sqlUpdateTicket) === TRUE) {
                header("Location: viewCRMLista.php"); // Redireccionar a la página principal después de crear el registro
                $conn->commit(); // Confirmar la transacción si todo está correcto
            }else{
                echo "Error al insertar el ticket de venta: " . $conn->error;
            } 
            
        } else {
            echo "Error al insertar el ticket de venta: " . $conn->error;
        }

        // Cerrar la conexión a la base de datos
        $conn->close();
    }

    // Consulta para obtener los productos
    //$sqlCatalogoProductos = "SELECT id_producto, nombre_producto FROM tb_crm_productos";
    $isUser = $_SESSION["isUser"];
    $sqlCatalogoProductos = "SELECT id_producto, nombre_producto, precio_venta FROM tb_crm_productos WHERE id_perfil_cliente = $isUser";
    $result = $conn->query($sqlCatalogoProductos);
    $productos = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $productos[] = $row;
        }
    }
?>
