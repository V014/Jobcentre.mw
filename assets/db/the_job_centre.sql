-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 11:30 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_job_centre`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(1) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Password`) VALUES
(0, 'jobcentre', 'jobcentre265');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `Id` int(7) NOT NULL,
  `VacancyID` int(7) NOT NULL,
  `SeekerID` int(7) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`Id`, `VacancyID`, `SeekerID`, `Date`) VALUES
(1, 2, 2, '2020-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `applications_employer`
--

CREATE TABLE `applications_employer` (
  `Id` int(7) NOT NULL,
  `VacancyID` int(7) NOT NULL,
  `SeekerID` int(7) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `Id` int(7) NOT NULL,
  `EmployerID` int(7) NOT NULL,
  `Ceo` text,
  `CompanyName` text,
  `OrganisationType` text,
  `Industry` text,
  `Location` text,
  `City` text,
  `Address` text,
  `Website` text,
  `Description` text,
  `Contact` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`Id`, `EmployerID`, `Ceo`, `CompanyName`, `OrganisationType`, `Industry`, `Location`, `City`, `Address`, `Website`, `Description`, `Contact`) VALUES
(1, 1, 'Hopper Sterling', 'Leafhopper', 'Private', 'Agriculture', 'Malawi', 'Lilongwe', 'Box 2000\r\nLilongwe', 'www.leafhopper.com', 'We are a company that provides gardening appliances to farmers in need.                                        ', 999583745),
(2, 3, 'Harold Tim', 'Idiographic', 'Public', 'Construction', 'Malawi', 'Blantyre', 'Box 2003,\r\nLilongwe, Malawi', 'https://idiographic.com', 'We are a construction company', 998674893);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Id` int(7) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Message` text NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `Id` int(7) NOT NULL,
  `UserID` int(7) NOT NULL,
  `Fullname` varchar(30) DEFAULT NULL,
  `Gender` enum('Male','Female') DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  `Nationality` text,
  `City` text,
  `Contact` text,
  `Address` text,
  `Skills` text,
  `Location` text,
  `Industry` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`Id`, `UserID`, `Fullname`, `Gender`, `Dob`, `Nationality`, `City`, `Contact`, `Address`, `Skills`, `Location`, `Industry`) VALUES
(1, 2, 'Albert Simpson', 'Male', '1992-02-06', 'Malawian', 'Blantyre', '265884858732', 'Box 2003,\r\nLilongwe, Malawi', 'Directing, Motivating, Initiating', 'Malawi', 'Administration');

-- --------------------------------------------------------

--
-- Table structure for table `locum`
--

CREATE TABLE `locum` (
  `Id` int(7) NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `Role` enum('jobseeker','employer') NOT NULL,
  `DateJoined` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locum`
--

INSERT INTO `locum` (`Id`, `Email`, `Password`, `Role`, `DateJoined`) VALUES
(1, 'henrypeter@mail.com', 'hp123', 'jobseeker', '2020-11-08'),
(2, 'shieldcare@mail.com', 'sc123', 'employer', '2020-11-09'),
(3, 'healthmaster@mail.com', 'hm123', 'employer', '2020-11-09'),
(4, 'timelesshealth@gmail.com', 'tl123', 'employer', '2020-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `locum_applications`
--

CREATE TABLE `locum_applications` (
  `Id` int(7) NOT NULL,
  `VacancyID` int(7) NOT NULL,
  `SeekerID` int(7) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locum_applications_employer`
--

CREATE TABLE `locum_applications_employer` (
  `Id` int(7) NOT NULL,
  `VacancyID` int(7) NOT NULL,
  `SeekerID` int(7) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locum_employer`
--

CREATE TABLE `locum_employer` (
  `Id` int(7) NOT NULL,
  `EmployerID` int(7) NOT NULL,
  `Ceo` text,
  `OrganisationName` text,
  `Location` text,
  `City` text,
  `Address` text,
  `Website` text,
  `Description` text,
  `Contact` text,
  `Status` enum('Online','Blocked') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locum_employer`
--

INSERT INTO `locum_employer` (`Id`, `EmployerID`, `Ceo`, `OrganisationName`, `Location`, `City`, `Address`, `Website`, `Description`, `Contact`, `Status`) VALUES
(3, 2, 'Brad Paul', 'Shield Care', 'Malawi', 'Blantyre', 'Box 2003,\r\nLilongwe, Malawi', 'https://www.shieldcare.com', 'We are a body that supplies well-ness care and recruits members of the community ready to aid in health care. ', '+265998767876', 'Blocked'),
(4, 3, 'Fred Oakland', 'Health Master', 'Malawi', 'Blantyre', 'Box 2003,\r\nLilongwe, Malawi', 'https://www.healthmaster.com', 'We are a body that find the most talented set of individuals that will aid in helping people in their nation.', '09985374857', 'Blocked'),
(5, 4, 'Foster Castle', 'Timeless Health', 'Malawi', 'Blantyre', 'Blantyre 234\r\nGinery Corner\r\nGalaxy Builder', 'https://www.timelesshealth.com', 'We are an organization for passion of the public', '09985374857', 'Blocked');

-- --------------------------------------------------------

--
-- Table structure for table `locum_jobseeker`
--

CREATE TABLE `locum_jobseeker` (
  `Id` int(7) NOT NULL,
  `UserID` int(7) NOT NULL,
  `Fullname` text,
  `Gender` enum('Male','Female') DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  `Nationality` text,
  `Location` text,
  `City` text,
  `Contact` text,
  `Address` text,
  `Profession` enum('Doctor','Nurse','Clinician') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locum_jobseeker`
--

INSERT INTO `locum_jobseeker` (`Id`, `UserID`, `Fullname`, `Gender`, `Dob`, `Nationality`, `Location`, `City`, `Contact`, `Address`, `Profession`) VALUES
(1, 1, 'Henry Peter', 'Male', '1990-07-08', 'Malawian', 'Malawi', 'Blantyre', '256995605948', 'Box 2003,\r\nLilongwe, Malawi', 'Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `locum_vacancies`
--

CREATE TABLE `locum_vacancies` (
  `Id` int(7) NOT NULL,
  `EmployerID` int(7) NOT NULL,
  `Date` date NOT NULL,
  `Closing` date NOT NULL,
  `Title` text NOT NULL,
  `Location` text NOT NULL,
  `Description` text,
  `MiniDesc` text NOT NULL,
  `Status` enum('Pending','Posted') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locum_vacancies`
--

INSERT INTO `locum_vacancies` (`Id`, `EmployerID`, `Date`, `Closing`, `Title`, `Location`, `Description`, `MiniDesc`, `Status`) VALUES
(1, 2, '2020-11-09', '2020-12-30', 'Clinic director', 'Blantyre', 'We are recruiting those who are up to the task of organizing the daily record keeping of the organisation', '', 'Posted'),
(2, 2, '2020-11-09', '2020-12-31', 'Nurse', 'Blantyre', 'We are compiling a team of nurses to help in the most affected part of the nation, resources will be procured.', '', 'Posted'),
(3, 3, '2020-11-09', '2020-12-31', 'Assistant Doctor', 'Blantyre', 'We need someone to aid our doctors when they are on high demand.', '', 'Posted'),
(4, 4, '2020-12-01', '2020-12-31', 'Clinic director', 'Blantyre', '<p>REPORTS TO: Senior Communications Advisor</p><p><br>Purpose of the Job:</p><p>Based in PSI Malawi Lilongwe office, Demand Creation Manager (RH) will be lead the Reproductive Health Program demand creation team in ensuring that demand for RH services is created and that targets are met</p><p><br>MAIN DUTIES AND RESPONSIBILITIES:</p><p>Develop PSI Malawi reproductive health SBCC strategy and operational plan in coordination with program team and align it with donor priorities.<br>Leads in development and implementation of PSI Malawi Youth focused demand creation strategies.<br>Lead in building a vibrant and responsive RH Demand Creation and Social Mobilization team.<br>Lead the development, testing and implementation of innovative demand creation approaches.<br>With support from the communications manager develop demand creation training manual and supporting job aides.<br>Initiates and participates in evaluation of targeted</p>', '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(7) NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `Role` enum('jobseeker','employer') NOT NULL,
  `DateJoined` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Email`, `Password`, `Role`, `DateJoined`) VALUES
(1, 'leafhopper@mail.com', 'leaf123', 'employer', '2020-10-23'),
(2, 'albertsimpson@mail.com', 'as123', 'jobseeker', '2020-11-06'),
(3, 'idiographic@mail.com', 'ig123', 'employer', '2020-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `vacancies`
--

CREATE TABLE `vacancies` (
  `Id` int(7) NOT NULL,
  `EmployerID` int(7) NOT NULL,
  `Date` date NOT NULL,
  `Closing` date NOT NULL,
  `Title` text NOT NULL,
  `Location` text NOT NULL,
  `Description` text,
  `MiniDesc` text NOT NULL,
  `Status` enum('Pending','Posted') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacancies`
--

INSERT INTO `vacancies` (`Id`, `EmployerID`, `Date`, `Closing`, `Title`, `Location`, `Description`, `MiniDesc`, `Status`) VALUES
(1, 1, '2020-10-11', '2020-11-30', 'Quantity Surveyor', 'Blantyre', 'Done', '', 'Posted'),
(2, 1, '2020-10-18', '2020-11-30', 'Room designer', 'Blantyre', 'If you can design a room, this is the job for you.', '', 'Posted'),
(4, 3, '2020-11-28', '2020-12-30', 'Human Resource Manager', 'Blantyre', '<p>Address: Senior Communications Advisor</p><p><br>Purpose of the Job:</p><p>Based in PSI Malawi Lilongwe office, Demand Creation Manager (RH) will be lead the Reproductive Health Program demand creation team in ensuring that demand for RH services is created and that targets are met</p><p><br>MAIN DUTIES AND RESPONSIBILITIES:</p><p>Develop PSI Malawi reproductive health SBCC strategy and operational plan in coordination with program team and align it with donor priorities.<br>Leads in development and implementation of PSI Malawi Youth focused demand creation strategies.<br>Lead in building a vibrant and responsive RH Demand Creation and Social Mobilization team.<br>Lead the development, testing and implementation of innovative demand creation approaches.<br>With support from the communications manager develop demand creation training manual and supporting job aides.<br>Initiates and participates in evaluation of targeted demand generation strategies and assessments activities with the goal of improving project outcomes.<br>Works with disability inclusion coordinator to develop strategies on sensitizing teams on inclusion and plans activities targeting persons living with disability.<br>Consolidates and provides input for weekly, monthly, and quarterly reports demonstrating progress and also highlighting key insights on demand creation strategies/approaches for scale up.<br>Lead documentation of program success stories to be shared with stakeholders including MoH and funding partners<br>Lead process of developing new demand creation materials, provider behavior materials and information dissemination tools, drawing on existing PSI and MoH resources.<br>Work with the MERL team to generate and use evidence in development of demand strategies.<br>Develop and cascade standard operating procedures for demand creation processes to standardize implementation.<br>Represent the department at national level in RH sub committees and TWGs<br>Coordinate with other external partners and stakeholders in creating demand creation strategies and implementing them<br>Coordinate with district and community structures in implementing demand creation activities</p><p><br>COMPETENCIES AND KNOWLEDGE<br>Ability to manage multiple tasks and prioritize.<br>Excellent interpersonal and time management skills<br>Self-starter and effective team player<br>High levels of professionalism</p><p><br>THE BASICS:<br>At least a Bachelorsâ€™ degree in Public Health, Communication, Social Behavioral Change Communication or in any related field<br>A minimum of 3-5 years of experience in a communication or demand creation coordination or management capacity<br>Computer literate, extensive working experience in Word, Excel, Power-point, Outlook Express<br>Experience in report writing and documentation</p>', '', 'Posted'),
(5, 3, '2020-12-01', '2020-12-30', 'Accountant', 'Blantyre', '<p>REPORTS TO: Senior Communications Advisor</p><p><br>Purpose of the Job:</p><p>Based in PSI Malawi Lilongwe office, Demand Creation Manager (RH) will be lead the Reproductive Health Program demand creation team in ensuring that demand for RH services is created and that targets are met</p><p><br>MAIN DUTIES AND RESPONSIBILITIES:</p><p>Develop PSI Malawi reproductive health SBCC strategy and operational plan in coordination with program team and align it with donor priorities.<br>Leads in development and implementation of PSI Malawi Youth focused demand creation strategies.<br>Lead in building a vibrant and responsive RH Demand Creation and Social Mobilization team.<br>Lead the development, testing and implementation of innovative demand creation approaches.<br>With support from the communications manager develop demand creation training manual and supporting job aides.<br>Initiates and participates in evaluation of targeted demand generation strategies and assessments activities with the goal of improving project outcomes.<br>Works with disability inclusion coordinator to develop strategies on sensitizing teams on inclusion and plans activities targeting persons living with disability.<br>Consolidates and provides input for weekly, monthly, and quarterly reports demonstrating progress and also highlighting key insights on demand creation strategies/approaches for scale up.<br>Lead documentation of program success stories to be shared with stakeholders including MoH and funding partners<br>Lead process of developing new demand creation materials, provider behavior materials and information dissemination tools, drawing on existing PSI and MoH resources.<br>Work with the MERL team to generate and use evidence in development of demand strategies.<br>Develop and cascade standard operating procedures for demand creation processes to standardize implementation.<br>Represent the department at national level in RH sub committees and TWGs<br>Coordinate with other external partners and stakeholders in creating demand creation strategies and implementing them<br>Coordinate with district and community structures in implementing demand creation activities</p><p><br>COMPETENCIES AND KNOWLEDGE<br>Ability to manage multiple tasks and prioritize.<br>Excellent interpersonal and time management skills<br>Self-starter and effective team player<br>High levels of professionalism</p><p><br>THE BASICS:<br>At least a Bachelorsâ€™ degree in Public Health, Communication, Social Behavioral Change Communication or in any related field<br>A minimum of 3-5 years of experience in a communication or demand creation coordination or management capacity<br>Computer literate, extensive working experience in Word, Excel, Power-point, Outlook Express<br>Experience in report writing and documentation</p>', '', 'Posted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `applications_employer`
--
ALTER TABLE `applications_employer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `locum`
--
ALTER TABLE `locum`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `locum_applications`
--
ALTER TABLE `locum_applications`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `locum_applications_employer`
--
ALTER TABLE `locum_applications_employer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `locum_employer`
--
ALTER TABLE `locum_employer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `locum_jobseeker`
--
ALTER TABLE `locum_jobseeker`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `locum_vacancies`
--
ALTER TABLE `locum_vacancies`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `Id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applications_employer`
--
ALTER TABLE `applications_employer`
  MODIFY `Id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `Id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `Id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locum`
--
ALTER TABLE `locum`
  MODIFY `Id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locum_applications`
--
ALTER TABLE `locum_applications`
  MODIFY `Id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locum_applications_employer`
--
ALTER TABLE `locum_applications_employer`
  MODIFY `Id` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locum_employer`
--
ALTER TABLE `locum_employer`
  MODIFY `Id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `locum_jobseeker`
--
ALTER TABLE `locum_jobseeker`
  MODIFY `Id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locum_vacancies`
--
ALTER TABLE `locum_vacancies`
  MODIFY `Id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `Id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
