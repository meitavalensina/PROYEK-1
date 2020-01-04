<?php 

include_once "koneksi.php";

if (isset($_POST['login'])) {
	// mengaktifkan session pada php
	session_start();

	// menghubungkan php dengan koneksi database
	

	// menangkap data yang dikirim dari form login
	$username = $_POST['username'];
	$password = $_POST['password'];
	$kodecaptcha = $_POST['kodecaptcha'];


	// menyeleksi data user dengan username dan password yang sesuai
	$logina = mysqli_query($mysqli,"SELECT * FROM admin where username='$username' and password='$password'");
	// menghitung jumlah data yang ditemukan
	$ceka = mysqli_num_rows($logina);

	
		if($ceka > 0){

			$data = mysqli_fetch_array($logina);

			if ($kodecaptcha != $_SESSION["code"] OR $_SESSION["code"]=='') {
				echo '<script language="javascript">
				alert ("Kode Captcha Salah!");
				window.location="index.php";
				</script>';
				exit();
			}

			else {
				if($data){
					// buat session login dan username
					$_SESSION['username'] = $username;
					$_SESSION['nama_user'] = $data['Nama'];
					//$_SESSION['level'] = "admin";
					// alihkan ke halaman admin
					header("location:../PROYEK-1/admin/index.php");

				// cek jika user login sebagai warga
				}
				else{
					// alihkan ke halaman login kembali
					echo '<script language="javascript">
					alert ("Username / Password Salah!");
					window.location="index.php?pesan=gagal";
					</script>';
					exit();
				}
			}
			
		}
		else {
			echo '<script language="javascript">
			alert ("Username / Password Salah!");
			window.location="index.php?pesan=gagal";
			</script>';
			exit();
		}

	$loginw = mysqli_query($mysqli,"SELECT * FROM penduduk where Nik='$username' and no_kk='$password'");
	// menghitung jumlah data yang ditemukan
	$cekw = mysqli_num_rows($loginw);

	
		if($cekw > 0){

			$dataw = mysqli_fetch_array($loginw);

			if ($kodecaptcha != $_SESSION["code"] OR $_SESSION["code"]=='') {
				echo '<script language="javascript">
				alert ("Kode Captcha Salah!");
				window.location="index.php";
				</script>';
				exit();
			}

			else {
				if($dataw['level']=="warga"){
					// buat session login dan username
					$_SESSION['username'] = $username;
					$_SESSION['nama_user'] = $dataw['Nama'];
					$_SESSION['level'] = "warga";
					// alihkan ke halaman warga
					header("location:../PROYEK-1/warga/index.php");

				// cek jika user login sebagai warga
				}
				else{
					// alihkan ke halaman login kembali
					echo '<script language="javascript">
					alert ("Username / Password Salah!");
					window.location="index.php?pesan=gagal";
					</script>';
					exit();
				}
			}
			
		}
		else {
			echo '<script language="javascript">
			alert ("Username / Password Salah!");
			window.location="index.php?pesan=gagal";
			</script>';
			exit();
		}
	}
?>