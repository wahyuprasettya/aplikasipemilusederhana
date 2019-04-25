-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Apr 2019 pada 14.10
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_paslon`
--

CREATE TABLE IF NOT EXISTS `tbl_paslon` (
`id_paslon` int(11) NOT NULL,
  `nama_paslon` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_paslon`
--

INSERT INTO `tbl_paslon` (`id_paslon`, `nama_paslon`) VALUES
(1, 'paslon1'),
(2, 'paslon2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_vote`
--

CREATE TABLE IF NOT EXISTS `tbl_vote` (
`id_vote` int(11) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `id_paslon` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_vote`
--

INSERT INTO `tbl_vote` (`id_vote`, `jumlah`, `id_paslon`) VALUES
(12, '1', 2),
(13, '1', 2),
(14, '1', 1),
(15, '1', 2),
(16, '1', 2),
(17, '', 1),
(18, '1', 2),
(19, '', 1),
(20, '', 2),
(21, '', 2),
(22, '', 2),
(23, '', 1),
(24, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_paslon`
--
ALTER TABLE `tbl_paslon`
 ADD PRIMARY KEY (`id_paslon`);

--
-- Indexes for table `tbl_vote`
--
ALTER TABLE `tbl_vote`
 ADD PRIMARY KEY (`id_vote`), ADD KEY `id_paslon` (`id_paslon`), ADD KEY `id_paslon_2` (`id_paslon`), ADD KEY `id_paslon_3` (`id_paslon`), ADD KEY `id_paslon_4` (`id_paslon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_paslon`
--
ALTER TABLE `tbl_paslon`
MODIFY `id_paslon` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_vote`
--
ALTER TABLE `tbl_vote`
MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_vote`
--
ALTER TABLE `tbl_vote`
ADD CONSTRAINT `tbl_vote_ibfk_1` FOREIGN KEY (`id_paslon`) REFERENCES `tbl_paslon` (`id_paslon`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
