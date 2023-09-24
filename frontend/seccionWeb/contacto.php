<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">¿Tienes dudas o quieres un asesoramiento?</h2>           
        </div>
        <!-- <div class="row">
            <div class="col-lg-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="./assents/aldahir.png" alt="..." />
                    <h4>Aldahir Martinez</h4>
                    <span>Cofundador & director ejecutivo</span>
                    <p class="text-muted">El liderazgo visionario de Aldahir impulsa el éxito de Engranet al brindar estrategias de marketing digital efectivas y accesibles a las pequeñas empresas.Es un gurú del marketing.</p>

                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="./assents/erick.png" alt="..." />
                    <h4>Erick Marcia</h4>
                    <span>Desarrolador FullStack</span>
                    <p class="text-muted">Un colaborador excepcional que, con su experiencia como programador de area y su compromiso con el éxito empresarial, contribuye significativamente al crecimiento y la prosperidad de las pequeñas empresas y las empresas nacionales, como Soriana, en México.</p>

                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="col-lg-6 mx-auto text-center">
                <p class="large text-muted">No dude en llamarnos o enviarnos un correo electrónico,
                o utilice nuestro formulario de contacto para ponerse en contacto con nosotros
                ¡Con gusto colaboramos en el crecimiento de tu proyecto!</p>
                <h4>Llámanos:</h4>
                <span>+52 221 214 5723</span>
                <p class="text-muted">Encuentra el estudio <br>
                Tenemos presencia en Monterrey, Puebla, Tlaxcala..</p>
            </div>
            <div class="col-lg-6 mx-auto text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15092.112252079361!2d-98.21314100000001!3d18.974368!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfbf37faa0076d%3A0xc2c6fefcb84ad40!2sdigiceo!5e0!3m2!1ses-419!2smx!4v1695480406265!5m2!1ses-419!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
                

        </div>
    </div>
</section>

<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">CONTÁCTENOS</h2>
            <h3 class="section-subheading " style="color:aliceblue;">Tienes dudas o sugerencias por favor escribenos tu opinión es importante.</h3>
        </div>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        <form class="crud-form" id="contactForm" >
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control"  name="nombre" type="text" placeholder="Se requiere un nombre *" data-sb-validations="required"  />
                        <div class="invalid-feedback" data-sb-feedback="name:required">Se requiere un nombre.</div>
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
                        <input class="form-control"  name="correo"  type="email" placeholder="Se requiere un email *" data-sb-validations="required,email" />
                        <div class="invalid-feedback" data-sb-feedback="email:required">Se requiere un email.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">El correo no es válido.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control"  name="telefono" type="tel" placeholder="Se requiere un número de teléfono *" data-sb-validations="required" />
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Se requiere un número de teléfono.</div>
                    </div>



                    <!--CAMPOS OCULTOS -->
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="asunto" value="Prospecto interesado">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="dominioOrigen" value="engranetmx.com">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="giroDominio" value="Marketing digital">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="categoriaProspecto" value="Prospecto">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="estadoSistema" value="Activo">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="conversacion" value="Registro desde Pagina web">
                    </div>
                    <!--FIN CAMPOS OCULTOS -->

                </div>

                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <textarea class="form-control" name="mensaje"placeholder="Se requiere un mensaje *" data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Se requiere un mensaje.</div>
                    </div>
                </div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder">¡Envío del formulario exitoso!</div> 
                    <!-- Para activar este formulario, regístrese en
                    <br />
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a> -->
                </div>
            </div>
            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error al enviar
                message!</div></div>
            <!-- Submit Button-->
            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase " id="submitButton" type="submit">Enviar Mensaje</button></div>
        </form>
    </div>
</section>