<?php

include_once "../koneksi.php";

$id_ps=@$_GET['id_ps'];

$result=mysqli_query($mysqli, "DELETE FROM pengajuan_surat WHERE id_ps='$id_ps'");
	
header("Location:ps.php");

exit;

?>