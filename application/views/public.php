<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>WEB | A-PAKER</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url();?>assets/logo.svg" />

    <!-- Vendor CSS Files -->
    <link href="<?= base_url();?>assets/public/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url();?>assets/public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url();?>assets/public/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Scaffold - v4.7.0
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo me-auto">
                <h1><a href="<?=base_url();?>Login/login_user">A-PAKER</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#visi_misi">Visi dan Misi</a></li>
                    <li><a class="nav-link scrollto " href="#tata_nilai">Tata Nilai</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Loker</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <div class="header-social-links d-flex align-items-center">
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            </div>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center"
                    data-aos="fade-up">
                    <div>
                        <h1>APLIKASI PELAYANAN PENGAJUAN KERJA/AK1</h1>
                        <h2> Dinas Tenaga Kerja dan Transmigrasi Kabupaten
                            Bangkalan</h2>
                        <a href="#about" class="btn-get-started scrollto">Mulai</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
                    <img src="<?= base_url();?>assets/logo/logo.svg" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">


        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0">
                            <h3>Tentang Dinas Tenaga Kerja</h3>
                            <p class="fst-italic">
							Dinas Tenaga Kerja dan Transmigrasi Kabupaten Bangkalan adalah sebuah lembaga pemerintah yang bertanggung jawab atas pengelolaan sumber daya manusia, tenaga kerja, serta program transmigrasi di wilayah Kabupaten Bangkalan.
							Tugas utama Disnakertrans adalah sebagai instansi pemerintah bidang tenaga kerja dan transmigrasi pada daerah wilayah kerjanya. Untuk fungsi dari Disnakertrans diantaranya merumuskan kebijakan ketenaga kerjaan dan transmigrasi, pelaksana kebijakan tenaga kerja dan transmigrasi, administrasi ketenaga kerjaan, pengawasan tenaga kerja dan transmigrasi, pelaporan dan evaluasi bidang tenaga kerja dan transmigrasi.
                            </p>


                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="zoom-in">
                        <img src="<?= base_url();?>assets/public/assets/img/tentang.jpg" class="img-fluid" alt="">
                    </div>

                </div>

            </div>
        </section>
        <!-- ======= About Section ======= -->
        <section id="visi_misi" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6" data-aos="zoom-in">
                        <img src="<?= base_url();?>assets/public/assets/img/6671.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
                        <div class="content pt-4 pt-lg-0">
                            <h3>Visi</h3>
                            <p class="fst-italic">
							"Menjadi lembaga yang unggul dalam pengelolaan sumber daya manusia dan peningkatan kesejahteraan melalui program tenaga kerja dan transmigrasi yang berkelanjutan di Kabupaten Bangkalan."
                            </p>
                            <h3>Misi</h3>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> Meningkatkan Kualitas Sumber Daya Manusia
                                    (SDM) Tenaga Kerja..</li>
                                <li><i class="bi bi-check-circle"></i> Pembinaan Hubungan Industrial, Perlindungan
                                    dan Pengawasan
                                    Ketenagakerjaan serta Peningkatan Kesejahteraan Pekerja.
                                    .</li>
                                <li><i class="bi bi-check-circle"></i> Memberdayakan Transmigran dan Penduduk
                                    Sekitarnya menuju
                                    Masyarakat Mandiri dalam Rangka Menunjang Pembangunan Daerah.
                                </li>
                                <li><i class="bi bi-check-circle"></i> Pembangunan Kawasan Transmigrasi untuk
                                    Mendukung
                                    Pembangunan Daerah secara Berkelanjutan.

                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="tata_nilai" class="features">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 mt-2 mb-tg-0 order-2 order-lg-1">
                        <ul class="nav nav-tabs flex-column">
                            <h3>Tata Nilai</h3>
                            <li class="nav-item" data-aos="fade-up">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">
                                    <h4>Integritas</h4>
                                    <p>Perilaku yang mencerminkan kesesuaian antara pikiran, perkataan dan
                                        perbuatan.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="100">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">
                                    <h4> Profesionalisme</h4>
                                    <p>Sigap melaksanakan tugas sesuai dengan kemampuan serta pengetahuan
                                        dengan bertanggung jawab dan kreatifitas tinggi.</p>
                                </a>
                            </li>
                            <li class="nav-item mt-2" data-aos="fade-up" data-aos-delay="200">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">
                                    <h4>Akuntabel</h4>
                                    <p>Tata peraturan, patuh pada pimpinan, serta menjaga kesatuan hati antara
                                        pimpinan dengan karyawan demi melindungi nilai dan mencapai suatu visi.</p>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <figure>
                                    <img src="<?= base_url();?>assets/public/assets/img/features-1.png" alt=""
                                        class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <figure>
                                    <img src="<?= base_url();?>assets/public/assets/img/features-2.png" alt=""
                                        class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <figure>
                                    <img src="<?= base_url();?>assets/public/assets/img/features-3.png" alt=""
                                        class="img-fluid">
                                </figure>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <figure>
                                    <img src="<?= base_url();?>assets/public/assets/img/features-4.png" alt=""
                                        class="img-fluid">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->



        <!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Info Loker Disnaker</h2>
            <p>Berikut Informasi terupdate Lowongan Kerja terupdate 2024.</p>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <?php foreach($loker as $i):?>
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="<?= base_url('assets/logo/'.$i['logo']) ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4><?= $i['nama_perusahaan'] ?></h4>
                        <p><?= $i['judul'] ?></p>
                    </div>
                    <div class="portfolio-links">
                        <a href="<?= base_url('assets/logo/'.$i['logo']) ?>" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="<?= base_url('Web_public/loker_detail/'.$i['id_loker']) ?>" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</section>
<!-- End Portfolio Section -->



        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Daftar Kartu Pencari Kerja/AK1</h3>
                        <!-- <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p> -->
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="<?=base_url();?>Register/register_user">Daftar</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->



        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Struktur Organisasi</h2>
                    <p>Struktur Organisasi Dinas Tenaga Kerja dan Transmigrasi Kabupaten
                        Bangkalan.</p>
                </div>

                <div class="row">

                    <img src="<?= base_url();?>assets/public/assets/img/bagan.png" alt="">

                </div>

            </div>
        </section><!-- End Team Section -->






        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Hubungi Kami</h2>
                </div>

                <div class="row">

                    <div class="col-lg-12 d-flex align-items-stretch" data-aos="fade-right">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jl. Jenderal Sudirman No.70, Bangkalan, Kec. Telang, Kabupaten Bangkalan, Jawa Timur 59114</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>(0211) 123 600</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31671.153880856764!2d112.7032945!3d-7.1382278999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd803dd886bbff5%3A0x9777ca139b28195d!2sUniversitas%20Trunojoyo%20Madura!5e0!3m2!1sid!2sid!4v1718025251584!5m2!1sid!2sid"
                                frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe> 

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

                    <div class="col-lg-7 col-md-7">
                        <div class="footer-info">
                            <h3>A-PAKER</h3>
                            <p>
                                Jl. Jenderal Sudirman No.70, Telang, Kec. Telang, Kabupaten Bangkalan, Jawa Timur 59114<br><br>
                                <strong>Phone:</strong> (0211) 123 600<br>
                                <strong>Instagram:</strong> @disnaskerja<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-8 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#visi_misi">Visi dan Misi</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#tata_nilai">Tata Nilai</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Loker</a></li>
                        </ul>
                    </div>




                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright 2022 |<a href='https://sharecodingan.blogspot.com/' title='sharecodingan.blogspot.com' target='_blank'>Abid Taufiqur Rohman</a>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url();?>assets/public/assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url();?>assets/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url();?>assets/public/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url();?>assets/public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url();?>assets/public/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url();?>assets/public/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url();?>assets/public/assets/js/main.js"></script>

</body>


</html>
