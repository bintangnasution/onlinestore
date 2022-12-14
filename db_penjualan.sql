-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2022 pada 21.53
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_penjualan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpengguna`
--

CREATE TABLE `detailpengguna` (
  `id` int(11) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kecamatan` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kodepos` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `hp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpesan`
--

CREATE TABLE `detailpesan` (
  `no_pesanan` int(8) NOT NULL,
  `kd_produk` int(8) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detailpesan`
--

INSERT INTO `detailpesan` (`no_pesanan`, `kd_produk`, `qty`, `harga`) VALUES
(23112201, 22112201, 1, 15000),
(23112202, 22112201, 1, 15000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(8) NOT NULL,
  `nama_jenis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Kebutuhan Sehari-hari'),
(2, 'Kosmetik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kirim`
--

CREATE TABLE `kirim` (
  `no_pesanan` int(8) NOT NULL,
  `tgl_kirim` date NOT NULL,
  `no_pengirim` varchar(50) NOT NULL,
  `jasa_kirim` text NOT NULL,
  `biaya_kirim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kirim`
--

INSERT INTO `kirim` (`no_pesanan`, `tgl_kirim`, `no_pengirim`, `jasa_kirim`, `biaya_kirim`) VALUES
(23112201, '2022-11-23', '2311220122112201', 'JNE', 3000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konf_bayar`
--

CREATE TABLE `konf_bayar` (
  `no_pesanan` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `via_bank` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konf_bayar`
--

INSERT INTO `konf_bayar` (`no_pesanan`, `tgl_bayar`, `via_bank`, `jumlah`, `foto`) VALUES
(23112201, '2022-11-23', 'virtual-acc-bri', 1, 'img-231122-v-acc-bri.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ongkir`
--

CREATE TABLE `ongkir` (
  `kode_pos` int(6) NOT NULL,
  `provinsi` text NOT NULL,
  `kabupaten` text NOT NULL,
  `kecamatan` text NOT NULL,
  `kelurahan` text NOT NULL,
  `ongkir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ongkir`
--

INSERT INTO `ongkir` (`kode_pos`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `ongkir`) VALUES
(6645, 'Jawa Tengah', 'Kudus', 'Dawe', 'Wates', 3000),
(55182, 'D.I Yogyakarta', 'Bantul', 'Kasihan', 'Ngestiharjo', 2000),
(55183, 'D.I Yogyakarta', 'Bantul', 'Kasihan', 'Tamantirto', 2500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `email`, `password`, `role`) VALUES
(6, 'Bintang Nasution', 'sumbercodeku@gmail.com', '$2y$10$UN6kIUKIIcpYKA7dvy74GOkEc6o6KSEfyn0JWmSv7Da2jPws.Syhq', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `no_pesanan` int(8) NOT NULL,
  `tanggal` date NOT NULL,
  `no_hp` text NOT NULL,
  `alamat_kirim` text NOT NULL,
  `kode_pos_kirim` int(6) NOT NULL,
  `ongkos_kirim` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`no_pesanan`, `tanggal`, `no_hp`, `alamat_kirim`, `kode_pos_kirim`, `ongkos_kirim`, `total_harga`, `status`) VALUES
(23112201, '2022-11-23', '083127899696', 'Jl. Rengasdengklok RT 1/12', 6645, 3000, 18000, 'bayar'),
(23112202, '2022-11-23', '083127869696', 'Jl. Rengasdengklok RT 2/12', 55182, 2000, 17000, 'pesan'),
(23112203, '2022-11-23', '083127889696', 'Jl. Rengasdengklok RT 3/12', 55183, 2500, 17500, 'batal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `kd_produk` int(8) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `nama` text NOT NULL,
  `satuan` text NOT NULL,
  `deskripsi` text NOT NULL,
  `berat` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `rating` int(1) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal_ditambahkan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detailpengguna`
--
ALTER TABLE `detailpengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detailpesan`
--
ALTER TABLE `detailpesan`
  ADD PRIMARY KEY (`no_pesanan`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `kirim`
--
ALTER TABLE `kirim`
  ADD PRIMARY KEY (`no_pesanan`);

--
-- Indeks untuk tabel `konf_bayar`
--
ALTER TABLE `konf_bayar`
  ADD PRIMARY KEY (`no_pesanan`);

--
-- Indeks untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`kode_pos`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`no_pesanan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kd_produk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detailpengguna`
--
ALTER TABLE `detailpengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `kode_pos` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55184;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `kd_produk` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22112208;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
