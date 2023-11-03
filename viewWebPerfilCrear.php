<?php
session_start();
require_once './functions/WebPerfilCrear.php';
// Cerrar la conexión
$conn->close();
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
                                    <?php //echo $_SESSION["usuario"]; ?>
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

                    </div>
                </div>
                <div class="col-md-12 col-md-offset-3 text-center">
                    <div class="login">
                        <img src="https://engranetmx.com/img/about/about.png" alt="">
                        <div class="login-form-container">
                            <div class="login-text">
                                <h2>Crear nuevo Blog</h2>
                                <span>Por favor de llenar todos los campos requeridos.</span>
                            </div>
                            <div class="login-form">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                                    <div>
                                        <input type="file" name="bodyFooterLogo" placeholder="Subir logotipo del negocio: Formato .png .jpg .jpeg" required>
                                        <input type="text" name="bodyFooterSlogan" placeholder="Descripción breve del giro de tu negocio:" pattern="{1,200}" title="La descipción de tu negocio no debe ser mayor a 200 caracteres." required>
                                    </div> <br>
                                    <div>
                                        <input type="text" name="bodyFooterLinkFacebook" placeholder="Link de tu perfil de facebook:" pattern="{1,100}" title="El link de tu negocio no debe ser mayor a 100 caracteres." required>
                                        <input type="text" name="bodyFooterLinkInstagram" placeholder="Link de tu perfil de instagram:" pattern="{1,100}" title="El link de tu negocio no debe ser mayor a 100 caracteres." required>
                                        <input type="text" name="bodyFooterLinkTwitter" placeholder="Link de tu perfil de twitter:" pattern="{1,100}" title="El link de tu negocio no debe ser mayor a 100 caracteres." required>
                                        <input type="text" name="bodyFooterLinkLinkedIn" placeholder="Link de tu perfil de linkedin:." pattern="{1,100}" title="El link de tu negocio no debe ser mayor a 100 caracteres." required>
                                        <input type="text" name="bodyFooterLinkTikTok" placeholder="Link de tu perfil de tiktok:" pattern="{1,100}" title="El link de tu negocio no debe ser mayor a 100 caracteres." required>
                                    </div><br>
                                    <div>
                                        <input type="text" name="bodyFooterTitleContacto" placeholder="Titulo de contacto pagina web:" pattern="{1,100}" title="El titulo de contacto no debe ser mayor a 100 caracteres" required>
                                    </div><br>
                                    <div>
                                        <input type="text" name="bodyFooterDireccionNegocio_uno" placeholder="Primera dirección del negocio: 1234 Puebla Pue"  pattern="{1,100}" title="la dirección no debe ser mayor a 100 caracteres" required>
                                    </div>
                                    <div>
                                        <input type="text" class="form-control" name="bodyFooterDireccionNegocio_dos" placeholder="Segunda dirección del negocio: 1234, Monterrey NL" pattern="{1,100}" title="la dirección no debe ser mayor a 100 caracteres" required>
                                    </div><br>
                                    <div>
                                        <input type="text" name="bodyFooterTelefonoNegocio_uno" placeholder="Primer telefono de contacto" pattern="{1,12}" title="El telefono no debe ser mayor a 10 caracteres" required>
                                        <input type="text" name="bodyFooterTelefonoNegocio_dos" placeholder="Segundo telefono de contacto" pattern="{1,12}" title="El telefono no debe ser mayor a 10 caracteres" required>
                                    </div><br>
                                    <div>
                                        <input type="text" name="bodyFooterEmailNegocio_uno" placeholder="Primer correo electrónico de contacto" pattern="{1,20}" title="El correo electrónico no debe ser mayor a 20 caracteres" required>
                                        <input type="text" name="bodyFooterEmailNegocio_dos" placeholder="Segundo correo electrónico de contacto" pattern="{1,20}" title="El correo electrónico no debe ser mayor a 20 caracteres" required>
                                    </div><br>
                                    <div>
                                        <input type="text" name="bodyFooterCopyright" placeholder="Mensaje de copyright y politicas de privacidad" pattern="{1,20}" title="El correo electrónico no debe ser mayor a 20 caracteres" required>
                                    </div>

                                    <div class="button-box">
                                        <button type="submit" class="default-btn" onclick="return confirm('¿Está seguro de guardar perfil?')">Guardar Perfil</button>
                                    </div>
                                </form>
                                <div class="button-box">
                                    <button type="submit" class="default-btn" onclick="window.location.href='viewWebLista.php'">Regresar al Menu</button>
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
</body>

</html>