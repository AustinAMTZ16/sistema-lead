<?php
    //LOGICA PARA SISTEMA DE GESTIÓN DE CONTENIDO DEL SITIO WEB
    //INDEX.HTML
    /**
    *VARIABLES SEO Y PAGINAS WEB:
    *   fileNameWeb: Nombre del archivo html [varchar30]
    *   filePatchServer: Ruta donde se alamacenara el archivo [varchar100]
    *       idPageWeb: Identificador de las paginas del negocio [int10 A_I FK]
    *   namePageWeb: Nombre de la sección esta se usara para identificar la seccion y hacer dinamico el menu.
    *   headTitle: Titulo de pestaña de la pagina web SEO [varchar100]
    *   headDescription: Descripcion de archivo web SEO [varchar300]
    *   headKeywords: Palabras clave de archivo web SEO [longtext]
    *   headPlugins: Seccion libre con el objetivo de poder integrar plugins de terceros [longtext]
    *   bodyheadFooterScript: Seccion de scripts en el body [longtext]
    *   bodyheadFooterScriptPlugins: Seccion libre con el objetivo de poder integrar plugins de terceros [longtext]
    *   bodybtnWhatsapp: Control de la visibilidad del boton whatsapp [text]
    *       idPerfilNegocio: Identificador del negocio  [int10 A_I FK]
    *   bodyFooterLogo: logotipo de la negocio [longtext]
    *   bodyFooterSlogan: Descripcion corta del giro de la empresa [varchar200]
    *   bodyFooterLinkFacebook: Red social de la empresa [varchar200]
    *   bodyFooterLinkInstagram: Red social de la empresa [varchar200]
    *   bodyFooterLinkTwitter: Red socila de la empresa [varchar200]
    *   bodyFooterLinkLinkedIn: Red social de la empresa [varchar200]
    *   bodyFooterLinkTikTok: Red social de la empresa [varchar200]
    *   bodyFooterTitleContacto: Titulo seccion de contacto [varchar100]
    *   bodyFooterDireccionNegocio_uno: Direccion del negocio [varchar100]
    *   bodyFooterDireccionNegocio_dos: Direccion del negocio [varchar100]
    *   bodyFooterTelefonoNegocio_uno: Telefono del negocio [varchar12]
    *   bodyFooterTelefonoNegocio_dos: Telefono del negocio [varchar12]
    *   bodyFooterEmailNegocio_uno: Correo electronico del negocio [varchar20]
    *   bodyFooterEmailNegocio_dos: Correo electronico del negocio [varchar20]
    *   bodyFooterCopyright: Seccion de copyright y politicas de privaciodad [varchar200]
    *
    *   bodyheadCarrusel: {
            imagen: imagen del carrusel 
            title: titulo del carrusel
            description: descripcion del carrusel
            title_btn_action: titulo del boton del carrusel
            action_btn_link: accion del boton 
            estado_componet: estado del componente visible - false
        }   
        bodysectionProductosDestacados: {
            imagen: imagen del carrusel 
            title: titulo del carrusel
            description: descripcion del carrusel
            title_btn_action: titulo del boton del carrusel
            action_btn_link: accion del boton 
            estado_componet: estado del componente visible - false
        }
        bodysectionAcercaNegocio: {
            imagen: imagen del carrusel 
            title: titulo del carrusel
            description: descripcion del carrusel
            title_btn_action: titulo del boton del carrusel
            action_btn_link: accion del boton 
            estado_componet: estado del componente visible - false
        }
        bodysectionServicio: {
            imagen: imagen del carrusel 
            title: titulo del carrusel
            description: descripcion del carrusel
            title_btn_action: titulo del boton del carrusel
            action_btn_link: accion del boton 
            estado_componet: estado del componente visible - false
        }
        bodysectionClientes: {
            imagen: imagen del carrusel 
            title: titulo del carrusel
            description: descripcion del carrusel
            title_btn_action: titulo del boton del carrusel
            action_btn_link: accion del boton 
            estado_componet: estado del componente visible - false
        }
        bodysectionRecomendaciones: {
            imagen: imagen del carrusel 
            title: titulo del carrusel
            description: descripcion del carrusel
            title_btn_action: titulo del boton del carrusel
            action_btn_link: accion del boton 
            estado_componet: estado del componente visible - false
        }
        form_actions_text: {
            imagen: imagen del carrusel 
            title: titulo del carrusel
            description: descripcion del carrusel
            title_btn_action: titulo del boton del carrusel
            estado_componet: estado del componente visible - false
        }
    */
    require_once '../connection/conexion.php';
    // Obtener el ID del registro a editar
    $idEmpresaUser=$_GET['idEmpresaUser'];
    $idPageWeb = $_GET['idPageWeb']; //Data Formulario web IdPageWeb
    
    // Consulta SQL para obtener el registro específico  
    $sqlPerfilNegocio = 'SELECT idPerfilNegocio, bodyFooterLogo, bodyFooterSlogan, bodyFooterLinkFacebook, bodyFooterLinkInstagram, bodyFooterLinkTwitter, bodyFooterLinkLinkedIn, bodyFooterLinkTikTok, bodyFooterTitleContacto, bodyFooterDireccionNegocio_uno, bodyFooterDireccionNegocio_dos, bodyFooterTelefonoNegocio_uno, bodyFooterTelefonoNegocio_dos, bodyFooterEmailNegocio_uno, bodyFooterEmailNegocio_dos, bodyFooterCopyright, idEmpresaUser FROM tb_cms_perfil_negocio WHERE idEmpresaUser = '.$idEmpresaUser.'';

    $data = $conn->query($sqlPerfilNegocio);
    if($data > 0){
        $Perfil = $data ->fetch_assoc(); 
        // header('Location: viewProspectoLista.php'); // Redireccionar a la página principal después de actualizar el registro
        // exit();
    }

    $idPerfilNegocio=$Perfil['idPerfilNegocio'];
    $bodyFooterLogo='data:image/jpeg;base64,' . $Perfil['bodyFooterLogo'];
    $bodyFooterSlogan=$Perfil['bodyFooterSlogan'];
    $bodyFooterLinkFacebook=$Perfil['bodyFooterLinkFacebook'];
    $bodyFooterLinkInstagram=$Perfil['bodyFooterLinkInstagram'];
    $bodyFooterLinkTwitter=$Perfil['bodyFooterLinkTwitter'];
    $bodyFooterLinkLinkedIn=$Perfil['bodyFooterLinkLinkedIn'];
    $bodyFooterLinkTikTok=$Perfil['bodyFooterLinkTikTok'];
    $bodyFooterTitleContacto=$Perfil['bodyFooterTitleContacto'];
    $bodyFooterDireccionNegocio_uno=$Perfil['bodyFooterDireccionNegocio_uno'];
    $bodyFooterDireccionNegocio_dos=$Perfil['bodyFooterDireccionNegocio_dos'];
    $bodyFooterTelefonoNegocio_uno=$Perfil['bodyFooterTelefonoNegocio_uno'];
    $bodyFooterTelefonoNegocio_dos=$Perfil['bodyFooterTelefonoNegocio_dos'];
    $bodyFooterEmailNegocio_uno=$Perfil['bodyFooterEmailNegocio_uno'];
    $bodyFooterEmailNegocio_dos=$Perfil['bodyFooterEmailNegocio_dos'];
    $bodyFooterCopyright=$Perfil['bodyFooterCopyright'];
    $idEmpresaUser=$Perfil['idEmpresaUser'];

    // Consulta SQL para obtener la seccion a modificar
    $sqlPageWebSeccion = 'SELECT * FROM tb_cms_page_web WHERE idPageWeb = '.$idPageWeb.'';
    $dataPage = $conn->query($sqlPageWebSeccion);
    if($dataPage > 0){
        $PageWeb = $dataPage ->fetch_assoc(); 
        // header('Location: viewWebLista.php'); // Redireccionar a la página principal después de actualizar el registro
        // exit();
    }

    $namePageWebMenu=$PageWeb['namePageWebMenu'];
    $fileNameWeb=$PageWeb['fileNameWeb'].'.html';
    $filePatchServer=$PageWeb['filePatchServer'];
    $headTitle=$PageWeb['headTitle'];
    $headDescription=$PageWeb['headDescription'];
    $headKeywords=$PageWeb['headKeywords'];
    $headPlugins=$PageWeb['headPlugins'];
    $bodyheadFooterScriptPlugins=$PageWeb['bodyheadFooterScriptPlugins'];
    $bodybtnWhatsapp=$PageWeb['bodybtnWhatsapp'];
    $idPerfilNegocio=$PageWeb['idPerfilNegocio'];
    //echo $idPageWeb  . $bodyFooterSlogan . $fileNameWeb;



    switch ($idPageWeb){
        case 1:
            $PageWebFile = "
                <!doctype html>
                <html class='no-js' lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>$headTitle</title>
                        <meta name='viewport' content='width=device-width, initial-scale=1'>
                        <!-- Favicon, robots, description,keywords -->
                        <link rel='shortcut icon' type='image/x-icon' href='./img/engranet/logo.jpg'> 
                        <meta name='robots' content='index,follow'>
                        <meta name='description' content='$headDescription'>
                        <meta name='keywords' content='$headKeywords'>
                        <!-- Favicon, robots, description,keywords -->
                        <!-- Link css, js -->
                        <link rel='stylesheet' href='css/bootstrap.min.css'>
                        <link rel='stylesheet' href='css/animate.min.css'>
                        <link rel='stylesheet' href='css/meanmenu.css'>
                        <link rel='stylesheet' href='css/magnific-popup.css'>
                        <link rel='stylesheet' href='css/owl.carousel.min.css'>
                        <link rel='stylesheet' href='css/font-awesome.min.css'>
                        <link rel='stylesheet' href='css/et-line-icon.css'>
                        <link rel='stylesheet' href='css/reset.css'>
                        <link rel='stylesheet' href='css/ionicons.min.css'>
                        <link rel='stylesheet' href='css/material-design-iconic-font.min.css'>
                        <link rel='stylesheet' href='css/style.css'>
                        <link rel='stylesheet' href='css/responsive.css'>
                        <script src='js/vendor/modernizr-3.11.2.min.js'></script>
                        <!-- Link css, js -->
                        $headPlugins
                    </head>
                    <body>
                        <header class='top'>
                            <div class='header-top'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-12 col-sm-12'>
                                            <div class='header-top-left'>
                                                <p> 
                                                    $bodyFooterTitleContacto
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_uno'>$bodyFooterTelefonoNegocio_uno</a> /
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_dos'>$bodyFooterTelefonoNegocio_uno</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='header-area two header-sticky'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-3 col-sm-5 col-6'>
                                            <div class='logo'>
                                                <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome' /></a>
                                            </div>
                                        </div>
                                        <div class='col-md-9 col-sm-7 col-6'>
                                            <div class='content-wrapper text-end'>
                                                <!-- Main Menu Start -->
                                                <div class='main-menu'>
                                                    <nav>
                                                        <ul>
                                                            <li><a class='nav-link' href='index.html'>Inicio</a></li>
                                                            <li><a class='nav-link' href='acerca.html'>Acerca de</a></li>
                                                            <li><a class='nav-link' href='servicios.html'>Servicios</a></li>
                                                            <li><a class='nav-link' href='blog-lista.php'>blog</a></li>
                                                            <li><a class='nav-link' href='contacto.html'>Contacto</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-12'>
                                            <div class='mobile-menu hidden-sm'></div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- Header Area End -->
        
                        <!-- Carrusel Page Start -->
                        <section id='slider-container' class='slider-area two'> 
                            <div class='slider-owl owl-theme owl-carousel'> 
                                <!-- Start Slingle Slide -->
                                <div class='single-slide item' style='background-image: url(img/slider/slider2.jpg)'>
                                    <!-- Start Slider Content -->
                                    <div class='slider-content-area'>  
                                        <div class='container'>
                                            <div class='row'>
                                                <div class='col-md-10 offset-md-1'> 
                                                    <div class='slide-content-wrapper'>
                                                        <div class='slide-content text-center'>
                                                            <h2>
                                                                LAS CASUALIDADES NO EXISTEN 
                                                            </h2>
                                                            <p>
                                                                Tu quieres hacer crecer tu negocio y nosotros hacemos crecer a las empresas en Mexico mediante marketing y programación. <br>
                                                                ¡Es hora de tomar acción! ¡Ponte en contacto con nosotros hoy y descubre cómo podemos impulsar tu éxito en línea!
                                                            </p>
                                                            <a class='default-btn' href='./contacto.html'>Contactar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Start Slider Content -->
                                </div>
                                <!-- End Slingle Slide -->
                                <!-- Start Slingle Slide -->
                                <div class='single-slide item' style='background-image: url(img/slider/slider1.jpg)'>
                                    <!-- Start Slider Content -->
                                    <div class='slider-content-area'>   
                                        <div class='container'>
                                            <div class='row'>
                                                <div class='col-md-10 offset-md-1'> 
                                                    <div class='slide-content-wrapper'>
                                                        <div class='slide-content text-center'>
                                                            <h2>
                                                                ¿NECESITAS MEJORAR TU MARKETING DIGITAL Y TU SITIO WEB?
                                                            </h2>
                                                            <p>
                                                                Contamos con un sistema que ha dado grandes resultados a empresas como soriana, Chevrolet, Ropa americana. Nuestro equipo estará muy contento de poder desarrollar una estrategia para que podamos alcanzar y hacer crecer los objetivos de tu empresa.
                                                            </p>
                                                            <a class='default-btn' href='#servicios'>Ver Servicios</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Start Slider Content -->
                                </div>
                                <!-- End Slingle Slide -->
                                <!-- Start Slingle Slide -->
                                <div class='single-slide item' style='background-image: url(img/slider/slider3.jpg)'>
                                    <!-- Start Slider Content -->
                                    <div class='slider-content-area'>  
                                        <div class='container'>
                                            <div class='row'>
                                                <div class='col-md-10 offset-md-1'> 
                                                    <div class='slide-content-wrapper'>
                                                        <div class='slide-content text-center'>
                                                            <h2>
                                                                ¿COMO UNA ESTRATEGIA DE SITIO WEB PUEDE AYUDAR A LOS NEGOCIOS A CRECER?
                                                            </h2>
                                                            <p>
                                                                Creamos el mejor sitio web competitivo dentro de su mercado con una estructura amigable para los usuarios y buscadores. <br>
                                                                Manejamos una estructura de recopilación de datos para que se puedan generar lead y así conseguir clientes.
                                                            </p>
                                                            <a class='default-btn' href='#servicios'>Ver Servicios</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Start Slider Content -->
                                </div>
                                <!-- End Slingle Slide -->								
                            </div>
                        </section>
                        <!-- Carrusel Page End -->
        
                        <!-- Servicios Start -->
                        <div class='service-area two pt-150 pb-150'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-md-4'>
                                        <div class='single-service'>
                                            <h3><a href='https://wa.me/522212145723?text=Hola engranet' target='_blank'>Potencia Tu Presencia en Línea</a></h3>
                                            <p>Destaca con una página web moderna y atractiva. Nuestro equipo de expertos en diseño web y marketing digital te ofrece soluciones a medida para tu negocio. ¡Aprovecha el poder del mundo digital hoy mismo!</p> <br>
                                            <a class='default-btn' href='https://wa.me/522212145723?text=Hola engranet' target='_blank' style='background-color: #229655;'>Escribenos por WhatsApp</a>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <div class='single-service'>
                                            <h3><a href='https://wa.me/522212145723?text=Hola engranet' target='_blank'>¡Tu Tienda en Línea Personalizada!</a></h3>
                                            <p>Impulsa tus ventas en línea con una tienda personalizada y atractiva. Ofrecemos diseño web de calidad y formularios web efectivos para capturar leads y clientes. ¡Optimiza tu presencia digital ahora!</p><br><br>
                                            <a class='default-btn' href='https://wa.me/522212145723?text=Hola engranet' target='_blank' style='background-color: #229655;'>Escribenos por WhatsApp</a>
                                        </div>
                                    </div>
                                    <div class='col-md-4'>
                                        <div class='single-service'>
                                            <h3><a href='https://wa.me/522212145723?text=Hola engranet' target='_blank'>Domina el Marketing Digital con Google Tools</a></h3>
                                            <p>Optimiza tus estrategias con Google Ads. Rastrea y analiza datos con Google Analytics 4.0. Simplifica el seguimiento con Google Tag Manager. Potencia tu presencia en línea de manera inteligente. ¡Descubre las herramientas de éxito hoy!</p><br>
                                            <a class='default-btn' href='https://wa.me/522212145723?text=Hola engranet' target='_blank' style='background-color: #229655;'>Escribenos por WhatsApp</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Servicios End -->
        
                        <!-- Acerca de Start -->
                        <div class='about-area pb-155'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-md-6 col-sm-6'>
                                        <div class='about-content'>
                                            <h2>Bienvenido a <span>ENGRANET</span></h2>
                                            <p>En Engranet, nuestra misión es empoderar a las pequeñas empresas locales en México con estrategias de marketing digital efectivas y accesibles que impulsen el éxito.Creemos que todas las empresas, independientemente de su tamaño, merecen la oportunidad de prosperar en el panorama digital actual.Trabajamos incansablemente para brindar servicios de alta calidad que tengan un impacto positivo en el crecimiento y la presencia en línea de nuestros clientes.</p>
                                            <!-- <p class='hidden-sm'>I must explain to you how all this mistaken idea of denouncing pleure and prsing pain was born and I will give you a complete account of the system</p> -->
                                            <a class='default-btn' href='./contacto.html'>Contactar</a>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-sm-6'>
                                        <div class='about-img'>
                                            <img src='img/about/about.png' alt='about'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Acerca de End -->
        
                        <!-- Servicios digitales Start -->
                        <div class='courses-area two pt-150 pb-150 text-center' id='servicios'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='section-title'>
                                            <img src='img/icon/servicio.png' alt='section-title'>
                                            <h2>Servicios Digitales</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-4 col-md-6'>
                                        <div class='single-course'>
                                            <div class='course-img'>
                                                <a href='paginasweb.html'><img src='img/course/course1.jpg' alt='course'>
                                                    <div class='course-hover'>
                                                        <i class='fa fa-link'></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class='course-content'>
                                                <h3><a href='paginasweb.html'>Haz Crecer tu Negocio con un Sitio Web Impactante</a></h3>
                                                <p>Diseño web de alta calidad y sitios a medida para tu negocio. Impulsa tu marca en línea con nosotros. ¡Crea una experiencia digital única para tus clientes!</p>
                                                <a class='default-btn' href='paginasweb.html'>Ver más</a>
                                            </div>   
                                        </div>
                                    </div>
                                    <div class='col-lg-4 col-md-6'>
                                        <div class='single-course'>
                                            <div class='course-img'>
                                                <a href='sitiosweb.html'><img src='img/course/course2.jpg' alt='course'>
                                                    <div class='course-hover'>
                                                        <i class='fa fa-link'></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class='course-content'>
                                                <h3><a href='sitiosweb.html'>Tiendas en Línea: Donde las Compras son un Placer</a></h3>
                                                <p>Crea tu propia tienda en línea y expande tu negocio. Diseño personalizado, seguridad de pago y soporte dedicado. ¡Empieza a vender en línea hoy mismo!</p>
                                                <a class='default-btn' href='sitiosweb.html'>Ver más</a>
                                            </div>   
                                        </div>
                                    </div>
                                    <div class='col-lg-4 col-md-6 pt-4 pt-lg-0'>
                                        <div class='single-course'>
                                            <div class='course-img'>
                                                <a href='tiendasenlinea.html'><img src='img/course/course3.jpg' alt='course'>
                                                    <div class='course-hover'>
                                                        <i class='fa fa-link'></i>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class='course-content'>
                                                <h3><a href='tiendasenlinea.html'>Impulsa tu Éxito: Marketing Digital con Google</a></h3>
                                                <p>Desbloquea el potencial de tu negocio con nuestras estrategias de marketing digital. Google Ads, Analytics y Tag Manager a tu servicio. ¡Alcanza tus objetivos en línea de manera efectiva y eficiente!</p>
                                                <a class='default-btn' href='tiendasenlinea.html'>Ver más</a>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Servicios digitales End -->
                        
                        <!-- Principales Clientes Start-->
                        <div class='event-area two text-center pt-100 pb-145'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='section-title'>
                                            <img src='img/icon/clientes.png' alt='section-title'>
                                            <h2>PRINCIPALESS CLIENTES</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-6'>
                                        <div class='single-event mb-35'>
                                            <div class='event-img'>
                                                <a href='./contacto.html'><img src='img/event/event1.jpg' alt='event'></a>
                                            </div>
                                        </div>
                                        <div class='single-event mb-35 mb-md-0'>
                                            <div class='event-img'>
                                                <a href='./contacto.html'><img src='img/event/event2.jpg' alt='event'></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-lg-6'>
                                        <div class='single-event mb-35'>
                                            <div class='event-img'>
                                                <a href='./contacto.html'><img src='img/event/event3.jpg' alt='event'></a>
                                            </div>
                                        </div>
                                        <div class='single-event'>
                                            <div class='event-img'>
                                                <a href='./contacto.html'><img src='img/event/event4.jpg' alt='event'></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-lg-6'>
                                        <div class='single-event mb-35'>
                                            <div class='event-img'>
                                                <a href='./contacto.html'><img src='img/event/event5-1.jpg' alt='event'></a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Principales Clientes End-->
        
                        <!-- Testimonio Engranet Start-->
                        <div class='testimonial-area pt-110 pb-105 text-center'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='testimonial-owl owl-theme owl-carousel'>
                                        <div class='col-lg-8 offset-lg-2'>
                                            <div class='single-testimonial'>
                                                <div class='testimonial-info'>
                                                    <div class='testimonial-img'>
                                                        <img src='img/testimonial/testimonial.jpg' alt='testimonial'>
                                                    </div>
                                                    <div class='testimonial-content'>
                                                        <p>Conozca al equipo del Engranet Marketing Club: dedicado a ayudar a las pequeñas empresas a prosperar en el mundo digital.</p>
                                                        <h4>Soluciones de marketing eficaces y asequibles.</h4>
                                                        <h5>Estrategias de marketing digital personalizadas.</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Testimonio Engranet End -->
                        
                        <!-- Subscribe Start -->
                        <div class='subscribe-area pt-60 pb-70'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-lg-8 offset-lg-2'>
                                        <div class='subscribe-content section-title text-center'>
                                            <h2>Suscríbete a nuestro canal</h2>
                                            <p>Conce las mejores herramientas que google ofrece para tu negocio.</p>
                                        </div>
                                        <div class='newsletter-form mc_embed_signup'>
                                            <form class='formSucriptor' action='registroweb.php' method='post'>
                                                <div id='mc_embed_signup_scroll' class='mc-form'> 
        
                                                    <input type='email' value='' name='correo' class='email'  placeholder='Introduzca su dirección de correo electrónico' required>
                                                    <input type='text' name='nombre' value='Suscriptor' hidden>
                                                    <input type='text' name='telefono' value='Suscriptor' hidden>
                                                    <input type='text' name='mensaje' value='Suscriptor' hidden>
        
                                                    <button id='mc-embedded-subscribe' class='default-btn' type='submit' name='subscribe'><span>Suscribite</span></button> 
                                                </div>    
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Subscribe End -->
        
                        <!-- Footer Start -->
                        <footer class='footer-area'>
                            <div class='main-footer'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget pr-60'>
                                                <div class='footer-logo pb-25'>
                                                    <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome'></a>
                                                </div>
                                                <p>$bodyFooterSlogan</p>
                                                <div class='footer-social'>
                                                    <ul>
                                                        <li><a href='$bodyFooterLinkFacebook' target='_blank'><i class='zmdi zmdi-facebook'></i></a></li>
                                                        <!--<li><a href='https://twitter.com/devitemsllc'><i class='zmdi zmdi-instagram'></i></a></li> -->
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget'>
                                                <h3>$bodyFooterTitleContacto</h3>
                                                <p>$bodyFooterDireccionNegocio_uno</p>
                                                <p>$bodyFooterDireccionNegocio_dos</p>
                                                <p>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_uno' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a>
                                                    <br>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_dos' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a></p>
                                                <!-- <p>$bodyFooterEmailNegocio_uno</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class='footer-bottom text-center'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <p>$bodyFooterCopyright</p>
                                        </div> 
                                    </div>
                                </div>    
                            </div>
                        </footer>
                        <!-- Footer End -->
                        $bodyheadFooterScript
                        <script src='js/vendor/jquery-3.6.0.min.js'></script>
                        <script src='js/vendor/jquery-migrate-3.3.2.min.js'></script>
                        <script src='js/bootstrap.bundle.min.js'></script>
                        <script src='js/jquery.meanmenu.js'></script>
                        <script src='js/jquery.magnific-popup.js'></script>
                        <script src='js/ajax-mail.js'></script>
                        <script src='js/owl.carousel.min.js'></script>
                        <script src='js/jquery.mb.YTPlayer.js'></script>
                        <script src='js/jquery.nicescroll.min.js'></script>
                        <script src='js/plugins.js'></script>
                        <script src='js/main.js'></script>
                        $bodybtnWhatsapp
                    </body>
                </html>
            ";
            $Ruta = '../'.$filePatchServer.$fileNameWeb;
            //echo $Ruta;
            if (file_put_contents($Ruta, $PageWebFile)) {
                header('Location: ../viewWebLista.php'); // Redireccionar a la página principal después de actualizar el registro
                exit();
            } else {
                return  'Hubo un error al crear el archivo.';
            }
            break; // Termina el caso actual y sale del switch
        case 2:
            $PageWebFile = "
                <!doctype html>
                <html class='no-js' lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>$headTitle</title>
                        <meta name='viewport' content='width=device-width, initial-scale=1'>
                        <!-- Favicon, robots, description,keywords -->
                        <link rel='shortcut icon' type='image/x-icon' href='./img/engranet/logo.jpg'> 
                        <meta name='robots' content='index,follow'>
                        <meta name='description' content='$headDescription'>
                        <meta name='keywords' content='$headKeywords'>
                        <!-- Favicon, robots, description,keywords -->
                        <!-- Link css, js -->
                        <link rel='stylesheet' href='css/bootstrap.min.css'>
                        <link rel='stylesheet' href='css/animate.min.css'>
                        <link rel='stylesheet' href='css/meanmenu.css'>
                        <link rel='stylesheet' href='css/magnific-popup.css'>
                        <link rel='stylesheet' href='css/owl.carousel.min.css'>
                        <link rel='stylesheet' href='css/font-awesome.min.css'>
                        <link rel='stylesheet' href='css/et-line-icon.css'>
                        <link rel='stylesheet' href='css/reset.css'>
                        <link rel='stylesheet' href='css/ionicons.min.css'>
                        <link rel='stylesheet' href='css/material-design-iconic-font.min.css'>
                        <link rel='stylesheet' href='css/style.css'>
                        <link rel='stylesheet' href='css/responsive.css'>
                        <script src='js/vendor/modernizr-3.11.2.min.js'></script>
                        <!-- Link css, js -->
                        $headPlugins
                    </head>
                    <body>
                        <header class='top'>
                            <div class='header-top'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-12 col-sm-12'>
                                            <div class='header-top-left'>
                                                <p> 
                                                    $bodyFooterTitleContacto
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_uno'>$bodyFooterTelefonoNegocio_uno</a> /
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_dos'>$bodyFooterTelefonoNegocio_uno</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='header-area two header-sticky'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-3 col-sm-5 col-6'>
                                            <div class='logo'>
                                                <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome' /></a>
                                            </div>
                                        </div>
                                        <div class='col-md-9 col-sm-7 col-6'>
                                            <div class='content-wrapper text-end'>
                                                <!-- Main Menu Start -->
                                                <div class='main-menu'>
                                                    <nav>
                                                        <ul>
                                                            <li><a class='nav-link' href='index.html'>Inicio</a></li>
                                                            <li><a class='nav-link' href='acerca.html'>Acerca de</a></li>
                                                            <li><a class='nav-link' href='servicios.html'>Servicios</a></li>
                                                            <li><a class='nav-link' href='blog-lista.php'>blog</a></li>
                                                            <li><a class='nav-link' href='contacto.html'>Contacto</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-12'>
                                            <div class='mobile-menu hidden-sm'></div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- Header Area End -->
        
                        <!-- Banner Area Start -->
                        <div class='banner-area-wrapper'>
                            <div class='banner-area text-center'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <div class='banner-content-wrapper'>
                                                <div class='banner-content'>
                                                    <h2>Acerca de engranet</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Banner Area End -->
                        <!-- About Start -->
                        <div class='about-area pt-145 pb-155'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-md-6 col-sm-6'>
                                        <div class='about-content'>
                                            <h2>Bienvenido a <span>ENGRANET</span></h2>
                                            <p>En Engranet, nuestra misión es empoderar a las pequeñas empresas locales en México con
                                                estrategias de marketing digital efectivas y accesibles que impulsen el éxito.Creemos que
                                                todas las empresas, independientemente de su tamaño, merecen la oportunidad de prosperar en
                                                el panorama digital actual.Trabajamos incansablemente para brindar servicios de alta calidad
                                                que tengan un impacto positivo en el crecimiento y la presencia en línea de nuestros
                                                clientes.</p>
                                            <!-- <p class='hidden-sm'>I must explain to you how all this mistaken idea of denouncing pleure and prsing pain was born and I will give you a complete account of the system</p> -->
                                            <a class='default-btn' href='https://wa.me/522212145723?text=Hola engranet' target='_blank' style='background-color: #229655;'>Escribenos por WhatsApp</a>
                                        </div>
                                    </div>
                                    <div class='col-md-6 col-sm-6'>
                                        <div class='about-img'>
                                            <img src='img/about/about.png' alt='about'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- About End -->

                        <!-- Principales Clientes Start-->
                        <div class='event-area two text-center pt-100 pb-145'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='section-title'>
                                            <img src='img/icon/clientes.png' alt='section-title'>
                                            <h2>PRINCIPALESS CLIENTES</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-6'>
                                        <div class='single-event mb-35'>
                                            <div class='event-img'>
                                                <a href='./contacto.html'><img src='img/event/event1.jpg' alt='event'></a>
                                            </div>
                                            <!-- <div class='event-content text-start'>
                                                <h3>20 June 2021</h3>
                                                <h4><a href='event-details.html'>ADVANCE PHP WORKSHOP</a></h4>
                                                <ul>
                                                    <li><i class='fa fa-clock-o'></i>9.00 AM - 4.45 PM</li>
                                                    <li><i class='fa fa-map-marker'></i>New Yourk City</li>
                                                </ul>
                                                <div class='event-content-right'>
                                                    <a class='default-btn' href='event-details.html'>join now</a>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class='single-event mb-35 mb-md-0'>
                                            <div class='event-img'>
                                                <a href='./contacto.html'><img src='img/event/event2.jpg' alt='event'></a>
                                            </div>
                                            <!-- <div class='event-content text-start'>
                                                <h3>16 June 2021</h3>
                                                <h4><a href='event-details.html'>learning english history</a></h4>
                                                <ul>
                                                    <li><i class='fa fa-clock-o'></i>9.00 AM - 4.45 PM</li>
                                                    <li><i class='fa fa-map-marker'></i>New Yourk City</li>
                                                </ul>
                                                <div class='event-content-right'>
                                                    <a class='default-btn' href='event-details.html'>join now</a>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class='col-lg-6'>
                                        <div class='single-event mb-35'>
                                            <div class='event-img'>
                                                <a href='./contacto.html'><img src='img/event/event3.jpg' alt='event'></a>
                                            </div>
                                            <!-- <div class='event-content text-start'>
                                                <h3>18 June 2021</h3>
                                                <h4><a href='event-details.html'>DIGITAL MARKETING ANALYSIS</a></h4>
                                                <ul>
                                                    <li><i class='fa fa-clock-o'></i>9.00 AM - 4.45 PM</li>
                                                    <li><i class='fa fa-map-marker'></i>New Yourk City</li>
                                                </ul>
                                                <div class='event-content-right'>
                                                    <a class='default-btn' href='event-details.html'>join now</a>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class='single-event'>
                                            <div class='event-img'>
                                                <a href='./contacto.html'><img src='img/event/event4.jpg' alt='event'></a>
                                            </div>
                                            <!-- <div class='event-content text-start'>
                                                <h3>14 June 2021</h3>
                                                <h4><a href='event-details.html'>UI & UX DESIGNER MEETUP</a></h4>
                                                <ul>
                                                    <li><i class='fa fa-clock-o'></i>9.00 AM - 4.45 PM</li>
                                                    <li><i class='fa fa-map-marker'></i>New Yourk City</li>
                                                </ul>
                                                <div class='event-content-right'>
                                                    <a class='default-btn' href='event-details.html'>join now</a>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class='col-lg-6'>
                                        <div class='single-event mb-35'>
                                            <div class='event-img'>
                                                <a href='./contacto.html'><img src='img/event/event5-1.jpg' alt='event'></a>
                                            </div>
                                            <!-- <div class='event-content text-start'>
                                                <h3>18 June 2021</h3>
                                                <h4><a href='event-details.html'>DIGITAL MARKETING ANALYSIS</a></h4>
                                                <ul>
                                                    <li><i class='fa fa-clock-o'></i>9.00 AM - 4.45 PM</li>
                                                    <li><i class='fa fa-map-marker'></i>New Yourk City</li>
                                                </ul>
                                                <div class='event-content-right'>
                                                    <a class='default-btn' href='event-details.html'>join now</a>
                                                </div>
                                            </div> -->
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Principales Clientes End-->

                        <!-- Teacher Start -->
                        <div class='teacher-area pb-150'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-12'>
                                        <div class='section-title text-center'>
                                            <img src='img/icon/team.png' alt='title'>
                                            <h2>Nuestro equipo</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-lg-6 col-sm-6'>
                                        <div class='single-teacher'>
                                            <div class='single-teacher-img'>
                                                <img src='img/teacher/teacher1.jpg' alt='teacher'>
                                            </div>
                                            <div class='single-teacher-content text-center'>
                                                <h2>Aldahir Martinez</h2>
                                                <h4>Cofundador & director ejecutivo</h4>
                                                <ul>
                                                    <li>
                                                        <p>
                                                            El liderazgo visionario de Aldahir impulsa el éxito de Engranet al brindar
                                                            estrategias de marketing digital efectivas y accesibles a las pequeñas
                                                            empresas.Es un gurú del marketing.
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='col-lg-6 col-sm-6'>
                                        <div class='single-teacher'>
                                            <div class='single-teacher-img'>
                                                <img src='img/teacher/teacher2.jpg' alt='teacher'>
                                            </div>
                                            <div class='single-teacher-content text-center'>
                                                <h2>Erick Marcia</h2>
                                                <h4>Desarrolador FullStack</h4>
                                                <ul>
                                                    <li>
                                                        <p>
                                                            Un colaborador excepcional que, con su experiencia como programador de area y su
                                                            compromiso con el éxito empresarial, contribuye significativamente al
                                                            crecimiento y la prosperidad de las pequeñas empresas y las empresas nacionales,
                                                            como Soriana, en México.
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Teacher End -->

                        <!-- Subscribe Start -->
                        <div class='subscribe-area pt-60 pb-70'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-lg-8 offset-lg-2'>
                                        <div class='subscribe-content section-title text-center'>
                                            <h2>Suscríbete a nuestro canal</h2>
                                            <p>Conce las mejores herramientas que google ofrece para tu negocio.</p>
                                        </div>
                                        <div class='newsletter-form mc_embed_signup'>
                                            <form class='formSucriptor' action='registroweb.php' method='post'>
                                                <div id='mc_embed_signup_scroll' class='mc-form'> 

                                                    <input type='email' value='' name='correo' class='email'  placeholder='Introduzca su dirección de correo electrónico' required>
                                                    <input type='text' name='nombre' value='Suscriptor' hidden>
                                                    <input type='text' name='telefono' value='Suscriptor' hidden>
                                                    <input type='text' name='mensaje' value='Suscriptor' hidden>

                                                    <button id='mc-embedded-subscribe' class='default-btn' type='submit' name='subscribe'><span>Suscribite</span></button> 
                                                </div>    
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Subscribe End -->
        
                        <!-- Footer Start -->
                        <footer class='footer-area'>
                            <div class='main-footer'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget pr-60'>
                                                <div class='footer-logo pb-25'>
                                                    <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome'></a>
                                                </div>
                                                <p>$bodyFooterSlogan</p>
                                                <div class='footer-social'>
                                                    <ul>
                                                        <li><a href='$bodyFooterLinkFacebook' target='_blank'><i class='zmdi zmdi-facebook'></i></a></li>
                                                        <!--<li><a href='https://twitter.com/devitemsllc'><i class='zmdi zmdi-instagram'></i></a></li> -->
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget'>
                                                <h3>$bodyFooterTitleContacto</h3>
                                                <p>$bodyFooterDireccionNegocio_uno</p>
                                                <p>$bodyFooterDireccionNegocio_dos</p>
                                                <p>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_uno' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a>
                                                    <br>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_dos' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a></p>
                                                <!-- <p>$bodyFooterEmailNegocio_uno</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class='footer-bottom text-center'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <p>$bodyFooterCopyright</p>
                                        </div> 
                                    </div>
                                </div>    
                            </div>
                        </footer>
                        <!-- Footer End -->
                        $bodyheadFooterScript
                        <script src='js/vendor/jquery-3.6.0.min.js'></script>
                        <script src='js/vendor/jquery-migrate-3.3.2.min.js'></script>
                        <script src='js/bootstrap.bundle.min.js'></script>
                        <script src='js/jquery.meanmenu.js'></script>
                        <script src='js/jquery.magnific-popup.js'></script>
                        <script src='js/ajax-mail.js'></script>
                        <script src='js/owl.carousel.min.js'></script>
                        <script src='js/jquery.mb.YTPlayer.js'></script>
                        <script src='js/jquery.nicescroll.min.js'></script>
                        <script src='js/plugins.js'></script>
                        <script src='js/main.js'></script>
                        $bodybtnWhatsapp
                    </body>
                </html>
            ";
            $Ruta = '../'.$filePatchServer.$fileNameWeb;
            //echo $Ruta;
            if (file_put_contents($Ruta, $PageWebFile)) {
                header('Location: ../viewWebLista.php'); // Redireccionar a la página principal después de actualizar el registro
                exit();
            } else {
                return  'Hubo un error al crear el archivo.';
            }
            break;
        case 3:
            $PageWebFile = "
                <!doctype html>
                <html class='no-js' lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>$headTitle</title>
                        <meta name='viewport' content='width=device-width, initial-scale=1'>
                        <!-- Favicon, robots, description,keywords -->
                        <link rel='shortcut icon' type='image/x-icon' href='./img/engranet/logo.jpg'> 
                        <meta name='robots' content='index,follow'>
                        <meta name='description' content='$headDescription'>
                        <meta name='keywords' content='$headKeywords'>
                        <!-- Favicon, robots, description,keywords -->
                        <!-- Link css, js -->
                        <link rel='stylesheet' href='css/bootstrap.min.css'>
                        <link rel='stylesheet' href='css/animate.min.css'>
                        <link rel='stylesheet' href='css/meanmenu.css'>
                        <link rel='stylesheet' href='css/magnific-popup.css'>
                        <link rel='stylesheet' href='css/owl.carousel.min.css'>
                        <link rel='stylesheet' href='css/font-awesome.min.css'>
                        <link rel='stylesheet' href='css/et-line-icon.css'>
                        <link rel='stylesheet' href='css/reset.css'>
                        <link rel='stylesheet' href='css/ionicons.min.css'>
                        <link rel='stylesheet' href='css/material-design-iconic-font.min.css'>
                        <link rel='stylesheet' href='css/style.css'>
                        <link rel='stylesheet' href='css/responsive.css'>
                        <script src='js/vendor/modernizr-3.11.2.min.js'></script>
                        <!-- Link css, js -->
                        $headPlugins
                    </head>
                    <body>
                        <header class='top'>
                            <div class='header-top'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-12 col-sm-12'>
                                            <div class='header-top-left'>
                                                <p> 
                                                    $bodyFooterTitleContacto
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_uno'>$bodyFooterTelefonoNegocio_uno</a> /
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_dos'>$bodyFooterTelefonoNegocio_uno</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='header-area two header-sticky'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-3 col-sm-5 col-6'>
                                            <div class='logo'>
                                                <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome' /></a>
                                            </div>
                                        </div>
                                        <div class='col-md-9 col-sm-7 col-6'>
                                            <div class='content-wrapper text-end'>
                                                <!-- Main Menu Start -->
                                                <div class='main-menu'>
                                                    <nav>
                                                        <ul>
                                                            <li><a class='nav-link' href='index.html'>Inicio</a></li>
                                                            <li><a class='nav-link' href='acerca.html'>Acerca de</a></li>
                                                            <li><a class='nav-link' href='servicios.html'>Servicios</a></li>
                                                            <li><a class='nav-link' href='blog-lista.php'>blog</a></li>
                                                            <li><a class='nav-link' href='contacto.html'>Contacto</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-12'>
                                            <div class='mobile-menu hidden-sm'></div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- Header Area End -->
                        
                        <!-- Banner Area Start -->
                        <div class='banner-area-wrapper'>
                            <div class='banner-area text-center'>	
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <div class='banner-content-wrapper'>
                                                <div class='banner-content'>
                                                    <h2>Servicios digitales</h2> 
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <!-- Banner Area End -->
                
                        <!-- Course Start -->
                        <div class='course-area pt-150 pb-150'>
                            <div class='container'>    
                            <div class='row'>
                                <div class='col-lg-4 col-md-6'>
                                    <div class='single-course mb-70'>
                                        <div class='course-img'>
                                            <a href='servicios-desarrollo-web.html'><img src='img/course/course-paginaweb.jpg' alt='course'>
                                                <div class='course-hover'>
                                                    <i class='fa fa-link'></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class='course-content'>
                                            <h3><a href='servicios-desarrollo-web.html'>Programación para Empresas: Sitios Web, E-commerce, CRM y Sistemas
                
                                                Personalizados</a></h3>
                                            <p>Desde sitios web cautivadores hasta soluciones personalizadas de CRM y sistemas
                                                a medida, nuestra programación para empresas transforma tus ideas en realidad. La
                                                
                                                innovación es el camino hacia un crecimiento.</p>
                                            <a class='default-btn' href='servicios-desarrollo-web.html'>Detalles del servicio</a>
                                        </div>   
                                    </div>
                                </div>
                                <div class='col-lg-4 col-md-6'>
                                    <div class='single-course mb-70'>
                                        <div class='course-img'>
                                            <a href='servicios-marketing-digital.html'><img src='img/course/course-sitioweb.jpg' alt='course'>
                                                <div class='course-hover'>
                                                    <i class='fa fa-link'></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class='course-content'>
                                            <h3><a href='servicios-marketing-digital.html'>Servicios de Marketing y Publicidad</a></h3>
                                            <p>Nuestros servicios de marketing y publicidad están diseñados para llevarte al
                                                siguiente nivel. Destaca en un mundo digital atrae a tu audiencia y convierte visitantes en
                                                
                                                clientes leales. Tu éxito se mide.</p>
                                            <a class='default-btn' href='servicios-marketing-digital.html'>Detalles del servicio</a>
                                        </div>   
                                    </div>
                                </div>
                                <div class='col-lg-4 col-md-6'>
                                    <div class='single-course mb-70'>
                                        <div class='course-img'>
                                            <a href='servicios-adicionales.html'><img src='img/course/course-tiendaenlinea.jpg' alt='course'>
                                                <div class='course-hover'>
                                                    <i class='fa fa-link'></i>
                                                </div>
                                            </a>
                                        </div>
                                        <div class='course-content'>
                                            <h3><a href='servicios-adicionales.html'>Paquetes Armados para Crecimiento Digital y Empresarial</a></h3>
                                            <p>Nuestros paquetes armados integran estrategias de marketing, desarrollo web y
                                                soluciones empresariales para simplificar tu viaje hacia el éxito. Con nosotros, tu
                                                crecimiento digital y empresarial se convierte en una realidad mediante matricas
                                                
                                                medibles.</p>
                                            <a class='default-btn' href='servicios-adicionales.html'>Detalles del servicio</a>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div> 
                        </div>       
                        <!-- Course End -->

                        <!-- Subscribe Start -->
                        <div class='subscribe-area pt-60 pb-70'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-lg-8 offset-lg-2'>
                                        <div class='subscribe-content section-title text-center'>
                                            <h2>Suscríbete a nuestro canal</h2>
                                            <p>Conce las mejores herramientas que google ofrece para tu negocio.</p>
                                        </div>
                                        <div class='newsletter-form mc_embed_signup'>
                                            <form class='formSucriptor' action='registroweb.php' method='post'>
                                                <div id='mc_embed_signup_scroll' class='mc-form'> 

                                                    <input type='email' value='' name='correo' class='email'  placeholder='Introduzca su dirección de correo electrónico' required>
                                                    <input type='text' name='nombre' value='Suscriptor' hidden>
                                                    <input type='text' name='telefono' value='Suscriptor' hidden>
                                                    <input type='text' name='mensaje' value='Suscriptor' hidden>

                                                    <button id='mc-embedded-subscribe' class='default-btn' type='submit' name='subscribe'><span>Suscribite</span></button> 
                                                </div>    
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Subscribe End -->
        
                        <!-- Footer Start -->
                        <footer class='footer-area'>
                            <div class='main-footer'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget pr-60'>
                                                <div class='footer-logo pb-25'>
                                                    <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome'></a>
                                                </div>
                                                <p>$bodyFooterSlogan</p>
                                                <div class='footer-social'>
                                                    <ul>
                                                        <li><a href='$bodyFooterLinkFacebook' target='_blank'><i class='zmdi zmdi-facebook'></i></a></li>
                                                        <!--<li><a href='https://twitter.com/devitemsllc'><i class='zmdi zmdi-instagram'></i></a></li> -->
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget'>
                                                <h3>$bodyFooterTitleContacto</h3>
                                                <p>$bodyFooterDireccionNegocio_uno</p>
                                                <p>$bodyFooterDireccionNegocio_dos</p>
                                                <p>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_uno' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a>
                                                    <br>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_dos' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a></p>
                                                <!-- <p>$bodyFooterEmailNegocio_uno</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class='footer-bottom text-center'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <p>$bodyFooterCopyright</p>
                                        </div> 
                                    </div>
                                </div>    
                            </div>
                        </footer>
                        <!-- Footer End -->
                        $bodyheadFooterScript
                        <script src='js/vendor/jquery-3.6.0.min.js'></script>
                        <script src='js/vendor/jquery-migrate-3.3.2.min.js'></script>
                        <script src='js/bootstrap.bundle.min.js'></script>
                        <script src='js/jquery.meanmenu.js'></script>
                        <script src='js/jquery.magnific-popup.js'></script>
                        <script src='js/ajax-mail.js'></script>
                        <script src='js/owl.carousel.min.js'></script>
                        <script src='js/jquery.mb.YTPlayer.js'></script>
                        <script src='js/jquery.nicescroll.min.js'></script>
                        <script src='js/plugins.js'></script>
                        <script src='js/main.js'></script>
                        $bodybtnWhatsapp
                    </body>
                </html>
            ";
            $Ruta = '../'.$filePatchServer.$fileNameWeb;
            //echo $Ruta;
            if (file_put_contents($Ruta, $PageWebFile)) {
                header('Location: ../viewWebLista.php'); // Redireccionar a la página principal después de actualizar el registro
                exit();
            } else {
                return  'Hubo un error al crear el archivo.';
            }
        break;
        case 4:
            $PageWebFile = "
                <!doctype html>
                <html class='no-js' lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>$headTitle</title>
                        <meta name='viewport' content='width=device-width, initial-scale=1'>
                        <!-- Favicon, robots, description,keywords -->
                        <link rel='shortcut icon' type='image/x-icon' href='./img/engranet/logo.jpg'> 
                        <meta name='robots' content='index,follow'>
                        <meta name='description' content='$headDescription'>
                        <meta name='keywords' content='$headKeywords'>
                        <!-- Favicon, robots, description,keywords -->
                        <!-- Link css, js -->
                        <link rel='stylesheet' href='css/bootstrap.min.css'>
                        <link rel='stylesheet' href='css/animate.min.css'>
                        <link rel='stylesheet' href='css/meanmenu.css'>
                        <link rel='stylesheet' href='css/magnific-popup.css'>
                        <link rel='stylesheet' href='css/owl.carousel.min.css'>
                        <link rel='stylesheet' href='css/font-awesome.min.css'>
                        <link rel='stylesheet' href='css/et-line-icon.css'>
                        <link rel='stylesheet' href='css/reset.css'>
                        <link rel='stylesheet' href='css/ionicons.min.css'>
                        <link rel='stylesheet' href='css/material-design-iconic-font.min.css'>
                        <link rel='stylesheet' href='css/style.css'>
                        <link rel='stylesheet' href='css/responsive.css'>
                        <script src='js/vendor/modernizr-3.11.2.min.js'></script>
                        <!-- Link css, js -->
                        $headPlugins
                    </head>
                    <body>
                        <header class='top'>
                            <div class='header-top'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-12 col-sm-12'>
                                            <div class='header-top-left'>
                                                <p> 
                                                    $bodyFooterTitleContacto
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_uno'>$bodyFooterTelefonoNegocio_uno</a> /
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_dos'>$bodyFooterTelefonoNegocio_uno</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='header-area two header-sticky'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-3 col-sm-5 col-6'>
                                            <div class='logo'>
                                                <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome' /></a>
                                            </div>
                                        </div>
                                        <div class='col-md-9 col-sm-7 col-6'>
                                            <div class='content-wrapper text-end'>
                                                <!-- Main Menu Start -->
                                                <div class='main-menu'>
                                                    <nav>
                                                        <ul>
                                                            <li><a class='nav-link' href='index.html'>Inicio</a></li>
                                                            <li><a class='nav-link' href='acerca.html'>Acerca de</a></li>
                                                            <li><a class='nav-link' href='servicios.html'>Servicios</a></li>
                                                            <li><a class='nav-link' href='blog-lista.php'>blog</a></li>
                                                            <li><a class='nav-link' href='contacto.html'>Contacto</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-12'>
                                            <div class='mobile-menu hidden-sm'></div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- Header Area End -->

                        <!-- Banner Area Start -->
                        <div class='banner-area-wrapper'>
                            <div class='banner-area text-center'>	
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <div class='banner-content-wrapper'>
                                                <div class='banner-content'>
                                                    <h2>Blog</h2> 
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <!-- Banner Area End -->
                        
                        <!-- Course Start -->
                        <div class='course-area pt-150 pb-150'>
                            <div class='container'>   
                                <div class='row'>

                                </div>
                            </div> 
                        </div>    

                        <!-- Subscribe Start -->
                        <div class='subscribe-area pt-60 pb-70'>
                            <div class='container'>
                                <div class='row'>
                                    <div class='col-lg-8 offset-lg-2'>
                                        <div class='subscribe-content section-title text-center'>
                                            <h2>Suscríbete a nuestro canal</h2>
                                            <p>Conce las mejores herramientas que google ofrece para tu negocio.</p>
                                        </div>
                                        <div class='newsletter-form mc_embed_signup'>
                                            <form class='formSucriptor' action='registroweb.php' method='post'>
                                                <div id='mc_embed_signup_scroll' class='mc-form'> 

                                                    <input type='email' value='' name='correo' class='email'  placeholder='Introduzca su dirección de correo electrónico' required>
                                                    <input type='text' name='nombre' value='Suscriptor' hidden>
                                                    <input type='text' name='telefono' value='Suscriptor' hidden>
                                                    <input type='text' name='mensaje' value='Suscriptor' hidden>

                                                    <button id='mc-embedded-subscribe' class='default-btn' type='submit' name='subscribe'><span>Suscribite</span></button> 
                                                </div>    
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Subscribe End -->
        
                        <!-- Footer Start -->
                        <footer class='footer-area'>
                            <div class='main-footer'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget pr-60'>
                                                <div class='footer-logo pb-25'>
                                                    <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome'></a>
                                                </div>
                                                <p>$bodyFooterSlogan</p>
                                                <div class='footer-social'>
                                                    <ul>
                                                        <li><a href='$bodyFooterLinkFacebook' target='_blank'><i class='zmdi zmdi-facebook'></i></a></li>
                                                        <!--<li><a href='https://twitter.com/devitemsllc'><i class='zmdi zmdi-instagram'></i></a></li> -->
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget'>
                                                <h3>$bodyFooterTitleContacto</h3>
                                                <p>$bodyFooterDireccionNegocio_uno</p>
                                                <p>$bodyFooterDireccionNegocio_dos</p>
                                                <p>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_uno' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a>
                                                    <br>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_dos' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a></p>
                                                <!-- <p>$bodyFooterEmailNegocio_uno</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class='footer-bottom text-center'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <p>$bodyFooterCopyright</p>
                                        </div> 
                                    </div>
                                </div>    
                            </div>
                        </footer>
                        <!-- Footer End -->
                        $bodyheadFooterScript
                        <script src='js/vendor/jquery-3.6.0.min.js'></script>
                        <script src='js/vendor/jquery-migrate-3.3.2.min.js'></script>
                        <script src='js/bootstrap.bundle.min.js'></script>
                        <script src='js/jquery.meanmenu.js'></script>
                        <script src='js/jquery.magnific-popup.js'></script>
                        <script src='js/ajax-mail.js'></script>
                        <script src='js/owl.carousel.min.js'></script>
                        <script src='js/jquery.mb.YTPlayer.js'></script>
                        <script src='js/jquery.nicescroll.min.js'></script>
                        <script src='js/plugins.js'></script>
                        <script src='js/main.js'></script>
                        $bodybtnWhatsapp
                    </body>
                </html>
            ";
            $Ruta = '../'.$filePatchServer.$PageWeb['fileNameWeb'].'.php';
            //echo $Ruta;
            if (file_put_contents($Ruta, $PageWebFile)) {
                header('Location: ../viewWebLista.php'); // Redireccionar a la página principal después de actualizar el registro
                exit();
            } else {
                return  'Hubo un error al crear el archivo.';
            }
            break;
        case 5:
            $PageWebFile = "
                <!doctype html>
                <html class='no-js' lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>$headTitle</title>
                        <meta name='viewport' content='width=device-width, initial-scale=1'>
                        <!-- Favicon, robots, description,keywords -->
                        <link rel='shortcut icon' type='image/x-icon' href='./img/engranet/logo.jpg'> 
                        <meta name='robots' content='index,follow'>
                        <meta name='description' content='$headDescription'>
                        <meta name='keywords' content='$headKeywords'>
                        <!-- Favicon, robots, description,keywords -->
                        <!-- Link css, js -->
                        <link rel='stylesheet' href='css/bootstrap.min.css'>
                        <link rel='stylesheet' href='css/animate.min.css'>
                        <link rel='stylesheet' href='css/meanmenu.css'>
                        <link rel='stylesheet' href='css/magnific-popup.css'>
                        <link rel='stylesheet' href='css/owl.carousel.min.css'>
                        <link rel='stylesheet' href='css/font-awesome.min.css'>
                        <link rel='stylesheet' href='css/et-line-icon.css'>
                        <link rel='stylesheet' href='css/reset.css'>
                        <link rel='stylesheet' href='css/ionicons.min.css'>
                        <link rel='stylesheet' href='css/material-design-iconic-font.min.css'>
                        <link rel='stylesheet' href='css/style.css'>
                        <link rel='stylesheet' href='css/responsive.css'>
                        <script src='js/vendor/modernizr-3.11.2.min.js'></script>
                        <!-- Link css, js -->
                        $headPlugins
                    </head>
                    <body>
                        <header class='top'>
                            <div class='header-top'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-12 col-sm-12'>
                                            <div class='header-top-left'>
                                                <p> 
                                                    $bodyFooterTitleContacto
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_uno'>$bodyFooterTelefonoNegocio_uno</a> /
                                                    <a style='color: aliceblue;' href='tel:+52$bodyFooterTelefonoNegocio_dos'>$bodyFooterTelefonoNegocio_uno</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='header-area two header-sticky'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-md-3 col-sm-5 col-6'>
                                            <div class='logo'>
                                                <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome' /></a>
                                            </div>
                                        </div>
                                        <div class='col-md-9 col-sm-7 col-6'>
                                            <div class='content-wrapper text-end'>
                                                <!-- Main Menu Start -->
                                                <div class='main-menu'>
                                                    <nav>
                                                        <ul>
                                                            <li><a class='nav-link' href='index.html'>Inicio</a></li>
                                                            <li><a class='nav-link' href='acerca.html'>Acerca de</a></li>
                                                            <li><a class='nav-link' href='servicios.html'>Servicios</a></li>
                                                            <li><a class='nav-link' href='blog-lista.php'>blog</a></li>
                                                            <li><a class='nav-link' href='contacto.html'>Contacto</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-12'>
                                            <div class='mobile-menu hidden-sm'></div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- Header Area End -->
                        
                        <!-- Banner Area Start -->
                        <div class='banner-area-wrapper'>
                            <div class='banner-area text-center'>	
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <div class='banner-content-wrapper'>
                                                <div class='banner-content'>
                                                    <h2>Contacto</h2> 
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <!-- Banner Area End -->
                        <!-- Contact Start -->
                        <div class='map-area'>
                            <!-- google-map-area start -->
                            <div class='google-map-area'>
                                <!--  Map Section -->
                                <div id='contacts' class='map-area'>
                                    <div>
                                        <iframe src='https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d60368.449008317446!2d-98.21314100000001!3d18.974368!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfbf37faa0076d%3A0xc2c6fefcb84ad40!2sdigiceo!5e0!3m2!1ses-419!2smx!4v1697495957665!5m2!1ses-419!2smx' width='100%' height='440' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class='contact-area pt-150 pb-140'> 
                            <div class='container'>     
                                <div class='row'>
                                    <div class='col-lg-5 col-md-5'>
                                        <div class='contact-contents text-center'>
                                            <div class='single-contact mb-65'>
                                                <div class='contact-icon'>
                                                    <img src='img/contact/contact1.png' alt='contact'>
                                                </div>
                                                <div class='contact-add'>
                                                    <h3>Dirección</h3>
                                                    <p>Fracc Los Heroes Puebla 72590</p>
                                                    <p>Puebla, Puebla 72590</p>
                                                </div>
                                            </div>
                                            <div class='single-contact mb-65'>
                                                <div class='contact-icon'>
                                                    <img src='img/contact/contact1.png' alt='contact'>
                                                </div>
                                                <div class='contact-add'>
                                                    <h3>Dirección</h3>
                                                    <p>Av Paseo de los Leones 1551</p>
                                                    <p>Monterrey, Nuevo Leon 64610</p>
                                                </div>
                                            </div>
                                            <div class='single-contact mb-65'>
                                                <div class='contact-icon'>
                                                    <img src='img/contact/contact2.png' alt='contact'>
                                                </div>
                                                <div class='contact-add'>
                                                    <h3>Telefonos</h3>
                                                    <p><a style='color:gray;' href='tel:+522212145723'>+52 22 1214 5723</a></p>
                                                    <p><a style='color:gray;' href='tel:+528180789607'>+52 81 8078 9607</a></p>
                                                </div>
                                            </div>
                                            <!-- <div class='single-contact'>
                                                <div class='contact-icon'>
                                                    <img src='img/contact/contact3.png' alt='contact'>
                                                </div>
                                                <div class='contact-add'>
                                                    <h3>address</h3>
                                                    <p>135, First Lane, City Street</p>
                                                    <p>New Yourk City, USA</p>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>    
                                    <div class='col-lg-7 col-md-7'>
                                        <div class='reply-area'>
                                            <h3>¿TIENES DUDAS O QUIERES UN ASESORAMIENTO?</h3>
                                            <p>No dude en llamarnos o enviarnos un correo electrónico, o utilice nuestro formulario de contacto para ponerse en contacto con nosotros ¡Con gusto colaboramos en el crecimiento de tu proyecto! </p>

                                            <form class='formInteresado' action='registroweb.php' method='POST'>
                                                <div class='row'>
                                                    <div class='col-md-12'>
                                                        <p>Nombre completo</p>
                                                        <input type='text' name='nombre'>
                                                    </div>
                                                    <div class='col-md-12'>
                                                        <p>Correo Electronico</p>
                                                        <input type='text' name='correo'>
                                                    </div>
                                                    <div class='col-md-12'>
                                                        <p>Telefono</p>
                                                        <input type='text' name='telefono'>
                                                        <p>Mensaje</p>
                                                        <textarea name='mensaje' cols='15' rows='10'></textarea>
                                                    </div>
                                                </div>
                                                <button class='reply-btn' type='submit'><span>Mandar Mensaje</span></button>
                                                <p class='form-message'></p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Contact End -->
        
                        <!-- Footer Start -->
                        <footer class='footer-area'>
                            <div class='main-footer'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget pr-60'>
                                                <div class='footer-logo pb-25'>
                                                    <a href='index.html'><img src='$bodyFooterLogo' alt='eduhome'></a>
                                                </div>
                                                <p>$bodyFooterSlogan</p>
                                                <div class='footer-social'>
                                                    <ul>
                                                        <li><a href='$bodyFooterLinkFacebook' target='_blank'><i class='zmdi zmdi-facebook'></i></a></li>
                                                        <!--<li><a href='https://twitter.com/devitemsllc'><i class='zmdi zmdi-instagram'></i></a></li> -->
                                                    </ul>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class='col-lg-6 col-md-6 pt-4 pt-lg-0'>
                                            <div class='single-widget'>
                                                <h3>$bodyFooterTitleContacto</h3>
                                                <p>$bodyFooterDireccionNegocio_uno</p>
                                                <p>$bodyFooterDireccionNegocio_dos</p>
                                                <p>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_uno' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a>
                                                    <br>
                                                    <a style='color:gray;' href='tel:+52$bodyFooterTelefonoNegocio_dos' target='_blank'>+52 $bodyFooterTelefonoNegocio_uno</a></p>
                                                <!-- <p>$bodyFooterEmailNegocio_uno</p> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class='footer-bottom text-center'>
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-12'>
                                            <p>$bodyFooterCopyright</p>
                                        </div> 
                                    </div>
                                </div>    
                            </div>
                        </footer>
                        <!-- Footer End -->
                        $bodyheadFooterScript
                        <script src='js/vendor/jquery-3.6.0.min.js'></script>
                        <script src='js/vendor/jquery-migrate-3.3.2.min.js'></script>
                        <script src='js/bootstrap.bundle.min.js'></script>
                        <script src='js/jquery.meanmenu.js'></script>
                        <script src='js/jquery.magnific-popup.js'></script>
                        <script src='js/ajax-mail.js'></script>
                        <script src='js/owl.carousel.min.js'></script>
                        <script src='js/jquery.mb.YTPlayer.js'></script>
                        <script src='js/jquery.nicescroll.min.js'></script>
                        <script src='js/plugins.js'></script>
                        <script src='js/main.js'></script>
                        $bodybtnWhatsapp
                    </body>
                </html>
            ";
            $Ruta = '../'.$filePatchServer.$fileNameWeb;
            //echo $Ruta;
            if (file_put_contents($Ruta, $PageWebFile)) {
                header('Location: ../viewWebLista.php'); // Redireccionar a la página principal después de actualizar el registro
                exit();
            } else {
                return  'Hubo un error al crear el archivo.';
            }
            break;
        default:
            echo 'Opción no válida';
    }
?>


