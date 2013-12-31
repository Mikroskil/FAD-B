-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2013 at 09:10 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `password` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `salt` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `username`, `salt`) VALUES
(4, '0110e0c5a0418615c4a400d7aa36c5ea', 'deja', '52bbdc1783e540.52126945'),
(5, 'edf573809903cd0393ac685ff1613ebe', 'deja prayuda', '52bbf307697850.30956716'),
(6, 'd2d62f075ac74c539c7e38e17d2a2f7f', 'admin', '52bbf79a0446d7.16680029');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `idartikel` varchar(15) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `artikel` text NOT NULL,
  `gambar` text NOT NULL,
  `lokasi` text NOT NULL,
  `maps` text NOT NULL,
  PRIMARY KEY (`idartikel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`idartikel`, `judul`, `artikel`, `gambar`, `lokasi`, `maps`) VALUES
('a108', 'sdmsdmcs', '<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Sagittis tincidunt dis vut. Lectus hac platea, eros, dis mus integer mauris, placerat, cursus adipiscing dis tincidunt, penatibus ut? Aliquam odio natoque, mid. Cras! Velit pellentesque scelerisque velit hac scelerisque porta velit scelerisque aliquet nunc mattis nec? In nec odio nec ultrices ac pulvinar, mauris in velit. Turpis porta, vel elit pulvinar nisi scelerisque mus, pid auctor natoque ut, cursus habitasse, augue montes sit habitasse tincidunt integer?<br><span style="font-weight: bold;"><span style="color: rgb(255, 0, 0);"><span style="background-color: rgb(255, 255, 0);">Diam vel, enim cursus placerat nunc mid odio nascetur </span></span></span>pellentesque. Aenean turpis enim non nec cursus! Nunc porttitor! Natoque quis rhoncus ultricies, facilisis etiam sed, augue scelerisque tortor! Nisi tincidunt scelerisque ac porttitor turpis! Eu sagittis! Vel turpis turpis, eu! Dictumst augue non magna parturient lorem sed? Est augue, turpis, porta augue.</span>', '1906-Koala.jpg', 'kkk', '<iframe width="600" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.id/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Lihat Peta Lebih Besar</a></small>');

-- --------------------------------------------------------

--
-- Table structure for table `artikel2`
--

CREATE TABLE IF NOT EXISTS `artikel2` (
  `idartikel` int(5) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(25) NOT NULL,
  `subkategori` varchar(25) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `artikel` text NOT NULL,
  `gambar` text NOT NULL,
  `lokasi` text NOT NULL,
  `maps` text NOT NULL,
  `create_date` date NOT NULL,
  `create_by` varchar(25) NOT NULL,
  `modify_date` date NOT NULL,
  `modify_by` varchar(25) NOT NULL,
  PRIMARY KEY (`idartikel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `artikel2`
--

INSERT INTO `artikel2` (`idartikel`, `kategori`, `subkategori`, `judul`, `artikel`, `gambar`, `lokasi`, `maps`, `create_date`, `create_by`, `modify_date`, `modify_by`) VALUES
(1, 'Hotel', 'Antares', 'test', '<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Dis\r\n ac phasellus odio, magna, natoque, et tincidunt! Augue pulvinar, \r\naliquet elementum porta etiam risus, cras, placerat lorem, auctor, quis \r\nplacerat ultrices, etiam vel? Duis nunc sit cursus, eros nisi! Mus \r\nsagittis urna enim, vel tortor vel phasellus? Amet, magnis?<br><br><span style="font-weight: bold;"><span style="background-color: rgb(255, 255, 0);"><span style="color: rgb(102, 0, 204);">Porta scelerisque aenean. Ultricies! </span></span></span>Purus\r\n dapibus magnis tristique? Urna risus augue tempor turpis lacus \r\nsagittis? Ultricies. Est integer facilisis in. Nascetur augue cras, \r\nrhoncus! Augue sit. <span style="text-decoration: underline;"><span style="font-style: italic;">Arcu magna duis porta nunc enim! Platea porta sociis mid est, lundium lacus sagittis.</span></span><br><br>Magnis\r\n eu magna odio, nec urna urna nisi? Sed purus? Lacus, sed eu eros enim \r\nturpis, est nisi augue risus urna velit sit ridiculus elit sed turpis \r\nrhoncus, in. Porttitor? A aliquet rhoncus, lacus ut vel mauris integer \r\naugue magna.</span>', '8299-Tulips.jpg', 'dkamdkasm', '<iframe width="600" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.id/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Lihat Peta Lebih Besar</a></small>', '2013-12-31', '6', '2013-12-31', 'admin'),
(2, 'Kampus', 'Mikroskil', 'test2', '<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Amet risus eros, montes natoque. Aenean phasellus. A vut, et vel mattis? Integer elementum, nisi eu tincidunt cras phasellus? Facilisis sed porttitor rhoncus, cursus turpis, magnis. Magnis amet! Duis? Placerat pellentesque! Dignissim magna pid egestas odio phasellus? Eros nisi, sed. Vut, mus dolor tortor pellentesque dapibus integer.<br><br><span style="font-weight: bold;">Urna nec nascetur enim. Natoque placerat nec elit, amet turpis placerat pid tincidunt nisi tincidunt massa. Vut purus ultricies, est natoque augue odio dapibus, parturient penatibus dolor </span>pellentesque integer pellentesque! Augue phasellus auctor turpis placerat a purus. Cursus augue, vut, habitasse tortor nunc magna habitasse nunc mauris sed. Amet quis porttitor nascetur! Nascetur, nec nec elit, urna diam ultricies est auctor lundium eros nascetur tortor dolor. Tincidunt integer turpis in ultricies lacus.</span>', '9943-Chrysanthemum.jpg', 'sfmsdkm', '<iframe width="600" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.id/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Lihat Peta Lebih Besar</a></small>', '2013-12-31', 'admin', '2013-12-31', 'deja'),
(3, 'Hotel', 'USU', 'tesssst', 'kanxkasnkasjnkjasx', '269-', 'jnaxkasnxska', 'axkasxkasx', '2013-12-31', 'admin', '0000-00-00', ''),
(4, 'Kampus', 'IBBI', 'kmlmzsa', 'HSBAHJBSJA', '6412-Jellyfish.jpg', 'axasxasx', 'asxasxasx', '2013-12-31', 'admin', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idkategori` varchar(15) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `kategori`) VALUES
('k01', 'Hotel'),
('k02', 'Sekolah'),
('k03', 'Plaza'),
('k04', 'Tempat Ibadah');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `idkomentar` varchar(15) NOT NULL,
  `idartikel` varchar(15) NOT NULL,
  `iduser` varchar(15) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`idkomentar`),
  KEY `idartikel` (`idartikel`),
  KEY `iduser` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subkategori2`
--

CREATE TABLE IF NOT EXISTS `subkategori2` (
  `idsub` int(3) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(25) NOT NULL,
  `subkategori` varchar(25) NOT NULL,
  PRIMARY KEY (`idsub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subkategori2`
--

INSERT INTO `subkategori2` (`idsub`, `kategori`, `subkategori`) VALUES
(1, 'Kampus', 'Mikroskil'),
(2, 'Kampus', 'IBBI'),
(3, 'Universitas', 'USU'),
(4, 'Hotel', 'Antares'),
(5, 'Tempat Ibadah', 'Mesjid');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategori`
--

CREATE TABLE IF NOT EXISTS `sub_kategori` (
  `idsub` varchar(15) NOT NULL,
  `idkategori` varchar(15) NOT NULL,
  `idartikel` varchar(15) NOT NULL,
  `subkategori` varchar(50) NOT NULL,
  PRIMARY KEY (`idsub`),
  KEY `idkategori` (`idkategori`),
  KEY `idartikel` (`idartikel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tam_lok`
--

CREATE TABLE IF NOT EXISTS `tam_lok` (
  `idtambah` varchar(15) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `artikel` text NOT NULL,
  `lokasi` text NOT NULL,
  PRIMARY KEY (`idtambah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tam_lok`
--

INSERT INTO `tam_lok` (`idtambah`, `judul`, `artikel`, `lokasi`) VALUES
('t01', 'test1', 'bla bla...', 'bla bla...');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `pass`, `nama`, `email`) VALUES
('u101', 'deja', 'Dezha', 'deja@gmail.com'),
('u102', 'medan', 'Yudha', 'medan@yahoo.com'),
('u103', 'jdankdn', 'kjandka', 'jnadka'),
('u104', 'njadasdn ', 'nmadnas', 'nkankas'),
('u105', 'ssvs', 'hrthfgbdf', 'sdfsdjhfbjhs'),
('u106', 'jhkejdecn', 'nfkjwenfk', 'kjnjkc'),
('u107', 'nmkjebckwdew', 'unsdjkcnsjk', 'njbsdjcbs'),
('u108', 'anasna', 'mndasnm', 'kjndakjna'),
('u109', 'andakjndkxa', 'nmjdqwkj', 'eidjkqndkq'),
('u110', 'mnabjhda', 'jdnjkasdnka', 'nkdnakjsd'),
('user', 'user', 'medan', 'user@gmail.com'),
('windows', 'linux', 'Asus', 'windows@linux.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`idartikel`) REFERENCES `artikel` (`idartikel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD CONSTRAINT `sub_kategori_ibfk_1` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_kategori_ibfk_2` FOREIGN KEY (`idartikel`) REFERENCES `artikel` (`idartikel`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
