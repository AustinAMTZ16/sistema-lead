
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