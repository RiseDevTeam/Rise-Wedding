-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Nov 2022 pada 18.06
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
(1, '166519153860.jpg', '166519154245.jpg', '166519154380.jpg', '166519154515.JPG', '166519154823.JPG', '166519155132.JPG', '16651915541.JPG', '166519155792.JPG', '166519156024.JPG', '166519156372.JPG', '166519156710.JPG', '166519157098.JPG', NULL, NULL, NULL),
(2, '166541607177.jpg', '166541607472.jpg', '166541607758.jpg', '166519268413.JPG', '166519268751.JPG', '166519269183.JPG', '166519269487.JPG', '166519269711.JPG', '166519270054.JPG', '166519270368.JPG', '166519270684.JPG', '166519270979.JPG', NULL, NULL, NULL),
(3, '166531846299.jpg', '166531846576.jpg', '16653184662.jpg', '166531846836.jpg', '166531846925.JPG', '166531847269.JPG', '166531847525.JPG', '166531847880.JPG', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(8, 'Undangan Pernikahan', 'zainul', 'sri', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(9, 'Undangan Pernikahan', 'Heru', 'sri', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(10, 'Undangan Pernikahan', 'Heru', 'sri', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(11, 'Undangan Pernikahan', 'Kelvin', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(12, 'Undangan Pernikahan', 'Kelvin', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(13, 'Undangan Pernikahan', 'Kelvin', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(14, 'Undangan Pernikahan', 'Kelvin', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(15, 'Undangan Pernikahan', 'Kelvin', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(16, 'Undangan Pernikahan', 'Kelvin', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(17, 'Undangan Pernikahan', 'Kelvin', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(18, 'Undangan Pernikahan', 'Kelvin', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(19, 'Undangan Pernikahan', 'Kelvin', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(20, 'Undangan Pernikahan', 'Kelvin', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(21, 'undangam pernikahan', 'Kelvin', 'Citra', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(22, 'Undangan Pernikahan', 'Bagus', 'Deby', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL),
(23, 'Undangan Pernikahan', 'Bagus', 'Ainun', 'Atas karunia Allah SWT izinkan Kami mengundang sekaligus mengharapkan doa restu dari bapak/ibu dalam acara pernikahan putra & putri kami.', NULL, NULL);

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
(8, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '08:26:00', '2022-10-15', 'WIB', 'Kota Padang', NULL, NULL),
(23, '20:14:00', '2022-10-10', 'WIB', 'Jalan Maransi, Dadok Tunggul Hitam, Kota Padang, Sumatera Barat', NULL, NULL);

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
(8, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '09:27:00', '2022-10-20', 'WIB', 'Jalan Maransi, Kota Padang, Sumatera Barat', NULL, NULL),
(23, '19:12:00', '2022-10-15', 'WIB', 'Jalan Raya Siteba, Surau Gadang, Padang, Sumatera Barat', NULL, NULL);

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
(8, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, NULL, NULL, NULL, NULL, NULL),
(22, '09:27:00', '2022-10-20', 'WIB', 'Jalan Maransi, Kota Padang, Sumatera Barat', NULL, NULL),
(23, '20:13:00', '2022-10-18', NULL, 'Jalan Maransi, Dadok Tunggul Hitam, Kota Padang, Sumatera Barat', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_keluarga_besar_pria`
--

CREATE TABLE `biodata_keluarga_besar_pria` (
  `id_keluarga_besar_pria` bigint(20) UNSIGNED NOT NULL,
  `mengundang_pria` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_keluarga_pria` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_keluarga_besar_pria`
--

INSERT INTO `biodata_keluarga_besar_pria` (`id_keluarga_besar_pria`, `mengundang_pria`, `nama_keluarga_pria`, `created_at`, `updated_at`) VALUES
(1, 'Keluarga Besar Mempelai Pria', 'Dr.H. Saparudin\r\nyusni Sp.d\r\nilham S.kom', NULL, NULL),
(2, 'Keluarga Besar Mempelai Pria', 'Dr. hj, supardi\r\nHj. Suparda\r\nSE saudara mu', NULL, NULL),
(3, 'Keluarga Besar Mempelai Pria', 'Dr. Danil Faizal\r\nHj. Mega\r\nSE sekeluarga', NULL, NULL),
(4, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL),
(12, 'Keluarga Besar Mempelai Pria', 'ayah \r\nibu\r\natuk', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_keluarga_besar_wanita`
--

CREATE TABLE `biodata_keluarga_besar_wanita` (
  `id_keluarga_besar_wanita` bigint(20) UNSIGNED NOT NULL,
  `mengundang_wanita` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_keluarga_wanita` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_keluarga_besar_wanita`
--

INSERT INTO `biodata_keluarga_besar_wanita` (`id_keluarga_besar_wanita`, `mengundang_wanita`, `nama_keluarga_wanita`, `created_at`, `updated_at`) VALUES
(1, 'Keluarga Besar Mempelai Wanita', 'Hj. Bapak Mu\r\nDr ibu mu\r\nS.kom Saudara', NULL, NULL),
(2, 'Keluarga Besar Mempelai Wanita', 'Hj, ayah mu\r\nHajah Ibu mu\r\nS.kom sekeluarga', NULL, NULL),
(3, 'Keluarga Besar Mempelai Wanita', 'HJ ayah mu\r\nDr ibu mu\r\nS.kom Keluarga', NULL, NULL),
(4, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL),
(12, 'Keluarga Besar Mempelai Wanita', 'kakek\r\nnenek \r\npapa\r\nmama', NULL, NULL);

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
(8, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(9, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(10, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(11, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(12, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(13, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(14, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(15, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(16, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(17, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(18, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(19, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(20, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(21, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”\r\n\r\n     ', NULL, NULL),
(22, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”', NULL, NULL),
(23, '“Dan Allah menjadikan bagimu pasangan (suami atau istri) dari jenis kamu sendiri, menjadikan anak dan cucu bagimu dari pasanganmu, serta memberimu rezeki dari yang baik-baik. Mengapa mereka beriman kepada yang batil dan mengingkari nikmat Allah?”', NULL, NULL);

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
(8, '16644606255.mp3', NULL, NULL),
(9, '166469491831.mp3', NULL, NULL),
(10, '166469706131.mp3', NULL, NULL),
(11, '166469491831.mp3', NULL, NULL),
(12, '166471304310.mp3', NULL, NULL),
(13, '166469491831.mp3', NULL, NULL),
(14, '166472355551.mp3', NULL, NULL),
(15, '166469491831.mp3', NULL, NULL),
(16, '166492755377.mp3', NULL, NULL),
(17, '166469491831.mp3', NULL, NULL),
(18, '16650133088.mp3', NULL, NULL),
(19, '166469491831.mp3', NULL, NULL),
(20, '166469491831.mp3', NULL, NULL),
(21, '166469491831.mp3', NULL, NULL),
(22, '166469491831.mp3', NULL, NULL),
(23, '166469491831.mp3', NULL, NULL),
(24, '166469491831.mp3', NULL, NULL),
(25, '166469491831.mp3', NULL, NULL),
(26, '16653177069.mp3', NULL, NULL);

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
(8, 'Zainul Abidin', 'Putra Keempat', 'Danil Fariz', 'Sri Mulyani', NULL, NULL),
(9, 'Heru Syahputra', 'Putra Keempat', 'Danil Dahlan', 'Mega', NULL, NULL),
(10, 'Heru Syahputra', 'Putra Keempat', 'Khairul Nasri', 'Mega', NULL, NULL),
(11, 'Kelvin Mulyawan', 'Putra Ketiga Dari', 'Danil Fariz', 'Mega', NULL, NULL),
(12, 'Kelvin Mulyawan', 'Putra Ketiga Dari', 'Danil Fariz', 'Mega', NULL, NULL),
(13, 'Kelvin Mulyawan', 'Putra Ketiga Dari', 'Danil Fariz', 'Mega', NULL, NULL),
(14, 'Kelvin Mulyawan', 'Putra Ketiga Dari', 'Danil Fariz', 'Mega', NULL, NULL),
(15, 'Kelvin Mulyawan', 'Putra Ketiga Dari', 'Danil Fariz', 'Mega', NULL, NULL),
(16, 'Kelvin Mulyawan', 'Putra Keempat', 'Khairul Nasri', 'Mursyida', NULL, NULL),
(17, 'Kelvin Mulyawan', 'Putra Keempat', 'Danil Fariz', 'Mursyida', NULL, NULL),
(18, 'Kelvin Mulyawan', 'Putra Keempat', 'Khairul Nasri', 'Mursyida', NULL, NULL),
(19, 'Kelvin Mulyawan', 'Putra Keempat', 'Danil Fariz', 'Mega', NULL, NULL),
(20, 'Kelvin Mulyawan', 'Putra Keempat', 'Khairul Nasri', 'Sri Mulyani', NULL, NULL),
(21, 'Kelvin Mulyawan', 'Putra Keempat', 'Danil Fariz', 'Mega', NULL, NULL),
(22, 'Bagus Wirabakti', 'Putra Keempat Dari', 'Bagas Anjayy', 'Mega', NULL, NULL),
(23, 'Bagas Saputra', 'Putra Keempat', 'Danil Fariz', 'Mega', NULL, NULL);

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
(8, 'Sri Ratu Ningsih', 'Putri keenam', 'Supriyadi', 'Buk Lin', NULL, NULL),
(9, 'Sri Ratu Ningsih', 'Putri keenam', 'Supriyadi', 'Irmalinda', NULL, NULL),
(10, 'Sri Ratu Ningsih', 'Putri keenam', 'Supriyadi', 'Buk Lin', NULL, NULL),
(11, 'Citra Febrianti', 'Putri Pertama Dari', 'Eko satria', 'Zartinis', NULL, NULL),
(12, 'Citra Febrianti', 'Putri Pertama Dari', 'Eko satria', 'Yusni', NULL, NULL),
(13, 'Citra Febrianti', 'Putri Pertama Dari', 'Eko satria', 'Yusni', NULL, NULL),
(14, 'Citra Febrianti', 'Putri Pertama Dari', 'Supriyadi', 'Zartinis', NULL, NULL),
(15, 'Citra Febrianti', 'Putri Pertama Dari', 'Eko satria', 'Zartinis', NULL, NULL),
(16, 'Citra Febrianti', 'Putri Pertama Dari', 'Supriyadi', 'Buk Lin', NULL, NULL),
(17, 'Citra Febrianti', 'Putri Pertama Dari', 'Eko satria', 'Yusni', NULL, NULL),
(18, 'Citra Febrianti', 'Putri Pertama Dari', 'Supriyadi', 'Buk Lin', NULL, NULL),
(19, 'Citra Febrianti', 'Putri Pertama Dari', 'Supriyadi', 'Buk Lin', NULL, NULL),
(20, 'Citra Febrianti', 'Putri Pertama Dari', 'Supriyadi', 'Supriyadi', NULL, NULL),
(21, 'Citra Febrianti', 'Putri Pertama Dari', 'Pak Ed', 'Buk Lin', NULL, NULL),
(22, 'Deby Sintia', 'Putri Pertama Dari', 'Sintia Dewi', 'Supriyadi', NULL, NULL),
(23, 'Ainun Syaina', 'Putri Pertama Dari', 'Supriyadi', 'Zartinis', NULL, NULL);

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
(8, 2, 8, 8, 8, 8, 3, 8, 8, 8, NULL, NULL, 8, 85272621908, 'zainul_ganteng', NULL, NULL),
(9, 2, 9, 9, 9, 9, NULL, 9, 9, 9, 1, 1, 10, 85272621908, 'heru_ganteng', NULL, NULL),
(10, 2, 10, 10, 10, 10, NULL, 10, 10, 10, 2, 2, 12, 8123456789, 'Sayang aku', NULL, NULL),
(11, 2, 11, 11, 11, 11, NULL, 11, 11, 11, 3, 3, 14, 8123456789, 'citrafebrianti', NULL, NULL),
(12, 2, 14, 14, 14, 14, NULL, 14, 14, 14, 4, 4, 16, 85272621908, 'citrafebrianti', NULL, NULL),
(13, 2, 15, 15, 15, 15, NULL, 15, 15, 15, 5, 5, 18, 8123456789, 'zainul_ganteng', NULL, NULL),
(14, 2, 16, 16, 16, 16, NULL, 16, 16, 16, 6, 6, 19, 8123456789, 'citrafebrianti', NULL, NULL),
(15, 2, 17, 17, 17, 17, NULL, 17, 17, 17, 7, 7, 20, 85272621908, 'citrafebrianti', NULL, NULL),
(16, 2, 18, 18, 18, 18, NULL, 18, 18, 18, 8, 8, 21, 8123456789, 'citrafebrianti', NULL, NULL),
(17, 2, 19, 19, 19, 19, NULL, 19, 19, 19, 9, 9, 22, 82288219746, 'zainul_ganteng', NULL, NULL),
(18, 2, 20, 20, 20, 20, NULL, 20, 20, 20, 10, 10, 23, 85272621908, 'zainul_ganteng', NULL, NULL),
(19, 2, 21, 21, 21, 21, 1, 21, 21, 21, 11, 11, 24, 8123456789, 'citrafebrianti', NULL, NULL),
(20, 2, 22, 22, 22, 22, 2, 22, 22, 22, 12, 12, 25, 85272621908, 'citrafebrianti', NULL, NULL),
(21, 2, 23, 23, 23, 23, 3, 23, 23, 23, NULL, NULL, 26, 85272621908, 'zainul_ganteng', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_tamu_undangan`
--

CREATE TABLE `biodata_tamu_undangan` (
  `id_biodata_tamu_undangan` bigint(20) UNSIGNED NOT NULL,
  `id_pemesanan` bigint(20) NOT NULL,
  `nama_tamu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` bigint(20) NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata_tamu_undangan`
--

INSERT INTO `biodata_tamu_undangan` (`id_biodata_tamu_undangan`, `id_pemesanan`, `nama_tamu`, `whatsapp`, `alamat`, `email`, `created_at`, `updated_at`) VALUES
(1, 11, 'yoga dan lara', 85272621908, 'Padang', 'yogawahyudi22@gmail.com', '2022-11-11 08:35:15', '2022-11-11 08:35:15'),
(2, 11, 'lara', 812345678, 'Padang', 'lara@gmail.com', '2022-11-11 09:55:39', '2022-11-11 09:55:39'),
(3, 10, 'lara chan', 8989888, 'kota padang', 'yogawahyudi22@gmail.com', '2022-11-11 09:58:24', '2022-11-11 09:58:24');

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

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id_blog`, `judul`, `slug`, `isi_blog`, `isActive`, `thumbnail`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 'Beberapa Manfaat memakai template undangan digital', 'beberapa-manfaat-memakai-template-undangan-digital', '<p>1. hemat biaya</p>\r\n\r\n<p>&nbsp; &nbsp; karna dengan kita memakai undangan digital justru biaya yang kita keluarkan tidak banyak, cukup beli 1 template, bisa kirim ka banyak orang</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/gambar/gambar_blog/konten/template01_1664694182.png\" style=\"height:160px; width:98px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://127.0.0.1:8000/gambar/gambar_blog/konten/template02_1664694228.png\" style=\"height:574px; width:350px\" /></p>', 1, '1664694044.png', '2022-10-02', '2022-10-02 00:00:44', '2022-10-02 00:04:11');

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
(1, 1, 'Transfer', '202210082', 30000, '166519208549.jpg', NULL, NULL),
(2, 2, 'Transfer', '202210082', 30000, '16651927652.jpg', NULL, NULL),
(3, 3, 'Transfer', '202210092', 20000, '166531851118.jpg', NULL, NULL);

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
(1, 1, '166343839990.php', NULL, 0, 'cover', NULL, NULL),
(2, 1, '16634385283.php', NULL, 0, 'ayat', NULL, NULL),
(3, 1, '166343856672.php', NULL, 0, 'profile mempelai', NULL, NULL),
(4, 1, '166343862818.php', NULL, 0, 'galeri', NULL, NULL),
(5, 1, '166343867796.php', NULL, 0, 'waktu mundur', NULL, NULL),
(6, 1, '166343887798.php', NULL, 1, 'keluarga besar mempelai', NULL, NULL),
(7, 1, '166343893080.php', NULL, 0, 'kirim pesan', NULL, NULL),
(8, 2, '166343839990.php', NULL, 0, 'cover', NULL, NULL),
(9, 2, '16634385283.php', NULL, 0, 'ayat', NULL, NULL),
(10, 2, '166343856672.php', NULL, 0, 'profile mempelai', NULL, NULL),
(11, 2, '166343862818.php', NULL, 0, 'galeri', NULL, NULL),
(12, 2, '166343867796.php', NULL, 0, 'waktu mundur', NULL, NULL),
(13, 2, '166343893080.php', NULL, 0, 'kirim pesan', NULL, NULL),
(14, 3, '166343839990.php', NULL, 0, 'cover', NULL, NULL),
(15, 3, '16634385283.php', NULL, 0, 'ayat', NULL, NULL),
(16, 3, '166343856672.php', NULL, 0, 'profile mempelai', NULL, NULL),
(17, 3, '166343862818.php', NULL, 0, 'galeri', NULL, NULL),
(18, 3, '166343867796.php', NULL, 0, 'waktu mundur', NULL, NULL),
(19, 3, '166343893080.php', NULL, 0, 'kirim pesan', NULL, NULL),
(20, 4, '166343839990.php', NULL, 0, 'cover', NULL, NULL),
(21, 4, '16634385283.php', NULL, 0, 'ayat', NULL, NULL),
(22, 4, '166343856672.php', NULL, 0, 'profile mempelai', NULL, NULL),
(23, 4, '166343862818.php', NULL, 0, 'galeri', NULL, NULL),
(24, 4, '166343867796.php', NULL, 0, 'waktu mundur', NULL, NULL),
(25, 4, '166343893080.php', NULL, 0, 'kirim pesan', NULL, NULL),
(26, 5, '166343839990.php', NULL, 0, 'cover', NULL, NULL),
(27, 5, '16634385283.php', NULL, 0, 'ayat', NULL, NULL),
(28, 5, '166343856672.php', NULL, 0, 'profile mempelai', NULL, NULL),
(29, 5, '166343862818.php', NULL, 0, 'galeri', NULL, NULL),
(30, 5, '166343867796.php', NULL, 0, 'waktu mundur', NULL, NULL),
(31, 5, '166343893080.php', NULL, 0, 'kirim pesan', NULL, NULL),
(32, 6, '166343839990.php', NULL, 0, 'cover', NULL, NULL),
(33, 6, '16634385283.php', NULL, 0, 'ayat', NULL, NULL),
(34, 6, '166343856672.php', NULL, 0, 'profile mempelai', NULL, NULL),
(35, 6, '166343862818.php', NULL, 0, 'galeri', NULL, NULL),
(36, 6, '166343867796.php', NULL, 0, 'waktu mundur', NULL, NULL),
(37, 6, '166343893080.php', NULL, 0, 'kirim pesan', NULL, NULL),
(38, 7, '166343839990.php', NULL, 0, 'cover', NULL, NULL),
(39, 7, '16634385283.php', NULL, 0, 'ayat', NULL, NULL),
(40, 7, '166343856672.php', NULL, 0, 'profile mempelai', NULL, NULL),
(41, 7, '166343862818.php', NULL, 0, 'galeri', NULL, NULL),
(42, 7, '166343867796.php', NULL, 0, 'waktu mundur', NULL, NULL),
(43, 7, '166343893080.php', NULL, 0, 'kirim pesan', NULL, NULL),
(44, 8, '166343839990.php', NULL, 0, 'cover', NULL, NULL),
(45, 8, '16634385283.php', NULL, 0, 'ayat', NULL, NULL),
(46, 8, '166343856672.php', NULL, 0, 'profile mempelai', NULL, NULL),
(47, 8, '166343862818.php', NULL, 0, 'galeri', NULL, NULL),
(48, 8, '166343867796.php', NULL, 0, 'waktu mundur', NULL, NULL),
(49, 8, '166343893080.php', NULL, 0, 'kirim pesan', NULL, NULL),
(50, 9, '166343839990.php', NULL, 0, 'cover', NULL, NULL),
(51, 9, '16634385283.php', NULL, 0, 'ayat', NULL, NULL),
(52, 9, '166343856672.php', NULL, 0, 'profile mempelai', NULL, NULL),
(53, 9, '166343862818.php', NULL, 0, 'galeri', NULL, NULL),
(54, 9, '166343867796.php', NULL, 0, 'waktu mundur', NULL, NULL),
(55, 9, '166343893080.php', NULL, 0, 'kirim pesan', NULL, NULL),
(56, 10, '166343839990.php', NULL, 0, 'cover', NULL, NULL),
(57, 10, '16634385283.php', NULL, 0, 'ayat', NULL, NULL),
(58, 10, '166343856672.php', NULL, 0, 'profile mempelai', NULL, NULL),
(59, 10, '166343862818.php', NULL, 0, 'galeri', NULL, NULL),
(60, 10, '166343867796.php', NULL, 0, 'waktu mundur', NULL, NULL),
(61, 10, '166343872797.php', NULL, 1, 'akad', NULL, NULL),
(62, 10, '16634387768.php', NULL, 1, 'resepsi1', NULL, NULL),
(63, 10, '16634388308.php', NULL, 1, 'resepsi2', NULL, NULL),
(64, 10, '166343887798.php', NULL, 1, 'keluarga besar mempelai', NULL, NULL),
(65, 10, '166343893080.php', NULL, 0, 'kirim pesan', NULL, NULL),
(66, 11, '166343778864.php', NULL, 0, 'cover', NULL, NULL),
(67, 11, '166343789966.php', NULL, 0, 'profile mempelai', NULL, NULL),
(68, 11, '166343793632.php', NULL, 0, 'waktu mundur', NULL, NULL),
(69, 11, '166343803792.php', NULL, 1, 'akad', NULL, NULL),
(70, 11, '16634380872.php', NULL, 1, 'resepsi1', NULL, NULL),
(71, 11, '166343814590.php', NULL, 1, 'resepsi2', NULL, NULL),
(72, 11, '166343822848.php', NULL, 0, 'ayat', NULL, NULL),
(73, 11, '166343828957.php', NULL, 0, 'galeri', NULL, NULL);

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
(38, 7, '166343839990.php', 0, 'cover', '2022-10-06 23:09:42', '2022-10-06 23:09:42'),
(39, 7, '16634385283.php', 0, 'ayat', '2022-10-06 23:09:42', '2022-10-06 23:09:42'),
(40, 7, '166343856672.php', 0, 'profile mempelai', '2022-10-06 23:09:42', '2022-10-06 23:09:42'),
(41, 7, '166343862818.php', 0, 'galeri', '2022-10-06 23:09:42', '2022-10-06 23:09:42'),
(42, 7, '166343867796.php', 0, 'waktu mundur', '2022-10-06 23:09:42', '2022-10-06 23:09:42'),
(43, 7, '166343893080.php', 0, 'kirim pesan', '2022-10-06 23:09:42', '2022-10-06 23:09:42'),
(72, 12, '166343778864.php', 0, 'cover', '2022-10-08 02:03:23', '2022-10-08 02:03:23'),
(73, 12, '166343789966.php', 0, 'profile mempelai', '2022-10-08 02:03:23', '2022-10-08 02:03:23'),
(74, 12, '166343793632.php', 0, 'waktu mundur', '2022-10-08 02:03:23', '2022-10-08 02:03:23'),
(75, 12, '166343822848.php', 0, 'ayat', '2022-10-08 02:03:23', '2022-10-08 02:03:23'),
(76, 12, '166343828957.php', 0, 'galeri', '2022-10-08 02:03:23', '2022-10-08 02:03:23');

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
(18, 2, 19, '166343887798.php', '166343887723.PNG', 1, 'Aktif', '2022-09-17 11:21:17', '2022-10-01 07:49:23'),
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
(64, '2022_08_22_230227_create_staff_table', 2),
(65, '2022_10_14_142659_create_tamu_undangan_table', 3),
(66, '2022_10_14_143504_create_biodata_tamu_undangan_table', 4);

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

--
-- Dumping data untuk tabel `musik_template`
--

INSERT INTO `musik_template` (`id_musik_template`, `judul_musik`, `musik`, `created_at`, `updated_at`) VALUES
(1, 'Sezairi Sezali - It\'s You', '166469491831.mp3', NULL, NULL);

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
(1, 9, 'pending', '2022-10-08', NULL, NULL),
(2, 10, 'pending', '2022-10-08', NULL, NULL),
(3, 11, 'pending', '2022-10-09', NULL, NULL);

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
(1, 2, NULL, 11, 'Premium', 'yogawahyudi22@gmail.com', 'KelvindanCitra', '2022-10-02', 'pending', NULL, NULL),
(2, 2, NULL, 12, 'Premium', 'yogawahyudi22@gmail.com', 'akudankamu', '2022-10-05', 'pending', NULL, NULL),
(3, 2, NULL, 13, 'Premium', 'yogawahyudi22@gmail.com', 'akudankamu1', '2022-10-06', 'pending', NULL, NULL),
(4, 2, NULL, 14, 'Premium', 'yogawahyudi22@gmail.com', 'akudankamu2', '2022-10-06', 'pending', NULL, NULL),
(5, 2, NULL, 15, 'Premium', 'yogawahyudi22@gmail.com', 'akudankamu4', '2022-10-06', 'pending', NULL, NULL),
(6, 2, NULL, 16, 'Premium', 'yogawahyudi22@gmail.com', 'akudankamu5', '2022-10-06', 'pending', NULL, NULL),
(7, 2, NULL, 17, 'Premium', 'yogawahyudi22@gmail.com', 'akudankamu6', '2022-10-07', 'pending', NULL, NULL),
(8, 2, NULL, 18, 'Premium', 'yogawahyudi22@gmail.com', 'akudankamu7', '2022-10-07', 'pending', NULL, NULL),
(9, 2, NULL, 19, 'Premium', 'yogawahyudi22@gmail.com', 'akudankamu8', '2022-10-08', 'sudah bayar', NULL, NULL),
(10, 2, NULL, 20, 'Premium', 'yogawahyudi22@gmail.com', 'akudankamu10', '2022-10-08', 'sudah bayar', NULL, NULL),
(11, 1, NULL, 21, 'Basic', 'yogawahyudi22@gmail.com', 'akudankamu20', '2022-10-09', 'sudah bayar', NULL, NULL);

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
(7, 2, 2),
(12, 3, 1);

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
(2, 'Yoga Wahyudi', 'yogawahyudi22@gmail.com', 'https://lh3.googleusercontent.com/a-/AFdZucr75__CcwojqgCAGjsRwAcrkQUrWSqtv0bBlM7c2Q=s96-c', 'pelanggan', NULL, '$2y$10$XUa/8Qdyz38StG7Ncdx8TOYV3PUG6aCTbQtQz9txT2tXMLs3SOcPe', NULL, '2022-08-26 07:53:19', '2022-08-26 07:53:19'),
(3, 'Putri lara Elitra', 'elitraputrilara@gmail.com', 'https://lh3.googleusercontent.com/a/ALm5wu3axThKk_PR3fYB7OE1bnUA8_EDHk9yTKFfIMYy=s96-c', 'pelanggan', NULL, '$2y$10$g6FUYx51xpxDNczWpu.Fwu7nXMvZpZMmTh.O5RUFE8SkM5g0s7o9O', NULL, '2022-10-07 19:03:02', '2022-10-07 19:03:02');

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
-- Indeks untuk tabel `biodata_tamu_undangan`
--
ALTER TABLE `biodata_tamu_undangan`
  ADD PRIMARY KEY (`id_biodata_tamu_undangan`);

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
  MODIFY `id_biodata_home_page` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `biodata_jadwal_akad`
--
ALTER TABLE `biodata_jadwal_akad`
  MODIFY `id_jadwal_akad` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `biodata_jadwal_resepsi`
--
ALTER TABLE `biodata_jadwal_resepsi`
  MODIFY `id_jadwal_resepsi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `biodata_jadwal_resepsi_2`
--
ALTER TABLE `biodata_jadwal_resepsi_2`
  MODIFY `id_jadwal_resepsi_2` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `biodata_keluarga_besar_pria`
--
ALTER TABLE `biodata_keluarga_besar_pria`
  MODIFY `id_keluarga_besar_pria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `biodata_keluarga_besar_wanita`
--
ALTER TABLE `biodata_keluarga_besar_wanita`
  MODIFY `id_keluarga_besar_wanita` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `biodata_kutipan_ayat`
--
ALTER TABLE `biodata_kutipan_ayat`
  MODIFY `id_kutipan_ayat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `biodata_musik`
--
ALTER TABLE `biodata_musik`
  MODIFY `id_musik` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `biodata_pasangan_pria`
--
ALTER TABLE `biodata_pasangan_pria`
  MODIFY `id_pasangan_pria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `biodata_pasangan_wanita`
--
ALTER TABLE `biodata_pasangan_wanita`
  MODIFY `id_pasangan_wanita` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `biodata_pelanggan`
--
ALTER TABLE `biodata_pelanggan`
  MODIFY `id_biodata_pelanggan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `biodata_tamu_undangan`
--
ALTER TABLE `biodata_tamu_undangan`
  MODIFY `id_biodata_tamu_undangan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `detail_pembayaran_invitation`
--
ALTER TABLE `detail_pembayaran_invitation`
  MODIFY `id_detail_pembayaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `detail_pemesanan_invitation`
--
ALTER TABLE `detail_pemesanan_invitation`
  MODIFY `id_detail_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `detail_preview_template`
--
ALTER TABLE `detail_preview_template`
  MODIFY `id_detail_preview` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `musik_template`
--
ALTER TABLE `musik_template`
  MODIFY `id_musik_template` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_invitation`
--
ALTER TABLE `pembayaran_invitation`
  MODIFY `id_pembayaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pemesanan_invitation`
--
ALTER TABLE `pemesanan_invitation`
  MODIFY `id_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `preview_template_pemesanan`
--
ALTER TABLE `preview_template_pemesanan`
  MODIFY `id_preview_template_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id_video` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
