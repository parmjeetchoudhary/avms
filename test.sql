-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8080
-- Generation Time: Aug 01, 2018 at 12:05 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` int(11) NOT NULL,
  `language` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `audio_name` varchar(255) NOT NULL,
  `audio_file` varchar(255) NOT NULL,
  `audio_img` varchar(255) NOT NULL,
  `singer_name` varchar(255) NOT NULL,
  `label_name` varchar(255) NOT NULL,
  `label_image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `language`, `album`, `audio_name`, `audio_file`, `audio_img`, `singer_name`, `label_name`, `label_image`, `description`) VALUES
(1, 'English', 'Across the sky', 'Let me love you', 'Let Me Love You (Mp3Beet.com) - 192Kbps.mp3', 'download (3).jpg', 'Justin bieber', 'dj snake', 'unnamed.jpg', 'perduced by dj snake'),
(2, 'English', 'Higher', 'Closer ft-hasley', 'Closer-(Mr-Jatt.com).mp3', 'download (4).jpg', 'The chain smoker', 't-series', 'unnamed.jpg', 'produced by t-series'),
(4, 'Hindi', 'Bhaggi 2', 'o sathi', 'O Saathi - Baaghi 2_128-(Mr-Song.Com).mp3', 'download (2).jpg', 'Ahmad khan', 't-series', 'unnamed.jpg', 'produced by baghii 2'),
(5, 'Punjabi', 'Ik tare wala', 'Bacpan', 'Bachpan - Ranjit Bawa (DjPunjab.Com).mp3', 'Ik-Tare-Wala-(Album)-Ranjit-Bawa.jpg', 'Ranjit bawa', 't-series', 'unnamed.jpg', 'lyrics and perduced by ranjit bawa'),
(6, 'Punjabi', 'Ik tare wala', 'Phulkari', 'Phulkari - Gippy Grewal (Mr-Punjab.Com).mp3', 'download (10).jpg', 'Gippy grewal', 't-series', 'unnamed.jpg', 'singed ,lyrics.perduced by gippy'),
(7, 'Punjabi', 'Miti da bawa', 'Hath chumme', 'Hath Chumme - Ammy Virk & B Praak.mp3', '67661.png', 'Ammy virk', 't-series', 'unnamed.jpg', 'nothing'),
(8, 'Hindi', 'parmanu', 'Kar har madan fatah', 'Kar Har Maidaan Fateh.mp3', 'download (5).jpg', 'raj kumar haryani', 't-series', 'unnamed.jpg', 'produced by sanju and singed by sukhwinder singh and shreya'),
(9, 'Punjabi', 'new punjabi', 'Prada', 'Prada.mp3', 'images.jpg', 'Satti dhillon', 't-series', 'unnamed.jpg', 'none'),
(10, 'Punjabi', 'new punjabi', 'Rayban', 'Rayban - Himmat Sandhu (DjPunjab.Com).mp3', 'Rayban-Himmat-Sandhu.jpg', 'Himmat sandhu', 't-series', 'unnamed.jpg', 'none'),
(11, 'Hindi', 'new hindi', 'Hai dil mera', 'Hai Dil Ye Mera-(Mr-Jatt.com).mp3', 'download (11).jpg', 'Arjit singh', 't-series', 'unnamed.jpg', 'none'),
(12, 'Hindi', 'new hindi', 'Bhangra ta sajda', 'Bhangra Ta Sajda No One Gives a Damn - Neha Kakkar Romy Shashwat Sachdev (DJJOhAL.Com).mp3', 'Bhangra Ta Sajda (No One Gives a Damn).jpg', 'neha kakar,romy', 't-series', 'unnamed.jpg', 'none'),
(13, 'English', 'new english', 'Good life', 'Good Life - GEazy  Kehlani (DJJOhAL.Com).mp3', 'Good Life.jpg', 'G-easy,galani', 'White hill', 'unnamed (1).jpg', 'none'),
(14, 'English', 'new english', 'Green light', 'Greenlight - Pitbull Flo Rida (DJJOhAL.Com).mp3', 'Greenlight.jpg', 'Pibull', 'White hill', 'unnamed (1).jpg', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `parm`
--

CREATE TABLE `parm` (
  `id` int(5) NOT NULL,
  `name` varchar(34) NOT NULL,
  `adddress` varchar(54) NOT NULL,
  `gender` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parm`
--

INSERT INTO `parm` (`id`, `name`, `adddress`, `gender`) VALUES
(1, 'parmjeet', 'amritsar', 'm'),
(2, 'choudhary', 'pathankot', 'm'),
(3, 'abhishek', 'hosiarpur', 'm'),
(4, 'preteina', 'California 93514, USA', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `name` varchar(34) NOT NULL,
  `father name` varchar(34) NOT NULL,
  `mother name` varchar(34) NOT NULL,
  `email id` varchar(20) NOT NULL,
  `addresss` varchar(54) NOT NULL,
  `phone no` int(14) NOT NULL,
  `d_o_b` date NOT NULL,
  `gender` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`name`, `father name`, `mother name`, `email id`, `addresss`, `phone no`, `d_o_b`, `gender`) VALUES
('parmjeet choudhary', 'rattan chand', 'ravinder kaur', 'parmjeetchoudhary86@', 'hosiarpur', 2147483647, '0000-00-00', 'on'),
('pranav', 'abc', 'def', 'pranav5686@gmail.com', 'ludhiana', 2147483647, '0000-00-00', 'on'),
('ratanjot', 'def', 'abc', 'grewal896@gmail.com', 'paythankot', 2147483647, '0000-00-00', 'on'),
('anish  sharma', 'sabsjasb', 'ajhjashsdjh', 'anish761@outlook.com', 'patiala', 2147483647, '0000-00-00', 'on'),
('aman', 'raman', 'nirmala', 'aman@gmil.com', 'amritsar', 98745621, '0000-00-00', 'on'),
('mkljkjk', 'kkjkj', ';l;', '', '', 0, '0000-00-00', ''),
('mkljkjk', 'kkjkj', ';l;', '', '', 0, '0000-00-00', 'on'),
('mkljkjk', 'kkjkj', ';l;', '', '', 0, '0000-00-00', 'on'),
('', '', '', '', '', 0, '0000-00-00', ''),
('dbms', 'vvfv', 'fvfrfvrvr', 'vfvfvfvfv', 'vfvfvf', 2147483647, '0000-00-00', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `uname`, `phone`, `email`, `password`) VALUES
(1, 'parmjeet choudhary', '9646356748', 'parmjeetchoudhary86@gmail.com', '$2y$10$jmFO3hznj0uIMcAUUpWLsem8q7A0YqCAx97HNhfUAgR0tNp7uSdiW');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `request` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `email`, `u_name`, `request`) VALUES
(1, 'parmjeetchoudhary86@gmail.com', 'parmjeet choudhary', 'please add more songs');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `pageimage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `title`, `discription`, `pageimage`) VALUES
(1, 'home page', 'sql query ', 'procedural language', '3d-wallpaper-full-hd-For-Desktop-Wallpaper.jpg'),
(2, 'choudhary', 'employ record', 'rdgdhjgn ngn gnm hgnmn  bnfhgh ', 'IMG-20180209-WA0007 (nwe.jpg'),
(4, 'web technology', 'PHP', 'dffewfewdewd eedef', 'ban proj.2.png'),
(5, 'project', 'login form', 'gndec', 'wt2.png'),
(6, 'ratanjot', 'singh grewal', 'jagadi jatt', 'Untitled.png');

-- --------------------------------------------------------

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `language` varchar(255) NOT NULL,
  `album` varchar(255) NOT NULL,
  `video_name` varchar(255) NOT NULL,
  `video_file` varchar(255) NOT NULL,
  `video_img` varchar(255) NOT NULL,
  `singer_name` varchar(255) NOT NULL,
  `label_name` varchar(255) NOT NULL,
  `label_img` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `language`, `album`, `video_name`, `video_file`, `video_img`, `singer_name`, `label_name`, `label_img`, `description`) VALUES
(1, 'Punjabi', 'Ik tare wala', 'Dark love', 'D
--
-- Table structure for table `video`
--
ark_Love_-_Sidhu_Moose_Wala.mp4', 'download (8).jpg', 'Sidhu moose wala', 'White hill', 'unnamed (1).jpg', 'singed and written by moose wala'),
(2, 'Punjabi', 'Ik tare wala', 'License', 'License_-_Garry_Natt.mp4', 'download (9).jpg', 'Ninja', 'White hills', 'unnamed (1).jpg', 'witten by moosewala and sing by nnja'),
(3, 'Punjabi', 'Ik tare wala', 'Daru laina pee', 'Daru_Laina_Pee_Deep_Karan_Full_HD.mp4', '25639.jpg', 'Deep karan', 'Whit hills', 'unnamed (1).jpg', 'powered by white hills'),
(4, 'Hindi', 'new hindi', 'mere rashkay quamar', 'mere-rashke-qamar-video-song-download.mp4', 'download (6).jpg', 'Junaad ashgaar', 'White hill', 'unnamed (1).jpg', 'ralised by half girlfriend'),
(6, 'English', 'Ik tare wala', 'I Wanna go', 'videoplayback.mp4', 'default.jpg', 'Justin Bieber ft. The Chainsmokers', 'White hill', 'unnamed (1).jpg', 'none'),
(7, 'Hindi', 'new hindi', 'chann kithan', 'videoplayback (2).mp4', 'download (13).jpg', 'Bhushan kumar', 't-series', 'unnamed.jpg', 'none'),
(8, 'Hindi', 'new hindi', 'Paniyon sa', 'videoplayback (1).mp4', 'download (12).jpg', 'Atif aslam', 'White hill', 'unnamed (1).jpg', 'none'),
(9, 'Hindi', 'new hindi', 'Afreen Afreen', 'videoplayback (3).mp4', 'download (14).jpg', 'Rahat fteh ali khan', 'Cokee studio', 'download.png', 'none'),
(10, 'Punjabi', 'new punjabi', 'Hanju digda', 'Hanju-Digde-A-Kay--Saanvi-Dhiman-360p-(Mr-Jatt.Com).mp4', 'download (15).jpg', 'A-kay', 't-series', 'unnamed.jpg', 'none'),
(11, 'English', 'new english', 'What i am suppose to do', 'What Am I Supposed To Do (DJJOhAL.Com).mp4', '7140.jpg', 'Kashif', 'White hill', 'unnamed (1).jpg', 'none'),
(12, 'English', 'new english', 'shape of you', 'Shape Of You [Official Video] (DJJOhAL.Com).mp4', '3534.jpg', 'Ed sheran', 'White hill', 'unnamed (1).jpg', 'none'),
(13, 'English', 'new english', 'Twenty one pilot', 'Twenty One Pilots (DJJOhAL.Com).mp4', '671.jpg', 'Heathens', 't-series', 'unnamed.jpg', 'none');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parm`
--
ALTER TABLE `parm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
