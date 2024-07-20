<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>News HTML-5 Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.webmanifest" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/landing-page') }}/assets/img/favicon.ico" />

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('storage/landing-page') }}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('storage/landing-page') }}/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{ asset('storage/landing-page') }}/assets/css/ticker-style.css" />
    <link rel="stylesheet" href="{{ asset('storage/landing-page') }}/assets/css/flaticon.css" />
    <link rel="stylesheet" href="{{ asset('storage/landing-page') }}/assets/css/slicknav.css" />
    <link rel="stylesheet" href="{{ asset('storage/landing-page') }}/assets/css/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('storage/landing-page') }}/assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="{{ asset('storage/landing-page') }}/assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="{{ asset('storage/landing-page') }}/assets/css/themify-icons.css" />
    <link rel="stylesheet" href="{{ asset('storage/landing-page') }}/assets/css/slick.css" />
    <link rel="stylesheet" href="{{ asset('storage/landing-page') }}/assets/css/nice-select.css" />
    <link rel="stylesheet" href="{{ asset('storage/landing-page') }}/assets/css/style.css" />

    <style>
        .fixed-size-img {
            width: 100%;
            /* Menyesuaikan lebar card */
            height: 200px;
            /* Tinggi tetap */
            object-fit: cover;
            /* Memotong gambar yang terlalu besar */
            object-position: center;
            /* Menempatkan gambar di tengah */
            overflow: hidden;
            /* Menyembunyikan bagian gambar yang terlalu besar */
        }
    </style>
</head>

<body>

    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header">
                <div class="header-mid d-none d-md-block">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-3 col-lg-3 col-md-3">
                                <div class="logo">
                                    <a href="index.html"><img
                                            src="{{ asset('storage/landing-page') }}/assets/img/logo/logo.png"
                                            alt="" /></a>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9">
                                <div class="header-banner f-right">
                                    <img src="{{ asset('storage/landing-page') }}/assets/img/hero/header_card.jpg"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-10 col-lg-10 col-md-12 header-flex">
                                <!-- sticky -->
                                <div class="sticky-logo">
                                    <a href="index.html"><img
                                            src="{{ asset('storage/landing-page') }}/assets/img/logo/logo.png"
                                            alt="" /></a>
                                </div>
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-md-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/category">Kategori</a></li>
                                            {{-- <li><a href="latest_news.html">Berita Terbaru</a></li> --}}
                                            <li><a href="latest_news.html">Kontak</a></li>
                                            <li><a href="{{ route('login') }}">Login</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-md-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
