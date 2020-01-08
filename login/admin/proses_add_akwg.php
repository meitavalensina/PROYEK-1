<?php

include_once("../koneksi.php");

if(isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$nik=$_POST['nik'];

 	$result1=mysqli_query($mysqli, "INSERT INTO user_warga(Nik) VALUES ('$nik')");

	header('location:akunwarga.php?pesan=tambah');

}

?>