-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2019 at 11:27 PM
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
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(30) NOT NULL auto_increment,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  PRIMARY KEY  (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE `tbl_branch` (
  `branch_id` int(11) NOT NULL auto_increment,
  `branch_address` varchar(50) NOT NULL,
  `branch_contact` varchar(50) NOT NULL,
  `company_id` int(11) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `state_id` int(50) NOT NULL,
  `district_id` int(50) NOT NULL,
  `place_id` int(50) NOT NULL,
  PRIMARY KEY  (`branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`branch_id`, `branch_address`, `branch_contact`, `company_id`, `branch_name`, `state_id`, `district_id`, `place_id`) VALUES
(1, 'Infipark,Kakkanadu,Kochi', '0485 2284521', 6, 'Ernakulam', 0, 0, 0),
(2, 'Infopark,Kochi', '0485 2284521', 1, 'Ernakulam', 0, 0, 0),
(3, 'infopark,Kochi', '0485 456387', 0, 'www', 0, 0, 0),
(4, 'rrr', '0485 456387', 0, 'www', 0, 0, 0),
(5, 'www', '0485 456387', 0, 'www', 5, 8, 0),
(6, 'eee', '0485 456387', 20, 'eee', 5, 11, 0),
(9, 'Technopark', '0485 456387', 22, 'Technopark', 5, 14, 0);

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
  `company_logo` varchar(50) NOT NULL,
  PRIMARY KEY  (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `tbl_companyregistration`
--

INSERT INTO `tbl_companyregistration` (`company_id`, `company_name`, `company_address`, `company_contact`, `company_email`, `company_proof`, `company_regno`, `place_id`, `company_status`, `company_username`, `company_password`, `company_type_id`, `company_website`, `company_logo`) VALUES
(20, 'PCPL', 'Second floor,Koyas Tower,Post office junction,muvattupuzha', '0485  2834881', 'info@progressivecybernetics.com', 'logo.png', '709574839254', 1, '1', 'pcpl', 'pcpl123', 6, 'www.pcplglobal.com', 'logo.png'),
(21, 'Infosys', 'infopark,Kakkanadu,Kochi', '0485 2584752', 'infosys123@gmail.com', 'download.png', '7025418963254', 3, '1', 'infosys', 'infosys123', 6, 'www.infosys.com', 'download.png'),
(22, 'Wipro', 'infopark,Kakkanadu,Kochi', '0485 85149625', 'wiprowe149@gmail.com', '280wiprologo.png', '7025418963254', 3, '1', 'wipro', 'wipro123', 4, 'www.wipro.com', '280wiprologo.png'),
(24, 'TCS', 'Infopark,Kakkanadu,Kochi', '0485  2834881', 'tcs173@gmail.com', 'tcs_logo.gif', '7025418963257', 3, '1', 'tcs', 'tcs1234', 4, 'www.tcs.com', 'tcs_logo.gif'),
(25, 'Orion', 'infopark<kakkanadu,kochi', '0485  2834881', 'oriontech@gmail.com', 'orion.jpg', '709574839254', 3, '1', 'orion', 'orion123', 6, 'www.orion.com', 'orion.jpg'),
(26, 'SFO Technologies', 'Infopark,Kakkanadu,Kochi', '0485 4587215', 'sfotechnologies123@gmail.com', '254SFO.png', '709574839229', 3, '1', 'sfo', 'sfo1234', 6, 'www.sfotechnologies.com', '254SFO.png'),
(27, 'Microsoft', 'Infopark,Ernakulam', '0485 45375', 'microsoft@gmail.com', 'partner-1.png', '709574839300', 3, '1', 'microsoft', 'microsoft', 8, 'www.microsoft.com', 'partner-1.png'),
(28, 'Adobe', 'Infopark,Kakkanadu,Kochi', '0485 2584894', 'adobetech197@gmail.com', 'adobe.png', '709574839308', 3, '1', 'adobe', 'adobe123', 5, 'www.adobe.com', 'adobe.png'),
(29, 'Cognizant', 'Infopark,Kakkanadu,Kochi', '0485 2584879', 'cecognizant326@gmail.com', 'cognizant.png', '709574839230', 3, '1', 'cognizant', 'cognizant123', 5, 'www.cognizant.com', 'cognizant.png'),
(30, 'IBM', 'Infopark,Kakkanadu,Kochi', '0485 2584349', 'ibmtech@gmail.com', 'ibm.png', '709574839338', 3, '1', 'ibm', 'ibm1234', 5, 'www.ibm.com', 'ibm.png'),
(31, 'Oracle', 'Infopark,Kakkanadu,Kochi', '0485 2584875', 'oracle127@gmail.com', 'Oracle.jpg', '709574839397', 3, '1', 'oracle', 'oracle123', 5, 'www.oracle.com', 'Oracle.jpg'),
(32, 'HCL', 'Infopark,Kakkanadu,Kochi', '0485 2584407', 'hcl19690@gmail.com', 'hcl.png', '709574839604', 3, '1', 'hcl', 'hcl1294', 5, 'www.hcl.com', 'hcl.png'),
(33, 'Sap', 'Infopark,Kakkanadu,Kochi', '0485 2584968', 'saptech1907@gmail.com', 'SAP.jpg', '709574839649', 3, '1', 'sap', 'sap4329', 5, 'www.sap.com', 'SAP.jpg'),
(34, 'Abasoft', 'Infopark,Kakkanadu,Kochi', '0485 2584783', 'abasoft123@gmail.com', '225225Abasoft PNG  Image (3000 px 1) (1).png', '709574839443', 3, '1', 'Abasoft', 'Abasoft123', 6, 'www.abasoft.com', '225225Abasoft PNG  Image (3000 px 1) (2).png'),
(35, 'Cubet', 'Infopark,Kakkanadu kochi and Technopark,Trivandrom', '0485 2584749', 'cubet197@gmail.com', '177logo.png', '709574839659', 3, '1', 'cubet', 'cubet123', 6, 'www.cubet.com', '177logo.png'),
(36, 'Dinoct', 'Technopark,trivandrom', '0485  2834839', 'cubet197@gmail.com', '11logo.png', '709574839239', 14, '1', 'dinoct', 'dinoct123', 6, 'www.dinoct.com', '11logo.png'),
(39, 'Cognicor', 'Infopark,Kakkanadu,Kochi', '0485  2834849', 'cognicor7009@gmail.com', '191logo_new3.png', '709574839238', 8, '1', 'cognicor', 'cognicor888', 5, 'www.cognicor.com', '191logo_new3.png'),
(40, 'Flipkart', 'PVWRA-95, Ponevazhi Road, Ponekkara, Edappally, Kochi, Kerala 682041', '1800-208-9898', 'cs@flipkart.com', 'Flipkart_c_Logo (1).jpg', '709574839289', 8, '1', 'flipkart', 'flipkart555', 5, 'www.flipkart.com', 'Flipkart_c_Logo.jpg'),
(41, 'Huawei', 'No.50/1107, 1st & 2nd Floor, Manjooran Estate, Cheranallur Road, Edapally, Ernakulam - 682024, Near ', '18002096555', 'huawei@gmail.com', 'HUAWEI (1).jpg', '7025418963669', 18, '1', 'Huawei', 'Huawei224', 5, 'www.huawei.com', 'HUAWEI.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_companytype`
--

CREATE TABLE `tbl_companytype` (
  `company_type_id` int(50) NOT NULL auto_increment,
  `company_type` varchar(50) NOT NULL,
  `company_id` int(50) NOT NULL,
  PRIMARY KEY  (`company_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_companytype`
--

INSERT INTO `tbl_companytype` (`company_type_id`, `company_type`, `company_id`) VALUES
(4, 'Top-Level', 21),
(5, 'Product Based', 22),
(6, 'Servies Based', 20),
(8, 'Most Company', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`, `state_id`) VALUES
(7, 'Pondicheri', 4),
(8, 'Kochi', 5),
(11, 'Vayanad', 5),
(12, 'Bangalour', 6),
(13, 'Mumbai', 11),
(14, 'Trivandrom', 5),
(18, 'Idukki', 5),
(19, 'Kasargodu', 5),
(20, 'Palakkadu', 5),
(21, 'Alappuzha', 5),
(22, 'Kozhikkodu', 5),
(23, 'Chennai', 22),
(24, 'Pondicheri', 22),
(25, 'Mumbai', 19),
(26, 'Pathanamthitta', 5),
(28, 'Thrissur', 5),
(30, 'kollam', 5),
(31, 'Malappuram', 5),
(32, 'Ahmadabad', 21),
(33, 'Pune', 19),
(34, 'Alahamabadh', 16),
(35, 'Kottayam', 5),
(36, 'Kannoor', 5),
(37, 'Pillayarpatti ', 22),
(38, '	Tiruchirappalli', 22),
(39, 'Pondicherry ', 22),
(40, ' Salem ', 22),
(41, ' Thanjavur', 22),
(42, 'Madurai', 22),
(43, ' Dharmapuri', 22),
(44, ' Viluppuram', 22),
(45, 'Tirunelveli', 22),
(46, ' Kanchipuram', 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(50) NOT NULL auto_increment,
  `feedback` varchar(50) NOT NULL,
  PRIMARY KEY  (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, 'ddd');

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
  `freelancer_gender` varchar(30) NOT NULL,
  `state_id` int(50) NOT NULL,
  PRIMARY KEY  (`freelancer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tbl_freelancer`
--

INSERT INTO `tbl_freelancer` (`freelancer_id`, `freelancer_experience`, `freelancer_name`, `freelancer_address`, `freelancer_email`, `freelancer_contact`, `place_id`, `freelancer_photo`, `freelancer_proof`, `freelancer_username`, `freelancer_password`, `freelancer_status`, `qualification_id`, `freelancer_gender`, `state_id`) VALUES
(4, '2-3 Years', 'yeshudas', 'Poomuthel(h),angamali', 'infosys123@gmail.com', '9447725848', 0, 'Screenshot (1).png', 'Screenshot (1).png', 'yeshudas', '1234567', '0', 14, '', 0),
(13, '1 Year', 'Ram', 'punnorathu(h),adimali', 'ram4932@gmail.com', '7658421958', 2, 'wp3729877-hulk-infinity-war-wallpapers.jpg', 'm8EeieL-wallpaper-laptop-apple.jpg', 'ram', 'ram1234', '1', 18, 'Male', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_freemsg`
--

CREATE TABLE `tbl_freemsg` (
  `freemsg_id` int(50) NOT NULL auto_increment,
  `msg_date` varchar(50) NOT NULL,
  `msg_loc` varchar(50) NOT NULL,
  `msg_time` varchar(50) NOT NULL,
  `msg_sel` varchar(50) NOT NULL,
  `msg_venue` varchar(50) NOT NULL,
  `msg_ampm` varchar(50) NOT NULL,
  `company_id` int(50) NOT NULL,
  PRIMARY KEY  (`freemsg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_freemsg`
--

INSERT INTO `tbl_freemsg` (`freemsg_id`, `msg_date`, `msg_loc`, `msg_time`, `msg_sel`, `msg_venue`, `msg_ampm`, `company_id`) VALUES
(1, '2019-11-07', 'Infopark,Kakkanadu,Kochi', '09:00', 'Online test', '4 passport size photos,certificates', 'Am', 0),
(3, '2019-11-13', 'Infopark,Kakkanadu,Kochi', '08:00', 'Online test', '4 photos,2 copies of resume,certificates', 'Am', 22),
(4, '2019-11-20', 'Infopark,Kakkanadu,Kochi', '08:00', 'technical interview', '4 photos,id card,certificates,resume', 'Am', 24);

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
  `freelancer_id` int(50) NOT NULL,
  `company_id` int(50) NOT NULL,
  PRIMARY KEY  (`jobapply_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=150 ;

--
-- Dumping data for table `tbl_jobapply`
--

INSERT INTO `tbl_jobapply` (`jobapply_id`, `user_id`, `jobapply_date`, `jobvacancy_id`, `jobapply_status`, `upload_resume`, `freelancer_id`, `company_id`) VALUES
(138, 0, '2019-11-10', '17', '1', 'Screenshot (1).png', 13, 0),
(139, 20, '2019-11-12', '17', '1', 'Screenshot (1).png', 0, 0),
(140, 20, '2019-11-13', '15', '2', 'Screenshot (1).png', 0, 0),
(141, 20, '2019-11-13', '20', '1', 'Screenshot (1).png', 0, 0),
(144, 0, '2019-11-13', '20', '1', 'SARATH  Ps.doc (1).docx', 13, 0),
(145, 0, '2019-11-13', '22', '0', 'image_3.jpg', 13, 0),
(146, 0, '2019-11-13', '15', '0', 'image_3.jpg', 13, 0),
(147, 0, '2019-11-13', '21', '1', 'image_4.jpg', 13, 0),
(148, 20, '2019-11-13', '22', '1', 'image_3.jpg', 0, 0),
(149, 20, '2019-12-02', '19', '0', '29e2900924a03f94a20dfdaaf24b89a7.jpeg', 0, 24);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobcategory`
--

CREATE TABLE `tbl_jobcategory` (
  `jobcategory_id` int(11) NOT NULL auto_increment,
  `jobcategory_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`jobcategory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tbl_jobcategory`
--

INSERT INTO `tbl_jobcategory` (`jobcategory_id`, `jobcategory_name`) VALUES
(5, 'Php Programmer'),
(6, 'Php Developer'),
(7, 'Java Programmer'),
(8, 'Java Developer'),
(9, 'Web Designer'),
(10, 'SEO'),
(11, 'Computer Operator'),
(12, 'Accoundant'),
(13, 'Data analyst'),
(14, 'Software testing'),
(15, 'Project manajer'),
(16, 'System engineer'),
(17, 'Software Test Engineer'),
(18, '.NET Developer'),
(19, 'Back Office Executive'),
(20, 'Administrator'),
(21, 'Office Assistant'),
(22, 'Caller'),
(23, 'Team Leader'),
(24, 'Consultant'),
(25, 'Full stack developer');

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
  `user_exp` varchar(50) NOT NULL,
  `district_id` int(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `Job` varchar(50) NOT NULL,
  PRIMARY KEY  (`jobvacancy_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `tbl_jobvacancy`
--

INSERT INTO `tbl_jobvacancy` (`jobvacancy_id`, `jobcategory_id`, `company_id`, `vacancy_no`, `qualification_id`, `last_datetoapply`, `user_exp`, `district_id`, `salary`, `Job`) VALUES
(15, 5, 20, '2', 8, '2019-10-02', '', 0, '', ''),
(16, 9, 21, '2', 8, '2019-10-10', '', 0, '', ''),
(17, 8, 22, '2', 8, '2019-10-16', '', 0, '', ''),
(18, 10, 0, '1', 18, '2019-10-29', '1-2 year', 0, '', ''),
(19, 14, 24, '1', 13, '2019-10-22', '1-2 year', 12, '3 lacks per month', 'Fultime'),
(20, 9, 26, '2', 8, '2019-10-25', 'Experienced', 25, '2 lacks per year', 'Fultime'),
(21, 6, 26, '2', 8, '2019-10-18', 'Experienced', 12, '3 lacks per month', 'Fultime'),
(22, 14, 27, '2', 12, '2019-11-12', '1-2 year', 23, '3 lacks per year', 'Fultime'),
(23, 8, 29, '3', 8, '2019-12-07', '1-2 year', 23, '3 lacks per year', 'Fultime'),
(24, 14, 25, '1', 12, '2019-11-29', '1-2 year', 25, '2 lacks per year', 'Fultime'),
(25, 18, 0, '4', 23, '2019-10-08', '1 year', 8, '2 lacks per year', 'Parttime'),
(26, 18, 28, '4', 23, '2019-12-07', '1 year', 8, '2 lacks per year', 'Parttime'),
(27, 15, 31, '2', 12, '2019-12-14', '1-2 year', 12, '4 lacks per year', 'Fultime'),
(28, 16, 33, '7', 12, '2019-12-08', '1-2 year', 14, '3 lacks per year', 'Fultime'),
(29, 19, 30, '3', 12, '2019-12-22', '1-2 year', 28, '3 lacks per month', 'Fultime'),
(30, 23, 32, '2', 12, '2019-12-14', '1-2 year', 23, '6 lacks per year', 'Fultime'),
(31, 8, 25, '8', 23, '2019-12-21', 'Fresher', 34, '3 lacks per month', 'Fultime'),
(32, 19, 20, '1', 23, '2019-12-21', '1 year', 8, '2 lacks per year', 'Fultime'),
(33, 14, 34, '2', 12, '2019-12-29', '1-2 year', 32, '3 lacks per year', 'Fultime'),
(34, 24, 36, '1', 12, '2019-11-07', '1-2 year', 24, '3 lacks per year', 'Fultime'),
(35, 10, 35, '3', 12, '2019-12-15', '1-2 year', 23, '4 lacks per year', 'Fultime'),
(36, 25, 0, '3', 23, '2019-12-08', '1 year', 8, '4 lacks per year', 'Fultime'),
(37, 25, 40, '3', 23, '2019-12-08', '1 year', 8, '4 lacks per year', 'Fultime'),
(38, 16, 39, '1', 12, '2019-12-17', 'Experienced', 25, '3 lacks per year', 'Parttime'),
(39, 18, 41, '4', 23, '2019-12-15', 'Fresher', 12, '3 lacks per year', 'Fultime'),
(40, 18, 20, '2', 23, '2019-12-22', '1-2 year', 8, '2 lacks per year', 'Fultime');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL auto_increment,
  `district_id` int(11) NOT NULL,
  `place_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`place_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `district_id`, `place_name`) VALUES
(1, 7, 'Muvattupuzha'),
(3, 8, 'Kakkanadu'),
(4, 8, 'Angamaly'),
(5, 8, 'Kothamangalam'),
(7, 8, 'Palarivattom'),
(8, 8, 'Perumbavoor'),
(9, 8, 'Piravom'),
(10, 8, 'Paravoor'),
(11, 8, 'Kottappady'),
(12, 8, 'Aluva'),
(13, 18, 'Kuttikanam'),
(14, 18, 'Thodupuzha'),
(15, 18, 'Adimali'),
(16, 18, 'Moonnar'),
(17, 8, 'Trippoonithura'),
(18, 8, 'Vyttila'),
(19, 8, 'Kaloor'),
(20, 18, 'Kattappana'),
(21, 18, 'Pala'),
(22, 35, 'Ettumanoor'),
(23, 8, 'Kolanchery'),
(24, 8, 'Edappally'),
(25, 8, 'Muvattupuzha'),
(26, 18, 'Erattayar'),
(27, 28, 'Guruvayur'),
(28, 28, 'Alathur'),
(29, 28, 'Annamanada'),
(30, 28, 'AlagappaNagar'),
(31, 28, 'Avinissery'),
(32, 28, 'Brahmakulam'),
(33, 28, 'Chalakudy'),
(34, 28, 'Chavakkad'),
(35, 28, 'Chelakkara'),
(36, 28, 'Harinagar Poonkunnam'),
(37, 28, 'Irinjalakuda'),
(38, 28, 'Kanimangalam'),
(39, 28, 'Karuvannoor'),
(40, 28, 'Koratty'),
(41, 28, 'Kunnamkulam'),
(42, 28, 'Kechery'),
(43, 28, 'Kodungallur'),
(44, 28, 'Mala'),
(45, 28, 'Methala'),
(46, 28, 'Manaloor'),
(47, 28, 'Moonupeedika'),
(48, 28, 'Nenmanikkara'),
(49, 28, 'Perambra'),
(50, 28, 'Thaikkad'),
(51, 28, 'Thalapilly'),
(52, 28, 'Triprayar'),
(53, 28, 'Wadakkancherry'),
(54, 28, 'Venmanad'),
(55, 23, '	Tiruchirappalli'),
(56, 23, 'Pondicherry'),
(57, 23, 'Tirunelveli'),
(58, 23, 'Theevanur'),
(59, 23, 'Madurai'),
(60, 23, 'poonthottam '),
(61, 23, 'Thiruvaiyaru'),
(62, 23, 'Coimbatore'),
(63, 23, 'Chennai');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbl_qualification`
--

INSERT INTO `tbl_qualification` (`qualification_id`, `qualification`) VALUES
(7, 'MBBS'),
(8, 'BCA'),
(9, 'BA.English'),
(10, 'Bsc Computer Science'),
(11, 'Bcom'),
(12, 'B.Tech(CSE)'),
(13, 'Msc Computer Science'),
(14, 'B.Tech(ME)'),
(16, 'B.Tech(EEE)'),
(17, 'BDS'),
(18, 'Bsc.Computer Application'),
(19, 'Diploma'),
(20, 'CA'),
(21, 'MBA'),
(22, 'B.Tech(civil)'),
(23, 'Any degree');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_save`
--

CREATE TABLE `tbl_save` (
  `save_id` int(50) NOT NULL auto_increment,
  `company_id` int(50) NOT NULL,
  `vacancy_no` int(50) NOT NULL,
  `qualification_id` int(50) NOT NULL,
  `last_datetoapply` int(50) NOT NULL,
  `district_id` int(50) NOT NULL,
  `Jobcategory_id` int(50) NOT NULL,
  `Jobvacancy_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `freelancer_id` int(50) NOT NULL,
  PRIMARY KEY  (`save_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_save`
--

INSERT INTO `tbl_save` (`save_id`, `company_id`, `vacancy_no`, `qualification_id`, `last_datetoapply`, `district_id`, `Jobcategory_id`, `Jobvacancy_id`, `user_id`, `freelancer_id`) VALUES
(1, 28, 4, 12, 2019, 14, 16, 26, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(50) NOT NULL auto_increment,
  `state_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `state_name`) VALUES
(5, 'Kerala'),
(6, 'Karnadaka'),
(7, 'Thelangana'),
(16, 'Punjab'),
(17, 'Uttar Pradash'),
(18, 'West Bengal'),
(19, 'Maharashtra'),
(20, 'Andhra Pradesh'),
(21, 'Gujarat'),
(22, 'Tamil Nadu'),
(23, 'Madhya Pradesh'),
(24, 'Delhi'),
(25, 'Rajasthan'),
(27, 'Sikkim'),
(28, 'Bhuttan'),
(29, 'Neppal'),
(30, 'Goa'),
(31, 'Assam'),
(32, 'Himachal Pradesh'),
(33, 'Jammu Kashmeer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_technology`
--

CREATE TABLE `tbl_technology` (
  `technology_id` int(50) NOT NULL auto_increment,
  `technology_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`technology_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tbl_technology`
--

INSERT INTO `tbl_technology` (`technology_id`, `technology_name`) VALUES
(2, 'Java '),
(3, 'Python'),
(4, 'Php'),
(5, 'Android'),
(6, 'ios'),
(7, 'ASP.NET'),
(8, 'Swift'),
(9, 'c'),
(10, 'c++'),
(11, 'Ruby'),
(12, 'Java Script'),
(13, 'HTML'),
(14, 'c*'),
(15, 'C#'),
(16, 'JQuery'),
(17, 'Cyclone'),
(18, 'Jython'),
(19, 'Rust'),
(21, 'R++');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usermsg`
--

CREATE TABLE `tbl_usermsg` (
  `usermsg_id` int(11) NOT NULL auto_increment,
  `msg_date` varchar(50) NOT NULL,
  `msg_loc` varchar(50) NOT NULL,
  `msg_time` varchar(50) NOT NULL,
  `msg_sel` varchar(50) NOT NULL,
  `msg_venue` varchar(50) NOT NULL,
  `msg_ampm` varchar(50) NOT NULL,
  `company_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  PRIMARY KEY  (`usermsg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_usermsg`
--

INSERT INTO `tbl_usermsg` (`usermsg_id`, `msg_date`, `msg_loc`, `msg_time`, `msg_sel`, `msg_venue`, `msg_ampm`, `company_id`, `user_id`) VALUES
(9, '2019-11-05', 'Infopark,kakkanadu,kochi', '01:00', 'Online test', '4 photos,2 copies of resume', 'PM', 0, 0),
(10, '2019-11-07', 'Infopark,Kakkanadu,Kochi', '08:00', 'Online test', 'passport size photos-4,certificates,other', 'Am', 0, 0),
(11, '2019-11-13', 'jsdhddnhd', '08:00', 'Online test', 'kcjehyegefmkfnefb', 'Am', 0, 0),
(12, '2019-11-06', 'kkkk', '08:00', 'Online test', 'hhhsjjjsjsj', 'Am', 0, 0),
(13, '2019-11-06', 'jjjjjjjjjj', '01:00', 'Online test', 'rrrrrrrrrrtttttttttt', 'PM', 0, 0),
(14, '2019-11-28', 'gjjjjjjjjjjjjjjhhhhhhhhhh', '01:00', 'Online test', 'ttttttttttuuuuuuuuueeeeeeeerrrrriiiopppppp', 'PM', 0, 0),
(15, '2019-11-05', 'hhhh', '08:00', 'Online test', 'nnnn', 'Am', 0, 0),
(16, '2019-11-21', '2 nd floor,Koyas tower,p.o junction muvattupuzha', '10:00', 'Online test', '4 photos,2 copies of resume,certificates', 'Am', 20, 0),
(17, '2019-10-29', '2 nd floor,Koyas tower,p.o junction muvattupuzha', '01:00', 'Interview', '4 photos,2 copies of resume,certificates', 'PM', 20, 0),
(18, '2019-11-06', 'Infopark,Kakkanadu,Kochi', '09:00', 'Online test', '4 passport size photos,2 copies of resume,certific', 'Am', 22, 0),
(19, '2019-11-13', 'Infopark,Kakkanadu,Kochi', '08:00', 'technical interview', '4 photos,id card,certificates', 'Am', 24, 0),
(20, '2019-11-05', 'Infopark,Kakkanadu,Kochi', '08:00', 'technical interview', '4 photos,id card,certificates', 'Am', 20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userqualification`
--

CREATE TABLE `tbl_userqualification` (
  `userqualification_id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `qualification_id` int(11) NOT NULL,
  PRIMARY KEY  (`userqualification_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_userqualification`
--

INSERT INTO `tbl_userqualification` (`userqualification_id`, `user_id`, `qualification_id`) VALUES
(1, 2, 8),
(2, 3, 8),
(3, 16, 7);

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
  `qualification_id` varchar(50) NOT NULL,
  `state_id` int(50) NOT NULL,
  `district_id` int(50) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tbl_userregistration`
--

INSERT INTO `tbl_userregistration` (`user_id`, `user_name`, `user_gender`, `user_dob`, `user_address`, `place_id`, `user_contact`, `user_email`, `user_photo`, `user_username`, `user_password`, `user_status`, `user_experience`, `user_proof`, `qualification_id`, `state_id`, `district_id`) VALUES
(17, 'Sanoop', 'Male', '2019-10-09', 'Poomuthel(h),angamali', 4, '9588248579', 'sanoop123@gmail.com', 'wp3539975-iron-man-infinity-war-4k-wallpapers.jpg', 'sanoop', 'sanoop123', '1', 'Fresher', 'SARATH  Ps.doc (1).docx', '12', 5, 5),
(19, 'roopa', 'Male', '2019-10-04', 'Alukka(h),East vazhappilly,Muvattupuzha', 4, '9500214895', 'roopaww125@gmail.com', '220dbf930ed85073cb94f621baaa6c7b.jpeg', 'roopa', 'roopa123', '0', 'Fresher', '29e2900924a03f94a20dfdaaf24b89a7.jpeg', '14', 5, 5),
(20, 'Ananya', 'Female', '2019-10-09', 'puthukkottayil', 10, '8483815267', 'ananya125@gmail.com', '220dbf930ed85073cb94f621baaa6c7b.jpeg', 'ananya', 'ananya123', '1', '1 Year', '29e2900924a03f94a20dfdaaf24b89a7.jpeg', '20', 5, 5),
(21, 'Saho', 'Male', '2019-11-07', 'Poomuthel(h),angamali', 3, '9483815267', 'sajo197@gmail.com', 'image_3.jpg', 'saho', 'saho123', '1', 'Fresher', 'image_4.jpg', '20', 24, 24),
(22, 'Adithya Surendran', 'Male', '1998-11-03', 'Kakkoochira Puthenpura Perumballoor PO', 1, '8606069405', 'adithyasurendran47@gmail.com', 'wp2586322-iron-man-infinity-war-4k-wallpapers.jpg', 'Adithya', 'Arcturus', '1', 'Fresher', 'download.jpg', '10', 5, 5);
