<?php

include_once "../koneksi.php";

$id_strukor=$_GET['id_strukor'];

$result1=mysqli_query($mysqli, "DELETE FROM struktur_organisasi WHERE id_strukor='$id_strukor'");

$result2=mysqli_query($mysqli, "DELETE FROM struktur_organisasi_detail WHERE id_strukor='$id_strukor'");
	
header("Location:strukorgan.php?pesan=delete");
	
exit;

?>