<?php
session_start();
require_once './functions/WebPageWebModificar.php';


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

                    </div>
                </div>
                <div class="col-md-12 col-md-offset-3 text-center">
                    <div class="login">
                        <img src="data:image/jpeg;base64,<?php echo $Perfil['bodyFooterLogo']; ?>" alt="">
                        <div class="login-form-container">
                            <div class="login-text">
                                <h2>Crear Pagina web</h2>
                                <span>Por favor de llenar todos los campos requeridos.</span>
                            </div>
                            <div class="login-form">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                                    <div>
                                        <input type="text" name="idPageWeb" value="<?php echo $PageWeb['idPageWeb']; ?>">
                                        <input type="text" name="namePageWebMenu" placeholder="Nombre del la pagina web" required pattern="{1,50}" title="El nombre de tu pagina no debe ser mayor a 50 caracteres." required value="<?php echo $PageWeb['namePageWebMenu']; ?>">
                                        <input type="text" name="fileNameWeb" placeholder="Nombre del archivo:" pattern="{1,25}" title="El nombre tu archivo no debe ser mayor a 25 caracteres." required value="<?php echo $PageWeb['fileNameWeb']; ?>">
                                        <input type="text" name="filePatchServer" placeholder="Ruta de almacenaje" pattern="{1,100}" title="La ruta de tu pagina no debe ser mayor a 100 caracteres." required value="<?php echo $PageWeb['filePatchServer']; ?>">
                                    </div> <br>
                                    <div>
                                        <textarea name="headTitle" cols="30" rows="10" placeholder="Nombre de tu pestaña web: " pattern="{1,30}" title="El nombre de tu pestaña no debe ser mayor a 30 caracteres." required><?php echo $PageWeb['headTitle']; ?></textarea>
                                        <textarea name="headDescription" cols="30" rows="10" placeholder="Descripcion de tu pagina web: " pattern="{1,300}" title="La descripcion de tu pagina web no debe ser mayor a 300 caracteres." required><?php echo $PageWeb['headDescription']; ?></textarea>
                                        <textarea name="headKeywords" cols="30" rows="10" placeholder="Palabras clave de tu pagina web: " pattern="{1,100}" title="El link de tu negocio no debe ser mayor a 100 caracteres." required><?php echo $PageWeb['headKeywords']; ?></textarea>
                                        <textarea name="headPlugins" id="" cols="30" rows="10" placeholder="Plugins de terceros de tu pagina web: " pattern="{1,100}" title="El link de tu negocio no debe ser mayor a 100 caracteres." required><?php echo $PageWeb['headPlugins']; ?></textarea>
                                    </div><br>
                                    <div>
                                        <textarea name="bodyheadFooterScriptPlugins" cols="30" rows="10" placeholder="Script de tu pagina web: " pattern="{1,300}" title="La descripcion de tu pagina web no debe ser mayor a 300 caracteres." required><?php echo $PageWeb['bodyheadFooterScriptPlugins']; ?></textarea>
                                        <textarea name="bodybtnWhatsapp" cols="30" rows="10" placeholder="Whatsapp de tu pagina web: " pattern="{1,100}" title="El link de tu negocio no debe ser mayor a 100 caracteres." required value=""><?php echo $PageWeb['bodybtnWhatsapp']; ?></textarea>
                                    </div><br>

                                    <div class="button-box">
                                        <button type="submit" class="default-btn" onclick="return confirm('¿Está seguro de guardar la pagina web?')">Guardar Perfil</button>
                                    </div>
                                </form>
                                <div class="button-box">
                                    <a  class="default-btn"  href="functions/WebGenerarPath.php?SeccionPageSelecionado=<?php echo $PageWeb['fileNameWeb'];?>&idPageWeb=<?php echo $PageWeb['idPageWeb'];?>&idEmpresaUser=<?php echo $idEmpresaUser;?>">Generar HTML</a>
                                </div>
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