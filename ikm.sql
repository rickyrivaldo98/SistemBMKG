-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 11:41 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

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
(3, '5e3bffe2090be', 'Januari', '2019', '5e3bffe2090be.csv'),
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
(9, 'Anas Alqoyyum', 'doublezero13@gmail.com', 'hai', 'default1.csv');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `nolayanan` varchar(30) NOT NULL,
  `idpemohon` varchar(12) DEFAULT NULL,
  `layanan` text DEFAULT NULL,
  `disposisi` varchar(18) DEFAULT NULL,
  `ket` varchar(50) DEFAULT 'PERMOHONAN',
  `tgl` date DEFAULT NULL,
  `tgltarget` date DEFAULT NULL,
  `tgljadi` date DEFAULT NULL,
  `tglambil` date DEFAULT NULL,
  `tgldisposisi` date DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`nolayanan`, `idpemohon`, `layanan`, `disposisi`, `ket`, `tgl`, `tgltarget`, `tgljadi`, `tglambil`, `tgldisposisi`, `status`) VALUES
('1473', '1803BMKG0001', 'Curah Hujan Semarnag Timur ', '12345', 'SELESAI', '2018-03-20', '2018-03-23', '2018-03-23', '2018-03-27', '2018-03-22', ''),
('1474', '1803BMKG0001', ' Data CH Bulanan Kota Semarang', '198408112006042002', 'SELESAI', '2018-03-01', '2018-03-06', '2018-03-06', '2018-03-07', '2018-03-01', ''),
('1475', '1803BMKG0002', ' SKC Petir SIte Ujung Pabelan Kab. Semarang', '197604192008012015', 'SELESAI', '2018-03-01', '2018-03-05', '2018-03-05', '2018-03-12', '2018-03-01', ''),
('1476', '1803BMKG0003', ' CH Harian Februari 2018 Kandang serang Pekalongan ', '197611141997031001', 'SELESAI', '2018-03-02', '2018-03-14', '2018-03-14', NULL, '2018-03-13', ''),
('1477', '1803BMKG0004', ' CH Tahun 2017 WIlayah Demak dan Grobogan', '197611141997031001', 'SELESAI', '2018-03-02', '2018-03-14', '2018-03-14', '2018-03-14', '2018-03-13', ''),
('1478', '1803BMKG0005', ' CH Bulanan 2017 Kab. Pati', '197209051995032001', 'SELESAI', '2018-03-02', '2018-03-05', '2018-03-05', NULL, '2018-03-02', ''),
('1479', '1803BMKG0002', ' SKC Petir Site Lebakbarang Pekalongan', '198112052006042001', 'SELESAI', '2018-03-05', '2018-03-05', '2018-03-05', '2018-03-12', '2018-03-05', ''),
('1480', '1803BMKG0002', ' SKC Site Kedung ireng', '197604192008012015', 'SELESAI', '2018-03-05', '2018-03-06', '2018-03-06', '2018-03-12', '2018-03-05', ''),
('1481', '1803BMKG0006', ' SKC Site Balapulang Tegal', '197001281992022001', 'SELESAI', '2018-03-05', '2018-03-05', '2018-03-05', '2018-05-04', '2018-03-05', ''),
('1482', '1803BMKG0007', ' Data CH', '198112052006042001', 'SELESAI', '2018-03-06', '2018-03-06', '2018-03-06', '2018-03-08', '2018-03-06', ''),
('1483', '1803BMKG0008', ' SKC Site Klepu Thamrin Square Pati', '198408112006042002', 'SELESAI', '2018-03-06', '2018-03-06', '2018-03-06', '2018-03-07', '2018-03-06', ''),
('1484', '1803BMKG0009', ' CH Bulanan 2016-2017, Candi, Staklim, Tembalang, Tanjung Mas dan Tlogosari', '197209051995032001', 'SELESAI', '2018-03-06', '2018-03-06', '2018-03-06', '2018-03-09', '2018-03-06', ''),
('1485', '1803BMKG0010', ' SKC Site Ngaliyan', '197001281992022001', 'SELESAI', '2018-03-06', '2018-03-07', '2018-03-07', '2018-03-07', '2018-03-06', ''),
('1486', '1803BMKG0012', ' SKC Site Watugong Banyumanik', '197602231999031001', 'SELESAI', '2018-03-06', '2018-03-06', '2018-03-06', '2018-03-12', '2018-03-06', ''),
('1487', '1803BMKG0011', ' Data Suhu, RH dan CH Kaligawe Februari 2018', '198503082007012003', 'SELESAI', '2018-03-06', '2018-03-06', '2018-03-02', '2018-03-08', '2018-03-06', ''),
('1488', '1803BMKG0013', ' Data CH Gamer Februari 2018', '197602231999031001', 'SELESAI', '2018-03-06', '2018-03-06', '2018-03-06', '2018-03-06', '2018-03-06', ''),
('1489', '1803BMKG0014', ' Data CH Bulanan 2009-2018 Kaligawe', '198112052006042001', 'SELESAI', '2018-03-06', '2018-03-07', '2018-03-07', '2018-03-13', '2018-03-06', ''),
('1490', '1803BMKG0015', ' Data Iklim Wilayah Tegal, Cilacap, Banjarnegara dan Solo', '197209051995032001', 'SELESAI', '2018-03-07', '2018-03-09', '2018-03-09', '2018-03-19', '2018-03-07', ''),
('1491', '1803BMKG0016', 'Data CH dan Angin Des 2017 - Feb 2018', '198408112006042002', 'SELESAI', '2018-03-07', '2018-03-08', '2018-03-08', '2018-03-08', '2018-03-07', ''),
('1492', '1803BMKG0017', ' SKC Site Jl. Perintis Kemerdekaan Klaten', '198910102010122001', 'SELESAI', '2018-03-07', '2018-03-07', '2018-03-08', '2018-03-08', '2018-03-07', ''),
('1493', '1803BMKG0018', ' CH Okt 2017-Feb 2018 Bringin Ngaliyan', '197211131995031002', 'SELESAI', '2018-03-07', '2018-03-07', '2018-03-07', '2018-03-08', '2018-03-07', ''),
('1494', '1803BMKG0019', ' Data CH, RH & Suhu Tarubudaya 2015-2017', '197604192008012015', 'SELESAI', '2018-03-08', '2018-03-08', '2018-03-08', '2018-03-08', '2018-03-08', ''),
('1495', '1803BMKG0020', ' Analisa Iklim dan Distribusi CH PUrbalingga', '197001281992022001', 'SELESAI', '2018-03-06', '2018-03-08', '2018-03-08', NULL, '2018-03-06', ''),
('1496', '1803BMKG0021', ' SKC Majapahit Semarang', '197706282000121002', 'SELESAI', '2018-03-08', '2018-03-08', '2018-03-08', '2018-03-08', '2018-03-08', ''),
('1497', '1803BMKG0002', ' SKC Site Sedadi Grobogan', '198408112006042002', 'SELESAI', '2018-03-08', '2018-03-08', '2018-03-08', '2018-03-12', '2018-03-08', ''),
('1498', '1803BMKG0022', ' SKC Site Ledok Argomulya Salatiga', '197706282000121002', 'SELESAI', '2018-03-09', '2018-03-09', '2018-03-09', '2018-03-09', '2018-03-09', ''),
('1499', '1803BMKG0023', 'Data iklim ( CH , RH ,T Max Tmin ) daerah getas Salatiga Th 2017 ', '198503082007012003', 'SELESAI', '2018-03-12', '2018-03-12', '2018-03-12', '2018-03-26', '2018-03-12', ''),
('1500', '1803BMKG0024', ' Surat keterangan cuaca (petir) site Garung kab Wonosobo tgl 3/1/2018', '197211131995031002', 'SELESAI', '2018-03-12', '2018-03-12', '2018-03-12', '2018-03-13', '2018-03-12', ''),
('1501', '1803BMKG0024', ' Surat keterangan cuaca (petir) site Sapuran Wonosobo', '198408112006042002', 'SELESAI', '2018-03-12', '2018-03-12', '2018-03-12', '2018-03-13', '2018-03-12', ''),
('1502', '1803BMKG0025', ' Surat keterangan cuaca (petir) site Prawoto sukolilo kab Pati tgl 13-3-2018', '197604192008012015', 'SELESAI', '2018-03-13', '2018-03-13', '2018-03-13', '2018-03-14', '2018-03-13', ''),
('1503', '1803BMKG0026', ' Surat keterangan cuaca  (hujan petir) site Jl Semarang - bawen bergas kab Semarang', '197611141997031001', 'SELESAI', '2018-03-13', '2018-03-14', '2018-03-14', '2018-03-14', '2018-03-13', ''),
('1504', '1803BMKG0027', ' Data iklim ( curahy hujan , kelembaban , Angin , SPM ) th 2015 -2017 untuk wilayah Semarang', '197706282000121002', 'SELESAI', '2018-03-13', '2018-03-16', '2018-03-16', '2018-03-20', '2018-03-13', ''),
('1505', '1803BMKG0029', ' Data curah hujan harian  bulan Januari s/d Maret 2018 untuk wilayah Gunem kab Rembang', '197001281992022001', 'SELESAI', '2018-03-14', '2018-03-14', '2018-03-14', '2018-03-14', '2018-03-14', ''),
('1506', '1803BMKG0023', ' Data iklim cuarh hujan , suhu , Kelembaban bulan Nopember s/d Desember 2017 untuk wil Getas Salatiga', '198503082007012003', 'SELESAI', '2018-03-14', '2018-03-14', '2018-03-14', '2018-03-14', '2018-03-14', ''),
('1507', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Wangon kab Banyumas tgl 2/3/2018', '197602231999031001', 'SELESAI', '2018-03-14', '2018-03-14', '2018-03-14', '2018-03-14', '2018-03-14', ''),
('1508', '1803BMKG0030', ' Data iklim curah hujan , suhu , kelembaban , bulanan th 2015 s/d 2017 untuk wil Purwokerto', '197209051995032001', 'SELESAI', '2018-03-15', '2018-03-15', '2018-03-15', '2018-03-28', '2018-03-15', ''),
('1509', '1803BMKG0031', ' Prakiraan curah hujan dasarian II & III bulan Maret 2018 untuk daerah kudus dan weleri', '198112052006042001', 'SELESAI', '2018-03-15', '2018-03-15', '2018-03-15', '2018-03-15', '2018-03-15', ''),
('1510', '1803BMKG0032', ' Surat keterangan cuaca (petir) site Jl Papandayan Gajah mungkur Semarang tgl 9/3/2018', '198910102010122001', 'SELESAI', '2018-03-16', '2018-03-16', '2018-03-16', '2018-03-19', '2018-03-16', ''),
('1511', '1803BMKG0033', ' Data curah hujan harian Bulan Januari s/d Maret 2018 untuk daerah Kaliwungu dan Sikopek kab Kendal', '198408112006042002', 'SELESAI', '2018-03-16', '2018-03-16', '2018-03-16', '2018-03-16', '2018-03-16', ''),
('1512', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Ketawis kab purbalingga tgl 11/3/2018', '197604192008012015', 'SELESAI', '2018-03-19', '2018-03-19', '2018-03-19', '2018-03-27', '2018-03-19', ''),
('1513', '1803BMKG0034', ' Data suhu dan titik embun rata bulanan th 2009 untuk wilayah kota semarang', '197211131995031002', 'SELESAI', '2018-03-19', '2018-03-19', '2018-03-19', '2018-03-20', '2018-03-19', ''),
('1514', '1803BMKG0035', ' Data curah hujan bulanan th 2017 untuk wilayah Sayung dan Karanganyar kab Demak', '197706282000121002', 'SELESAI', '2018-03-19', '2018-03-19', '2018-03-19', '2018-03-22', '2018-03-19', ''),
('1515', '1803BMKG0036', ' Data curah hujan harian Bulan Januari s/d Februari 2018 Daerah Mlonggo Jepara', '197602231999031001', 'SELESAI', '2018-03-19', '2018-03-19', '2018-03-19', '2018-03-19', '2018-03-19', ''),
('1516', '1803BMKG0037', ' Data curah hujan bulan Desember 2017 s/d Maret 2018 untuk wilayah kaliwunggu Kendal', '198408112006042002', 'SELESAI', '2018-03-20', '2018-03-20', '2018-03-20', '2018-03-20', '2018-03-20', ''),
('1517', '1803BMKG0038', ' Data curah hujan Th 1999 s/d 2018 untuk wilayah Sukorejo , Patean , Singorojo', '197602231999031001', 'SELESAI', '2018-03-20', '2018-03-20', '2018-03-20', '2018-03-21', '2018-03-20', ''),
('1518', '1803BMKG0038', ' Surat keterangan cuaca ( Banjir ) site Bodri Kendal tgl 22/2/2018', '197209051995032001', 'SELESAI', '2018-03-20', '2018-03-20', '2018-03-20', '2018-03-21', '2018-03-20', ''),
('1519', '1803BMKG0002', ' Surat keterangan cuaca (Petir) site Pulau tirang ngaliyan Semarang tgl 9/3/2018', '197611141997031001', 'SELESAI', '2018-03-20', '2018-03-20', '2018-03-21', '2018-03-27', '2018-03-20', ''),
('1520', '1803BMKG0039', ' Data curah hujan Bulan Desember 2017 s/d  Februari 2018 untuk daerah candi Semarang', '198112052006042001', 'SELESAI', '2018-03-20', '2018-03-20', '2018-03-20', '2018-03-20', '2018-03-20', ''),
('1521', '1803BMKG0040', ' Data curah hujan tahun 2015 s/d 2017 untuk wilayah Airport Ayani Semarang', '197604192008012015', 'SELESAI', '2018-03-21', '2018-03-21', '2018-03-21', '2018-03-21', '2018-03-21', ''),
('1522', '1803BMKG0024', ' Surat keterangan cuaca site Ngadisono kab Wonosobo tgl11/2/2018', '197211131995031002', 'SELESAI', '2018-03-21', '2018-03-21', '2018-03-21', NULL, '2018-03-21', ''),
('1523', '1803BMKG0024', ' Surat keterangan cuaca (petir) site sukodadi kab banjarnegara tgl 1/2/2018', '197706282000121002', 'SELESAI', '2018-03-21', '2018-03-21', '2018-03-21', '2018-04-02', '2018-03-21', ''),
('1524', '1803BMKG0024', ' Surat keterangan cuaca (hujan petir) site wanadadi kab Banjarnegara tgl 8/2/2018', '198910102010122001', 'SELESAI', '2018-03-21', '2018-03-21', '2018-03-22', '2018-04-02', '2018-03-21', ''),
('1525', '1803BMKG0041', ' Data curah hujan th 2013-2017 untuk daerah kaligawe dan Sumir banyumas', '197001281992022001', 'SELESAI', '2018-03-21', '2018-03-21', '2018-03-21', '2018-04-02', '2018-03-21', ''),
('1526', '1803BMKG0042', ' Data curah hujan bulan Januari - Maret 2017 untuk wilayah Tanjung emas Semarang', '198408112006042002', 'SELESAI', '2018-03-21', '2018-03-21', '2018-03-21', '2018-03-21', '2018-03-21', ''),
('1527', '1803BMKG0043', ' Data curah hujan untuk wilayah Wonosobo 15 lokasi tahun 2017', '198408112006042002', 'SELESAI', '2018-03-22', '2018-03-22', '2018-03-22', NULL, '2018-03-22', ''),
('1528', '1803BMKG0044', ' Data curah hujan bulan Nopember 2017 - Maret 2018 untuk daerah purbalingga', '197611141997031001', 'SELESAI', '2018-03-22', '2018-03-22', '2018-03-22', '2018-03-27', '2018-03-22', ''),
('1529', '1803BMKG0002', ' Surat keterangan cuaca (petir) site cibunar kab Tegal tgl 21/3/2018', '197001281992022001', 'SELESAI', '2018-03-22', '2018-03-22', '2018-03-22', '2018-03-27', '2018-03-22', ''),
('1530', '1803BMKG0045', ' Surat keterangan cuaca (hujan) site limbangan kendal tgl 13/2/2018 ', '198910102010122001', 'SELESAI', '2018-03-23', '2018-03-24', '2018-03-24', '2018-03-27', '2018-03-23', ''),
('1531', '1803BMKG0046', ' Buku peta rawan banjir kota Semarang', '', 'SELESAI', '2018-03-23', '2018-03-23', '2018-03-23', '2018-03-23', '2018-03-23', ''),
('1532', '1803BMKG0047', ' Data Iklim (CH,H,RH,HH) tahun 2017 untuk daerah Borobudur, Getasan, Boyolali ', '197211131995031002', 'SELESAI', '2018-03-26', '2018-03-27', '2018-03-27', '2018-03-28', '2018-03-26', ''),
('1533', '1803BMKG0048', ' Data curah hujan bulan Januari - maret 2017 untuk daerah Kaligawe dan Candi kota Semarang  ', '198910102010122001', 'SELESAI', '2018-03-26', '2018-03-26', '2018-03-26', '2018-03-26', '2018-03-26', ''),
('1534', '1803BMKG0050', ' Data cuarh hujan bulan September 2017 - Januari 2018', '197602231999031001', 'SELESAI', '2018-03-26', '2018-03-26', '2018-03-26', '2018-03-26', '2018-03-26', ''),
('1535', '1803BMKG0051', ' Surat keterangan cuaca (hujan) site Mangkang kulon Semarang tgl 9 Februari 2018', '198408112006042002', 'SELESAI', '2018-03-27', '2018-03-28', '2018-03-27', '2018-03-29', '2018-03-27', ''),
('1536', '1803BMKG0052', ' Surat keterangan cuaca (Petir) site Pasar Ajibarang Banyumas tgl 11/10/2017 ', '197706282000121002', 'SELESAI', '2018-03-27', '2018-03-27', '2018-03-27', '2018-03-29', '2018-03-27', ''),
('1537', '1803BMKG0052', ' Surat keterangan cuaca (petir) site Banyumanis Jepara tgl 1/2/2018', '198112052006042001', 'SELESAI', '2018-03-27', '2018-03-27', '2018-03-27', '2018-03-29', '2018-03-27', ''),
('1538', '1803BMKG0052', ' Surat keterangan cuaca (petir) site Ngaliyan ngadisono wadaslintang kab Wonosobo tgl 16/2/2018 ', '197001281992022001', 'SELESAI', '2018-03-27', '2018-03-27', '2018-03-27', '2018-03-29', '2018-03-27', ''),
('1539', '1803BMKG0053', ' Data curah hujan bulan maret 2018 untuk daerah Lebak barang kab Pekalongan', '198910102010122001', 'SELESAI', '2018-03-27', '2018-03-29', '2018-03-28', '2018-03-28', '2018-03-27', ''),
('1540', '1803BMKG0054', ' Data Iklim (T,RH,CH,HH) untuk daerah Temanggung th 2016-2017', '197604192008012015', 'SELESAI', '2018-03-28', '2018-03-28', '2018-03-28', '2018-03-29', '2018-03-28', ''),
('1541', '1803BMKG0055', ' Data curah hujan bulan Oktober 2016 untuk daerah Gombel candi Semarang', '198210022006042005', 'SELESAI', '2018-03-28', '2018-03-28', '2018-03-28', '2018-03-29', '2018-03-28', ''),
('1542', '1803BMKG0056', ' Data Iklim (CH,RH,T) th 2015-2017 untuk daerah rendole Pati', '197211131995031002', 'SELESAI', '2018-03-29', '2018-03-29', '2018-03-29', '2018-04-03', '2018-03-29', ''),
('1543', '1803BMKG0057', ' Data curah hujan th 2017 untuk wilayah Paguyangan kab brebes', '197001281992022001', 'SELESAI', '2018-03-29', '2018-03-29', '2018-03-29', '2018-03-29', '2018-03-29', ''),
('1544', '1803BMKG0053', ' Data curah hujan tgl 21 - 31 Maret 2018 untuk wilayah Lebak barang pekalongan', '198910102010122001', 'SELESAI', '2018-04-03', '2018-04-02', '2018-04-02', '2018-04-03', '2018-04-02', ''),
('1545', '1804BMKG0001', ' Data curah hujan bulanan th 2017 untuk 10 lokasi di kab Semarang', '198408112006042002', 'SELESAI', '2018-04-02', '2018-04-03', '2018-04-02', '2018-04-04', '2018-04-02', ''),
('1546', '1804BMKG0002', ' Data curah hujan bulanan  th 2017 untuk 10 lokasi di Kab Blora', '197611141997031001', 'SELESAI', '2018-04-02', '2018-04-03', '2018-04-03', '2018-04-04', '2018-04-02', ''),
('1547', '1804BMKG0003', ' Data Curah hujan bulan Februari - Maret 2017 untuk Wilayah kaliwungu Kendal', '197604192008012015', 'SELESAI', '2018-04-02', '2018-04-03', '2018-04-02', '2018-04-03', '2018-04-02', ''),
('1548', '1804BMKG0004', ' Data prakiraan iklim Dasarian I bulan April Propinsi Jawa tengah', '198910102010122001', 'SELESAI', '2018-04-02', '2018-04-03', '2018-04-02', '2018-04-04', '2018-04-02', ''),
('1549', '1804BMKG0005', ' Surat keterangan cuaca (hujan angin) site Jl Gondang raya Tembalang Semarang igl 24 Maret 2018', '198112052006042001', 'SELESAI', '2018-04-02', '2018-04-03', '2018-04-02', '2018-04-03', '2018-04-02', ''),
('1550', '1804BMKG0007', ' Data curah hujan th 2017 10  lokasi dan data suhu th 2017 untuk  wilayah kab Jepara', '198503082007012003', 'SELESAI', '2018-04-03', '2018-04-04', '2018-04-03', '2018-04-04', '2018-04-03', ''),
('1551', '1804BMKG0008', ' Data kecepatan angin rata rata bulanan th 2017 untuk wilayah Semarang', '197602231999031001', 'SELESAI', '2018-04-03', '2018-04-03', '2018-04-03', '2018-04-03', '2018-04-03', ''),
('1552', '1804BMKG0009', ' Data curah hujan bulan Maret 2017 untuk  wilayah pelabuhan Kendal dan Mangkang ', '198910102010122001', 'SELESAI', '2018-04-03', '2018-04-04', '2018-04-03', '2018-04-04', '2018-04-03', ''),
('1553', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Klimas karang gede kab Boyolali tgl 22/3/2018', '197209051995032001', 'SELESAI', '2018-04-04', '2018-04-04', '2018-04-04', '2018-04-10', '2018-04-04', ''),
('1554', '1804BMKG0010', ' Data curah hujan bulanan th 2017 untuk daerah sayung Demak', '198910102010122001', 'SELESAI', '2018-04-04', '2018-04-04', '2018-04-04', '2018-04-04', '2018-04-04', ''),
('1555', '1804BMKG0015', ' Data curah hujan harian bulan Februari - Maret 2018 untuk daerah Larangan kab. Brebes ', '197001281992022001', 'SELESAI', '2018-04-04', '2018-04-04', '2018-04-04', '2018-04-04', '2018-04-04', ''),
('1556', '1804BMKG0011', ' Data curah hujan harian Bulan Januari - Maret 2018 untuk wilayah Wiradesa Pekalongan', '198408112006042002', 'SELESAI', '2018-04-05', '2018-04-05', '2018-04-05', '2018-04-06', '2018-04-05', ''),
('1557', '1804BMKG0014', ' Surat keterangan cuaca (petir) site Gunung wungkal tgl 25 - 2 - 2018', '197211131995031002', 'SELESAI', '2018-04-05', '2018-04-06', '2018-04-05', NULL, '2018-04-05', ''),
('1558', '1804BMKG0016', ' Data curah hujan bulanan Bln Februari - Maret 2018 daerah Karanganyar', '197604192008012015', 'SELESAI', '2018-04-05', '2018-04-06', '2018-04-06', '2018-04-10', '2018-04-05', ''),
('1559', '1803BMKG0036', ' Data curah hujan harian bulan Nopember 2017 kab Jepara', '197611141997031001', 'SELESAI', '2018-04-05', '2018-04-05', '2018-04-05', NULL, '2018-04-05', ''),
('1560', '1804BMKG0017', ' Surat keterangan cuaca (hujan angin) Desa Dlimas kec Ceper kab Klaten tgl 25 - 5 - 2018', '198503082007012003', 'SELESAI', '2018-04-05', '2018-04-05', '2018-04-05', '2018-04-05', '2018-04-05', ''),
('1561', '1804BMKG0018', ' Data curah hujan bulanan th 2016 daerah Klego kab Boyolali', '197602231999031001', 'SELESAI', '2018-04-06', '2018-04-06', '2018-04-06', '2018-04-06', '2018-04-06', ''),
('1562', '1804BMKG0019', ' Surat keterangan cuaca (Hujan angin) site kawasan industri candi Semarang  Tgl 17 - 3 - 2017', '197001281992022001', 'SELESAI', '2018-04-06', '2018-04-06', '2018-04-06', NULL, '2018-04-06', ''),
('1563', '1804BMKG0020', ' Surat keterangan cuaca (hujan) site Terboyo Genuk Semarang tgl 16-17/2/2018 ', '197706282000121002', 'SELESAI', '2018-04-09', '2018-04-10', '2018-04-09', '2018-04-10', '2018-04-09', ''),
('1564', '1804BMKG0021', ' Data curah hujan , hari hujan , suhu mak & min th 2017 untuk wilayah Temanggung', '197602231999031001', 'SELESAI', '2018-04-09', '2018-04-09', '2018-04-09', '2018-04-09', '2018-04-09', ''),
('1565', '1804BMKG0022', ' Data curah hujan, Curah hujan Maksimum th 2013 - 2017 dan prakiraan curah hujan dasarian  bln April -Desember 2018 untuk wilayah Tonjong Brebes', '197604192008012015', 'SELESAI', '2018-04-09', '2018-04-11', '2018-04-09', '2018-04-10', '2018-04-09', ''),
('1566', '1804BMKG0023', ' Surat keterangan cuaca (hujan) site Krenden Kec, Taman  Kab Pemalang  tgl 19-20/2-2018', '197001281992022001', 'SELESAI', '2018-04-10', '2018-04-10', '2018-04-10', '2018-04-11', '2018-04-10', ''),
('1567', '1803BMKG0002', 'Permohonan surat keterangan cuaca (petir) site kedawungtgl kec pulosari Kab Pemalang', '198112052006042001', 'SELESAI', '2018-04-11', '2018-04-12', '2018-04-12', '2018-04-24', '2018-04-11', ''),
('1568', '1804BMKG0025', ' Data curah hujan, peta distribusi curah hujan & Prakiraan curah hujan wil Kab Purbalingga', '197001281992022001', 'SELESAI', '2018-04-11', '2018-04-11', '2018-04-11', '2018-04-11', '2018-04-11', ''),
('1569', '1804BMKG0024', ' Data curah hujan bulan Nopember - Maret 2018 wilayah Tuntang kab Semarang', '197209051995032001', 'SELESAI', '2018-04-12', '2018-04-18', '2018-04-17', '2018-04-17', '2018-04-17', ''),
('1570', '1804BMKG0027', ' Surat keterangan cuaca (petir) site Songgom kab Brebes tgl15 maret 2018 ', '197611141997031001', 'SELESAI', '2018-04-13', '2018-04-13', '2018-04-13', '2018-04-13', '2018-04-13', ''),
('1571', '1804BMKG0028', ' Surat keterangan cuaca (hujan angin) site kawasan industri candi Ngaliyan Semarang tgl 21 Januari 2018', '198408112006042002', 'SELESAI', '2018-04-13', '2018-04-13', '2018-04-13', '2018-04-13', '2018-04-13', ''),
('1572', '1804BMKG0031', ' Data Klimatologi Tahun 2017 Wilayah Jawa tengah', '197602231999031001', 'SELESAI', '2018-04-13', '2018-04-16', '2018-04-24', '2018-05-02', '2018-04-16', ''),
('1573', '1804BMKG0029', ' Data curah hujan 20 tahun wilayah kab Banjarnegara ', '198503082007012003', 'SELESAI', '2018-04-13', '2018-04-17', '2018-04-27', NULL, '2018-04-13', ''),
('1574', '1804BMKG0030', ' Surat keterangan cuaca (petir) site Jl Menteri soepeno no.3 Semarang', '197706282000121002', 'SELESAI', '2018-04-15', '2018-04-17', '2018-04-17', '2018-04-17', '2018-04-16', ''),
('1575', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Kadumanis bag Brebes tgl 11-4-2018', '198408112006042002', 'SELESAI', '2018-04-16', '2018-04-18', '2018-04-17', '2018-04-26', '2018-04-16', ''),
('1576', '1803BMKG0037', ' Data curah hujan harian bulan Maret s/d April 2018 wilayah Sikopek Kab Kendal', '197611141997031001', 'SELESAI', '2018-04-16', '2018-04-16', '2018-04-16', '2018-04-17', '2018-04-16', ''),
('1577', '1804BMKG0032', ' Data curah hujan , suhu , kecepatan angin rata rata bulanan th 2015 -2017 wilayah UIN walisongo Semarang', '198112052006042001', 'SELESAI', '2018-04-17', '2018-04-19', '2018-04-18', '2018-04-20', '2018-04-17', ''),
('1578', '1804BMKG0033', ' Data curah hujan bulanan th 2008 Wilayah ngaliyan Semarang', '198408112006042002', 'SELESAI', '2018-04-17', '2018-04-18', '2018-04-18', '2018-04-18', '2018-04-17', ''),
('1579', '1803BMKG0039', ' Data curah hujan bulan Maret 2018 untuk daerah Candi Semarang', '197611141997031001', 'SELESAI', '2018-04-18', '2018-04-18', '2018-04-18', '2018-04-18', '2018-04-18', ''),
('1580', '1804BMKG0026', ' Permohonan data curah hujan bulanan Th 2008-2017 wilayah Kec Kajoran Kab Magelang', '197211131995031002', 'SELESAI', '2018-04-19', '2018-04-22', '2018-04-20', '2018-04-23', '2018-04-20', ''),
('1581', '1804BMKG0036', ' Data  curah hujan bulanan th 2008 - 2017 (10Th) wilayah Ambarawa', '197209051995032001', 'SELESAI', '2018-04-19', '2018-04-22', '2018-04-20', '2018-05-02', '2018-04-20', ''),
('1582', '1804BMKG0037', ' Surat keterangan cuaca (hujan lebat) site Desa Mindahan kec Bate alit kab Jepara tgl 12-3-2018', '197706282000121002', 'SELESAI', '2018-04-19', '2018-04-21', '2018-04-20', '2018-04-25', '2018-04-20', ''),
('1583', '1804BMKG0038', ' Surat keterangan cuaca (hujan petir) site desa Margosari kec Limbangan Kab Kendal tgl 5 April 2018', '198112052006042001', 'SELESAI', '2018-04-20', '2018-04-21', '2018-04-20', '2018-04-26', '2018-04-20', ''),
('1584', '1803BMKG0031', ' Prakiran curah hujan dasarian bulan Mei 2018 wil Jekulo kab Kudus', '197604192008012015', 'SELESAI', '2018-04-23', '2018-04-23', '2018-04-23', '2018-04-25', '2018-04-23', ''),
('1585', '1803BMKG0002', ' Surat keterangan cuaca  (petir) site Delanggu kab Klaten tgl 18/4 -2018', '198503082007012003', 'SELESAI', '2018-04-23', '2018-04-23', '2018-04-23', '2018-04-24', '2018-04-23', ''),
('1586', '1804BMKG0039', 'Data curah hujan th 2013 - 2017 wilayah Pabelan kab Sukoharjo ', '198408112006042002', 'SELESAI', '2018-04-24', '2018-04-23', '2018-04-23', '2018-04-23', '2018-04-23', ''),
('1587', '1804BMKG0040', ' Surat keterangan cuaca (hujan) site Jl.Jend Sudirman No 322 Semarang tgl. 5 April  2018', '198112052006042001', 'SELESAI', '2018-04-23', '2018-04-23', '2018-04-23', '2018-04-24', '2018-04-23', ''),
('1588', '1804BMKG0041', ' Surat keterangan cuaca (petir) site BSB Puri arga  Semarang tgl 21/4-2018', '198503082007012003', 'SELESAI', '2018-04-23', '2018-04-23', '2018-04-23', '2018-04-24', '2018-04-23', ''),
('1589', '1803BMKG0044', ' Data curah hujan 20 Maret - 20 April 2018 wil kota Purbalingga', '197602231999031001', 'SELESAI', '2018-04-23', '2018-04-23', '2018-04-23', '2018-04-25', '2018-04-23', ''),
('1590', '1804BMKG0042', ' Surat keterangan cuaca  (Petir) site Indomart sukun banyumanik Semarang tgl21/4-2018', '197209051995032001', 'SELESAI', '2018-04-24', '2018-04-24', '2018-04-24', '2018-04-24', '2018-04-24', ''),
('1591', '1804BMKG0043', ' Surat keterangan cuaca (hujan angin) site Indomart Jl Panglima Soedirman Juwana Pati tgl 20/4/2018\r\n', '197706282000121002', 'SELESAI', '2018-04-24', '2018-04-24', '2018-04-24', '2018-04-26', '2018-04-24', ''),
('1592', '1804BMKG0044', 'Surat keterangan cuaca  (petir) site SIS Jl Bukit candi golf No 20 Semarang tgl 15/2/2018 ', '197001281992022001', 'SELESAI', '2018-04-24', '2018-04-24', '2018-04-24', '2018-04-26', '2018-04-24', ''),
('1593', '1804BMKG0045', ' Data penyinaran matahari dan kecepatan angin rata rata bulanan th 2012 -2016 wil Tegal', '197211131995031002', 'SELESAI', '2018-04-25', '2018-04-26', '2018-04-26', '2018-04-27', '2018-04-25', 'BATAL'),
('1594', '1804BMKG0046', ' Data suhu dan kelembaban rata rata bulanan th 2012 - 2016 wil Tegal', '198910102010122001', 'SELESAI', '2018-04-25', '2018-04-26', '2018-04-25', '2018-04-27', '2018-04-25', ''),
('1595', '1804BMKG0047', ' data iklim ( T,FF,SS,RH)th2013-2017 untuk wilayah adi sumarmo', '197604192008012015', 'SELESAI', '2018-04-25', '2018-04-26', '2018-04-27', '2018-05-02', '2018-04-26', ''),
('1596', '1804BMKG0048', ' Surat keterangan cuaca (hujan petir) site kawasan industri terboyo Semarang tgl 23/4/2018', '197209051995032001', 'SELESAI', '2018-04-26', '2018-04-26', '2018-04-26', '2018-04-27', '2018-04-26', ''),
('1597', '1804BMKG0049', ' Suret keterangan cuaca (hujan) site Jl Kaligawe raya km 6 Semarang tgl 16-17 Februari 2018\r\n\r\n\r\n', '197001281992022001', 'SELESAI', '2018-04-26', '2018-04-27', '2018-04-27', '2018-05-28', '2018-04-26', ''),
('1598', '1803BMKG0012', ' Surat keterangan cuaca (petir) site Jl Letjend S Parman kel Sidomulyo Ungaran timur tgl 6/4/2018', '197001281992022001', 'SELESAI', '2018-04-26', '2018-04-26', '2018-04-26', '2018-05-03', '2018-04-26', ''),
('1599', '1803BMKG0012', ' Surat keterangan cuaca (petir) site Jatisari Semarang kec Boja kab Kendal tgl 17/3/2018', '197602231999031001', 'SELESAI', '2018-04-26', '2018-04-26', '2018-04-26', '2018-05-03', '2018-04-26', ''),
('1600', '1803BMKG0012', ' Surat keterangan cuaca (petir) site Baskoro kec Tembalang Semarang tgl 21/4/2018', '198503082007012003', 'SELESAI', '2018-04-26', '2018-04-26', '2018-04-26', '2018-05-03', '2018-04-26', ''),
('1601', '1803BMKG0012', ' Surat keterangan cuaca (petir) site Umbul sidomukti bulusan mulawarman Semarang tgl 21/4/2018', '198408112006042002', 'SELESAI', '2018-04-26', '2018-04-27', '2018-04-26', '2018-05-03', '2018-04-26', ''),
('1602', '1803BMKG0012', ' Surat keterangan cuaca (petir) site Ketileng Sendang mulyo SEmarang tgl 21/4/2018', '198112052006042001', 'SELESAI', '2018-04-26', '2018-04-26', '2018-04-26', '2018-05-03', '2018-04-26', ''),
('1603', '1804BMKG0050', ' Surat keterangan cuaca (petir) site Kedung mundu raya Sendang mulyo  Tembalang Semarang tgl 21/4/2018', '197706282000121002', 'SELESAI', '2018-04-27', '2018-04-27', '2018-04-27', '2018-05-02', '2018-04-27', ''),
('1604', '1804BMKG0050', ' Surat keterangan cuaca (petir) site Jl Bukit puncak no. 8  ngesrep Banyumanik Semarang tgl 21/4/2018', '197211131995031002', 'SELESAI', '2018-04-27', '2018-04-27', '2018-04-27', '2018-05-02', '2018-04-27', ''),
('1605', '1803BMKG0038', ' Data curah hujan harian bl Januari - Maret 2018 site 6 wil kab kendal dan curah hujan maximun bulan Februari 2018', '198503082007012003', 'SELESAI', '2018-04-27', '2018-04-28', '2018-04-27', '2018-04-30', '2018-04-27', ''),
('1606', '1804BMKG0051', 'Data curah hujan dan kimia air hujan th 2013-2017 di 35 wilayah kabupaten diJawa tengah', '198910102010122001', 'SELESAI', '2018-04-27', '2018-05-01', '2018-04-30', '2018-05-02', '2018-04-27', ''),
('1607', '1804BMKG0052', ' Data spm kota semarang th 20117-2018', '197602231999031001', 'SELESAI', '2018-04-30', '2018-04-30', '2018-04-30', '2018-05-04', '2018-04-30', 'BATAL'),
('1608', '1804BMKG0053', ' Data curah huajn bulanan tahun 2008 -20017 unuk wilayah Bawen kab Semarang', '197604192008012015', 'SELESAI', '2018-04-30', '2018-05-30', '2018-04-30', '2018-04-30', '2018-04-30', ''),
('1609', '1804BMKG0054', ' Data prakiraan curah hujan dasarian bulan Mei - juli 2018 untuk 6 wilayah di Jateng', '197211131995031002', 'SELESAI', '2018-04-30', '2018-05-02', '2018-05-02', '2018-05-04', '2018-04-30', ''),
('1610', '1805BMKG0002', ' Data curah hujan bulanan tahun 2017 untuk 10 lokasi di kab Semarang ', '197209051995032001', 'SELESAI', '2018-04-30', '2018-05-03', '2018-05-04', '2018-05-08', '2018-05-04', ''),
('1611', '1803BMKG0020', ' Data curah hujan dan hari hujan tahin 2012 - 2017 untuk wil purbalingga', '198112052006042001', 'SELESAI', '2018-04-30', '2018-04-30', '2018-04-30', '2018-05-01', '2018-04-30', ''),
('1612', '1805BMKG0004', ' Data suhu , rata rata bulanan th 2002,2005,2008.2011,2014,2017 wil Adi sumarmo', '197604192008012015', 'SELESAI', '2018-05-03', '2018-05-03', '2018-05-03', NULL, '2018-05-03', ''),
('1613', '1805BMKG0005', ' Data curah hujan tahunan th 2005, 2010, 2015 untuk 10 lokasi di kab Banjarnegara', '198112052006042001', 'SELESAI', '2018-05-03', '2018-05-04', '2018-05-04', NULL, '2018-05-03', ''),
('1614', '1805BMKG0006', ' Data klasifikasi musim, PH air hujan, curah hujan , angin wil Semarang barat th 2015-2017', '197211131995031002', 'SELESAI', '2018-05-04', '2018-05-05', '2018-05-05', '2018-05-09', '2018-05-04', ''),
('1615', '1805BMKG0009', ' Surat keterangan cuaca (angin ) siteJl Imam bonjol Semarang Tgl 2 Mei 2018', '198408112006042002', 'SELESAI', '2018-05-04', '2018-05-04', '2018-05-04', '2018-05-07', '2018-05-04', ''),
('1616', '1803BMKG0002', ' Surat keterangan cuaca (petir) Site Imam suprapto Tembalang Semarang tgl 21/4/2018', '197602231999031001', 'SELESAI', '2018-05-04', '2018-05-04', '2018-05-04', '2018-05-15', '2018-05-04', ''),
('1617', '1805BMKG0007', ' Surat leterangan cuaca (petir) site Sobo kec Juwangi kab Grobogan tgl27/12/2018', '197604192008012015', 'SELESAI', '2018-05-04', '2018-05-04', '2018-05-04', '2018-05-31', '2018-05-04', ''),
('1618', '1805BMKG0008', ' Surat keterangan cuaca (hujan angin)site Kedun gdowo, Kaliwungu kab Kudus tgl 24/4-2018', '198910102010122001', 'SELESAI', '2018-05-04', '2018-05-04', '2018-05-04', '2018-05-11', '2018-05-04', ''),
('1619', '1805BMKG0012', ' Surat keterangan cuaca (petir) site Bendo kec Sluke kab Rembang tgl 1/3-2018', '197001281992022001', 'SELESAI', '2018-05-07', '0000-00-00', '2018-05-07', '2018-05-07', '2018-05-07', ''),
('1620', '1805BMKG0011', ' Data curah hujan Bln Januari 2016 - April 2018 unuk wilayah Cilacap , Banyumas , Kebumen , Purworejo', '198503082007012003', 'SELESAI', '2018-05-07', '0000-00-00', '2018-05-07', '2018-05-08', '2018-05-07', ''),
('1621', '1805BMKG0010', ' Surat keterangan cuaca (hujan angin) site Jl Gotong royong No 37 Surakarta                  tgl 17/4-2018\r\n', '198112052006042001', 'SELESAI', '2018-05-07', '0000-00-00', '0000-00-00', '2018-05-09', '2018-05-07', ''),
('1622', '1805BMKG0013', ' Data penguapan th 2006 - 2015 wil Staklim Semarang   ', '197604192008012015', 'SELESAI', '2018-05-09', '2018-05-11', '2018-05-11', '2018-05-16', '2018-05-09', ''),
('1623', '1805BMKG0014', ' Suret keterangan cuaca (hujan angin) site Indomart banjarsari Tembalang tgl 7/5-2018', '197001281992022001', 'SELESAI', '2018-05-09', '2018-05-11', '2018-05-11', NULL, '2018-05-09', ''),
('1624', '1805BMKG0011', ' Data curah hujan & angin bulanan th 2013 -2017 wil. Mojotengah wonosobo', '197706282000121002', 'SELESAI', '2018-05-09', '0000-00-00', '2018-05-11', '2018-05-18', '2018-05-09', ''),
('1625', '1805BMKG0011', ' Data curah hujan  & angin bulanan th 2013 - 2017 wil, Karangwuni Pekalongan', '197602231999031001', 'SELESAI', '2018-05-09', '1900-11-09', '2018-05-09', '2018-05-18', '2018-05-09', ''),
('1626', '1803BMKG0024', ' Surat keteranagn cuaca (hujan petir) site susukan kab Banjarnegara tgl 8/3-2018 ', '198910102010122001', 'SELESAI', '2018-05-09', '2018-05-11', '2018-05-11', '2018-05-30', '2018-05-09', ''),
('1627', '1803BMKG0024', ' Surat keterangan cuaca (hujan petir) site Bawang kab Banjarnegara tgl 8/3-2018', '198503082007012003', 'SELESAI', '2018-05-09', '0000-00-00', '2018-05-11', '2018-05-30', '2018-05-09', ''),
('1628', '1803BMKG0024', ' Surat leterangan cuaca (hujan petir) site Pagedongan tgl 6/3-2018', '198112052006042001', 'SELESAI', '2018-05-09', '0000-00-00', '2018-05-11', '2018-05-30', '2018-05-09', ''),
('1629', '1805BMKG0015', ' Data suhu , kelembaban , curah hujan th 2013-2017 wilayah Sempor  ', '198408112006042002', 'SELESAI', '2018-05-09', '2018-05-10', '2018-05-09', '2018-05-31', '2018-05-09', ''),
('1630', '1805BMKG0016', ' Data suhu udara maksimum 2017 (tanggal & bulan)', '197211131995031002', 'SELESAI', '2018-05-09', '0000-00-00', '2018-05-11', '2018-05-14', '2018-05-09', ''),
('1631', '1803BMKG0026', ' Surat keterangan cuaca (hujan petir) site Semarang - bawen km 28 bergas kab SEmarang', '197604192008012015', 'SELESAI', '2018-05-09', '2018-05-11', '2018-05-11', '2018-05-23', '2018-05-09', ''),
('1632', '1805BMKG0017', ' Data curah hujan , angin , suhu udara tahunan th 1987 - wilayah Ngablak , Getasan , Cepogo', '197706282000121002', 'PROSES', '2018-05-14', '0000-00-00', NULL, NULL, '2018-05-14', ''),
('1633', '1804BMKG0003', ' Data curah hujan bulan April 2018 wilayah Sikopek Kaliwungu kab Kendal', '197611141997031001', 'SELESAI', '2018-05-14', '2018-05-14', '2018-05-14', '2018-05-14', '2018-05-14', ''),
('1634', '1805BMKG0018', ' Data curah hujan harian bulan Februari - April 2018 wil Batursari Klipang Semarang', '197211131995031002', 'SELESAI', '2018-05-14', '2018-05-14', '2018-05-14', '2018-05-15', '2018-05-14', ''),
('1635', '1805BMKG0019', ' Data curah hujan maximum bulanan th 2008-2017 wil Wonosobo , Banjarnegara , Banyumas', '198503082007012003', 'SELESAI', '2018-05-14', '2018-05-15', '2018-05-15', '2018-05-15', '2018-05-14', ''),
('1636', '1805BMKG0008', ' Surat keterangan cuaca (hujan) site Kedungdowo Kaliwunggu kab Kudus tgl 24/4-2018', '198910102010122001', 'SELESAI', '2018-05-14', '2018-05-15', '2018-05-15', NULL, '2018-05-14', ''),
('1637', '1805BMKG0020', ' Surat keterangan cuaca (petir) site Kemudo prambanan kab Klaten tgl 7/4-2018', '197209051995032001', 'SELESAI', '2018-05-14', '2018-05-15', '2018-05-15', '2018-05-15', '2018-05-14', ''),
('1638', '1803BMKG0032', ' Surat keterangan cuaca (petir) site Nabul kec Tahunan kab Jepara tgl  12/3-2018', '198503082007012003', 'SELESAI', '2018-05-15', '2018-05-15', '2018-05-15', '2018-05-16', '2018-05-15', ''),
('1639', '1805BMKG0021', ' Data curah hujan , suhu , penyinaran matahari  th 2013 - 2017 wil Blora , Sragen , Rembang ,  Pati ', '197001281992022001', 'SELESAI', '2018-05-15', '2018-05-15', '2018-05-15', '2018-05-16', '2018-05-15', ''),
('1640', '1805BMKG0022', ' Data curah hujan dan suhu bulanan th 2004 - 2014 wil Petungtriono kab Pekalongan', '198910102010122001', 'SELESAI', '2018-05-16', '2018-05-16', '2018-05-16', '2018-07-16', '2018-05-16', ''),
('1641', '1805BMKG0023', ' Data suhu dan kelembaban rata rata bulanan bulan Maret dan April 2018 wil Stamet Tegal', '197602231999031001', 'SELESAI', '2018-05-17', '2018-05-17', '2018-05-17', '2018-05-18', '2018-05-17', ''),
('1642', '1805BMKG0024', ' Data radiasi matahari th 2017 wilayah  kota Semarang ', '197611141997031001', 'SELESAI', '2018-05-21', '2018-05-22', '2018-05-22', '2018-05-24', '2018-05-22', ''),
('1643', '1803BMKG0012', ' Surat keterangan cuaca (petir) site Jetak sidoharjo kab Sragen tgl 29/4-2018 ', '197706282000121002', 'SELESAI', '2018-05-23', '2018-05-23', '2018-05-23', '2018-05-31', '2018-05-23', ''),
('1644', '1803BMKG0012', ' Surat keterangan cuaca  (petir) site Tepisari jaya Indoku kab Sukoharjo tgl 22/4-2018 ', '198408112006042002', 'SELESAI', '2018-05-23', '2018-05-23', '2018-05-23', '2018-05-31', '2018-05-23', ''),
('1645', '1803BMKG0024', ' Surat keterangan cuaca  (petir) site Anjasmoro Semarang tgl 5/4-2018 ', '197211131995031002', 'SELESAI', '2018-05-23', '2018-05-23', '2018-05-23', '2018-05-30', '2018-05-23', ''),
('1646', '1805BMKG0025', ' Data suhu udara rata rata bulanan th 2015 - 2018 wilayah kota Semarang', '197001281992022001', 'SELESAI', '2018-05-23', '2018-05-23', '2018-05-23', '2018-05-24', '2018-05-23', ''),
('1647', '1805BMKG0026', ' Data curah hujan bulanan th 2017 wilayah kab Kendal 10 lokasi ', '197611141997031001', 'SELESAI', '2018-05-23', '2018-05-24', '2018-05-23', '2018-05-28', '2018-05-23', ''),
('1648', '1805BMKG0027', ' Data curah hujan tahunan th 2017 wilayah kota Semarang 8 lokasi', '197209051995032001', 'SELESAI', '2018-05-23', '2018-05-24', '2018-05-24', '2018-07-11', '2018-05-23', ''),
('1649', '1803BMKG0008', ' Surat keterangan cuaca  (petir)  site PTPN Beji 2 Kab Jepara tgl 16/5-2018', '197604192008012015', 'SELESAI', '2018-05-28', '2018-05-28', '2018-05-28', '2018-05-28', '2018-05-28', ''),
('1650', '1805BMKG0028', ' Data curah hujan th 2008-2017 , data suhu dan Intensitas matahari th 2013-2017 wilayah kec kaliori dan kec Rembang kab Rembang', '198408112006042002', 'SELESAI', '2018-05-28', '2018-05-28', '2018-05-28', '2018-05-28', '2018-05-28', ''),
('1651', '1805BMKG0029', ' Data suhu , kelembaban  , angin , lama penyinaran matahari th 2017 wil Stamet Tegal', '197602231999031001', 'SELESAI', '2018-05-30', '2018-05-30', '2018-05-30', '2018-05-30', '2018-05-30', ''),
('1652', '1805BMKG0030', ' Data curah hujan bulanan  th 2015 - 2018 wil Purworejo ', '198112052006042001', 'SELESAI', '2018-05-31', '2018-05-31', '2018-05-31', '2018-05-31', '2018-05-31', ''),
('1653', '1805BMKG0031', ' Data curah hujan  bulan Januari - April 2018 wil Kebumen  ', '197611141997031001', 'SELESAI', '2018-05-31', '0000-00-00', '2018-06-04', '2018-06-04', '2018-05-31', ''),
('1654', '1805BMKG0032', ' Data kecepatan angin dan intensitas radiasi matahari bulan Mei 2018 wil Tanjung emas Semarang', '197209051995032001', 'SELESAI', '2018-05-31', '0000-00-00', '2018-06-04', '2018-06-04', '2018-06-04', ''),
('1655', '1806BMKG0001', ' Data curah hujan bulanan tahun 2006 - 2015 wilayah Ngaliyan Semarang  ', '197602231999031001', 'SELESAI', '2018-06-05', '2018-06-06', '2018-06-06', '2018-06-06', '2018-06-05', ''),
('1656', '1806BMKG0002', 'Data curah hujan , suhu dan kelembaban  bulan Maret - April 2018 wil Temanggung', '198408112006042002', 'SELESAI', '2018-06-05', '2018-06-05', '2018-06-05', '2018-06-05', '2018-06-05', ''),
('1657', '1806BMKG0003', 'Data curah hujan th 2008-2017 , data suhu , penyinaran matahari , kecepatan angin dan kelembaban th 2017 wilayah Staklim semarang', '197001281992022001', 'SELESAI', '2018-06-05', '2018-06-06', '2018-06-06', '2018-06-07', '2018-06-05', ''),
('1658', '1806BMKG0004', ' Data curah hujan , suhu , kelembaban , kecepatan angin dan tinggi gelombang tahun 1977 -2017 wil Staklim semarang dan Stamet tegal', '197604192008012015', 'SELESAI', '2018-06-06', '0000-00-00', '2018-06-15', '2018-06-26', '2018-06-07', ''),
('1659', '1806BMKG0005', ' Data curah hujan , suhu , angin , kelembaban th 1977 - 2017 wilayah stamet Tegal , Staklim Semarang', '197611141997031001', 'SELESAI', '2018-06-06', '2018-06-08', '2018-06-07', '2018-06-08', '2018-06-07', ''),
('1660', '1806BMKG0006', ' Data curah hujan , suhu , angin tahun 2016 - 2018 wilayah kab Pati', '197211131995031002', 'SELESAI', '2018-06-06', '0000-00-00', '2018-06-07', '2018-07-12', '2018-06-07', ''),
('1661', '1806BMKG0007', ' Data curah hujan tahun 2017 wilayah demak 10 lokasi', '197611141997031001', 'SELESAI', '2018-06-07', '2018-06-08', '2018-06-08', '2018-06-21', '2018-06-07', ''),
('1662', '1806BMKG0008', ' Data kecepatan angin , kelembaban , suhu , tekanan udara , curah hujan  wil staklim Semarang th 2013 - 2017', '198112052006042001', 'SELESAI', '2018-06-07', '0000-00-00', '2018-06-08', NULL, '2018-06-07', ''),
('1663', '1803BMKG0024', ' Surat keterangan cuaca ( Hujan petir ) site Terminal Banyumanik Semarang tgl 21 Mei 2018', '197706282000121002', 'SELESAI', '2018-06-22', '1900-11-22', '2018-06-22', '2018-06-26', '2018-06-22', ''),
('1664', '1803BMKG0002', ' Surat keterangan cuaca ( petir ) site Baleharjo kab Sragen tgl 11 Juni 2018', '198503082007012003', 'SELESAI', '2018-06-22', '1900-11-22', '2018-06-22', '2018-06-28', '2018-06-22', ''),
('1665', '1806BMKG0009', ' Data curah hujan , kelembaban , suhu th 2018 wilayah Temanggung', '197209051995032001', 'SELESAI', '2018-06-28', '2018-06-29', '2018-06-28', '2018-07-02', '2018-06-28', ''),
('1666', '1806BMKG0010', ' Data curah hujan bulan April s/d Juni 2018 wilayah Bringin Semarang', '197602231999031001', 'SELESAI', '2018-06-29', '2018-06-29', '2018-06-29', '2018-06-29', '2018-06-29', ''),
('1667', '1807BMKG0001', ' Data iklim kota Semarang tahun 2017', '197602231999031001', 'SELESAI', '2018-07-03', '2018-07-03', '2018-07-03', '2018-07-03', '2018-07-02', ''),
('1668', '1807BMKG0002', ' Data curah hujan bulanan bulan Juni 2017 - Mei 2018 wilayah kota Semarang', '198503082007012003', 'SELESAI', '2018-07-04', '2018-07-04', '2018-07-04', '2018-07-10', '2018-07-04', ''),
('1669', '1807BMKG0003', ' Data curah hujan bulanan tahun 2016 Kabupaten Rembang', '197602231999031001', 'SELESAI', '2018-07-05', '2018-07-05', '2018-07-05', '2018-07-05', '2018-07-05', ''),
('1670', '1807BMKG0004', 'Data curah hujan ( 2008 - 2012 ) dan hari hujan ( 2008 - 2017 ) wilayah Tunjungan Kab. Blora ', '198408112006042002', 'SELESAI', '2018-07-06', '2018-07-07', '2018-07-06', '2018-07-06', '2018-07-06', ''),
('1671', '1807BMKG0005', 'Data curah hujan maksimum Kec. Gunungpati Kota Semarang bulan Desember 2016 s/d Februari 2017', '198910102010122001', 'SELESAI', '2018-07-10', '2018-07-10', '2018-07-10', '2018-07-10', '2018-07-10', ''),
('1672', '1807BMKG0006', ' Data curah hujan Tahun 2017 wilayah Kec. Jepara Kab. Jepara', '197211131995031002', 'SELESAI', '2018-07-10', '2018-07-12', '2018-07-12', '2018-07-11', '2018-07-11', ''),
('1673', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Pangkah Jl. Bogares Kidul Kel. Bogares Kidul Kec. Pangkag Kab. Tegal Tanggal 26 Juni 2018', '197211131995031002', 'SELESAI', '2018-07-11', '2018-07-12', '2018-07-11', '2018-07-11', '2018-07-11', ''),
('1674', '1807BMKG0007', 'Surat keterangan cuaca (hujan dan petir) desa Tanjungharjo Kec. Ngaringan Kab. Grobogan tanggal 25 Juni 2018', '198112052006042001', 'SELESAI', '2018-07-12', '2018-07-13', '2018-07-13', '2018-07-13', '2018-07-12', ''),
('1675', '1805BMKG0017', ' Data suhu dan curah hujan tahunan tahun 1987 - 2017 wilayah magelang, semarang, dan boyolali', '198503082007012003', 'SELESAI', '2018-07-12', '2018-07-13', '2018-07-13', '2018-07-16', '2018-07-12', ''),
('1676', '1807BMKG0008', ' Surat keterangan cuaca (banjir rob) Wilayah Pekalongan barat 23 Mei n2018', '198408112006042002', 'SELESAI', '2018-07-13', '2018-07-13', '2018-07-13', '2018-07-25', '2018-07-13', ''),
('1677', '1807BMKG0009', ' Surat keterangan cuaca (petir) site Ngadirojo jatipuro Kab Wonogiri tanggal 15/03- 2018', '197706282000121002', 'SELESAI', '2018-07-16', '2018-07-16', '2018-07-16', '2018-07-16', '2018-07-16', ''),
('1678', '1807BMKG0010', ' Data curah hujan bulan januari - Juni 2018 wilayah Staklim , Stamar , Tlogosari , Candi Semarang', '197611141997031001', 'SELESAI', '2018-07-16', '2018-07-16', '2018-07-16', '2018-07-16', '2018-07-16', ''),
('1679', '1803BMKG0052', ' Surat keterangan cuaca (petir) site Poncorejo gemuh  kab Kendal Tanggal 10/3-2018  ', '197209051995032001', 'SELESAI', '2018-07-17', '2018-07-17', '2018-07-17', '2018-07-20', '2018-07-17', ''),
('1680', '1803BMKG0052', ' Surat keterangan cuaca (petir) site Mangkang Ngaliyan kota SEmarang tanggal 5/2-2018', '197001281992022001', 'SELESAI', '2018-07-17', '2018-07-17', '2018-07-17', '2018-07-20', '2018-07-17', ''),
('1681', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Baleharjo kabupaten Sragen tanggal 11/6-2018', '198503082007012003', 'SELESAI', '2018-07-17', '2018-07-17', '2018-07-17', '2018-07-18', '2018-07-17', ''),
('1682', '1807BMKG0011', ' Surat keterangan cuaca (Angin kencang) site Wonodri krajan tanggal 15/7-2018', '197602231999031001', 'SELESAI', '2018-07-17', '2018-07-17', '2018-07-17', '2018-07-17', '2018-07-17', ''),
('1683', '1807BMKG0012', ' Data curah hujan dan hari hujan  tahun 2017 wilayah Semarang utara', '', 'SELESAI', '2018-07-17', '2018-07-17', '2018-07-17', '2018-07-17', '2018-07-17', ''),
('1684', '1807BMKG0013', ' Data curah hujan tahun 2016 wilayah Polanharjo & Pasung kab Klaten  Dan Tanon kab Sragen', '197602231999031001', 'SELESAI', '2018-07-23', '2018-07-24', '2018-07-24', '2018-07-30', '2018-07-23', ''),
('1685', '1807BMKG0014', ' Surat keterangan cuaca (Hujan) site Puri anjasmoro Semarang tgl 22-23 Juni 2018', '197611141997031001', 'SELESAI', '2018-07-23', '2018-07-23', '2018-07-23', '2018-07-24', '2018-07-23', ''),
('1686', '1807BMKG0015', ' Data curah hujan , suhu , kelembaban , penyinaran matahari , angin wilayah kedung jati kab Grobogan tahun 2017 -2018', '198408112006042002', 'SELESAI', '2018-07-23', '2018-07-23', '2018-07-25', '2018-07-25', '2018-07-23', ''),
('1687', '1807BMKG0016', ' Data curah hujan  , kelembaban , penyinaran matahari , angin wilayah Jawa tengah tahun 2007 - 2017', '197604192008012015', 'SELESAI', '2018-07-10', '2018-07-20', '2018-07-20', '2018-07-20', '2018-07-10', ''),
('1688', '1807BMKG0017', ' Data curah hujan Maksium harian th 2012 - 2017 wilayah Kerjo  & Kemuning  kabupaten Karanganyar', '197706282000121002', 'PROSES', '2018-07-23', '0000-00-00', NULL, NULL, '2018-07-23', ''),
('1689', '1807BMKG0018', 'Data Curah hujan dan Suhu rata rata , Suhu maksimum dan minimum tahun 2012 Wil Adi sumarmo', '198910102010122001', 'SELESAI', '2018-07-23', '2018-07-23', '2018-07-23', '2018-07-24', '2018-07-23', ''),
('1690', '1807BMKG0019', ' Data lama penyinaran  , radiasi matahari , suhu rata rata wilayah kota Semarang th 2015  , 2016 , 2017', '198408112006042002', 'SELESAI', '2018-07-17', '2018-07-17', '2018-07-17', '2018-07-17', '2018-07-17', ''),
('1691', '1807BMKG0020', ' Data curah hujan tahun 2008 -2017 wilayah Rembang , Pati , Semarang , Jepara , Demak', '197001281992022001', 'SELESAI', '2018-07-26', '2018-07-27', '2018-07-27', '2018-07-27', '2018-07-26', ''),
('1692', '1807BMKG0021', ' Prakiraan curah hujan dasarian bulan Agustus , September , Oktober  2018 wilayah Mijen Semarang', '197209051995032001', 'SELESAI', '2018-07-26', '2018-07-26', '2018-07-26', '2018-07-30', '2018-07-26', ''),
('1693', '1807BMKG0022', ' Data curah hujan tahun 2000 - 2018 wilayah Ambarawa', '197211131995031002', 'SELESAI', '2018-07-26', '2018-07-26', '2018-07-27', '2018-07-27', '2018-07-26', ''),
('1694', '1807BMKG0023', ' Data curah hujan tahun 2008 - 2017 wilayah pegandon kab kendal', '197602231999031001', 'SELESAI', '2018-07-27', '2018-07-27', '2018-07-27', '2018-07-27', '2018-07-27', ''),
('1695', '1807BMKG0024', ' Surat keterangan cuaca (Petir) site Jl Bukit lawu Ngesrep Semarang selatan tanggal 23/6-2018', '198112052006042001', 'SELESAI', '2018-07-30', '2018-07-30', '2018-07-30', '2018-07-31', '2018-07-30', ''),
('1696', '1806BMKG0001', ' Data curah hujan maximum bulanan tahun 2008 - 2017 wilayah Gunungpati dan Tugu Semarang', '197604192008012015', 'SELESAI', '2018-07-30', '2018-07-31', '2018-08-01', '2018-08-02', '2018-07-30', ''),
('1697', '1807BMKG0025', ' Surat keterangan cuaca (angin) site Jl Raya Rembang - Pamotan clangapan kab Rembang Tgl 30 /7-2018', '197706282000121002', 'SELESAI', '2018-07-31', '2018-08-02', '2018-08-03', '2018-08-03', '2018-08-01', ''),
('1698', '1807BMKG0021', ' Prakiraan curah hujan dasarian bulan Agustus s/d Desember 2018 wilayah Jekulo kab Kudus', '197602231999031001', 'SELESAI', '2018-08-01', '2018-08-02', '2018-08-01', '2018-08-15', '2018-08-01', ''),
('1699', '1803BMKG0052', ' Surat keterangan cuaca (petir) site Talun kab Pekalongan tanggal  23/5-2018', '197001281992022001', 'SELESAI', '2018-08-01', '2018-08-02', '2018-08-01', '2018-08-23', '2018-08-01', ''),
('1700', '1803BMKG0052', ' Surat keterangan cuaca (Petir) site Medayu linggasari kab . Banjarnegara tanggal  28/4-2018', '197209051995032001', 'SELESAI', '2018-08-01', '2018-08-02', '2018-08-02', '2018-08-23', '2018-08-01', ''),
('1701', '1805BMKG0012', 'Surat keterangan cuaca (petir ) site Bendo sluke kab Rembang tanggal1 Maret 2018', '198910102010122001', 'SELESAI', '2018-08-02', '2018-08-02', '2018-08-02', '2018-08-03', '2018-08-02', ''),
('1702', '1808BMKG0004', ' Data curah hujan dan hari hujan tahun 2017 - 2018 wilayah Purbalingga dan Banyumas', '198408112006042002', 'SELESAI', '2018-08-06', '2018-08-03', '2018-08-03', '2018-08-03', '2018-08-03', ''),
('1703', '1808BMKG0003', ' Data curah hujan bulana tahun 2008 s/d 2018 wilayah Colomadu dan surat keterangan curah hujan tertinggi antara th 1986 -2018 wilayah colomadu Karanganyar', '197602231999031001', 'SELESAI', '2018-08-06', '2018-08-06', '2018-08-06', '2018-08-06', '2018-08-06', ''),
('1704', '1808BMKG0001', ' Data  intensitas dan radiasi matahari th 2014 - 2018 wilayah kota Semarang', '198112052006042001', 'SELESAI', '2018-08-06', '2018-08-07', '2018-08-06', '2018-08-08', '2018-08-06', ''),
('1705', '1808BMKG0002', ' Data waktu terbit tenggelam matahari tahun 2014 - 2018 wilayah kota Semarang ', '198408112006042002', 'SELESAI', '2018-08-06', '2018-08-06', '2018-08-06', '2018-08-08', '2018-08-06', ''),
('1706', '1808BMKG0005', ' Surat keterangan cuaca (angin kencang) site rest area tol ungaran tgl2/8- 2018', '197706282000121002', 'SELESAI', '2018-08-06', '2018-08-06', '2018-08-06', '2018-08-07', '2018-08-06', ''),
('1707', '1808BMKG0006', ' Data suhu harian rata rata bulan Agustus 2017', '197211131995031002', 'SELESAI', '2018-08-07', '2018-08-07', '2018-08-06', '2018-08-08', '2018-08-07', ''),
('1708', '1807BMKG0009', ' Daa curah huajn , angin , cuaca tanggal 27 , 28 , 29 Nopember 2017 wilayah karang tengah kab Wonogiri', '198910102010122001', 'SELESAI', '2018-08-07', '1900-11-08', '2018-08-08', '2018-08-09', '2018-08-07', ''),
('1709', '1808BMKG0007', ' Surat keterangan cuaca angin dan suhu site Jl Muwardi Salatiga tanggal 3/8-2018', '197706282000121002', 'SELESAI', '2018-08-07', '1900-11-08', '2018-08-08', '2018-08-08', '2018-08-07', ''),
('1710', '1808BMKG0008', ' Data curah huajn tahun 2017 wil kab Semarang dan Kab Temanggung', '197611141997031001', 'SELESAI', '2018-08-07', '1900-11-08', '2018-08-08', '2018-08-14', '2018-08-07', '');
INSERT INTO `pelayanan` (`nolayanan`, `idpemohon`, `layanan`, `disposisi`, `ket`, `tgl`, `tgltarget`, `tgljadi`, `tglambil`, `tgldisposisi`, `status`) VALUES
('1711', '1808BMKG0009', ' Data curah hujan bulanan dan hari hujan bulan Agustus s/d Desembert 2017 wilayah Batur kab Banjarnegara', '198408112006042002', 'SELESAI', '2018-08-07', '2018-08-08', '2018-08-08', NULL, '2018-08-07', ''),
('1712', '1808BMKG0010', ' Data curah hujan Dasarian tahun 2010 s/d sekarang wil Karanganyar dan Temanggung', '197001281992022001', 'SELESAI', '2018-08-07', '0000-00-00', '2018-08-08', '2018-08-16', '2018-08-07', ''),
('1713', '1808BMKG0011', ' Data suhu maksimum , minimum dan kelembaban rata rata bulan Mei s/d Juni 2017 wilayah Jumantono kab karanganyar', '197604192008012015', 'SELESAI', '2018-08-07', '2018-08-07', '2018-08-07', '2018-08-17', '2018-08-07', ''),
('1714', '1808BMKG0012', ' Data curah hujan tahunan th 2008 s/d 2017 wilayah Gemolong ,Karangmalang , Krikilan kab Sragen', '198112052006042001', 'SELESAI', '2018-08-08', '2018-08-09', '2018-08-08', '2018-08-20', '2018-08-08', ''),
('1715', '1808BMKG0013', ' Data curah hujan tahunan tahun 2008 - 2017 wilayah Jepara , Mlonggo , Batealit kab, Jepara', '197209051995032001', 'SELESAI', '2018-08-08', '2018-08-08', '2018-08-09', '2018-08-20', '2018-08-08', ''),
('1716', '1808BMKG0016', ' Surat keterangan cuaca (angin kencang) tgl 2/8-2018 site krajan kulon Kaliwungu utara   Kab Kendal', '197706282000121002', 'SELESAI', '2018-08-09', '2018-08-14', '2018-08-14', '2018-08-14', '2018-08-13', ''),
('1717', '1808BMKG0015', ' Data curah hujan dan curah hujan maksimum tahun 2014 - 2017 wilayah kota Semarang', '198503082007012003', 'SELESAI', '2018-08-15', '2018-08-15', '2018-08-15', '2018-08-21', '2018-08-15', ''),
('1718', '1809BMKG0008', ' Data curah hujan  , kelembaban , suhu , wil Tembalang bulan Juni s/d Agustus 2018', '197211131995031002', 'SELESAI', '2018-08-15', '2018-08-15', '2018-08-15', '2018-08-15', '2018-08-15', ''),
('1719', '1808BMKG0018', ' Curah hujan tahun 2008 - 2017 wilayah kota Semarang', '197209051995032001', 'SELESAI', '2018-08-15', '2018-08-15', '2018-08-15', '2018-08-27', '2018-08-15', ''),
('1720', '1809BMKG0009', ' Data curah hujan Wil Jawa tengah tahun 2017', '197001281992022001', 'SELESAI', '2018-08-15', '2018-08-15', '2018-08-15', '2018-08-15', '2018-08-15', ''),
('1721', '1808BMKG0019', ' Data curah hujan bulanan  dan suhu mak dan min tahun 2013 - 2018 wil Cilacap , Banyumas . Kebumen , Purworejo', '197001281992022001', 'SELESAI', '2018-08-20', '2018-08-21', '2018-08-21', '2018-08-21', '2018-08-20', ''),
('1722', '1807BMKG0017', ' data curah hujan maksimum tahun 1995 - 2000 dan 2017 wilayah Mrayun , mudal kab Rembang . curah hujan maksimum 2015 2017 wil Sendang mulya kab  Rembang', '197611141997031001', 'SELESAI', '2018-08-21', '2018-08-27', '2018-08-27', '2018-08-27', '2018-08-21', ''),
('1723', '1803BMKG0052', ' Surat keterangan cuaca (petir) site Tambak sogra kec Ampel kec, Sumbang Kab Banyumas', '198112052006042001', 'SELESAI', '2018-08-27', '2018-08-27', '2018-08-27', '2018-09-27', '2018-08-27', ''),
('1724', '1808BMKG0020', ' Data curah hujan , suhu , dan kelembaban', NULL, 'PERMOHONAN', '2018-08-23', NULL, NULL, NULL, NULL, ''),
('1725', '1808BMKG0021', ' Data curah hujan bulanan Bulan Desember 2017 - Juli 2018 wil gondang rejo kab. Karang anyar', '198503082007012003', 'SELESAI', '2018-08-28', '2018-08-28', '2018-08-28', '2018-08-28', '2018-08-28', ''),
('1726', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Klimas karang gede kab Boyolali tanggal 22/3-2018\r\n', '198408112006042002', 'SELESAI', '2018-08-30', '2018-08-30', '2018-08-30', '2018-08-30', '2018-08-30', ''),
('1727', '1809BMKG0001', ' Data curah hujan bulana tahun 200/ - 2017 wil Ngobo  , Tuntang , Jatirunggo kabupaten Semarang', '197604192008012015', 'SELESAI', '2018-09-03', '2018-09-05', '2018-09-05', '2018-09-06', '2018-09-05', ''),
('1728', '1803BMKG0002', ' Surat keterangan cuaca  ( petir ) site Cibunar Tegal tanggal 21/3-2018', '197001281992022001', 'SELESAI', '2018-09-05', '2018-09-05', '2018-09-05', '2018-09-05', '2018-09-05', ''),
('1729', '1803BMKG0002', ' Surat keterangan cuaca ( petir ) site Kadumanis kabupayen Brebes tanggal 11/4-2018', '198408112006042002', 'SELESAI', '2018-09-05', '2018-09-05', '2018-09-05', '2018-09-07', '2018-09-05', ''),
('1730', '1803BMKG0002', ' Surat keterangan cuaca ( petir ) site Kedawung tegal kabupaten Pemalang tanggal  10/4-2018', '198112052006042001', 'SELESAI', '2018-09-05', '2018-09-05', '2018-09-05', '2018-09-07', '2018-09-05', ''),
('1731', '1809BMKG0002', 'Data curah hujan bulan Oktober 2017 - Januari 2018 wilayah Tembalang Semarang ', '198910102010122001', 'SELESAI', '2018-09-06', '2018-09-06', '2018-09-06', '2018-09-06', '2018-09-06', ''),
('1732', '1808BMKG0012', ' Data curah hujan maksimum tahunan tahun 2008 - 2017 wilayah Jepara , Mayong  kabupaten Jepara , Karang malang kabupaten Sragen', '198408112006042002', 'SELESAI', '2018-09-10', '2018-09-10', '2018-09-10', '2018-09-10', '2018-09-10', ''),
('1733', '1809BMKG0003', ' Data suhu maks & min , tekanan udara , intensitas matahari  wilayah stamet Tegal', '197604192008012015', 'SELESAI', '2018-09-10', '2018-09-10', '2018-09-10', '2018-09-10', '2018-09-10', ''),
('1734', '1809BMKG0004', ' Data suhu , kelembaban udara , kecepatan angin rata rata  bulan Juli - Agustus 2018 wilayah Purwosari Semarang', '198112052006042001', 'SELESAI', '2018-09-10', '2018-09-10', '2018-09-10', '2018-09-12', '2018-09-10', ''),
('1735', '1807BMKG0010', ' Data curah hujan bulan Juli - Agustus 2018 wilayah Staklim Semarang , Candi . Tanjung emas , Tlogosari', '198112052006042001', 'SELESAI', '2018-09-13', '2018-09-13', '2018-09-13', '2018-09-13', '2018-09-13', ''),
('1736', '1809BMKG0005', 'Data curah hujan ', '198408112006042002', 'SELESAI', '2018-09-14', '2018-09-14', '2018-09-14', '2018-09-14', '2018-09-14', ''),
('1737', '1809BMKG0006', ' Surat keterangan cuaca ( Angin ) site Gor wergu Kudus tanggal 10/9-2018', '197706282000121002', 'SELESAI', '2018-09-14', '2018-09-14', '2018-09-14', '2018-09-17', '2018-09-14', ''),
('1738', '1809BMKG0007', ' Data curah hujan tahun 2008 -2018  wilayah Meteseh Semarang', '198408112006042002', 'SELESAI', '2018-09-17', '2018-09-17', '2018-09-17', '2018-09-17', '2018-09-17', ''),
('1739', '1810BMKG0001', ' Data curah hujan bulanan tahun  2015 - 2018 wilayah Undaan kabupaten kudus', '198503082007012003', 'SELESAI', '2018-09-20', '2018-09-24', '2018-09-24', '2018-09-25', '2018-09-20', ''),
('1740', '1809BMKG0010', ' Data suhu dan kelembaban udara  bulanan tahun 2014 - 2016 wilayah Semarang', '197602231999031001', 'SELESAI', '2018-09-20', '2018-09-20', '2018-09-20', '2018-09-21', '2018-09-20', ''),
('1741', '1810BMKG0002', ' Prediksi curah hujan bulanan  bulan Oktober  - Desember 2018 wilayah Terboyo Semarang', '197209051995032001', 'SELESAI', '2018-09-21', '2018-10-21', '2018-09-21', '2018-09-21', '2018-09-21', ''),
('1742', '1810BMKG0003', ' Data curah hujan  maksimum tahun 2008 - 2017 wilayah kota Semarang', '198408112006042002', 'SELESAI', '2018-09-24', '2018-09-24', '2018-09-24', NULL, '2018-09-24', ''),
('1743', '1810BMKG0004', ' Permohonan data curah hujan maksimum wilayah Semarang (Gunungpati , Mijen , Ngaliyan) tahun 2008 - 2017 ', '197602231999031001', 'SELESAI', '2018-09-24', '2018-09-24', '2018-09-24', '2018-09-28', '2018-09-24', ''),
('1744', '1810BMKG0005', ' Data curah hujan maksimum tahunan th 2008 - 2017 wilayah candi Semarang', '', 'SELESAI', '2018-09-25', '2018-09-25', '2018-09-25', '2018-09-25', '2018-09-25', ''),
('1745', '1810BMKG0006', 'Curah hujan bulanan tahun 2017 - 2018 wilayah Jepara  dan tahun 2018 wilayah ngaliyan Semarang', '198112052006042001', 'SELESAI', '2018-09-25', '2018-09-25', '2018-09-25', '2018-09-25', '2018-09-25', ''),
('1746', '1810BMKG0007', ' Data suhu , kelembaban , angin tahun 2013 -2018 wilayah kota Semarang', '198910102010122001', 'SELESAI', '2018-09-26', '2018-09-26', '2018-09-26', '2018-09-27', '2018-09-26', ''),
('1747', '1803BMKG0052', ' Surat keterangan cuaca (petir) site Kertoharjo kabupaten Pekalongan tanggal 25/6-2018 ', '197211131995031002', 'SELESAI', '2018-09-26', '2018-09-26', '2018-09-26', '2018-09-27', '2018-09-26', ''),
('1748', '1803BMKG0052', ' Surat keterangan cuaca (petir) site Paninggaran 2 kabupaten Pekalongan  tanggal 16/7-2018', '198112052006042001', 'SELESAI', '2018-10-01', '2018-10-01', '2018-10-01', '2018-10-09', '2018-10-01', ''),
('1749', '1810BMKG0008', ' Data curah hujan  , suhu udara tahun 2018 dan SPM bulan Agustus 2017 wilayah Semarang', '197604192008012015', 'SELESAI', '2018-09-26', '2018-09-27', '2018-09-27', '2018-09-27', '2018-09-26', ''),
('1750', '1810BMKG0009', ' Data analisis suhu air laut , curah hujan , gelombang ,  suhu udara , dan pasang surut tahun 2013 -2018 wilayah perairan semarang', '198408112006042002', 'SELESAI', '2018-10-01', '2018-10-01', '2018-10-01', '2018-10-01', '2018-10-01', ''),
('1751', '1810BMKG0010', ' Data suhu udara  rata rata bulanan tahun 2008 - 2017 wilayahTarubudaya Ungaran', '198910102010122001', 'SELESAI', '2018-10-02', '2018-10-02', '2018-10-02', '2018-10-02', '2018-10-02', ''),
('1752', '1810BMKG0011', ' Analisis curah hujan , gempa bumi ,dan cuaca tahun 2018 wilayah Kendal', '197706282000121002', 'SELESAI', '2018-10-01', '2018-10-01', '2018-10-01', '2018-10-03', '2018-10-01', ''),
('1753', '1810BMKG0012', ' Data curah hujan dan pasang surut maksimum tahunan tahun 2016 - 2017 wilayah Tanjung emas Semarang', '198503082007012003', 'SELESAI', '2018-10-03', '2018-10-03', '2018-10-03', '2018-10-03', '2018-10-03', ''),
('1754', '1810BMKG0013', ' Data suhu rata rata bulanan tahun 2017 wilayah Kendal', '198910102010122001', 'SELESAI', '2018-10-04', '2018-10-04', '2018-10-04', '2018-10-05', '2018-10-04', ''),
('1755', '1804BMKG0054', ' Prediksi curah hujan dasarian bulan Oktober  - Nopember 2018 wilayah Kebumen', '197001281992022001', 'SELESAI', '2018-10-05', '2018-10-05', '2018-10-05', '2018-10-08', '2018-10-05', ''),
('1756', '1804BMKG0016', ' Data curah hujan bulanan bulan April - September 2018 wilayah Ludus dan Karanganyar', '198910102010122001', 'SELESAI', '2018-10-08', '2018-10-09', '2018-10-09', '2018-10-11', '2018-10-08', ''),
('1757', '1810BMKG0014', ' Data suhu rata rata bulanan  tahun 2017 - 2018 wilayah batang', '198408112006042002', 'SELESAI', '2018-10-09', '2018-10-09', '2018-10-09', '2018-10-11', '2018-10-09', ''),
('1758', '1810BMKG0015', ' Data suhu , kelembaban , curah hujan bulan Juni - September 2018 wilayah Batang', '197706282000121002', 'SELESAI', '2018-10-09', '2018-10-09', '2018-10-09', '2018-10-09', '2018-10-09', ''),
('1759', '1803BMKG0002', ' Surat keterangan cuaca  (hujan) site Bolong pakis kabupaten Blora tanggal 4/10 -2018', '198112052006042001', 'SELESAI', '2018-10-10', '2018-10-10', '2018-10-10', '2018-10-15', '2018-10-10', ''),
('1760', '1810BMKG0016', ' Data curah hujan bulan Juni - September 2018 wil tanjung emas', '198503082007012003', 'SELESAI', '2018-10-10', '2018-10-10', '2018-10-10', '2018-10-10', '2018-10-10', ''),
('1761', '1810BMKG0016', ' Data curah hujan dan suhu udara tahun 2010 - 2017 wilayah tanjung emas Semarang', '197602231999031001', 'SELESAI', '2018-10-10', '2018-10-11', '2018-10-11', '2018-10-15', '2018-10-10', ''),
('1762', '1810BMKG0017', ' Data suhu , kelembaban , penyinaran matahari , wilayah karanganyar dan kepatan angin  kabupaten Boyolali tahun 2014 - 2016', '197602231999031001', 'SELESAI', '2018-10-12', '2018-10-15', '2018-10-15', '2018-10-15', '2018-10-12', ''),
('1763', '1810BMKG0018', ' Surat keterangan cuaca (angin) site Indomart Dewi sartika sukorejo Gunung pati Semarang tanggal 8/10- 2018', '198503082007012003', 'SELESAI', '2018-10-15', '2018-10-15', '2018-10-16', '2018-10-16', '2018-10-15', ''),
('1764', '1810BMKG0019', ' Data curah hujan dan lama penyinaran matahari', '197001281992022001', 'SELESAI', '0006-04-10', '2018-10-29', '2018-10-29', '2018-10-29', '2018-10-15', ''),
('1765', '1810BMKG0020', ' Data suhu , kelembaban , curah hujabn dan angin tahun 2018 wilayah Stamet tegal', '197602231999031001', 'SELESAI', '2018-10-15', '2018-10-15', '2018-10-15', '2018-10-16', '2018-10-15', ''),
('1766', '1810BMKG0021', ' Data suhu , kelembaban , curah hujan dan angin tahun 2018 wilayah Staklim Semarang', '198408112006042002', 'SELESAI', '2018-10-15', '2018-10-15', '2018-10-15', '2018-10-16', '2018-10-15', ''),
('1767', '1810BMKG0022', ' Data curah hujan maksimum dan minimum tahun 2017 wilayah Tarubudaya Ungaran', '198910102010122001', 'SELESAI', '2018-10-16', '2018-10-16', '2018-10-16', '2018-10-16', '2018-10-16', ''),
('1768', '1810BMKG0023', ' Data curah hujan bulanan tahun 2007 - 2017 wilayah kaliori kabupaten Rembang', '197604192008012015', 'SELESAI', '2018-10-16', '2018-10-16', '2018-10-16', NULL, '2018-10-16', ''),
('1769', '1807BMKG0017', ' Data curah hujan maksimum tahun 2012 - 2017 . 10 lokasi', '198910102010122001', 'SELESAI', '2018-10-18', '2018-10-23', '2018-10-23', '2018-10-23', '2018-10-18', ''),
('1770', '1805BMKG0011', ' Data curah hujan bulanan bulan Mei  - September 2018 wilayah Cilacap , banyumas , Kebumen , Purworejo', '197602231999031001', 'SELESAI', '2018-10-18', '2018-10-18', '2018-10-18', '2018-10-24', '2018-10-18', ''),
('1771', '1810BMKG0024', ' Data kelembaban dan suhu udara tahun 2013 -2017 wilayah rendole kabupaten Pati', '197211131995031002', 'SELESAI', '2018-10-18', '2018-10-18', '2018-10-18', '2018-10-22', '2018-10-18', ''),
('1772', '1810BMKG0027', ' Data suhu dan kelembaban udara bulan Nopember 2017 - Januari 2018 wilayah Cilacap', '198408112006042002', 'SELESAI', '2018-10-19', '2018-10-19', '2018-10-19', '2018-10-19', '2018-10-19', ''),
('1773', '1810BMKG0025', ' Data informasi iklim dan gempa wilayah pelabuhan Tanjung emas Semarang', '198503082007012003', 'SELESAI', '2018-10-19', '2018-10-22', '2018-10-22', '2018-10-23', '2018-10-19', ''),
('1774', '1810BMKG0028', 'Data curah hujan tahun 2017 s/d 2018 wilayah Jepara (Mlonggo , Bangsri , Jepara , Keling) ', '197611141997031001', 'SELESAI', '2018-10-22', '2018-10-24', '2018-10-24', '2018-11-30', '2018-10-23', ''),
('1775', '1810BMKG0029', ' Data curah hujan , suhu , kelembaban  tahun 2007 - 2017 wilayah Purworejo dan Magelang', '197602231999031001', 'SELESAI', '2018-10-22', '0000-00-00', '2018-10-23', '2018-11-30', '2018-10-23', ''),
('1776', '1803BMKG0012', ' Surat keterangan cuaca (petir) site Kalitengah  Mranggen Demak tanggal 20/9-2018\r\n', '197211131995031002', 'SELESAI', '2018-10-23', '0000-00-00', '2018-10-23', '2018-11-01', '2018-10-23', ''),
('1777', '1810BMKG0031', ' Data curah hujan maksimum bulanan tahun 1998 -2017 wilayah Cilacap ', '198503082007012003', 'SELESAI', '2018-10-23', '1900-10-23', '2018-10-23', '2018-10-24', '2018-10-23', ''),
('1778', '1810BMKG0030', ' Data suhu , curah hujan dan penyinaran matahari wilayah Cilacap', '198112052006042001', 'SELESAI', '2018-10-23', '1900-10-24', '2018-10-24', NULL, '2018-10-23', ''),
('1779', '1810BMKG0032', ' Data curah huajn maksimum bulanan tahun 2008 - 2018 wilayah wonotunggal kabupaten Batang', '197001281992022001', 'SELESAI', '2018-10-23', '2018-10-24', '2018-10-24', '2018-10-29', '2018-10-24', ''),
('1780', '1810BMKG0034', ' Data curah hujan bulanan tahun 2018 wilayah Jepara', '198503082007012003', 'SELESAI', '2018-10-25', '2018-10-26', '2018-10-26', '2018-10-26', '2018-10-25', ''),
('1781', '1810BMKG0033', ' Surat keterangan cuaca (hujan) site the gheco inn coutry Tahunan Jepara', '197611141997031001', 'SELESAI', '2018-10-26', '2018-11-26', '2018-11-26', '2018-11-06', '2018-11-26', ''),
('1782', '1810BMKG0035', ' Data curah huajn maksimum bulanan tahun 2016 -2017 wilayah Gunung pati dan Ngaliyan Semarang', '197001281992022001', 'SELESAI', '2018-10-26', '2018-10-26', '2018-10-26', NULL, '2018-10-26', ''),
('1783', '1807BMKG0013', ' Informasi curah hujan th 2017 wil Selo kab Boyolali  dan Tawangmangu kab Karang anyar', NULL, 'PERMOHONAN', '2018-10-26', NULL, NULL, NULL, NULL, ''),
('1784', '1810BMKG0036', ' Informasi data curah hujan tahun 2003 - 2017 wilayah Boyolali data  suhu th 2003 - 2017 wilayah Salatiga', '197602231999031001', 'SELESAI', '2018-10-26', '2018-10-26', '2018-10-26', '2018-10-26', '2018-10-26', ''),
('1785', '1810BMKG0037', ' Surat keterangan cuaca (petir) Site Ds Mayahan kec Tawanghanjo kab Purwodadi tanggal 24/10-2018', '198910102010122001', 'SELESAI', '2018-10-26', '2018-10-26', '2018-10-26', NULL, '2018-10-26', ''),
('1786', '1803BMKG0026', ' Surat keterangan cuaca (petir ) site Jl Semarang - Bawen tanggal  25/10-2018', '197604192008012015', 'SELESAI', '2018-10-29', '2018-10-30', '2018-10-30', '2018-10-30', '2018-10-29', ''),
('1787', '1804BMKG0048', ' Surat keterangan cuaca  (hujan,angin,petir) site kawasan industri terboyo Semarang tanggal 24/10-2018', '197001281992022001', 'SELESAI', '2018-10-31', '2018-11-01', '2018-10-31', NULL, '2018-10-31', ''),
('1788', '1810BMKG0042', ' Informasi curah hujan maksimum tahunan tahun 2003 - 2017 Staklim semarang', '197211131995031002', 'SELESAI', '2018-10-31', '2018-11-01', '2018-11-01', '2018-11-01', '2018-10-31', ''),
('1789', '1811BMKG0001', ' Informasi suhu ,  curah hujan ,  kelembaban , angin tahun 2016 - 2018 wilayah Staklim Semarang', '198910102010122001', 'SELESAI', '2018-11-01', '2018-11-02', '2018-11-02', '2018-11-08', '2018-11-01', ''),
('1790', '1803BMKG0032', ' Surat keterangan cuaca (petir) site Kranggan Ambarawa kab Semarang tanggal    \r\n 22/10-2018\r\n', '198112052006042001', 'SELESAI', '2018-11-01', '2018-11-01', '2018-11-01', '2018-11-05', '2018-11-01', ''),
('1791', '1811BMKG0002', ' Informasi curah hujan tahun 2015 - 2017 wilayah Jepara dan Rembang', '197706282000121002', 'SELESAI', '2018-11-01', '2018-11-01', '2018-11-01', '2018-11-09', '2018-11-01', ''),
('1792', '1803BMKG0002', ' Surat keterangan cuaca (hujan) site Bolong pakis kabupaten Blora tanggal 4/11-2018', '198408112006042002', 'SELESAI', '2018-11-06', '2018-11-06', '2018-11-06', '2018-11-12', '2018-11-06', ''),
('1793', '1803BMKG0002', ' Surat keterangan cuaca (hujan) site Singorejo kabupaten Demak tanggal 3/11/-2018', '197209051995032001', 'SELESAI', '2018-11-06', '2018-11-06', '2018-11-06', '2018-11-12', '2018-11-06', ''),
('1794', '1803BMKG0002', ' Surat ketrangan cuaca (hujan) site Pangarasan kabupaten Brebes tanggal 5/11-2018', '197602231999031001', 'SELESAI', '2018-11-08', '2018-11-09', '2018-11-09', '2018-11-12', '2018-11-08', ''),
('1795', '1811BMKG0003', ' Informasi curah hujan tahunan tahun 2013 - 2018 wilayah Susukan , Boyolali , Banyudono ,  Kebumen', '197001281992022001', 'SELESAI', '2018-11-08', '2018-11-08', '2018-11-08', '2018-11-15', '2018-11-08', ''),
('1796', '1811BMKG0004', ' Informasi curah hujan bulanan tahun 2000 - 2009 wilayah Semarang', '198408112006042002', 'SELESAI', '2018-11-08', '2018-11-08', '2018-11-08', '2018-11-16', '2018-11-08', ''),
('1797', '1811BMKG0006', ' Surat keterangan cuaca (hujan) site BSB Mijen Semarang tanggal 16 Februari 2018', '197211131995031002', 'SELESAI', '2018-11-09', '2018-11-12', '2018-11-12', '2018-12-11', '2018-11-09', ''),
('1798', '1811BMKG0007', ' Analisa curah hujan angin tanggal 6/11-2018 site gor wergu Kudus', '197706282000121002', 'SELESAI', '2018-11-09', '2018-11-12', '2018-11-12', '2018-11-12', '2018-11-09', ''),
('1799', '1803BMKG0023', ' Data curah huajn , suhu maksimum dan minimum , kelembaban udara wilayah ungaran bulan Oktober 2017 s/d Oktober 2018', '198910102010122001', 'SELESAI', '2018-11-09', '2018-11-09', '2018-11-09', '2018-11-12', '2018-11-09', ''),
('1800', '1811BMKG0005', ' Data suhu maksimum dan Minimum , kelembaban ,  bln Februari - Oktober 2018 wilayah Getasan dan  Data curah hujan bulan April - Otober 2018 wilayah Banyubiru dan Salatiga', '198503082007012003', 'SELESAI', '2018-11-12', '2018-11-12', '2018-11-12', NULL, '2018-11-12', ''),
('1801', '1803BMKG0002', ' Surat keterangan cuaca (hujan) site Kandang serang kabupaten Pekalongan tanggal 3/11-2018', '197001281992022001', 'SELESAI', '2018-11-03', '2018-12-14', '2018-12-14', '2018-12-26', '2018-12-14', ''),
('1802', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Kotayasa kabupaten Banyumas tanggal 8/11-2018', '198112052006042001', 'SELESAI', '2018-11-13', '2018-12-15', '2018-12-15', '2018-12-26', '2018-12-14', ''),
('1803', '1803BMKG0002', ' Surat keterangan cuaca (hujan) site PJKA Alas roban kabupaten Batangtanggal 9/11-2018', '198503082007012003', 'SELESAI', '2018-11-13', '2018-11-14', '2018-12-14', '2018-12-26', '2018-11-14', ''),
('1804', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Rakit kabupaten Banjarnega tanggal 8/11-2018', '197611141997031001', 'SELESAI', '2018-11-13', '2018-11-14', '2018-12-14', '2018-12-26', '2018-11-14', ''),
('1805', '1811BMKG0009', ' Data curah hujan tahunan . tahun 2009 - 2018 wilayah Semarang  ', '197209051995032001', 'SELESAI', '2018-11-13', '2018-11-14', '2018-12-14', '2018-12-14', '2018-11-14', ''),
('1806', '1803BMKG0002', 'Surat keterangan cuaca (petir) site Mojotengah kabupaten Wonosobo tanggal 7/11-2018', '197211131995031002', 'SELESAI', '2018-11-14', '2018-11-16', '2018-11-16', '2018-12-26', '2018-11-15', ''),
('1807', '1803BMKG0002', ' Surat keterangan cuaca  (petir) site Glempang pasir kabupaten Cilacap tanggal 12/11-2018', '197602231999031001', 'SELESAI', '2018-11-14', '2018-11-15', '2018-11-15', '2018-11-26', '2018-11-15', ''),
('1808', '1811BMKG0010', ' Informasi curah hujan bulanan bulan April - Oktober 2018 wilayah Rowosari kab Kendal', '197602231999031001', 'SELESAI', '2018-11-16', '2018-11-16', '2018-11-16', '2018-11-26', '2018-11-16', ''),
('1809', '1803BMKG0002', ' Surat keterangan cuaca (hujan) site Bener boja kabupaten Cilacap tanggal 12/11-2018', '197001281992022001', 'SELESAI', '2018-11-19', '2018-11-19', '2018-11-19', '2018-11-26', '2018-11-19', ''),
('1810', '1803BMKG0002', 'Surat keterangan cuaca (hujan) site Kalibuntu kabupaten Brebes tanggal 19/11-2018 ', '198112052006042001', 'SELESAI', '2018-11-23', '2018-11-23', '2018-11-23', '2018-11-26', '2018-11-23', ''),
('1811', '1811BMKG0011', ' Data curah hujan bulanan  bulan Agustus s/d Oktober 2018 wilayah Mateseh kabupaten Karanganyar', '197611141997031001', 'SELESAI', '2018-11-27', '2018-11-26', '2018-11-26', '2018-11-26', '2018-11-26', ''),
('1812', '1811BMKG0012', 'Data curah hujan bulanan tahun 2013 - 2017 wilayah Pejagan Losari Kabupaten Brebes ', '197209051995032001', 'SELESAI', '2018-11-26', '2018-12-26', '2018-11-26', '2018-11-26', '2018-11-26', ''),
('1813', '1812BMKG0006', ' Informasi curah hujan bulan Oktober - Nopember 2018 dan Prakiraan curah hujan bulan Desember 2018                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ', '198910102010122001', 'SELESAI', '2018-11-23', '2018-11-28', '2018-11-28', '2018-11-29', '2018-11-28', ''),
('1814', '1811BMKG0016', ' Informasi curah hujan dasarian bulan Januari - Nopember 2018 wilayah kabupaten Kendal (Brangsong , Kaliwungu , Gambilangu , Kendal )', '198408112006042002', 'SELESAI', '2018-11-23', '2018-11-30', '2018-11-30', '2018-12-04', '2018-11-28', ''),
('1815', '1811BMKG0014', ' Surat keterangan cuaca (hujan angin) site Jl Pramuka sumurrejo Gunungpati tanggal 25/11-2018', '198503082007012003', 'SELESAI', '2018-11-28', '2018-11-28', '2018-11-28', '2018-11-28', '2018-11-28', ''),
('1816', '1811BMKG0015', ' Surat keterangan informasi meteorologi bulan Oktober dan Nopember 2018 wilayah kabupaten Brebes', '198112052006042001', 'SELESAI', '2018-11-30', '2018-11-30', '2018-11-30', '2018-11-30', '2018-11-30', ''),
('1817', '1812BMKG0007', ' Surat keterangan meteorologi bulan Oktober   - Nopember 2018 wilayah kabupaten Brebes', '197001281992022001', 'SELESAI', '2018-11-30', '2018-11-30', '2018-11-30', '2018-11-30', '2018-11-30', ''),
('1818', '1812BMKG0001', ' Informasi penyinaran matahari , curah hujan , angin , kelembaban wilayah Semarang tahun 2013 - 2017', '197602231999031001', 'SELESAI', '2018-11-30', '2018-11-30', '2018-11-30', '2018-11-30', '2018-11-30', ''),
('1819', '1812BMKG0002', ' Informasi curah hujan maksimum tahun 2006 - 2018 wilayah  Banjarnegara (banjarmangu & Madukara)', '198408112006042002', 'SELESAI', '2018-11-30', '2018-12-03', '2018-12-03', '2018-12-03', '2018-11-30', ''),
('1820', '1812BMKG0004', ' Informasi curah hujan , suhu , kelembaban tahun 2017 - 2018 wilayah Cilacap0', '197209051995032001', 'SELESAI', '2018-12-03', '2018-12-04', '2018-12-04', '2018-12-05', '2018-12-03', ''),
('1821', '1812BMKG0003', ' Surat keterangan cuaca (petir) site jl Sewan pudak payung Semarang                      \r\n     tanggal 4/11-2018', '198503082007012003', 'SELESAI', '2018-12-03', '2018-12-04', '2018-12-04', '2018-12-05', '2018-12-03', ''),
('1822', '1812BMKG0005', ' Informasi curah hujan tahunan  wilayah Salaman tahun 2018', '197706282000121002', 'SELESAI', '2018-12-04', '2018-12-04', '2018-12-04', '2018-12-07', '2018-12-04', ''),
('1823', '1812BMKG0009', ' Surat keterangan cuaca (hujan angin) site Jl Depok Semarang tanggal 3/12-2018', '197001281992022001', 'SELESAI', '2018-12-04', '2018-12-05', '2018-12-05', '2018-12-05', '2018-12-04', ''),
('1824', '1812BMKG0008', ' Informasi curah hujan dan kelembaban wilayah Dukun Kabupaten Magelang bulan Februari s/d Juli 2018', '198910102010122001', 'SELESAI', '2018-12-04', '2018-12-04', '2018-12-04', '2018-12-04', '2018-12-04', ''),
('1825', '1812BMKG0010', ' Informasi iklim', '198408112006042002', 'PROSES', '2018-12-05', '0000-00-00', NULL, NULL, '2018-12-05', ''),
('1826', '1812BMKG0011', ' Surat keterangan cuaca (Hujan) site Jl . Lamongan raya Semarang tanggal 3/12-2018', '198112052006042001', 'SELESAI', '2018-12-05', '2018-12-05', '2018-12-05', '2018-12-06', '2018-12-05', ''),
('1827', '1803BMKG0012', ' Surat keterangan cuaca (Petir) site Ungaran UNR kabapaten Semarang tanggal 4/11-2018', '197211131995031002', 'SELESAI', '2018-12-05', '2018-12-05', '2018-12-05', '2018-12-12', '2018-12-05', ''),
('1828', '1812BMKG0006', ' Informasi surah hujan bulan Oktober & Nopember 2018 dan prakiraan curah hujan bulan Desember 2018 wilayah Surakarta', '197602231999031001', 'SELESAI', '2018-12-06', '2018-12-06', '2018-12-06', '2018-12-07', '2018-12-06', ''),
('1829', '1803BMKG0010', ' Surat keterangan cuaca (hujan) site Jl Tanjung mes Raya Semarang tanggal  3/12-2018', '197611141997031001', 'SELESAI', '2018-12-05', '2018-12-05', '2018-12-05', '2018-12-06', '2018-12-05', ''),
('1830', '1812BMKG0013', ' Surat keterangan cuaca hujan site Jl Tanjung emas  Semarang tanggal 3/12/2018', '198112052006042001', 'SELESAI', '2018-12-06', '2018-12-10', '2018-12-10', '2018-12-10', '2018-12-06', ''),
('1831', '1812BMKG0014', ' Informasi curah hujan bulanan tahun 2009-2018 wilayah Mgaliyan dan                    \r\n Staklim Semarang', '198910102010122001', 'SELESAI', '2018-12-06', '2018-12-07', '2018-12-07', '2018-12-07', '2018-12-06', ''),
('1832', '1812BMKG0015', 'Informasi  Curah hujan tahunan tahun 2017 - 2018 wilayah kota Semarang', '197001281992022001', 'SELESAI', '2018-12-07', '2018-12-10', '2018-12-10', '2018-12-10', '2018-12-07', ''),
('1833', '1812BMKG0016', ' Informasi Arah dan kecepatan angin tahun 2018 wilayah Staklim Semarang ', '198503082007012003', 'SELESAI', '2018-12-07', '2018-12-07', '2018-12-07', '2018-12-07', '2018-12-07', ''),
('1834', '1812BMKG0017', ' Informasi curah hujan bulana tahun 2009 - 2018 wilayah Arcawinagun kab Banyumas', '198910102010122001', 'SELESAI', '2018-12-07', '2018-12-07', '2018-12-07', NULL, '2018-12-07', ''),
('1835', '1812BMKG0012', ' Surat keterangan cuaca (petir) site Jl Wolter munginsidi No 45 Pedurungan tanggal  2/12-2018 ', '197611141997031001', 'SELESAI', '2018-12-10', '2018-12-10', '2018-12-10', '2018-12-13', '2018-12-10', 'BATAL'),
('1836', '1812BMKG0018', ' Informasi intensitas dan jumlah kejadian petir dan tekana udara rata rata tekana udara Maximum dan Minimum tanggal 29/11-2018 wilayah Semarang kalibanteng', '197602231999031001', 'SELESAI', '2018-12-10', '0000-00-00', '2018-12-11', '2018-12-11', '2018-12-10', ''),
('1837', '1812BMKG0019', 'Informasi curah hujan bulan Nopember dan Desember 2018 wilayah Gunem kabupaten Rembang', '197209051995032001', 'SELESAI', '2018-12-13', '2018-12-13', '2018-12-13', '2018-12-13', '2018-12-13', ''),
('1838', '1812BMKG0012', ' Surat keterangan cuaca (petir) site Jl. Karanganyar gunung Semarang                     \r\n  tanggal 23/10 -2018', '197211131995031002', 'SELESAI', '2018-12-13', '2018-12-13', '2018-12-13', '2018-12-19', '2018-12-13', ''),
('1839', '1812BMKG0012', ' Surat keterangan cuaca (petir) site Jl Karanganyar gunung Semarang                                 tanggal 23/10-2018', '197706282000121002', 'SELESAI', '2018-12-13', '2018-12-13', '2018-12-13', '2018-12-19', '2018-12-13', ''),
('1840', '1812BMKG0012', 'Surat keterangan cuaca (petir) site Jl.Arteri Soekarno Hatta Pedurungan Semarang tanggal 24/10-2018', '198408112006042002', 'SELESAI', '2018-12-13', '2018-12-13', '2018-12-13', '2018-12-14', '2018-12-13', ''),
('1841', '1812BMKG0020', ' Informasi curah hujan dan intensitas matahari bulan Nopember s/d Desember 2018wil Jl .Gajah mungkur  Semarang', '197602231999031001', 'SELESAI', '2018-12-13', '2018-12-14', '2018-12-14', '2018-12-14', '2018-12-13', ''),
('1842', '1812BMKG0021', ' Surat keterangan cuaca (hujan , angin , petir ) site Jl Raya tugurejo KM 10.2 Semarang tanggal 2/12-2018', '198503082007012003', 'SELESAI', '2018-12-14', '2018-12-17', '2018-12-17', '2018-12-17', '2018-12-14', ''),
('1843', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Banyumudal kabupaten Kebumen tanggal 7/12-2018', '198112052006042001', 'SELESAI', '2018-12-17', '2018-12-17', '2018-12-20', '2018-12-20', '2018-12-17', ''),
('1844', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Tawang susukan Kabupaten Semarang tanggal 17/12-2018', '197211131995031002', 'SELESAI', '2018-12-17', '2018-12-17', '2018-12-17', '2018-12-20', '2018-12-17', ''),
('1845', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Tawang susukan kabupaten Semarang tanggal 27/8-2018', '198503082007012003', 'SELESAI', '2018-12-18', '2018-12-18', '2018-12-18', '2018-12-20', '2018-12-18', ''),
('1846', '1812BMKG0023', ' Informasi curah hujan bulan Oktober s/d Desember 2018 wilayah Staklim Semarang', '198112052006042001', 'SELESAI', '2018-12-21', '2018-12-21', '2018-12-21', '2018-12-21', '2018-12-21', ''),
('1847', '1809BMKG0002', ' Informasi curah hujan  bulan Agustus s/d Desember 2018 wilayah Mateseh kota Semarang', '197211131995031002', 'SELESAI', '2018-12-21', '2018-12-21', '2018-12-21', '2018-12-21', '2018-12-21', ''),
('1848', '1812BMKG0026', ' Surat keterangan cuaca (hujan dan angin kencang) site Jl Kaliori simo Km 01 Kabupaten Boyolali tanggal 28/12-2018', '197602231999031001', 'SELESAI', '2018-12-21', '2018-12-21', '2018-12-21', '2018-12-21', '2018-12-21', ''),
('1849', '1812BMKG0024', ' Informasi suhu , kecepatan angin wilayah Pati dan curah hujan wilayah Cepu Blora  tahun 2018', '198910102010122001', 'SELESAI', '2018-12-21', '2018-12-21', '2018-12-21', '2018-12-27', '2018-12-21', ''),
('1850', '1803BMKG0025', ' Surat keterangan cuaca (petir) site Prawoto kabupaten Pati tanggal 26/12-2018', '197001281992022001', 'SELESAI', '2018-12-26', '2018-12-26', '2018-12-26', '2018-12-26', '2018-12-26', ''),
('1851', '1812BMKG0023', 'Informasi curah hujan bulan Oktober s/d Desember 2018 wilayah Staklim Semarang', '198408112006042002', 'SELESAI', '2018-12-27', '2018-12-27', '2018-12-27', '2018-12-27', '2018-12-27', ''),
('1852', '1803BMKG0032', ' Surat keterangan cuaca (petir) site Bugel kabupaten Jepara tanggal 18/12-2018', '197209051995032001', 'SELESAI', '2018-12-27', '2018-12-27', '2018-12-27', '2018-12-31', '2018-12-27', ''),
('1853', '1812BMKG0025', ' Surat keterangan cuaca (hujan) site Paragon mall Jl Pemuda Semarang tanggal 29/11-2018', '198408112006042002', 'SELESAI', '2018-12-27', '2018-12-27', '2018-12-27', '2019-01-09', '2018-12-27', ''),
('1854', 'Maudina', 'Informasi curah hujan dan lama musim hujan bulan Juni 2015 s/d Juli 2018 wilayah rembang ', '198910102010122001', 'SELESAI', '2018-12-31', '0000-00-00', '0000-00-00', '0000-00-00', '2018-12-31', ''),
('1855', '1812BMKG0028', ' Informasi intensitas , radiasi matahari dan suhu rata rata  yahun 2016 - 2018 wilayah stamet tegal', '197001281992022001', 'SELESAI', '2019-01-02', '2019-01-02', '2019-01-02', '2019-01-07', '2019-01-02', ''),
('1856', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Kadumanis kab Brebes tanggal 7/1-2019', '198503082007012003', 'SELESAI', '2019-01-09', '2019-01-09', '2019-01-09', '2019-01-15', '2019-01-09', ''),
('1857', '1901BMKG0001', ' Informasi curah hujan ,suhu udara Max dan Min , lama penyinaran matahari bln Oktober - Desember 2018\r\ninformasi arah dan kecepatan angin bln Oktober 2014 - Desember 2018 wilayah mangkang Semarang', '197211131995031002', 'SELESAI', '2019-01-10', '2019-01-11', '2019-01-11', '2019-01-15', '2019-01-10', ''),
('1858', '1901BMKG0002', ' Informasi curah hujan kota Semarang (Tanjung emas , Candi . Siliwangi, Tembalang, Tlogosari)  dan Kelembaban udara tahun 2013 & 2018', '198910102010122001', 'SELESAI', '2019-01-10', '2019-01-10', '2019-01-10', '2019-01-14', '2019-01-10', ''),
('1859', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Pasir besi kembang kabupaten Jepara tanggal 3/1-2019', '197602231999031001', 'SELESAI', '2019-01-10', '2019-01-10', '2019-01-10', '2019-01-15', '2019-01-10', ''),
('1860', '1803BMKG0002', ' Surat keterangan cuaca (hujan) site Sindan sari maajenang kabupaten Cilacap tanggal 9/1-2019', '198112052006042001', 'SELESAI', '2019-01-10', '2019-01-11', '2019-01-11', '2019-01-15', '2019-01-10', ''),
('1861', '1901BMKG0003', ' Surat keterangan cuaca (hujan) site Jl Jagalan Semarang tanggal 10/11-2018', '197706282000121002', 'SELESAI', '2019-01-11', '2019-01-14', '2019-01-14', '2019-01-14', '2019-01-14', ''),
('1862', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Wonosari kabupaten Klaten tanggal 10/1-2018', '197611141997031001', 'SELESAI', '2019-01-11', '2019-01-14', '2019-01-14', '2019-01-15', '2019-01-14', ''),
('1863', '1901BMKG0002', ' Informasi suhu rata rata bulanan th 2013 dan 2018 wil kota Semarang', '198910102010122001', 'SELESAI', '2019-01-11', '2019-01-11', '2019-01-11', '2019-01-15', '2019-01-11', ''),
('1864', '1901BMKG0004', ' Informasi curah hujan wilayah Kledung kabupaten Temanggung tahun 2017 - 2018', '198910102010122001', 'SELESAI', '2019-01-14', '2019-01-14', '2019-01-14', '2019-01-14', '2019-01-14', ''),
('1865', '1803BMKG0025', ' Surat keterangan cuaca (petir) site Plaosan kabupaten Pati tanggal 3/1-2019  ', '197209051995032001', 'SELESAI', '2019-01-15', '0000-00-00', '2019-01-15', '2019-03-06', '2019-01-15', ''),
('1866', '1901BMKG0005', ' Informasi curah hujan kabupaten Brebes dan Suhu kabupaten Tegal tahun 1981 -2018', '197001281992022001', 'SELESAI', '2019-01-15', '2019-01-21', '2019-01-21', NULL, '2019-01-15', ''),
('1867', '1901BMKG0006', ' Informasi Curah hujan dan suhu tahun 1981 -2018 wil Jawa tengah', '198408112006042002', 'SELESAI', '2019-01-15', '2019-01-22', '2019-01-22', NULL, '2019-01-15', ''),
('1868', '1901BMKG0007', ' Informasi curah hujan dan suhu tahun 2009 -2015 wilayah banjarnegara dan Wonosobo', '197602231999031001', 'SELESAI', '2019-01-15', '2019-01-22', '2019-01-22', NULL, '2019-01-14', ''),
('1869', '1901BMKG0008', ' Informasi prakiraan curah hujan bulan Februari S/d Juni 2019 untuk wilayah Banjarnegara ', '198112052006042001', 'SELESAI', '2019-01-16', '2019-01-17', '2019-01-17', '2019-01-18', '2019-01-16', ''),
('1870', '1810BMKG0039', ' Informasi prakiraan dan analisis Akhir musim hujan dan awal musim hujan tahun 2019 wilayah Surakarta , wonogiri, Sukoharjo,Klaten,Karangayar,Sragen', '197706282000121002', 'SELESAI', '2019-01-16', '2019-01-21', '2019-01-21', '2019-01-22', '2019-01-16', ''),
('1871', '1901BMKG0009', ' Surat keterangan cuaca hujan site Solo paragon mall Jl. Yosodipuro No.133 Mangkubumen Banjarsari. Surakarta tanggal 11 Januari 2019', '197211131995031002', 'SELESAI', '2019-01-16', '0000-00-00', '2019-01-17', '2019-01-23', '2019-01-16', ''),
('1872', '1901BMKG0011', ' Informasi curah hujan bulan Februari  Maret 2018 wilayah Pelabuhan Rembang', '198408112006042002', 'SELESAI', '2019-01-16', '2019-01-16', '2019-01-16', '2019-01-16', '2019-01-16', ''),
('1873', '1901BMKG0010', ' Informasi suhu dan kelembaban tahun 2014 -2018 wilayah Kabupaten Pati', '198503082007012003', 'SELESAI', '2019-01-16', '0000-00-00', '2019-01-18', '2019-01-18', '2019-01-16', ''),
('1874', '1901BMKG0012', ' Informasi curah hujan dan hari hujan bulanan tahun 2018 wilayah Bandungan , ngablak , secang , Temanggung , Wonosobo ', '197209051995032001', 'SELESAI', '2019-01-17', '0000-00-00', '0000-00-00', '2019-01-18', '2019-01-17', ''),
('1875', '1901BMKG0013', ' Informasi curah hujan 2015 -2018 wilayah Sadeng , kandri , Tarubudaya , Ungaran dan Staklim Semarang ', '197611141997031001', 'SELESAI', '2019-01-17', '2019-01-18', '2019-01-18', '2019-01-28', '2019-01-17', ''),
('1876', '1901BMKG0014', ' Surat keterangan  cuaca (Petir) Site Jalan Bawen - Ambarawa kabupaten Semarang  tanggal 12 Januari 2018', '198910102010122001', 'SELESAI', '2019-01-21', '2019-01-21', '2019-01-21', '2019-01-23', '2019-01-21', ''),
('1877', '1807BMKG0013', ' Informasi curah hujan rata rata bulanan wilayah Semarang , Klaten , Magelang bulan Januari - Desember 2018', '197211131995031002', 'SELESAI', '2019-01-21', '2019-01-21', '2019-01-21', '2019-01-25', '2019-01-21', ''),
('1878', '1901BMKG0015', ' Suratketerangan cuaca  (petir) site Ngadisonokabupaten Wonosobo                        \r\n tanggal 30/12-2018\r\n', '197209051995032001', 'SELESAI', '2019-01-21', '2019-01-22', '2019-01-22', '2019-01-28', '2019-01-21', ''),
('1879', '1901BMKG0016', ' Informasi curah hujan rata rata bulanan tahun 2008-2018', '198112052006042001', 'SELESAI', '2019-01-21', '2019-01-22', '2019-01-22', '2019-02-06', '2019-01-21', ''),
('1880', '1901BMKG0017', ' Prakiraan curah hujan dasarian bulan Januari s/d April 2019 wilayah Gunungpati dan Mijen Semarang', '197001281992022001', 'SELESAI', '2019-01-21', '2019-01-22', '2019-01-22', '2019-01-23', '2019-01-21', ''),
('1881', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Wono tunggal kabupaten Batang tanggal 4/1-2019', '198503082007012003', 'SELESAI', '2019-01-22', '2019-01-22', '2019-01-22', '2019-01-28', '2019-01-22', ''),
('1882', '1803BMKG0002', ' Surat keterangan cuaca (petir) site kwawur Sukolilo kabupaten Pati tanggal 8/1-2019', '197611141997031001', 'SELESAI', '2019-01-22', '2019-01-24', '2019-01-24', '2019-01-28', '2019-01-22', ''),
('1883', '1901BMKG0018', ' Surat keterangan cuaca (hujan) site Ruko siliwangi karangayu Semarang                tanggal 3/12-2018 ', '197211131995031002', 'SELESAI', '2019-01-22', '2019-01-23', '2019-01-23', '2019-02-13', '2019-01-22', ''),
('1884', '1901BMKG0019', ' Surat keterangan cuaca (Hujan angin) site Jl Pandanaran Semarang                      tanggal 3 /12-2018', '198408112006042002', 'SELESAI', '2019-01-22', '2019-01-23', '2019-01-23', '2019-01-25', '2019-01-22', ''),
('1885', '1901BMKG0020', ' Informasi angin maksimum dan arah terbanyak , hujan dan petir daerah kendal', '198503082007012003', 'SELESAI', '2019-01-23', '2019-01-24', '2019-01-24', '2019-03-06', '2019-01-23', ''),
('1886', '1803BMKG0032', ' Surat keterangan cuaca  (petir) site Keling kabupaten Jepara tanggal 15/1-2019', '197706282000121002', 'SELESAI', '2019-01-23', '2019-01-23', '2019-01-23', '2019-01-25', '2019-01-23', ''),
('1887', '1803BMKG0032', ' Surat keterangan cuaca (petir) site Bugel , kedung kabupaten Jepara                       \r\n  tanggal 16/1-2019', '197602231999031001', 'SELESAI', '2019-01-23', '2019-01-23', '2019-01-23', '2019-01-25', '2019-01-23', ''),
('1888', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Glempang pasir kabupaten Cilacap                       tanggal 21/14-2019 ', '197001281992022001', 'SELESAI', '2019-01-23', '2019-01-23', '2019-01-23', '2019-01-28', '2019-01-23', ''),
('1889', '1901BMKG0021', 'Informasi curah hujan bulan Agustus 2018 -Januari 2019 dan surat keterangan hujan wilayah Sendang Mulyo , Tembalang Semarang', '197706282000121002', 'SELESAI', '2019-01-24', '2019-01-24', '2019-01-24', '2019-01-24', '2019-01-24', ''),
('1890', '1901BMKG0022', ' Surat keterngan cuaca (hujan angin) site Jl Slamet riyadi Purwosari laweyan Solo tanggal 11/1-2019', '198112052006042001', 'SELESAI', '2019-01-24', '2019-01-25', '2019-01-25', '2019-02-25', '2019-01-24', ''),
('1891', '1901BMKG0023', 'Informasi curah hujan tahun 2017 -2018 wilayah Sayung , Brumbung , Buyaran ,   Guntur Kab Demak . Tanjung emas Semarang', '198910102010122001', 'SELESAI', '2019-01-24', '2019-01-24', '2019-01-24', '2019-01-31', '2019-01-24', ''),
('1892', '1805BMKG0014', ' Surat keterangan cuaca (hujan angin) siteJl Banjarsari Tembalang Semarang tanggal 22/1-2019', '197602231999031001', 'SELESAI', '2019-01-25', '2019-01-25', '2019-01-25', '2019-01-29', '2019-01-25', ''),
('1893', '1901BMKG0024', ' Informasi curah hujan kota pekalongan tahun 2009-2018', '198408112006042002', 'SELESAI', '2019-01-25', '2019-01-25', '2019-01-25', NULL, '2019-01-25', ''),
('1894', '1901BMKG0013', ' Informasi curah hujan tahun 2016-2017 wilayah kota Semarang', '', 'SELESAI', '2019-01-28', '2019-01-28', '2019-01-28', '2019-01-28', '2019-01-28', ''),
('1895', '1901BMKG0025', ' Informasi curah hujan wilayah  Purbalingga kemangkom tahun 2015 dan Karangaayar tahun 2016', '197602231999031001', 'SELESAI', '2019-01-28', '2019-01-28', '2019-01-28', '2019-01-28', '2019-01-28', ''),
('1896', '1807BMKG0009', ' Surat Keterangan cuaca (hujan) site Jl Raya TVRI kel Kalibalik kec. Limpung Kab. Batang tanggal 26/11-2018', '', 'SELESAI', '2019-01-28', '2019-01-28', '2019-01-28', '2019-01-30', '2019-01-28', ''),
('1897', '1803BMKG0002', ' Surat keterangan cuaca (hujan) site Sindoro jebres Solo tanggal 24/1-2019 ', '197001281992022001', 'SELESAI', '2019-01-28', '2019-01-29', '2019-01-29', '2019-02-08', '2019-01-28', ''),
('1898', '1803BMKG0002', ' Surat keterangan cuaca (hujan)  site Sambung Magelang tanggal 18/1-2019', '197209051995032001', 'SELESAI', '2019-01-28', '2019-01-29', '2019-01-29', '2019-02-08', '2019-01-28', ''),
('1899', '1901BMKG0027', ' Surat keterangan cuaca (hujan angin) site Mlati kudus tanggal 23/1-2019', '198503082007012003', 'SELESAI', '2019-01-28', '2019-01-29', '2019-01-29', '2019-01-29', '2019-01-29', ''),
('1900', '1901BMKG0015', ' Surat keterangan cuaca (petir) site Ngadisono Kabupaten Wonosobo tanggal 13/1-2019', '197211131995031002', 'SELESAI', '2019-01-28', '2019-01-29', '2019-01-29', '2019-01-29', '2019-01-29', ''),
('1901', '1901BMKG0028', ' Surat keterangan cuaca (hujan angin0 site Jl Slamet riyadi Purwosari Surakarta Tanggal 11/1/2019', '197801221998031001', 'SELESAI', '2019-01-29', '2019-01-29', '2019-01-29', '2019-01-31', '2019-01-29', ''),
('1902', '1901BMKG0029', ' Informasi curah hujan  tanggal 15/12-2018 s/d 20/1-2019 dan prediksi dasarian Januari III dan Februari I', '198910102010122001', 'SELESAI', '2019-01-29', '2019-01-29', '2019-01-29', '2019-01-29', '2019-01-29', ''),
('1903', '1901BMKG0030', ' Informasi curah hujan bulan Januari 2019 wilayah Kandeman Batang', '197602231999031001', 'SELESAI', '2019-01-29', '2019-01-29', '2019-01-29', '2019-01-29', '2019-01-29', ''),
('1904', '1901BMKG0031', ' Informasi curah hujan tanggal 25-27 Januari 20119 wilayah Batang', '197602231999031001', 'SELESAI', '2019-01-29', '2019-01-29', '2019-01-29', '2019-01-29', '2019-01-29', ''),
('1905', '1901BMKG0032', 'Informasi curah hujan maksimum kabupaten Rembang', '198112052006042001', 'SELESAI', '2019-01-30', '2019-02-01', '2019-02-01', '2019-02-01', '2019-01-30', ''),
('1906', '1901BMKG0035', ' Surat keterangan cuaca (hujan) site Jl Urip sumoharjo kabupaten Batang tanggal 26/1-2019', '197001281992022001', 'SELESAI', '2019-01-30', '2019-01-30', '2019-01-30', '2019-01-30', '2019-01-30', ''),
('1907', '1901BMKG0036', 'Surat keterangan cuaca  (hujan angin) site Jl SirojudinTembalang Semarang tanggal 24/1-2019', '197211131995031002', 'SELESAI', '2019-01-30', '2019-01-31', '2019-01-31', '2019-02-04', '2019-01-31', ''),
('1908', '1901BMKG0034', ' Surat keterangan cuaca (hujan angin) site Jl. Raya Semarang Demak Km 8 Semarang tanggal 21/1-2019', '197706282000121002', 'SELESAI', '2019-01-30', '2019-01-31', '2019-01-31', '2019-02-01', '2019-01-30', ''),
('1909', '1901BMKG0037', ' Informasi curah hujan wilayah Bangsri bulan Nopember 2019 Desember 2019 dan Januari 2019', '198503082007012003', 'SELESAI', '2019-01-30', '2019-01-31', '2019-01-31', NULL, '2019-01-31', ''),
('1910', '1803BMKG0012', 'Surat keterangan cuaca (petir) site Besito kecamatan gebog kaupaten Kudus tanggal 17/1-2019   ', '197611141997031001', 'SELESAI', '2019-01-31', '2019-01-31', '2019-01-31', '2019-02-08', '2019-01-31', ''),
('1911', '1803BMKG0012', ' Surat keterangan cuaca (petir) site Letjend S Parman Ungaran timur Kabupaten Semarang tanggal 23/1-2019', '198408112006042002', 'SELESAI', '2019-01-31', '2019-01-31', '2019-01-31', '2019-02-08', '2019-01-31', ''),
('1912', '1803BMKG0012', 'Surat keterangan cuaca (petir) site Wedusan dukuh seti kabupaten Pati tanggal 16/1-2016', '197209051995032001', 'SELESAI', '2019-01-31', '2019-02-01', '2019-02-01', '2019-02-08', '2019-01-31', ''),
('1913', '1803BMKG0012', ' Surat keterangan cuaca (petir) site Pengaron kidul pedurungan Semarang tanggal 23/1-2019', '198910102010122001', 'SELESAI', '2019-01-31', '2019-01-31', '2019-01-31', '2019-02-08', '2019-01-31', ''),
('1914', '1803BMKG0012', ' Surat keterangan cuaca (petir) site Nyatnyono Ungaran barat kabupaten Semarang tanggal 23/1-2019', '197001281992022001', 'SELESAI', '2019-01-31', '2019-02-01', '2019-02-01', '2019-02-08', '2019-01-31', ''),
('1915', '1901BMKG0040', ' Surat keterangan cuaca (hujan) site Jl Pramuka Buaran kabupaten Pekalongan Tanggal 26/1-2019', '197602231999031001', 'SELESAI', '2019-01-31', '2019-01-31', '2019-01-31', '2019-02-01', '2019-01-31', ''),
('1916', '1901BMKG0041', ' Surat keterangan cuaca (hujan angin) Jl lingkar kudus tanggal 16/1-2019 ', '197706282000121002', 'SELESAI', '2019-02-01', '2019-02-01', '2019-02-01', '2019-02-06', '2019-02-01', ''),
('1917', '1901BMKG0042', ' Informasi curah hujan wilayah kecamatan cendono kabupaten kudus tahun 2013 - 2017', '198503082007012003', 'SELESAI', '2019-02-01', '2019-02-01', '2019-02-01', '2019-02-04', '2019-02-01', ''),
('1918', '1901BMKG0031', ' Informasi curah hujan tertinggi wilayah Kandeman kabupaten Batang tahun 2012-2018', '197604192008012015', 'SELESAI', '2019-03-01', '2019-02-01', '2019-02-01', '2019-02-04', '2019-02-01', ''),
('1919', '1902BMKG0001', ' Informasi curah hujan tahun 2018 wilayah Bawen , Ambarawa , Banyubiru Kabupaten Semarang', '198408112006042002', 'SELESAI', '2019-03-01', '2019-02-04', '2019-02-04', '2019-02-06', '2019-02-01', ''),
('1920', '1901BMKG0039', ' Informasi iklim tahun 2018 (radiasi matahari, suhu, kelembaban,curah hujan,penguapan,tekanan udara,angin wilayah Staklim Semarang ', '197602231999031001', 'SELESAI', '2019-02-04', '2019-02-04', '2019-02-04', '2019-02-04', '2019-02-04', ''),
('1921', '1902BMKG0002', ' Informasi curah hujan  tahun 2018 dan bulan Januari 2019 wilayah Tulis kabupaten Batang ', '198910102010122001', 'SELESAI', '2019-02-04', '2019-02-04', '2019-02-04', '2019-02-22', '2019-02-04', ''),
('1922', '1902BMKG0007', 'Surat keterangan cuaca (hujan) site Indomart batang Jl . Jl. Gajah mada  Proyonanggan yengah Batang tanggal 26/1-2019', '198910102010122001', 'SELESAI', '2019-02-06', '2019-02-06', '2019-02-06', '2019-02-06', '2019-02-06', ''),
('1923', '1902BMKG0003', ' Informasi suhu , kelembaban dan curah hujan (Tembalang,pedurungan,Ngaliyan,Semarang barat,Banyumanik) tahun 2018', '197211131995031002', 'SELESAI', '2019-02-04', '2019-02-04', '2019-02-04', '2019-02-06', '2019-02-04', ''),
('1924', '1902BMKG0005', ' Informasi curah hujan tanggal 15 - 31 Januari 2019 wilayah kota Semarang (6 lokasi)', '198112052006042001', 'SELESAI', '2019-02-06', '2019-02-06', '2019-02-06', '2019-02-06', '2019-02-06', ''),
('1925', '1902BMKG0006', ' Informasi curah hujan wilayah Purbalingga (Bobot sari & Rembang) tahun 2017 - 2018', '197209051995032001', 'SELESAI', '2019-02-06', '2019-02-06', '2019-02-06', NULL, '2019-02-06', ''),
('1926', '1902BMKG0008', ' Informasi curah hujan bulan Januari 2018 - Januari 2019 wilayah Tembalang Semarang', '197001281992022001', 'SELESAI', '2019-02-06', '2019-02-06', '2019-02-06', '2019-02-07', '2019-02-06', ''),
('1927', '1812BMKG0003', ' Surat keterangan cuaca (petir) site Jl Kretek - Purworejo kabupaten Wonosobo tanggal  11/1-2019 ', '197604192008012015', 'SELESAI', '2019-02-07', '2019-02-07', '2019-02-07', '2019-02-13', '2019-02-07', '');
INSERT INTO `pelayanan` (`nolayanan`, `idpemohon`, `layanan`, `disposisi`, `ket`, `tgl`, `tgltarget`, `tgljadi`, `tglambil`, `tgldisposisi`, `status`) VALUES
('1928', '1902BMKG0005', ' Informasi curah hujan tanggal 15 - 31 Januari 2018 wilayah Sojomerto , Waduk proto , Weleri kabupaten Kendal', '198408112006042002', 'SELESAI', '2019-02-07', '2019-02-07', '2019-02-07', '2019-02-08', '2019-02-07', ''),
('1929', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Somakaton . Salam kaupaten Magelang tanggal 24/1-2019', '197211131995031002', 'SELESAI', '2019-02-07', '2019-02-07', '2019-02-07', '2019-02-08', '2019-02-07', ''),
('1930', '1902BMKG0009', ' Surat keterangan cuaca (petir) site Jl Soekarno - Hatta Bergas Kabupaten Semarang  tanggal 1/2-2019', '197611141997031001', 'SELESAI', '2019-02-07', '2019-02-07', '2019-02-07', '2019-02-08', '2019-02-07', ''),
('1931', '1902BMKG0010', ' Surat keterangan cuaca (hujan rob) tanggal 26-27Januarai 2019 site Perum Podosugih kel Benda kabupaten Pekalongan Barat', '198503082007012003', 'SELESAI', '2019-02-07', '2019-02-07', '2019-02-07', '2019-02-13', '2019-02-07', ''),
('1932', '1902BMKG0011', ' Surat keterangan cuaca (petir) site Perum Maduresokecamatan Temanggung kabupaten Temanggung tanggal 25/11-2018', '197209051995032001', 'SELESAI', '2019-02-07', '2019-02-08', '2019-02-08', '2019-02-12', '2019-02-07', ''),
('1933', '1901BMKG0013', ' Informasi curah hujan maksimum tahunan . tahun 2015 - 2017 wilayah Sadeng , Kandri ,Tarubudaya ,  Staklim Semarang', '197602231999031001', 'SELESAI', '2019-02-06', '2019-02-07', '2019-02-07', '2019-02-07', '2019-02-06', ''),
('1934', '1902BMKG0012', 'Informasi curah hujan wilayah grobogan suhu dan kelembaban wilayah semarang', '197604192008012015', 'SELESAI', '2019-02-11', '2019-02-11', '2019-02-11', '2019-02-14', '2019-02-11', ''),
('1935', '1902BMKG0013', ' Informasi suhu , radiasi matahari lama penyinayan matahari wilayah semarng tahun 2018', '197611141997031001', 'SELESAI', '2019-02-11', '2019-02-12', '2019-02-12', '2019-02-12', '2019-02-11', ''),
('1936', '1902BMKG0014', ' Informasi curah hujan tanggal 10 Januari  - Februari 2019 wilayah Grobogan , Demak , Semarang', '198408112006042002', 'SELESAI', '2019-02-11', '2019-02-11', '2019-02-12', '2019-02-12', '2019-02-11', ''),
('1937', '1803BMKG0032', ' Surat keterangan cuaca (petir) site Desa Kelet Kec Keling Kabupaten Jepara Tanggal 16/1-2019', '197209051995032001', 'SELESAI', '2019-02-12', '2019-02-12', '2019-02-12', '2019-02-13', '2019-02-12', ''),
('1938', '1803BMKG0032', ' Surat keterangan cuaca (Petir) site desa Balong kec Kembang kabupaten Jepara tanggal 16/1-2019', '197211131995031002', 'SELESAI', '2019-02-13', '2019-02-14', '2019-02-14', '2019-02-14', '2019-02-13', ''),
('1939', '1902BMKG0018', 'Surat keterangan cuaca (hujan petir) Site Indomart Permata puri Ngaliyan  Semarang tanggal 9/2-2019', '198910102010122001', 'SELESAI', '2019-02-13', '2019-02-14', '2019-02-13', '2019-02-14', '2019-02-13', ''),
('1940', '1902BMKG0015', ' Surat keterngan cuaca (hujan petir) site kec kragan kabupaten Rembang tanggal 5/2/2019', '198503082007012003', 'SELESAI', '2019-02-13', '2019-02-14', '2019-02-14', '2019-02-18', '2019-02-13', ''),
('1941', '1902BMKG0015', ' Surat keterangan cuaca (hujan petir)site kec Juwana kabupaten Pati tanggal 6/2-2019 ', '198408112006042002', 'SELESAI', '2019-02-13', '2019-02-13', '2019-02-13', '2019-02-18', '2019-02-13', ''),
('1942', '1902BMKG0015', ' Surat keterangan cuaca (hujan petir) site kec ujung watu kabupaten Jepara tanggal 5/2-2019', '197706282000121002', 'SELESAI', '2019-02-13', '2019-02-13', '2019-02-13', '2019-02-18', '2019-02-13', ''),
('1943', '1902BMKG0016', ' Informasi curah hujan tahun 2018 wilayah Kec Pati, Gembong , Tugu , Sukolilo , Margoyoso , Juwono', '197604192008012015', 'SELESAI', '2019-02-13', '2019-02-14', '2019-02-14', '2019-02-14', '2019-02-13', ''),
('1944', '1902BMKG0017', ' Informasi curah hujan Wil Ngemplak Boyolali dan Kartosuro bulan Nopember 2018 s/d Januari 2019', '197602231999031001', 'SELESAI', '2019-02-13', '2019-02-13', '2019-02-13', '2019-02-14', '2019-02-13', ''),
('1945', '1803BMKG0002', ' Surat keterangan cuaca (Petir) site Wonotunggal Kabupaten Batang tanggal 26/1-2019', '198112052006042001', 'SELESAI', '2019-02-13', '2019-02-14', '2019-02-14', '2019-02-19', '2019-02-13', ''),
('1946', '1803BMKG0002', ' Surat keterangan cuaca (hujan angin) site Warungasem kabupaten Batang 26/1-2019', '197209051995032001', 'SELESAI', '2019-02-13', '2019-02-14', '2019-02-14', '2019-02-18', '2019-02-13', ''),
('1947', '1902BMKG0019', ' Informasi curah hujan bulan Juli s/d agustus 2018 dan Januari 2019 wilayah Staklim Semarang , Stamet Tanjung emas , Candi dan Tlogosari', '197611141997031001', 'SELESAI', '2019-02-13', '0000-00-00', '2019-02-14', '2019-02-15', '2019-02-13', ''),
('1948', '1901BMKG0029', ' Informasi curah hujan dan prakiraan curah hujan dasarian II & III wilayah Jepara bulan Februari 2018', '197801221998031001', 'SELESAI', '2019-02-13', '2019-02-13', '2019-02-13', '2019-02-13', '2019-02-13', ''),
('1949', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Karang bener kabupaten Kudus tanggal 11/2-2019', '198910102010122001', 'SELESAI', '2019-02-14', '2019-02-14', '2019-02-14', '2019-02-19', '2019-02-14', ''),
('1950', '1902BMKG0020', ' Surat keterangan cuaca (hujan) site Jl Slamet riyadi kali pucangkulan kabupaten Batang tanggal 26-27 Januari 2019', '197706282000121002', 'SELESAI', '2019-02-14', '2019-02-14', '2019-02-15', '2019-02-15', '2019-02-14', ''),
('1951', '1902BMKG0021', ' Informasi prakiraan curah hujan dasarian Bulan Maret s/d Juli 2019 Wilayah Jenawi Karanganyar', '198112052006042001', 'SELESAI', '2019-02-14', '2019-02-15', '2019-02-15', '2019-02-19', '2019-02-14', ''),
('1952', '1902BMKG0022', ' Informasi iklim kota pekalongan ', '197001281992022001', 'SELESAI', '2019-02-14', '2019-02-15', '2019-02-15', '2019-02-15', '2019-02-14', ''),
('1953', '1902BMKG0023', ' Surat keterangan cuaca (hujan) site Puri anjasm H5/10 Semarang tanggal 15/2-2019', '197604192008012015', 'SELESAI', '2019-02-18', '2019-02-18', '2019-02-18', '2019-02-19', '2019-02-18', ''),
('1954', '1902BMKG0024', ' Informasi curah hujan tahun 2016 - 2018 wilayah kabupaten Banyumas', '198112052006042001', 'SELESAI', '2019-02-18', '2019-02-19', '2019-02-19', '2019-02-19', '2019-02-18', ''),
('1955', '1902BMKG0025', ' Informasi  curah hujan wilayah Jumantono ,peta prakiraan dan analisis awal musim hujan wilayah kabupaten Karanganyar', '198503082007012003', 'SELESAI', '2019-02-18', '2019-02-19', '2019-02-19', '2019-02-19', '2019-02-18', ''),
('1956', '1902BMKG0026', ' Informasi curah hujan wilayah ketro kabupaten sragen yahun 2008 - 2017', '198503082007012003', 'SELESAI', '2019-02-18', '2019-02-19', '2019-02-19', '2019-02-19', '2019-02-18', ''),
('1957', '1902BMKG0027', ' Informasi curah hujan wilayah Gondangrejo kabupaten Karanganyar tahun2008-2017', '198503082007012003', 'SELESAI', '2019-02-18', '2019-02-19', '2019-02-19', '2019-02-19', '2019-02-18', ''),
('1958', '1902BMKG0028', ' Informasi curah hujan wilayah tawangmanggu tahun 2008 - 2017 , data analisis scopic dan pete SPI nopember 2018-Januari 2019 wilayah kabupaten Karanganyar', '198503082007012003', 'SELESAI', '2019-02-18', '2019-02-19', '2019-02-19', '2019-02-19', '2019-02-18', ''),
('1959', '1809BMKG0002', ' Informasi curah hujan bulan Desember 2018 - Februari 2019 wilayah Tembalang Semarang', '198910102010122001', 'SELESAI', '2019-02-18', '2019-02-18', '2019-02-18', '2019-02-18', '2019-02-18', ''),
('1960', '1902BMKG0029', ' Informasi curah hujan bulan Januari - Februari 2019 wilayah Tembalang , Pedurungan , Banyumanik , Ngaliyan , Semarang barat.', '197001281992022001', 'SELESAI', '2019-02-19', '2019-02-19', '2019-02-19', '2019-02-22', '2019-02-19', ''),
('1961', '1902BMKG0008', ' Informasi unsur iklim (curah hujan , suhu , kelembaban , tekanan maximum & minimum tahun 2018 wilayah kota Semarang', '198408112006042002', 'SELESAI', '2019-02-19', '2019-02-21', '2019-02-21', '2019-02-21', '2019-02-20', ''),
('1962', '1803BMKG0002', ' Surat  keterangan cuaca (petir) site Keling utara kabupaten Jepara tanggal 11/2-2019', '197611141997031001', 'SELESAI', '2019-02-19', '2019-02-20', '2019-02-20', '2019-02-25', '2019-02-20', ''),
('1963', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Kemawi kabupaten Semarang tanggal 8/2-2019', '197209051995032001', 'SELESAI', '2019-02-19', '2019-02-20', '2019-02-20', '2019-02-25', '2019-02-20', ''),
('1964', '1902BMKG0030', ' surat keterangan cuaca (hujan angin) site Sukodono kabupaten Sragen tanggal 26/11-2019', '197706282000121002', 'SELESAI', '2019-02-19', '2019-02-19', '2019-02-19', '2019-02-22', '2019-02-19', ''),
('1965', '1902BMKG0031', ' Informasi curah hujan dan hari hujan bulan Oktober - Desember 2019 dan Prakiraan curah hujan dan hari hujan bulan Januari , februari , Maret 2019 wilayah Kudus ', '198503082007012003', 'SELESAI', '2019-02-19', '2019-02-20', '2019-02-20', '2019-02-20', '2019-02-19', ''),
('1966', '1902BMKG0032', ' Surat keterangan cuaca (hujan )site Jl. Sudirman No. 150 Batang tanggal 26-27 Januari  2019', '197001281992022001', 'SELESAI', '2019-02-19', '2019-02-21', '2019-02-21', '2019-02-21', '2019-02-20', ''),
('1967', '1902BMKG0033', ' Informasicurah hujan wilayah Muntilan bulan Januari s/d Desember 2018', '198503082007012003', 'SELESAI', '2019-02-20', '2019-02-20', '2019-02-20', '2019-02-20', '2019-02-20', ''),
('1968', '1902BMKG0036', ' Surat keterangan cuaca (hujan banjir) site Jl Perum Villa Bahagia II/2 Pekalongan  tanggal 27/1-2019', '198503082007012003', 'SELESAI', '2019-02-21', '2019-02-21', '2019-02-21', '2019-02-21', '2019-02-21', ''),
('1969', '1902BMKG0037', ' Surat keterangan cuaca (hujan angin) site Perum shafa residence A6 klodran colomadu Karanganyar tanggal 21/1-2019', '197706282000121002', 'SELESAI', '2019-02-21', '2019-02-21', '2019-02-21', '2019-02-25', '2019-02-21', ''),
('1970', '1803BMKG0052', ' Surat keterangan cuaca (petir) site Kertoharjo Kota Pekalongan tanggal 7/2-2019', '197604192008012015', 'SELESAI', '2019-02-21', '2019-02-21', '2019-02-21', '2019-02-27', '2019-02-21', ''),
('1971', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Bolongpakis kecamatan Randublatung kabupaten Blora tanggal 19/2-2019', '197209051995032001', 'SELESAI', '2019-02-21', '2019-02-21', '2019-02-21', '2019-02-25', '2019-02-21', ''),
('1972', '1803BMKG0032', ' Surat keterangan cuaca (petir) site Jl Kecipir Kawengan Ungaran timur kabupaten Semarang tanggal 15/2-2019', '197611141997031001', 'SELESAI', '2019-02-21', '2019-02-21', '2019-02-21', '2019-02-25', '2019-02-21', ''),
('1973', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Mrebet Bojongsari kabupaten Purbalingga tanggal 20/2-2019', '197211131995031002', 'SELESAI', '2019-02-21', '2019-02-21', '2019-02-21', '2019-02-25', '2019-02-21', ''),
('1974', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Kedawung TGL Pulosari kabupaten Pemalang tanggal 20/2-2019', '198910102010122001', 'SELESAI', '2019-02-21', '2019-02-21', '2019-02-21', '2019-02-25', '2019-02-21', 'BATAL'),
('1975', '1902BMKG0035', ' Informasi unsur klimatologi (Curah hujan,suhu , kelembaban , angin) tahun 2009-2018 Wilayah Adi sumarmo Boyolali', '198112052006042001', 'SELESAI', '2019-02-21', '2019-02-21', '2019-02-21', '2019-02-26', '2019-02-21', ''),
('1976', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Darma suci kabupaten Tegal  tanggal 20/2-2019', '198408112006042002', 'SELESAI', '2019-02-22', '2019-02-22', '2019-02-22', '2019-02-25', '2019-02-22', ''),
('1977', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Bukateja kutawis kabupaten Purbalingga yanggal 20/2-2019', '197001281992022001', 'SELESAI', '2019-02-22', '2019-02-22', '2019-02-22', '2019-02-25', '2019-02-22', ''),
('1978', '1902BMKG0038', 'Surat keterangan cuaca prediksi curah hujan bulan Maret s/d Mei 2019 wilayah kabupaten Kendal', '197801221998031001', 'SELESAI', '2019-02-22', '2019-02-22', '2019-02-22', '2019-02-22', '2019-02-22', ''),
('1979', '1902BMKG0039', ' Surat  keterangan cuaca (angin) site Jl Salatiga Muncul KM 4 Tuntang kabupaten Semarang tanggal 29/12-2018', '197209051995032001', 'SELESAI', '2019-02-22', '0000-00-00', '2019-02-25', '2019-02-27', '2019-02-22', ''),
('1980', '1902BMKG0040', 'Surat keterangan cuaca hujan disertai angin kencang di wilayah Jl. Gatot Subroto Ngaliyan Semarang tanggal 16 Februari 2019 jam 22.00 - 23.00 wib        ', '197211131995031002', 'SELESAI', '2019-02-25', '2019-02-25', '2019-02-25', '2019-02-27', '2019-02-25', ''),
('1981', '1902BMKG0041', ' Informasi cuarh hujan tahunan tahun 2009 - 2018 wilayah Pesucen kabupaten Kebumen ', '197001281992022001', 'SELESAI', '2019-02-25', '2019-02-25', '2019-02-25', '2019-02-26', '2019-02-25', ''),
('1982', '1803BMKG0032', ' Surat keterangan cuaca (petir) site Blue jepara 01 keling kabupaten Jepara tanggal 11/2-2019', '197602231999031001', 'SELESAI', '2019-02-26', '2019-02-26', '2019-02-26', '2019-03-11', '2019-02-26', ''),
('1983', '1803BMKG0032', ' Surat keterangan cuaca (petir) site Jumowo Boyolali tanggal 8/2-2019 ', '197604192008012015', 'SELESAI', '2019-02-26', '2019-02-26', '2019-02-26', '2019-03-05', '2019-02-26', ''),
('1984', '1803BMKG0032', ' Surat keterangan cuaca (petir) site Bangsri 3 kabupaten Jepara tanggal 17/2-2019', '197706282000121002', 'SELESAI', '2019-02-26', '2019-02-26', '2019-02-26', '2019-03-11', '2019-02-26', ''),
('1985', '1803BMKG0032', ' Surat keterangan cuaca (petir) site Rengging pecanggan kabupaten Jepara tanggal 5/2-2019', '197611141997031001', 'SELESAI', '2019-02-26', '2019-02-26', '2019-02-26', '2019-03-11', '2019-02-26', ''),
('1986', '1902BMKG0008', ' Informasi curah hujan hujan wilayah Tembalang , suhu udara , kelembaban udara wilayah Staklim Semarang tahun 2018', '197602231999031001', 'SELESAI', '2019-02-27', '2019-02-27', '2019-02-27', '2019-03-01', '2019-02-27', ''),
('1987', '1902BMKG0042', ' Informasi curah hujan tahun 2017-2018 wilayah Kandang serang Kabupaten Pekalongan', '198408112006042002', 'SELESAI', '2019-02-28', '2019-02-28', '2019-02-28', '2019-02-28', '2019-02-28', ''),
('1988', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Sembungan kabupaten Wonosobo tanggal 18/2-2019', '197211131995031002', 'SELESAI', '2019-03-01', '2019-03-01', '2019-03-01', '2019-03-06', '2019-03-01', ''),
('1989', '1803BMKG0002', 'Surat keterangan cuaca (petir) site Mangunsari kabupaten Salatiga tanggal 14/2-2019 ', '197209051995032001', 'SELESAI', '2019-03-01', '2019-03-01', '2019-03-01', '2019-03-06', '2019-03-01', ''),
('1990', '1803BMKG0002', ' Surat keterangan cuaca (petir) site Cikura kabupaten tegal tanggal 25/2-2019', '197001281992022001', 'SELESAI', '2019-03-01', '2019-03-01', '2019-03-01', '2019-03-06', '2019-03-01', ''),
('1991', '1808BMKG0021', ' Informasi curah hujan bulan Agustus 2018 s/d Desember 2018 wilayah  Gondang rejo Kabupaten Karanganyar', '197604192008012015', 'SELESAI', '2019-03-04', '2019-03-04', '2019-03-04', '2019-03-05', '2019-03-04', ''),
('1992', '1812BMKG0001', ' Informasi radiasi matahari , suhu , kelembaban , dan angin thahun 2018 wilayah Staklim Semarang', '197611141997031001', 'SELESAI', '2019-03-04', '2019-03-05', '2019-03-05', '2019-03-08', '2019-03-04', ''),
('1993', '1903BMKG0001', ' Surat keterangan cuaca (angin) site Jl Pilangsari Ds Gondang kec Kebonarum kabupaten Klaten tanggal 20/2-2019', '198112052006042001', 'SELESAI', '2019-03-05', '2019-03-05', '2019-03-05', '2019-03-06', '2019-03-05', ''),
('1994', '1903BMKG0003', ' Surat keterangan cuaca  (hujan angin petir) site Artos mall Jl Mayjend Bambang soegeng mertoyudan Magelang tanggal 20/2-2019', '197706282000121002', 'SELESAI', '2019-03-05', '2019-03-05', '2019-03-05', '2019-03-06', '2019-03-05', ''),
('1995', '1903BMKG0002', ' Informasi curah hujan bulan oktober 2018 -  Januari 2019 wilayah Kaliwungu kabupaten Kendal', '197602231999031001', 'SELESAI', '2019-03-05', '2019-03-05', '2019-03-05', '2019-03-05', '2019-03-05', ''),
('1996', '1803BMKG0025', ' Surat keterangan cuaca (petir) site Sumur kec . Cluwak kabupaten Pati tanggal 12/1-2019', '198910102010122001', 'SELESAI', '2019-02-06', '2019-03-06', '2019-03-06', '2019-03-21', '2019-03-06', ''),
('1997', '1803BMKG0025', ' Surat keterangan cuaca (Dawe) kabupaten Kudus tanggal 18/1-2019', '198503082007012003', 'SELESAI', '2019-03-06', '2019-03-06', '2019-03-06', '2019-03-21', '2019-03-06', ''),
('1998', '1903BMKG0004', ' Surat keterangan cuaca (Hujan) site Jl Bukit tebu Ngesrep Banyumanik Semarang tanggal 4/2-2019', '197001281992022001', 'SELESAI', '2019-03-06', '2019-03-06', '2019-03-06', '2019-03-11', '2019-03-06', ''),
('1999', '1903BMKG0005', 'Surat keterangan cuaca (hujan angin) site Jl Diponegoro Magelang tanggal 23/2-2019', '198408112006042002', 'SELESAI', '2019-03-06', '2019-03-06', '2019-03-06', '2019-03-06', '2019-03-06', ''),
('2000', '1903BMKG0006', ' Informasi curah hujan wilayah Banyubiru tahun 2018 suhu udara , kelembaban udara  wilayah Getas Salatiga  tahun 2018', '197602231999031001', 'SELESAI', '2019-03-12', '2019-03-12', '2019-03-12', '2019-03-13', '2019-03-12', ''),
('2001', '1804BMKG0038', ' Surat keterangan cuaca hujan , petir & angin site Desa limbangan kecamatan kabupaten Kendal tanggal 14/2-2019', '197706282000121002', 'SELESAI', '2019-03-12', '2019-03-12', '2019-03-12', '2019-03-14', '2019-03-12', ''),
('2002', '1901BMKG0015', ' Surat keterangan cuaca  (petir) site Kerteg  kabupaten Wonosobo tanggal 15/1-2019 ', '197209051995032001', 'SELESAI', '2019-02-12', '2019-03-12', '2019-03-12', '2019-03-21', '2019-03-12', ''),
('2003', '1903BMKG0007', ' Surat keterangan cuaca (Hujan) site Alfamidi Jl Taman sompok  Semarang tanggal     1 Maret 2019', '197611141997031001', 'SELESAI', '2019-03-12', '2019-03-13', '2019-03-14', '2019-03-15', '2019-03-13', ''),
('2004', '1903BMKG0008', ' Surat keterangan cuaca (hujan lebat dan angin kencang) site kecamatan Batang kabupaten Batang tanggal 27/1-2019', '198503082007012003', 'SELESAI', '2019-03-12', '0000-00-00', '2019-03-13', '2019-03-18', '2019-03-13', ''),
('2005', '1903BMKG0002', ' Informasi curah hujan bulan Desember 2018 Januari dan Februari 2019 wilayah Kaliwunggu Kendal', '198910102010122001', 'SELESAI', '2019-03-13', '2019-03-13', '2019-03-13', '2019-03-14', '2019-03-13', ''),
('2006', '1903BMKG0009', ' Surat keterangan cuaca (hujan) site Jl Raya Dampyak Km 7 Desa Dampyak  kec Kramat kabupaten Tegal tanggal 6/3-2019', '198112052006042001', 'SELESAI', '2019-03-13', '2019-03-14', '2019-03-14', '2019-03-14', '2019-03-13', ''),
('2007', '1903BMKG0010', ' Surat keterangan cuaca (hujan) site Jl Seruni No 62 kabupaten Pekalongan tanggal 26/1-2019', '197211131995031002', 'SELESAI', '2019-03-13', '2019-03-13', '2019-03-13', '2019-04-09', '2019-03-13', ''),
('2008', '1903BMKG0011', ' Informasi curah hujan  tahun 2016 - 2018 wilayah Purworejo', '198408112006042002', 'PROSES', '2019-03-14', '0000-00-00', NULL, NULL, '2019-03-14', ''),
('2009', '1803BMKG0002', ' Informasi curah hujan (petir) site M_ njung pasir kabupaten Demak\r\ntanggal 9/3-2019', '197209051995032001', 'SELESAI', '2019-03-14', '2019-03-14', '2019-03-14', '2019-03-21', '2019-03-14', ''),
('2010', '1812BMKG0001', 'Informasi intensitas radiasi matahari tahun 2013 - 2017 wilayah Semarang', '197001281992022001', 'SELESAI', '2019-03-14', '2019-03-15', '2019-03-15', '2019-03-19', '2019-03-14', ''),
('2011', '1803BMKG0002', ' Surat keterangan cuaca (hujan) site Karang jambu kabupaten Tegal tanggal 4/3/2019', '197604192008012015', 'SELESAI', '2019-02-14', '2019-03-15', '2019-03-15', '2019-03-21', '2019-03-14', ''),
('2012', '1903BMKG0012', ' Surat keterangan cuaca (hujan) site kelurahan Bendungan kecamatan Gajah mungkur Semarang tanggal 3/12-2019', '198910102010122001', 'SELESAI', '2019-03-14', '2019-03-15', '2019-03-15', '2019-03-18', '2019-03-14', ''),
('2013', '1903BMKG0013', ' Informasi curah hujan tahun 1999 - 2019 wilayah Banjarnegara (6 lokasi)  ', '197602231999031001', 'SELESAI', '2019-03-14', '0000-00-00', '2019-04-02', '2019-04-02', '2019-03-14', ''),
('2014', '1903BMKG0014', ' Informasi curah hujan bulan Januari 2019 wilayah Batang (4 lokasi)', '198503082007012003', 'SELESAI', '2019-03-15', '2019-03-15', '2019-03-15', '2019-03-15', '2019-03-15', ''),
('2015', '1803BMKG0002', ' Surat keterangan cuaca Petir site pagalongan kabupaten Bnayuwangi tanggal 11/3-2019', '197211131995031002', 'SELESAI', '2019-03-15', '2019-03-15', '2019-03-15', '2019-03-21', '2019-03-15', ''),
('2016', '1803BMKG0052', ' Surat keterangan cuaca petir site pagersari kabupaten kendal tanggal 24/2-2019', '198910102010122001', 'SELESAI', '2019-02-15', '2019-03-15', '2019-03-15', '2019-04-23', '2019-03-15', ''),
('2017', '1903BMKG0015', ' Surat keterangan cuaca hujan petir site wadas plantungan kabupaten Kendal tanggal  7/2-2019', '198112052006042001', 'SELESAI', '2019-02-15', '2019-03-15', '2019-03-15', '2019-04-02', '2019-03-15', ''),
('2018', '1903BMKG0015', ' Surat keterangan cuaca hujan petir site singorejo sukodadi kabupaten Kendal tanggal 1/2-2019', '197602231999031001', 'SELESAI', '2019-03-15', '2019-03-15', '2019-03-15', '2019-04-02', '2019-03-15', ''),
('2019', '1903BMKG0015', ' Surat keterangan cuaca hujan petir site Tambaksari kabupaten Kendal tanggal 3/3-2019', '197611141997031001', 'SELESAI', '2019-03-15', '2019-03-15', '2019-03-15', '2019-04-02', '2019-03-15', ''),
('2020', '1903BMKG0015', ' Surat keterangan cuaca hujan petir site UNNES sekaran Gunungpati kota Semarang tanggal 7/3-2019', '197706282000121002', 'SELESAI', '2019-03-15', '2019-03-15', '2019-03-15', '2019-04-02', '2019-03-15', ''),
('2021', '1803BMKG0002', ' Surat keterangancuaca petir site kampung Bulu kecamatan Jepara tanggal 12/3-2019', '197604192008012015', 'SELESAI', '2019-03-18', '2019-03-18', '2019-03-18', '2019-03-21', '2019-03-18', ''),
('2022', '1903BMKG0016', ' Informasi curah hujan bulan Januari - Maret 2019 wilayah Tembalang Semarang ', '197001281992022001', 'SELESAI', '2019-03-19', '2019-03-19', '2019-03-19', '2019-03-19', '2019-03-19', ''),
('2023', '1803BMKG0002', ' Surat keterangan cuaca petir site Gebangsari klirong kabupaten Kebumen tanggal 11/3-2019', '197209051995032001', 'SELESAI', '2019-03-21', '2019-03-21', '2019-03-21', '2019-03-21', '2019-03-21', ''),
('2024', '1903BMKG0017', ' Surat keterangan cuaca hujan angin site Jl Raya Parakan - Wonosobo kabupaten Temanggung tanggal 30/12-2018', '198910102010122001', 'SELESAI', '2019-02-21', '2019-03-22', '2019-03-22', '2019-04-08', '2019-04-08', ''),
('2025', '1903BMKG0018', ' Permohonan informasi arah dan kecepatan angin terbanyak dan angin maksimum  wilayah Ngaliyan Semarang tahun 2018 ', '198910102010122001', 'SELESAI', '2019-03-22', '2019-03-22', '2019-03-22', '2019-03-25', '2019-03-22', ''),
('2026', '1803BMKG0012', ' Surat keterangan cuaca petir  site Wukirsawit kabupaten Karanganyar tanggal 1/3-2019', '197209051995032001', 'SELESAI', '2019-03-22', '2019-03-22', '2019-03-22', '2019-03-27', '2019-03-22', ''),
('2027', '1803BMKG0012', ' Suart keterangan cuaca petir site Ngargotirto . sumber lawang kabupaten Sragen tanggal 17/2-2019', '197706282000121002', 'SELESAI', '2019-02-22', '2019-03-22', '2019-03-22', '2019-03-27', '2019-03-22', ''),
('2028', '1903BMKG0020', ' Informasi curah hujan tanggal 1 Februaru s/d 20 Maret 2019 wilayah Gubug , Tegowanu , Karangawen , Brumbung , Tlogosari', '197611141997031001', 'SELESAI', '2019-03-22', '2019-03-22', '2019-03-22', '2019-03-22', '2019-03-22', ''),
('2029', '1903BMKG0019', ' Informasi curah hujan tahun 2018 wilayah Brebes , Klampok , Bulakamba kabupaten Brebes', '198408112006042002', 'SELESAI', '2019-03-22', '2019-03-22', '2019-03-22', '2019-04-01', '2019-03-22', ''),
('2030', '1803BMKG0002', 'Suart keterangan cuaca petir site Danakerta kabupaten Banjarnegara tanggal 20/3 2019', '197602231999031001', 'SELESAI', '2019-03-22', '2019-03-22', '2019-03-22', '2019-03-27', '2019-03-22', ''),
('2031', '1803BMKG0002', ' Surat keterangan cuaca petir site Tegal sari kandeman kabupaten Batang tanggal 22/3-2019', '197001281992022001', 'SELESAI', '2019-03-25', '2019-03-25', '2019-03-25', '2019-03-27', '2019-03-25', ''),
('2032', '1803BMKG0002', ' Suat keterangan cuaca petir site Pegalogan kabupaten Banyumas tanggal 21/3-2019', '197604192008012015', 'SELESAI', '2019-03-25', '2019-03-25', '2019-03-25', '2019-03-27', '2019-03-25', ''),
('2033', '1803BMKG0032', ' Surat keterangan cuaca petir siteJl Tirtomoyo Bandungan kecamatan Ambarawa kabupaten Semarang tanggal 23 Maret 2019 ', '197611141997031001', 'SELESAI', '2019-02-25', '2019-03-26', '2019-03-26', '2019-03-28', '2019-03-25', ''),
('2034', '1901BMKG0031', ' Informasi curah hujan bulan Maret 2019 wilayah kandeman kabupaten Batang ', '197211131995031002', 'SELESAI', '2019-02-25', '2019-03-26', '2019-03-26', '2019-03-26', '2019-03-25', ''),
('2035', '1810BMKG0034', ' Informasi curah hujan bulan Oktober 2018 s/d Maret 2019 wilayah Keling kabupaten Jepara', '198503082007012003', 'SELESAI', '2019-03-26', '2019-03-26', '2019-03-26', '2019-03-28', '2019-03-26', ''),
('2036', '1903BMKG0021', ' Informasi curah hujan tahaun 2017 - maret 2019 dan prediksi curah hujan bulan April 2019 - Desember 2019 wilayah mayong kabupaten Jepara', '198112052006042001', 'SELESAI', '2019-03-26', '2019-03-26', '2019-03-26', '2019-03-26', '2019-03-26', ''),
('2037', '1903BMKG0022', ' Surat keterangan cuaca petir site Jl Papandayan Baru No. 9 Semarang tanggal 25/3-2019', '197706282000121002', 'SELESAI', '2019-03-27', '2019-03-27', '2019-03-27', '2019-03-29', '2019-03-27', ''),
('2038', '1805BMKG0007', ' Surat keterangan cuaca petir site Ngerangan  Cawas kabupaten Klaten tanggal 17/3-2019', '198910102010122001', 'SELESAI', '2019-03-27', '2019-03-27', '2019-03-27', '2019-04-18', '2019-03-27', ''),
('2039', '1903BMKG0023', ' Prakiraan curah hujan dasarian bulan April s/d Mei 2019 wilayah Kaligawe Semarang timur', '197604192008012015', 'SELESAI', '2019-03-27', '0000-00-00', '2019-03-27', '2019-03-28', '2019-03-27', ''),
('2040', '1903BMKG0024', ' Informasi Urah hujan , hari hujan , suhu rata rata , kelembaban udara tahun 2018 dan 2019 (Januari & Februari) wilayah Getas Salatiga', '197211131995031002', 'SELESAI', '2019-03-27', '0000-00-00', '2019-03-28', '2019-03-29', '2019-03-27', ''),
('2041', '1903BMKG0025', ' Informasi Intensitas radiasi matarhari ,  lama penyinaran matahari , suhu udara tahun 2018 wilayah Semarang', '197209051995032001', 'SELESAI', '2019-03-27', '0000-00-00', '2019-03-28', '2019-04-08', '2019-03-27', ''),
('2042', '1903BMKG0002', 'Informasi curah hujan bulan Oktober dan Nopember 2018 wilayah Kaliwungu Kabupaten Kendal', '198408112006042002', 'SELESAI', '2019-03-27', '2019-03-27', '2019-03-27', '2019-03-28', '2019-03-27', ''),
('2043', '1903BMKG0026', ' Informasi curah hujan harian bulan Desember 2018 - Februari 2019 di Pos Hujan Sedaya Kabupaten Kendal ', '198112052006042001', 'SELESAI', '2019-03-28', '2019-03-28', '2019-03-28', '2019-03-29', '2019-03-28', ''),
('2044', '1901BMKG0017', ' Informasi prakiraan curah hujan dasarian wilayah Mijen dan Gunungpati periode April s/d Juni 2019 ', '198503082007012003', 'SELESAI', '2019-03-28', '2019-03-28', '2019-03-28', NULL, '2019-03-28', ''),
('2045', '1903BMKG0027', ' Surat keterangan cuaca (hujan dan angin kencang) wilayah Jl. Perintis Kemerdekaan no. 16A Banyumani Kota Semarang tanggal 26 Maret 2019 ', '198910102010122001', 'SELESAI', '2019-03-28', '2019-03-28', '2019-03-28', '2019-03-28', '2019-03-28', ''),
('2046', '1903BMKG0028', ' Surat keteranga cuaca (hujan dan angin kencang) di wilayah Jl. Woltermonginsidi Kel. Tlogomulyo Kec. Pedurungan Kota Semarang tanggal 27 Maret 2019 ', '198408112006042002', 'SELESAI', '2019-03-28', '2019-03-28', '2019-03-28', '2019-04-05', '2019-03-28', ''),
('2047', '1903BMKG0024', ' Informasi curah hujan , hari hujan , kelembaban dan suhu tahun 2016 -2017 wilayah Getas kabupaten Salatiga', '197001281992022001', 'SELESAI', '2019-03-29', '2019-03-29', '2019-03-29', '2019-04-04', '2019-03-29', ''),
('2048', '1803BMKG0002', ' Surat keterangan cuaca Petir site Sumber rahayu kabupaten Kendal tanggal 26/3-2019', '197604192008012015', 'SELESAI', '2019-04-01', '2019-04-02', '2019-04-02', '2019-04-11', '2019-04-02', ''),
('2049', '1902BMKG0015', ' Surat keterangan cuaca hujan angin site desa Monggot kecamatan Geyer kabupaten Grobogan tanggal 22/3-2019', '197611141997031001', 'SELESAI', '2019-04-01', '2019-04-02', '2019-04-02', '2019-04-08', '2019-04-02', ''),
('2050', '1904BMKG0001', ' Informasi curah hujan tahun 2018 wilayah Tembalang  , Candi , Staklim , Tanjung emas , Tlogosari kota semarang', '197211131995031002', 'SELESAI', '2019-04-01', '2019-04-02', '2019-04-02', '2019-04-11', '2019-04-02', ''),
('2051', '1803BMKG0012', ' Surat keterangan cuaca petir site Jemowo kabupaten Boyolali tanggal 21/3-2019', '197209051995032001', 'SELESAI', '2019-04-01', '2019-04-02', '2019-04-02', '2019-04-09', '2019-04-02', ''),
('2052', '1803BMKG0012', ' Surat keterangan cuaca petir site Tepisari polokarto kabupaten Sukoharjo tanggal 23/3-2019', '197001281992022001', 'SELESAI', '2019-04-01', '2019-04-02', '2019-04-02', '2019-04-09', '2019-04-02', ''),
('2053', '1904BMKG0002', ' Surat keterangan cuaca hujan petir site Jl Woltermunginsidi Kav A2-A4 Tlogomulyo Semarang timur', '198408112006042002', 'SELESAI', '2019-04-01', '2019-04-02', '2019-04-02', '2019-04-05', '2019-04-02', ''),
('2054', '1904BMKG0002', ' Surat keterangan cuaca hujan angin site Jl Woltermunginsidi Rt 3/1 Pedurungan Semarang timur', '197706282000121002', 'SELESAI', '2019-04-01', '2019-04-02', '2019-04-02', '2019-04-05', '2019-04-02', ''),
('2055', '1903BMKG0021', ' Informasi curah hujan tahun 2008 - 2016 wilayah colo kabupaten Kudus ', '198112052006042001', 'SELESAI', '2019-04-02', '2019-04-02', '2019-04-02', '2019-04-02', '2019-04-02', ''),
('2056', '1904BMKG0003', ' Informasi curah hujan , kelembaban  , suhu ,dan intensitas matahari tahu 2018 wilayah Purwantoro kabupaten Wonogiri', '198503082007012003', 'SELESAI', '2019-04-02', '2019-04-05', '2019-04-05', '2019-04-08', '2019-04-04', ''),
('2057', '1904BMKG0004', ' Informasi curah hujan , kelembaban , suhu , intensitas matahari tahu 2018 wilayah  Kertek kabupaten Wonosobo', '197001281992022001', 'SELESAI', '2019-04-02', '2019-04-04', '2019-04-04', '2019-04-08', '2019-04-04', ''),
('2058', '1904BMKG0005', ' Informasi curah hujan Maximum dan hari hujan tahu 2006 - 2018 wilayah kota Semarang', '197604192008012015', 'SELESAI', '2019-04-02', '2019-04-04', '2019-04-04', '2019-04-05', '2019-04-04', ''),
('2059', '1904BMKG0006', ' Surat keterangan cuca hujan site JL KH Ahmad dahlan no 205 Desa Samborejo tirto kabupaten Pekalongan tanggal', '197209051995032001', 'SELESAI', '2019-04-02', '2019-04-04', '2019-04-04', '2019-04-10', '2019-04-04', ''),
('2060', '1904BMKG0007', ' Informasi curah hujan dan hari hujan  dan hari hujan wilayah Purwodadi bulan Nopember dan Desember 2018', '198910102010122001', 'SELESAI', '2019-04-04', '2019-04-10', '2019-04-10', '2019-04-11', '2019-04-04', ''),
('2061', '', ' Informasi curah hujan tahun 2018  - Maret 2019 wilayah Randublatung kabupaten Blora dan cuarh hujan tahun 2019 serta Prediksi curah hujan dasarian bulan April 2019 wilayah Tlogosari Semarang', '198408112006042002', 'SELESAI', '2019-04-04', '2019-04-04', '2019-04-04', '0000-00-00', '2019-04-04', ''),
('2062', '1904BMKG0008', ' Informasi curah hujan  tahun  2018 wilayah Pejawaran . karangkobar , wanayasa . kalibening . banjarmangu , pagentan ,madukoro , Batur kabupaten Banjarnegara dan  watumalang kabupaten Wonosobo ', '197611141997031001', 'SELESAI', '2019-04-04', '2019-04-08', '2019-04-08', '2019-05-03', '2019-04-04', ''),
('2063', '1804BMKG0014', ' Surat keterangan cuaca petir site Kajar kec Lasem Kabupaten Rembang tanggal   Januari 2019', '198112052006042001', 'SELESAI', '2019-04-04', '2019-04-04', '2019-04-04', '2019-06-10', '2019-04-04', ''),
('2064', '1904BMKG0009', ' Informasi curah hujan tahun 2018 wilayah Bukateja kabupaten Purbalingga', '197602231999031001', 'SELESAI', '2019-04-05', '2019-04-08', '2019-04-08', '2019-04-08', '2019-04-08', ''),
('2065', '1803BMKG0002', ' Surat keterangan cuaca petir site PurwasariPWKT kabupaten Banyumas tanggal 28/3-2019', '197001281992022001', 'SELESAI', '2019-04-05', '2019-04-08', '2019-04-08', '2019-04-11', '2019-04-08', ''),
('2066', '1803BMKG0002', ' Surat keterangan cuaca hujan angin site Boja kabupaten Kendal tanggal 3/4-2019', '197209051995032001', 'SELESAI', '2019-04-08', '2019-04-08', '2019-04-08', '2019-04-11', '2019-04-08', ''),
('2067', '1803BMKG0002', ' Surat keterangan cuaca hujan angin site karang jambu kabupaten Tegal tanggal 4/4-2019', '197211131995031002', 'SELESAI', '2019-04-08', '2019-04-10', '2019-04-10', '2019-04-11', '2019-04-09', ''),
('2068', '1901BMKG0012', 'Informasi curah hujan  bulan Juli s/d Desember 2018 wilayah Selo kabupaten Boyolali', '198910102010122001', 'SELESAI', '2019-04-08', '2019-04-09', '2019-04-09', '2019-04-10', '2019-04-08', ''),
('2069', '1904BMKG0010', ' Informasi curah hujan tanggal 16-18 Maret 2018 Wilayah Ngombol dan Purwodadi kabupaten Purworejo', '198112052006042001', 'SELESAI', '2019-04-08', '2019-04-08', '2019-04-08', '2019-04-08', '2019-04-08', ''),
('2070', '1810BMKG0033', ' Surat keterangan cuaca petir site Jl. Karanganyar gunung Semarang 3/3-2019', '197706282000121002', 'SELESAI', '2019-04-09', '2019-04-09', '2019-04-09', '2019-04-12', '2019-04-09', ''),
('2071', '1904BMKG0011', ' Informasi curah hujan dan suhu tahun 2018 wilatah Ungaran Tarubudaya', '197602231999031001', 'SELESAI', '2019-04-09', '2019-04-10', '2019-04-10', '2019-04-11', '2019-04-09', ''),
('2072', '1904BMKG0014', 'Informasi curah hujan bulan Nopember - Desember 2018 wilayah Sedayu kabupaten Kendal', '198112052006042001', 'SELESAI', '2019-04-09', '2019-04-10', '2019-04-10', '2019-04-11', '2019-04-09', ''),
('2073', '1904BMKG0013', ' Informasi curah hujan tahun 2016 - 2017 untuk wilayah Welahan Jepara , Cluwak Pati , Karanggayam Kudus , Klambu Grobogan.', '198408112006042002', 'SELESAI', '2019-04-09', '2019-04-10', '2019-04-10', '2019-04-11', '2019-04-09', ''),
('2074', '1803BMKG0002', ' Surat keterangan cuaca petir site Manyaran kabupaten Wonogiri tanggal 6/4-2019', '197604192008012015', 'SELESAI', '2019-04-09', '2019-04-11', '2019-04-11', '2019-04-11', '2019-04-09', ''),
('2075', '1904BMKG0012', ' Informasi curah hujan bulan  Oktober s/d Nopember 2018 wilayah Sedayu  kaliwungu kabupaten Kendal', '198503082007012003', 'SELESAI', '2019-04-10', '2019-04-10', '2019-04-10', '2019-04-11', '2019-04-09', ''),
('2076', '1904BMKG0015', ' Suret keterangan cuaca hujan angin site Jl Brigjend Sudiarta No 496 Pedurungan Semarang tanggal 27/2-2019', '198503082007012003', 'SELESAI', '2019-04-10', '2019-04-11', '2019-04-11', '2019-04-16', '2019-04-10', ''),
('2077', '1904BMKG0016', ' Surat keterangan cuaca petir site Jl Rinjani kelurahan Bendungan  kecamatan        \r\n Gajah mungkur Semarang tanggal 7/4-2019', '197611141997031001', 'SELESAI', '2019-04-10', '2019-04-10', '2019-04-10', '2019-04-11', '2019-04-10', ''),
('2078', '1904BMKG0017', ' Informasi suhu udara , tekanan udara , kelembaban udara , kecepatan angin , curah hujan tahun 2017 -2018 wilayah kota Semarang', '197611141997031001', 'SELESAI', '2019-04-10', '2019-04-15', '2019-04-15', '2019-04-15', '2019-04-10', ''),
('2079', '1903BMKG0012', ' Surat keterangan cuaca hujan site Jl Rinjani No 9 kelurahan Bendungan kecamatan Gajah mungkur kota Semarang tanggal 25/3-2019', '197211131995031002', 'SELESAI', '2019-04-11', '2019-04-12', '2019-04-12', '2019-04-24', '2019-04-11', ''),
('2080', '1904BMKG0018', ' Informasi suhu , kelembaban tahun 2003 ,2008 , 2013 ,2018, 2019 wilayah Getas Salatiga dan lama penyinaran Matahari bulan April -Juni 2018', '197602231999031001', 'SELESAI', '2019-04-11', '2019-04-12', '2019-04-12', '2019-04-16', '2019-04-12', ''),
('2081', '1904BMKG0019', ' Informasi curah hujan , hari hujan , curah hujan maximum tahun 2009 - 2018 wilayah kota Semarang', '197604192008012015', 'SELESAI', '2019-04-12', '2019-04-12', '2019-04-12', '2019-04-12', '2019-04-12', ''),
('2082', '1803BMKG0032', ' Surat keterangan cuaca petir site desa Bapangan Kabupaten Jepara tanggal 13/4-2019', '197001281992022001', 'SELESAI', '2019-04-15', '0000-00-00', '2019-04-16', '2019-04-18', '2019-04-15', ''),
('2083', '1904BMKG0020', ' Informasi Curah hujan , tekanan udara , suhu udara , kelembaban udara wilayah kiabupaten Banyumas tahun 2018', '197211131995031002', 'SELESAI', '2019-04-15', '2019-04-16', '2019-04-16', '2019-04-16', '2019-04-15', ''),
('2084', '1803BMKG0002', ' Surat keterangan cuaca petir site Manyaran WNG kabupaten Wonogiri tanggal 22/3-2019', '197706282000121002', 'SELESAI', '2019-04-15', '2019-04-16', '2019-04-16', '2019-04-16', '2019-04-15', ''),
('2085', '1904BMKG0022', ' Informasi curah hujan tahun 2014-2018 wilayah Tanjung mas dan Tlogosari kota Semarang', '197209051995032001', 'SELESAI', '2019-04-15', '2019-04-16', '2019-04-16', '2019-04-16', '2019-04-15', ''),
('2086', '1803BMKG0002', ' Surat keterangan cuaca petir site kadumanis kabupaten Brebes tanggal 16/4-2019 ', '198408112006042002', 'SELESAI', '2019-04-16', '2019-04-16', '2019-04-16', '2019-04-18', '2019-04-16', ''),
('2087', '1804BMKG0027', ' Surat keterangan cuaca petir site kecamatan Soggom kabuten Brebes tanggal 30/3-2019', '198910102010122001', 'SELESAI', '2019-04-16', '2019-04-16', '2019-04-16', '2019-04-16', '2019-04-16', ''),
('2088', '1904BMKG0023', ' Informasi Prakiraan awal musim kemarau 2019 dan normal musim hujan di jawa tengah', '197604192008012015', 'SELESAI', '2019-04-16', '2019-04-18', '2019-04-18', '2019-04-24', '2019-04-16', ''),
('2089', '1904BMKG0024', ' Informasi curah hujan dan suhu tahun 2000 -2018 wilayah Jawa tangah', '197602231999031001', 'SELESAI', '2019-04-16', '2019-04-22', '2019-04-04', '2019-04-04', '2019-04-16', ''),
('2090', '1904BMKG0025', ' Informasi suhu dan kelembaban udara tahun 2014 -  2018 wilayah Adi sumarmo Boyolali', '198112052006042001', 'SELESAI', '2019-04-18', '0000-00-00', '2019-04-18', '2019-04-18', '2019-04-18', ''),
('2091', '1904BMKG0026', ' Informasi curah hujanj  tahun 2009 - 2018 wilayah Penawangan kabupaten Grobogan', '198503082007012003', 'SELESAI', '2019-04-18', '0000-00-00', '2019-04-18', '2019-04-18', '2019-04-18', ''),
('2092', '1803BMKG0006', ' Surat keterangan cuaca petir site Dukuh Duwet kelurahan Mojosari kecamatan Sedan kabupaten Rembang', '197001281992022001', 'SELESAI', '2019-04-22', '2019-04-22', '2019-04-22', '2019-04-23', '2019-04-22', ''),
('2093', '1904BMKG0027', ' Surat keterangan cuaca hujan site Dusun Kasuran Gajahan Colomadu kabupaten Karanganyar tanggal 7 Mater 2019', '198910102010122001', 'SELESAI', '2019-04-22', '2019-04-23', '2019-04-23', '2019-04-23', '2019-04-23', ''),
('2094', '1904BMKG0027', ' Surat keterangan cuaca hujan site Jl Veteran No 50 Pasar Kliwon Surakarta tanggal 3/4-2019', '198408112006042002', 'SELESAI', '2019-04-22', '2019-04-23', '2019-04-23', '2019-04-23', '2019-04-23', ''),
('2095', '1904BMKG0001', ' Informasi curah hujan tahun 2018 wilayah Klipang , Ngaliyan , Mangkang kota Semarang', '197611141997031001', 'SELESAI', '2019-04-22', '2019-04-22', '2019-04-22', '2019-04-23', '2019-04-22', ''),
('2096', '1904BMKG0029', ' Informasi curah hujan bulan Februari - April 2019 wilayah Gunem kabupaten Rembang', '197706282000121002', 'SELESAI', '2019-04-23', '2019-04-23', '2019-04-23', '2019-04-25', '2019-04-23', ''),
('2097', '1904BMKG0028', ' Informasi curah hujan bulan Februari - April 2019 wilayah Gunem kabupaten Rembang', '197706282000121002', 'SELESAI', '2019-04-23', '2019-04-23', '2019-04-23', '2019-04-25', '2019-04-23', ''),
('2098', '1904BMKG0011', ' Informasi curah hujan tahun 2018 wilayah Banyubiru, Ngobo, Tarubudayam dadap ayam kabupaten Semarang', '197604192008012015', 'SELESAI', '2019-04-23', '2019-04-24', '2019-04-24', '2019-04-24', '2019-04-23', ''),
('2099', '1803BMKG0052', ' Surat keterangan cuaca petir site Sidorejo lor kota Salatiga tanggal 19/11-2019', '197211131995031002', 'SELESAI', '2019-04-24', '2019-04-24', '2019-04-24', '2019-04-24', '2019-04-24', ''),
('2100', '1904BMKG0030', ' Informasi curah hujan dan kelembaban minimum tahun 2013 - 2017 daerah Pati', '197001281992022001', 'SELESAI', '2019-04-24', '2019-04-24', '2019-04-24', '2019-04-24', '2019-04-24', ''),
('2101', '1904BMKG0032', ' Surat keterangan cuaca hujan Site Jl Raya Semarang Demak Km 10 Satung Demak tanggal 7/4-2019', '197209051995032001', 'SELESAI', '2019-04-24', '2019-04-25', '2019-04-25', '2019-04-25', '2019-04-24', ''),
('2102', '1904BMKG0031', ' Surat keterangan cuaca hujan maxiumum tanggal 1 - 25 Januari 2019 site desa kaliangkek kecamatan Kandeman kabupaten Batang ', '198112052006042001', 'SELESAI', '2019-04-24', '2019-04-24', '2019-04-24', '2019-04-25', '2019-04-24', ''),
('2103', '1904BMKG0033', ' Informasi curah hujan bulan September 2016 - Maret 2019 dan curah bulan 1 - 20 April 2019 wilayah Purwodadi kabupaten Purworejo', '197604192008012015', 'SELESAI', '2019-04-24', '2019-04-24', '2019-04-24', '2019-04-25', '2019-04-24', ''),
('2104', '1803BMKG0052', ' Surat keterangan cuaca petir site Adipala kabupaten Cilacap tanggal 18/4-2019', '198910102010122001', 'SELESAI', '2019-04-25', '2019-04-25', '2019-04-25', '2019-05-06', '2019-04-25', ''),
('2105', '1803BMKG0002', ' Surat keterngan cuaca petir site Gebangsari klirong kabupaten Kebumen tanggal 20/4-2019 ', '198408112006042002', 'SELESAI', '2019-04-25', '2019-04-25', '2019-04-25', '2019-04-26', '2019-04-25', ''),
('2106', '1904BMKG0034', ' Surat keterangan cuaca angin   site ng Jl Sudirman  no 23 Sukoharjo tanggal 24/1-2019', '198503082007012003', 'SELESAI', '2019-04-25', '2019-04-25', '2019-04-25', '2019-05-08', '2019-04-25', ''),
('2107', '1903BMKG0020', ' Informasi curah hujan bulan Maret - April 2019 wilayah (Grobogan , Demak , Semarang) Gubug , Tegowanu , Karangawen , Brumbung , Tlogosari ', '198408112006042002', 'SELESAI', '2019-04-25', '2019-04-25', '2019-04-25', '2019-04-25', '2019-04-25', ''),
('2108', '1904BMKG0035', ' Informasi curah hujan bulan januari - Nopember 2018  dan bulan Desember 2018 - Februari 2019 wilatah Sayung Demak', '197611141997031001', 'SELESAI', '2019-04-25', '2019-04-26', '2019-04-26', '2019-04-29', '2019-04-25', ''),
('2109', '1904BMKG0036', ' Surat keterangan cuaca petir site PT Garuda food Pati Jl Kembang Joyo 100 Kabupaten Pati', '197706282000121002', 'SELESAI', '2019-04-25', '2019-04-26', '2019-04-26', '2019-04-26', '2019-04-25', ''),
('2110', '1904BMKG0037', ' Surat keterangan cuaca hujan site Puncakwangi Kabupaten Pati tanggal 18/4-2019', '198408112006042002', 'SELESAI', '2019-04-26', '2019-04-26', '2019-04-26', '2019-04-26', '2019-04-26', ''),
('2111', '1803BMKG0012', ' Surat keterangan cuaca petir site Bangetayu kec Genuk kota Semarang tanggal 8/4-2019', '197209051995032001', 'SELESAI', '2019-04-26', '2019-04-26', '2019-04-26', '2019-05-08', '2019-04-26', ''),
('2112', '1803BMKG0012', ' Surat keterangan cuaca petir site Klepu jepara Cluwak kabupaten Pati tanggal 1/2-2019  ', '197211131995031002', 'SELESAI', '2019-04-26', '0000-00-00', '2019-04-26', '2019-05-08', '2019-04-26', ''),
('2113', '1803BMKG0012', ' Surat keterangan cuaca petir site  Jrahi kec Gunung wungkal kabupaten Pati tanggal 1/2-2019', '197602231999031001', 'SELESAI', '2019-04-26', '2019-04-26', '2019-04-26', '2019-05-08', '2019-04-26', ''),
('2114', '1804BMKG0011', ' Suarat keterangan cuaca hujan site Pekalongan barat kabupten Pekalongan bulan April 2019', '198503082007012003', 'SELESAI', '2019-04-29', '2019-04-26', '2019-04-26', '2019-04-29', '2019-04-26', ''),
('2115', '1804BMKG0011', ' Surat keterangan cuaca hujan site Sayung kabupaten Demak bulan April 2019', '197001281992022001', 'SELESAI', '2019-04-26', '2019-04-26', '2019-04-26', '2019-04-29', '2019-04-26', ''),
('2116', '1804BMKG0011', ' Surat keterangan cuaca hujan site Tegal dowo kecamatan Tirto kabupaten Pekalongan bulan April 2019', '198910102010122001', 'SELESAI', '2019-04-26', '2019-04-26', '2019-04-26', '2019-04-29', '2019-04-26', ''),
('2117', '1904BMKG0038', ' Surat keterangan cuaca hujan petir site Jl Raya Semarang Kendal KM . 11.5 Karanganyar Tugu Semarang tanggal 15/4-2019', '198112052006042001', 'SELESAI', '2019-04-26', '2019-04-26', '2019-04-26', '2019-04-29', '2019-04-26', ''),
('2118', '1804BMKG0021', 'Informasi curah hujan , hari hujan , suhu max , min , rata rata wilayah Kledung kabupaten temanggung tahun 2018', '198408112006042002', 'SELESAI', '2019-04-29', '2019-04-29', '2019-04-29', '2019-04-29', '2019-04-29', ''),
('2119', '1803BMKG0002', ' Suart keterangan cuaca hujan lebat site Karang jambu Tegal tanggal 29/4-2019', '197211131995031002', 'SELESAI', '2019-04-30', '2019-05-02', '2019-05-03', '2019-05-03', '2019-05-02', ''),
('2120', '1905BMKG0001', ' Surat keterangan cuaca hujan site pangkalan truck Genuksari Genuk Semarang tanggal 8/4-2019', '197001281992022001', 'SELESAI', '2019-05-03', '2019-05-06', '2019-05-06', '2019-05-07', '2019-05-06', ''),
('2121', '1905BMKG0002', ' Informasi curah hujan tahun 2018 wilayah Klipang dan Meteseh kota Semarang', '197209051995032001', 'SELESAI', '2019-05-03', '2019-05-06', '2019-05-06', '2019-05-07', '2019-05-06', ''),
('2122', '1905BMKG0003', ' Informasi curah hujan bulan Maret - April 2019 wilayah Kaliwungu Kendal', '197602231999031001', 'SELESAI', '2019-05-06', '2019-05-06', '2019-05-06', '2019-05-07', '2019-05-06', ''),
('2123', '1803BMKG0052', ' Surat keterangan cuaca petir site Kertijayan kabupaten Pekalongan tanggal 30/4-2019', '197604192008012015', 'SELESAI', '2019-05-07', '2019-05-07', '2019-05-07', NULL, '2019-05-07', ''),
('2124', '1803BMKG0052', ' Surat keterangan cuaca petir site Ngawen kota Salatiga tanggal 30/4-2019', '197611141997031001', 'SELESAI', '2019-05-07', '2019-05-07', '2019-05-07', NULL, '2019-05-07', ''),
('2125', '1905BMKG0004', 'Informasi curah hujan bulan April 2019 dan prakiraan curah hujan dasarian bulan Mei 2019 wilayah Randublatung  kabupaten Blora', '197706282000121002', 'SELESAI', '2019-05-08', '2019-05-08', '2019-05-08', '2019-05-08', '2019-05-08', ''),
('2126', '1904BMKG0037', ' Surat keterangan cuaca hujan site Puncak wangi kabupaten Pati tanggal 15/4-2019', '198408112006042002', 'SELESAI', '2019-05-08', '2019-05-08', '2019-05-08', '2019-05-08', '2019-05-08', ''),
('2127', '1803BMKG0039', ' Informasi curah hujan bulan Nopember 2018 - April 2019 wilayah Sayung Kabupaten Demak', '198112052006042001', 'SELESAI', '2019-05-09', '2019-05-09', '2019-05-09', '2019-05-09', '2019-05-09', ''),
('2128', '1905BMKG0005', ' Informasi curah hujan  dan lama musim kemarau tahun 2014 - 2018 wilayah Kali angkrik kabupaten Magelang', '198503082007012003', 'SELESAI', '2019-05-09', '2019-05-09', '2019-05-09', '2019-05-20', '2019-05-09', ''),
('2129', '1903BMKG0015', ' Surat keterangan cuaca petir site Anjasmoro Semarang barat tanggal 15/4-2018', '197209051995032001', 'SELESAI', '2019-05-10', '2019-05-10', '2019-05-10', '2019-05-16', '2019-05-10', ''),
('2130', '1905BMKG0006', ' Informasi curah hujan tahun 2014 - 2018 wilayah Ungaran kabupaten Semarang', '197001281992022001', 'SELESAI', '2019-05-10', '2019-05-10', '2019-05-10', '2019-05-31', '2019-05-10', ''),
('2131', '1803BMKG0032', 'Surat Keteranga cuaca Petir Site Desa Tlogodowo Kecamatan Wonosalam Kabupaten Demak Tanggal  9 Mei 2019', '197001281992022001', 'SELESAI', '2019-05-13', '0000-00-00', '2019-05-14', '2019-05-15', '2019-05-13', ''),
('2132', '1905BMKG0007', 'Surat keterangan cuaca (hujan lebat) site Jl. Raya Simongan RT04/Rw 02 Kel. Simongan Kec. Semarang Barat Tanggal Kejadian 09 Mei 2019 Jam 17.00', '198910102010122001', 'SELESAI', '2019-05-13', '0000-00-00', '2019-05-14', '2019-05-14', '2019-05-13', ''),
('2133', '1803BMKG0006', ' Surat keterangan cuaca (petir) site Dukuh Krandon Kel. Brayo Kec. Wonotunggal Kab. Batang Tanggal 18 Maret 2019', '198112052006042001', 'SELESAI', '2019-05-13', '0000-00-00', '2019-05-14', '2019-05-15', '2019-05-13', ''),
('2134', '1905BMKG0008', ' Surat keterangan cuaca hujan site kawasan industri candi Jl Gatot subroto Semarang', '198910102010122001', 'SELESAI', '2019-05-15', '2019-05-16', '2019-05-16', '2019-05-21', '2019-05-16', ''),
('2135', '1905BMKG0009', ' Surat keterangan cuaca petir site Sembung mangunsari kabupaten Batang tanggal 2/5-2019', '197604192008012015', 'SELESAI', '2019-05-16', '2019-05-16', '2019-05-16', '2019-05-28', '2019-05-16', ''),
('2136', '1905BMKG0009', ' Surat keterangan cuaca petir site Candi badar kabupaten Batang tanggal 24/4-2019', '197611141997031001', 'SELESAI', '2019-05-16', '2019-05-16', '2019-05-16', '2019-05-28', '2019-05-16', ''),
('2137', '1905BMKG0010', 'Surat keterangan cuaca petir site Cluwak kabupaten Pati tanggal 12/5-2019 ', '197211131995031002', 'SELESAI', '2019-05-16', '2019-05-16', '2019-05-16', NULL, '2019-05-16', ''),
('2138', '1810BMKG0033', ' Surat keterangan cuaca hujan petir sit Jl Rejosari VII Semarang', '197706282000121002', 'SELESAI', '2019-05-16', '2019-05-16', '2019-05-16', '2019-05-17', '2019-05-16', ''),
('2139', '1905BMKG0011', ' Informasi curah hujan tahun 2018 dan prakiraan curah hujan bulanan tahun 2019 2021 awal wilaya Girimoyo kabupaten Wonogiri', '198112052006042001', 'SELESAI', '2019-05-16', '2019-05-20', '2019-05-20', '2019-05-22', '2019-05-17', ''),
('2140', '1905BMKG0012', ' Surat keterangan cuaca hujan angin site Sun motor Jl Pati - Juwono KM 5  Widoro Kandang Pati.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nk  ', '197001281992022001', 'SELESAI', '2019-05-17', '2019-05-20', '2019-05-20', '2019-05-20', '2019-05-17', ''),
('2141', '1902BMKG0023', ' Surat keterangan cuaca hujan site Jl Puri anjasmoro Semarang tanggal 3/2-2019', '197211131995031002', 'SELESAI', '2019-05-17', '2019-05-17', '2019-05-17', '2019-05-20', '2019-05-17', ''),
('2142', '1905BMKG0013', ' Informasi arah dan kecepatan angin tahun 2018 wilayah staklim dan Tanjung emas Semarang', '197602231999031001', 'SELESAI', '2019-05-17', '2019-05-20', '2019-05-20', '2019-05-20', '2019-05-17', ''),
('2143', '1905BMKG0014', '  Surat keterangan cuaca hujan site Jl Pemuda No 51 Semarang tanggal 3/12-2018', '198503082007012003', 'SELESAI', '2019-05-20', '2019-05-20', '2019-05-21', '2019-05-22', '2019-05-20', '');
INSERT INTO `pelayanan` (`nolayanan`, `idpemohon`, `layanan`, `disposisi`, `ket`, `tgl`, `tgltarget`, `tgljadi`, `tglambil`, `tgldisposisi`, `status`) VALUES
('2144', '1905BMKG0015', ' Informasi curah hujan tahun 2008 - 2019 wilayah puri anjasmoro Semarang', '197209051995032001', 'SELESAI', '2019-05-20', '2019-05-20', '2019-05-21', '2019-05-22', '2019-05-20', ''),
('2145', '1905BMKG0016', ' Informasi curah hujan bulan April - Mei 2019 wilayah kaliwunggu Kendal', '198910102010122001', 'SELESAI', '2019-05-20', '2019-05-21', '2019-05-21', '2019-05-21', '2019-05-20', ''),
('2146', '1905BMKG0017', ' Informasi curah hujan tahun 2018 wilayah Delanggu kabupaten Klaten', '197211131995031002', 'SELESAI', '2019-05-21', '2019-05-21', '2019-05-21', '2019-05-21', '2019-05-21', ''),
('2147', '1905BMKG0018', ' Surat keterangan cuaca hujan angin site Banjaran Purbalingga tanggal 7/5-2019', '197611141997031001', 'SELESAI', '2019-05-21', '2019-05-21', '2019-05-21', '2019-05-28', '2019-05-21', ''),
('2148', '1803BMKG0012', '  Surat keterangan cuaca petir site Pasar sapi Kabupaten Semarang tanggal 25/3-2019', '197604192008012015', 'SELESAI', '2019-05-21', '2019-05-21', '2019-05-21', '2019-05-24', '2019-05-21', ''),
('2149', '1905BMKG0019', ' Informasi suhu, kelembaban , angin dan intensitas matahari tahun 2014 - 2018 wilayah Adi sumarmo Boyolali', '198408112006042002', 'SELESAI', '2019-05-21', '2019-05-22', '2019-05-22', '2019-05-24', '2019-05-21', ''),
('2150', '1905BMKG0020', ' Surat keterangan cuaca huan angin site Jl Marina raya PRPP Semarang tanggal 12/3-2019', '198503082007012003', 'SELESAI', '2019-05-22', '2019-05-23', '2019-05-23', '2019-05-23', '2019-05-22', ''),
('2151', '1905BMKG0021', ' Informasi curah hujan bulan Oktober 2018 - April 2019 wilayah Karang anom kabupaten Klaten', '197602231999031001', 'SELESAI', '2019-05-22', '2019-05-23', '2019-05-23', '2019-05-24', '2019-05-22', ''),
('2152', '1905BMKG0022', ' Informasi curah hujan  bulan Desember 2018 - April 2019 wilayah kawasan industri candi Semarang', '197001281992022001', 'SELESAI', '2019-05-22', '2019-05-23', '2019-05-23', '2019-05-24', '2019-05-23', ''),
('2153', '1905BMKG0023', ' Surat keterangan cuaca kejadian hujan dan petir site Jl Semarang purwodadi KM 18 Karangawen Demak tanggal 18/4-2019', '197209051995032001', 'SELESAI', '2019-05-23', '2019-05-23', '2019-05-23', '2019-05-27', '2019-05-23', ''),
('2154', '1905BMKG0024', ' Informasi curah hujan tahun 2016 wilayah Banyubiru kabupaten Semarang', '198408112006042002', 'SELESAI', '2019-05-23', '2019-05-23', '2019-05-24', '2019-05-28', '2019-05-23', ''),
('2155', '1905BMKG0025', ' Informasi suhu udara rata rata tahun 2018 wilayah kabupaten magelang', '198503082007012003', 'SELESAI', '2019-05-27', '2019-05-27', '2019-05-27', '2019-05-27', '2019-05-27', ''),
('2156', '1905BMKG0026', ' Informasi curah hjan bulan Januari 2019 wilayah Batang Ujung negoro', '197706282000121002', 'SELESAI', '2019-05-27', '2019-05-27', '2019-05-27', '2019-05-28', '2019-05-27', ''),
('2157', '1804BMKG0011', ' Informasi curah hujan tanggal 1 - 20 Mei 2019wilayah Jl Tambak rejo Semarang Utara dan Jl Garuda Kec Kramat kabupaten Tegal', '197602231999031001', 'SELESAI', '2019-05-27', '2019-05-27', '2019-05-27', NULL, '2019-05-27', ''),
('2158', '1905BMKG0027', ' Informasi curah hujan bulan Februari - Maret 2019 wilayah Bonang kabupaten Demak', '197611141997031001', 'SELESAI', '2019-05-27', '2019-05-28', '2019-05-28', '2019-06-13', '2019-05-27', ''),
('2159', '1905BMKG0028', ' Informasi curah hujan tahun 2008 . 2012 . 2018 wilayah Staklim , Mijen boja m Taru budaya  Ungaran', '197604192008012015', 'SELESAI', '2019-05-27', '2019-05-28', '2019-05-28', '2019-06-25', '2019-05-28', ''),
('2160', '1905BMKG0029', ' Surat keterangan cuaca hujan site JL Semarang bawen KM 25 bergas kidul kabupaten Semarang tanggal 8/5-2019', '197602231999031001', 'SELESAI', '2019-05-29', '2019-05-29', '2019-05-29', '2019-05-29', '2019-05-29', ''),
('2161', '1906BMKG0001', ' Surat keterangan cuaca petir sita Cluwak kecamatan Plaosaan kabupaten Pati tanggal  6/6-2019', '197001281992022001', 'SELESAI', '2019-06-10', '2019-06-10', '2019-06-10', '2019-06-12', '2019-06-10', ''),
('2162', '1803BMKG0039', ' Informasi curah hujan bulan Nopember 2018 , Desember 2018 dan Januari 2019 wilawah kawasan industri candi Jl . Gatot Soebroto Semarang', '197604192008012015', 'SELESAI', '2019-06-11', '2019-06-11', '2019-06-11', '2019-06-13', '2019-06-11', ''),
('2163', '1906BMKG0002', ' Suart keterangan cuaca hujan site PT Kimia farma Jl Simongan 169 Semarang', '197602231999031001', 'SELESAI', '2019-06-12', '2019-02-12', '2019-06-12', '2019-06-14', '2019-06-12', ''),
('2164', '1906BMKG0003', ' Informasi curah hujan bulan Oktober 2018 - Mei 2019 Wilayah Batursari Klipang Semarang', '198408112006042002', 'SELESAI', '2019-06-12', '0000-00-00', '2019-06-12', '2019-06-13', '2019-06-12', ''),
('2165', '1906BMKG0004', ' Informasi curah hujan bulan April 2019 s/d mei 2019 wilayah Jl unta Semarang', '197611141997031001', 'SELESAI', '2019-06-12', '2019-02-12', '2019-06-12', '2019-06-13', '2019-06-12', ''),
('2166', '1906BMKG0006', ' Informasi curah hujan bulan Januari 2019 - Mei 2019 wilayah Klipang , Meteseh , Candisari dan Bulan Januari 2019 - Desember 2018 wilayah Candisari', '198112052006042001', 'SELESAI', '2019-06-14', '2019-06-17', '2019-06-17', '2019-06-18', '2019-06-14', ''),
('2167', '1906BMKG0007', ' Informasi  kelembaban , tekanan , temperatur tanggal 21 Juni 2009 , 29 Juli 2009 , 31 Juli 2014', '197706282000121002', 'SELESAI', '2019-06-17', '2019-06-17', '2019-06-17', '2019-06-24', '2019-06-17', ''),
('2168', '1906BMKG0008', ' Informasi curah hujan tahun 2018 wilayah Genuk Semarang', '198910102010122001', 'SELESAI', '2019-06-17', '2019-06-18', '2019-06-18', '2019-06-18', '2019-06-17', ''),
('2169', '1803BMKG0052', ' Surat keterangan cuaca  petir site Madusari wanareja kabupaten Cilacap tanggal 30/4-2019', '197211131995031002', 'SELESAI', '2019-06-18', '2019-06-18', '2019-06-18', '2019-06-19', '2019-06-18', ''),
('2170', '1803BMKG0052', ' Surat keterangan cuaca petir site Tritih wetan kabupaten Cilacap tanggal 5/5-2019', '198408112006042002', 'SELESAI', '2019-06-18', '2019-06-18', '2019-06-18', '2019-06-19', '2019-06-18', ''),
('2171', '1803BMKG0052', ' Surat keterangan cuaca petir site Cluwak kabupaten Pati tanggal 5/5-2019', '198112052006042001', 'SELESAI', '2019-06-18', '2019-06-18', '2019-06-18', '2019-06-24', '2019-06-18', ''),
('2172', '1803BMKG0052', ' Surat keterangan cuaca petir site Kragan kabupaten Rembang tanggal 15/5-2019', '198503082007012003', 'SELESAI', '2019-06-18', '2019-06-18', '2019-06-18', '2019-06-19', '2019-06-18', ''),
('2173', '1906BMKG0009', 'Informasi arah dan kecepatan angin , kelembaban rata rata tahun 2018 wilayah Staklim Semarang ', '197604192008012015', 'SELESAI', '2019-06-20', '2019-06-21', '2019-06-21', '2019-06-21', '2019-06-20', ''),
('2174', '1906BMKG0010', ' Prakiraan curah hujan dan hari hujan dasarian bulan Juli - Desember 2019 di wilayah Kec. Jekulo Kab. Kudus', '197211131995031002', 'SELESAI', '2019-06-24', '0000-00-00', '2019-06-24', '2019-06-27', '2019-06-24', ''),
('2175', '1803BMKG0052', ' Surat Keterangan cuaca (petir) Site Ngawen Kab. Semarang Tanggal 29 Maret 2019', '197706282000121002', 'SELESAI', '2019-06-24', '0000-00-00', '2019-06-24', '2019-09-25', '2019-06-24', ''),
('2176', '1803BMKG0052', ' Surat keterangan cuaca (petir) site Kertijayan Kab. Pekalongan Tanggal 29 Maret 2019', '197611141997031001', 'SELESAI', '2019-06-24', '0000-00-00', '2019-06-24', '2019-09-25', '2019-06-24', ''),
('2177', '1803BMKG0052', ' Surat keterangan cuaca (petir) site Wonosobo Barat Kab. Wonosobo tanggal 25 Mei 2019', '197209051995032001', 'SELESAI', '2019-06-24', '0000-00-00', '2019-06-24', '2019-03-27', '2019-06-24', ''),
('2178', '1906BMKG0011', ' Informasi Suhu, Kelembaban udara, dan Lamanya penyinaran matahari tahun 2014 - 2017 di wilayah Kab. Wonogiri ( Jumantono ) dan Informasi curah hujan tahun 2014 - 2017 di wilayah lec. Kismantoro Kab. Wonogiri', '197602231999031001', 'SELESAI', '2019-06-24', '0000-00-00', '2019-06-26', '2019-07-01', '2019-06-24', ''),
('2179', '1906BMKG0012', ' informasi lamanya penyinaran matahari di wilayah SMPK Wadaslintang Kab. Wonosobo Tahun 2014 - 2017 ', '197001281992022001', 'SELESAI', '2019-06-24', '0000-00-00', '2019-06-24', '2019-07-01', '2019-06-24', ''),
('2180', '1906BMKG0013', ' Informasi Curah hujan Wilayah Kejajar Kab. Wonosobo bulan Mei 2010 - Mei 2019', '198910102010122001', 'SELESAI', '2019-06-24', '0000-00-00', '2019-06-26', '2019-07-01', '2019-06-24', ''),
('2181', '1803BMKG0052', 'Surat keterangan cuaca (petir) site RSU Dr. Margono Purwokerto Kab. Banyumas tanggak 25 Mei 2019', '198503082007012003', 'SELESAI', '2019-06-24', '0000-00-00', '2019-06-24', '2019-03-27', '2019-06-24', ''),
('2182', '1906BMKG0014', ' Informasi curah hujan wilayah Madukoro Kota Semarang tahun 2014 - 2017', '197604192008012015', 'SELESAI', '2019-06-24', '0000-00-00', '2019-06-24', '2019-06-27', '2019-06-24', ''),
('2183', '1906BMKG0015', ' Informasi curah hujan, hari hujan bulanan tahun 2018 dan curah hujan tertinggi tahun 2014 - 2018 di wilayah Kec. Semarang Tengah Kota Semarang', '198408112006042002', 'SELESAI', '2019-06-25', '0000-00-00', '2019-06-26', '2019-06-26', '2019-06-25', ''),
('2184', '1805BMKG0012', 'Surat keterangan cuaca petir site Dukuh Krandon Kec. Wonotunggal Kab. Batang tanggal 15 Maret 2019 ', '197209051995032001', 'SELESAI', '2019-06-26', '0000-00-00', '2019-06-27', '2019-06-27', '2019-06-26', ''),
('2185', '1906BMKG0016', 'Surat keterangan cuaca angin kencang site Jl. Prof. Sudarto 1 Kel. Tembalang Kec. Tembalang Kota Semarang tgl 25 Juni 2019', '197611141997031001', 'SELESAI', '2019-06-27', '2019-06-30', '2019-06-30', '2019-07-01', '2019-06-27', ''),
('2186', '1906BMKG0017', 'Data curah hujan bulanan Kab. Semarang Tahun 2017 - 2018, Kab. Kendal dan Demak Tahun 2016  -  2018', '197602231999031001', 'SELESAI', '2019-06-27', '0000-00-00', '2019-06-28', '2019-07-01', '2019-06-27', ''),
('2187', '1906BMKG0018', 'Informasi curah hujan Kab. Purworejo, Kab. Cilacap, dan Kab. Kendal 5 th terakhir', '197211131995031002', 'SELESAI', '2019-06-28', '2019-06-28', '2019-06-28', '2019-06-28', '2019-06-28', ''),
('2188', '1907BMKG0001', ' Informasi curah hujan wilayah Sayung , Tlogosari . Mangkang dan suhu wilayah Klimat Semarang yahun 2017 - 2018', '197602231999031001', 'SELESAI', '2019-07-01', '0000-00-00', '2019-07-02', '2019-07-03', '2019-07-01', ''),
('2189', '1805BMKG0011', ' Informasi curah hujan dan hari hujan Bulan Oktober 2018 - Juli 2019 Kab. Cilacap, Banyumas, Kebumen, Purworejo', '198503082007012003', 'SELESAI', '2019-07-02', '0000-00-00', '2019-07-02', '2019-07-10', '2019-07-02', ''),
('2190', '1906BMKG0018', 'Informasi hari hujan Kab. Purworejo, Kab. CIlacap, Kab, Kendal Tahun 2014 -2018', '197211131995031002', 'SELESAI', '2019-07-02', '2019-07-02', '2019-07-02', '2019-07-02', '2019-07-02', ''),
('2191', '1903BMKG0025', ' Informasi radiasi matahari tahun 2018 wilayah kota Semarang  ', '197611141997031001', 'SELESAI', '2019-07-03', '2019-07-04', '2019-07-04', NULL, '2019-07-03', 'BATAL'),
('2192', '1907BMKG0002', ' Informasi curah hujan , hari hujan dan kordinat stasiun wilayah Selo Boyolali , Kopeng Salatiga , sawangan Magelang tahun 2017 - 2018\r\n', '198910102010122001', 'SELESAI', '2019-07-05', '2019-07-05', '2019-07-05', NULL, '2019-07-05', ''),
('2193', '1907BMKG0003', ' Informasi curah hujan dan koordinat stasiun Tarubudaya , Klepu , Gunungpati tahun 2013 dan  2018', '197706282000121002', 'SELESAI', '2019-07-05', '2019-07-05', '2019-07-05', '2019-07-09', '2019-07-05', ''),
('2194', '1907BMKG0004', ' Informasi curah hujan wilayah Mertoyudan Magelang tahun 2018 -  bulan Januari 2019', '197604192008012015', 'SELESAI', '2019-07-05', '0000-00-00', '2019-07-08', '2019-07-15', '2019-07-05', ''),
('2195', '1902BMKG0019', ' Informasi curah hujan bulan januari s/d Juni 2019 wilayah Staklim Semarang , Stamar tanjung emas , Tlogosari , Candi', '197211131995031002', 'SELESAI', '2019-07-05', '2019-07-05', '2019-07-05', '2019-07-09', '2019-07-05', ''),
('2196', '1907BMKG0007', 'Surat keterangan cuaca kejadian Petir siye Dk Brangkal Desa Kacangan kec. Andong kabupaten Boyolali tanggal 4 Juli 2019', '197602231999031001', 'SELESAI', '2019-07-12', '2019-07-12', '2019-07-12', '2019-07-12', '2019-07-12', ''),
('2197', '1907BMKG0008', ' Informasi curah hujan wilayah Banyubiru kabupaten Semarang  tahun 2001 - 2010 ', '197001281992022001', 'SELESAI', '2019-07-16', '2019-07-16', '2019-07-16', '2019-07-25', '2019-07-16', 'BATAL'),
('2198', '1907BMKG0009', ' Informasi jumlah kejadian petir tahun 2018 wilayah kota Semarang', '197209051995032001', 'SELESAI', '2019-07-16', '2019-07-16', '2019-07-16', '2019-07-18', '2019-07-16', ''),
('2199', '1907BMKG0010', ' Informasi curah hujan wilayah kota Semarang dan suhu dan kelembababan wilayah Staklim Semarang dan Tanjung emas Semarang', '197604192008012015', 'SELESAI', '2019-07-17', '2019-07-19', '2019-07-19', '2019-07-30', '2019-07-17', ''),
('2200', '1907BMKG0011', ' Informasi curah hujan tahun 2010 - 2019 wilayah Sri rejeki / Staklim Semarang', '198503082007012003', 'SELESAI', '2019-07-17', '2019-07-18', '2019-07-18', '2019-07-19', '2019-07-18', ''),
('2201', '1907BMKG0012', ' Informasi curah hujan wilayah Tanjung emas , Tlogosari , Tembalang , Candi , Staklim dan suhu , kelembaban Wilayah Staklim Semarang tahun 2017', '197611141997031001', 'SELESAI', '2019-07-18', '2019-07-18', '2019-07-18', '2019-07-22', '2019-07-18', ''),
('2202', '1907BMKG0013', ' Informasi suhu dan curah hujn tahun 2014 - 2019 wilayah kota Semarang', '198910102010122001', 'SELESAI', '2019-07-18', '2019-07-18', '2019-07-18', '2019-07-18', '2019-07-18', ''),
('2203', '1907BMKG0014', ' Surat keterangan cuaca hujan site Desa Satriyan kecamatan Tersono kabupaten Batang tanggal 3 dan 4 Juli 2019', '198503082007012003', 'SELESAI', '2019-07-19', '2019-07-19', '2019-07-19', '2019-07-22', '2019-07-19', ''),
('2204', '1907BMKG0015', ' Informasi curah hujan , kelembaban  bulan April , Mei , Juni , Juli 2018 wilayah Temanggung dan wonosobo', '197706282000121002', 'SELESAI', '2019-07-19', '2019-07-22', '2019-07-22', '2019-07-24', '2019-07-22', ''),
('2205', '1907BMKG0016', ' informasi curah hujan bulan  2010 s/d  2019 wilayah  Mijen Semarang ', '197209051995032001', 'SELESAI', '2019-07-22', '2019-07-22', '2019-07-22', '2019-07-22', '2019-07-22', ''),
('2206', '1901BMKG0012', ' Informasi curah hujan bulan Januari s/d Juni 2019 wilayah  Sumowono , Bandungan , Secang ,  Ngablak , Pringsurat , Garung , Selo ', '198112052006042001', 'SELESAI', '2019-07-22', '2019-07-22', '2019-07-22', '2019-07-24', '2019-07-22', ''),
('2207', '1907BMKG0017', ' Informasi curah hujan tahun 2018 wilayah kota Semarang ( Brimgim , candi , gunungpati,meteseh, Ngaliyan, Staklim semarang, tlogosari,Stamar tanjungemas)', '198408112006042002', 'SELESAI', '2019-07-23', '2019-07-23', '2019-07-23', '2019-07-24', '2019-07-23', ''),
('2208', '1907BMKG0018', ' Informasi curah hujan tahun 2010 - 2019 wilayah Buyaran kabupaten Demak', '197611141997031001', 'SELESAI', '2019-07-22', '0000-00-00', '2019-07-23', '2019-07-25', '2019-07-23', ''),
('2209', '1907BMKG0019', ' Informasi normal curah hujan tahun 2008 2018 wilayah Jawa tengah', '197001281992022001', 'SELESAI', '2019-07-23', '2019-07-25', '2019-07-25', '2019-07-26', '2019-07-23', ''),
('2210', '1907BMKG0022', ' Informasi prediksi curah hujan bula Agustus 2019 s/d Januari 2020 wilayah  Ungaran kabupaten Semarang', '197211131995031002', 'SELESAI', '2019-07-29', '2019-07-29', '2019-07-29', '2019-07-30', '2019-07-29', ''),
('2211', '1907BMKG0023', ' Informasi curah hujan maksimum bulanan tahun 2009 - 2018 wilayah  Meteseh Tembalang Semarang', '197706282000121002', 'SELESAI', '2019-07-29', '2019-07-30', '2019-07-30', '2019-07-31', '2019-07-30', ''),
('2212', '1907BMKG0024', ' Informasi curah hujan maksimum bulanan tahun 2009 - 2018 wilayah Candi kota Semarang', '198910102010122001', 'SELESAI', '2019-07-29', '2019-07-30', '2019-07-30', '2019-07-31', '2019-07-30', ''),
('2213', '1907BMKG0025', ' Informasi curah hujan wilayah Gamer kabupaten Pekalongan tahun 2007 - 2019', '197602231999031001', 'SELESAI', '2019-07-29', '2019-07-30', '2019-07-30', '2019-07-31', '2019-07-30', ''),
('2214', '1902BMKG0021', 'predisi curah hujan bulan Agustus , September , Oktober 2018 wilayah karanganyar  / Buku buletin prakiraan bujan bulanan bulan Agusus ', '198503082007012003', 'SELESAI', '2019-07-30', '2019-07-30', '2019-07-30', '2019-07-31', '2019-07-30', ''),
('2215', '1902BMKG0008', ' Informasi rata rata bulanan suhu, curah hujan , kelembaban, angin  tahun 2018  wilayah kota Semarang', '197209051995032001', 'SELESAI', '2019-07-31', '2019-08-01', '2019-08-01', '2019-08-01', '2019-08-01', ''),
('2216', '1908BMKG0001', ' Informasi curah hujan tahun 2015 - 2019 wilayah bruno  kabupaten Purworejo', '198112052006042001', 'SELESAI', '2019-08-01', '0000-00-00', '2019-08-02', '2019-08-02', '2019-08-01', ''),
('2217', '1908BMKG0003', ' Informasi curah hujan wilayah Toroh bulan September 2018 - Maret 2019 dan Tanggungharjo bulan Januari 2019 -  Juli 2019 kabupaten Grobogan ', '197001281992022001', 'SELESAI', '2019-08-05', '2019-08-05', '2019-08-05', '2019-08-06', '2019-08-05', ''),
('2218', '1908BMKG0004', ' Informasi curah hujan tahun 2014 -2018  wilayah Purwodadi/Wirosari ', '197602231999031001', 'SELESAI', '2019-08-07', '2019-08-07', '2019-08-07', '2019-08-08', '2019-08-07', ''),
('2219', '1908BMKG0006', ' Informasi curah hujan bulan Desember 2018 s/d Mei 2019 wilayah Salem & Bantarkawung kabupaten Brebes', '197604192008012015', 'SELESAI', '2019-08-07', '2019-08-07', '2019-08-07', '2019-08-08', '2019-08-07', ''),
('2220', '1908BMKG0005', ' Informasi arah kecepatan angin rata bulanan tahun 2018 wilayah kota Semarang', '197209051995032001', 'SELESAI', '2019-08-07', '2019-08-08', '2019-08-08', '2019-08-08', '2019-08-07', ''),
('2221', '1908BMKG0007', ' Informasi curah hujan tahun 2009 -2018 wilayah kota Semarng', '198408112006042002', 'SELESAI', '2019-08-08', '2019-08-08', '2019-08-08', '2019-08-08', '2019-08-08', ''),
('2222', '1908BMKG0008', ' Informasi suhu taun 2009 - 2018 wilayah kota Semarang', '198408112006042002', 'SELESAI', '2019-08-08', '2019-08-08', '2019-08-08', '2019-08-08', '2019-08-08', ''),
('2223', '1908BMKG0009', ' Informasi radiasi matahari bulan Juli 2018 - Juli 2019 wilayah kota Semarang', '197602231999031001', 'SELESAI', '2019-08-12', '2019-08-12', '2019-08-12', '2019-08-13', '2019-08-12', ''),
('2224', '1908BMKG0010', ' Informasi suhu , kelembaban , curah hujan tahun 2000 - 2009 wilayah kota Semarang', '197001281992022001', 'SELESAI', '2019-08-12', '2019-08-13', '2019-08-13', '2019-08-14', '2019-08-12', ''),
('2225', '1908BMKG0011', ' Informasi curah hujan tahun 2016 wilayah Margoyoso kabupaten Pati', '198112052006042001', 'SELESAI', '2019-08-12', '2019-08-12', '2019-08-12', '2019-08-13', '2019-08-12', ''),
('2226', '1908BMKG0012', ' Informasi curah hujan tahun 2004 - 2018 wilayah Watu agung kabupaten Tegal\r\n', '198408112006042002', 'SELESAI', '2019-08-14', '2019-08-15', '2019-08-15', NULL, '2019-08-14', 'BATAL'),
('2227', '1908BMKG0013', ' Surat keterangan cuaca hujan dan angin wilayah Knandeman kabupaten Batang tanggal 22/1-2019', '197001281992022001', 'SELESAI', '2019-08-14', '2019-08-14', '2019-08-14', '2019-08-15', '2019-08-14', ''),
('2228', '1908BMKG0014', ' Informasi curah hujan bulanan di wilayah Nambo dan Larangan Kab. Brebes Tahun 2014 - 2018', '197211131995031002', 'SELESAI', '2019-08-16', '2019-08-16', '2019-08-16', '2019-08-21', '2019-08-16', ''),
('2229', '1908BMKG0015', ' Informasi curah hujan maksimum tahunan tahun 2009 - 2018 Wilayah Bergas kabupaten Semarang', '198503082007012003', 'SELESAI', '2019-08-16', '2019-08-17', '2019-08-17', '2019-08-19', '2019-08-16', ''),
('2230', '1908BMKG0016', ' Informasi curah hujan dan koordinat stasiun tahun 2018 wilayah Pabelan , Grogol , Palur Sukoharjo , Adi sumarmo Boyolali ,  Gondangrejo Karanganyar', '197611141997031001', 'SELESAI', '2019-08-21', '2019-08-22', '2019-08-22', '2019-08-26', '2019-08-22', ''),
('2231', '1908BMKG0017', ' Informasi curah hujan tahun 2008 s/d 2017 wilayah  kabupaten Pati                            \r\n     (Dukuh seti , Jollong , Rendole , Juwana , Cabean ,Sukolilo)', '198112052006042001', 'SELESAI', '2019-08-26', '2019-08-26', '2019-08-26', '2019-08-26', '2019-08-26', ''),
('2232', '1908BMKG0018', ' Informasi curah hujan tahun 2016 s/d 2018 wilayah Jekulo kabupaten Kudus', '197706282000121002', 'SELESAI', '2019-08-26', '0000-00-00', '2019-08-27', NULL, '2019-08-27', ''),
('2233', '1908BMKG0006', ' Informasi curah hujan suhu dan kelembaban bulan Januari 2018 s/d Juli 2019 wilayah Tonjong , Notog , Bumiayu , Bantarkawung ', '197604192008012015', 'SELESAI', '2019-08-27', '2019-08-29', '2019-08-29', '2019-09-02', '2019-08-27', ''),
('2234', '1908BMKG0019', ' Informasi kecepatan angin rata rata  bulan Januari s/d Juli 2019 wilayah Stamet Tegal dan curah hujan  bulan Januari s/d Juli 2019 wilayah Randudonkal  kabupaten Pemalang', '198910102010122001', 'SELESAI', '2019-08-27', '2019-08-27', '2019-08-27', '2019-08-27', '2019-08-27', ''),
('2235', '1908BMKG0020', ' Informasi curah hujan  tahun 2009 s/d 2018 wilayah Batuwarno kabupaten Wonogiri', '197611141997031001', 'SELESAI', '2019-08-27', '0000-00-00', '2019-08-27', '2019-08-28', '2019-08-27', ''),
('2236', '1908BMKG0016', ' Informasi curah hu8jan tahun 2018 wilayah kabupaten Jepara (Batealit , Nalumsari , Kedung , Jepara , Keling , Mayong/Pancur) dan Informasi suhu udara tahun 2018  wilayah Rendole kabupaten Pati', '197211131995031002', 'SELESAI', '2019-08-29', '2019-08-30', '2019-08-30', '2019-09-02', '2019-08-29', ''),
('2237', '1810BMKG0006', ' Informasi curah hujan tahun 2018 wilayah  Jepara Kabupaten Jepara', '197706282000121002', 'SELESAI', '2019-08-29', '2019-08-30', '2019-08-30', '2019-09-03', '2019-08-29', ''),
('2238', '1908BMKG0021', ' Surat keterangan cuaca kejadian angin kencang tanggal 24-25 Agustus 2019 site Jl Semarang - bawen kabupaten Semarang', '197209051995032001', 'SELESAI', '2019-08-30', '2019-08-30', '2019-08-30', '2019-09-02', '2019-08-30', ''),
('2239', '1903BMKG0019', ' Informasi curah hujan bulan Juni dan Nopember 2018 wilayah Brebes kabupaten Brebes', '198408112006042002', 'SELESAI', '2019-08-30', '2019-08-30', '2019-08-30', '2019-09-03', '2019-08-30', ''),
('2240', '1803BMKG0052', '  Surat keterangan cuaca kejadian petir site Brebeg jeruk kabupaten Cilacap tanggal 30/3-2019', '197001281992022001', 'SELESAI', '2019-09-02', '0000-00-00', '2019-09-02', '2019-09-11', '2019-09-02', ''),
('2241', '1803BMKG0052', '  Surat keterangan cuaca kejadian petir  site Sidoharjo kabupaten Sragen tanggal    \r\n 31/3-2019\r\n', '197611141997031001', 'SELESAI', '2019-09-02', '0000-00-00', '2019-09-02', '2019-09-11', '2019-09-02', ''),
('2242', '1803BMKG0052', ' Surat keterangan cuaca petir site Jumo kabupaten Temanggung  tanggal 22/4-2019\r\n', '197602231999031001', 'SELESAI', '2019-09-02', '0000-00-00', '2019-09-02', '2019-09-11', '2019-09-02', ''),
('2243', '1803BMKG0052', ' Surat keterangan cuac akejadian petir site Ngaliyan ngadisono kabupaten Wonosobo tanggal 9/2-2019\r\n', '198910102010122001', 'SELESAI', '2019-09-02', '0000-00-00', '2019-09-02', '2019-09-11', '2019-09-02', ''),
('2244', '1909BMKG0001', ' Informasi curah hujan tahun 2018 bulan April, Mei,Juni wilayah Pulo kulon Kabupaten Grobogan,Singorojo kabupaten Kendal, Sumowono kabupaten Semarang', '198503082007012003', 'SELESAI', '2019-09-03', '2019-09-03', '2019-09-03', '2019-09-03', '2019-09-03', ''),
('2245', '1909BMKG0002', ' Permohonan informasi curah hujan tahun 2016 - 2018 wilayah Bawang kab. Batang , Staklim Semarang , Plered kabupaten Magelang Bedakah kab. Wonosobo', '197209051995032001', 'SELESAI', '2019-09-04', '0000-00-00', '2019-09-05', '2019-09-09', '2019-09-04', ''),
('2246', '1907BMKG0018', ' Informasi hari hujan tahun 2010 - 2019 wilayah Buyaran kabupaten Demak', '197211131995031002', 'SELESAI', '2019-09-05', '2019-09-06', '2019-09-06', '2019-09-09', '2019-09-06', ''),
('2247', '1909BMKG0003', ' Informasi curah hujan tahun 2018 wilayah Sedan kabupaten Rembang', '198408112006042002', 'SELESAI', '2019-09-06', '2019-09-06', '2019-09-06', '2019-09-10', '2019-09-06', ''),
('2248', '1909BMKG0004', ' Informasi curah hujan tahun 2014 - 2018 wilayah Jogoboyo dan Kaligesing kabupaten Purworejo', '198112052006042001', 'SELESAI', '2019-09-10', '2019-09-10', '2019-09-10', NULL, '2019-09-10', ''),
('2249', '1909BMKG0005', ' Informasi curah hujan , suhu, kelembaban bulan Februari , maret , april , mei , juni 2019 wilayahy Tarubudaya kabupaten Semarang', '197001281992022001', 'SELESAI', '2019-09-10', '2019-09-10', '2019-09-10', '2019-09-12', '2019-09-10', ''),
('2250', '1909BMKG0006', ' Informasi curah hujan  tahun 2014 - 2018 wilayah Baturaden kabupaten Banyumas', '197001281992022001', 'SELESAI', '2019-09-11', '2019-09-11', '2019-09-11', '2019-09-11', '2019-09-11', ''),
('2251', '1909BMKG0007', ' Informasi intensitas radiasi matahari tahun 2009 - 2019 wilayah Staklim Semarang', '198112052006042001', 'SELESAI', '2019-09-11', '2019-09-12', '2019-09-12', '2019-09-12', '2019-09-12', ''),
('2252', '1909BMKG0008', ' Informasi curah hujan tahun 2014 - 2018 wilayah Weleri kabupaten Kendal', '197001281992022001', 'SELESAI', '2019-09-12', '2019-09-12', '2019-09-12', '2019-09-17', '2019-09-12', ''),
('2253', '1909BMKG0009', ' Surat keterangan cuaca kejadian angin kencang site Wilayah Mangkang Semarang tanggal 10/9/2019', '197604192008012015', 'SELESAI', '2019-09-16', '2019-09-18', '2019-09-18', '2019-09-18', '2019-09-17', ''),
('2254', '1909BMKG0010', ' Surat keterangan cuaca kejadian angin kencang site Tegal sari Kandeman Batang tanggal 10/9/2019', '197706282000121002', 'SELESAI', '2019-09-16', '2019-09-18', '2019-09-18', '2019-09-18', '2019-09-17', ''),
('2255', '1909BMKG0011', ' Informaasi curah hujan tahun 2009 - 2018 wilayah Temanggung / Bulu', '197209051995032001', 'SELESAI', '2019-09-17', '2019-09-18', '2019-09-18', '2019-10-07', '2019-09-18', ''),
('2256', '1805BMKG0011', ' Informasi curah hujan dan hari hujan tahun 2016 - 2018 wilayah Kartosuro dan Informasi arah dan kecepatan angin terbanyak tahun 2016 - 2018 wilayah Boyolali', '197211131995031002', 'SELESAI', '2019-09-19', '2019-09-20', '2019-09-20', '2019-09-23', '2019-09-20', ''),
('2257', '1909BMKG0012', ' Informasi curah hujan bulan Juni s/d agustus 2019 wilayah Ngaliyan Semarang', '198408112006042002', 'SELESAI', '2019-09-23', '2019-09-23', '2019-09-23', '2019-09-24', '2019-09-23', ''),
('2258', '1909BMKG0013', ' Informasi suhu udara tahun 2008 dan 2018 untuk wilayah Staklim , Stamet A yani , Stamar tanjung emas Semarang ', '197604192008012015', 'SELESAI', '2019-09-24', '2019-09-25', '2019-09-25', NULL, '2019-09-24', ''),
('2259', '1909BMKG0014', ' Informasi curah hujan tahun 2009 - 2018 wilayah Jatibarang kabupaten Brebes', '197611141997031001', 'SELESAI', '2019-09-25', '2019-09-27', '2019-09-27', NULL, '2019-09-26', ''),
('2260', '1909BMKG0015', ' Informasi curah hujan tahun 2016 - 2018 wilayah Mankang kulon, Sigotek, Simongan, Pucang gading, Brumbungan, Kalisari, Ungaran, Karang roto, Sumur jurang', '197602231999031001', 'SELESAI', '2019-09-26', '0000-00-00', '2019-09-29', NULL, '2019-09-26', ''),
('2261', '1909BMKG0016', ' Informasi curah hujan tahun 2018 wilayah Tunjungan, Sambong,Randublatung,Blora', '198503082007012003', 'SELESAI', '2019-09-26', '2019-09-27', '2019-09-27', '2019-10-04', '2019-09-26', ''),
('2262', '1909BMKG0017', ' Surat keterangan cuaca kejadian Angin kencang site Jl Madukoro no 4-5 Semarang tanggal 21 September 2018', '198910102010122001', 'SELESAI', '2019-09-26', '2019-09-27', '2019-09-27', '2019-09-27', '2019-09-26', ''),
('2263', '1910BMKG0002', ' Informasi suhu, kelembaban, penyinaran matahari tahun 2014 -2018 wilayah Rendole kabupaten Pati', '198910102010122001', 'SELESAI', '2019-10-04', '2019-10-04', '2019-10-04', '2019-10-07', '2019-10-04', ''),
('2264', '1910BMKG0003', ' Informasi curah hujan bulan Januari dan Maret 2019 wilayah Bungo kabupaten Demak\r\n', '197604192008012015', 'SELESAI', '2019-10-04', '2019-10-04', '2019-10-04', '2019-10-07', '2019-10-04', ''),
('2265', '1910BMKG0004', ' Surat keterangan cuaca kejadiah angin kencang  site Jl Linkar timur Payaman Kec Mejoho kabupaten Kudus tanggal 22/9/2019', '197604192008012015', 'SELESAI', '2019-10-07', '2019-10-07', '2019-10-07', '2019-10-10', '2019-10-07', ''),
('2266', '1910BMKG0005', ' Informasi curah h8ujan tahun 2017 s/d September 2019 wilayah Ngaliyan Semarang', '197604192008012015', 'SELESAI', '2019-10-10', '2019-10-10', '2019-10-10', '2019-10-11', '2019-10-10', ''),
('2267', '1910BMKG0006', ' Informasi unsur iklim tahun 1989 - 2019  wilayah Kandangan , Lebakbarang, Gamer, Sragi kabupaten Pekalongan', '198408112006042002', 'SELESAI', '2019-10-11', '2019-10-15', '2019-10-15', '2019-10-15', '2019-10-11', ''),
('2268', '1910BMKG0007', ' Informasi peta kegempaan dan sesar wilayah Jawa tengah', '197801221998031001', 'SELESAI', '2019-10-16', '2019-10-16', '2019-10-16', '2019-10-17', '2019-10-16', ''),
('2269', '1910BMKG0008', ' Informasi curah hujan tahun 2012 - 2018 wilayah  Cluwak. Jolong, Pakis baru, Dukuh seti,  Trangkil, Kedung, Karanganyar, ', '197001281992022001', 'SELESAI', '2019-10-18', '2019-10-21', '2019-10-21', NULL, '2019-10-18', ''),
('2270', '1910BMKG0009', ' Informasi curah hujan tahun 2009 -2018 wilayah Donorejo, Keling, Welahan, Nalumsari Kabupaten Jepara', '197602231999031001', 'SELESAI', '2019-10-18', '2019-10-21', '2019-10-21', '2019-10-21', '2019-10-18', ''),
('2271', '1910BMKG0010', ' Informasi prakiraan curah hujan tahun 2019/2020 wilayah Jawa tengah', '198503082007012003', 'SELESAI', '2019-10-14', '2019-10-17', '2019-10-17', '2019-10-18', '2019-10-14', ''),
('2272', '1910BMKG0011', 'Informasi prakiraan curah hujan 2019 wilayah Cilacap, Banyumas, Purbalingga, Banjarnegara', '198503082007012003', 'SELESAI', '2019-10-21', '0000-00-00', '2019-10-21', '2019-10-21', '2019-10-21', ''),
('2273', '1910BMKG0012', ' Informasi curah hujan bulan Desember 2017 dan Januari 2018 - Agustus 2018 wilayah Sawit Boyolali', '197706282000121002', 'SELESAI', '2019-10-21', '2019-10-21', '2019-10-21', '2019-10-22', '2019-10-21', ''),
('2274', '1902BMKG0041', 'Informasi  curah hujan Maximun harian tahun 2009 -2018 wilayah Pesucen kabupaten Kebumen', '197604192008012015', 'SELESAI', '2019-10-21', '2019-10-21', '2019-10-21', '2019-10-21', '2019-10-21', ''),
('2275', '1910BMKG0013', ' Informasi curah hujan  tahun 2009 - 2018 wilayah Buaran kecamatan Kajen kabupaten Pekalongan ', '197211131995031002', 'SELESAI', '2019-10-21', '2019-10-21', '2019-10-21', '2019-10-28', '2019-10-21', ''),
('2276', '1905BMKG0028', ' Informasi curah hujan maksimum tahunan tahun 2018 wilayah Tarubudaya Ungaran dan Mijen Semarang', '197001281992022001', 'SELESAI', '2019-10-22', '2019-10-22', '2019-10-22', '2019-10-22', '2019-10-22', ''),
('2277', '1907BMKG0025', ' Informasi curah hujan bulan  Juni s/d 20 Oktober 2019 wilayah Gamer kabupaten Pekalongan.', '198112052006042001', 'SELESAI', '2019-10-23', '2019-10-23', '2019-10-23', '2019-10-23', '2019-10-23', ''),
('2278', '1910BMKG0005', ' Informasi curah hujan tahun 2010 s/d 2016wilayah Ngaliyan  Semarang', '197209051995032001', 'SELESAI', '2019-10-24', '2019-10-24', '2019-10-24', '2019-11-08', '2019-10-24', ''),
('2279', '1910BMKG0014', ' Informasi suhu dan kelembaban tahun 2014 s/d 2018 wilayah Sempor kabupaten Kebumen', '197211131995031002', 'SELESAI', '2019-10-25', '2019-10-28', '2019-10-28', '2019-10-29', '2019-10-25', ''),
('2280', '1910BMKG0015', ' Surat keterangan cuaca kejadian hujan dan informasi curah hujan tanggal 10 s/d 20 Desember 2017 wilayah bawen kabupaten Semarang', '198408112006042002', 'SELESAI', '2019-10-25', '2019-10-28', '2019-10-28', '2019-10-28', '2019-10-28', ''),
('2281', '1804BMKG0016', ' Informasi curah hujan bulan Juni s/d September 2019 wilayah Kagokan - Gatak Kabupaten Sukoharjo  dan Kutuk - Undaan Kabupaten Kudus', '197611141997031001', 'SELESAI', '2019-10-29', '2019-10-29', '2019-10-29', '2019-10-29', '2019-10-29', ''),
('2282', '1910BMKG0017', ' Informasi cuarh hujan bulan Januari s/d Maret 2019 wilayah Balong kecamatan Kembang kabupaten Jepara', '197001281992022001', 'SELESAI', '2019-10-29', '2019-10-29', '2019-10-29', '2019-10-30', '2019-10-29', ''),
('2283', '1910BMKG0016', ' Informasi curah hujan , suhu , kelembaban bulan januari s/d Oktober 2019 wilayah Getas Salatiga', '198910102010122001', 'SELESAI', '2019-10-30', '2019-10-30', '2019-10-30', '2019-10-31', '2019-10-30', ''),
('2284', '1910BMKG0018', ' Informasi curah hujan tahunan tahun 2009 - 2019 Oktober wilayah Madukoro PRPP Semarang', '197706282000121002', 'SELESAI', '2019-10-31', '2019-10-31', '2019-10-31', '2019-11-06', '2019-10-31', ''),
('2285', '1911BMKG0001', ' Informasi curah hujan dasarian untuk wilayah sendang mulyo  / klipang  Semarang tahun 2009 s/d 2019', '197611141997031001', 'SELESAI', '2019-11-01', '2019-11-04', '2019-11-04', '2019-11-13', '2019-11-01', ''),
('2286', '1911BMKG0002', ' Informasi curah hujan dasarian tahun 2017 wilayah Jawa tengah (40 lokasi)', '197801221998031001', 'SELESAI', '2019-11-01', '2019-11-01', '2019-11-01', '2019-11-01', '2019-10-22', ''),
('2287', '1911BMKG0003', ' Surat keterangan cuaca kejadian hujan angin site Jl Raya Solo Sragen Krikilan Masaran Kabupaten Sragen tanggal 28/10/2019', '197602231999031001', 'SELESAI', '2019-10-31', '2019-11-01', '2019-11-01', '2019-11-05', '2019-10-31', ''),
('2288', '1904BMKG0035', ' Informasi curah hujan bulan Maret s/d Oktober 2019 wilayah Sayung Demak', '197604192008012015', 'SELESAI', '2019-11-05', '2019-11-05', '2019-11-05', '2019-11-06', '2019-11-05', ''),
('2289', '1911BMKG0005', ' Surat keterangan cuaca kejadian hujan dan angin site Purwosuman kec Sukoharjo dan kecamatan Masaran kabupaten Sragen tanggal 28 Oktober 2019', '197706282000121002', 'SELESAI', '2019-11-05', '2019-11-05', '2019-11-05', '2019-11-06', '2019-11-05', ''),
('2290', '1906BMKG0001', ' Surat keterangan cuaca kejadian hujan  site Waru Rembang tanggal 3 Nopember 2018', '198910102010122001', 'SELESAI', '2019-11-05', '2019-11-06', '2019-11-06', '2019-11-11', '2019-11-05', ''),
('2291', '1911BMKG0006', 'Surat keterangan cuaca kejadian  angin site Jl Raya Solo Sragen Krikilan Masaran Kabupaten Sragen tanggal 28/10/2019  ', '198112052006042001', 'SELESAI', '2019-11-05', '2019-11-06', '2019-11-06', '2019-11-13', '2019-11-06', ''),
('2292', '1805BMKG0011', ' Informasi curah hujan dan hari hujan bulan Juli s/d Oktober 2019 wilayah  Cilacap , banyumas . Kebumen , Purworejo', '197602231999031001', 'SELESAI', '2019-11-07', '2019-11-07', '2019-11-07', '2019-11-13', '2019-11-07', ''),
('2293', '1911BMKG0007', ' Surat keterangan cuaca kejadian angin dan hujan site Jl Raya Solo Sragen Km 7 Dagen kecamatan Jaten kabupaten Karanganyar tanggal 28/1/2019', '197801221998031001', 'SELESAI', '2019-11-07', '2019-11-08', '2019-11-08', '2019-11-08', '2019-11-07', ''),
('2294', '1911BMKG0008', ' Surat keterangan cuaca kejadian hujan petir site Desa Gemulung kecamatan Pecangaan kabupaten Jepara tanggal 2 Nopember 2019', '198503082007012003', 'SELESAI', '2019-11-11', '2019-11-12', '2019-11-12', '2019-11-12', '2019-11-11', ''),
('2295', '1911BMKG0009', ' Informasi curah hujan tahun 2010 s/d 2019 wilayah kecamatan Tawangsari kabupaten Sukoharjo ', '198112052006042001', 'SELESAI', '2019-11-12', '2019-11-20', '2019-11-20', '2019-11-26', '2019-11-18', ''),
('2296', '1911BMKG0010', ' Surat keterangan cuaca  hujan angin site  kelurahan Padas kec . Kedungjati kabupaten Grobogan tanggal 11/11-2019 ', '197001281992022001', 'SELESAI', '2019-11-12', '2019-11-13', '2019-11-13', '2019-11-13', '2019-11-12', ''),
('2297', '1901BMKG0022', ' Surat keterangan cuaca kejadian petir site Jl Fatmati no 154 Ds Lopahit Kabupaten Semarang tanggal 14/2-2019', '198408112006042002', 'SELESAI', '2019-11-13', '2019-11-13', '2019-11-13', '2019-11-14', '2019-11-13', ''),
('2298', '1911BMKG0011', ' Informasi arah kecepatan angin maximum tahun 2019 (bln Januari - 13 Nopember) wilayah Staklim Semarang', '197211131995031002', 'SELESAI', '2019-11-13', '2019-11-14', '2019-11-14', '2019-11-18', '2019-11-13', ''),
('2299', '1911BMKG0010', ' Surat keterangan cuaca hujan angin site Dsn Lengkong kelurahan Wonorejo kecamatan Kaliwungu kabupaten Kendal tanggal 13 Nopember 2019', '197602231999031001', 'SELESAI', '2019-11-14', '2019-11-15', '2019-11-15', '2019-11-18', '2019-11-14', ''),
('2300', '1911BMKG0015', ' Informasi curah hujan maksimum harian tahun 2009 - 2018 wilayah Klipang Semarang', '197209051995032001', 'SELESAI', '2019-11-18', '2019-11-18', '2019-11-18', '2019-11-25', '2019-11-18', ''),
('2301', '1911BMKG0014', ' Informasi curah hujan tahun 2009 - 20018 wilayah Tasikmadu kabupaten Karanganyar', '197611141997031001', 'SELESAI', '2019-11-18', '2019-11-19', '2019-11-19', '2019-11-19', '2019-11-18', ''),
('2302', '1911BMKG0013', ' informasi curah hujan wilayah kali gesing kabupaten Purworejo dan  suhu udara , kelembaban , serta lama penyinaran Matahari  wilayah Sempor kabupaten Kebumen tahun 2016 - 2019', '197602231999031001', 'SELESAI', '2019-11-18', '2019-11-19', '2019-11-19', '2019-11-27', '2019-11-19', ''),
('2303', '1911BMKG0012', ' Surat keterangan cuaca hujan angin site Jl Kaligawe karangkimpul kelurahan Tambak harjo Semarang tanggal 13/11/2019', '198910102010122001', 'SELESAI', '2019-11-18', '2019-11-19', '2019-11-19', '2019-11-19', '2019-11-18', ''),
('2304', '1911BMKG0017', ' Surat keterangan cuaca kejadian hujan angin site Jl Garung lor kabupaten Kudus tanggal 13/11/2016', '197706282000121002', 'SELESAI', '2019-11-19', '2019-11-19', '2019-11-19', '2019-11-20', '2019-11-19', ''),
('2305', '1902BMKG0016', ' Informasi curah hujan tahun 2019 (Januari - Nopember) wilayah Kabupaten Pati (Pati,Gembong,Tayu,Sukolilo,Margoyoso,Juwana)', '197604192008012015', 'SELESAI', '2019-11-19', '2019-11-20', '2019-11-20', '2019-11-20', '2019-11-19', ''),
('2306', '1909BMKG0009', ' Surat keterangan cuaca hujan angin site Jl Raya Mangkang 17.5Semarang tanggal 13/11/2019', '198503082007012003', 'SELESAI', '2019-11-19', '2019-11-20', '2019-11-20', '2019-11-21', '2019-11-19', ''),
('2307', '1911BMKG0018', ' Informasi curah hujan tanggal 1 September s/d 18 Nopember 2019 wilayah blora kabupaten Blora', '197001281992022001', 'SELESAI', '2019-11-20', '2019-11-21', '2019-11-21', '2019-12-04', '2019-11-20', ''),
('2308', '1911BMKG0019', 'Surat keterangan cuaca kejadian hujan angin petir site langenharjo kecamatan grogol kabupaten Sukoharjo tanggal 16/11/2019', '198408112006042002', 'SELESAI', '2019-11-20', '2019-11-21', '2019-11-21', '2019-11-21', '2019-11-20', ''),
('2309', '1910BMKG0016', ' Informasi curah hujan suhu dan kelembaban bulan oktober 2018 wilayah Getas kabupaten Salatiga', '198910102010122001', 'SELESAI', '2019-11-20', '2019-11-21', '2019-11-21', '2019-11-26', '2019-11-20', ''),
('2310', '1911BMKG0020', ' Prakiraan curah hujan bulan Nopember dasarian III dan bulan Desember 2019 wilayah Purworejo', '198503082007012003', 'SELESAI', '2019-11-22', '2019-11-22', '2019-11-22', '2019-11-22', '2019-11-22', ''),
('2311', '1911BMKG0021', ' Surat keterangan cuaca kejadian angin site Indomart mijen Semarang tanggal              17 Nopember 2019', '198408112006042002', 'SELESAI', '2019-11-22', '2019-11-22', '2019-11-22', '2019-11-25', '2019-11-22', ''),
('2312', '1905BMKG0018', ' Surat keterangan cuaca kejadian hujan angin site Babakan kabupaten Cilacap tanggal 19 Nopember 2019', '197001281992022001', 'SELESAI', '2019-11-22', '2019-11-22', '2019-11-22', '2019-11-27', '2019-11-22', ''),
('2313', '1911BMKG0022', ' Informasi curah hujan bulan Agustus , September , Oktober 2019 wilayah kabupaten demak ( Wedung , Sayung , Jengsemi )', '197001281992022001', 'SELESAI', '2019-11-26', '2019-11-26', '2019-11-26', '2019-11-27', '2019-11-26', ''),
('2314', '1911BMKG0023', ' Surat keterangan cuaca kejadian hujan angin site  Jl Mayor sunaryo No 1 Surakarta tanggal 10/11-2019', '197602231999031001', 'SELESAI', '2019-11-28', '2019-11-28', '2019-11-29', '2019-11-29', '2019-11-28', ''),
('2315', '1912BMKG0002', ' Informasi curah hujan tahunan tahun 2016 - 2019 wilayah kota semarang ( Semarang barat , Gunungpati , Mangkang )', '197211131995031002', 'SELESAI', '2019-12-02', '2019-12-02', '2019-12-02', '2019-12-03', '2019-12-02', ''),
('2316', '1912BMKG0003', ' Surat keterangan cuaca kejadian hujan site Jl.Yosodipura No 133 Mangkubumen Banjarsari Surakarta tanggal 30/11/2019', '198503082007012003', 'SELESAI', '2019-12-03', '2019-12-04', '2019-12-04', '2019-12-05', '2019-12-03', ''),
('2317', '1804BMKG0028', ' Surat keterangan cuaca kejadian hujan angin site Pemuda mlinjo tonggalan Klaten tengah tanggal 28/11/2019', '197602231999031001', 'SELESAI', '2019-12-03', '2019-12-04', '2019-12-04', '2019-12-04', '2019-12-03', ''),
('2318', '1912BMKG0004', ' Informasi curah hujan bulanan tahun 2016 - 2019 (Nopember) wilayah Gantiwarno kabupaten Klaten', '197611141997031001', 'SELESAI', '2019-12-04', '2019-12-04', '2019-12-04', NULL, '2019-12-04', ''),
('2319', '1912BMKG0005', ' Informasi curah hujan tahun 2019 (Januari - Nopember) dan prakiraan curah hujan bulan Desember 2019 wilayah Punggelan kabupaten Banjarnegara', '198408112006042002', 'SELESAI', '2019-12-04', '2019-12-04', '2019-12-04', '2019-12-06', '2019-12-04', ''),
('2320', '1912BMKG0001', ' Surat keterangan cuaca kejadian amgin site Jl Daren Triris Nalumsari kabupaten Jepara tanggal 28/10/2019', '198910102010122001', 'SELESAI', '2019-12-02', '2019-12-02', '2019-12-02', '2019-12-04', '2019-12-02', ''),
('2321', '1912BMKG0006', ' Informasi curah hujan tahun 2019 wilayah Gunungpati Semarang', '198112052006042001', 'SELESAI', '2019-12-05', '2019-12-05', '2019-12-05', '2019-12-05', '2019-12-05', ''),
('2322', '1912BMKG0007', ' Informasi curah hujan tahun 2019(s/d Nopember) Wilayah Trangkil kbupten Pati', '197001281992022001', 'SELESAI', '2019-12-05', '2019-12-05', '2019-12-05', '2019-12-05', '2019-12-05', ''),
('2323', '1912BMKG0008', ' Informasi curah hujan tahun 2019 wilayah Selo-Boyolali , Getasan-Salatiga , Pakis-Magelang', '197209051995032001', 'SELESAI', '2019-12-06', '2019-12-06', '2019-12-06', '2019-12-09', '2019-12-06', ''),
('2324', '1906BMKG0001', ' Surat keterangan cuaca petir site Sukolilo barat kabupaten Pati tanggal 25/11/2019\r\n', '197604192008012015', 'SELESAI', '2019-12-09', '2019-12-09', '2019-12-09', '2019-12-13', '2019-12-09', ''),
('2325', '1912BMKG0009', ' Urat keterangan cuaca kejadian hujan angin petir site  Jl Raya Semarang kendal KM12 Blok B-9 kawsan industri wijaya kusuma  Randugarut Semarang . tanggal 6 Desember 2019', '197001281992022001', 'SELESAI', '2019-12-09', '2019-12-09', '2019-12-09', '2019-12-10', '2019-12-09', ''),
('2326', '1907BMKG0012', ' Informasi cuarh hujan tahun 2017 wulayah mijen ,  tahun 2016 & 2018 wilayah Tembalang , tanjung emas , candi , tlogosari ,  staklim , mijen  , tahun 2016 & 2018 suhu dan kelembaban  wilayah Staklim Semarang', '198503082007012003', 'SELESAI', '2019-12-09', '2019-12-09', '2019-12-09', '2019-12-10', '2019-12-09', ''),
('2327', '1905BMKG0018', ' Surt keterangan cuaca kejadian hujan angin site Karang jambu Tegal tanggal 7/12/2019', '197706282000121002', 'SELESAI', '2019-12-10', '2019-12-11', '2019-12-11', '2019-12-16', '2019-12-10', ''),
('2328', '1905BMKG0018', ' Surat keterangan cuaca kejadian hujan angin site Sindang sari Majenang kabupaten Cilacap tanggal 7/12/2019', '198112052006042001', 'SELESAI', '2019-12-10', '2019-12-12', '2019-12-12', '2019-12-16', '2019-12-12', ''),
('2329', '1912BMKG0010', ' Surat keterangan cuaca kejadian hujan angin site kecamatan  sayung -  Desmak tanggal 8/12/2019', '198408112006042002', 'SELESAI', '2019-12-10', '2019-12-11', '2019-12-11', '2019-12-12', '2019-12-10', ''),
('2330', '1803BMKG0052', ' Surat keterangan cuaca kejadian petir site Karangmoncol kabupaten Purbalingga tanggal 24/11/2019', '197602231999031001', 'SELESAI', '2019-12-10', '2019-12-11', '2019-12-11', NULL, '2019-12-10', ''),
('2331', '1912BMKG0011', ' Surat keterangan cuaca kejadian hujan site Jl Madukoro 08 no. 4   Semarang       \r\n tanggal 5/12/2019', '198503082007012003', 'SELESAI', '2019-12-11', '2019-12-11', '2019-12-11', '2019-12-12', '2019-12-11', ''),
('2332', '1912BMKG0012', ' Informasi curah hujan dasarian . bulan Maret s/d Nopember 2018 wilayah Ampel gading dan Bodeh kabupaten Pemalang', '198910102010122001', 'SELESAI', '2019-12-11', '2019-12-11', '2019-12-11', '2019-12-11', '2019-12-11', ''),
('2333', '1912BMKG0013', ' Surat keterangan cuaca kejadian hujan site Jl Dr Wahidin no 70  Candisari Semarang tanggal  2 Nopember 2019', '197209051995032001', 'SELESAI', '2019-12-12', '2019-12-12', '2019-12-12', '2019-12-16', '2019-12-12', ''),
('2334', '1912BMKG0014', ' Surat keterangan cuaca hujan angin site Jl Raya Pati juwana KM.7 Desa Purworejo kecamatan Pati kabupaten Pati tanggal 11/12/2019', '197604192008012015', 'SELESAI', '2019-12-12', '2019-12-12', '2019-12-12', '2019-12-13', '2019-12-12', ''),
('2335', '1912BMKG0015', ' Analisis prakiraan  iklim tahun 2020 wilayah tangkapan waduk mrica kabupaten Banjarnegara', '197801221998031001', 'SELESAI', '2019-12-12', '2019-12-11', '2019-12-11', '2019-12-12', '2019-11-07', ''),
('2336', '1905BMKG0018', ' Surat keterangan cuaca petir site Karanganyar kabupaten Purbalingga                         tanggal 10 Desember 2019', '197706282000121002', 'SELESAI', '2019-12-12', '2019-12-12', '2019-12-12', '2019-12-16', '2019-12-12', ''),
('2337', '1803BMKG0024', ' Surat keterangan cuaca kejadian hujan angin site Combat magersari kecamatan Magelang Selatan tanggal 9/12/2019', '197602231999031001', 'SELESAI', '2019-12-13', '2019-12-13', '2019-12-13', '2019-12-17', '2019-12-12', ''),
('2338', '1912BMKG0017', ' Surat keterangan cuaca  kejadian hujan angin petir site Jl Raya Semarang Demak  Km  9 Sayung Demak . tanggal 8/12/2019', '198408112006042002', 'SELESAI', '2019-12-12', '2019-12-12', '2019-12-12', '2019-12-13', '2019-12-12', ''),
('2339', '1912BMKG0016', ' Surat keterangan cuaca  kejadian hujan angin site Jl Hang tuah no 79 kecamatan Juwana kabupaten Pati . tanggal 11/12/2019', '197604192008012015', 'SELESAI', '2019-12-12', '2019-12-12', '2019-12-12', '2019-12-13', '2019-12-12', ''),
('2340', '1906BMKG0001', ' Surat keterangan cuaca kejadian petir site Karang bener kabupaten Kudus tanggal 8/12/2019', '198910102010122001', 'SELESAI', '2019-12-13', '2019-12-13', '2019-12-13', '2020-01-02', '2019-12-13', ''),
('2341', '1912BMKG0018', ' Surat keterangan cuaca kejadian hujan angin site Jl Raya Semarang Demak KM 9 Ds Sriwulan  Sayung Demak tanggal 8/12/2019', '197211131995031002', 'SELESAI', '2019-12-13', '2019-12-16', '2019-12-16', '2019-12-16', '2019-12-13', ''),
('2342', '1911BMKG0010', ' Surat keterangan cuaca kejadian hujan angin site dukuh Santren kelurahan Sembangin kecamatan Banjarejo kabupaten Blora tanggal 12/13/2018', '197001281992022001', 'SELESAI', '2019-12-16', '2019-12-17', '2019-12-17', '2019-12-18', '2019-12-13', ''),
('2343', '1911BMKG0010', ' Surat keterangan cuaca kejadian hujan angin site dusun Tegalrejo kelurahan Tegalrejo  kecamatan sawit kabupaten Boyolali tanggal 11/12/2019', '197209051995032001', 'SELESAI', '2019-12-16', '2019-12-16', '2019-12-16', '2019-12-18', '2019-12-13', ''),
('2344', '1912BMKG0020', ' Surat keterangan cuaca kejadian hujan angin site Kawsan industri candi blok A3 no 32 kel ngaliyan Semarang tanggal 9/12/2019', '197209051995032001', 'SELESAI', '2019-12-16', '2019-12-17', '2019-12-17', '2019-12-17', '2019-12-16', ''),
('2345', '1912BMKG0019', ' Surat keterangan cuaca kejadian hujan angin site Jl Tempursaru desa Tempursari kecamatan Ngawen kabupaten Klaten tanggal 9/12/2019', '197611141997031001', 'SELESAI', '2019-12-16', '2019-12-17', '2019-12-17', '2019-12-17', '2019-12-16', ''),
('2346', '1912BMKG0021', ' Informasi arah dan kecepatan angin tanggal 1 - 15  Desember 2019 wilayah Boyolali', '197604192008012015', 'SELESAI', '2019-12-16', '2019-12-17', '2019-12-17', '2019-12-17', '2019-12-16', ''),
('2347', '1803BMKG0032', ' Surat keterangan cuaca kejadian petir site Campursarikecamatan kerteg kabupaten Wonosobo tanggal 29/11/2019', '197602231999031001', 'SELESAI', '2019-12-16', '2019-12-17', '2019-12-17', '2019-12-17', '2019-12-16', ''),
('2348', '1912BMKG0021', ' Surat keterangan cuaca kejadian hujan angin site Jl Raya Semarang Kendal Km  11.5 Semarang tanggal 4 /12/2019', '197706282000121002', 'SELESAI', '2019-12-16', '2019-12-17', '2019-12-17', '2019-12-18', '2019-12-16', ''),
('2349', '1912BMKG0022', ' Surat keterangan cuca hujan angin site Jl Raya Demak kudus keluraha Bintoro kabupaten Demak tanggal 10/12/2019', '197801221998031001', 'SELESAI', '2019-12-17', '2019-12-17', '2019-12-17', NULL, '2019-12-17', ''),
('2350', '1912BMKG0023', ' Surat keterangan cuaca kejadian hujan angin site Perum Tanjung Regency kecamatan Mertoyudan Kabupaten Magelang tanggal 7/12/2019', '197801221998031001', 'SELESAI', '2019-12-17', '2019-12-17', '2019-12-17', NULL, '2019-12-17', ''),
('2351', '1812BMKG0012', ' Surat keterangan cuaca kejadian hujan angin site Jl Gatot soubroto Tarubudaya Ungaran  kabupaten Semarang tanggal  10 Desember 2019', '198503082007012003', 'SELESAI', '2019-12-18', '2019-12-19', '2019-12-19', NULL, '2019-12-18', ''),
('2352', '1912BMKG0024', ' Surat keterangan cuaca kejadian angin kencang site desa Trangkil kecamatan Trangkil kabupaten Pati tanggal 11/12/2019', '197001281992022001', 'PROSES', '2019-12-19', '2019-12-19', NULL, NULL, '2019-12-19', ''),
('2353', '1912BMKG0025', ' Informasi curah hujan tanggal 1-15 Desember 2019 wilayah Purwokerto kota', '197602231999031001', 'PROSES', '2019-12-19', '0000-00-00', NULL, NULL, '2019-12-19', ''),
('2354', '1905BMKG0018', ' Surat keterangan cuaca petir site Banteran Kel. Banteran Kec. Sumbang Kab. Banyumas Tanggal 24 Desember 2019', '197611141997031001', 'SELESAI', '2019-12-26', '0000-00-00', '2019-12-26', '2019-12-30', '2019-12-26', '');
INSERT INTO `pelayanan` (`nolayanan`, `idpemohon`, `layanan`, `disposisi`, `ket`, `tgl`, `tgltarget`, `tgljadi`, `tglambil`, `tgldisposisi`, `status`) VALUES
('2355', '1803BMKG0032', 'Surat keterangan cuaca petir site Dkh. Tanggulasi Desa Tulaan Kec. Donorejo Kabupaten Jepara tanggal 21 Desember 2019', '197209051995032001', 'SELESAI', '2019-12-26', '0000-00-00', '2019-12-26', '2019-12-30', '2019-12-26', ''),
('2356', '1803BMKG0032', ' Surat keterangan cuaca petir site Jl. Kecipir Desa Kawengan Kec. Ungaran Timur Kab. Semarang tanggal 25 Desember 2019', '198503082007012003', 'SELESAI', '2019-12-27', '0000-00-00', '2019-12-27', '2019-12-30', '2019-12-27', ''),
('2357', '1912BMKG0026', ' Data curah hujan tahunan Kota Semarang tahun 2017 - 2018 ', '198112052006042001', 'SELESAI', '2019-12-27', '0000-00-00', '2019-12-27', '2019-12-30', '2019-12-27', ''),
('2358', '1912BMKG0027', ' Data Curah hujan tanggal 21 -27 Desember 2019 di wilayah Semarang Selatan Kota Semarang', '197001281992022001', 'SELESAI', '2019-12-30', '0000-00-00', '2019-12-30', '2019-12-30', '2019-12-30', ''),
('2359', '1912BMKG0028', 'Surat keterangan cuaca hujan lebat site kalikuning, kalikajar Kabupaten Wonosobo tanggal 16 Desember 2019', '197604192008012015', 'SELESAI', '2019-12-30', '0000-00-00', '2019-12-30', '2019-12-30', '2019-12-30', ''),
('2360', '1905BMKG0018', ' surat keterangan cuaca petir site kampung laut dusun Bugel Desa Penikel Kampung Laut Kab. Cilacap tanggal 29 Desember 2019 ', '197209051995032001', 'SELESAI', '2019-12-30', '0000-00-00', '2019-12-30', '2020-01-06', '2019-12-30', ''),
('2361', '1905BMKG0018', 'Surat keterangan cuaca petir site Glempang pasir Jl. Diponegoro Desa Glempang pasir Kec. Adipala Kabupaten Cilacap tanggal 29 Desember 2019', '198112052006042001', 'SELESAI', '2019-12-30', '0000-00-00', '2019-12-30', '2020-01-06', '2019-12-30', ''),
('2362', '1905BMKG0018', ' Surat keterangan cuaca petir site Kroya Jl. Kendeng  Kec. Kroya Kabupaten Cilacap tanggal 29 Desember 2019', '198503082007012003', 'SELESAI', '2019-12-30', '0000-00-00', '2019-12-30', '2020-01-06', '2019-12-30', ''),
('2363', '1803BMKG0012', 'Surat keterangan cuaca petir site Desa Klumpit Kec. Karanggede Kabupaten Boyolali tanggal 12 Desember 2019', '197706282000121002', 'SELESAI', '2019-12-30', '0000-00-00', '2019-12-30', '2020-01-07', '2019-12-30', ''),
('2364', '1804BMKG0038', 'Surat keterangan cuaca hujan lebat, angin kencang dan petir di wilayah Desa Brujulan  Kec. Limbangan Kabupaten Kendal tanggal 06 Desember 2019', '197211131995031002', 'SELESAI', '2019-12-30', '0000-00-00', '2019-12-30', '2020-01-03', '2019-12-30', ''),
('2365', '1803BMKG0010', 'Surat keterangan cuaca hujan lebat dan angin kencang di wilayah Villa Sun Garden Emeraldad Hill D-3 Bukit sari Kec. Banyumanik Kota Semarang tanggal 27 Desember 2019', '198408112006042002', 'SELESAI', '2019-12-31', '0000-00-00', '2019-12-31', '2020-01-07', '2019-12-31', ''),
('2366', '2001BMKG0001', 'Data klimatologi ( Suhu, curah hujan, kelembaban, dan angin) di wilayah Kec. Kandeman Kab. Batang, Sragi Kab. Pekalongan, Bener Kec. Ngrampal Kab. Sragen Tahun 2017 - 2019', '198910102010122001', 'SELESAI', '2020-01-03', '2020-01-08', '2020-01-08', '2020-01-08', '2020-01-06', ''),
('2367', '1804BMKG0028', 'surat keterangan cuaca hujan deras wilayah Jl. KH.Hasyim Ashari no.171 Mojayan Klaten Tengah Kab. Klaten tanggal 30 Desember 2019 ', '197602231999031001', 'SELESAI', '2020-01-03', '2020-01-06', '2020-01-06', '2020-01-07', '2020-01-06', ''),
('2368', '2001BMKG0002', ' surat keterangan cuaca petir site kedawungtgl desa karangsari kec. pulosari kabupaten pemalang tanggal 31 Desember 2019', '198408112006042002', 'SELESAI', '2020-01-03', '2020-01-06', '2020-01-06', '2020-01-08', '2020-01-06', ''),
('2369', '2001BMKG0003', 'Data curah hujan bulanan tahun 2014 - 2018 di wilayah Sumur jurang dan simongan Kota Semarang', '197211131995031002', 'SELESAI', '2020-01-03', '2020-01-06', '2020-01-06', '2020-01-08', '2020-01-06', ''),
('2370', '1910BMKG0012', ' informasi curah hujan bulanan Jan - Des 2018 dan Jan - Okt 2019 di wilayah Kec. Sawit Kab. Boyolali', '198503082007012003', 'SELESAI', '2020-01-03', '2020-01-07', '2020-01-07', '2020-01-10', '2020-01-06', ''),
('2371', '2001BMKG0004', ' Surat keterangan cuaca kejadian hujan site sidoharjo KLT kabupaten Sukoharjo tanggal 31 Desember 2019', '197001281992022001', 'SELESAI', '2020-01-07', '2020-01-08', '2020-01-07', '2020-01-09', '2020-01-07', ''),
('2372', '2001BMKG0005', 'Surat keterangan cuaca kejadian hujan angin site Jl Siliwangi no 504 Semarang tanggal 3/1/2020', '197706282000121002', 'SELESAI', '2020-01-07', '2020-01-07', '2020-01-07', '0000-00-00', '2020-01-06', ''),
('2373', '2001BMKG0006', ' Informasi curah hujan tahun 2019 wilayah kedungjati kabupaten Grobogan', '198112052006042001', 'SELESAI', '2020-01-08', '2020-01-09', '2020-01-09', '2020-01-08', '2020-01-08', ''),
('2374', '2001BMKG0007', ' Surat keterangan cuaca hujn site Dusun Jatinomk kel.Gedong kec. Ngadirojo kabupaten Wonogiri tanggal 25-25 Desember 2019', '198408112006042002', 'SELESAI', '2020-01-09', '2020-01-09', '2020-01-09', '2020-01-10', '2020-01-09', ''),
('2375', '1804BMKG0004', ' Informasi prakiraan cuaca dasarian buln januari 2020', '198910102010122001', 'SELESAI', '2020-01-09', '2020-01-13', '2020-01-13', '2020-01-13', '2020-01-09', ''),
('2376', '2001BMKG0008', ' Surat keterangan cuaca hujan angin site Jl Delta mas selatan No 7 Semarang tanggal 9 desember 2019', '197209051995032001', 'SELESAI', '2020-01-09', '2020-01-09', '2020-01-09', '2020-01-10', '2020-01-09', ''),
('2377', '2001BMKG0009', ' Surat keterangan cuaca kejadian hujan site Jl Graha taman bunga raya A4 No.12 BSB Mijen Semarang tanggal 3-4 Januari 2020', '197706282000121002', 'SELESAI', '2020-01-09', '2020-01-09', '2020-01-09', '2020-01-10', '2020-01-09', ''),
('2378', '2001BMKG0010', ' Surat keterangan cuaca kejadian hujan site Hotel grand Artos Magelang Jl Mayjend Bambang sugeng No,1 Magelang . tanggal 7 Desember 2019', '197211131995031002', 'SELESAI', '2020-01-09', '2020-01-10', '2020-01-10', '2020-01-21', '2020-01-09', ''),
('2379', '2001BMKG0011', ' Buletin Prakiraan hujan 3 Bulanan (Januari,Februari,Maret) 2020', '197801221998031001', 'SELESAI', '2020-01-09', '2020-01-09', '2020-01-09', '2020-01-09', '2020-01-09', ''),
('2380', '2001BMKG0013', ' Suart keterangan cuaca hujan banjir site  hujan banjir site Jl Gubug kedungjati Ds. Kuwaron kec Gubug kab. Grobogan tanggal 8-9/1/2020', '198503082007012003', 'SELESAI', '2020-01-13', '2020-01-14', '2020-01-14', '2020-01-14', '2020-01-13', ''),
('2381', '2001BMKG0014', ' Suart keterangan cuaca angin kencang site jl Raya Demak Kudus kec. Gajah kab. Demak tanggal 1/1/2020', '198112052006042001', 'SELESAI', '2020-01-13', '2020-01-14', '2020-01-14', '2020-01-17', '2020-01-13', ''),
('2382', '1902BMKG0015', ' Surat keterangan cuaca hujan angin site Jl Raya Purwodadi - Solo Km 9 Monggod geyer Kab. Grobogan tanggal 19/12/2019', '197001281992022001', 'SELESAI', '2020-01-13', '2020-01-15', '2020-01-15', '2020-01-17', '2020-01-13', ''),
('2383', '1906BMKG0001', ' Surat keterangan cuaca kejadian petir  site Keling kabupaten Jepara tanggal 21/12/2019', '198408112006042002', 'SELESAI', '2020-01-13', '2020-01-13', '2020-01-13', '2020-01-15', '2020-01-13', ''),
('2384', '2001BMKG0012', ' Informasi curah hujan bulan Nopember dan Desember 2019 wilayah Kawasan industri candi Jl Gatot Semarang ', '197211131995031002', 'SELESAI', '2020-01-13', '2020-01-13', '2020-01-13', '2020-01-14', '2020-01-13', ''),
('2385', '1803BMKG0032', ' Surat keterangan cuaca kejadian petir site Keling kabupaten Jepara tanggal 5/1/2019', '197706282000121002', 'SELESAI', '2020-01-13', '2020-01-14', '2020-01-14', '2020-01-15', '2020-01-13', ''),
('2386', '2001BMKG0015', ' Informasi curah hujan , angin , visibily bulan Nopember dan Desember 2019 wilayah Semarang , Demak , Jepara , Kudus , Pati , Rembang , Grobogan , Blora', '197602231999031001', 'SELESAI', '2020-01-13', '2020-01-15', '2020-01-14', '2020-01-16', '2020-01-13', ''),
('2387', '2001BMKG0016', ' Surat keterangan cuaca kejadian petir site dusun Nglorok Campurejo kecamatan Boja Kabupaten Kendal Tgl 8 1/2020', '197611141997031001', 'SELESAI', '2020-01-13', '2020-01-13', '2020-01-13', '2020-01-14', '2020-01-13', ''),
('2388', '1803BMKG0052', ' Surat keterangan cuaca kejadian petir site Lemberang kabupaten Banyumas tanggal 24/12/2019', '198910102010122001', 'SELESAI', '2020-01-13', '2020-01-15', '2020-01-15', NULL, '2020-01-14', ''),
('2389', '2001BMKG0017', ' Informasi prakiraan curah hujan bulanan Wilayah Gumem-Mantingankabupaten RembangPeriode Januari -Maret 2020', '198408112006042002', 'SELESAI', '2020-01-10', '2020-01-13', '2020-01-13', '2020-01-14', '2020-01-10', ''),
('2390', '1805BMKG0007', 'Surat keterangan cuaca kejadian petir site Klimas karang gede kabupaten Boyolali tanggal 3 Januari 2020 ', '198112052006042001', 'SELESAI', '2020-01-15', '2020-01-16', '2020-01-16', '2020-01-17', '2020-01-15', ''),
('2391', '1812BMKG0001', ' Informasi unsur klimatologi ( Intensitas dan lama penyinaran matahari, suhu kelembaban dan kecepatan angin tahun 2019 wilayah Semarang', '198503082007012003', 'SELESAI', '2020-01-15', '2020-01-16', '2020-01-16', '2020-01-20', '2020-01-15', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemohon`
--

CREATE TABLE `pemohon` (
  `idpemohon` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `informasi` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemohon`
--

INSERT INTO `pemohon` (`idpemohon`, `nama`, `nohp`, `alamat`, `email`, `instansi`, `informasi`, `status`) VALUES
('908', 'fdsds', '     001001302', '     jl fajar198', '     rahmadiihaikal@gmail.com', '     UNDIP', 'mau apa aja kau', 'yes'),
('asdaaaa', 'M Haikal rahmadi', ' 0010013023', 'abnagstattarttrtaurauw', ' rahmadiihaikal@gmail.com', ' asdasdasdassd', 'asdsadsadasdas', 'yes'),
('BMKG091', 'M Haikal rahmadi', ' 0010013023', 'anjing abi bangsat', ' rahmadiihaikal@gmail.com', ' UNDIP', 'asdsa asd d asdsad asdsa ds', 'yes'),
('oiqk', 'asdsadsa asdsa', '0010013023', 'asdsad asd asda', 'rahmadiihaikal@gmail.com', 'UNDIP', 'asd asd sad asd sad as', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `pemohon1`
--

CREATE TABLE `pemohon1` (
  `idpemohon` varchar(10) NOT NULL,
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

--
-- Dumping data for table `pemohon1`
--

INSERT INTO `pemohon1` (`idpemohon`, `nama`, `nohp`, `alamat`, `email`, `instansi`, `identitas`, `informasi`, `suratpengantar`, `proposal`, `suratpernyataan`, `status`) VALUES
('popoppo', 'awawaw', ' popopopo.pdf', ' popop', ' opo', ' popopopo', '', 'popopopop', 'popopopo.pdf', 'popopopo.pdf', 'popopopo.pdf', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `pemohon2`
--

CREATE TABLE `pemohon2` (
  `idpemohon` varchar(10) NOT NULL,
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
  `idpemohon` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(14) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `informasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemohon3`
--

INSERT INTO `pemohon3` (`idpemohon`, `nama`, `nohp`, `alamat`, `email`, `instansi`, `informasi`) VALUES
('908', 'bangsatttttt', '   0010013023', '   jl fajar198', '   rahmadiihaikal@gmail.com', '   UNDIP', 'mau apa aja kau'),
('asdaaaa', 'M Haikal rahmadi', '0010013023', 'adasdasdasd', 'rahmadiihaikal@gmail.com', 'asdasdasdassd', 'asdsadsadasdas'),
('oiqk', 'asdsadsa asdsa', '0010013023', 'asdsad asd asda', 'rahmadiihaikal@gmail.com', 'UNDIP', 'asd asd sad asd sad as');

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
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`nolayanan`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
