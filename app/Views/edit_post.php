<?php $title = 'Edit Post'; ?>

   

<?php ob_start(); ?>



    <!-- Breadcrumb Section Begin -->

    <section class="breadcrumb-section set-bg" data-setbg="<?php echo getenv('app.baseURL'); ?>public_html/assets/img/robotitorz.jpeg" style="background-image: url(/public_html/assets/img/robotitorz.jpeg);">

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

                                <h2>Edicion de post !</h2>

                            </div>

                            <form enctype="multipart/form-data" method="POST" class="register-form" >

                                <div class="row">

                                <div class="col-lg-6">

                                        <label for="name">Autor</label>

                                        <input type="text" id="name" name="author" value="<?= $post['author'] ?>">

                                    </div>

                                    <div class="col-lg-6">

                                        <label for="name">Titulo</label>

                                        <input type="text" id="name" name="post_title" value="<?= $post['post_title'] ?>">

                                    </div>

                                    <div class="col-lg-6">

                                        <label for="name">Image</label>

                                        <input type="file" name="picture" value="">

                                    </div>  

                                    <div class="col-lg-12">

                                        <label for="name">Contenido</label>

                                        <textarea id="editor" name="post_content"><?= $post['post_content'] ?></textarea>

                                    </div> 

                                <button type="submit" class="register-btn">Editar</button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>







<?php $content = ob_get_clean(); ?>





<?php require('template.php'); ?>