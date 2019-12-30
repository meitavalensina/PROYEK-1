-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2019 at 06:06 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Nik` varchar(20) NOT NULL,
  `Jenis_kelamin` varchar(20) DEFAULT NULL,
  `Tanggal_lahir` varchar(30) DEFAULT NULL,
  `Pendidikan` varchar(30) NOT NULL,
  `Pekerjaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan_warga`
--

CREATE TABLE `pengaduan_warga` (
  `id_pw` int(11) NOT NULL,
  `Nik` varchar(20) NOT NULL,
  `Pesan` varchar(200) NOT NULL,
  `tgl_pengaduan_warga` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_surat`
--

CREATE TABLE `pengajuan_surat` (
  `id_ps` int(11) NOT NULL,
  `Nik` varchar(20) NOT NULL,
  `id_ks` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL
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
  `Kategori` varchar(50) NOT NULL,
  `Jumlah` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id_strukor` int(11) NOT NULL,
  `Jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi_detail`
--

CREATE TABLE `struktur_organisasi_detail` (
  `id_strukor` int(11) NOT NULL,
  `Nik` varchar(20) NOT NULL,
  `tahun_jabatan` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Marwiyah', '3212074809740001', '3212071605100011', 2),
(2, 'Meita Valensina', 'meita', 'meita21', 1),
(3, 'Lufita Alif Nurjannah', 'lufita', 'lufita02', 1),
(4, 'Nada Qonita Amalia', 'nada', 'nada147', 1);

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`Nik`),
  ADD KEY `id_user` (`id_user`);

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
  ADD KEY `Nik` (`Nik`),
  ADD KEY `id_ks` (`id_ks`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kepala_desa`
--
ALTER TABLE `kepala_desa`
  ADD CONSTRAINT `kepala_desa_ibfk_1` FOREIGN KEY (`Nik`) REFERENCES `penduduk` (`Nik`);

--
-- Constraints for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD CONSTRAINT `penduduk_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `pengaduan_warga`
--
ALTER TABLE `pengaduan_warga`
  ADD CONSTRAINT `pengaduan_warga_ibfk_1` FOREIGN KEY (`Nik`) REFERENCES `penduduk` (`Nik`);

--
-- Constraints for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  ADD CONSTRAINT `pengajuan_surat_ibfk_2` FOREIGN KEY (`Nik`) REFERENCES `penduduk` (`Nik`),
  ADD CONSTRAINT `pengajuan_surat_ibfk_3` FOREIGN KEY (`id_ks`) REFERENCES `kategori_surat_sktm` (`id_ks`);

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
