-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 08:45 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

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
(93, 'Eoin Morgan', 5, 34, 'Batsman', 105, 2323, 14, 0, 91, 29.04, 0, '0', 0, 138.27, 2009, 'https://www.cricket.com.au/-/media/Players/Men/International/England/Eoin-Morgan-CWC19.ashx'),
(94, 'Jos Buttler', 5, 30, 'WK_Batsman', 80, 1791, 13, 0, 83, 31.42, 0, '0', 0, 140.25, 2011, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmzWLwodFONTUeTV7rlG_ON-gJc_M2Sf4NgVnBqjQbiV7bOYIujvCz_6wicZssMsLqKts&usqp=CAU'),
(95, 'Jonny Bairstow', 5, 31, 'WK_Batsman', 54, 1114, 7, 0, 86, 29.32, 0, '0', 0, 137.19, 2011, 'https://www.cricket.com.au/-/media/Players/Men/International/England/Jonny-Bairstow-CWC19.ashx'),
(96, 'Jason Roy', 5, 30, 'Batsman', 45, 1087, 5, 0, 78, 24.16, 0, '0', 0, 141.91, 2014, 'https://www.cricket.com.au/-/media/Players/Men/International/England/Jason-Roy-CWC19.ashx'),
(98, 'Dawid Malan', 5, 33, 'Batsman', 27, 1090, 11, 1, 103, 47.39, 1, '1/27', 13.5, 143.04, 2017, 'data:image/jpeg;base64,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'),
(99, 'Sam Billings', 5, 30, 'WK_Batsman', 32, 417, 2, 0, 87, 16.68, 0, '0', 0, 128.31, 2015, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGB3ciuDDTvrsBX-88z7HrjyIOZnmKzv3UXg&usqp=CAU'),
(100, 'Liam Livingstone', 5, 27, 'Batsman', 5, 59, 0, 0, 29, 19.67, 2, '1/8', 5.4, 107.27, 2017, 'https://www.espncricinfo.com/db/PICTURES/CMS/323100/323103.png'),
(101, 'Moeen Ali', 5, 34, 'Allrounder', 35, 399, 2, 0, 72, 16.62, 18, '2/21', 8.53, 133.89, 2014, 'https://www.cricket.com.au/-/media/Players/Men/International/England/Moeen-Ali-CWC19.ashx'),
(103, 'Chris Woakes', 5, 32, 'Allrounder', 10, 91, 0, 0, 37, 30.33, 8, '2/40', 8.12, 144.44, 2011, 'https://bsmedia.business-standard.com/_media/bs/img/topic-profile/profile-images/thumb/400_400/1559158235.jpg'),
(104, 'Tom Curran*', 5, 26, 'Allrounder', 28, 54, 0, 0, 14, 13.5, 26, '4/36', 9.31, 114.89, 2017, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/323100/323112.png'),
(105, 'Sam Curran', 5, 23, 'Allrounder', 16, 91, 0, 0, 24, 18.2, 16, '3/28', 7.93, 159.65, 2019, 'data:image/jpeg;base64,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'),
(106, 'David Willey', 5, 31, 'Allrounder', 30, 166, 0, 0, 29, 13.83, 37, '4/7', 7.98, 131.75, 2015, 'data:image/jpeg;base64,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'),
(107, 'Adil Rashid', 5, 33, 'Bowler', 60, 56, 0, 0, 9, 7, 59, '3/11', 7.46, 81.16, 2009, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/319700/319741.png'),
(108, 'Mark Wood', 5, 31, 'Bowler', 17, 10, 0, 0, 5, 0, 26, '3/9', 8.58, 83.33, 2015, 'https://www.cricket.com.au/-/media/Players/Men/International/England/Mark-Wood-CWC19.ashx'),
(110, 'Chris Jordan', 5, 32, 'Bowler', 63, 278, 0, 0, 36, 14.63, 73, '4/6', 8.71, 131.13, 2014, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316623.png'),
(113, 'Fakhar Zaman*', 4, 31, 'Batsman', 46, 948, 5, 0, 91, 22.45, 0, '0', 0, 135.04, 2017, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/320400/320449.png'),
(115, 'Babar Azam', 4, 26, 'Batsman', 54, 2035, 18, 1, 122, 47.33, 0, '0', 0, 129.7, 2016, 'https://www.espncricinfo.com/db/PICTURES/CMS/320400/320448.square.png'),
(116, 'Asif Ali', 4, 29, 'Batsman', 29, 344, 0, 0, 41, 16.38, 0, '0', 0, 123.74, 2018, 'https://www.geo.tv/assets/uploads/updates/2019-05-20/237807_7334447_updates.jpg'),
(118, 'Mohammad Hafeez', 4, 40, 'Allrounder', 106, 2388, 14, 0, 99, 27.14, 55, '4/10', 6.56, 120.73, 2006, 'https://www.cricket.com.au/-/media/Players/Men/International/Pakistan/ODIWC19/Mohammad-Hafeez-CWC19.ashx'),
(120, 'Shadab Khan', 4, 22, 'Allrounder', 46, 183, 0, 0, 42, 14.08, 53, '4/14', 7.29, 124.49, 2017, 'https://m.cricbuzz.com/a/img/v1/192x192/i1/c170779/shadab-khan.jpg'),
(121, 'Imad Wasim', 4, 32, 'Allrounder', 49, 302, 0, 0, 47, 13.73, 47, '5/14', 6.22, 145.89, 2015, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1k1lKojyoS7MSt_WK4fBpaM5LP9BxULj8H85oOdGTU9u0QLDw60nxVEnJqAA5zo71xNw&usqp=CAU'),
(123, 'Shaheen Afridi', 4, 21, 'Bowler', 25, 17, 0, 0, 10, 0, 27, '3/20', 7.93, 121.43, 2018, 'https://wikibio.in/wp-content/uploads/2021/03/Shaheen-Afridi-Pakistan.png'),
(124, 'Hasan Ali', 4, 27, 'Bowler', 36, 104, 0, 0, 23, 17.33, 48, '4/18', 8.41, 196.23, 2016, 'https://www.cricket.com.au/-/media/Players/Men/International/Pakistan/ODIWC19/Hasan-Ali-CWC19.ashx'),
(125, 'Mohammad Hasnain', 4, 21, 'Bowler', 14, 5, 4, 0, 0, 5, 13, '3/37', 7.3, 41.67, 2019, 'https://www.espncricinfo.com/db/PICTURES/CMS/322200/322216.square.png'),
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
(157, 'Asghar Afghan', 8, 33, 'Batsman', 72, 1317, 4, 0, 62, 21.59, 0, '0', 0, 109.66, 2010, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316654.png'),
(158, 'Usman Ghani', 8, 24, 'Batsman', 23, 551, 3, 0, 73, 26.24, 0, '0', 0, 111.09, 2015, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316700/316708.png'),
(160, 'Hashmatullah Shahidi', 8, 26, 'Batsman', 3, 0, 0, 0, 0, 0, 0, '0', 0, 0, 2021, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/320400/320495.png'),
(161, 'Najibullah Zadran', 8, 28, 'Batsman', 63, 1060, 4, 0, 72, 33.12, 0, '0', 0, 142.28, 2012, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316698.png'),
(162, 'Mohammad Nabi', 8, 36, 'Allrounder', 80, 1336, 4, 0, 89, 21.68, 72, '4/10', 7.26, 146.25, 2010, 'https://www.cricket.com.au/-/media/Players/Men/International/Afghanistan/Mohammad-Nabi-CWC19.ashx');
INSERT INTO `player_details` (`player_id`, `player_name`, `player_country`, `player_age`, `player_type`, `matches_played`, `total_runs`, `50`, `100`, `highest_score`, `average`, `wickets`, `best_figures`, `economy`, `strike_rate`, `debut_year`, `images`) VALUES
(163, 'Sharafuddin Ashraf', 8, 26, 'Allrounder', 9, 28, 0, 0, 18, 7, 5, '3/27', 7.81, 93.33, 2015, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/320500/320508.png'),
(164, 'Gulbadin Naib', 8, 30, 'Allrounder', 48, 492, 1, 0, 56, 17.57, 17, '2/24', 8.28, 124.24, 2012, 'https://www.cricket.com.au/-/media/Players/Men/International/Afghanistan/Gulbadin-Naib-CWC19.ashx'),
(168, 'Rehmanullah Gurbaz', 8, 19, 'WK_Batsman', 13, 446, 3, 0, 87, 34.31, 0, '0', 0, 143.87, 2019, 'https://www.espncricinfo.com/db/PICTURES/CMS/320500/320504.png'),
(169, 'Afsar Zazai*', 8, 27, 'WK_Batsman', 1, 9, 0, 0, 9, 9, 0, '0', 0, 42.86, 2013, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316682.png'),
(170, 'Dawlat Zadran', 8, 33, 'Bowler', 34, 72, 0, 0, 13, 7.2, 43, '4/44', 7.74, 163.64, 2012, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316643.png'),
(171, 'Hamid Hassan', 8, 34, 'Bowler', 21, 50, 0, 0, 22, 16.67, 29, '4/22', 6.77, 108.7, 2010, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316696.png'),
(172, 'Rashid Khan', 8, 22, 'Bowler', 51, 179, 0, 0, 33, 13.77, 95, '5/3', 6.22, 128.78, 2015, 'https://www.cricket.com.au/-/media/Players/Men/International/Afghanistan/Rashid-Khan-CWC19.ashx'),
(173, 'Mujeeb Ur Rahman', 8, 20, 'Bowler', 19, 8, 0, 0, 8, 0, 25, '4/15', 6.15, 100, 2018, 'https://www.espncricinfo.com/db/PICTURES/CMS/320500/320501.png'),
(174, 'Darren Bravo*', 9, 32, 'Batsman', 20, 340, 0, 0, 43, 20, 0, '0', 0, 107.26, 2010, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316600/316616.png'),
(175, 'Christopher Gayle', 9, 41, 'Batsman', 67, 1729, 13, 2, 117, 29.81, 19, '2/15', 7.03, 138.43, 2006, 'https://www.cricket.com.au/-/media/Players/Men/International/West%20Indies/ODIWC19/Chris-Gayle-CWC19.ashx'),
(176, 'Evin Lewis', 9, 29, 'Batsman', 41, 1167, 8, 2, 125, 30.71, 0, '0', 0, 156.02, 2016, 'https://m.cricbuzz.com/a/img/v1/192x192/i1/c170785/evin-lewis.jpg'),
(177, 'Shimron Hetmyer', 9, 24, 'Batsman', 32, 517, 2, 0, 61, 20.68, 0, '0', 0, 118.04, 2018, 'https://www.espncricinfo.com/db/PICTURES/CMS/320100/320116.png'),
(178, 'Fabian Allen', 9, 26, 'Allrounder', 25, 220, 0, 0, 34, 18.33, 18, '2/18', 7.11, 135.8, 2018, 'https://m.cricbuzz.com/a/img/v1/192x192/i1/c170794/fabian-allen.jpg'),
(179, 'Jason Holder*', 9, 29, 'Allrounder', 23, 199, 0, 0, 29, 16.58, 18, '2/23', 8.16, 119.16, 2014, 'https://m.cricbuzz.com/a/img/v1/192x192/i1/c170806/jason-holder.jpg'),
(180, 'Andre Russell', 9, 33, 'Allrounder', 56, 677, 1, 0, 51, 21.16, 32, '2/10', 9.14, 155.99, 2011, 'https://m.cricbuzz.com/a/img/v1/192x192/i1/c170821/andre-russell.jpg'),
(183, 'Nicholas Pooran', 9, 25, 'WK_Batsman', 34, 481, 2, 0, 58, 19.24, 0, '0', 0, 118.18, 2016, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/320100/320109.png'),
(184, 'Sheldon Cottrell*', 9, 31, 'Bowler', 31, 17, 0, 0, 4, 4.25, 39, '4/28', 7.88, 60.71, 2014, 'https://admin.thecricketer.com/weblab/sites/96c8b790-b593-bfda-0ba4-ecd3a9fdefc2/resources/images/site/cottrell140701.jpg'),
(187, 'Oshane Thomas', 9, 24, 'Bowler', 15, 8, 0, 0, 8, 4, 18, '5/28', 8.73, 72.73, 2018, 'https://www.espncricinfo.com/db/PICTURES/CMS/322000/322032.png'),
(190, 'Keiron Pollard', 9, 34, 'Allrounder', 84, 1343, 6, 0, 75, 24.42, 38, '4/25', 8.42, 137.6, 2008, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/320100/320107.png'),
(191, 'Dwayne Bravo', 9, 37, 'Allrounder', 81, 1222, 4, 0, 66, 23.5, 73, '4/19', 8.16, 115.83, 2006, 'https://www.espncricinfo.com/db/PICTURES/CMS/320000/320092.png'),
(195, 'Azam Khan', 4, 23, 'WK-Batsman', 3, 6, 0, 0, 5, 6, 0, '0', 0, 85.71, 2021, 'https://i.redd.it/tr25twux1t971.jpg'),
(196, 'Haris Rauf', 4, 27, 'Bowler', 23, 6, 0, 0, 6, 3, 28, '3/29', 8.94, 85.71, 2020, 'https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/322200/322202.png'),
(197, 'Khushdil Shah', 4, 26, 'Batsman', 9, 130, 0, 0, 36, 21.67, 0, '0/6', 6, 109.24, 2019, 'https://www.espncricinfo.com/db/PICTURES/CMS/322100/322168.png'),
(198, 'Mohammad Nawaz', 4, 27, 'Allrounder', 24, 70, 0, 0, 25, 11.67, 20, '2/11', 7.06, 100, 2016, 'https://www.cricbuzz.com/a/img/v1/152x152/i1/c148311/mohammad-nawaz.jpg'),
(199, 'Mohammad Rizwan', 4, 29, 'WK-Batsman', 43, 1065, 8, 1, 104, 48.41, 0, '0', 0, 129.09, 2015, 'https://www.cricbuzz.com/a/img/v1/152x152/i1/c202222/mohammad-rizwan.jpg'),
(200, 'Mohammad Wasim', 4, 20, 'Allrounder', 4, 1, 0, 0, 1, 0, 2, '1/20', 10.89, 33.33, 2021, 'https://images.cricket.com/players/72232_headshot_safari.png'),
(201, 'Shahnawaz Dahani*', 4, 23, 'Bowler', 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0000, 'https://static.wixstatic.com/media/3dde8e_1d0dba0b0ddb4d019c4849b7e5edeb29~mv2.png/v1/fill/w_440,h_324,al_c,q_85,usm_0.66_1.00_0.01/shahnawaz%20dhani.webp'),
(202, 'Usman Qadir*', 4, 28, 'Bowler', 16, 10, 0, 0, 4, 5, 20, '4/13', 7.41, 71.43, 2020, 'https://media.gettyimages.com/photos/usman-qadir-of-pakistan-poses-during-a-portrait-session-at-the-incora-picture-id1327311816'),
(203, 'Sohaib Maqsood', 4, 34, 'Batsman', 26, 273, 0, 0, 37, 13.65, 0, '0', 0, 116.67, 2013, 'https://www.cricbuzz.com/a/img/v1/152x152/i1/c155526/sohaib-maqsood.jpg'),
(204, 'Tymal Mills', 5, 29, 'Bowler', 5, 0, 0, 0, 0, 0, 3, '1/27', 0, 0, 2016, 'https://www.telegraph.co.uk/content/dam/cricket/2017/01/24/JS117202655_PA_Tymal-Mills-File-Photo_trans_NvBQzQNjv4BquE-7KYCIaKzbeo3sw3iG0Gchy1F8NiZZ7Ym45envgBk.jpg'),
(205, 'Liam Dawson*', 5, 31, 'Allrounder', 6, 17, 0, 0, 10, 17, 5, '3/27', 7.6, 212.5, 2016, 'https://www.cricbuzz.com/a/img/v1/152x152/i1/c170968/liam-dawson.jpg'),
(206, 'James Vince*', 5, 30, 'Batsman', 12, 340, 1, 0, 59, 28.3, 0, '0', 0, 123.6, 2015, 'https://resources.pulse.icc-cricket.com/players/284/831.png'),
(207, 'Obed McCoy', 9, 24, 'Bowler', 12, 36, 0, 0, 23, 12, 19, '4/22', 7.7, 144, 2019, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTn7818upqp5VKlOxOHUqupg3RBcYRxKXGyU2hcTVsDO8wv29VtXeh02hYgIJYefhiNHZs&usqp=CAU'),
(208, 'Lendl Simmons', 9, 36, 'Batsman', 66, 1508, 9, 0, 91, 26.93, 6, '4/19', 10.05, 123.3, 2007, 'https://www.cricbuzz.com/a/img/v1/152x152/i1/c157836/lendl-simmons.jpg'),
(209, 'Ravi Rampaul', 9, 36, 'Bowler', 23, 12, 0, 0, 8, 12, 29, '3/16', 8.51, 57.14, 2007, 'https://www.espncricinfo.com/db/PICTURES/CMS/320100/320111.png'),
(210, 'Roston Chase', 9, 29, 'Allrounder', 0, 0, 0, 0, 0, 0, 0, '0', 0, 0, 0000, 'https://www.espncricinfo.com/db/PICTURES/CMS/322000/322039.square.png'),
(211, 'Andre Fletcher', 9, 33, 'WK-Batsman', 54, 950, 6, 0, 84, 21.11, 0, '0', 0, 111.37, 2008, 'https://www.cricbuzz.com/a/img/v1/152x152/i1/c146338/andre-fletcher.jpg'),
(212, 'Hayden Walsh Jr.', 9, 29, 'Bowler', 20, 41, 0, 0, 12, 13.67, 19, '3/23', 7.72, 93.18, 2019, 'https://img1.hscicdn.com/image/upload/f_auto/lsci/db/PICTURES/CMS/286800/286881.1.jpg'),
(213, 'Akeal Hosein*', 9, 28, 'Bowler', 6, 2, 0, 0, 2, 0, 0, '0/24', 9.75, 66.67, 2021, 'https://www.cricbuzz.com/a/img/v1/152x152/i1/c157223/akeal-hosein.jpg'),
(214, 'Mohammad Shehzad', 8, 33, 'WK-Batsman', 64, 1860, 11, 1, 118, 30.49, 0, '0', 0, 134.01, 2010, 'https://www.cricbuzz.com/a/img/v1/152x152/i1/c170855/mohammad-shahzad.jpg'),
(215, 'Hazratullah Zazai', 8, 23, 'Batsman', 15, 570, 2, 1, 162, 40.71, 0, '0', 0, 155.31, 2016, 'https://www.cricbuzz.com/a/img/v1/152x152/i1/c170833/hazratullah-zazai.jpg'),
(216, 'Karim Janat', 8, 23, 'Bowler', 27, 268, 1, 0, 53, 16.75, 29, '5/11', 8.22, 113.08, 2016, 'https://www.espncricinfo.com/db/PICTURES/CMS/296900/296909.14.jpg'),
(217, 'Naveen-Ul-Haq', 8, 22, 'Bowler', 8, 7, 0, 0, 5, 7, 13, '3/21', 6.96, 100, 2019, 'https://cricfit.com/wp-content/uploads/2021/08/Afghanistan-cricketer-Naveen-Ul-Haq.jpg'),
(218, 'Shapoor Zadran', 8, 36, 'Bowler', 35, 27, 0, 0, 13, 3.86, 36, '3/40', 7.91, 41.54, 2010, 'https://www.cricbuzz.com/a/img/v1/152x152/i1/c176658/shapoor-zadran.jpg'),
(219, 'Qais Ahmed', 8, 21, 'Bowler', 21, 1, 0, 0, 0, 0, 3, '3/25', 6.25, 0, 2020, 'https://www.cricbuzz.com/a/img/v1/152x152/i1/c178321/qais-ahmad.jpg'),
(220, 'Fareed Malik*', 8, 27, 'Bowler', 16, 24, 0, 0, 24, 0, 21, '3/35', 8.33, 160, 2016, 'https://www.cricbuzz.com/a/img/v1/152x152/i1/c165696/fareed-malik.jpg');

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
(1, 'India', 'https://cdn.britannica.com/97/1597-004-05816F4E/Flag-India.jpg'),
(2, 'New Zealand', 'https://cdn.britannica.com/17/3017-004-DCC13F9D/Flag-New-Zealand.jpg'),
(3, 'Australia', 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Flag_of_Australia_%28converted%29.svg/255px-Flag_of_Australia_%28converted%29.svg.png'),
(4, 'Pakistan', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Flag_of_Pakistan.svg/1280px-Flag_of_Pakistan.svg.png'),
(5, 'England', 'https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png'),
(6, 'Sri Lanka', 'https://cdn.britannica.com/13/4413-004-3277D2EF/Flag-Sri-Lanka.jpg'),
(7, 'South Africa', 'https://cdn.britannica.com/27/4227-004-32423B42/Flag-South-Africa.jpg'),
(8, 'Afghanistan', 'https://cdn.britannica.com/40/5340-004-B25ED5CF/Flag-Afghanistan.jpg'),
(9, 'West Indies', 'https://upload.wikimedia.org/wikipedia/en/6/65/West_indies_cricket_board_flag.png'),
(10, 'Bangladesh', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Flag_of_Bangladesh.svg/1200px-Flag_of_Bangladesh.svg.png'),
(11, 'Scotland', 'https://upload.wikimedia.org/wikipedia/commons/1/10/Flag_of_Scotland.svg'),
(12, 'Ireland', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Flag_of_Ireland.svg/255px-Flag_of_Ireland.svg.png');

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
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

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
