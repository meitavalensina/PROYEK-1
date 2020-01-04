 <?php

include_once("../koneksi.php");

if (isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$nik=$_POST['nik'];
 	$alasan=$_POST['alasan'];
 	date_default_timezone_set('Asia/Jakarta');
 	$tanggal = date("Y-m-d H:i:s");

 	$user=mysqli_query($mysqli, "SELECT * FROM penduduk WHERE Nama='$nama'");
 	$ambil=mysqli_fetch_assoc($user);

 	$result=mysqli_query($mysqli, "INSERT INTO pengajuan_surat(Nik, tgl_pengajuan_surat, alasan, status) VALUES ('".$ambil['Nik']."', '$tanggal', '$alasan', 'Proses')");

 	header('location:pengajuansurat.php');
}

?>