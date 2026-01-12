-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 05, 2024 at 03:06 PM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u950419810_brgy`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `eventTitle` varchar(255) DEFAULT NULL,
  `eventDesc` varchar(255) DEFAULT NULL,
  `eventPic` varchar(255) DEFAULT NULL,
  `newsTitle` varchar(255) DEFAULT NULL,
  `newsDesc` varchar(255) DEFAULT NULL,
  `newsPic` varchar(255) DEFAULT NULL,
  `curdate` date DEFAULT NULL,
  `updateddate` date DEFAULT NULL,
  `removed` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `eventTitle`, `eventDesc`, `eventPic`, `newsTitle`, `newsDesc`, `newsPic`, `curdate`, `updateddate`, `removed`) VALUES
(10, 'Barangay Ayos lomboy Fiesta 2024', 'This coming month of May 2024, Dont be missed out, See you There!!', '6627266cacf47.jpg', NULL, NULL, NULL, '2024-04-23', '2024-10-07', NULL),
(11, 'Barangay Officials and Sk Night', 'This upcoming June 2024, Come and join, See you there! \r\nokokokkokokk', '662726c257993.jpg', NULL, NULL, NULL, '2024-04-23', '2024-05-02', NULL),
(12, NULL, NULL, NULL, 'Baranggay Ayos Lomboy ASSEMBLY MEETING ', 'Assembly meeeting is upcoming on june 3 2024, at Barangay Ayos Lomboy Gym ', '662767d0bd38b.png', '2024-04-23', NULL, 1),
(13, NULL, NULL, NULL, 'barangay meeting', 'jhsgdsdhd', '6629afe74e7ba.jpg', '2024-04-25', '2024-05-30', 1),
(14, NULL, NULL, NULL, 'NEWSSSS', 'adfasdfasdf k DksD k SDC sd csdc', '66d6aa57dc0ce.jpg', '2024-09-03', NULL, 1),
(15, NULL, NULL, NULL, 'DILGBARKADA', 'Early in the morning of November 3, 2024, Barangay residents are gathered to clean many parts of the barangay especially near roadways or pathways. This is to encourage everyone to help one another in achieving a clean environment and building a better co', '673e80043ed88.jpg', '2024-11-21', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blotter`
--

CREATE TABLE `blotter` (
  `id` int(11) NOT NULL,
  `blotter_no` int(11) DEFAULT NULL,
  `blotter_type` varchar(255) NOT NULL,
  `complainant` varchar(255) NOT NULL,
  `complained` varchar(255) NOT NULL,
  `locationOfIncident` varchar(255) NOT NULL,
  `dateOfFiling` date NOT NULL,
  `Status` varchar(255) NOT NULL,
  `blotter_info` varchar(255) NOT NULL,
  `personInCharge` varchar(255) DEFAULT NULL,
  `blotter_status` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blotter`
--

INSERT INTO `blotter` (`id`, `blotter_no`, `blotter_type`, `complainant`, `complained`, `locationOfIncident`, `dateOfFiling`, `Status`, `blotter_info`, `personInCharge`, `blotter_status`, `phonenumber`, `user_id`) VALUES
(1, 2, 'properties ', 'Pauline anne Nonato', 'sij custodio ', 'Purok #3  Ayos Lomboy', '2023-09-07', 'Settled', 'agawan ng pag ma may - ari ', 'Marcelino Romano Jr.', 'Approved', NULL, NULL),
(16, 4, 'Theft', 'Carlo Tumaling', 'Joshua V. Bernardo Jr.', 'Purok#2', '2024-03-02', 'Active', 'nawala cellphone', 'Marcelino Romano Jr.', 'Approved', NULL, NULL),
(23, 1, 'Assault', 'Joshua V. Bernardo Jr.', 'Fernando Gamiz', 'Purok#1', '2024-03-04', 'Settled', 'Naguusap sila sa harap ng bahay kanina tapos may di kaaya ayang ginawa si Fernando gamiz, sa kadahilanan na may inggit sya dun sa tao.s', 'Marcelino Romando Jr.', 'Approved', '09090909090', 15),
(27, 5, 'pag lason', 'justine botor', 'christoper enojo', 'Purok#1', '2024-03-04', 'Active', 'dahil amg dalawa na ito mag kapit bahay at  matagal narin ito silang may alitan hanggang nauwi sa nilason na ginong enojo ang manok ng kapit bahay niyang si ginong botor \r\n', 'Marcelino Romano Jr.', 'Approved', '23423423423', 15),
(36, 3, 'Agawan sa lupa', 'Rey Acosta', 'Mark Tangalin', 'Purok 1', '2024-04-22', 'Active', 'Nung una nagkasundo na sila pero dahil sa pera kaya sila di nagkaintindihan', 'Marcelino B. Romano', 'Approved', NULL, NULL),
(37, 6, 'binangga ng single motor', 'luzviminda lacaden', 'nathaniel Metorada', 'Purok 4 , Ayos Lomboy, guimba ', '2024-04-16', 'Active', 'Si Ginang allysa lacaden ay patawid ng kalsada na naka single na binangga ni Ginong Nathaniel Metorada ay, naka kapwa single motor na gamit niya ay skygo for registration at, si Ginang Allysa Lacaden ang gamit niyang single motor ay motor star na may plat', 'Agipito Ramil jr', 'Approved', NULL, NULL),
(40, 12, 'kinagat ng aso ng kapit bahay', 'hannah macaraeg', 'joanna buli', 'Purok#2', '2024-04-23', 'Active', 'si ginang hannah po ay nakagat ng aso ng kapit bahay na si ginang joanna na ang kanilang aso ay ayaw nila itali', 'si tar', NULL, '09234624351', 51),
(41, 22, 'Verbal Violence', 'John Michael A. Asuncion ', 'Cyzi Kyle Bien Sicuan', 'Purok#1', '2024-05-16', 'Active', 'Verbally threatening someone with violence using malicious words. I hate my life!! I feel like I\'m not enough', 'sdfsdfsa', NULL, '09123456789', 62),
(42, 24, 'Sinapak ako ni cyzi', 'steven R cachuela ', 'Cyzi kyotie BLOCK A', 'Purok#1', '2024-05-16', 'Active', 'nag lalakad ako tas sinapak nya ako sabihin mo sapakan kame kase sinuntok nya ako sa ulo sabihin mo koya welson', 'xdfaserae', NULL, '09817269690', 63),
(43, 232, 'smoke', 'Greggy M Mamo ', 'Dickson Astrero Fernandez', 'Purok#3', '2024-05-16', 'Active', 'ako ang masama at sya ang mabuti, di na ho tama yung ginagawa ng tao na yan. sya ang tama at ako ang mali', 'aserwrW', NULL, '09302896129', 60),
(44, 23, 'assult', 'abbyyyyy', 'almiiraaaaaaaaaaaaaaaaaaaaa', 'Purok#4', '2024-05-16', 'Active', '\\\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'\'10010101010010101', '24Zxcx', NULL, '00000000000', 67),
(47, NULL, 'Using illegal weapon', 'Pheobe', 'Avegail KImberlie Ciriaco', 'Purok#1', '2024-05-16', 'Processing', 'Brandishing or pointing a weapon at someone.', NULL, NULL, '09345678908', 62),
(48, NULL, 'assault', 'Junjun  Asak ', 'Pepe Glenn', 'Purok#1', '2024-05-16', 'Processing', 'kupal si glenn nanunura', NULL, NULL, '65465464', 59);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `complaint_id` int(11) NOT NULL,
  `complaint_subject` varchar(255) NOT NULL,
  `complaint_details` text NOT NULL,
  `userid` int(11) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `datetoday` datetime NOT NULL,
  `complaints_count` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`complaint_id`, `complaint_subject`, `complaint_details`, `userid`, `useremail`, `datetoday`, `complaints_count`) VALUES
(26, 'asdf', 'asdfasdf', 76, 'wilsonuser111@gmail.com', '2024-12-02 16:49:11', 0),
(27, 'GAOG', 'lkdlksfjlaksdfklasdfjaskldfjlaksdfasd fasdfkljaslkdfjalskdfjaklsdfjlaksdfjl;aksdfl;akdjsflkjeoifwejfioawejfopiajweofijwef waefa owef awe fawo efoawe fawoifejoaijdfoiasjdf awoeifaoidfjasd fwieofnoaisdf aweafoiwf asdfweefwefoiasdoifjasdf asodfnaosdfa sdfasndfoiasdfjasdfasdjfoajsdfl;kjafwioef sdfasdfokajdsfkllkjjjjjjjjlllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllkdkddkdkkdkdkdkdkdkkdkdkdkkdkdkdkdkdkkdkdkkdkdkdkkdkdddkdjfjfjfjfjfjfjjfjjfjfhhjfjfjjfjfjfjfjfjfjffjfjfjfjfjfjfjfjjfjjffj96908460794850878967-09845670-9845670-9458690-8456709845068974-690870-9870-9870-9870-9870-98670-9845670-8945670984560-98456987468970-970-9845670-9845670-8945670-9845670-98456845690-87487870-96870-984560-98456790-845670-984567-0984567-9084569845-87-09657-09845690-845-6984587-970-894198263489163481523451234wuiyeriouqwyerpqwouyerp', 76, 'wilsonuser111@gmail.com', '2024-12-02 20:40:59', 0);

-- --------------------------------------------------------

--
-- Table structure for table `docreq`
--

CREATE TABLE `docreq` (
  `id` int(11) NOT NULL,
  `documentType` varchar(255) NOT NULL,
  `Fullname` varchar(255) DEFAULT NULL,
  `DateofResidence` date DEFAULT NULL,
  `purok` int(11) DEFAULT NULL,
  `CORPurpose` varchar(255) DEFAULT NULL,
  `COIReason` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `CURDATE` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `dateRFP` date DEFAULT NULL,
  `datePickedup` date DEFAULT NULL,
  `amountpaid` int(11) DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `placeOfBirth` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `BCpurpose` varchar(255) DEFAULT NULL,
  `Bname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL,
  `Kaddress` varchar(255) DEFAULT NULL,
  `Kmoney` varchar(255) DEFAULT NULL,
  `KBAL` varchar(255) DEFAULT NULL,
  `KBALL` varchar(255) DEFAULT NULL,
  `BarcRBrgy` varchar(255) DEFAULT NULL,
  `BarcALAsqm` varchar(255) DEFAULT NULL,
  `BarcALAhectare` varchar(255) DEFAULT NULL,
  `BarcOwner` varchar(255) DEFAULT NULL,
  `COR_civilStatus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `docreq`
--

INSERT INTO `docreq` (`id`, `documentType`, `Fullname`, `DateofResidence`, `purok`, `CORPurpose`, `COIReason`, `Status`, `CURDATE`, `user_id`, `dateRFP`, `datePickedup`, `amountpaid`, `dateOfBirth`, `placeOfBirth`, `height`, `weight`, `BCpurpose`, `Bname`, `Lname`, `Kaddress`, `Kmoney`, `KBAL`, `KBALL`, `BarcRBrgy`, `BarcALAsqm`, `BarcALAhectare`, `BarcOwner`, `COR_civilStatus`) VALUES
(126, 'Certificate of Residency', 'Christian Jao V. Natividad ', '2024-04-23', 1, 'For Work', NULL, 'Processing', '2024-04-23', 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(127, 'Certificate of Indigency', 'Christian Jao V. Natividad ', NULL, NULL, 'Presently confine at the hospital', 'Presently confine at the hospital', 'Picked-up', '2024-04-23', 40, NULL, '2024-12-31', 556, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(128, 'Barangay Clearance', 'Christian Jao V. Natividad ', NULL, 1, NULL, NULL, 'Picked-up', '2024-04-23', 40, NULL, '2023-12-01', 121, '2024-04-23', 'Barangay Ayos Lomboy Guimba Nueva Ecija', '123', '12', 'Personal/Reference Purposes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(129, 'Certificate of Indigency', 'Ditse Naucis lomboy JJ', NULL, NULL, NULL, 'Presently confine at the hospital', 'Cancelled', '2024-04-23', 51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(130, 'Certificate of Indigency', 'Ditse Naucis lomboy JJ', NULL, NULL, NULL, 'Presently confine at the hospital', 'Processing', '2024-04-23', 51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 'Certificate of Residency', 'Joshua V. Bernardo Jr.', '2024-04-12', 3, 'For Work', NULL, 'Processing', '2024-04-26', 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, 'Certificate of Indigency', 'Joshua V. Bernardo Jr.', NULL, NULL, NULL, 'Presently confine at the hospital', 'Processing', '2024-04-27', 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, 'Certificate of Indigency', 'Joshua V. Bernardo Jr.', NULL, NULL, NULL, 'Presently confine at the hospital', 'Processing', '2024-04-27', 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(134, 'Certificate of Indigency', 'Joshua V. Bernardo Jr.', NULL, NULL, NULL, 'Presently confine at the hospital', 'Processing', '2024-04-27', 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(135, 'Certificate of Indigency', 'Joshua V. Bernardo Jr.', NULL, NULL, NULL, 'Presently confine at the hospital', 'Processing', '2024-04-27', 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(136, 'Barangay Clearance', 'Joshua V. Bernardo Jr.', NULL, 1, NULL, NULL, 'Processing', '2024-04-27', 15, NULL, NULL, NULL, '2024-04-24', 'asdfasdf', '12', '122', 'Personal/Reference Purposes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(137, 'Certificate of Indigency', 'Joshua V. Bernardo Jr.', NULL, NULL, NULL, 'Presently confine at the hospital', 'Processing', '2024-04-30', 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(138, 'Certificate of Indigency', 'Joshua V. Bernardo Jr.', NULL, NULL, NULL, 'Presently confine at the hospital', 'Processing', '2024-05-02', 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(139, 'Certificate of Indigency', 'Joshua V. Bernardo Jr.', NULL, NULL, NULL, 'Presently confine at the hospital', 'Processing', '2024-05-02', 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(140, 'Certificate of Indigency', 'Junjun  Asak ', NULL, NULL, 'Presently confine at the hospital', 'Presently confine at the hospital', 'Denied', '2024-05-16', 59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(141, 'Certificate of Residency', 'Junjun  Asak ', '2024-05-08', 1, 'For School', NULL, 'Ready-for-pick-up', '2024-05-16', 59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(142, 'Certificate of Residency', 'Junjun  Asak ', '2024-05-01', 1, 'For Work', NULL, 'Ready-for-pick-up', '2024-05-16', 59, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(143, 'Barangay Clearance', 'John Michael A. Asuncion ', NULL, 3, NULL, NULL, 'Processing', '2024-05-16', 62, NULL, NULL, NULL, '2016-02-16', 'Sa moon', '300', '900', 'Personal/Reference Purposes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(144, 'Certificate of Indigency', 'Kentucky Fried Chicken kfc', NULL, NULL, 'to scam the government and claim free cash assistance', 'to scam the government and claim free cash assistance', 'Ready-for-pick-up', '2024-05-16', 64, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(148, 'Kasunduan', NULL, NULL, NULL, NULL, NULL, 'Ready-for-pick-up', '2024-05-24', 58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Jason  De Ulo', 'Wilson Wilson', 'Ayos Lomboy', '10000', '1', 'Cavite', NULL, NULL, NULL, NULL, NULL),
(150, 'Barangay Clearance', 'Jason  De Ulo', NULL, 1, NULL, NULL, 'Processing', '2024-05-24', 58, NULL, NULL, NULL, '2024-05-02', 'asdfasdf', '12', '123', 'Personal/Reference Purposes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(151, 'Barangay Clearance', 'Jason  De Ulo', NULL, 3, NULL, NULL, 'Processing', '2024-05-24', 58, NULL, NULL, NULL, '2024-05-16', 'zzzzzzzzzzzz', '22', '22', 'Personal/Reference Purposes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Married'),
(152, 'Barangay Clearance', 'Jason  De Ulo', NULL, 1, NULL, NULL, 'Processing', '2024-05-24', 58, NULL, NULL, NULL, '2020-01-27', 'pacac', '170', '52', 'Personal/Reference Purposes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Single'),
(153, 'Certificate of Indigency', 'Jason  De Ulo', NULL, NULL, 'Presently confine at the hospital', 'Presently confine at the hospital', 'Ready-for-pick-up', '2024-05-25', 58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(154, 'Certificate of Indigency', 'Jason  De Ulo', NULL, NULL, NULL, 'Presently confine at the hospital', 'Processing', '2024-08-21', 58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(155, 'Certificate of Residency', 'zane  bautista', '2005-12-02', 1, 'For Work', NULL, 'Processing', '2024-08-22', 75, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(156, 'Certificate of Residency', 'Jason  De Ulo', '2024-10-01', 1, 'For Work', NULL, 'Processing', '2024-10-06', 58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(157, 'Certificate of Residency', 'Gasmido L. Gasmido Jr.', '2016-02-02', 1, 'For Work', NULL, 'Processing', '2024-11-21', 76, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `household`
--

CREATE TABLE `household` (
  `id` int(11) NOT NULL,
  `HouseNo` varchar(255) NOT NULL,
  `Street` varchar(255) NOT NULL,
  `Purok` varchar(255) NOT NULL,
  `Municipality` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Barangay` varchar(255) NOT NULL,
  `Datereg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `household`
--

INSERT INTO `household` (`id`, `HouseNo`, `Street`, `Purok`, `Municipality`, `Province`, `Barangay`, `Datereg`) VALUES
(39, '1', 'Santiago', '1', 'Guimba', 'Nueva Ecija', 'Ayos Lomboy', '2024-10-10'),
(40, '2', 'Geronimo', '1', 'Guimba', 'Nueva Ecija', 'Ayos Lomboy', '2019-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `household2`
--

CREATE TABLE `household2` (
  `id` int(11) NOT NULL,
  `Inhabitants` varchar(255) NOT NULL,
  `houseID` int(11) NOT NULL,
  `InhabitantsNo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `household2`
--

INSERT INTO `household2` (`id`, `Inhabitants`, `houseID`, `InhabitantsNo`) VALUES
(88, 'Tom A. Jerry Jr.', 1, '2'),
(89, 'Renato   Duenaz ', 1, '2'),
(90, 'Paul V. John ', 2, '3'),
(91, 'Jason  De ulo ', 2, '3'),
(92, 'Joshua V. Bernardo Jr.', 2, '3');

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `chairmanship` varchar(255) DEFAULT NULL,
  `position` varchar(255) NOT NULL,
  `termstart` date NOT NULL,
  `termend` date NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `committee` varchar(255) DEFAULT NULL,
  `removed` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`id`, `name`, `chairmanship`, `position`, `termstart`, `termend`, `image`, `status`, `committee`, `removed`) VALUES
(1, 'Hon. Richard G Soliman', NULL, 'Barangay Captain', '2023-12-02', '2023-12-23', '6657ff315121f.jpg', 'Inactive', 'Official', NULL),
(2, 'Arnold M. Ramil', NULL, 'Kagawad', '2023-12-07', '2023-12-29', '6579b081e1346.png', 'Active', 'Official', NULL),
(3, 'Michael P. Torres', NULL, 'Kagawad', '2023-12-01', '2023-12-30', '6579b0986263b.png', 'Active', 'Official', NULL),
(4, 'Manolito N. De Guzman', 'Finance', 'Kagawad', '2023-12-01', '2023-12-30', '6579b0321e990.png', 'Active', 'Official', NULL),
(5, 'Marcelino B. Romano Jr.', 'Peace and Order', 'Kagawad', '2023-12-01', '2023-12-15', '6579b0ea43c18.png', 'Active', 'Official', NULL),
(6, 'Marilou Dela Cruz', 'Health', 'Kagawad', '2023-12-01', '2023-12-20', '6579b0d35713f.png', 'Active', 'Official', NULL),
(7, 'Wardell C. Castillo', 'Land Tax', 'Kagawad', '2023-12-01', '2023-12-21', '6579b052682e3.png', 'Active', 'Official', NULL),
(8, 'Rolando L. Faustino', 'Infra', 'Kagawad', '2023-12-01', '2023-12-20', '6579b06ef025c.png', 'Active', 'Official', NULL),
(9, 'Reenalyn Martinez', 'Education', 'SK CHAIRPERSON', '2023-12-01', '2023-12-01', '6579b0fff1669.png', 'Active', 'Official', NULL),
(10, 'Lerma T. Escobar', 'Secretary', 'Barangay Secretary', '2023-12-01', '2023-12-01', '6579b1135e7cb.png', 'Active', 'Official', NULL),
(11, 'Conrado Escobar', 'Treasurer', 'Barangay Treasurer', '2023-12-01', '2023-12-30', '6579b12a9c51a.png', 'Active', 'Official', NULL),
(17, 'Wardel C. Castillo', NULL, 'Chairperson', '2024-04-30', '2024-05-27', '6657fa348ab1a.png', 'Inactive', 'LandTax', NULL),
(18, 'Marcelino B. Romano Jr.', NULL, 'Chairperson', '2024-05-08', '2024-05-28', '6657fa8e58d84.png', 'Active', 'PeaceAndOrder', NULL),
(19, 'Ronaldo L. Faustino', NULL, 'Chairperson', '2024-05-01', '2024-05-29', '6657faa765839.png', 'Active', 'Infrastructure', NULL),
(20, 'Marilou D. Dela Cruz', NULL, 'Chairperson', '2024-04-30', '2024-05-22', '6657fad1515fb.png', 'Inactive', 'Health', NULL),
(21, 'Reenalyn P. Martinez', NULL, 'Chairperson', '2024-04-30', '2024-05-01', '6657fb013a4c5.png', 'Active', 'Education', NULL),
(23, 'Arnold M. Ramil', NULL, 'Chairperson', '2024-05-02', '2024-05-15', '6657fb38944fc.png', 'Active', 'Agriculture', NULL),
(24, 'Reenalyn P. Martinez', NULL, 'Chairperson', '2024-05-09', '2024-05-21', '6657fb466c0a8.png', 'Active', 'SK', NULL),
(28, 'Manolito N. De Guzman', NULL, 'Chairperson', '2024-04-03', '2024-05-31', '6657f9e463548.png', 'Inactive', 'Finance', NULL),
(30, 'Marlon A. De Leon', NULL, 'Tanod', '2023-02-28', '2024-12-27', '6657fc53995d6.png', 'Active', 'Tanod', NULL),
(31, 'James Ballad', NULL, 'Tanod', '2024-03-06', '2024-07-19', '6657fc70a80aa.png', 'Active', 'Tanod', NULL),
(32, 'Leosa T. Catigday', NULL, 'Tanod', '2024-03-29', '2024-07-05', '6657fc8795709.png', 'Active', 'Tanod', NULL),
(33, 'Manuel A. Licayan', NULL, 'Tanod', '2024-04-03', '2024-07-11', '6657fc9e9c248.png', 'Active', 'Tanod', NULL),
(35, 'Flordeliza L. Liwanag', NULL, 'BHW', '2024-05-03', '2024-05-25', '6657fdf28268a.png', 'Inactive', 'Health', NULL),
(36, 'Gregoria L. Faustino', NULL, 'BHW', '2024-05-02', '2024-06-06', '6657feb420c6f.png', 'Active', 'Health', NULL),
(37, 'Maria Lourdes B. Luis', NULL, 'BHW', '2024-05-01', '2024-06-07', '6657fecb002fb.png', 'Active', 'Health', NULL),
(38, 'Michael P. Torres', NULL, 'Chairperson', '2024-04-30', '2024-06-07', '6657ff063b20d.png', 'Active', 'SocialServices', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `id` int(11) NOT NULL,
  `datereg` date NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `extensionname` varchar(255) NOT NULL,
  `phonenum` int(11) NOT NULL,
  `civilstatus` varchar(255) NOT NULL,
  `citizenship` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `street` varchar(255) NOT NULL,
  `purok` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`id`, `datereg`, `lastname`, `firstname`, `middlename`, `extensionname`, `phonenum`, `civilstatus`, `citizenship`, `sex`, `birthdate`, `street`, `purok`, `city`, `province`) VALUES
(5, '2023-12-01', 'Jerry', 'Tom', 'A.', 'Jr.', 0, 'Single', 'Naturalized-Citizen', 'Male', '2008-07-09', 'Domingo St.', 'Purok#1', 'Guimba', 'Nueva Ecija'),
(7, '2022-02-17', 'John', 'Paul', 'V.', '', 0, 'Single', 'Naturalized-Citizen', 'Male', '2002-02-27', 'Grove St.', '2', 'Guimba', 'Nueva Ecija'),
(8, '2023-12-05', 'Lomboy', 'Ditse', 'N.', '', 0, 'Single', 'Natural-Born-Citizen', 'Female', '2006-10-30', 'Zone 1', '2', 'Guimba', 'Nueva Ecija'),
(9, '2024-02-29', 'Gasmido', 'Wilson', 'L.', 'Jr.', 0, 'Single', 'Naturalized-Citizen', 'Male', '2002-03-21', 'Zone 3', '2', 'Guimba', 'Nueva Ecija'),
(10, '2024-02-04', 'Delos Reyes', 'Princess', 'P', '', 0, 'Single', 'Natural-Born-Citizen', 'Female', '2006-06-06', 'Zone 1', 'Purok#1', 'Guimba', 'Nueva Ecija'),
(11, '2024-04-04', 'Duenaz', 'Renato ', '', '', 0, 'Single', 'Natural-Born-Citizen', 'Male', '2002-09-09', 'Zone 2', 'Purok#1', 'Guimba', 'Nueva Ecija'),
(12, '2024-04-04', 'De ulo', 'Jason', '', '', 0, 'Single', 'Natural-Born-Citizen', 'Male', '2001-07-09', 'Zone 3', 'Purok#3', 'Guimba', 'Nueva Ecija'),
(13, '2024-04-24', 'Bernardo', 'Joshua', 'V.', 'Jr.', 0, 'Married', 'Natural-Born-Citizen', 'Male', '2024-04-11', 'Zone 1', 'Purok#2', 'Guimba', 'Nueva Ecija');

-- --------------------------------------------------------

--
-- Table structure for table `revenues`
--

CREATE TABLE `revenues` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `datereq` date NOT NULL,
  `docreq` varchar(255) NOT NULL,
  `datepick` date NOT NULL,
  `amountpaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `revenues`
--

INSERT INTO `revenues` (`id`, `fullname`, `datereq`, `docreq`, `datepick`, `amountpaid`) VALUES
(3, 'Joshua V. Bernardo Jr.', '2023-12-13', 'Certificate of Residency', '2023-12-13', 100),
(4, 'Joshua V. Bernardo Jr.', '2023-12-14', 'Certificate of Indigency', '2024-03-02', 100),
(6, 'Joshua V. Bernardo Jr.', '2024-03-02', 'Certificate of Residency', '2024-03-01', 100),
(8, 'cnatividad361@gmail.com', '2024-04-23', 'Barangay Clearance', '2023-12-01', 121);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) NOT NULL,
  `Last_name` varchar(255) DEFAULT NULL,
  `First_name` varchar(255) DEFAULT NULL,
  `Middle_name` varchar(255) DEFAULT NULL,
  `Extension_name` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `dateReg` date DEFAULT NULL,
  `logdate` date DEFAULT NULL,
  `logtime` time DEFAULT NULL,
  `RequestNo` int(11) DEFAULT NULL,
  `DLRequest` date DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `purok` varchar(255) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `blotreq` int(11) NOT NULL,
  `blotdateusers` date DEFAULT NULL,
  `verifiedEmail` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `complaint_count` int(11) DEFAULT 0,
  `last_complaint_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_password`, `user_type`, `Last_name`, `First_name`, `Middle_name`, `Extension_name`, `Status`, `dateReg`, `logdate`, `logtime`, `RequestNo`, `DLRequest`, `birthdate`, `sex`, `purok`, `citizenship`, `blotreq`, `blotdateusers`, `verifiedEmail`, `token`, `complaint_count`, `last_complaint_date`) VALUES
(5, 'barangayayoslomboy@gmail.com', '$2y$10$MlPadMVGiuu8sAyQDJY61.nY.YAJp22n3t56e60yoS.NGqj/tQA0W', 'admin', 'admin', 'admin', 'admin', NULL, NULL, NULL, '2024-12-05', '22:48:44', 2, NULL, '2024-05-01', 'Male', '2', 'Natural-Citizen', 0, NULL, NULL, NULL, 0, NULL),
(15, 'qwer@gmail.com', '$2y$10$Obzmf.fzj5biraHPSl8m4umflg.4tGCzoO1Sfm5CguIUvLVvuF6Ce', 'user', 'Bernardo', 'Joshua', 'V.', 'Jr.', 'Approved', '2023-12-07', '2024-06-22', '23:28:55', 2, '2024-05-02', '2023-12-01', 'Male', '2', 'Natural-Born-Citizen', 1, '2024-05-20', NULL, NULL, 0, NULL),
(38, 'rafaeltosper@gmail.com', '$2y$10$nWfPaDrPLcCtuFo2fXLZf.9ZTWcdGk6JmGdtbPXSv2PKG0HNrUt32', 'rafaeltosper@gmail.com', 'Tos', 'Raf', 'M', 'Jear', 'Approved', '2024-04-18', '2024-04-18', '14:44:28', 0, NULL, '2003-02-09', 'Male', '1', 'Natural-Born-Citizen', 0, NULL, NULL, NULL, 0, NULL),
(40, 'cnatividad361@gmail.com', NULL, 'user', 'Natividad', 'Christian Jao', 'V.', '', 'Approved', '2024-04-23', NULL, NULL, 3, '2024-04-23', '2003-06-06', 'Male', '1', 'Natural-Born-Citizen', 0, NULL, '1', '109313875081998840244', 0, NULL),
(43, 'joshutelan02@gmail.com', NULL, 'user', NULL, 'De Guzman,', '', '', 'Approved', '2024-04-23', '2024-08-25', '13:47:43', 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, '1', '116917225456692293213', 0, NULL),
(51, 'sicuancyzi@gmail.com', '$2y$10$UNfL.T5esrS5hfTAaVTQCOitYjFUe/3uRPxAfNipgnf.fTOqY530O', 'user', 'lomboy', 'Ditse', 'Naucis', '', 'Approved', '2024-04-23', '2024-05-16', '08:26:14', 2, '2024-04-23', '2002-08-24', 'Female', '1', 'Natural-Born-Citizen', 2, '2024-04-23', '1', '106625460264274336558', 0, NULL),
(58, 'pogelang590@gmail.com', '$2y$10$IUiNxz8Rh/P3y7y9qIFwsuHjL.qChNKGqBFjegw0Rgb588bJ8fXTG', 'pogelang590@gmail.com', 'Naucis', 'poge', '', '', 'Approved', '2024-04-27', '2024-11-21', '14:23:31', 1, '2024-10-06', '2000-02-23', 'Female', '2', 'Naturalized-Citizen', 1, '2024-05-27', NULL, NULL, 0, NULL),
(59, 'dicksonkwini@gmail.com', '$2y$10$xGkCMeMHBAk05leAazwL4OVxxrYcRUH2XdvUJJdGLI4lOE/IEsGPe', 'dicksonkwini@gmail.com', 'Asak', 'Junjun', '', '', 'Approved', '2024-05-16', '2024-05-16', '16:55:48', 3, '2024-05-16', '2024-05-09', 'Male', '1', 'Natural-Born-Citizen', 1, '2024-05-16', NULL, NULL, 0, NULL),
(60, 'elie251128@gmail.com', '$2y$10$JN8.QNfABQ9widutuh/a3.c2XuQntLhhGJ2TJ9IrrKBCShhN67Dfe', 'elie251128@gmail.com', 'Mamo', 'Greggy', 'M', '', 'Approved', '2024-05-16', '2024-05-16', '16:56:03', 0, NULL, '2003-02-01', 'Male', '1', 'Naturalized-Citizen', 1, '2024-05-16', NULL, NULL, 0, NULL),
(61, 'alturaalfred10@gmail.com', NULL, 'user', NULL, 'Ducos', '', '', 'Approved', '2024-05-16', '2024-05-23', '21:19:28', 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, '1', '113880514189740358471', 0, NULL),
(62, 'ajcoloma06@gmail.com', '$2y$10$XXBrFo0fcztkziVneW.s5e.uvbjje1qsMZU9C9az215A2s1TdSZIW', 'ajcoloma06@gmail.com', 'Asuncion', 'John Michael', 'A.', '', 'Approved', '2024-05-16', '2024-05-16', '16:58:12', 1, '2024-05-16', '2019-02-06', 'Male', '1', 'Natural-Born-Citizen', 2, '2024-05-16', NULL, NULL, 0, NULL),
(63, 'stevenxcachuela@gmail.com', '$2y$10$0zjop/KdynUaugzrLiRJuepo5JEJhfxVgb8b.VCVFGAOkIjkt1PJe', 'stevenxcachuela@gmail.com', 'cachuela', 'steven', 'R', '', 'Approved', '2024-05-16', '2024-05-16', '16:59:59', 0, NULL, '2001-06-16', 'Male', '1', 'Natural-Born-Citizen', 2, '2024-05-16', NULL, NULL, 0, NULL),
(64, 'edreykd@pm.me', '$2y$10$8gc/YtGkDxc4el8z0jZ9cu1WXaKPilCgrWpAkatc6xu2fKEdpFELW', 'edreykd@pm.me', 'Chicken', 'Kentucky', 'Fried', 'kfc', 'Approved', '2024-05-16', '2024-05-16', '17:00:27', 1, '2024-05-16', '2024-05-16', 'Male', '1', 'Natural-Born-Citizen', 1, '2024-05-16', NULL, NULL, 0, NULL),
(65, 'matiasdhessa075@gmail.com', '$2y$10$NLwphotmfsbyyXg0AiK9Gu.a0CQfALZCGmODq9qFjsUouGemZl7VS', 'matiasdhessa075@gmail.com', 'blue', 'red', 'green', 'yellow', 'Approved', '2024-05-16', '2024-05-16', '17:01:38', 0, NULL, '2002-09-08', 'Male', '4', 'Natural-Born-Citizen', 0, NULL, NULL, NULL, 0, NULL),
(66, 'dm6874700@gmail.com', '$2y$10$b2fpVM4UuE0wU1iKidm2CuaBkXj4VtJ4dFugdwjQ5poJXR1/bf/c.', 'dm6874700@gmail.com', 'matias', 'dmharie', 'a', '', 'Approved', '2024-05-16', NULL, NULL, 0, NULL, '2003-07-02', 'Male', '1', 'Natural-Born-Citizen', 0, NULL, NULL, NULL, 0, NULL),
(67, 'avegailkimberlie24@gmail.com', '$2y$10$l6kF8Azd2GYMg.vVofHBd.qa.ZZwnWhclYQD5.Ea7h9o0RQW8p2x.', 'avegailkimberlie24@gmail.com', 'fdgfdfd', 'ghhfhgfgfgf', 'm', 'sdfgh', 'Approved', '2024-05-16', '2024-05-16', '17:02:44', 0, NULL, '2024-04-28', 'Male', '1', 'Natural-Born-Citizen', 1, '2024-05-16', NULL, NULL, 0, NULL),
(68, 'patruzapollograza@gmail.com', '$2y$10$8ZoB106fmZFQJ/Ag5fKNduCBHQ3qZtyzq33f173SwN83aXkbvX/dW', 'patruzapollograza@gmail.com', 'Graza', 'Patruz Apollo', '', '', 'Approved', '2024-05-16', '2024-05-16', '17:03:33', 0, NULL, '2004-04-04', 'Male', '3', 'Natural-Born-Citizen', 0, NULL, NULL, NULL, 0, NULL),
(69, 'aldeakel27@gmail.com', NULL, 'user', NULL, 'Kel', '', '', 'Processing', '2024-05-16', '2024-05-16', '17:17:26', 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, '1', '113618226183130403561', 0, NULL),
(70, 'dagmanpiolo@gmail.com', NULL, 'user', NULL, 'Dagman,', '', '', 'Approved', '2024-05-23', '2024-05-24', '11:24:49', 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, '1', '108065953719949324314', 0, NULL),
(71, 'daomingsi947@gmail.com', NULL, 'user', NULL, 'Ch4rapnu', '', '', 'Processing', '2024-05-24', '2024-05-24', '11:25:17', 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, '1', '101582295958561231978', 0, NULL),
(72, 'blessdeguzman61@gmail.com', NULL, 'user', NULL, 'Bless', '', '', 'Approved', '2024-08-22', '2024-08-22', '08:39:01', 0, NULL, NULL, NULL, NULL, NULL, 0, NULL, '1', '108054069627923438604', 0, NULL),
(73, 'johnlesterazarcon@gmail.com', '$2y$10$lc7eGG/yH1bcDVzn1ScVIORz2j9hDCqKnzINQwtx917yKxxGXjH6q', 'johnlesterazarcon@gmail.com', 'azarcon', 'jhon lester', '', '', 'Processing', '2024-08-22', '2024-08-22', '14:06:19', 0, NULL, '2006-05-07', 'Male', '1', 'Natural-Born-Citizen', 0, NULL, NULL, NULL, 0, NULL),
(74, 'natashacodeniera@gmail.com', '$2y$10$wdNOfhvbac1M9VbFum8RTuaUpLLL3K713up2bD5M0BosTrdbKFLlu', 'natashacodeniera@gmail.com', 'codeniera', 'savienne', 'l', '', 'Approved', '2024-08-22', NULL, NULL, 0, NULL, '2005-08-20', 'Male', '1', 'Natural-Born-Citizen', 0, NULL, NULL, NULL, 0, NULL),
(75, 'bautistazane51@gmail.com', '$2y$10$aktb/f9sImUAOxTJO8YWp.KvUsx1qT3TmFuobsDPdZW2d/TzZElL2', 'bautistazane51@gmail.com', 'bautista', 'zane', '', '', 'Approved', '2024-08-22', '2024-08-22', '14:13:02', 1, '2024-08-22', '2005-12-02', 'Male', '1', 'Natural-Born-Citizen', 0, NULL, NULL, NULL, 0, NULL),
(76, 'wilsonuser111@gmail.com', NULL, 'user', 'Gasmido', 'Gasmidos', 'L.', 'Jr.', 'Denied', '2024-10-05', '2024-12-05', '20:35:50', 1, '2024-11-21', '2004-06-08', 'Male', '1', 'Natural-Born-Citizen', 0, NULL, '1', '112211791032077406463', 2, '2024-12-02 20:40:59'),
(77, 'frincebalintag2511@gmail.com', NULL, 'user', 'ds', 'Jokesss', '', '', 'Processing', '2024-11-11', '2024-11-11', '22:33:34', 0, NULL, '2024-11-04', 'Male', '1', 'Natural-Born-Citizen', 0, NULL, '1', '101134849649957434693', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_browser`
--

CREATE TABLE `users_browser` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `IP_Address` varchar(255) DEFAULT NULL,
  `userBrowser` varchar(255) DEFAULT NULL,
  `browserFingerprint` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_browser`
--

INSERT INTO `users_browser` (`id`, `user_id`, `IP_Address`, `userBrowser`, `browserFingerprint`) VALUES
(27, 15, '103-47-230-2.citicableworld.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', '80771c6e-fbde-4913-8941-be7fe80352fc'),
(28, 58, '103-47-230-2.citicableworld.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', '80771c6e-fbde-4913-8941-be7fe80352fc'),
(40, 58, '120.28.251.20', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Mobile Safari/537.36', 'c820fcb2-6f54-49be-ae08-2d29fc1c1dbe'),
(42, 58, '120.28.251.20', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', '55cfeaea-608d-4937-8517-0fa283974c83'),
(44, 73, '122.3.17.213.pldt.net', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', '644d1684-3a05-445c-a820-181e64841a33'),
(45, 75, '122.3.17.213.pldt.net', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', '644d1684-3a05-445c-a820-181e64841a33'),
(46, 58, '103.152.9.178', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'aa2b2c54-a589-4c59-8ac0-3aedc6a092e4'),
(47, 58, '103.47.230.34', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', '263884ee-f620-4e24-8928-500a35c9f46a'),
(50, 58, '103-47-230-34.citicableworld.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '80771c6e-fbde-4913-8941-be7fe80352fc'),
(52, 58, '103-152-9-178.citicableworld.com', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Mobile Safari/537.36', 'c820fcb2-6f54-49be-ae08-2d29fc1c1dbe'),
(66, 5, '103-47-230-34.citicableworld.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'dc964b1c-bbf6-49fe-90ae-d95d724d5feb'),
(67, 5, '27.110.164.174', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '80771c6e-fbde-4913-8941-be7fe80352fc'),
(68, 5, '2001:4452:2d1:9100:cdd3:18fd:c44:3a72', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '0cfe3ca1-a1dd-44a5-96e0-e39118335a94'),
(69, 58, '2001:4452:2d1:9100:cdd3:18fd:c44:3a72', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', '0cfe3ca1-a1dd-44a5-96e0-e39118335a94'),
(70, 5, '103-152-9-6.citicableworld.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', '80771c6e-fbde-4913-8941-be7fe80352fc'),
(71, 5, '103-152-9-6.citicableworld.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', '1f2d5bc4-c08f-4dcc-96c2-11fedfba5c6e'),
(72, 58, '2001:4452:2ca:ff00:a088:a1e9:31aa:db09', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', '80771c6e-fbde-4913-8941-be7fe80352fc'),
(73, 5, '103-152-9-6.citicableworld.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', '80771c6e-fbde-4913-8941-be7fe80352fc'),
(74, 58, '175.176.4.50', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'c065c17b-546b-4a7b-8a83-25b0b9f835ac'),
(75, 5, '103-152-9-6.citicableworld.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'd07359a8-a438-4595-b53b-a3493727c495'),
(76, 5, '103-152-9-6.citicableworld.com', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Mobile Safari/537.36', 'c820fcb2-6f54-49be-ae08-2d29fc1c1dbe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blotter`
--
ALTER TABLE `blotter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`complaint_id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `docreq`
--
ALTER TABLE `docreq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `household`
--
ALTER TABLE `household`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `household2`
--
ALTER TABLE `household2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revenues`
--
ALTER TABLE `revenues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_browser`
--
ALTER TABLE `users_browser`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `blotter`
--
ALTER TABLE `blotter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `docreq`
--
ALTER TABLE `docreq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `household`
--
ALTER TABLE `household`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `household2`
--
ALTER TABLE `household2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `revenues`
--
ALTER TABLE `revenues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `users_browser`
--
ALTER TABLE `users_browser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blotter`
--
ALTER TABLE `blotter`
  ADD CONSTRAINT `blotter_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `docreq`
--
ALTER TABLE `docreq`
  ADD CONSTRAINT `docreq_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users_browser`
--
ALTER TABLE `users_browser`
  ADD CONSTRAINT `users_browser_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
