-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2024 pada 13.38
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
-- Database: `belajar5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_04_19_070104_produk', 1),
(6, '2024_03_28_022023_produk', 2),
(7, '2024_05_24_080317_transactiondetails', 3);

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idProduk` text NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `idProduk`, `nama_produk`, `image`, `detail`, `harga`, `created_at`, `updated_at`) VALUES
(18, 'PRD-001', 'Baju PGRI Batik Pria', 'produk/2024-05-25pgri1.jpg', 'Material Berkualitas: Dibuat dari bahan katun premium yang lembut dan nyaman dipakai sepanjang hari, serta mudah perawatannya.', 120000.00, '2024-05-23 23:22:22', '2024-05-25 09:36:33'),
(19, 'PRD-002', 'Baju PGRI Batik Wanita', 'produk/2024-05-25pgri2.jpg', 'Material Berkualitas: Dibuat dari bahan katun premium yang lembut dan nyaman dipakai sepanjang hari, serta mudah perawatannya.', 125000.00, '2024-05-25 05:01:51', '2024-05-25 09:36:48'),
(20, 'PRD-003', 'Baju KOPRI Batik Pria', 'produk/korpri1.jpg', 'Material Berkualitas Tinggi: Terbuat dari bahan poliester dan katun berkualitas yang nyaman dipakai, tahan lama, dan mudah perawatannya.', 70000.00, '2024-05-25 09:36:19', '2024-05-25 09:36:19'),
(21, 'PRD-004', 'Baju KORPRI Wanita', 'produk/korpri2.jpg', 'Material Berkualitas Tinggi: Terbuat dari bahan poliester dan katun berkualitas yang nyaman dipakai, tahan lama, dan mudah perawatannya.', 90000.00, '2024-05-25 09:37:38', '2024-05-25 09:37:38'),
(22, 'PRD-005', 'Baju PNS Pria', 'produk/pns.jpg', 'Material Premium: Dibuat dari bahan campuran poliester dan katun berkualitas tinggi yang nyaman dipakai sepanjang hari, mudah dirawat, dan tahan lama.', 200000.00, '2024-05-25 09:44:02', '2024-05-25 09:44:02'),
(23, 'PRD-006', 'Kemeja Polos Lengan Panjang', 'produk/polospanjang.jpg', 'Bahan Berkualitas: Terbuat dari katun premium, kemeja ini memberikan kenyamanan maksimal dan sirkulasi udara yang baik, menjaga Anda tetap segar sepanjang hari.', 150000.00, '2024-05-25 23:59:10', '2024-05-26 00:00:08'),
(24, 'PRD-007', 'Kemeja Polos Lengan Pendek', 'produk/putihpendek.jpg', 'Bahan Berkualitas: Terbuat dari katun premium, kemeja ini memberikan kenyamanan maksimal dan sirkulasi udara yang baik, menjaga Anda tetap segar sepanjang hari.', 150000.00, '2024-05-25 23:59:48', '2024-05-25 23:59:48'),
(25, 'PRD-008', 'Celana Panjang', 'produk/celana-panjang.jpg', 'Desain Modern: Dengan potongan yang pas dan desain minimalis, celana panjang ini memberikan tampilan yang segar dan kasual.', 100000.00, '2024-05-26 00:01:26', '2024-05-26 00:01:26'),
(26, 'PRD-009', 'Rok Perempuan', 'produk/rok.jpg', 'Desain Modern: Dengan potongan yang pas dan desain minimalis, rok ini memberikan tampilan yang segar dan kasual.', 150000.00, '2024-05-26 00:03:12', '2024-05-26 00:03:12'),
(27, 'PRD-010', 'Celana PNS', 'produk/celanapns.jpg', 'Desain Modern: Dengan potongan yang pas dan desain minimalis, celana PNS ini memberikan tampilan yang segar dan kasual.', 150000.00, '2024-05-26 00:05:15', '2024-05-26 00:05:15'),
(28, 'PRD-011', 'Rok PNS', 'produk/rokpns.jpg', 'Desain Modern: Dengan potongan yang pas dan desain minimalis, rok PNS ini memberikan tampilan yang segar dan kasual.', 180000.00, '2024-05-26 00:05:46', '2024-05-26 00:05:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transactiondetails`
--

CREATE TABLE `transactiondetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idTransaksi` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `idProduk` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `size` varchar(155) NOT NULL,
  `name_produk` varchar(200) NOT NULL,
  `jumlah` int(10) UNSIGNED NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `notelp` bigint(147) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transactiondetails`
--

INSERT INTO `transactiondetails` (`id`, `idTransaksi`, `name`, `idProduk`, `image`, `size`, `name_produk`, `jumlah`, `harga`, `metode`, `alamat`, `notelp`, `created_at`, `updated_at`) VALUES
(1, 'TRNSP-0001', 'User', 'PRD-002', 'produk/2024-05-25pgri2.jpg', 'XL', 'Baju PGRI Batik Wanita', 12, 1680000.00, 'Dana', 'Jl.Simp Gusti VII', 895338701184, '2024-05-26 00:55:02', '2024-05-26 00:55:02'),
(2, 'TRNSP-002', 'User', 'PRD-009', 'produk/rok.jpg', 'XL', 'Rok Perempuan', 12, 1980000.00, 'Dana', 'Jl.Simp Gusti VII', 895338701184, '2024-05-26 00:56:36', '2024-05-26 00:56:36'),
(3, 'TRNSP-003', 'User', 'PRD-003', 'produk/korpri1.jpg', 'XL', 'Baju KOPRI Batik Pria', 111, 9435000.00, 'Ovo', 'Jl.Antasan', 895338701184, '2024-05-26 16:10:12', '2024-05-26 16:10:12'),
(4, 'TRNSP-004', 'Admin', 'PRD-003', 'produk/korpri1.jpg', 'XXL', 'Baju KOPRI Batik Pria', 1, 90000.00, 'Gopay', 'Jln jalan', 8436978774, '2024-05-26 16:30:46', '2024-05-26 16:30:46'),
(5, 'TRNSP-005', 'Admin', 'PRD-002', 'produk/2024-05-25pgri2.jpg', 'XL', 'Baju PGRI Batik Wanita', 2, 125000.00, 'Spay', 'nqqklnnqs', 99902829, '2024-05-26 18:04:08', '2024-05-26 18:04:08'),
(6, 'TRNSP-006', 'Admin', 'PRD-003', 'produk/korpri1.jpg', 'XXL', 'Baju KOPRI Batik Pria', 1, 90000.00, 'Dana', 'nqqklnnqs', 8436978774, '2024-05-26 18:05:41', '2024-05-26 18:05:41'),
(7, 'TRNSP-007', 'Admin', 'PRD-003', 'produk/korpri1.jpg', 'M', 'Baju KOPRI Batik Pria', 3, 225000.00, 'Dana', 'Jl.Antasan', 8345678923, '2024-05-26 18:10:44', '2024-05-26 18:10:44'),
(8, 'TRNSP-008', '12345678', 'PRD-003', 'produk/korpri1.jpg', 'L', 'Baju KOPRI Batik Pria', 1, 80000.00, 'Dana', 'Jl.Antasan', 8436978774, '2024-05-26 20:19:09', '2024-05-26 20:19:09'),
(9, 'TRNSP-009', 'Admin', 'PRD-002', 'produk/2024-05-25pgri2.jpg', 'XXL', 'Baju PGRI Batik Wanita', 12, 1740000.00, 'Dana', 'Jl.Antasan', 8436978774, '2024-05-26 22:29:50', '2024-05-26 22:29:50'),
(12, 'TRNSP-010', '12345678', 'PRD-001', 'produk/2024-05-25pgri1.jpg', 'L', 'Baju PGRI Batik Pria', 3, 390000.00, 'Dana', 'Jl.Antasan', 8436978774, '2024-05-26 23:43:24', '2024-05-26 23:43:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin@gmail.com', NULL, '$2y$12$s6rckjTI0ihe6KIHi9WNu.A3I7rzRIDKytwl75wVZqts4NA3HT63.', 'admin', NULL, '2024-04-18 23:26:41', '2024-04-18 23:26:41'),
(3, 'User', 'User@gmail.com', NULL, '$2y$12$Jdnn8Z9JEArGzrjR7JxnxuqOogq2AJ4j3Qcr8xkUrNctdPmAyCSa.', 'user', NULL, '2024-05-05 18:03:21', '2024-05-05 18:03:21'),
(4, '12345678', '12345678@gmail.com', NULL, '$2y$12$O86mXEdAwgTiRK1IIdVccOSg7JWKr6/Orlebek7A.0YuJ95/mgwXy', 'user', NULL, '2024-05-05 18:04:55', '2024-05-25 23:27:16'),
(7, 'Egalita', 'egalita.lya23@smk.belajar.id', NULL, '$2y$12$tm9Nk/fCisSuxNUtgGmCuuNeWD2tpbhsvja1BXYAzHQCdAwxw/6M2', 'user', NULL, '2024-05-26 18:13:02', '2024-05-26 18:13:02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transactiondetails`
--
ALTER TABLE `transactiondetails`
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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `transactiondetails`
--
ALTER TABLE `transactiondetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
