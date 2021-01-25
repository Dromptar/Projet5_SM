<?php $title = 'Recipe search'; ?>



<?php ob_start(); ?>



    <!-- Breadcrumb Section Begin -->

    <section class="breadcrumb-section set-bg" data-setbg="public_html/assets/img/parana/cooking.jpg"style="background-image: url(public_html/assets/img/robotitorz.jpeg);">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="breadcrumb-text">

                        <h2>Recetas</h2>

                        <div class="breadcrumb-option">

                            <a href="home"><i class="fa fa-home"></i> Home</a>

                            <span>Recetas</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Breadcrumb Section End -->



    <!-- Register Section Begin -->

    <section id="recipe-search-section">

        <div class="container">

            <div class="classes-page-text">

                <div class="row">

                    <div class="col-lg-8">

                        <div class="register-text">

                            <div class="section-title">

                                <h2>Busca una receta!</h2>

                                <p></p>

                            </div>

                            <div class="register-form">

                                <div class="row">

                                    <div class="col-lg-12">

                                        <label for="receta"></label>

                                        <input type="text" id="recipeName" placeholder="Elige un ingrediente o un plato
                                        " name="receta">

                                    </div>

                                </div>

                                <button id="search" type="submit" class="register-btn">Buscar</button> 

                                <div id="emptyInput"></div>

                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4">

                        <div class="register-pic">

                            <img src="public_html/assets/img/parana/food.jpg" alt="foto de un plato de comida">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



        <div id="searchResult"></div> 



    <!-- Register Section End -->



    <script src="public_html/assets/js/recipeAPI.js"></script>

    

<?php $content = ob_get_clean(); ?>





<?php require('template.php'); ?>