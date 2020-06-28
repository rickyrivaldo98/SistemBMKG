-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2020 at 03:10 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikm`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_hujan`
--

CREATE TABLE `data_hujan` (
  `id` int(11) NOT NULL,
  `id_data` varchar(50) NOT NULL,
  `Bulan` varchar(50) NOT NULL,
  `Tahun` varchar(50) NOT NULL,
  `CSV` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_hujan`
--

INSERT INTO `data_hujan` (`id`, `id_data`, `Bulan`, `Tahun`, `CSV`) VALUES
(3, '5e3bffe2090be', 'Januari', '1111', '5e3bffe2090be.csv'),
(4, '5e42a01023f24', 'rrr', '333', '5e42a01023f24.csv'),
(5, '5e42a30d23f6d', 'rrr', 'reterter', '5e42a30d23f6d.csv'),
(6, '5e42a77b0f454', 'rrr', 'reterter', '5e42a77b0f454.csv');

-- --------------------------------------------------------

--
-- Table structure for table `data_responden`
--

CREATE TABLE `data_responden` (
  `ID` int(11) NOT NULL,
  `Umur` varchar(20) NOT NULL,
  `Jenis_kelamin` varchar(20) NOT NULL,
  `Pendidikan` varchar(20) NOT NULL,
  `Pekerjaan` varchar(20) NOT NULL,
  `Pelayanan` text NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_responden`
--

INSERT INTO `data_responden` (`ID`, `Umur`, `Jenis_kelamin`, `Pendidikan`, `Pekerjaan`, `Pelayanan`, `Email`) VALUES
(2, 'Diatas 46', 'Laki-Laki', 'SLTA', 'PNS/TNI/POLRI', 'Tren curah hujan,Informasi kualitas udara,Analisis iklim ekstrim', 'rickyrivaldo98@gmail.com'),
(3, '36-45', 'Perempuan', 'SLTP', 'Lainnya', 'Informasi perubahan iklim (keterpaparan dan/atau proyeksi),Pengambilan dan pengujian sampel parameter iklim dan kualitas udara (laboratorium),Kalibrasi (peralatan MKG)', 'mama@gmail.com'),
(4, '16-25', 'Perempuan', 'D4/S1', 'Pelajar/Mahasiswa', 'Informasi tentang tingkat kemudahan terjadinya kebakaran hutan dan lahan,Sewa peralatan meteorologi,Pengambilan dan pengujian sampel parameter iklim dan kualitas udara (laboratorium),Sewa peralatan klimatologi,Informasi tanda waktu (hilal dan gerhana),Peta rendaman tsunami,Sewa peralatan MKG,Kunjungan', 'yohanmarvel012@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `ID` int(11) NOT NULL,
  `Jopsi1a` varchar(25) NOT NULL,
  `Jopsi1b` varchar(25) NOT NULL,
  `Jopsi2a` varchar(25) NOT NULL,
  `Jopsi2b` varchar(25) NOT NULL,
  `Jopsi3a` varchar(25) NOT NULL,
  `Jopsi3b` varchar(25) NOT NULL,
  `Jopsi4a` varchar(25) NOT NULL,
  `Jopsi4b` varchar(25) NOT NULL,
  `Jopsi5a` varchar(25) NOT NULL,
  `Jopsi5b` varchar(25) NOT NULL,
  `Jopsi6a` varchar(25) NOT NULL,
  `Jopsi6b` varchar(25) NOT NULL,
  `Jopsi7a` varchar(25) NOT NULL,
  `Jopsi7b` varchar(25) NOT NULL,
  `Jopsi8` varchar(25) NOT NULL,
  `Jopsi9` varchar(25) NOT NULL,
  `Jopsi10a` varchar(25) NOT NULL,
  `Jopsi10b` varchar(25) NOT NULL,
  `Jopsi11a` varchar(25) NOT NULL,
  `Jopsi11b` varchar(25) NOT NULL,
  `Jopsi12a` varchar(25) NOT NULL,
  `Jopsi12b` varchar(25) NOT NULL,
  `Jopsi13a` varchar(25) NOT NULL,
  `Jopsi13b` varchar(25) NOT NULL,
  `Jopsi14a` varchar(25) NOT NULL,
  `Jopsi14b` varchar(25) NOT NULL,
  `Jopsi15a` varchar(25) NOT NULL,
  `Jopsi15b` varchar(25) NOT NULL,
  `Jopsi16a` varchar(25) NOT NULL,
  `Jopsi16b` varchar(25) NOT NULL,
  `Jopsi17a` varchar(25) NOT NULL,
  `Jopsi17b` varchar(25) NOT NULL,
  `Jopsi18a` varchar(25) NOT NULL,
  `Jopsi18b` varchar(25) NOT NULL,
  `Jopsi19a` varchar(25) NOT NULL,
  `Jopsi19b` varchar(25) NOT NULL,
  `Jopsi20a` varchar(25) NOT NULL,
  `Jopsi20b` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`ID`, `Jopsi1a`, `Jopsi1b`, `Jopsi2a`, `Jopsi2b`, `Jopsi3a`, `Jopsi3b`, `Jopsi4a`, `Jopsi4b`, `Jopsi5a`, `Jopsi5b`, `Jopsi6a`, `Jopsi6b`, `Jopsi7a`, `Jopsi7b`, `Jopsi8`, `Jopsi9`, `Jopsi10a`, `Jopsi10b`, `Jopsi11a`, `Jopsi11b`, `Jopsi12a`, `Jopsi12b`, `Jopsi13a`, `Jopsi13b`, `Jopsi14a`, `Jopsi14b`, `Jopsi15a`, `Jopsi15b`, `Jopsi16a`, `Jopsi16b`, `Jopsi17a`, `Jopsi17b`, `Jopsi18a`, `Jopsi18b`, `Jopsi19a`, `Jopsi19b`, `Jopsi20a`, `Jopsi20b`) VALUES
(2, 'Sangat Setuju', 'Tidak Penting', 'Kurang Setuju', 'Kurang Penting', 'Kurang Setuju', 'Sangat Penting', 'Tidak Setuju', 'Kurang Penting', 'Sangat Setuju', 'Tidak Penting', 'Tidak Setuju', 'Penting', 'Kurang Setuju', 'Penting', 'Tidak Setuju', 'Tidak Setuju', 'Setuju', 'Tidak Penting', 'Kurang Setuju', 'Kurang Penting', 'Kurang Setuju', 'Penting', 'Setuju', 'Penting', 'Sangat Setuju', 'Sangat Penting', 'Sangat Setuju', 'Sangat Penting', 'Sangat Setuju', 'Sangat Penting', 'Sangat Setuju', 'Sangat Penting', 'Sangat Setuju', 'Sangat Penting', 'Tidak Setuju', 'Kurang Penting', 'Sangat Setuju', 'Sangat Penting'),
(3, 'Kurang Setuju', 'Kurang Penting', 'Kurang Setuju', 'Kurang Penting', 'Tidak Setuju', 'Kurang Penting', 'Kurang Setuju', 'Kurang Penting', 'Tidak Setuju', 'Tidak Penting', 'Kurang Setuju', 'Kurang Penting', 'Sangat Setuju', 'Kurang Penting', 'Setuju', 'Tidak Setuju', 'Kurang Setuju', 'Sangat Penting', 'Sangat Setuju', 'Sangat Penting', 'Tidak Setuju', 'Penting', 'Tidak Setuju', 'Tidak Penting', 'Sangat Setuju', 'Penting', 'Kurang Setuju', 'Tidak Penting', 'Sangat Setuju', 'Sangat Penting', 'Setuju', 'Penting', 'Sangat Setuju', 'Sangat Penting', 'Sangat Setuju', 'Sangat Penting', 'Sangat Setuju', 'Sangat Penting'),
(4, 'Setuju', 'Kurang Penting', 'Setuju', 'Kurang Penting', 'Setuju', 'Penting', 'Sangat Setuju', 'Kurang Penting', 'Sangat Setuju', 'Penting', 'Tidak Setuju', 'Penting', 'Sangat Setuju', 'Sangat Penting', 'Tidak Setuju', 'Setuju', 'Kurang Setuju', 'Penting', 'Kurang Setuju', 'Kurang Penting', 'Sangat Setuju', 'Penting', 'Setuju', 'Kurang Penting', 'Setuju', 'Kurang Penting', 'Setuju', 'Penting', 'Kurang Setuju', 'Penting', 'Setuju', 'Kurang Penting', 'Setuju', 'Penting', 'Kurang Setuju', 'Penting', 'Kurang Setuju', 'Penting');

-- --------------------------------------------------------

--
-- Table structure for table `kritik`
--

CREATE TABLE `kritik` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Kritik` text NOT NULL,
  `File` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kritik`
--

INSERT INTO `kritik` (`ID`, `Nama`, `Email`, `Kritik`, `File`) VALUES
(5, 'ricky', 'rickyrivaldo98@gmail.com', 'BMKG mantap', ''),
(6, 'awas', 'anas@gmail.com', 'ssss', 'logo2.png'),
(7, 'awas', 'Haikal@gmail.com', 'sssss', 'Laporan_Detail_Responden_(4).pdf'),
(8, 'Anas Alqoyyum', 'doublezero13@gmail.com', 'Jfhefiej', 'default.csv'),
(9, 'Anas Alqoyyum', 'doublezero13@gmail.com', 'hai', 'default1.csv'),
(10, 'jhjhjhjhjhjh', 'rahhh@gmail.com', 'jhjhjhjhjhj', '18225045_ml1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemohon`
--

CREATE TABLE `pemohon` (
  `idpemohon` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `informasi` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemohon1`
--

CREATE TABLE `pemohon1` (
  `idpemohon` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `identitas` varchar(100) NOT NULL,
  `informasi` varchar(200) NOT NULL,
  `suratpengantar` varchar(100) NOT NULL,
  `proposal` varchar(100) DEFAULT NULL,
  `suratpernyataan` varchar(100) DEFAULT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemohon2`
--

CREATE TABLE `pemohon2` (
  `idpemohon` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instansi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemohon3`
--

CREATE TABLE `pemohon3` (
  `idpemohon` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `informasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id_user` int(10) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id_user`, `Username`, `Password`, `Level`) VALUES
(1, '24060117130082', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_hujan`
--
ALTER TABLE `data_hujan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_responden`
--
ALTER TABLE `data_responden`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD UNIQUE KEY `ID` (`ID`),
  ADD UNIQUE KEY `ID_2` (`ID`);

--
-- Indexes for table `kritik`
--
ALTER TABLE `kritik`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pemohon`
--
ALTER TABLE `pemohon`
  ADD PRIMARY KEY (`idpemohon`);

--
-- Indexes for table `pemohon1`
--
ALTER TABLE `pemohon1`
  ADD PRIMARY KEY (`idpemohon`);

--
-- Indexes for table `pemohon2`
--
ALTER TABLE `pemohon2`
  ADD PRIMARY KEY (`idpemohon`);

--
-- Indexes for table `pemohon3`
--
ALTER TABLE `pemohon3`
  ADD PRIMARY KEY (`idpemohon`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_hujan`
--
ALTER TABLE `data_hujan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_responden`
--
ALTER TABLE `data_responden`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kritik`
--
ALTER TABLE `kritik`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `data_responden` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
