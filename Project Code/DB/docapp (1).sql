-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2019 at 09:31 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminId` int(100) NOT NULL,
  `adminFullName` varchar(255) NOT NULL,
  `adminUserName` varchar(255) NOT NULL,
  `adminEmail` varchar(255) NOT NULL,
  `adminPassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminId`, `adminFullName`, `adminUserName`, `adminEmail`, `adminPassword`) VALUES
(1, 'Md. Abu Nasib', 'Nasib', 'nasib@gmail.com', '$2y$10$LiarEyMorP5ysm6NG1MHPO3bnq39wkMro/mfCjOEaRAJECoDjuL8G'),
(2, 'Nayeem M. Muzahid', 'Nayeem', 'nayeem@gmail.com', '$2y$10$xA824zacFEGVRwelmh2nPOa8mzrn2pqkIs64ENH.0zbZZE7Jd.qMm');

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE `ambulance` (
  `amb_id` int(11) NOT NULL,
  `amb_name` varchar(255) NOT NULL,
  `amb_city` varchar(255) NOT NULL,
  `amb_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ambulance`
--

INSERT INTO `ambulance` (`amb_id`, `amb_name`, `amb_city`, `amb_phone`) VALUES
(1, 'one', 'dhaka', '123456'),
(2, 'two', 'Dhaka', '3442'),
(3, 'one', 'dhaka', '123456'),
(4, 'two', 'Dhaka', '3442'),
(5, 'three', 'khulna', '16423456');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `ID` int(255) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `doc_Name` varchar(255) NOT NULL,
  `docDate` varchar(255) NOT NULL,
  `docTime` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPhone` varchar(255) NOT NULL,
  `userDescription` varchar(255) NOT NULL,
  `userID` int(255) NOT NULL,
  `doc_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`ID`, `user_fullname`, `doc_Name`, `docDate`, `docTime`, `userEmail`, `userPhone`, `userDescription`, `userID`, `doc_ID`) VALUES
(5, 'Nayeem M. Muzahid', '', '11/12/2019', '12:00pm-3:00pm', 'nayeemm.muzahid@gmail.com', '01949509823', 'nayeem', 3, 7),
(6, 'Nasib', '', '13/12/2019', '12:00pm-5:00pm', 'nayeem.explore@gmail.com', '01949509823', 'nothing just testing.', 3, 7),
(7, 'Dr. Abdur Rahim', '', 'Select Date', 'Friday-12:00pm-3:00pm', 'something@example.com', '01949509823', 'nothing just testing', 5, 6),
(8, 'Sadat', '', '13/12/2019', '12:00pm-3:00pm', 'something@example.com', '01949509823', 'sdfsdf', 5, 7),
(9, 'Nahid', '', '13/12/2019', '12:00pm-3:00pm', 'something@example.com', '01949509823', 'nothing', 6, 7),
(10, 'Nayeem M. Muzahid', 'Dr. Nicholas', '11/12/2019', '12:00pm-5:00pm', 'nayeemm.muzahid@gmail.com', '01949509823', 'nothing', 6, 7),
(11, 'Saadat Islam', 'Dr. Nicholas', '11/12/2019', '12:00pm-3:00pm', 'saa@goo.com', '0167425987', 'jjjjj', 3, 7),
(12, 'Saadat Islam', 'Dr. Nicholas', '13/12/2019', '12:00pm-3:00pm', 'saa@goo.com', '0167425987', 'sdasdasd', 8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doc_ID` int(255) NOT NULL,
  `doc_Fullname` varchar(255) NOT NULL,
  `doc_Specialization1` varchar(255) NOT NULL,
  `doc_Specialization2` varchar(255) NOT NULL,
  `doc_Degree` varchar(255) NOT NULL,
  `doc_Time1` varchar(255) NOT NULL,
  `doc_Time2` varchar(255) NOT NULL,
  `doc_Time3` varchar(255) NOT NULL,
  `doc_Date1` varchar(255) NOT NULL,
  `doc_Date2` varchar(255) NOT NULL,
  `doc_Date3` varchar(255) NOT NULL,
  `doc_Email` varchar(255) NOT NULL,
  `doc_PhoneNumber` varchar(255) NOT NULL,
  `doc_Description` varchar(2555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doc_ID`, `doc_Fullname`, `doc_Specialization1`, `doc_Specialization2`, `doc_Degree`, `doc_Time1`, `doc_Time2`, `doc_Time3`, `doc_Date1`, `doc_Date2`, `doc_Date3`, `doc_Email`, `doc_PhoneNumber`, `doc_Description`) VALUES
(1, 'Dr. Abdur Rahim', 'Cardiologist', 'Medicine', '', '', '', '', '', '', '', 'abdur.rahim@gmail.com', '01949509823', ''),
(2, 'Dr. Fazlul Hoque', 'Orthopedics', 'Medicine', 'MBBS, D. (Ortho), FA (Ortho), FAMA Trained in Orthopedic and Spinal Surgery (UK & USA)', '', '', '', '', '', '', 'something@example.com', '01949509823', ''),
(3, 'Dr. Abdur Rahim', 'Cardiologist', 'Medicine', 'MBBS, D. (Ortho), FA (Ortho), FAMA Trained in Orthopedic and Spinal Surgery (UK & USA)', 'Sunday-12:00pm-3:00pm', 'Monday-12:00pm-3:00pm', 'Friday-12:00pm-3:00pm', '', '', '', 'something@example.com', '01949509823', 'He completed Residency training program in Internal Medicine under Arab Board for Medical Specialization. In addition, he also passed the Jordanian Board in Internal Medicine from Amman, Kingdom of Jordan. Dr. Mirza Nazim Uddin completed MRCP from Royal College of Physicians, Ireland.\r\n\r\n He has received higher training in Critical care Medicine and worked in the department of Medicine and Critical care in different capacities. He was member of Critical Care Committee of Medina Munawara Region, Ministry of Health, KSA. He is a member of Association of Pan-Arab Critical Care Society & Asia Pacific Association of Critical Care Medicine.  He joins Square Hospital on March 2006 as a highly skilled Critical Care Specialist. '),
(4, 'Dr. Mahbub Mansur', 'Cardiology', '', 'MBBS, MD (Cardiology), Fellow, Interventional Cardiology Fellow, Pacing, EP and Device Implantation ', 'Sunday-12:00pm-3:00pm', 'Monday-12:00pm-3:00pm', 'Friday-12:00pm-3:00pm', '', '', '', 'something@example.com', '01949509823', 'Dr. Mahbub Mansur passed his MBBS from Chittagong Medical College in 1994. He passed MD in Cardiology from BSMMU in 2002. He attended Fellowship courses in Interventional Cardiology in Aga Khan University Hospital, Karachi and The Erasmus, Rotterdam, The Netherlands. He had done fellowship programmes in Electrophysiology in Holy Family Hospital, Bandra, Mumbai, India and also did fellowship programmes in Cardiac Device Implantation from Milan, Italy.\r\n\r\nHe worked as a Consultant and Associate Professor in Ibrahim Cardiac Hospital and Research Institute from 2003 to 2012.\r\n\r\nFrom 2012 to mid-2016 he was the Chief Consultant Cardiologist in Ibn Sina Hospital, Dhanmondi.\r\n\r\nHe is one of the pioneers of Radial Intervention in Bangladesh and till date has done more than 10,000 radial coronary intervention cases. His special interest is in Device therapies in Heart Failure patients.\r\n\r\nHe is a life member of Bangladesh Cardiac Society and Bangladesh Society of Cardiac Intervention and a founder member of Bangladesh Heart Rhythm Society.'),
(5, 'Dr. Kamal Pasha', 'Cardiology', 'Medicine', 'MBBS, MD (Cardiology), FAPSIC, FSCAI (USA), FACC (USA) ', 'Sunday-12:00pm-3:00pm', 'Monday-12:00pm-3:00pm', 'Friday-12:00pm-3:00pm', '', '', '', 'nayeemm.muzahid@gmail.com', '01949509823', 'Dr. Kamal Pasha graduated from Sir Salimullah Medical College. He joined as Assistant Registrar, Cardiology at the National Institute of Cardiovascular Diseases (NICVD), Dhaka and got intensive training on different aspects of clinical and interventional treatments of various cardiac diseases.\r\nDr. Kamal obtained MD-Cardiology degree from the same institution (NICVD) and worked there as post-graduate fellow till January, 2007. In January, 2007 he was promoted to Assistant Professor of Cardiology at Comilla Medical College.\r\nOn August, 2008, he joined Square Hospitals Ltd and worked independently as Associate Consultant, Clinical & Interventional Cardiology with utmost satisfaction of patients till October, 2014. Later he worked Dr. Sirajul Islam Medical College & Hospital as Chief Consultant, Clinical & Interventional Cardiology.\r\nDr. Kamal has long experience of more than 13 years in Clinical (non-invasive) & Interventional Cardiology. He has successfully accomplished more than 2500 cardiac interventional procedures including about 200 PCI/coronary angioplasties (Coronary Stenting) and about 20 dual chambers pace maker implantations.\r\nAs part of recognition of his contribution in the field of Cardiovascular sciences, especially for developing the scope of Interventional Cardiology in Bangladesh,  Dr. Kamal has been elected as member of Europian Society of Percutaneous Coronary Interventions (EAPCI) in 2012, Fellow of Asian Pacific Society of Interventional Cardiology (FAPSIC) in 2015, Fellow of The Society for Cardiovascular Angiography and Intervention (FSCAI, USA) in July, 2016 and Fellow of The American College of Cardiology (FACC, USA) in February, 2017. He is also life member of Bangladesh Cardiac Society, Bangladesh Society of Cardiovascular Intervention and Bangladesh Society of Echocardiography.\r\nDr. Kamal Pasha has a good number of publications in reputed national and international journals. As invited faculty, he has presented cases and moderated and chaired sessions at different national and international seminars, symposiums and workshops.\r\n\r\n\r\n'),
(6, 'Dr. Md. Towhiduzzaman', 'Cardiologist', 'Medicine', 'MBBS (Dhaka), MD CARD. (NICVD), FIC (Singapore), Fellow-National Heart Centre, Singapore, Fellow-Escorts Hospital, New Delhi â€” India, Specialist in Intravascular Ultrasound', 'Sunday-12:00pm-3:00pm', 'Monday-12:00pm-3:00pm', 'Friday-12:00pm-3:00pm', '', '', '', 'nayeemm.muzahid@gmail.com', '01949509823', 'Dr. Towhiduzzaman graduated with MBBS degree in January 1994 from Sher-e-Bangla Medical College, Barisal and Doctor of Medicine (MD) in Cardiology degree   in January 2002 from National Institute of Cardiovascular diseases (NICVD) under university of Dhaka.\r\n\r\nTraining & Fellowship: After obtaining his post graduate degree he started his professional career as Consultant Cardiologist at NICVD and also worked Z H Sikder Womenâ€™s Medical College, Gulshan till 2005.  \r\n\r\nDr. Towhiduzzaman received SAARC Cardiology  hands on Fellowship in Interventional Cardiology at Escorts Heart Institute and Research Centre (EHIR&C), New Delhi, India for 01(one) year in June 2006. Subsequently he was selected for another 01 year hands on Fellowship program in Interventional Cardiology at National Heart Centre, Singapore and received the fellowship award in July 2007.  He has successfully completed Rotablation, Intravascular ultrasound Pressure wire and peripheral stenting course. He also gained and experienced a numerous number of invasive and clinical training and observatory fellowship and visited  USA, Canada, France, England, Japan, Italy, Sweden, Hong Kong, China, Jamaica, Costarica, Vietnam, Malaysia, Thailand, India, Pakistan and Nepal. \r\n\r\nDr. Towhiduzzaman has published articles and presented cases at numerous national and international conferences. He has vast experiences of 10 years to perform invasive & interventional and complex diagnostic and therapeutic procedures independently & confidently. He is regular Faculty/Guest Speaker and participated in a large number of International workshops, seminars, symposiums both home and abroad that has enriched his decision making capacity, professional skills and care giving attitude to an international level. For last 10 years he is performing highest number of complex bifurcation, CTOs, primary PCI, and Renal & Peripheral Angioplasties at Square Hospital.\r\n\r\nHis sub specialty interest is in Interventional Cardiology.\r\n\r\nProfessional Appointment & Committee Membership:\r\n\r\nLife Member â€“ Bangladesh Cardiac Society (BSC), Bangladesh Society of Cardiovascular Interventions (BSCI), Bangladesh Society of Echo Cardiography (BSE), Bangladesh Medical Association (BMA)\r\n\r\nOrg. Secretary (Elect) Bangladesh Cardiac Society from 2015, Scientific Secretary (Elect), 2009 â€“ 14.\r\n\r\nOthers: Fellow, Society of Cardiac angiography &Intervention(FSCAI, USA), Associate Fellow American College of Cardiology (FACC), Member-American Society of Echocardiography (MASE), European Society of Percu'),
(7, 'Dr. Nicholas', 'Hypertension', 'Cardiologist', 'MBBS, D. (Ortho), FA (Ortho), FAMA Trained in Orth...', '12:00pm-3:00pm', '12:00pm-3:00pm', '12:00pm-5:00pm', '11/12/2019', '12/12/2019', '13/12/2019', 'nayeemm.muzahid@gmail.com', '01949509823', 'He completed Residency training program in Internal Medicine under Arab Board for Medical Specialization. In addition, he also passed the Jordanian Board in Internal Medicine from Amman, Kingdom of Jordan. Dr. Mirza Nazim Uddin completed MRCP from Royal College of Physicians, Ireland.\r\n\r\n He has received higher training in Critical care Medicine and worked in the department of Medicine and Critical care in different capacities. He was member of Critical Care Committee of Medina Munawara Region, Ministry of Health, KSA. He is a member of Association of Pan-Arab Critical Care Society & Asia Pacific Association of Critical Care Medicine.  He joins Square Hospital on March 2006 as a highly skilled Critical Care Specialist. ');

-- --------------------------------------------------------

--
-- Table structure for table `doctorslot`
--

CREATE TABLE `doctorslot` (
  `ID` int(255) NOT NULL,
  `doc_Date1` varchar(255) NOT NULL,
  `doc_Date2` varchar(255) NOT NULL,
  `doc_Date3` varchar(255) NOT NULL,
  `doc_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctorslot`
--

INSERT INTO `doctorslot` (`ID`, `doc_Date1`, `doc_Date2`, `doc_Date3`, `doc_ID`) VALUES
(1, '15/11/2019', '16/11/2019', '17/11/2019', 3),
(2, '14/11/2019', '19/11/2019', '20/11/2019', 6),
(3, '15/11/2019', '16/11/2019', '17/11/2019', 4),
(4, '14/11/2019', '19/11/2019', '20/11/2019', 5);

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `dnr_group` varchar(255) NOT NULL,
  `dnr_name` varchar(255) NOT NULL,
  `dnr_address` varchar(255) NOT NULL,
  `dnr_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `dnr_group`, `dnr_name`, `dnr_address`, `dnr_phone`) VALUES
(1, 'b+', 'saadat', 'babafd', '6489479'),
(2, 'a-', 'islam', 'asdf', '97465');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(255) NOT NULL,
  `userFullName` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userPhone` varchar(255) NOT NULL,
  `userImg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userFullName`, `userName`, `userEmail`, `userPassword`, `userPhone`, `userImg`) VALUES
(1, 'Nayeem M. Muzahid', 'Nym02', 'nayeem.explore@gmail.com', 'nayeem161', '', ''),
(2, 'The Bengal Sheikh', 'nayeem_muzahid', 'nayeemm.muzahid@gmail.com', '12345678', '', ''),
(3, 'Nayeem M. Muzahid', 'nym03', 'something@example.com', '$2y$10$/4nJhBg80JYweOWLfWT/FOsBMVSa4yF1QGLL9xHRi1fIGiggr.C4y', '', ''),
(4, 'Nayeem M. Muzahid', 'Nym03', 'nayeemm.muzahid@gmail.com', 'nayeem12345', '', ''),
(5, 'nene', 'nene', 'something@example.com', '$2y$10$69/xTeLjAuRtd0i0rIK6aeXSnriJYOQnI8.Eqq9Rwv5VUwpT1OOpK', '', ''),
(6, 'Nahid', 'nym04', 'something@example.com', '$2y$10$.g7ImDAFSFj75skrwd1vdOV/8kkyvH6njVtypnqGXKzCbEf7MEgue', '', ''),
(7, 'Md. Abu Nasib', 'nasib48', 'abu.nasib@northsouth.edu', '$2y$10$Soi1MUZdfofIrcl.dYv65ej6/Rbk/N8Xp.Mp6edmDCXgFrQXhTF1O', '', ''),
(8, 'Saadat Islam', 'saadat', 'saa@goo.com', '$2y$10$IFyumJF0srcHXWqNOOtTLOwIeliGAJpY/9NLRv9PXAdYv/IhlBhPS', '0167425987', 'uploads/'),
(9, 'Asad', 'Asad03', 'asad@gmail.com', '$2y$10$LiarEyMorP5ysm6NG1MHPO3bnq39wkMro/mfCjOEaRAJECoDjuL8G', '01745824568', 'uploads/'),
(10, 'Arafat', 'arafat04', 'arafat@gmail.com', '$2y$10$xA824zacFEGVRwelmh2nPOa8mzrn2pqkIs64ENH.0zbZZE7Jd.qMm', '01745824568', 'uploads/'),
(11, 'Nayeem M. Muzahid', 'nym00', 'sdf@nsu.com.in', 'nayeem162', '01948491095', 'uploads/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `ambulance`
--
ALTER TABLE `ambulance`
  ADD PRIMARY KEY (`amb_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doc_ID`);

--
-- Indexes for table `doctorslot`
--
ALTER TABLE `doctorslot`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ambulance`
--
ALTER TABLE `ambulance`
  MODIFY `amb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doc_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctorslot`
--
ALTER TABLE `doctorslot`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
