-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 10:16 PM
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
-- Database: `evencricket`
--

-- --------------------------------------------------------

--
-- Table structure for table `head_to_head`
--

CREATE TABLE `head_to_head` (
  `uid` int(100) NOT NULL,
  `team_1` int(100) NOT NULL,
  `team_2` int(100) NOT NULL,
  `team_1_wins` int(100) NOT NULL,
  `team_2_wins` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `head_to_head`
--

INSERT INTO `head_to_head` (`uid`, `team_1`, `team_2`, `team_1_wins`, `team_2_wins`) VALUES
(1, 1, 4, 7, 1),
(2, 1, 2, 7, 3),
(3, 1, 8, 2, 0),
(4, 1, 10, 9, 1),
(5, 1, 12, 3, 0),
(6, 4, 2, 6, 4),
(7, 4, 8, 1, 0),
(8, 4, 10, 8, 2),
(9, 4, 12, 1, 0),
(10, 2, 8, 0, 0),
(11, 2, 10, 10, 0),
(12, 2, 12, 1, 0),
(13, 8, 10, 4, 2),
(14, 8, 12, 9, 1),
(15, 10, 12, 3, 1),
(16, 3, 5, 10, 8),
(17, 3, 7, 13, 8),
(18, 3, 9, 6, 10),
(19, 3, 6, 8, 8),
(20, 3, 11, 0, 0),
(21, 5, 7, 11, 9),
(22, 5, 9, 7, 11),
(23, 5, 6, 8, 4),
(24, 5, 11, 0, 0),
(25, 7, 9, 9, 6),
(26, 7, 6, 8, 5),
(27, 7, 11, 1, 0),
(28, 9, 6, 7, 7),
(29, 9, 11, 0, 0),
(30, 6, 11, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `heat_of_the_game`
--

CREATE TABLE `heat_of_the_game` (
  `team_1` int(100) NOT NULL,
  `team_2` int(100) NOT NULL,
  `about` text NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `player_details`
--

CREATE TABLE `player_details` (
  `player_id` int(11) NOT NULL,
  `player_name` text NOT NULL,
  `player_country` int(11) NOT NULL,
  `player_age` int(11) NOT NULL,
  `player_type` text NOT NULL,
  `matches_played` int(11) NOT NULL,
  `total_runs` int(11) NOT NULL,
  `50` int(11) NOT NULL,
  `100` int(11) NOT NULL,
  `highest_score` int(11) NOT NULL,
  `average` float NOT NULL,
  `wickets` int(11) NOT NULL,
  `best_figures` varchar(11) NOT NULL,
  `economy` float NOT NULL,
  `strike_rate` float NOT NULL,
  `debut_year` year(4) DEFAULT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player_details`
--

INSERT INTO `player_details` (`player_id`, `player_name`, `player_country`, `player_age`, `player_type`, `matches_played`, `total_runs`, `50`, `100`, `highest_score`, `average`, `wickets`, `best_figures`, `economy`, `strike_rate`, `debut_year`, `images`) VALUES
(1, 'Rohit Sharma', 1, 34, 'Batsman', 111, 2864, 22, 4, 118, 32.18, 1, '1/22', 9.97, 138.96, 2007, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316500/316584.png'),
(2, 'KL Rahul', 1, 29, 'Batsman', 49, 1557, 12, 2, 110, 39.92, 0, '0/0', 0, 142.19, 2016, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/319900/319942.png'),
(3, 'Virat Kohli', 1, 32, 'Batsman', 89, 3159, 28, 0, 94, 52.65, 4, '1/13', 8.14, 139.04, 2010, 'https://m.cricbuzz.com/a/img/v1/192x192/i1/c170661/virat-kohli.jpg'),
(4, 'Suryakumar Yadav', 1, 30, 'Batsman', 3, 89, 1, 0, 57, 44.5, 0, '0/0', 0, 135.28, 2021, 'https://images.indianexpress.com/2021/03/Suryakumar_Yadav_Twitter.jpg'),
(5, 'Ravindra Jadeja', 1, 32, 'Allrounder', 50, 217, 0, 0, 44, 15.5, 39, '3/48	', 7.1, 112.44, 2009, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316600.png'),
(6, 'Ravichandran Ashwin', 1, 35, 'Allrounder', 46, 123, 0, 0, 31, 30.75, 52, '4/8', 6.98, 19.73, 2010, 'https://pbs.twimg.com/media/E8wvIJFVEAgRXcM.jpg'),
(7, 'Hardik Pandya', 1, 27, 'Allrounder', 48, 474, 0, 0, 42, 19.75, 41, '4/38', 8.17, 147.66, 2016, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/319900/319938.png'),
(8, 'Rishabh Pant', 1, 23, 'WK-Batsman', 32, 512, 2, 0, 65, 21.33, 0, '0/0', 0, 123.37, 2017, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/323000/323036.png'),
(9, 'Ishan Kishan', 1, 22, 'WK-Batsman', 2, 60, 1, 0, 56, 30, 0, '0/0', 0, 131.96, 2021, 'https://img.mensxp.com/media/content/2019/Feb/eight-4s-amp-seven-6s-help-ishan-kishan-become-indias-wicket-keeper-captain-to-score-a-t20-ton-1200x900-1550839740_1200x900.jpg'),
(10, 'Axar Patel', 1, 27, 'Allrounder', 12, 75, 0, 0, 20, 18.75, 9, '3/17', 6.88, 131.58, 2015, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316700/316705.png'),
(11, 'Varun Chakravarthy', 1, 29, 'Bowler', 0, 0, 0, 0, 0, 0, 0, '0/0', 0, 0, 2021, 'https://m.cricbuzz.com/a/img/v1/192x192/i1/c196703/varun-chakravarthy.jpg'),
(12, 'Jasprit Bumrah', 1, 27, 'Bowler', 49, 8, 0, 0, 7, 4, 59, '3/11', 6.67, 61.54, 2016, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/319900/319940.png'),
(13, 'Mohammed Shami', 1, 30, 'Bowler', 12, 0, 0, 0, 0, 0, 12, '3/38', 9.8, 0, 2014, 'https://m.cricbuzz.com/a/img/v1/192x192/i1/c170684/mohammed-shami.jpg'),
(14, 'Rahul Chahar', 1, 22, 'Bowler', 5, 5, 0, 0, 5, 5, 7, '3/15', 7.61, 15.43, 2021, 'https://currentnewsbox.com/wp-content/uploads/2021/04/Rahul-Chahar-Girlfreind.jpg'),
(15, 'Bhuvneshwar Kumar', 1, 31, 'Bowler', 48, 23, 0, 0, 9, 5, 45, '5/24', 6.98, 79.31, 2012, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316658.png'),
(16, 'Deepak Chahar*', 1, 28, 'Bowler', 13, 1, 0, 0, 1, 0, 18, '6/7', 7.57, 100, 2018, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/322700/322704.png'),
(17, 'Shreyas Iyer*', 1, 26, 'Batsman', 28, 550, 3, 0, 67, 31.43, 0, '0/0', 0, 133.82, 2017, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/323000/323035.png'),
(18, 'Shardul Thakur*', 1, 29, 'Bowler', 21, 69, 0, 0, 22, 34.5, 31, '4/27', 9.11, 197.14, 2018, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/322600/322696.png'),
(24, 'Kane Williamson', 2, 30, 'Batsman', 67, 1805, 13, 0, 95, 31.67, 6, '2/16', 8.34, 124.91, 2011, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316618.png'),
(25, 'Martin Guptill', 2, 34, 'Batsman', 102, 2939, 17, 2, 105, 32.3, 0, '0/11', 11, 137.76, 2009, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316500/316591.png'),
(26, 'Mark Chapman', 2, 27, 'Allrounder', 30, 535, 1, 0, 63, 22.29, 4, '1/9', 7.31, 117.32, 2014, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/321200/321241.png'),
(27, 'James Neesham', 2, 30, 'Allrounder', 29, 324, 0, 0, 48, 21.6, 18, '3/16', 9.45, 157.28, 2013, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/319700/319781.png'),
(28, 'Mitchell Santner', 2, 29, 'Allrounder', 52, 335, 0, 0, 37, 15.23, 60, '4/11', 7.38, 126.89, 2015, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/319700/319792.png'),
(29, 'Tim Seifert', 2, 26, 'WK-Batsman', 35, 695, 5, 0, 84, 24.82, 0, '0/0', 0, 133.14, 2018, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/321300/321313.png'),
(30, 'Devon Conway', 2, 29, 'WK-Batsman', 14, 473, 4, 0, 99, 59.12, 0, '0/0', 0, 151.12, 2020, 'https://cdn.primedia.co.za/primedia-broadcasting/image/upload/c_fill,h_436,w_700/gedamyncu25piwzrqrw7'),
(31, 'Glenn Phillips', 2, 24, 'WK-Batsman', 25, 505, 2, 1, 108, 28.06, 2, '1/11', 7.6, 149.41, 2017, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/321200/321223.png'),
(32, 'Todd Astle', 2, 34, 'Bowler', 4, 4, 0, 0, 3, 2, 7, '4/13', 8.2, 11.71, 2016, 'https://m.cricbuzz.com/a/img/v1/192x192/i1/c154932/todd-astle.jpg'),
(33, 'Daryl Mitchell', 2, 30, 'Allrounder', 15, 148, 0, 0, 34, 16.44, 5, '2/27', 9.85, 137.04, 2019, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/321200/321212.png'),
(34, 'Ish Sodhi', 2, 28, 'Bowler', 57, 76, 0, 0, 16, 12.67, 73, '4/28', 8.07, 108.57, 2014, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/319700/319778.png'),
(35, 'Kyle Jamieson', 2, 26, 'Bowler', 8, 41, 0, 0, 30, 20.5, 4, '2/15', 9.8, 151.85, 2020, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/321200/321236.png'),
(36, 'Tim Southee', 2, 32, 'Bowler', 82, 249, 0, 0, 39, 11.32, 99, '5/18', 8.39, 127.78, 2008, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316500/316596.png'),
(37, 'Trent Boult', 2, 31, 'Bowler', 34, 28, 0, 0, 8, 5.6, 46, '4/34', 8.54, 73.68, 2013, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316619.png'),
(38, 'Lockie Ferguson', 2, 30, 'Bowler', 13, 1, 0, 0, 1, 1, 24, '5/21', 6.87, 33.33, 2017, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/321200/321239.png'),
(39, 'Adam Milne*', 2, 29, 'Bowler', 23, 21, 0, 0, 10, 0, 28, '4/37', 7.7, 16.88, 2010, 'https://resources.pulse.icc-cricket.com/players/champions-trophy-2017/284/434.png'),
(47, 'Aaron Finch', 3, 34, 'Batsman', 71, 2346, 14, 2, 172, 38.46, 0, '0/9', 13.5, 152.14, 2011, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316500/316533.png'),
(48, 'David Warner', 3, 34, 'Batsman', 81, 2265, 18, 1, 100, 31.46, 0, '0', 0, 139.73, 2011, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316500/316589.png'),
(49, 'Steven Smith', 3, 32, 'Batsman', 45, 794, 4, 0, 90, 27.38, 17, '3/20', 7.77, 129.53, 2010, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316609.png'),
(50, ' Matthew Wade', 3, 33, 'WK-Batsman', 38, 526, 3, 0, 80, 21.92, 0, '0', 0, 126.75, 2012, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316500/316594.png'),
(51, 'Glenn Maxwell', 3, 32, 'Allrounder', 72, 1780, 9, 3, 145, 31.79, 31, '3/10', 7.51, 158.93, 2012, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316657.png'),
(52, 'Marcus Stoinis', 3, 31, 'Allrounder', 73, 1482, 7, 1, 146, 29.64, 43, '3/16', 6.47, 100.14, 2015, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/321500/321596.png'),
(53, 'Mitchell Marsh', 3, 29, 'Allrounder', 20, 325, 0, 0, 45, 21.67, 7, '2/6', 7.95, 116.07, 2011, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316612.png'),
(54, 'Josh Inglis', 3, 26, 'Batsman', 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, NULL, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/324200/324232.png'),
(55, 'Mitchell Starc', 3, 31, 'Bowler', 35, 24, 0, 0, 7, 4.8, 47, '3/11', 6.95, 92.31, 2012, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316644.png'),
(56, 'Pat Cummins', 3, 28, 'Bowler', 30, 48, 0, 0, 13, 6.86, 37, '3/15', 6.93, 114.29, 2014, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316692.png'),
(57, 'Josh Hazlewood', 3, 30, 'Bowler', 9, 0, 0, 0, 0, 0, 9, '4/30', 9.19, 0, 2013, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316622.png'),
(58, 'Kane Richardson', 3, 30, 'Bowler', 26, 16, 0, 0, 9, 5.33, 29, '3/18', 7.92, 106.67, 2014, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/321500/321594.png'),
(59, 'Adam Zampa', 3, 29, 'Bowler', 41, 36, 0, 0, 13, 18, 43, '3/14', 6.92, 105.88, 2016, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/321500/321549.png'),
(60, 'Ashton Agar', 3, 27, 'Bowler', 32, 176, 0, 0, 29, 13.54, 38, '6/30', 6.88, 112.82, 2016, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/321500/321559.png'),
(61, 'Mitchell Swepson', 3, 27, 'Bowler', 4, 15, 0, 0, 12, 3, 7, '3/33', 7.57, 166.67, 2018, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/321600/321605.png'),
(62, 'Dan Christian*', 3, 38, 'Allrounder', 23, 118, 0, 0, 39, 14.75, 13, '3/27', 8.56, 30.62, 2010, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/321500/321572.png'),
(63, 'Nathan Ellis*', 3, 27, 'Bowler', 2, 1, 0, 0, 1, 1, 5, '3/34', 6.25, 10, 2021, 'https://p.imgci.com/db/PICTURES/CMS/325400/325475.6.jpg'),
(64, 'Daniel Sams*', 3, 28, 'Allrounder', 5, 6, 0, 0, 3, 3, 4, '2/40', 11.41, 20.5, 2020, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/321500/321573.png'),
(70, 'Quinton de Kock', 7, 28, 'WK-Batsman', 49, 1366, 6, 0, 76, 31.05, 0, 'N/A', 0, 136.87, 2012, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316668.png'),
(71, 'Temba Bavuma', 7, 31, 'Batsman', 10, 317, 0, 0, 49, 35.22, 0, 'N/A', 0, 132.08, 2019, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/320300/320389.png'),
(72, 'David Miller', 7, 32, 'Batsman', 83, 1545, 3, 1, 101, 30.29, 0, 'N/A', 0, 138.81, 2010, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316655.png'),
(73, 'Aiden Markram', 7, 26, 'Batsman', 6, 197, 3, 0, 63, 32.83, 0, 'N/A', 0, 171.3, 2019, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/322000/322067.png'),
(74, 'Heinrich Klaasen', 7, 29, 'Batsman', 22, 427, 3, 0, 69, 23.72, 0, '0/14', 14, 145.24, 2018, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/322000/322073.png'),
(75, 'Keshav Maharaj', 7, 31, 'Bowler', 3, 0, 0, 0, 0, 0, 1, '1/10', 4.23, 20.33, 2021, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/322000/322072.png'),
(76, 'Wiaan Mulder', 7, 23, 'Allrounder', 5, 51, 0, 0, 36, 25.5, 5, '2/10', 8.18, 18, 2021, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/322000/322086.png'),
(77, 'Kagiso Rabada', 7, 26, 'Bowler', 28, 50, 0, 0, 22, 12.5, 34, '3/30', 8.61, 102.04, 2014, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/320300/320376.png'),
(78, 'Lungi Ngidi', 7, 25, 'Bowler', 18, 7, 0, 0, 4, 2.33, 29, '4/19', 9.48, 46.67, 2017, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/322000/322069.png'),
(79, 'Anrich Nortje', 7, 27, 'Bowler', 7, 2, 0, 0, 2, 2, 4, '1/24', 7.68, 25, 2019, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/322000/322080.png'),
(80, 'Tabraiz Shamsi', 7, 31, 'Bowler', 34, 4, 0, 0, 2, 2, 33, '4/25', 7.26, 25, 2017, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/322000/322068.png'),
(81, 'Rassi Van Der Dussen', 7, 32, 'Batsman', 22, 686, 5, 0, 74, 42.88, 0, 'N/A', 0, 138.59, 2018, 'https://p.imgci.com/db/PICTURES/CMS/322000/322070.square.png'),
(82, 'Reeza Hendricks', 7, 31, 'Batsman', 30, 793, 5, 0, 74, 26.43, 0, '0/21', 21, 121.25, 2014, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/322000/322071.png'),
(83, 'Bjorn Fortuin', 7, 26, 'Bowler', 7, 35, 0, 0, 17, 11.67, 6, '2/19', 8.05, 125, 2019, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/322400/322461.png'),
(84, 'Dwaine Pretorius', 7, 32, 'Allrounder', 14, 159, 1, 0, 77, 31.8, 13, '5/17', 8.08, 165.63, 2017, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/322000/322077.png'),
(85, 'Andile Phehlukwayo*', 7, 25, 'Allrounder', 34, 127, 0, 0, 27, 9.07, 39, '4/24', 8.42, 113.39, 2017, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/320300/320334.png'),
(86, 'George Linde*', 7, 29, 'Allrounder', 9, 95, 0, 0, 29, 13.57, 7, '3/23', 7.03, 153.23, 2020, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/322100/322109.png'),
(87, 'Lizaad Williams*', 7, 27, 'Bowler', 6, 4, 0, 0, 2, 0, 9, '3/35', 8.79, 15.78, 2021, 'https://m.cricbuzz.com/a/img/v1/192x192/i1/c157325/lizaad-williams.jpg'),
(93, 'Eoin Morgan', 5, 34, 'Batsman', 105, 2323, 14, 0, 91, 29.04, 0, '0', 0, 138.27, 2009, ''),
(94, 'Jos Buttler', 5, 30, 'WK_Batsman', 80, 1791, 13, 0, 83, 31.42, 0, '0', 0, 140.25, 2011, ''),
(95, 'Jonny Bairstow', 5, 31, 'WK_Batsman', 54, 1114, 7, 0, 86, 29.32, 0, '0', 0, 137.19, 2011, ''),
(96, 'Jason Roy', 5, 30, 'Batsman', 45, 1087, 5, 0, 78, 24.16, 0, '0', 0, 141.91, 2014, ''),
(97, 'Joe Root', 5, 30, 'Batsman', 32, 893, 5, 0, 90, 35.72, 6, '2/9', 9.93, 126.31, 2012, ''),
(98, 'Dawid Malan', 5, 33, 'Batsman', 27, 1090, 11, 1, 103, 47.39, 1, '1/27', 13.5, 143.04, 2017, ''),
(99, 'Sam Billings', 5, 30, 'WK_Batsman', 32, 417, 2, 0, 87, 16.68, 0, '0', 0, 128.31, 2015, ''),
(100, 'Liam Livingstone', 5, 27, 'Batsman', 5, 59, 0, 0, 29, 19.67, 2, '1/8', 5.4, 107.27, 2017, ''),
(101, 'Moeen Ali', 5, 34, 'Allrounder', 35, 399, 2, 0, 72, 16.62, 18, '2/21', 8.53, 133.89, 2014, ''),
(102, 'Ben Stokes', 5, 30, 'Allrounder', 34, 442, 0, 0, 47, 20.09, 19, '3/26', 8.78, 136.84, 2011, ''),
(103, 'Chris Woakes', 5, 32, 'Allrounder', 10, 91, 0, 0, 37, 30.33, 8, '2/40', 8.12, 144.44, 2011, ''),
(104, 'Tom Curran', 5, 26, 'Allrounder', 28, 54, 0, 0, 14, 13.5, 26, '4/36', 9.31, 114.89, 2017, ''),
(105, 'Sam Curran', 5, 23, 'Allrounder', 16, 91, 0, 0, 24, 18.2, 16, '3/28', 7.93, 159.65, 2019, ''),
(106, 'David Willey', 5, 31, 'Allrounder', 30, 166, 0, 0, 29, 13.83, 37, '4/7', 7.98, 131.75, 2015, ''),
(107, 'Adil Rashid', 5, 33, 'Bowler', 60, 56, 0, 0, 9, 7, 59, '3/11', 7.46, 81.16, 2009, ''),
(108, 'Mark Wood', 5, 31, 'Bowler', 17, 10, 0, 0, 5, 0, 26, '3/9', 8.58, 83.33, 2015, ''),
(109, 'Jofra Archer', 5, 26, 'Bowler', 12, 19, 0, 0, 18, 19, 14, '4/33', 7.89, 190.2, 2019, ''),
(110, 'Chris Jordan', 5, 32, 'Bowler', 63, 278, 0, 0, 36, 14.63, 73, '4/6', 8.71, 131.13, 2014, ''),
(113, 'Fakhar Zaman', 4, 31, 'Batsman', 46, 948, 5, 0, 91, 22.45, 0, '0', 0, 135.04, 2017, ''),
(114, 'Imam-ul-Haq', 4, 25, 'Batsman', 2, 21, 0, 0, 14, 10.5, 0, '0', 0, 84, 2019, ''),
(115, 'Babar Azam', 4, 26, 'Batsman', 54, 2035, 18, 1, 122, 47.33, 0, '0', 0, 129.7, 2016, ''),
(116, 'Asif Ali', 4, 29, 'Batsman', 29, 344, 0, 0, 41, 16.38, 0, '0', 0, 123.74, 2018, ''),
(117, 'Haris Sohail', 4, 32, 'Allrounder', 14, 210, 2, 0, 52, 19.09, 0, '0', 0, 102.94, 2013, ''),
(118, 'Mohammad Hafeez', 4, 40, 'Allrounder', 106, 2388, 14, 0, 99, 27.14, 55, '4/10', 6.56, 120.73, 2006, ''),
(119, 'Shoaib Malik', 4, 39, 'Allrounder', 116, 2335, 8, 0, 75, 31.13, 28, '2/7', 7.09, 124.2, 2006, ''),
(120, 'Shadab Khan', 4, 22, 'Allrounder', 46, 183, 0, 0, 42, 14.08, 53, '4/14', 7.29, 124.49, 2017, ''),
(121, 'Imad Wasim', 4, 32, 'Allrounder', 49, 302, 0, 0, 47, 13.73, 47, '5/14', 6.22, 145.89, 2015, ''),
(122, 'Sarfaraz Ahmed', 4, 34, 'WK_Batsman', 60, 812, 3, 0, 89, 28, 0, '0', 0, 126.68, 2010, ''),
(123, 'Shaheen Afridi', 4, 21, 'Bowler', 25, 17, 0, 0, 10, 0, 27, '3/20', 7.93, 121.43, 2018, ''),
(124, 'Hasan Ali', 4, 27, 'Bowler', 36, 104, 0, 0, 23, 17.33, 48, '4/18', 8.41, 196.23, 2016, ''),
(125, 'Mohammad Hasnain', 4, 21, 'Bowler', 14, 5, 4, 0, 0, 5, 13, '3/37', 7.3, 41.67, 2019, ''),
(126, 'Tamim Iqbal', 10, 32, 'Batsman', 78, 1758, 7, 1, 103, 24.08, 0, '0', 0, 117.2, 2007, ''),
(127, 'Soumya Sarkar', 10, 28, 'Batsman', 53, 951, 3, 0, 62, 19.02, 6, '2/29', 10.42, 127.99, 2015, ''),
(128, 'Sabbir Rahman', 10, 29, 'Batsman', 44, 946, 4, 0, 80, 24.89, 6, '3/11', 11.67, 120.82, 2014, ''),
(130, 'Mahmudullah', 10, 35, 'Allrounder', 89, 1506, 4, 0, 64, 23.9, 31, '3/18', 7.29, 123.14, 2007, ''),
(131, 'Shakib Al Hasan', 10, 34, 'Allrounder', 76, 1567, 9, 0, 84, 23.74, 92, '5/20', 6.81, 123.87, 2006, ''),
(132, 'Mohammad Saifuddin', 10, 24, 'Allrounder', 17, 145, 0, 0, 39, 20.71, 15, '4/33', 9, 127.41, 2017, ''),
(133, 'Mosaddek Hossain', 10, 25, 'Allrounder', 15, 196, 0, 0, 34, 19.6, 5, '2/21', 7.38, 108.29, 2016, ''),
(134, 'Mehidy Hasan', 10, 23, 'Allrounder', 13, 94, 0, 0, 19, 10.44, 4, '2/31', 0.9, 117.5, 2017, ''),
(135, 'Mushfiqur Rahim', 10, 34, 'WK_Batsman', 86, 1282, 5, 0, 72, 19.72, 0, '0', 0, 119.93, 2006, ''),
(136, 'Liton Das', 10, 26, 'WK_Batsman', 32, 646, 4, 0, 61, 20.84, 0, '0', 0, 124.02, 2015, ''),
(137, 'Mohammad Mithun', 10, 30, 'WK_Batsman', 17, 127, 0, 0, 47, 10.58, 0, '0', 0, 93.38, 2014, ''),
(138, 'Mashrafe Mortaza', 10, 37, 'Bowler', 54, 377, 0, 0, 36, 13.46, 42, '4/19', 8.05, 135.61, 2006, ''),
(139, 'Rubel Hossain', 10, 31, 'Bowler', 28, 20, 0, 0, 8, 4, 28, '3/31', 9.45, 55.56, 2009, ''),
(140, 'Mustafizur Rahman', 10, 25, 'Bowler', 42, 43, 0, 0, 15, 4.3, 58, '5/22', 8.04, 78.18, 2015, ''),
(141, 'Abu Jayed', 10, 27, 'Bowler', 3, 3, 0, 0, 2, 1.5, 4, '2/27', 9.64, 42.86, 2018, ''),
(142, 'Oshada Fernando', 6, 29, 'Batsman', 6, 128, 1, 0, 78, 25.6, 0, '0', 0, 112, 2019, ''),
(143, 'Lahiru Thirimanne', 6, 31, 'Batsman', 26, 291, 0, 0, 44, 16.17, 0, '0', 0, 108.9, 2012, ''),
(144, 'Avishka Fernando', 6, 33, 'Batsman', 16, 201, 0, 0, 37, 12.56, 0, '0', 0, 96.63, 2019, ''),
(145, 'Kusal Mendis', 6, 26, 'Batsman', 29, 538, 5, 0, 59, 18.55, 0, '0', 0, 127.19, 2016, ''),
(146, 'Angelo Mathews', 6, 34, 'Allrounder', 78, 1148, 5, 0, 81, 25.51, 58, '3/16', 7.2, 117.74, 2009, ''),
(147, 'Dhananjaya De Silva', 6, 29, 'Allrounder', 15, 334, 2, 0, 62, 20.88, 5, '2/22', 7.11, 109.51, 2015, ''),
(148, 'Thisara Perera', 6, 32, 'Allrounder', 84, 1204, 3, 0, 61, 33.15, 51, '3/24', 9.35, 151.64, 2010, ''),
(149, 'Milinda Siriwardana', 6, 35, 'Allrounder', 22, 205, 0, 0, 42, 17.19, 8, '2/17', 8.96, 132.21, 2015, ''),
(150, 'Isuru Udana', 6, 33, 'Allrounder', 32, 255, 1, 0, 84, 19.62, 27, '3/11', 8.75, 138.59, 2009, ''),
(151, 'Jeevan Mendis', 6, 38, 'Allrounder', 22, 208, 0, 0, 43, 18.91, 12, '3/24', 7.11, 119.54, 2011, ''),
(152, 'Kusal Perera', 6, 30, 'WK_Batsman', 49, 1347, 12, 0, 84, 27.49, 0, '0', 0, 132.97, 2013, ''),
(153, 'Lasith Malinga', 6, 37, 'Bowler', 83, 130, 0, 0, 27, 6.28, 107, '5/6', 7.42, 84.47, 2006, ''),
(154, 'Suranga Lakmal', 6, 34, 'Bowler', 11, 7, 0, 0, 5, 2.33, 8, '2/26', 9.52, 63.64, 2011, ''),
(155, 'Nuwan Pradeep', 6, 34, 'Bowler', 16, 10, 0, 0, 8, 10, 15, '4/25', 9.41, 66.67, 2016, ''),
(156, 'Jeffrey Vandersay', 6, 31, 'Bowler', 10, 15, 0, 0, 8, 15, 6, '2/26', 7.49, 88.24, 2015, ''),
(157, 'Asghar Afghan', 8, 33, 'Batsman', 72, 1317, 4, 0, 62, 21.59, 0, '0', 0, 109.66, 2010, ''),
(158, 'Usman Ghani', 8, 24, 'Batsman', 23, 551, 3, 0, 73, 26.24, 0, '0', 0, 111.09, 2015, ''),
(159, 'Ibrahim Zadran', 8, 19, 'Batsman', 3, 14, 0, 0, 11, 4.67, 0, '0', 0, 53.85, 2019, ''),
(160, 'Hashmatullah Shahidi', 8, 26, 'Batsman', 3, 0, 0, 0, 0, 0, 0, '0', 0, 0, 2021, ''),
(161, 'Najibullah Zadran', 8, 28, 'Batsman', 63, 1060, 4, 0, 72, 33.12, 0, '0', 0, 142.28, 2012, ''),
(162, 'Mohammad Nabi', 8, 36, 'Allrounder', 80, 1336, 4, 0, 89, 21.68, 72, '4/10', 7.26, 146.25, 2010, ''),
(163, 'Sharafuddin Ashraf', 8, 26, 'Allrounder', 9, 28, 0, 0, 18, 7, 5, '3/27', 7.81, 93.33, 2015, ''),
(164, 'Gulbadin Naib', 8, 30, 'Allrounder', 48, 492, 1, 0, 56, 17.57, 17, '2/24', 8.28, 124.24, 2012, ''),
(165, 'Samiullah Shinwari', 8, 34, 'Allrounder', 63, 977, 2, 0, 61, 20.79, 25, '5/13', 6.71, 114.94, 2010, ''),
(166, 'Noor Ali Zadran', 8, 33, 'Batsman', 19, 495, 3, 0, 63, 26.05, 0, '0', 0, 100.61, 2010, ''),
(167, 'Aftab Alam', 8, 28, 'Bowler', 13, 2, 0, 0, 1, 1, 15, '4/25', 7.78, 22.22, 2012, ''),
(168, 'Rehmanullah Gurbaz', 8, 19, 'WK_Batsman', 13, 446, 3, 0, 87, 34.31, 0, '0', 0, 143.87, 2019, ''),
(169, 'Afsar Zazai', 8, 27, 'WK_Batsman', 1, 9, 0, 0, 9, 9, 0, '0', 0, 42.86, 2013, ''),
(170, 'Dawlat Zadran', 8, 33, 'Bowler', 34, 72, 0, 0, 13, 7.2, 43, '4/44', 7.74, 163.64, 2012, ''),
(171, 'Hamid Hassan', 8, 34, 'Bowler', 21, 50, 0, 0, 22, 16.67, 29, '4/22', 6.77, 108.7, 2010, ''),
(172, 'Rashid Khan', 8, 22, 'Bowler', 51, 179, 0, 0, 33, 13.77, 95, '5/3', 6.22, 128.78, 2015, ''),
(173, 'Mujeeb Ur Rahman', 8, 20, 'Bowler', 19, 8, 0, 0, 8, 0, 25, '4/15', 6.15, 100, 2018, ''),
(174, 'Darren Bravo', 9, 32, 'Batsman', 20, 340, 0, 0, 43, 20, 0, '0', 0, 107.26, 2010, ''),
(175, 'Christopher Gayle', 9, 41, 'Batsman', 67, 1729, 13, 2, 117, 29.81, 19, '2/15', 7.03, 138.43, 2006, ''),
(176, 'Evin Lewis', 9, 29, 'Batsman', 41, 1167, 8, 2, 125, 30.71, 0, '0', 0, 156.02, 2016, ''),
(177, 'Shimron Hetmyer', 9, 24, 'Batsman', 32, 517, 2, 0, 61, 20.68, 0, '0', 0, 118.04, 2018, ''),
(178, 'Fabian Allen', 9, 26, 'Allrounder', 25, 220, 0, 0, 34, 18.33, 18, '2/18', 7.11, 135.8, 2018, ''),
(179, 'Jason Holder', 9, 29, 'Allrounder', 23, 199, 0, 0, 29, 16.58, 18, '2/23', 8.16, 119.16, 2014, ''),
(180, 'Andre Russell', 9, 33, 'Allrounder', 56, 677, 1, 0, 51, 21.16, 32, '2/10', 9.14, 155.99, 2011, ''),
(181, 'Carlos Braithwaite', 9, 32, 'Allrounder', 41, 310, 0, 0, 37, 14.76, 31, '3/20', 8.57, 113.14, 2011, ''),
(182, 'Shai Hope', 9, 27, 'WK_Batsman', 13, 238, 2, 0, 55, 21.64, 0, '0', 0, 136, 2017, ''),
(183, 'Nicholas Pooran', 9, 25, 'WK_Batsman', 34, 481, 2, 0, 58, 19.24, 0, '0', 0, 118.18, 2016, ''),
(184, 'Sheldon Cottrell', 9, 31, 'Bowler', 31, 17, 0, 0, 4, 4.25, 39, '4/28', 7.88, 60.71, 2014, ''),
(185, 'Shanon Gabriel', 9, 33, 'Bowler', 2, 0, 0, 0, 0, 0, 3, '3/34', 8, 0, 2013, ''),
(186, 'Kemar Roach', 9, 33, 'Bowler', 11, 3, 0, 0, 3, 0, 10, '2/25', 7.28, 150, 2008, ''),
(187, 'Oshane Thomas', 9, 24, 'Bowler', 15, 8, 0, 0, 8, 4, 18, '5/28', 8.73, 72.73, 2018, ''),
(188, 'Ashley Nurse', 9, 32, 'Bowler', 13, 85, 0, 0, 20, 42.5, 8, '2/6', 7.29, 119.72, 2011, ''),
(189, 'Fidel Edwards', 9, 39, 'Bowler', 26, 11, 0, 0, 7, 5.5, 20, '3/23', 8.24, 78.57, 2007, ''),
(190, 'Keiron Pollard', 9, 34, 'Allrounder', 84, 1343, 6, 0, 75, 24.42, 38, '4/25', 8.42, 137.6, 2008, ''),
(191, 'Dwayne Bravo', 9, 37, 'Allrounder', 81, 1222, 4, 0, 66, 23.5, 73, '4/19', 8.16, 115.83, 2006, ''),
(192, 'Jason Mohammed', 9, 34, 'Batsman', 9, 90, 0, 0, 23, 18, 0, '0', 0, 87.38, 2017, '');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(100) NOT NULL,
  `team_1` int(100) NOT NULL,
  `team_2` int(100) NOT NULL,
  `venue` text NOT NULL,
  `time` time(6) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(100) NOT NULL,
  `country_name` text NOT NULL,
  `flag` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `country_name`, `flag`) VALUES
(1, 'India', ''),
(2, 'New Zealand', ''),
(3, 'Australia', ''),
(4, 'Pakistan', ''),
(5, 'England', ''),
(6, 'Sri Lanka', ''),
(7, 'South Africa', ''),
(8, 'Afghanistan', ''),
(9, 'West Indies', ''),
(10, 'Bangladesh', ''),
(11, 'Scotland', ''),
(12, 'Ireland', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `head_to_head`
--
ALTER TABLE `head_to_head`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `team_1` (`team_1`),
  ADD KEY `team_2` (`team_2`);

--
-- Indexes for table `heat_of_the_game`
--
ALTER TABLE `heat_of_the_game`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `team_1` (`team_1`),
  ADD KEY `team_2` (`team_2`);

--
-- Indexes for table `player_details`
--
ALTER TABLE `player_details`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `player_country` (`player_country`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedule_ibfk_1` (`team_1`),
  ADD KEY `schedule_ibfk_2` (`team_2`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `head_to_head`
--
ALTER TABLE `head_to_head`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `heat_of_the_game`
--
ALTER TABLE `heat_of_the_game`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `player_details`
--
ALTER TABLE `player_details`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `head_to_head`
--
ALTER TABLE `head_to_head`
  ADD CONSTRAINT `head_to_head_ibfk_1` FOREIGN KEY (`team_1`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `head_to_head_ibfk_2` FOREIGN KEY (`team_2`) REFERENCES `teams` (`id`);

--
-- Constraints for table `heat_of_the_game`
--
ALTER TABLE `heat_of_the_game`
  ADD CONSTRAINT `heat_of_the_game_ibfk_1` FOREIGN KEY (`team_1`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `heat_of_the_game_ibfk_2` FOREIGN KEY (`team_2`) REFERENCES `teams` (`id`);

--
-- Constraints for table `player_details`
--
ALTER TABLE `player_details`
  ADD CONSTRAINT `player_details_ibfk_1` FOREIGN KEY (`player_country`) REFERENCES `teams` (`id`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`team_1`) REFERENCES `teams` (`id`),
  ADD CONSTRAINT `schedule_ibfk_2` FOREIGN KEY (`team_2`) REFERENCES `teams` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
