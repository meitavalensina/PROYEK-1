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
                                <ul>
                                    <li>Hello Warga!</li>
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
                                    <li><a href="gallery.php">Gallery</a></li>
                                    <li><a href="pw.php">Pengajuan Surat</a></li>
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

    <!-- ##### Single Blog Area Start ##### -->
    <div class="single-blog-wrapper section-padding-0-100">

        <!-- Single Blog Area  -->
        <div class="single-blog-area blog-style-2 mb-50">
            <div class="single-blog-thumbnail">
                <center><img src="fotodesa/demografi.jpeg" alt=""></center>
                <div class="post-tag-content">
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- ##### Post Content Area ##### -->
                <div class="col-12 col-lg-9">
                    <!-- About Author -->
                    <div class="blog-post-author mt-100 d-flex">
                        <div class="author-info">
                            <div class="line"></div>
                            <span class="author-role">Demografi</span>
                            <h4><a href="#" class="author-name">Letak Geografis</a></h4>
                            <p>Desa Ujungaris terletak di Daerah Kawasan Indramayu, dengan luas Wilayah 406 Hektar yang terdiri dari 5 Dusun dengan 5 Rukun Warga (RW) dan 24 Rukun Tetangga (RT) yang merupakan salah satu Desa yang berada di wilayah Kecamatan Widasari Kabupaten Indramayu.</p>
                            <p>Dengan batas wilayah sbb:</p>
                            <div class="card-body overflow-auto p-0" method="post" action="demografi.php">
                              <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr style="text-align: center;">
                                  <th>No</th>
                                  <th>No. KK</th>
                                  <th>Nama Lengkap</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                include_once("koneksi.php");

                                $result=mysqli_query($mysqli, "SELECT * FROM letak_geografis");
                                
                                while($user_data = mysqli_fetch_array($result)) {         
                                    echo "<tr>";
                                    echo "<td>".$user_data['id_lg']."</td>";
                                    echo "<td>".$user_data['batas']."</td>";
                                    echo "<td>".$user_data['desa']."</td>";
                                    echo "<td>".$user_data['kecamatan']."</td></tr>";
                                }
                                ?>
                                </tbody>
                              </table><br>
                            </div>
                            <!-- /.card-body -->
                            <h4>Peta Desa Ujungaris</h4>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63430.93045050481!2d108.24065039270965!3d-6.466683702337328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ec65b72ea5f41%3A0x5804af8ff0d23674!2sUjungaris%2C%20Kec.%20Widasari%2C%20Kabupaten%20Indramayu%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1578124522514!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>

                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">Demografi</a>
                            <h4><a href="#" class="post-headline mb-0">Hidrologi dan Klimatologi</a></h4>
                            <div class="post-meta mb-50">
                                <p>By <a href="#">james smith</a></p>
                                <p>3 comments</p>
                            </div>
                            <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. Donec sagittis lacus sit amet augue sodales, vel cursus enim tristique. Maecenas vitae massa ut est consectetur sagittis quis vitae tortor. Sed et massa vel nisi dapibus pretium et et leo.</p>

                            <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Morbi sodales, dolor id ultricies dictum, diam odio tempor purus, at ultrices elit nulla ac nisl. Vestibulum enim sapien, blandit finibus elit vitae, venenatis tempor enim. Ut varius eros at fringilla aliquet. Sed sed sodales quam. Nam fermentum sed turpis sollicitudin lobortis.</p>

                            <p>Proin a nibh dignissim, volutpat mauris vitae, pellentesque nisi. In euismod non ligula at gravida. Nunc blandit eget enim vel mattis. Sed semper, purus ac suscipit scelerisque, eros dui fermentum tortor, vitae facilisis lacus nulla sit amet diam. Nullam eget sagittis mi. Suspendisse vitae volutpat lorem. Cras porta velit id sagittis ultrices. Maecenas efficitur tellus ac aliquam molestie. Morbi vel ipsum gravida, ultricies nunc sed, posuere purus. Donec ipsum lectus, congue ut fermentum vitae, molestie hendrerit erat. Sed lacinia accumsan egestas. Cras ac ipsum a ante placerat pellentesque.</p>
                        </div>
                    </div>

                    <!-- About Author -->
                    <div class="blog-post-author mt-100 d-flex">
                        <div class="author-info">
                            <div class="line"></div>
                            <span class="author-role">Demografi</span>
                            <h4><a href="#" class="author-name">Topografi</a></h4>
                            <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero.</p>
                        </div>
                    </div>

                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">Demografi</a>
                            <h4><a href="#" class="post-headline mb-0">Luas dan Sebaran Penggunaan Lahan</a></h4>
                            <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. Donec sagittis lacus sit amet augue sodales, vel cursus enim tristique. Maecenas vitae massa ut est consectetur sagittis quis vitae tortor. Sed et massa vel nisi dapibus pretium et et leo.</p>

                            <p>Curabitur venenatis efficitur lorem sed tempor. Integer aliquet tempor cursus. Nullam vestibulum convallis risus vel condimentum. Nullam auctor lorem in libero luctus, vel volutpat quam tincidunt. Morbi sodales, dolor id ultricies dictum, diam odio tempor purus, at ultrices elit nulla ac nisl. Vestibulum enim sapien, blandit finibus elit vitae, venenatis tempor enim. Ut varius eros at fringilla aliquet. Sed sed sodales quam. Nam fermentum sed turpis sollicitudin lobortis.</p>

                            <p>Proin a nibh dignissim, volutpat mauris vitae, pellentesque nisi. In euismod non ligula at gravida. Nunc blandit eget enim vel mattis. Sed semper, purus ac suscipit scelerisque, eros dui fermentum tortor, vitae facilisis lacus nulla sit amet diam. Nullam eget sagittis mi. Suspendisse vitae volutpat lorem. Cras porta velit id sagittis ultrices. Maecenas efficitur tellus ac aliquam molestie. Morbi vel ipsum gravida, ultricies nunc sed, posuere purus. Donec ipsum lectus, congue ut fermentum vitae, molestie hendrerit erat. Sed lacinia accumsan egestas. Cras ac ipsum a ante placerat pellentesque.</p>
                        </div>
                    </div>

                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mt-70">
                        <h5 class="title">Peta Desa Ujungaris</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63430.93045050481!2d108.24065039270965!3d-6.466683702337328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ec65b72ea5f41%3A0x5804af8ff0d23674!2sUjungaris%2C%20Kec.%20Widasari%2C%20Kabupaten%20Indramayu%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1578124522514!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Single Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area text-center">Copyright &copy; <script>document.write(new Date().getFullYear());</script> Desa Ujungaris</footer>
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