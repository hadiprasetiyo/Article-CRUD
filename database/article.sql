-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2024 at 10:39 AM
-- Server version: 11.3.2-MariaDB-log
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `file` varchar(200) DEFAULT NULL,
  `date` timestamp(5) NULL DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `title`, `file`, `date`, `kategori`) VALUES
(8, 'hadiiyok', 'iyok.jpg', '2024-05-10 14:00:19.00000', 'Foto'),
(9, 'Hadi Prasetiyo', 'hadiiyok.JPG', '2024-05-10 14:00:50.00000', 'Foto'),
(10, 'Kucing', 'Screenshot_2022-05-22-17-36-39-09_22e4250240c136c826b8a3b1264b092d (2).jpg', '2024-05-10 14:01:38.00000', 'Hewan'),
(11, 'Fanart', 'foto.jpg', '2024-05-10 14:02:08.00000', 'Avatar'),
(12, 'Vallery', 'vallery.jpg', '2024-05-10 14:02:39.00000', 'Avatar'),
(13, 'Cherry', 'unnamed.jpg', '2024-05-10 14:04:24.00000', 'Buah'),
(14, 'Hadi', '3AB0825E-7A3C-4CDA-AEE5-91E8F219C47B.JPG', '2024-05-10 14:07:02.00000', 'Foto'),
(15, 'Raiden', 'hadiiyok.jpg', '2024-05-10 14:07:39.00000', 'Avatar'),
(16, 'Wallpaper Kucing', 'wallpaperflare.com_wallpaper (2).jpg', '2024-05-10 14:10:21.00000', 'Wallpaper'),
(17, 'Singa', 'singa.jpg', '2024-05-10 14:13:38.00000', 'Hewan'),
(18, '7DS', 'deadlysins.webp', '2024-05-10 14:15:54.00000', 'Lambang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
