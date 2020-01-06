 <?php

include_once("../koneksi.php");

$id=@$_GET['id'];
$status=@$_GET['status'];

if ($status=='psa') {
	$result=mysqli_query($mysqli, "UPDATE pengajuan_surat SET status='Diterima' WHERE id_ps='$id'");
	if ($result) {
		echo "<script>window.alert('Data Pengajuan Surat Status Pembuatan Surat Diterima');window.location='dpsurat.php'</script>";
	} else {
		echo "<script>window.alert('Gagal Update!');window.location='dpsurat.php'</script>";
	}
} elseif ($status=='psn') {
	$result=mysqli_query($mysqli, "UPDATE pengajuan_surat SET status='Ditolak' WHERE id_ps='$id'");
	if ($result) {
		echo "<script>window.alert('Data Pengajuan Surat Status Pembuatan Surat Ditolak');window.location='dpsurat.php'</script>";
	} else {
		echo "<script>window.alert('Gagal Update!');window.location='dpsurat.php'</script>";
	}
} elseif ($status=='sb') {
	$result=mysqli_query($mysqli, "UPDATE pengajuan_surat SET status='Surat Sedang Dibuat' WHERE id_ps='$id'");
	if ($result) {
		echo "<script>window.alert('Data Pengajuan Surat Status Surat Dibuat');window.location='dpsurat.php'</script>";
	} else {
		echo "<script>window.alert('Gagal Update!');window.location='dpsurat.php'</script>";
	}
} elseif ($status=='sj') {
	$result=mysqli_query($mysqli, "UPDATE pengajuan_surat SET status='Surat Sudah Jadi' WHERE id_ps='$id'");
	if ($result) {
		echo "<script>window.alert('Data Pengajuan Surat Status Surat Jadi');window.location='dpsurat.php'</script>";
	} else {
		echo "<script>window.alert('Gagal Update!');window.location='dpsurat.php'</script>";
	}
} elseif ($status=='sk') {
	$result=mysqli_query($mysqli, "UPDATE pengajuan_surat SET status='Surat Dikirim' WHERE id_ps='$id'");
	if ($result) {
		echo "<script>window.alert('Data Pengajuan Surat Status Surat Dikirim');window.location='dpsurat.php'</script>";
	} else {
		echo "<script>window.alert('Gagal Update!');window.location='dpsurat.php'</script>";
	}
} elseif ($status=='st') {
	$result=mysqli_query($mysqli, "UPDATE pengajuan_surat SET status='Surat Sudah Diterima Warga' WHERE id_ps='$id'");
	if ($result) {
		echo "<script>window.alert('Data Pengajuan Surat Status Surat Dikirim');window.location='dpsurat.php'</script>";
	} else {
		echo "<script>window.alert('Gagal Update!');window.location='dpsurat.php'</script>";
	}
} else {
	echo "<script>window.alert('Error!');window.location='dpsurat.php'</script>";
}

header('location:dpsurat.php');

?>