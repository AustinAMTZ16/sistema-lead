<?php
// Iniciar la sesión

session_start();

// Configuración de la base de datos
// $servername = "localhost";
// $username = "tu_usuario";
// $password = "tu_contraseña";
// $dbname = "nombre_de_tu_base_de_datos";

$host = '45.89.204.4';
$user = 'u115254492_rootdck';
$password = '1~wR>Qs3FC';
$database = 'u115254492_apidck';


// Conecta a la base de datos
// $conn = mysqli_connect($host, $user, $password, $database);

// Crear la conexión
$conn = new mysqli($host, $user, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores ingresados en el formulario
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    

    // Consultar la base de datos para verificar el usuario
    //$sql = "SELECT * FROM usuarios WHERE nombre_usuario = '$usuario' AND contraseña = '$contraseña'";
    $sql = "SELECT * FROM tb_login WHERE dominioB2B = '$usuario' and password = '$contraseña'";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuario válido, redireccionar a la página de inicio
        
        $row = mysqli_fetch_assoc($result);
        $_SESSION["isUser"] = $row['idLogin'];
        $_SESSION['usuario'] = $row['dominioB2B'];
        $_SESSION['giroDominio'] = $row['giroDominio'];


        header("Location: panelcontrol.php");
        exit();
    } else {
        // Usuario inválido, mostrar mensaje de error
        $mensaje_error = "Nombre de usuario o contraseña incorrectos.";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Inicio</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<!-- Aquí empieza el formulario HTML -->

<body>





    <div class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card bg-white">
                        <div class="card-body p-5">
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                                <div class="mb-3">
                                    <label for="email" class="form-label ">Usuario </label>
                                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="name@example.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label ">Contraseña</label>
                                    <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder="*******" required>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-outline-dark" type="submit">Login</button>
                                </div>
                            </form>

                        </div>
                        <?php
                        // Mostrar mensaje de error, si existe
                        if (isset($mensaje_error)) {
                            echo '<p style="color: red;">' . $mensaje_error . '</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>