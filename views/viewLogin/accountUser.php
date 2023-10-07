
    <br><br><br><br><br><br>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-10 col-sm-6">
                <div class="container text-center">
                    <div class="row justify-content-center">
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER    ["PHP_SELF"]); ?>">
                            <h3>Crea tu negocio MexiClientes</h3>
                            <div class="mb-3">
                                <label for="text" class="form-label ">Nombre del negocio: </label>
                                <input type="text" class="form-control" name="nombreEmpresa" id="nombreEmpresa" placeholder="ejemplo: engranet" required>
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label ">Pagina web del negocio: </label>
                                <input type="text" class="form-control" name="dominioB2B" id="dominioB2B" placeholder="ejemplo: engranetmx.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label ">Correo electrónico del negocio: </label>
                                <input type="email" class="form-control" name="correo" id="correo" placeholder="ejemplo: name@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label ">Giro del negocio: </label>
                                <input type="text" class="form-control" name="giroDominio" id="giroDominio" placeholder="ejemplo: Marketing digital" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label ">Contraseña del perfil</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="*******" required>
                            </div>
                            
                            <div class="d-grid">
                                <button class="btn btn-outline-dark" name="saveCompany" type="submit">Crea tu negocio</button>
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