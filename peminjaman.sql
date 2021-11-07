-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 05:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `IdBarang` varchar(15) NOT NULL,
  `BrgNama` varchar(50) NOT NULL,
  `BrgMerk` varchar(50) NOT NULL,
  `BrgSpesifikasi` varchar(255) NOT NULL,
  `BrgKondisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`IdBarang`, `BrgNama`, `BrgMerk`, `BrgSpesifikasi`, `BrgKondisi`) VALUES
('B271021', 'LCD', 'Epson', 'Warna putih', 'Baik'),
('B271022', 'Kabel HDMI', 'Sony High', 'Panjang 3 meter', 'Baik'),
('B271023', 'Keyboard', 'Rexus', 'Warna Hitam', 'tombol f11 hilang'),
('B271024', 'Speaker', 'JBL', 'Warna Hitam', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `IdSiswa` varchar(10) NOT NULL,
  `SwNama` varchar(50) NOT NULL,
  `SwKelas` varchar(10) NOT NULL,
  `SwNoHp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`IdSiswa`, `SwNama`, `SwKelas`, `SwNoHp`) VALUES
('S001', 'Tria', 'X TKJ 2', '081234567890'),
('S002', 'Riris', 'X RPL 1', '081098765432'),
('S003', 'Siti', 'XII TKJ 2', '088888888888'),
('S004', 'Toni', 'X TKR 1', '081111111111');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `IdTransaksi` varchar(10) NOT NULL,
  `IdBarang` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `SwKelas` varchar(10) NOT NULL,
  `BrgNama` varchar(50) NOT NULL,
  `TglPinjam` date NOT NULL,
  `TglKembali` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`IdTransaksi`, `IdBarang`, `Nama`, `SwKelas`, `BrgNama`, `TglPinjam`, `TglKembali`, `status`) VALUES
('TR001', 'B271021', 'Tria', 'X TKJ 2', 'LCD', '2021-11-01', '2021-11-05', 'Kembali'),
('TR002', 'B271022', 'Riris', 'X RPL 1', 'Kabel HDMI', '2021-11-01', '0000-00-00', 'pinjam'),
('TR003', 'B271024', 'putra', 'XII TKJ 2', 'Speaker', '2021-11-05', '2021-11-05', 'Kembali'),
('TR004', 'B271022', 'Putri', 'X TKJ 2', 'Kabel', '2021-11-05', '0000-00-00', 'pinjam'),
('TR005', 'B271021', 'Bagus', 'X TKR 1', 'LCD', '2021-11-05', '0000-00-00', 'pinjam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `IdUser` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`IdUser`, `nama`, `jabatan`, `username`, `email`, `password`, `foto`) VALUES
(1, 'Rifatus', 'Staf Sarpras', 'adminstaf', 'staf@gmail.com', '25d55ad283aa400af464c76d713c07ad', ''),
(3, '', '', 'silvia', 'silvi@gmail.com', '25d55ad283aa400af464c76d713c07ad', ''),
(5, '', '', 'wakasarpras', 'waka@gmail.com', '25d55ad283aa400af464c76d713c07ad', ''),
(6, '', '', 'riris', 'riris@gmail.com', '25d55ad283aa400af464c76d713c07ad', ''),
(7, 'zahri silvia', '', 'zahri', 'zahri@gmail.com', '25d55ad283aa400af464c76d713c07ad', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`IdBarang`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`IdSiswa`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`IdTransaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
