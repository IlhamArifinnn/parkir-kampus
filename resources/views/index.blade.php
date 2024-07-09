<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Parkir Kampus STT Nurul FIkri</title>
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

<body class="index-page">

    @include('landing-page.header')

    <main class="main">
        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">
            <img src="{{ asset('assets/landing-page/img/gedung-a.jpg') }}" alt="" class="hero-bg opacity-25"
                data-aos="fade-in" />

            <div class="container">
                <div class="row gy-4 d-flex justify-content-between">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h2 data-aos="fade-up">
                            Temukan Area Parkir Terbaik di Kampus Anda
                        </h2>
                        <p data-aos="fade-up" data-aos-delay="100">
                            Kami menyediakan informasi lengkap tentang area parkir di
                            kampus, termasuk lokasi, kapasitas, dan layanan yang tersedia.
                            Daftarkan kendaraan Anda sekarang untuk kemudahan parkir di
                            kampus.
                        </p>



                        <div class="row gy-4" data-aos="fade-up" data-aos-delay="300">
                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="2"
                                        data-purecounter-duration="0" class="purecounter">2</span>
                                    <p>Lokasi Kampus</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="8"
                                        data-purecounter-duration="0" class="purecounter">7</span>
                                    <p>Area Parkir</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="430"
                                        data-purecounter-duration="0" class="purecounter">430</span>
                                    <p>Kendaraan Terdaftar</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-6">
                                <div class="stats-item text-center w-100 h-100">
                                    <span data-purecounter-start="0" data-purecounter-end="4"
                                        data-purecounter-duration="0" class="purecounter">4</span>
                                    <p>Layanan Parkir</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="{{ asset('assets/landing-page/img/hero-img.svg') }}" class="img-fluid mb-3 mb-lg-0"
                            alt="Campus Parking" />
                    </div>
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- Featured Services Section -->
        <section id="featured-services" class="featured-services section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <h4 class="title">Lokasi Parkir Strategis</h4>
                            <p class="description">
                                Kami menyediakan lokasi parkir strategis di berbagai titik
                                kampus untuk memudahkan akses kendaraan Anda.
                            </p>
                            <a href="#" class="readmore stretched-link">
                                <span>Learn More</span><i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0">
                            <i class="fa-solid fa-shield-alt"></i>
                        </div>
                        <div>
                            <h4 class="title">Keamanan Terjamin</h4>
                            <p class="description">
                                Area parkir kami dilengkapi dengan sistem keamanan canggih
                                untuk menjamin keselamatan kendaraan Anda.
                            </p>
                            <a href="#" class="readmore stretched-link">
                                <span>Learn More</span><i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon flex-shrink-0">
                            <i class="fa-solid fa-user-check"></i>
                        </div>
                        <div>
                            <h4 class="title">Registrasi Kendaraan Mudah</h4>
                            <p class="description">
                                Proses registrasi kendaraan yang cepat dan mudah melalui
                                platform kami untuk kenyamanan Anda.
                            </p>
                            <a href="#" class="readmore stretched-link">
                                <span>Learn More</span><i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Featured Services Section -->

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

        <!-- Services Section -->
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
        <!-- /Services Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section dark-background">
            <img src="{{ asset('assets/landing-page/img/gedung-a1.png') }}" alt="Background Image" />

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Mulai Parkir Mudah di Kampus</h3>
                            <p>
                                Daftarkan kendaraan Anda sekarang dan nikmati kemudahan serta
                                keamanan parkir di area kampus. Jangan lewatkan kesempatan
                                untuk mendapatkan akses parkir yang lebih mudah dan aman.
                            </p>
                            <a class="cta-btn" href="/login">Daftar Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Call To Action Section -->

        <!-- Features Section -->
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

        <!-- /Features Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section dark-background">
            <img src="{{ asset('assets/landing-page/img/gedung-b.png') }}" class="testimonials-bg "
                alt="" />

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              }
            }
          </script>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/landing-page/img/testimonials/testimonials-1.jpg') }}"
                                    class="testimonial-img" alt="" />
                                <h3>Ahmad Fauzi</h3>
                                <h4>Mahasiswa</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>
                                        "Sistem parkir kampus ini sangat memudahkan saya. Proses pendaftaran hingga
                                        menemukan tempat parkir menjadi lebih cepat dan mudah."
                                    </span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/landing-page/img/testimonials/testimonials-2.jpg') }}"
                                    class="testimonial-img" alt="" />
                                <h3>Siti Rahmawati</h3>
                                <h4>Dosen</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>
                                        "Sebagai dosen, saya merasa sangat terbantu dengan adanya layanan parkir ini.
                                        Tidak perlu lagi khawatir mencari tempat parkir setiap kali datang ke kampus."
                                    </span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/landing-page/img/testimonials/testimonials-5.jpg') }}"
                                    class="testimonial-img" alt="" />
                                <h3>Budi Santoso</h3>
                                <h4>Staff</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>
                                        "Layanan parkir kampus ini sangat efisien dan terpercaya. Saya selalu bisa
                                        mendapatkan tempat parkir yang dekat dengan kantor tanpa masalah."
                                    </span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/landing-page/img/testimonials/testimonials-4.jpg') }}"
                                    class="testimonial-img" alt="" />
                                <h3>Andi Susanto</h3>
                                <h4>Pengunjung</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>
                                        "Kunjungan ke kampus menjadi lebih mudah dengan adanya layanan parkir yang
                                        efisien ini. Sangat membantu dan mudah diakses."
                                    </span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('assets/landing-page/img/testimonials/testimonials-3.jpg') }}"
                                    class="testimonial-img" alt="" />
                                <h3>Maya Puspitasari</h3>
                                <h4>Alumni</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>
                                        "Sebagai alumni, saya sangat bangga dengan perkembangan layanan parkir kampus
                                        ini. Layanan yang semakin baik dan efisien."
                                    </span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- /Testimonials Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section">
            <!-- Judul Bagian -->
            <div class="container section-title" data-aos="fade-up">
                <span>Pertanyaan yang Sering Diajukan</span>
                <h2>Pertanyaan yang Sering Diajukan</h2>
                <p>
                    Temukan jawaban atas pertanyaan umum mengenai layanan parkir kampus kami.
                </p>
            </div>
            <!-- Akhir Judul Bagian -->

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="faq-container">
                            <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Bagaimana cara mendaftar untuk mendapatkan akses parkir di kampus?</h3>
                                <div class="faq-content">
                                    <p>
                                        Untuk mendapatkan akses parkir di kampus, Anda perlu mendaftar melalui platform
                                        kami dengan mengisi formulir pendaftaran dan menyertakan informasi kendaraan
                                        Anda. Setelah pendaftaran berhasil, Anda akan menerima kartu akses atau stiker
                                        parkir yang harus ditempelkan pada kendaraan Anda.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Dimana saya bisa menemukan lokasi parkir yang tersedia di kampus?</h3>
                                <div class="faq-content">
                                    <p>
                                        Anda dapat menemukan lokasi parkir yang tersedia di kampus melalui aplikasi atau
                                        website kami. Gambar lokasi parkir akan menunjukkan area parkir yang tersedia
                                        dan informasi kapasitas real-time.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Apakah ada biaya untuk parkir di kampus?</h3>
                                <div class="faq-content">
                                    <p>
                                        Tidak, parkir di kampus kami gratis. Mahasiswa, staf, dan tamu dapat menggunakan
                                        fasilitas parkir tanpa dikenakan biaya. Namun, Anda tetap harus mendaftarkan
                                        kendaraan Anda dan mendapatkan stiker atau kartu akses parkir.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="500">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Apakah ada area parkir khusus untuk staf dan mahasiswa?</h3>
                                <div class="faq-content">
                                    <p>
                                        Ya, kami menyediakan area parkir khusus untuk staf dan mahasiswa. Staf dan
                                        mahasiswa yang telah terdaftar akan memiliki akses ke area parkir yang
                                        ditentukan sesuai dengan jenis keanggotaan mereka.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item" data-aos="fade-up" data-aos-delay="600">
                                <i class="faq-icon bi bi-question-circle"></i>
                                <h3>Bagaimana jika ada masalah dengan akses parkir saya?</h3>
                                <div class="faq-content">
                                    <p>
                                        Jika Anda mengalami masalah dengan akses parkir, silakan hubungi tim dukungan
                                        pelanggan kami. Kami akan membantu Anda menyelesaikan masalah tersebut secepat
                                        mungkin untuk memastikan kenyamanan parkir Anda.
                                    </p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- /Faq Section -->
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
