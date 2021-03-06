<?php
    session_start();
    if( isset($_SESSION['username']) && $_SESSION['level'] == 'warga'){
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
                            <p>Dengan batas wilayah sbb:</p><br>
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
                                include_once("../koneksi.php");

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
                            <p>Aspek hidrologi wilayah desa sangat diperlukan dalam pengendalian dan pengaturan tata air wilayah desa, berdasarkan hidrologinya, aliran-aliran sungai di wilayah Desa Ujungaris.</p>

                            <p>Adapun sumber air yang menghidupi Desa Ujungaris diantaranya :<br>
                            1. Sungai Cimanuk<br>
                            2. Sungai Cipelang<br>
                            3. Sungai Cibogor<br>
                            4. Sungai Cibuaya</p>

                            <p>Secara umum akhir-akhir ini terjadi penaikan curah hujan dan jumlah hujan dibanding selama tahun-tahun sebelumnya. Hal ini dapat menjadi sangat berpengaruh kepada sumber air yang menjadi sumber kehidupan masyarakat penggarap sawah. Ditunjang juga oleh adanya pembelokan aliran yang tidak terkendalioleh penggarap sawah yang berada di daerah hulu, akibat kurangnya pengawasan dari pihak terkait.</p>
                        </div>
                    </div>

                    <!-- About Author -->
                    <div class="blog-post-author mt-100 d-flex">
                        <div class="author-info">
                            <div class="line"></div>
                            <span class="author-role">Demografi</span>
                            <h4><a href="#" class="author-name">Topografi</a></h4>
                            <p>Desa Ujungaris merupakan desa yang berada di sebelah utara pulau Jawa, dengan ketinggian 9.75 Dpl (Diatas Permukaan Laut). Di sebelah Timur dibatasi oleh sungai Cimanuk, di sebelah Utara berbatasan dengan desa Ujungjaya Kecamatan Widasari, di sebelah Selatan berbatasan dengan desa Kongsijaya Kecamatan Widasari dan di sebelah Barat berbatasan dengan desa Bunder Kecamatan Widasari.</p>
                        </div>
                    </div>

                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            <a href="#" class="post-tag">Demografi</a>
                            <h4><a href="#" class="post-headline mb-0">Luas dan Sebaran Penggunaan Lahan</a></h4>
                            <p>Pada umumnya lahan yang berada atau terdapat di Desa Ujungaris digunakan secara produktif, karena merupakan lahan yang subur terutama untuk lahan pertanian, jadi hanya sebagian kecil saja yang tidak dimanfaatkan oleh warga, hal ini pula menunjukkan bahwa kawasan desa Ujungaris adalah daerah yang memiliki sumber daya alam yang memadai dan siap untuk diolah. Luas lahan wilayah menurut penggunaan sebagaimana terlihat dalam tabel berikut ini : ISINYA TABEL</p>
                        </div>
                    </div>

                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mt-70">
                        <div class="card-body overflow-auto p-0">
                              <table id="example1" class="table table-bordered table-striped" style="text-align: center;">
                                <thead>
                                <tr>
                                  <th colspan="3"><b>Sawah (Ha)</b></th>
                                  <th colspan="5"><b>Darat (Ha)</b></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1/2 Teknis</td>
                                    <td>Tadah Hujan</td>
                                    <td>Pasang Surut</td>
                                    <td>Pemukiman</td>
                                    <td>Pertanian</td>
                                    <td>Perkantoran</td>
                                    <td>Perkebunan</td>
                                    <td>Lainnya</td>
                                </tr>
                                <tr>
                                    <td>136.6</td>
                                    <td>29</td>
                                    <td>-</td>
                                    <td>29,609</td>
                                    <td>474,00</td>
                                    <td>0,203</td>
                                    <td>40</td>
                                    <td>46.5</td>
                                </tr>
                                </tbody>
                              </table><br>
                            </div>
                            <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="post-sidebar-area">
                        <br><br><br><br><br><br><br><br><br>
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

<?php
    }
    elseif(isset($_SESSION['username']) && $_SESSION['level'] == 'admin'){
        header('Location: ../admin/index.php');
    }
    else{
        echo "
            <script>
                alert('Anda harus login!');
            </script>
        ";
        header('Location: ../index.php');
    }
?>