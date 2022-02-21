-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 07:41 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wearit`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` int(11) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `donation` text NOT NULL,
  `description` text NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `datepost` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `PhoneNum` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`id`, `picture`, `donation`, `description`, `name`, `email`, `datepost`, `PhoneNum`) VALUES
(44, 'd41d8cd98f00b204e9800998ecf8427e1640254541.jpg', 'Oversized Denim Jacket', 'Oversized jacket in denim with a collar, buttons down the front, a yoke at the back, low dropped shoulders and long, wide sleeves with buttoned cuffs. Large chest and front pockets and a straight hem. Some of the cotton content of the jacket is recycled.', 'carina', 'carina@wearit.com', '2022-01-26 17:25:35', 8134573221),
(45, 'd41d8cd98f00b204e9800998ecf8427e1640255666.jpg', 'Oversized Shirt Jacket', 'Oversized shirt jacket in woven fabric with a collar, buttons down the front and a yoke at the back. Open chest pockets, discreet pockets in the side seams, dropped shoulders and long sleeves. Lined.', 'carina', 'carina@wearit.com', '2022-01-26 17:25:37', 8134573221),
(46, 'd41d8cd98f00b204e9800998ecf8427e1640255781.jpg', 'Cotton Sweatshirt', 'Long-sleeved top in cotton sweatshirt fabric with press-studs on one shoulder, lapped ribbing at the neckline and ribbing at the cuffs and hem.', 'carina', 'carina@wearit.com', '2022-01-26 17:25:40', 8134573221),
(47, 'd41d8cd98f00b204e9800998ecf8427e1640256236.jpg', 'Ribbed Cotton Set', 'Set with a long-sleeved top and pair of trousers in soft, ribbed organic cotton jersey. Top with a concealed press-stud on one shoulder (except in sizes 2-4Y) and ribbed cuffs. Trousers with covered elastication at the waist and ribbed hems. For kids.', 'carina', 'carina@wearit.com', '2022-01-26 17:25:42', 8134573221),
(49, 'd41d8cd98f00b204e9800998ecf8427e1640632961.jpg', 'Hooded Puffer Jacket', 'Puffer jacket in woven fabric with a lined hood, zip and wind flap with press-studs down the front and side pockets. Gently rounded and slightly longer at the back. Recycled polyester lining and filling. The polyester content of the jacket’s outer layer is partly recycled.', 'carina', 'carina@wearit.com', '2022-01-26 17:25:45', 8134573221),
(65, 'd41d8cd98f00b204e9800998ecf8427e1641882891.jpg', 'Green Shirt', ' Green shirt size L, contact me via WA for fast response', 'carina', 'carina@wearit.com', '2022-01-11 06:37:28', 8134573221),
(71, 'd41d8cd98f00b204e9800998ecf8427e1643217721.jpg', 'The Mini Work Tote', 'The Mini Work Tote is just like the original in a more compact silhouette, its like a tiny house, if a house could be an on-the-go mobile office in a tote bag! We designed the original because there was not one good-looking bag on the market that we felt just as good carrying to work, to after work cocktails and to all our out-of-office adventures.', 'carina', 'carina@wearit.com', '2022-01-26 17:22:01', 8134573221);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `DonorID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `PhoneNum` bigint(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`DonorID`, `Name`, `PhoneNum`, `Email`, `Password`) VALUES
(1, 'Naufal Hadi Syukrima', 82227164531, 'naufalhadi@wearit.com', '7f51b484536ce6e850172ee26a47ea1f'),
(3, 'carina', 8134573221, 'carina@wearit.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(4, 'donor', 1234567, 'donor@wearit.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(14, 'Test Account', 82227164531, 'test@gmail.com', '33c0fc48dfec3ddae7e3398e30e89a61'),
(16, 'anonymous', 12345678, 'anon@gmail.com', '068f01f2e4285e6cd2afb2186b98a1bd');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `toEmail` varchar(255) NOT NULL,
  `fromEmail` varchar(255) NOT NULL,
  `fullname` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `message` text NOT NULL,
  `reply` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `toEmail`, `fromEmail`, `fullname`, `date`, `message`, `reply`) VALUES
(23, 'carina@wearit.com', 'receiver@wearit.com', 'Receiver', '2022-01-16 12:03:57', 'Donor is humble and responsive, thanks for the shirt, have a great day', 'Thank you!');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `ReceiverID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `PhoneNum` bigint(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`ReceiverID`, `Name`, `PhoneNum`, `Email`, `Password`) VALUES
(2, 'Naufal Hadi Syukrima', 872546631, 'naufalhadi@wearit.com', '7f51b484536ce6e850172ee26a47ea1f'),
(3, 'Ammar Hawari Abdillah', 12345767889, 'ammarhawari@wearit.com', '09115307a518b34633798c646a99e096'),
(4, 'receiver', 1234567, 'receiver@wearit.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Test Account 2', 17127176565, 'test2@gmail.com', '4d9593b8834348d421e2b60c7837ee56');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `donor` text NOT NULL,
  `receiver` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `postedby` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `contentfile` varchar(200) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`postedby`, `category`, `title`, `content`, `user_id`, `contentfile`, `date_created`, `id`) VALUES
('Carina', 'tech', 'New Budget Phone', ' This new asus zenfone is a budget phone that have a good specs, screen, and camera', 0, 'd41d8cd98f00b204e9800998ecf8427e1641883774.jpg', '2022-01-11 13:49:34', 12),
('Carina', 'datatest', 'datatest', ' datatest', 0, 'd41d8cd98f00b204e9800998ecf8427e1641886632.jpg', '2022-01-11 14:37:12', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`DonorID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`ReceiverID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `DonorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `ReceiverID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
