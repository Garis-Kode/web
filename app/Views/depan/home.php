<?= $this->extend('depan/layouts') ?>

<?= $this->section('content') ?>

<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero__slider owl-carousel">
        <div class="hero__item set-bg" data-setbg="<?= base_url() ?>/depan/img/hero/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero__text mt-5 mt-lg-0">
                            <h2 class="mb-2">Garis Kode Community</h2>
                            <h5 class="mb-5">membawa para Developer untuk bekerja sama mencari pengalaman <br> dari komunitas untuk komunitas</h5>
                            <a href="#" class="btn btn-light fw-bold rounded-pill py-2 px-4">Join now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<div class="breadcrumb-section ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__option my-1">
                    <a href="./index.html"><span class="fa fa-home"></span> Home</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog Section Begin -->
<section class="blog-section spad bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <h4 class="mb-2 fw-bold">Artikel Terbaru</h4>
                    <p class="mb-5">Baca Tutorial coding menarik disini</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <?php foreach ($blog as $item) : ?>

                        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
                            <div class="card rounded-4 shadow-sm border-0">
                                <div class="card-body">
                                    <div class="blog__item">
                                        <div class="blog__pic set-bg rounded-4" data-setbg="<?= base_url() ?>/depan/img/blog/blog-1.jpg">
                                            <div class="label shadow-sm">Hosting</div>
                                        </div>
                                        <div class="blog__text">
                                            <h5><a href="#">Pay for the Best Web Hosting Service with Bitcoin...</a></h5>
                                            <ul class="mt-4">
                                                <li><img src="<?= base_url() ?>/depan/img/team/team-1.jpg" class="rounded-pill me-3" width="30" height="30" alt=""> Jonathan Doe</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-5">
                <?= $pager->links() ?>
                <!-- <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav> -->
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3 class="fw-bold">subscribe</h3>
                    <p>Dapatkan informasi menariknya disini</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <div class="register__text">
                    <div class="register__form">
                        <form action="#">
                            <input type="text" placeholder="Your Email...">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?= $this->endSection() ?>