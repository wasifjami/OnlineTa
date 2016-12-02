-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 09:08 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlineta`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(11) NOT NULL,
  `comment_user_id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `comment_votes` int(4) NOT NULL,
  `comment_teacher_flag` tinyint(1) NOT NULL,
  `comment_created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment_user_id`, `thread_id`, `comment`, `comment_votes`, `comment_teacher_flag`, `comment_created_on`) VALUES
(1, 102, 12, '654de', 0, 0, '2016-11-26 11:42:07'),
(2, 102, 12, 'SDvasfdbv', 0, 0, '2016-11-26 11:48:50'),
(3, 102, 12, 'xcbscv nbcvn', 0, 0, '2016-11-26 11:49:16'),
(4, 102, 12, 'fdgnbfsdgncv  vcvcxg fsg cv ', 0, 0, '2016-11-26 11:49:24'),
(5, 102, 15, 'this is a comment', 0, 0, '2016-11-26 12:56:38'),
(6, 102, 15, 'kjhfjmkfvhb,mj', 0, 0, '2016-11-26 12:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
`id` int(11) NOT NULL,
  `teacher_id` varchar(11) NOT NULL,
  `course_name` varchar(25) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `activation_code` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `teacher_id`, `course_name`, `course_title`, `description`, `activation_code`) VALUES
(6, 'admin', 'CSE115', 'Programming Language I', 'C programming', '32917'),
(8, 'admin', 'CSE115', 'Programming Language I', 'C programming', '5836eaac23b88'),
(9, '102', 'CSE115', 'Programming Language I', 'C programming', '75761');

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE IF NOT EXISTS `degree` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `college` varchar(25) DEFAULT NULL,
  `honors` int(11) DEFAULT NULL,
  `masters` int(11) DEFAULT NULL,
  `phd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE IF NOT EXISTS `enrolled` (
`id` int(11) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `teacher_id` varchar(10) NOT NULL,
  `student_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE IF NOT EXISTS `institution` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `initial` varchar(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `website` varchar(50) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE IF NOT EXISTS `thread` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `post` varchar(500) NOT NULL,
  `votes` int(11) NOT NULL,
  `teacher_flag` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id`, `user_id`, `course_id`, `subject`, `post`, `votes`, `teacher_flag`, `created_on`) VALUES
(1, 102, '9', 'About Baaal', 'baler course akta!!!', 0, 0, '2016-11-26 10:23:01'),
(2, 102, '9', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the ', 0, 0, '2016-11-26 10:23:01'),
(3, 102, '9', 'werf', 'werf', 0, 0, '2016-11-26 10:23:01'),
(4, 102, '9', 'Another question', 'function save_course($data) {\r\n\r\n		if ($this -> db -> insert(''course'', $data)) {\r\n\r\n			return TRUE;\r\n		}\r\n	} ', 0, 0, '2016-11-26 10:23:01'),
(5, 102, '9', 'wer', 'wer', 0, 0, '2016-11-26 10:23:01'),
(6, 102, '9', 'klkgfgdj', 'jhgb', 0, 0, '2016-11-26 10:23:01'),
(7, 102, '9', 'skjdbvkjsd', 'slnvkljfsdbv', 0, 0, '2016-11-26 10:23:01'),
(8, 102, '9', 'timestamp check', 'asdfsfgdvsfdv', 0, 0, '0000-00-00 00:00:00'),
(9, 102, '9', 'timestamp check2', 'AJKHXcgbgaysdc', 0, 0, '0000-00-00 00:00:00'),
(10, 102, '9', 'timestamp check3', 'asdcvsdv', 0, 0, '0000-00-00 00:00:00'),
(11, 102, '9', 'sdvasfdb', 'zdfbsdfgbdfgs', 0, 0, '2016-11-26 10:39:59'),
(12, 102, '9', 'desc check', 'sdvfsvsfabvsf', 0, 0, '2016-11-26 10:55:53'),
(13, 102, '9', 'Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?', 'If you still want to delete it then it is always better to use higher level Q2A functions than using plain SQL as they take care of things that just one DELETE statement won''t (e.g., what happens with posts of that user, votes, etc). I''d recommend just running this', 0, 0, '2016-11-26 10:23:01'),
(14, 102, '9', 'Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?', 'Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?', 0, 0, '2016-11-26 12:51:10'),
(15, 102, '9', 'Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?', 'Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?Who can illustrate how to delete and re-enter my account super administrator in phpmyadmin into my sql table?', 0, 0, '2016-11-26 12:51:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `contact` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `designation` varchar(35) NOT NULL,
  `sequrity_question` varchar(40) NOT NULL,
  `sequrity_question_answer` varchar(40) NOT NULL,
  `user_type` text NOT NULL,
  `is_active` enum('yes','no') NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `birth_date`, `gender`, `username`, `password`, `contact`, `email`, `designation`, `sequrity_question`, `sequrity_question_answer`, `user_type`, `is_active`, `created_on`) VALUES
(100, '', '', '0000-00-00', '', 'szz', 'szz', '01711111', 'sazzad.hossain@northsouth.edu', '', '', '', 't', 'yes', '2016-11-06 14:24:42'),
(101, '', '', '0000-00-00', '', 'adf', 'adf', '016111111', 'adnan.firoze@northsouth.edu', '', '', '', 't', 'yes', '2016-11-06 14:24:42'),
(102, 'Admin', 'Admin', '0000-00-00', 'male', 'admin', '21232f297a57a5a743894a0e4a801fc3', '01737372722', 'admin@admin.com', 'admin', '', '', '1', 'yes', '0000-00-00 00:00:00'),
(103, 'Shazzad', 'Hossain', '0000-00-00', 'male', 'szz', 'f94b1022296fd60bd1a8600bcd26dcd4', '01744455', 'shazzad.hossain@nsu.edu', 'Assistance Professor', '', '', '1', 'yes', '0000-00-00 00:00:00'),
(104, 'Student', 'sss', '0000-00-00', 'male', 'student', 'cd73502828457d15655bbd7a63fb0bc8', '01744444', 'student@student.com', 'student', '', '', '2', 'yes', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolled`
--
ALTER TABLE `enrolled`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `institution`
--
ALTER TABLE `institution`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `degree`
--
ALTER TABLE `degree`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `enrolled`
--
ALTER TABLE `enrolled`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `institution`
--
ALTER TABLE `institution`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
