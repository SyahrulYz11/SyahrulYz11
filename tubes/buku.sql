-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2022 pada 15.54
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `isbn`, `gambar`) VALUES
(1, 'Matematika ', 'Bornok Sinaga, Pardomuan N.J.M Sinambela, Andri Kristianto Sitanggang, Tri Andri Hutapea, Sudianto Manulang, Lasker Pengarapan Sinaga, dan Mangara Simanjorang', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud.', 2017, '978-602-282-493-0', 'matematika10.jpg'),
(3, 'Biologi', 'Arif Priadi, Yanti Herlanti', 'Yudisthira', 2018, '-', 'Biologi10.jpg'),
(4, 'Kimia', 'A. HARIS WATONI', 'Yrama Widya', 2016, '978-602-374-289-9', 'Kimia10.jpg'),
(5, 'Bahasa Indonesia', 'Suherli, Maman Suryaman, Aji Septiaji, Istiqomah', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud.', 2017, '978-602-427-098-8', 'Bahasaindonesia10.jpg'),
(6, 'Sejarah Indonesia', 'Restu Gunawan, Amurwani Dwi Lestariningsih, dan Sardiman', 'Pusat Kurikulum dan Perbukuan, Balitbang, Kemendikbud.', 2017, '978-602-282-497-8', 'SejarahIndonesia10.jpg'),
(12, 'Seni Budaya', 'Zackaria Soetedja, Dewi Suryati, Milasari, Agus Supriatna', 'Buku Sekolah Elektronik (BSE)', 2017, '978-602-427-142-8', 'SeniBudaya10.jpg'),
(18, 'Sosiologi', 'Janu Murdiyatmoko', 'Grafindo Media Pratama', 2016, '-', '62a1f0041541b');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
