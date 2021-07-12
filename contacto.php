<?php 
    include 'header.php';
?>
<main>
    <div class="container pt-5 pb-5">
        <h1 class="text-center pt-3">Contáctanos y solicita informes</h1>
        <div class="row">
            <div class="col-md-5 pt-3">
                <img src="img/contacto.webp" class="img-fluid">
            </div>
            <div class="col-md-7 pt-3">
                <form action="enviar.php" method="post" class="needs-validation" novalidate>
                    <div class="row">

                        <div class="col-lg-6 form-group">
                            <label class="form-label"><b>Nombres</b></label>
                            <input class="form-control" type="text" id="nombres" name="nombres" placeholder="" required>
                            <div class="valid-feedback">¡Ok válido!</div>
                            <div class="invalid-feedback">Complete el campo</div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="form-label"><b>Apellidos</b></label>
                            <input class="form-control" type="text" id="apellidos" name="apellidos" placeholder="" required>
                            <div class="valid-feedback">¡Ok válido!</div>
                            <div class="invalid-feedback">Complete el campo</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <label class="form-label"><b>Email</b></label>
                            <input class="form-control" type="email" id="email" name="email" placeholder="" required>
                            <div class="valid-feedback">¡Ok válido!</div>
                            <div class="invalid-feedback">Complete el campo</div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="form-label"><b>Celular</b></label>
                            <input class="form-control" type="text" id="celular" name="telf" placeholder="" required>
                            <div class="valid-feedback">¡Ok válido!</div>
                            <div class="invalid-feedback">Complete el campo</div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="form-label"><b>Mensaje</b></label>
                        <textarea class="form-control" name="mensaje" id="mensaje" rows="9" placeholder="" required=""></textarea>
                        <div class="valid-feedback">¡Ok válido!</div>
                        <div class="invalid-feedback">Complete el campo</div>
                    </div>
                    <button type="submit" class="btn btn-outline-success btn-lg mt-3" name="enviar">Enviar</button>
                </form>
            </div>
        </div>
        <ul class="list-unstyled row text-left mt-lg-5 pt-lg-5  pb-lg-3 pt-3">
            <li class="col-lg-4 adress-info">
                <div class="row">
                    <div class="col-md-3 text-lg-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                          </svg>                    </div>
                    <div class="col-md-9 text-left">
                        <h6>Location</h6>
                        <p>Av. Los cóndores 460. La Molina</p>
                        <p>Calle La Docencia 164 Urb. Covima. La Molina (Alt cdra 69 Jav. Prado)</p>
                    </div>
                </div>
            </li>

            <li class="col-lg-4 adress-info">
                <div class="row">
                    <div class="col-md-3 text-lg-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16">
                            <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z"/>
                          </svg>
                    </div>
                    <div class="col-md-9 text-left">
                        <h6>Email</h6>
                        <p>
                            <a href="mailto:informes@academiageuni.org">informes@academiageuni.org</a>
                        </p>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 adress-info">
                <div class="row">
                    <div class="col-md-3 text-lg-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                    </div>
                    <div class="col-md-9 text-left">
                        <h6>Teléfono</h6>
                        <p><a href="tel:+51980535010">+51 980 535 010</a></p>
                        <p><a href="tel:+51986518147">+51 986 518 147</a></p>
                    </div>
                </div>
            </li>
        </ul>
        <div class="row">
            <div class="col-md-12 map-cont">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.687734229142!2d-76.94531958587947!3d-12.064993145523163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c6e98e42849f%3A0x40a98cf39a1a23b5!2sLa%20Docencia%20164%2C%20La%20Molina%2015012!5e0!3m2!1ses!2spe!4v1614149592763!5m2!1ses!2spe" width="800" height="600" style="border: none;" allowfullscreen="" loading="lazy"></iframe>            </div>
        </div>
    </div>
</main>

<?php 
    include 'footer.php';
?>