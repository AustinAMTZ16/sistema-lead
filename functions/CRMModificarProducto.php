<?php
    require_once './connection/conexion.php';

    $id_producto = $_GET["id_producto"]; //id del componente selecionando
    $idEmpresaUser=$_SESSION["isUser"]; //Data Sesision IdUsuarioLogeado
    //$idPerfilNegocio = 0; //sqlRelacionNegocio
    
    //echo 'Dato compartido: '. $id_producto ;

    $sqlComponenteSelecionado = "SELECT * FROM tb_crm_productos WHERE id_producto = $id_producto";
    $componenteSelecionado = $conn->query($sqlComponenteSelecionado); 
    if($componenteSelecionado->num_rows > 0){
        $fila = $componenteSelecionado->fetch_assoc(); 
        //echo $sqlComponenteSelecionado;
    }


    // if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //     if($_FILES['img_producto']==null){
    //         $Img_producto=base64_encode(file_get_contents($_FILES['img_producto']['tmp_name']));
    //     }else{
    //         $Img_producto=$fila['img_producto'];
    //     }

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if(isset($_FILES['img_producto']) && $_FILES['img_producto']['size'] > 0) {
                // Se ha enviado un nuevo archivo, procesa la imagen
            $Img_producto = base64_encode(file_get_contents($_FILES['img_producto']['tmp_name']));
            //echo 'Nueva imagen cargada.'.$Img_producto;
        } else {
                // No se envió un nuevo archivo, conserva la imagen existente de la base de datos
            $Img_producto = $_POST['repImagen'];
            //echo 'No se cargó una nueva imagen.'. $Img_producto;
        }
        //echo 'IMAGEN : '. $Img_producto;

        $Id_producto = $_POST['id_producto'];
        $Nombre_producto=$_POST['nombre_producto']; 
        $Descripcion_producto=$_POST['descripcion_producto']; 
        $Sku_producto=$_POST['sku_producto']; 
       
        $Precio_compra=$_POST['precio_compra']; 
        $Precio_venta=$_POST['precio_venta']; 
        $Estatus_producto=$_POST['estatus_producto']; 

        $sqlModificarProducto = "UPDATE tb_crm_productos SET nombre_producto='$Nombre_producto', descripcion_producto='$Descripcion_producto', sku_producto='$Sku_producto', img_producto='$Img_producto', precio_compra='$Precio_compra', precio_venta='$Precio_venta', estatus_producto='$Estatus_producto'  WHERE id_producto = $Id_producto";
        
        //echo 'Consulta: '. $sqlModificarProducto;
        if ($conn->query($sqlModificarProducto) === TRUE) {
            header("Location: viewCRMProductosLista.php"); // Redireccionar a la página principal después de actualizar el registro
            exit();

            //echo $sqlComponenteModificar;
        } else {
            echo "Error: " . $conn->error . $sqlComponenteModificar;
        }
    } 