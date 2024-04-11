-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2022 at 07:52 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driverbharat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `a_id` int(10) NOT NULL,
  `a_fn` varchar(15) NOT NULL,
  `a_ln` varchar(15) NOT NULL,
  `a_phone` varchar(20) NOT NULL,
  `a_pass` varchar(255) NOT NULL,
  `a_mail` varchar(30) DEFAULT NULL,
  `a_role` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`a_id`, `a_fn`, `a_ln`, `a_phone`, `a_pass`, `a_mail`, `a_role`) VALUES
(1, 'Mihir', 'Gopani', '7878765502', '21232f297a57a5a743894a0e4a801fc3', 'mihirgopani2002@gmail.com', 1),
(3, 'Devarsh', 'joshi', '8980823248', '21232f297a57a5a743894a0e4a801fc3', 'devarshjoshi2002@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `all_cities`
--

CREATE TABLE `all_cities` (
  `c_id` int(11) NOT NULL,
  `city_name` text DEFAULT NULL,
  `city_code` text DEFAULT NULL,
  `state_code` text DEFAULT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_cities`
--

INSERT INTO `all_cities` (`c_id`, `city_name`, `city_code`, `state_code`, `role`) VALUES
(1, 'Alipur', '101', '1', 1),
(2, 'Andaman Island', '102', '1', 1),
(3, 'Anderson Island', '103', '1', 1),
(4, 'Arainj-Laka-Punga', '104', '1', 1),
(5, 'Austinabad', '105', '1', 1),
(6, 'Bamboo Flat', '106', '1', 1),
(7, 'Barren Island', '107', '1', 1),
(8, 'Beadonabad', '108', '1', 1),
(9, 'Betapur', '109', '1', 1),
(10, 'Bindraban', '110', '1', 1),
(11, 'Bonington', '111', '1', 1),
(12, 'Brookesabad', '112', '1', 1),
(13, 'Cadell Point', '113', '1', 1),
(14, 'Calicut', '114', '1', 1),
(15, 'Chetamale', '115', '1', 1),
(16, 'Cinque Islands', '116', '1', 1),
(17, 'Defence Island', '117', '1', 1),
(18, 'Digilpur', '118', '1', 1),
(19, 'Dolyganj', '119', '1', 1),
(20, 'Flat Island', '120', '1', 1),
(21, 'Geinyale', '121', '1', 1),
(22, 'Great Coco Island', '122', '1', 1),
(23, 'Haddo', '123', '1', 1),
(24, 'Havelock Island', '124', '1', 1),
(25, 'Henry Lawrence Island', '125', '1', 1),
(26, 'Herbertabad', '126', '1', 1),
(27, 'Hobdaypur', '127', '1', 1),
(28, 'Ilichar', '128', '1', 1),
(29, 'Ingoie', '128', '1', 1),
(30, 'Inteview Island', '130', '1', 1),
(31, 'Jangli Ghat', '131', '1', 1),
(32, 'Jhon Lawrence Island', '132', '1', 1),
(33, 'Karen', '133', '1', 1),
(34, 'Kartara', '134', '1', 1),
(35, 'KYD Islannd', '135', '1', 1),
(36, 'Landfall Island', '136', '1', 1),
(37, 'Little Andmand', '137', '1', 1),
(38, 'Little Coco Island', '138', '1', 1),
(39, 'Long Island', '138', '1', 1),
(40, 'Maimyo', '140', '1', 1),
(41, 'Malappuram', '141', '1', 1),
(42, 'Manglutan', '142', '1', 1),
(43, 'Manpur', '143', '1', 1),
(44, 'Mitha Khari', '144', '1', 1),
(45, 'Neill Island', '145', '1', 1),
(46, 'Nicobar Island', '146', '1', 1),
(47, 'North Brother Island', '147', '1', 1),
(48, 'North Passage Island', '148', '1', 1),
(49, 'North Sentinel Island', '149', '1', 1),
(50, 'Nothen Reef Island', '150', '1', 1),
(51, 'Outram Island', '151', '1', 1),
(52, 'Pahlagaon', '152', '1', 1),
(53, 'Palalankwe', '153', '1', 1),
(54, 'Passage Island', '154', '1', 1),
(55, 'Phaiapong', '155', '1', 1),
(56, 'Phoenix Island', '156', '1', 1),
(57, 'Port Blair', '157', '1', 1),
(58, 'Preparis Island', '158', '1', 1),
(59, 'Protheroepur', '159', '1', 1),
(60, 'Rangachang', '160', '1', 1),
(61, 'Rongat', '161', '1', 1),
(62, 'Rutland Island', '162', '1', 1),
(63, 'Sabari', '163', '1', 1),
(64, 'Saddle Peak', '164', '1', 1),
(65, 'Shadipur', '165', '1', 1),
(66, 'Smith Island', '166', '1', 1),
(67, 'Sound Island', '167', '1', 1),
(68, 'South Sentinel Island', '168', '1', 1),
(69, 'Spike Island', '169', '1', 1),
(70, 'Tarmugli Island', '170', '1', 1),
(71, 'Taylerabad', '171', '1', 1),
(72, 'Titaije', '172', '1', 1),
(73, 'Toibalawe', '173', '1', 1),
(74, 'Tusonabad', '174', '1', 1),
(75, 'West Island', '175', '1', 1),
(76, 'Wimberleyganj', '176', '1', 1),
(77, 'Yadita', '177', '1', 1),
(78, 'Adilabad', '201', '2', 0),
(79, 'Anantapur', '201', '2', 0),
(80, 'Chittoor', '203', '2', 0),
(81, 'Cuddapah', '204', '2', 0),
(82, 'East Godavari', '205', '2', 0),
(83, 'Guntur', '206', '2', 0),
(84, 'Hyderabad', '207', '2', 0),
(85, 'Karimnagar', '208', '2', 0),
(86, 'Khammam', '209', '2', 1),
(87, 'Krishna', '210', '2', 1),
(88, 'Kurnool', '211', '2', 0),
(89, 'Mahabubnagar', '212', '2', 0),
(90, 'Medak', '213', '2', 0),
(91, 'Nalgonda', '214', '2', 0),
(92, 'Nellore', '215', '2', 0),
(93, 'Nizamabad', '216', '2', 0),
(94, 'Prakasam', '217', '2', 0),
(95, 'Rangareddy', '218', '2', 0),
(96, 'Srikakulam', '219', '2', 0),
(97, 'Visakhapatnam', '220', '2', 0),
(98, 'Vizianagaram', '221', '2', 0),
(99, 'Warangal', '222', '2', 0),
(100, 'West Godavari', '223', '2', 0),
(101, 'Anjaw', '301', '3', 0),
(102, 'Changlang', '302', '3', 0),
(103, 'Dibang Valley', '303', '3', 0),
(104, 'East Kameng', '304', '3', 0),
(105, 'East Siang', '305', '3', 0),
(106, 'Itanagar', '306', '3', 0),
(107, 'Kurung Kumey', '307', '3', 0),
(108, 'Lohit', '308', '3', 0),
(109, 'Lower Dibang Valley', '309', '3', 0),
(110, 'Lower Subansiri', '310', '3', 0),
(111, 'Papum Pare', '311', '3', 0),
(112, 'Tawang', '312', '3', 0),
(113, 'Tirap', '313', '3', 0),
(114, 'Upper Siang', '314', '3', 0),
(115, 'Upper Subansiri', '315', '3', 0),
(116, 'West Kameng', '316', '3', 0),
(117, 'West Siang', '317', '3', 0),
(118, 'Barpeta', '401', '4', 0),
(119, 'Bongaigaon', '402', '4', 0),
(120, 'Cachar', '403', '4', 0),
(121, 'Darrang', '404', '4', 0),
(122, 'Dhemaji', '405', '4', 0),
(123, 'Dhubri', '406', '4', 0),
(124, 'Dibrugarh', '407', '4', 0),
(125, 'Goalpara', '408', '4', 0),
(126, 'Golaghat', '409', '4', 0),
(127, 'Guwahati', '410', '4', 0),
(128, 'Hailakandi', '411', '4', 0),
(129, 'Jorhat', '412', '4', 0),
(130, 'Kamrup', '413', '4', 0),
(131, 'Karbi Anglong', '414', '4', 0),
(132, 'Karimganj', '415', '4', 0),
(133, 'Kokrajhar', '416', '4', 0),
(134, 'Lakhimpur', '417', '4', 0),
(135, 'Marigaon', '418', '4', 0),
(136, 'Nagaon', '419', '4', 0),
(137, 'Nalbari', '420', '4', 0),
(138, 'North Cachar Hills', '421', '4', 0),
(139, 'Silchar', '422', '4', 0),
(140, 'Sivasagar', '423', '4', 0),
(141, 'Sonitpur', '424', '4', 0),
(142, 'Tinsukia', '425', '4', 0),
(143, 'Udalguri', '426', '4', 0),
(144, 'Araria', '501', '5', 0),
(145, 'Aurangabad', '502', '5', 0),
(146, 'Banka', '503', '5', 0),
(147, 'Begusarai', '504', '5', 0),
(148, 'Bhagalpur', '505', '5', 0),
(149, 'Bhojpur', '506', '5', 0),
(150, 'Buxar', '507', '5', 0),
(151, 'Darbhanga', '508', '5', 0),
(152, 'East Champaran', '509', '5', 0),
(153, 'Gaya', '510', '5', 0),
(154, 'Gopalganj', '511', '5', 0),
(155, 'Jamshedpur', '512', '5', 0),
(156, 'Jamui', '513', '5', 0),
(157, 'Jehanabad', '514', '5', 0),
(158, 'Kaimur (Bhabua)', '515', '5', 0),
(159, 'Katihar', '516', '5', 0),
(160, 'Khagaria', '517', '5', 0),
(161, 'Kishanganj', '518', '5', 0),
(162, 'Lakhisarai', '519', '5', 0),
(163, 'Madhepura', '520', '5', 0),
(164, 'Madhubani', '521', '5', 0),
(165, 'Munger', '522', '5', 0),
(166, 'Muzaffarpur', '523', '5', 0),
(167, 'Nalanda', '524', '5', 0),
(168, 'Nawada', '525', '5', 0),
(169, 'Patna', '526', '5', 0),
(170, 'Purnia', '527', '5', 0),
(171, 'Rohtas', '528', '5', 0),
(172, 'Saharsa', '529', '5', 0),
(173, 'Samastipur', '530', '5', 0),
(174, 'Saran', '531', '5', 0),
(175, 'Sheikhpura', '532', '5', 0),
(176, 'Sheohar', '533', '5', 0),
(177, 'Sitamarhi', '534', '5', 0),
(178, 'Siwan', '535', '5', 0),
(179, 'Supaul', '536', '5', 0),
(180, 'Vaishali', '537', '5', 0),
(181, 'West Champaran', '538', '5', 0),
(182, 'Adilabad', '201', '2', 0),
(183, 'Anantapur', '201', '2', 0),
(184, 'Chittoor', '203', '2', 0),
(185, 'Cuddapah', '204', '2', 0),
(186, 'East Godavari', '205', '2', 0),
(187, 'Guntur', '206', '2', 0),
(188, 'Hyderabad', '207', '2', 0),
(189, 'Karimnagar', '208', '2', 0),
(190, 'Khammam', '209', '2', 1),
(191, 'Krishna', '210', '2', 1),
(192, 'Kurnool', '211', '2', 0),
(193, 'Mahabubnagar', '212', '2', 0),
(194, 'Medak', '213', '2', 0),
(195, 'Nalgonda', '214', '2', 0),
(196, 'Nellore', '215', '2', 0),
(197, 'Nizamabad', '216', '2', 0),
(198, 'Prakasam', '217', '2', 0),
(199, 'Rangareddy', '218', '2', 0),
(200, 'Srikakulam', '219', '2', 0),
(201, 'Visakhapatnam', '220', '2', 0),
(202, 'Vizianagaram', '221', '2', 0),
(203, 'Warangal', '222', '2', 0),
(204, 'West Godavari', '223', '2', 0),
(205, 'Anjaw', '301', '3', 0),
(206, 'Changlang', '302', '3', 0),
(207, 'Dibang Valley', '303', '3', 0),
(208, 'East Kameng', '304', '3', 0),
(209, 'East Siang', '305', '3', 0),
(210, 'Itanagar', '306', '3', 0),
(211, 'Kurung Kumey', '307', '3', 0),
(212, 'Lohit', '308', '3', 0),
(213, 'Lower Dibang Valley', '309', '3', 0),
(214, 'Lower Subansiri', '310', '3', 0),
(215, 'Papum Pare', '311', '3', 0),
(216, 'Tawang', '312', '3', 0),
(217, 'Tirap', '313', '3', 0),
(218, 'Upper Siang', '314', '3', 0),
(219, 'Upper Subansiri', '315', '3', 0),
(220, 'West Kameng', '316', '3', 0),
(221, 'West Siang', '317', '3', 0),
(222, 'Barpeta', '401', '4', 0),
(223, 'Bongaigaon', '402', '4', 0),
(224, 'Cachar', '403', '4', 0),
(225, 'Darrang', '404', '4', 0),
(226, 'Dhemaji', '405', '4', 0),
(227, 'Dhubri', '406', '4', 0),
(228, 'Dibrugarh', '407', '4', 0),
(229, 'Goalpara', '408', '4', 0),
(230, 'Golaghat', '409', '4', 0),
(231, 'Guwahati', '410', '4', 0),
(232, 'Hailakandi', '411', '4', 0),
(233, 'Jorhat', '412', '4', 0),
(234, 'Kamrup', '413', '4', 0),
(235, 'Karbi Anglong', '414', '4', 0),
(236, 'Karimganj', '415', '4', 0),
(237, 'Kokrajhar', '416', '4', 0),
(238, 'Lakhimpur', '417', '4', 0),
(239, 'Marigaon', '418', '4', 0),
(240, 'Nagaon', '419', '4', 0),
(241, 'Nalbari', '420', '4', 0),
(242, 'North Cachar Hills', '421', '4', 0),
(243, 'Silchar', '422', '4', 0),
(244, 'Sivasagar', '423', '4', 0),
(245, 'Sonitpur', '424', '4', 0),
(246, 'Tinsukia', '425', '4', 0),
(247, 'Udalguri', '426', '4', 0),
(248, 'Araria', '501', '5', 0),
(249, 'Aurangabad', '502', '5', 0),
(250, 'Banka', '503', '5', 0),
(251, 'Begusarai', '504', '5', 0),
(252, 'Bhagalpur', '505', '5', 0),
(253, 'Bhojpur', '506', '5', 0),
(254, 'Buxar', '507', '5', 0),
(255, 'Darbhanga', '508', '5', 0),
(256, 'East Champaran', '509', '5', 0),
(257, 'Gaya', '510', '5', 0),
(258, 'Gopalganj', '511', '5', 0),
(259, 'Jamshedpur', '512', '5', 0),
(260, 'Jamui', '513', '5', 0),
(261, 'Jehanabad', '514', '5', 0),
(262, 'Kaimur (Bhabua)', '515', '5', 0),
(263, 'Katihar', '516', '5', 0),
(264, 'Khagaria', '517', '5', 0),
(265, 'Kishanganj', '518', '5', 0),
(266, 'Lakhisarai', '519', '5', 0),
(267, 'Madhepura', '520', '5', 0),
(268, 'Madhubani', '521', '5', 0),
(269, 'Munger', '522', '5', 0),
(270, 'Muzaffarpur', '523', '5', 0),
(271, 'Nalanda', '524', '5', 0),
(272, 'Nawada', '525', '5', 0),
(273, 'Patna', '526', '5', 0),
(274, 'Purnia', '527', '5', 0),
(275, 'Rohtas', '528', '5', 0),
(276, 'Saharsa', '529', '5', 0),
(277, 'Samastipur', '530', '5', 0),
(278, 'Saran', '531', '5', 0),
(279, 'Sheikhpura', '532', '5', 0),
(280, 'Sheohar', '533', '5', 0),
(281, 'Sitamarhi', '534', '5', 0),
(282, 'Siwan', '535', '5', 0),
(283, 'Supaul', '536', '5', 0),
(284, 'Vaishali', '537', '5', 0),
(285, 'West Champaran', '538', '5', 0),
(286, 'Chandigarh', '601', '6', 0),
(287, 'Mani Marja', '602', '6', 0),
(288, 'Bastar', '701', '7', 0),
(289, 'Bhilai', '702', '7', 0),
(290, 'Bijapur', '703', '7', 0),
(291, 'Bilaspur', '704', '7', 0),
(292, 'Dhamtari', '705', '7', 0),
(293, 'Durg', '706', '7', 0),
(294, 'Janjgir-Champa', '707', '7', 0),
(295, 'Jashpur', '708', '7', 0),
(296, 'Kabirdham-Kawardha', '709', '7', 0),
(297, 'Korba', '710', '7', 0),
(298, 'Korea', '711', '7', 0),
(299, 'Mahasamund', '712', '7', 0),
(300, 'Narayanpur', '713', '7', 0),
(301, 'Norh Bastar-Kanker', '714', '7', 0),
(302, 'Raigarh', '715', '7', 0),
(303, 'Raipur', '716', '7', 0),
(304, 'Rajnandgaon', '717', '7', 0),
(305, 'South Bastar-Dantewada', '718', '7', 0),
(306, 'Surguja', '719', '7', 0),
(307, 'Amal', '801', '8', 0),
(308, 'Amli', '802', '8', 0),
(309, 'Bedpa', '803', '8', 0),
(310, 'Chikhli', '804', '8', 0),
(311, 'Dadra & Nagar Haveli', '805', '8', 0),
(312, 'Dahikhed', '806', '8', 0),
(313, 'Dolara', '807', '8', 0),
(314, 'Galonda', '808', '8', 0),
(315, 'Kanadi', '809', '8', 0),
(316, 'Karchond', '810', '8', 0),
(317, 'Khadoli', '811', '8', 0),
(318, 'Kharadpada', '812', '8', 0),
(319, 'Kherabari', '813', '8', 0),
(320, 'Kherdi', '814', '8', 0),
(321, 'Kothar', '815', '8', 0),
(322, 'Luari', '816', '8', 0),
(323, 'Mashat', '817', '8', 0),
(324, 'Rakholi', '818', '8', 0),
(325, 'Rudana', '819', '8', 0),
(326, 'Saili', '820', '8', 0),
(327, 'Sili', '821', '8', 0),
(328, 'Silvassa', '822', '8', 0),
(329, 'Sindavni', '823', '8', 0),
(330, 'Udva', '824', '8', 0),
(331, 'Umbarkoi', '825', '8', 0),
(332, 'Vansda', '826', '8', 0),
(333, 'Vasona', '827', '8', 0),
(334, 'Velugam', '828', '8', 0),
(335, 'Brancavare', '901', '9', 0),
(336, 'Dagasi', '902', '9', 0),
(337, 'Daman', '903', '9', 0),
(338, 'Diu', '904', '9', 0),
(339, 'Magarvara', '905', '9', 0),
(340, 'Nagwa', '906', '9', 0),
(341, 'Pariali', '907', '9', 0),
(342, 'Passo Covo', '908', '9', 0),
(343, 'Central Delhi', '1001', '10', 0),
(344, 'East Delhi', '1002', '10', 0),
(345, 'New Delhi', '1003', '10', 0),
(346, 'North Delhi', '1004', '10', 0),
(347, 'North East Delhi', '1005', '10', 0),
(348, 'North West Delhi', '1006', '10', 0),
(349, 'Old Delhi', '1007', '10', 0),
(350, 'South Delhi', '1008', '10', 0),
(351, 'South West Delhi', '1009', '10', 0),
(352, 'West Delhi', '1010', '10', 0),
(353, 'Canacona', '1101', '11', 0),
(354, 'Candolim', '1102', '11', 0),
(355, 'Chinchinim', '1103', '11', 0),
(356, 'Cortalim', '1104', '11', 0),
(357, 'Goa', '1105', '11', 0),
(358, 'Jua', '1106', '11', 0),
(359, 'Madgaon', '1107', '11', 0),
(360, 'Mahem', '1108', '11', 0),
(361, 'Mapuca', '1109', '11', 0),
(362, 'Marmagao', '1110', '11', 0),
(363, 'Panji', '1111', '11', 0),
(364, 'Ponda', '1112', '11', 0),
(365, 'Sanvordem', '1113', '11', 0),
(366, 'Terekhol', '1114', '11', 0),
(367, 'Ahmedabad', '1201', '12', 1),
(368, 'Amreli', '1202', '12', 1),
(369, 'Anand', '1203', '12', 1),
(370, 'Banaskantha', '1204', '12', 1),
(371, 'Baroda', '1205', '12', 1),
(372, 'Bharuch', '1206', '12', 1),
(373, 'Bhavnagar', '1207', '12', 1),
(374, 'Dahod', '1208', '12', 1),
(375, 'Dang', '1209', '12', 1),
(376, 'Dwarka', '1210', '12', 1),
(377, 'Gandhinagar', '1211', '12', 1),
(378, 'Jamnagar', '1212', '12', 1),
(379, 'Junagadh', '1213', '12', 1),
(380, 'Kheda', '1214', '12', 1),
(381, 'Kutch', '1215', '12', 1),
(382, 'Mehsana', '1216', '12', 1),
(383, 'Nadiad', '1217', '12', 1),
(384, 'Narmada', '1218', '12', 1),
(385, 'Navsari', '1219', '12', 1),
(386, 'Panchmahals', '1220', '12', 1),
(387, 'Patan', '1221', '12', 1),
(388, 'Porbandar', '1222', '12', 1),
(389, 'Rajkot', '1223', '12', 1),
(390, 'Sabarkantha', '1224', '12', 1),
(391, 'Surat', '1225', '12', 1),
(392, 'Surendranagar', '1226', '12', 1),
(393, 'Vadodara', '1227', '12', 1),
(394, 'Valsad', '1228', '12', 1),
(395, 'Vapi', '1229', '12', 1),
(396, 'Ambala', '1301', '13', 0),
(397, 'Bhiwani', '1302', '13', 0),
(398, 'Faridabad', '1303', '13', 0),
(399, 'Fatehabad', '1304', '13', 0),
(400, 'Gurgaon', '1305', '13', 0),
(401, 'Hisar', '1306', '13', 0),
(402, 'Jhajjar', '1307', '13', 0),
(403, 'Jind', '1308', '13', 0),
(404, 'Kaithal', '1309', '13', 0),
(405, 'Karnal', '1310', '13', 0),
(406, 'Kurukshetra', '1311', '13', 0),
(407, 'Mahendragarh', '1312', '13', 0),
(408, 'Mewat', '1313', '13', 0),
(409, 'Panchkula', '1314', '13', 0),
(410, 'Panipat', '1315', '13', 0),
(411, 'Rewari', '1316', '13', 0),
(412, 'Rohtak', '1317', '13', 0),
(413, 'Sirsa', '1318', '13', 0),
(414, 'Sonipat', '1319', '13', 0),
(415, 'Yamunanagar', '1320', '13', 0),
(416, 'Bilaspur', '1401', '14', 0),
(417, 'Chamba', '1402', '14', 0),
(418, 'Dalhousie', '1403', '14', 0),
(419, 'Hamirpur', '1404', '14', 0),
(420, 'Kangra', '1405', '14', 0),
(421, 'Kinnaur', '1406', '14', 0),
(422, 'Kullu', '1407', '14', 0),
(423, 'Lahaul & Spiti', '1408', '14', 0),
(424, 'Mandi', '1409', '14', 0),
(425, 'Shimla', '1410', '14', 0),
(426, 'Sirmaur', '1411', '14', 0),
(427, 'Solan', '1412', '14', 0),
(428, 'Una', '1413', '14', 0),
(429, 'Anantnag', '1501', '15', 0),
(430, 'Baramulla', '1502', '15', 0),
(431, 'Budgam', '1503', '15', 0),
(432, 'Doda', '1504', '15', 0),
(433, 'Jammu', '1505', '15', 0),
(434, 'Kargil', '1506', '15', 0),
(435, 'Kathua', '1507', '15', 0),
(436, 'Kupwara', '1508', '15', 0),
(437, 'Leh', '1509', '15', 0),
(438, 'Poonch', '1510', '15', 0),
(439, 'Pulwama', '1511', '15', 0),
(440, 'Rajauri', '1512', '15', 0),
(441, 'Srinagar', '1513', '15', 0),
(442, 'Udhampur', '1514', '15', 0),
(443, 'Bokaro', '1601', '16', 0),
(444, 'Chatra', '1602', '16', 0),
(445, 'Deoghar', '1603', '16', 0),
(446, 'Dhanbad', '1604', '16', 0),
(447, 'Dumka', '1605', '16', 0),
(448, 'East Singhbhum', '1606', '16', 0),
(449, 'Garhwa', '1607', '16', 0),
(450, 'Giridih', '1608', '16', 0),
(451, 'Godda', '1609', '16', 0),
(452, 'Gumla', '1610', '16', 0),
(453, 'Hazaribag', '1611', '16', 0),
(454, 'Jamtara', '1612', '16', 0),
(455, 'Koderma', '1613', '16', 0),
(456, 'Latehar', '1614', '16', 0),
(457, 'Lohardaga', '1615', '16', 0),
(458, 'Pakur', '1616', '16', 0),
(459, 'Palamu', '1617', '16', 0),
(460, 'Ranchi', '1618', '16', 0),
(461, 'Sahibganj', '1619', '16', 0),
(462, 'Seraikela', '1620', '16', 0),
(463, 'Simdega', '1621', '16', 0),
(464, 'West Singhbhum', '1622', '16', 0),
(465, 'Bagalkot', '1701', '17', 0),
(466, 'Bangalore', '1702', '17', 0),
(467, 'Bangalore Rural', '1703', '17', 0),
(468, 'Belgaum', '1704', '17', 0),
(469, 'Bellary', '1705', '17', 0),
(470, 'Bhatkal', '1706', '17', 0),
(471, 'Bidar', '1707', '17', 0),
(472, 'Bijapur', '1708', '17', 0),
(473, 'Chamrajnagar', '1709', '17', 0),
(474, 'Chickmagalur', '1710', '17', 0),
(475, 'Chikballapur', '1711', '17', 0),
(476, 'Chitradurga', '1712', '17', 0),
(477, 'Dakshina Kannada', '1713', '17', 0),
(478, 'Davanagere', '1714', '17', 0),
(479, 'Dharwad', '1715', '17', 0),
(480, 'Gadag', '1716', '17', 0),
(481, 'Gulbarga', '1717', '17', 0),
(482, 'Hampi', '1718', '17', 0),
(483, 'Hassan', '1719', '17', 0),
(484, 'Haveri', '1720', '17', 0),
(485, 'Hospet', '1721', '17', 0),
(486, 'Karwar', '1722', '17', 0),
(487, 'Kodagu', '1723', '17', 0),
(488, 'Kolar', '1724', '17', 0),
(489, 'Koppal', '1725', '17', 0),
(490, 'Madikeri', '1726', '17', 0),
(491, 'Mandya', '1727', '17', 0),
(492, 'Mangalore', '1728', '17', 0),
(493, 'Manipal', '1729', '17', 0),
(494, 'Mysore', '1730', '17', 0),
(495, 'Raichur', '1731', '17', 0),
(496, 'Shimoga', '1732', '17', 0),
(497, 'Sirsi', '1733', '17', 0),
(498, 'Sringeri', '1734', '17', 0),
(499, 'Srirangapatna', '1735', '17', 0),
(500, 'Tumkur', '1736', '17', 0),
(501, 'Udupi', '1737', '17', 0),
(502, 'Uttara Kannada', '1738', '17', 0),
(503, 'Alappuzha', '1801', '18', 0),
(504, 'Alleppey', '1802', '18', 0),
(505, 'Alwaye', '1803', '18', 0),
(506, 'Ernakulam', '1804', '18', 0),
(507, 'Idukki', '1805', '18', 0),
(508, 'Kannur', '1806', '18', 0),
(509, 'Kasargod', '1807', '18', 0),
(510, 'Kochi', '1808', '18', 0),
(511, 'Kollam', '1809', '18', 0),
(512, 'Kottayam', '1810', '18', 0),
(513, 'Kovalam', '1811', '18', 0),
(514, 'Kozhikode', '1812', '18', 0),
(515, 'Malappuram', '1813', '18', 0),
(516, 'Palakkad', '1814', '18', 0),
(517, 'Pathanamthitta', '1815', '18', 0),
(518, 'Perumbavoor', '1816', '18', 0),
(519, 'Thiruvananthapuram', '1817', '18', 0),
(520, 'Thrissur', '1818', '18', 0),
(521, 'Trichur', '1819', '18', 0),
(522, 'Trivandrum', '1820', '18', 0),
(523, 'Wayanad', '1821', '18', 0),
(524, 'Agatti Island', '1901', '19', 0),
(525, 'Bingaram Island', '1902', '19', 0),
(526, 'Bitra Island', '1903', '19', 0),
(527, 'Chetlat Island', '1904', '19', 0),
(528, 'Kadmat Island', '1905', '19', 0),
(529, 'Kalpeni Island', '1906', '19', 0),
(530, 'Kavaratti Island', '1907', '19', 0),
(531, 'Kiltan Island', '1908', '19', 0),
(532, 'Lakshadweep Sea', '1909', '19', 0),
(533, 'Minicoy Island', '1910', '19', 0),
(534, 'North Island', '1911', '19', 0),
(535, 'South Island', '1912', '19', 0),
(536, 'Anuppur', '2001', '20', 0),
(537, 'Ashoknagar', '2002', '20', 0),
(538, 'Balaghat', '2003', '20', 0),
(539, 'Barwani', '2004', '20', 0),
(540, 'Betul', '2005', '20', 0),
(541, 'Bhind', '2006', '20', 0),
(542, 'Bhopal', '2007', '20', 0),
(543, 'Burhanpur', '2008', '20', 0),
(544, 'Chhatarpur', '2009', '20', 0),
(545, 'Chhindwara', '2010', '20', 0),
(546, 'Damoh', '2011', '20', 0),
(547, 'Datia', '2012', '20', 0),
(548, 'Dewas', '2013', '20', 0),
(549, 'Dhar', '2014', '20', 0),
(550, 'Dindori', '2015', '20', 0),
(551, 'Guna', '2016', '20', 0),
(552, 'Gwalior', '2017', '20', 0),
(553, 'Harda', '2018', '20', 0),
(554, 'Hoshangabad', '2019', '20', 0),
(555, 'Indore', '2020', '20', 0),
(556, 'Jabalpur', '2021', '20', 0),
(557, 'Jagdalpur', '2022', '20', 0),
(558, 'Jhabua', '2023', '20', 0),
(559, 'Katni', '2024', '20', 0),
(560, 'Khandwa', '2025', '20', 0),
(561, 'Khargone', '2026', '20', 0),
(562, 'Mandla', '2027', '20', 0),
(563, 'Mandsaur', '2028', '20', 0),
(564, 'Morena', '2029', '20', 0),
(565, 'Narsinghpur', '2030', '20', 0),
(566, 'Neemuch', '2031', '20', 0),
(567, 'Panna', '2032', '20', 0),
(568, 'Raisen', '2033', '20', 0),
(569, 'Rajgarh', '2034', '20', 0),
(570, 'Ratlam', '2035', '20', 0),
(571, 'Rewa', '2036', '20', 0),
(572, 'Sagar', '2037', '20', 0),
(573, 'Satna', '2038', '20', 0),
(574, 'Sehore', '2039', '20', 0),
(575, 'Seoni', '2040', '20', 0),
(576, 'Shahdol', '2041', '20', 0),
(577, 'Shajapur', '2042', '20', 0),
(578, 'Sheopur', '2043', '20', 0),
(579, 'Shivpuri', '2044', '20', 0),
(580, 'Sidhi', '2045', '20', 0),
(581, 'Tikamgarh', '2046', '20', 0),
(582, 'Ujjain', '2047', '20', 0),
(583, 'Umaria', '2048', '20', 0),
(584, 'Vidisha', '2049', '20', 0),
(585, 'Ahmednagar', '2101', '21', 0),
(586, 'Akola', '2102', '21', 0),
(587, 'Amravati', '2103', '21', 0),
(588, 'Aurangabad', '2104', '21', 0),
(589, 'Beed', '2105', '21', 0),
(590, 'Bhandara', '2106', '21', 0),
(591, 'Buldhana', '2107', '21', 0),
(592, 'Chandrapur', '2108', '21', 0),
(593, 'Dhule', '2109', '21', 0),
(594, 'Gadchiroli', '2110', '21', 0),
(595, 'Gondia', '2111', '21', 0),
(596, 'Hingoli', '2112', '21', 0),
(597, 'Jalgaon', '2113', '21', 0),
(598, 'Jalna', '2114', '21', 0),
(599, 'Kolhapur', '2115', '21', 0),
(600, 'Latur', '2116', '21', 0),
(601, 'Mahabaleshwar', '2117', '21', 0),
(602, 'Mumbai', '2118', '21', 0),
(603, 'Mumbai City', '2119', '21', 0),
(604, 'Mumbai Suburban', '2120', '21', 0),
(605, 'Nagpur', '2121', '21', 0),
(606, 'Nanded', '2122', '21', 0),
(607, 'Nandurbar', '2123', '21', 0),
(608, 'Nashik', '2124', '21', 0),
(609, 'Osmanabad', '2125', '21', 0),
(610, 'Parbhani', '2126', '21', 0),
(611, 'Pune', '2127', '21', 0),
(612, 'Raigad', '2128', '21', 0),
(613, 'Ratnagiri', '2129', '21', 0),
(614, 'Sangli', '2130', '21', 0),
(615, 'Satara', '2131', '21', 0),
(616, 'Sholapur', '2132', '21', 0),
(617, 'Sindhudurg', '2133', '21', 0),
(618, 'Thane', '2134', '21', 0),
(619, 'Wardha', '2135', '21', 0),
(620, 'Washim', '2136', '21', 0),
(621, 'Yavatmal', '2137', '21', 0),
(622, 'Bishnupur', '2201', '22', 0),
(623, 'Chandel', '2202', '22', 0),
(624, 'Churachandpur', '2203', '22', 0),
(625, 'Imphal East', '2204', '22', 0),
(626, 'Imphal West', '2205', '22', 0),
(627, 'Senapati', '2206', '22', 0),
(628, 'Tamenglong', '2207', '22', 0),
(629, 'Thoubal', '2208', '22', 0),
(630, 'Ukhrul', '2209', '22', 0),
(631, 'East Garo Hills', '2301', '23', 0),
(632, 'East Khasi Hills', '2302', '23', 0),
(633, 'Jaintia Hills', '2303', '23', 0),
(634, 'Ri Bhoi', '2304', '23', 0),
(635, 'Shillong', '2305', '23', 0),
(636, 'South Garo Hills', '2306', '23', 0),
(637, 'West Garo Hills', '2307', '23', 0),
(638, 'West Khasi Hills', '2308', '23', 0),
(639, 'Aizawl', '2401', '24', 0),
(640, 'Champhai', '2402', '24', 0),
(641, 'Kolasib', '2403', '24', 0),
(642, 'Lawngtlai', '2404', '24', 0),
(643, 'Lunglei', '2405', '24', 0),
(644, 'Mamit', '2406', '24', 0),
(645, 'Saiha', '2407', '24', 0),
(646, 'Serchhip', '2408', '24', 0),
(647, 'Dimapur', '2501', '25', 0),
(648, 'Kohima', '2502', '25', 0),
(649, 'Mokokchung', '2503', '25', 0),
(650, 'Mon', '2504', '25', 0),
(651, 'Phek', '2505', '25', 0),
(652, 'Tuensang', '2506', '25', 0),
(653, 'Wokha', '2507', '25', 0),
(654, 'Zunheboto', '2508', '25', 0),
(655, 'Angul', '2601', '26', 0),
(656, 'Balangir', '2602', '26', 0),
(657, 'Balasore', '2603', '26', 0),
(658, 'Baleswar', '2604', '26', 0),
(659, 'Bargarh', '2605', '26', 0),
(660, 'Berhampur', '2606', '26', 0),
(661, 'Bhadrak', '2607', '26', 0),
(662, 'Bhubaneswar', '2608', '26', 0),
(663, 'Boudh', '2609', '26', 0),
(664, 'Cuttack', '2610', '26', 0),
(665, 'Deogarh', '2611', '26', 0),
(666, 'Dhenkanal', '2612', '26', 0),
(667, 'Gajapati', '2613', '26', 0),
(668, 'Ganjam', '2614', '26', 0),
(669, 'Jagatsinghapur', '2615', '26', 0),
(670, 'Jajpur', '2616', '26', 0),
(671, 'Jharsuguda', '2617', '26', 0),
(672, 'Kalahandi', '2618', '26', 0),
(673, 'Kandhamal', '2619', '26', 0),
(674, 'Kendrapara', '2620', '26', 0),
(675, 'Kendujhar', '2621', '26', 0),
(676, 'Khordha', '2622', '26', 0),
(677, 'Koraput', '2623', '26', 0),
(678, 'Malkangiri', '2624', '26', 0),
(679, 'Mayurbhanj', '2625', '26', 0),
(680, 'Nabarangapur', '2626', '26', 0),
(681, 'Nayagarh', '2627', '26', 0),
(682, 'Nuapada', '2628', '26', 0),
(683, 'Puri', '2629', '26', 0),
(684, 'Rayagada', '2630', '26', 0),
(685, 'Rourkela', '2631', '26', 0),
(686, 'Sambalpur', '2632', '26', 0),
(687, 'Subarnapur', '2633', '26', 0),
(688, 'Sundergarh', '2634', '26', 0),
(689, 'Bahur', '2701', '27', 0),
(690, 'Karaikal', '2701', '27', 0),
(691, 'Mahe', '2701', '27', 0),
(692, 'Pondicherry', '2701', '27', 0),
(693, 'Purnankuppam', '2701', '27', 0),
(694, 'Valudavur', '2701', '27', 0),
(695, 'Villianur', '2701', '27', 0),
(696, 'Yanam', '2701', '27', 0),
(697, 'Amritsar', '2801', '28', 0),
(698, 'Barnala', '2801', '28', 0),
(699, 'Bathinda', '2801', '28', 0),
(700, 'Faridkot', '2801', '28', 0),
(701, 'Fatehgarh Sahib', '2801', '28', 0),
(702, 'Ferozepur', '2801', '28', 0),
(703, 'Gurdaspur', '2801', '28', 0),
(704, 'Hoshiarpur', '2801', '28', 0),
(705, 'Jalandhar', '2801', '28', 0),
(706, 'Kapurthala', '2801', '28', 0),
(707, 'Ludhiana', '2801', '28', 0),
(708, 'Mansa', '2801', '28', 0),
(709, 'Moga', '2801', '28', 0),
(710, 'Muktsar', '2801', '28', 0),
(711, 'Nawanshahr', '2801', '28', 0),
(712, 'Pathankot', '2801', '28', 0),
(713, 'Patiala', '2801', '28', 0),
(714, 'Rupnagar', '2801', '28', 0),
(715, 'Sangrur', '2801', '28', 0),
(716, 'SAS Nagar', '2801', '28', 0),
(717, 'Tarn Taran', '2801', '28', 0),
(718, 'Ajmer', '2901', '29', 0),
(719, 'Alwar', '2902', '29', 0),
(720, 'Banswara', '2903', '29', 0),
(721, 'Baran', '2904', '29', 0),
(722, 'Barmer', '2905', '29', 0),
(723, 'Bharatpur', '2906', '29', 0),
(724, 'Bhilwara', '2907', '29', 0),
(725, 'Bikaner', '2908', '29', 0),
(726, 'Bundi', '2909', '29', 0),
(727, 'Chittorgarh', '2910', '29', 0),
(728, 'Churu', '2911', '29', 0),
(729, 'Dausa', '2912', '29', 0),
(730, 'Dholpur', '2913', '29', 0),
(731, 'Dungarpur', '2914', '29', 0),
(732, 'Hanumangarh', '2915', '29', 0),
(733, 'Jaipur', '2916', '29', 0),
(734, 'Jaisalmer', '2917', '29', 0),
(735, 'Jalore', '2918', '29', 0),
(736, 'Jhalawar', '2919', '29', 0),
(737, 'Jhunjhunu', '2920', '29', 0),
(738, 'Jodhpur', '2921', '29', 0),
(739, 'Karauli', '2922', '29', 0),
(740, 'Kota', '2923', '29', 0),
(741, 'Nagaur', '2924', '29', 0),
(742, 'Pali', '2925', '29', 0),
(743, 'Pilani', '2926', '29', 0),
(744, 'Rajsamand', '2927', '29', 0),
(745, 'Sawai Madhopur', '2928', '29', 0),
(746, 'Sikar', '2929', '29', 0),
(747, 'Sirohi', '2930', '29', 0),
(748, 'Sri Ganganagar', '2931', '29', 0),
(749, 'Tonk', '2932', '29', 0),
(750, 'Udaipur', '2933', '29', 0),
(751, 'Barmiak', '3001', '30', 0),
(752, 'Be', '3002', '30', 0),
(753, 'Bhurtuk', '3003', '30', 0),
(754, 'Chhubakha', '3004', '30', 0),
(755, 'Chidam', '3005', '30', 0),
(756, 'Chubha', '3006', '30', 0),
(757, 'Chumikteng', '3007', '30', 0),
(758, 'Dentam', '3008', '30', 0),
(759, 'Dikchu', '3009', '30', 0),
(760, 'Dzongri', '3010', '30', 0),
(761, 'Gangtok', '3011', '30', 0),
(762, 'Gauzing', '3012', '30', 0),
(763, 'Gyalshing', '3013', '30', 0),
(764, 'Hema', '3014', '30', 0),
(765, 'Kerung', '3015', '30', 0),
(766, 'Lachen', '3016', '30', 0),
(767, 'Lachung', '3017', '30', 0),
(768, 'Lema', '3018', '30', 0),
(769, 'Lingtam', '3019', '30', 0),
(770, 'Lungthu', '3020', '30', 0),
(771, 'Mangan', '3021', '30', 0),
(772, 'Namchi', '3022', '30', 0),
(773, 'Namthang', '3023', '30', 0),
(774, 'Nanga', '3024', '30', 0),
(775, 'Nantang', '3025', '30', 0),
(776, 'Naya Bazar', '3026', '30', 0),
(777, 'Padamachen', '3027', '30', 0),
(778, 'Pakhyong', '3028', '30', 0),
(779, 'Pemayangtse', '3029', '30', 0),
(780, 'Phensang', '3030', '30', 0),
(781, 'Rangli', '3031', '30', 0),
(782, 'Rinchingpong', '3032', '30', 0),
(783, 'Sakyong', '3033', '30', 0),
(784, 'Samdong', '3034', '30', 0),
(785, 'Singtam', '3035', '30', 0),
(786, 'Siniolchu', '3035', '30', 0),
(787, 'Sombari', '3036', '30', 0),
(788, 'Soreng', '3037', '30', 0),
(789, 'Sosing', '3038', '30', 0),
(790, 'Tekhug', '3039', '30', 0),
(791, 'Temi', '3040', '30', 0),
(792, 'Tsetang', '3041', '30', 0),
(793, 'Tsomgo', '3042', '30', 0),
(794, 'Tumlong', '3043', '30', 0),
(795, 'Yangang', '3044', '30', 0),
(796, 'Yumtang', '3045', '30', 0),
(797, 'Chennai', '3101', '31', 0),
(798, 'Chidambaram', '3102', '31', 0),
(799, 'Chingleput', '3103', '31', 0),
(800, 'Coimbatore', '3104', '31', 0),
(801, 'Courtallam', '3105', '31', 0),
(802, 'Cuddalore', '3106', '31', 0),
(803, 'Dharmapuri', '3107', '31', 0),
(804, 'Dindigul', '3108', '31', 0),
(805, 'Erode', '3109', '31', 0),
(806, 'Hosur', '3110', '31', 0),
(807, 'Kanchipuram', '3111', '31', 0),
(808, 'Kanyakumari', '3112', '31', 0),
(809, 'Karaikudi', '3113', '31', 0),
(810, 'Karur', '3114', '31', 0),
(811, 'Kodaikanal', '3115', '31', 0),
(812, 'Kovilpatti', '3116', '31', 0),
(813, 'Krishnagiri', '3117', '31', 0),
(814, 'Kumbakonam', '3118', '31', 0),
(815, 'Madurai', '3119', '31', 0),
(816, 'Mayiladuthurai', '3120', '31', 0),
(817, 'Nagapattinam', '3121', '31', 0),
(818, 'Nagarcoil', '3122', '31', 0),
(819, 'Namakkal', '3123', '31', 0),
(820, 'Neyveli', '3124', '31', 0),
(821, 'Nilgiris', '3125', '31', 0),
(822, 'Ooty', '3126', '31', 0),
(823, 'Palani', '3127', '31', 0),
(824, 'Perambalur', '3128', '31', 0),
(825, 'Pollachi', '3129', '31', 0),
(826, 'Pudukkottai', '3130', '31', 0),
(827, 'Rajapalayam', '3131', '31', 0),
(828, 'Ramanathapuram', '3132', '31', 0),
(829, 'Salem', '3133', '31', 0),
(830, 'Sivaganga', '3134', '31', 0),
(831, 'Sivakasi', '3135', '31', 0),
(832, 'Thanjavur', '3136', '31', 0),
(833, 'Theni', '3137', '31', 0),
(834, 'Thoothukudi', '3138', '31', 0),
(835, 'Tiruchirappalli', '3139', '31', 0),
(836, 'Tirunelveli', '3140', '31', 0),
(837, 'Tirupur', '3141', '31', 0),
(838, 'Tiruvallur', '3142', '31', 0),
(839, 'Tiruvannamalai', '3143', '31', 0),
(840, 'Tiruvarur', '3144', '31', 0),
(841, 'Trichy', '3145', '31', 0),
(842, 'Tuticorin', '3146', '31', 0),
(843, 'Vellore', '3147', '31', 0),
(844, 'Villupuram', '3148', '31', 0),
(845, 'Virudhunagar', '3149', '31', 0),
(846, 'Yercaud', '3150', '31', 0),
(847, 'Agartala', '3201', '32', 0),
(848, 'Ambasa', '3202', '32', 0),
(849, 'Bampurbari', '3203', '32', 0),
(850, 'Belonia', '3204', '32', 0),
(851, 'Dhalai', '3205', '32', 0),
(852, 'Dharam Nagar', '3206', '32', 0),
(853, 'Kailashahar', '3207', '32', 0),
(854, 'Kamal Krishnabari', '3208', '32', 0),
(855, 'Khopaiyapara', '3209', '32', 0),
(856, 'Khowai', '3210', '32', 0),
(857, 'Phuldungsei', '3211', '32', 0),
(858, 'Radha Kishore Pur', '3212', '32', 0),
(859, 'Tripura', '3213', '32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking_db`
--

CREATE TABLE `booking_db` (
  `b_id` int(10) NOT NULL,
  `b_date` date NOT NULL,
  `u_id` int(10) DEFAULT NULL,
  `u_name` varchar(100) NOT NULL,
  `d_id` int(10) DEFAULT NULL,
  `d_name` varchar(30) NOT NULL,
  `b_amount` int(5) DEFAULT NULL,
  `t_id` varchar(255) NOT NULL,
  `d_number` bigint(12) NOT NULL,
  `u_number` bigint(15) NOT NULL,
  `d_mail` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `shedule_date` date NOT NULL,
  `o_id` varchar(30) NOT NULL,
  `u_address` varchar(100) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_db`
--

INSERT INTO `booking_db` (`b_id`, `b_date`, `u_id`, `u_name`, `d_id`, `d_name`, `b_amount`, `t_id`, `d_number`, `u_number`, `d_mail`, `city`, `state`, `shedule_date`, `o_id`, `u_address`, `status`) VALUES
(1, '2022-04-02', 1, 'Mihir Gopani', 1, 'Tarun parmar', 800, 'TRANS869979', 7439721863, 7878765502, 'tarunparmar1998@gmail.com', '1201', '12', '2022-04-05', 'ORD766003886', 'b-18 mayurpark society near vallabh park near dcabin sabarmati 380019', 1),
(2, '2022-04-02', 1, 'Mihir Gopani', NULL, '', 3500, 'TRANS2554487', 0, 7878765502, '', '1201', '12', '2022-04-05', 'ORD554175945', 'b-18 mayurpark society near vallabh park near dcabin sabarmati 380019', 0),
(3, '2022-04-02', 1, 'Mihir Gopani', 1, 'Tarun Parmar', 13000, 'TRANS5862663', 7439721983, 7878765502, 'tarunparmar1998@gmail.com', '1201', '12', '2022-04-07', 'ORD514272584', 'b-18 mayurpark society near vallabh park near dcabin sabarmati 380019', 1),
(4, '2022-04-19', 1, 'Mihir Gopani', NULL, '', 800, 'TRANS711450', 0, 7878765502, '', '1201', '12', '2022-04-21', 'ORD49695459', 'b-18 mayurpark society near vallabh park near dcabin sabarmati', 0),
(5, '2022-04-20', 1, 'Mihir Gopani', 1, 'Tarun Parmar', 800, 'TRANS4644944', 7439721983, 7878765502, 'tarunparmar1998@gmail.com', '1201', '12', '2022-04-22', 'ORD794175762', 'b-18 mayurpark society near vallabh park near dcabin sabarmati', 1),
(6, '2022-04-20', 5, 'joshi devarsh', 1, 'Tarun Parmar', 800, 'TRANS2818006', 7439721983, 7878745506, 'tarunparmar1998@gmail.com', '1201', '12', '2022-04-22', 'ORD934420284', 'b-18 mayurpark society', 1),
(7, '2022-04-20', 5, 'joshi devarsh', NULL, '', 13000, 'TRANS7561333', 0, 7878745506, '', '1201', '12', '2022-04-23', 'ORD427826239', 'b-18 mayurpark society', 0),
(8, '2022-05-02', 1, 'Mihir Gopani', 1, 'Tarun Parmar', 3500, 'TRANS8037023', 7439721983, 7878765502, 'tarunparmar1998@gmail.com', '1201', '12', '2022-05-04', 'ORD242721746', 'b-18 mayurpark society near vallabh park near dcabin sabarmati', 1),
(9, '2022-05-19', 1, 'Mihir Gopani', 1, 'Tarun Parmar', 800, 'TRANS6800837', 7439721983, 7878765502, 'tarunparmar1998@gmail.com', '1201', '12', '2022-05-25', 'ORD3770145', 'b-18 mayurpark society near vallabh park near dcabin sabarmati', 1),
(10, '2022-08-07', 6, 'Mihir gopani', 4, 'Bhautic Chavada', 800, 'TRANS8679557', 8756942898, 7878787878, 'bhautic7549@gmail.com', '1201', '12', '2022-08-09', 'ORD922448864', 'hhh', 1),
(11, '2022-08-07', 6, 'Mihir gopani', NULL, '', 13000, 'TRANS5060418', 0, 7878787878, '', '1201', '12', '2022-08-09', 'ORD919999708', 'hhh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `complaint_db`
--

CREATE TABLE `complaint_db` (
  `cmp_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `d_id` int(15) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `o_id` varchar(50) NOT NULL,
  `u_mail` varchar(30) NOT NULL,
  `complaint` varchar(100) NOT NULL,
  `cmp_date` date NOT NULL DEFAULT current_timestamp(),
  `reply` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint_db`
--

INSERT INTO `complaint_db` (`cmp_id`, `u_id`, `u_name`, `d_id`, `d_name`, `o_id`, `u_mail`, `complaint`, `cmp_date`, `reply`, `status`) VALUES
(1, 1, 'Mihir Gopani', 1, 'Tarun parmar', 'ORD766003886', 'mihirgopani@gmail.com', 'here we show complaint', '2022-04-03', 'Reply done', 1),
(2, 1, 'Mihir Gopani', 1, 'Tarun parmar', 'ORD766003886', 'mihirgopani@gmail.com', 'i dont like this\r\n', '2022-04-08', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_db`
--

CREATE TABLE `contact_db` (
  `id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_mail` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_db`
--

INSERT INTO `contact_db` (`id`, `u_id`, `u_name`, `u_mail`, `detail`, `date`) VALUES
(1, 1, 'Mihir Gopani', 'mihirgopani@gmail.com', 'qqqqqqqqqqqqqqqqq', '2022-04-04'),
(2, 6, 'Mihir gopani', 'mih@gmail.com', 'hello\r\n', '2022-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `d-reactive`
--

CREATE TABLE `d-reactive` (
  `id` int(10) NOT NULL,
  `d_fn` varchar(50) NOT NULL,
  `d_ln` varchar(50) NOT NULL,
  `d_mail` varchar(100) NOT NULL,
  `d_phone` bigint(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `driverpersonal_db`
--

CREATE TABLE `driverpersonal_db` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_mail` varchar(100) NOT NULL,
  `d_cnt` bigint(10) NOT NULL,
  `licence` varchar(50) NOT NULL,
  `pancard` varchar(10) NOT NULL,
  `adharcard` bigint(12) NOT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `account_name` varchar(255) DEFAULT '',
  `account_no` varchar(20) DEFAULT NULL,
  `join_date` date NOT NULL DEFAULT '2022-06-04'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driverpersonal_db`
--

INSERT INTO `driverpersonal_db` (`d_id`, `d_name`, `d_mail`, `d_cnt`, `licence`, `pancard`, `adharcard`, `bank_name`, `account_name`, `account_no`, `join_date`) VALUES
(1, 'Tarun Parmar', 'tarunparmar1998@gmail.com', 7439721983, 'GJ01/1563456/2017', 'DFRAN7753H', 487528947615, 'kotak mahindra bank', 'Tarun parmar', '7851789548317658', '2022-03-17'),
(3, 'Mohit Vaja', 'vajamohit@gmail.com', 9016784328, 'GJ12/7518964/2020', 'GQJDG1486B', 434786815976, NULL, NULL, NULL, '2022-03-17'),
(4, 'Ronak Dabhi', 'dbhironak@gmail.com', 6359366363, 'GJ01/0007654/2002', 'EFPVM0158N', 487596257618, 'kotak mahindra bank', 'Tarun parmar', '7851789548317658', '2022-06-04'),
(6, 'Dhaval Rajput', 'dhavalrajput1999@gmail.com', 8128235152, 'GJ14/7594286/2018', 'AUFPD8657K', 468237951865, 'kotak mahindra bank', 'Tarun parmar', '7851789548317658', '2022-06-04'),
(7, 'Bhautic Chavada', 'bhautic7549@gmail.com', 8756942898, 'GJ01/7518964/2020', 'DUJPA0345N', 789468593496, 'bank of mihir', 'mihir', '1111111111222222', '2022-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `drivers_db`
--

CREATE TABLE `drivers_db` (
  `d_id` int(10) NOT NULL,
  `d_fn` varchar(15) DEFAULT NULL,
  `d_ln` varchar(15) DEFAULT NULL,
  `d_mail` varchar(30) DEFAULT NULL,
  `d_cnt` bigint(10) NOT NULL,
  `d_gender` char(6) NOT NULL,
  `d_pass` varchar(255) NOT NULL,
  `d_add` varchar(500) NOT NULL,
  `d_state` varchar(30) NOT NULL,
  `d_city` varchar(30) NOT NULL,
  `licence_no` varchar(25) NOT NULL,
  `d_adharcard` bigint(12) DEFAULT NULL,
  `d_pancard` varchar(10) DEFAULT NULL,
  `d_role` int(2) NOT NULL DEFAULT 1,
  `ride` int(2) NOT NULL DEFAULT 0,
  `pic` varchar(255) NOT NULL,
  `nextdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers_db`
--

INSERT INTO `drivers_db` (`d_id`, `d_fn`, `d_ln`, `d_mail`, `d_cnt`, `d_gender`, `d_pass`, `d_add`, `d_state`, `d_city`, `licence_no`, `d_adharcard`, `d_pancard`, `d_role`, `ride`, `pic`, `nextdate`) VALUES
(1, 'Tarun', 'Parmar', 'tarunparmar1998@gmail.com', 7439721983, 'male', 'ee11cbb19052e40b07aac0ca060c23ee', 'b-18 mayurpark near vallabhpark dcabin sabarmati ahmedabad', '12', '1201', 'GJ01/1563456/2017', 487528947615, 'DFRAN7753H', 1, 0, 'pictures/trading.jpg', '2022-05-25'),
(2, 'Ronak', 'Dabhi', 'dbhironak@gmail.com', 6359366363, 'male', '21232f297a57a5a743894a0e4a801fc3', '', '12', '1201', 'GJ01/0007654/2002', 487596257618, 'EFPVM0158N', 1, 1, '', '0000-00-00'),
(3, 'Mohit', 'Vaja', 'vajamohit@gmail.com', 9016784328, 'male', '21232f297a57a5a743894a0e4a801fc3', '', '12', '1212', 'GJ12/7518964/2020', 434786815976, 'GQJDG1486B', 0, 0, '', '0000-00-00'),
(4, 'Bhautic', 'Chavada', 'bhautic7549@gmail.com', 8756942898, 'male', '25603f465e5f1bb27633c288ed479d0f', '', '12', '1201', 'GJ01/7518964/2020', 789468593496, 'DUJPA0345N', 1, 0, '', '2022-08-09'),
(5, 'Dhaval', 'Rajput', 'dhavalrajput1999@gmail.com', 8128235152, 'male', '21232f297a57a5a743894a0e4a801fc3', '', '12', '1214', 'GJ14/7594286/2018', 468237951865, 'AUFPD8657K', 1, 0, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `d_reactive`
--

CREATE TABLE `d_reactive` (
  `id` int(10) NOT NULL,
  `d_fn` varchar(50) NOT NULL,
  `d_ln` varchar(50) NOT NULL,
  `d_mail` varchar(100) NOT NULL,
  `d_phone` bigint(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_db`
--

CREATE TABLE `feedback_db` (
  `f_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `d_id` int(15) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `o_id` varchar(50) DEFAULT NULL,
  `sheduled_date` date NOT NULL,
  `f_date` date NOT NULL,
  `f_rating` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_db`
--

INSERT INTO `feedback_db` (`f_id`, `u_id`, `u_name`, `d_id`, `d_name`, `o_id`, `sheduled_date`, `f_date`, `f_rating`) VALUES
(1, 1, 'Mihir Gopani', 1, 'Tarun parmar', 'ORD766003886', '2022-04-05', '2022-04-03', '5'),
(3, 6, 'Mihir gopani', 4, 'Bhautic Chavada', 'ORD922448864', '2022-08-09', '2022-08-07', '5');

-- --------------------------------------------------------

--
-- Table structure for table `max`
--

CREATE TABLE `max` (
  `id` int(10) NOT NULL,
  `p_date` date NOT NULL,
  `o_id` varchar(255) NOT NULL,
  `u_id` varchar(15) NOT NULL,
  `shedule_date` date NOT NULL,
  `p_amount` int(5) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `t_id` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `max`
--

INSERT INTO `max` (`id`, `p_date`, `o_id`, `u_id`, `shedule_date`, `p_amount`, `p_name`, `t_id`, `city`, `state`, `status`) VALUES
(1, '2022-04-02', 'ORD514272584', '1', '2022-04-07', 13000, 'Max', 'TRANS5862663', '1201', '12', 1),
(2, '2022-04-20', 'ORD427826239', '5', '2022-04-23', 13000, 'Max', 'TRANS7561333', '1201', '12', 0),
(3, '2022-08-07', 'ORD919999708', '6', '2022-08-09', 13000, 'Max', 'TRANS5060418', '1201', '12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mini`
--

CREATE TABLE `mini` (
  `id` int(10) NOT NULL,
  `p_date` date NOT NULL,
  `o_id` varchar(255) NOT NULL,
  `u_id` varchar(10) NOT NULL,
  `shedule_date` date NOT NULL,
  `p_amount` int(5) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `t_id` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini`
--

INSERT INTO `mini` (`id`, `p_date`, `o_id`, `u_id`, `shedule_date`, `p_amount`, `p_name`, `t_id`, `city`, `state`, `status`) VALUES
(1, '2022-04-02', 'ORD766003886', '1', '2022-04-05', 800, 'Mini', 'TRANS869979', '1201', '12', 1),
(2, '2022-04-19', 'ORD49695459', '1', '2022-04-21', 800, 'Mini', 'TRANS711450', '1201', '12', 0),
(3, '2022-04-20', 'ORD794175762', '1', '2022-04-22', 800, 'Mini', 'TRANS4644944', '1201', '12', 1),
(4, '2022-04-20', 'ORD934420284', '5', '2022-04-22', 800, 'Mini', 'TRANS2818006', '1201', '12', 1),
(5, '2022-05-19', 'ORD3770145', '1', '2022-05-25', 800, 'Mini', 'TRANS6800837', '1201', '12', 1),
(6, '2022-08-07', 'ORD922448864', '6', '2022-08-09', 800, 'Mini', 'TRANS8679557', '1201', '12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `normal`
--

CREATE TABLE `normal` (
  `id` int(10) NOT NULL,
  `p_date` date NOT NULL,
  `o_id` varchar(255) NOT NULL,
  `u_id` varchar(15) NOT NULL,
  `shedule_date` date NOT NULL,
  `p_amount` int(5) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `t_id` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `normal`
--

INSERT INTO `normal` (`id`, `p_date`, `o_id`, `u_id`, `shedule_date`, `p_amount`, `p_name`, `t_id`, `city`, `state`, `status`) VALUES
(1, '2022-04-02', 'ORD554175945', '1', '2022-04-05', 3500, 'Normal', 'TRANS2554487', '1201', '12', 0),
(2, '2022-05-02', 'ORD242721746', '1', '2022-05-04', 3500, 'Normal', 'TRANS8037023', '1201', '12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_db`
--

CREATE TABLE `payment_db` (
  `p_id` int(10) NOT NULL,
  `p_date` date DEFAULT NULL,
  `o_id` varchar(255) DEFAULT NULL,
  `u_id` varchar(10) DEFAULT NULL,
  `shedule_date` date NOT NULL,
  `p_amount` int(5) DEFAULT NULL,
  `p_name` varchar(30) NOT NULL,
  `t_id` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `u_add` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reactive`
--

CREATE TABLE `reactive` (
  `id` int(11) NOT NULL,
  `u_fn` varchar(50) NOT NULL,
  `u_ln` varchar(50) NOT NULL,
  `u_mail` varchar(100) NOT NULL,
  `u_phone` bigint(10) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `state_list`
--

CREATE TABLE `state_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `state` varchar(50) NOT NULL,
  `role` int(2) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_list`
--

INSERT INTO `state_list` (`id`, `state`, `role`) VALUES
(1, 'ANDAMAN AND NICOBAR ISLANDS', 1),
(2, 'ANDHRA PRADESH', 1),
(3, 'ARUNACHAL PRADESH', 1),
(4, 'ASSAM', 1),
(5, 'BIHAR', 1),
(6, 'CHATTISGARH', 1),
(7, 'CHANDIGARH', 1),
(8, 'DAMAN AND DIU', 1),
(9, 'DELHI', 1),
(10, 'DADRA AND NAGAR HAVELI', 1),
(11, 'GOA', 1),
(12, 'GUJARAT', 1),
(13, 'HIMACHAL PRADESH', 1),
(14, 'HARYANA', 1),
(15, 'JAMMU AND KASHMIR', 1),
(16, 'JHARKHAND', 1),
(17, 'KERALA', 1),
(18, 'KARNATAKA', 1),
(19, 'LAKSHADWEEP', 1),
(20, 'MEGHALAYA', 1),
(21, 'MAHARASHTRA', 1),
(22, 'MANIPUR', 1),
(23, 'MADHYA PRADESH', 1),
(24, 'MIZORAM', 1),
(25, 'NAGALAND', 1),
(26, 'ORISSA', 1),
(27, 'PUNJAB', 1),
(28, 'PONDICHERRY', 1),
(29, 'RAJASTHAN', 1),
(30, 'SIKKIM', 1),
(31, 'TAMIL NADU', 1),
(32, 'TRIPURA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE `user_db` (
  `u_id` int(10) NOT NULL,
  `u_fn` varchar(15) NOT NULL,
  `u_ln` varchar(15) NOT NULL,
  `u_mail` varchar(30) NOT NULL,
  `u_contact` varchar(10) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_gender` varchar(10) DEFAULT NULL,
  `u_add` text DEFAULT NULL,
  `u_city` varchar(30) DEFAULT NULL,
  `u_state` varchar(30) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `u_role` int(2) NOT NULL DEFAULT 1,
  `pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`u_id`, `u_fn`, `u_ln`, `u_mail`, `u_contact`, `u_pass`, `u_gender`, `u_add`, `u_city`, `u_state`, `join_date`, `u_role`, `pic`) VALUES
(1, 'Mihir', 'Gopani', 'mihirgopani@gmail.com', '7878765502', '21232f297a57a5a743894a0e4a801fc3', 'male', 'b-18 mayurpark society near vallabh park near dcabin sabarmati', '1201', '12', '2022-03-21', 1, 'pictures/login background.jpg'),
(2, 'Rajin', 'mansuri', 'rajin9558@gmail.com', '9558046101', '21232f297a57a5a743894a0e4a801fc3', 'male', NULL, '1201', '12', '2022-03-21', 1, NULL),
(3, 'Aatif', 'Saikh', 'saikhaatif125@gmail.com', '7874751856', '21232f297a57a5a743894a0e4a801fc3', 'male', NULL, '1201', '12', '2022-03-21', 0, NULL),
(4, 'Raj', 'Dave', 'rajdave2001@gmail.com', '7990176851', '21232f297a57a5a743894a0e4a801fc3', 'male', NULL, '1201', '12', '2022-03-23', 1, NULL),
(5, 'joshi', 'devarsh', 'joshi@gmail.com', '7878745506', '21232f297a57a5a743894a0e4a801fc3', 'male', 'b-18 mayurpark society', '1201', '12', '2022-04-20', 1, 'pictures/trading.jpg'),
(6, 'Mihir', 'gopani', 'mih@gmail.com', '7878787878', '25603f465e5f1bb27633c288ed479d0f', 'male', 'hhh', '1201', '12', '2022-08-07', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `all_cities`
--
ALTER TABLE `all_cities`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `booking_db`
--
ALTER TABLE `booking_db`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `complaint_db`
--
ALTER TABLE `complaint_db`
  ADD PRIMARY KEY (`cmp_id`);

--
-- Indexes for table `contact_db`
--
ALTER TABLE `contact_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `d-reactive`
--
ALTER TABLE `d-reactive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driverpersonal_db`
--
ALTER TABLE `driverpersonal_db`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `drivers_db`
--
ALTER TABLE `drivers_db`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `d_reactive`
--
ALTER TABLE `d_reactive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_db`
--
ALTER TABLE `feedback_db`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `max`
--
ALTER TABLE `max`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mini`
--
ALTER TABLE `mini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normal`
--
ALTER TABLE `normal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_db`
--
ALTER TABLE `payment_db`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `reactive`
--
ALTER TABLE `reactive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_list`
--
ALTER TABLE `state_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `all_cities`
--
ALTER TABLE `all_cities`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=860;

--
-- AUTO_INCREMENT for table `booking_db`
--
ALTER TABLE `booking_db`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `complaint_db`
--
ALTER TABLE `complaint_db`
  MODIFY `cmp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_db`
--
ALTER TABLE `contact_db`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `d-reactive`
--
ALTER TABLE `d-reactive`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driverpersonal_db`
--
ALTER TABLE `driverpersonal_db`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `drivers_db`
--
ALTER TABLE `drivers_db`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `d_reactive`
--
ALTER TABLE `d_reactive`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback_db`
--
ALTER TABLE `feedback_db`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `max`
--
ALTER TABLE `max`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mini`
--
ALTER TABLE `mini`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `normal`
--
ALTER TABLE `normal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_db`
--
ALTER TABLE `payment_db`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `reactive`
--
ALTER TABLE `reactive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_db`
--
ALTER TABLE `user_db`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_db`
--
ALTER TABLE `booking_db`
  ADD CONSTRAINT `booking_db_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user_db` (`u_id`),
  ADD CONSTRAINT `booking_db_ibfk_2` FOREIGN KEY (`d_id`) REFERENCES `drivers_db` (`d_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
