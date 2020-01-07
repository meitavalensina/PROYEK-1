<?php

include_once("../koneksi.php");

session_start();

if (isset($_SESSION['username'])){
  if (isset($_POST['Cari'])) {
    $Cari=$_POST['Cari'];
    $result = mysqli_query($mysqli, "SELECT * FROM penduduk WHERE Nik like '%".$Cari."%' OR Nama like '%".$Cari."%' ORDER BY Nama ASC");
  }
  else{
    $result = mysqli_query($mysqli, "SELECT * FROM penduduk ORDER BY Nama ASC");
  }

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
              <li class="breadcrumb-item active">Kependudukan</li>
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
        <div class="col-12">
          <div class="card">
            <div class="card-title">
              <form method="post">
                <div class="input-group p-3">
                  <input class="form-control" type="text" placeholder="Cari penduduk..." name="Cari" required 
                    <?php 
                    if(isset($_POST['Cari'])){
                        echo "value='".$_POST['Cari']."'";
                    }
                    ?>>
                  <div class="input-group-prepend">
                    <input style="background-color: #52748D !important; color: white" class="btn btn-sm" type="submit" value="Cari">
                  </div>
              </div>
            </form>
            </div>
            <div class="card-header border-top">
              <div class="row">
                <div class="col-6">
                  <h3 class="card-title">Kependudukan</h3>
                </div>
                <div class="col-6 p-0 text-right">
                  <a href="add_penduduk.php" style="background-color: #52748D !important; color: white" class="btn btn-sm">Tambah Data &nbsp;<i class="fa fa-plus-square" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body overflow-auto p-0" method="post" action="kependudukan.php">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr style="text-align: center;">
                  <th style="padding-bottom: 50px;">No</th>
                  <th style="padding-bottom: 35px;">Nama Lengkap</th>
                  <th style="padding-bottom: 50px;">NIK</th>
                  <th style="padding-bottom: 50px;">No. KK</th>
                  <th style="padding-bottom: 35px;">Jenis Kelamin</th>
                  <th style="padding-bottom: 35px;">Tanggal Lahir</th>
                  <th style="padding-bottom: 50px;">Agama</th>
                  <th style="padding-bottom: 50px;">Pendidikan</th>
                  <th style="padding-bottom: 50px;">Pekerjaan</th>
                  <th style="padding-bottom: 35px;">Status Perkawinan</th>
                  <th style="padding-bottom: 25px;">Status Hubungan Keluarga</th>
                  <th style="padding-bottom: 50px;">Kewarganegaraan</th>
                  <th style="padding-bottom: 35px;">Nama Ayah</th>
                  <th style="padding-bottom: 35px;">Nama Ibu</th>
                  <th style="padding-bottom: 50px;">Alamat</th>
                  <th style="padding-bottom: 50px;">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $No=1;
                while($user_data = mysqli_fetch_array($result)) {         
                    echo "<tr>";
                    echo "<td>".$No."</td>";
                    echo "<td>".$user_data['Nama']."</td>";
                    echo "<td>".$user_data['Nik']."</td>";
                    echo "<td>".$user_data['no_kk']."</td>";
                    echo "<td>".$user_data['Jenis_kelamin']."</td>";
                    echo "<td>".$user_data['Tanggal_lahir']."</td>"; 
                    echo "<td>".$user_data['Agama']."</td>"; 
                    echo "<td>".$user_data['Pendidikan']."</td>"; 
                    echo "<td>".$user_data['Pekerjaan']."</td>";  
                    echo "<td>".$user_data['Status_perkawinan']."</td>";  
                    echo "<td>".$user_data['Status_hub_kel']."</td>";  
                    echo "<td>".$user_data['Kewarganegaraan']."</td>";  
                    echo "<td>".$user_data['Nama_Ayah']."</td>";  
                    echo "<td>".$user_data['Nama_Ibu']."</td>";
                    echo "<td>".$user_data['Alamat']."</td>";
                    echo "<td><a href='editkp.php?id=$user_data[Nik]' class='btn btn-success btn-sm'><i class='fa fa-edit' aria-hidden='true'></i></a>
                              <a href='deletekp.php?id=$user_data[Nik]' class='btn btn-danger btn-sm'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>";
                    $No++;
                }
                ?>
                </tbody>
              </table><br>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
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
    }else{
        echo "
            <script>
                alert('Anda harus login!');
            </script>
        ";
        header('Location: ../index.php');
    }
?>