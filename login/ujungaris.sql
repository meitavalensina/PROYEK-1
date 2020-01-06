-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2020 at 04:58 AM
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
(8, 'Prasarana Pendidikan');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_surat_sktm`
--

CREATE TABLE `kategori_surat_sktm` (
  `id_ks` int(11) NOT NULL,
  `nama_sktm` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, '3210778650000861', '1809765', '-'),
(2, '3212074104000001', '1803052', 'Pramuka');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Nik` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
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

INSERT INTO `penduduk` (`id_penduduk`, `no_kk`, `Nama`, `Nik`, `username`, `password`, `Jenis_kelamin`, `Tanggal_lahir`, `Agama`, `Pendidikan`, `Pekerjaan`, `Status_perkawinan`, `Status_hub_kel`, `Kewarganegaraan`, `Nama_Ayah`, `Nama_Ibu`, `Alamat`, `level`) VALUES
(5, '3210778650098557', 'H. Tatang Tarkilah', '3210778650000861', 'htatang', 'tatang001', 'Laki-Laki', '1978-01-12', 'Islam', 'SMA/Sederajat', 'Pejabat Desa', 'Kawin', 'Ayah', 'WNI', '', '', 'Blok Tiga', 'warga'),
(4, '', 'Eva Fadhillah Asriyantie', '3211234098876576', 'evafa', 'zaefar11', 'Perempuan', '1998-05-11', 'Islam', 'SMA/Sederajat', 'Karyawan', 'Belum Kawin', 'Anak', 'WNI', 'Asrori', 'Ruijah', '', 'warga'),
(3, '', 'Nada Qonita Amalia', '3212074104000001', 'qonita_nada', 'kemudahan14', 'Perempuan', '2000-04-01', 'Islam', 'SMA/Sederajat', 'Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', 'Muzaki', 'Marwiyah', '', 'admin'),
(1, '', 'Lufita Alif Nurjannah', '3212098765489', 'lufita002', 'lufita12', 'Perempuan', '2000-01-12', 'Islam', 'SMA/Sederajat', 'Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', '', '', '', 'admin'),
(2, '', 'Meita Valensina', '3212135005000008', 'valensinam', 'mrezanugrah21', 'Perempuan', '2000-05-10', 'Islam', 'SMA/Sederajat', 'Mahasiswa', 'Belum Kawin', 'Anak', 'WNI', 'Edi', 'Esih Rohaesih', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan_warga`
--

CREATE TABLE `pengaduan_warga` (
  `id_pw` int(11) NOT NULL,
  `Nik` varchar(20) NOT NULL,
  `Pesan` varchar(200) NOT NULL,
  `tgl_pengaduan_warga` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengaduan_warga`
--

INSERT INTO `pengaduan_warga` (`id_pw`, `Nik`, `Pesan`, `tgl_pengaduan_warga`) VALUES
(1, '3211234098876576', 'Pak Kuwu ana kucing ning Gg. H. Zaenudin', '2020-01-01 04:17:50');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_surat`
--

CREATE TABLE `pengajuan_surat` (
  `id_ps` int(11) NOT NULL,
  `Nik` varchar(20) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `perangkat_desa`
--

CREATE TABLE `perangkat_desa` (
  `id_perdes` int(11) NOT NULL,
  `kategori_perdes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `perangkat_desa_detail`
--

CREATE TABLE `perangkat_desa_detail` (
  `id_perdes` int(11) NOT NULL,
  `Nik` varchar(20) NOT NULL,
  `Nip` varchar(50) NOT NULL,
  `Pelatihan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Kantor Desa', 1, 1),
(6, 'Perpustakaan Desa', 8, 1);

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
(4, 'Sekertaris');

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
(1, '3210778650000861', '2015-2020'),
(4, '3212074104000001', '2030-2035');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_sarpras`
--
ALTER TABLE `kategori_sarpras`
  ADD PRIMARY KEY (`id_katsp`);

--
-- Indexes for table `kategori_surat_sktm`
--
ALTER TABLE `kategori_surat_sktm`
  ADD PRIMARY KEY (`id_ks`);

--
-- Indexes for table `kepala_desa`
--
ALTER TABLE `kepala_desa`
  ADD PRIMARY KEY (`id_kepdes`),
  ADD KEY `Nik` (`Nik`);

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
-- Indexes for table `perangkat_desa`
--
ALTER TABLE `perangkat_desa`
  ADD KEY `id_perdes` (`id_perdes`);

--
-- Indexes for table `perangkat_desa_detail`
--
ALTER TABLE `perangkat_desa_detail`
  ADD PRIMARY KEY (`id_perdes`),
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_sarpras`
--
ALTER TABLE `kategori_sarpras`
  MODIFY `id_katsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori_surat_sktm`
--
ALTER TABLE `kategori_surat_sktm`
  MODIFY `id_ks` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kepala_desa`
--
ALTER TABLE `kepala_desa`
  MODIFY `id_kepdes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pengaduan_warga`
--
ALTER TABLE `pengaduan_warga`
  MODIFY `id_pw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  MODIFY `id_ps` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perangkat_desa_detail`
--
ALTER TABLE `perangkat_desa_detail`
  MODIFY `id_perdes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  MODIFY `id_sarpras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `struktur_organisasi_detail`
--
ALTER TABLE `struktur_organisasi_detail`
  MODIFY `id_strukor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `perangkat_desa`
--
ALTER TABLE `perangkat_desa`
  ADD CONSTRAINT `perangkat_desa_ibfk_1` FOREIGN KEY (`id_perdes`) REFERENCES `perangkat_desa_detail` (`id_perdes`);

--
-- Constraints for table `perangkat_desa_detail`
--
ALTER TABLE `perangkat_desa_detail`
  ADD CONSTRAINT `perangkat_desa_detail_ibfk_1` FOREIGN KEY (`Nik`) REFERENCES `penduduk` (`Nik`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
