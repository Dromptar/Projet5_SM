<?php $title = 'Connectate'; ?>

   

<?php ob_start(); ?>



    <!-- Breadcrumb Section Begin -->

    <section class="breadcrumb-section set-bg" data-setbg="<?php echo getenv('app.baseURL'); ?>public_html/assets/img/robotitorz.jpeg" style="background-image: url(public_html/assets/img/robotitorz.jpeg);">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="breadcrumb-text">

                        <h2>Conectate</h2>

                        <div class="breadcrumb-option">

                            <a href="home"><i class="fa fa-home"></i> Home</a>

                            <span>Conectate</span>

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

                        <?php if (isset($_SESSION['success_register'])) {

                            echo '<h3>' . $_SESSION['success_register'] .'</h3>';

                        }

                        unset($_SESSION['success_register']);

                        ?>

                            <div class="section-title">

                                <h2>Ingreso!</h2>

                            </div>

                            <form  class="register-form" method="POST" action="connection">

                                <div class="row">

                                    <div class="col-lg-6">

                                        <label for="name">Pseudo</label>

                                        <input type="text" id="name" name="username">

                                        <?php if (isset($_SESSION['user_pass_error'])) {

                                            echo '<p>' . $_SESSION['user_pass_error'] . '</p>';

                                        }

                                        unset($_SESSION['user_pass_error']);

                                        ?>

                                    </div>

                                    <div class="col-lg-6">

                                        <label for="last-name">Contrasena</label>

                                        <input type="password" id="last-name" name="pass">

                                    </div>

                                </div>

                                <button  type="submit" class="register-btn">A Entrenar</button>

                            </form>

                            <p>

                                <a href="registForm">No tenes cuenta? Registrate hoy!</a>

                            </p>

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="register-pic">

                            <img src="<?php echo getenv('app.baseURL'); ?>public_html/assets/img/parana/team2.jpeg" alt="foto del equipo">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Register Section End -->



    

<?php $content = ob_get_clean(); ?>







<?php require('template.php'); ?>