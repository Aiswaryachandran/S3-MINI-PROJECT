-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2022 at 08:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminadd`
--

CREATE TABLE `adminadd` (
  `mid` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `blood` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `equ` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `pob` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `idmark` varchar(20) NOT NULL,
  `phno` int(10) NOT NULL,
  `distric` varchar(20) NOT NULL,
  `hname` varchar(20) NOT NULL,
  `place` varchar(20) NOT NULL,
  `ano` int(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `nation` varchar(20) NOT NULL,
  `photo` varchar(20) NOT NULL,
  `afront` varchar(20) NOT NULL,
  `aback` varchar(20) NOT NULL,
  `eyetest` varchar(20) NOT NULL,
  `regdate` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comm`
--

CREATE TABLE `comm` (
  `cid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `usertype` varchar(20) DEFAULT NULL,
  `receiver` varchar(20) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date` datetime(6) NOT NULL,
  `status` int(1) NOT NULL,
  `recid` int(10) DEFAULT NULL,
  `adminupdate` varchar(50) DEFAULT NULL,
  `updatedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comm`
--

INSERT INTO `comm` (`cid`, `userid`, `username`, `usertype`, `receiver`, `sub`, `message`, `date`, `status`, `recid`, `adminupdate`, `updatedate`) VALUES
(1000, 1, 'admin', 'admin', 'ashik', 'ABOUT TEST', 'HELLO', '2012-05-09 11:08:46.000000', 0, 1002, '', NULL),
(1001, 1004, 'sulfi', NULL, 'admin', 'ABOUT TEST', 'when is my test', '2012-05-09 09:49:45.000000', 0, 1, '', NULL),
(1002, 1004, 'sulfi', NULL, '', '', '', '2012-05-09 09:49:51.000000', 0, 0, '', NULL),
(1003, 1004, 'sulfi', NULL, 'admin', 'test', 'test', '2012-05-09 09:50:53.000000', 0, 1, '', NULL),
(1004, 1, 'admin', 'admin', 'sulfi', 'test', 'poda', '2012-05-09 10:36:10.000000', 0, 1004, '', NULL),
(1005, 1004, 'sulfi', NULL, 'admin', 'test2', 'test', '2012-05-09 10:37:37.000000', 0, 1, 'hi bro', '2012-05-09'),
(1006, 1005, 'anu', NULL, 'admin', 'anu', 'hi', '2012-05-09 09:19:45.000000', 0, 1, '', NULL),
(1007, 1, 'admin', 'admin', 'ashik', 'asf', 'asdhj', '2012-05-09 09:39:50.000000', 0, 1002, '', NULL),
(1008, 1006, 'sindhya', NULL, 'admin', 'msg', 'hi', '2012-05-09 09:59:30.000000', 1, 1, 'trainer', '2012-05-09'),
(1009, 1005, 'anu', NULL, 'admin', 'g', 'hlo', '2012-05-09 11:01:57.000000', 0, 1, '', NULL),
(1010, 1, 'admin', 'admin', 'anupama', 'anu', 'hi', '2012-05-09 11:02:32.000000', 0, 1005, '', NULL),
(1011, 1009, 'sooraj', NULL, 'admin', 'test', 'test', '2012-05-09 10:21:23.000000', 0, 1, '', NULL),
(1012, 1, 'admin', 'admin', 'sooraj', 'test', 'retest', '2012-05-09 10:22:01.000000', 1, 1009, 'hi', '2012-05-09'),
(1013, 1009, 'sooraj', NULL, 'admin', 'ZDFD', 'ZDFZSF', '2012-05-09 10:58:02.000000', 0, 1, 'NULL', '0000-00-00'),
(1014, 1009, 'sooraj', NULL, 'admin', 'hello', 'helo', '2012-05-09 11:08:50.000000', 0, 1, 'trainer', '0000-00-00'),
(1015, 1009, 'sooraj', NULL, 'admin', 'sooraj', 'test enname', '2013-05-09 12:10:16.000000', 0, 1, 'deepa', '2013-05-09'),
(1016, 1007, 'student', NULL, 'admin', 'sooraj', 'good', '2012-05-09 09:28:10.000000', 0, 1, NULL, NULL),
(1017, 1009, 'sooraj', NULL, 'admin', 'sooraj', 'pooda', '2026-02-22 06:41:37.000000', 0, 1, NULL, NULL),
(1018, 1009, 'sooraj', NULL, 'admin', 'xxxxxx', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '2026-02-22 06:42:25.000000', 0, 1, NULL, NULL),
(1019, 1, 'admin', NULL, 'deepa', 'admin', 'we', '2026-02-22 06:52:09.000000', 0, 1008, NULL, NULL),
(1020, 1, 'admin', NULL, 'sooraj', 'sooraj', 'pooda', '2026-02-22 06:53:02.000000', 1, 1009, 'good', '2026-02-22'),
(1021, 1, 'admin', NULL, 'sooraj', 'sooraj', 'good', '2026-02-22 06:53:51.000000', 1, 1009, 'ok', '2026-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ph` int(10) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dpr`
--

CREATE TABLE `dpr` (
  `dprid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `requst` varchar(20) NOT NULL,
  `dateofreq` varchar(20) NOT NULL,
  `timeneed` varchar(20) NOT NULL,
  `discription` varchar(20) NOT NULL,
  `adminupdate` varchar(20) DEFAULT NULL,
  `stutas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dpr`
--

INSERT INTO `dpr` (`dprid`, `userid`, `requst`, `dateofreq`, `timeneed`, `discription`, `adminupdate`, `stutas`) VALUES
(1000, 1004, 'test', '12-05-09', '10/12/2020', 'test', NULL, 0),
(1001, 1005, 'driving practice', '12-05-09', '230', 'asghjtr', 'accepted', 1),
(1002, 1008, 'practice', '12-05-09', '2hr', 'hi', 'accepted', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `eid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `dateofsent` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `adminupdate` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`eid`, `userid`, `dateofsent`, `subject`, `message`, `adminupdate`, `status`) VALUES
(1000, 1004, '12-05-09', 'test', 'test', 'test\r\n', 1),
(1001, 1005, '12-05-09', 'anu', 'hi', 'hlo', 1),
(1002, 1008, '12-05-09', 'frr', 'eefg', 'ho', 1),
(1003, 1008, '12-05-09', 'asdgfg', 'thgbf', NULL, 0),
(1004, 1008, '12-05-09', '', '', NULL, 0),
(1005, 1008, '12-05-09', 'swdfdgkl', 'wertfiobc', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lcreg`
--

CREATE TABLE `lcreg` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `fathername` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `eduqual` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `pob` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `idenmark` varchar(100) NOT NULL,
  `phno` int(10) NOT NULL,
  `district` varchar(20) NOT NULL,
  `housename` varchar(20) NOT NULL,
  `place` varchar(20) NOT NULL,
  `adharno` int(12) NOT NULL,
  `state` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `adharfront` varchar(200) NOT NULL,
  `adharback` varchar(200) NOT NULL,
  `eyetest` varchar(200) NOT NULL,
  `regdate` datetime(6) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lcreg`
--

INSERT INTO `lcreg` (`id`, `name`, `bloodgroup`, `fathername`, `sex`, `eduqual`, `dob`, `pob`, `email`, `idenmark`, `phno`, `district`, `housename`, `place`, `adharno`, `state`, `nationality`, `photo`, `adharfront`, `adharback`, `eyetest`, `regdate`, `status`) VALUES
(1004, 'sulfi', 'b +ve', 'muhammadh', 'Female', '+2', '15-01-2001', 'attingal', 'babu@gmail.com', 'black mole', 2147483647, 'trivandrum', 'vrindavanam', 'navalakulam', 2147483647, 'kerala', 'india', '71413_b1.jpg', '26473_93917_Tulips.jpg', '40440_95174_Penguins.jpg', '34274_b3.jpg', '0000-00-00 00:00:00.000000', 0),
(1003, 'appu', 'b +ve', 'rajan', 'Male', '+2', '15-01-2001', 'attingal', 'babu@gmail.com', 'black mole', 2147483647, 'trivandrum', 'vrindavanam', 'attingal', 2147483647, 'kerala', 'india', '49757_p9.jpg', '30948_b2.jpg', '2039_95174_Penguins.jpg', '62510_p8.jpg', '0000-00-00 00:00:00.000000', 0),
(1005, 'anupama s', '0 +ve', 'binu', 'Female', 'degree', '15-01-2001', 'kerala', 'abc@gmail.com', 'black mole', 1234567890, 'trivandrum', 'anu bhavan', 'attingal', 2147483647, 'kerala', 'india', '7407_b1_small.jpg', '56092_b3_small.jpg', '84130_pic.jpg', '1168_b2_small.jpg', '0000-00-00 00:00:00.000000', 0),
(1009, 'sooraj', 'b +ve', 'rajan', 'Male', '+2', '15-01-2001', 'attingal', 'soorajvrinanam@gmail', 'anu', 2147483647, 'trivandrum', 'vrindavanam', 'attingal', 2147483647, 'kerala', 'india', '71272_b2_small.jpg', '29438_93917_Tulips.jpg', '97658_95174_Penguins.jpg', '35942_bas-peperzak-tyhpK_QelPo-unsplash.jpg', '0000-00-00 00:00:00.000000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 0),
(1002, 'ashik', 'ashik', 'trainer', 0),
(1003, 'appu', 'appu', 'user', 0),
(1004, 'sulfi', 'sulfi', 'user', 0),
(1005, 'anu', 'anu@123', 'user', 0),
(1006, 'sindhya', 'sin@123', 'trainer', 0),
(1007, 'student', 'student@123', 'user', 2),
(1008, 'deepa', 'deepa@123', 'user', 0),
(1009, 'sooraj', 'sooraj', 'user', 2),
(1010, 'soop', 'arun', 'user', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `nid` int(10) NOT NULL,
  `type` varchar(20) NOT NULL,
  `title` varchar(25) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nid`, `type`, `title`, `subject`, `status`) VALUES
(1000, 'Male', 'TEST UPDATE', 'DUE TO COVID 19 ALL TEST ARE POSTPONTED.NEW DATE WILL BE ANNOUNCED LATTER...', 0),
(1001, 'Male', 'car', 'asdfgkl', 0),
(1002, 'Male', 'ki', 'dfrgth', 0),
(1003, 'Govmt Notification', 'sooraj', 'test posponded to 02\052022', 0);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pid` int(20) NOT NULL,
  `typeofpack` varchar(100) NOT NULL,
  `pack name` varchar(100) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `time slot` varchar(20) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `conditions` varchar(500) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pid`, `typeofpack`, `pack name`, `details`, `duration`, `time slot`, `amount`, `conditions`, `status`) VALUES
(1000, '2 WHEELER', 'BASIC', 'TEST WITH ROAD EXPERIENCE', '150 DAYS', '2HR/DAY', '6000', 'AGE ABOVE 18', 0),
(1001, '4 WHEELER', 'PREMIUM', 'MODEL: SUV \r\nWITH - AC', '120 DAYS', '1HR/DAY', '12000', 'AGE ABOVE 18', 0),
(1002, 'basic', 'car', 'asdfg', '140days', '2hr/day', '4000', 'qwert', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payinfo`
--

CREATE TABLE `payinfo` (
  `payid` int(10) NOT NULL,
  `userid` int(11) NOT NULL,
  `dateofpayment` varchar(20) DEFAULT NULL,
  `installment` int(10) DEFAULT NULL,
  `amountofpay` int(10) NOT NULL,
  `dscription` varchar(20) NOT NULL,
  `purpose` varchar(20) DEFAULT NULL,
  `status` int(10) NOT NULL,
  `tstatus` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `package` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payinfo`
--

INSERT INTO `payinfo` (`payid`, `userid`, `dateofpayment`, `installment`, `amountofpay`, `dscription`, `purpose`, `status`, `tstatus`, `pid`, `username`, `package`) VALUES
(1000, 1000, '12-May-09', NULL, 12000, 'Paid', 'hello', 1, 0, 1001, 'sooraj', '4 WHEELER'),
(1001, 1004, '12-May-09', NULL, 12000, 'Paid', 'test', 1, 1, 1001, 'sulfi', '4 WHEELER'),
(1002, 1003, NULL, NULL, 6000, 'not paid', NULL, 0, 0, 1000, 'appu', '2 WHEELER'),
(1003, 1003, NULL, NULL, 6000, 'not paid', NULL, 0, 0, 1000, 'appu', '2 WHEELER'),
(1004, 1003, NULL, NULL, 6000, 'not paid', NULL, 0, 0, 1000, 'appu', '2 WHEELER'),
(1005, 1005, '12-May-09', NULL, 6000, 'Paid', 'skfjlajdffnm', 1, 1, 1000, 'anu', '2 WHEELER'),
(1006, 1009, NULL, NULL, 12000, 'not paid', NULL, 0, 0, 1001, 'sooraj', '4 WHEELER'),
(1007, 1007, NULL, NULL, 4000, 'not paid', NULL, 0, 0, 1002, 'student', 'basic');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `nog` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phno` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `adharno` int(15) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `address` varchar(35) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `dob`, `sex`, `blood`, `nog`, `email`, `phno`, `username`, `password`, `adharno`, `usertype`, `address`, `status`) VALUES
(1002, 'ashik', '0000-00-00', 'Male', 'B +ve', 'sanju', 'aser@gamil.com', 2147483647, 'ashik', 'ashik', 2147483647, 'trainer', 'ash villa tvm', 1),
(1003, 'dasan', '0000-00-00', 'Male', 'B +ve', 'sasi', 'dasan@gmail.com', 2147483647, 'appu', 'appu', 2147483647, 'user', 'dasan villa attingal po', 1),
(1004, 'sulfi', '0000-00-00', 'Female', 'o +ve', 'mohammed', 'sulfi@gmail.com', 2147483647, 'sulfi', 'sulfi', 2147483647, 'user', 'sulfi villa tvm', 1),
(1005, 'anupama', '2000-06-13', 'Female', 'o+ve', 'geetha', 'abc@gmail.com', 2147483647, 'anu', 'anu@123', 2147483647, 'user', 'adgffrgfh', 1),
(1006, 'sindhya', '2009-05-04', 'Female', 'b-ve', 'ali', 'sin@gmail.com', 1234567867, 'sindhya', 'sin@123', 2147483647, 'trainer', 'sindhya bhavan', 1),
(1007, 'student', '2009-04-29', 'Female', 'o-ve', 'allu', 'stud@gmail.com', 1256345678, 'student', 'student@123', 2147483647, 'user', 'frgtyhuj', 1),
(1008, 'deepa', '2009-04-28', 'Female', 'o-ve', 'sanju', 'deepa@gmail.com', 2147483647, 'deepa', 'deepa@123', 2147483647, 'user', 'asdefrvtg', 1),
(1009, 'sooraj', '2000-03-01', 'Male', 'B +ve', 'sanju', 'sooraj722@gmail.com', 2147483647, 'sooraj', 'sooraj', 2147483647, 'user', 'sooraj villa kollam', 1),
(1010, 'arun pp', '2022-02-02', 'Female', 'o positive', 'gvxcfvgxf', 'aser@gamil.com', 2147483647, 'soop', 'arun', 2147483647, 'user', 'arun', 1);

-- --------------------------------------------------------

--
-- Table structure for table `triasin`
--

CREATE TABLE `triasin` (
  `id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  `tid` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `packege` varchar(20) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `triasin`
--

INSERT INTO `triasin` (`id`, `userid`, `pid`, `tid`, `username`, `packege`, `status`) VALUES
(1000, 1004, 1001, 1002, 'sulfi', '4 WHEELER', 0),
(1001, 1005, 1000, 1006, 'anu', '2 WHEELER', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminadd`
--
ALTER TABLE `adminadd`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `comm`
--
ALTER TABLE `comm`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dpr`
--
ALTER TABLE `dpr`
  ADD PRIMARY KEY (`dprid`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `payinfo`
--
ALTER TABLE `payinfo`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `triasin`
--
ALTER TABLE `triasin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminadd`
--
ALTER TABLE `adminadd`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comm`
--
ALTER TABLE `comm`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1022;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dpr`
--
ALTER TABLE `dpr`
  MODIFY `dprid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `eid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `nid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `payinfo`
--
ALTER TABLE `payinfo`
  MODIFY `payid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1009;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT for table `triasin`
--
ALTER TABLE `triasin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
