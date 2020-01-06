<?php

include_once("../koneksi.php");

if(isset($_POST['submit'])) {
	$nama=$_POST['nama'];
	$nip=$_POST['nip'];
	$jk=$_POST['jk'];
	$tgl=$_POST['tgl'];
	$pendidikan=$_POST['pendidikan'];
	$pelatihan=$_POST['pelatihan'];

	$result = mysqli_query($mysqli, "SELECT * FROM penduduk WHERE Nama='$nama'");
	$ambil=mysqli_fetch_assoc($user);

 	$result1=mysqli_query($mysqli, "INSERT INTO perangkat_desa_detail (Nik, Nip, Pelatihan) VALUES ('".$ambil['Nik']."', '$nip', '$pelatihan')");

 	$query=mysqli_query($mysqli, "SELECT perangkat_desa_detail.id_perdes, penduduk.Nama FROM perangkat_desa_detail JOIN penduduk ON penduduk.Nik=perangkat_desa_detail.Nik WHERE Nama='$nama'");

 	$data=mysqli_fetch_assoc($query);
 	$a=$data['id_perdes'];

	$result2=mysqli_query($mysqli, "INSERT INTO perangkat_desa (id_perdes, kategori_perdes) VALUES ('$a', $kategori_perdes')");

	header('location:perangkatdesa.php');

}

?>