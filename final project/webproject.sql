-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 04:29 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `ar_id` int(50) NOT NULL,
  `ar_name` varchar(50) NOT NULL,
  `ar_username` varchar(50) NOT NULL,
  `ar_pass` varchar(50) NOT NULL,
  `ar_email` varchar(50) NOT NULL,
  `ar_position` varchar(50) NOT NULL,
  `ar_degree` varchar(50) NOT NULL,
  `ar_salary` varchar(50) NOT NULL,
  `ar_gender` varchar(50) NOT NULL,
  `ar_image` varchar(350) NOT NULL,
  `ar_dob` varchar(50) NOT NULL,
  `acctype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`ar_id`, `ar_name`, `ar_username`, `ar_pass`, `ar_email`, `ar_position`, `ar_degree`, `ar_salary`, `ar_gender`, `ar_image`, `ar_dob`, `acctype`) VALUES
(1, 'dfgdfg', 'saif', '1234', 'dfgdf', 'dfgdf', 'dfgdf', '40000', 'male', 'pic/Capture.PNG', '2021-08-27', 'other'),
(27, 'dfgdfg', 'fgdg', 'jl;djfgl;jdgfl;jf', 'ashik@gmail.com', 'dfgdf', 'PHD', 'fdg', 'male', 'pic/Capture.PNG', '2021-08-25', 'Accountant'),
(64, 'asfafdadf', 'sfsfsd', 'sfsfdsdfdsafaddsf', 'safdasdfdsaf@gmail.com', 'fasdfasdf', 'safasdfsdaf', 'sfdasfasfd', 'male', 'pic/Capture.PNG', '2021-08-11', 'Accountant');

-- --------------------------------------------------------

--
-- Table structure for table `accountlogin`
--

CREATE TABLE `accountlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `profilepic` varchar(350) NOT NULL,
  `acctype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountlogin`
--

INSERT INTO `accountlogin` (`id`, `name`, `username`, `password`, `email`, `position`, `degree`, `gender`, `dob`, `profilepic`, `acctype`) VALUES
(1, 'Saif Ali', 'saif', '1234', 'saifali.ali010@gmail.com', 'Senior Admin', 'PHD', 'male', '09-02-1990', 'pic/Capture.PNG', 'admin'),
(2, 'Fazlay Rabbi', 'rabbi', '1234', '', '', '', 'accountant', '', 'pic/background-image.png', 'accountant'),
(17, 'niloy', 'sdfsf', 'sfsdfsdfasdfasdf', 'sfdj@gmail.com', '5', 'C', 'male', '2021-08-18', 'pic/Capture.PNG', 'Student'),
(19, 'fsdfd', 'sfsadf', '65149649494', 'fdasfd@gmail.com', 'sfdasdfasf', 'sfsdf', 'male', '2021-08-13', 'pic/Capture.PNG', 'Teacher'),
(25, 'sfsafda', 'asdfsadf', 'sfdfsfsfsfsadfsadfsf', 'fdsafds@gmail.com', 'safas', 'sf', 'male', '2021-08-30', 'pic/Capture.PNG', 'Teacher'),
(27, 'dfgdfg', 'fgdg', 'jl;djfgl;jdgfl;jf', 'ashik@gmail.com', 'dfgdf', 'PHD', 'male', '2021-08-25', 'pic/Capture.PNG', 'Accountant'),
(55, 'Shiraaj', 'safjalsjdf', 'sdljdfsaljdfslj', 'sfdj@gmail.com', 'sfsafa', 'safsdaadf', 'male', '2021-08-19', 'pic/Capture.PNG', 'Teacher'),
(64, 'asfafdadf', 'sfsfsd', 'sfsfdsdfdsafaddsf', 'safdasdfdsaf@gmail.com', 'fasdfasdf', 'safasdfsdaf', 'male', '2021-08-11', 'pic/Capture.PNG', 'Accountant'),
(65, 'sfdsdfdsafd', 'sfdasdfas', 'sdfsdfsdf', 'sfdj@gmail.com', 'fssadf', 'sadfasdf', 'male', '2021-08-18', 'pic/Capture.PNG', 'Teacher'),
(90, 'azad', 'sfs', '5154165656565656', 'sfdsf@gmail.com', 'Senior', 'PHD', 'male', '2021-08-19', 'pic/Capture.PNG', 'Teacher');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `title` varchar(50) NOT NULL,
  `fullnotice` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`title`, `fullnotice`) VALUES
('Off Day', 'this is holiday'),
('National Holiday', 'School off for National Holidat');

-- --------------------------------------------------------

--
-- Table structure for table `stroutine`
--

CREATE TABLE `stroutine` (
  `class` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stroutine`
--

INSERT INTO `stroutine` (`class`, `subject`, `section`, `time`) VALUES
('Six', 'Bangla', 'A', '10:00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_id` int(11) NOT NULL,
  `st_name` varchar(50) NOT NULL,
  `st_username` varchar(50) NOT NULL,
  `st_pass` varchar(50) NOT NULL,
  `st_email` varchar(50) NOT NULL,
  `st_class` varchar(50) NOT NULL,
  `st_section` varchar(50) NOT NULL,
  `st_gender` varchar(50) NOT NULL,
  `st_image` varchar(350) NOT NULL,
  `st_dob` varchar(50) NOT NULL,
  `acctype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `st_name`, `st_username`, `st_pass`, `st_email`, `st_class`, `st_section`, `st_gender`, `st_image`, `st_dob`, `acctype`) VALUES
(0, 'asfasdf', 'sfasdf', 'fafdasfsfdfsadf', 'fdafsd@gmail.com', 'sfsdf', 'sfsad', 'male', 'pic/Capture.PNG', '2021-08-12', 'Student'),
(1, 'Shahed Ali', 'shahed', '1234', 'shahed@gmail.com', '9', 'C', 'male', 'pic/Capture.PNG', '06/03/1997', 'student'),
(6, 'sfsdf', 'sfdsd', '1234', 'saif@gmail.com', 'dfsf', 'df', 'male', 'pic/Capture.PNG', '2021-08-19', 'Student'),
(17, 'niloy', 'sdfsf', 'sfsdfsdfasdfasdf', 'sfdj@gmail.com', '5', 'C', 'male', 'pic/Capture.PNG', '2021-08-18', 'Student'),
(21, 'jahangir', 'sdflkjsldk', 'sjfalsjsafasdf', 'sdfljds@gmail.com', '5', 'sfsadf', 'male', 'pic/Capture.PNG', '2021-08-19', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `tcs`
--

CREATE TABLE `tcs` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tcs`
--

INSERT INTO `tcs` (`id`, `name`, `class`, `subject`, `section`, `time`) VALUES
('1', 'Saif', 'eight', 'Math', 'A', '12:00');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tr_id` int(50) NOT NULL,
  `tr_name` varchar(50) NOT NULL,
  `tr_username` varchar(50) NOT NULL,
  `tr_pass` varchar(50) NOT NULL,
  `tr_email` varchar(50) NOT NULL,
  `tr_position` varchar(50) NOT NULL,
  `tr_degree` varchar(50) NOT NULL,
  `tr_salary` varchar(50) NOT NULL,
  `tr_gender` varchar(50) NOT NULL,
  `tr_image` varchar(350) NOT NULL,
  `tr_dob` varchar(50) NOT NULL,
  `acctype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tr_id`, `tr_name`, `tr_username`, `tr_pass`, `tr_email`, `tr_position`, `tr_degree`, `tr_salary`, `tr_gender`, `tr_image`, `tr_dob`, `acctype`) VALUES
(0, 'sfdsafdsa', 'sdfsadf', 'sfasfasd', 'safas', 'sfdasf', 'asfdsaf', 'safdaSDf', 'male', 'pic/Capture.PNG', '2021-08-18', 'Student'),
(1, 'Saif Ali', 'saif', '1234', 's@gmail.com', 'Senior', 'PHD', '3000000', 'male', 'pic/Capture.PNG', '2021-08-10', 'other'),
(3, 'Ruhul Amin', 'ruhul', '1234', 's@gmail.com', 'Senior', 'Phd', '50000', 'male', 'pic/Capture.PNG', '2021-08-18', 'other'),
(4, 'dfgdfg', 'fgdg', '56453', 'dfgdf', 'dfgdf', 'dfgdf', '40000', 'male', 'pic/Capture.PNG', '2021-08-19', 'male'),
(5, 'dfgdfg', 'fgdg', '2133', 'dfgdf', 'dfgdf', 'dfgdf', '40000', 'male', 'pic/Capture.PNG', '2021-08-13', 'male'),
(23, 'asfdsadf', 'sfsf', 'dsf', 'sfdsadf', 'sfsadf', 'sfddsf', 'fasfdf', 'female', 'pic/Capture.PNG', '2021-08-18', 'Teacher'),
(25, 'sfsafda', 'asdfsadf', 'sfdfsfsfsfsadfsadfsf', 'fdsafds@gmail.com', 'safas', 'sf', 'sfd', 'male', 'pic/Capture.PNG', '2021-08-30', 'Teacher'),
(33, 'sfd', 'sdf', 'dfs', 'sdf', 'sdfsf', 'sdfg', 'gher', 'male', 'pic/Capture.PNG', '2021-08-26', 'Teacher'),
(55, 'Shiraaj', 'safjalsjdf', 'sdljdfsaljdfslj', 'sfdj@gmail.com', 'sfsafa', 'safsdaadf', 'sfasfdfsfd', 'male', 'pic/Capture.PNG', '2021-08-19', 'Teacher'),
(60, 'dfgdg', 'dgdgf', 'dgdf', 'dgdgdsfg', 'dfgdfg', 'dfgdg', 'dggdg', 'female', 'pic/Capture.PNG', '2021-08-26', 'Teacher'),
(70, 'fdasfasdf', 'fsdfsf', 'fssdfsadf', 'dsfsdf@fsadfdsaf.com', 'sdfsfsdf', 'fsdfdsf', 'asfasdf', 'male', 'pic/Capture.PNG', '2021-08-17', 'Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountant`
--
ALTER TABLE `accountant`
  ADD PRIMARY KEY (`ar_id`);

--
-- Indexes for table `accountlogin`
--
ALTER TABLE `accountlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tr_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
