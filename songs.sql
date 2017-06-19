-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 20, 2017 at 12:54 AM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `album` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artwork` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `artist`, `album`, `genre`, `artwork`, `video`, `created_at`, `updated_at`) VALUES
(20, 'DNA.', 'Kendrick Lamar', 'DAMN.', 'Hip-Hop/Rap', 'http://www.tinymixtapes.com/sites/default/files/1704/kendrick-lamar-damn_1.jpg', 'NLZRYQMLDW4', '2017-04-29 00:36:52', '2017-04-29 00:36:52'),
(21, 'HUMBLE.', 'Kendrick Lamar', 'DAMN.', 'Hip-Hop/Rap', 'http://www.tinymixtapes.com/sites/default/files/1704/kendrick-lamar-damn_1.jpg', 'tvTRZJ-4EyI', '2017-04-29 00:38:20', '2017-04-29 00:38:20'),
(22, 'Tookie Knows II', 'ScHoolBoy Q', 'Blank Face', 'Hip-Hop/Rap', 'http://thesource.com/wp-content/uploads/2016/07/Blank-Face-LP.jpg', 'YSb6-ppf7fw', '2017-04-29 00:39:49', '2017-04-29 00:39:49'),
(23, 'Love Galore (feat. Travis Scott)', 'SZA', 'Love Galore (feat. Travis Scott) - Single', 'R&B', 'http://i1.sndcdn.com/artworks-000202415974-06g7j8-t500x500.jpg', '3OteKsbBeas', '2017-04-29 00:41:07', '2017-04-29 00:41:07'),
(24, '4r Da Squaw', 'Isaiah Rashad', 'The Sun\'s Tirade', 'Hip-Hop/Rap', 'http://cdn4.pitchfork.com/albums/23774/621d6053.jpg', 'nppKPgdc_u0', '2017-04-29 00:42:16', '2017-04-29 00:42:16'),
(25, 'Huey Knew', 'Ab-Soul', 'Do What Thou Wilt', 'Hip-Hop/Rap', 'https://upload.wikimedia.org/wikipedia/en/f/fb/Ab-SoulDWTW.jpg', 'mS1P75OPnRE', '2017-04-29 00:43:25', '2017-04-29 00:43:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
