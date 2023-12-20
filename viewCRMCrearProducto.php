<?php
    session_start();
    require_once './functions/CRMCrearProducto.php';
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
                                    <?php //echo $_SESSION["usuario"];?>
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
                                <h2>Crear nuevo producto</h2>
                                <span>Por favor de llenar todos los campos requeridos.</span>
                            </div>
                            <div class="login-form">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">

                                    <input type="text" name="nombre_producto" id="nombre_producto" placeholder="Nombre del producto" pattern="{1,100}" title="El valor debe contener solo letras y tener menos de 100 caracteres" required>

                                    <textarea name="descripcion_producto" id="descripcion_producto" cols="145" rows="10" class="miTextarea" placeholder="Descripción del producto"></textarea>

                                    <input type="text" name="sku_producto" id="sku_producto" placeholder="Stock del producto" pattern="[0-9]{1,5}" title="El valor debe contener solo números, y tener menos de 5 caracteres">

                                    <input type="file" name="img_producto" id="img_producto" require>

                                    <input type="text" name="precio_compra" id="precio_compra" placeholder="Precio de compra"  title="El valor debe contener solo números, y tener menos de 5 caracteres" required>

                                    <input type="text" name="precio_venta" id="precio_venta" placeholder="Precio de venta"  title="El valor debe contener solo números, y tener menos de 5 caracteres" required>
                                
                                    <select name="estatus_producto" class="form-select">
                                            <option selected>Seleccione el estatus del producto</option>
                                            <option value="1">Activo</option>
                                            <option value="2">Inhabilitado</option>
                                    </select>
                                    

                                    <div class="button-box">
                                        <button type="submit" class="default-btn" onclick="return confirm('¿Está seguro de Crear este registro?')">Crear producto</button>
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
    <script src="./js/tinymce/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: '#descripcion_producto', // Identificador del elemento HTML donde se mostrará el editor
            language: 'es_MX', // Idioma del editor
            branding: false,
            toolbar: 'undo redo | styles forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent ident',
            statusbar:false,
            promotion: false,
            //plugins : 'image',
        });
    </script>
</body>

</html>