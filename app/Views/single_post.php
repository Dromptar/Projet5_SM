<?php $title = 'single Post'; ?>



<?php ob_start(); ?>







<!-- Blog Details Hero Section Begin -->

<section class="blog-details-hero set-bg" data-setbg="<?php echo getenv('app.baseURL'); ?>public_html/assets/img/robotitorz.jpeg" style="background-image: url(public_html/assets/img/robotitorz.jpeg);">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="bd-hero-text">

                        <div class="breadcrumb-option">

                            <a href="home"><i class="fa fa-home"></i> Home ></a>
                            <a href="<?php echo getenv('app.baseURL'); ?>blog"></i>Actividades></a>

                            <span>Articulo</span>

                        </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- Blog Details Hero Section End -->





<!-- Blog Details Section Begin -->

<section class="blog-details spad">

    <div class="container">

        <div class="row">

            <div class="col-lg-10 offset-lg-1">

                <div class="bd-text">

                    <div class="section-title">

                        <h1><?= $singlePost['post_title'] ?></h1>

                    </div>

                    <div class="bd-pic">

                        <div class="row">

                            <div class="col-lg-6">

                                <img src="<?php echo getenv('app.baseURL'); ?>public_html/uploads/images/blog/<?= $singlePost['picture'] ?>" alt="">

                            </div>

                            <div class="col-lg-6">

                                <img src="<?php echo getenv('app.baseURL'); ?>public_html/assets/img/blog/commonBlog.jpg" alt="">

                            </div>

                        </div>

                    </div>

                    <div class="bd-more-text">

                        <div class="bm-item">

                            <?= $singlePost['post_content'] ?>

                        </div>

                    </div>

                    <div class="bd-quote">

                        <samp>"</samp>

                        <p>Cita</p>

                        <div class="quote-author">

                            <h5>"La carga que se lleva en un grupo es una pluma"</h5>

                        </div>

                    </div>





                    <div class="blog-author">

                        <div class="row">

                            <div class="col-lg-3">

                                <div class="ba-pic">

                                    <img src="<?php echo getenv('app.baseURL'); ?>public_html/assets/img/admin.jpg" alt="">

                                </div>

                            </div>

                            <div class="col-lg-9">

                                <div class="ba-text">

                                    <h5> <?= $singlePost['author'] ?></h5>

                                    <div class="bt-social">

                                        <a href="https://www.facebook.com/simon.morvant"><i class="fa fa-facebook"></i></a>

                                        <a href="https://www.instagram.com/simonmrvt/?hl=fr"><i class="fa fa-instagram"></i></a>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    <!-- section coments to dvelopp 



                    <div class="leave-comment">

                        <h3>Leave A Comment</h3>

                        <form action="#">

                            <div class="row">

                                <div class="col-lg-6">

                                    <input type="text" placeholder="Name">

                                </div>

                                <div class="col-lg-6">

                                    <input type="text" placeholder="Email">

                                </div>

                                <div class="col-lg-12">

                                    <textarea placeholder="Messages"></textarea>

                                    <button type="submit">Send Message</button>

                                </div>

                            </div>

                        </form>

                    </div>

                    !-->

                </div>

            </div>

        </div>

    </div>

</section>



<?php

if (isset($_SESSION['admin']) && $_SESSION['admin'] == '1') {

?>

    <div id="manageButtons">

        <a href="<?php echo getenv('app.baseURL'); ?>blog/editPost/<?= $singlePost['post_id'] ?>" class="primary-btn">Edit</a>

        <a href="<?php echo getenv('app.baseURL'); ?>blog/deletePost/<?= $singlePost['post_id'] ?>" class="primary-btn">Delete</a>

    </div>

<?php

}

?>





<?php $content = ob_get_clean(); ?>





<?php require('template.php'); ?>