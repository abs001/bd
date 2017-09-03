-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2017 at 04:40 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastlogin` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `lastlogin`) VALUES
(1, 'admin@bloodclinic.org', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', '2017-08-01 04:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `description`) VALUES
(1, 'dept1', 'dept1'),
(2, 'myDept', 'myDept'),
(4, 'anotherDept', 'some desc');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

DROP TABLE IF EXISTS `designation`;
CREATE TABLE IF NOT EXISTS `designation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `name`, `description`) VALUES
(2, 'designation1', 'desg1'),
(5, 'designation2', 'dasdf'),
(6, 'designation3', 'ASFSDFasd'),
(7, 'my designation', 'designation desc');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `department`, `name`, `address`, `email`, `mobile`, `telephone`, `birthdate`, `designation`, `qualification`, `type`) VALUES
(1, 'Dignostic center', 'Abhijit Gorakhanath Kumbhar', '"Aashirwad"\r\nBelawade BK', 'abhijitkumbhar001@gmail.com', '8793539225', '09168277713', '1993-05-31', 'designation1', 'MBBSs', 'Consultant'),
(2, 'Procurement', 'Ashish A Desai', 'Miraj', 'desaiashish212@gmail.com', '9876543210', '0987654321', '1992-05-19', 'designation1', 'BBMS', 'Reference'),
(3, 'Radiology', 'Hanmant Kadam', 'Kadegaon, Sangali', 'hanmant@gmail.com', '9898989876', '098765432190', '2013-11-04', 'designation3', 'BBMS', 'Reference'),
(9, 'select', 'new Emp', 'asdfj', 'admin@bloodclinic.org', '5878888888', '7896541230212', '2009-02-02', 'designation2', 'asdf', 'Reference'),
(10, 'myDept', 'sadkj', 'sakjdf', 'ksjd@fjla.com', '9168277713', '09168277713', '2008-12-28', 'designation2', 'aa', 'Consultant'),
(11, 'myDept', 'somedept', 'skdjflk', 'sldjflk@a.com', 'jkalsjdf', 'slkdfj', '2005-07-14', 'designation1', 'asdf', 'Consultant'),
(8, 'dept1', 'balya', 'ahamadnagar', 'balu@kalu.com', '8798654130', '9874556321000', '2013-05-13', 'designation2', 'MBBS', 'Consultant');

-- --------------------------------------------------------

--
-- Table structure for table `manufactur`
--

DROP TABLE IF EXISTS `manufactur`;
CREATE TABLE IF NOT EXISTS `manufactur` (
  `id` int(11) NOT NULL,
  `manu_company` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manufactur`
--

INSERT INTO `manufactur` (`id`, `manu_company`, `created_at`) VALUES
(0, 'abs', '2017-09-02 11:59:09'),
(0, 'my support', '2017-09-02 17:36:54'),
(0, 'ashish', '2017-09-03 01:25:51'),
(0, 'ashish', '2017-09-03 01:26:01');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `description`) VALUES
(1, 'Doctor', 'doctor'),
(2, 'Receptionist', 'Receptionist'),
(3, 'nurse', 'nurse'),
(5, 'Accountant', '');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sup_name` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `city` text COLLATE utf8_unicode_ci NOT NULL,
  `telephone` text COLLATE utf8_unicode_ci NOT NULL,
  `fax_no` text COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `web` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `sup_name`, `address`, `city`, `telephone`, `fax_no`, `email`, `web`, `created_at`) VALUES
(6, 'Abhijit kumbhar', 'Pimpari', 'Pune', '938427340098', '32647236934993', 'abs@gmail.com', 'www.abs.com', '2017-08-31 18:06:43'),
(7, 'Hanmat Kadam', 'Hingane', 'Pune', '89789e7657', '5575', 'hanmant@gmail.com', 'www.hk.com', '2017-08-31 18:25:26'),
(8, 'hghj', 'hjbjh', 'jh', 'kjhk', 'jbkq', 'jhgj', 'hjbgjg', '2017-09-02 02:38:17'),
(9, 'new supplier', 'pune', 'pune', '98765433100', '1234-1245-1245', 'abhijitkumbhar@gmail.com', 'www.google.cpm', '2017-09-02 17:39:27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `employee_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lab_unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emailid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `department`, `employee_name`, `lab_unit`, `emailid`, `phone`, `mobile`, `usertype`, `role`) VALUES
(1, 'abs001', '3477', 'myDept', 'Abhijit Gorakhanath Kumbhar', 'unit1', 'abhijit@gmail.com', '989875134', '9168277713', 'Consultant', ''),
(2, 'abs001', '2858', 'myDept', 'Abhijit Gorakhanath Kumbhar', 'unit1', 'abhijit@gmail.com', '989875134', '9168277713', 'Consultant', ''),
(3, 'ashish', '5182', 'anotherDept', 'Ashish A Desai', 'unit2', 'ashish@gmail.com', '9876543210', '9168277713', 'Reference', ''),
(4, 'user1', '821858', 'myDept', 'hemant', 'unit1', 'hemant@gmail.com', '9168277713', '9168277713', 'Consultant', ''),
(5, 'user2', '466010', 'anotherDept', 'Hanmant Kadam', 'unit123', 'abhijit@gmail.com', '9168277713', '9168277713', 'Reference', ''),
(10, 'some1', '564425', 'myDept', 'hemant', 'labunit', 'ashish@gmail.com', '9168277713', '9168277713', 'Reference', ''),
(11, 'myUser', '519341', 'myDept', 'hemant', 'unit10', 'user@gmail.com', '9876543210', '9168277713', 'Other', ''),
(9, 'user', '741753', 'myDept', 'Hanmant Kadam', 'some unit', 'abhijit@gmail.com', '9168277713', '9168277713', 'Other', ''),
(12, 'mytemp', '929199', 'myDept', 'Hanmant Kadam', 'unit123', 'abhijit@gmail.com', '9168277713', '9168277713', 'Consultant', ''),
(13, 'myuser1', '312038', 'dept1', 'Ashish A Desai', 'asdf', 'ashish@gmail.com', '9168277713', '8793539225', 'Other', ''),
(16, 'asd', '315646', 'dept1', 'Ashish A Desai', 'unit1', 'abhijit@gmail.com', '9168277713', '9168277713', 'Consultant', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
