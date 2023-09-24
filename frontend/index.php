<?php
    include_once '../backend/php/login.php'
?>
<html lang="es">

<head>
    <?php include_once '../backend/modal/head.php' ?>
</head>

<body>
    <div class="padre-fondo">
        <div class="hijo">
            <div class="fila">
                <div class="columna12">
                    <?php
                    // mostrar.php
                    if (isset($_GET["view"]) && $_GET["view"] != "") {
                        $url = "frontend/inicio_sesion/" . $_GET["view"] . ".php";
                        if (file_exists($url)) {
                            include $url;
                        } else {
                            echo "<h1>404 PAGINA NO ENCONTRADA</h1>";
                        }
                    } else {
                        include "./inicio_sesion/login.php";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php include_once '../backend/modal/footer.php' ?>
</body>

</html>