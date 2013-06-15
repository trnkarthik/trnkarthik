-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2013 at 02:12 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

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
(26, 'http://localhost/trnkarthik/images/BMIApplication_with_shadow/5.png', ''),
(27, 'http://localhost/trnkarthik/images/HitTheFrog_with_shadow/1.png', ''),
(28, 'http://localhost/trnkarthik/images/HitTheFrog_with_shadow/2.png', ''),
(29, 'http://localhost/trnkarthik/images/HitTheFrog_with_shadow/3.png', ''),
(30, 'http://localhost/trnkarthik/images/HitTheFrog_with_shadow/4.png', ''),
(31, 'http://localhost/trnkarthik/images/snpp_png/1.png', ''),
(32, 'http://localhost/trnkarthik/images/snpp_png/1.png', ''),
(33, 'http://localhost/trnkarthik/images/snpp_png/3.png', ''),
(34, 'http://localhost/trnkarthik/images/snpp_png/4.png', ''),
(35, 'http://localhost/trnkarthik/images/snpp_png/5.png', ''),
(36, 'http://localhost/trnkarthik/images/snpp_png/6.png', ''),
(37, 'http://localhost/trnkarthik/images/snpp_png/7.png', ''),
(38, 'http://localhost/trnkarthik/images/snpp_png/8.png', ''),
(39, 'http://localhost/trnkarthik/images/snpp_png/9.png', ''),
(40, 'http://localhost/trnkarthik/images/PicturePuzzleGame_with_shadow/1.png', ''),
(41, 'http://localhost/trnkarthik/images/PicturePuzzleGame_with_shadow/2.png', ''),
(42, 'http://localhost/trnkarthik/images/PicturePuzzleGame_with_shadow/3.png', ''),
(43, 'http://localhost/trnkarthik/images/DormValet_png/1.png', ''),
(44, 'http://localhost/trnkarthik/images/DormValet_png/2.png', ''),
(45, 'http://localhost/trnkarthik/images/DormValet_png/3.png', ''),
(46, 'http://localhost/trnkarthik/images/DormValet_png/4.png', ''),
(47, 'http://localhost/trnkarthik/images/DormValet_png/5.png', ''),
(48, 'http://localhost/trnkarthik/images/DormValet_png/6.png', ''),
(49, 'http://localhost/trnkarthik/images/DormValet_png/7.png', ''),
(50, 'http://localhost/trnkarthik/images/DormValet_png/8.png', '');

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
  `ProjectMiniDesc` varchar(200) NOT NULL,
  `ProjectCredits` varchar(1000) NOT NULL DEFAULT 'Project Credits',
  `ProjectURL` varchar(150) NOT NULL DEFAULT 'https://github.com/trnkarthik',
  `Visibility` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ProjectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `projectdetails`
--

INSERT INTO `projectdetails` (`ProjectID`, `ProjectName`, `ProjectType`, `ProjectRating`, `ProjectStartDate`, `ProjectEndDate`, `ProjectTools`, `ProjectDesc`, `ProjectMiniDesc`, `ProjectCredits`, `ProjectURL`, `Visibility`) VALUES
(1, 'Movie Reviewer', 'android', '5.00', '2012-10-01', NULL, 'Java, Android API, JSON, Rotten Tomatoes API, SQLite Database.', '<p><div class="project_desc_body">\n		<span class="project_desc_sub_head">\n		<b>Why</b> do you need this ?\n		</span>\n		<span class="project_desc_sub_body">\n		<bit>Imagine someone suggesting you what to watch over the weekend.\n		That''s exactly what our movie reviewer app does.</bit>\n		</span><br/>\n		<span class="project_desc_sub_head">\n		<b>What</b> we did\n		</span>\n		<span class="project_desc_sub_body">\n		<bit>We have chosen the most popular,Rotten Tomatoes API to retrieve movie details.</bit>\n		<bit>We divied movies into four categories.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Box Office Movies : </bit>\n		<bit style="text-indent: 90px">Displays Top Box Office Earning Movies, Sorted by Most Recent Weekend Gross Ticket Sales.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">In Theater Movies : </bit>\n		<bit style="text-indent: 90px">Retrieves movies currently in theaters.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Opening Movies : </bit>\n		<bit style="text-indent: 90px">Retrieves current opening movies.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Upcoming Movies : </bit>\n		<bit style="text-indent: 90px">Retrieves upcoming movies. Results are paginated if they go past the specified page limit.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">My Favourite Movies : </bit>\n		<bit style="text-indent: 90px">Users can save their favourie movies in the local SQLite database.</bit>\n		<bit>Users will also be able to filter movies according to different categories like ''R'',''Unrated'',''PG'',''PG-13''.</bit>\n		</span>\n	      </div>\n	    </p>\n	    <br/>\n', 'Movie Reviewer application keeps you updated about all new and upcoming movies.', '<div class="project_credits_block">\n		  <span class="project_credits_block_head">Mentor</span>\n		      <table>\n			<tr><td>Prof.Mohamed Shehab,</td></tr>\n			<tr><td>Assistant Professor,</td></tr>\n			<tr><td>Department of Software and Information Systems,</td></tr>\n			<tr><td>College of Computing and Informatics,</td></tr>\n			<tr><td>University of North Carolina at Charlotte.</td></tr>\n		      </table>\n		  <span class="project_credits_block_head">Institute</span>\n		  <table>\n			<tr><td>University of North Carolina at Charlotte,</td></tr>\n			<tr><td>Charlotte,North Carolina.</td></tr>\n		  </table>\n	    </div>', 'https://github.com/trnkarthik/MoviewReviewer', 1),
(2, 'Picture Puzzle', 'android', '5.00', '2012-09-01', NULL, 'Java, Android API', '<p>\n	      <div class="project_desc_body">\n		<span class="project_desc_sub_head">\n		<b>Why</b> do you need this ?\n		</span>\n		<span class="project_desc_sub_body">\n		<bit>Picture Puzzle game is designed in such a way that it improves your memory and sharpens logical thinking.</bit>\n		<bit>Games are fun and refreshing.Gaming is a way of relaxing.</bit>\n		</span><br/>\n		<span class="project_desc_sub_head">\n		<b>What</b> we did\n		</span>\n		<span class="project_desc_sub_body">\n		<bit>Picture Puzzle game is <span style="color: green">currently being updated.</span></bit>\n		<bit>In this game,users can select pictures from  </bit>\n		<bit style="text-indent: 60px;color: #DA7527">Pre-defined game libraries.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Phone Albums/Galleries.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Take a new picture using device camera.</bit>\n		<bit>User can play this puzzle game in both 3*3 and 4*4 mode.</bit>\n		</span>\n	      </div>\n	    </p>\n	    <br/>', 'This application is a traditional puzzle game. \nUsers can play puzzle with default application pictures or can even select pictures from their mobile gallery. Puzzles are sized in to 3*3 and 4*4.', '<div class="project_credits_block">\n		  <span class="project_credits_block_head">Mentor</span>\n		      <table>\n			<tr><td>Prof.Mohamed Shehab,</td></tr>\n			<tr><td>Assistant Professor,</td></tr>\n			<tr><td>Department of Software and Information Systems,</td></tr>\n			<tr><td>College of Computing and Informatics,</td></tr>\n			<tr><td>University of North Carolina at Charlotte.</td></tr>\n		      </table>\n		  <span class="project_credits_block_head">Institute</span>\n		  <table>\n			<tr><td>University of North Carolina at Charlotte,</td></tr>\n			<tr><td>Charlotte,North Carolina.</td></tr>\n		  </table>\n	    </div>', 'https://github.com/trnkarthik/PickImageFromGallery', 1),
(3, 'Hit the Frog', 'android', '5.00', '2012-11-01', '2012-12-01', 'Java, Android API, AndEngine Library, SQLite Database.', '<p>\n	      <div class="project_desc_body">\n		<span class="project_desc_sub_head">\n		<b>Why</b> do you need this ?\n		</span>\n		<span class="project_desc_sub_body">\n		<bit>Games are fun and refreshing.</bit>\n		<bit>Gaming is a way of relaxing.</bit>\n		</span><br/>\n		<span class="project_desc_sub_head">\n		<b>What</b> we did\n		</span>\n		<span class="project_desc_sub_body">\n		<bit>Hit The Frog was developed using, the latest, GLES 2 Engine of AndEngine Library.</bit>\n		<bit>This game can be played using </bit>\n		<bit style="text-indent: 60px;color: #DA7527">Touch Control (<i>Push Mode</i>) :</bit>\n		<bit style="text-indent: 90px">In this mode user have to hit the frog(target) by pushing the ball.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Motion Control (<i>Gravity Mode</i>) : </bit>\n		<bit style="text-indent: 90px">This is similar to push mode except accelerometer is used to move the ball.</bit>\n		<bit>User scores will be stored in local SQLite database.</bit>\n		</span>\n	      </div>\n	    </p>\n	    <br/>', 'This game is developed using, the latest, GLES 2 Engine of AndEngine.\nThis game have two modes\n-Push Mode : In this mode user have to hit the frog by pushing the ball.\n-Gravity Mode : This is similar ', '<div class="project_credits_block">\n		  <span class="project_credits_block_head">Mentor</span>\n		      <table>\n			<tr><td>Prof.Mohamed Shehab,</td></tr>\n			<tr><td>Assistant Professor,</td></tr>\n			<tr><td>Department of Software and Information Systems,</td></tr>\n			<tr><td>College of Computing and Informatics,</td></tr>\n			<tr><td>University of North Carolina at Charlotte.</td></tr>\n		      </table>\n		  <span class="project_credits_block_head">Institute</span>\n		  <table>\n			<tr><td>University of North Carolina at Charlotte,</td></tr>\n			<tr><td>Charlotte,North Carolina.</td></tr>\n		  </table>\n	    </div>', 'https://github.com/trnkarthik/HitTheFrog', 1),
(4, 'Currency Converter', 'android', '5.00', '2013-05-01', NULL, 'Java, Android API, Facebook API, Google Currency API, SQLite Database', 'Used Google currency API to update currency values and Facebook API to share currency updates.\nUsed SQLite database to store user preferences. \nFollowed Human Computer Interaction principles to design rich User Interface.\n', 'Used Google currency API to update currency values and Facebook API to share currency updates.\nUsed SQLite database to store user preferences. \nFollowed Human Computer Interaction principles to design', '<div class="project_credits_block">\n		  <span class="project_credits_block_head">Mentor</span>\n		      <table>\n			<tr><td>----</td></tr>\n		  </table>\n		  <span class="project_credits_block_head">Institute</span>\n		  <table>\n			<tr><td>University of North Carolina at Charlotte,</td></tr>\n			<tr><td>Charlotte,North Carolina.</td></tr>\n		  </table>\n	    </div>', '', 0),
(5, 'BMI Calculator ', 'android', '5.00', '2013-05-01', NULL, 'Java, Android API, Facebook API', '<p>\n	      <div class="project_desc_body">\n		<span class="project_desc_sub_head">\n		<b>Why</b> do you need this ?\n		</span>\n		<span class="project_desc_sub_body">\n		<bit>Health is wealth.It is always important to keep track of body fat.</bit>\n		<bit>BMI Calculator is a standard tool for helping you judge your body weight and the amount of \n		body fat you have.\n		</bit>\n		</span><br/>\n		<span class="project_desc_sub_head">\n		<b>What</b> we did\n		</span>\n		<span class="project_desc_sub_body">\n		This application is used to calculate body mass index.\n		To calculate BMI,users should input their gender,height and weight.<br/>\n		<bit>Users can use MKS(Meters - Kilograms -Seconds) system\n		or FPS(Foot - Pound - Second) system or even a combination of both to input their details.</bit>\n		<bit>Users can share their BMI with their network on Facebook.</bit>\n		<bit>We have used advanced HCI principles in UI design.</bit>\n		</span>\n	      </div>\n	    </p>\n	    <br/>\n\n\n\n\n\n', 'BMI Calculator is a standard tool for helping you judge your body weight and the amount of \n		body fat you have.', '<div class="project_credits_block">\n		  <span class="project_credits_block_head">Mentor</span>\n		      <table>\n			<tr><td>----</td></tr>\n		  </table>\n		  <span class="project_credits_block_head">Institute</span>\n		  <table>\n			<tr><td>University of North Carolina at Charlotte,</td></tr>\n			<tr><td>Charlotte,North Carolina.</td></tr>\n		  </table>\n	    </div>', '', 1),
(6, 'Social Networking Website ', 'web', '5.00', '2011-12-01', '2012-04-01', 'PHP, MySQL, AJAX, Facebook API, Google+ API, HTML, CSS, JavaScript, Wamp Server', '<p>\n	      <div class="project_desc_body">\n		<span class="project_desc_sub_head">\n		<b>Why</b> do you need this ?\n		</span>\n		<span class="project_desc_sub_body">\n		<bit>Social networks are always important.Social Network is an efficient tool to keep in contact\n		with several people at the same time.Social Networks,ofcourse provides great entertainment.</bit>\n		</span><br/>\n		<span class="project_desc_sub_head">\n		<b>What</b> we did\n		</span>\n		<span class="project_desc_sub_body">\n		<bit>Social Networking plus plus (SNPP) provides many major services of a social networking\n		websits along with life defining features that are unique to SNPP service.</bit>\n		<bit>This main intent of this project is to enhance the social networking experience.\n		We have used the following services to do that.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">User profiles</bit>\n		<bit style="text-indent: 90px">Show people who you are.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Hangouts</bit>\n		<bit style="text-indent: 90px">Place where people meet.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Trick Sharing Application</bit>\n		<bit style="text-indent: 90px">Share your knowledge with your friends.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Wish Sharing Application</bit>\n		<bit style="text-indent: 90px">Make a wish.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Photo Albums</bit>\n		<bit style="text-indent: 90px">Share your moments with your friends.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Online Diary Application</bit>\n		<bit style="text-indent: 90px">Describe your life.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Fame Meter Application</bit>\n		<bit style="text-indent: 90px">Let people know how famous you are.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Display Picture Assignment Application</bit>\n		<bit style="text-indent: 90px">Lets your friends assign a picture to you.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Connections</bit>\n		<bit style="text-indent: 90px">Form connections in all new way.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Interactive Help.</bit>\n		</span>\n	      </div>\n	    </p>\n	    <br/>Integrated with other social networks like Facebook and Google plus. ', 'This main intent of this project is to enhance the social networking experience by introducing tools like wish and trick sharing applications, social diary, fame meter, display picture assignment appl', '<div class="project_credits_block">\n		  <span class="project_credits_block_head">Mentor</span>\n		      <table>\n			<tr><td>Dr. T. Sita Maha Lakshmi,</td></tr>\n			<tr><td>Professor,CSE Department,</td></tr>\n			<tr><td>Gitam University.</td></tr>\n			<tr><td><hr/></td></tr>\n			<tr><td>Prof. N. Venkatesh,</td></tr>\n			<tr><td>Assistant Professor,CSE Department,</td></tr>\n			<tr><td>Gitam University.</td></tr>\n		      </table>\n		  <span class="project_credits_block_head">Institute</span>\n		  <table>\n			<tr><td>Gitam University,</td></tr>\n			<tr><td>Visakhapatnam,</td></tr>\n			<tr><td>India.</td></tr>\n		  </table>\n</div>', 'https://github.com/trnkarthik/SocialNetworkingWebsite', 1),
(7, 'UNCC Dorm Valet Web Application ', 'web', '5.00', '2012-08-01', '2012-12-01', 'JSP, Servlets, MySQL, HTML, CSS, JavaScript, Apache Tomcat', '<p>\n	      <div class="project_desc_body">\n		<span class="project_desc_sub_head">\n		<b>Why</b> do you need this ?\n		</span>\n		<span class="project_desc_sub_body">\n		<bit>Students at UNCC are increasingly busy juggling the demands of their studies,\n		their jobs, their group projects, their social lives, and getting some needed sleep.\n		The difficulty in finding time for all of these activities sometimes gets in the way\n		of eating or getting much loved Starbucks beverages.</bit>\n		</span><br/>\n		<span class="project_desc_sub_head">\n		<b>What</b> we did\n		</span>\n		<span class="project_desc_sub_body">\n		<bit>The Dorm Valet system will provide students with an online, easy to use system which allows\n		them to order food from restaurants on the UNCC campus for delivery to locations on the UNCC\n		campus.The system will allow the selection of restaurants, the selection of menu items,\n		electronic payment of the order, and order delivery confirmation notices.</bit>\n		<bit>The Dorm Valet system provides the Dorm Valet business and its participating restaurants with\n		the ability to manage orders.Restaurant managers are notified of new orders and can view order\n		details.</bit>\n		<bit>Dorm Valet automatically assigns orders to delivery persons and calculates the best route\n		for the orders to be delivered.Dorm Valet informs delivery persons of the details of their\n		assignments and routes and allows delivery persons to maintain their order status.</bit>\n		</span>\n	      </div>\n	    </p>\n	    <br/>', 'This online system allows students of UNCC to order food from restaurants on the UNCC campus. This project automates and facilitates taking orders, ordering food from restaurants, calculating best rou', '<div class="project_credits_block">\n		  <span class="project_credits_block_head">Mentor</span>\n		      <table>\n			<tr><td>Prof.William J. Tolone,</td></tr>\n			<tr><td>Professor,College of Computing and Informatics,</td></tr>\n			<tr><td>University of North Carolina at Charlotte.</td></tr>\n		      </table>\n		  <span class="project_credits_block_head">Institute</span>\n		  <table>\n			<tr><td>University of North Carolina at Charlotte,</td></tr>\n			<tr><td>Charlotte,North Carolina.</td></tr>\n		  </table>\n</div>', '', 1),
(8, 'Online Bookstore Management System ', 'web', '5.00', '2011-02-02', '2011-04-01', 'PHP, MySQL, HTML, CSS, JavaScript, Wamp Server', 'This is an e-commerce application, which consists master entry and customer entry.\nMaster entry deals with administrative functions like adding new titles (books), adding new stock, modifying and deleting stock. Customer entry allows the user to order books.\n', 'This is an e-commerce application, which consists master entry and customer entry.\nMaster entry deals with administrative functions like adding new titles (books), adding new stock, modifying and dele', 'Project Credits', 'https://github.com/trnkarthik/online_inventory_mgmt', 0),
(9, 'GenMEx Tool ', 'web', '5.00', '2011-07-01', '2011-08-01', 'PHP, DHTML, CSS, JavaScript, Wamp Server', 'This application is the implementation of IEEE publication ''GenMEx tool (Gene microsatellite extractor): Identification of tandem repeats''.\nThe problem of finding tandem repeats patterns in the given sequence was solved by combining the preprocessing method (PDFMCSP) with pattern searching method ''Two Sliding Window''.\nThe frequently occurring patterns are searched in the input sequence string using Two Sliding Window method (TSW) in which the string is scanned from both the sides at a time. The searching is stopped when both the windows converge.', 'This application is the implementation of IEEE publication ''GenMEx tool (Gene microsatellite extractor): Identification of tandem repeats''.\nThe problem of finding tandem repeats patterns in the given ', '<div class="project_credits_block">\n		  <span class="project_credits_block_head">Mentor</span>\n		      <table>\n			<tr><td>Prof.KVSRP Varma,</td></tr>\n			<tr><td>Assistant Professor,CSE Department,</td></tr>\n			<tr><td>Gitam University.</td></tr>\n		      </table>\n		  <span class="project_credits_block_head">Institute</span>\n		  <table>\n			<tr><td>Gitam University,</td></tr>\n			<tr><td>Visakhapatnam,</td></tr>\n			<tr><td>India.</td></tr>\n		  </table>\n</div>\n', '', 0),
(10, 'Genome Gene List Finder Tool', 'web', '5.00', '2011-08-01', '2011-10-01', 'PHP, MySQL, HTML, CSS, JavaScript, Wamp Server', '<p>\n	      <div class="project_desc_body">\n		<span class="project_desc_sub_head">\n		<b>Why</b> do you need this ?\n		</span>\n		<span class="project_desc_sub_body">\n		<bit>Geneome Gene Lists will provide new avenues for advances in medicine and biotechnology.\n		Researchers are in a great need for a tool which can find genes in a given species and also\n		compare genes in different species.</bit>\n		</span><br/>\n		<span class="project_desc_sub_head">\n		<b>What</b> we did\n		</span>\n		<span class="project_desc_sub_body">\n		<bit>Geneome Gene List Finder Tool can be mainly divided into two parts</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Species Gene Information : </bit>\n		<bit style="text-indent: 90px">Species Gene Information tool is used to find geneid,symbol,\n		number of chromosomes,map location,synonyms of a given specie.</bit>\n		<bit style="text-indent: 90px">Users can also search a specie by gene symbol or number of chromosomes.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Common Gene Identification : </bit>\n		<bit style="text-indent: 90px">Common Gene Identification Tool is used to find all the common genes among given species.</bit>\n		</span>\n	      </div>\n	    </p>\n	    <br/>', 'Used advanced techniques like materialized views to optimize data retrieval from the database.', '<div class="project_credits_block">\n		  <span class="project_credits_block_head">Mentor</span>\n		      <table>\n			<tr><td>Prof.KVSRP Varma,</td></tr>\n			<tr><td>Assistant Professor,CSE Department,</td></tr>\n			<tr><td>Gitam University.</td></tr>\n		      </table>\n		  <span class="project_credits_block_head">Institute</span>\n		  <table>\n			<tr><td>Gitam University,</td></tr>\n			<tr><td>Visakhapatnam,</td></tr>\n			<tr><td>India.</td></tr>\n		  </table>\n</div>\n', '', 1),
(11, 'Web Content Management System', 'web', '5.00', '2012-08-01', '2012-11-01', 'PHP, MySQL, HTML, CSS, JQuery,Ajax, Wamp Server.', '<p>\n	      <div class="project_desc_body">\n		<span class="project_desc_sub_head">\n		<b>Why</b> do you need this ?\n		</span>\n		<span class="project_desc_sub_body">\n		<bit>Increasing size and complexity of a website makes it difficult to maintain. Also to \n		manage a website, one needs the knowledge of programming and scripting languages like\n		HTML, CSS, PHP,JSP,ASP or Java. So it is not easy for everyone to maintain a website.</bit>\n		<bit>Managers and Business people who lack programming skills have to rely on their\n		web developers to manage their websites. On the other hand programmers need a system,\n		which can ease the process of storing and retrieving data.</bit>\n		<bit>So there is a great need of a system, which eases out the process of \n		maintaining a website and which provides flexibility to be extend it.</bit>\n		</span><br/>\n		<span class="project_desc_sub_head">\n		<b>What</b> we did\n		</span>\n		<span class="project_desc_sub_body">\n		<bit>Web Content Management System have three levels of users</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Users : </bit>\n		<bit style="text-indent: 90px">Users can view all the posts and their corresponding comments\n		but cannot post a comment.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Registered Users : </bit>\n		<bit style="text-indent: 90px">Registered users can view all the posts and their corresponding\n		comments.They can also post/delete a comment.</bit>\n		<bit style="text-indent: 60px;color: #DA7527">Super Users : </bit>\n		<bit style="text-indent: 90px"> Apart from performing all funcions of registered user,a super\n		user can manage users,posts,subjects.They can also start a new discussion.</bit>\n		</span>\n	      </div>\n	    </p>\n	    <br/>', 'Web Content Management System helps the non technical users to maintain a website quickly,easily and effectively.\nTechnical users can use this system to easily extend the functionality of their web ap', '<div class="project_credits_block">\n		  <span class="project_credits_block_head">Mentor</span>\n		      <table>\n			<tr><td>Prof.Wensheng Wu,</td></tr>\n			<tr><td>Assistant Professor,</td></tr>\n			<tr><td>Computer Science Department,</td></tr>\n			<tr><td>College of Computing and Informatics,</td></tr>\n			<tr><td>University of North Carolina at Charlotte.</td></tr>\n		      </table>\n		  <span class="project_credits_block_head">Institute</span>\n		  <table>\n			<tr><td>University of North Carolina at Charlotte,</td></tr>\n			<tr><td>Charlotte,North Carolina.</td></tr>\n		  </table>\n	    </div>\n', 'https://github.com/trnkarthik/WebCMS', 1),
(12, 'Survey Management System', 'web', '5.00', '2012-04-01', '2012-05-28', 'PHP, DHTML, CSS, Wamp Server.', 'Survey Management System is a web application to manage feedback and research via the web.\nUsed in Gitam University to conduct surveys.', 'Survey Management System is a web application to manage feedback and research via the web.\nUsed in Gitam University to conduct surveys.', 'Project Credits', 'https://github.com/trnkarthik/SurveyManagementSystem', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `projectimages`
--

INSERT INTO `projectimages` (`ProjectID`, `ImageID`, `Visibility`) VALUES
(1, 17, 1),
(1, 18, 1),
(1, 19, 1),
(1, 20, 1),
(1, 21, 1),
(2, 40, 1),
(2, 41, 1),
(2, 42, 1),
(3, 27, 1),
(3, 28, 1),
(3, 29, 1),
(3, 30, 1),
(5, 22, 1),
(5, 23, 1),
(5, 24, 1),
(5, 25, 1),
(5, 26, 1),
(6, 31, 1),
(6, 32, 1),
(6, 33, 1),
(6, 34, 1),
(6, 35, 1),
(6, 36, 1),
(6, 37, 1),
(6, 38, 1),
(6, 39, 1),
(7, 43, 1),
(7, 44, 1),
(7, 45, 1),
(7, 46, 1),
(7, 47, 1),
(7, 48, 1),
(7, 49, 1),
(7, 50, 1),
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
