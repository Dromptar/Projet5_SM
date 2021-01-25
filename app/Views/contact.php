<?php $title = 'Contacto';



if (!isset($_SESSION)) {



    session_start();
}

?>



<?php ob_start(); ?>



<!-- Breadcrumb Section Begin -->

<section class="breadcrumb-section set-bg" data-setbg="public_html/assets/img/robotitorz.jpeg" style="background-image: url(public_html/assets/img/robotitorz.jpeg);">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="breadcrumb-text">

                    <h2>Contacto</h2>

                    <div class="breadcrumb-option">

                        <a href="home"><i class="fa fa-home"></i> Home</a>

                        <span>Contact</span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Breadcrumb Section End -->



<!-- Map Section Begin -->

<div class="map">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3393.8847020432613!2d-60.52560835728813!3d-31.719044386780116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95b452143175cda7%3A0xbebaa7300813072d!2sCostanera%20Parana!5e0!3m2!1sfr!2sar!4v1598279032081!5m2!1sfr!2sar" 
    width="600" height="450" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

    <img src="img/icon/location.png" alt="mapa de parana">

</div>

<!-- Map Section End -->



<!-- Contact Section Begin -->

<section class="contact-section spad">

    <div class="container">

        <div class="row">

            <div class="col-lg-4">

                <div class="contact-info">

                    <h4>Contacta me</h4>

                    <div class="contact-address">

                        <div class="ca-widget">

                            <div class="cw-icon">

                                <img src="public_html/assets/img/icon/icon-1.png" alt="icon de ubicacion">

                            </div>

                            <div class="cw-text">

                                <h5>Ubicacion</h5>

                                <p>Costanera de Paraná</p>

                            </div>

                        </div>

                        <div class="ca-widget">

                            <div class="cw-icon">

                                <img src="public_html/assets/img/icon/icon-2.png" alt="icon de telefono">

                            </div>

                            <div class="cw-text">

                                <h5>Telefono:</h5>

                                <p>+54 343 524 9307</p>

                            </div>

                        </div>

                        <div class="ca-widget">

                            <div class="cw-icon">

                                <img src="public_html/assets/img/icon/icon-3.png" alt="icon de sobre">

                            </div>

                            <div class="cw-text">

                                <h5>Mail</h5>

                                <p>morvant.simon@gmail.com</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

                <div class="contact-form">
                    <h4>Mandame un mensaje</h4>
                    <form method="POST" action="mailto">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="username">Tu nombre</label>
                                <input type="text" id="username" name="username">
                            </div>
                            <div class="col-lg-6">
                                <label for="usermail">Tu email</label>
                                <input type="text" id="usermail" name="usermail">
                            </div>
                            <div class="col-lg-12">
                                <label for="message">Tu mensage</label>
                                <textarea id="message" placeholder="Escribi aqui tu mensaje" name="message"></textarea>
                                <button type="submit">Enviar mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</section>

<!-- Contact Section End -->



<?php $content = ob_get_clean(); ?>





<?php require('template.php'); ?>