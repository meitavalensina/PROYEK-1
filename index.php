<?php
    error_reporting(0);
    session_start();
    if (($_SESSION['username']!==null)||($_SESSION['username']!="")) {
        if ($_SESSION['level']=="admin") {
            header("location:login/admin/");
        }else{
            header("location:login/warga/");
        }
    }

include 'kalender/kalender.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Sistem Informasi Desa Ujungaris</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

    <style type="text/css">
        p{
            text-align: justify;
            font-size: 16px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="kalender/kalender.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="kalender/kalender.js"></script>

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Breaking News Area -->
                    <div class="col-12 col-sm-8">
                        <div class="breaking-news-area">
                            <div id="breakingNewsTicker" class="ticker">
                                <ul style="font-size: 16px; font-weight: bold;">
                                   <li>Halo!</li>
                                    <li>Selamat Datang di Sistem Informasi Desa Ujungaris!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Logo Area -->
        <div class="logo-area text-center">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div style="font-family: Lemon; font-size: 50px;">Ujungaris</div>
                        <div style="font-family: Calibri; font-size: 20px;">Sistem Informasi Desa Ujungaris</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nav Area -->
        <div class="original-nav-area" id="stickyNav">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between">

                        <!-- Subscribe btn -->
                        <div class="subscribe-btn">
                            <a href="login/index.php" class="btn subscribe-btn">Login</a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu" id="originalNav">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Beranda</a></li>
                                    <li><a href="demografi.php">Demografi Desa</a></li>
                                    <li><a href="pemerintah_desa.php">Pemerintahan Desa</a></li>
                                    <li><a href="gallery.php">Galeri</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area">
        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(fotodesa/ujungaris1.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="#" data-animation="fadeInUp">Desa Ujungaris</a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a href="index.php">UJUNGARIS "RAMAH"</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(fotodesa/ujungaris2.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="#" data-animation="fadeInUp">Desa Ujungaris</a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a style="text-transform: none !important;" href="single-post.html">Selamat Datang!</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(fotodesa/ujungaris3.jpeg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="slide-content text-center">
                                <div class="post-tag">
                                    <a href="#" data-animation="fadeInUp">Desa Ujungaris</a>
                                </div>
                                <h2 data-animation="fadeInUp" data-delay="250ms"><a style="text-transform: none !important;" href="single-post.html">Ujungaris, Widasari, Indramayu.</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Single Blog Area Start ##### -->
    <div class="single-blog-wrapper section-padding-0-100">
        <div class="container">
            <div class="row">
                <!-- ##### Post Content Area ##### -->
                <div class="col-12 col-lg-9">
                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">Desa Ujungaris</a>
                            <h4 class="post-headline mb-0">Legenda Desa (Sasakala)</h4>
                            <div class="post-meta mb-50"></div>
                            <p>Gusti Sinuhun Sunan Jati Purba ketika itu menghadap ke Cirebon Girang kepada Mbah Kuwu Sangkan untuk berunding atau bermusyawarah demi kemajuan jaman dan untuk perluasan wilayah perdesaan. Oleh Mbah Kuwu Sangkan niatan Sinuhun Jati Purba tersebut akhirnya disetujui dengan alasan untuk perluasan syiar Islam.</p>

                            <p>Akhirnya Sinuhun Sunan Jati Purba memerintahkan 5 (lima) orang santrinya yang berasal dari Bagelen yaitu Ki Sunder, Ki Sakri, Ki Jembrong, Ki Senen dan Ki Jatigede dengan tugas mencari daerah baru untuk membuat perdukuhan.</p>

                            <p>Selanjutnya berangkatlah ke lima santri tersebut menuju kearah Utara menyelusuri sepanjang sungai Cimanuk dengan mengendarai getek (perahu yang dirangkai dengan susunan bambu). Setelah sekian lama menelusuri sungai Cimanuk akhirnya mendaratlah ke lima santri tersebut di sebuah hutan yang bernama hutan Balailiwungan. Konon hutan ini terkenal sangat angker dan jail. Dan akhimya mereka memutuskan untuk membuat sebuah gubug sebagai tempat beristirahat.</p>

                            <p>Setelah selesai menjalankan ibadah sholat Magrib, mereka berunding untuk membuka hutan. Selama para santri Gusti Sinuhun Jati Purba tinggal di hutan Balailiwungan tersebut, segala macam binatang buas, ular dan burung yang sedang terbang sekalipun berjatuhan karena wibawa para santri tersebut.</p>

                            <p>Dikisahkan selama 40 (empat puluh) hari mereka membuka hutan dengan cara membakar hutan. Melalui sebuah keris yang ditancapkan kedalam tanah hingga pembakaran terus meluas. Pribawa keris dan pembakaran hutan membuat semua penghuni hutan lari tunggang langgang Baik para binatang buas maupun Jin dan setan Mekarkayangan menjerit dan menangis kepanasan. Sampai-sampai ke lima santri tersebut merasa aneh dan keheranan.</p>

                            <p>Akhirnya keris tersebut dicabut dari dalam tanah. Terjadilah suatu keanehan ketika keris dicabut ternyata hilang werangkanya (sarung keris). Dan selanjutnya mereka berunding untuk berbagi wilayah dari tanah hutan yang sudah mereka bakar tersebut. Dan untuk gubug yang merekadiami, daerah tersebut mereka namakan gubug/dusun Ujungaris berasal dari keris yang ditancapkan. Dan mereka berucap kelak gubug akan dipindahkan ke sebelah Barat sebagai Balai Desa Ujungaris. Wallahualam bi shawab..</p>
                        </div>
                    </div>

                    <div class="blog-post-author mt-100 d-flex">
                        <div class="author-info">
                            <div class="line"></div>
                            <span class="author-role">Desa Ujungaris</span>
                            <h4 class="author-name">Terbentuknya Desa Ujungaris</h4>
                            <p>Terbentuknya Desa Ujungaris Catatan sejarah Desa Ujungaris semenjak masa Jabatan sesepuh Kampung yang bernama Suta Mlaya (Kuwu Buto) banyak mengalami kejadian yang baik, bahkan hampir dikatakan tidak ada kejadian buruk yang berarti.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3">
                    <div class="post-sidebar-area">
                        <br>
                        <br>
                        <?php
                            echo '<h3>'.tgl_indo(date('Y-m')).'</h3>';
                            echo draw_calendar(date('m'),date('Y')); 
                            echo '<br><div id="watch"></div>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Single Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area text-center" style="font-size: 16px"><b>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Desa Ujungaris</b></footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>