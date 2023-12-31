<?php
session_start();
require_once './functions/WebComponenteLista.php';
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
                        <div style="overflow: auto; width:95%;">
                            <h4>Listado de componentes</h4>
                            <table class="table table-responsive" id="myTable2">
                                <thead>
                                    <tr>
                                        <th>idComponente</th>
                                        <th>imagen_componente</th>
                                        <th>title_componente</th>
                                        <th>description_componente</th>
                                        <th>title_btn_action</th>
                                        <th>action_btn_link</th>
                                        <th>estado_componente</th>
                                        <th>page_seccion</th>
                                        <th>type_componente</th>
                                        <th>idPerfilNegocio</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = $componente->fetch_assoc()) : ?>
                                        <tr>
                                            <td><?php echo $row['idComponente']; ?></td>
                                            <!-- <td><?php //echo $row['decripcionBlog']; 
                                                        ?></td> -->
                                            <td><?php echo '<img width="30%" src="data:image/jpeg;base64,' . $row['imagen_componente'] . '" alt="Imagen en base64">'; ?></td>
                                            <td><?php echo $row['title_componente']; ?></td>
                                            <td><?php echo $row['description_componente']; ?></td>
                                            <td><?php echo $row['title_btn_action']; ?></td>
                                            <td><?php echo $row['action_btn_link']; ?></td>
                                            <td><?php echo $row['estado_componente']; ?></td>
                                            <td><?php echo $row['page_seccion']; ?></td>
                                            <td><?php echo $row['type_componente']; ?></td>
                                            <td><?php echo $row['idPerfilNegocio']; ?></td>
                                            <td>
                                                <a class="btn btn-primary btn-sm" href="viewWebComponenteModificar.php?idComponente=<?php echo $row['idComponente']; ?>">Modificar</a>
                                                <br>
                                                <a
                                                    <?php 
                                                    if($row['estado_componente']== 1){ 
                                                        echo 'class="btn btn-success btn-sm"';}else if ($row['estado_componente']== 0){echo 'class="btn btn-warning btn-sm"';} 
                                                    ?>
                                                    href="./functions/BlogEstado.php?idBlog=<?php echo $row['idComponente']; ?>&estado=<?php echo $row['estado_componente']; ?>" style="color: white;">Estado: 
                                                    <?php 
                                                        if($row['estado_componente']== 0){ 
                                                        echo 'Oculto';}else{echo 'Activo';} 
                                                    ?>
                                                </a>

                                                <!--Llamar a funcion cambiar estado(sqlCambiar estado dentro de  la tabla tb_Prospecto va buscar el registro seleccionado y va a modificar propiedad estadoSistema='Falso') -->

                                                
                                            </td>
                                        </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
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