<?php 
// mengaktifkan session php
session_start();

// menghapus semua session
session_destroy();

// mengalihkan halaman ke halaman login

if ($_SESSION['level']=="admin") {
	header("location:index.php?pesan=logout");
}
elseif ($_SESSION['level']=="warga") {
	header("location:../index.php?pesan=logout");
}
else {
	echo '<script language="javascript">
	alert ("Gagal Logout!");
	window.location="index.php";
	</script>';
}
?>