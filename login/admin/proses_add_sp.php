<?php

include_once("../koneksi.php");

if(isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$kategori=$_POST['kategori'];
	$jumlah=$_POST[jumlah];

	$query=mysqli_query($mysqli, "SELECT * FROM kategori_sarpras WHERE nama_kategori='$kategori'");
 	$ambil=mysqli_fetch_assoc($query);
 	$data=$ambil['id_katsp'];

 	$result=mysqli_query($mysqli, "INSERT INTO sarana_prasarana(Nama, id_katsp, Jumlah) VALUES ('$nama', '$data', $jumlah)");

	header('location:sarpras.php?pesan=tambah');
	
}

?>