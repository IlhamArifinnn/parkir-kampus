<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Locations - Parkir Kampus STT Nurul FIkri</title>
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
            style="background-image: url({{ asset('assets/landing-page/img/gedung-a1.png') }});">
            <div class="container position-relative">
                <h1>Parkir Locations</h1>
                <p>
                    Menyediakan lokasi parkir terbaik untuk kebutuhan kampus yang strategis dan mudah diakses.
                </p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Parkir Locations</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <section id="services" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Lokasi Parkir<br /></span>
                <h2>Lokasi Parkir</h2>
                <p>
                    Menyediakan solusi parkir terbaik untuk kebutuhan kampus Anda dengan
                    lokasi yang strategis dan mudah diakses.
                </p>
            </div>

            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('assets/landing-page/img/b1-1.jpg') }}" alt="Parkir Utama"
                                    class="img-fluid" />
                            </div>
                            <h3>Parkir B1:101-103</h3>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('assets/landing-page/img/b1-5.jpg') }}" alt="Parkir Timur"
                                    class="img-fluid" />
                            </div>
                            <h3><a href="#" class="stretched-link">Parkir B1:104-106</a></h3>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('assets/landing-page/img/b2-2.jpg') }}" alt="Parkir Barat"
                                    class="img-fluid" />
                            </div>
                            <h3><a href="#" class="stretched-link">Parkir B2</a></h3>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('assets/landing-page/img/b3-2.jpg') }}" alt="Parkir Selatan"
                                    class="img-fluid" />
                            </div>
                            <h3><a href="#" class="stretched-link">Parkir B3</a></h3>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('assets/landing-page/img/a5.jpg') }}" alt="Parkir Fakultas"
                                    class="img-fluid" />
                            </div>
                            <h3>Parkir A-1</h3>

                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="card">
                            <div class="card-img">
                                <img src="{{ asset('assets/landing-page/img/a6.jpg') }}" alt="Parkir Perpustakaan"
                                    class="img-fluid" />
                            </div>
                            <h3><a href="#" class="stretched-link">Parkir A-2</a></h3>

                        </div>
                    </div>
                </div>
            </div>
        </section>


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
