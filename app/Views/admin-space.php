

<?php $title = 'Admin Space'; ?>

   

<?php ob_start(); ?>



<!-- Breadcrumb Section Begin -->

<section class="breadcrumb-section set-bg" data-setbg="public_html/assets/img/robotitorz.jpeg" style="background-image: url(public_html/assets/img/robotitorz.jpeg);">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="breadcrumb-text">

                        <h2>Admin Space</h2>

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

   

    <section class="admin-space">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="contact-info">

                        <h4>Mi espacio administrador</h4>

                        <div class="contact-address">

                            <div class="ca-widget">

                                <div class="cw-icon">

                                <a href="newPost">

                                    <i class="fas fa-pen"></i>

                                </a>

                                </div>

                            </div>

                            <div class="ca-widget">

                                <div class="cw-icon">
                                
                                <a href="membersList">

                                    <i class="fas fa-users"></i>
                                </a>

                                </div>

                            </div>

                            <!-- <div class="ca-widget">

                                <div class="cw-icon">

                                    <i class="fas fa-comments"></i>

                                </div>

                            </div>-->

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

   





    <script src="/public_html/assets/js/sweetAlert.js"></script>



<?php $content = ob_get_clean(); ?>





<?php require('template.php'); ?>