<?php
$No=1;
while($user_data = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>".$No."</td>";
  echo "<td>".$user_data['Nama']."</td>";
  echo "<td>".$user_data['Nik']."</td>";
  echo "<td>".$user_data['Tanggal_lahir']."</td>";
  echo "<td>".$user_data['Jenis_kelamin']."</td>";
  echo "<td>".$user_data['tgl_pengajuan_surat']."</td>";
  echo "<td>".$user_data['Alamat']."</td>";
  echo "<td>".$user_data['alasan']."</td>";
  echo "<td>".$user_data['status']."</td>"; 
  echo "<td><a href='proses_dpsurat.php?status=psa&id=".$user_data['id_ps']."' class='btn btn-success btn-sm'><i class='fa fa-check-square' aria-hidden='true'></i></a>
            <a href='proses_dpsurat.php?status=psn&id=".$user_data['id_ps']."' class='btn btn-danger btn-sm'><i class='fa fa-times' aria-hidden='true'></i></a>
            <a href='proses_dpsurat.php?status=sb&id=".$user_data['id_ps']."' class='btn btn-info btn-sm'><i class='fa fa-envelope' aria-hidden='true'></i></a>
            <a href='proses_dpsurat.php?status=sj&id=".$user_data['id_ps']."' class='btn btn-info btn-sm'><i class='fa fa-envelope-open' aria-hidden='true'></i></a>
            <a href='proses_dpsurat.php?status=sk&id=".$user_data['id_ps']."' class='btn btn-info btn-sm'><i class='fa fa-paper-plane' aria-hidden='true'></i></a>
            <a href='proses_dpsurat.php?status=st&id=".$user_data['id_ps']."' class='btn btn-success btn-sm'><i class='fa fa-handshake-o' aria-hidden='true'></i></a></td></tr>";
            $No++;
          }
          ?>