 <?php

include_once("../koneksi.php");

if (isset($_POST['submit'])) {
	$namap=$_POST['namap'];
 	$isi=$_POST['isi'];
 	date_default_timezone_set('Asia/Jakarta');
 	$tanggal = date("Y-m-d H:i:s");

 	$user=mysqli_query($mysqli, "SELECT * FROM penduduk WHERE Nama='$namap'");
 	$ambil=mysqli_fetch_assoc($user);

 	$result=mysqli_query($mysqli, "INSERT INTO pengaduan_warga(Nik, Pesan, tgl_pengaduan_warga) VALUES ('".$ambil['Nik']."', '$isi', '$tanggal')");

 	header('location:pengaduanwarga.php');
}

?>