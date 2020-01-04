 <?php

include_once("../koneksi.php");

$id=@$_GET['id'];

$result=mysqli_query($mysqli, "UPDATE pengaduan_warga SET status='Sudah Dibaca' WHERE id_pw='$id'");

if ($result) {
	echo "<script>window.alert('Data Pengajuan Surat Status Pembuatan Surat Diterima');window.location='dpsurat.php'</script>";
} 
else {
	echo "<script>window.alert('Gagal Update!');window.location='dpsurat.php'</script>";
}

header('location:pewarga.php');

?>