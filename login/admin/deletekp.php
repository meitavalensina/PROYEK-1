<?php

include_once "../koneksi.php";

$id=@$_GET['id'];

$result=mysqli_query($mysqli, "DELETE FROM penduduk WHERE Nik='$'");
	
header("Location:kependudukan.php");
	
exit;

?>