<?php 
    require_once './connection/conexion.php';
    // Obtener los valores ingresados en el formulario
    $correo = $_POST['correo'];
                
    // Consultar la base de datos para verificar el usuario
    $sql = "SELECT * FROM tb_login WHERE correo = '$correo'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuario válido, redireccionar a la página de inicio

        $row = mysqli_fetch_assoc($result);
        $password = $row['password'];
        $dominio = $row['dominioB2B'];
        mail($_POST['correo'], "Recuperacion de tu perfil MexiClientes", "Buenas tardes, es un gusto ayudarle, mandamos su clave: $password & Dominio: $dominio & Correo: $correo" );
        exit();
    } else {
        // Usuario inválido, mostrar mensaje de error
        $mensaje_error = "Nombre de usuario o contraseña incorrectos.";
    }
?>
    <br><br><br><br><br><br>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-6">
                <div class="container text-center">
                    <div class="row justify-content-center">
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <h3>Recupera tu perfil MexiClientes</h3>
                            <div class="mb-3">
                                <label for="email" class="form-label ">Dirección de correo electrónico </label>
                                <input type="email" class="form-control" name="correo" id="correo" require placeholder="name@example.com">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-outline-dark" name="md_insert" type="submit">Recuperar cuenta</button>
                            </div> <br>
                            <div class="d-grid">
                                <button class="btn btn-outline-dark" type="submit"><a href="/login">Regresar al Menu</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>