<?php $title = 'New Post'; ?>



<?php ob_start(); ?>



<!-- Breadcrumb Section Begin -->

<section class="breadcrumb-section set-bg" data-setbg="public_html/assets/img/robotitorz.jpeg" style="background-image: url(/public_html/assets/img/robotitorz.jpeg);">

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



<section id="create-new-post">

    <div class="container">

        <div class="classes-page-text">

            <div class="row">

                <div class="col-lg-8">

                    <div class="register-text">

                        <div class="section-title">

                            <h2>Publica un articulo!</h2>

                        </div>

                        <form enctype="multipart/form-data" method="POST" class="register-form" action="post">

                            <div class="row">

                                <div class="col-lg-6">

                                    <label for="name">Autor</label>

                                    <input type="text" id="name" name="author">

                                </div>

                                <div class="col-lg-6">

                                    <label for="name">Titulo</label>

                                    <input type="text" id="name" name="post_title">

                                </div>

                                <div class="col-lg-6">

                                    <label for="name">Image</label>

                                    <input type="file" accept="image/*" name="picture">

                                </div>

                                <div class="col-lg-12">

                                    <label for="name">Contenido</label>

                                    <textarea id="editor" name="post_content"></textarea>

                                </div>

                                <button type="submit" class="register-btn">Publicar</button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>







<?php $content = ob_get_clean(); ?>









<?php require('template.php'); ?>