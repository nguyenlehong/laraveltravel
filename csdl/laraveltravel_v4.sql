-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 05:00 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveltravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '1', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chuyen_xe`
--

CREATE TABLE `chuyen_xe` (
  `chuyexe_id` int(11) UNSIGNED NOT NULL,
  `lotrinh_id` int(11) UNSIGNED NOT NULL,
  `xe_id` int(11) UNSIGNED NOT NULL,
  `ngay` date NOT NULL,
  `gio` text NOT NULL,
  `trang_thai` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chuyen_xe`
--

INSERT INTO `chuyen_xe` (`chuyexe_id`, `lotrinh_id`, `xe_id`, `ngay`, `gio`, `trang_thai`, `created_at`, `updated_at`) VALUES
(14, 8, 16, '2023-02-12', '07:00', 'hien', '2023-02-11 20:28:15', '2023-02-11 20:28:15'),
(15, 9, 17, '2023-02-12', '07:15', 'hien', '2023-02-11 20:28:47', '2023-02-11 20:28:47'),
(16, 10, 18, '2023-02-12', '07:30', 'hien', '2023-02-11 20:29:20', '2023-02-11 20:29:20'),
(17, 8, 16, '2023-02-13', '14:00', 'hien', '2023-02-11 20:30:21', '2023-02-11 20:30:21');

-- --------------------------------------------------------

--
-- Table structure for table `lo_trinh`
--

CREATE TABLE `lo_trinh` (
  `lotrinh_id` int(11) UNSIGNED NOT NULL,
  `noi_bat_dau` text NOT NULL,
  `noi_ket_thuc` text NOT NULL,
  `thoi_gian` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lo_trinh`
--

INSERT INTO `lo_trinh` (`lotrinh_id`, `noi_bat_dau`, `noi_ket_thuc`, `thoi_gian`, `gia`, `created_at`, `updated_at`) VALUES
(8, 'Tiền Giang', 'Sài Gòn', 2, 200000, '2023-02-11 20:25:08', '2023-02-11 20:25:08'),
(9, 'Tiền Giang', 'Cà Mau', 5, 400000, '2023-02-11 20:26:15', '2023-02-11 20:26:15'),
(10, 'Tiền Giang', 'Bạc Liêu', 3, 250000, '2023-02-11 20:26:59', '2023-02-11 20:26:59'),
(11, 'Tiền Giang', 'An Giang', 4, 300000, '2023-02-11 20:27:41', '2023-02-11 20:27:41');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_14_144851_user', 1),
(6, '2023_01_15_072546_admin', 1),
(7, '2023_02_03_040552_ve', 2),
(8, '2023_02_03_043709_create_xe_table', 3),
(9, '2023_02_03_080341_create_lo_trinh_table', 4),
(10, '2023_02_03_144406_create_chuyen_xe_table', 5),
(11, '2023_02_05_062231_create_ve_table', 6),
(12, '2023_02_05_063221_create_ve_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_email`, `user_password`, `created_at`, `updated_at`) VALUES
(14, 'user1@gmail.com', '1', '2023-02-11 20:31:48', '2023-02-11 20:31:48');

-- --------------------------------------------------------

--
-- Table structure for table `ve`
--

CREATE TABLE `ve` (
  `ve_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `chuyexe_id` int(11) UNSIGNED NOT NULL,
  `ten_user` text NOT NULL,
  `sdt` int(255) NOT NULL,
  `so_luong_ghe_dat` int(11) NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `diem_dn` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ve`
--

INSERT INTO `ve` (`ve_id`, `user_id`, `chuyexe_id`, `ten_user`, `sdt`, `so_luong_ghe_dat`, `tong_tien`, `diem_dn`, `created_at`, `updated_at`) VALUES
(30, 14, 14, 'Nguyên', 984512367, 2, 400000, 'bến xe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `xe`
--

CREATE TABLE `xe` (
  `xe_id` int(11) UNSIGNED NOT NULL,
  `so_xe` int(11) NOT NULL,
  `bien_so` text NOT NULL,
  `so_luong_ghe` int(11) NOT NULL,
  `ghi_chu` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `xe`
--

INSERT INTO `xe` (`xe_id`, `so_xe`, `bien_so`, `so_luong_ghe`, `ghi_chu`, `created_at`, `updated_at`) VALUES
(16, 31, '63B - 1234.55', 29, 'xe mới', '2023-02-11 20:22:32', '2023-02-11 20:22:32'),
(17, 32, '63B - 686.68', 29, 'xe mới', '2023-02-11 20:23:12', '2023-02-11 20:23:12'),
(18, 33, '63B - 567.88', 16, 'xe mới', '2023-02-11 20:23:51', '2023-02-11 20:23:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `chuyen_xe`
--
ALTER TABLE `chuyen_xe`
  ADD PRIMARY KEY (`chuyexe_id`),
  ADD KEY `cx_xe` (`xe_id`),
  ADD KEY `cx_lotrinh` (`lotrinh_id`);

--
-- Indexes for table `lo_trinh`
--
ALTER TABLE `lo_trinh`
  ADD PRIMARY KEY (`lotrinh_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `ve`
--
ALTER TABLE `ve`
  ADD PRIMARY KEY (`ve_id`),
  ADD KEY `ve_cx` (`chuyexe_id`),
  ADD KEY `ve_user` (`user_id`);

--
-- Indexes for table `xe`
--
ALTER TABLE `xe`
  ADD PRIMARY KEY (`xe_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chuyen_xe`
--
ALTER TABLE `chuyen_xe`
  MODIFY `chuyexe_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lo_trinh`
--
ALTER TABLE `lo_trinh`
  MODIFY `lotrinh_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ve`
--
ALTER TABLE `ve`
  MODIFY `ve_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `xe`
--
ALTER TABLE `xe`
  MODIFY `xe_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chuyen_xe`
--
ALTER TABLE `chuyen_xe`
  ADD CONSTRAINT `cx_lotrinh` FOREIGN KEY (`lotrinh_id`) REFERENCES `lo_trinh` (`lotrinh_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cx_xe` FOREIGN KEY (`xe_id`) REFERENCES `xe` (`xe_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ve`
--
ALTER TABLE `ve`
  ADD CONSTRAINT `ve_cx` FOREIGN KEY (`chuyexe_id`) REFERENCES `chuyen_xe` (`chuyexe_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ve_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
