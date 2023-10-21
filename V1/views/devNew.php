<?php
    session_start();
    // Iniciar la sesión
    require_once '../connection/conexion.php';
    //echo $$_SESSION["usuario"];
    // Verificar si el usuario ha iniciado sesión
    if ($_SESSION["usuario"] != 'engranetmx.com') {
        //Redireccionar al usuario a la página de inicio de sesión
        header("Location: ../index.php");
        exit();
    }

    if (isset($_POST['updateCompany'])) {
        // Verificar si se seleccionó una imagen
        if (isset($_FILES['logotipoEmpresa2']) && $_FILES['logotipoEmpresa2']['error'] === 0) {
            // Leer el archivo de la imagen y convertirlo a base64
            $imagen_base64 = base64_encode(file_get_contents($_FILES['logotipoEmpresa2']['tmp_name']));
            $id_login = $_POST['id_login'];


            // Paso 2: Guardar la imagen en base64 en la base de datos
            
            $sql = "UPDATE tb_empresa SET logotipoEmpresa='$imagen_base64' WHERE id_login=$id_login";

            if ($conn->query($sql) === TRUE) {
                echo "La imagen se ha guardado en la base de datos correctamente.";
            } else {
                echo "Error al guardar la imagen en la base de datos: " .$_POST['id_login']. $conn->error;
            }

        } else {
            echo "Error al subir la imagen.";
        }
    }

    $sqlCatalogoUserLogin = "SELECT * FROM tb_login";
    $rslCatalogoUserLogin = $conn->query($sqlCatalogoUserLogin);
    
    if (isset($_POST['saveCompany'])) {
        if(isset($_POST["dominioB2B"],)){
            $dominioB2B=$_POST['dominioB2B'];
            $password=$_POST['password'];
            $giroDominio=$_POST['giroDominio'];
            $nameCompany = $_POST['nombreEmpresa'];
            $dominioCompany = $_POST['dominioEmpresa'];
            $fecha_actual = date("Y-m-d h:i:s"); 
            // Cortar Cadena 1. innova.com (1)
            $CatalogoUser = substr($_POST["CatalogoUser"], 0, 1);
            // Leer el archivo de la imagen y convertirlo a base64
            $imagen_base64 = base64_encode(file_get_contents($_FILES['logotipoEmpresa']['tmp_name']));

            //Primero registra en tb_login agrega registro y obtinen idLogin
            $sqlLoginUser="INSERT INTO tb_login(dominioB2B, password, fecha_creacion, giroDominio)
            VALUES ('$dominioB2B', '$password', '$fecha_actual', '$giroDominio');";
            //$rslLoginUser = $conn->query($sqlLoginUser);

            if ($conn->query($sqlLoginUser) === TRUE) {
                // Paso 3: Obtener el último ID insertado
                $rslLoginUser = $conn->insert_id;
            
                //echo "El último registro insertado tiene el ID: " . $rslLoginUser;
                // El registro ya existe, realizar una operación de actualización
                //Crear registro BD 
                $sqlAddEmpresa = "INSERT INTO tb_empresa (nombreEmpresa, dominioEmpresa, logotipoEmpresa, id_login)
                VALUES ('$nameCompany', '$dominioCompany', '$imagen_base64', '$rslLoginUser');";
 
                if ($conn->query($sqlAddEmpresa) === TRUE) {
                                echo "El registro de guardo correctamente.";
                } else {
                     echo "Error al guardar el registro en la base de datos: " . $conn->error;
                }
            } else {
                echo "Error en la inserción: " . $conn->error;
            }
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once './head-section/head.php'; ?>
    </head>

    <body>
        <?php require_once './head-section/sectionMenu.php'; ?>
        <div class="padre-fondo">
            <div class="hijo">
                <div class="fila">
                    <div class="columna12 cent">
                        <h2>Registrar Empresa</h2>
                        <form action="./devNew.php" method="POST" enctype="multipart/form-data">
                            <p>NickUser dominio : </p> <br> 
                            <input type="text" name="dominioB2B" id="dominioB2B"> <br> <br>
                            <p>Password login : </p> <br> 
                            <input type="password" name="password" id="password"> <br> <br>
                            <p>Giro  : </p> <br> 
                            <input type="text" name="giroDominio" id="giroDominio"> <br> <br>
                            <p>Nombre Empresa : </p> <br> 
                            <input type="text" name="nombreEmpresa" id="nombreEmpresa"> <br> <br>
                            <p>Dominio Empresa : </p> <br>
                            <input type="text" name="dominioEmpresa" id="dominioEmpresa"> <br> <br>
                            <!-- <select name="CatalogoUser" class="form-select">
                                <option selected>Catalogo Usuarios: </option>
                                <?php //if ($rslCatalogoUserLogin->num_rows > 0) {
                                    //while ($fila = $rslCatalogoUserLogin->fetch_assoc()) {
                                        //echo "<option>" .$fila["idLogin"].'. '. $fila["dominioB2B"] . "</option>";}} 
                                    //else {echo "No se encontraron elementos en la base de datos."; }
                                ?>
                            </select><br> <br> -->
                            <input type="file" name="logotipoEmpresa" id="logotipoEmpresa" > <br> <br>
                            <input type="submit" name="saveCompany" value="Guardar Empresa"> <br>
                        </form> <br><br><br><br>
                        <h2>Subir Imagen</h2>
                        <form action="./devNew.php" method="POST" enctype="multipart/form-data">
                            <input type="text" name="id_login" id="id_login" >
                            <input type="file" name="logotipoEmpresa2" id="logotipoEmpresa2" >
                            <input type="submit" name="updateCompany" value="Guardar Empresa"> <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="padre">
            <div class="hijo">
                <div class="fila">
                    <div class="columna12">
                        <?php
                            $resultad = $conn->query("CALL SumarLealtad()");
                            if ($resultad) {
                                // Puedes recorrer los resultados obtenidos si el procedimiento almacenado devuelve datos
                                while ($fila = $resultad->fetch_assoc()) {
                                    // Procesar cada fila de resultados
                                    // ...
                                    echo '<p>'.$fila['totalSuma'].'</p>';
                                }
                            } else {
                                // Manejar errores si el procedimiento almacenado no se ejecuta correctamente
                                echo "Error al ejecutar el procedimiento almacenado: " . $conn->error;
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once './head-section/web-js.php'; ?>
    </body>
</html>

<?php $conn->close();?>