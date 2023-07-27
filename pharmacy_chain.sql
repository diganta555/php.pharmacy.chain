-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2022 at 05:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy_chain`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `C_id` int(15) NOT NULL,
  `C_name` varchar(30) NOT NULL,
  `C_phone` varchar(10) NOT NULL,
  `Total` varchar(100) NOT NULL,
  `s_date` date NOT NULL,
  `Outlet` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`C_id`, `C_name`, `C_phone`, `Total`, `s_date`, `Outlet`) VALUES
(1, 'Shalini Sen', '9874259035', '97.2', '2022-02-09', 1),
(2, 'Rakhi Das', '8426157026', '243', '2022-02-09', 1),
(3, 'Rajib Khara', '7697515201', '256.5', '2022-03-02', 1),
(4, 'Shivam Sharma', '8777159652', '268.2', '2022-03-16', 1),
(5, 'Sreelekha Roy', '9842346214', '264.6', '2022-03-30', 1),
(6, 'Akash Das', '9647515328', '129.6', '2022-03-31', 1),
(7, 'Trishna Dutta', '8545600568', '174.6', '2022-04-02', 1),
(8, 'Sanjay Sen', '9654002358', '207', '2022-04-05', 1),
(9, 'Raju Biswas', '9842658423', '180', '2022-04-13', 1),
(10, 'Ravi Kundu', '9850354400', '166.5', '2022-04-26', 1),
(11, 'Ramit Karar', '9600348503', '180', '2022-05-11', 1),
(12, 'Rohini Roy', '9800348219', '196.2', '2022-05-18', 1),
(13, 'Riya Roy', '7840355196', '235.8', '2022-05-26', 1),
(14, 'Shivangi Sharma', '9647003506', '243', '2022-05-31', 1),
(15, 'Gauri Khan', '9400357156', '184.5', '2022-06-02', 1),
(16, 'Poulomi Polley', '9684269015', '232.2', '2022-06-02', 1),
(17, 'Sani Saha', '9600317209', '97.2', '2022-06-08', 1),
(18, 'Ritu Pramanik', '8100350998', '108', '1900-01-08', 1),
(19, 'Dipankar Sahoo', '7400397715', '72', '2022-07-01', 1),
(20, 'Tanvi Sharma', '7444567458', '198', '2022-07-01', 1),
(21, 'Sima Das', '9560015775', '147.6', '2022-07-01', 1),
(22, 'Sreeja Sen', '9850331468', '18', '2022-01-06', 1),
(23, 'Deep Kundu', '9641003477', '50.4', '2022-01-06', 1),
(24, 'Soumo Kumar', '9744200328', '68.4', '1900-01-06', 1),
(25, 'Hritik Golui', '9410348958', '77.4', '2022-07-10', 1),
(26, 'Shreya Das', '9745861789', '67.5', '2022-07-10', 1),
(27, 'Swarnali Karar', '9641332597', '436.5', '2022-07-10', 1),
(28, 'Sreelekha Saha', '9541168549', '216', '2022-07-10', 1),
(29, 'Rajib Mondol', '7500395541', '135', '2022-07-10', 1),
(30, 'Sreeparna Das', '9422315406', '90', '2022-07-10', 1),
(31, 'Ahona Bose', '9544125789', '195.5', '2022-01-01', 2),
(32, 'Akash Saha', '9745852268', '158.1', '2022-01-01', 2),
(33, 'Raihan Laskar', '9800310578', '178.5', '2022-01-01', 2),
(34, 'Debarati Sinha', '9420315972', '153', '2022-01-02', 2),
(35, 'Shiv prakash', '9745880035', '161.5', '2022-01-02', 2),
(36, 'Maansingh aswal', '7500397458', '463.25', '2022-01-11', 2),
(37, 'Arvind kumar yadav', '8777124988', '357', '2022-01-11', 2),
(38, 'Raj kumar', '9784681248', '346.8', '2022-01-12', 2),
(39, 'Aaheli Kar', '9647851034', '85', '2022-02-02', 2),
(40, 'Ratul Banerjee', '9421358975', '187', '2022-02-02', 2),
(41, 'Salini Chatterjee', '9412564712', '75.65', '2022-03-01', 2),
(42, 'Rakhi Das', '9874203147', '42.5', '2022-03-01', 2),
(43, 'Kakan Bose ', '9800311102', '88.4', '2022-03-10', 2),
(44, 'Sanjay Banerjee', '9851246235', '105.4', '2022-03-10', 2),
(45, 'Gourav Mondol', '8452457596', '88.4', '2022-03-10', 2),
(46, 'Abhi Roy', '8400319726', '95.2', '2022-03-17', 2),
(47, 'Adisha Roy', '9874031788', '68', '2022-07-10', 2),
(48, 'Aafia Jalal', '9556311478', '42.5', '2022-03-17', 2),
(49, 'Aasya Chatterjee ', '8762998410', '161.5', '2022-03-17', 2),
(50, 'Abhisek Golui', '7540397487', '195.5', '2022-03-18', 2),
(51, 'Aditi Dutta', '7844678103', '110.5', '2022-03-18', 2),
(52, 'Akash rakhshit', '9647880377', '289', '2022-03-22', 2),
(53, 'Amisha Das', '9700345097', '224.4', '2022-03-22', 2),
(54, 'Aleya Sultana', '9641278548', '204', '2022-04-03', 2),
(55, 'Romit Chatterjee', '9740034589', '229.5', '2022-04-04', 2),
(56, 'Sushmita Dhar', '9644787031', '229.5', '2022-04-03', 2),
(57, 'Anirban Rit', '7403985422', '187', '2022-05-05', 2),
(58, 'Ankit Tiwari', '9800347751', '209.1', '2022-05-05', 2),
(59, 'Ankana Basu', '8433167509', '212.5', '2022-06-15', 2),
(60, 'Anudip Roy', '9644307842', '221', '2022-06-15', 2),
(61, 'Anwesha Chatterjee', '8429762248', '280.5', '2022-06-20', 2),
(62, 'Aritra Brahma', '9641785965', '170', '2022-07-10', 2),
(63, 'Arushi Dey', '7666310874', '266.9', '2022-07-10', 2),
(64, 'Atrima das', '9884526758', '213.2', '2022-04-05', 3),
(65, 'Ayan Pal', '9874585185', '205', '2022-04-05', 3),
(66, 'Ayana Pal', '7466851297', '96.76', '2022-05-10', 3),
(67, 'Ayantika Laha', '9577842975', '155.8', '2022-02-10', 3),
(68, 'Azaan Ali', '9513742985', '167.28', '2022-03-10', 3),
(69, 'Bidisha Das', '7688003479', '79.54', '2022-03-10', 3),
(70, 'Brishti Naskar', '9400317589', '229.6', '2022-07-10', 3),
(71, 'Chandrima Das', '7557748920', '106.6', '2022-07-10', 3),
(72, 'Debasis Nayak', '9555412898', '213.2', '2022-04-10', 3),
(73, 'Debjani Goswami', '6478125892', '188.6', '2022-04-10', 3),
(74, 'Debrup Naskar', '9530037159', '233.7', '2022-05-10', 3),
(75, 'Dimpy Shree', '9600371895', '125.46', '2022-05-10', 3),
(76, 'Diptaman Pathak', '8544600354', '82', '2022-07-02', 3),
(77, 'Ena Kundu', '9641007851', '229.6', '2022-07-02', 3),
(78, 'Rakhi Das', '7833007942', '106.6', '2022-07-10', 3),
(79, 'Gopal Majumdar', '9711032784', '225.5', '2022-06-21', 3),
(80, 'Hasmin Raza', '9641784868', '108.24', '2022-06-21', 3),
(81, 'Indraneel Dutta', '9641257956', '205', '2022-07-10', 3),
(82, 'Ishna Kanrar', '9440374884', '131.2', '2022-07-10', 3),
(83, 'Ishika Mondol', '6875515755', '78.72', '2022-07-10', 3),
(84, 'Farida Rehman', '7463287159', '264', '2022-05-11', 4),
(85, 'Sayantika Ghosh', '9400347818', '146.08', '2022-05-11', 4),
(86, 'Sadhana Biswas', '9641223597', '272.8', '2022-06-10', 4),
(87, 'Sohini Malik', '9722135715', '178.64', '2022-06-06', 4),
(88, 'Subhajit Das', '9647032749', '154', '2022-06-10', 4),
(89, 'Jainab Reyaz', '7666003347', '279.84', '2022-04-10', 4),
(90, 'Jayita Mukherjee', '8611124785', '193.6', '2022-04-10', 4),
(91, 'Sayantika Mukherjee', '9472230158', '88', '2022-07-10', 4),
(92, 'Sufia Jahan', '9777854892', '204.16', '2022-04-15', 4),
(93, 'Aishnai Dutta', '9400317034', '158.4', '2022-04-10', 4),
(94, 'Satika Kar', '7400948798', '202.4', '2022-07-10', 4),
(95, 'Soumili Das', '9744666685', '246.4', '2022-05-13', 4),
(96, 'Tanmay Saha', '9712586248', '127.6', '2022-05-12', 4),
(97, 'Sujay Samanta', '7330015957', '357.28', '2022-02-20', 4),
(98, 'Tanya Ahmed', '9533017548', '141.68', '2022-02-20', 4),
(99, 'Tanmoy bera', '7999107824', '70.4', '2022-04-10', 4),
(100, 'Gourab Saha', '6748599157', '105.6', '2022-07-10', 4),
(101, 'Krishna Das', '9510035715', '149.6', '2022-07-10', 4);

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy`
--

CREATE TABLE `pharmacy` (
  `Pharmacy_Id` int(10) NOT NULL,
  `Location` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Discount` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pharmacy`
--

INSERT INTO `pharmacy` (`Pharmacy_Id`, `Location`, `Phone_no`, `Discount`) VALUES
(1, 'Saltlake', '8236548215', 10),
(2, 'Santragachi', '8756981234', 15),
(3, 'Rajarhat', '9785456245', 18),
(4, 'Konnagar', '9847483647', 12);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `Purchase_Id` int(15) NOT NULL,
  `S_Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `Med_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Generic_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Batch_Id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Manufacture_date` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quantity` int(30) NOT NULL,
  `Expiry_date` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MRP` int(30) NOT NULL,
  `Pharmacy_Loc` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `T_Amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`Purchase_Id`, `S_Name`, `Date`, `Med_name`, `Generic_name`, `Batch_Id`, `Manufacture_date`, `Quantity`, `Expiry_date`, `MRP`, `Pharmacy_Loc`, `T_Amount`) VALUES
(1, 'Abbott India Ltd', '2022-07-10', 'biotin2', 'biotin2', 'd1002', 'Jun-22', 41, 'May-25', 10, 'Saltlake', 550),
(2, 'Abbott India Ltd', '2022-07-10', 'calpol', 'calpol', 'd20002', 'Jun-21', 145, 'May-25', 12, 'Saltlake', 1800),
(3, 'Abbott India Ltd', '2022-07-10', 'paracetamol', 'paracetamo', 'd1235', 'Jun-22', 40, 'May-25', 13, 'Saltlake', 780),
(4, 'Abbott India Ltd', '2022-07-10', 'zincovid', 'zincovid', 'd12356', 'May-22', 86, 'May-25', 15, 'Saltlake', 1350),
(5, 'Abbott India Ltd', '2022-07-10', 'vitaminc', 'vitaminc', 'Vt0120', 'May-22', 105, 'May-26', 16, 'Saltlake', 2000),
(6, 'Abbott India Ltd', '2022-07-10', 'rantac', 'rantac', 'VR0012', 'Sep-21', 110, 'May-26', 14, 'Saltlake', 2100),
(7, 'Abbott India Ltd', '2022-07-10', 'azithral', 'azithral', 'Aral005', 'Aug-21', 75, 'Sep-29', 8, 'Saltlake', 800),
(8, 'cipla Limited', '2022-07-10', 'omez', 'omez', 'mez012', 'Apr-21', 125, 'May-23', 15, 'Saltlake', 1875),
(9, 'cipla Limited', '2022-07-10', 'multivitamin', 'multivitamin', 'mu20ul', 'Sep-21', 90, 'May-25', 14, 'Saltlake', 1260),
(10, 'Sun Pharma', '2022-07-10', 'Acetaminophen', 'Acetaminophen', 'ACE0021', 'Jun-22', 138, 'May-25', 10, 'Saltlake', 1500),
(11, 'Sun Pharma', '2022-07-10', 'Amitriptyline', 'Amitriptyline', 'AMIT0021', 'Jun-21', 93, 'May-25', 12, 'Saltlake', 1200),
(12, 'Sun Pharma', '2022-07-10', 'Amlodipine', 'Amlodipine', 'AMLO0021', 'Jun-22', 40, 'May-25', 13, 'Saltlake', 650),
(13, 'Sun Pharma', '2022-07-10', 'Amoxicillin', 'Amoxicillin', 'AMO0021', 'May-22', 74, 'May-25', 15, 'Saltlake', 1200),
(14, 'Sun Pharma', '2022-07-10', 'Ativan', 'Ativan', 'ATIVA0021', 'May-22', 32, 'May-26', 16, 'Saltlake', 800),
(15, 'Sun Pharma', '2022-07-10', 'Atorvastatin', 'Atorvastatin', 'ATORVA02', 'Sep-21', 145, 'May-26', 14, 'Saltlake', 2100),
(16, 'Sun Pharma', '2022-07-10', 'Benzonatate', 'Benzonatate', 'BENZO00C', 'Aug-21', 114, 'Sep-29', 8, 'Saltlake', 960),
(17, 'Sun Pharma', '2022-07-10', 'Brilinta', 'Brilinta', 'BRILI00A', 'Apr-21', 140, 'May-23', 15, 'Saltlake', 2100),
(18, 'Sun Pharma', '2022-07-10', 'Bunavail', 'Bunavail', 'BUNA00L', 'Sep-21', 150, 'May-25', 14, 'Saltlake', 2100),
(19, 'Emcure Pharmaceuticals', '2022-07-10', 'Buprenorphine', 'Buprenorphine', 'BUPRE00R', 'Jun-22', 135, 'May-25', 10, 'Saltlake', 1450),
(20, 'Emcure Pharmaceuticals', '2022-07-10', 'Cephalexin', 'Cephalexin', 'CEPH00I', 'Jun-21', 200, 'May-25', 12, 'Saltlake', 2484),
(21, 'Emcure Pharmaceuticals', '2022-07-10', 'Ciprofloxacin', 'Ciprofloxacin', 'CIPRO00X', 'Jun-22', 130, 'May-25', 13, 'Saltlake', 1950),
(22, 'Emcure Pharmaceuticals', '2022-07-10', 'Citalopram', 'Citalopram', 'CITAL002', 'May-22', 83, 'May-25', 15, 'Saltlake', 1500),
(23, 'Emcure Pharmaceuticals', '2022-07-10', 'Clindamycin', 'Clindamycin', 'CLIN00Y', 'May-22', 40, 'May-26', 16, 'Saltlake', 800),
(24, 'Emcure Pharmaceuticals', '2022-07-10', 'Clonazepam', 'Clonazepam', 'CLON00P', 'Sep-21', 70, 'May-26', 14, 'Saltlake', 1120),
(25, 'Emcure Pharmaceuticals', '2022-07-10', 'Cyclobenzaprine', 'Cyclobenzaprine', 'CYCL00Z', 'Aug-21', 48, 'Sep-29', 8, 'Saltlake', 400),
(26, 'Emcure Pharmaceuticals', '2022-07-10', 'Cymbalta', 'Cymbalta', 'CYMB00A', 'Apr-21', 148, 'May-23', 15, 'Saltlake', 2250),
(27, 'Emcure Pharmaceuticals', '2022-07-10', 'Doxycycline', 'Doxycycline', 'DOX022Y', 'Sep-21', 116, 'May-25', 14, 'Saltlake', 1680),
(28, 'Emcure Pharmaceuticals', '2022-07-10', 'Dupixent', 'Dupixent', 'DUP08IX', 'Jun-22', 140, 'May-25', 10, 'Saltlake', 1400),
(29, 'Emcure Pharmaceuticals', '2022-07-10', 'Entresto', 'Entresto', 'ENT00O', 'Jun-21', 140, 'May-25', 12, 'Saltlake', 1800),
(30, 'Dr. Reddy Laboratories', '2022-07-10', 'Entyvio', 'Entyvio', 'ENTY0I', 'Jun-22', 140, 'May-25', 13, 'Saltlake', 1885),
(31, 'Dr. Reddy Laboratories', '2022-07-10', 'Farxiga', 'Farxiga', 'FARX00A', 'May-22', 207, 'May-25', 15, 'Saltlake', 3105),
(32, 'Dr. Reddy Laboratories', '2022-07-10', 'Gabapentin', 'Gabapentin', 'GABA00T', 'May-22', 150, 'May-26', 16, 'Saltlake', 2400),
(33, 'Dr. Reddy Laboratories', '2022-07-10', 'Gilenya', 'Gilenya', 'GILE00A', 'Sep-21', 94, 'May-26', 14, 'Saltlake', 1400),
(34, 'Dr. Reddy Laboratories', '2022-07-10', 'Humira', 'Humira', 'HUM00A', 'Aug-21', 30, 'Sep-29', 8, 'Saltlake', 400),
(35, 'Dr. Reddy Laboratories', '2022-07-10', 'Ibuprofen', 'Ibuprofen', 'IBU08P', 'Apr-21', 75, 'May-23', 15, 'Saltlake', 1200),
(36, 'Dr. Reddy Laboratories', '2022-07-10', 'Imbruvica', 'Imbruvica', 'IMB00A', 'Sep-21', 50, 'May-25', 14, 'Saltlake', 700),
(37, 'Dr. Reddy Laboratories', '2022-07-10', 'Invokana', 'Invokana', 'INV02A', 'Jun-22', 144, 'May-25', 10, 'Saltlake', 1500),
(38, 'Dr. Reddy Laboratories', '2022-07-10', 'Januvia', 'Januvia', 'JAN09A', 'Jun-21', 110, 'May-25', 12, 'Saltlake', 1440),
(39, 'Glenmark Pharma', '2022-07-10', 'Jardiance', 'Jardiance', 'JARD09E', 'Jun-22', 136, 'May-25', 13, 'Saltlake', 1820),
(40, 'Glenmark Pharma', '2022-07-10', 'Kevzara', 'Kevzara', 'KEV08A', 'May-22', 150, 'May-25', 15, 'Saltlake', 2250),
(41, 'Glenmark Pharma', '2022-07-10', 'Lexapro', 'Lexapro', 'LEXA00R', 'May-22', 135, 'May-26', 16, 'Saltlake', 2320),
(42, 'Glenmark Pharma', '2022-07-10', 'Lisinopril', 'Lisinopril', 'LISI00L', 'Sep-21', 200, 'May-26', 14, 'Saltlake', 2898),
(43, 'Glenmark Pharma', '2022-07-10', 'Lofexidine', 'Lofexidine', 'LOFE009D', 'Aug-21', 150, 'Sep-29', 8, 'Saltlake', 1200),
(44, 'Glenmark Pharma', '2022-07-10', 'Lyrica', 'Lyrica', 'LYRI09A', 'Apr-21', 98, 'May-23', 15, 'Saltlake', 1500),
(45, 'Glenmark Pharma', '2022-07-10', 'Melatonin', 'Melatonin', 'MELA00R', 'Sep-21', 50, 'May-25', 14, 'Saltlake', 700),
(46, 'Glenmark Pharma', '2022-07-10', 'Meloxicam', 'Meloxicam', 'MELO00R', 'Jun-22', 80, 'May-25', 4, 'Saltlake', 320),
(47, 'Glenmark Pharma', '2022-07-10', 'Metformin', 'Metformin', 'MET00I', 'Jun-21', 46, 'May-25', 10, 'Saltlake', 500),
(48, 'Glenmark Pharma', '2022-07-10', 'Naloxone', 'Naloxone', 'NALO00N', 'Jun-22', 145, 'May-25', 12, 'Saltlake', 1800),
(49, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Naltrexone', 'Naltrexone', 'NALT00P', 'May-22', 106, 'May-25', 13, 'Saltlake', 1560),
(50, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Omeprazole', 'Omeprazole', 'OME08Z', 'May-22', 130, 'May-26', 15, 'Saltlake', 2100),
(51, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Onpattro', 'Onpattro', 'ONPA89R', 'Sep-21', 140, 'May-26', 16, 'Saltlake', 2400),
(52, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Otezla', 'Otezla', 'OTE8LA', 'Aug-21', 145, 'Sep-29', 14, 'Saltlake', 2030),
(53, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Ozempic', 'Ozempic', 'OZE09C', 'Apr-21', 40, 'May-23', 8, 'Saltlake', 360),
(54, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Pantoprazole', 'Pantoprazole', 'PAN87P', 'Sep-21', 74, 'May-25', 15, 'Saltlake', 1200),
(55, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Prednisone', 'Prednisone', 'PRE078S', 'Jun-22', 69, 'May-25', 14, 'Saltlake', 1106),
(56, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Probuphine', 'Probuphine', 'PROB09', 'Jun-21', 95, 'May-25', 20, 'Saltlake', 1900),
(57, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Rybelsus', 'Rybelsus', 'RYBE00S', 'Jun-22', 98, 'May-25', 15, 'Saltlake', 1470),
(58, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Tramadol', 'Tramadol', 'TRA89L', 'May-22', 95, 'May-25', 12, 'Saltlake', 1164),
(59, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Trazodone', 'Trazodone', 'TRAZ09E', 'May-22', 80, 'May-26', 16, 'Saltlake', 1440),
(60, 'Abbott India Ltd', '2022-07-10', 'biotin2', 'biotin2', 'd1002', 'Jun-22', 35, 'May-25', 10, 'Santragachi', 550),
(61, 'Abbott India Ltd', '2022-07-10', 'calpol', 'calpol', 'd20002', 'Jun-21', 150, 'May-25', 12, 'Santragachi', 1800),
(62, 'Abbott India Ltd', '2022-07-10', 'paracetamol', 'paracetamo', 'd1235', 'Jun-22', 40, 'May-25', 13, 'Santragachi', 780),
(63, 'Abbott India Ltd', '2022-07-10', 'zincovid', 'zincovid', 'd12356', 'May-22', 90, 'May-25', 15, 'Santragachi', 1350),
(64, 'Abbott India Ltd', '2022-07-10', 'vitaminc', 'vitaminc', 'Vt0120', 'May-22', 115, 'May-26', 16, 'Santragachi', 2000),
(65, 'Abbott India Ltd', '2022-07-10', 'rantac', 'rantac', 'VR0012', 'Sep-21', 120, 'May-26', 14, 'Santragachi', 2100),
(66, 'Abbott India Ltd', '2022-07-10', 'azithral', 'azithral', 'Aral005', 'Aug-21', 50, 'Sep-29', 8, 'Santragachi', 800),
(67, 'cipla Limited', '2022-07-10', 'omez', 'omez', 'mez012', 'Apr-21', 125, 'May-23', 15, 'Santragachi', 1875),
(68, 'cipla Limited', '2022-07-10', 'multivitamin', 'multivitamin', 'mu20ul', 'Sep-21', 90, 'May-25', 14, 'Santragachi', 1260),
(69, 'Sun Pharma', '2022-07-10', 'Acetaminophen', 'Acetaminophen', 'ACE0021', 'Jun-22', 130, 'May-25', 10, 'Santragachi', 1500),
(70, 'Sun Pharma', '2022-07-10', 'Amitriptyline', 'Amitriptyline', 'AMIT0021', 'Jun-21', 94, 'May-25', 12, 'Santragachi', 1200),
(71, 'Sun Pharma', '2022-07-10', 'Amlodipine', 'Amlodipine', 'AMLO0021', 'Jun-22', 43, 'May-25', 13, 'Santragachi', 650),
(72, 'Sun Pharma', '2022-07-10', 'Amoxicillin', 'Amoxicillin', 'AMO0021', 'May-22', 78, 'May-25', 15, 'Santragachi', 1200),
(73, 'Sun Pharma', '2022-07-10', 'Ativan', 'Ativan', 'ATIVA0021', 'May-22', 36, 'May-26', 16, 'Santragachi', 800),
(74, 'Sun Pharma', '2022-07-10', 'Atorvastatin', 'Atorvastatin', 'ATORVA02', 'Sep-21', 147, 'May-26', 14, 'Santragachi', 2100),
(75, 'Sun Pharma', '2022-07-10', 'Benzonatate', 'Benzonatate', 'BENZO00C', 'Aug-21', 116, 'Sep-29', 8, 'Santragachi', 960),
(76, 'Sun Pharma', '2022-07-10', 'Brilinta', 'Brilinta', 'BRILI00A', 'Apr-21', 130, 'May-23', 15, 'Santragachi', 2100),
(77, 'Sun Pharma', '2022-07-10', 'Bunavail', 'Bunavail', 'BUNA00L', 'Sep-21', 150, 'May-25', 14, 'Santragachi', 2100),
(78, 'Emcure Pharmaceuticals', '2022-07-10', 'Buprenorphine', 'Buprenorphine', 'BUPRE00R', 'Jun-22', 145, 'May-25', 10, 'Santragachi', 1450),
(79, 'Emcure Pharmaceuticals', '2022-07-10', 'Cephalexin', 'Cephalexin', 'CEPH00I', 'Jun-21', 200, 'May-25', 12, 'Santragachi', 2484),
(80, 'Emcure Pharmaceuticals', '2022-07-10', 'Ciprofloxacin', 'Ciprofloxacin', 'CIPRO00X', 'Jun-22', 150, 'May-25', 13, 'Santragachi', 1950),
(81, 'Emcure Pharmaceuticals', '2022-07-10', 'Citalopram', 'Citalopram', 'CITAL002', 'May-22', 100, 'May-25', 15, 'Santragachi', 1500),
(82, 'Emcure Pharmaceuticals', '2022-07-10', 'Clindamycin', 'Clindamycin', 'CLIN00Y', 'May-22', 20, 'May-26', 16, 'Santragachi', 800),
(83, 'Emcure Pharmaceuticals', '2022-07-10', 'Clonazepam', 'Clonazepam', 'CLON00P', 'Sep-21', 60, 'May-26', 14, 'Santragachi', 1120),
(84, 'Emcure Pharmaceuticals', '2022-07-10', 'Cyclobenzaprine', 'Cyclobenzaprine', 'CYCL00Z', 'Aug-21', 30, 'Sep-29', 8, 'Santragachi', 400),
(85, 'Emcure Pharmaceuticals', '2022-07-10', 'Cymbalta', 'Cymbalta', 'CYMB00A', 'Apr-21', 140, 'May-23', 15, 'Santragachi', 2250),
(86, 'Emcure Pharmaceuticals', '2022-07-10', 'Doxycycline', 'Doxycycline', 'DOX022Y', 'Sep-21', 116, 'May-25', 14, 'Santragachi', 1680),
(87, 'Emcure Pharmaceuticals', '2022-07-10', 'Dupixent', 'Dupixent', 'DUP08IX', 'Jun-22', 140, 'May-25', 10, 'Santragachi', 1400),
(88, 'Emcure Pharmaceuticals', '2022-07-10', 'Entresto', 'Entresto', 'ENT00O', 'Jun-21', 140, 'May-25', 12, 'Santragachi', 1800),
(89, 'Dr. Reddy Laboratories', '2022-07-10', 'Entyvio', 'Entyvio', 'ENTY0I', 'Jun-22', 140, 'May-25', 13, 'Santragachi', 1885),
(90, 'Dr. Reddy Laboratories', '2022-07-10', 'Farxiga', 'Farxiga', 'FARX00A', 'May-22', 193, 'May-25', 15, 'Santragachi', 3105),
(91, 'Dr. Reddy Laboratories', '2022-07-10', 'Gabapentin', 'Gabapentin', 'GABA00T', 'May-22', 130, 'May-26', 16, 'Santragachi', 2400),
(92, 'Dr. Reddy Laboratories', '2022-07-10', 'Gilenya', 'Gilenya', 'GILE00A', 'Sep-21', 70, 'May-26', 14, 'Santragachi', 1400),
(93, 'Dr. Reddy Laboratories', '2022-07-10', 'Humira', 'Humira', 'HUM00A', 'Aug-21', 40, 'Sep-29', 8, 'Santragachi', 400),
(94, 'Dr. Reddy Laboratories', '2022-07-10', 'Ibuprofen', 'Ibuprofen', 'IBU08P', 'Apr-21', 80, 'May-23', 15, 'Santragachi', 1200),
(95, 'Dr. Reddy Laboratories', '2022-07-10', 'Imbruvica', 'Imbruvica', 'IMB00A', 'Sep-21', 50, 'May-25', 14, 'Santragachi', 700),
(96, 'Dr. Reddy Laboratories', '2022-07-10', 'Invokana', 'Invokana', 'INV02A', 'Jun-22', 150, 'May-25', 10, 'Santragachi', 1500),
(97, 'Dr. Reddy Laboratories', '2022-07-10', 'Januvia', 'Januvia', 'JAN09A', 'Jun-21', 120, 'May-25', 12, 'Santragachi', 1440),
(98, 'Glenmark Pharma', '2022-07-10', 'Jardiance', 'Jardiance', 'JARD09E', 'Jun-22', 140, 'May-25', 13, 'Santragachi', 1820),
(99, 'Glenmark Pharma', '2022-07-10', 'Kevzara', 'Kevzara', 'KEV08A', 'May-22', 150, 'May-25', 15, 'Santragachi', 2250),
(100, 'Glenmark Pharma', '2022-07-10', 'Lexapro', 'Lexapro', 'LEXA00R', 'May-22', 145, 'May-26', 16, 'Santragachi', 2320),
(101, 'Glenmark Pharma', '2022-07-10', 'Lisinopril', 'Lisinopril', 'LISI00L', 'Sep-21', 193, 'May-26', 14, 'Santragachi', 2898),
(102, 'Glenmark Pharma', '2022-07-10', 'Lofexidine', 'Lofexidine', 'LOFE009D', 'Aug-21', 106, 'Sep-29', 8, 'Santragachi', 1200),
(103, 'Glenmark Pharma', '2022-07-10', 'Lyrica', 'Lyrica', 'LYRI09A', 'Apr-21', 88, 'May-23', 15, 'Santragachi', 1500),
(104, 'Glenmark Pharma', '2022-07-10', 'Melatonin', 'Melatonin', 'MELA00R', 'Sep-21', 40, 'May-25', 14, 'Santragachi', 700),
(105, 'Glenmark Pharma', '2022-07-10', 'Meloxicam', 'Meloxicam', 'MELO00R', 'Jun-22', 70, 'May-25', 4, 'Santragachi', 320),
(106, 'Glenmark Pharma', '2022-07-10', 'Metformin', 'Metformin', 'MET00I', 'Jun-21', 50, 'May-25', 10, 'Santragachi', 500),
(107, 'Glenmark Pharma', '2022-07-10', 'Naloxone', 'Naloxone', 'NALO00N', 'Jun-22', 150, 'May-25', 12, 'Santragachi', 1800),
(108, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Naltrexone', 'Naltrexone', 'NALT00P', 'May-22', 120, 'May-25', 13, 'Santragachi', 1560),
(109, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Omeprazole', 'Omeprazole', 'OME08Z', 'May-22', 114, 'May-26', 15, 'Santragachi', 2100),
(110, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Onpattro', 'Onpattro', 'ONPA89R', 'Sep-21', 140, 'May-26', 16, 'Santragachi', 2400),
(111, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Otezla', 'Otezla', 'OTE8LA', 'Aug-21', 135, 'Sep-29', 14, 'Santragachi', 2030),
(112, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Ozempic', 'Ozempic', 'OZE09C', 'Apr-21', 35, 'May-23', 8, 'Santragachi', 360),
(113, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Pantoprazole', 'Pantoprazole', 'PAN87P', 'Sep-21', 80, 'May-25', 15, 'Santragachi', 1200),
(114, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Prednisone', 'Prednisone', 'PRE078S', 'Jun-22', 69, 'May-25', 14, 'Santragachi', 1106),
(115, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Probuphine', 'Probuphine', 'PROB09', 'Jun-21', 95, 'May-25', 20, 'Santragachi', 1900),
(116, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Rybelsus', 'Rybelsus', 'RYBE00S', 'Jun-22', 98, 'May-25', 15, 'Santragachi', 1470),
(117, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Tramadol', 'Tramadol', 'TRA89L', 'May-22', 73, 'May-25', 12, 'Santragachi', 1164),
(118, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Trazodone', 'Trazodone', 'TRAZ09E', 'May-22', 75, 'May-26', 16, 'Santragachi', 1440),
(119, 'Abbott India Ltd', '2022-07-10', 'biotin2', 'biotin2', 'd1002', 'Jun-22', 25, 'May-25', 10, 'Rajarhat', 550),
(120, 'Abbott India Ltd', '2022-07-10', 'calpol', 'calpol', 'd20002', 'Jun-21', 150, 'May-25', 12, 'Rajarhat', 1800),
(121, 'Abbott India Ltd', '2022-07-10', 'paracetamol', 'paracetamo', 'd1235', 'Jun-22', 55, 'May-25', 13, 'Rajarhat', 780),
(122, 'Abbott India Ltd', '2022-07-10', 'zincovid', 'zincovid', 'd12356', 'May-22', 90, 'May-25', 15, 'Rajarhat', 1350),
(123, 'Abbott India Ltd', '2022-07-10', 'vitaminc', 'vitaminc', 'Vt0120', 'May-22', 115, 'May-26', 16, 'Rajarhat', 2000),
(124, 'Abbott India Ltd', '2022-07-10', 'rantac', 'rantac', 'VR0012', 'Sep-21', 130, 'May-26', 14, 'Rajarhat', 2100),
(125, 'Abbott India Ltd', '2022-07-10', 'azithral', 'azithral', 'Aral005', 'Aug-21', 100, 'Sep-29', 8, 'Rajarhat', 800),
(126, 'cipla Limited', '2022-07-10', 'omez', 'omez', 'mez012', 'Apr-21', 125, 'May-23', 15, 'Rajarhat', 1875),
(127, 'cipla Limited', '2022-07-10', 'multivitamin', 'multivitamin', 'mu20ul', 'Sep-21', 90, 'May-25', 14, 'Rajarhat', 1260),
(128, 'Sun Pharma', '2022-07-10', 'Acetaminophen', 'Acetaminophen', 'ACE0021', 'Jun-22', 140, 'May-25', 10, 'Rajarhat', 1500),
(129, 'Sun Pharma', '2022-07-10', 'Amitriptyline', 'Amitriptyline', 'AMIT0021', 'Jun-21', 90, 'May-25', 12, 'Rajarhat', 1200),
(130, 'Sun Pharma', '2022-07-10', 'Amlodipine', 'Amlodipine', 'AMLO0021', 'Jun-22', 40, 'May-25', 13, 'Rajarhat', 650),
(131, 'Sun Pharma', '2022-07-10', 'Amoxicillin', 'Amoxicillin', 'AMO0021', 'May-22', 75, 'May-25', 15, 'Rajarhat', 1200),
(132, 'Sun Pharma', '2022-07-10', 'Ativan', 'Ativan', 'ATIVA0021', 'May-22', 46, 'May-26', 16, 'Rajarhat', 800),
(133, 'Sun Pharma', '2022-07-10', 'Atorvastatin', 'Atorvastatin', 'ATORVA02', 'Sep-21', 150, 'May-26', 14, 'Rajarhat', 2100),
(134, 'Sun Pharma', '2022-07-10', 'Benzonatate', 'Benzonatate', 'BENZO00C', 'Aug-21', 108, 'Sep-29', 8, 'Rajarhat', 960),
(135, 'Sun Pharma', '2022-07-10', 'Brilinta', 'Brilinta', 'BRILI00A', 'Apr-21', 120, 'May-23', 15, 'Rajarhat', 2100),
(136, 'Sun Pharma', '2022-07-10', 'Bunavail', 'Bunavail', 'BUNA00L', 'Sep-21', 145, 'May-25', 14, 'Rajarhat', 2100),
(137, 'Emcure Pharmaceuticals', '2022-07-10', 'Buprenorphine', 'Buprenorphine', 'BUPRE00R', 'Jun-22', 145, 'May-25', 10, 'Rajarhat', 1450),
(138, 'Emcure Pharmaceuticals', '2022-07-10', 'Cephalexin', 'Cephalexin', 'CEPH00I', 'Jun-21', 207, 'May-25', 12, 'Rajarhat', 2484),
(139, 'Emcure Pharmaceuticals', '2022-07-10', 'Ciprofloxacin', 'Ciprofloxacin', 'CIPRO00X', 'Jun-22', 130, 'May-25', 13, 'Rajarhat', 1950),
(140, 'Emcure Pharmaceuticals', '2022-07-10', 'Citalopram', 'Citalopram', 'CITAL002', 'May-22', 100, 'May-25', 15, 'Rajarhat', 1500),
(141, 'Emcure Pharmaceuticals', '2022-07-10', 'Clindamycin', 'Clindamycin', 'CLIN00Y', 'May-22', 40, 'May-26', 16, 'Rajarhat', 800),
(142, 'Emcure Pharmaceuticals', '2022-07-10', 'Clonazepam', 'Clonazepam', 'CLON00P', 'Sep-21', 75, 'May-26', 14, 'Rajarhat', 1120),
(143, 'Emcure Pharmaceuticals', '2022-07-10', 'Cyclobenzaprine', 'Cyclobenzaprine', 'CYCL00Z', 'Aug-21', 50, 'Sep-29', 8, 'Rajarhat', 400),
(144, 'Emcure Pharmaceuticals', '2022-07-10', 'Cymbalta', 'Cymbalta', 'CYMB00A', 'Apr-21', 145, 'May-23', 15, 'Rajarhat', 2250),
(145, 'Emcure Pharmaceuticals', '2022-07-10', 'Doxycycline', 'Doxycycline', 'DOX022Y', 'Sep-21', 120, 'May-25', 14, 'Rajarhat', 1680),
(146, 'Emcure Pharmaceuticals', '2022-07-10', 'Dupixent', 'Dupixent', 'DUP08IX', 'Jun-22', 140, 'May-25', 10, 'Rajarhat', 1400),
(147, 'Emcure Pharmaceuticals', '2022-07-10', 'Entresto', 'Entresto', 'ENT00O', 'Jun-21', 150, 'May-25', 12, 'Rajarhat', 1800),
(148, 'Dr. Reddy Laboratories', '2022-07-10', 'Entyvio', 'Entyvio', 'ENTY0I', 'Jun-22', 145, 'May-25', 13, 'Rajarhat', 1885),
(149, 'Dr. Reddy Laboratories', '2022-07-10', 'Farxiga', 'Farxiga', 'FARX00A', 'May-22', 200, 'May-25', 15, 'Rajarhat', 3105),
(150, 'Dr. Reddy Laboratories', '2022-07-10', 'Gabapentin', 'Gabapentin', 'GABA00T', 'May-22', 150, 'May-26', 16, 'Rajarhat', 2400),
(151, 'Dr. Reddy Laboratories', '2022-07-10', 'Gilenya', 'Gilenya', 'GILE00A', 'Sep-21', 95, 'May-26', 14, 'Rajarhat', 1400),
(152, 'Dr. Reddy Laboratories', '2022-07-10', 'Humira', 'Humira', 'HUM00A', 'Aug-21', 38, 'Sep-29', 8, 'Rajarhat', 400),
(153, 'Dr. Reddy Laboratories', '2022-07-10', 'Ibuprofen', 'Ibuprofen', 'IBU08P', 'Apr-21', 80, 'May-23', 15, 'Rajarhat', 1200),
(154, 'Dr. Reddy Laboratories', '2022-07-10', 'Imbruvica', 'Imbruvica', 'IMB00A', 'Sep-21', 50, 'May-25', 14, 'Rajarhat', 700),
(155, 'Dr. Reddy Laboratories', '2022-07-10', 'Invokana', 'Invokana', 'INV02A', 'Jun-22', 150, 'May-25', 10, 'Rajarhat', 1500),
(156, 'Dr. Reddy Laboratories', '2022-07-10', 'Januvia', 'Januvia', 'JAN09A', 'Jun-21', 120, 'May-25', 12, 'Rajarhat', 1440),
(157, 'Glenmark Pharma', '2022-07-10', 'Jardiance', 'Jardiance', 'JARD09E', 'Jun-22', 140, 'May-25', 13, 'Rajarhat', 1820),
(158, 'Glenmark Pharma', '2022-07-10', 'Kevzara', 'Kevzara', 'KEV08A', 'May-22', 150, 'May-25', 15, 'Rajarhat', 2250),
(159, 'Glenmark Pharma', '2022-07-10', 'Lexapro', 'Lexapro', 'LEXA00R', 'May-22', 125, 'May-26', 16, 'Rajarhat', 2320),
(160, 'Glenmark Pharma', '2022-07-10', 'Lisinopril', 'Lisinopril', 'LISI00L', 'Sep-21', 200, 'May-26', 14, 'Rajarhat', 2898),
(161, 'Glenmark Pharma', '2022-07-10', 'Lofexidine', 'Lofexidine', 'LOFE009D', 'Aug-21', 126, 'Sep-29', 8, 'Rajarhat', 1200),
(162, 'Glenmark Pharma', '2022-07-10', 'Lyrica', 'Lyrica', 'LYRI09A', 'Apr-21', 90, 'May-23', 15, 'Rajarhat', 1500),
(163, 'Glenmark Pharma', '2022-07-10', 'Melatonin', 'Melatonin', 'MELA00R', 'Sep-21', 50, 'May-25', 14, 'Rajarhat', 700),
(164, 'Glenmark Pharma', '2022-07-10', 'Meloxicam', 'Meloxicam', 'MELO00R', 'Jun-22', 80, 'May-25', 4, 'Rajarhat', 320),
(165, 'Glenmark Pharma', '2022-07-10', 'Metformin', 'Metformin', 'MET00I', 'Jun-21', 50, 'May-25', 10, 'Rajarhat', 500),
(166, 'Glenmark Pharma', '2022-07-10', 'Naloxone', 'Naloxone', 'NALO00N', 'Jun-22', 150, 'May-25', 12, 'Rajarhat', 1800),
(167, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Naltrexone', 'Naltrexone', 'NALT00P', 'May-22', 120, 'May-25', 13, 'Rajarhat', 1560),
(168, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Omeprazole', 'Omeprazole', 'OME08Z', 'May-22', 140, 'May-26', 15, 'Rajarhat', 2100),
(169, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Onpattro', 'Onpattro', 'ONPA89R', 'Sep-21', 150, 'May-26', 16, 'Rajarhat', 2400),
(170, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Otezla', 'Otezla', 'OTE8LA', 'Aug-21', 145, 'Sep-29', 14, 'Rajarhat', 2030),
(171, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Ozempic', 'Ozempic', 'OZE09C', 'Apr-21', 45, 'May-23', 8, 'Rajarhat', 360),
(172, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Pantoprazole', 'Pantoprazole', 'PAN87P', 'Sep-21', 80, 'May-25', 15, 'Rajarhat', 1200),
(173, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Prednisone', 'Prednisone', 'PRE078S', 'Jun-22', 79, 'May-25', 14, 'Rajarhat', 1106),
(174, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Probuphine', 'Probuphine', 'PROB09', 'Jun-21', 95, 'May-25', 20, 'Rajarhat', 1900),
(175, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Rybelsus', 'Rybelsus', 'RYBE00S', 'Jun-22', 74, 'May-25', 15, 'Rajarhat', 1470),
(176, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Tramadol', 'Tramadol', 'TRA89L', 'May-22', 90, 'May-25', 12, 'Rajarhat', 1164),
(177, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Trazodone', 'Trazodone', 'TRAZ09E', 'May-22', 85, 'May-26', 16, 'Rajarhat', 1440),
(178, 'Abbott India Ltd', '2022-07-10', 'biotin2', 'biotin2', 'd1002', 'Jun-22', 38, 'May-25', 10, 'Konnagar', 550),
(179, 'Abbott India Ltd', '2022-07-10', 'calpol', 'calpol', 'd20002', 'Jun-21', 130, 'May-25', 12, 'Konnagar', 1800),
(180, 'Abbott India Ltd', '2022-07-10', 'paracetamol', 'paracetamo', 'd1235', 'Jun-22', 60, 'May-25', 13, 'Konnagar', 780),
(181, 'Abbott India Ltd', '2022-07-10', 'zincovid', 'zincovid', 'd12356', 'May-22', 90, 'May-25', 15, 'Konnagar', 1350),
(182, 'Abbott India Ltd', '2022-07-10', 'vitaminc', 'vitaminc', 'Vt0120', 'May-22', 125, 'May-26', 16, 'Konnagar', 2000),
(183, 'Abbott India Ltd', '2022-07-10', 'rantac', 'rantac', 'VR0012', 'Sep-21', 130, 'May-26', 14, 'Konnagar', 2100),
(184, 'Abbott India Ltd', '2022-07-10', 'azithral', 'azithral', 'Aral005', 'Aug-21', 80, 'Sep-29', 8, 'Konnagar', 800),
(185, 'cipla Limited', '2022-07-10', 'omez', 'omez', 'mez012', 'Apr-21', 125, 'May-23', 15, 'Konnagar', 1875),
(186, 'cipla Limited', '2022-07-10', 'multivitamin', 'multivitamin', 'mu20ul', 'Sep-21', 90, 'May-25', 14, 'Konnagar', 1260),
(187, 'Sun Pharma', '2022-07-10', 'Acetaminophen', 'Acetaminophen', 'ACE0021', 'Jun-22', 150, 'May-25', 10, 'Konnagar', 1500),
(188, 'Sun Pharma', '2022-07-10', 'Amitriptyline', 'Amitriptyline', 'AMIT0021', 'Jun-21', 90, 'May-25', 12, 'Konnagar', 1200),
(189, 'Sun Pharma', '2022-07-10', 'Amlodipine', 'Amlodipine', 'AMLO0021', 'Jun-22', 45, 'May-25', 13, 'Konnagar', 650),
(190, 'Sun Pharma', '2022-07-10', 'Amoxicillin', 'Amoxicillin', 'AMO0021', 'May-22', 78, 'May-25', 15, 'Konnagar', 1200),
(191, 'Sun Pharma', '2022-07-10', 'Ativan', 'Ativan', 'ATIVA0021', 'May-22', 40, 'May-26', 16, 'Konnagar', 800),
(192, 'Sun Pharma', '2022-07-10', 'Atorvastatin', 'Atorvastatin', 'ATORVA02', 'Sep-21', 145, 'May-26', 14, 'Konnagar', 2100),
(193, 'Sun Pharma', '2022-07-10', 'Benzonatate', 'Benzonatate', 'BENZO00C', 'Aug-21', 120, 'Sep-29', 8, 'Konnagar', 960),
(194, 'Sun Pharma', '2022-07-10', 'Brilinta', 'Brilinta', 'BRILI00A', 'Apr-21', 130, 'May-23', 15, 'Konnagar', 2100),
(195, 'Sun Pharma', '2022-07-10', 'Bunavail', 'Bunavail', 'BUNA00L', 'Sep-21', 150, 'May-25', 14, 'Konnagar', 2100),
(196, 'Emcure Pharmaceuticals', '2022-07-10', 'Buprenorphine', 'Buprenorphine', 'BUPRE00R', 'Jun-22', 145, 'May-25', 10, 'Konnagar', 1450),
(197, 'Emcure Pharmaceuticals', '2022-07-10', 'Cephalexin', 'Cephalexin', 'CEPH00I', 'Jun-21', 207, 'May-25', 12, 'Konnagar', 2484),
(198, 'Emcure Pharmaceuticals', '2022-07-10', 'Ciprofloxacin', 'Ciprofloxacin', 'CIPRO00X', 'Jun-22', 150, 'May-25', 13, 'Konnagar', 1950),
(199, 'Emcure Pharmaceuticals', '2022-07-10', 'Citalopram', 'Citalopram', 'CITAL002', 'May-22', 70, 'May-25', 15, 'Konnagar', 1500),
(200, 'Emcure Pharmaceuticals', '2022-07-10', 'Clindamycin', 'Clindamycin', 'CLIN00Y', 'May-22', 40, 'May-26', 16, 'Konnagar', 800),
(201, 'Emcure Pharmaceuticals', '2022-07-10', 'Clonazepam', 'Clonazepam', 'CLON00P', 'Sep-21', 80, 'May-26', 14, 'Konnagar', 1120),
(202, 'Emcure Pharmaceuticals', '2022-07-10', 'Cyclobenzaprine', 'Cyclobenzaprine', 'CYCL00Z', 'Aug-21', 46, 'Sep-29', 8, 'Konnagar', 400),
(203, 'Emcure Pharmaceuticals', '2022-07-10', 'Cymbalta', 'Cymbalta', 'CYMB00A', 'Apr-21', 150, 'May-23', 15, 'Konnagar', 2250),
(204, 'Emcure Pharmaceuticals', '2022-07-10', 'Doxycycline', 'Doxycycline', 'DOX022Y', 'Sep-21', 116, 'May-25', 14, 'Konnagar', 1680),
(205, 'Emcure Pharmaceuticals', '2022-07-10', 'Dupixent', 'Dupixent', 'DUP08IX', 'Jun-22', 140, 'May-25', 10, 'Konnagar', 1400),
(206, 'Emcure Pharmaceuticals', '2022-07-10', 'Entresto', 'Entresto', 'ENT00O', 'Jun-21', 150, 'May-25', 12, 'Konnagar', 1800),
(207, 'Dr. Reddy Laboratories', '2022-07-10', 'Entyvio', 'Entyvio', 'ENTY0I', 'Jun-22', 145, 'May-25', 13, 'Konnagar', 1885),
(208, 'Dr. Reddy Laboratories', '2022-07-10', 'Farxiga', 'Farxiga', 'FARX00A', 'May-22', 186, 'May-25', 15, 'Konnagar', 3105),
(209, 'Dr. Reddy Laboratories', '2022-07-10', 'Gabapentin', 'Gabapentin', 'GABA00T', 'May-22', 130, 'May-26', 16, 'Konnagar', 2400),
(210, 'Dr. Reddy Laboratories', '2022-07-10', 'Gilenya', 'Gilenya', 'GILE00A', 'Sep-21', 93, 'May-26', 14, 'Konnagar', 1400),
(211, 'Dr. Reddy Laboratories', '2022-07-10', 'Humira', 'Humira', 'HUM00A', 'Aug-21', 50, 'Sep-29', 8, 'Konnagar', 400),
(212, 'Dr. Reddy Laboratories', '2022-07-10', 'Ibuprofen', 'Ibuprofen', 'IBU08P', 'Apr-21', 76, 'May-23', 15, 'Konnagar', 1200),
(213, 'Dr. Reddy Laboratories', '2022-07-10', 'Imbruvica', 'Imbruvica', 'IMB00A', 'Sep-21', 40, 'May-25', 14, 'Konnagar', 700),
(214, 'Dr. Reddy Laboratories', '2022-07-10', 'Invokana', 'Invokana', 'INV02A', 'Jun-22', 147, 'May-25', 10, 'Konnagar', 1500),
(215, 'Dr. Reddy Laboratories', '2022-07-10', 'Januvia', 'Januvia', 'JAN09A', 'Jun-21', 120, 'May-25', 12, 'Konnagar', 1440),
(216, 'Glenmark Pharma', '2022-07-10', 'Jardiance', 'Jardiance', 'JARD09E', 'Jun-22', 136, 'May-25', 13, 'Konnagar', 1820),
(217, 'Glenmark Pharma', '2022-07-10', 'Kevzara', 'Kevzara', 'KEV08A', 'May-22', 140, 'May-25', 15, 'Konnagar', 2250),
(218, 'Glenmark Pharma', '2022-07-10', 'Lexapro', 'Lexapro', 'LEXA00R', 'May-22', 135, 'May-26', 16, 'Konnagar', 2320),
(219, 'Glenmark Pharma', '2022-07-10', 'Lisinopril', 'Lisinopril', 'LISI00L', 'Sep-21', 200, 'May-26', 14, 'Konnagar', 2898),
(220, 'Glenmark Pharma', '2022-07-10', 'Lofexidine', 'Lofexidine', 'LOFE009D', 'Aug-21', 146, 'Sep-29', 8, 'Konnagar', 1200),
(221, 'Glenmark Pharma', '2022-07-10', 'Lyrica', 'Lyrica', 'LYRI09A', 'Apr-21', 100, 'May-23', 15, 'Konnagar', 1500),
(222, 'Glenmark Pharma', '2022-07-10', 'Melatonin', 'Melatonin', 'MELA00R', 'Sep-21', 48, 'May-25', 14, 'Konnagar', 700),
(223, 'Glenmark Pharma', '2022-07-10', 'Meloxicam', 'Meloxicam', 'MELO00R', 'Jun-22', 80, 'May-25', 4, 'Konnagar', 320),
(224, 'Glenmark Pharma', '2022-07-10', 'Metformin', 'Metformin', 'MET00I', 'Jun-21', 50, 'May-25', 10, 'Konnagar', 500),
(225, 'Glenmark Pharma', '2022-07-10', 'Naloxone', 'Naloxone', 'NALO00N', 'Jun-22', 150, 'May-25', 12, 'Konnagar', 1800),
(226, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Naltrexone', 'Naltrexone', 'NALT00P', 'May-22', 120, 'May-25', 13, 'Konnagar', 1560),
(227, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Omeprazole', 'Omeprazole', 'OME08Z', 'May-22', 138, 'May-26', 15, 'Konnagar', 2100),
(228, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Onpattro', 'Onpattro', 'ONPA89R', 'Sep-21', 150, 'May-26', 16, 'Konnagar', 2400),
(229, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Otezla', 'Otezla', 'OTE8LA', 'Aug-21', 135, 'Sep-29', 14, 'Konnagar', 2030),
(230, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Ozempic', 'Ozempic', 'OZE09C', 'Apr-21', 45, 'May-23', 8, 'Konnagar', 360),
(231, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Pantoprazole', 'Pantoprazole', 'PAN87P', 'Sep-21', 80, 'May-25', 15, 'Konnagar', 1200),
(232, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Prednisone', 'Prednisone', 'PRE078S', 'Jun-22', 79, 'May-25', 14, 'Konnagar', 1106),
(233, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Probuphine', 'Probuphine', 'PROB09', 'Jun-21', 95, 'May-25', 20, 'Konnagar', 1900),
(234, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Rybelsus', 'Rybelsus', 'RYBE00S', 'Jun-22', 98, 'May-25', 15, 'Konnagar', 1470),
(235, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Tramadol', 'Tramadol', 'TRA89L', 'May-22', 97, 'May-25', 12, 'Konnagar', 1164),
(236, 'Bengal Chemical & Pharmaceutical Ltd', '2022-07-10', 'Trazodone', 'Trazodone', 'TRAZ09E', 'May-22', 90, 'May-26', 16, 'Konnagar', 1440);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` int(15) NOT NULL,
  `C_id` int(15) NOT NULL,
  `Purchase_Id` int(15) NOT NULL,
  `Quantity` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `C_id`, `Purchase_Id`, `Quantity`) VALUES
(1, 1, 12, '1'),
(2, 1, 13, '5'),
(3, 1, 1, '2'),
(4, 2, 3, '10'),
(5, 2, 6, '10'),
(6, 3, 12, '2'),
(7, 3, 14, '4'),
(8, 3, 21, '10'),
(9, 3, 30, '5'),
(10, 4, 16, '4'),
(11, 4, 1, '2'),
(12, 4, 19, '10'),
(13, 4, 27, '4'),
(14, 4, 33, '2'),
(15, 4, 34, '4'),
(16, 4, 50, '2'),
(17, 5, 58, '2'),
(18, 5, 59, '5'),
(19, 5, 5, '10'),
(20, 5, 4, '2'),
(21, 6, 12, '5'),
(22, 6, 13, '1'),
(23, 6, 14, '4'),
(24, 7, 10, '10'),
(25, 7, 11, '2'),
(26, 7, 15, '5'),
(27, 8, 22, '10'),
(28, 8, 23, '5'),
(29, 9, 50, '2'),
(30, 9, 51, '5'),
(31, 9, 54, '6'),
(32, 10, 20, '7'),
(33, 10, 21, '2'),
(34, 10, 22, '5'),
(35, 11, 44, '2'),
(36, 11, 49, '10'),
(37, 11, 53, '5'),
(38, 12, 25, '2'),
(39, 12, 29, '10'),
(40, 12, 37, '3'),
(41, 12, 39, '4'),
(42, 13, 2, '5'),
(43, 13, 48, '5'),
(44, 13, 49, '4'),
(45, 13, 50, '6'),
(46, 14, 59, '5'),
(47, 14, 5, '10'),
(48, 14, 4, '2'),
(49, 15, 3, '5'),
(50, 15, 6, '10'),
(51, 16, 41, '10'),
(52, 16, 42, '7'),
(53, 17, 34, '6'),
(54, 17, 35, '4'),
(55, 18, 47, '4'),
(56, 18, 51, '5'),
(57, 19, 7, '10'),
(58, 20, 23, '5'),
(59, 20, 24, '10'),
(60, 21, 21, '8'),
(61, 21, 22, '2'),
(62, 21, 26, '2'),
(63, 22, 10, '2'),
(64, 23, 7, '5'),
(65, 23, 16, '2'),
(66, 24, 33, '2'),
(67, 24, 34, '6'),
(68, 25, 11, '5'),
(69, 25, 12, '2'),
(70, 26, 33, '2'),
(71, 26, 34, '4'),
(72, 26, 35, '1'),
(73, 27, 3, '5'),
(74, 27, 55, '10'),
(75, 27, 6, '20'),
(76, 28, 14, '10'),
(77, 28, 7, '10'),
(78, 29, 37, '3'),
(79, 29, 38, '10'),
(80, 30, 1, '10'),
(81, 31, 69, '10'),
(82, 31, 66, '10'),
(83, 31, 60, '5'),
(84, 32, 73, '4'),
(85, 32, 74, '3'),
(86, 32, 66, '10'),
(87, 33, 109, '6'),
(88, 33, 110, '5'),
(89, 33, 112, '5'),
(90, 34, 104, '10'),
(91, 34, 105, '10'),
(92, 35, 72, '2'),
(93, 35, 73, '10'),
(94, 36, 90, '7'),
(95, 36, 91, '10'),
(96, 36, 92, '20'),
(97, 37, 65, '30'),
(98, 38, 101, '7'),
(99, 38, 102, '20'),
(100, 38, 103, '10'),
(101, 39, 60, '10'),
(102, 40, 82, '5'),
(103, 40, 83, '10'),
(104, 41, 70, '2'),
(105, 41, 71, '5'),
(106, 42, 60, '5'),
(107, 43, 117, '2'),
(108, 43, 118, '5'),
(109, 44, 69, '10'),
(110, 44, 70, '2'),
(111, 45, 117, '2'),
(112, 45, 118, '5'),
(113, 46, 66, '10'),
(114, 46, 75, '4'),
(115, 47, 66, '10'),
(116, 48, 70, '2'),
(117, 48, 71, '2'),
(118, 49, 102, '20'),
(119, 49, 103, '2'),
(120, 50, 66, '10'),
(121, 50, 76, '10'),
(122, 51, 101, '7'),
(123, 51, 102, '4'),
(124, 52, 109, '20'),
(125, 52, 112, '5'),
(126, 53, 117, '2'),
(127, 53, 118, '5'),
(128, 53, 64, '10'),
(129, 54, 82, '10'),
(130, 54, 84, '10'),
(131, 55, 62, '10'),
(132, 55, 114, '10'),
(133, 56, 91, '10'),
(134, 56, 92, '5'),
(135, 56, 93, '5'),
(136, 57, 110, '5'),
(137, 57, 111, '10'),
(138, 58, 86, '4'),
(139, 58, 88, '10'),
(140, 58, 92, '5'),
(141, 59, 62, '10'),
(142, 59, 117, '10'),
(143, 60, 83, '10'),
(144, 60, 84, '10'),
(145, 60, 93, '5'),
(146, 61, 82, '10'),
(147, 61, 89, '5'),
(148, 61, 90, '7'),
(149, 62, 117, '10'),
(150, 62, 118, '5'),
(151, 63, 79, '7'),
(152, 63, 82, '5'),
(153, 63, 85, '10'),
(154, 64, 129, '10'),
(155, 64, 130, '5'),
(156, 64, 131, '5'),
(157, 65, 119, '10'),
(158, 65, 135, '10'),
(159, 66, 151, '5'),
(160, 66, 152, '6'),
(161, 67, 159, '10'),
(162, 67, 162, '2'),
(163, 68, 175, '8'),
(164, 68, 176, '7'),
(165, 69, 130, '5'),
(166, 69, 134, '4'),
(167, 70, 159, '10'),
(168, 70, 162, '8'),
(169, 71, 160, '7'),
(170, 71, 161, '4'),
(171, 72, 124, '10'),
(172, 72, 175, '8'),
(173, 73, 136, '5'),
(174, 73, 141, '10'),
(175, 74, 121, '5'),
(176, 74, 124, '10'),
(177, 74, 177, '5'),
(178, 75, 149, '7'),
(179, 75, 152, '6'),
(180, 76, 119, '10'),
(181, 77, 175, '8'),
(182, 77, 123, '10'),
(183, 78, 139, '10'),
(184, 79, 139, '10'),
(185, 79, 142, '5'),
(186, 79, 144, '5'),
(187, 80, 134, '4'),
(188, 80, 119, '10'),
(189, 81, 128, '10'),
(190, 81, 135, '10'),
(191, 82, 161, '20'),
(192, 83, 132, '4'),
(193, 83, 134, '4'),
(194, 84, 188, '10'),
(195, 84, 190, '2'),
(196, 84, 194, '10'),
(197, 85, 199, '10'),
(198, 85, 202, '2'),
(199, 86, 199, '10'),
(200, 86, 200, '10'),
(201, 87, 208, '7'),
(202, 87, 210, '2'),
(203, 87, 213, '5'),
(204, 88, 208, '7'),
(205, 88, 210, '5'),
(206, 89, 218, '10'),
(207, 89, 219, '7'),
(208, 89, 220, '4'),
(209, 89, 222, '2'),
(210, 90, 209, '10'),
(211, 90, 212, '4'),
(212, 91, 178, '10'),
(213, 92, 214, '3'),
(214, 92, 216, '4'),
(215, 92, 217, '10'),
(216, 93, 191, '10'),
(217, 93, 178, '2'),
(218, 94, 209, '10'),
(219, 94, 213, '5'),
(220, 95, 183, '20'),
(221, 96, 189, '5'),
(222, 96, 184, '10'),
(223, 97, 179, '20'),
(224, 97, 199, '10'),
(225, 97, 202, '2'),
(226, 98, 204, '4'),
(227, 98, 208, '7'),
(228, 99, 184, '10'),
(229, 100, 192, '5'),
(230, 100, 178, '5'),
(231, 101, 227, '2'),
(232, 101, 229, '10');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `S_Id` int(10) NOT NULL,
  `S_Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `S_Address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `S_Phoneno` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`S_Id`, `S_Name`, `S_Address`, `S_Phoneno`) VALUES
(1, 'Lupin Limited', 'Mumbai', '9875645121'),
(2, 'Dr. Reddy Laboratories', 'Hyderabad', '8745624851'),
(3, 'Abbott India Ltd', 'Mumbai', '8456745985'),
(4, 'Cipla Limited', 'Mumbai', '8457597562'),
(5, 'Emcure Pharmaceuticals', 'Pune', '9745245164'),
(6, 'Sun Pharma', 'Mumbai', '9147856984'),
(7, 'Zydus Lifesciences', 'Ahmedabad', '8777542189'),
(8, 'Glenmark Pharma', 'Delhi', '8745625789'),
(9, 'Bengal Pharmaceutical Ltd', 'Kolkata', '9784562598'),
(10, 'Siscon Pvt Ltd', 'Kolkata', '8774526589'),
(11, 'Mankind Pharma', 'New Delhi', '8977850004');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'admin pharmacist ',
  `Pharmacy_Id` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Username`, `Password`, `phone_no`, `Category`, `Pharmacy_Id`) VALUES
('a1', 'Sanjoy Mishra', 'admin', '0192023a7bbd73250516f069df18b500', '9830093233', 'admin', NULL),
('p1', 'Raj Khan', 'Raj@gmail.com', '0608d77ed644f4468a5a6ba53709001c', '8777837904', 'pharmacist', 1),
('p2', 'Rahul Das', 'Rahul@gmail.com', 'caa090535c8db4058b812f3a21bd6b08', '8777492056', 'pharmacist', 2),
('p3', 'Rohan Mallik', 'Rohan@gmail.com', '1604b8ee3a6d5427eeb879295d245645', '9875609855', 'pharmacist', 3),
('p4', 'Soumen Kar', 'Soumen@gmail.com', '65abc3dc61b41ad39e72e2bbcf520820', '9836615028', 'pharmacist', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `pharmacy`
--
ALTER TABLE `pharmacy`
  ADD PRIMARY KEY (`Pharmacy_Id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`Purchase_Id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`S_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `C_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `pharmacy`
--
ALTER TABLE `pharmacy`
  MODIFY `Pharmacy_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `Purchase_Id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
