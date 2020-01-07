<?php
$No=1;
while($ambil = mysqli_fetch_array($query)) {
  echo "<tr>";
  echo "<td>".$No."</td>";
  echo "<td>".$ambil['Nik']."</td>";
  echo "<td>".$ambil['tgl_pengajuan_surat']."</td>";
  echo "<td>".$ambil['alasan']."</td>";
  echo "<td>".$ambil['status']."</td></tr>";
  $No++;
}
?>