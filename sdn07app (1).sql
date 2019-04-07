-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 08:50 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdn07app`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi_siswa`
--

CREATE TABLE `absensi_siswa` (
  `id_absensi_siswa` bigint(20) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `id_mapel` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `id_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi_siswa`
--

INSERT INTO `absensi_siswa` (`id_absensi_siswa`, `nip`, `nis`, `id_mapel`, `status`, `tanggal_masuk`, `id_kelas`) VALUES
(1, '123453', '123456', '3', 'Masuk', '2019-03-26', '2');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `profile_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama_admin`, `profile_admin`) VALUES
('zyarga', '123', 'Zyarga Aurelius', 'zeref.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `nip` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tanggalahir` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `notelp` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `pictureguru` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nip`, `password`, `nama`, `tempatlahir`, `tanggalahir`, `agama`, `notelp`, `jabatan`, `pendidikan`, `jk`, `pictureguru`, `alamat`) VALUES
('123456', '123', 'Zyarga Aurelius S.Kom', 'Jakarta', '2019-03-14', 'Islam', '15615', 'Programmer', 'S1', 'Pria', 'zeref.jpg', 'jln tambora 5 gg 1 RT 1 RW 1'),
('654321', '123456', 'Musupadi S.PD', 'Jakarta', '1994-01-15', 'Islam', '123123', 'Programmer', 'Teknik Informatika', 'Pria', 'zeref.jpg', 'jln Tambora V');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` bigint(20) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `id_kelas` varchar(50) NOT NULL,
  `id_mapel` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `dari_jam` varchar(50) NOT NULL,
  `sampai_jam` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nip`, `id_kelas`, `id_mapel`, `hari`, `dari_jam`, `sampai_jam`) VALUES
(1, '123456', '1', '1', 'Senin', '08:00', '10:00'),
(2, '123456', '1', '2', 'Senin', '10:00', '12:00'),
(3, '123456', '2', '3', 'Selasa', '08:00', '10:00'),
(4, '123456', '2', '4', 'Selasa', '10:00', '12:00');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `tingkat_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `tingkat_kelas`) VALUES
(1, '1A', 1),
(2, '1B', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mapel` bigint(20) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `id_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mapel`, `nama_mapel`, `id_kelas`) VALUES
(1, 'Matematika Dasar', '1'),
(2, 'IPA', '1'),
(3, 'TIK', '1'),
(4, 'Penjaskes', '1');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `id_nilai` bigint(50) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  `id_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_siswa`
--

INSERT INTO `nilai_siswa` (`id_nilai`, `nis`, `nip`, `nilai`, `id_mapel`) VALUES
(1, '12345', '123456', '80', '1'),
(2, '123457', '123456', '90', '1'),
(3, '12345', '123456', '80', '4'),
(4, '123457', '123456', '60', '4');

-- --------------------------------------------------------

--
-- Table structure for table `raport_siswa`
--

CREATE TABLE `raport_siswa` (
  `id_raport` bigint(20) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `sakit` varchar(50) NOT NULL,
  `izin` varchar(50) NOT NULL,
  `alpa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raport_siswa`
--

INSERT INTO `raport_siswa` (`id_raport`, `nis`, `sakit`, `izin`, `alpa`) VALUES
(1, '12345', '1', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(50) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jk_siswa` varchar(50) NOT NULL,
  `tahunajaran` varchar(50) NOT NULL,
  `namaibu` varchar(50) NOT NULL,
  `namaayah` varchar(50) NOT NULL,
  `pekerjaanayah` varchar(50) NOT NULL,
  `pekerjaanibu` varchar(50) NOT NULL,
  `id_kelas` varchar(50) NOT NULL,
  `profile_siswa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama_siswa`, `jk_siswa`, `tahunajaran`, `namaibu`, `namaayah`, `pekerjaanayah`, `pekerjaanibu`, `id_kelas`, `profile_siswa`) VALUES
('12345', 'Bilkhis', 'Perempuan', '2019', 'Nuni', 'Nana Sutisna', 'Designer', 'Ibu Rumah Tangga', '1', 'zeref.jpg'),
('123453', 'Raul Agustiansah', 'Pria', '2019', 'Regi', 'Sukarna', 'IT Developer', 'Ibu Rumah Tanggal', '2', 'zeref.jpg'),
('123455', 'Dede Suherlan', 'Pria', '2019', 'Silvia', 'Ahmad Fanari', 'Buruh', 'Ibu Rumah Tangga', '2', 'zeref.jpg'),
('123457', 'Fauzan', 'Pria', '2019', 'Siti Hodijah', 'Jatna', 'Buruh', 'Ibu Rumah Tangga', '1', 'zeref.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi_siswa`
--
ALTER TABLE `absensi_siswa`
  ADD PRIMARY KEY (`id_absensi_siswa`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `raport_siswa`
--
ALTER TABLE `raport_siswa`
  ADD PRIMARY KEY (`id_raport`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi_siswa`
--
ALTER TABLE `absensi_siswa`
  MODIFY `id_absensi_siswa` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mapel` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id_nilai` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `raport_siswa`
--
ALTER TABLE `raport_siswa`
  MODIFY `id_raport` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
