<?php

include_once("../koneksi.php");

session_start();
if( isset($_SESSION['username']) && $_SESSION['level'] == 'admin'){

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi Desa Ujungaris</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <div class="nav-link" style="color: black !important">Sistem Informasi Desa Ujungaris</div>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <div class="nav-link">
          <?php 

          echo $_SESSION['nama_user']."(admin)";
          ?>
        </div>
      </li>
      <li class="nav-item">
        <div class="nav-link">
          <a href="../logout.php"><i class="fas fa-sign-out-alt"></i></a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #52748D !important">
    <!-- Brand Logo -->
    <a class="brand-link">
      <center><span class="brand-text font-weight-light" style="font-family: Lemon; color: white; font-size: 30px">Ujungaris</span></center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p style="color: white !important">Dashboard</p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="kependudukan.php" class="nav-link active" style="background-color: #6D9BBC">
              <i class="nav-icon fas fa-users"></i>
              <p style="color: white !important">Kependudukan</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="akunwarga.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p style="color: white !important">Akun Warga</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="kepaladesa.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p style="color: white !important">Kepala Desa</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="strukorgan.php" class="nav-link">
              <i class="nav-icon fas fa-object-group"></i>
              <p style="color: white !important">Struktur Organisasi</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="sarpras.php" class="nav-link">
              <i class="nav-icon fas fa-university"></i>
              <p style="color: white !important">Sarana & Prasarana</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="dpsurat.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p style="color: white !important">Data Pengajuan Surat</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="pewarga.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p style="color: white !important">Data Pengaduan Warga</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item"><a href="kependudukan.php">Kependudukan</a></li>
              <li class="breadcrumb-item active">Tambah Penduduk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card">
              <div class="card-header"  style="background-color: #52748D !important">
                <h3 class="card-title" style="color: white">Tambah Penduduk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="post" action="proses_add_kp.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="IsiNama">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="IsiNama" placeholder="Masukkan Nama" required>
                  </div>
                  <div class="form-group">
                    <label for="IsiNIK">NIK</label>
                    <input type="text" name="nik" class="form-control" id="IsiNIK" placeholder="Masukkan NIK" required>
                  </div>
                  <div class="form-group">
                    <label for="IsiNKK">No. KK</label>
                    <input type="text" name="nokk" class="form-control" id="IsiNKK" placeholder="Masukkan No. KK" required>
                  </div>
                  <div class="form-group">
                    <label for="IsiJK">Jenis Kelamin</label>
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="jk" id="IsiJK" value="Laki-Laki" checked>&nbsp; Laki-Laki
                        </div>
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="jk" id="IsiJK" value="Perempuan">&nbsp; Perempuan
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="IsiTgl">Tanggal Lahir</label>
                    <input type="date" name="tgl" class="form-control" id="IsiTgl" required>
                  </div>
                  <div class="form-group">
                    <label for="IsiAgama">Agama</label>
                    <select class="form-control" name="agama" id="IsiAgama">
                      <option selected>Islam</option>
                      <option>Kristen</option>
                      <option>Hindu</option>
                      <option>Budha</option>
                      <option>Konghuchu</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="IsiPendidikan">Pendidikan</label>
                    <input type="text" name="pendidikan" class="form-control" id="IsiPendidikan" placeholder="Masukkan Pendidikan" required>
                  </div>
                  <div class="form-group">
                    <label for="IsiPekerjaan">Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" id="IsiPekerjaan" placeholder="Masukkan Pekerjaan" required>
                  </div>
                  <div class="form-group">
                    <label for="IsiSP">Status Perkawinan</label>
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="sp" id="IsiSP" value="Kawin" checked>&nbsp; Kawin
                        </div>
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="sp" id="IsiSP" value="Belum Kawin">&nbsp; Belum Kawin
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="IsiSHK">Status Hubungan Keluarga</label>
                    <input type="text" name="shk" class="form-control" id="IsiSHK" placeholder="Masukkan Status Hubungan Keluarga" required>
                  </div>
                  <div class="form-group">
                    <label for="IsiKW">Kewarganegaraan</label>
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="kw" id="IsiKW" value="WNI" checked>&nbsp; WNI
                        </div>
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="kw" id="IsiKW" value="WNA">&nbsp; WNA
                        </div>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="Isinayah">Nama Ayah</label>
                    <input type="text" name="nayah" class="form-control" id="Isinayah" placeholder="Masukkan Nama Ayah" required>
                  </div>
                  <div class="form-group">
                    <label for="Isinibu">Nama Ibu</label>
                    <input type="text" name="nibu" class="form-control" id="Isinibu" placeholder="Masukkan Nama Ibu" required>
                  </div>
                  <div class="form-group">
                    <label for="IsiAlamat">Alamat</label>
                    <textarea type="text" name="alamat" class="form-control" id="IsiAlamat" placeholder="Masukkan Alamat" required></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button style="background-color: #52748D !important; color: white" type="submit" class="btn" name="submit">Tambah</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script> Desa Ujungaris</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>

<?php
    }
    elseif(isset($_SESSION['username']) && $_SESSION['level'] == 'warga'){
        header('Location: ../warga/index.php');
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