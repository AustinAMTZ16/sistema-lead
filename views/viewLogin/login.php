    
    <br><br><br><br><br><br>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-6">
                <div class="container text-center">
                    <div class="row justify-content-center">
                    <form method="POST" ction="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
                        <h3>Bienvenido MexiClientes</h3>
                        <div class="mb-3">
                            <label for="email" class="form-label ">Correo electrónico / Dominio </label>
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="ejemplo: test@engranetmx.com / engranetmx.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label ">Contraseña</label>
                            <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder="*******" required>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-outline-dark" type="submit">Iniciar Sesión</button>
                        </div>
                    </form>
                    <?php
                        // Mostrar mensaje de error, si existe
                        if (isset($mensaje_error)) {
                            echo '<p style="color: red;">' . $mensaje_error . '</p>';
                        }
                    ?>
                    </div>
                </div>
                <br>
                <div class="container text-center">
                    <div class="row justify-content-center">
                        <a href="/login/accountUser"><strong>Crear mi perfil.</strong></a>
                        <a href="/login/recoverPassword"><strong>Recuperar contraseña.</strong></a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="padre">
        <div class="hijo">
            <div class="columna12">
                <div class="fila">
                    <a href="/login/accountBusiness"><strong>Crear negocio.</strong></a>
                </div>
            </div>
        </div>
    </div>
