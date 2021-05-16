-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 07:42 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musica`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `artist` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `artworkPath` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `title`, `artist`, `genre`, `artworkPath`) VALUES
(1, 'Aashiq Banaya Aapne', 4, 2, 'assets/images/artwork/Aashiq.png'),
(2, 'Baarish', 3, 7, 'assets/images/artwork/Baarish.png'),
(3, 'Badri Ki Dulhania', 4, 2, 'assets/images/artwork/BadriKi.png'),
(4, 'Channa Mereya', 6, 3, 'assets/images/artwork/Channa.png'),
(5, 'Dangal', 7, 1, 'assets/images/artwork/Dangal.png'),
(6, 'Dil Chhez Tujhe Dedi', 6, 2, 'assets/images/artwork/DilCheez.png'),
(7, 'Dj Wale Babu', 8, 5, 'assets/images/artwork/DjWale.png'),
(8, 'Lahore', 1, 7, 'assets/images/artwork/Lahore.png'),
(9, 'Mard Maratha', 10, 4, 'assets/images/artwork/MardMaratha.png'),
(10, 'Shape of You', 2, 8, 'assets/images/artwork/NoAlbum.png'),
(11, 'Pee Loon', 11, 3, 'assets/images/artwork/PeeLoon.png'),
(12, 'Soch Na Sake', 11, 3, 'assets/images/artwork/SochNaSake.png');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`) VALUES
(1, 'Guru Randhawa'),
(2, 'Ed Sheeran'),
(3, 'Ash King'),
(4, 'Neha Kakkar'),
(5, 'Himesh Reshammiya'),
(6, 'Arijit Singh'),
(7, 'Pritam'),
(8, 'Badshah'),
(9, 'Justin Bieber'),
(10, 'Ajay-Atul'),
(11, 'Tulsi Kumar');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`) VALUES
(1, 'Rock'),
(2, 'Hip_Hop'),
(3, 'Romantic'),
(4, 'Classic'),
(5, 'Rap'),
(6, 'Folk'),
(7, 'Jazz'),
(8, 'Country');

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

CREATE TABLE `playlists` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `dateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `playlistsongs`
--

CREATE TABLE `playlistsongs` (
  `id` int(11) NOT NULL,
  `songId` int(11) NOT NULL,
  `playlistId` int(11) NOT NULL,
  `playlistOrder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `artist` int(11) NOT NULL,
  `album` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `duration` varchar(8) NOT NULL,
  `path` varchar(550) NOT NULL,
  `albumOrder` int(11) NOT NULL,
  `plays` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `artist`, `album`, `genre`, `duration`, `path`, `albumOrder`, `plays`) VALUES
(1, 'Baarish', 3, 2, 7, '04:36', 'assets/music/01 - Baarish - Half Girlfriend [DJMaza.Life]-1.mp3', 1, 2),
(2, 'Lahore', 1, 8, 7, '03:17', 'assets/music/01 - Lahore (320 Kbps) - DownloadMing.SE.mp3', 8, 0),
(3, 'Aashiq Banaya', 4, 1, 2, '03:42', 'assets/music/01 Aashiq Banaya Aapne - Hate Story 4 - 190Kbps.mp3', 1, 3),
(4, 'Badri Ki Dulhaniya', 4, 3, 2, '03:26', 'assets/music/01 Badri Ki Dulhania - Title Track (SongsMp3.Com)-1.mp3', 3, 2),
(5, 'Soch Na Sake', 11, 12, 3, '04:41', 'assets/music/01 Soch Na Sake - Airlift (SongsMp3.Com).mp3', 12, 0),
(6, 'Dil Cheez Tujhe Dedi', 6, 6, 2, '04:41', 'assets/music/02 Dil Cheez Tujhe Dedi (Airlift) (SongsMp3.Com).mp3', 6, 1),
(7, 'Channa Mereya', 6, 4, 3, '04:49', 'assets/music/03 - Channa Mereya - DownloadMing.SE.mp3', 4, 0),
(8, 'Dangal', 7, 5, 1, '04:59', 'assets/music/04 - Dangal - Title Song - DownloadMing.SE.mp3', 5, 1),
(9, 'Dj Wale Babu', 8, 7, 5, '02:50', 'assets/music/Dj Wale Babu - Badshah (DjPunjab.Com).mp3', 7, 3),
(10, 'Mard Maratha', 10, 9, 4, '06:05', 'assets/music/Mard Maratha - Panipat 128 Kbps.mp3', 9, 1),
(11, 'PeeLoon', 11, 11, 3, '04:47', 'assets/music/Pee-Loon (SongsMp3.Com).mp3', 11, 0),
(12, 'Shape of You', 2, 10, 8, '03:53', 'assets/music/Shape of You - Ed Sheeran (DJJOhAL.Com).mp3', 10, 0),
(13, 'BarsoRe-Guru128Kbps.mp3', 2, 2, 5, '05:29', 'assets/music/Barso Re - Guru 128 Kbps.mp3', 2, 9),
(14, 'ProperPatolaOfficial.mp3', 8, 7, 5, '03:00', 'assets/music/Proper Patola Official.mp3', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `signUpDate` datetime NOT NULL,
  `profilePic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `email`, `password`, `signUpDate`, `profilePic`) VALUES
(1, 'djuop1234', 'Deepak', 'Joshi', 'Ramlalhttps@gmail.com', 'a384b6463fc216a5f8ecb6670f86456a', '2021-03-18 00:00:00', 'assets/images/profile-pics/herald.png'),
(2, 'aadi1', 'Aditya', 'Bajaj', 'Asd3@snu.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', '2021-05-15 00:00:00', 'assets/images/profile-pics/head_emerald.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlistsongs`
--
ALTER TABLE `playlistsongs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `playlists`
--
ALTER TABLE `playlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `playlistsongs`
--
ALTER TABLE `playlistsongs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
