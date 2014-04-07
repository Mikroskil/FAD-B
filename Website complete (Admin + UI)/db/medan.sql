-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 07 Apr 2014 pada 12.41
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `medan`
--
CREATE DATABASE IF NOT EXISTS `medan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `medan`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `password` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `salt` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nama` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `password`, `username`, `salt`) VALUES
(4, '0110e0c5a0418615c4a400d7aa36c5ea', 'deja', '52bbdc1783e540.52126945'),
(5, 'edf573809903cd0393ac685ff1613ebe', 'deja prayuda', '52bbf307697850.30956716'),
(6, '21232f297a57a5a743894a0e4a801fc3', 'admin', '52bbf79a0446d7.16680029'),
(12, '21232f297a57a5a743894a0e4a801fc3', 'admin1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
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
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`idartikel`, `judul`, `artikel`, `gambar`, `lokasi`, `maps`) VALUES
('a108', 'sdmsdmcs', '<span style="color: rgb(0, 0, 0); font-family: arial; font-size: 13px; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: auto; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); display: inline !important; float: none;">Sagittis tincidunt dis vut. Lectus hac platea, eros, dis mus integer mauris, placerat, cursus adipiscing dis tincidunt, penatibus ut? Aliquam odio natoque, mid. Cras! Velit pellentesque scelerisque velit hac scelerisque porta velit scelerisque aliquet nunc mattis nec? In nec odio nec ultrices ac pulvinar, mauris in velit. Turpis porta, vel elit pulvinar nisi scelerisque mus, pid auctor natoque ut, cursus habitasse, augue montes sit habitasse tincidunt integer?<br><span style="font-weight: bold;"><span style="color: rgb(255, 0, 0);"><span style="background-color: rgb(255, 255, 0);">Diam vel, enim cursus placerat nunc mid odio nascetur </span></span></span>pellentesque. Aenean turpis enim non nec cursus! Nunc porttitor! Natoque quis rhoncus ultricies, facilisis etiam sed, augue scelerisque tortor! Nisi tincidunt scelerisque ac porttitor turpis! Eu sagittis! Vel turpis turpis, eu! Dictumst augue non magna parturient lorem sed? Est augue, turpis, porta augue.</span>', '1906-Koala.jpg', 'kkk', '<iframe width="600" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.id/maps?f=q&amp;source=embed&amp;hl=id&amp;geocode=&amp;q=Thamrin+Plaza+Medan,+Medan,+Sumatera+Utara&amp;aq=0&amp;oq=Thamri&amp;sll=-2.44565,117.8888&amp;sspn=25.857592,43.286133&amp;ie=UTF8&amp;hq=Thamrin+Plaza&amp;hnear=Medan,+Sumatera+Utara&amp;t=m&amp;ll=3.586323,98.691559&amp;spn=0.029982,0.051498&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">Lihat Peta Lebih Besar</a></small>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel2`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data untuk tabel `artikel2`
--

INSERT INTO `artikel2` (`idartikel`, `kategori`, `subkategori`, `judul`, `artikel`, `gambar`, `lokasi`, `maps`, `create_date`, `create_by`, `modify_date`, `modify_by`) VALUES
(18, 'Pasar', 'Super Market', 'Medan Mall', '<b>Plaza Medan Fair</b> merupakan salah satu pusat belanja di <a href="http://id.wikipedia.org/wiki/Medan" title="Medan" class="mw-redirect">Medan</a>, <a href="http://id.wikipedia.org/wiki/Sumatera_Utara" title="Sumatera Utara">Sumatera Utara</a> teramai selain <a href="http://id.wikipedia.org/wiki/Sun_Plaza" title="Sun Plaza">Sun Plaza</a>. Plaza Medan Fair dirancang oleh perusahaan arsitektur di <a href="http://id.wikipedia.org/wiki/Singapura" title="Singapura">Singapura</a> dengan konsep modern, bernuasa nyaman dan fleksibel. <i>Tenant</i> (penyewa) di mal ini antara lain <a href="http://id.wikipedia.org/wiki/Carrefour" title="Carrefour" class="mw-redirect">Carrefour</a>, <a href="http://id.wikipedia.org/wiki/Matahari_Department_Store" title="Matahari Department Store">Matahari Department Store</a>, <a href="http://id.wikipedia.org/wiki/Electronic_City" title="Electronic City">Electronic City</a>, dan toko buku Karisma.<br><br><b>Plaza Medan Fair</b> merupakan salah satu pusat belanja di <a href="http://id.wikipedia.org/wiki/Medan" title="Medan" class="mw-redirect">Medan</a>, <a href="http://id.wikipedia.org/wiki/Sumatera_Utara" title="Sumatera Utara">Sumatera Utara</a> teramai selain <a href="http://id.wikipedia.org/wiki/Sun_Plaza" title="Sun Plaza">Sun Plaza</a>. Plaza Medan Fair dirancang oleh perusahaan arsitektur di <a href="http://id.wikipedia.org/wiki/Singapura" title="Singapura">Singapura</a> dengan konsep modern, bernuasa nyaman dan fleksibel. <i>Tenant</i> (penyewa) di mal ini antara lain <a href="http://id.wikipedia.org/wiki/Carrefour" title="Carrefour" class="mw-redirect">Carrefour</a>, <a href="http://id.wikipedia.org/wiki/Matahari_Department_Store" title="Matahari Department Store">Matahari Department Store</a>, <a href="http://id.wikipedia.org/wiki/Electronic_City" title="Electronic City">Electronic City</a>, dan toko buku Karisma.<br>', '7677-medanmall.jpg', 'Petisah', 'Maps', '2014-03-12', 'admin1', '0000-00-00', ''),
(19, 'Rumah Sakit', 'Pemerintah', 'RS Pirngadi', '<span style="font-weight: bold;">Rumah Sakit Pirngadi Medan </span>- Dengan alasan untuk meningkatkan \r\nkualitas dan mutu pelayanan, mulai 1 Februari 2013&nbsp; Rumah Sakit Umum&nbsp; dr\r\n Pirngadi Medan (RSPM) telah menaikkan tarif pelayanan sebesar 100 \r\npersen lebih.\r\n<p style="text-align: justify;"> Sesuai keterangan Kabag Humas RSPM, \r\nEdison Peranginangin&nbsp; menyebutkan kalau kenaikan tarif sudah berlaku dan\r\n tarif tersebut sudah termasuk jasa sarana dan jasa pelayanan medis atau\r\n visit dokter.</p>\r\n<p style="text-align: justify;">“Kenaikan tarif ini berdasarkan \r\nPeraturan Wali Kota Medan No. 4 Tahun 2013 tentang Tarif Pelayanan \r\nKesehatan Pada Bulan Layanan Umum Daerah (BLUD) RSPM. Kenaikan tersebut \r\ntermasuk untuk karcis pendaftaran pasien umum yang dinaikkan sebesar Rp 5\r\n ribu, dari Rp 10 ribu menjadi Rp 15 ribu. Ruang Rawat Inap Kelas III \r\nnaik menjadi Rp 80 ribu, sebelumnya Rp 24 ribu,” ujar Edison, akhir \r\npekan.</p>', '3773-rspirngadi.jpg', 'MH. Yamin', 'Maps', '2014-03-12', 'admin1', '0000-00-00', ''),
(20, 'Sekolah', 'SMA', 'SMA SUTOMO', '<p><b>Perguruan Sutomo</b> adalah nama sekelompok <a href="http://id.wikipedia.org/wiki/Sekolah" title="Sekolah">sekolah</a> swasta di <a href="http://id.wikipedia.org/wiki/Kota_Medan" title="Kota Medan">Medan</a>, <a href="http://id.wikipedia.org/wiki/Indonesia" title="Indonesia">Indonesia</a> yang dikelola Yayasan Perguruan Sutomo. Kelompok ini mencakup Sutomo 1 yang terdiri dari <i>play group</i>, <a href="http://id.wikipedia.org/wiki/TK" title="TK" class="mw-redirect">TK</a>, <a href="http://id.wikipedia.org/wiki/SD" title="SD" class="mw-redirect">SD</a>, <a href="http://id.wikipedia.org/wiki/SMP" title="SMP" class="mw-redirect">SMP</a>, dan <a href="http://id.wikipedia.org/wiki/SMA" title="SMA" class="mw-redirect">SMA</a>,\r\n dan Sutomo 2 yang terdiri dari TK, SD, SMP, dan SMA. Di antara \r\nkeduanya, Sutomo 1 merupakan sekolah yang lebih dominan dan luas \r\ndikenal.</p>\r\n<p><i>Play group</i>, TK, dan SD Sutomo 1 terletak di Jalan Jambi, <a href="http://id.wikipedia.org/wiki/Medan_Perjuangan" title="Medan Perjuangan" class="mw-redirect">Medan Perjuangan</a> sementara SMP dan SMA Sutomo 1 terletak di Jalan Letkol Martinus Lubis, <a href="http://id.wikipedia.org/wiki/Medan_Kota" title="Medan Kota" class="mw-redirect">Medan Kota</a>. Sutomo 2 terletak seluruhnya di <a href="http://id.wikipedia.org/wiki/Pulo_Brayan" title="Pulo Brayan">Pulo Brayan</a>, <a href="http://id.wikipedia.org/wiki/Medan_Barat,_Medan" title="Medan Barat, Medan">Medan Barat</a>.</p>\r\n<p>Lebih dari 15 ribu siswa bersekolah di Perguruan Sutomo. Mayoritas siswanya adalah warga keturunan Tionghoa (sekitar 80%),<sup id="cite_ref-swa_3-0" class="reference"><a href="http://id.wikipedia.org/wiki/Perguruan_Sutomo#cite_note-swa-3">[3]</a></sup>\r\n sedangkan etnis Tionghoa mewakili 40% komposisi guru. Kebanyakan guru \r\ndi SD Sutomo 1 adalah masyarakat etnis Tionghoa, sedangkan kebanyakan \r\nguru di SMP/SMA Sutomo 1 adalah masyarakat etnis Batak.</p>', '4380-smasutomo.jpg', 'JL. Thamrin', 'Maps', '2014-03-12', 'admin1', '0000-00-00', ''),
(21, 'Perbankan', 'Bank Sumut', 'Bank Sumut Pusat', '<p style="text-align: justify;"><b>PT BPD Sumut</b> atau yang lebih dikenal dengan <b>Bank Sumut</b> adalah sebuah bank pembangunan daerah bersifat devisa didirikan pada tanggal <a href="http://id.wikipedia.org/wiki/4_November" title="4 November">4 November</a> <a href="http://id.wikipedia.org/wiki/1961" title="1961">1961</a>. Bank Sumut dibentuk dengan status <a href="http://id.wikipedia.org/wiki/Perseroan_Terbatas" title="Perseroan Terbatas" class="mw-redirect">Perseroan Terbatas</a>.</p>\r\n<p style="text-align: justify;">Bank Sumut kemudian dialihkan menjadi Badan Usaha Milik Daerah (BUMD)\r\n pada tahun 1965 sebelum dikembalikan statusnya sebagai Perseroan \r\nTerbatas pada tahun 1999. Bank Sumut termasuk dalam jajaRan Bank \r\nPembangunan Daerah yang mimiliki aset terbesar, saat ini asetnya telah \r\nmencapai 27 triliun dengan dukungan 200 unit kantor yang terdiri dari \r\nKantor Cabang Utama, Kantor Cabang, Cabang Pembantu, Cabang Unit Mikro \r\nserta payment point, dengan cakupan wilayah kerja hingga DKI Jakarta \r\n(Cabang Atrium Senen, Cabang Melawai dan Capem Tanah Abang. Untuk \r\nmendukung layanan syariah, sejak tahun 2004 Bank Sumut juga telah \r\nmembuka Unit Usaha Syariah yang saat ini telah memiliki 18 kantor cabang\r\n dan Capem dengan aset telah mencapai 1,5 triliun. Dalam rangka \r\nmendukung layanan jasa perbankan kepada masyarakat ATM bank Sumut juga \r\ntelah tergabung dengan jaringan ATM Bersama, BANKCARD Malaysia, \r\npembelian pulsa, pembayaran listrik, air dan berbagai macam jasa \r\nperbankan lainnya.</p>', '7055-banksumut.jpg', 'JL. Diponegoro', 'Maps', '2014-03-12', 'admin1', '0000-00-00', ''),
(22, 'Tempat Ibadah', 'Mesjid', 'Mesjid Raya', '<p style="text-align: justify;"><b>Masjid Raya Medan</b> atau Masjid Raya Al Mashun merupakan sebuah <a href="http://id.wikipedia.org/wiki/Masjid" title="Masjid">masjid</a> yang terletak di <a href="http://id.wikipedia.org/wiki/Kota_Medan" title="Kota Medan">Medan</a>, <a href="http://id.wikipedia.org/wiki/Indonesia" title="Indonesia">Indonesia</a>. Masjid ini dibangun pada tahun <a href="http://id.wikipedia.org/wiki/1906" title="1906">1906</a> dan selesai pada tahun <a href="http://id.wikipedia.org/wiki/1909" title="1909">1909</a>. Pada awal pendiriannya, masjid ini menyatu dengan kompleks istana. Gaya arsitekturnya khas <a href="http://id.wikipedia.org/wiki/Timur_Tengah" title="Timur Tengah">Timur Tengah</a>, <a href="http://id.wikipedia.org/wiki/India" title="India">India</a> dan <a href="http://id.wikipedia.org/wiki/Spanyol" title="Spanyol">Spanyol</a>. Masjid ini berbentuk segi delapan dan memiliki sayap di bagian selatan, timur, utara dan barat.</p>\r\n\r\n<div style="text-align: justify;" id="toc" class="toc">\r\n<div id="toctitle">\r\n<h2>Daftar isi</h2>\r\n</div>\r\n\r\n</div>\r\n\r\n<h2 style="text-align: justify;"><span class="mw-headline" id="Sejarah_pembangunan">Sejarah pembangunan</span></h2>\r\n<p style="text-align: justify;">Sultan Ma’mum Al Rasyid Perkasa Alam sebagai pemimpin <a href="http://id.wikipedia.org/wiki/Kesultanan_Deli" title="Kesultanan Deli">Kesultanan Deli</a> memulai pembangunan Masjid Raya Al Mashun pada tanggal 21 Agustus <a href="http://id.wikipedia.org/wiki/1906" title="1906">1906</a>\r\n (1 Rajab 1324 H). Keseluruhan pembangunan rampung pada tanggal 10 \r\nSeptember 1909 (25 Sya‘ban 1329 H) sekaligus digunakan ditandai dengan \r\npelaksanaan sholat Jum’at pertama di masjid ini. keseluruhan \r\npembangunannya menghabiskan dana sebesar satu juta Gulden. Sultan memang\r\n sengaja membangun mesjid kerajaan ini dengan megah, karena menurut \r\nprinsipnya hal itu lebih utama ketimbang kemegahan istananya sendiri, \r\nIstana Maimun. Pendanaan pembangunan masjid ini ditanggung sendiri oleh \r\nSultan, namun konon Tjong A Fie, tokoh kota medan dari etnis Thionghoa \r\nyang sejaman dengan Sultan Ma’mun Al Rasyd turut berkontribusi mendanai \r\npembangunan masjid ini</p>', '5252-mesjidraya.jpg', 'Jl. SM Raja', 'Maps', '2014-03-12', 'admin1', '0000-00-00', ''),
(23, 'Fasitas Umum', 'SPBU', 'SPBU Putri Hijau', 'SPBU Putri Hijau merupakan salah satu SPBU yang sudah berdiri sejak puluhan Tahun yang silam. SPBU ini sangat banyak di kungjungi konsumen karena berada pada lokasi yang sangat strategis.<br><br>Dari Desain Luar, SPBU ini terlihat minimalis, namun tetap mengusung desain yang modern sehingga nilai arsitestik SPBU ini sangat baik.<br><br>Dari segi Fasilitas, SPBU ini dilengkapi dengan Toilet, Bensin, Solar, Pertamax. dan waktu operasional nya adalah 24 Jam, Non stop.<br>', '8536-spbu.jpg', 'JL. Yos Sudarso', 'Maps', '2014-03-22', 'admin1', '0000-00-00', ''),
(24, 'Hotel / Penginapan', 'Bintang 5', 'Hotel JW Marriot', 'Serangan atas Hotel Marriott Islamabad terjadi pada 20 September 2008, \r\nketika sebuah truk diledakkan di depan Hotel JW Marriott di ibukota \r\nPakistan, Islamabad, menewaskan sekurang-kurangnya 60 orang, melukai \r\nsetidaknya 257 orang. Mayoritas korban diyakini adalah orang Pakistan, \r\nmeskipun 15 orang asing juga dilaporkan terluka.<br><br><div class="dablink noprint"><img alt="!" src="http://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Crystal_Clear_app_xmag.svg/20px-Crystal_Clear_app_xmag.svg.png" height="20" width="20">Artikel utama untuk bagian ini adalah: <a href="http://id.wikipedia.org/wiki/Pengeboman_JW_Marriott_2003" title="Pengeboman JW Marriott 2003">Pengeboman JW Marriott 2003</a></div>\r\n<ul><li>Pada Selasa, 5 Agustus 2003 pukul 12.45 dan 12.55 WIB ledakan <a href="http://id.wikipedia.org/wiki/Bom_mobil" title="Bom mobil">bom mobil</a> <a href="http://id.wikipedia.org/wiki/Bunuh_diri" title="Bunuh diri">bunuh diri</a> terjadi di Hotel JW Marriott menewaskan 12 orang dan mencederai 150 orang.</li></ul>\r\n<div class="dablink noprint"><img alt="!" src="http://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Crystal_Clear_app_xmag.svg/20px-Crystal_Clear_app_xmag.svg.png" height="20" width="20">Artikel utama untuk bagian ini adalah: <a href="http://id.wikipedia.org/wiki/Bom_Jakarta_2009" title="Bom Jakarta 2009">Bom Jakarta 2009</a></div>\r\n<ul><li>Pada Jumat, 17 Juli 2009 pukul 07.47 dan 07.57 <a href="http://id.wikipedia.org/wiki/Bom_Jakarta_2009" title="Bom Jakarta 2009">ledakan bom</a>\r\n kembali terjadi di hotel JW Mariott dan kali ini juga di Ritz-Carlton \r\ndi kawasan Mega Kuningan, Jakarta, Indonesia, menewaskan 9 orang dan \r\nmelukai lebih dari 50 orang lainnya, baik warga Indonesia maupun warga \r\nasing.</li></ul><br>', '8607-jwmarriot.jpg', 'JL. Putri Hijau', 'Maps', '2014-03-22', 'admin1', '2014-03-22', 'admin1'),
(25, 'Hotel / Penginapan', 'Bintang 5', 'Hotel Grand Angkasa', '<span class="st"><em>Grand Angkasa</em> International Hotel tarif promo termurah di Wego Indonesia | Ulasan, fasilitas, foto &amp; alamat <em>Grand Angkasa</em> International Hotel di <em>Medan<br><br></em></span><span class="st">Research <em>Grand Angkasa</em> International Hotel in <em>Medan</em>, Indonesia. Read hotel reviews, view hotel photos and get expert travel advice for nearby restaurants</span><br>', '6949-grandangkasa.jpg', 'Jl. Sutomo', 'Maps', '2014-03-22', 'admin1', '2014-03-22', 'admin1'),
(26, 'Perguruan Tinggi', 'Sekolah Tinggi / Akademi', 'STMIK Mikroskil', '<p>STMIK Mikroskil pada awalnya adalah sebuah lembaga kursus pendidikan komputer yang berdiri pada tahun <a href="http://id.wikipedia.org/wiki/1992" title="1992">1992</a> dengan nama IMC. IMC menyelenggarakan pendidikan <i>Paket Komputer Training</i> dengan jangka waktu 3, 4, dan 6 bulan.</p>\r\n<p>Melihat tingginya minat masyarakat <a href="http://id.wikipedia.org/wiki/Sumatera_Utara" title="Sumatera Utara">Sumatera Utara</a> khususnya masyarakat <a href="http://id.wikipedia.org/wiki/Medan" title="Medan" class="mw-redirect">Kota Medan</a> untuk mengikuti pelatihan di IMC serta didukung oleh pesatnya pertumbuhan akan kebutuhan <a href="http://id.wikipedia.org/wiki/Teknologi_informasi" title="Teknologi informasi">teknologi informasi</a>, maka pada tanggal <a href="http://id.wikipedia.org/wiki/20_Maret" title="20 Maret">20 Maret</a> <a href="http://id.wikipedia.org/wiki/1994" title="1994">1994</a> IMC berkembang ke jenjang program pendidikan Diploma 1 (D-1). Program ini merupakan hasil kerja sama dengan <i>Microskills</i> Singapura, National Computing Centre (NCC), dan London Chamber of Commerce and Industry (LCCI) <a href="http://id.wikipedia.org/wiki/Britania_Raya" title="Britania Raya">United Kingdom</a> dalam bidang program <a href="http://id.wikipedia.org/wiki/Sains" title="Sains" class="mw-redirect">sains</a> <a href="http://id.wikipedia.org/wiki/Komputer" title="Komputer">komputer</a>, <a href="http://id.wikipedia.org/wiki/Akuntansi" title="Akuntansi">akuntansi</a>, <a href="http://id.wikipedia.org/wiki/Manajemen" title="Manajemen">manajemen</a>, <a href="http://id.wikipedia.org/wiki/Perpajakan" title="Perpajakan" class="mw-redirect">perpajakan</a>, dan <a href="http://id.wikipedia.org/wiki/Sekretaris" title="Sekretaris">sekretaris</a>.</p>\r\n<p>Tanggapan yang positif terhadap lembaga pendidikan ini mendorong pimpinan <i>Microskills</i>\r\n dan Yayasan Bina Pertiwi untuk mengembangkan lembaga pendidikan ini \r\nmenjadi Sekolah Tinggi. Pada tanggal 1 Agustus 1997 berdiri <i>Sekolah Tinggi Manajemen Informatika dan Komputer Mikroskil</i> yang disingkat dengan <i>STMIK Mikroskil</i> dengan <i>Surat Keputusan Mendikbud No. 45/D/O/1997</i>.</p>', '7000-MIKROSKIL.jpeg', 'Jl. M.H Thamrin', 'Maps', '2014-03-22', 'admin1', '0000-00-00', ''),
(27, 'Kantor Pemerintahan', 'Kantor Polisi', 'Polresta Medan', '<span class="st">Petugas SKPT <em>Polresta Medan</em> Ancam Penjarakan Wartawan. Petugas SPKT <em>Polresta Medan</em> bernama Aiptu Zulefendi mengancam akan memenjarakan<br><br></span><span class="st">Dari informasi yang berhasil diperoleh, pelaku, Sarjana Sitepu ,56, ditangkap petugas Sat Reskrim <em>Polresta Medan</em> setelah mendapat laporan<br><br></span>', '7472-polresta.jpg', 'Jl. Wahidin', 'Maps', '2014-03-22', 'admin1', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `file_id` varchar(80) DEFAULT NULL,
  `basename` varchar(45) DEFAULT NULL,
  `extension` varchar(6) DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL,
  `size` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `path` varchar(256) DEFAULT NULL,
  `url` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idkategori` varchar(15) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idkategori`, `kategori`) VALUES
('14', 'Perbankan'),
('k01', 'Hotel'),
('k02', 'Sekolah'),
('k03', 'Pasar'),
('k04', 'Tempat Ibadah'),
('k05', 'Restoran'),
('k06', 'Rumah Sakit'),
('k07', 'Museum'),
('k08', 'Wisata Kota'),
('k11', 'Kantor Pemerintahan'),
('k15', 'Hotel / Penginapan'),
('k16', 'Perguruan Tinggi'),
('k19', 'Fasitas Umum'),
('k20', 'Kantor Instansi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `idkomentar` int(5) NOT NULL AUTO_INCREMENT,
  `idartikel` int(5) NOT NULL,
  `iduser` varchar(15) NOT NULL,
  `komentar` text NOT NULL,
  PRIMARY KEY (`idkomentar`),
  KEY `iduser` (`iduser`),
  KEY `idartikel` (`idartikel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(50) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `slide`
--

INSERT INTO `slide` (`id`, `file`, `judul`, `ket`) VALUES
(19, 'bg1.jpg', 'slide', 'tiga'),
(20, 'bg2.jpg', 'slide', 'empat'),
(21, 'bg4.jpg', 'Slide', ' satu'),
(22, 'bg3.jpg', 'Slide', ' kedua'),
(23, 'bg5.jpg', 'slide', ''),
(24, 'bg6.jpg', 'slide', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkategori2`
--

CREATE TABLE IF NOT EXISTS `subkategori2` (
  `idsub` int(3) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(25) NOT NULL,
  `subkategori` varchar(25) NOT NULL,
  PRIMARY KEY (`idsub`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data untuk tabel `subkategori2`
--

INSERT INTO `subkategori2` (`idsub`, `kategori`, `subkategori`) VALUES
(10, 'Rumah Sakit', 'Pemerintah'),
(11, 'Sekolah', 'SMA'),
(12, 'Perbankan', 'Bank Sumut'),
(13, 'Sekolah', 'SD'),
(14, 'Sekolah', 'SMP'),
(15, 'Sekolah', 'PlayGroups / TK'),
(16, 'Hotel / Penginapan', 'Bintang 5'),
(17, 'Hotel / Penginapan', 'Bintang 4'),
(18, 'Hotel / Penginapan', 'Bintang 3'),
(19, 'Hotel / Penginapan', 'Bintang 2'),
(20, 'Hotel / Penginapan', 'Bintang 1 Kebawah'),
(21, 'Kantor Pemerintahan', 'Kantor Polisi'),
(22, 'Kantor Pemerintahan', 'Kantor Pos'),
(23, 'Kantor Pemerintahan', 'Kantor Lurah'),
(24, 'Kantor Pemerintahan', 'Kantor Camat'),
(25, 'Kantor Pemerintahan', 'Pemerintahan Kota'),
(26, 'Perguruan Tinggi', 'Universitas Negeri'),
(27, 'Perguruan Tinggi', 'Universitas Swasta'),
(28, 'Perguruan Tinggi', 'Sekolah Tinggi / Akademi'),
(29, 'Ruang Terbuka', 'Taman'),
(30, 'Ruang Terbuka', 'Tanah Lapang'),
(31, 'Wisata Kota', 'Taman Kota'),
(32, 'Wisata Kota', 'Gedung Bersejarah'),
(33, 'Wisata Kota', 'Museum'),
(34, 'Wisata Kota', 'Wisata Kuliner'),
(35, 'Wisata Kota', 'Wisata Alam'),
(36, 'Rumah Sakit', 'Rumah Sakit Umum'),
(37, 'Rumah Sakit', 'Rumah Sakit Ibu / Anak'),
(38, 'Rumah Sakit', 'Puskesmas'),
(39, 'Rumah Sakit', 'Klinik Kesehatan'),
(40, 'Tempat Ibadah', 'Masjid'),
(41, 'Tempat Ibadah', 'Gereja'),
(42, 'Tempat Ibadah', 'Vihara'),
(43, 'Tempat Ibadah', 'Klenteng'),
(44, 'Pasar', 'Super Market'),
(46, 'Pasar', 'Tradisional'),
(47, 'Perbankan', 'Bank BRI'),
(48, 'Perbankan', 'Bank BNI'),
(49, 'Perbankan', 'Bank BII'),
(50, 'Perbankan', 'Bank Danamon'),
(51, 'Perbankan', 'Bank Mandiri'),
(52, 'Perbankan', 'Bank BCA'),
(53, 'Perbankan', 'Bank OCBC'),
(54, 'Perbankan', 'Bank CIMB Niaga'),
(55, 'Perbankan', 'Bank Mestika'),
(56, 'Perbankan', 'Bank Lain'),
(57, 'Perbankan', 'ATM Center'),
(58, 'Pasar', 'Indomaret'),
(59, 'Pasar', 'Alfa Mart / Midi'),
(60, 'Restoran', 'Hight Class'),
(61, 'Restoran', 'Lesehan'),
(62, 'Restoran', 'Rumah Makan'),
(63, 'Fasitas Umum', 'SPBU'),
(64, 'Fasitas Umum', 'Sport Center'),
(65, 'Kantor Instansi', 'Perwakilan / Loket Bus'),
(66, 'Kantor Instansi', 'Konsulat / Dubes'),
(67, 'Kantor Instansi', 'Perusahaan Multi Nasional');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kategori`
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
-- Struktur dari tabel `tam_lok`
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
-- Dumping data untuk tabel `tam_lok`
--

INSERT INTO `tam_lok` (`idtambah`, `nama`, `email`, `judul`, `artikel`, `lokasi`) VALUES
('t01', '', '', 'test1', 'bla bla...', 'bla bla...'),
('t02', 'nasnak', 'samskama', 'asnknak', 'kmaskka', 'asknkana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
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
('usr00001', '', '', ''),
('windows', 'linux', 'Asus', 'windows@linux.com');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_3` FOREIGN KEY (`idartikel`) REFERENCES `artikel2` (`idartikel`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD CONSTRAINT `sub_kategori_ibfk_1` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_kategori_ibfk_2` FOREIGN KEY (`idartikel`) REFERENCES `artikel` (`idartikel`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
