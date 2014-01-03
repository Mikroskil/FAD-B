-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2014 at 06:57 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `artikel2`
--

INSERT INTO `artikel2` (`idartikel`, `kategori`, `subkategori`, `judul`, `artikel`, `gambar`, `lokasi`, `maps`, `create_date`, `create_by`, `modify_date`, `modify_by`) VALUES
(6, 'Universitas', 'Mikroskil', 'Test tt tttt', '<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Dictumst tincidunt, natoque! Dictumst! Arcu parturient, dis aliquam odio sed? Non duis ultrices phasellus ac odio. Risus ridiculus, enim. Porta placerat dignissim arcu lundium porta est velit etiam! Sed est. <span style="font-style: italic;"><span style="font-weight: bold;">Lundium ac! </span></span><br><br>Ultrices nisi, pid duis? Arcu habitasse amet montes habitasse velit vel proin adipiscing, enim a nisi, scelerisque nec augue augue, phasellus velit elementum dictumst? Ac placerat, et nunc, pellentesque nunc cursus! Aenean. Mattis vel ridiculus dis vut? Enim. <span style="font-weight: bold;"><span style="background-color: rgb(255, 255, 0);"><span style="color: rgb(255, 0, 0);">Sed elementum? Amet nec a, a? Placerat etiam?</span></span></span> <br><br>Cras egestas, pulvinar duis elementum aenean est platea! Etiam in elit natoque integer et et sit sed mauris. Ultrices ridiculus dolor sit amet et tempor sit placerat? Nisi parturient risus! Dictumst tincidunt quis egestas, cum phasellus urna dignissim nisi pulvinar sociis pellentesque.</span>', '3091-Tulips.jpg', 'yasnajsna', '<iframe width="600" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.id/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Lihat Peta Lebih Besar</a></small>', '2014-01-01', 'admin', '0000-00-00', '');

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
('k04', 'Tempat Ibadah'),
('k05', 'Restoran');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `idkomentar` int(5) NOT NULL AUTO_INCREMENT,
  `idartikel` int(5) NOT NULL,
  `iduser` varchar(15) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`idkomentar`),
  KEY `iduser` (`iduser`),
  KEY `idartikel` (`idartikel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`idkomentar`, `idartikel`, `iduser`, `komentar`) VALUES
(4, 6, 'u1001', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `subkategori2`
--

CREATE TABLE IF NOT EXISTS `subkategori2` (
  `idsub` int(3) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(25) NOT NULL,
  `subkategori` varchar(25) NOT NULL,
  PRIMARY KEY (`idsub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `subkategori2`
--

INSERT INTO `subkategori2` (`idsub`, `kategori`, `subkategori`) VALUES
(1, 'Kampus', 'Mikroskil'),
(2, 'Kampus', 'IBBI'),
(3, 'Universitas', 'USU'),
(4, 'Hotel', 'Antares'),
(5, 'Tempat Ibadah', 'Mesjid'),
(6, 'Restoran', 'padang');

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
  `nama` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `judul` varchar(50) DEFAULT NULL,
  `artikel` text,
  `lokasi` text,
  PRIMARY KEY (`idtambah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tam_lok`
--

INSERT INTO `tam_lok` (`idtambah`, `nama`, `email`, `judul`, `artikel`, `lokasi`) VALUES
('t01', '', '', 'test1', 'bla bla...', 'bla bla...'),
('t02', 'nasnak', 'samskama', 'asnknak', 'kmaskka', 'asknkana');

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
('u1001', 'test', 'deja', 'yuda@gmail.com'),
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
  ADD CONSTRAINT `komentar_ibfk_3` FOREIGN KEY (`idartikel`) REFERENCES `artikel2` (`idartikel`) ON DELETE CASCADE ON UPDATE CASCADE,
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
