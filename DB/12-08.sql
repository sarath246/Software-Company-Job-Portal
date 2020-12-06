-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 11, 2019 at 10:25 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_softwarecompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE `tbl_branch` (
  `branch_id` int(11) NOT NULL auto_increment,
  `place_id` int(11) NOT NULL,
  `branch_address` varchar(50) NOT NULL,
  `branch_contact` varchar(50) NOT NULL,
  `company_id` int(11) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`branch_id`, `place_id`, `branch_address`, `branch_contact`, `company_id`, `branch_name`) VALUES
(1, 4, 'Infipark,Kakkanadu,Kochi', '0485 2284521', 6, 'Ernakulam'),
(2, 3, 'Infopark,Kochi', '0485 2284521', 1, 'Ernakulam');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_companyregistration`
--

CREATE TABLE `tbl_companyregistration` (
  `company_id` int(11) NOT NULL auto_increment,
  `company_name` varchar(100) NOT NULL,
  `company_address` varchar(100) NOT NULL,
  `company_contact` varchar(100) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_proof` varchar(100) NOT NULL,
  `company_regno` varchar(100) NOT NULL,
  `place_id` int(11) NOT NULL,
  `company_status` varchar(100) NOT NULL default '0',
  `company_username` varchar(100) NOT NULL,
  `company_password` varchar(100) NOT NULL,
  `company_type_id` int(11) NOT NULL,
  `company_website` varchar(100) NOT NULL,
  PRIMARY KEY  (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_companyregistration`
--

INSERT INTO `tbl_companyregistration` (`company_id`, `company_name`, `company_address`, `company_contact`, `company_email`, `company_proof`, `company_regno`, `place_id`, `company_status`, `company_username`, `company_password`, `company_type_id`, `company_website`) VALUES
(1, 'Iroid Technologies', 'Near Metro Station Kaloor,Kochi', '0485 2284563', 'iroid123@gmail.com', '', '12356456', 1, '2', 'iroid', '1234', 6, 'www.iroidtech.com'),
(4, 'PCPL', 'Koyas Tower,Muvatupuzha', '048502834881', 'progressiveofc@gmail.com', '', '8745734576', 1, '2', 'pcpl', '123', 6, 'www.progressivesst.com'),
(6, 'Infosys', 'Infopark,Kakkanadu,Kochi', '0485 2548712', 'infosys1274@gmail.com', 'Screenshot (1).png', '76345368656', 1, '1', 'infotech', 'info', 6, 'www.infosystech.com'),
(7, 'TCS', 'Infopark,Kakkanadu,Kochi', '0485024842', 'tcs2645@gmail.com', 'Screenshot (1).png', '754457675444', 3, '1', 'tcs', 'tcs', 6, 'www.tcs.com'),
(8, 'Wipro', 'Infopark,Kochi', '0484  5776557', 'wipro123@gmail.com', 'Screenshot (1).png', '76432567', 3, '2', 'wipro', 'www', 8, 'www.wiproo.com'),
(10, 'Livesstock', 'SDFGGH', '8714332514', 'usera@gmail.com', 'Screenshot (1).png', '12356456', 1, '1', 'shemeenaismayil123@gmail.com', '123', 4, 'www.tcs.com'),
(11, 'wipro', 'Infopark,Kakkanadu,Kochi', '0484 5365457', 'wipro3424@gmail.com', 'Screenshot (1).png', '7808646678756', 3, '0', 'wipro', 'wwwww', 4, 'www.wiprosoft.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_companytype`
--

CREATE TABLE `tbl_companytype` (
  `company_type_id` int(50) NOT NULL auto_increment,
  `company_type` varchar(50) NOT NULL,
  PRIMARY KEY  (`company_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_companytype`
--

INSERT INTO `tbl_companytype` (`company_type_id`, `company_type`) VALUES
(4, 'Top-Level'),
(5, 'Product Based'),
(6, 'Servies Based'),
(8, 'Most Company');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `dept_id` int(11) NOT NULL auto_increment,
  `dept_name` varchar(50) NOT NULL,
  `dept_head` varchar(50) NOT NULL,
  `dept_date` date NOT NULL,
  PRIMARY KEY  (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`dept_id`, `dept_name`, `dept_head`, `dept_date`) VALUES
(3, 'science', 'Aswathy', '2019-06-12'),
(4, 'English', 'Veena', '2019-06-03'),
(5, 'science', 'sajithra', '2019-06-05'),
(7, 'science', 'Dheepthi', '2019-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(50) NOT NULL auto_increment,
  `district_name` varchar(50) NOT NULL,
  `state_id` int(50) NOT NULL,
  PRIMARY KEY  (`district_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`, `state_id`) VALUES
(7, 'Pondicheri', 4),
(8, 'Ernakulam', 5),
(11, 'Vayanad', 5),
(12, 'Bangalour', 6),
(13, 'Mumbai', 11),
(14, 'Trivandrom', 5),
(16, 'Alappuzha', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_freelancer`
--

CREATE TABLE `tbl_freelancer` (
  `freelancer_id` int(11) NOT NULL auto_increment,
  `freelancer_experience` varchar(50) NOT NULL,
  `freelancer_name` varchar(50) NOT NULL,
  `freelancer_address` varchar(50) NOT NULL,
  `freelancer_email` varchar(50) NOT NULL,
  `freelancer_contact` varchar(50) NOT NULL,
  `place_id` int(11) NOT NULL,
  `freelancer_photo` varchar(100) NOT NULL,
  `freelancer_proof` varchar(100) NOT NULL,
  `freelancer_username` varchar(50) NOT NULL,
  `freelancer_password` varchar(50) NOT NULL,
  `freelancer_status` varchar(50) NOT NULL default '0',
  `qualification_id` int(11) NOT NULL,
  PRIMARY KEY  (`freelancer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_freelancer`
--

INSERT INTO `tbl_freelancer` (`freelancer_id`, `freelancer_experience`, `freelancer_name`, `freelancer_address`, `freelancer_email`, `freelancer_contact`, `place_id`, `freelancer_photo`, `freelancer_proof`, `freelancer_username`, `freelancer_password`, `freelancer_status`, `qualification_id`) VALUES
(1, '', 'basil', 'vazhakalayil', 'usera@gmail.com', '8456250424', 2, 'Screenshot.png', 'Screenshot (1).png', 'Ram', '12345', '1', 0),
(2, '', 'Ditto Antony', 'Alukka H', 'dittoantony1234@gmail.com', '8456250424', 2, 'Screenshot (1).png', 'Screenshot (1).png', 'ditto', '123', '0', 0),
(3, '', 'Hari', 'vaarikkuzhiyil', 'hari333@gmail.com', '998776655', 2, 'Screenshot (1).png', 'Screenshot (1).png', 'hariram', '98760', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobapply`
--

CREATE TABLE `tbl_jobapply` (
  `jobapply_id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `jobapply_date` varchar(50) NOT NULL,
  `jobvacancy_id` varchar(50) NOT NULL,
  `jobapply_status` varchar(50) NOT NULL default '0',
  `upload_resume` varchar(50) NOT NULL,
  PRIMARY KEY  (`jobapply_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_jobapply`
--

INSERT INTO `tbl_jobapply` (`jobapply_id`, `user_id`, `jobapply_date`, `jobvacancy_id`, `jobapply_status`, `upload_resume`) VALUES
(5, 1, '2019-07-25', '1', '0', 'Screenshot (1).png'),
(6, 1, '2019-07-25', '1', '0', 'Screenshot (1).png'),
(7, 1, '2019-07-25', '1', '2', ''),
(8, 1, '2019-07-26', '1', '1', 'Screenshot (1).png'),
(9, 1, '2019-07-26', '1', '0', ''),
(10, 1, '2019-07-29', '1', '1', 'Screenshot (1).png'),
(11, 1, '2019-07-31', '1', '0', 'Screenshot (1).png'),
(12, 1, '2019-07-31', '1', '0', 'Screenshot (1).png'),
(13, 3, '2019-07-31', '1', '0', ''),
(14, 1, '2019-07-31', '1', '0', 'Screenshot (1).png'),
(15, 1, '2019-07-31', '1', '0', 'Screenshot (1).png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobcategory`
--

CREATE TABLE `tbl_jobcategory` (
  `jobcategory_id` int(11) NOT NULL auto_increment,
  `jobcategory_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`jobcategory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_jobcategory`
--

INSERT INTO `tbl_jobcategory` (`jobcategory_id`, `jobcategory_name`) VALUES
(2, 'Java'),
(5, 'Php Programmer'),
(6, 'Php Developer'),
(7, 'Java Programmer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobvacancy`
--

CREATE TABLE `tbl_jobvacancy` (
  `jobvacancy_id` int(11) NOT NULL auto_increment,
  `jobcategory_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `vacancy_no` varchar(50) NOT NULL,
  `qualification_id` int(11) NOT NULL,
  `last_datetoapply` varchar(50) NOT NULL,
  PRIMARY KEY  (`jobvacancy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_jobvacancy`
--

INSERT INTO `tbl_jobvacancy` (`jobvacancy_id`, `jobcategory_id`, `company_id`, `vacancy_no`, `qualification_id`, `last_datetoapply`) VALUES
(1, 5, 1, '2', 8, '2019-07-09'),
(2, 2, 1, '3', 10, '2019-07-16'),
(3, 7, 4, '4', 8, '2019-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL auto_increment,
  `district_id` int(11) NOT NULL,
  `place_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `district_id`, `place_name`) VALUES
(1, 7, 'Muvattupuzha'),
(2, 7, 'Adimali'),
(3, 8, 'Kakkanadu'),
(4, 8, 'Angamaly');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projecttype`
--

CREATE TABLE `tbl_projecttype` (
  `projecttype_id` int(50) NOT NULL auto_increment,
  `projecttype_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`projecttype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_projecttype`
--

INSERT INTO `tbl_projecttype` (`projecttype_id`, `projecttype_name`) VALUES
(13, 'Hardware Company'),
(14, 'Software Company'),
(22, 'IT Company');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_qualification`
--

CREATE TABLE `tbl_qualification` (
  `qualification_id` int(50) NOT NULL auto_increment,
  `qualification` varchar(50) NOT NULL,
  PRIMARY KEY  (`qualification_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_qualification`
--

INSERT INTO `tbl_qualification` (`qualification_id`, `qualification`) VALUES
(7, 'MBBS'),
(8, 'BCA'),
(9, 'BA.English'),
(10, 'Bsc Computer Science'),
(11, 'Bcom'),
(12, 'B.com f&t'),
(13, 'Msc Computer Science'),
(14, 'MCA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(50) NOT NULL auto_increment,
  `state_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `state_name`) VALUES
(5, 'Kerala'),
(6, 'Karnadaka'),
(7, 'Thelangana'),
(15, 'pune'),
(16, 'Punjab');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_technology`
--

CREATE TABLE `tbl_technology` (
  `technology_id` int(50) NOT NULL auto_increment,
  `technology_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`technology_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_technology`
--

INSERT INTO `tbl_technology` (`technology_id`, `technology_name`) VALUES
(2, 'Java '),
(3, 'Python'),
(4, 'Php'),
(5, 'Android');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_contact` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_uname` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_squestion` varchar(50) NOT NULL,
  `user_answer` varchar(50) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_fname`, `user_lname`, `user_gender`, `user_contact`, `user_email`, `user_uname`, `user_password`, `user_squestion`, `user_answer`) VALUES
(1, 'Arun', 'Jose', '', '8714332514', '', 'admin', '1234', '1234', 'white'),
(2, 'Arun', 'Jose', 'rdbgender', '8714332514', 'usera@gmail.com', 'admin', '1234', 'Colour', 'white'),
(3, 'Arun', 'Jose', 'male', '8714332514', 'usera@gmail.com', 'admin123', '123456', 'Colour', 'white');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userqualification`
--

CREATE TABLE `tbl_userqualification` (
  `userqualification_id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `qualification_id` int(11) NOT NULL,
  PRIMARY KEY  (`userqualification_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_userqualification`
--

INSERT INTO `tbl_userqualification` (`userqualification_id`, `user_id`, `qualification_id`) VALUES
(1, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userregistration`
--

CREATE TABLE `tbl_userregistration` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_name` varchar(50) NOT NULL,
  `user_gender` varchar(50) NOT NULL,
  `user_dob` varchar(50) NOT NULL,
  `user_address` varchar(50) NOT NULL,
  `place_id` int(11) NOT NULL,
  `user_contact` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_photo` varchar(50) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_status` varchar(50) NOT NULL default '0',
  `user_experience` varchar(100) NOT NULL,
  `user_proof` varchar(50) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_userregistration`
--

INSERT INTO `tbl_userregistration` (`user_id`, `user_name`, `user_gender`, `user_dob`, `user_address`, `place_id`, `user_contact`, `user_email`, `user_photo`, `user_username`, `user_password`, `user_status`, `user_experience`, `user_proof`) VALUES
(1, 'Arun', '', '2019-07-16', 'Koomullil', 1, '9765567765', 'arungtd325@gmail.com', 'Screenshot (1).png', 'admin', '4321', '1', '', ''),
(3, 'Arun', '', '2019-07-16', 'Koomullil', 2, '9765567765', 'arungtd325@gmail.com', 'Screenshot (1).png', 'anoop', 'ggg', '2', '4', 'Screenshot (1).png'),
(9, 'Sandra', 'Female', '2019-07-04', 'Alukkas H', 4, '9756347865', 'sandra123@gmail.com', 'Screenshot (1).png', 'sandra', 'sandrilla', '2', '5', 'Screenshot (2).png');
