
    <div class="login-wrapper">
        <div class=" box-image box-col">
            <img src="../backend/img/view_login/login_fondo1.webp" alt="sideimage">
        </div>
        <div class="box-col">
            <div class="box-form">
                <div class="inner">
                    <div class="form-head">
                        <form autocomplete="off" method="post" role="form">
                            <div class="title">
                            Crear tu negocio con MexicoClientes
                            </div>
                            <?php
                                if (isset($errMsg)) {
                                    echo '<div style="color:#FF0000;text-align:center;font-size:20px; font-weight:bold;">' . $errMsg . '</div>';;
                                }
                            ?>
                            <div class="form-group">
                                <input type="text" name="correo" value="<?php if (isset($_POST['correo'])) echo $_POST['correo'] ?>" autocomplete="off" class="form-control" placeholder="Correo electronico">
                            </div>
                            <div class="form-group">

                                <input type="password" required="true" name="contra" value="<?php if (isset($_POST['contra'])) echo MD5($_POST['contra']) ?>" class="form-control" placeholder="Contraseña">
                            </div>
                            <div class="form-button">
                                <div class="check-action">
                                    <input type="checkbox" class="check" checked>
                                    <span class="name">Recuérdame</span>
                                </div>
                            </div>
                            <div class="actions">
                                <button class="btn btn-submit" name='login' type="submit">Acceder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>