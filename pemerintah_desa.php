<?php

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
    <link rel="icon" type="image/png" href="login/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">
    <style type="text/css"> p{ text-align: justify; } </style>
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

    <div class="single-blog-area blog-style-2 mb-50">
        <div class="single-blog-thumbnail">
            <center><img src="fotodesa/ujung.jpeg" style="height: 400px; width: 900px;"></center>
            <div class="post-tag-content"></div>
        </div>

    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper section-padding-100-0 clearfix">
        <div class="container">
            <div class="row align-items-end">
                <!-- Single Blog Area -->
                <div class="col-12 col-lg-8">
                    <div class="single-blog-area clearfix mb-100">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">Pemerintahan Desa</a>
                            <h4><a href="#" class="post-headline">Struktur Organisasi</a></h4><br>
                            <p class="mb-3"><img src="fotodesa/strukor_desa.png"></p>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="single-catagory-area clearfix mb-100">
                        <img src="fotodesa/ujung.jpeg" alt="">
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="single-catagory-area clearfix mb-100">
                        <img src="fotodesa/ujung2.jpeg" alt="">
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4"></div>

            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->

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
