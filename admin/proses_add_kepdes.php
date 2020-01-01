<?php

include_once("../koneksi.php");

if(isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$nip=$_POST['nip'];
	$pelatihan=$_POST['pelatihan'];

	$user=mysqli_query($mysqli, "SELECT * FROM penduduk WHERE Nama='$nama'");
 	$ambil=mysqli_fetch_assoc($user);

 	$result1=mysqli_query($mysqli, "INSERT INTO kepala_desa(Nik, Nip, Pelatihan) VALUES ('".$ambil['Nik']."', '$nip', '$pelatihan')");

	header('location:kepaladesa.php');

}

?>