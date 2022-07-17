-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2022 pada 16.18
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcrud_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_buku`
--

CREATE TABLE `data_buku` (
  `kode_buku` varchar(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `sinopsis` varchar(5000) NOT NULL,
  `cover` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_buku`
--

INSERT INTO `data_buku` (`kode_buku`, `judul`, `penulis`, `genre`, `sinopsis`, `cover`) VALUES
('HMP01', 'Filosofi Teras', 'Henry Manampiring', 'Filsafat Lur', 'Filosofi Teras, diawali dengan menceritakan tentang sebuah survei kekhawatiran nasional yang semakin masif sekaligus menyajikan tentang sekilas kehidupan si penulis yang dipenuhi oleh emosi negatif yang berlebihan. Dalam buku ini dijelaskan bahwa penyebab emosi negatif atau kecemasan yang berlebihan disebabkan oleh rasio atau pola pikir yang keliru. Pada akhirnya, penulis menyarankan para pembaca untuk memperbaiki pola pikir yang keliru tersebut, dengan salah satu contohnya ialah menerapkan filsafat Stoa (Stoikisme) yang pada buku tersebut kemudian diterjemahkan sebagai \"Filsafat Teras\" dalam kehidupan sehari-hari. Dalam buku tersebut, filsafat Stoa digambarkan secara sederhana dengan inti dikotomi kendali nasib manusia, sehingga dari dikotomi kendali tersebut, manusia dapat menentukan hal-hal yang dapat membuatnya bahagia maupun tidak.', 'teras.jpg'),
('KG001', 'Pembunuhan di Nihonbashi', 'Keigo Higashino', 'Young Adult Fiction ', 'Detektif Kaga Kyoichiro baru dipindahkan ke Nihonbashi, Tokyo. Ia memang pendatang baru, tapi sangat berpengalaman menangani kasus kriminal. Ia bergabung dengan tim untuk menyelidiki pembunuhan seorang wanita. Semakin terlibat dalam kasus itu, semakin banyak tersangka baru bermunculan. Bahkan, hampir semua orang yang tinggal dan bekerja di distrik Nihonbashi memiliki motif sebagai pelaku. Agar si pelaku tertangkap, Kaga harus mengurai seluruh rahasia di sekitar hidup manusia yang rumit. Masa lalu korban, sejarah keluarganya, dan hari-hari terakhir hidupnya merupakan kunci yang akan membawa Kaga kepada si pelaku. The Newcomer merupakan novel dari seri Detektif Kaga karya Keigo Higashino.', 'nihonbashi.jpg'),
('KG002', 'Keajaiban Toko Kelontong Namiya', 'Keigo Higashino', 'Young Adult Fiction', 'Ketika tiga pemuda berandal bersembunyi di toko kelontong tak berpenghuni setelah melakukan pencurian, sepucuk surat misterius mendadak diselipkan ke dalam toko melalui lubang surat. Surat yang berisi permintaan saran. Sungguh aneh. Namun, surat aneh itu ternyata membawa mereka dalam petualangan melintasi waktu, menggantikan peran kakek pemilik toko kelontong yang menghabiskan tahun-tahun terakhirnya memberikan nasihat tulus kepada orang-orang yang meminta bantuan. Hanya untuk satu malam. Dan saat fajar menjelang, hidup ketiga sahabat itu tidak akan pernah sama lagi...	', 'namiya.jpg'),
('LC001', 'Laut Bercerita', 'Leila S. Chudori', 'Fiksi', 'Jakarta, Maret 1998 Di sebuah senja, di sebuah rumah susun di Jakarta, mahasiswa bernama Biru Laut disergap empat lelaki tak dikenal. Bersama kawan-kawannya, Daniel Tumbuan, Sunu Dyantoro, Alex Perazon, dia dibawa ke sebuah tempat yang tak dikenal. Berbulan-bulan mereka disekap, diinterogasi, dipukul, ditendang, digantung, dan disetrum agara bersedia menjawab satu pertanyaan penting: siapakah yang berdiri di balik gerakan aktivis dan mahasiswa saat itu. ', 'laut.jpg'),
('TR001', 'Bumi Datar', 'Tere Liye', 'Bildungsroman, Fiksi, Petualangan, Fantasi', 'Raib, seorang gadis berumur 15 tahun. Ia sama seperti remaja lainya. Kecuali satu hal, Sesuatu yang ia simpan sendiri sejak kecil. Sesuatu yang menakjubkan. Raib bisa menghilang. Cukup dengan menutup wajah dengan kedua tangan tubuhnya pun menghilang. Kekuatan aneh itu telah ada sejak ia masih kecil, bahkan sejak umur 2 tahun Raib suka sekali bermain petak umpat bersama orangtuanya. Raib meletakan kedua telapak tanganya di wajah, dan menghilang. Saat ulang tahunnya yang kesembilan, Raib mendapat hadiah 2 ekor kucing kembar entah dari siapa. Kedua kucing itu dia beri nama si Hitam dan si Putih.', 'bumi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_buku`
--
ALTER TABLE `data_buku`
  ADD PRIMARY KEY (`kode_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
