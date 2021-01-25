<?php $title = 'Members'; ?>

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
                        <span>Members</span>
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

                    <div class="members-infos">

                        <h4>Pagina en construction.<br/>Vuelve Pronto!</h4>
                        <img src="public_html/assets/img/construct.gif" alt="gif de travaux">

                    </div>

                </div>

            </div>

        </div>

</section>



<!-- 
<p id="showMembers"><button class="showMembers">Muetrame los usuarios</button></p>

<section>
    <div id="members">
        <?php foreach ($members as $member) : ?>
            <p>
                <?= $member->username ?>
            </p>
        <?php endforeach; ?>
    </div>
</section>


<script src="<?php echo getenv('app.baseURL'); ?>public_html/assets/js/adminSpace.js"></script>
-->

<?php $content = ob_get_clean(); ?>


<?php require('template.php'); ?>