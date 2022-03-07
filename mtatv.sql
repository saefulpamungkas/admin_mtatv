-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 07:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtatv`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `video_jihadpagi`
--

CREATE TABLE `video_jihadpagi` (
  `id` int(11) NOT NULL,
  `judul_video` varchar(255) NOT NULL,
  `link_video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_jihadpagi`
--

INSERT INTO `video_jihadpagi` (`id`, `judul_video`, `link_video`) VALUES
(1, 'Jihad Pagi Edisi 06/02/2022 Penyebab Kerasnya Hati (2) Full', '<iframe width=\"280\" height=\"152\" src=\"https://www.youtube.com/embed/Xl-VvPA34YY\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, 'Jihad Pagi Edisi 30/01/2022 Penyebab Kerasnya Hati (1) Full', '<iframe width=\"280\" height=\"152\" src=\"https://www.youtube.com/embed/lORmOYzAVQc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(4, 'dsddsd', 'https://youtu.be/8GmuWNrAZBw?t=89'),
(5, 'dfdffdf', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/8GmuWNrAZBw?start=89\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></ifram');

-- --------------------------------------------------------

--
-- Table structure for table `video_komentar`
--

CREATE TABLE `video_komentar` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(500) NOT NULL,
  `link_video` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_komentar`
--

INSERT INTO `video_komentar` (`id`, `pertanyaan`, `link_video`) VALUES
(1, 'Apakah babi itu haram?', '<iframe width=\"280\" height=\"152\" src=\"https://www.youtube.com/embed/wzT193etN4A?start=20\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, 'Apa hukumnya pacaran dalam islam?', '<iframe width=\"280\" height=\"152\" src=\"https://www.youtube.com/embed/j31mpk-T5S8?start=3426\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `video_populer`
--

CREATE TABLE `video_populer` (
  `id` int(11) NOT NULL,
  `judul_video` varchar(255) NOT NULL,
  `link_video` varchar(255) NOT NULL,
  `waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_populer`
--

INSERT INTO `video_populer` (`id`, `judul_video`, `link_video`, `waktu`) VALUES
(1, 'Jihad Pagi Edisi 20/02/2022 Full', '<iframe width=\"280\" height=\"152\" src=\"https://www.youtube.com/embed/SXG4y-egje8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0),
(2, 'Jihad Pagi Edisi 13/02/2022 Penyebab Kerasnya Hati (3) Full', '<iframe width=\"280\" height=\"152\" src=\"https://www.youtube.com/embed/9SD7MRNUCq8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_jihadpagi`
--
ALTER TABLE `video_jihadpagi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_komentar`
--
ALTER TABLE `video_komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_populer`
--
ALTER TABLE `video_populer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `video_jihadpagi`
--
ALTER TABLE `video_jihadpagi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video_komentar`
--
ALTER TABLE `video_komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video_populer`
--
ALTER TABLE `video_populer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
