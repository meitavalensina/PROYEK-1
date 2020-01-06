-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2020 at 12:56 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujungaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `Nik` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `Nik`, `username`, `password`) VALUES
(3, '3212135005000008', 'valensinam', 'mrezanugrah21'),
(4, '3212098765489', 'lufita002', 'lufita12'),
(5, '3212074104000001', 'qonita_nada', 'kemudahan14');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_sarpras`
--

CREATE TABLE `kategori_sarpras` (
  `id_katsp` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_sarpras`
--

INSERT INTO `kategori_sarpras` (`id_katsp`, `nama_kategori`) VALUES
(1, 'Sarana Desa'),
(2, 'Prasarana Pendidikan'),
(3, 'Prasarana Ibadah'),
(4, 'Prasarana Air Bersih'),
(5, 'Prasarana Sanitasi dan Irigasi');

-- --------------------------------------------------------

--
-- Table structure for table `kepala_desa`
--

CREATE TABLE `kepala_desa` (
  `id_kepdes` int(11) NOT NULL,
  `Nik` varchar(20) NOT NULL,
  `Nip` varchar(50) NOT NULL,
  `Pelatihan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepala_desa`
--

INSERT INTO `kepala_desa` (`id_kepdes`, `Nik`, `Nip`, `Pelatihan`) VALUES
(1, '3210778650000861', '1809765', 'Pramuka');

-- --------------------------------------------------------

--
-- Table structure for table `letak_geografis`
--

CREATE TABLE `letak_geografis` (
  `id_lg` int(11) NOT NULL,
  `batas` varchar(20) NOT NULL,
  `desa` varchar(15) NOT NULL,
  `kecamatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `letak_geografis`
--

INSERT INTO `letak_geografis` (`id_lg`, `batas`, `desa`, `kecamatan`) VALUES
(1, 'Sebelah Utara', 'Ujungjaya', 'Widasari'),
(2, 'Sebelah Selatan', 'Kongsijaya', 'Widasari'),
(3, 'Sebelah Timur', 'Kebulen', 'Jatibarang'),
(4, 'Sebelah Barat', 'Bunder', 'Widasari');

-- --------------------------------------------------------

--
-- Table structure for table `log_ps`
--

CREATE TABLE `log_ps` (
  `id_ps` int(11) NOT NULL,
  `Nik` varchar(20) NOT NULL,
  `tgl_pengajuan_surat` datetime NOT NULL,
  `alasan` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_ps`
--

INSERT INTO `log_ps` (`id_ps`, `Nik`, `tgl_pengajuan_surat`, `alasan`, `status`, `waktu`) VALUES
(3, '3211234098876576', '2020-01-06 08:33:39', 'Nggo mangkat meng Jepang', 'Surat Sudah Diterima', '2020-01-07 05:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Nik` varchar(20) NOT NULL,
  `no_kk` varchar(20) DEFAULT NULL,
  `Jenis_kelamin` varchar(20) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `Pendidikan` varchar(30) NOT NULL,
  `Pekerjaan` varchar(30) NOT NULL,
  `Status_perkawinan` varchar(11) NOT NULL,
  `Status_hub_kel` varchar(15) NOT NULL,
  `Kewarganegaraan` varchar(3) NOT NULL,
  `Nama_Ayah` varchar(100) NOT NULL,
  `Nama_Ibu` varchar(100) NOT NULL,
  `Alamat` text NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `Nama`, `Nik`, `no_kk`, `Jenis_kelamin`, `Tanggal_lahir`, `Agama`, `Pendidikan`, `Pekerjaan`, `Status_perkawinan`, `Status_hub_kel`, `Kewarganegaraan`, `Nama_Ayah`, `Nama_Ibu`, `Alamat`, `level`) VALUES
(5, 'H. Tatang Tarkilah', '3210778650000861', '3210778650098557', 'Laki-Laki', '1978-01-12', 'Islam', 'SMA/Sederajat', 'Pejabat Desa', 'Kawin', 'Ayah', 'WNI', '', '', 'Blok Tiga', 'warga'),
(4, 'Eva Fadillah Asriyantie', '3211234098876576', '321207510598001', 'Perempuan', '1998-05-11', 'Islam', 'SLTA/SEDERAJAT', 'Karyawan', 'Belum Kawin', 'Anak', 'WNI', 'Asrori', 'Ruijah', 'Blok Balai desa RT 001/RW 002 desa Ujungaris Kec. Widasari Kab. Indramayu Kode pos 45271', 'warga'),
(0, 'Asrori', '3212071301730001', '3212072906100012', 'Laki-Laki', '1973-01-13', 'Islam', 'SLTP/SEDERAJAT', 'Wiraswasta', 'Kawin', 'Kepala Keluarga', 'WNI', 'H. Zaenudin', 'Hj. Faridah', 'Blok Balai desa RT 001 / RW 002 desa Ujungaris Kec. Widasari Kab. Indramayu Kode Pos 45271', 'warga'),
(0, 'Muhammad Rafli Azzamy', '3212072201130001', '3212072906100012', 'Laki-Laki', '2013-01-22', 'Islam', 'TIDAK/BLM SEKOLAH', 'Belum/tidak bekerja', 'Belum Kawin', 'Anak', 'WNI', 'Asrori', 'Ruijah', 'Blok Balai desa RT 001/RW 002 desa Ujungaris Kec. Widasari Kab. Indramayu Kode pos 45271', 'warga'),
(0, 'Muhammad Farrel Hafizh', '3212072704090001', '3212072906100012', 'Laki-Laki', '2009-04-27', 'Islam', 'BELUM TAMAT SEDERAJAT', 'Pelajar', 'Kawin', 'Anak', 'WNI', 'Asrori', 'Ruijah', 'Blok Balai desa RT 001/RW 002 desa Ujungaris Kec. Widasari Kab. Indramayu Kode pos 45271', 'warga'),
(3, 'Nada Qonita Amalia', '3212074104000001', '', 'Perempuan', '2000-04-01', 'Islam', 'SMA/Sederajat', 'Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', 'Muzaki', 'Marwiyah', '', 'admin'),
(0, 'Contoh', '3212074104045678', '3210000000000126', 'Laki-Laki', '1999-12-29', 'Budha', 'SMA/Sederajat', 'Karyawan', 'Belum Kawin', 'Anak', 'WNA', 'Ini', 'Itu', 'Apa', 'warga'),
(0, 'Ruijah', '3212076905800001', '3212072906100012', 'Perempuan', '1980-05-29', 'Islam', 'SLTP/SEDERAJAT', 'Mengurus Rumah Tangga', 'Kawin', 'Istri', 'WNI', 'Masrim', 'Wartani', 'Blok Balai desa RT 001/RW 002 desa Ujungaris Kec. Widasari Kab. Indramayu Kode pos 45271', 'warga'),
(1, 'Lufita Alif Nurjannah', '3212098765489', '', 'Perempuan', '2000-01-12', 'Islam', 'SMA/Sederajat', 'Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '', '', '', 'admin'),
(2, 'Meita Valensina', '3212135005000008', '', 'Perempuan', '2000-05-10', 'Islam', 'SMA/Sederajat', 'Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', 'Edi', 'Esih Rohaesih', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan_warga`
--

CREATE TABLE `pengaduan_warga` (
  `id_pw` int(11) NOT NULL,
  `Nik` varchar(20) NOT NULL,
  `Pesan` varchar(200) NOT NULL,
  `tgl_pengaduan_warga` datetime NOT NULL,
  `status` enum('Belum Dibaca','Sudah Dibaca') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_surat`
--

CREATE TABLE `pengajuan_surat` (
  `id_ps` int(11) NOT NULL,
  `Nik` varchar(20) NOT NULL,
  `tgl_pengajuan_surat` datetime NOT NULL,
  `alasan` text NOT NULL,
  `status` enum('Diproses','Diterima','Ditolak','Surat Sedang Dibuat','Surat Sudah Jadi','Surat Dikirim','Surat Sudah Diterima Warga') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan_surat`
--

INSERT INTO `pengajuan_surat` (`id_ps`, `Nik`, `tgl_pengajuan_surat`, `alasan`, `status`) VALUES
(1, '3212074104000001', '2020-01-03 07:45:33', 'Buat Beasiswa Masuk Perguruan Tinggi', 'Diterima'),
(2, '3212074104000001', '2020-01-06 08:30:41', 'Untuk beasiswa mendaftar kuliah', 'Diterima'),
(6, '3212072704090001', '2020-01-07 06:55:09', 'Beasiswa Daftar SMP', '');

--
-- Triggers `pengajuan_surat`
--
DELIMITER $$
CREATE TRIGGER `proses_ps` AFTER DELETE ON `pengajuan_surat` FOR EACH ROW INSERT INTO log_ps VALUES (OLD.id_ps, OLD.Nik, OLD.tgl_pengajuan_surat, OLD.alasan, OLD.status, NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sarana_prasarana`
--

CREATE TABLE `sarana_prasarana` (
  `id_sarpras` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `id_katsp` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sarana_prasarana`
--

INSERT INTO `sarana_prasarana` (`id_sarpras`, `Nama`, `id_katsp`, `Jumlah`) VALUES
(11, 'Kantor Desa', 1, 1),
(12, 'Perpustakaan Desa', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id_strukor` int(11) NOT NULL,
  `Jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id_strukor`, `Jabatan`) VALUES
(1, 'Kepala Desa'),
(6, 'Sekertaris');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi_detail`
--

CREATE TABLE `struktur_organisasi_detail` (
  `id_strukor` int(11) NOT NULL,
  `Nik` varchar(20) NOT NULL,
  `masa_jabatan` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur_organisasi_detail`
--

INSERT INTO `struktur_organisasi_detail` (`id_strukor`, `Nik`, `masa_jabatan`) VALUES
(1, '3210778650000861', '2015-2021'),
(6, '3212074104000001', '2030-2035');

-- --------------------------------------------------------

--
-- Table structure for table `user_warga`
--

CREATE TABLE `user_warga` (
  `id_user` int(11) NOT NULL,
  `Nik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_warga`
--

INSERT INTO `user_warga` (`id_user`, `Nik`) VALUES
(3, '3211234098876576'),
(4, '3212071301730001'),
(5, '3212076905800001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `Nik` (`Nik`);

--
-- Indexes for table `kategori_sarpras`
--
ALTER TABLE `kategori_sarpras`
  ADD PRIMARY KEY (`id_katsp`);

--
-- Indexes for table `kepala_desa`
--
ALTER TABLE `kepala_desa`
  ADD PRIMARY KEY (`id_kepdes`),
  ADD KEY `Nik` (`Nik`);

--
-- Indexes for table `letak_geografis`
--
ALTER TABLE `letak_geografis`
  ADD PRIMARY KEY (`id_lg`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`Nik`);

--
-- Indexes for table `pengaduan_warga`
--
ALTER TABLE `pengaduan_warga`
  ADD PRIMARY KEY (`id_pw`),
  ADD KEY `Nik` (`Nik`);

--
-- Indexes for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  ADD PRIMARY KEY (`id_ps`),
  ADD KEY `Nik` (`Nik`);

--
-- Indexes for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  ADD PRIMARY KEY (`id_sarpras`),
  ADD KEY `id_katsp` (`id_katsp`);

--
-- Indexes for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD KEY `id_strukor` (`id_strukor`);

--
-- Indexes for table `struktur_organisasi_detail`
--
ALTER TABLE `struktur_organisasi_detail`
  ADD PRIMARY KEY (`id_strukor`),
  ADD KEY `Nik` (`Nik`);

--
-- Indexes for table `user_warga`
--
ALTER TABLE `user_warga`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `Nik` (`Nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori_sarpras`
--
ALTER TABLE `kategori_sarpras`
  MODIFY `id_katsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kepala_desa`
--
ALTER TABLE `kepala_desa`
  MODIFY `id_kepdes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `letak_geografis`
--
ALTER TABLE `letak_geografis`
  MODIFY `id_lg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengaduan_warga`
--
ALTER TABLE `pengaduan_warga`
  MODIFY `id_pw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  MODIFY `id_ps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  MODIFY `id_sarpras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `struktur_organisasi_detail`
--
ALTER TABLE `struktur_organisasi_detail`
  MODIFY `id_strukor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_warga`
--
ALTER TABLE `user_warga`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`Nik`) REFERENCES `penduduk` (`Nik`);

--
-- Constraints for table `kepala_desa`
--
ALTER TABLE `kepala_desa`
  ADD CONSTRAINT `kepala_desa_ibfk_1` FOREIGN KEY (`Nik`) REFERENCES `penduduk` (`Nik`);

--
-- Constraints for table `pengaduan_warga`
--
ALTER TABLE `pengaduan_warga`
  ADD CONSTRAINT `pengaduan_warga_ibfk_1` FOREIGN KEY (`Nik`) REFERENCES `penduduk` (`Nik`);

--
-- Constraints for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  ADD CONSTRAINT `pengajuan_surat_ibfk_4` FOREIGN KEY (`Nik`) REFERENCES `penduduk` (`Nik`);

--
-- Constraints for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  ADD CONSTRAINT `sarana_prasarana_ibfk_1` FOREIGN KEY (`id_katsp`) REFERENCES `kategori_sarpras` (`id_katsp`);

--
-- Constraints for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD CONSTRAINT `struktur_organisasi_ibfk_1` FOREIGN KEY (`id_strukor`) REFERENCES `struktur_organisasi_detail` (`id_strukor`);

--
-- Constraints for table `struktur_organisasi_detail`
--
ALTER TABLE `struktur_organisasi_detail`
  ADD CONSTRAINT `struktur_organisasi_detail_ibfk_1` FOREIGN KEY (`Nik`) REFERENCES `penduduk` (`Nik`);

--
-- Constraints for table `user_warga`
--
ALTER TABLE `user_warga`
  ADD CONSTRAINT `user_warga_ibfk_1` FOREIGN KEY (`Nik`) REFERENCES `penduduk` (`Nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
