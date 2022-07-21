<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Medicio Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url('assets4/') ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets4/') ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url('assets4/') ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets4/') ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url('assets4/') ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets4/') ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url('assets4/') ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('assets4/') ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url('assets4/') ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url('assets4/') ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets4/') ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets4/') ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medicio - v4.7.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
            <div class="align-items-center d-none d-md-flex">
                <i class="bi bi-clock"></i> Monday - Saturday, 8AM to 4PM
            </div>
            <div class="d-flex align-items-center">
                <i class="bi bi-phone"></i> Call us now +62 822 3135 8354
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <a href="index.html" class="logo me-auto"><img src="<?= base_url('assets4/') ?>assets/img/logo.jpg" alt=""></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <h1 class="logo me-auto"><a href="index.html"><span> PPPM Miftahul Huda Pekanbaru</span></a></h1>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#visi">Visi Misi</a></li>
                    <li><a class="nav-link scrollto" href="#struktur">Struktur</a></li>
                    <li><a class="nav-link scrollto" href="#pengajar">Pengajar</a></li>
                    <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
                    <li><a class="nav-link scrollto" href="#psb">PSB</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="<?= base_url() ?>Santri/tambah" class="appointment-btn scrollto"><span class="d-none d-md-inline">PSB Online</a>
            <a href="<?= base_url() ?>Auth" class="appointment-btn scrollto"><span class="d-none d-md-inline">Login</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(<?= base_url('assets4/') ?>assets/img/slide/slide-1.jpg)">
                    <div class="container">
                        <h2>Welcome to <span>PPPM Pekanbaru</span></h2>
                        <h4>Be Teacher Of The World</h4>
                        <p>Pondok Pesantren Pelajar dan Mahasiswa Pekanabaru</p>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(<?= base_url('assets4/') ?>assets/img/slide/slide-2.jpg)">
                    <div class="container">
                        <h2>Welcome to <span>PPPM Pekanbaru</span></h2>
                        <h4>Be Teacher Of The World</h4>
                        <p>Pondok Pesantren Pelajar dan Mahasiswa Pekanbaru</p>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(<?= base_url('assets4/') ?>assets/img/slide/slide-3.jpg)">
                    <div class="container">
                        <h2>Welcome to <span>PPPM Pekanbaru</span></h2>
                        <h4>Be Teacher Of The World</h4>
                        <p>Pondok Pesantren Pelajar dan Mahasiswa Pekanbaru</p>
                        <a href="#about" class="btn-get-started scrollto">Read More</a>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                    <h4>Pondok Pesantren Mahasiswa Jogja atau disingkat "PPPM Pekanbaru" merupakan salah satu lembaga pendidikan yang dikelola oleh Lembaga Dakwah Islam Indonesia (LDII)</h4>
                    <p>PPM ini merupakan salah satu bentuk kepedulian dan keseriusan yang ditunjukkan kepada warga LDII terutama kaum mahasiswa dalam membina generasi penerusnya. Salah satunya adalah PPPM Miftahul Huda yang berada di Pekanbaru.</p>
                </div>
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="<?= base_url('assets4/') ?>assets/img/about.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Sejarah</h3>
                        <p>
                            PPPM-MH merupakan singakatan dari Pondok Pesantren Pelajar dan Mahasiswa Miftahul Huda.
                            PPPM-MH ini berdiri mulai awal Januari 2010, dan sampai saat ini masih dalam tahap pembelajaran, pengenalan, dan perkembangan.
                            PPPM-MH ini beralamat di Jl. Suka Karya Gg. Buntu Indah No. 1, Kel. Tuah Karya, Kec. Tampan, Panam,Pekanbaru, Kode Pos 28293.
                        </p>
                        <p>
                            PPPM-MH ini dibangun untuk para Mahasiswa yang ada di Kota Pekanbaru agar mereka lancar sambungnya, terhindar dari pergaulan bebas, mantap akan dasar pengetahuan agama disamping tetap lancar pendidikan formalnya, sehingga siap untuk amar ma’ruf nahi munkar.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Us Section -->


        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services">
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="fas fa-heartbeat"></i></div>
                            <h4 class="title"><a href="">Kuliah Sambil Mondok</a></h4>
                            <p class="description">Menyeimbangkan asupan akan ilmu dunia dan akhirat</p>
                        </div>
                    </div>

                    <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="fas fa-pills"></i></div>
                            <h4 class="title"><a href="">Berbagai Kampus</a></h4>
                            <p class="description">Kami berasal dari berbagai kampus yang ada di Pekanbaru</p>
                        </div>
                    </div>

                    <div class="col-md-8 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="fas fa-thermometer"></i></div>
                            <h4 class="title"><a href="">Kegiatan Seru Bermanfaat</a></h4>
                            <p class="description">Tidak hanya mengaji, PPM Pekanbaru sering mengadakan acara yang mendidik.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Featured Services Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container" data-aos="fade-up">

                <div class="row no-gutters">

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-user-md"></i>
                            <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>
                                    <h4>Kelas</h4>
                                </strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="far fa-hospital"></i>
                            <span data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>
                                    <h4>Santri</h4>
                                </strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-flask"></i>
                            <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>
                                    <h4>Santri Baru</h4>
                                </strong></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <i class="fas fa-award"></i>
                            <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>
                                    <h4>Santri Lulus</h4>
                                </strong></p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End Counts Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Kata Alumni</h2>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="<?= base_url('assets4/') ?>assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="<?= base_url('assets4/') ?>assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="<?= base_url('assets4/') ?>assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="<?= base_url('assets4/') ?>assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="<?= base_url('assets4/') ?>assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Visi Misi Section ======= -->
        <section id="visi" class="visi">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Visi Misi</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0 conten" data-aos="fade-right">
                        <h3>Visi</h3>
                        <p>
                            Dapat menjadi sebagai wahana pembinaan yang berorientasi pada intelektualitas dan kepahaman agama. Sehingga nantinya lulusan dari PPPM-MH ini dapat menjadi Mubaligh dan Mubalighot yang memiliki wawasan yang luas sebagai Sarjana.
                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Misi</h3>
                        <p>
                            Melestarikan Qur’an Hadist dan dapat menjalin hubungan baik dengan masyarakat serta menghasilkan mahasiswa yang paham agama, cerdas, mandiri dan berakhlakul karimah.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Visi Misi Section -->

        <!-- ======= Struktur Section ======= -->
        <section id="struktur" class="struktur">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Struktur</h2>
                    </div>
                <div class="row">
                    <div class="col-lg-15" data-aos="fade-right">
                        <center>
                        <img src="<?= base_url('assets4/') ?>assets/img/struktur.png" class="img-fluid" alt="">
                    </div>                    
                </div>
            </div>
        </section>
        <!-- End Struktur Section -->

        <!-- ======= Doctors Section ======= -->
        <section id="pengajar" class="pengajar section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Pengajar</h2>
                    </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="<?= base_url('assets4/') ?>assets/img/doctors/team-1.jpg" class="img-fluid" alt="">                                
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="<?= base_url('assets4/') ?>assets/img/doctors/team-2.jpg" class="img-fluid" alt="">                                
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="<?= base_url('assets4/') ?>assets/img/doctors/team-3.jpg" class="img-fluid" alt="">                                
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="<?= base_url('assets4/') ?>assets/img/doctors/team-1.jpg" class="img-fluid" alt="">                                
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Doctors Section -->

        <!-- ======= Frequently Asked Questioins Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questioins</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <ul class="faq-list">

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                            </p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                        <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                            </p>
                        </div>
                    </li>

                </ul>

            </div>
        </section><!-- End Frequently Asked Questioins Section -->

        <!-- ======= Contact Section ======= -->     

        <!-- ======= PSB Section ======= -->
        <section id="psb" class="psb">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>PSB</h2>
                    </div>
                <div class="row">
                    <div class="col-lg-15" data-aos="fade-right">
                        <center>
                        <img src="<?= base_url('assets4/') ?>assets/img/poster.png" class="img-fluid" alt="">
                    </div>                    
                </div>
            </div>
        </section>
        <!-- End PSB Section -->

         <!-- ======= Cta Section 
         <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>In an emergency? Need help now?</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a class="cta-btn scrollto" href="#appointment">Make an Make an Appointment</a>
                </div>

            </div>
        </section>-->
        <!-- End Cta Section -->

        <!-- ======= Services Section ======= -->
        <!-- =======<section id="services" class="services services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="fas fa-heartbeat"></i></div>
                        <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><i class="fas fa-pills"></i></div>
                        <h4 class="title"><a href="">Dolor Sitema</a></h4>
                        <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"><i class="fas fa-hospital-user"></i></div>
                        <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="fas fa-dna"></i></div>
                        <h4 class="title"><a href="">Magni Dolores</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><i class="fas fa-wheelchair"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"><i class="fas fa-notes-medical"></i></div>
                        <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                        <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                    </div>
                </div>

            </div>
        </section>
        --><!-- End Services Section -->

        <!-- ======= Appointment Section 
        <section id="appointment" class="appointment section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Make an Appointment</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <select name="department" id="department" class="form-select">
                                <option value="">Select Department</option>
                                <option value="Department 1">Department 1</option>
                                <option value="Department 2">Department 2</option>
                                <option value="Department 3">Department 3</option>
                            </select>
                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <select name="doctor" id="doctor" class="form-select">
                                <option value="">Select Doctor</option>
                                <option value="Doctor 1">Doctor 1</option>
                                <option value="Doctor 2">Doctor 2</option>
                                <option value="Doctor 3">Doctor 3</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Make an Appointment</button></div>
                </form>

            </div>
        </section>======= --><!-- End Appointment Section -->

        <!-- ======= Departments Section 
        <section id="departments" class="departments">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Departments</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                                    <h4>Cardiology</h4>
                                    <p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                                    <h4>Neurology</h4>
                                    <p>Voluptas vel esse repudiandae quo excepturi.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                                    <h4>Hepatology</h4>
                                    <p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                                    <h4>Pediatrics</h4>
                                    <p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <h3>Cardiology</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                                <img src="<?= base_url('assets4/') ?>assets/img/departments-1.jpg" alt="" class="img-fluid">
                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <h3>Neurology</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                                <img src="<?= base_url('assets4/') ?>assets/img/departments-2.jpg" alt="" class="img-fluid">
                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <h3>Hepatology</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                                <img src="<?= base_url('assets4/') ?>assets/img/departments-3.jpg" alt="" class="img-fluid">
                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <h3>Pediatrics</h3>
                                <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                                <img src="<?= base_url('assets4/') ?>assets/img/departments-4.jpg" alt="" class="img-fluid">
                                <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>======= --><!-- End Departments Section -->
        
        <!-- ======= Gallery Section 
        <section id="gallery" class="gallery">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="gallery-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url('assets4/') ?>assets/img/gallery/gallery-1.jpg"><img src="<?= base_url('assets4/') ?>assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url('assets4/') ?>assets/img/gallery/gallery-2.jpg"><img src="<?= base_url('assets4/') ?>assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url('assets4/') ?>assets/img/gallery/gallery-3.jpg"><img src="<?= base_url('assets4/') ?>assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url('assets4/') ?>assets/img/gallery/gallery-4.jpg"><img src="<?= base_url('assets4/') ?>assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url('assets4/') ?>assets/img/gallery/gallery-5.jpg"><img src="<?= base_url('assets4/') ?>assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url('assets4/') ?>assets/img/gallery/gallery-6.jpg"><img src="<?= base_url('assets4/') ?>assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url('assets4/') ?>assets/img/gallery/gallery-7.jpg"><img src="<?= base_url('assets4/') ?>assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
                        <div class="swiper-slide"><a class="gallery-lightbox" href="<?= base_url('assets4/') ?>assets/img/gallery/gallery-8.jpg"><img src="<?= base_url('assets4/') ?>assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>======= --><!-- End Gallery Section -->

        <!-- ======= Pricing Section 
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Pricing</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="box" data-aos="fade-up" data-aos-delay="100">
                            <h3>Free</h3>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                        <div class="box featured" data-aos="fade-up" data-aos-delay="200">
                            <h3>Business</h3>
                            <h4><sup>$</sup>19<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="300">
                            <h3>Developer</h3>
                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="fade-up" data-aos-delay="400">
                            <span class="advanced">Advanced</span>
                            <h3>Ultimate</h3>
                            <h4><sup>$</sup>49<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>======= -->
        <!-- End Pricing Section -->

        
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    </div>

            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container">

                <div class="row mt-5">

                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Our Address</h3>
                                    <p>Jl. Suka Karya Gg. Buntu Indah No. 1, Kel. Tuah Karya, Kec. Tampan, Panam,Pekanbaru, Kode Pos 28293</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Call Us</h3>
                                    <p>+62 822 55488 55<br>+62 822 254445 41</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    
                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-info">
                            <h3>PPPM Pekanbaru</h3>
                            <p>
                            Jl. Suka Karya Gg. Buntu Indah No. 1, Kel. Tuah Karya, Kec. Tampan, Panam,Pekanbaru, <br>
                            Kode Pos 28293<br><br>
                                <strong>Phone:</strong> +6 5589 55488 55<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                            </div>
                        </div>
                    </div>                    

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>PPPM Pekanbaru</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
                Designed by Kelompok 12
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets4/') ?>assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url('assets4/') ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url('assets4/') ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('assets4/') ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url('assets4/') ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url('assets4/') ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets4/') ?>assets/js/main.js"></script>

</body>

</html>