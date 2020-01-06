<?php

session_start();

include_once "koneksi.php";

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$kodecaptcha = $_POST['kodecaptcha'];

	$q=mysqli_query($mysqli,"SELECT * FROM penduduk WHERE Nik='$username'");
	$data=mysqli_fetch_array($q);
	$cek=mysqli_num_rows($q);

	if ($cek > 0) {
		if ($kodecaptcha != $_SESSION["code"] OR $_SESSION["code"]=='') {
			echo '<script language="javascript">
			alert ("Kode Captcha Salah!");
			window.location="index.php";
			</script>';
			exit();
		}
		else {
			if ($data['level']=="warga") {
				$warga=mysqli_query($mysqli, "SELECT user_warga.id_user, user_warga.Nik, penduduk.no_kk, penduduk.Nama FROM user_warga JOIN penduduk ON penduduk.Nik=user_warga.Nik WHERE user_warga.Nik='$username' AND penduduk.no_kk='$password'");
				$ambilwarga=mysqli_fetch_array($warga);
				if ($username==$ambilwarga['Nik'] AND $password==$ambilwarga['no_kk']) {
					$_SESSION['username'] = $username;
					$_SESSION['nama_user'] = $ambilwarga['Nama'];
					$_SESSION['level'] = "warga";
					// alihkan ke halaman warga
					header("location:../PROYEK-1/warga/index.php");
				}
				else {
					echo "Username/Password Salah!";
				}
			}
			else {
				echo "Gagal masuk sebagai warga";
			}
		}
	}
	else {
		$q=mysqli_query($mysqli,"SELECT * FROM admin WHERE username='$username'");
		$data=mysqli_fetch_array($q);
		$cek=mysqli_num_rows($q);
		if ($cek > 0) {
			if ($kodecaptcha != $_SESSION["code"] OR $_SESSION["code"]=='') {
				echo '<script language="javascript">
				alert ("Kode Captcha Salah!");
				window.location="index.php";
				</script>';
				exit();
			}
			else {
				$admin=mysqli_query($mysqli,"SELECT * FROM penduduk LEFT JOIN admin ON penduduk.Nik=admin.Nik WHERE admin.username='$username' AND admin.password='$password' ");
				$ambiladmin=mysqli_fetch_array($admin);

				if ($username==$ambiladmin['username'] AND $password==$ambiladmin['password']) {
					$_SESSION['username'] = $username;
					$_SESSION['nama_user'] = $ambiladmin['Nama'];
					$_SESSION['level'] = "admin";
					// alihkan ke halaman admin
					header("location:../PROYEK-1/admin/index.php");
				}
				else {
					echo "Gagal masuk sebagai Admin";
				}
			}
		}
		else {
			echo "Data tidak ada!";
		}
	}
}

?>