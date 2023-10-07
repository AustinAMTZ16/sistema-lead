
    <br><br><br><br><br><br>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-6">
                <div class="container text-center">
                    <div class="row justify-content-center">
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER    ["PHP_SELF"]); ?>">
                            <h3>Crea tu perfil MexiClientes</h3>
                            <div class="mb-3">
                                <label for="text" class="form-label ">Nombre de tu perfil:</label>
                                <input type="text" class="form-control" name="dominioB2B" id="dominioB2B" placeholder="ejemplo: engranetmx.com, Hector, Pablo293" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label ">Correo electrónico: </label>
                                <input type="email" class="form-control" name="correo" id="correo" placeholder="ejemplo: name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label ">Contraseña del perfil</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="*******" required>
                            </div>
                            
                            <div class="d-grid">
                                <button class="btn btn-outline-dark" type="submit">Crear Perfil</button>
                            </div>
                            <br>
                            <div class="d-grid">
                                <button class="btn btn-outline-dark" type="submit" ><a href="/login">Regresar al Menu</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>