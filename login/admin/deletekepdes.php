<?php

include_once "../koneksi.php";

$id_kepdes=$_GET['id_kepdes'];

$result=mysqli_query($mysqli, "DELETE FROM kepala_desa WHERE id_kepdes='$id_kepdes'");
	
header("Location:kepaladesa.php");
	
exit;

?>