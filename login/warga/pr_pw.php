<?php

include_once "../koneksi.php";

$id_pw=@$_GET['id_pw'];

$result=mysqli_query($mysqli, "DELETE FROM pengaduan_warga WHERE id_pw='$id_pw'");
	
header("Location:pw.php");

exit;
 
?>