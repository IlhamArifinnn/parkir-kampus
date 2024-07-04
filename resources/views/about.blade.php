<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>About - Parkir Kampus STT Nurul FIkri</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('assets/landing-page/img/icon.jpg') }}" rel="icon" />
    <link href="{{ asset('assets/landing-page/img/icon.jpg') }}" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/landing-page/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/landing-page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/landing-page/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/landing-page/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/landing-page/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/landing-page/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="{{ asset('assets/landing-page/css/main.css') }}" rel="stylesheet" />

</head>

<body class="about-page">

    @include('landing-page.header')

    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url(assets/img/gedung-a1.png);">
            <div class="container position-relative">
                <h1>About</h1>
                <p> Kami menyediakan informasi lengkap tentang area parkir di kampus.
                </p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">About</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container">
                <div class="row gy-3">
                    <div class="col-lg-6 mt-4 position-relative align-self-start order-lg-last order-first"
                        data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('assets/landing-page/img/about.webp') }}" class="img-fluid rounded"
                            alt="About Campus" />

                    </div>

                    <div class="col-lg-6 content order-last order-lg-first" data-aos="fade-up" data-aos-delay="100">
                        <h3>Tentang Kami</h3>
                        <p>
                            Kami adalah penyedia layanan parkir kampus yang bertujuan untuk
                            memberikan solusi parkir yang mudah dan aman bagi seluruh
                            civitas akademika. Dengan sistem yang terintegrasi, kami
                            memastikan setiap kendaraan terdaftar dan mendapatkan tempat
                            parkir yang sesuai.
                        </p>
                        <ul>
                            <li>
                                <i class="bi bi-geo-alt"></i>
                                <div>
                                    <h5>Lokasi Parkir Strategis</h5>
                                    <p>
                                        Kami menyediakan lokasi parkir yang tersebar di berbagai
                                        titik strategis dalam kampus untuk kemudahan akses.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-shield-lock"></i>
                                <div>
                                    <h5>Keamanan Terjamin</h5>
                                    <p>
                                        Sistem keamanan canggih yang kami terapkan memastikan
                                        kendaraan Anda aman saat diparkir di area kami.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="bi bi-card-checklist"></i>
                                <div>
                                    <h5>Registrasi Kendaraan Mudah</h5>
                                    <p>
                                        Proses registrasi kendaraan yang mudah dan cepat untuk
                                        semua pemilik kendaraan di kampus.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="0"
                                class="purecounter">2</span>
                            <p>Lokasi Kampus</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="0"
                                class="purecounter">7</span>
                            <p>Area Parkir</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="430" data-purecounter-duration="0"
                                class="purecounter">430</span>
                            <p>Kendaraan Terdaftar</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="0"
                                class="purecounter">4</span>
                            <p>Layanan Parkir</p>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Stats Section -->


    </main>

    @include('landing-page.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/landing-page/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/landing-page/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/landing-page/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/landing-page/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/landing-page/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/landing-page/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/landing-page/js/main.js') }}"></script>

</body>

</html>
