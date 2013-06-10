-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2013 at 03:30 AM
-- Server version: 5.5.8-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karthik`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacttable`
--

CREATE TABLE IF NOT EXISTS `contacttable` (
  `MessageID` int(11) NOT NULL AUTO_INCREMENT,
  `Message` varchar(3000) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `EmailID` varchar(100) NOT NULL,
  `Subject` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`MessageID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `contacttable`
--

INSERT INTO `contacttable` (`MessageID`, `Message`, `Name`, `EmailID`, `Subject`) VALUES
(1, 'a', 'a', 'a', 'a'),
(2, 'a', 'a', 'a', 'a'),
(3, 'a', 'a', 'a', 'a'),
(4, 'a', 'a', 'a', 'a'),
(5, 'a', 'a', 'a', 'a'),
(6, 'b', 'b', 'b', 'b'),
(7, 'b', 'b', 'b', 'b'),
(8, 'c', 'c', 'c', 'c'),
(9, 'c', 'c', 'c', 'c'),
(10, 'e', 'e', 'e', ''),
(11, 'e', 'e', 'e', ''),
(12, 'k\n', 'k', 'k', 'k'),
(13, 'l\n', 'l', 'l', 'l'),
(14, 'm', 'm', 'm', 'm'),
(15, 'b', 'b', 'b@b.co', 'b'),
(16, 'b', 'b', 'b@b.co', 'b'),
(17, 'b', 'b', 'b@b.co', 'b'),
(18, 'b', 'b', 'b@b.co', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `imagedetails`
--

CREATE TABLE IF NOT EXISTS `imagedetails` (
  `ImageID` int(11) NOT NULL AUTO_INCREMENT,
  `ImageURL` varchar(150) NOT NULL DEFAULT 'images/1.png',
  `ImageDesc` varchar(350) NOT NULL,
  PRIMARY KEY (`ImageID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `imagedetails`
--

INSERT INTO `imagedetails` (`ImageID`, `ImageURL`, `ImageDesc`) VALUES
(1, 'images/WebCMS_png/1.png', 'Web Content Management System Login Screen'),
(2, 'images/WebCMS_png/2.png', 'Web Content Management System Register Screen'),
(3, 'images/WebCMS_png/3.png', 'Web Content Management System Register Screen error'),
(4, 'images/WebCMS_png/4.png', ''),
(5, 'images/WebCMS_png/5.png', ''),
(6, 'images/WebCMS_png/6.png', ''),
(7, 'images/WebCMS_png/7.png', ''),
(8, 'images/GenMexTool_png/1.png', ''),
(9, 'images/GenMexTool_png/2.png', ''),
(10, 'images/GenMexTool_png/3.png', ''),
(11, 'http://localhost/trnkarthik/images/GenomeGeneListFinder_png/1.png', ''),
(12, 'http://localhost/trnkarthik/images/GenomeGeneListFinder_png/2.png', ''),
(13, 'http://localhost/trnkarthik/images/GenomeGeneListFinder_png/3.png', ''),
(14, 'http://localhost/trnkarthik/images/SurveyManagementSystem_png/1.png', ''),
(15, 'http://localhost/trnkarthik/images/SurveyManagementSystem_png/2.png', ''),
(16, 'http://localhost/trnkarthik/images/SurveyManagementSystem_png/3.png', ''),
(17, 'http://localhost/trnkarthik/images/MovieReviewer_with_shadow/1.png', ''),
(18, 'http://localhost/trnkarthik/images/MovieReviewer_with_shadow/2.png', ''),
(19, 'http://localhost/trnkarthik/images/MovieReviewer_with_shadow/3.png', ''),
(20, 'http://localhost/trnkarthik/images/MovieReviewer_with_shadow/4.png', ''),
(21, 'http://localhost/trnkarthik/images/MovieReviewer_with_shadow/5.png', ''),
(22, 'http://localhost/trnkarthik/images/BMIApplication_with_shadow/1.png', ''),
(23, 'http://localhost/trnkarthik/images/BMIApplication_with_shadow/2.png', ''),
(24, 'http://localhost/trnkarthik/images/BMIApplication_with_shadow/3.png', ''),
(25, 'http://localhost/trnkarthik/images/BMIApplication_with_shadow/4.png', ''),
(26, 'http://localhost/trnkarthik/images/BMIApplication_with_shadow/5.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `projectdetails`
--

CREATE TABLE IF NOT EXISTS `projectdetails` (
  `ProjectID` int(11) NOT NULL AUTO_INCREMENT,
  `ProjectName` varchar(150) NOT NULL,
  `ProjectType` varchar(30) NOT NULL DEFAULT 'web',
  `ProjectRating` decimal(4,2) NOT NULL DEFAULT '5.00',
  `ProjectStartDate` date NOT NULL,
  `ProjectEndDate` date DEFAULT NULL,
  `ProjectTools` varchar(200) DEFAULT NULL,
  `ProjectDesc` text NOT NULL,
  `ProjectURL` varchar(150) NOT NULL DEFAULT 'https://github.com/trnkarthik',
  `Visibility` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ProjectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `projectdetails`
--

INSERT INTO `projectdetails` (`ProjectID`, `ProjectName`, `ProjectType`, `ProjectRating`, `ProjectStartDate`, `ProjectEndDate`, `ProjectTools`, `ProjectDesc`, `ProjectURL`, `Visibility`) VALUES
(1, 'Movie Reviewer', 'android', '5.00', '2012-10-01', NULL, 'Java, Android API, JSON, Rotten Tomatoes API, SQLite Database.', 'This application uses Rotten Tomatoes API to retrieve data related to ‘Box Office Movies’, ’In Theater Movies’, ’Opening Movies’ and ’Upcoming Movies’. User can also save his favorite movies in the local SQLite database.<br/>\nAdvanced techniques are used to provide rich User Interface.', 'https://github.com/trnkarthik/MoviewReviewer', 1),
(2, 'Picture Puzzle', 'android', '5.00', '2012-09-01', NULL, 'Java, Android API', 'This application is a traditional puzzle game. \nUsers can play puzzle with default application pictures or can even select pictures from their mobile gallery. Puzzles are sized in to 3*3 and 4*4.', 'https://github.com/trnkarthik/PickImageFromGallery', 1),
(3, 'Hit the Frog', 'android', '5.00', '2012-11-01', '2012-12-01', 'Java, Android API, AndEngine Library, SQLite Database.', 'This game is developed using, the latest, GLES 2 Engine of AndEngine.\nThis game have two modes\n-Push Mode : In this mode user have to hit the frog by pushing the ball.\n-Gravity Mode : This is similar to push mode except accelerometer is used to move the ball.\nHigh scores are stored in the SQLite Database', 'https://github.com/trnkarthik/HitTheFrog', 1),
(4, 'Currency Converter', 'android', '5.00', '2013-05-01', NULL, 'Java, Android API, Facebook API, Google Currency API, SQLite Database', 'Used Google currency API to update currency values and Facebook API to share currency updates.\nUsed SQLite database to store user preferences. \nFollowed Human Computer Interaction principles to design rich User Interface.\n', '', 1),
(5, 'BMI Calculator ', 'android', '5.00', '2013-05-01', NULL, 'Java, Android API, Facebook API', 'This application is used to calculate body mass index. Used advanced HCI principles in UI design. \nIntegrated with Facebook API to share updates.\n', '', 1),
(6, 'Social Networking Website ', 'web', '5.00', '2011-12-01', '2012-04-01', 'PHP, MySQL, AJAX, Facebook API, Google+ API, HTML, CSS, JavaScript, Wamp Server', 'This main intent of this project is to enhance the social networking experience by introducing tools like wish and trick sharing applications, social diary, fame meter, display picture assignment application with other common tools like photo albums, user profiles and user connections.\nIntegrated with other social networks like Facebook and Google plus. \n', 'https://github.com/trnkarthik/SocialNetworkingWebsite', 1),
(7, 'UNCC Dorm Valet Web Application ', 'web', '5.00', '2012-08-01', '2012-12-01', 'JSP, Servlets, MySQL, HTML, CSS, JavaScript, Apache Tomcat', 'This online system allows students of UNCC to order food from restaurants on the UNCC campus. This project automates and facilitates taking orders, ordering food from restaurants, calculating best route for order delivery, accepting payment, and paying restaurants.\nDeveloped web pages and business logic using J2EE and MVC architecture.\n', 'https://github.com/trnkarthik', 1),
(8, 'Online Bookstore Management System ', 'web', '5.00', '2011-02-02', '2011-04-01', 'PHP, MySQL, HTML, CSS, JavaScript, Wamp Server', 'This is an e-commerce application, which consists master entry and customer entry.\nMaster entry deals with administrative functions like adding new titles (books), adding new stock, modifying and deleting stock. Customer entry allows the user to order books.\n', 'https://github.com/trnkarthik/online_inventory_mgmt', 1),
(9, 'GenMEx Tool ', 'web', '5.00', '2011-07-01', '2011-08-01', 'PHP, DHTML, CSS, JavaScript, Wamp Server', 'This application is the implementation of IEEE publication ''GenMEx tool (Gene microsatellite extractor): Identification of tandem repeats''.\nThe problem of finding tandem repeats patterns in the given sequence was solved by combining the preprocessing method (PDFMCSP) with pattern searching method ''Two Sliding Window''.\nThe frequently occurring patterns are searched in the input sequence string using Two Sliding Window method (TSW) in which the string is scanned from both the sides at a time. The searching is stopped when both the windows converge.', '', 1),
(10, 'Genome Gene List Finder Tool', 'web', '5.00', '2011-08-01', '2011-10-01', 'PHP, MySQL, HTML, CSS, JavaScript, Wamp Server', 'Used advanced techniques like materialized views to optimize data retrieval from the database.', '', 1),
(11, 'Web Content Management System', 'web', '5.00', '2012-08-01', '2012-11-01', 'PHP, MySQL, HTML, CSS, JQuery,Ajax, Wamp Server.', 'Web Content Management System helps the non technical users to maintain a website quickly,easily and effectively.\r\nTechnical users can use this system to easily extend the functionality of their web application.', 'https://github.com/trnkarthik/WebCMS', 1),
(12, 'Survey Management System', 'web', '5.00', '2012-04-01', '2012-05-28', 'PHP, DHTML, CSS, Wamp Server.', 'Survey Management System is a web application to manage feedback and research via the web.\r\nUsed in Gitam University to conduct surveys.', 'https://github.com/trnkarthik/SurveyManagementSystem', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projectimages`
--

CREATE TABLE IF NOT EXISTS `projectimages` (
  `ProjectID` int(11) NOT NULL DEFAULT '0',
  `ImageID` int(11) NOT NULL AUTO_INCREMENT,
  `Visibility` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ProjectID`,`ImageID`),
  KEY `ImageID` (`ImageID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `projectimages`
--

INSERT INTO `projectimages` (`ProjectID`, `ImageID`, `Visibility`) VALUES
(1, 17, 1),
(1, 18, 1),
(1, 19, 1),
(1, 20, 1),
(1, 21, 1),
(5, 22, 1),
(5, 23, 1),
(5, 24, 1),
(5, 25, 1),
(5, 26, 1),
(9, 8, 1),
(9, 9, 1),
(9, 10, 1),
(10, 11, 1),
(10, 12, 1),
(10, 13, 1),
(11, 1, 1),
(11, 2, 1),
(11, 3, 0),
(11, 4, 1),
(11, 5, 1),
(11, 6, 0),
(11, 7, 1),
(12, 14, 1),
(12, 15, 1),
(12, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `projectthumbs`
--

CREATE TABLE IF NOT EXISTS `projectthumbs` (
  `ProjectID` int(11) NOT NULL,
  `MainThumb` varchar(150) NOT NULL DEFAULT 'images/thumbs/default_thumb.png',
  PRIMARY KEY (`ProjectID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectthumbs`
--

INSERT INTO `projectthumbs` (`ProjectID`, `MainThumb`) VALUES
(1, 'images/thumbs/1_thumb.png'),
(2, 'images/thumbs/2_thumb.png'),
(3, 'images/thumbs/3_thumb.png'),
(4, 'images/thumbs/4_thumb.png'),
(5, 'images/thumbs/5_thumb.png'),
(6, 'images/thumbs/6_thumb.png'),
(7, 'images/thumbs/7_thumb.png'),
(8, 'images/thumbs/8_thumb.png'),
(9, 'images/thumbs/9_thumb.png'),
(10, 'images/thumbs/10_thumb.png'),
(11, 'images/thumbs/11_thumb.png'),
(12, 'images/thumbs/12_thumb.png');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imagedetails`
--
ALTER TABLE `imagedetails`
  ADD CONSTRAINT `imagedetails_ibfk_1` FOREIGN KEY (`ImageID`) REFERENCES `projectimages` (`ImageID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `projectthumbs`
--
ALTER TABLE `projectthumbs`
  ADD CONSTRAINT `projectthumbs_ibfk_2` FOREIGN KEY (`ProjectID`) REFERENCES `projectdetails` (`ProjectID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
