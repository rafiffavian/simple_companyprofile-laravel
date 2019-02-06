-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Feb 2019 pada 05.34
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gustoku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `judul`, `description`, `file`, `created_at`, `updated_at`) VALUES
(2, 'OUR STORY', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.', 'public/Aboutupload/QBZVWU3WQzb1eTLS1vbnUc1cTAf4qLjghhiFFTio.jpeg', '2019-01-10 00:10:14', '2019-01-12 03:33:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `address`
--

CREATE TABLE `address` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_tlp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shift2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `address`
--

INSERT INTO `address` (`id`, `no_tlp`, `alamat`, `kecamatan`, `kelurahan`, `kota`, `shift1`, `shift2`, `created_at`, `updated_at`) VALUES
(1, '0888878787878', 'Perumahan Permata Puri', 'Cimanggis', 'Palsi Gunung Selatan', 'Depok', '10:00 AM - 11:00 PM', '11:00 AM - 02:00 AM', '2019-01-26 09:36:51', '2019-01-26 09:36:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chef`
--

CREATE TABLE `chef` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `chef`
--

INSERT INTO `chef` (`id`, `name`, `description`, `file`, `created_at`, `updated_at`) VALUES
(6, 'MEET OUR CHEF', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare.', 'public/chefupload/ef1CuJmiWzuXGT1A4u7JtRCcIUTpr2lBxu7Mc3PR.jpeg', '2019-01-10 00:11:58', '2019-01-10 00:12:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailinformation`
--

CREATE TABLE `detailinformation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `telpon` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `openingOne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `openingTwo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `frontup`
--

CREATE TABLE `frontup` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `frontup`
--

INSERT INTO `frontup` (`id`, `title`, `description`, `created_at`, `updated_at`, `file`, `id_user`) VALUES
(1, 'qqq', 'qqq', '2019-01-21 02:57:21', '2019-01-21 03:24:22', 'public/fileupload/sv6ns8gAlFnAuMVRmekewdZqGkGhLRxyiZ8iTBZL.gif', 1),
(2, 'huhu', 'dasdsa', '2019-01-21 03:33:07', '2019-01-25 22:11:55', 'public/fileupload/JagcdSdFmkyC7ZFUtMSncUuFASsSbszQJGaLJoeb.jpeg', 1),
(3, 'dadsda', 'sdadsadsadasdadasdsadasdasdasdas', '2019-01-28 09:06:13', '2019-01-28 09:06:13', 'public/fileupload/MrQSgnWkp6pGqi2Zv80TwHpAW3MrpSv7zR38AhEO.jpeg', 1),
(4, 'dsadada', 'sdsadsadadsada', '2019-01-28 09:06:31', '2019-01-28 09:06:31', 'public/fileupload/aFQs2vuTAOJUReKLozabNvOZ2EvAb2JMsM2GDS6d.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `listmenu`
--

CREATE TABLE `listmenu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_menu` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_user` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `listmenu`
--

INSERT INTO `listmenu` (`id`, `id_menu`, `name`, `description`, `price`, `created_at`, `updated_at`, `id_user`) VALUES
(1, 1, 'menu', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam.', 10, '2019-01-10 01:30:19', '2019-01-12 03:48:47', 0),
(2, 1, 'Fried Ravioli', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam.', 7, '2019-01-10 05:18:21', '2019-01-10 05:18:21', 0),
(3, 1, 'Wild Mushroom Arancini', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam.', 9, '2019-01-10 05:18:53', '2019-01-10 05:18:53', 0),
(4, 1, 'Mozzarella Sticks', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam', 10, '2019-01-10 05:20:29', '2019-01-10 05:20:29', 0),
(5, 2, 'Roast Stuffed Chicken', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam.', 18, '2019-01-10 05:21:01', '2019-01-10 05:21:01', 0),
(6, 2, 'Chicken & Mushroom Pasta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam.', 20, '2019-01-10 05:21:30', '2019-01-10 05:21:30', 0),
(7, 2, 'Beef Lasagne', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam.', 14, '2019-01-10 05:22:01', '2019-01-10 05:22:01', 0),
(8, 2, 'Chicken Goujons', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam.', 19, '2019-01-10 05:22:30', '2019-01-10 05:22:30', 0),
(13, 1, 'test', 'test', 10, '2019-02-05 02:13:22', '2019-02-05 02:13:22', 2),
(14, 3, 'test', 'test', 10, '2019-02-05 02:28:16', '2019-02-05 02:29:41', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Breakfast & Starters', NULL, NULL),
(2, 'Main Course', NULL, NULL),
(3, 'Dinner', NULL, NULL),
(4, 'Desserts', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE `message` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'rara', 'rara@gmail.com', 'rara', '2019-01-01 16:47:15', '2019-01-01 16:47:15'),
(4, 'kiki', 'kiki@gmail.com', 'ksdasdsadsadsadasdasdas', '2019-01-12 03:57:44', '2019-01-12 03:57:44'),
(5, 'adsa', 'adads', 'sadas', '2019-01-29 20:35:21', '2019-01-29 20:35:21'),
(6, 'dasdas', 'ari@gmail.com', 'dsasadsadas', '2019-01-29 20:35:41', '2019-01-29 20:35:41'),
(7, 'dasdas', 'sadsa', 'asdsad', '2019-01-29 21:12:46', '2019-01-29 21:12:46'),
(8, 'dasdas', 'dsadas', 'dsada', '2019-01-29 21:13:03', '2019-01-29 21:13:03'),
(9, 'dasdsda', 'asdasdas', 'asdadsa', '2019-01-29 21:13:30', '2019-01-29 21:13:30');

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
(1, '2018_12_26_055935_create_video_table', 1),
(2, '2018_12_26_060257_create_about_table', 1),
(3, '2018_12_26_060649_create_menu_table', 1),
(4, '2018_12_26_060932_create_listmenu_table', 1),
(5, '2018_12_26_061329_create_chef_table', 1),
(6, '2018_12_26_063119_create_specialmenu_table', 1),
(7, '2018_12_28_020205_create_message_table', 1),
(8, '2019_01_02_004248_create_users_table', 2),
(9, '2019_01_02_041642_create_frontup_table', 3),
(10, '2019_01_02_115829_create_location_table', 4),
(11, '2019_01_02_133601_update_frontup_table', 5),
(12, '2019_01_08_062052_update_specialmenu_table', 6),
(13, '2019_01_08_063055_update_listmenu_table', 7),
(14, '2019_01_08_063332_update_specialmenu2_table', 8),
(15, '2019_01_12_041322_update_specialmenu3_table', 9),
(16, '2019_01_26_155625_create_address_table', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `specialmenu`
--

CREATE TABLE `specialmenu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_listmenu` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `specialmenu`
--

INSERT INTO `specialmenu` (`id`, `id_listmenu`, `file`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'public/fileupload/xvyoAFZTNjebfSX5tjrWIxO7d03oCAlrhVsclveh.gif', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.', '2019-01-12 02:23:02', '2019-01-12 02:23:02'),
(5, 8, 'public/fileupload/THZH5v2HwvXd8tJ49eicIdpVwp7QEx9aJiaMcWIa.gif', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.', '2019-01-12 02:32:19', '2019-01-12 02:32:19'),
(6, 2, 'public/fileupload/EfruI6gfrqdfIBdzMoeHVAKRjtfJsfWBYEdqmHqE.gif', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.', '2019-01-12 02:39:01', '2019-01-12 03:29:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rafif', 'rafiffavian@yahoo.com', '$2y$10$4Weoxs8sQ20JcBYYglZlruTO7eacLmaAo5OOGrBY.evUKq/R0aV02', 'fdES7pmWjGTSGCFJ9n3EMa1AKD16Hk3K2IyuVEgCLXsqy49QXU3CH7X0iXl4', '2019-01-01 17:48:45', '2019-01-01 17:48:45'),
(2, 'rafiffavian', 'rafif@gmail.com', '$2y$10$IP5sOZZYPOh8AXj1zOKLA.o3yJ7EdZPpaNMDSvE0e5O0ZAXQC5P8.', '6vlsxayiRbvVRHeTjW5hv46WDPlvYDf3a8c4GMjbQt47YGOgkmQ6MF2Geo3N', '2019-01-21 03:34:16', '2019-01-21 03:34:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id`, `file`, `created_at`, `updated_at`) VALUES
(4, 'https://www.youtube.com/embed/nsw0Px-Pho8', '2019-01-09 03:51:17', '2019-01-09 03:51:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chef`
--
ALTER TABLE `chef`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailinformation`
--
ALTER TABLE `detailinformation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontup`
--
ALTER TABLE `frontup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `listmenu`
--
ALTER TABLE `listmenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `listmenu_id_menu_foreign` (`id_menu`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialmenu`
--
ALTER TABLE `specialmenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specialmenu_id_listmenu_foreign` (`id_listmenu`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chef`
--
ALTER TABLE `chef`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detailinformation`
--
ALTER TABLE `detailinformation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `frontup`
--
ALTER TABLE `frontup`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `listmenu`
--
ALTER TABLE `listmenu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `specialmenu`
--
ALTER TABLE `specialmenu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `frontup`
--
ALTER TABLE `frontup`
  ADD CONSTRAINT `frontup_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `specialmenu`
--
ALTER TABLE `specialmenu`
  ADD CONSTRAINT `specialmenu_id_listmenu_foreign` FOREIGN KEY (`id_listmenu`) REFERENCES `listmenu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
