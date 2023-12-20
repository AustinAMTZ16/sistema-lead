<?php
    require_once './connection/conexion.php';
    //require_once  './functions/BlogGenerarPath.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $Nombre_producto=$_POST['nombre_producto'];
        $Descripcion_producto=$_POST['descripcion_producto'];
        $Sku_producto=$_POST['sku_producto'];
        $Img_producto=base64_encode(file_get_contents($_FILES['img_producto']['tmp_name']));
        $Precio_compra=$_POST['precio_compra'];
        $Precio_venta=$_POST['precio_venta'];
        $Id_perfil_cliente=$_SESSION["isUser"];
        $Estatus_producto=$_POST['estatus_producto'];


        $sqlCrearProducto = "INSERT INTO tb_crm_productos (nombre_producto, descripcion_producto, sku_producto, img_producto, precio_compra, precio_venta, id_perfil_cliente, estatus_producto) VALUES ('$Nombre_producto', '$Descripcion_producto', '$Sku_producto', '$Img_producto', '$Precio_compra', '$Precio_venta', '$Id_perfil_cliente', '$Estatus_producto')";

        //echo 'sqlCrearProducto:'.$sqlCrearProducto;
        if ($conn->query($sqlCrearProducto) === TRUE) {
                //$file = GenerarPath($head_titulo, $BlogImagen64, $BlogTitulo, $BlogSubtitulo,$BlogCuerpo, $BlogSlogan, $nombreArchivo);
            header("Location: viewCRMLista.php"); // Redireccionar a la página principal después de crear el registro
            exit();
        } else {
            echo "Error al guardar " . $conn->error;
        }
    }
?>