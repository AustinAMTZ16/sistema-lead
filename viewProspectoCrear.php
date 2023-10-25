<?php
    // Iniciar la sesión
    session_start();
    require_once './functions/CrearProspecto.php';
    // Cerrar la conexión
    $conn->close();
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


    <link rel="stylesheet" href="./assessment/dataTables.min.css">
    </link>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header Area Start -->
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
                            <a href="index.html">
                            <?php
                                if ($arregloLogo->num_rows > 0) {
                                // Paso 3: Obtener el valor de la imagen en base64
                                $fila = $arregloLogo->fetch_assoc();
                                $imagenBase64 = $fila["logotipoEmpresa"];

                                // Paso 4: Mostrar la imagen en HTML utilizando la etiqueta <img>
                                echo '<img width="10%" src="data:image/jpeg;base64,' . $imagenBase64 . '" alt="Imagen en base64">';
                                } else {
                                echo "No se encontró la imagen en la base de datos.";
                                }
                            ?>
                            <b>
                                <?php echo $_SESSION["usuario"];?>
                            </b>
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
                                        <li><a href="">Cuenta</a>
                                            <ul>
                                                <li>
                                                    <a href="./functions/logout.php">Cerrar Sesión</a>
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
                                <h2>Crear nuevo prospecto</h2>
                                <span>Por favor de llenar todos los campos requeridos.</span>
                            </div>
                            <div class="login-form">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                                    <input type="text" name="nombre" id="nombre" placeholder="Nombre del prospecto">

                                    <input type="text" name="apellidoPaterno" id="apellidoPaterno" placeholder="Apellido Parteno del prospecto">

                                    <input type="text" name="apellidoMaterno" id="apellidoMaterno" placeholder="Apellido Materno del prospecto">

                                    <input type="text" name="telefono" id="telefono" placeholder="Telefono del prospecto">

                                    <input type="text" name="correo" id="correo" placeholder="Correo Electrónico del prospecto">
                                    
                                    <textarea name="conversacion" id="conversacion" cols="145" rows="10" class="miTextarea" placeholder="Comentarios sobre el seguimiento del prospecto"></textarea>

                                    <!-- <input type="text" name="fechaNacimiento" id="fechaNacimiento" placeholder="Fecha de Nacimiento del del prospecto">
                                    <input type="text" name="lugarNacimiento" id="lugarNacimiento" placeholder="Lugar de Nacimiento del del prospecto"> -->
                                    
                                    <select name="origenProspecto" class="form-select">
                                            <option selected>Seleccione el origel del prospecto</option>
                                            <option>Red Social</option>
                                            <option>Formulario WEB</option>
                                            <option>Usuario Presente</option>
                                    </select>
                                    

                                    <div class="button-box">
                                        <button type="submit" class="default-btn" onclick="return confirm('¿Está seguro de Crear este registro?')">Crear Prospecto</button>
                                        <button type="submit" class="default-btn" onclick="window.location.href='panelEmpresa.php'">Regresar al Menu</button>
                                    </div>
                                </form>
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

    <script src="./assessment/bootstrap.bundle.min.js"></script>
    <script src="./assessment/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });

        $(document).ready(function() {
            $('#myTable2').DataTable();
        });
    </script>
</body>

</html>