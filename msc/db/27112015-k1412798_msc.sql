/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.16 : Database - k1412798_msc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `ms_blok` */

DROP TABLE IF EXISTS `ms_blok`;

CREATE TABLE `ms_blok` (
  `id_blok` int(11) NOT NULL,
  `id_dev` int(11) DEFAULT NULL,
  `blok` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_blok`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ms_blok` */

insert  into `ms_blok`(`id_blok`,`id_dev`,`blok`) values (1,1,'A'),(2,2,'C'),(3,2,'X'),(4,4,'H'),(5,3,'D'),(6,6,'G'),(7,0,''),(8,0,''),(9,5,'V'),(10,6,'X');

/*Table structure for table `ms_devloper` */

DROP TABLE IF EXISTS `ms_devloper`;

CREATE TABLE `ms_devloper` (
  `id_dev` varchar(15) NOT NULL,
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
  PRIMARY KEY (`id_dev`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `ms_devloper` */

insert  into `ms_devloper`(`id_dev`,`nm_dev`,`nm_proyek`,`alamat_proyek`,`no_telpon`,`kat_proyek`,`tot_luas_lahan`,`type_perumahan`,`izin_lokasi`,`imb`,`sert_induk`,`pbb`,`input_on`,`input_by`) values ('1','PT. Gebang Raya ALam Permai2','Duta Indah Residence 4','Jl. Raya Prabukiansantang Tangerang2','02159027552','-2','20.0002','-2','2564782','1286252','3695882','254785','2015-08-16','T0001'),('2','PT. Griya Barokah','Griya Barokah','Serang Banten','0215902755','Perumahan','10000','-','Yes','Yes','Yes','Yes','2015-08-16','T0001'),('3','PT. Bumi Purati Alam Lestari','Duta Indah Residence','Jl. Prabu kiansatang Tangerang','021590','Cluster','58625','Cluster','-','-','698745','254858','2015-08-16','P0001'),('4','PT. Putimekar Bersama','Putimekar Residence','Jl Raya Lorem Ipsum','0215555555','256985','258758','558586','558585','585696','639658','369585','2015-08-16','P0001'),('5','PT. Prana Perdana','GEMA INDAH RESIDENCE','K. GEBANG PERIUK TANGERANG','021590','Perumahan','4.256','Cluster','5878586','547858','588558','58588','2015-08-16','P0001'),('6','PT. Supra Kenari','Supra Kenari Indah','Jl. Raya kenari Jakarta','0215902758','Perumahan','20.254','Cluster','236547','458968','625412','231457','2015-08-16','P0001');

/*Table structure for table `ms_jabatan` */

DROP TABLE IF EXISTS `ms_jabatan`;

CREATE TABLE `ms_jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(45) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `ms_jabatan` */

insert  into `ms_jabatan`(`id_jabatan`,`jabatan`) values (1,'administrator'),(2,'Accounting'),(3,'Admin'),(4,'Manager');

/*Table structure for table `ms_kavling` */

DROP TABLE IF EXISTS `ms_kavling`;

CREATE TABLE `ms_kavling` (
  `id_kavling` int(5) NOT NULL AUTO_INCREMENT,
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
  `del` smallint(2) NOT NULL,
  PRIMARY KEY (`id_kavling`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `ms_kavling` */

insert  into `ms_kavling`(`id_kavling`,`id_blok`,`no`,`tipe`,`kel`,`harga_kel`,`status_bangunan`,`luas_tanah`,`luas_bangunan`,`posisi_bangunan`,`harga_brosur`,`harga_cash`,`harga_jual`,`um_std`,`diskon`,`utj`,`strategis`,`adm`,`biaya_proses`,`materai`,`diskon2`,`note`,`id_status`,`input_on`,`input_by`,`edit_on`,`edit_by`,`del_on`,`del_by`,`del`) values (1,'1',13,'-',18,800000,'I',1024,1024,'Selatan',4,0,110500000,11050000,6050000,1000000,5000000,1000000,0,1000000,1500000,'Diskon 1 Jt',1,'2015-08-18 18:32:38','P0001 ','2015-09-12 14:26:01','zae','0000-00-00 00:00:00','',0),(2,'2',15,'-',12,800000,'B',1024,1024,'Selatan',200000000,200000000,110500000,11050000,6050000,1000000,1500000,1000000,0,500000,1500000,'Inden',1,'2015-08-18 18:34:17','P0001 ','2015-09-20 07:08:51','zae','0000-00-00 00:00:00','',0),(3,'3',17,'-',12,800000,'B',1024,1024,'Timur',0,0,110500000,11050000,6050000,1000000,5000000,1000000,0,500000,1500000,'-',2,'2015-08-19 01:51:19','P0001','2015-08-19 14:53:15','P0001','0000-00-00 00:00:00','',0),(4,'2',45,'xyz',10,750000,'B',2345,234,'Timur',123000000,123000000,123000000,23000000,0,1000000,100000,100000,100000,20000,2000,'2000',2,'2015-09-20 06:50:25','zae','0000-00-00 00:00:00','','0000-00-00 00:00:00','',0),(5,'',0,'',0,0,'',0,0,'',0,0,0,0,0,0,0,0,0,0,0,'',0,'2015-11-12 16:46:20','zae','0000-00-00 00:00:00','','0000-00-00 00:00:00','',0),(6,'aaa',111,'111',111,111,'B',1111,111,'Timur',111,1111,111,1111,1111,111,1111,11111,111,111,111,'111',0,'2015-11-12 17:58:29','zae','0000-00-00 00:00:00','','0000-00-00 00:00:00','',0);

/*Table structure for table `ms_konsumen` */

DROP TABLE IF EXISTS `ms_konsumen`;

CREATE TABLE `ms_konsumen` (
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
  `del` smallint(1) DEFAULT '0',
  PRIMARY KEY (`id_konsumen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ms_konsumen` */

insert  into `ms_konsumen`(`id_konsumen`,`nama`,`tgl_lahir`,`jenis_kel`,`alamat`,`hp`,`email`,`ket`,`ktp`,`ft`,`kk`,`s_nikah`,`skbmr`,`npwp`,`spt`,`rek_listrik`,`sk_skdu`,`siup`,`f_btn`,`f1`,`f4`,`a1`,`e1`,`e2`,`sp_listrik`,`input_on`,`input_by`,`edit_on`,`edit_by`,`del_by`,`del_on`,`del`) values ('201509001','Zainal Arifin','2015-10-27','',' Tanjung Duren',' 085715887704','arifin.dzae@gmail.com','pelanggan ini kurang mendapatkan ksih sayang',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-09-12',NULL,NULL,NULL,NULL,NULL,0),('201509002','Hendri Yulianto','2015-11-26','',' Jakarta selatan',' 083838384848','hendriyulianto1992@gmail.com','pelanggan belum menyerahkan npwp',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-09-12',NULL,NULL,NULL,NULL,NULL,0),('201509003','Ahmad Roffi','2015-11-26','',' Kebon Jeruk',' 02020292299','hendriyulianto1992@gmail.com','pelanggan yang menabrak tetangga saya',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-09-12',NULL,NULL,NULL,NULL,NULL,0),('201509004','Adi Putro','2015-11-26','',' Cipondoh Tangerang',' 020202020','hendriyulianto1992@gmail.com','ini rada cakep, ambil saja',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-09-12',NULL,NULL,NULL,NULL,NULL,0),('201509005','Ari Wildan','2015-11-26','',' Kp. Gebang RT. 02/02',' 021 645645646','hendri354@gmail.com','wah ini kurang cakep deh',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-09-14',NULL,NULL,NULL,NULL,NULL,0),('201509006','Cek','2015-11-26','','cek panggang gunung kidul yogyakarta','0886677897987','hendri354@gmail.com','ini anak pejabat yg kurang makan',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-09-14',NULL,NULL,NULL,NULL,NULL,0),('201509007','Juragan Sate','2015-11-26','',' Kp. Gebang Periuk Tangerang ','99808786769','juragan@sate.com','hahahaha, seksi ciy',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2015-09-16',NULL,NULL,NULL,NULL,NULL,0),('201509008','Asdf','2015-11-26','undefined','pengemudi jakarta selatan indonesia','09786767678678','arifin.dzae@gmail.com','ini tetangga saya kasih murah ya','Asdf','B','L','L','L','L','L','L','L','L','L','L','L','L','L','L','L','2015-09-20','zae','0000-00-00','','','0000-00-00',0),('201509009','Rozak','2015-11-26','undefined','Rozak ya karim alfatekhah','3473463743','arifin.dzae@gmail.com','Rozak','Rozak','L','B','L','B','L','B','L','L','L','L','L','B','L','B','B','L','2015-09-20','zae','0000-00-00','','','0000-00-00',0),('201509010','Jika kami','2015-11-26','P','Jika kami','0218328323','arifin.dzae@gmail.com','Jika kami','Jika kami','L','L','L','L','L','L','L','L','L','L','L','L','L','L','L','L','2015-09-20','zae','0000-00-00','','','0000-00-00',0),('201509011','Wardi Atno','1930-01-01','L','kauman medari ngadirejo temanggung 56255','021233413487','arifin.dzae@gmail.com','no comment','','L','L','L','L','L','L','L','L','L','L','L','L','L','L','L','L','2015-09-20','zae','0000-00-00','','','0000-00-00',0),('201509012','bbb kkaa','1930-01-01','L','perpanjngan utara 1 gang alpukat 9 no 9','0384732773773','arifin.dzae@gmail.com','ye ye ye gemuk tapi seksi brohhh','','L','L','L','L','L','L','L','L','L','L','L','L','L','L','L','L','2015-09-20','zae','0000-00-00','','','0000-00-00',0);

/*Table structure for table `ms_menu` */

DROP TABLE IF EXISTS `ms_menu`;

CREATE TABLE `ms_menu` (
  `id_menu` varchar(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `folder` varchar(30) DEFAULT NULL,
  `link` varchar(45) DEFAULT NULL,
  `level` smallint(3) DEFAULT NULL,
  `parent` smallint(3) DEFAULT NULL,
  `icon` varchar(45) DEFAULT NULL,
  `urut` int(2) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ms_menu` */

insert  into `ms_menu`(`id_menu`,`title`,`folder`,`link`,`level`,`parent`,`icon`,`urut`) values ('1','Master',NULL,'#',NULL,0,'pe-7s-server',1),('10','Setting',NULL,'#',NULL,0,'pe-7s-config',4),('11','User','user','user',NULL,10,'',4),('12','Menu Role user','menu','menu_role_user',NULL,10,'',6),('13','Laporan',NULL,'#',NULL,0,'pe-7s-graph2',10),('14','Penjualan','laporan','lap_penjualan',NULL,13,'',1),('15','Pembayaran','laporan','lap_pembayaran',NULL,13,'',2),('16','kavling','laporan','lap_kavling',NULL,13,'',3),('17','Developer','laporan','lap_developer',NULL,13,'',4),('18','Sales','laporan','lap_sales',NULL,13,'',5),('19','Pembayaran','pembayaran','pembayaran',NULL,7,'',3),('2','Developer','developer','developer',NULL,1,NULL,1),('20','Penjualan','penjualan','penjualan',NULL,7,'',2),('21','Pembayaran','pembayaran','pembayaran',NULL,7,'',2),('22','penjualan','penjualan','penjualan',NULL,7,'',4),('23','Pembayaran','pembayaran','pembayaran',NULL,7,'-',3),('3','Kavling','kavling','kavling',NULL,1,NULL,3),('4','Menu','menu','menu',NULL,10,NULL,5),('5','Sales','sales','sales',NULL,1,'',4),('6','Blok','blok','blok',NULL,1,'',2),('7','TRANSAKSI',NULL,'#',NULL,0,'pe-7s-graph2',2),('8','Data Kavling','kavling','kav_jual',NULL,7,'',1),('9','konsumen','konsumen','konsumen',NULL,1,'',7);

/*Table structure for table `ms_menu_user` */

DROP TABLE IF EXISTS `ms_menu_user`;

CREATE TABLE `ms_menu_user` (
  `id_menu_user` varchar(11) NOT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `username` varchar(15) NOT NULL,
  `baca` enum('Y','N') DEFAULT NULL,
  `tulis` enum('Y','N') DEFAULT NULL,
  `order` smallint(2) DEFAULT NULL,
  PRIMARY KEY (`id_menu_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ms_menu_user` */

insert  into `ms_menu_user`(`id_menu_user`,`id_menu`,`username`,`baca`,`tulis`,`order`) values ('1',1,'zae','Y',NULL,NULL),('10',9,'zae','Y','Y',NULL),('11',10,'zae','Y','Y',NULL),('12',11,'zae','Y','Y',NULL),('13',22,'zae','Y','Y',NULL),('14',23,'zae','Y','Y',NULL),('2',2,'zae','Y',NULL,NULL),('3',3,'zae','Y',NULL,NULL),('4',4,'zae','Y',NULL,NULL),('5',5,'zae','Y','Y',NULL),('6',6,'zae','Y','Y',NULL),('7',12,'zae','Y','Y',NULL),('8',7,'zae','Y','Y',NULL),('9',8,'zae','Y','Y',NULL);

/*Table structure for table `ms_pembayaran` */

DROP TABLE IF EXISTS `ms_pembayaran`;

CREATE TABLE `ms_pembayaran` (
  `id_pembayaran` varchar(12) NOT NULL,
  `id_penjualan` char(6) NOT NULL,
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
  `del` smallint(1) DEFAULT '0',
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ms_pembayaran` */

insert  into `ms_pembayaran`(`id_pembayaran`,`id_penjualan`,`tgl_bayar`,`tgl_tempo`,`id_jenis`,`pembayaran_ke`,`jumlah_pembayaran`,`telat`,`denda`,`ket_pembayaran`,`input_on`,`input_by`,`edit_on`,`edit_by`,`del_by`,`del_on`,`del`) values ('83201511001','123','2015-11-18','2015-11-18',1,1,10000000,0,0,' 0','2015-11-19','zae','0000-00-00','','','0000-00-00',0),('83201511002','254','2015-11-18','2015-11-18',1,1,100000000,0,0,' 0','2015-11-19','zae','0000-00-00','','','0000-00-00',0),('83201511003','254','2015-11-18','2015-11-18',1,1,10000000,0,0,' Tidak ada keterlambatan','2015-11-19','zae','0000-00-00','','','0000-00-00',0),('83201511004','456','2015-11-18','2015-11-18',1,2,12000000,0,10000,' 10000','2015-11-19','zae','0000-00-00','','','0000-00-00',0),('83201511005','589','2015-11-18','2015-11-18',2,1,10000000,100000,0,' 0','2015-11-19','zae','0000-00-00','','','0000-00-00',0),('83201511006','589','2015-11-18','2015-11-18',1,1,100000000,0,0,' 0','2015-11-19','zae','0000-00-00','','','0000-00-00',0),('83201511007','254','2015-11-18','2015-11-18',2,2,10000000,0,0,' 0','2015-11-19','zae','0000-00-00','','','0000-00-00',0),('83201511008','125','2015-11-18','2015-11-18',1,2,12000000,0,0,' Ngono','2015-11-19','zae','0000-00-00','','','0000-00-00',0),('83201511009','693','2015-11-18','2015-11-18',1,3,10000000,500000,130000,' Denda terlamba setor','2015-11-19','zae','0000-00-00','','','0000-00-00',0),('83201511010','125','2015-11-18','2015-11-18',1,1,10000000,0,0,' 0','2015-11-19','zae','0000-00-00','','','0000-00-00',0),('83201511011','124','2015-11-18','2015-11-18',1,10,120000,0,0,' 0','2015-11-19','zae','0000-00-00','','','0000-00-00',0);

/*Table structure for table `ms_pembayaran_detil` */

DROP TABLE IF EXISTS `ms_pembayaran_detil`;

CREATE TABLE `ms_pembayaran_detil` (
  `id_pembayaran_detil` int(11) NOT NULL,
  PRIMARY KEY (`id_pembayaran_detil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ms_pembayaran_detil` */

/*Table structure for table `ms_pembayaran_jenis` */

DROP TABLE IF EXISTS `ms_pembayaran_jenis`;

CREATE TABLE `ms_pembayaran_jenis` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `pembayaran_jenis` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `ms_pembayaran_jenis` */

insert  into `ms_pembayaran_jenis`(`id_jenis`,`pembayaran_jenis`) values (1,'Uang Muka'),(2,'Kewajiban Lain');

/*Table structure for table `ms_penjualan` */

DROP TABLE IF EXISTS `ms_penjualan`;

CREATE TABLE `ms_penjualan` (
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
  `del` smallint(1) DEFAULT '0',
  PRIMARY KEY (`id_penjualan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ms_penjualan` */

insert  into `ms_penjualan`(`id_penjualan`,`id_konsumen`,`id_kavling`,`id_status`,`id_sales`,`harga_kel`,`harga_jual`,`total_kewajiban`,`tgl_booking`,`status_mail`,`status_beli`,`input_by`,`input_on`,`edit_by`,`edit_on`,`del_by`,`del_on`,`del`) values ('201509002','201509002',1,1,'201509002',0,0,0,'2015-11-27',0,'undefined','zae','2015-11-27',NULL,NULL,NULL,NULL,0),('201509011','undefined',1,1,'201509011',0,0,0,'2015-11-27',0,'undefined','zae','2015-11-27',NULL,NULL,NULL,NULL,0),('201509012','undefined',1,1,'201509012',0,0,0,'2015-11-27',0,'undefined','zae','2015-11-27',NULL,NULL,NULL,NULL,0),('2323232','23232',232323,1,'213232323',800000,800000,400000,'2015-11-25',0,'penawaran','zae','2015-11-25',NULL,NULL,NULL,NULL,0),('PJ0201','201509001',1,1,'201509001',0,200000000,30000000,'2015-09-13',0,'penawaran','zae','2015-09-13',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `ms_proyek` */

DROP TABLE IF EXISTS `ms_proyek`;

CREATE TABLE `ms_proyek` (
  `id_proyek` int(11) NOT NULL AUTO_INCREMENT,
  `proyek` varchar(15) DEFAULT NULL,
  `deskripsi` varchar(45) DEFAULT NULL,
  `telp` varchar(45) DEFAULT NULL,
  `alamat` text,
  `fax` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_proyek`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ms_proyek` */

/*Table structure for table `ms_sales` */

DROP TABLE IF EXISTS `ms_sales`;

CREATE TABLE `ms_sales` (
  `id_sales` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `hp` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `input_on` date NOT NULL,
  PRIMARY KEY (`id_sales`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ms_sales` */

insert  into `ms_sales`(`id_sales`,`nama`,`hp`,`email`,`alamat`,`input_on`) values ('201509001','Hendri','000000','000000','0000000','2015-09-12'),('201509002','Zaenal','0000','0000','0000','2015-09-12'),('201509003','Dion Mahesa','085715887704','hendriyulianto1992@gmail.com','Kp. Gebang Tangerang','2015-09-12'),('201509004','A. Yani','8838388388338','ernihermawati58@yahoo.com','Tangerang','2015-09-12'),('201509005','Rido','00000','00000','00000','2015-09-12'),('201509006','h','h','h','h','2015-09-24'),('201511001','Ilham','085715887704','hendriyulianto1992@gmail.com','Kp. gebang Tangerang','2015-11-16');

/*Table structure for table `ms_status` */

DROP TABLE IF EXISTS `ms_status`;

CREATE TABLE `ms_status` (
  `id_status` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(45) DEFAULT NULL,
  `ket_status` varchar(100) NOT NULL,
  `modul` varchar(100) NOT NULL,
  `order` varchar(45) DEFAULT NULL,
  `done` smallint(1) DEFAULT '0',
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `ms_status` */

insert  into `ms_status`(`id_status`,`status`,`ket_status`,`modul`,`order`,`done`) values (1,'Tersedia','Kavling Masi tersedia','',NULL,0),(2,'Terjual','Kavling Terjual','',NULL,0);

/*Table structure for table `ms_user` */

DROP TABLE IF EXISTS `ms_user`;

CREATE TABLE `ms_user` (
  `username` varchar(15) NOT NULL,
  `id_jabatan` int(11) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `fullname` varchar(45) NOT NULL,
  `blokir` enum('Y','N') DEFAULT NULL,
  `picture` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=big5;

/*Data for the table `ms_user` */

insert  into `ms_user`(`username`,`id_jabatan`,`password`,`email`,`fullname`,`blokir`,`picture`) values ('Diana',2,'','diana.sayang@gmail.com','Diana Ac','N',NULL),('Faisal',2,'1ce9287a63e38534efb11b85339cbe59','faisalwa@gmail.com','Faisayal Yakub','N',NULL),('Fisaly',1,'d41d8cd98f00b204e9800998ecf8427e','faisal','Fisal Y','N','Lighthouse.jpg'),('Hahahaahhhahhah',2,'d41d8cd98f00b204e9800998ecf8427e','hahahhahah','hahahahhahahahhahahh','Y','Tulips.jpg'),('hahhah',3,'d41d8cd98f00b204e9800998ecf8427e','jajajj','hahahah','Y',''),('zae',1,'1ce9287a63e38534efb11b85339cbe59','arifin.dzae@gmail.com','Hendri','N',NULL),('zainal',4,'d41d8cd98f00b204e9800998ecf8427e','zae@msc.com','Zainal Arifin','Y','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
