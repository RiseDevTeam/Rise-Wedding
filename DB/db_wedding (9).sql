-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Sep 2022 pada 16.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wedding`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_galeri_foto`
--

CREATE TABLE `biodata_galeri_foto` (
  `id_galeri_foto` bigint(20) UNSIGNED NOT NULL,
  `gambar_mempelai` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_mempelai_pria` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_mempelai_wanita` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto4` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto5` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto6` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto7` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto8` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto9` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `galeri_foto10` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_galeri_foto`
--

INSERT INTO `biodata_galeri_foto` (`id_galeri_foto`, `gambar_mempelai`, `gambar_mempelai_pria`, `gambar_mempelai_wanita`, `galeri_foto1`, `galeri_foto2`, `galeri_foto3`, `galeri_foto4`, `galeri_foto5`, `galeri_foto6`, `galeri_foto7`, `galeri_foto8`, `galeri_foto9`, `galeri_foto10`, `created_at`, `updated_at`) VALUES
(1, '166410996338.jpg', '166411010822.jpg', '166411010827.jpg', '166410996359.JPG', '166410996365.JPG', '166410996357.JPG', '166410996381.JPG', '166410996311.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '166445428050.png', '166445428069.png', '166445428050.png', '166445428029.jpg', '166445428050.jpeg', '166445428045.jpg', '166445428048.JPG', '166445428067.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '16644606947.jpg', '16644606948.jpg', '166446069486.jpeg', '166446069480.JPG', '166446069474.jpeg', '166446069431.jpeg', '166446069427.jpg', '166446069417.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_home_page`
--

CREATE TABLE `biodata_home_page` (
  `id_biodata_home_page` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_panggilan_pria` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_panggilan_wanita` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kata_pembuka` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_home_page`
--

INSERT INTO `biodata_home_page` (`id_biodata_home_page`, `title`, `nama_panggilan_pria`, `nama_panggilan_wanita`, `kata_pembuka`, `created_at`, `updated_at`) VALUES
(1, 'Undangan Pernikahan', 'Kelvin', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(2, 'Undangan Pernikahan', 'Kelvin', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(3, 'Undangan', 'Kelvin', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(4, 'Undangan', 'Kelvin', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(5, 'Undangan Pernikahan', 'Kelvin', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(6, 'Undangan Pernikahan', 'Kelvin', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(7, 'Undangan Pernikahan', 'Fahrezi', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(8, 'Undangan Pernikahan', 'zainul', 'sri', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_jadwal_akad`
--

CREATE TABLE `biodata_jadwal_akad` (
  `id_jadwal_akad` bigint(20) UNSIGNED NOT NULL,
  `jam_mulai_akad` time DEFAULT NULL,
  `tanggal_akad` date DEFAULT NULL,
  `waktu_wilayah_akad` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_akad` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_jadwal_akad`
--

INSERT INTO `biodata_jadwal_akad` (`id_jadwal_akad`, `jam_mulai_akad`, `tanggal_akad`, `waktu_wilayah_akad`, `lokasi_akad`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_jadwal_resepsi`
--

CREATE TABLE `biodata_jadwal_resepsi` (
  `id_jadwal_resepsi` bigint(20) UNSIGNED NOT NULL,
  `jam_mulai_resepsi` time DEFAULT NULL,
  `tanggal_resepsi` date DEFAULT NULL,
  `waktu_wilayah_resepsi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_resepsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_jadwal_resepsi`
--

INSERT INTO `biodata_jadwal_resepsi` (`id_jadwal_resepsi`, `jam_mulai_resepsi`, `tanggal_resepsi`, `waktu_wilayah_resepsi`, `lokasi_resepsi`, `created_at`, `updated_at`) VALUES
(1, '09:32:00', '2022-09-24', 'WIB', 'Kota Padang', NULL, NULL),
(2, '09:32:00', '2022-09-24', 'WIB', 'Kota Padang', NULL, NULL),
(3, '09:37:00', '2022-09-24', 'WIB', 'Kota Padang', NULL, NULL),
(4, '09:37:00', '2022-09-24', 'WIB', 'Kota Padang', NULL, NULL),
(5, '10:41:00', '2022-09-25', 'WIB', 'Kota Padang', NULL, NULL),
(6, '10:43:00', '2022-09-27', 'WIB', 'Kota Padang', NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_jadwal_resepsi_2`
--

CREATE TABLE `biodata_jadwal_resepsi_2` (
  `id_jadwal_resepsi_2` bigint(20) UNSIGNED NOT NULL,
  `jam_mulai_resepsi_2` time DEFAULT NULL,
  `tanggal_resepsi_2` date DEFAULT NULL,
  `waktu_wilayah_resepsi_2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_resepsi_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_jadwal_resepsi_2`
--

INSERT INTO `biodata_jadwal_resepsi_2` (`id_jadwal_resepsi_2`, `jam_mulai_resepsi_2`, `tanggal_resepsi_2`, `waktu_wilayah_resepsi_2`, `lokasi_resepsi_2`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_keluarga_besar_pria`
--

CREATE TABLE `biodata_keluarga_besar_pria` (
  `id_keluarga_besar_pria` bigint(20) UNSIGNED NOT NULL,
  `mengundang_pria` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_keluarga_pria` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_keluarga_besar_wanita`
--

CREATE TABLE `biodata_keluarga_besar_wanita` (
  `id_keluarga_besar_wanita` bigint(20) UNSIGNED NOT NULL,
  `mengundang_wanita` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_keluarga_wanita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_kutipan_ayat`
--

CREATE TABLE `biodata_kutipan_ayat` (
  `id_kutipan_ayat` bigint(20) UNSIGNED NOT NULL,
  `kutipan_ayat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_kutipan_ayat`
--

INSERT INTO `biodata_kutipan_ayat` (`id_kutipan_ayat`, `kutipan_ayat`, `created_at`, `updated_at`) VALUES
(1, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(2, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(3, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(4, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(5, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(6, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”', NULL, NULL),
(7, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(8, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_musik`
--

CREATE TABLE `biodata_musik` (
  `id_musik` bigint(20) UNSIGNED NOT NULL,
  `musik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_musik`
--

INSERT INTO `biodata_musik` (`id_musik`, `musik`, `created_at`, `updated_at`) VALUES
(1, '166398683473.mp3', NULL, NULL),
(2, '166398693620.mp3', NULL, NULL),
(3, '166398706285.mp3', NULL, NULL),
(4, '166398711725.mp3', NULL, NULL),
(5, '166398729964.mp3', NULL, NULL),
(6, '16640423324.mp3', NULL, NULL),
(7, '166445420374.mp3', NULL, NULL),
(8, '16644606255.mp3', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_pasangan_pria`
--

CREATE TABLE `biodata_pasangan_pria` (
  `id_pasangan_pria` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap_pria` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `putra_dari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bapak_pria` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu_pria` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_pasangan_pria`
--

INSERT INTO `biodata_pasangan_pria` (`id_pasangan_pria`, `nama_lengkap_pria`, `putra_dari`, `nama_bapak_pria`, `nama_ibu_pria`, `created_at`, `updated_at`) VALUES
(1, 'Kelvin Mulyawan', 'Putra Ketiga Dari', 'Danil Fariz', 'Mega', NULL, NULL),
(2, 'Kelvin Mulyawan', 'Putra Ketiga Dari', 'Danil Fariz', 'Mega', NULL, NULL),
(3, 'Kelvin Mulyawan', 'Putri Ketiga Dari', 'Danil Dahlan', 'Mega', NULL, NULL),
(4, 'Kelvin Mulyawan', 'Putri Ketiga Dari', 'Danil Dahlan', 'Mega', NULL, NULL),
(5, 'Kelvin Mulyawan', 'Putra Pertama', 'Danil Fariz', 'Mega', NULL, NULL),
(6, 'Kelvin Mulyawan', 'Putri Ketiga Dari', 'Danil Dahlan', 'Mega', NULL, NULL),
(7, 'Muhammad Fahrezi', 'Putra Ketiga Dari', 'Danil Fariz', 'Mega', NULL, NULL),
(8, 'Zainul Abidin', 'Putra Keempat', 'Danil Fariz', 'Sri Mulyani', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_pasangan_wanita`
--

CREATE TABLE `biodata_pasangan_wanita` (
  `id_pasangan_wanita` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap_wanita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `putri_dari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bapak_wanita` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu_wanita` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_pasangan_wanita`
--

INSERT INTO `biodata_pasangan_wanita` (`id_pasangan_wanita`, `nama_lengkap_wanita`, `putri_dari`, `nama_bapak_wanita`, `nama_ibu_wanita`, `created_at`, `updated_at`) VALUES
(1, 'Citra Febrianti', 'Putri Pertama Dari', 'Eko satria', 'Zartinis', NULL, NULL),
(2, 'Citra Febrianti', 'Putri Pertama Dari', 'Eko satria', 'Zartinis', NULL, NULL),
(3, 'Citra Febrianti', 'Putri Pertama', 'Supriyadi', 'Supriyadi', NULL, NULL),
(4, 'Citra Febrianti', 'Putri Pertama', 'Supriyadi', 'Supriyadi', NULL, NULL),
(5, 'Citra Febrianti', 'Putri keenam', 'Eko satria', 'Irmalinda', NULL, NULL),
(6, 'Citra Febrianti', 'Putri Pertama', 'Etra Daswar', 'Supriyadi', NULL, NULL),
(7, 'Citra Febrianti', 'Putri Pertama Dari', 'Eko satria', 'Yusni', NULL, NULL),
(8, 'Sri Ratu Ningsih', 'Putri keenam', 'Supriyadi', 'Buk Lin', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_pelanggan`
--

CREATE TABLE `biodata_pelanggan` (
  `id_biodata_pelanggan` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `id_biodata_home_page` bigint(20) NOT NULL,
  `id_kutipan_ayat` bigint(20) NOT NULL,
  `id_pasangan_pria` bigint(20) NOT NULL,
  `id_pasangan_wanita` bigint(20) NOT NULL,
  `id_galeri_foto` bigint(20) DEFAULT NULL,
  `id_jadwal_akad` bigint(20) DEFAULT NULL,
  `id_jadwal_resepsi` bigint(20) DEFAULT NULL,
  `id_jadwal_resepsi_2` bigint(20) DEFAULT NULL,
  `id_keluarga_besar_pria` bigint(20) DEFAULT NULL,
  `id_keluarga_besar_wanita` bigint(20) DEFAULT NULL,
  `id_musik` bigint(20) DEFAULT NULL,
  `nomor_telepon` bigint(20) NOT NULL,
  `nama_instagram` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_pelanggan`
--

INSERT INTO `biodata_pelanggan` (`id_biodata_pelanggan`, `id_user`, `id_biodata_home_page`, `id_kutipan_ayat`, `id_pasangan_pria`, `id_pasangan_wanita`, `id_galeri_foto`, `id_jadwal_akad`, `id_jadwal_resepsi`, `id_jadwal_resepsi_2`, `id_keluarga_besar_pria`, `id_keluarga_besar_wanita`, `id_musik`, `nomor_telepon`, `nama_instagram`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 1, 1, NULL, 1, 1, 1, NULL, NULL, 1, 85272621908, '', NULL, NULL),
(2, 2, 2, 2, 2, 2, NULL, 2, 2, 2, NULL, NULL, 2, 85272621908, '', NULL, NULL),
(3, 2, 3, 3, 3, 3, NULL, 3, 3, 3, NULL, NULL, 3, 82288219746, '', NULL, NULL),
(4, 2, 4, 4, 4, 4, NULL, 4, 4, 4, NULL, NULL, 4, 82288219746, '', NULL, NULL),
(5, 2, 5, 5, 5, 5, NULL, 5, 5, 5, NULL, NULL, 5, 85272621908, '', NULL, NULL),
(6, 2, 6, 6, 6, 6, 1, 6, 6, 6, NULL, NULL, 6, 85272621908, 'citrafebrianti', NULL, NULL),
(7, 2, 7, 7, 7, 7, 2, 7, 7, 7, NULL, NULL, 7, 81277563935, 'citrafebrianti', NULL, NULL),
(8, 2, 8, 8, 8, 8, 3, 8, 8, 8, NULL, NULL, 8, 85272621908, 'zainul_ganteng', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id_blog` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_blog` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pembayaran_invitation`
--

CREATE TABLE `detail_pembayaran_invitation` (
  `id_detail_pembayaran` bigint(20) UNSIGNED NOT NULL,
  `id_pembayaran` bigint(20) NOT NULL,
  `tipe_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` bigint(20) NOT NULL,
  `bukti_pembayaran` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_pembayaran_invitation`
--

INSERT INTO `detail_pembayaran_invitation` (`id_detail_pembayaran`, `id_pembayaran`, `tipe_pembayaran`, `kode_transaksi`, `total`, `bukti_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 1, 'Transfer', '202209242', 20000, '166398837620.jpg', NULL, NULL),
(2, 2, 'Transfer', '202209292', 20000, '166445482357.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanan_invitation`
--

CREATE TABLE `detail_pemesanan_invitation` (
  `id_detail_pemesanan` bigint(20) UNSIGNED NOT NULL,
  `id_pemesanan` bigint(20) NOT NULL,
  `file_template` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_vidio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isActive` int(11) NOT NULL,
  `keterangan_file` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_pemesanan_invitation`
--

INSERT INTO `detail_pemesanan_invitation` (`id_detail_pemesanan`, `id_pemesanan`, `file_template`, `file_vidio`, `isActive`, `keterangan_file`, `created_at`, `updated_at`) VALUES
(1, 1, '166343778864.php', NULL, 0, 'cover', NULL, NULL),
(2, 1, '166343789966.php', NULL, 0, 'profile mempelai', NULL, NULL),
(3, 1, '166343793632.php', NULL, 0, 'waktu mundur', NULL, NULL),
(4, 1, '16634380872.php', NULL, 1, 'resepsi1', NULL, NULL),
(5, 1, '166343822848.php', NULL, 0, 'ayat', NULL, NULL),
(6, 1, '166343828957.php', NULL, 0, 'galeri', NULL, NULL),
(7, 2, '166343778864.php', NULL, 0, 'cover', NULL, NULL),
(8, 2, '166343789966.php', NULL, 0, 'profile mempelai', NULL, NULL),
(9, 2, '166343793632.php', NULL, 0, 'waktu mundur', NULL, NULL),
(10, 2, '166343822848.php', NULL, 0, 'ayat', NULL, NULL),
(11, 2, '166343828957.php', NULL, 0, 'galeri', NULL, NULL),
(12, 3, '166343778864.php', NULL, 0, 'cover', NULL, NULL),
(13, 3, '166343789966.php', NULL, 0, 'profile mempelai', NULL, NULL),
(14, 3, '166343793632.php', NULL, 0, 'waktu mundur', NULL, NULL),
(15, 3, '166343822848.php', NULL, 0, 'ayat', NULL, NULL),
(16, 3, '166343828957.php', NULL, 0, 'galeri', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_preview_template`
--

CREATE TABLE `detail_preview_template` (
  `id_detail_preview` bigint(20) UNSIGNED NOT NULL,
  `id_preview_template_pemesanan` bigint(20) NOT NULL,
  `file_template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` int(11) NOT NULL,
  `keterangan_file` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_preview_template`
--

INSERT INTO `detail_preview_template` (`id_detail_preview`, `id_preview_template_pemesanan`, `file_template`, `isActive`, `keterangan_file`, `created_at`, `updated_at`) VALUES
(13, 2, '166343839990.php', 0, 'cover', '2022-09-25 14:18:21', '2022-09-25 14:18:21'),
(14, 2, '16634385283.php', 0, 'ayat', '2022-09-25 14:18:21', '2022-09-25 14:18:21'),
(15, 2, '166343856672.php', 0, 'profile mempelai', '2022-09-25 14:18:21', '2022-09-25 14:18:21'),
(16, 2, '166343862818.php', 0, 'galeri', '2022-09-25 14:18:21', '2022-09-25 14:18:21'),
(17, 2, '166343867796.php', 0, 'waktu mundur', '2022-09-25 14:18:21', '2022-09-25 14:18:21'),
(18, 2, '166343872797.php', 1, 'akad', '2022-09-25 14:18:21', '2022-09-25 14:18:21'),
(19, 2, '166343887798.php', 0, 'keluarga besar mempelai', '2022-09-25 14:18:21', '2022-09-25 14:18:21'),
(20, 2, '166343893080.php', 0, 'kirim pesan', '2022-09-25 14:18:21', '2022-09-25 14:18:21'),
(21, 3, '166343839990.php', 0, 'cover', '2022-09-26 03:14:39', '2022-09-26 03:14:39'),
(22, 3, '16634385283.php', 0, 'ayat', '2022-09-26 03:14:39', '2022-09-26 03:14:39'),
(23, 3, '166343856672.php', 0, 'profile mempelai', '2022-09-26 03:14:39', '2022-09-26 03:14:39'),
(24, 3, '166343862818.php', 0, 'galeri', '2022-09-26 03:14:39', '2022-09-26 03:14:39'),
(25, 3, '166343867796.php', 0, 'waktu mundur', '2022-09-26 03:14:39', '2022-09-26 03:14:39'),
(26, 3, '166343887798.php', 0, 'keluarga besar mempelai', '2022-09-26 03:14:39', '2022-09-26 03:14:39'),
(27, 3, '166343893080.php', 0, 'kirim pesan', '2022-09-26 03:14:39', '2022-09-26 03:14:39'),
(28, 4, '166343839990.php', 0, 'cover', '2022-09-27 11:55:52', '2022-09-27 11:55:52'),
(29, 4, '16634385283.php', 0, 'ayat', '2022-09-27 11:55:52', '2022-09-27 11:55:52'),
(30, 4, '166343856672.php', 0, 'profile mempelai', '2022-09-27 11:55:52', '2022-09-27 11:55:52'),
(31, 4, '166343862818.php', 0, 'galeri', '2022-09-27 11:55:52', '2022-09-27 11:55:52'),
(32, 4, '166343867796.php', 0, 'waktu mundur', '2022-09-27 11:55:52', '2022-09-27 11:55:52'),
(33, 4, '166343887798.php', 0, 'keluarga besar mempelai', '2022-09-27 11:55:52', '2022-09-27 11:55:52'),
(34, 4, '166343893080.php', 0, 'kirim pesan', '2022-09-27 11:55:52', '2022-09-27 11:55:52'),
(35, 5, '166343839990.php', 0, 'cover', '2022-09-27 14:34:37', '2022-09-27 14:34:37'),
(36, 5, '16634385283.php', 0, 'ayat', '2022-09-27 14:34:37', '2022-09-27 14:34:37'),
(37, 5, '166343856672.php', 0, 'profile mempelai', '2022-09-27 14:34:37', '2022-09-27 14:34:37'),
(38, 5, '166343862818.php', 0, 'galeri', '2022-09-27 14:34:37', '2022-09-27 14:34:37'),
(39, 5, '166343867796.php', 0, 'waktu mundur', '2022-09-27 14:34:37', '2022-09-27 14:34:37'),
(40, 5, '166343887798.php', 0, 'keluarga besar mempelai', '2022-09-27 14:34:37', '2022-09-27 14:34:37'),
(41, 5, '166343893080.php', 0, 'kirim pesan', '2022-09-27 14:34:37', '2022-09-27 14:34:37'),
(42, 6, '166343839990.php', 0, 'cover', '2022-09-27 23:29:00', '2022-09-27 23:29:00'),
(43, 6, '16634385283.php', 0, 'ayat', '2022-09-27 23:29:00', '2022-09-27 23:29:00'),
(44, 6, '166343856672.php', 0, 'profile mempelai', '2022-09-27 23:29:00', '2022-09-27 23:29:00'),
(45, 6, '166343862818.php', 0, 'galeri', '2022-09-27 23:29:00', '2022-09-27 23:29:00'),
(46, 6, '166343867796.php', 0, 'waktu mundur', '2022-09-27 23:29:00', '2022-09-27 23:29:00'),
(47, 6, '166343887798.php', 0, 'keluarga besar mempelai', '2022-09-27 23:29:00', '2022-09-27 23:29:00'),
(48, 6, '166343893080.php', 0, 'kirim pesan', '2022-09-27 23:29:00', '2022-09-27 23:29:00'),
(49, 7, '166343839990.php', 0, 'cover', '2022-09-28 11:57:43', '2022-09-28 11:57:43'),
(50, 7, '16634385283.php', 0, 'ayat', '2022-09-28 11:57:43', '2022-09-28 11:57:43'),
(51, 7, '166343856672.php', 0, 'profile mempelai', '2022-09-28 11:57:43', '2022-09-28 11:57:43'),
(52, 7, '166343862818.php', 0, 'galeri', '2022-09-28 11:57:43', '2022-09-28 11:57:43'),
(53, 7, '166343867796.php', 0, 'waktu mundur', '2022-09-28 11:57:43', '2022-09-28 11:57:43'),
(54, 7, '166343887798.php', 0, 'keluarga besar mempelai', '2022-09-28 11:57:43', '2022-09-28 11:57:43'),
(55, 7, '166343893080.php', 0, 'kirim pesan', '2022-09-28 11:57:43', '2022-09-28 11:57:43'),
(56, 8, '166343839990.php', 0, 'cover', '2022-09-29 12:19:28', '2022-09-29 12:19:28'),
(57, 8, '16634385283.php', 0, 'ayat', '2022-09-29 12:19:28', '2022-09-29 12:19:28'),
(58, 8, '166343856672.php', 0, 'profile mempelai', '2022-09-29 12:19:28', '2022-09-29 12:19:28'),
(59, 8, '166343862818.php', 0, 'galeri', '2022-09-29 12:19:28', '2022-09-29 12:19:28'),
(60, 8, '166343867796.php', 0, 'waktu mundur', '2022-09-29 12:19:28', '2022-09-29 12:19:28'),
(61, 8, '166343887798.php', 0, 'keluarga besar mempelai', '2022-09-29 12:19:28', '2022-09-29 12:19:28'),
(62, 8, '166343893080.php', 0, 'kirim pesan', '2022-09-29 12:19:28', '2022-09-29 12:19:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `file_template`
--

CREATE TABLE `file_template` (
  `id_file_template` bigint(20) UNSIGNED NOT NULL,
  `id_template` bigint(20) NOT NULL,
  `id_sub_kategori` bigint(20) NOT NULL,
  `file` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_template` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` int(5) NOT NULL,
  `keterangan_file` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `file_template`
--

INSERT INTO `file_template` (`id_file_template`, `id_template`, `id_sub_kategori`, `file`, `gambar_template`, `isActive`, `keterangan_file`, `created_at`, `updated_at`) VALUES
(2, 1, 2, '166343778864.php', '16634377887.png', 0, 'Tidak Aktif', '2022-09-17 11:03:08', '2022-09-17 11:03:08'),
(3, 1, 3, '166343789966.php', '166343789947.png', 0, 'Tidak Aktif', '2022-09-17 11:04:59', '2022-09-17 11:04:59'),
(4, 1, 4, '166343793632.php', '166343793650.png', 0, 'Tidak Aktif', '2022-09-17 11:05:36', '2022-09-17 11:05:36'),
(5, 1, 5, '166343803792.php', '166343803781.png', 1, 'Aktif', '2022-09-17 11:07:17', '2022-09-17 11:07:17'),
(6, 1, 6, '16634380872.php', '166343808725.png', 1, 'Aktif', '2022-09-17 11:08:07', '2022-09-17 11:08:07'),
(7, 1, 7, '166343814590.php', '166343814566.png', 1, 'Aktif', '2022-09-17 11:09:05', '2022-09-17 11:09:05'),
(8, 1, 8, '166343822848.php', '166343822842.png', 0, 'Tidak Aktif', '2022-09-17 11:10:28', '2022-09-17 11:10:28'),
(9, 1, 9, '166343828957.php', '166343828942.png', 0, 'Tidak Aktif', '2022-09-17 11:11:29', '2022-09-17 11:11:29'),
(10, 2, 10, '166343839990.php', '166343839987.PNG', 0, 'Tidak Aktif', '2022-09-17 11:13:19', '2022-09-17 11:13:19'),
(11, 2, 11, '16634385283.php', '166343852862.PNG', 0, 'Tidak Aktif', '2022-09-17 11:15:28', '2022-09-17 11:15:28'),
(12, 2, 12, '166343856672.php', '166343856643.png', 0, 'Tidak Aktif', '2022-09-17 11:16:06', '2022-09-17 11:16:06'),
(13, 2, 14, '166343862818.php', '166343862830.PNG', 0, 'Tidak Aktif', '2022-09-17 11:17:08', '2022-09-17 11:17:08'),
(14, 2, 15, '166343867796.php', '166343867734.PNG', 0, 'Tidak Aktif', '2022-09-17 11:17:57', '2022-09-17 11:17:57'),
(15, 2, 16, '166343872797.php', '166343872780.PNG', 1, 'Aktif', '2022-09-17 11:18:47', '2022-09-19 11:01:01'),
(16, 2, 17, '16634387768.php', '16634387765.PNG', 1, 'Aktif', '2022-09-17 11:19:36', '2022-09-19 11:01:15'),
(17, 2, 18, '16634388308.php', '166343883065.PNG', 1, 'Aktif', '2022-09-17 11:20:30', '2022-09-19 11:01:33'),
(18, 2, 19, '166343887798.php', '166343887723.PNG', 0, 'Tidak Aktif', '2022-09-17 11:21:17', '2022-09-17 11:21:17'),
(19, 2, 20, '166343893080.php', '166343893048.png', 0, 'Tidak Aktif', '2022-09-17 11:22:10', '2022-09-19 11:01:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_template`
--

CREATE TABLE `kategori_template` (
  `id_kategori_template` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_template`
--

INSERT INTO `kategori_template` (`id_kategori_template`, `kategori`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Basic', 20000, '2022-08-25 07:07:27', '2022-08-25 07:07:27'),
(2, 'Premium', 30000, '2022-08-25 07:07:37', '2022-08-25 07:07:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_video`
--

CREATE TABLE `kategori_video` (
  `id_kategori_video` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_20_153627_create_kategori_template_table', 1),
(6, '2022_03_20_153807_create_rincian_kategori_template_table', 1),
(7, '2022_03_20_154001_create_sub_kategori_table', 1),
(8, '2022_03_24_080945_create_template_invitation_table', 1),
(9, '2022_04_03_152420_create_file_template_table', 1),
(10, '2022_04_14_042148_create_blog_table', 1),
(11, '2022_04_30_165420_create_preview_template_pemesanan_table', 1),
(12, '2022_05_06_151956_create_video_table', 1),
(13, '2022_05_06_152209_create_kategori_video_table', 1),
(14, '2022_05_07_062818_create_rincian_kategori_video', 1),
(46, '2022_06_01_181946_create_biodata_home_page_table', 2),
(47, '2022_06_01_182347_create_biodata_kutipan_ayat_table', 2),
(48, '2022_06_01_182446_create_biodata_pasangan_pria_table', 2),
(49, '2022_06_01_182623_create_biodata_pasangan_wanita_table', 2),
(50, '2022_06_01_183012_create_biodata_galeri_foto_table', 2),
(51, '2022_06_01_183100_create_biodata_jadwal_akad_table', 2),
(52, '2022_06_01_183306_create_biodata_jadwal_resepsi_table', 2),
(53, '2022_06_01_183342_create_biodata_jadwal_resepsi_2_table', 2),
(54, '2022_06_01_183456_create_biodata_keluarga_besar_pria_table', 2),
(55, '2022_06_01_183544_create_biodata_keluarga_besar_wanita_table', 2),
(56, '2022_06_01_183650_create_biodata_musik_table', 2),
(57, '2022_06_01_183734_create_biodata_pelanggan_table', 2),
(58, '2022_06_06_073432_create_musik_template_table', 2),
(59, '2022_06_08_043758_create_detail_preview_template_table', 2),
(60, '2022_06_20_062459_create_pemesanan_invitation_table', 2),
(61, '2022_06_20_062626_create_detail_pemesanan_invitation_table', 2),
(62, '2022_06_22_152938_create_pembayaran_invitation_table', 2),
(63, '2022_06_22_153254_create_detail_pembayaran_invitation_table', 2),
(64, '2022_08_22_230227_create_staff_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `musik_template`
--

CREATE TABLE `musik_template` (
  `id_musik_template` bigint(20) UNSIGNED NOT NULL,
  `judul_musik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `musik` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran_invitation`
--

CREATE TABLE `pembayaran_invitation` (
  `id_pembayaran` bigint(20) UNSIGNED NOT NULL,
  `id_pemesanan` bigint(20) NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `tanggal_pembayaran` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembayaran_invitation`
--

INSERT INTO `pembayaran_invitation` (`id_pembayaran`, `id_pemesanan`, `status`, `tanggal_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 1, 'pending', '2022-09-24', NULL, NULL),
(2, 2, 'pending', '2022-09-29', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_invitation`
--

CREATE TABLE `pemesanan_invitation` (
  `id_pemesanan` bigint(20) UNSIGNED NOT NULL,
  `id_template` bigint(20) DEFAULT NULL,
  `id_video` bigint(20) DEFAULT NULL,
  `id_biodata_pelanggan` bigint(20) NOT NULL,
  `kategori_template` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_hosting` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemesanan_invitation`
--

INSERT INTO `pemesanan_invitation` (`id_pemesanan`, `id_template`, `id_video`, `id_biodata_pelanggan`, `kategori_template`, `email`, `link_hosting`, `tanggal_pemesanan`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 6, 'Basic', 'yogawahyudi22@gmail.com', 'KevinDanCitra', '2022-09-24', 'sudah bayar', NULL, NULL),
(2, 1, NULL, 7, 'Basic', 'yogawahyudi22@gmail.com', 'ReziDanCitra', '2022-09-29', 'sudah bayar', NULL, NULL),
(3, 1, NULL, 8, 'Basic', 'yogawahyudi22@gmail.com', 'ZainulDanSri', '2022-09-29', 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `preview_template_pemesanan`
--

CREATE TABLE `preview_template_pemesanan` (
  `id_preview_template_pemesanan` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `id_template` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `preview_template_pemesanan`
--

INSERT INTO `preview_template_pemesanan` (`id_preview_template_pemesanan`, `id_user`, `id_template`) VALUES
(2, 2, 2),
(3, 2, 2),
(4, 2, 2),
(5, 2, 2),
(6, 2, 2),
(7, 2, 2),
(8, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rincian_kategori_template`
--

CREATE TABLE `rincian_kategori_template` (
  `id_rincian_kategori` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) NOT NULL,
  `rincian_kategori_template` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `rincian_kategori_template`
--

INSERT INTO `rincian_kategori_template` (`id_rincian_kategori`, `id_kategori`, `rincian_kategori_template`, `created_at`, `updated_at`) VALUES
(1, 1, 'Preset/Design standar</p><p>Quotes</p><p>Detail Info Acara</p><p>Profil Pasangan</p><p>Protokol Kesehatan</p><p>Navigasi Lokasi</p><p>Ucapan dan Doa</p><p>Love Stories</p><p>Tampilan Gallery (Max 10)', '2022-08-25 07:08:16', '2022-08-25 07:08:16'),
(2, 2, 'Semua yang ada di Paket Free</p><p>Tampilkan Gallery (Max 20)</p><p>Tampilkan tombol Live sreaming</p><p>Share Personal - Nama Tamu (Unlimited)</p><p>Background Music List Custom</p><p>Costum Text</p><p>Tampilkan Rekening Amplop Digital</p><p>Bebas Memilih Tema Premium</p><p>Protokol Kesehatan</p><p>Masa aktif 1 tahun', '2022-08-25 07:08:36', '2022-08-25 07:08:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rincian_kategori_video`
--

CREATE TABLE `rincian_kategori_video` (
  `id_rincian_kategori_video` bigint(20) UNSIGNED NOT NULL,
  `id_kategori_video` bigint(20) NOT NULL,
  `rincian_kategori_video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id_staff` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telepon` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_kategori`
--

CREATE TABLE `sub_kategori` (
  `id_sub_kategori` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sub_kategori`
--

INSERT INTO `sub_kategori` (`id_sub_kategori`, `id_kategori`, `icon`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 1, '166143742921.png', 'cover', '2022-08-25 07:23:49', '2022-09-14 08:18:10'),
(3, 1, '166143744446.png', 'profile mempelai', '2022-08-25 07:24:04', '2022-09-14 08:18:29'),
(4, 1, '166143745764.png', 'waktu mundur', '2022-08-25 07:24:17', '2022-09-14 08:18:47'),
(5, 1, '166143747015.png', 'akad', '2022-08-25 07:24:30', '2022-09-14 08:19:05'),
(6, 1, '166143748552.png', 'resepsi1', '2022-08-25 07:24:45', '2022-09-14 08:19:36'),
(7, 1, '166143750673.png', 'resepsi2', '2022-08-25 07:25:06', '2022-09-14 08:19:56'),
(8, 1, '166143753273.png', 'ayat', '2022-08-25 07:25:32', '2022-09-14 08:20:56'),
(9, 1, '166143755497.png', 'galeri', '2022-08-25 07:25:54', '2022-09-14 08:21:14'),
(10, 2, '166144334298.png', 'cover', '2022-08-25 09:02:22', '2022-09-14 08:27:21'),
(11, 2, '166144336355.png', 'ayat', '2022-08-25 09:02:43', '2022-09-14 08:27:43'),
(12, 2, '166144340073.png', 'profile mempelai', '2022-08-25 09:03:20', '2022-09-14 08:32:49'),
(14, 2, '166144344630.png', 'galeri', '2022-08-25 09:04:06', '2022-09-14 08:34:09'),
(15, 2, '166144346575.png', 'waktu mundur', '2022-08-25 09:04:25', '2022-09-14 08:34:37'),
(16, 2, '166144348475.png', 'akad', '2022-08-25 09:04:44', '2022-09-14 08:35:01'),
(17, 2, '166144350964.png', 'resepsi1', '2022-08-25 09:05:09', '2022-09-14 08:35:26'),
(18, 2, '166144352932.png', 'resepsi2', '2022-08-25 09:05:29', '2022-09-14 08:36:38'),
(19, 2, '166144354977.png', 'keluarga besar mempelai', '2022-08-25 09:05:49', '2022-09-14 08:37:11'),
(20, 2, '166317479320.png', 'kirim pesan', '2022-09-14 09:59:53', '2022-09-14 09:59:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `template_invitation`
--

CREATE TABLE `template_invitation` (
  `id_template` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) DEFAULT NULL,
  `id_user` bigint(20) NOT NULL,
  `link_hosting` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_master` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `template_invitation`
--

INSERT INTO `template_invitation` (`id_template`, `id_kategori`, `id_user`, `link_hosting`, `file_master`, `gambar_cover`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'http://risedevteam.com/template-basic-2/', '166193544737.php', '166143812054.png', '2022-08-25 07:35:20', '2022-08-31 01:44:07'),
(2, 2, 1, 'http://risedevteam.com/template-undangan-4/', '166193197673.php', '166144326058.png', '2022-08-25 09:01:00', '2022-08-31 00:46:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `foto`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rise Development', 'risedevelopmentteam@gmail.com', NULL, 'pimpinan', NULL, '$2y$10$bc0b1u6si9mPurG9e0sPq.re9x6brC2DRP44d58ngCQgsgMFtwomy', NULL, NULL, NULL),
(2, 'Yoga Wahyudi', 'yogawahyudi22@gmail.com', 'https://lh3.googleusercontent.com/a-/AFdZucr75__CcwojqgCAGjsRwAcrkQUrWSqtv0bBlM7c2Q=s96-c', 'pelanggan', NULL, '$2y$10$XUa/8Qdyz38StG7Ncdx8TOYV3PUG6aCTbQtQz9txT2tXMLs3SOcPe', NULL, '2022-08-26 07:53:19', '2022-08-26 07:53:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` bigint(20) UNSIGNED NOT NULL,
  `id_kategori_video` bigint(20) NOT NULL,
  `link_youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata_galeri_foto`
--
ALTER TABLE `biodata_galeri_foto`
  ADD PRIMARY KEY (`id_galeri_foto`);

--
-- Indeks untuk tabel `biodata_home_page`
--
ALTER TABLE `biodata_home_page`
  ADD PRIMARY KEY (`id_biodata_home_page`);

--
-- Indeks untuk tabel `biodata_jadwal_akad`
--
ALTER TABLE `biodata_jadwal_akad`
  ADD PRIMARY KEY (`id_jadwal_akad`);

--
-- Indeks untuk tabel `biodata_jadwal_resepsi`
--
ALTER TABLE `biodata_jadwal_resepsi`
  ADD PRIMARY KEY (`id_jadwal_resepsi`);

--
-- Indeks untuk tabel `biodata_jadwal_resepsi_2`
--
ALTER TABLE `biodata_jadwal_resepsi_2`
  ADD PRIMARY KEY (`id_jadwal_resepsi_2`);

--
-- Indeks untuk tabel `biodata_keluarga_besar_pria`
--
ALTER TABLE `biodata_keluarga_besar_pria`
  ADD PRIMARY KEY (`id_keluarga_besar_pria`);

--
-- Indeks untuk tabel `biodata_keluarga_besar_wanita`
--
ALTER TABLE `biodata_keluarga_besar_wanita`
  ADD PRIMARY KEY (`id_keluarga_besar_wanita`);

--
-- Indeks untuk tabel `biodata_kutipan_ayat`
--
ALTER TABLE `biodata_kutipan_ayat`
  ADD PRIMARY KEY (`id_kutipan_ayat`);

--
-- Indeks untuk tabel `biodata_musik`
--
ALTER TABLE `biodata_musik`
  ADD PRIMARY KEY (`id_musik`);

--
-- Indeks untuk tabel `biodata_pasangan_pria`
--
ALTER TABLE `biodata_pasangan_pria`
  ADD PRIMARY KEY (`id_pasangan_pria`);

--
-- Indeks untuk tabel `biodata_pasangan_wanita`
--
ALTER TABLE `biodata_pasangan_wanita`
  ADD PRIMARY KEY (`id_pasangan_wanita`);

--
-- Indeks untuk tabel `biodata_pelanggan`
--
ALTER TABLE `biodata_pelanggan`
  ADD PRIMARY KEY (`id_biodata_pelanggan`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indeks untuk tabel `detail_pembayaran_invitation`
--
ALTER TABLE `detail_pembayaran_invitation`
  ADD PRIMARY KEY (`id_detail_pembayaran`);

--
-- Indeks untuk tabel `detail_pemesanan_invitation`
--
ALTER TABLE `detail_pemesanan_invitation`
  ADD PRIMARY KEY (`id_detail_pemesanan`);

--
-- Indeks untuk tabel `detail_preview_template`
--
ALTER TABLE `detail_preview_template`
  ADD PRIMARY KEY (`id_detail_preview`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `file_template`
--
ALTER TABLE `file_template`
  ADD PRIMARY KEY (`id_file_template`);

--
-- Indeks untuk tabel `kategori_template`
--
ALTER TABLE `kategori_template`
  ADD PRIMARY KEY (`id_kategori_template`);

--
-- Indeks untuk tabel `kategori_video`
--
ALTER TABLE `kategori_video`
  ADD PRIMARY KEY (`id_kategori_video`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `musik_template`
--
ALTER TABLE `musik_template`
  ADD PRIMARY KEY (`id_musik_template`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembayaran_invitation`
--
ALTER TABLE `pembayaran_invitation`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pemesanan_invitation`
--
ALTER TABLE `pemesanan_invitation`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `preview_template_pemesanan`
--
ALTER TABLE `preview_template_pemesanan`
  ADD PRIMARY KEY (`id_preview_template_pemesanan`);

--
-- Indeks untuk tabel `rincian_kategori_template`
--
ALTER TABLE `rincian_kategori_template`
  ADD PRIMARY KEY (`id_rincian_kategori`);

--
-- Indeks untuk tabel `rincian_kategori_video`
--
ALTER TABLE `rincian_kategori_video`
  ADD PRIMARY KEY (`id_rincian_kategori_video`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- Indeks untuk tabel `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD PRIMARY KEY (`id_sub_kategori`);

--
-- Indeks untuk tabel `template_invitation`
--
ALTER TABLE `template_invitation`
  ADD PRIMARY KEY (`id_template`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata_galeri_foto`
--
ALTER TABLE `biodata_galeri_foto`
  MODIFY `id_galeri_foto` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `biodata_home_page`
--
ALTER TABLE `biodata_home_page`
  MODIFY `id_biodata_home_page` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `biodata_jadwal_akad`
--
ALTER TABLE `biodata_jadwal_akad`
  MODIFY `id_jadwal_akad` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `biodata_jadwal_resepsi`
--
ALTER TABLE `biodata_jadwal_resepsi`
  MODIFY `id_jadwal_resepsi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `biodata_jadwal_resepsi_2`
--
ALTER TABLE `biodata_jadwal_resepsi_2`
  MODIFY `id_jadwal_resepsi_2` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `biodata_keluarga_besar_pria`
--
ALTER TABLE `biodata_keluarga_besar_pria`
  MODIFY `id_keluarga_besar_pria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `biodata_keluarga_besar_wanita`
--
ALTER TABLE `biodata_keluarga_besar_wanita`
  MODIFY `id_keluarga_besar_wanita` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `biodata_kutipan_ayat`
--
ALTER TABLE `biodata_kutipan_ayat`
  MODIFY `id_kutipan_ayat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `biodata_musik`
--
ALTER TABLE `biodata_musik`
  MODIFY `id_musik` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `biodata_pasangan_pria`
--
ALTER TABLE `biodata_pasangan_pria`
  MODIFY `id_pasangan_pria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `biodata_pasangan_wanita`
--
ALTER TABLE `biodata_pasangan_wanita`
  MODIFY `id_pasangan_wanita` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `biodata_pelanggan`
--
ALTER TABLE `biodata_pelanggan`
  MODIFY `id_biodata_pelanggan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_pembayaran_invitation`
--
ALTER TABLE `detail_pembayaran_invitation`
  MODIFY `id_detail_pembayaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `detail_pemesanan_invitation`
--
ALTER TABLE `detail_pemesanan_invitation`
  MODIFY `id_detail_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `detail_preview_template`
--
ALTER TABLE `detail_preview_template`
  MODIFY `id_detail_preview` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `file_template`
--
ALTER TABLE `file_template`
  MODIFY `id_file_template` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `kategori_template`
--
ALTER TABLE `kategori_template`
  MODIFY `id_kategori_template` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori_video`
--
ALTER TABLE `kategori_video`
  MODIFY `id_kategori_video` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `musik_template`
--
ALTER TABLE `musik_template`
  MODIFY `id_musik_template` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_invitation`
--
ALTER TABLE `pembayaran_invitation`
  MODIFY `id_pembayaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pemesanan_invitation`
--
ALTER TABLE `pemesanan_invitation`
  MODIFY `id_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `preview_template_pemesanan`
--
ALTER TABLE `preview_template_pemesanan`
  MODIFY `id_preview_template_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `rincian_kategori_template`
--
ALTER TABLE `rincian_kategori_template`
  MODIFY `id_rincian_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `rincian_kategori_video`
--
ALTER TABLE `rincian_kategori_video`
  MODIFY `id_rincian_kategori_video` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sub_kategori`
--
ALTER TABLE `sub_kategori`
  MODIFY `id_sub_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `template_invitation`
--
ALTER TABLE `template_invitation`
  MODIFY `id_template` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id_video` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
