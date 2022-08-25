-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2022 pada 09.34
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
  `foto_mempelai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_jadwal_akad`
--

CREATE TABLE `biodata_jadwal_akad` (
  `id_jadwal_akad` bigint(20) UNSIGNED NOT NULL,
  `jam_mulai_akad` time NOT NULL,
  `tanggal_akad` date NOT NULL,
  `waktu_wilayah_akad` time NOT NULL,
  `lokasi_akad` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_jadwal_resepsi`
--

CREATE TABLE `biodata_jadwal_resepsi` (
  `id_jadwal_resepsi` bigint(20) UNSIGNED NOT NULL,
  `jam_mulai_resepsi` time NOT NULL,
  `tanggal_resepsi` date NOT NULL,
  `waktu_wilayah_resepsi` time NOT NULL,
  `lokasi_resepsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_jadwal_resepsi_2`
--

CREATE TABLE `biodata_jadwal_resepsi_2` (
  `id_jadwal_resepsi_2` bigint(20) UNSIGNED NOT NULL,
  `jam_mulai_resepsi_2` time DEFAULT NULL,
  `tanggal_resepsi_2` date DEFAULT NULL,
  `waktu_wilayah_resepsi_2` time DEFAULT NULL,
  `lokasi_resepsi_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_pasangan_pria`
--

CREATE TABLE `biodata_pasangan_pria` (
  `id_pasangan_pria` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap_pria` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `putra_dari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_mempelai_pria` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bapak_pria` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu_pria` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_pasangan_wanita`
--

CREATE TABLE `biodata_pasangan_wanita` (
  `id_pasangan_wanita` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap_wanita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `putri_dari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_mempelai_wanita` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bapak_wanita` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu_wanita` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `id_galeri_foto` bigint(20) NOT NULL,
  `id_jadwal_akad` bigint(20) DEFAULT NULL,
  `id_jadwal_resepsi` bigint(20) DEFAULT NULL,
  `id_jadwal_resepsi_2` bigint(20) DEFAULT NULL,
  `id_keluarga_besar_pria` bigint(20) DEFAULT NULL,
  `id_keluarga_besar_wanita` bigint(20) DEFAULT NULL,
  `id_musik` bigint(20) DEFAULT NULL,
  `nomor_telepon` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanan_invitation`
--

CREATE TABLE `detail_pemesanan_invitation` (
  `id_detail_pemesanan` bigint(20) UNSIGNED NOT NULL,
  `id_pemesanan` bigint(20) NOT NULL,
  `id_template` bigint(20) DEFAULT NULL,
  `id_video` bigint(20) DEFAULT NULL,
  `file_template` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_vidio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_preview_template`
--

CREATE TABLE `detail_preview_template` (
  `id_detail_preview` bigint(20) UNSIGNED NOT NULL,
  `id_preview_template_pemesanan` bigint(20) NOT NULL,
  `file_template` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(15, '2022_06_01_181946_create_biodata_home_page_table', 1),
(16, '2022_06_01_182347_create_biodata_kutipan_ayat_table', 1),
(17, '2022_06_01_182446_create_biodata_pasangan_pria_table', 1),
(18, '2022_06_01_182623_create_biodata_pasangan_wanita_table', 1),
(19, '2022_06_01_183012_create_biodata_galeri_foto_table', 1),
(20, '2022_06_01_183100_create_biodata_jadwal_akad_table', 1),
(21, '2022_06_01_183306_create_biodata_jadwal_resepsi_table', 1),
(22, '2022_06_01_183342_create_biodata_jadwal_resepsi_2_table', 1),
(23, '2022_06_01_183456_create_biodata_keluarga_besar_pria_table', 1),
(24, '2022_06_01_183544_create_biodata_keluarga_besar_wanita_table', 1),
(25, '2022_06_01_183650_create_biodata_musik_table', 1),
(26, '2022_06_01_183734_create_biodata_pelanggan_table', 1),
(27, '2022_06_06_073432_create_musik_template_table', 1),
(28, '2022_06_08_043758_create_detail_preview_template_table', 1),
(29, '2022_06_20_062459_create_pemesanan_invitation_table', 1),
(30, '2022_06_20_062626_create_detail_pemesanan_invitation_table', 1),
(31, '2022_06_22_152938_create_pembayaran_invitation_table', 1),
(32, '2022_06_22_153254_create_detail_pembayaran_invitation_table', 1),
(33, '2022_08_22_230227_create_staff_table', 1);

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan_invitation`
--

CREATE TABLE `pemesanan_invitation` (
  `id_pemesanan` bigint(20) UNSIGNED NOT NULL,
  `id_template` bigint(20) NOT NULL,
  `id_biodata_pelanggan` bigint(20) NOT NULL,
  `kategori_template` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_hosting` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Rise Development', 'risedevelopmentteam@gmail.com', NULL, 'pimpinan', NULL, '$2y$10$bc0b1u6si9mPurG9e0sPq.re9x6brC2DRP44d58ngCQgsgMFtwomy', NULL, NULL, NULL);

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
  MODIFY `id_galeri_foto` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `biodata_home_page`
--
ALTER TABLE `biodata_home_page`
  MODIFY `id_biodata_home_page` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `biodata_jadwal_akad`
--
ALTER TABLE `biodata_jadwal_akad`
  MODIFY `id_jadwal_akad` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `biodata_jadwal_resepsi`
--
ALTER TABLE `biodata_jadwal_resepsi`
  MODIFY `id_jadwal_resepsi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `biodata_jadwal_resepsi_2`
--
ALTER TABLE `biodata_jadwal_resepsi_2`
  MODIFY `id_jadwal_resepsi_2` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_kutipan_ayat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `biodata_musik`
--
ALTER TABLE `biodata_musik`
  MODIFY `id_musik` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `biodata_pasangan_pria`
--
ALTER TABLE `biodata_pasangan_pria`
  MODIFY `id_pasangan_pria` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `biodata_pasangan_wanita`
--
ALTER TABLE `biodata_pasangan_wanita`
  MODIFY `id_pasangan_wanita` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `biodata_pelanggan`
--
ALTER TABLE `biodata_pelanggan`
  MODIFY `id_biodata_pelanggan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_pembayaran_invitation`
--
ALTER TABLE `detail_pembayaran_invitation`
  MODIFY `id_detail_pembayaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_pemesanan_invitation`
--
ALTER TABLE `detail_pemesanan_invitation`
  MODIFY `id_detail_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_preview_template`
--
ALTER TABLE `detail_preview_template`
  MODIFY `id_detail_preview` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `file_template`
--
ALTER TABLE `file_template`
  MODIFY `id_file_template` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_template`
--
ALTER TABLE `kategori_template`
  MODIFY `id_kategori_template` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_video`
--
ALTER TABLE `kategori_video`
  MODIFY `id_kategori_video` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `musik_template`
--
ALTER TABLE `musik_template`
  MODIFY `id_musik_template` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pembayaran_invitation`
--
ALTER TABLE `pembayaran_invitation`
  MODIFY `id_pembayaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pemesanan_invitation`
--
ALTER TABLE `pemesanan_invitation`
  MODIFY `id_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `preview_template_pemesanan`
--
ALTER TABLE `preview_template_pemesanan`
  MODIFY `id_preview_template_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rincian_kategori_template`
--
ALTER TABLE `rincian_kategori_template`
  MODIFY `id_rincian_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_sub_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `template_invitation`
--
ALTER TABLE `template_invitation`
  MODIFY `id_template` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id_video` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
