-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 07:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `resume` varchar(70) DEFAULT NULL,
  `contenu` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `resume`, `contenu`) VALUES
(15, 'New title Updated', 'Resume of the new', 'News websites have made it possible for us to easily access live news from all over the globe at our fingertips. However, the effort and time required to design a useful news website is often overlooked. A news website should not just be well-designed, but it must also look professional. This is why most designers rely on Bootstrap news website templates when building a news website.'),
(16, 'New title', 'Resume of the new', 'News websites have made it possible for us to easily access live news from all over the globe at our fingertips. However, the effort and time required to design a useful news website is often overlooked. A news website should not just be well-designed, but it must also look professional. This is why most designers rely on Bootstrap news website templates when building a news website.'),
(17, 'New title', 'Resume of the new', 'News websites have made it possible for us to easily access live news from all over the globe at our fingertips. However, the effort and time required to design a useful news website is often overlooked. A news website should not just be well-designed, but it must also look professional. This is why most designers rely on Bootstrap news website templates when building a news website.'),
(18, 'New title', 'Resume of the new', 'News websites have made it possible for us to easily access live news from all over the globe at our fingertips. However, the effort and time required to design a useful news website is often overlooked. A news website should not just be well-designed, but it must also look professional. This is why most designers rely on Bootstrap news website templates when building a news website.'),
(19, 'New title', 'Resume of the new', 'News websites have made it possible for us to easily access live news from all over the globe at our fingertips. However, the effort and time required to design a useful news website is often overlooked. A news website should not just be well-designed, but it must also look professional. This is why most designers rely on Bootstrap news website templates when building a news website.'),
(20, 'New title', 'Resume of the new', 'News websites have made it possible for us to easily access live news from all over the globe at our fingertips. However, the effort and time required to design a useful news website is often overlooked. A news website should not just be well-designed, but it must also look professional. This is why most designers rely on Bootstrap news website templates when building a news website.'),
(21, 'New title', 'Resume of the new', 'News websites have made it possible for us to easily access live news from all over the globe at our fingertips. However, the effort and time required to design a useful news website is often overlooked. A news website should not just be well-designed, but it must also look professional. This is why most designers rely on Bootstrap news website templates when building a news website.'),
(22, 'New title', 'Resume of the new', 'News websites have made it possible for us to easily access live news from all over the globe at our fingertips. However, the effort and time required to design a useful news website is often overlooked. A news website should not just be well-designed, but it must also look professional. This is why most designers rely on Bootstrap news website templates when building a news website.'),
(23, 'New title', 'Resume of the new', 'News websites have made it possible for us to easily access live news from all over the globe at our fingertips. However, the effort and time required to design a useful news website is often overlooked. A news website should not just be well-designed, but it must also look professional. This is why most designers rely on Bootstrap news website templates when building a news website.'),
(24, 'New title', 'Resume of the new', 'News websites have made it possible for us to easily access live news from all over the globe at our fingertips. However, the effort and time required to design a useful news website is often overlooked. A news website should not just be well-designed, but it must also look professional. This is why most designers rely on Bootstrap news website templates when building a news website.'),
(25, 'New title', 'Resume of the new', 'News websites have made it possible for us to easily access live news from all over the globe at our fingertips. However, the effort and time required to design a useful news website is often overlooked. A news website should not just be well-designed, but it must also look professional. This is why most designers rely on Bootstrap news website templates when building a news website.'),
(26, 'New title', 'Resume of the new', 'News websites have made it possible for us to easily access live news from all over the globe at our fingertips. However, the effort and time required to design a useful news website is often overlooked. A news website should not just be well-designed, but it must also look professional. This is why most designers rely on Bootstrap news website templates when building a news website.'),
(27, 'New title', 'Resume of the new', 'News websites have made it possible for us to easily access live news from all over the globe at our fingertips. However, the effort and time required to design a useful news website is often overlooked. A news website should not just be well-designed, but it must also look professional. This is why most designers rely on Bootstrap news website templates when building a news website.'),
(28, 'New title', 'Resume of the new', 'News websites have made it possible for us to easily access live news from all over the globe at our fingertips. However, the effort and time required to design a useful news website is often overlooked. A news website should not just be well-designed, but it must also look professional. This is why most designers rely on Bootstrap news website templates when building a news website.'),
(29, 'New title', 'Resume of the new', 'News websites have made it possible for us to easily access live news from all over the globe at our fingertips. However, the effort and time required to design a useful news website is often overlooked. A news website should not just be well-designed, but it must also look professional. This is why most designers rely on Bootstrap news website templates when building a news website.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
