-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 27, 2019 at 04:31 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_role` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_brith` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `user_role`, `mobile`, `email`, `date_of_brith`, `address`, `photo`) VALUES
(1, 'Kaung San Hein', 'yoon', 'CEO', '09782696857', 'kaungsanhein2019@gmail.com', '7/12/1998', 'Mandalay', 'p1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE IF NOT EXISTS `certificate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `certificate_name` varchar(10) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `certificate_name`, `description`) VALUES
(1, 'U', 'This U certification is the basic one it means that anybody can see the movie. It can have mild violence or intimate scene but those are overseen.'),
(2, 'U/A', ' These may contain some moderate intimate or violence scene.'),
(3, 'A', ' Strong intimate scenes,abusive language thatâ€™s why the window covers only adults.'),
(4, 'S', 'Films with S certification should not be viewed by the public. Only people associated with it (Engineers, Doctors, Scientists, etc.), have permission to watch those films.'),
(5, 'V/U', 'Films with S certification should not be viewed by the public. Only people associated with it ');

-- --------------------------------------------------------

--
-- Table structure for table `cinema`
--

CREATE TABLE IF NOT EXISTS `cinema` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cinema_no` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cinema`
--

INSERT INTO `cinema` (`id`, `cinema_no`) VALUES
(1, 'cinema 1'),
(2, 'cinema 2'),
(3, 'cinema 3');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `language_name`, `description`) VALUES
(1, 'Chinese', 'It is also widely taught as a second language internationally. \r\n'),
(2, 'Indian', 'it is one of the most spoken languages (ranking fifth[4] or sixth[5]) in the world with nearly 230 million total speakers, and is known for its long and rich literary tradition. '),
(3, 'English', 'In addition to 370 million native speakers, English is estimated to have over 610 million second-language speakers'),
(4, 'French', 'French is also internationally recognized to be of high linguistic prestige, still used in diplomacy and international commerce, as well as having a significant portion of second language speakers throughout the world.[9]'),
(5, 'Spanish', ''),
(6, 'Myanmar', 'Yangon (formerly Rangoon)');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `movie_certificate` varchar(50) NOT NULL,
  `movie_language` varchar(50) NOT NULL,
  `movie_type` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `director` varchar(50) NOT NULL,
  `castings` varchar(100) NOT NULL,
  `release_date` varchar(50) NOT NULL,
  `premier_date` varchar(50) NOT NULL,
  `trailer_embed` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `cinema_no` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`, `movie_certificate`, `movie_language`, `movie_type`, `duration`, `director`, `castings`, `release_date`, `premier_date`, `trailer_embed`, `description`, `photo`, `cinema_no`) VALUES
(1, 'FAST AND FURIOUS 9', '2', '3', '1', '135Minutes', 'Dwayne Johnson ', 'Hobbs And Shaw', ' Feb 1, 2019', ' Feb 1, 2019', 'https://www.youtube.com/embed/5ngySEhcVv8', 'Subscribe To MovieAccessTrailers To Catch Up All The New Movie Trailer, Movie Clips, TV Spots & Trailer Compilation Just For You.', 'ba209a0df78fbf7026d7f4b1a8dbb57amaxresdefault.jpg', '1'),
(2, 'THE DARK AVENGER', '1', '1', '1', '130Minutes', 'Christina Hodson', 'Hailee Steinfeld, John Cena, Jorge Lendeborg Jr.,', 'July 31, 2017', 'July 31, 2017', 'https://www.youtube.com/embed/xC8QxMTn6Rw', 'EVERYBODY HATES THE BUMBLEBEE TRAILER (2018) - TRANSFORMERS 6 We read the youtube audience reviews,', '0d8e79f1c641fdc43f971a668ff80487maxresdefault3.jpg', '2'),
(3, 'John Wick: Chapter 3', '5', '5', '3', '140Minutes', 'Keanu Reeves', 'Keanu Reeves, Halle Berry', 'Jan 17, 2019', 'Jan 17, 2019', 'https://www.youtube.com/embed/M7XM597XO94', 'John Wick: Chapter 3 - Parabellum â€“ In theaters May 17, 2019. Starring Keanu Reeves, Halle Berry, Laurence Fishburn', '2779beaad7c92d1eff3987322a0bac32john.jpg', '3'),
(4, 'MIA AND THE WHITE LION ', '4', '4', '4', '150Minutes', 'Adventure', 'Adventure', 'Feb 14, 2019', 'Feb 14, 2019', 'https://www.youtube.com/embed/oxuN6pVDCl0', 'MIA AND THE WHITE LION Official Trailer Movie in theatre Soon.', '49be19965b84d8cbc576ad0d5fbb76f2index3.jpg', '0'),
(5, 'SPIDER-MAN: FAR FROM HOME - 4 ', '2', '2', '1', '110Minutes', 'Peter', 'Peter Parker', 'Jan 15, 2019', 'Jan 15, 2019', 'https://www.youtube.com/embed/YkF4w6w27W0', 'Homecoming series! Our friendly neighborhood Sup', 'ae446f9425c91f177fa0bcc859ac5cfdspider.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `movietype`
--

CREATE TABLE IF NOT EXISTS `movietype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `typename` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `movietype`
--

INSERT INTO `movietype` (`id`, `typename`, `description`) VALUES
(1, 'Action', 'An action story is similar to adventure'),
(2, 'Comedy', 'Comedy is a story that tells about a series of funny, or comical events, intended to make the audience laugh.'),
(3, 'Crime', 'A crime story is about a crime that is being committed or was committed.'),
(4, 'Drama', 'A drama is commonly considered the opposite of a comedy, but may also be considered separate from other works of some broad genre, such as a fantasy. '),
(5, 'Horror', 'A horror story is told to deliberately scare or frighten the audience'),
(6, 'Romance', 'motion-driven stories that are primarily focused on the relationship between the main characters of the story. Beyond the focus on the relationship'),
(7, 'Adventure', 'Adventure films are a genre of film that typically use their action scenes to display and explore exotic locations in an energetic way');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card_number` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `cinema_no` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `card_number`, `customer_name`, `movie_name`, `cinema_no`, `date`, `time`, `qty`, `price`, `total`, `booking_date`) VALUES
(14, 98765432, 'yoon', 'FAST AND FURIOUS 9', '1', '22/04/2019', '9:00 AM', 5, 2000, 10000, '2019-04-09'),
(15, 98765432, 'yoon', 'THE DARK AVENGER', '2', '21/04/2019', '6:30 PM', 1, 3300, 3300, '2019-04-15'),
(16, 892345678, 'yoon', 'THE DARK AVENGER', '2', '23/04/2019', '9:00 AM', 4, 2300, 9200, '2019-04-22'),
(17, 7854321, 'kaung', 'FAST AND FURIOUS 9', '1', '23/04/2019', '9:00 AM', 2, 3000, 6000, '2019-04-21'),
(18, 789900, 'kaung', 'FAST AND FURIOUS 9', '1', '22/04/2019', '9:00 AM', 3, 2000, 6000, '2019-04-20'),
(19, 89754, 'yoon', 'THE DARK AVENGER', '2', '22/04/2019', '9:00 AM', 2, 2300, 4600, '2019-04-21'),
(20, 8736291, 'yoon', 'John Wick: Chapter 3', '3', '23/04/2019', '12:30 PM', 4, 1500, 6000, '2019-04-18'),
(21, 8736291, 'yoon', 'FAST AND FURIOUS 9', '1', '23/04/2019', '9:00 AM', 2, 2000, 4000, '2019-04-22'),
(22, 34567890, 'yoon', 'FAST AND FURIOUS 9', '1', '22/04/2019', '9:30 PM', 5, 2000, 10000, '2019-04-21'),
(23, 34567890, 'yoon', 'FAST AND FURIOUS 9', '1', '22/04/2019', '9:30 PM', 1, 1000, 1000, '2019-04-22'),
(24, 34567890, 'yoon', 'John Wick: Chapter 3', '3', '23/04/2019', '9:00 AM', 2, 1500, 3000, '2019-04-09'),
(25, 298374, 'yoon', 'FAST AND FURIOUS 9', '1', '23/04/2019', '12:30 PM', 2, 2000, 4000, '2019-04-23'),
(26, 56780, 'yoon', 'THE DARK AVENGER', '2', '26/04/2019', '9:00 AM', 13, 1300, 16900, '2019-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_of_brith` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `username`, `password`, `mobile`, `email`, `date_of_brith`, `address`, `photo`) VALUES
(1, 'Kaung San Hein', 'kaung', 'kaung', '09782696857', 'kaungsanhein2019@gmail.com', '07/12/1998', 'Mandalay', '336dd89061b57bdb8ba07963949a4a7aIMG_20181124_133059.jpg'),
(2, 'Yoon Wadi Phyo', 'yoon', 'kaung', '09402658590', 'yoonwadiphyo@gmail.com', '29/07/1998', 'Yangon', '64d7e447e75f0cd7ed3b684377663c75IMG_20181122_065310.jpg'),
(3, 'Yoon Yoon', 'yoon yoon', 'yoon yoon', '09402658590', 'yoonyoon@gmail.com', '29/07/1998', 'Yangon', 'b05de1ab3cee8c5507b4360866017817IMG_20181124_103207.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE IF NOT EXISTS `seat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cinema_no` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`id`, `cinema_no`, `price`, `Qty`) VALUES
(1, 1, 1000, 10),
(2, 1, 2000, 15),
(3, 1, 3000, 20),
(4, 1, 4000, 11),
(5, 2, 1300, 15),
(6, 2, 2300, 20),
(7, 2, 3300, 13),
(8, 2, 4300, 10),
(9, 3, 1500, 10),
(10, 3, 2500, 13),
(11, 3, 3500, 10),
(12, 3, 4500, 12);

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE IF NOT EXISTS `time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`id`, `time`) VALUES
(1, '9:00 AM'),
(2, '12:30 PM'),
(3, '3:30 PM'),
(4, '6:30 PM'),
(5, '9:30 PM');
