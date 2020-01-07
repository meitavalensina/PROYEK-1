 <?php
session_start();
include_once("../koneksi.php");
if (isset($_POST['nik'])) {
	$id=$_SESSION['id'];
	$nama=$_POST['nama'];
	$nik=$_POST['nik'];
 	$alasan=$_POST['alasan'];
 	date_default_timezone_set('Asia/Jakarta');
 	$tanggal = date("Y-m-d H:i:s");

 	$user=mysqli_query($mysqli, "SELECT * FROM penduduk WHERE Nik='$nik'");
 	$ambil=mysqli_fetch_assoc($user);

 	// $result=mysqli_query($mysqli, "INSERT INTO pengajuan_surat(Nik, tgl_pengajuan_surat, alasan, status, id_pengaju) VALUES ('$nik', '$tanggal', '$alasan', 'Diproses, '$id')");

 	if(count($ambil) > 0) {
 		$result=mysqli_query($mysqli, "INSERT INTO pengajuan_surat(Nik, tgl_pengajuan_surat, alasan, status, id_pengaju) VALUES ('$nik', '$tanggal', '$alasan', 'Diproses', '$id')");
 		print json_encode(array('error' =>false));
 	}
 	else {
 		print json_encode(array('error' =>true));
 	}
}
else {
	print json_encode(array('error' =>true));
}