-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 05:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kesiapan_alat`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat`
--

CREATE TABLE `alat` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_alat` varchar(255) NOT NULL,
  `id_alat` int(11) DEFAULT NULL,
  `hm` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alat`
--

INSERT INTO `alat` (`id`, `nama_user`, `tanggal`, `nama_alat`, `id_alat`, `hm`, `status`, `keterangan`) VALUES
(13, 'Andi', '2023-02-10', 'LIEBHEER (HMC - 01)', 0, '-', 'ready', '-'),
(14, 'Andi', '2023-02-10', 'SENEBOGEN (MC - 02)', 0, '040054', 'ready', '-'),
(15, 'Andi', '2023-02-10', 'LINDE (RS 05)', 0, '-', 'perbaikan', '-'),
(16, 'Andi', '2023-02-10', 'EC 05', 0, '-', 'rusak', 'Proses Perbaikan'),
(17, 'Andi', '2023-02-10', 'EC 04', 0, '5618', 'rusak', 'Injector Trouble'),
(18, 'Andi', '2023-02-13', 'LIEBHEER (HMC - 01)', 0, '-', 'ready', 'Ready digunakan'),
(19, 'Andi', '2023-02-16', 'LIEBHEER (HMC - 01)', 0, '-', 'ready', 'Ready\r\n'),
(20, 'Andi', '2023-02-01', 'tes', 0, 'tes', 'operasi', 'tes status operasi'),
(22, 'Andi', '2023-02-21', '16', 0, 'DT-006', 'Perawatan', 'DT-006'),
(23, 'Andi', '2023-02-21', '20', 0, 'DT-010', 'Perawatan', 'Tes keterangan');

-- --------------------------------------------------------

--
-- Table structure for table `data_alat`
--

CREATE TABLE `data_alat` (
  `id` int(11) NOT NULL,
  `nama_alat` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_alat`
--

INSERT INTO `data_alat` (`id`, `nama_alat`, `keterangan`) VALUES
(11, 'DT-001', 'DUMP TRUCK,35 TON,HINO,FM8J,DUMAI'),
(12, 'DT-002', 'DUMP TRUCK,35 TON,HINO,FM8J,DUMAI'),
(13, 'DT-003', 'DUMP TRUCK,35 TON,HINO,FM8J,DUMAI\r\n'),
(14, 'DT-004', 'DUMP TRUCK,35 TON,HINO,FM8J,DUMAI\r\n'),
(15, 'DT-005', 'DUMP TRUCK,35 TON,HINO,FM8J,DUMAI\r\n'),
(16, 'DT-006', 'DUMP TRUCK,35 TON,HINO,FM8J,DUMAI\r\n'),
(17, 'DT-007', 'DUMP TRUCK,35 TON,HINO,FM8J,DUMAI\r\n'),
(18, 'DT-008', 'DUMP TRUCK,35 TON,HINO,FM8J,DUMAI\r\n'),
(19, 'DT-009', 'DUMP TRUCK,35 TON,HINO,FM 260 JD,DUMAI\r\n'),
(20, 'DT-010', 'DUMP TRUCK,35 TON,HINO,FM 260 JD,DUMAI\r\n'),
(21, 'DT-011', 'DUMP TRUCK,35 TON,HINO,FM 260 JD,DUMAI\r\n'),
(22, 'DT-012', 'DUMP TRUCK,35 TON,HINO,FM 260 JD,DUMAI'),
(23, 'DT-013', 'DUMP TRUCK,35 TON,HINO,FM 260 JD,DUMAI\r\n'),
(24, 'EC-001', 'EXCAVATOR,20 TON,VOLVO,EC210B,DUMAI\r\n'),
(25, 'EC-004', 'EXCAVATOR,20 TON,VOLVO,EC210B,DUMAI'),
(26, 'EC-005 ', 'EXCAVATOR,0,9 M3,JCB,-,DUMAI, JCB , EX PT. ATTI\r\n'),
(27, 'FL-001', 'FORKLIFT,3 TON,CATERPILLAR,DP30ND,DUMAI\r\n'),
(28, 'FL-002', 'FORKLIFT,3 TON,CATERPILLAR,DP30ND,DUMAI\r\n'),
(29, 'FL-003', 'FORKLIFT,7 TON,CATERPILLAR,DP-70,DUMAI\r\n'),
(30, 'HMC-01', 'HARBOUR MOBILE CRANE,104 TON,LIEBHERR,LHM 400,DUMAI\r\n'),
(31, 'MC-03 ', 'MOBILE CRANE,90 TON,SENNEBOGEN,6200HMC,DUMAI\r\n'),
(32, 'MC-02', 'MOBILE CRANE,80 TON,SENNEBOGEN,6130HMC,DUMAI\r\n'),
(33, 'RS-05', 'REACH STACKER,46 TON,LINDE,C4531 TL5,DUMAI\r\n'),
(34, 'WL-001', 'WHEEL LOADER,12 TON,KOMATSU,WA-380-3,DUMAI\r\n'),
(35, 'WL-003', 'WHEEL LOADER,12 TON,KOMATSU,WA-380-3,DUMAI\r\n'),
(36, 'WL-005', 'WHEEL LOADER,12 TON,KOMATSU,WA-380-3,DUMAI\r\n'),
(37, 'WL-006', 'WHEEL LOADER,12 TON,KOMATSU,WA-380-3,DUMAI\r\n'),
(38, 'WL-007', 'WHEEL LOADER,12 TON,KOMATSU,WA-380-3,DUMAI\r\n'),
(39, 'WL-008', 'WHEEL LOADER,12 TON,KOMATSU,WA-380-3,DUMAI\r\n'),
(40, 'WL-009', 'WHEEL LOADER,1,6 M3,KAWASAKI,60ZV,DUMAI\r\n'),
(41, 'GRAB', 'GRAB, 1,5-2,2 TON/M3\r\n'),
(42, 'HOPPER', 'HOPPER, 25 M3\r\n'),
(43, 'WL-002', 'WHEEL LOADER,12 TON,KOMATSU,WA-380-3,DUMAI\r\n'),
(44, 'WL-004', 'WHEEL LOADER,12 TON,KOMATSU,WA-380-3,DUMAI\r\n'),
(45, 'EXC 02', 'EXCAVATOR,20 TON,VOLVO,EC210B,DUMAI\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `status`) VALUES
(1, 'Dito', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'aktif'),
(9, 'Andi', 'andi', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_alat`
--
ALTER TABLE `data_alat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat`
--
ALTER TABLE `alat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `data_alat`
--
ALTER TABLE `data_alat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
