<?php

include_once("../koneksi.php");

if(isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$jabatan=$_POST['jabatan'];
	$masaj=$_POST['masaj'];

	$user=mysqli_query($mysqli, "SELECT * FROM penduduk WHERE Nama='$nama'");
 	$ambil=mysqli_fetch_assoc($user);

 	$result1=mysqli_query($mysqli, "INSERT INTO struktur_organisasi_detail(Nik, masa_jabatan) VALUES ('".$ambil['Nik']."', '$masaj')");

 	$query=mysqli_query($mysqli, "SELECT struktur_organisasi_detail.id_strukor, penduduk.Nama FROM struktur_organisasi_detail JOIN penduduk ON penduduk.Nik=struktur_organisasi_detail.Nik WHERE Nama='$nama'");

 	$data=mysqli_fetch_assoc($query);
 	$a=$data['id_strukor'];

	$result2=mysqli_query($mysqli, "INSERT INTO struktur_organisasi (id_strukor, Jabatan) VALUES ('$a', '$jabatan')");

	header('location:strukorgan.php?pesan=tambah');

}

?>