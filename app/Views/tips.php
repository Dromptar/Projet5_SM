<?php $title = 'Tips'; ?>



<?php ob_start(); ?>


<!-- Breadcrumb Section Begin -->

<section class="breadcrumb-section set-bg" data-setbg="public_html/assets/img/robotitorz.jpeg" style="background-image: url(public_html/assets/img/robotitorz.jpeg);">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="breadcrumb-text">

                    <h2>Truquitos</h2>

                    <div class="breadcrumb-option">

                        <a href="home"><i class="fa fa-home"></i> Home</a>

                        <span>Class</span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Breadcrumb Section End -->





<div id="tips-title">

    <div class="section-title">

        <h2>Bienvenido a los "truquitos" del Coach, <?= $_SESSION['userSession'] ?>!</h2>>

    </div>    

</div>





<section class="article1-section article1-page spad">

    <div class="container">

        <div class="row">

            <div class="col-lg-5">

                <div class="article1-pic">

                    <img src="public_html/assets/img/truquito.jpg" alt="foto del coach haciendo estocada">

                </div>

            </div>

            <div class="col-lg-5">

                <div class="article1-text">

                    <p class="first-para">Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aenean pretium

                        sollicitudin, nascetur auci elit consequat ipsutissem niuis sed odio sit amet nibh vulputate

                        cursus a amet.</p>

                    <p class="second-para">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, gravida

                        quam semper libero sit amet.</p>

                </div>

            </div>

        </div>

    </div>

</section>





<section class="article2-section article2-page spad">

    <div class="container">

        <div class="row">

            <div class="col-lg-5">

                <div class="article2-pic">

                    <video src="public_html/assets/img/videos/rutinaBrazos.mp4" controls></video>

                </div>

            </div>

            <div class="col-lg-5">

                <div class="article2-text">

                    <p class="first-para">Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aenean pretium

                        sollicitudin, nascetur auci elit consequat ipsutissem niuis sed odio sit amet nibh vulputate

                        cursus a amet.</p>

                    <p class="second-para">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, gravida

                        quam semper libero sit amet.</p>

                </div>

            </div>

        </div>

    </div>

</section>





<section class="article1-section article1-page spad">

    <div class="container">

        <div class="row">

            <div class="col-lg-5">

                <div class="article1-pic">

                    <video src="public_html/assets/img/videos/rutinaAbdos.mp4" controls></video>

                </div>

            </div>

            <div class="col-lg-5">

                <div class="article1-text">

                    <p class="first-para">Lorem ipsum proin gravida nibh vel velit auctor aliquet. Aenean pretium

                        sollicitudin, nascetur auci elit consequat ipsutissem niuis sed odio sit amet nibh vulputate

                        cursus a amet.</p>

                    <p class="second-para">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, gravida

                        quam semper libero sit amet.</p>

                </div>

            </div>

        </div>

    </div>

</section>





<script src="/public_html/assets/js/sweetAlert.js"></script>



<?php $content = ob_get_clean(); ?>





<?php require('template.php'); ?>