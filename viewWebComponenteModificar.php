<?php
session_start();
require_once './functions/WebComponenteModificar.php';
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
                        <img src="data:image/jpeg;base64,<?php echo $fila['imagen_componente']; ?>" alt="">
                        <div class="login-form-container">
                            <div class="login-text">
                                <h2>Componente sección </h2>
                                <span>Por favor de llenar todos los campos requeridos.</span>
                            </div>
                            <div class="login-form">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                                    <div>    
                                        <input type="text" name="idComponente" value="<?php echo $fila['idComponente'];?>" readonly>   
                                        <input type="text" name="idPerfilNegocio" value="<?php echo 'ID Perfil de negocio: '.$fila['idPerfilNegocio'];?>" readonly>                                  
                                        <input type="file" name="imagen_componente" require>
                                        <input type="text" name="title_componente" placeholder="titulo del carrusel" required pattern="{1,50}" title="El titulo del carrusel no debe ser mayor a 50 caracteres." required value="<?php echo $fila['title_componente'];?>">
                                        <input type="text" name="description_componente" placeholder="descripcion del carrusel" required pattern="{1,50}" title="La descripcion del carrusel no debe ser mayor a 50 caracteres." required value="<?php echo $fila['description_componente'];?>">
                                        <input type="text" name="title_btn_action" placeholder="titulo del boton del carrusel" required pattern="{1,50}" title="El titulo del boton del carrusel no debe ser mayor a 50 caracteres." required value="<?php echo $fila['title_btn_action'];?>">
                                        <input type="text" name="action_btn_link" placeholder="accion del boton" required pattern="{1,50}" title="La accion del boton no debe ser mayor a 50 caracteres." required value="<?php echo $fila['action_btn_link'];?>">
                                        <select name="estado_componente" class="form-select">
                                            <option selected><?php echo $fila['estado_componente'];?></option>
                                            <option value="1">1. Visible</option>
                                            <option value="2">2. Oculto</option>
                                        </select>
                                        <select name="page_seccion" class="form-select">
                                            <option selected><?php echo $fila['page_seccion'];?></option>
                                            <option value="1">1. Inicio</option>
                                            <option value="2">2. Acerca de</option>
                                            <option value="3">3. Servicios</option>
                                            <option value="4">4. Contacto</option>
                                        </select>
                                        <select name="type_componente" class="form-select">
                                            <option selected><?php echo $fila['type_componente'];?></option>
                                            <option>bodyheadCarrusel</option>
                                            <option>bodysectionProductosDestacados</option>
                                            <option>bodysectionAcercaNegocio</option>
                                            <option>bodysectionServicio</option>
                                            <option>bodysectionClientes</option>
                                            <option>bodysectionRecomendaciones</option>
                                            <option>form_actions_text</option>
                                        </select>
                                    </div> <br>

                                    <div class="button-box">
                                        <button type="submit" class="default-btn" onclick="return confirm('¿Está seguro de guardar la pagina web?')">Guardar componente</button>
                                    </div>
                                </form>
                                <!-- <div class="button-box">
                                    <a  class="default-btn"  href="functions/WebGenerarPath.php?idPageWeb=<?php //echo $PageWeb['idPageWeb'];?>&idEmpresaUser=<?php //echo $idEmpresaUser;?>">Generar HTML</a>
                                </div> -->
                                <div class="button-box">
                                    <button type="submit" class="default-btn" onclick="window.location.href='viewWebComponenteLista.php'">Regresar al Menu</button>
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