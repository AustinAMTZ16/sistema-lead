<?php
    // Iniciar la sesión
    session_start();
    require_once './functions/IniciarSesion.php';
    // Cerrar la conexión
    $conn->close();
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login | MexiClientes</title>
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
		</header>
		<!-- Header Area End -->
		
        <!-- Login start -->
        <div class="login-area pt-50 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="login">
                            <div class="">
                                <img src="/img/about/about.png" alt="" width="100%" >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="login">
                            <div class="login-form-container">
                                <div class="login-text">
                                    <h2>INICIO DE SESIÓN</h2>
                                    <span>Inicie sesión utilizando el dominio de su pagina web.</span>
                                </div>
                                <div class="login-form">
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <input type="text" name="usuario" id="usuario" placeholder="name@example.com">
                                        <input type="password" name="contraseña" id="contraseña" placeholder="Password">
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">Acuérdate de mí </label>
                                                <a href="/recovery.php">¿Has olvidado tu contraseña?</a>
                                            </div>
                                            <div class="login-toggle-btn">
                                                <a href="/signup.php">Registrate con tu dominio web</a>
                                            </div>
                                            <div class="login-toggle-btn">
                                                <a href="/signup.php">Registrate sin dominio web</a>
                                            </div>
                                            <button type="submit" class="default-btn">Acceder</button>
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
    </body>
</html>
