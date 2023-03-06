<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiro Agency Landing Page</title>
    <link rel="stylesheet" href="<?= base_url('landing/') ?>assets/vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url('landing/') ?>assets/css/style.css">
    <script src="<?= base_url('landing/') ?>assets/vendors/jquery/jquery.min.js"></script>
    <script src="<?= base_url('landing/') ?>assets/js/loader.js"></script>
</head>

<body>
    <div class="hiro-loader"></div>
    <header class="hiro-header home-header" id="top">
        <nav>
            <div class="container">
                <div class="hiro-nav">
                    <a href="index.html" class="nav-brand">
                        <!-- <img src="<?= base_url('landing/') ?>assets/images/logo.svg" alt="Hiro" class="logo">
                        <img src="<?= base_url('landing/') ?>assets/images/logo_white.svg" alt="Hiro" class="logo-white"> -->
                    </a>
                    <button class="hiro-nav-popup-toggle">
                        <svg width="20px" height="18px" viewBox="0 0 20 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            
                                <g id="hiro-agency" transform="translate(-964.000000, -37.000000)" fill="#FFFFFF">
                                    <g id="Menu" transform="translate(964.000000, 37.000000)">
                                        <g id="menu">
                                            <rect id="Rectangle" fill-rule="nonzero" x="-8.05281767e-14" y="7.50795322" width="19.9609942" height="2.4951462"></rect>
                                            <rect id="Rectangle" fill-rule="nonzero" x="-8.05281767e-14" y="14.9964327" width="19.9609942" height="2.4951462"></rect>
                                            <rect id="Rectangle" fill-rule="nonzero" x="-8.05281767e-14" y="0.0194736842" width="19.9609942" height="2.4951462"></rect>
                                        </g>
                                    </g>
                                </g>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
        <div class="container wow fadeInUp">
            <div id="hiroHeaderCarousel" class="hiro-header-carousel carousel slide" data-ride="carousel" data-interval="3500">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="carousel-item-title" data-animation="animated fadeInRight"><span>Aplikasi Pengaduan Masyarakat</span></h1>
                                <p class="carousel-item-description" data-animation="animated fadeInRight">Aplikasi Pelayanan Pengaduan Masyarakat ini adalah aplikasi yang memudahkan masyarakat dalam mengadukan atau memberikan laporan suatu kejadian. Sehingga, masyarakat tidak perlu mendatangi tempat yang terkait.</p>
                                <!-- <a href="#!" class="carousel-item-link link-hover-fx" data-animation="animated fadeInRight">READ MORE</a>
                                <ul class="carousel-item-social-links nav" data-animation="animated fadeInRight">
                                    <li>
                                        <a href="#!" class="link-hover-fx">FACEBOOK</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">TWITTER</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">BEHANCE</a>
                                    </li>
                                </ul> -->
                            </div>
                            <div class="col-md-6">
                                <img src="<?= base_url('landing/') ?>assets/images/conversation.png" alt="Remarkable Digital Products" class="img-fluid w-100 rounded" width="372px">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="carousel-item-title" data-animation="animated fadeInRight" data-number="02"><span>Remarkable Digital Products</span></h1>
                                <p class="carousel-item-description" data-animation="animated fadeInRight">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for.</p>
                                <a href="#!" class="carousel-item-link link-hover-fx" data-animation="animated fadeInRight">READ MORE</a>
                                <ul class="carousel-item-social-links nav" data-animation="animated fadeInRight">
                                    <!-- <li>
                                        <a href="#!" class="link-hover-fx">FACEBOOK</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">TWITTER</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">BEHANCE</a>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <img src="<?= base_url('landing/') ?>assets/images/avatar.jpg" alt="<span>Remarkable Digital Products</span>" class="img-fluid w-100 rounded" width="372px">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="carousel-item-title" data-animation="animated fadeInRight" data-number="03"><span>Remarkable Digital Products</span></h1>
                                <p class="carousel-item-description" data-animation="animated fadeInRight">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for.</p>
                                <a href="#!" class="carousel-item-link link-hover-fx" data-animation="animated fadeInRight">READ MORE</a>
                                <ul class="carousel-item-social-links nav" data-animation="animated fadeInRight">
                                    <li>
                                        <a href="#!" class="link-hover-fx">FACEBOOK</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">TWITTER</a>
                                    </li>
                                    <li>
                                        <a href="#!" class="link-hover-fx">BEHANCE</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <img src="<?= base_url('landing/') ?>assets/images/avatar.jpg" alt="Remarkable Digital Products" class="img-fluid w-100 rounded" width="372px">
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#hiroHeaderCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#hiroHeaderCarousel" data-slide-to="1"></li>
                    <li data-target="#hiroHeaderCarousel" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </header>
    <div class="hiro-nav-popup-modal">
        <div class="hiro-nav-popup-modal-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 menu-wrapper">
                        <ul class="nav hiro-main-nav">
                            <li class="nav-item">
                                <a href="index.html" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#about" class="nav-link">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#services" class="nav-link">Services</a>
                            </li>
                            <li class="nav-item">
                                <a href="#works" class="nav-link">Works</a>
                            </li>
                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 blog-posts text-white">
                        <h5 class="popup-blog-headng">Blog</h5>
                        <div class="media mb-4">
                            <img src="<?= base_url('landing/') ?>assets/images/Blog_small2.jpg" alt="blog" width="86px" class="img-fluid mr-4">
                            <div class="media-body align-self-end">
                                <h5 class="popup-blog-post-title">Ambitious <br> designs</h5>
                            </div>
                        </div>
                        <div class="media mb-4">
                            <img src="<?= base_url('landing/') ?>assets/images/Blog_small1.jpg" alt="blog" width="86px" class="img-fluid mr-4">
                            <div class="media-body align-self-end">
                                <h5 class="popup-blog-post-title">The Collection <br> Cover Archive</h5>
                            </div>
                        </div>
                        <p><a href="blog.html" class="text-white link-hover-fx text-decoration-none" class="font-weight-medium">View more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-primary hiro-section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 flex-column justify-content-center  fadeInUp">
                    <h2 class="section-title mb-3">Ajukan Pengaduan dan Aspirasi Anda</h2>
                    <a href="<?= base_url('auth') ?>" class="btn btn-success col-4">Buat Laporan</a>
                </div>
                <div class="col-md-6 wow fadeInUp">
                    <img src="<?= base_url('asset/') ?>img/logo.png" class="w-50 mb-5" alt="Digital Product Design">
                </div>
            </div>
        </div>
    </section>
    