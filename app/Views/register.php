<?php $title = 'Registrate'; ?>

   

<?php ob_start(); ?>



    <!-- Breadcrumb Section Begin -->

    <section class="breadcrumb-section set-bg" data-setbg="public_html/assets/img/robotitorz.jpeg" style="background-image: url(public_html/assets/img/robotitorz.jpeg);">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="breadcrumb-text">

                        <h2>Registrate</h2>

                        <div class="breadcrumb-option">

                            <a href="home"><i class="fa fa-home"></i> Home</a>

                            <span>Registrate</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Breadcrumb Section End -->



    <!-- Register Section Begin -->

    <section class="register-section classes-page spad">

        <div class="container">

            <div class="classes-page-text">

                <div class="row">

                    <div class="col-lg-8">

                        <div class="register-text">

                            <div class="section-title">

                                <h2>Crea tu cuenta !</h2>

                                <p>La primera clase con nosotros es gratis ! </p>

                            </div>

                            <form  class="register-form" method="POST" action="register">

                                <div class="row">

                                    <div class="col-lg-6">

                                        <label for="name">Nombre</label>

                                        <input type="text" id="name" name="username">

                                    <?php if (isset($_SESSION['user_mail_used_error'])) {

                                        echo '<p>' . $_SESSION['user_mail_used_error'] . '</p>';

                                    }

                                    unset($_SESSION['user_mail_used_error']);

                                    ?>

                                    <?php if (isset($_SESSION['pass_match_error'])) {

                                        echo '<p>' . $_SESSION['pass_match_error'] . '</p>';

                                    }

                                    unset($_SESSION['pass_match_error']);

                                    ?>

                                    <?php if (isset($_SESSION['all_fields_error'])) {

                                        echo '<p>' . $_SESSION['all_fields_error'] . '</p>';

                                    }

                                    unset($_SESSION['all_fields_error']); 

                                    ?>   

                                    </div>

                                    <div class="col-lg-6">

                                        <label for="email">E-mail</label>

                                        <input type="text" id="email" name="email">

                                    </div>

                                    <div class="col-lg-6">

                                        <label for="password">contrasena</label>

                                        <input type="password" id="password" name="pass">

                                    </div>

                                    <div class="col-lg-6">

                                        <label for="password2">Confirma la contrasena</label>

                                        <input type="password" id="password2" name="pass_confirmed">

                                    </div>

                                </div>

                                <button onclick="registerValid()" type="submit" class="register-btn">A Entrenar</button>

                            </form>

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="register-pic">

                            <img src="public_html/assets/img/parana/team2.jpeg" alt="foto del equipo">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Register Section End -->



    

<?php $content = ob_get_clean(); ?>





<?php require('template.php'); ?>