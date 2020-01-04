<?php

include_once "../koneksi.php";

$id_penduduk=$_GET['id_penduduk'];

$result=mysqli_query($mysqli, "DELETE FROM penduduk WHERE id_penduduk='$id_penduduk'");
	
header("Location:kependudukan.php");
	
exit;

?>