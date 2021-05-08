-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 10:48 AM
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
-- Database: `cr12_mounteverest_rasmisilasari`
--
CREATE DATABASE IF NOT EXISTS `cr12_mounteverest_rasmisilasari` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr12_mounteverest_rasmisilasari`;

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `price` int(7) DEFAULT NULL,
  `descript` text DEFAULT NULL,
  `lat` decimal(11,8) DEFAULT NULL,
  `lng` decimal(11,8) DEFAULT NULL,
  `pic` text DEFAULT NULL,
  `days` int(2) DEFAULT NULL,
  `info` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`id`, `name`, `state`, `price`, `descript`, `lat`, `lng`, `pic`, `days`, `info`) VALUES
(1, 'Vienna', 'Vienna', 750, 'Austria’s capital offers a unique blend of imperial traditions and stunning modern architecture. It is famous for its cultural events, imperial sights, coffee houses, cozy wine taverns, and the very special Viennese charm.', '48.20817430', '16.37381890', 'https://upload.wikimedia.org/wikipedia/commons/9/9b/A-Wien-Stephansd-Turm-West.JPG', 5, 'http://www.austria.info/uk/where-to-go/cities/vienna'),
(2, 'Graz', 'Styria', 600, 'The Styrian capital Graz, with roots dating back to the Roman age, lies on either side of River Mur. Graz is well-known for its striking buildings and architecture.', '47.07071400', '15.43950400', 'https://upload.wikimedia.org/wikipedia/commons/3/37/Graz.austria.jpg', 5, 'http://www.austria.info/uk/where-to-go/cities/graz'),
(3, 'Linz', 'Upper Austria', 480, 'The city of Linz is home to a vibrant music and arts scene, seamlessly blending traditional and contemporary arts.', '48.30694000', '14.28583000', 'https://upload.wikimedia.org/wikipedia/commons/3/3e/View_over_Linz.jpg', 4, 'http://www.austria.info/uk/where-to-go/cities/linz'),
(4, 'Salzburg', 'Salzburg', 700, 'Salzburg, the birthplace of Wolfgang Amadeus Mozart, is dominated by churches, castles, and palaces. Its picturesque old town is a UNESCO World Heritage Site.', '47.80949000', '13.05501000', 'https://upload.wikimedia.org/wikipedia/commons/1/13/Fuerte-Hohensalzburg.JPG', 5, 'http://www.austria.info/uk/where-to-go/cities/salzburg'),
(5, 'Innsbruck', 'Tirol', 560, 'Past and future meet in the heart of the Alps, where Innsbruck’s world-famous sights, which testify to the Tirol province’s great past, stand alongside post-modern international architecture to create a fascinating blend.', '47.26921240', '11.40410240', 'https://upload.wikimedia.org/wikipedia/commons/1/15/IMG_9040-Innsbruck.JPG', 4, 'http://www.austria.info/uk/where-to-go/cities/innsbruck'),
(6, 'Klagenfurt', 'Carinthia', 480, 'Klagenfurt is ideally located on Lake Wörthersee, one of Europe’s largest and warmest Alpine lakes. The city’s Mediterranean climate is responsible for pleasant summer days, sunny winters, colourful autumns, and mild springs.', '46.63645980', '14.31222460', 'https://upload.wikimedia.org/wikipedia/commons/2/26/Klagenfurt_01.jpg', 4, 'http://www.austria.info/uk/where-to-go/cities/klagenfurt'),
(7, 'Sankt Pölten', 'Lower Austria', 300, 'St. Pölten, the youngest of Austria’s capitals, combines a Baroque city centre with modern architecture like no other Austrian city.', '48.20352601', '15.63659917', 'https://upload.wikimedia.org/wikipedia/commons/b/b3/Sankt_Poelten.jpg', 3, 'http://www.austria.info/uk/where-to-go/cities/st-poelten'),
(8, 'Bregenz', 'Vorarlberg', 300, 'Vorarlberg’s capital is located at Lake Constance, Central Europe’s third largest lake, offering a dense cultural programme and wide range of outdoor activities.', '47.50075000', '9.74231000', 'https://upload.wikimedia.org/wikipedia/commons/7/70/Bregenz_pano_1.jpg', 3, 'http://www.austria.info/uk/where-to-go/cities/bregenz'),
(9, 'Eisenstadt', 'Burgenland', 200, 'Despite being Austria’s smallest provincial capital, this former seat of the noble Esterhazy family and home to some 13,000 inhabitants has plenty to offer.', '47.84637000', '16.52796000', 'https://vcdn.bergfex.at/images/resized/4d/35637833557bf04d_cfe23b06a88e0989@2x.jpg', 2, 'http://www.austria.info/uk/where-to-go/cities/eisenstadt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
