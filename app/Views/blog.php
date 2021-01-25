<?php $title = 'Actividades'; ?>

   

<?php ob_start(); ?>



    <!-- Breadcrumb Section Begin -->

    <section class="breadcrumb-section set-bg" data-setbg="public_html/assets/img/robotitorz.jpeg" style="background-image: url(public_html/assets/img/robotitorz.jpeg);">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="breadcrumb-text">

                        <h2>Blog</h2>

                        <div class="breadcrumb-option">

                            <a href="home"><i class="fa fa-home"></i> Home</a>

                            <span>Blog</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Breadcrumb Section End -->





    <!-- Blog Section Begin -->

    <section class="blog-section spad">

        <div class="container">

        <div class="row">

                <div class="col-lg-12">

                    <div class="section-title">

                        <h2>Actividades recientes</h2>

                    </div>

                </div>

        </div>

            <div class="row">

            <?php foreach($posts as $post) : ?>

                <div class="col-lg-4 col-md-6">

                    <div class="single-blog-item">

                        <?= view_cell('\App\Libraries\Blog::postItem', $post); ?>   

                    </div>

                </div>

             <?php endforeach; ?>

            </div>

        </div>

    </section>

    <!-- Blog Section End -->



<?php $content = ob_get_clean(); ?>





<?php require('template.php'); ?>