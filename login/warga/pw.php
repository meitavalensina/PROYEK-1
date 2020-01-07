<?php
    session_start();
    if( isset($_SESSION['username']) ){
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
    <link rel="stylesheet" type="text/css" href="kalender/kalender.css">
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
                                   <li>Halo <?php echo $_SESSION['nama_user']; ?>!</li>
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
                            <a href="../logout.php" class="btn subscribe-btn">Logout</a>
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
                                    <li><a href="ps.php">Pengajuan Surat</a></li>
                                    <li><a href="pw.php">Pengaduan Warga</a></li>
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
            <center><img src="fotodesa/uu.jpeg" style="height: 400px; width: 900px;"></center>
            <div class="post-tag-content"></div>
        </div>
    </div>


    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-6 col-lg-9">
                    <div class="contact-form">
                        <h5>Isi Pengaduan</h5>
                        <!-- Contact Form -->
                        <form action="proses_pw.php" method="post" onsubmit="alert('Kirim Pesan Anda?')">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <label for="nama" style="font-size: 14px"><i>Nama</i></label>
                                    <div class="group">
                                        <input type="text" name="namap" id="nama" value="<?php echo $_SESSION['nama_user']; ?>" readonly>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="isi" id="isi" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label for="isi" style="font-size: 14px">Tulis Pesan yang Diadukan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="submit" class="btn original-btn">Kirim</button>
                                </div>
                                <div class="col-12">
                                    <div class="single-blog-content mt-50">
                                        <div class="line"></div>
                                        <h4 class="post-headline">Info pengaduan saya</h4>
                                        <p></p>
                                        <div class="post-meta">
                                            <div class="card">
                                                <div class="card-body" style="font-size: 16px;">
                                                    <?php
                                                    include 'status_pw.php';
                                                    ?>
                                                </div>
                                            </div>
                                            <p></p>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="post-sidebar-area">
                        <?php
                            echo '<h3>'.tgl_indo(date('Y-m')).'</h3>';
                            echo draw_calendar(date('m'),date('Y')); 
                            echo '<br><div id="watch"></div>';
                        ?>
                    </div>
                    <div class="post-sidebar-area">
                        <div style="font-family: Roboto,sans-serif; font-size: 14px; line-height: 1; margin-top: 0px;
                        border-bottom: 3px solid #D10000;"><br><br>
                        <span style="background-color: #D10000; padding : 8px 8px 0 8px; color : #fff; line-height: 27px; display:inline-block;">CONTACT US<br></span><br>
                        </div>
                    </div>
                    <div class="post-sidebar-area">
                        <br>
                        <div style="font-family: Roboto,sans-serif; font-size: 14px; line-height: 1; margin-top: 0px;
                        border: 3px solid #B22222;">
                        <span style="background-color: ; padding : 8px 8px 0 8px; color : black; line-height: 27px; display:inline-block; border: #B22222">
                            <img src="../../email.jpg" height="20px" width="20px"> Email : lufitaalif@gmail.com <br>
                            <img src="../../email.jpg" height="20px" width="20px"> Email : valensinam@gmail.com <br>
                            <img src="../../email.jpg"height="20px" width="20px">  Email : nadaqonita01@gmail.com<br>
                        </span>
                        </div>
                        </div>
                        <div class="post-sidebar-area">
                        <div style="font-family: Roboto,sans-serif; font-size: 14px; line-height: 1; margin-top: 0px;
                        border-bottom: 3px solid #D10000;"><br><br>
                        <span style="background-color: #D10000; padding : 8px 8px 0 8px; color : #fff; line-height: 27px; display:inline-block;">Dokumentasi Desa
                        </span>
                        </div>
                    </div>
                    <div>
                        <frameset cols="25%,*">
                            <frame src="index.php" name="kiri" noresize="noresize">
                            <frame src="gallery.php" name="kanan">
                        </frameset><br>
                        <div style="font-family: Roboto,sans-serif; font-size: 14px; line-height: 1; margin-top: 0px;
                        border: 3px solid #B22222;">
                        <span style="background-color: ; padding : 8px 8px 0 8px; color : black; line-height: 27px; display:inline-block; border: #B22222">
                            <img src="fotodesa/perbaikan.jpeg">
                            <a href="gallery.php" target="kanan"> Lihat Selengkapnya...</a>
                        </span>
                    </div></div>
                </div>
            </div>
        </div><br><br>
    </section>
    <!-- ##### Contact Area End ##### -->

    <div class="instagram-feed-area"></div>

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
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>

</body>

</html>

<?php
    }else{
        echo "
            <script>
                alert('Anda harus login!');
            </script>
        ";
        header('Location: ../index.php');
    }
?>