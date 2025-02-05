<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Car Rental</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="{{ asset('cars.png') }}">
  

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- =======================================================
  * Template Name: Selecao
  * Template URL: https://bootstrapmade.com/selecao-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Rental Car</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Beranda</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="/login"> <i class="bi bi-box-arrow-in-right me-2  fs-3"> </i> Login</a></li>
      
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Selamat Datang di <span>Rental Car</span></h2>
            <p class="animate__animated animate__fadeInUp"> <strong>Sewa Mobil Mudah & Cepat </strong>– Nikmati perjalanan nyaman dengan layanan rental terbaik! </p>
            <a href="/register" class="btn-get-started animate__animated animate__fadeInUp scrollto">Daftar</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Hemat & Terjangkau</h2>
            <p class="animate__animated animate__fadeInUp"> <strong>Harga Bersahabat, Perjalanan Hemat</strong> – Pilih mobil impianmu dengan tarif terbaik!</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Liburan dan Petualangan</h2>
            <p class="animate__animated animate__fadeInUp"><strong>Jelajahi Destinasi Tanpa Batas! </strong>– Sewa mobil dengan fleksibilitas dan kenyamanan maksimal.</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item">
          <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown">Mulai Dari Sekarang</h2>
            <p class="animate__animated animate__fadeInUp"><strong>Daftar Sekarang! </strong>– Daftar lalu dapatkan penawaran terbaik dan perjalanan nyaman dengan mobil impian!</p>
            <a href="/register" class="btn-get-started animate__animated animate__fadeInUp scrollto">Daftar</a>
          </div>
        </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
          <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
        </defs>
        <g class="wave1">
          <use xlink:href="#wave-path" x="50" y="3"></use>
        </g>
        <g class="wave2">
          <use xlink:href="#wave-path" x="50" y="0"></use>
        </g>
        <g class="wave3">
          <use xlink:href="#wave-path" x="50" y="9"></use>
        </g>
      </svg>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Tentang Kami</h2>
        <p>Kenapa Harus Memilih Kami?</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
                Kami adalah penyedia layanan rental mobil terbaik yang berkomitmen untuk memberikan pengalaman berkendara yang aman, nyaman, dan terjangkau. 
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Armada Mobil Terawat & Berkualitas</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Layanan Pelanggan Ramah & Profesional</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Harga Terjangkau dengan Tanpa Biaya Tersembunyi</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Proses Sewa Cepat & Mudah</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>Kami adalah penyedia layanan rental mobil terbaik yang berkomitmen untuk memberikan pengalaman berkendara yang aman, nyaman, dan terjangkau. Dengan berbagai pilihan kendaraan dari city car hingga premium SUV, kami siap memenuhi segala kebutuhan perjalanan Anda, baik untuk keperluan bisnis, liburan, maupun acara spesial. </p>
            <a href="#" class="read-more"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
          <li class="nav-item col-3">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
              <i class="bi bi-calendar-day"></i>
              <h4 class="d-none d-lg-block">Rental Harian & Mingguan </h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
              <i class="bi bi-car-front"></i>
              <h4 class="d-none d-lg-block">Sewa Mobil + Sopir</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
              <i class="bi bi-tag-fill"></i>
              <h4 class="d-none d-lg-block">Layanan Antar-Jemput</h4>
            </a>
          </li>
          <li class="nav-item col-3">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
              <i class="bi bi-flower1"></i>
              <h4 class="d-none d-lg-block">Luxury & Wedding Car </h4>
            </a>
          </li>
        </ul><!-- End Tab Nav -->

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Perjalanan Singkat, Kenangan Panjang</h3>
                <p class="fst-italic">
                  Temukan Mobil Impian mu dengan harga terbaik!
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i>
                    <spab>Armada Mobil Berkualitas</spab>
                  </li>
                  <li><i class="bi bi-check2-all"></i> <span>Mobil Terjamin dan Berkualitas</span>.</li>
                  <li><i class="bi bi-check2-all"></i> <span>Sewa Mobil Cepat dan Mudah</span></li>
                </ul>
                <p>
                    Apakah Anda membutuhkan mobil untuk perjalanan sehari atau minggu? Layanan sewa harian dan mingguan kami memberikan fleksibilitas penuh sesuai dengan jadwal Anda. Pilih kendaraan terbaik dan nikmati perjalanan tanpa batas waktu!
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/cars1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-2">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Kenyamanan Tanpa Repot, Perjalanan Tanpa Stres</h3>
                <p>
                    Nikmati perjalanan dengan ketenangan pikiran! Layanan sewa mobil dengan sopir profesional kami memastikan perjalanan Anda aman dan nyaman, tanpa perlu khawatir tentang arah atau parkir. Fokuslah pada tujuan Anda, sementara kami yang mengurus sisanya.
                </p>
                <p class="fst-italic">
                    Solusi praktis untuk mobilitas tanpa hambatan.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Layanan Pelanggan Ramah & Profesional</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Harga Terjangkau dengan Tanpa Biaya Tersembunyi</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Nikmati perjalanan tanpa repot dengan pengemudi profesional.</span></li>
                </ul>
                    <p>
                        Anda bisa fokus sepenuhnya pada tujuan Anda tanpa repot mengemudi. Dengan pilihan kendaraan yang luas, perjalanan Anda akan semakin menyenankan dan efisien!
                    </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/background.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-3">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Kemudahan Di Setiap Langkah</h3>
                <p>
                    Tak perlu repot mencari transportasi ke bandara atau stasiun. Layanan antar-jemput kami memastikan Anda tiba tepat waktu, dengan kenyamanan maksimal. Dari dan ke tempat tujuan Anda, kami akan mengantarkan dengan tepat dan aman.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</span></li>
                </ul>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/cars.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

          <div class="tab-pane fade" id="features-tab-4">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>Tampil Mewah di Hari Spesial Anda</h3>
                <p>
                    Tidak ada momen yang lebih istimewa daripada hari pernikahan Anda. Dengan layanan sewa mobil mewah kami, Anda dapat tampil elegan di hari besar Anda. Dari mobil klasik hingga kendaraan modern, kami menawarkan berbagai pilihan mobil premium untuk momen yang tak terlupakan.
                </p>
                <p class="fst-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="assets/img/cars2.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab Content Item -->

        </div>

      </div>

    </section><!-- /Features Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Siap Berkendara Menjelajahi Indonesia? </h3>
            <p>Hubungi kami sekarang juga untuk mendapatkan penawaran terbaik dan jadwalkan perjalanan Anda dengan mudah!</p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="whatsapp://send?phone=6281221778235">Hubungi Kami</a>
          </div>
        </div>

      </div>

    </section><!-- /Call To Action Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pertanyaan yang Sering Diajukan</h2>
        <p>Pertanyaan yang Sering Diajukan</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-12">
            <div class="custom-accordion" id="accordion-faq">

              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-1">
                    Bagaimana saya memesan mobil?
                  </button>
                </h2>

                <div id="collapse-faq-1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-faq">
                  <div class="accordion-body">
                    Untuk memesan mobil bisa untuk registrasi akun dan login untuk memesan mobil dan dapatkan penawaran terbaik.
                  </div>
                </div>
              </div>
              <!-- .accordion-item -->

              <div class="accordion-item">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-2">
                Bagaimana saya membuat akun?
              </button>
            </h2>
            <div id="collapse-faq-2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-faq">
                    <div class="accordion-body">
                      Untuk membuat akun bisa untuk registrasi akun dan login untuk memesan mobil dan dapatkan penawaran terbaik.
                    </div>
              </div>
            </div>
            <!-- .accordion-item -->

            <div class="accordion-item">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-faq-3">
                  Bagaimana saya dapatkan penawaran terbaik?
                </button>
              </h2>

              <div id="collapse-faq-3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-faq">
                <div class="accordion-body">
                  Untuk dapatkan penawaran terbaik bisa untuk registrasi akun dan login untuk memesan mobil dan dapatkan penawaran terbaik.
                </div>
              </div>
            </div>
            <!-- .accordion-item -->

          </div>
        </div>
      </div>
      </div>
    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Kontak</h2>
        <p>Kontak Kami</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">
        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Alamat</h3>
                <p>Jl Cijerah 1 No 1, Kota Bandung</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Hubungi Kami</h3>
                <p>021336523</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>rentcarbdg@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="https://formspree.io/f/xpwqrbgd" method="POST"  class="php-email-form" data-aos="fade-up" data-aos-delay="100">
              <div class="row gy-4" id="contactForm" >
                
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Masukan Nama Anda" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Masukan Email Anda" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Masukan Subject Pesan Anda" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Masukan Pesan Anda" required=""></textarea>
                </div>
                <div class="col-md-12 text-center">

                  <button type="submit">Kirim Pesan</button>
                </div>
              </div>
            </form>
          </div>
          <!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">Rental Car</h3>
      <p>Enjoy Your Car driving and holiday</p>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-skype"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="container">
        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename">rentcar</strong> <span>All Rights Reserved</span>
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you've purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  {{-- <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>  --}}
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  

  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>