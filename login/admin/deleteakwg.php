<?php

include_once "../koneksi.php";

$id=$_GET['id'];

$result=mysqli_query($mysqli, "DELETE FROM user_warga WHERE id_user='$id'");
	
header("Location:akunwarga.php?pesan=delete");
	
exit;

?>