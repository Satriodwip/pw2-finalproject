-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2025 pada 09.50
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrental`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `type_id` int(11) NOT NULL,
  `cost_per_day` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `license_plate` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cars`
--

INSERT INTO `cars` (`id`, `name`, `photo`, `type_id`, `cost_per_day`, `year`, `license_plate`, `created_at`, `updated_at`) VALUES
(1, 'Brio', 'car-1.jpg', 1, 300000, 2020, 'BH 151 TT', '2025-06-12 08:20:37', '2025-06-12 08:20:37'),
(2, 'Fortuner', 'car-2.jpg', 2, 700000, 2022, 'B 4 BI', '2025-06-12 08:20:37', '2025-06-12 08:20:37'),
(3, 'HRV', 'car-3.jpg', 3, 500000, 2021, 'B 12 EE', '2025-06-12 08:20:37', '2025-06-12 08:20:37'),
(4, 'Pajero', 'car-4.jpg', 2, 700000, 2022, 'B 45 RI', '2025-06-12 08:20:37', '2025-06-12 08:20:37'),
(5, 'Alphard', 'car-5.jpg', 4, 800000, 2023, 'B 175 RW', '2025-06-12 08:20:37', '2025-06-12 08:20:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `loans`
--

CREATE TABLE `loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `loan_date` date NOT NULL,
  `return_date` date NOT NULL,
  `total_cost` int(11) NOT NULL,
  `status` enum('DP','Lunas') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `loans`
--

INSERT INTO `loans` (`id`, `car_id`, `user_id`, `loan_date`, `return_date`, `total_cost`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-10-10', '2023-10-12', 900000, 'Lunas', '2025-06-12 08:20:40', '2025-06-12 08:20:40'),
(2, 2, 2, '2023-08-22', '2023-08-21', 1400000, 'Lunas', '2025-06-12 08:20:40', '2025-06-12 08:20:40'),
(3, 3, 3, '2024-07-07', '2024-07-08', 1000000, 'DP', '2025-06-12 08:20:40', '2025-06-12 08:20:40'),
(4, 4, 4, '2024-06-15', '2024-06-18', 2800000, 'Lunas', '2025-06-12 08:20:40', '2025-06-12 08:20:40'),
(5, 5, 5, '2024-07-01', '2024-07-02', 1600000, 'Lunas', '2025-06-12 08:20:40', '2025-06-12 08:20:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '2024_07_06_074345_create_cars_table', 1),
(4, '2024_07_06_074415_create_types_table', 1),
(5, '2024_07_06_074439_create_loans_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
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
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('bbHBljBJ1bXWpaVraeNBNrrNUuElCd34KxKZvFUH', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSjdaWnNOTml5Wk9kSUNjM25qVUpJUGxtWkJYR2IxQ3JiVnNEaDQ5bSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2FucyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1749742529);

-- --------------------------------------------------------

--
-- Struktur dari tabel `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `types`
--

INSERT INTO `types` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'LCGC', 'Memiliki kapasitas 4 orng dengan bagasi 18lt, konsumsi bahan bakar menggunakan Pertalite/Pertamax.', '2025-06-12 08:20:37', '2025-06-12 08:20:37'),
(2, 'SUV', 'Memiliki kapasitas 7 orng dengan bagasi 30lt, konsumsi bahan bakar menggunakan Pertamina Dex/Dexalite.', '2025-06-12 08:20:37', '2025-06-12 08:20:37'),
(3, 'Sedan', 'Memiliki kapasitas 4 orng dengan bagasi 18lt, konsumsi bahan bakar menggunakan Pertalite/Pertamax.', '2025-06-12 08:20:37', '2025-06-12 08:20:37'),
(4, 'MPV', 'kendaraan multi guna. Kendaraan MPV sendiri merupakan salah satu kendaraan yang memiliki fungsi utama yaitu mengangkut penumpang maupun barang.', '2025-06-12 08:20:37', '2025-06-12 08:20:37'),
(5, 'Bus', 'kendaraan darat yang dirancang untuk mengangkut banyak penumpang. Bus dapat memiliki kapasitas hingga 30 penumpang.', '2025-06-12 08:20:37', '2025-06-12 08:20:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Achmad Fauzi', 'Oji', 'oji123@gmail.com', NULL, '$2y$12$.9pcE6JntSyT1qjGdsP21uarmH5R6HJFUI3s5cnHf0yPl35k2DMJa', NULL, '2025-06-12 08:20:38', '2025-06-12 08:20:38'),
(2, 'Satrio Dwi Pujianto', 'Iyo', 'iyaww02@gmail.com', NULL, '$2y$12$Gg8k4nE7y34oGyVYfrANFeqmkZMW6hPSLQ6QDqZoajS.VQ3b8vAdy', NULL, '2025-06-12 08:20:38', '2025-06-12 08:20:38'),
(3, 'Ilham Rava Syah Putra', 'Rav', 'ravaa03gmail.com', NULL, '$2y$12$1DIifF6L.m2pRMfc/KOXFeCxlr3TZxGvn4spYko3rmcIYYj0V2Mki', NULL, '2025-06-12 08:20:39', '2025-06-12 08:20:39'),
(4, 'Fadhlur Rachman Suwandi', 'Man', 'rachman04@gmail.com', NULL, '$2y$12$8y7OwIROLiyvQr04uHMr6OyelbecMQkYfVmBfuCYy/FPtT.J8iG6K', NULL, '2025-06-12 08:20:39', '2025-06-12 08:20:39'),
(5, 'Ahmad Gopal', 'Gopal', 'gopal12@gmail.com', NULL, '$2y$12$UEhIjLxLfQhy9g.GFmKkGuuQbo3C5HB/HgNuv0BZSgINJ01IifZhO', NULL, '2025-06-12 08:20:40', '2025-06-12 08:20:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
