<?php
include_once "../koneksi.php";

$nik=$_SESSION['Nik'];

$result = mysqli_query($mysqli, "SELECT * FROM pengaduan_warga WHERE Nik='$nik'");
$ambil=mysqli_fetch_array($result);

if ($ambil['status']=="Belum Dibaca") {
	echo "Pengaduan Anda <b>".$ambil['status']."</b>";
}
elseif ($ambil['status']=="Sudah Dibaca") {
	echo "Pengaduan Anda <b>".$ambil['status']."</b>&nbsp; | &nbsp;[<a style='color: red;' onclick='Klik()' href='pr_pw.php?id_pw=".$ambil['id_pw']."'>Klik Disini</a>]";

	echo '<script language="javascript">
	function Klik(){
		alert("Terimakasih anda sudah melakukan pengaduan");
	}
	</script>';
}
else {
	echo "";
}

?>