<?php

session_start();

include_once "koneksi.php";

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$q=mysqli_query($mysqli,"SELECT * FROM penduduk WHERE Nik='$username'");
	$data=mysqli_fetch_array($q);
	$cek=mysqli_num_rows($q);

	if ($cek > 0) {
		if ($data['level']=="warga") {
			$warga=mysqli_query($mysqli, "SELECT user_warga.id_user, user_warga.Nik, penduduk.id_penduduk, penduduk.no_kk, penduduk.Nama FROM user_warga JOIN penduduk ON penduduk.Nik=user_warga.Nik WHERE user_warga.Nik='$username' AND penduduk.no_kk='$password'");
			$ambilwarga=mysqli_fetch_array($warga);
			if ($username==$ambilwarga['Nik'] AND $password==$ambilwarga['no_kk']) {
				$_SESSION['username'] = $username;
				$_SESSION['id'] = $ambilwarga['id_user'];
				$_SESSION['nama_user'] = $ambilwarga['Nama'];
				$_SESSION['Nik'] = $ambilwarga['Nik'];
				$_SESSION['level'] = "warga";
				// alihkan ke halaman warga
				header("location:warga/index.php");
			}
			else {
				echo '<script language="javascript">
				alert ("Username/Password Salah!");
				window.location="index.php";
				</script>';
				exit();
			}
		}
		else {
			echo '<script language="javascript">
			alert ("Gagal Masuk Sebagai Warga!");
			window.location="index.php";
			</script>';
			exit();
		}
	}
	else {
		$q=mysqli_query($mysqli,"SELECT * FROM admin WHERE username='$username'");
		$data=mysqli_fetch_array($q);
		$cek=mysqli_num_rows($q);
		if ($cek > 0) {
			$admin=mysqli_query($mysqli,"SELECT * FROM penduduk LEFT JOIN admin ON penduduk.Nik=admin.Nik WHERE admin.username='$username' AND admin.password='$password' ");
			$ambiladmin=mysqli_fetch_array($admin);

			if ($username==$ambiladmin['username'] AND $password==$ambiladmin['password']) {
				$_SESSION['username'] = $username;
				$_SESSION['id'] = $ambiladmin['id_penduduk'];
				$_SESSION['nama_user'] = $ambiladmin['Nama'];
				$_SESSION['Nik'] = $ambiladmin['Nik'];
				$_SESSION['level'] = "admin";
				// alihkan ke halaman admin
				header("location:admin/index.php");
			}
			else {
				echo '<script language="javascript">
				alert ("Username/Password Salah!");
				window.location="index.php";
				</script>';
				exit();
			}
		}
		else {
			echo '<script language="javascript">
			alert ("Gagal Masuk Admin!");
			window.location="index.php";
			</script>';
			exit();
		}
	}
}

?>