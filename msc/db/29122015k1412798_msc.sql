-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2015 at 05:43 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `k1412798_msc`
--

-- --------------------------------------------------------

--
-- Table structure for table `ms_blok`
--

CREATE TABLE IF NOT EXISTS `ms_blok` (
  `id_blok` int(11) NOT NULL,
  `id_dev` int(11) DEFAULT NULL,
  `blok` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ms_blok`
--

INSERT INTO `ms_blok` (`id_blok`, `id_dev`, `blok`) VALUES
(1, 1, 'A'),
(2, 2, 'C'),
(3, 2, 'X'),
(4, 4, 'H'),
(5, 3, 'D'),
(6, 6, 'G'),
(7, 1, 'J'),
(8, 1, 'K'),
(9, 5, 'V'),
(10, 1, 'B'),
(11, 1, 'C'),
(12, 6, 'H12'),
(13, 2, 'P'),
(14, 2147483647, 'A'),
(15, 2147483647, 'G');

-- --------------------------------------------------------

--
-- Table structure for table `ms_devloper`
--

CREATE TABLE IF NOT EXISTS `ms_devloper` (
  `id_dev` int(15) NOT NULL,
  `nm_dev` varchar(50) NOT NULL,
  `nm_proyek` varchar(100) NOT NULL,
  `alamat_proyek` varchar(200) NOT NULL,
  `no_telpon` varchar(50) NOT NULL,
  `kat_proyek` varchar(100) NOT NULL,
  `tot_luas_lahan` varchar(50) NOT NULL,
  `type_perumahan` varchar(100) NOT NULL,
  `izin_lokasi` varchar(100) NOT NULL,
  `imb` varchar(100) NOT NULL,
  `sert_induk` varchar(100) NOT NULL COMMENT 'sertifikat induk',
  `pbb` varchar(100) NOT NULL,
  `input_on` date NOT NULL,
  `input_by` varchar(11) NOT NULL,
  `edit_on` date NOT NULL,
  `edit_by` varchar(15) NOT NULL,
  `del_by` varchar(15) NOT NULL,
  `del_on` date NOT NULL,
  `del` smallint(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_devloper`
--

INSERT INTO `ms_devloper` (`id_dev`, `nm_dev`, `nm_proyek`, `alamat_proyek`, `no_telpon`, `kat_proyek`, `tot_luas_lahan`, `type_perumahan`, `izin_lokasi`, `imb`, `sert_induk`, `pbb`, `input_on`, `input_by`, `edit_on`, `edit_by`, `del_by`, `del_on`, `del`) VALUES
(1, 'PT. Gebang Raya ALam Permai2', 'Duta Indah Residence 4', 'Jl. Raya Prabukiansantang Tangerang2', '02159027552', '-2', '20.0002', '-2', '2564782', '1286252', '3695882', '254785', '2015-08-16', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
(2, 'PT. Griya Barokah', 'Griya Barokah', 'Serang Banten', '0215902755', 'Perumahan', '10000', '-', 'Yes', 'Yes', 'Yes', 'Yes', '2015-08-16', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
(3, 'PT. Bumi Purati Alam Lestari', 'Duta Indah Residence', 'Jl. Prabu kiansatang Tangerang', '021590', 'Cluster', '58625', 'Cluster 235', '-', '-', '698745', '254858', '2015-08-16', 'zae', '2015-12-08', 'zae', 'zae', '2015-12-08', 0),
(4, 'PT. Putimekar Bersama', 'Putimekar Residence', 'Jl Raya Lorem Ipsum', '0215555555', '256985', '258758', '558586', '558585', '585696', '639658', '369585', '2015-08-16', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
(5, 'PT. Prana Perdana', 'GEMA INDAH RESIDENCE', 'K. GEBANG PERIUK TANGERANG', '021590', 'Perumahan', '4.256', 'Cluster', '5878586', '547858', '588558', '58588', '2015-08-16', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
(6, 'PT. Supra Kenari', 'Supra Kenari Indah', 'Jl. Raya kenari Jakarta', '0215902758', 'Perumahan2', '20.254', 'Cluster', '236547', '458968', '625412', '231457', '2015-08-16', 'zae', '2015-12-08', 'zae', 'zae', '2015-12-08', 0),
(8, 'Angga2', 'Angga2', 'Angga2', 'Angga2', 'Angga2', 'Angga2', 'Angga2', 'Angga2', 'Angga2', 'Angga2', 'Angga2', '0000-00-00', '', '2015-12-08', 'zae', 'zae', '2015-12-08', 0),
(7, 'Hendri Mamang', 'Hendri Mamang', 'Hendri Mamang', 'Hendri Mamang', 'Hendri Mamang', 'Hendri Mamang', 'Hendri Mamang', 'Hendri Mamang', 'Hendri Mamang', 'Hendri Mamang', 'Hendri Mamang', '0000-00-00', '', '2015-12-08', 'zae', 'zae', '2015-12-08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ms_jabatan`
--

CREATE TABLE IF NOT EXISTS `ms_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ms_jabatan`
--

INSERT INTO `ms_jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'administrator'),
(2, 'Accounting'),
(3, 'Admin'),
(4, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `ms_kavling`
--

CREATE TABLE IF NOT EXISTS `ms_kavling` (
  `id_kavling` int(5) NOT NULL,
  `id_blok` varchar(5) NOT NULL,
  `no` int(10) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `kel` double NOT NULL,
  `harga_kel` double NOT NULL,
  `status_bangunan` varchar(20) NOT NULL,
  `luas_tanah` int(10) NOT NULL,
  `luas_bangunan` int(10) NOT NULL,
  `posisi_bangunan` varchar(10) NOT NULL,
  `harga_brosur` double NOT NULL,
  `harga_cash` double NOT NULL,
  `harga_jual` double NOT NULL,
  `um_std` double NOT NULL,
  `diskon` double NOT NULL,
  `utj` double NOT NULL,
  `strategis` double NOT NULL,
  `adm` double NOT NULL,
  `biaya_proses` double NOT NULL,
  `materai` double NOT NULL,
  `diskon2` double NOT NULL,
  `note` varchar(200) NOT NULL,
  `id_status` int(11) NOT NULL,
  `input_on` datetime NOT NULL,
  `input_by` varchar(15) NOT NULL,
  `edit_on` datetime NOT NULL,
  `edit_by` varchar(15) NOT NULL,
  `del_on` datetime NOT NULL,
  `del_by` varchar(15) NOT NULL,
  `del` smallint(2) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_kavling`
--

INSERT INTO `ms_kavling` (`id_kavling`, `id_blok`, `no`, `tipe`, `kel`, `harga_kel`, `status_bangunan`, `luas_tanah`, `luas_bangunan`, `posisi_bangunan`, `harga_brosur`, `harga_cash`, `harga_jual`, `um_std`, `diskon`, `utj`, `strategis`, `adm`, `biaya_proses`, `materai`, `diskon2`, `note`, `id_status`, `input_on`, `input_by`, `edit_on`, `edit_by`, `del_on`, `del_by`, `del`) VALUES
(1, '1', 13, '-', 18, 800000, 'I', 1024, 1024, 'Selatan', 4, 0, 110500000, 11050000, 6050000, 1000000, 5000000, 1000000, 0, 1000000, 1500000, 'Diskon 1 Jt', 1, '2015-08-18 18:32:38', 'P0001 ', '2015-09-12 14:26:01', 'zae', '0000-00-00 00:00:00', '', 0),
(2, '2', 15, '-', 12, 800000, 'B', 1024, 1024, 'Selatan', 200000000, 200000000, 110500000, 11050000, 6050000, 1000000, 1500000, 1000000, 0, 500000, 1500000, 'Inden', 1, '2015-08-18 18:34:17', 'P0001 ', '2015-09-20 07:08:51', 'zae', '0000-00-00 00:00:00', '', 0),
(3, '3', 17, '-', 12, 800000, 'B', 1024, 1024, 'Timur', 0, 0, 110500000, 11050000, 6050000, 1000000, 5000000, 1000000, 0, 500000, 1500000, '-', 2, '2015-08-19 01:51:19', 'P0001', '2015-08-19 14:53:15', 'P0001', '0000-00-00 00:00:00', '', 0),
(4, '2', 45, 'xyz', 10, 750000, 'B', 2345, 234, 'Timur', 123000000, 123000000, 123000000, 23000000, 0, 1000000, 100000, 100000, 100000, 20000, 2000, '2000', 2, '2015-09-20 06:50:25', 'zae', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 0),
(8, '7', 123, '123', 12345, 123, 'B', 123, 123, 'Barat', 123, 123, 123, 123, 123, 123, 123, 123, 123, 123, 123, '123', 1, '2015-11-26 06:22:33', 'zae', '2015-12-01 00:42:00', 'zae', '0000-00-00 00:00:00', '', 0),
(9, '8', 258, '258', 258, 258, 'B', 258, 258, 'Timur', 258, 258, 258, 258, 258, 258, 258, 258, 258, 258, 258, '258', 2, '2015-11-26 06:26:28', 'zae', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 0),
(10, '5', 269, '269', 269, 269, 'R', 269, 269, 'Selatan', 269, 269, 269, 269, 269, 269, 269, 269, 269, 269, 269, '269', 1, '2015-11-26 06:30:04', 'zae', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 0),
(11, '5', 500, '500', 500, 500, 'B', 500, 500, 'Timur', 500, 500, 500, 500, 500, 500, 500, 500, 500, 500, 500, '500', 1, '2015-11-26 06:37:26', 'zae', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 0),
(12, '5', 600, '600', 600, 600, 'B', 600, 600, 'Selatan', 600, 600, 600, 600, 600, 600, 600, 600, 600, 600, 600, '600', 2, '2015-11-26 06:39:27', 'zae', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 0),
(13, '5', 700, '700', 700, 700, 'B', 700, 700, 'Selatan', 700, 700, 700, 700, 700, 700, 700, 700, 700, 700, 700, '700', 1, '2015-11-26 06:40:31', 'zae', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 0),
(14, '8', 400, '400', 400, 400, 'B', 400, 400, 'Timur', 400, 400, 400, 400, 400, 400, 400, 400, 400, 400, 400, '400', 0, '2015-11-26 06:45:28', 'zae', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 0),
(15, '12', 120, '120', 120, 120, 'R', 120, 120, 'Selatan', 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, 120, '120', 0, '2015-11-26 09:17:44', 'zae', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 0),
(16, '15', 12, '70/72', 12, 100000, 'I', 72, 70, 'Selatan', 600000000, 600000000, 600000000, 120000, 0, 5000000, 0, 0, 5000000, 200000, 0, 'Kosong', 1, '2015-11-26 11:03:55', 'zae', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ms_konsumen`
--

CREATE TABLE IF NOT EXISTS `ms_konsumen` (
  `id_konsumen` varchar(11) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kel` varchar(10) NOT NULL,
  `alamat` text,
  `hp` varchar(30) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `ket` varchar(45) DEFAULT NULL,
  `ktp` varchar(45) DEFAULT NULL,
  `ft` varchar(45) DEFAULT NULL,
  `kk` varchar(45) DEFAULT NULL,
  `s_nikah` varchar(45) DEFAULT NULL,
  `skbmr` varchar(45) DEFAULT NULL,
  `npwp` varchar(45) DEFAULT NULL,
  `spt` varchar(45) DEFAULT NULL,
  `rek_listrik` varchar(45) DEFAULT NULL,
  `sk_skdu` varchar(45) DEFAULT NULL,
  `siup` varchar(45) DEFAULT NULL,
  `f_btn` varchar(45) DEFAULT NULL,
  `f1` varchar(45) DEFAULT NULL,
  `f4` varchar(45) DEFAULT NULL,
  `a1` varchar(45) DEFAULT NULL,
  `e1` varchar(45) DEFAULT NULL,
  `e2` varchar(45) DEFAULT NULL,
  `sp_listrik` varchar(45) DEFAULT NULL,
  `input_on` date DEFAULT NULL,
  `input_by` varchar(15) DEFAULT NULL,
  `edit_on` date DEFAULT NULL,
  `edit_by` varchar(45) DEFAULT NULL,
  `del_by` varchar(15) DEFAULT NULL,
  `del_on` date DEFAULT NULL,
  `del` smallint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ms_konsumen`
--

INSERT INTO `ms_konsumen` (`id_konsumen`, `nama`, `tgl_lahir`, `jenis_kel`, `alamat`, `hp`, `email`, `ket`, `ktp`, `ft`, `kk`, `s_nikah`, `skbmr`, `npwp`, `spt`, `rek_listrik`, `sk_skdu`, `siup`, `f_btn`, `f1`, `f4`, `a1`, `e1`, `e2`, `sp_listrik`, `input_on`, `input_by`, `edit_on`, `edit_by`, `del_by`, `del_on`, `del`) VALUES
('201509001', 'Zainal Arifin', '0000-00-00', '', ' Tanjung Duren', ' 085715887704', ' zae', ' -', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-09-12', NULL, NULL, NULL, NULL, NULL, 0),
('201509002', 'Hendri Yulianto', '0000-00-00', '', ' Jakarta selatan', ' 083838384848', ' hendriyulianto1992@gmail.com', ' valid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-09-12', NULL, NULL, NULL, NULL, NULL, 0),
('201509003', 'Ahmad Roffi', '0000-00-00', '', ' Kebon Jeruk', ' 02020292299', ' hendriyulianto1992@gmail.com', ' valid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-09-12', NULL, NULL, NULL, NULL, NULL, 0),
('201509004', 'Adi Putro', '0000-00-00', '', ' Cipondoh Tangerang', ' 020202020', ' hendriyulianto1992@gmail.com', ' Berkas kurang lengkap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-09-12', NULL, NULL, NULL, NULL, NULL, 0),
('201509005', 'Ari Wildan', '0000-00-00', '', ' Kp. Gebang RT. 02/02', ' 021', ' hendri354@gmail.com', ' Valid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-09-14', NULL, NULL, NULL, NULL, NULL, 0),
('201509006', 'Cek', '0000-00-00', '', ' cek', ' cek', ' cek', ' cek', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-09-14', NULL, NULL, NULL, NULL, NULL, 0),
('201509007', 'Juragan Sate', '0000-00-00', '', ' Kp. Gebang Periuk Tangerang ', ' 14045', ' juragan@sate.com', ' Kurang kerjaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-09-16', NULL, NULL, NULL, NULL, NULL, 0),
('201509008', 'Asdf', '0000-00-00', 'undefined', 'Asdf', 'Asdf', 'Asdf', 'Asdf', 'Asdf', 'B', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', '2015-09-20', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201509009', 'Rozak', '0000-00-00', 'undefined', 'Rozak', 'Rozak', 'Rozak', 'Rozak', 'Rozak', 'L', 'B', 'L', 'B', 'L', 'B', 'L', 'L', 'L', 'L', 'L', 'B', 'L', 'B', 'B', 'L', '2015-09-20', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201509010', 'Jika kami', '0000-00-00', 'P', 'Jika kami', 'Jika kami', 'Jika kami', 'Jika kami', 'Jika kami', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', '2015-09-20', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201509011', 'aaaaaaaaaaaa', '1930-01-01', 'L', '', '', '', '', '', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', '2015-09-20', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201509012', 'bbbbbbbbbbbbbbb', '1930-01-01', 'L', '', '', '', '', '', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', '2015-09-20', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201511001', 'Retno', '2010-04-19', 'P', 'xxx', 'xxx', 'xxxx', 'xxx', 'xxx', 'B', 'L', 'B', 'L', 'B', 'L', 'L', 'L', 'L', 'L', 'L', 'B', 'L', 'L', 'L', 'L', '2015-11-26', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201512001', 'Amal Makruf', '1935-06-01', 'P', 'Amal Makruf', 'Amal Makruf', 'Amal Makruf', 'Amal Makruf', 'Amal Makruf', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', '2015-12-20', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201512002', 'konsumen', '1930-01-01', 'P', 'konsumen', 'konsumen', 'konsumen', 'konsumen', 'konsumen', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', 'L', '2015-12-20', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('undefined', 'undefined', '0000-00-00', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', 'undefined', '2015-09-21', 'undefined', '0000-00-00', 'undefined', 'undefined', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ms_menu`
--

CREATE TABLE IF NOT EXISTS `ms_menu` (
  `id_menu` varchar(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `folder` varchar(30) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  `level` smallint(3) DEFAULT NULL,
  `parent` smallint(3) DEFAULT NULL,
  `icon` varchar(45) DEFAULT NULL,
  `urut` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ms_menu`
--

INSERT INTO `ms_menu` (`id_menu`, `title`, `folder`, `link`, `level`, `parent`, `icon`, `urut`) VALUES
('1', 'Master', NULL, '#', NULL, 0, 'pe-7s-server', 1),
('10', 'Setting', NULL, '#', NULL, 0, 'pe-7s-config', 4),
('11', 'User', 'user', 'user', NULL, 10, '', 4),
('12', 'Menu Role user', 'menu', 'menu_role_user', NULL, 10, '', 6),
('13', 'Laporan', NULL, '#', NULL, 0, 'pe-7s-graph2', 10),
('14', 'Penjualan', 'laporan', 'lap_penjualan', NULL, 13, '', 1),
('15', 'Pembayaran', 'laporan', 'lap_pembayaran', NULL, 13, '', 2),
('16', 'kavling', 'laporan', 'lap_kavling', NULL, 13, '', 3),
('17', 'Developer', 'laporan', 'lap_developer', NULL, 13, '', 4),
('18', 'Sales', 'laporan', 'lap_sales', NULL, 13, '', 5),
('19', 'Pembayaran', 'pembayaran', 'pembayaran', NULL, 7, '', 3),
('2', 'Developer', 'developer', 'developer', NULL, 1, NULL, 1),
('20', 'Penjualan', 'penjualan', 'penjualan', NULL, 7, '', 2),
('21', 'Pembayaran', 'pembayaran', 'pembayaran', NULL, 7, '', 2),
('22', 'penjualan', 'penjualan', 'penjualan', NULL, 7, '', 4),
('23', 'Pembayaran', 'pembayaran', 'pembayaran', NULL, 7, '-', 3),
('24', 'Jenis Pembayaran', 'jenis_pembayaran', 'jenis_pembayaran', NULL, 1, '-', 8),
('3', 'Kavling (All)', 'kavling', 'kavling_all', NULL, 1, NULL, 3),
('4', 'Menu', 'menu', 'menu', NULL, 10, NULL, 5),
('5', 'Sales', 'sales', 'sales', NULL, 1, '', 4),
('6', 'Blok', 'blok', 'blok', NULL, 1, '', 2),
('7', 'TRANSAKSI', NULL, '#', NULL, 0, 'pe-7s-graph2', 2),
('8', 'Data Kavling', 'kavling', 'kav_jual', NULL, 7, '', 1),
('9', 'konsumen', 'konsumen', 'konsumen', NULL, 1, '', 7);

-- --------------------------------------------------------

--
-- Table structure for table `ms_menu_user`
--

CREATE TABLE IF NOT EXISTS `ms_menu_user` (
  `id_menu_user` varchar(11) NOT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `username` varchar(15) NOT NULL,
  `baca` enum('Y','N') DEFAULT NULL,
  `tulis` enum('Y','N') DEFAULT NULL,
  `order` smallint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ms_menu_user`
--

INSERT INTO `ms_menu_user` (`id_menu_user`, `id_menu`, `username`, `baca`, `tulis`, `order`) VALUES
('1', 1, 'zae', 'Y', NULL, NULL),
('10', 9, 'zae', 'Y', 'Y', NULL),
('11', 10, 'zae', 'Y', 'Y', NULL),
('12', 11, 'zae', 'Y', 'Y', NULL),
('13', 22, 'zae', 'Y', 'Y', NULL),
('14', 23, 'zae', 'Y', 'Y', NULL),
('15', 24, 'zae', 'Y', 'Y', NULL),
('2', 2, 'zae', 'Y', NULL, NULL),
('3', 3, 'zae', 'Y', NULL, NULL),
('4', 4, 'zae', 'Y', NULL, NULL),
('5', 5, 'zae', 'Y', 'Y', NULL),
('6', 6, 'zae', 'Y', 'Y', NULL),
('7', 12, 'zae', 'Y', 'Y', NULL),
('8', 7, 'zae', 'Y', 'Y', NULL),
('9', 8, 'zae', 'Y', 'Y', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ms_pembayaran`
--

CREATE TABLE IF NOT EXISTS `ms_pembayaran` (
  `id_pembayaran` varchar(12) NOT NULL,
  `id_penjualan` int(12) NOT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `tgl_tempo` date DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `pembayaran_ke` int(10) DEFAULT NULL,
  `jumlah_pembayaran` int(11) DEFAULT NULL,
  `telat` int(11) DEFAULT NULL,
  `denda` float(12,0) DEFAULT NULL,
  `ket_pembayaran` varchar(150) NOT NULL,
  `input_on` date DEFAULT NULL,
  `input_by` varchar(15) DEFAULT NULL,
  `edit_on` date DEFAULT NULL,
  `edit_by` varchar(15) DEFAULT NULL,
  `del_by` varchar(15) DEFAULT NULL,
  `del_on` date DEFAULT NULL,
  `del` smallint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ms_pembayaran`
--

INSERT INTO `ms_pembayaran` (`id_pembayaran`, `id_penjualan`, `tgl_bayar`, `tgl_tempo`, `id_jenis`, `pembayaran_ke`, `jumlah_pembayaran`, `telat`, `denda`, `ket_pembayaran`, `input_on`, `input_by`, `edit_on`, `edit_by`, `del_by`, `del_on`, `del`) VALUES
('201512001', 201512001, '2015-01-20', '2015-01-20', 1, 1, 1500000, 0, 0, ' 0', '2015-12-12', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201512002', 201512001, '2015-01-01', '2015-02-02', 2, 2, 1300000, 0, 0, ' 0', '2015-12-12', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201512003', 201512002, '0000-00-00', '0000-00-00', 3, 1, 666, 6666, 2222, ' 33333', '2015-12-14', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201512004', 201512001, '0000-00-00', '0000-00-00', 3, 2, 222, 222, 222, ' 222', '2015-12-14', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201512005', 201512001, '2015-09-09', '2015-09-09', 4, 3, 10000000, 0, 0, ' 0', '2015-12-15', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201512006', 201512001, '2015-09-09', '2015-09-09', 2, 4, 14000000, 0, 0, ' 0', '2015-12-15', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201512007', 201512001, '2015-09-09', '2015-09-09', 3, 5, 12000000, 0, 0, ' 0', '2015-12-15', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201512008', 201512001, '2015-09-09', '2015-09-09', 4, 6, 12000000, 1, 0, ' 0', '2015-12-15', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201512009', 201512002, '2015-12-23', '2015-12-23', 4, 1, 12000000, 0, 0, ' 0', '2015-12-15', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201512010', 201512003, '0000-00-00', '0000-00-00', 3, 1, 13500000, 0, 0, ' 0', '2015-12-15', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201512011', 201512003, '2015-01-01', '2015-01-01', 5, 2, 20000000, 0, 0, ' 0', '2015-12-15', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201512012', 201512001, '2015-12-20', '2015-12-20', 2, 1, 30000000, 0, 0, ' 0', '2015-12-20', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201512013', 201512004, '2015-12-20', '2015-12-20', 1, 1, 10000000, 0, 0, ' 0', '2015-12-20', 'zae', '0000-00-00', '', '', '0000-00-00', 0),
('201512014', 201512004, '2015-12-10', '2015-12-02', 2, 2, 5000000, 0, 0, ' 0', '2015-12-20', 'zae', '0000-00-00', '', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ms_pembayaran_detil`
--

CREATE TABLE IF NOT EXISTS `ms_pembayaran_detil` (
  `id_pembayaran_detil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ms_pembayaran_jenis`
--

CREATE TABLE IF NOT EXISTS `ms_pembayaran_jenis` (
  `id_jenis` int(11) NOT NULL,
  `pembayaran_jenis` varchar(45) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_pembayaran_jenis`
--

INSERT INTO `ms_pembayaran_jenis` (`id_jenis`, `pembayaran_jenis`, `note`) VALUES
(1, 'Uang Muka', 'Pembayaran Uang Muka'),
(2, 'Kewajiban Lain', 'Pembayaran Kewajiban lain lain'),
(3, 'Biaya BPHTB', 'Biaya BPHTB 123'),
(4, 'Biaya Administrasi', 'Biaya Administrasi'),
(5, 'Biaya Materai', 'Biaya materai'),
(6, 'Biaya Sales', 'Biaya Sales');

-- --------------------------------------------------------

--
-- Table structure for table `ms_penjualan`
--

CREATE TABLE IF NOT EXISTS `ms_penjualan` (
  `id_penjualan` varchar(11) NOT NULL,
  `id_konsumen` varchar(10) NOT NULL,
  `id_kavling` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_sales` varchar(10) DEFAULT NULL,
  `harga_kel` float(12,0) DEFAULT '0',
  `harga_jual` float(12,0) DEFAULT '0',
  `total_kewajiban` float(12,0) DEFAULT '0',
  `tgl_booking` date DEFAULT NULL,
  `status_mail` smallint(1) NOT NULL DEFAULT '0',
  `status_beli` varchar(15) DEFAULT NULL,
  `input_by` varchar(25) DEFAULT NULL,
  `input_on` date DEFAULT NULL,
  `edit_by` varchar(15) DEFAULT NULL,
  `edit_on` date DEFAULT NULL,
  `del_by` varchar(15) DEFAULT NULL,
  `del_on` date DEFAULT NULL,
  `del` smallint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ms_penjualan`
--

INSERT INTO `ms_penjualan` (`id_penjualan`, `id_konsumen`, `id_kavling`, `id_status`, `id_sales`, `harga_kel`, `harga_jual`, `total_kewajiban`, `tgl_booking`, `status_mail`, `status_beli`, `input_by`, `input_on`, `edit_by`, `edit_on`, `del_by`, `del_on`, `del`) VALUES
('201512001', '201509010', 1, 1, '201509004', 0, 0, 0, '2015-12-14', 0, 'penawaran', 'zae', '2015-12-02', NULL, NULL, NULL, NULL, 0),
('201512002', '201509002', 2, 1, '201509003', 0, 0, 0, '2015-12-20', 0, 'penawaran', 'zae', '2015-12-09', NULL, NULL, NULL, NULL, 0),
('201512003', '201509009', 13, 1, '201509003', 0, 0, 0, '2015-12-14', 0, 'penawaran', 'zae', '2015-12-09', NULL, NULL, NULL, NULL, 0),
('201512004', '201509010', 10, 1, '201509003', 0, 0, 0, '2015-12-04', 0, '-', 'zae', '2015-12-20', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ms_proyek`
--

CREATE TABLE IF NOT EXISTS `ms_proyek` (
  `id_proyek` int(11) NOT NULL,
  `proyek` varchar(15) DEFAULT NULL,
  `deskripsi` varchar(45) DEFAULT NULL,
  `telp` varchar(45) DEFAULT NULL,
  `alamat` text,
  `fax` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ms_sales`
--

CREATE TABLE IF NOT EXISTS `ms_sales` (
  `id_sales` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `hp` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `input_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ms_sales`
--

INSERT INTO `ms_sales` (`id_sales`, `nama`, `hp`, `email`, `alamat`, `input_on`) VALUES
('201509001', 'Hendri', '085715887704', '000000', '0000000', '2015-09-12'),
('201509002', 'Zaenal', '0000', '0000', '0000', '2015-09-12'),
('201509003', 'Dion Mahesa', '085715887704', 'hendriyulianto1992@gmail.com', 'Kp. Gebang Tangerang', '2015-09-12'),
('201509004', 'A. Yani', '8838388388338', 'ernihermawati58@yahoo.com', 'Tangerang', '2015-09-12'),
('201509005', 'Rido', '00000', '00000', '00000', '2015-09-12'),
('201509006', 'h', 'h', 'h', 'h', '2015-09-24'),
('201511001', 'Ilham', '085715887704', 'hendriyulianto1992@gmail.com', 'Kp. gebang Tangerang', '2015-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `ms_status`
--

CREATE TABLE IF NOT EXISTS `ms_status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `ket_status` varchar(100) NOT NULL,
  `modul` varchar(100) NOT NULL,
  `order` varchar(45) DEFAULT NULL,
  `done` smallint(1) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ms_status`
--

INSERT INTO `ms_status` (`id_status`, `status`, `ket_status`, `modul`, `order`, `done`) VALUES
(1, 'Tersedia', 'Kavling Masi tersedia', '', NULL, 0),
(2, 'Terjual', 'Kavling Terjual', '', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ms_user`
--

CREATE TABLE IF NOT EXISTS `ms_user` (
  `username` varchar(15) NOT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `fullname` varchar(45) NOT NULL,
  `blokir` enum('Y','N') DEFAULT NULL,
  `picture` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5;

--
-- Dumping data for table `ms_user`
--

INSERT INTO `ms_user` (`username`, `id_jabatan`, `password`, `email`, `fullname`, `blokir`, `picture`) VALUES
('aaaaaaaa', 1, 'd41d8cd98f00b204e9800998ecf8427e', 'aaaaaaaa', 'aaaaaaaa', 'Y', ''),
('asasas', 2, 'd41d8cd98f00b204e9800998ecf8427e', 'asasas', 'asasas', 'Y', 'adi.PNG'),
('Diana', 2, '', 'diana.sayang@gmail.com', 'Diana Ac', 'N', NULL),
('Faisal', 2, '1ce9287a63e38534efb11b85339cbe59', 'faisalwa@gmail.com', 'Faisayal Yakub', 'N', NULL),
('Fisaly', 1, 'd41d8cd98f00b204e9800998ecf8427e', 'faisal', 'Fisal Y', 'N', 'Lighthouse.jpg'),
('Hahahaahhhahhah', 2, 'd41d8cd98f00b204e9800998ecf8427e', 'hahahhahah', 'hahahahhahahahhahahh', 'Y', 'Tulips.jpg'),
('hahhah', 3, 'd41d8cd98f00b204e9800998ecf8427e', 'jajajj', 'hahahah', 'Y', ''),
('qqqq', 2, 'd41d8cd98f00b204e9800998ecf8427e', 'qqqqq', 'qqqq', 'Y', '_'),
('zae', 1, '1ce9287a63e38534efb11b85339cbe59', 'arifin.dzae@gmail.com', 'Hendri', 'N', NULL),
('zainal', 4, 'd41d8cd98f00b204e9800998ecf8427e', 'zae@msc.com', 'Zainal Arifin', 'Y', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ms_blok`
--
ALTER TABLE `ms_blok`
  ADD PRIMARY KEY (`id_blok`);

--
-- Indexes for table `ms_devloper`
--
ALTER TABLE `ms_devloper`
  ADD PRIMARY KEY (`id_dev`);

--
-- Indexes for table `ms_jabatan`
--
ALTER TABLE `ms_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `ms_kavling`
--
ALTER TABLE `ms_kavling`
  ADD PRIMARY KEY (`id_kavling`);

--
-- Indexes for table `ms_konsumen`
--
ALTER TABLE `ms_konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indexes for table `ms_menu`
--
ALTER TABLE `ms_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `ms_menu_user`
--
ALTER TABLE `ms_menu_user`
  ADD PRIMARY KEY (`id_menu_user`);

--
-- Indexes for table `ms_pembayaran`
--
ALTER TABLE `ms_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `ms_pembayaran_detil`
--
ALTER TABLE `ms_pembayaran_detil`
  ADD PRIMARY KEY (`id_pembayaran_detil`);

--
-- Indexes for table `ms_pembayaran_jenis`
--
ALTER TABLE `ms_pembayaran_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `ms_penjualan`
--
ALTER TABLE `ms_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `ms_proyek`
--
ALTER TABLE `ms_proyek`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indexes for table `ms_sales`
--
ALTER TABLE `ms_sales`
  ADD PRIMARY KEY (`id_sales`);

--
-- Indexes for table `ms_status`
--
ALTER TABLE `ms_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `ms_user`
--
ALTER TABLE `ms_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ms_jabatan`
--
ALTER TABLE `ms_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ms_kavling`
--
ALTER TABLE `ms_kavling`
  MODIFY `id_kavling` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `ms_pembayaran_jenis`
--
ALTER TABLE `ms_pembayaran_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ms_proyek`
--
ALTER TABLE `ms_proyek`
  MODIFY `id_proyek` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ms_status`
--
ALTER TABLE `ms_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
