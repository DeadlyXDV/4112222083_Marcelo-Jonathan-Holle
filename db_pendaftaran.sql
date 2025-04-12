-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Apr 12, 2025 at 10:44 AM
-- Server version: 5.7.44
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `sekolah_asal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon_siswa`
--

INSERT INTO `calon_siswa` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) VALUES
(3, 'Marcelo', 'Jelambar', 'laki-laki', 'Kristen', 'SMP 82 '),
(4, 'Glen', 'Jelambar', 'laki-laki', 'Kristen', 'SMP Ragunan'),
(5, 'Rina', 'Jl. Merpati No. 12', 'Perempuan', 'Islam', 'SMP Negeri 1 Jakarta'),
(6, 'Budi', 'Jl. Kenanga No. 5', 'Laki-laki', 'Kristen', 'SMP Harapan Bangsa'),
(7, 'Sari', 'Jl. Melati No. 23', 'Perempuan', 'Hindu', 'SMP Dharma Bakti'),
(8, 'Andi', 'Jl. Mawar No. 8', 'Laki-laki', 'Islam', 'SMP Negeri 3 Bandung'),
(9, 'Lina', 'Jl. Anggrek No. 17', 'Perempuan', 'Buddha', 'SMP Pelita Kasih'),
(10, 'Tono', 'Jl. Dahlia No. 10', 'Laki-laki', 'Katolik', 'SMP Santo Yosef'),
(11, 'Maya', 'Jl. Teratai No. 6', 'Perempuan', 'Islam', 'SMP Al-Azhar 7'),
(12, 'Joko', 'Jl. Cendana No. 3', 'Laki-laki', 'Kristen', 'SMP Kasih Bunda'),
(13, 'Nina', 'Jl. Kamboja No. 15', 'Perempuan', 'Hindu', 'SMP Saraswati'),
(14, 'Rudi', 'Jl. Flamboyan No. 20', 'Laki-laki', 'Islam', 'SMP Negeri 5 Surabaya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calon_siswa`
--
ALTER TABLE `calon_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
