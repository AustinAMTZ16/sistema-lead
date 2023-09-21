<header class="p-3 mb-3 border-bottom">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                <use xlink:href="#bootstrap"></use>
              </svg>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li>
                <a href="#" class="nav-link px-2 link-dark">Bienvenido,
                  <b>
                    <?php echo $_SESSION["usuario"];?>
                  </b>
                </a>
              </li>
            </ul>

            <div class="dropdown text-end">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">

                <?php
                if ($arregloLogo->num_rows > 0) {
                  // Paso 3: Obtener el valor de la imagen en base64
                  $fila = $arregloLogo->fetch_assoc();
                  $imagenBase64 = $fila["logotipoEmpresa"];

                  // Paso 4: Mostrar la imagen en HTML utilizando la etiqueta <img>
                  echo '<img width="10%" src="data:image/jpeg;base64,' . $imagenBase64 . '" alt="Imagen en base64">';
                } else {
                  echo "No se encontró la imagen en la base de datos.";
                }
                ?>
              </a>
              <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" >
                <!-- <li><a class="dropdown-item" href="#">Mi perfil</a></li> -->
                <li><a class="dropdown-item" href="../functions/logout.php">Cerrar sesion</a></li>
              </ul>
            </div>
            
          </div>
        </div>
</header>