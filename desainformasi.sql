-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 06:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desainformasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_upload` date NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `nama`, `slug_berita`, `deskripsi`, `tgl_upload`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Penandatanganan MOU Desa Informasi bersama Pemkab Kuningan', 'syuban sururi', 'Penandatanganan MOU Desa Informasi bersama Pemkab Kuningan', 'Penanda tanganan PKS Desa Informasi dengan Pemkab Kuningan yang di wakili Kepala Dinas Kominfo Kuningan menandai mulainya Implementasi Desa Informasi di Kuningan.', '2022-01-17', '1.jpg', NULL, '2022-01-18 05:43:32'),
(2, 'Perundingan Kerjasama Implementasi Desa Informasi di Kota Cirebon', 'Suban', 'Perundingan Kerjasama Implementasi Desa Informasi di Kota Cirebon', 'Pembahasan MOU antara Desa Informasi dengan Pemerintah Kota Cirebon.', '2022-01-18', 'pa-h-nur.jpeg', '2022-01-18 04:31:27', '2022-01-18 05:38:36'),
(4, 'Project Manager Desa Informasi bersama Walikota Cirebon', 'Suban', 'Project Manager Desa Informasi bersama Walikota Cirebon', 'Pertemuan Bpk.Yucki Prihadi selaku Project Manager Desa Informasi dengan Bpk.Walikota Cirebon membahas pelaksanaan Implementasi Program Desa Informasi di Kota Cirebon.', '2022-01-19', '6.jpg', '2022-01-18 20:01:54', '2022-01-18 20:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleri`
--

CREATE TABLE `galleri` (
  `id_galleri` int(10) UNSIGNED NOT NULL,
  `foto_galleri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleri`
--

INSERT INTO `galleri` (`id_galleri`, `foto_galleri`, `created_at`, `updated_at`) VALUES
(1, '1.jpeg', NULL, NULL),
(2, '2.jpeg', NULL, NULL),
(3, '3.jpeg', NULL, NULL),
(4, '4.jpeg', NULL, NULL),
(5, '5.jpg', NULL, NULL),
(6, '6.jpg', NULL, NULL),
(7, '7.jpg', '2022-01-17 21:03:10', '2022-01-17 21:03:10'),
(8, '8.jpeg', '2022-01-17 21:07:11', '2022-01-17 21:07:11'),
(9, '9.jpeg', '2022-01-17 21:08:26', '2022-01-17 21:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_01_09_144315_create_team_table', 1),
(5, '2022_01_16_155206_create_galleri_table', 2),
(6, '2022_01_17_145330_create_mitra_table', 3),
(7, '2022_01_17_150209_create_testimoni_table', 4),
(8, '2022_01_17_150746_create_berita_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id_mitra` int(10) UNSIGNED NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id_mitra`, `foto`, `created_at`, `updated_at`) VALUES
(1, '1.png', NULL, NULL),
(4, 'amikbn.png', '2022-01-18 22:20:56', '2022-01-18 22:20:56'),
(5, 'client2.png', '2022-01-18 22:25:39', '2022-01-18 22:25:39'),
(6, 'client5.png', '2022-01-18 22:25:48', '2022-01-18 22:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id_team` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_team`, `nama`, `jabatan`, `foto`, `created_at`, `updated_at`) VALUES
(17, 'Ir. Tedi Kuswantoro, MM.Kom', 'Pembina', 'patedi.jpeg', '2022-01-11 19:38:15', '2022-01-11 19:38:15'),
(18, 'Dr. Yucki Prihadi,SSi,M.M,M.Kom', 'Project Manager', 'payucky.jpeg', '2022-01-11 19:39:34', '2022-01-11 19:39:34'),
(19, 'Drs.H Nurachman M.M', 'Penanggung Jawab', 'pa-h-nur.jpeg', '2022-01-11 19:40:48', '2022-01-11 19:40:48'),
(20, 'Agus Mulyana,S.S.', 'Sekretaris', 'pa-agus.jpeg', '2022-01-11 19:46:11', '2022-01-11 19:46:11'),
(21, 'Drs. Edison', 'Penanggung Jawab', 'pa-edison-1.jpg', '2022-01-11 19:47:23', '2022-01-17 06:14:34'),
(22, 'Willi Pratama, S.Kom', 'Kordinator Bidang Operation & Maintenance', 'willi-1.jpg', '2022-01-11 19:49:56', '2022-01-11 19:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama`, `jabatan`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(2, 'Apriyadi', 'Penanggung Jawab', 'Penanda tanganan PKS Desa Informasi dengan Pemkab Kuningan yang di wakili Kepala Dinas Kominfo Kuningan', '2.png', NULL, '2022-01-18 09:24:23'),
(3, 'iman', 'operation development', 'Pembahasan MOU antara Desa Informasi dengan Pemerintah Kota Cirebon.', 'testimonial3.png', '2022-01-18 09:11:54', '2022-01-18 09:11:54'),
(5, 'Fiki Nurhidayah', 'sukses', 'Desa Informasi dengan Bpk.Walikota Cirebon membahas pelaksanaan Implementasi Program Desa Informasi di Kota Cirebon.', 'testimonial2.png', '2022-01-19 03:36:42', '2022-01-19 03:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Syuban sururi', 'syubannsuruuri@gmail.com', NULL, '$2y$10$NGuCduomLyxdHaswKIaBHudc8TV96OYIFkSPfR2/VH9O.jtWT8mOi', NULL, '2022-01-16 07:28:13', '2022-01-16 07:28:13'),
(6, 'Admin', 'admin@gmail.com', NULL, '$2y$10$9.lN9SpGQuTw0QfB/0nIGO25.Z/HmKhDZ2gvw85M.ZdjT/kiaUdji', NULL, '2022-01-17 18:10:33', '2022-01-17 18:10:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleri`
--
ALTER TABLE `galleri`
  ADD PRIMARY KEY (`id_galleri`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleri`
--
ALTER TABLE `galleri`
  MODIFY `id_galleri` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id_mitra` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
