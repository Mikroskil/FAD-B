-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2014 at 08:01 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `artikel2`
--

INSERT INTO `artikel2` (`idartikel`, `kategori`, `subkategori`, `judul`, `artikel`, `gambar`, `lokasi`, `maps`, `create_date`, `create_by`, `modify_date`, `modify_by`) VALUES
(6, 'Plaza', 'Mikroskil', 'Test tt tttt', '<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Dictumst tincidunt, natoque! Dictumst! Arcu parturient, dis aliquam odio sed? Non duis ultrices phasellus ac odio. Risus ridiculus, enim. Porta placerat dignissim arcu lundium porta est velit etiam! Sed est. <span style="font-style: italic;"><span style="font-weight: bold;">Lundium ac! </span></span><br><br>Ultrices nisi, pid duis? Arcu habitasse amet montes habitasse velit vel proin adipiscing, enim a nisi, scelerisque nec augue augue, phasellus velit elementum dictumst? Ac placerat, et nunc, pellentesque nunc cursus! Aenean. Mattis vel ridiculus dis vut? Enim. <span style="font-weight: bold;"><span style="background-color: rgb(255, 255, 0);"><span style="color: rgb(255, 0, 0);">Sed elementum? Amet nec a, a? Placerat etiam?</span></span></span> <br><br>Cras egestas, pulvinar duis elementum aenean est platea! Etiam in elit natoque integer et et sit sed mauris. Ultrices ridiculus dolor sit amet et tempor sit placerat? Nisi parturient risus! Dictumst tincidunt quis egestas, cum phasellus urna dignissim nisi pulvinar sociis pellentesque.</span>', '3091-Tulips.jpg', 'yasnajsna', '<iframe width="300" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.id/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Lihat Peta Lebih Besar</a></small>', '2014-01-01', 'admin', '2014-01-02', 'admin'),
(7, 'Restoran', 'padang', 'Rendang', '<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;"><span style="color: rgb(0, 153, 0);"><span style="background-color: rgb(255, 255, 0);"><span style="font-style: italic;"><span style="font-weight: bold;">Et natoque diam urna ac placerat aliquam amet ut purus rhoncus? </span></span></span></span>Enim pulvinar non mattis? Duis et dis amet porta, adipiscing in platea montes sit odio, placerat nunc in! Aenean magna turpis tempor dictumst integer. Phasellus, magna diam purus massa integer elementum pid vel nec. Aenean eu nunc. Porta dolor, facilisis augue lundium augue?<br><br>Urna! Lundium etiam. Augue a hac ut porta lectus ridiculus nascetur ut, scelerisque pellentesque adipiscing aliquam risus montes adipiscing? Ut massa sit, in lacus est augue. Arcu lacus etiam proin! Ac cum, pellentesque nunc pulvinar, et, adipiscing adipiscing facilisis eu integer lectus? A. Sit, mid et. Urna proin, porta est et, vel non nisi? Magna scelerisque, egestas nisi? Rhoncus scelerisque porta nunc, massa dignissim integer, massa.</span>', '8865-Jellyfish.jpg', 'blasmdas \r\nasnakdskas', '<iframe width="300" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.id/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Lihat Peta Lebih Besar</a></small>', '2014-01-02', 'admin', '2014-01-02', 'admin'),
(8, 'Tempat Ibadah', 'Mesjid', 'Wow', '<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Rhoncus ut sociis placerat tempor? Lectus platea vel scelerisque nascetur urna mauris sagittis platea dolor penatibus pid tincidunt integer, diam lorem eros sit, sociis elementum habitasse nec et nisi nec adipiscing.<br><br>Sociis porttitor pulvinar mid risus platea turpis, integer. In, augue adipiscing placerat in, et ac a, et dolor nec! Tincidunt porttitor eros duis sociis, natoque nec vel placerat, natoque montes, ac amet etiam ultricies, ac platea hac, cursus? Dignissim adipiscing, dictumst tortor sociis a risus turpis enim aenean magnis cras amet mattis mauris, habitasse turpis pid dignissim, nisi, vut nisi mauris urna cum sed! Dignissim massa magnis, dictumst? Nisi dignissim pulvinar eu mauris mid mus auctor lectus vel magna, proin? Sed pulvinar, augue vel, pulvinar vel enim adipiscing.</span>', '5677-2.jpg', 'Test lagi loh....', '<iframe width="300" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.id/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Lihat Peta Lebih Besar</a></small>', '2014-01-02', 'admin', '2014-01-02', 'admin'),
(9, 'Tempat Ibadah', 'Mesjid', 'Lanjut lagi....', '<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Facilisis in velit? Magnis mauris! Etiam amet et dignissim? Purus eu magna? Nunc lorem odio scelerisque augue ac rhoncus augue magnis adipiscing vel dolor aliquet augue pulvinar parturient turpis, turpis in? Magna, est lacus, augue? Facilisis elementum lacus adipiscing? Augue magnis. Rhoncus egestas hac, natoque velit duis. In turpis adipiscing! Scelerisque elementum amet. Facilisis risus.<br><br>Massa auctor nisi sit tristique platea! Aenean quis magna ut, lundium porta dignissim scelerisque et sed, ac, mattis vel egestas, tincidunt enim turpis sagittis! Mauris amet, ultricies augue! Ut enim et pulvinar scelerisque aenean urna, in eu eu elementum nisi! Elementum augue urna amet. Etiam? Dictumst, ac purus enim rhoncus turpis elementum! Tincidunt lundium placerat, nisi? Aliquet sit sed tincidunt odio hac ac magna.</span>', '738-3.jpg', 'Gak tw...', '<iframe width="300" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.id/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Lihat Peta Lebih Besar</a></small>', '2014-01-02', 'admin', '2014-01-02', 'admin'),
(10, 'Hotel', 'Mikroskil', 'uji coba...', '<p style="margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; background-color: transparent; color: rgb(0, 0, 0); font-family: arial; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-position: initial initial; background-repeat: initial initial;">Cursus eros proin, augue augue scelerisque ridiculus purus pid porttitor mid porta, lacus nisi massa montes vut vel dis arcu? Facilisis in, arcu etiam, ac ultricies ridiculus duis, ac integer vel tortor eu! Enim, massa enim sed magna cras egestas dis turpis mid mid tempor, odio montes nascetur ridiculus, sagittis, sagittis, dignissim, eros diam facilisis sed? <br></p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; background-color: transparent; color: rgb(0, 0, 0); font-family: arial; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-position: initial initial; background-repeat: initial initial;"><br></p><p style="margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 13px; vertical-align: baseline; background-color: transparent; color: rgb(0, 0, 0); font-family: arial; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-position: initial initial; background-repeat: initial initial;"><span style="font-style: italic;"><span style="font-weight: bold;">Odio pellentesque nec risus, mid a? Ac habitasse?</span></span> Nec, facilisis sit lundium turpis odio, ac odio, urna placerat. Lacus natoque lectus velit non pid! Arcu magna auctor diam! Etiam aliquam odio tortor. Phasellus etiam! Natoque mauris pellentesque egestas, aliquet pulvinar tristique ac nisi hac! Turpis natoque. Ridiculus est a. Odio risus porttitor! Nunc egestas integer tortor? Tortor odio velit dis eros, <span style="font-weight: bold;"><span style="color: rgb(255, 0, 0);">hac lectus in.</span></span></p><br class="Apple-interchange-newline">', '182-1.jpg', 'bla bla...', '<iframe width="300" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.id/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Lihat Peta Lebih Besar</a></small>', '2014-01-03', 'deja', '0000-00-00', ''),
(11, 'Hiburan', 'Makanan & Minuman', 'capek loh...', '<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Lectus etiam rhoncus et, turpis, nunc arcu porttitor! Odio ridiculus enim magna eros magna rhoncus dignissim turpis vel, elit! Sociis, eros duis! Elementum vut, tincidunt vut odio. Adipiscing. Sit porttitor, enim dignissim?<br><br><span style="font-weight: bold;"><span style="background-color: rgb(255, 255, 102);">Et! Vel sit amet? </span></span>Magna magnis? Turpis dignissim, nunc ridiculus, scelerisque facilisis pid penatibus proin turpis, cras integer dis non penatibus facilisis eu cras, ultrices odio, nunc nisi urna mid, diam vel placerat pid massa ut phasellus lundium sit placerat, in placerat placerat, rhoncus est ut scelerisque. Risus, placerat, aliquet pulvinar sagittis. Facilisis in dignissim amet! Scelerisque pellentesque dictumst, dictumst in turpis dapibus risus, sit dis dignissim urna! Sed vut amet? Aliquam, penatibus aenean porta pellentesque? Integer vel, montes ridiculus duis penatibus, odio? <span style="font-weight: bold;"><span style="color: rgb(255, 153, 0);">Dapibus aenean quis, nascetur nec.</span></span></span>', '5112-3.jpg', 'hihihi', '<iframe width="300" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.id/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Lihat Peta Lebih Besar</a></small>', '2014-01-03', 'admin', '0000-00-00', '');

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
('k05', 'Restoran'),
('k06', 'Hiburan');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`idkomentar`, `idartikel`, `iduser`, `komentar`) VALUES
(4, 6, 'u1001', 'test'),
(5, 7, 'usr00003', 'hehehehe'),
(6, 8, 'usr00003', 'haha...'),
(7, 9, 'usr00003', 'test lagi...');

-- --------------------------------------------------------

--
-- Table structure for table `subkategori2`
--

CREATE TABLE IF NOT EXISTS `subkategori2` (
  `idsub` int(3) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(25) NOT NULL,
  `subkategori` varchar(25) NOT NULL,
  PRIMARY KEY (`idsub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `subkategori2`
--

INSERT INTO `subkategori2` (`idsub`, `kategori`, `subkategori`) VALUES
(1, 'Kampus', 'Mikroskil'),
(2, 'Kampus', 'IBBI'),
(3, 'Universitas', 'USU'),
(4, 'Hotel', 'Antares'),
(5, 'Tempat Ibadah', 'Mesjid'),
(6, 'Restoran', 'padang'),
(7, 'Hiburan', 'Makanan & Minuman');

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
('t02', 'nasnak', 'samskama', 'asnknak', 'kmaskka', 'asknkana'),
('tbh00001', 'test', 'test@gmail.com', 'yeaaa', 'baisida', 'kankasnak'),
('tbh00002', 'test2', 'test2@gmail.com', 'dkkadma', 'asnakdnak', 'nidkalna'),
('tbh00003', 'test3', 'test3@gmail.com', 'cjandaj', 'dscnsknc', 'sdncskncsk');

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
('usr00003', 'sssss', 'tttt', 'test@gmail.com'),
('usr00004', 'bbbaiinaida', 'test2', 'test2@gmail.com'),
('usr00005', '936aa2d51122f82', 'Laptop', 'coba@gmail.com'),
('usr00006', 'saya', 'coba2', 'coba2@gmail.com'),
('usr00007', 'À©×G±·4\rªÍÓôbO', 'kamu', 'coba3@gmail.com'),
('usr00008', '£ÒKU[Âîï47}‰', 'dia', 'coba4@gmail.com');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_3` FOREIGN KEY (`idartikel`) REFERENCES `artikel2` (`idartikel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD CONSTRAINT `sub_kategori_ibfk_1` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_kategori_ibfk_2` FOREIGN KEY (`idartikel`) REFERENCES `artikel` (`idartikel`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
