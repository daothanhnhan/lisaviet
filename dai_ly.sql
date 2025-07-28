-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 26, 2019 at 08:22 AM
-- Server version: 5.5.31
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tkwgbvn_lisaviet`
--

-- --------------------------------------------------------

--
-- Table structure for table `dai_ly`
--

CREATE TABLE IF NOT EXISTS `dai_ly` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `embed` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `city` int(11) NOT NULL,
  `district` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dai_ly`
--

INSERT INTO `dai_ly` (`id`, `name`, `address`, `phone`, `logo`, `embed`, `city`, `district`) VALUES
(2, 'Tuticare', 'Hà Nội', '024 3224 7110', 'logo_tuticare.png', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.5064839403776!2d105.81860931440704!3d21.0124109937133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab7da57a1c97%3A0x14da7e1f7daa5d13!2zMTU2IFRow6FpIEjDoCwgVHJ1bmcgTGnhu4d0LCDEkOG7kW5nIMSQYSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1536987762002" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', 1, 1),
(3, 'Công ty 2', 'Hà Nội, Việt Nam', '0123456', '2014_167_154234_985W37Q.png', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7448.505945496799!2d105.78866247683703!3d21.02256160874191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab5071d33a85%3A0x11b2ab7b4c1f1b61!2zWcOqbiBIb8OgLCBD4bqndSBHaeG6pXksIEhhbm9pLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1536568451975" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> ', 1, 2),
(4, 'Công ty 3', 'Hồ chí minh', '0123456', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7448.427349079909!2d105.85141393265646!3d21.024134694303154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab939165e8d9%3A0xf3952b1fa755bdcc!2sMeli%C3%A1+Hanoi!5e0!3m2!1sen!2s!4v1536569316869" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', 2, 3),
(5, 'Công ty 4', 'Đã Nẵng', '02311', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7449.957261552935!2d105.79485827697003!3d20.9934936940698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acb9499e7545%3A0x703c923b7ac373be!2sThanh+Xuan+Bac%2C+Thanh+Xu%C3%A2n%2C+Hanoi%2C+Vietnam!5e0!3m2!1sen!2s!4v1536739364823" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', 1, 0),
(6, 'Công ty 5', 'HCM', '1234567890', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31355.76965430164!2d106.68085292017675!3d10.77517655862345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f38f9ed887b%3A0x14aded5703768989!2sDistrict+1%2C+Ho+Chi+Minh+City!5e0!3m2!1sen!2s!4v1536751801027" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', 2, 3),
(7, 'đại lý 1', 'trung văn', '975789136', '', '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14899.82369768058!2d105.77010130146023!3d20.994403832195196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345318de475cd9%3A0xfeb22cdc5a38e0da!2sVinaconex3+Trung+V%C4%83n!5e0!3m2!1svi!2s!4v1537589380427" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dai_ly`
--
ALTER TABLE `dai_ly`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dai_ly`
--
ALTER TABLE `dai_ly`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
