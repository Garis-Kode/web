<?= $this->extend('depan/layouts') ?>

<?= $this->section('content') ?>

<!-- 404 Section Begin -->
<section class="section-404 spad bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text__404">
                    <img src="img/404.png" alt="">
                    <h3>Opps! This page Could Not Be Found!</h3>
                    <p>Sorry bit the page you are looking for does not exist, have been removed or name changed</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your keyword">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 404 Section End -->

<?= $this->endSection() ?>