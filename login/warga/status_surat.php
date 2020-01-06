<?php
include_once "../koneksi.php";

$u=$_SESSION['nama_user'];

$user=mysqli_query($mysqli, "SELECT * FROM penduduk WHERE Nama='$u'");
$a=mysqli_fetch_array($user);

$result = mysqli_query($mysqli, "SELECT * FROM pengajuan_surat WHERE Nik='".$a['Nik']."' ");
$ar=mysqli_fetch_array($result);

$id_ps=@$_GET['id_ps'];

if ($ar['status']=="Diproses" OR $ar['status']=="Ditolak") {
	echo "Pengajuan Surat Saya : ".$ar['status']."&nbsp; | &nbsp;[<a style='color: red;' href='pr_ps.php?id_ps=".$ar['id_ps']."'>Batalkan Pengajuan</a>]";
}
elseif ($ar['status']=="Surat Sudah Diterima Warga") {
	echo "Pengajuan Surat Saya : ".$ar['status']."&nbsp; | &nbsp;[<a style='color: red;' href='pr_ps.php?id_ps=".$ar['id_ps']."'>Surat Sudah Saya Terima.</a>]";
}
elseif ($ar['status']=="Diterima" OR $ar['status']=="Surat Sedang Dibuat" OR $ar['status']=="Surat Sudah Jadi" OR $ar['status']=="Surat Dikirim") {
	echo "Pengajuan Surat Saya : ".$ar['status'];
}
else {
	echo " ";
}

?>