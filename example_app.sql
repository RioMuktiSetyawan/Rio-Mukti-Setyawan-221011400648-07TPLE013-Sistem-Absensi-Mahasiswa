-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2026 at 01:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE `absensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mahasiswa_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('Hadir','Izin','Sakit','Alpa') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensis`
--

INSERT INTO `absensis` (`id`, `mahasiswa_id`, `tanggal`, `status`, `created_at`, `updated_at`) VALUES
(25, 1, '2025-12-13', 'Hadir', '2025-12-23 19:26:32', '2025-12-23 19:26:32'),
(26, 2, '2025-12-13', 'Hadir', '2025-12-23 19:26:32', '2025-12-23 19:26:32'),
(27, 3, '2025-12-13', 'Hadir', '2025-12-23 19:26:33', '2025-12-23 19:26:33'),
(28, 4, '2025-12-13', 'Izin', '2025-12-23 19:26:33', '2025-12-23 19:26:33'),
(29, 7, '2025-12-13', 'Izin', '2025-12-23 19:26:33', '2025-12-23 19:26:33'),
(30, 9, '2025-12-13', 'Hadir', '2025-12-23 19:26:33', '2025-12-23 19:26:33'),
(31, 1, '2025-12-20', 'Hadir', '2025-12-23 19:26:49', '2025-12-23 19:26:49'),
(32, 2, '2025-12-20', 'Alpa', '2025-12-23 19:26:49', '2025-12-23 19:26:49'),
(33, 3, '2025-12-20', 'Hadir', '2025-12-23 19:26:49', '2025-12-23 19:26:49'),
(34, 4, '2025-12-20', 'Alpa', '2025-12-23 19:26:49', '2025-12-23 19:26:49'),
(35, 7, '2025-12-20', 'Hadir', '2025-12-23 19:26:50', '2025-12-23 19:26:50'),
(36, 9, '2025-12-20', 'Hadir', '2025-12-23 19:26:50', '2025-12-23 19:26:50'),
(37, 1, '2025-12-06', 'Hadir', '2025-12-23 19:29:07', '2025-12-23 19:29:07'),
(38, 2, '2025-12-06', 'Hadir', '2025-12-23 19:29:08', '2025-12-23 19:29:08'),
(39, 3, '2025-12-06', 'Hadir', '2025-12-23 19:29:08', '2025-12-23 19:29:08'),
(40, 4, '2025-12-06', 'Hadir', '2025-12-23 19:29:08', '2025-12-23 19:29:08'),
(41, 7, '2025-12-06', 'Hadir', '2025-12-23 19:29:08', '2025-12-23 19:29:08'),
(42, 9, '2025-12-06', 'Hadir', '2025-12-23 19:29:08', '2025-12-23 19:29:08'),
(43, 1, '2025-12-24', 'Hadir', '2025-12-23 19:29:40', '2025-12-23 19:29:40'),
(44, 2, '2025-12-24', 'Hadir', '2025-12-23 19:29:40', '2025-12-23 19:29:40'),
(45, 3, '2025-12-24', 'Izin', '2025-12-23 19:29:40', '2025-12-23 19:29:40'),
(46, 4, '2025-12-24', 'Izin', '2025-12-23 19:29:40', '2025-12-23 19:29:40'),
(47, 7, '2025-12-24', 'Hadir', '2025-12-23 19:29:40', '2025-12-23 19:29:40'),
(48, 9, '2025-12-24', 'Hadir', '2025-12-23 19:29:40', '2025-12-23 19:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nim`, `nama`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, '221011400648', 'Rio Mukti Setyawan calon S.Kom', 'Teknik Informatika', '2025-12-20 21:01:30', '2025-12-20 21:11:50'),
(2, '221011400649', 'Bagus Supriyanto', 'Teknik Informatika', '2025-12-20 21:02:04', '2025-12-23 18:12:24'),
(3, '221011400647', 'Tio Alvin Gusha', 'Teknik Informatika', '2025-12-20 21:02:27', '2025-12-20 21:02:27'),
(4, '221011400646', 'Fahri Albi Febiyani', 'Teknik Informatika', '2025-12-20 21:02:51', '2025-12-20 21:02:51'),
(7, '221011400645', 'Keysha Ziqri O.R', 'Teknik Informatika', '2025-12-20 21:12:15', '2025-12-20 21:12:35'),
(9, '221011400789', 'Diani Fitria', 'Teknik Informatika', '2025-12-23 05:37:57', '2025-12-23 05:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_11_26_142533_create_students_table', 1),
(5, '2025_11_26_143724_create_personal_access_tokens_table', 1),
(6, '2025_12_21_031905_create_mahasiswas_table', 2),
(7, '2025_12_21_031915_create_absensis_table', 2),
(8, '2025_12_21_045812_add_role_to_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('dosen21@gmail.com', '$2y$12$9lCk58M34R72p8Sui/44s.oW8ouPSkV4pDS27DKfqfzVFcfKmA7LK', '2025-12-23 06:18:53'),
('riomukti583@gmail.com', '$2y$12$NteKT8FEYH3hIdoUJTtu6e94FpoubfUWM4a7MUCkJW2D9ydoPM4vu', '2025-12-23 06:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'api-token-Admin User', '528d5d90ef72b2c3c048e41a8b3d9041d3fcd87c0994d2df0619e2a7ac806ece', '[\"*\"]', '2025-11-26 08:47:55', NULL, '2025-11-26 08:40:17', '2025-11-26 08:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('fAyhonip5cxDx8ZyVCOkHdv4TSlRuO3UqxZcZ17o', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/139.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaUZ1TEplTlZsVzRaU25iSDFkYmw2NDQ5R3c5RDQxcXROOFdmSTBwZCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7Tjt9fQ==', 1766631730);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `study_program` varchar(255) NOT NULL,
  `gpa` decimal(3,2) NOT NULL,
  `courses` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`courses`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `nim`, `study_program`, `gpa`, `courses`, `created_at`, `updated_at`) VALUES
(1, 'Budi Santoso', '12345678', 'Teknik Informatika', 3.85, '[\"Pemrograman Web\",\"Basis Data\",\"Kecerdasan Buatan\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(2, 'Prof. Robb Schamberger V', '10262712', 'Sistem Informasi', 2.89, '[\"Manajemen Proyek TI\",\"Jaringan Komputer\",\"Kecerdasan Buatan\",\"Basis Data\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(3, 'Mr. Ayden Miller', '10894962', 'Teknik Informatika', 3.46, '[\"Manajemen Proyek TI\",\"Kecerdasan Buatan\",\"Struktur Data\",\"Jaringan Komputer\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(4, 'Elian Kuhic', '10457410', 'Akuntansi', 3.91, '[\"Sistem Operasi\",\"Kecerdasan Buatan\",\"Kalkulus Dasar\",\"Struktur Data\",\"Basis Data\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(5, 'Johanna Douglas', '10015435', 'Desain Komunikasi Visual', 2.92, '[\"Pemrograman Web\",\"Basis Data\",\"Jaringan Komputer\",\"Struktur Data\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(6, 'Sarah Kerluke', '10305372', 'Sistem Informasi', 3.99, '[\"Sistem Operasi\",\"Jaringan Komputer\",\"Kalkulus Dasar\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(7, 'Beau Stokes', '10259356', 'Sistem Informasi', 3.87, '[\"Sistem Operasi\",\"Struktur Data\",\"Pemrograman Web\",\"Manajemen Proyek TI\",\"Basis Data\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(8, 'Kyle Bernhard MD', '10069088', 'Teknik Informatika', 3.87, '[\"Kecerdasan Buatan\",\"Basis Data\",\"Kalkulus Dasar\",\"Jaringan Komputer\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(9, 'Kenna Franecki', '10559295', 'Sistem Informasi', 2.75, '[\"Kalkulus Dasar\",\"Pemrograman Web\",\"Kecerdasan Buatan\",\"Basis Data\",\"Sistem Operasi\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(10, 'Ms. Mattie Hodkiewicz', '10415924', 'Manajemen Bisnis', 3.77, '[\"Jaringan Komputer\",\"Sistem Operasi\",\"Pemrograman Web\",\"Kecerdasan Buatan\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(11, 'Lesley Jerde', '10770936', 'Teknik Informatika', 2.89, '[\"Manajemen Proyek TI\",\"Basis Data\",\"Jaringan Komputer\",\"Kalkulus Dasar\",\"Struktur Data\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(12, 'Miss Marlen Miller', '10078924', 'Teknik Informatika', 3.62, '[\"Manajemen Proyek TI\",\"Jaringan Komputer\",\"Kecerdasan Buatan\",\"Kalkulus Dasar\",\"Sistem Operasi\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(13, 'Ernestina Luettgen', '10087298', 'Akuntansi', 3.89, '[\"Sistem Operasi\",\"Manajemen Proyek TI\",\"Kecerdasan Buatan\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(14, 'Amparo Yundt', '10301430', 'Akuntansi', 3.57, '[\"Basis Data\",\"Kalkulus Dasar\",\"Jaringan Komputer\",\"Kecerdasan Buatan\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(15, 'Van Halvorson', '10975128', 'Akuntansi', 3.63, '[\"Struktur Data\",\"Basis Data\",\"Sistem Operasi\",\"Manajemen Proyek TI\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(16, 'Delmer Leuschke', '10488975', 'Akuntansi', 3.35, '[\"Sistem Operasi\",\"Struktur Data\",\"Manajemen Proyek TI\",\"Kecerdasan Buatan\",\"Pemrograman Web\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(17, 'Dr. Tom Kemmer', '10041515', 'Sistem Informasi', 3.58, '[\"Sistem Operasi\",\"Jaringan Komputer\",\"Struktur Data\",\"Basis Data\",\"Pemrograman Web\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(18, 'Stewart Bednar', '10502107', 'Desain Komunikasi Visual', 3.45, '[\"Struktur Data\",\"Manajemen Proyek TI\",\"Pemrograman Web\",\"Basis Data\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(19, 'Dr. Mossie Leannon', '10408734', 'Akuntansi', 3.09, '[\"Basis Data\",\"Struktur Data\",\"Jaringan Komputer\",\"Kecerdasan Buatan\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(20, 'Myrtie Kilback', '10978901', 'Sistem Informasi', 3.66, '[\"Pemrograman Web\",\"Jaringan Komputer\",\"Struktur Data\",\"Basis Data\",\"Kecerdasan Buatan\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(21, 'Twila Cole', '10454525', 'Sistem Informasi', 2.80, '[\"Basis Data\",\"Kecerdasan Buatan\",\"Sistem Operasi\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(22, 'Viola Koch', '10138616', 'Sistem Informasi', 2.96, '[\"Struktur Data\",\"Manajemen Proyek TI\",\"Sistem Operasi\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(23, 'Lexus Senger', '10380561', 'Sistem Informasi', 3.67, '[\"Struktur Data\",\"Manajemen Proyek TI\",\"Sistem Operasi\",\"Jaringan Komputer\",\"Kalkulus Dasar\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(24, 'Johann Barton', '10962007', 'Desain Komunikasi Visual', 3.94, '[\"Kecerdasan Buatan\",\"Sistem Operasi\",\"Jaringan Komputer\",\"Kalkulus Dasar\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(25, 'Mrs. Alexane Friesen Sr.', '10784176', 'Akuntansi', 2.77, '[\"Jaringan Komputer\",\"Kecerdasan Buatan\",\"Manajemen Proyek TI\",\"Struktur Data\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(26, 'Jerod Watsica MD', '10554790', 'Manajemen Bisnis', 3.03, '[\"Basis Data\",\"Jaringan Komputer\",\"Sistem Operasi\",\"Kalkulus Dasar\",\"Manajemen Proyek TI\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(27, 'Guido Hilpert DDS', '10599215', 'Teknik Informatika', 2.81, '[\"Kecerdasan Buatan\",\"Jaringan Komputer\",\"Struktur Data\"]', '2025-11-26 07:46:31', '2025-11-26 07:46:31'),
(28, 'Hattie Lynch', '10149057', 'Sistem Informasi', 3.76, '[\"Basis Data\",\"Pemrograman Web\",\"Sistem Operasi\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(29, 'Lola Aufderhar', '10492221', 'Teknik Informatika', 2.85, '[\"Basis Data\",\"Kecerdasan Buatan\",\"Sistem Operasi\",\"Kalkulus Dasar\",\"Pemrograman Web\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(30, 'Mr. Orland McKenzie', '10485249', 'Teknik Informatika', 3.87, '[\"Pemrograman Web\",\"Manajemen Proyek TI\",\"Struktur Data\",\"Basis Data\",\"Kalkulus Dasar\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(31, 'Francesco Witting', '10023911', 'Manajemen Bisnis', 3.02, '[\"Basis Data\",\"Manajemen Proyek TI\",\"Pemrograman Web\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(32, 'Margaret Hintz', '10136384', 'Manajemen Bisnis', 3.52, '[\"Kecerdasan Buatan\",\"Kalkulus Dasar\",\"Manajemen Proyek TI\",\"Struktur Data\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(33, 'Myrtle Lynch V', '10182163', 'Manajemen Bisnis', 3.50, '[\"Pemrograman Web\",\"Manajemen Proyek TI\",\"Kecerdasan Buatan\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(34, 'Juliet Ankunding', '10977641', 'Akuntansi', 3.83, '[\"Jaringan Komputer\",\"Kecerdasan Buatan\",\"Struktur Data\",\"Kalkulus Dasar\",\"Sistem Operasi\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(35, 'Pierce Ernser', '10762914', 'Teknik Informatika', 3.88, '[\"Basis Data\",\"Kecerdasan Buatan\",\"Kalkulus Dasar\",\"Manajemen Proyek TI\",\"Pemrograman Web\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(36, 'Peyton Little', '10938775', 'Sistem Informasi', 2.78, '[\"Jaringan Komputer\",\"Pemrograman Web\",\"Kalkulus Dasar\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(37, 'Miss Ilene Lang', '10594349', 'Sistem Informasi', 3.84, '[\"Kecerdasan Buatan\",\"Struktur Data\",\"Sistem Operasi\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(38, 'Mr. Guy McLaughlin', '10945125', 'Akuntansi', 3.22, '[\"Kecerdasan Buatan\",\"Basis Data\",\"Manajemen Proyek TI\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(39, 'Dr. Forrest Grimes', '10476497', 'Akuntansi', 3.64, '[\"Kecerdasan Buatan\",\"Basis Data\",\"Pemrograman Web\",\"Kalkulus Dasar\",\"Jaringan Komputer\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(40, 'Kenton Okuneva V', '10594792', 'Akuntansi', 2.76, '[\"Struktur Data\",\"Pemrograman Web\",\"Sistem Operasi\",\"Kalkulus Dasar\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(41, 'Prof. Walker Watsica III', '10693070', 'Manajemen Bisnis', 3.50, '[\"Manajemen Proyek TI\",\"Sistem Operasi\",\"Kecerdasan Buatan\",\"Basis Data\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(42, 'Dorcas Armstrong Jr.', '10313750', 'Desain Komunikasi Visual', 3.74, '[\"Kecerdasan Buatan\",\"Manajemen Proyek TI\",\"Jaringan Komputer\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(43, 'Prof. Irwin Mertz IV', '10842501', 'Teknik Informatika', 3.14, '[\"Sistem Operasi\",\"Basis Data\",\"Jaringan Komputer\",\"Kalkulus Dasar\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(44, 'Prof. Jeramie Monahan', '10558885', 'Akuntansi', 3.34, '[\"Pemrograman Web\",\"Basis Data\",\"Jaringan Komputer\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(45, 'Lacy Wiegand', '10707690', 'Teknik Informatika', 2.80, '[\"Struktur Data\",\"Kalkulus Dasar\",\"Jaringan Komputer\",\"Basis Data\",\"Kecerdasan Buatan\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(46, 'Mrs. Lessie Kautzer', '10272039', 'Sistem Informasi', 3.55, '[\"Jaringan Komputer\",\"Manajemen Proyek TI\",\"Basis Data\",\"Kalkulus Dasar\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(47, 'Billie Heaney', '10545680', 'Desain Komunikasi Visual', 3.26, '[\"Jaringan Komputer\",\"Manajemen Proyek TI\",\"Kecerdasan Buatan\",\"Pemrograman Web\",\"Kalkulus Dasar\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(48, 'General Hartmann', '10858501', 'Akuntansi', 3.08, '[\"Basis Data\",\"Manajemen Proyek TI\",\"Sistem Operasi\",\"Kecerdasan Buatan\",\"Kalkulus Dasar\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(49, 'Raul Cassin', '10659858', 'Akuntansi', 3.90, '[\"Kalkulus Dasar\",\"Struktur Data\",\"Manajemen Proyek TI\",\"Sistem Operasi\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32'),
(50, 'Viviane Pfeffer', '10173792', 'Teknik Informatika', 3.49, '[\"Struktur Data\",\"Pemrograman Web\",\"Basis Data\"]', '2025-11-26 07:46:32', '2025-11-26 07:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Administrator', 'riomukti583@gmail.com', 'admin', NULL, '$2y$12$RpMAkRg6GKTH6Bb7W7K2GOWIQ8FWjmhMn.W4T7jaMPiboJjgonDuu', 'CzGGMG8HxVowXqUMUbxyUFc8kLd7anXySM61UgdaqKjeyTlTXd7yhK6yujRO', '2025-12-20 22:16:29', '2025-12-23 06:28:08'),
(6, 'Rio mukti setyawan', 'dosen21@gmail.com', 'user', NULL, '$2y$12$.UiOTolZSqRg6tz1ggzuu.7KBd0kihBnV2/iDl4T5YScZnbgR96Dq', NULL, '2025-12-20 22:34:42', '2025-12-20 22:34:42'),
(7, 'Romi Arifiansyah', 'romi@gmail.com', 'user', NULL, '$2y$12$LGXJqoetzsAtEbtyWxUvuOZ4DfGPDNnvjq5GKmIJhL1R.fRLPOrHm', NULL, '2025-12-23 04:14:19', '2025-12-23 04:14:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensis_mahasiswa_id_foreign` (`mahasiswa_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswas_nim_unique` (`nim`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  ADD KEY `personal_access_tokens_expires_at_index` (`expires_at`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_nim_unique` (`nim`);

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
-- AUTO_INCREMENT for table `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensis`
--
ALTER TABLE `absensis`
  ADD CONSTRAINT `absensis_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
