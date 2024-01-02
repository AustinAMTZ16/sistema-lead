<?php
session_start();
require_once './functions/CRMVentaProductos.php';
// Cerrar la conexión
//$conn->close();
//validacion doble comprueba por url
// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION["usuario"])) {
    // Redireccionar al usuario a la página de inicio de sesión
    header("Location: ./index.php");
    exit();
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Empresa | MexiClientes</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="./img/favicon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/et-line-icon.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-3.11.2.min.js"></script>

    <link rel="stylesheet" href="css/dataTables.min.css">
    </link>
</head>

<body>
    <header class="top">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="header-top-left">
                            <!-- <p>HAVE ANY QUESTION ?  +880 5698  598  6587</p> -->
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="header-top-right text-end">
                            <ul>
                                <li><a style="color: white;">Sistema MexiClientes</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-area two header-sticky">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="panelEmpresa.php">
                                <?php
                                echo $_SESSION["imgEmpresa"];
                                ?>
                                <!--b>
                                    <?php //echo $_SESSION["usuario"];
                                    ?>
                                </b-->
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="content-wrapper text-end">
                            <div class="main-menu">
                                <nav>
                                    <ul>
                                        <li><a href="./panelEmpresa.php">Inicio</a>
                                        <li><a href="./viewProspectoLista.php">Prospectos</a>
                                        <li><a href="./viewBlogLista.php">Blog</a>
                                        <li><a href="./viewWebLista.php">Mi WEB</a>
                                        <li><a href="./viewCRMLista.php">CRM</a>
                                        <li><a href="">Cuenta</a>
                                            <ul>
                                                <li>
                                                    <a href="./functions/logout.php">Cerrar Sesión</a>
                                                    <!-- <a href="#">Cambiar clave</a>
                                                    <a href="#">Configuración</a> -->
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu hidden-sm"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Login start -->
    <div class="login-area pt-50 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-3 text-center">
                    <div class="login">
                        <div class="login-form-container">
                            <div class="login-text">
                                <h2>Registro de Venta</h2>
                                <span>Por favor de llenar todos los campos requeridos.</span>
                            </div>
                            <div class="login-form">
                                <!-- <input type="text" name="apellidoPaterno" id="apellidoPaterno" placeholder="Apellido Parteno del prospecto" pattern="{1,30}" title="El valor debe contener solo letras y números, y tener menos de 30 caracteres" required> -->
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <label>Cliente:</label>
                                    <?php
                                    // Obtener el usuario del registro a editar
                                    $usuario = $_SESSION["usuario"];
                                    $sqlCatalogoClientes = "SELECT idProspecto, nombre, apellidoPaterno, telefono, correo FROM tb_prospecto WHERE dominioOrigen = '$usuario'";
                                    $result = $conn->query($sqlCatalogoClientes);
                                    // Comprobar si hay resultados
                                    if ($result->num_rows > 0) {
                                        echo '<select name="cliente_id" class="form-select">'; // Comienza el elemento select
                                        echo '<option value="">Seleccione un cliente</option>'; // Opción por defecto

                                        // Iterar sobre los resultados y crear las opciones del select
                                        while ($row = $result->fetch_assoc()) {
                                            echo '<option value="' . $row['idProspecto'] . '">';
                                            echo $row['nombre'] . ' ' . $row['apellidoPaterno'] . ' - ' . $row['telefono'] . ' - ' . $row['correo'];
                                            echo '</option>';
                                        }

                                        echo '</select>'; // Cierra el elemento select
                                    } else {
                                        echo 'No se encontraron clientes.';
                                    }
                                    ?>
                                    <label>Estado ticket:</label>
                                    <select name="estado_ticket" class="form-select">
                                        <option selected>Seleccione un estado del ticket</option>
                                        <option value="1">1. Pendiente</option>
                                        <option value="2">2. Pagado</option>
                                        <option value="2">2. Cancelado</option>
                                    </select>
                                    <label>Metodo de pago:</label>
                                    <select name="metodo_pago" class="form-select">
                                        <option selected>Seleccione un metodo de pago</option>
                                        <option value="1">1. Efectivo</option>
                                        <option value="2">2. TDB</option>
                                        <option value="2">2. TDC</option>
                                    </select>

                                    <label>Descuento en caso de aplicar:</label>
                                    <input type="text" name="descuentos" value="0" placeholder="0%">
                                    <label>Impusto en caso de aplicar:</label>
                                    <input type="text" name="impuestos" value="0" placeholder="0%">
                                    <br><br><br><br>
                                    <div id="productos">
                                        <!-- Aquí se agregarán dinámicamente los campos de producto -->
                                        <!-- <label>Producto:</label>
                                        <input type="text" name="productos[]"> -->

                                        <?php
                                        // Obtener el usuario del registro a editar
                                        $isUser = $_SESSION["isUser"];
                                        $sqlCatalogoProductos = "SELECT id_producto, nombre_producto, precio_venta FROM tb_crm_productos WHERE id_perfil_cliente = $isUser";
                                        $result = $conn->query($sqlCatalogoProductos);
                                        //$usuario = $result->fetch_assoc();
                                        // Comprobar si hay resultados
                                        if ($result->num_rows > 0) {
                                            echo '<select name="productos[]" class="form-select">'; // Comienza el elemento select
                                            echo '<option value="">Seleccione un producto</option>'; // Opción por defecto

                                            // Iterar sobre los resultados y crear las opciones del select
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<option value="' . $row['id_producto'] . '">';
                                                echo $row['id_producto'] . ' - ' . $row['nombre_producto'] . ' $' . $row['precio_venta'];
                                                echo '</option>';
                                            }

                                            echo '</select>'; // Cierra el elemento select
                                        } else {
                                            echo 'No se encontraron productoss.';
                                        }
                                        ?>

                                        <label>Cantidad:</label>
                                        <input type="number" name="cantidades[]" value="1">
                                        <br><br>
                                    </div>
                                    <input type="button" class="default-btn" value="Agregar Producto" onclick="agregarProducto()">
                                    <!-- <input type="submit" value="Registrar Venta"> -->



                                    <div class="button-box">
                                        <button type="submit" class="default-btn" onclick="return confirm('¿Está seguro de Crear este registro?')">Registrar Venta</button>
                                    </div>
                                </form>
                                <div class="button-box">
                                    <button type="submit" class="default-btn" onclick="window.location.href='viewCRMLista.php'">Regresar al Menu</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login end -->

    <!-- Footer Start -->
    <footer class="footer-area">
        <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>Copyright © <a href="#">MexiClientes</a> 2023. All Right Reserved By <a href="#" target="_blank">Engranet.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="js/vendor/jquery-3.6.0.min.js"></script>
    <script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <script src="js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        $(document).ready(function() {
            $('#myTable2').DataTable();
        });
    </script>
    <script>
        //Función para agregar campos de producto dinámicamente
        function agregarProducto() {
            const divProductos = document.getElementById("productos");
            const nuevoProducto = document.createElement("div");

            nuevoProducto.innerHTML = `
            <?php
                                        // Obtener el usuario del registro a editar
                                        $isUser = $_SESSION["isUser"];
                                        $sqlCatalogoProductos = "SELECT id_producto, nombre_producto, precio_venta FROM tb_crm_productos WHERE id_perfil_cliente = $isUser";
                                        $result = $conn->query($sqlCatalogoProductos);
                                        //$usuario = $result->fetch_assoc();
                                        // Comprobar si hay resultados
                                        if ($result->num_rows > 0) {
                                            echo '<select name="productos[]" class="form-select">'; // Comienza el elemento select
                                            echo '<option value="">Seleccione un producto</option>'; // Opción por defecto

                                            // Iterar sobre los resultados y crear las opciones del select
                                            while ($row = $result->fetch_assoc()) {
                                                echo '<option value="' . $row['id_producto'] . '">';
                                                echo $row['id_producto'] . ' - ' . $row['nombre_producto'] . ' $' . $row['precio_venta'];
                                                echo '</option>';
                                            }

                                            echo '</select>'; // Cierra el elemento select
                                        } else {
                                            echo 'No se encontraron productoss.';
                                        }
                                        ?>
            <label>Cantidad:</label>
            <input type="number" name="cantidades[]" value="1">
            <br><br>
        `;

            divProductos.appendChild(nuevoProducto);
        }
    </script>

    <script>
        // function agregarProducto() {
        //     const divProductos = document.getElementById("productos");

        //     // Realizar solicitud AJAX para obtener los productos
        //     const xhr = new XMLHttpRequest();
        //     xhr.open('GET', 'obtener_productos.php', true);

        //     xhr.onload = function() {
        //         if (xhr.status === 200) {
        //             const productos = JSON.parse(xhr.responseText);

        //             // Agregar los productos al formulario dinámicamente
        //             productos.forEach(producto => {
        //                 const nuevoProducto = document.createElement("div");
        //                 nuevoProducto.innerHTML = `
        //                     <label>Producto:</label>
        //                     <input type="text" name="productos[]" value="${producto.nombre_producto}">
        //                     <label>Cantidad:</label>
        //                     <input type="number" name="cantidades[]" value="1">
        //                     <br><br>
        //                 `;
        //                 divProductos.appendChild(nuevoProducto);
        //             });
        //         } else {
        //             // Manejar errores si la solicitud no es exitosa
        //             console.error('Error al obtener productos');
        //         }
        //     };

        //     xhr.send();
        // }
    </script>

</body>

</html>