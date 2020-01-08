<?php

include_once("../koneksi.php");

if(isset($_POST['submit'])) {
	$nokk=$_POST['nokk'];
	$nama=$_POST['nama'];
	$nik=$_POST['nik'];
	$jk=$_POST['jk'];
	$tgl=$_POST['tgl'];
	$agama=$_POST['agama'];
	$pendidikan=$_POST['pendidikan'];
	$pekerjaan=$_POST['pekerjaan'];
	$sp=$_POST['sp'];
	$shk=$_POST['shk'];
	$kw=$_POST['kw'];
	$nayah=$_POST['nayah'];
	$nibu=$_POST['nibu'];
	$alamat=$_POST['alamat'];
	$level="warga";

	$result = mysqli_query($mysqli, "INSERT INTO penduduk(Nama, Nik, no_kk, Jenis_kelamin, Tanggal_lahir, Agama, Pendidikan, Pekerjaan, Status_perkawinan, Status_hub_kel, Kewarganegaraan, Nama_Ayah, Nama_Ibu, Alamat, level) VALUES ('$nama','$nik','$nokk','$jk','$tgl', '$agama', '$pendidikan','$pekerjaan', '$sp', '$shk', '$kw', '$nayah', '$nibu', '$alamat', '$level')");

	header('location:kependudukan.php?pesan=tambah');

}

?>