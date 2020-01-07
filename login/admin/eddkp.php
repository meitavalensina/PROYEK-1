<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card">
              <div class="card-header" style="background-color: #52748D !important">
                <h3 class="card-title" style="color: white">Edit Penduduk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm" method="post" action="editkp.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="IsiNKK">No. KK</label>
                    <input type="text" name="nokk" class="form-control" id="IsiNKK" value="<?php echo $kp['no_kk'];?>" required>
                  </div>
                  <div class="form-group">

                    <label for="IsiNama">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="IsiNama" value="<?php echo $kp['Nama'];?>" required>
                  </div>
                  <div class="form-group">
                    <label for="IsiNIK">NIK</label>
                    <input type="text" name="Nik" class="form-control" id="IsiNIK" value="<?php echo $kp['Nik'];?>" required>
                  </div>
                  <div class="form-group">
                    <label for="IsiJK">Jenis Kelamin</label>
                    <?php
                    if ($kp['Jenis_kelamin']=="Laki-Laki") { ?>
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="jk" id="IsiJK" value="Laki-Laki" checked>&nbsp; Laki-Laki
                        </div>
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="jk" id="IsiJK" value="Perempuan">&nbsp; Perempuan
                        </div>
                      </div> <?php 
                    } else if ($kp['Jenis_kelamin']=="Perempuan") { ?>
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="jk" id="IsiJK" value="Laki-Laki">&nbsp; Laki-Laki
                        </div>
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="jk" id="IsiJK" value="Perempuan" checked>&nbsp; Perempuan
                        </div> <?php
                    } else{ ?>
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="jk" id="IsiJK" value="Laki-Laki">&nbsp; Laki-Laki
                        </div>
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="jk" id="IsiJK" value="Perempuan">&nbsp; Perempuan
                        </div> <?php } ?>
                  </div>
                  <div class="form-group">
                    <label for="IsiTgl">Tanggal Lahir</label>
                    <input type="date" name="tgl" class="form-control" id="IsiTgl" value="<?php echo $kp['Tanggal_lahir'];?>" required>
                  </div>
                  <div class="form-group">
                    <label for="IsiAgama">Agama</label>
                    <?php
                    if ($kp['Agama']=="Islam") { ?>
                      <select class="form-control" name="agama" id="IsiAgama">
                        <option selected>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Konghuchu</option>
                      </select> <?php
                    } 
                    elseif ($kp['Agama']=="Kristen") { ?>
                      <select class="form-control" name="agama" id="IsiAgama">
                        <option>Islam</option>
                        <option selected>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Konghuchu</option>
                      </select> <?php
                    }
                    elseif ($kp['Agama']=="Hindu") { ?>
                      <select class="form-control" name="agama" id="IsiAgama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option selected>Hindu</option>
                        <option>Budha</option>
                        <option>Konghuchu</option>
                      </select> <?php
                    }
                    elseif ($kp['Agama']=="Budha") { ?>
                      <select class="form-control" name="agama" id="IsiAgama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option selected>Budha</option>
                        <option>Konghuchu</option>
                      </select> <?php
                    }
                    elseif ($kp['Agama']=="Konghuchu") { ?>
                      <select class="form-control" name="agama" id="IsiAgama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option selected>Konghuchu</option>
                      </select> <?php
                    }
                    else { ?>
                      <select class="form-control" name="agama" id="IsiAgama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Konghuchu</option>
                      </select> <?php } ?>
                  </div>
                  <div class="form-group">
                    <label for="IsiPendidikan">Pendidikan</label>
                    <input type="text" name="pendidikan" class="form-control" id="IsiPendidikan" value="<?php echo $kp['Pendidikan'];?>" required>
                  </div>
                  <div class="form-group">
                    <label for="IsiPekerjaan">Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" id="IsiPekerjaan" value="<?php echo $kp['Pekerjaan'];?>" required>
                  </div>
                  <div class="form-group">
                    <label for="IsiSP">Status Perkawinan</label>
                    <?php
                    if ($kp['Status_perkawinan']=="Kawin") { ?>
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="sp" id="IsiSP" value="Kawin" checked>&nbsp; Kawin
                        </div>
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="sp" id="IsiSP" value="Belum Kawin">&nbsp; Belum Kawin
                        </div>
                      </div> <?php 
                    } else if ($kp['Status_perkawinan']=="Belum Kawin") { ?>
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="sp" id="IsiSP" value="Kawin">&nbsp; Kawin
                        </div>
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="sp" id="IsiSP" value="Belum Kawin" checked>&nbsp; Belum Kawin
                        </div>
                      </div> <?php
                    } else{ ?>
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="sp" id="IsiSP" value="Kawin">&nbsp; Kawin
                        </div>
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="sp" id="IsiSP" value="Belum Kawin">&nbsp; Belum Kawin
                        </div>
                      </div> <?php } ?>
                  </div>
                  <div class="form-group">
                    <label for="IsiSHK">Status Hubungan Keluarga</label>
                    <input type="text" name="shk" class="form-control" id="IsiSHK" value="<?php echo $kp['Status_hub_kel'];?>" required>
                  </div>
                  <div class="form-group">
                    <label for="IsiKW">Kewarganegaraan</label>
                    <?php
                    if ($kp['Kewarganegaraan']=="WNI") { ?>
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="kw" id="IsiKW" value="WNI" checked>&nbsp; WNI
                        </div>
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="kw" id="IsiKW" value="WNA">&nbsp; WNA
                        </div>
                      </div> <?php 
                    } else if ($kp['Kewarganegaraan']=="WNA") { ?>
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="kw" id="IsiKW" value="WNI">&nbsp; WNI
                        </div>
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="kw" id="IsiKW" value="WNA" checked>&nbsp; WNA
                        </div>
                      </div> <?php
                    } else{ ?>
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="kw" id="IsiKW" value="WNI">&nbsp; WNI
                        </div>
                        <div class="input-group-text">
                          <input type="radio" aria-label="Radio button for following text input" name="kw" id="IsiKW" value="WNA">&nbsp; WNA
                        </div>
                      </div> <?php } ?>
                  </div>
                  <div class="form-group">
                    <label for="Isinayah">Nama Ayah</label>
                    <input type="text" name="nayah" class="form-control" id="Isinayah" value="<?php echo $kp['Nama_Ayah'];?>" required>
                  </div>
                  <div class="form-group">
                    <label for="Isinibu">Nama Ibu</label>
                    <input type="text" name="nibu" class="form-control" id="Isinibu" value="<?php echo $kp['Nama_Ibu'];?>" required>
                  </div>
                  <div class="form-group">
                    <label for="IsiAlamat">Alamat</label>
                    <textarea type="text" name="alamat" class="form-control" id="IsiAlamat" required><?php echo $kp['Alamat'];?></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <input type="hidden" name="id_penduduk" value="<?php echo $kp['id_penduduk'];?>">
                  <button style="background-color: #52748D !important; color: white" type="submit" class="btn" name="update">Edit</button>
                </div>
              </form>
            <?php } ?>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</body>
</html>