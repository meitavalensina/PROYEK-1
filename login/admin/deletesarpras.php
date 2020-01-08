<?php

include_once "../koneksi.php";

$id_sarpras=$_GET['id_sarpras'];

$result=mysqli_query($mysqli, "DELETE FROM sarana_prasarana WHERE id_sarpras='$id_sarpras'");
	
header("Location:sarpras.php?pesan=delete");
	
exit;

?>