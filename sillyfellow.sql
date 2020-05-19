-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2020 at 07:44 PM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sillyfellow`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
`f_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `feedback` varchar(225) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `projectreq`
--

CREATE TABLE IF NOT EXISTS `projectreq` (
`r_id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `email_id` varchar(225) NOT NULL,
  `telegram_id` varchar(225) NOT NULL,
  `pro_des` varchar(500) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
`id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_cont` varchar(300) NOT NULL,
  `des` varchar(5000) NOT NULL,
  `price` int(50) NOT NULL,
  `download_link` varchar(1000) NOT NULL,
  `report_link` varchar(1000) NOT NULL,
  `image_link` varchar(550) NOT NULL,
  `date` date NOT NULL,
  `cat` varchar(100) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `sub_cont`, `des`, `price`, `download_link`, `report_link`, `image_link`, `date`, `cat`) VALUES
(31, '3D Car Cg Project ', 'Car model mode - This is default mode of car display which will display the only car. Car driving mode - This will display the driving mode, which includes the long road and green filed. Fog effect - This will apply the fog around the environment of the car. Wheel effect - This is one of the finest ', 'Car model mode - This is default mode of car display which will display the only car.\r\nCar driving mode - This will display the driving mode, which includes the long road and green filed.\r\nFog effect - This will apply the fog around the environment of the car.\r\nWheel effect - This is one of the finest effect, it will animate the car while it moved as it is moving in the car. \r\nToggle light - This will apply the light effect on/off when selected.\r\nCar colors - This menu have submenu which allow to select the color of car. The submenu have the following options - blue, red, green, black, yellow and grey.\r\nDaymode - By default we have Daymode on, in this projects so while in Night mode you can select this to toggle to Daylight mode.\r\nNight mode - This menu will let you switching to the Night mode, by showing darkness around.\r\n', 50, 'testing', 'testing', 'images/3d.PNG', '2020-04-16', 'Cg'),
(39, 'Maze Game Cg Project With Report', 'Maze Game Cg Project With Report', 'Maze Game Cg Project With Report', 100, 'Maze Game Cg Project With Report', 'Maze Game Cg Project With Report', 'images/maxresdefault.jpg', '2020-04-16', 'Cg'),
(32, 'Aeroplan Cursh cg Project', 'Aeroplan Cursh cg Project', 'Aeroplan Cursh cg Project', 50, 'testing', 'testing', 'images/Airplane.PNG', '2020-04-16', 'Cg'),
(33, 'Car Parking cg Project with Report', 'Car Parking cg Project with Report', 'Car Parking cg Project with Report', 50, 'testing', 'testing', 'images/hqdefault.jpg', '2020-04-16', 'Cg'),
(34, 'Fountain Cg Project with Report', 'Fountain Cg Project with Report', 'Fountain Cg Project with Report', 50, 'Fountain Cg Project with Report', 'Fountain Cg Project with Report', 'images/Flowing.JPG', '2020-04-16', 'Cg'),
(35, 'Stream Engine CG Project with Report', 'Stream Engine CG Project with Report', 'Stream Engine CG Project with Report', 100, 'Stream Engine CG Project with Report', 'Stream Engine CG Project with Report', 'images/computer-graphic.jpg', '2020-04-16', 'Cg'),
(36, 'Helicopter Cg Project With Report', 'Helicopter Cg Project With Report', 'Helicopter Cg Project With Report', 100, 'Helicopter Cg Project With Report', 'Helicopter Cg Project With Report', 'images/Screenshot.png', '2020-04-16', 'Cg'),
(37, 'Packman game cg Project with Report', 'Packman game cg Project with Report', 'Packman game cg Project with Report', 100, 'Packman game cg Project with Report', 'Packman game cg Project with Report', 'images/Screenshot1.png', '2020-04-16', 'Cg'),
(38, 'Final Rocket Cg Project With Report', 'Final Rocket Cg Project With Report', 'Final Rocket Cg Project With Report', 100, 'Final Rocket Cg Project With Report', 'Final Rocket Cg Project With Report', 'images/rocket.jpg', '2020-04-16', 'Cg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
`p_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL,
  `trans_id` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`p_id`, `email`, `c_id`, `trans_id`) VALUES
(33, 'vinayyadav332cs14011@gmail.com', 27, 123456);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(35, 'vinayyadav332cs14011@gmail.com', '372396');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `projectreq`
--
ALTER TABLE `projectreq`
 ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
 ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `projectreq`
--
ALTER TABLE `projectreq`
MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
