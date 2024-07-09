<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Services - Parkir Kampus STT Nurul FIkri</title>
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
                <h1>Parkir Services</h1>
                <p>
                    Menyediakan lokasi parkir terbaik untuk kebutuhan kampus yang strategis dan mudah diakses.
                </p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li class="current">Parkir Services</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <section id="services" class="services section">
            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <span>Layanan Parkir Kampus</span>
                <h2>Layanan Parkir Kampus</h2>
                <p>
                    Layanan parkir unggulan yang dapat memenuhi kebutuhan parkir di kampus
                    Anda.
                </p>
            </div>

            <div class="container">
                <div class="row gy-4 align-items-center services-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <img src="{{ asset('assets/landing-page/img/gerbang.jpg') }}" class="img-fluid"
                            alt="Sistem Parkir Terintegrasi" />
                    </div>
                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                        <h3>Sistem Parkir Terintegrasi</h3>
                        <p class="fst-italic">
                            Solusi parkir yang terhubung secara langsung dengan database kampus untuk efisiensi dan
                            keamanan.
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i><span>Manajemen parkir yang efisien dan terstruktur.</span>
                            </li>
                            <li><i class="bi bi-check"></i><span>Monitoring real-time untuk pengguna dan admin.</span>
                            </li>
                            <li><i class="bi bi-check"></i><span>Integrasi dengan sistem informasi kampus.</span></li>
                        </ul>
                    </div>
                </div>
                <!-- Services Item -->

                <div class="row gy-4 align-items-center services-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                        data-aos-delay="200">
                        <img src="{{ asset('assets/landing-page/img/about.webp') }}" class="img-fluid"
                            alt="Reservasi Parkir Online" />
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                        <h3>Reservasi Parkir Online</h3>
                        <p class="fst-italic">
                            Kemudahan untuk melakukan reservasi tempat parkir secara online sebelum kedatangan.
                        </p>
                        <p>
                            Meningkatkan pengalaman pengguna dengan memastikan ketersediaan tempat parkir.
                        </p>
                    </div>
                </div>
                <!-- Services Item -->

                <div class="row gy-4 align-items-center services-item">
                    <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="300">
                        <img src="{{ asset('assets/landing-page/img/cctv.jpg') }}" class="img-fluid"
                            alt="Keamanan yang Terjamin" />
                    </div>
                    <div class="col-md-7" data-aos="fade-up" data-aos-delay="300">
                        <h3>Keamanan yang Terjamin</h3>
                        <p>
                            Sistem keamanan yang terpercaya untuk melindungi kendaraan pengguna kampus.
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i><span>Monitoring CCTV 24 jam.</span></li>
                            <li><i class="bi bi-check"></i><span>Sistem kontrol akses yang ketat.</span></li>
                            <li><i class="bi bi-check"></i><span>Notifikasi dan alarm untuk keamanan ekstra.</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Services Item -->

                <div class="row gy-4 align-items-center services-item">
                    <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                        data-aos-delay="400">
                        <img src="{{ asset('assets/landing-page/img/pos.jpg') }}" class="img-fluid"
                            alt="Layanan Pelanggan Prima" />
                    </div>
                    <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="400">
                        <h3>Layanan Pelanggan Prima</h3>
                        <p class="fst-italic">
                            Dukungan terbaik untuk memastikan pengalaman parkir yang optimal.
                        </p>
                        <p>
                            Tim dukungan siap membantu 24/7 untuk segala kebutuhan pengguna.
                        </p>
                    </div>
                </div>
                <!-- Services Item -->
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
