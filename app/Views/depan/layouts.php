<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Deerhost Template">
    <meta name="keywords" content="Deerhost, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DEERHOST | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>/depan/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>/depan/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>/depan/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>/depan/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>/depan/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url() ?>/depan/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas__menu__overlay"></div>
    <div class="offcanvas__menu__wrapper">
        <div class="canvas__close">
            <span class="fa fa-times-circle-o"></span>
        </div>
        <div class="offcanvas__logo">
            <a href="#"><img src="<?= base_url() ?>/depan/img/logo.png" alt=""></a>
        </div>
        <nav class="offcanvas__menu mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./about.html">About</a></li>
                <li><a href="./hosting.html">Hosting</a></li>
                <li><a href="#">Pages</a>
                    <ul class="dropdown">
                        <li><a href="./pricing.html">Pricing</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                        <li><a href="./404.html">404</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <ul>
                <li><a href="#"><span class="icon_chat_alt"></span> Live chat</a></li>
                <li><a href="#"><span class="fa fa-user"></span> Login / Register</a></li>
            </ul>
        </div>
        <div class="offcanvas__info">
            <ul>
                <li><span class="icon_phone"></span> +1 123-456-7890</li>
                <li><span class="fa fa-envelope"></span> Support@gmail.com</li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="<?= base_url() ?>/depan/img/logo.png" width="70" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="#">Artikel</a>
                                <ul class="dropdown">
                                    <?php foreach ($kategori as $item) : ?>
                                        <li><a href="./pricing.html"><?= $item["name"] ?></a></li>
                                    <?php endforeach ?>
                                </ul>
                            </li>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="py-1 px-2 fw-bold fs-5 text-white"><i class="bi bi-search "></i></a>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="canvas__open mt-3 mt-lg-0">
                <span class="fa fa-bars"></span>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="input-group">
                        <input type="text" class="form-control border border-primary form-lg" placeholder="Ketik Apa Saja ...">
                        <button class="btn btn-primary bg-blue" type="button" id="button-addon2">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?= $this->renderSection('content') ?>

    <!-- Footer Section Begin -->
    <footer>
        <div class="container">
            <section class="py-4 d-flex  justify-content-between">
                <span class="text-light mb-0">2022 ?? Garis Code Community</span>
                <div class="text-white fs-5">
                    <a href=""><i class="bi bi-github px-2"></i></a>
                    <a href=""></a><i class="bi bi-linkedin px-2"></i></a>
                    <a href=""></a><i class="bi bi-instagram px-2"></i></a>
                    <a href=""></a><i class="bi bi-youtube px-2"></i></a>
                </div>
            </section>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="<?= base_url() ?>/depan/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>/depan/js/jquery.slicknav.js"></script>
    <script src="<?= base_url() ?>/depan/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/depan/js/main.js"></script>
</body>

</html>