-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2015 at 08:46 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `short`
--

-- --------------------------------------------------------

--
-- Table structure for table `url`
--

CREATE TABLE IF NOT EXISTS `url` (
`id` int(11) NOT NULL,
  `link` text NOT NULL,
  `code` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `visits` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `url`
--

INSERT INTO `url` (`id`, `link`, `code`, `ip`, `create_date`, `visits`) VALUES
(1, 'http://www.google.com', 'jbii', '::1', '2015-12-11 00:46:12', 5),
(3, 'http://localhost/phpmyadmin/#PMAURL-4:sql.php?db=short&table=url&server=1&target=&token=600d8880aed1dac4faef766299354a71', 'jhed', '::1', '2015-12-11 00:56:18', 14),
(4, 'http://localhost/short/short/go/jhed', 'hjac', '::1', '2015-12-11 05:34:37', 6),
(5, 'https://www.facebook.com/yousseifweroquia', 'fchg', '::1', '2015-12-11 07:38:40', 1),
(6, 'http://localhost/', 'cbie', '::1', '2015-12-11 07:39:56', 1),
(7, 'http://localhost/xampp/', 'dgbi', '::1', '2015-12-11 07:40:36', 1),
(8, 'http://www.4shared.com/file/-SeVwzw9/___online.html', 'digd', '::1', '2015-12-11 07:43:10', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `url`
--
ALTER TABLE `url`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `url`
--
ALTER TABLE `url`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
