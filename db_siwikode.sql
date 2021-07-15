-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Jul 2021 pada 14.38
-- Versi server: 5.7.24
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siwikode`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kuliner`
--

CREATE TABLE `jenis_kuliner` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_kuliner`
--

INSERT INTO `jenis_kuliner` (`id`, `nama`) VALUES
(1, 'Kedai/Cafe'),
(2, 'Restaurant'),
(3, 'Pasar Kaget');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_wisata`
--

CREATE TABLE `jenis_wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `jenis_wisata`
--

INSERT INTO `jenis_wisata` (`id`, `nama`) VALUES
(1, 'Argo Wisata'),
(2, 'Kuliner'),
(3, 'Taman Wisata'),
(4, 'Museum'),
(5, 'Water Park / Kolam Renang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profesi`
--

CREATE TABLE `profesi` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `profesi`
--

INSERT INTO `profesi` (`id`, `nama`) VALUES
(1, 'Artist'),
(2, 'Pejabat'),
(3, 'Mahasiswa'),
(4, 'Pegawai Swasta'),
(11, 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `wisata_id` int(11) NOT NULL,
  `profesi_id` int(11) NOT NULL,
  `rating` smallint(6) DEFAULT NULL,
  `komentar` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `level` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `level`) VALUES
(1, 'syahrifala@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `jenis_wisata_id` int(11) NOT NULL,
  `jenis_kuliner_id` int(11) NOT NULL,
  `foto` text NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `fasilitas` text,
  `bintang` smallint(6) DEFAULT NULL,
  `kontak` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `latlong` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `web` varchar(45) DEFAULT NULL,
  `tipe` enum('wisata','kuliner') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id`, `jenis_wisata_id`, `jenis_kuliner_id`, `foto`, `nama`, `deskripsi`, `fasilitas`, `bintang`, `kontak`, `alamat`, `latlong`, `email`, `web`, `tipe`) VALUES
(1, 2, 2, 'assets/img/restaurant_1.jpg', 'Pondok Ikan Gurame', 'Di siang hari yang terik memang paling pas untuk mencari tempat sejuk yang bisa sekaligus menikmati tempat makan enak. Itu bisa kamu dapatkan saat datang ke Pondok Ikan Gurame. Walaupun tidak menggunakan pendingin ruangan, tempat makan ini terasa nyaman dan sejuk karena di sekitarnya banyak memiliki tumbuhan hijau dan tempat makan lesehan. ', NULL, 10, NULL, NULL, NULL, NULL, NULL, 'kuliner'),
(2, 1, 3, 'assets/img/restaurant_2.jpg', 'Wisata Alam Kampung 99 Pepohonan', 'Cocok untuk mereka yang mencari suasana tenang, damai dan terasa sejuk setelah beraktivitas cukup padat dalam satu minggu penuh.Kampung 99 Pepohonan ini merupakan tempat hunian sekaligus rekreasi yang berkonsep menyatu dengan alam.\r\n\r\nLokasi ini juga dikenal dengan nama kampung Rusa yang dekat dengan Masjid Dian Al Mahri. Kampung 99 Pepohonan ini berada di Jalan KH Muhasan II, kelurahan Maruyung Kecamatan Limo. Wisatawan bisa datang dengan anak-anak kecil yang akan menyukai lingkungan ini.', NULL, 10, NULL, NULL, NULL, NULL, NULL, 'wisata'),
(3, 1, 3, 'assets/img/restaurant_3.jpg', 'Water Park Ceria', 'Lokasi wahana bermain air ini berdekatan dengan Universitas Indonesia. Dari UI Anda bisa menuju ke daerah Haji Amat 1, kemudian belok kanan ke arah jalan H. Koja Raya. Selanjutnya masuk melalui kawasan Ahmad Dahlan III, barulan ambil jalur ke jalan K.H.M. Usman. Anda langsung bisa melihat sebuah plang yang menunjukkan Waterpark Ceria Depok.\r\n\r\nWisata air ini didominasi oleh wahana permainan seperti perosotan berbagai bentuk dan ukuran. Ada pula ember tumpah serta kolam arus yang menambah keceriaan liburan Anda kali ini. Pengelola wisata juga menyediakan fasilitas yang memadai, mulai dari toilet bersih hingga kamar ganti. Selain itu terdapat foodcourt yang siap mengisi perut kosong dengan harga terjangkau.', NULL, 10, NULL, NULL, NULL, NULL, NULL, 'wisata'),
(4, 4, 3, 'assets/img/restaurant_1.jpg', 'Masjid Kubah Emas', 'Lebih tepatnya, mereka yang datang ke Masjid Kubah Emas ini tak hanya untuk beribadah tetapi juga wisata religi. Namanya adalah Masjid Kubah Emas atau Masjid Dian Al Mahri yang menjadi masjid kebanggaan kota Depok. Diresmikan di tanggal 31 Desember 2006 dan menjadi yang termegah di kawasan Asia Tenggara. Kubahnya mengacu pada kubah masjid-masjid di Persia dan India dengan balutan mozaik yang berlapiskan emas serta materialnya didatangkan langsung dari Itali.\r\n\r\nMasjid menawan ini juga menjadi daya tarik wisatawan yang datang untuk melaksanakan Shalat atau sekadar melihat bangunan masjid yang megah. Masjid Kubah Emas berada di jalan Raya Maruyung, Limo Depok. Setiap harinya selalu ramai dengan para jemaah baik dari warga sekitar ataupun pengunjung dari luar Depok.', NULL, 10, NULL, NULL, NULL, NULL, NULL, 'wisata');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_kuliner`
--
ALTER TABLE `jenis_kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profesi`
--
ALTER TABLE `profesi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wisata_id` (`wisata_id`),
  ADD KEY `profesi_id` (`profesi_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jenis_wisata_id` (`jenis_wisata_id`),
  ADD KEY `jenis_kuliner_id` (`jenis_kuliner_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_kuliner`
--
ALTER TABLE `jenis_kuliner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jenis_wisata`
--
ALTER TABLE `jenis_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `profesi`
--
ALTER TABLE `profesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `fk_testimoni_profesi1` FOREIGN KEY (`profesi_id`) REFERENCES `profesi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_testimoni_wisata1` FOREIGN KEY (`wisata_id`) REFERENCES `wisata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
