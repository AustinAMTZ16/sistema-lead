<?php
    // Iniciar la sesión
    session_start();
    require_once './functions/BlogModificar.php';
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

    <link rel="stylesheet" href="css/dataTables.min.css">
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
                                <h2>Actuliza el POST</h2>
                                <span>Por favor de llenar todos los campos requeridos.</span>
                            </div>
                            <div class="login-form">
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">

                                    <div>
                                    <input type="text" name="idBlog" id="idBlog" value="<?php echo $blog['idBlog']; ?>" required hidden >
                                    </div>
                                
                                    <div>
                                    <input type="text" name="head_titulo" id="head_titulo" placeholder="Titulo de pestaña de pagina web" pattern="{1,40}" title="El valor debe contener solo letras y números, y tener menos de 40 caracteres" value="<?php echo $blog['head_titulo']; ?>" required readonly>
                                    </div>

                                    <div>
                                    <input type="text" name="tituloBlog" id="tituloBlog" placeholder="Titulo de tu POST" pattern="{1,100}" title="El valor debe contener solo letras y números, y tener menos de 100 caracteres" value="<?php echo $blog['tituloBlog']; ?>" required>
                                    </div>

                                    <div>
                                    <input type="text" name="BlogSubtitulo" id="BlogSubtitulo" placeholder="Subtitulo de POST" pattern="{1,40}" title="El valor debe contener solo letras y números, y tener menos de 40 caracteres" value="<?php echo $blog['BlogSubtitulo']; ?>">
                                    </div>

                                    <div>
                                    <textarea name="decripcionBlog" id="decripcionBlog"   cols="145" rows="10"     placeholder="Cuerpo de tu POST" >
                                        <?php echo $blog['decripcionBlog']; ?>
                                    </textarea>
                                    <div>

                                    <div>
                                    <input type="text" name="BlogSlogan" id="BlogSlogan" placeholder="Slogan de venta para el POST" pattern="{1,150}" title="El valor debe contener solo letras y números, y tener menos de 150 caracteres" value="<?php echo $blog['BlogSlogan']; ?>">
                                    </div>

                                    <div>
                                    <input type="text" name="accionBlog" id="accionBlog" placeholder="Nombre corto tu blog sin espacios importante" pattern="[a-zA-Z0-9]{1,25}" title="El valor debe ser sin espacios y debe contener solo letras y números, y tener menos de 25 caracteres" required value="<?php echo $blog['FileTituloPOST']; ?>" readonly>
                                    </div> 

                                    <div>
                                    <img width="40%" src="<?php echo  'data:image/jpeg;base64,' . $blog['imagenBlog'] . '" alt="Imagen en base64"'; ?>">
                                    </div>

                                    <div class="button-box">
                                    <a class="default-btn" href="<?php echo  'data:image/jpeg;base64,' . $blog['imagenBlog'] . '" alt="Imagen en base64"'; ?>" download="imgan">Descargar la Imagen</a>
                                    </div>
                                   

                                    <div>
                                    <input  type="file" name="imgBlog" id="imgBlog" required>

                                    <!-- <label for="imgBlog" class="miBotonPersonalizado" style="
                                            color: #fff;
                                            background-color:blue;
                                            padding: 10px 20px;
                                            cursor: pointer;
                                            border-radius: 5px;
                                            ">Seleccionar Archivo
                                    </label> -->
                                    </div>

                                    <div class="button-box">
                                        <button type="submit" class="default-btn" onclick="return confirm('¿Está seguro de Crear este blog?')">Guardar Blog</button>
                                    </div>
                                </form>
                                
                                <div class="button-box">
                                    <a class="default-btn" href="./functions/BlogEliminar.php?idBlog=<?php echo $id; ?>" onclick="return confirm('¿Está seguro de eliminar este blog?')">Eliminar</a>
                                </div>
                                <div class="button-box">
                                    <button type="submit" class="default-btn" onclick="window.location.href='viewBlogLista.php'">Regresar al Menu</button>
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

    <script src="./assessment/bootstrap.bundle.min.js"></script>
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
            selector: '#decripcionBlog', // Identificador del elemento HTML donde se mostrará el editor
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