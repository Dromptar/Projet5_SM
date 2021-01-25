<!DOCTYPE html>

<html lang="zxx">



<head>

    <meta charset="UTF-8">

    <meta name="description" content="BougeAvecMoi en Paraná le acompaña en sus esfuerzos fisicos gracias a su metoda HIIT. Pérdida de peso, tonificación, ganancia de masa muscular. Explore una serie de ejercicios solo o en grupo para obtener resultados.">

    <meta name="keywords" content="BougeAvecMoi, ejercicios, deporte, HIIT, tonificación, musculacion, Paraná  ">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title><?= $title ?></title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo getenv('app.baseURL'); ?>public_html/assets/img/favicon.ico">

    <!-- Google Font -->

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">


    <!-- Css Styles   -->


    <link rel="stylesheet" href="<?php echo getenv('app.baseURL'); ?>public_html/assets/css/bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo getenv('app.baseURL'); ?>public_html/assets/css/font-awesome.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo getenv('app.baseURL'); ?>public_html/assets/css/owl.carousel.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo getenv('app.baseURL'); ?>public_html/assets/css/magnific-popup.css" type="text/css">

    <link rel="stylesheet" href="<?php echo getenv('app.baseURL'); ?>public_html/assets/css/slicknav.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo getenv('app.baseURL'); ?>public_html/assets/css/style.css" type="text/css">

</head>



<body>

    <?php

    echo '<input type="hidden" id="apiId" name="apiId" value="' . getenv('EDAMAM_API_ID') . '">';

    echo '<input type="hidden" id="apiKey" name="apiKey" value="' . getenv('EDAMAM_API_KEY') . '">';

    ?>

    <!-- Page Preloder -->

    <div id="preloder">

        <div class="loader"></div>

    </div>



    <!-- Header Section Begin -->

    <header class="header-section">

        <div class="container">

            <div class="logo">

                <a href="home">

                    <img src="<?php echo getenv('app.baseURL'); ?>public_html/assets/img/BamLogoRZ.png" alt="logo">

                </a>

            </div>

            <div class="nav-menu">

                <nav class="mainmenu mobile-menu">

                    <ul>

                        <li class="active"><a href="<?php echo getenv('app.baseURL'); ?>home">Home</a></li>

                        <li><a href="<?php echo getenv('app.baseURL'); ?>about">La propuesta</a></li>

                        <li><a href="<?php echo getenv('app.baseURL'); ?>blog">Actividades</a></li>

                        <li><a href="<?php echo getenv('app.baseURL'); ?>tips">Truquitos</a></li>

                        <?php if (isset($_SESSION['userSession'])) {

                        ?>

                            <li><a href="<?php echo getenv('app.baseURL'); ?>recipeSearch">Mis Recetas</a></li>

                        <?php

                        }

                        ?>

                        <li><a href="<?php echo getenv('app.baseURL'); ?>contact">Contacto</a></li>

                    </ul>

                </nav>

                <?php if (isset($_SESSION['userSession']) && $_SESSION['admin'] == 0) {

                ?>

                    <a href="<?php echo getenv('app.baseURL'); ?>connectForm" class="primary-btn signup-btn"><?= $_SESSION['userSession'] ?></a>

                    <a href="<?php echo getenv('app.baseURL'); ?>Logs/disconnection" class="primary-btn signup-btn">Desconectar</a>

                <?php

                } elseif (isset($_SESSION['admin']) && $_SESSION['admin'] == '1') {

                ?>

                    <a href="<?php echo getenv('app.baseURL'); ?>adminSpace" class="primary-btn signup-btn"><?= $_SESSION['userSession'] ?></a>

                    <a href="<?php echo getenv('app.baseURL'); ?>Logs/disconnection" class="primary-btn signup-btn">Desconectar</a>

                <?php

                } else {

                ?>

                    <a href="<?php echo getenv('app.baseURL'); ?>registForm" class="primary-btn signup-btn">Empeza Hoy</a>

                    <a href="<?php echo getenv('app.baseURL'); ?>connectForm" class="primary-btn signup-btn">Mi cuenta</a>

                <?php

                }

                ?>



            </div>

            <div id="mobile-menu-wrap"></div>

        </div>

    </header>

    <!-- Header End -->





    <?= $content ?>





    <!-- Footer Section Begin -->

    <footer class="footer-section">

        <div class="container">

            <div class="row">

                <div class="col-md-4">

                    <div class="contact-option">

                        <span>Telefono</span>

                        <p>(0343) 524-9307</p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="contact-option">

                        <span>Email</span>

                        <p>morvant.simon@gmail.com</p>

                    </div>

                </div>



                <div class="footer-social">

                    <a href="https://www.instagram.com/simonmrvt/?hl=fr" target="_blank">Seguime en Instagram <i class="fa fa-instagram"></i></a>

                </div>





            </div>

            <div class="subscribe-option set-bg" data-setbg="<?php echo getenv('app.baseURL'); ?>public_html/assets/img/para_bannerCut.jpeg">

                <div class="so-text">

                    <h4>Bouge Avec Moi</h4>

                </div>



            </div>

            <div class="copyright-text">

                <ul>

                    <li><a href="#">Term&Use</a></li>

                    <li><a href="#">Privacy Policy</a></li>

                </ul>

                <p>&copy;</p>
                <p>

                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>

                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                </p>

            </div>

        </div>

    </footer>

    <!-- Footer Section End -->



    <!-- Js Plugins -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="<?php echo getenv('app.baseURL'); ?>public_html/assets/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>

    <script src="<?php echo getenv('app.baseURL'); ?>public_html/assets/js/jquery.slicknav.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="<?php echo getenv('app.baseURL'); ?>public_html/assets/js/main.js"></script>

    <script src="https://cdn.tiny.cloud/1/m4l5idahpp956ut9d7c8qydikp11k175cpm5zbdholz40oc1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script src="<?php echo getenv('app.baseURL'); ?>public_html/assets/js/tinyMce.js"></script>

    <script src="<?php echo getenv('app.baseURL'); ?>public_html/assets/js/menu.js"></script>

    <!-- <script src="<?php echo getenv('app.baseURL'); ?>public_html/assets/js/sweetAlert.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script>-->

    <script src="https://kit.fontawesome.com/75492b6bf6.js"></script>







</body>



</html>