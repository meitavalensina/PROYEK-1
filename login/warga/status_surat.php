<?php
include_once "../koneksi.php";

$id=$_SESSION['id'];

$result = mysqli_query($mysqli, "SELECT * FROM pengajuan_surat WHERE id_pengaju='$id'");
$cek=mysqli_num_rows($result);
if($cek > 0){
	while ($ar=mysqli_fetch_array($result)) {
		if ($ar['status']=="Diproses" || $ar['status']=="Ditolak") {
			echo "Pengajuan Surat Saya : ".$ar['status']."&nbsp; | &nbsp;[<a style='color: red;' href='pr_ps.php?id_ps=".$ar['id_ps']."'>Batalkan Pengajuan</a>]";
		}
		elseif ($ar['status']=="Surat Sudah Diterima Warga") {
			echo "Pengajuan Surat Saya : ".$ar['status']."&nbsp; | &nbsp;[<a style='color: red;' href='pr_ps.php?id_ps=".$ar['id_ps']."'>Surat Sudah Saya Terima.</a>]";
		}
		elseif ($ar['status']=="Diterima" || $ar['status']=="Surat Sedang Dibuat" || $ar['status']=="Surat Sudah Jadi" || $ar['status']=="Surat Dikirim") {
			echo "Pengajuan Surat Saya : ".$ar['status'];
		}
		else {
			echo " ";
		}
		echo '<br>';
	}
}

?>