-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 03:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ttyazilim`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `ID` int(11) NOT NULL,
  `BANK_NAME` varchar(2000) COLLATE utf8mb4_bin NOT NULL,
  `DEPARTMENT_NO` int(11) NOT NULL,
  `ACCOUNT_NAME` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `ACCOUNT_NO` int(11) NOT NULL,
  `IBAN` varchar(26) COLLATE utf8mb4_bin NOT NULL,
  `PROCESS_DATE` datetime NOT NULL DEFAULT current_timestamp(),
  `ACTIVE` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`ID`, `BANK_NAME`, `DEPARTMENT_NO`, `ACCOUNT_NAME`, `ACCOUNT_NO`, `IBAN`, `PROCESS_DATE`, `ACTIVE`) VALUES
(1, 'Ziraat Bankası', 252, 'Tunahan Çakıl', 11215, 'TR014547100084878711111', '2020-05-18 22:58:14', 1),
(2, 'Halk Bankası', 114, 'Tunahan Çakıl', 1515, 'TR15616546546546546465', '2020-05-18 22:58:48', 1);

-- --------------------------------------------------------

--
-- Table structure for table `card_note`
--

CREATE TABLE `card_note` (
  `ID` int(11) NOT NULL,
  `MESSAGE` text COLLATE utf8mb4_bin NOT NULL,
  `CATEGORY` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `ORDERS` int(11) NOT NULL DEFAULT 0,
  `ACTIVE` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `card_note`
--

INSERT INTO `card_note` (`ID`, `MESSAGE`, `CATEGORY`, `ORDERS`, `ACTIVE`) VALUES
(7, 'Seni Seviyorum.', 'Sevgililer Günü', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(11) NOT NULL,
  `TIME_FORMAT` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `STATUS` tinyint(1) NOT NULL DEFAULT 0,
  `URL` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `TITLE` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `DESCRIPTION` varchar(5000) COLLATE utf8mb4_bin NOT NULL,
  `NOT_DELIVERY` date DEFAULT NULL,
  `MAIN_PAGE` tinyint(1) NOT NULL DEFAULT 1,
  `ROW_ORDER` int(11) NOT NULL,
  `IMAGE` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `IS_MAIN` tinyint(1) NOT NULL DEFAULT 0,
  `PROCESS_DATE` datetime NOT NULL DEFAULT current_timestamp(),
  `ACTIVE` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `TIME_FORMAT`, `STATUS`, `URL`, `TITLE`, `DESCRIPTION`, `NOT_DELIVERY`, `MAIN_PAGE`, `ROW_ORDER`, `IMAGE`, `IS_MAIN`, `PROCESS_DATE`, `ACTIVE`) VALUES
(7, 'BETWEEN', 1, '', 'Güller', '<p>Kırmızı G<b>üller</b></p>', NULL, 1, 0, NULL, 1, '2020-05-27 01:22:56', 1),
(8, 'BETWEEN', 1, '', 'Lilyumlar', '<p>Lilyumlar Beyaz</p>', NULL, 1, 0, NULL, 1, '2020-05-27 04:02:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `PRODUCT_ID` int(5) NOT NULL,
  `CATEGORY_ID` int(5) NOT NULL,
  `IS_MAIN` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`PRODUCT_ID`, `CATEGORY_ID`, `IS_MAIN`) VALUES
(52, 7, 0),
(52, 7, 1),
(53, 7, 0),
(53, 8, 0),
(53, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `ID` int(11) NOT NULL,
  `CITY_NAME` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `ACTIVE` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ID`, `CITY_NAME`, `ACTIVE`) VALUES
(1, 'Adana', 0),
(2, 'Adıyaman', 0),
(3, 'Afyonkarahisar', 0),
(4, 'Ağrı', 0),
(5, 'Amasya', 0),
(6, 'Ankara', 0),
(7, 'Antalya', 0),
(8, 'Artvin', 0),
(9, 'Aydın', 0),
(10, 'Balıkesir', 0),
(11, 'Bilecik', 0),
(12, 'Bingöl', 0),
(13, 'Bitlis', 0),
(14, 'Bolu', 0),
(15, 'Burdur', 0),
(16, 'Bursa', 0),
(17, 'Çanakkale', 0),
(18, 'Çankırı', 0),
(19, 'Çorum', 0),
(20, 'Denizli', 0),
(21, 'Diyarbakır', 0),
(22, 'Edirne', 0),
(23, 'Elâzığ', 0),
(24, 'Erzincan', 0),
(25, 'Erzurum', 0),
(26, 'Eskişehir', 0),
(27, 'Gaziantep', 0),
(28, 'Giresun', 0),
(29, 'Gümüşhane', 0),
(30, 'Hakkâri', 0),
(31, 'Hatay', 0),
(32, 'Isparta', 0),
(33, 'Mersin', 0),
(34, 'İstanbul', 1),
(35, 'İzmir', 0),
(36, 'Kars', 0),
(37, 'Kastamonu', 0),
(38, 'Kayseri', 0),
(39, 'Kırklareli', 0),
(40, 'Kırşehir', 0),
(41, 'Kocaeli', 0),
(42, 'Konya', 0),
(43, 'Kütahya', 0),
(44, 'Malatya', 0),
(45, 'Manisa', 0),
(46, 'Kahramanmaraş', 0),
(47, 'Mardin', 0),
(48, 'Muğla', 0),
(49, 'Muş', 0),
(50, 'Nevşehir', 0),
(51, 'Niğde', 0),
(52, 'Ordu', 0),
(53, 'Rize', 0),
(54, 'Sakarya', 0),
(55, 'Samsun', 0),
(56, 'Siirt', 0),
(57, 'Sinop', 0),
(58, 'Sivas', 0),
(59, 'Tekirdağ', 0),
(60, 'Tokat', 0),
(61, 'Trabzon', 0),
(62, 'Tunceli', 0),
(63, 'Şanlıurfa', 0),
(64, 'Uşak', 0),
(65, 'Van', 0),
(66, 'Yozgat', 0),
(67, 'Zonguldak', 0),
(68, 'Aksaray', 0),
(69, 'Bayburt', 0),
(70, 'Karaman', 0),
(71, 'Kırıkkale', 0),
(72, 'Batman', 0),
(73, 'Şırnak', 0),
(74, 'Bartın', 0),
(75, 'Ardahan', 0),
(76, 'Iğdır', 0),
(77, 'Yalova', 0),
(78, 'Karabük', 0),
(79, 'Kilis', 0),
(80, 'Osmaniye', 0),
(81, 'Düzce', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `ID` int(11) NOT NULL,
  `COMMENT` varchar(2000) COLLATE utf8mb4_bin NOT NULL,
  `PRODUCT_ID` int(11) NOT NULL,
  `MEMBER_ID` int(11) NOT NULL,
  `STATUS` tinyint(1) NOT NULL DEFAULT 0,
  `PROCESS_DATE` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`ID`, `COMMENT`, `PRODUCT_ID`, `MEMBER_ID`, `STATUS`, `PROCESS_DATE`) VALUES
(3, 'ASD ', 7, 0, 1, '2020-05-01 00:08:00'),
(4, 'ASD', 7, 0, 1, '2020-05-01 00:07:00'),
(5, 'a', 7, 0, 0, '2020-05-01 23:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `ID` int(11) NOT NULL,
  `DISTRICT_NAME` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `PLATE_NO` int(11) NOT NULL,
  `TOLL_ROAD` int(11) NOT NULL,
  `ACTIVE` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`ID`, `DISTRICT_NAME`, `PLATE_NO`, `TOLL_ROAD`, `ACTIVE`) VALUES
(1, 'Abana', 37, 0, 1),
(2, 'Acıgöl', 50, 0, 1),
(3, 'Acıpayam', 20, 0, 1),
(4, 'Adaklı', 12, 0, 1),
(5, 'Adalar', 34, 0, 1),
(6, 'Adapazarı', 54, 0, 1),
(7, 'Adıyaman', 2, 0, 1),
(8, 'Adilcevaz', 13, 0, 1),
(9, 'Afşin', 46, 0, 1),
(10, 'Afyonkarahisar', 3, 0, 1),
(11, 'Ağaçören', 68, 0, 1),
(12, 'Ağın', 23, 0, 1),
(13, 'Ağlasun', 15, 0, 1),
(14, 'Ağlı', 37, 0, 1),
(15, 'Ağrı', 4, 0, 1),
(16, 'Ahırlı', 42, 0, 1),
(17, 'Ahlat', 13, 0, 1),
(18, 'Ahmetli', 45, 0, 1),
(19, 'Akçaabat', 61, 0, 1),
(20, 'Akçadağ', 44, 0, 1),
(21, 'Akçakale', 63, 0, 1),
(22, 'Akçakent', 40, 0, 1),
(23, 'Akçakoca', 81, 0, 1),
(24, 'Akdağmadeni', 66, 0, 1),
(25, 'Akdeniz', 33, 0, 1),
(26, 'Akhisar', 45, 0, 1),
(27, 'Akıncılar', 58, 0, 1),
(28, 'Akkışla', 38, 0, 1),
(29, 'Akkuş', 52, 0, 1),
(30, 'Akören', 42, 0, 1),
(31, 'Akpınar', 40, 0, 1),
(32, 'Aksaray', 68, 0, 1),
(33, 'Akseki', 7, 0, 1),
(34, 'Aksu', 7, 0, 1),
(35, 'Aksu', 32, 0, 1),
(36, 'Akşehir', 42, 0, 1),
(37, 'Akyaka', 36, 0, 1),
(38, 'Akyazı', 54, 0, 1),
(39, 'Akyurt', 6, 0, 1),
(40, 'Alaca', 19, 0, 1),
(41, 'Alacakaya', 23, 0, 1),
(42, 'Alaçam', 55, 0, 1),
(43, 'Aladağ', 1, 0, 1),
(44, 'Alanya', 7, 0, 1),
(45, 'Alaplı', 67, 0, 1),
(46, 'Alaşehir', 45, 0, 1),
(47, 'Aliağa', 35, 0, 1),
(48, 'Almus', 60, 0, 1),
(49, 'Alpu', 26, 0, 1),
(50, 'Altıeylül', 10, 0, 1),
(51, 'Altındağ', 6, 0, 1),
(52, 'Altınekin', 42, 0, 1),
(53, 'Altınordu', 52, 0, 1),
(54, 'Altınova', 77, 0, 1),
(55, 'Altınözü', 31, 0, 1),
(56, 'Altıntaş', 43, 0, 1),
(57, 'Altınyayla', 15, 0, 1),
(58, 'Altınyayla', 58, 0, 1),
(59, 'Altunhisar', 51, 0, 1),
(60, 'Alucra', 28, 0, 1),
(61, 'Amasra', 74, 0, 1),
(62, 'Amasya', 5, 0, 1),
(63, 'Anamur', 33, 0, 1),
(64, 'Andırın', 46, 0, 1),
(65, 'Antakya', 31, 0, 1),
(66, 'Araban', 27, 0, 1),
(67, 'Araç', 37, 0, 1),
(68, 'Araklı', 61, 0, 1),
(69, 'Aralık', 76, 0, 1),
(70, 'Arapgir', 44, 0, 1),
(71, 'Ardahan', 75, 0, 1),
(72, 'Ardanuç', 8, 0, 1),
(73, 'Ardeşen', 53, 0, 1),
(74, 'Arguvan', 44, 0, 1),
(75, 'Arhavi', 8, 0, 1),
(76, 'Arıcak', 23, 0, 1),
(77, 'Arifiye', 54, 0, 1),
(78, 'Armutlu', 77, 0, 1),
(79, 'Arnavutköy', 34, 0, 1),
(80, 'Arpaçay', 36, 0, 1),
(81, 'Arsin', 61, 0, 1),
(82, 'Arsuz', 31, 0, 1),
(83, 'Artova', 60, 0, 1),
(84, 'Artuklu', 47, 0, 1),
(85, 'Artvin', 8, 0, 1),
(86, 'Asarcık', 55, 0, 1),
(87, 'Aslanapa', 43, 0, 1),
(88, 'Aşkale', 25, 0, 1),
(89, 'Atabey', 32, 0, 1),
(90, 'Atakum', 55, 0, 1),
(91, 'Ataşehir', 34, 0, 1),
(92, 'Atkaracalar', 18, 0, 1),
(93, 'Avanos', 50, 0, 1),
(94, 'Avcılar', 34, 0, 1),
(95, 'Ayancık', 57, 0, 1),
(96, 'Ayaş', 6, 0, 1),
(97, 'Aybastı', 52, 0, 1),
(98, 'Aydıncık', 33, 0, 1),
(99, 'Aydıncık', 66, 0, 1),
(100, 'Aydıntepe', 69, 0, 1),
(101, 'Ayrancı', 70, 0, 1),
(102, 'Ayvacık', 17, 0, 1),
(103, 'Ayvacık', 55, 0, 1),
(104, 'Ayvalık', 10, 0, 1),
(105, 'Azdavay', 37, 0, 1),
(106, 'Aziziye', 25, 0, 1),
(107, 'Babadağ', 20, 0, 1),
(108, 'Babaeski', 39, 0, 1),
(109, 'Bafra', 55, 0, 1),
(110, 'Bağcılar', 34, 0, 1),
(111, 'Bağlar', 21, 0, 1),
(112, 'Bahçe', 80, 0, 1),
(113, 'Bahçelievler', 34, 0, 1),
(114, 'Bahçesaray', 65, 0, 1),
(115, 'Bahşili', 71, 0, 1),
(116, 'Bakırköy', 34, 0, 1),
(117, 'Baklan', 20, 0, 1),
(118, 'Bala', 6, 0, 1),
(119, 'Balçova', 35, 0, 1),
(120, 'Balışeyh', 71, 0, 1),
(121, 'Balya', 10, 0, 1),
(122, 'Banaz', 64, 0, 1),
(123, 'Bandırma', 10, 0, 1),
(124, 'Bartın', 74, 0, 1),
(125, 'Baskil', 23, 0, 1),
(126, 'Başakşehir', 34, 0, 1),
(127, 'Başçiftlik', 60, 0, 1),
(128, 'Başiskele', 41, 0, 1),
(129, 'Başkale', 65, 0, 1),
(130, 'Başmakçı', 3, 0, 1),
(131, 'Başyayla', 70, 0, 1),
(132, 'Batman', 72, 0, 1),
(133, 'Battalgazi', 44, 0, 1),
(134, 'Bayat', 3, 0, 1),
(135, 'Bayat', 19, 0, 1),
(136, 'Bayburt', 69, 0, 1),
(137, 'Bayındır', 35, 0, 1),
(138, 'Baykan', 56, 0, 1),
(139, 'Bayraklı', 35, 0, 1),
(140, 'Bayramiç', 17, 0, 1),
(141, 'Bayramören', 18, 0, 1),
(142, 'Bayrampaşa', 34, 0, 1),
(143, 'Bekilli', 20, 0, 1),
(144, 'Belen', 31, 0, 1),
(145, 'Bergama', 35, 0, 1),
(146, 'Besni', 2, 0, 1),
(147, 'Beşikdüzü', 61, 0, 1),
(148, 'Beşiktaş', 34, 0, 1),
(149, 'Beşiri', 72, 0, 1),
(150, 'Beyağaç', 20, 0, 1),
(151, 'Beydağ', 35, 0, 1),
(152, 'Beykoz', 34, 0, 1),
(153, 'Beylikdüzü', 34, 0, 1),
(154, 'Beylikova', 26, 0, 1),
(155, 'Beyoğlu', 34, 0, 1),
(156, 'Beypazarı', 6, 0, 1),
(157, 'Beyşehir', 42, 0, 1),
(158, 'Beytüşşebap', 73, 0, 1),
(159, 'Biga', 17, 0, 1),
(160, 'Bigadiç', 10, 0, 1),
(161, 'Bilecik', 11, 0, 1),
(162, 'Bingöl', 12, 0, 1),
(163, 'Birecik', 63, 0, 1),
(164, 'Bismil', 21, 0, 1),
(165, 'Bitlis', 13, 0, 1),
(166, 'Bodrum', 48, 0, 1),
(167, 'Boğazkale', 19, 0, 1),
(168, 'Boğazlıyan', 66, 0, 1),
(169, 'Bolu', 14, 0, 1),
(170, 'Bolvadin', 3, 0, 1),
(171, 'Bor', 51, 0, 1),
(172, 'Borçka', 8, 0, 1),
(173, 'Bornova', 35, 0, 1),
(174, 'Boyabat', 57, 0, 1),
(175, 'Bozcaada', 17, 0, 1),
(176, 'Bozdoğan', 9, 0, 1),
(177, 'Bozkır', 42, 0, 1),
(178, 'Bozkurt', 20, 0, 1),
(179, 'Bozkurt', 37, 0, 1),
(180, 'Bozova', 63, 0, 1),
(181, 'Boztepe', 40, 0, 1),
(182, 'Bozüyük', 11, 0, 1),
(183, 'Bozyazı', 33, 0, 1),
(184, 'Buca', 35, 0, 1),
(185, 'Bucak', 15, 0, 1),
(186, 'Buharkent', 9, 0, 1),
(187, 'Bulancak', 28, 0, 1),
(188, 'Bulanık', 49, 0, 1),
(189, 'Buldan', 20, 0, 1),
(190, 'Burdur', 15, 0, 1),
(191, 'Burhaniye', 10, 0, 1),
(192, 'Bünyan', 38, 0, 1),
(193, 'Büyükçekmece', 34, 0, 1),
(194, 'Büyükorhan', 16, 0, 1),
(195, 'Canik', 55, 0, 1),
(196, 'Ceyhan', 1, 0, 1),
(197, 'Ceylanpınar', 63, 0, 1),
(198, 'Cide', 37, 0, 1),
(199, 'Cihanbeyli', 42, 0, 1),
(200, 'Cizre', 73, 0, 1),
(201, 'Cumayeri', 81, 0, 1),
(202, 'Çağlayancerit', 46, 0, 1),
(203, 'Çal', 20, 0, 1),
(204, 'Çaldıran', 65, 0, 1),
(205, 'Çamardı', 51, 0, 1),
(206, 'Çamaş', 52, 0, 1),
(207, 'Çameli', 20, 0, 1),
(208, 'Çamlıdere', 6, 0, 1),
(209, 'Çamlıhemşin', 53, 0, 1),
(210, 'Çamlıyayla', 33, 0, 1),
(211, 'Çamoluk', 28, 0, 1),
(212, 'Çan', 17, 0, 1),
(213, 'Çanakçı', 28, 0, 1),
(214, 'Çanakkale', 17, 0, 1),
(215, 'Çandır', 66, 0, 1),
(216, 'Çankaya', 6, 0, 1),
(217, 'Çankırı', 18, 0, 1),
(218, 'Çardak', 20, 0, 1),
(219, 'Çarşamba', 55, 0, 1),
(220, 'Çarşıbaşı', 61, 0, 1),
(221, 'Çat', 25, 0, 1),
(222, 'Çatak', 65, 0, 1),
(223, 'Çatalca', 34, 0, 1),
(224, 'Çatalpınar', 52, 0, 1),
(225, 'Çatalzeytin', 37, 0, 1),
(226, 'Çavdarhisar', 43, 0, 1),
(227, 'Çavdır', 15, 0, 1),
(228, 'Çay', 3, 0, 1),
(229, 'Çaybaşı', 52, 0, 1),
(230, 'Çaycuma', 67, 0, 1),
(231, 'Çayeli', 53, 0, 1),
(232, 'Çayıralan', 66, 0, 1),
(233, 'Çayırlı', 24, 0, 1),
(234, 'Çayırova', 41, 0, 1),
(235, 'Çaykara', 61, 0, 1),
(236, 'Çekerek', 66, 0, 1),
(237, 'Çekmeköy', 34, 0, 1),
(238, 'Çelebi', 71, 0, 1),
(239, 'Çelikhan', 2, 0, 1),
(240, 'Çeltik', 42, 0, 1),
(241, 'Çeltikçi', 15, 0, 1),
(242, 'Çemişgezek', 62, 0, 1),
(243, 'Çerkeş', 18, 0, 1),
(244, 'Çerkezköy', 59, 0, 1),
(245, 'Çermik', 21, 0, 1),
(246, 'Çeşme', 35, 0, 1),
(247, 'Çıldır', 75, 0, 1),
(248, 'Çınar', 21, 0, 1),
(249, 'Çınarcık', 77, 0, 1),
(250, 'Çiçekdağı', 40, 0, 1),
(251, 'Çifteler', 26, 0, 1),
(252, 'Çiftlik', 51, 0, 1),
(253, 'Çiftlikköy', 77, 0, 1),
(254, 'Çiğli', 35, 0, 1),
(255, 'Çilimli', 81, 0, 1),
(256, 'Çine', 9, 0, 1),
(257, 'Çivril', 20, 0, 1),
(258, 'Çobanlar', 3, 0, 1),
(259, 'Çorlu', 59, 0, 1),
(260, 'Çorum', 19, 0, 1),
(261, 'Çubuk', 6, 0, 1),
(262, 'Çukurca', 30, 0, 1),
(263, 'Çukurova', 1, 0, 1),
(264, 'Çumra', 42, 0, 1),
(265, 'Çüngüş', 21, 0, 1),
(266, 'Daday', 37, 0, 1),
(267, 'Dalaman', 48, 0, 1),
(268, 'Damal', 75, 0, 1),
(269, 'Darende', 44, 0, 1),
(270, 'Dargeçit', 47, 0, 1),
(271, 'Darıca', 41, 0, 1),
(272, 'Datça', 48, 0, 1),
(273, 'Dazkırı', 3, 0, 1),
(274, 'Defne', 31, 0, 1),
(275, 'Delice', 71, 0, 1),
(276, 'Demirci', 45, 0, 1),
(277, 'Demirköy', 39, 0, 1),
(278, 'Demirözü', 69, 0, 1),
(279, 'Demre', 7, 0, 1),
(280, 'Derbent', 42, 0, 1),
(281, 'Derebucak', 42, 0, 1),
(282, 'Dereli', 28, 0, 1),
(283, 'Derepazarı', 53, 0, 1),
(284, 'Derik', 47, 0, 1),
(285, 'Derince', 41, 0, 1),
(286, 'Derinkuyu', 50, 0, 1),
(287, 'Dernekpazarı', 61, 0, 1),
(288, 'Develi', 38, 0, 1),
(289, 'Devrek', 67, 0, 1),
(290, 'Devrekani', 37, 0, 1),
(291, 'Dicle', 21, 0, 1),
(292, 'Didim', 9, 0, 1),
(293, 'Digor', 36, 0, 1),
(294, 'Dikili', 35, 0, 1),
(295, 'Dikmen', 57, 0, 1),
(296, 'Dilovası', 41, 0, 1),
(297, 'Dinar', 3, 0, 1),
(298, 'Divriği', 58, 0, 1),
(299, 'Diyadin', 4, 0, 1),
(300, 'Dodurga', 19, 0, 1),
(301, 'Doğanhisar', 42, 0, 1),
(302, 'Doğankent', 28, 0, 1),
(303, 'Doğanşar', 58, 0, 1),
(304, 'Doğanşehir', 44, 0, 1),
(305, 'Doğanyol', 44, 0, 1),
(306, 'Doğanyurt', 37, 0, 1),
(307, 'Doğubayazıt', 4, 0, 1),
(308, 'Domaniç', 43, 0, 1),
(309, 'Dörtdivan', 14, 0, 1),
(310, 'Dörtyol', 31, 0, 1),
(311, 'Döşemealtı', 7, 0, 1),
(312, 'Dulkadiroğlu', 46, 0, 1),
(313, 'Dumlupınar', 43, 0, 1),
(314, 'Durağan', 57, 0, 1),
(315, 'Dursunbey', 10, 0, 1),
(316, 'Düzce', 81, 0, 1),
(317, 'Düziçi', 80, 0, 1),
(318, 'Düzköy', 61, 0, 1),
(319, 'Eceabat', 17, 0, 1),
(320, 'Edirne', 22, 0, 1),
(321, 'Edremit', 10, 0, 1),
(322, 'Edremit', 65, 0, 1),
(323, 'Efeler', 9, 0, 1),
(324, 'Eflani', 78, 0, 1),
(325, 'Eğil', 21, 0, 1),
(326, 'Eğirdir', 32, 0, 1),
(327, 'Ekinözü', 46, 0, 1),
(328, 'Elazığ', 23, 0, 1),
(329, 'Elbeyli', 79, 0, 1),
(330, 'Elbistan', 46, 0, 1),
(331, 'Eldivan', 18, 0, 1),
(332, 'Eleşkirt', 4, 0, 1),
(333, 'Elmadağ', 6, 0, 1),
(334, 'Elmalı', 7, 0, 1),
(335, 'Emet', 43, 0, 1),
(336, 'Emirdağ', 3, 0, 1),
(337, 'Emirgazi', 42, 0, 1),
(338, 'Enez', 22, 0, 1),
(339, 'Erbaa', 60, 0, 1),
(340, 'Erciş', 65, 0, 1),
(341, 'Erdek', 10, 0, 1),
(342, 'Erdemli', 33, 0, 1),
(343, 'Ereğli', 42, 0, 1),
(344, 'Ereğli', 67, 0, 1),
(345, 'Erenler', 54, 0, 1),
(346, 'Erfelek', 57, 0, 1),
(347, 'Ergani', 21, 0, 1),
(348, 'Ergene', 59, 0, 1),
(349, 'Ermenek', 70, 0, 1),
(350, 'Eruh', 56, 0, 1),
(351, 'Erzin', 31, 0, 1),
(352, 'Erzincan', 24, 0, 1),
(353, 'Esenler', 34, 0, 1),
(354, 'Esenyurt', 34, 0, 1),
(355, 'Eskil', 68, 0, 1),
(356, 'Eskipazar', 78, 0, 1),
(357, 'Espiye', 28, 0, 1),
(358, 'Eşme', 64, 0, 1),
(359, 'Etimesgut', 6, 0, 1),
(360, 'Evciler', 3, 0, 1),
(361, 'Evren', 6, 0, 1),
(362, 'Eynesil', 28, 0, 1),
(363, 'Eyüp', 34, 0, 1),
(364, 'Eyyübiye', 63, 0, 1),
(365, 'Ezine', 17, 0, 1),
(366, 'Fatih', 34, 0, 1),
(367, 'Fatsa', 52, 0, 1),
(368, 'Feke', 1, 0, 1),
(369, 'Felahiye', 38, 0, 1),
(370, 'Ferizli', 54, 0, 1),
(371, 'Fethiye', 48, 0, 1),
(372, 'Fındıklı', 53, 0, 1),
(373, 'Finike', 7, 0, 1),
(374, 'Foça', 35, 0, 1),
(375, 'Gaziemir', 35, 0, 1),
(376, 'Gaziosmanpaşa', 34, 0, 1),
(377, 'Gazipaşa', 7, 0, 1),
(378, 'Gebze', 41, 0, 1),
(379, 'Gediz', 43, 0, 1),
(380, 'Gelendost', 32, 0, 1),
(381, 'Gelibolu', 17, 0, 1),
(382, 'Gemerek', 58, 0, 1),
(383, 'Gemlik', 16, 0, 1),
(384, 'Genç', 12, 0, 1),
(385, 'Gercüş', 72, 0, 1),
(386, 'Gerede', 14, 0, 1),
(387, 'Gerger', 2, 0, 1),
(388, 'Germencik', 9, 0, 1),
(389, 'Gerze', 57, 0, 1),
(390, 'Gevaş', 65, 0, 1),
(391, 'Geyve', 54, 0, 1),
(392, 'Giresun', 28, 0, 1),
(393, 'Gökçeada', 17, 0, 1),
(394, 'Gökçebey', 67, 0, 1),
(395, 'Göksun', 46, 0, 1),
(396, 'Gölbaşı', 2, 0, 1),
(397, 'Gölbaşı', 6, 0, 1),
(398, 'Gölcük', 41, 0, 1),
(399, 'Göle', 75, 0, 1),
(400, 'Gölhisar', 15, 0, 1),
(401, 'Gölköy', 52, 0, 1),
(402, 'Gölmarmara', 45, 0, 1),
(403, 'Gölova', 58, 0, 1),
(404, 'Gölpazarı', 11, 0, 1),
(405, 'Gölyaka', 81, 0, 1),
(406, 'Gömeç', 10, 0, 1),
(407, 'Gönen', 10, 0, 1),
(408, 'Gönen', 32, 0, 1),
(409, 'Gördes', 45, 0, 1),
(410, 'Görele', 28, 0, 1),
(411, 'Göynücek', 5, 0, 1),
(412, 'Göynük', 14, 0, 1),
(413, 'Güce', 28, 0, 1),
(414, 'Güçlükonak', 73, 0, 1),
(415, 'Güdül', 6, 0, 1),
(416, 'Gülağaç', 68, 0, 1),
(417, 'Gülnar', 33, 0, 1),
(418, 'Gülşehir', 50, 0, 1),
(419, 'Gülyalı', 52, 0, 1),
(420, 'Gümüşhacıköy', 5, 0, 1),
(421, 'Gümüşhane', 29, 0, 1),
(422, 'Gümüşova', 81, 0, 1),
(423, 'Gündoğmuş', 7, 0, 1),
(424, 'Güney', 20, 0, 1),
(425, 'Güneysınır', 42, 0, 1),
(426, 'Güneysu', 53, 0, 1),
(427, 'Güngören', 34, 0, 1),
(428, 'Günyüzü', 26, 0, 1),
(429, 'Gürgentepe', 52, 0, 1),
(430, 'Güroymak', 13, 0, 1),
(431, 'Gürpınar', 65, 0, 1),
(432, 'Gürsu', 16, 0, 1),
(433, 'Gürün', 58, 0, 1),
(434, 'Güzelbahçe', 35, 0, 1),
(435, 'Güzelyurt', 68, 0, 1),
(436, 'Hacıbektaş', 50, 0, 1),
(437, 'Hacılar', 38, 0, 1),
(438, 'Hadim', 42, 0, 1),
(439, 'Hafik', 58, 0, 1),
(440, 'Hakkâri', 30, 0, 1),
(441, 'Halfeti', 63, 0, 1),
(442, 'Haliliye', 63, 0, 1),
(443, 'Halkapınar', 42, 0, 1),
(444, 'Hamamözü', 5, 0, 1),
(445, 'Hamur', 4, 0, 1),
(446, 'Han', 26, 0, 1),
(447, 'Hanak', 75, 0, 1),
(448, 'Hani', 21, 0, 1),
(449, 'Hanönü', 37, 0, 1),
(450, 'Harmancık', 16, 0, 1),
(451, 'Harran', 63, 0, 1),
(452, 'Hasanbeyli', 80, 0, 1),
(453, 'Hasankeyf', 72, 0, 1),
(454, 'Hasköy', 49, 0, 1),
(455, 'Hassa', 31, 0, 1),
(456, 'Havran', 10, 0, 1),
(457, 'Havsa', 22, 0, 1),
(458, 'Havza', 55, 0, 1),
(459, 'Haymana', 6, 0, 1),
(460, 'Hayrabolu', 59, 0, 1),
(461, 'Hayrat', 61, 0, 1),
(462, 'Hazro', 21, 0, 1),
(463, 'Hekimhan', 44, 0, 1),
(464, 'Hemşin', 53, 0, 1),
(465, 'Hendek', 54, 0, 1),
(466, 'Hınıs', 25, 0, 1),
(467, 'Hilvan', 63, 0, 1),
(468, 'Hisarcık', 43, 0, 1),
(469, 'Hizan', 13, 0, 1),
(470, 'Hocalar', 3, 0, 1),
(471, 'Honaz', 20, 0, 1),
(472, 'Hopa', 8, 0, 1),
(473, 'Horasan', 25, 0, 1),
(474, 'Hozat', 62, 0, 1),
(475, 'Hüyük', 42, 0, 1),
(476, 'Iğdır', 76, 0, 1),
(477, 'Ilgaz', 18, 0, 1),
(478, 'Ilgın', 42, 0, 1),
(479, 'Isparta', 32, 0, 1),
(480, 'İbradı', 7, 0, 1),
(481, 'İdil', 73, 0, 1),
(482, 'İhsangazi', 37, 0, 1),
(483, 'İhsaniye', 3, 0, 1),
(484, 'İkizce', 52, 0, 1),
(485, 'İkizdere', 53, 0, 1),
(486, 'İliç', 24, 0, 1),
(487, 'İlkadım', 55, 0, 1),
(488, 'İmamoğlu', 1, 0, 1),
(489, 'İmranlı', 58, 0, 1),
(490, 'İncesu', 38, 0, 1),
(491, 'İncirliova', 9, 0, 1),
(492, 'İnebolu', 37, 0, 1),
(493, 'İnegöl', 16, 0, 1),
(494, 'İnhisar', 11, 0, 1),
(495, 'İnönü', 26, 0, 1),
(496, 'İpekyolu', 65, 0, 1),
(497, 'İpsala', 22, 0, 1),
(498, 'İscehisar', 3, 0, 1),
(499, 'İskenderun', 31, 0, 1),
(500, 'İskilip', 19, 0, 1),
(501, 'İslahiye', 27, 0, 1),
(502, 'İspir', 25, 0, 1),
(503, 'İvrindi', 10, 0, 1),
(504, 'İyidere', 53, 0, 1),
(505, 'İzmit', 41, 0, 1),
(506, 'İznik', 16, 0, 1),
(507, 'Kabadüz', 52, 0, 1),
(508, 'Kabataş', 52, 0, 1),
(509, 'Kadıköy', 34, 0, 1),
(510, 'Kadınhanı', 42, 0, 1),
(511, 'Kadışehri', 66, 0, 1),
(512, 'Kadirli', 80, 0, 1),
(513, 'Kağıthane', 34, 0, 1),
(514, 'Kağızman', 36, 0, 1),
(515, 'Kahta', 2, 0, 1),
(516, 'Kale', 20, 0, 1),
(517, 'Kale', 44, 0, 1),
(518, 'Kalecik', 6, 0, 1),
(519, 'Kalkandere', 53, 0, 1),
(520, 'Kaman', 40, 0, 1),
(521, 'Kandıra', 41, 0, 1),
(522, 'Kangal', 58, 0, 1),
(523, 'Kapaklı', 59, 0, 1),
(524, 'Karabağlar', 35, 0, 1),
(525, 'Karaburun', 35, 0, 1),
(526, 'Karabük', 78, 0, 1),
(527, 'Karacabey', 16, 0, 1),
(528, 'Karacasu', 9, 0, 1),
(529, 'Karaçoban', 25, 0, 1),
(530, 'Karahallı', 64, 0, 1),
(531, 'Karaisalı', 1, 0, 1),
(532, 'Karakeçili', 71, 0, 1),
(533, 'Karakoçan', 23, 0, 1),
(534, 'Karakoyunlu', 76, 0, 1),
(535, 'Karaköprü', 63, 0, 1),
(536, 'Karaman', 70, 0, 1),
(537, 'Karamanlı', 15, 0, 1),
(538, 'Karamürsel', 41, 0, 1),
(539, 'Karapınar', 42, 0, 1),
(540, 'Karapürçek', 54, 0, 1),
(541, 'Karasu', 54, 0, 1),
(542, 'Karataş', 1, 0, 1),
(543, 'Karatay', 42, 0, 1),
(544, 'Karayazı', 25, 0, 1),
(545, 'Karesi', 10, 0, 1),
(546, 'Kargı', 19, 0, 1),
(547, 'Karkamış', 27, 0, 1),
(548, 'Karlıova', 12, 0, 1),
(549, 'Karpuzlu', 9, 0, 1),
(550, 'Kars', 36, 0, 1),
(551, 'Karşıyaka', 35, 0, 1),
(552, 'Kartal', 34, 0, 1),
(553, 'Kartepe', 41, 0, 1),
(554, 'Kastamonu', 37, 0, 1),
(555, 'Kaş', 7, 0, 1),
(556, 'Kavak', 55, 0, 1),
(557, 'Kavaklıdere', 48, 0, 1),
(558, 'Kayapınar', 21, 0, 1),
(559, 'Kaynarca', 54, 0, 1),
(560, 'Kaynaşlı', 81, 0, 1),
(561, 'Kazan', 6, 0, 1),
(562, 'Kazımkarabekir', 70, 0, 1),
(563, 'Keban', 23, 0, 1),
(564, 'Keçiborlu', 32, 0, 1),
(565, 'Keçiören', 6, 0, 1),
(566, 'Keles', 16, 0, 1),
(567, 'Kelkit', 29, 0, 1),
(568, 'Kemah', 24, 0, 1),
(569, 'Kemaliye', 24, 0, 1),
(570, 'Kemalpaşa', 35, 0, 1),
(571, 'Kemer', 7, 0, 1),
(572, 'Kemer', 15, 0, 1),
(573, 'Kepez', 7, 0, 1),
(574, 'Kepsut', 10, 0, 1),
(575, 'Keskin', 71, 0, 1),
(576, 'Kestel', 16, 0, 1),
(577, 'Keşan', 22, 0, 1),
(578, 'Keşap', 28, 0, 1),
(579, 'Kıbrıscık', 14, 0, 1),
(580, 'Kınık', 35, 0, 1),
(581, 'Kırıkhan', 31, 0, 1),
(582, 'Kırıkkale', 71, 0, 1),
(583, 'Kırkağaç', 45, 0, 1),
(584, 'Kırklareli', 39, 0, 1),
(585, 'Kırşehir', 40, 0, 1),
(586, 'Kızılcahamam', 6, 0, 1),
(587, 'Kızılırmak', 18, 0, 1),
(588, 'Kızılören', 3, 0, 1),
(589, 'Kızıltepe', 47, 0, 1),
(590, 'Kiğı', 12, 0, 1),
(591, 'Kilimli', 67, 0, 1),
(592, 'Kilis', 79, 0, 1),
(593, 'Kiraz', 35, 0, 1),
(594, 'Kocaali', 54, 0, 1),
(595, 'Kocaköy', 21, 0, 1),
(596, 'Kocasinan', 38, 0, 1),
(597, 'Koçarlı', 9, 0, 1),
(598, 'Kofçaz', 39, 0, 1),
(599, 'Konak', 35, 0, 1),
(600, 'Konyaaltı', 7, 0, 1),
(601, 'Korgan', 52, 0, 1),
(602, 'Korgun', 18, 0, 1),
(603, 'Korkut', 49, 0, 1),
(604, 'Korkuteli', 7, 0, 1),
(605, 'Kovancılar', 23, 0, 1),
(606, 'Koyulhisar', 58, 0, 1),
(607, 'Kozaklı', 50, 0, 1),
(608, 'Kozan', 1, 0, 1),
(609, 'Kozlu', 67, 0, 1),
(610, 'Kozluk', 72, 0, 1),
(611, 'Köprübaşı', 45, 0, 1),
(612, 'Köprübaşı', 61, 0, 1),
(613, 'Köprüköy', 25, 0, 1),
(614, 'Körfez', 41, 0, 1),
(615, 'Köse', 29, 0, 1),
(616, 'Köşk', 9, 0, 1),
(617, 'Köyceğiz', 48, 0, 1),
(618, 'Kula', 45, 0, 1),
(619, 'Kulp', 21, 0, 1),
(620, 'Kulu', 42, 0, 1),
(621, 'Kuluncak', 44, 0, 1),
(622, 'Kumlu', 31, 0, 1),
(623, 'Kumluca', 7, 0, 1),
(624, 'Kumru', 52, 0, 1),
(625, 'Kurşunlu', 18, 0, 1),
(626, 'Kurtalan', 56, 0, 1),
(627, 'Kurucaşile', 74, 0, 1),
(628, 'Kuşadası', 9, 0, 1),
(629, 'Kuyucak', 9, 0, 1),
(630, 'Küçükçekmece', 34, 0, 1),
(631, 'Küre', 37, 0, 1),
(632, 'Kürtün', 29, 0, 1),
(633, 'Kütahya', 43, 0, 1),
(634, 'Laçin', 19, 0, 1),
(635, 'Ladik', 55, 0, 1),
(636, 'Lalapaşa', 22, 0, 1),
(637, 'Lapseki', 17, 0, 1),
(638, 'Lice', 21, 0, 1),
(639, 'Lüleburgaz', 39, 0, 1),
(640, 'Maçka', 61, 0, 1),
(641, 'Maden', 23, 0, 1),
(642, 'Mahmudiye', 26, 0, 1),
(643, 'Malazgirt', 49, 0, 1),
(644, 'Malkara', 59, 0, 1),
(645, 'Maltepe', 34, 0, 1),
(646, 'Mamak', 6, 0, 1),
(647, 'Manavgat', 7, 0, 1),
(648, 'Manyas', 10, 0, 1),
(649, 'Marmara', 10, 0, 1),
(650, 'Marmaraereğlisi', 59, 0, 1),
(651, 'Marmaris', 48, 0, 1),
(652, 'Mazgirt', 62, 0, 1),
(653, 'Mazıdağı', 47, 0, 1),
(654, 'Mecitözü', 19, 0, 1),
(655, 'Melikgazi', 38, 0, 1),
(656, 'Menderes', 35, 0, 1),
(657, 'Menemen', 35, 0, 1),
(658, 'Mengen', 14, 0, 1),
(659, 'Menteşe', 48, 0, 1),
(660, 'Meram', 42, 0, 1),
(661, 'Meriç', 22, 0, 1),
(662, 'Merkezefendi', 20, 0, 1),
(663, 'Merzifon', 5, 0, 1),
(664, 'Mesudiye', 52, 0, 1),
(665, 'Mezitli', 33, 0, 1),
(666, 'Midyat', 47, 0, 1),
(667, 'Mihalgazi', 26, 0, 1),
(668, 'Mihalıççık', 26, 0, 1),
(669, 'Milas', 48, 0, 1),
(670, 'Mucur', 40, 0, 1),
(671, 'Mudanya', 16, 0, 1),
(672, 'Mudurnu', 14, 0, 1),
(673, 'Muradiye', 65, 0, 1),
(674, 'Muratlı', 59, 0, 1),
(675, 'Muratpaşa', 7, 0, 1),
(676, 'Murgul', 8, 0, 1),
(677, 'Musabeyli', 79, 0, 1),
(678, 'Mustafakemalpaşa', 16, 0, 1),
(679, 'Muş', 49, 0, 1),
(680, 'Mut', 33, 0, 1),
(681, 'Mutki', 13, 0, 1),
(682, 'Nallıhan', 6, 0, 1),
(683, 'Narlıdere', 35, 0, 1),
(684, 'Narman', 25, 0, 1),
(685, 'Nazımiye', 62, 0, 1),
(686, 'Nazilli', 9, 0, 1),
(687, 'Nevşehir', 50, 0, 1),
(688, 'Niğde', 51, 0, 1),
(689, 'Niksar', 60, 0, 1),
(690, 'Nilüfer', 16, 0, 1),
(691, 'Nizip', 27, 0, 1),
(692, 'Nurdağı', 27, 0, 1),
(693, 'Nurhak', 46, 0, 1),
(694, 'Nusaybin', 47, 0, 1),
(695, 'Odunpazarı', 26, 0, 1),
(696, 'Of', 61, 0, 1),
(697, 'Oğuzeli', 27, 0, 1),
(698, 'Oğuzlar', 19, 0, 1),
(699, 'Oltu', 25, 0, 1),
(700, 'Olur', 25, 0, 1),
(701, 'Ondokuzmayıs', 55, 0, 1),
(702, 'Onikişubat', 46, 0, 1),
(703, 'Orhaneli', 16, 0, 1),
(704, 'Orhangazi', 16, 0, 1),
(705, 'Orta', 18, 0, 1),
(706, 'Ortaca', 48, 0, 1),
(707, 'Ortahisar', 61, 0, 1),
(708, 'Ortaköy', 68, 0, 1),
(709, 'Ortaköy', 19, 0, 1),
(710, 'Osmancık', 19, 0, 1),
(711, 'Osmaneli', 11, 0, 1),
(712, 'Osmangazi', 16, 0, 1),
(713, 'Osmaniye', 80, 0, 1),
(714, 'Otlukbeli', 24, 0, 1),
(715, 'Ovacık', 78, 0, 1),
(716, 'Ovacık', 62, 0, 1),
(717, 'Ödemiş', 35, 0, 1),
(718, 'Ömerli', 47, 0, 1),
(719, 'Özalp', 65, 0, 1),
(720, 'Özvatan', 38, 0, 1),
(721, 'Palandöken', 25, 0, 1),
(722, 'Palu', 23, 0, 1),
(723, 'Pamukkale', 20, 0, 1),
(724, 'Pamukova', 54, 0, 1),
(725, 'Pasinler', 25, 0, 1),
(726, 'Patnos', 4, 0, 1),
(727, 'Payas', 31, 0, 1),
(728, 'Pazar', 53, 0, 1),
(729, 'Pazar', 60, 0, 1),
(730, 'Pazarcık', 46, 0, 1),
(731, 'Pazarlar', 43, 0, 1),
(732, 'Pazaryeri', 11, 0, 1),
(733, 'Pazaryolu', 25, 0, 1),
(734, 'Pehlivanköy', 39, 0, 1),
(735, 'Pendik', 34, 0, 1),
(736, 'Perşembe', 52, 0, 1),
(737, 'Pertek', 62, 0, 1),
(738, 'Pervari', 56, 0, 1),
(739, 'Pınarbaşı', 37, 0, 1),
(740, 'Pınarbaşı', 38, 0, 1),
(741, 'Pınarhisar', 39, 0, 1),
(742, 'Piraziz', 28, 0, 1),
(743, 'Polateli', 79, 0, 1),
(744, 'Polatlı', 6, 0, 1),
(745, 'Posof', 75, 0, 1),
(746, 'Pozantı', 1, 0, 1),
(747, 'Pursaklar', 6, 0, 1),
(748, 'Pülümür', 62, 0, 1),
(749, 'Pütürge', 44, 0, 1),
(750, 'Refahiye', 24, 0, 1),
(751, 'Reşadiye', 60, 0, 1),
(752, 'Reyhanlı', 31, 0, 1),
(753, 'Rize', 53, 0, 1),
(754, 'Safranbolu', 78, 0, 1),
(755, 'Saimbeyli', 1, 0, 1),
(756, 'Salıpazarı', 55, 0, 1),
(757, 'Salihli', 45, 0, 1),
(758, 'Samandağ', 31, 0, 1),
(759, 'Samsat', 2, 0, 1),
(760, 'Sancaktepe', 34, 0, 1),
(761, 'Sandıklı', 3, 0, 1),
(762, 'Sapanca', 54, 0, 1),
(763, 'Saray', 59, 0, 1),
(764, 'Saray', 65, 0, 1),
(765, 'Saraydüzü', 57, 0, 1),
(766, 'Saraykent', 66, 0, 1),
(767, 'Sarayköy', 20, 0, 1),
(768, 'Sarayönü', 42, 0, 1),
(769, 'Sarıcakaya', 26, 0, 1),
(770, 'Sarıçam', 1, 0, 1),
(771, 'Sarıgöl', 45, 0, 1),
(772, 'Sarıkamış', 36, 0, 1),
(773, 'Sarıkaya', 66, 0, 1),
(774, 'Sarıoğlan', 38, 0, 1),
(775, 'Sarıveliler', 70, 0, 1),
(776, 'Sarıyahşi', 68, 0, 1),
(777, 'Sarıyer', 34, 0, 1),
(778, 'Sarız', 38, 0, 1),
(779, 'Saruhanlı', 45, 0, 1),
(780, 'Sason', 72, 0, 1),
(781, 'Savaştepe', 10, 0, 1),
(782, 'Savur', 47, 0, 1),
(783, 'Seben', 14, 0, 1),
(784, 'Seferihisar', 35, 0, 1),
(785, 'Selçuk', 35, 0, 1),
(786, 'Selçuklu', 42, 0, 1),
(787, 'Selendi', 45, 0, 1),
(788, 'Selim', 36, 0, 1),
(789, 'Senirkent', 32, 0, 1),
(790, 'Serdivan', 54, 0, 1),
(791, 'Serik', 7, 0, 1),
(792, 'Serinhisar', 20, 0, 1),
(793, 'Seydikemer', 48, 0, 1),
(794, 'Seydiler', 37, 0, 1),
(795, 'Seydişehir', 42, 0, 1),
(796, 'Seyhan', 1, 0, 1),
(797, 'Seyitgazi', 26, 0, 1),
(798, 'Sındırgı', 10, 0, 1),
(799, 'Siirt', 56, 0, 1),
(800, 'Silifke', 33, 0, 1),
(801, 'Silivri', 34, 0, 1),
(802, 'Silopi', 73, 0, 1),
(803, 'Silvan', 21, 0, 1),
(804, 'Simav', 43, 0, 1),
(805, 'Sinanpaşa', 3, 0, 1),
(806, 'Sincan', 6, 0, 1),
(807, 'Sincik', 2, 0, 1),
(808, 'Sinop', 57, 0, 1),
(809, 'Sivas', 58, 0, 1),
(810, 'Sivaslı', 64, 0, 1),
(811, 'Siverek', 63, 0, 1),
(812, 'Sivrice', 23, 0, 1),
(813, 'Sivrihisar', 26, 0, 1),
(814, 'Solhan', 12, 0, 1),
(815, 'Soma', 45, 0, 1),
(816, 'Sorgun', 66, 0, 1),
(817, 'Söğüt', 11, 0, 1),
(818, 'Söğütlü', 54, 0, 1),
(819, 'Söke', 9, 0, 1),
(820, 'Sulakyurt', 71, 0, 1),
(821, 'Sultanbeyli', 34, 0, 1),
(822, 'Sultandağı', 3, 0, 1),
(823, 'Sultangazi', 34, 0, 1),
(824, 'Sultanhisar', 9, 0, 1),
(825, 'Suluova', 5, 0, 1),
(826, 'Sulusaray', 60, 0, 1),
(827, 'Sumbas', 80, 0, 1),
(828, 'Sungurlu', 19, 0, 1),
(829, 'Sur', 21, 0, 1),
(830, 'Suruç', 63, 0, 1),
(831, 'Susurluk', 10, 0, 1),
(832, 'Susuz', 36, 0, 1),
(833, 'Suşehri', 58, 0, 1),
(834, 'Süleymanpaşa', 59, 0, 1),
(835, 'Süloğlu', 22, 0, 1),
(836, 'Sürmene', 61, 0, 1),
(837, 'Sütçüler', 32, 0, 1),
(838, 'Şabanözü', 18, 0, 1),
(839, 'Şahinbey', 27, 0, 1),
(840, 'Şalpazarı', 61, 0, 1),
(841, 'Şaphane', 43, 0, 1),
(842, 'Şarkışla', 58, 0, 1),
(843, 'Şarkikaraağaç', 32, 0, 1),
(844, 'Şarköy', 59, 0, 1),
(845, 'Şavşat', 8, 0, 1),
(846, 'Şebinkarahisar', 28, 0, 1),
(847, 'Şefaatli', 66, 0, 1),
(848, 'Şehitkamil', 27, 0, 1),
(849, 'Şehzadeler', 45, 0, 1),
(850, 'Şemdinli', 30, 0, 1),
(851, 'Şenkaya', 25, 0, 1),
(852, 'Şenpazar', 37, 0, 1),
(853, 'Şereflikoçhisar', 6, 0, 1),
(854, 'Şırnak', 73, 0, 1),
(855, 'Şile', 34, 0, 1),
(856, 'Şiran', 29, 0, 1),
(857, 'Şirvan', 56, 0, 1),
(858, 'Şişli', 34, 0, 1),
(859, 'Şuhut', 3, 0, 1),
(860, 'Talas', 38, 0, 1),
(861, 'Taraklı', 54, 0, 1),
(862, 'Tarsus', 33, 0, 1),
(863, 'Taşkent', 42, 0, 1),
(864, 'Taşköprü', 37, 0, 1),
(865, 'Taşlıçay', 4, 0, 1),
(866, 'Taşova', 5, 0, 1),
(867, 'Tatvan', 13, 0, 1),
(868, 'Tavas', 20, 0, 1),
(869, 'Tavşanlı', 43, 0, 1),
(870, 'Tefenni', 15, 0, 1),
(871, 'Tekkeköy', 55, 0, 1),
(872, 'Tekman', 25, 0, 1),
(873, 'Tepebaşı', 26, 0, 1),
(874, 'Tercan', 24, 0, 1),
(875, 'Termal', 77, 0, 1),
(876, 'Terme', 55, 0, 1),
(877, 'Tillo', 56, 0, 1),
(878, 'Tire', 35, 0, 1),
(879, 'Tirebolu', 28, 0, 1),
(880, 'Tokat', 60, 0, 1),
(881, 'Tomarza', 38, 0, 1),
(882, 'Tonya', 61, 0, 1),
(883, 'Toprakkale', 80, 0, 1),
(884, 'Torbalı', 35, 0, 1),
(885, 'Toroslar', 33, 0, 1),
(886, 'Tortum', 25, 0, 1),
(887, 'Torul', 29, 0, 1),
(888, 'Tosya', 37, 0, 1),
(889, 'Tufanbeyli', 1, 0, 1),
(890, 'Tunceli', 62, 0, 1),
(891, 'Turgutlu', 45, 0, 1),
(892, 'Turhal', 60, 0, 1),
(893, 'Tuşba', 65, 0, 1),
(894, 'Tut', 2, 0, 1),
(895, 'Tutak', 4, 0, 1),
(896, 'Tuzla', 34, 0, 1),
(897, 'Tuzluca', 76, 0, 1),
(898, 'Tuzlukçu', 42, 0, 1),
(899, 'Türkeli', 57, 0, 1),
(900, 'Türkoğlu', 46, 0, 1),
(901, 'Uğurludağ', 19, 0, 1),
(902, 'Ula', 48, 0, 1),
(903, 'Ulaş', 58, 0, 1),
(904, 'Ulubey', 52, 0, 1),
(905, 'Ulubey', 64, 0, 1),
(906, 'Uluborlu', 32, 0, 1),
(907, 'Uludere', 73, 0, 1),
(908, 'Ulukışla', 51, 0, 1),
(909, 'Ulus', 74, 0, 1),
(910, 'Urla', 35, 0, 1),
(911, 'Uşak', 64, 0, 1),
(912, 'Uzundere', 25, 0, 1),
(913, 'Uzunköprü', 22, 0, 1),
(914, 'Ümraniye', 34, 0, 1),
(915, 'Ünye', 52, 0, 1),
(916, 'Ürgüp', 50, 0, 1),
(917, 'Üsküdar', 34, 0, 1),
(918, 'Üzümlü', 24, 0, 1),
(919, 'Vakfıkebir', 61, 0, 1),
(920, 'Varto', 49, 0, 1),
(921, 'Vezirköprü', 55, 0, 1),
(922, 'Viranşehir', 63, 0, 1),
(923, 'Vize', 39, 0, 1),
(924, 'Yağlıdere', 28, 0, 1),
(925, 'Yahşihan', 71, 0, 1),
(926, 'Yahyalı', 38, 0, 1),
(927, 'Yakakent', 55, 0, 1),
(928, 'Yakutiye', 25, 0, 1),
(929, 'Yalıhüyük', 42, 0, 1),
(930, 'Yalova', 77, 0, 1),
(931, 'Yalvaç', 32, 0, 1),
(932, 'Yapraklı', 18, 0, 1),
(933, 'Yatağan', 48, 0, 1),
(934, 'Yavuzeli', 27, 0, 1),
(935, 'Yayladağı', 31, 0, 1),
(936, 'Yayladere', 12, 0, 1),
(937, 'Yazıhan', 44, 0, 1),
(938, 'Yedisu', 12, 0, 1),
(939, 'Yenice', 17, 0, 1),
(940, 'Yenice', 78, 0, 1),
(941, 'Yeniçağa', 14, 0, 1),
(942, 'Yenifakılı', 66, 0, 1),
(943, 'Yenimahalle', 6, 0, 1),
(944, 'Yenipazar', 9, 0, 1),
(945, 'Yenipazar', 11, 0, 1),
(946, 'Yenişarbademli', 32, 0, 1),
(947, 'Yenişehir', 16, 0, 1),
(948, 'Yenişehir', 21, 0, 1),
(949, 'Yenişehir', 33, 0, 1),
(950, 'Yerköy', 66, 0, 1),
(951, 'Yeşilhisar', 38, 0, 1),
(952, 'Yeşilli', 47, 0, 1),
(953, 'Yeşilova', 15, 0, 1),
(954, 'Yeşilyurt', 44, 0, 1),
(955, 'Yeşilyurt', 60, 0, 1),
(956, 'Yığılca', 81, 0, 1),
(957, 'Yıldırım', 16, 0, 1),
(958, 'Yıldızeli', 58, 0, 1),
(959, 'Yomra', 61, 0, 1),
(960, 'Yozgat', 66, 0, 1),
(961, 'Yumurtalık', 1, 0, 1),
(962, 'Yunak', 42, 0, 1),
(963, 'Yunusemre', 45, 0, 1),
(964, 'Yusufeli', 8, 0, 1),
(965, 'Yüksekova', 30, 0, 1),
(966, 'Yüreğir', 1, 0, 1),
(967, 'Zara', 58, 0, 1),
(968, 'Zeytinburnu', 34, 0, 1),
(969, 'Zile', 60, 0, 1),
(970, 'Zonguldak', 67, 0, 1),
(971, 'Kemalpaşa', 8, 0, 1),
(972, 'Sultanhanı', 68, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `ID` int(11) NOT NULL,
  `URL` varchar(100) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`ID`, `URL`) VALUES
(32, '../uploads/kırmızı-7-adet-gultt.jpg'),
(33, '../uploads/beyaz-lilyum-saksılıtuna.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `NAME_SURNAME` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `EMAIL` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `PHONE` varchar(12) COLLATE utf8mb4_bin NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT 1,
  `LAST_LOGIN` datetime DEFAULT NULL,
  `NEWS` tinyint(1) NOT NULL,
  `PROCESS_DATE` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `NAME_SURNAME`, `EMAIL`, `PHONE`, `STATUS`, `LAST_LOGIN`, `NEWS`, `PROCESS_DATE`) VALUES
(1, 'Tunahan Çakıl', 'tunahancakil@gmail.com', '05393239896', 1, '2020-05-01 23:29:34', 0, '2020-05-18 23:29:48'),
(2, 'Tolgahan Çakıl', 'tolgahan@ckia.com', '0', 1, '2020-05-07 23:32:54', 0, '2020-05-18 23:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `ID` int(11) NOT NULL,
  `MENU_TYPE` enum('HEADER','FOOTER') COLLATE utf8_turkish_ci NOT NULL,
  `MENU_TEMPLATE` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`MENU_TEMPLATE`)),
  `ACTIVE` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`ID`, `MENU_TYPE`, `MENU_TEMPLATE`, `ACTIVE`) VALUES
(7, 'FOOTER', '[{\"text\":\"asdasd\",\"icon\":\"\",\"href\":\"asdasd\",\"menuType\":\"PAGE\"}]', 1),
(8, 'HEADER', '[{\"text\":\"Ana Menü\",\"href\":\"ana-menu\",\"icon\":\"fas fa-align-center\",\"menuType\":\"MAIN\"},{\"text\":\"Güller\",\"href\":\"urunler\",\"icon\":\"fab fa-r-project\",\"menuType\":\"MAIN\",\"children\":[{\"text\":\"Güller\",\"href\":\"dogum-gunu-urunleri\",\"icon\":\"empty\",\"menuType\":\"page\"}]},{\"text\":\"Hakkımızda\",\"href\":\"hakkimizda\",\"icon\":\"fas fa-adjust\",\"menuType\":\"page\"},{\"text\":\"Güller\",\"href\":\"guller\",\"icon\":\"fab fa-algolia\",\"menuType\":\"page\"}]', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `MEMBER_ID` int(11) NOT NULL,
  `TOTAL_AMOUNT` decimal(11,2) NOT NULL,
  `REFERENCE_NO` varchar(13) COLLATE utf8mb4_bin NOT NULL,
  `DELIVERY_CLOCK` time NOT NULL,
  `DELIVERY_CITY` int(11) NOT NULL,
  `DELIVERY_DISTRICT` int(11) NOT NULL,
  `IS_DELIVERY` tinyint(1) NOT NULL DEFAULT 1,
  `CARD_NOTE_ID` int(11) DEFAULT NULL,
  `CARD_NOTE_NAME` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `CUSTOM_CARD_NOTE` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `SENDER_NAME` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `SENDER_PHONE` varchar(11) COLLATE utf8mb4_bin NOT NULL,
  `SENDER_EMAIL` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `INVOICE_TYPE` tinyint(1) NOT NULL,
  `INVOICE_IDENTY_NO` varchar(11) COLLATE utf8mb4_bin NOT NULL,
  `INVOICE_COMPANY_NAME` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `INVOICE_TAX_OFFICE` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `INVOICE_ADDRESS` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `IS_ONLINE_CONTRACT` tinyint(1) NOT NULL,
  `CUSTOMER_NAME` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `CUSTOMER_PHONE` varchar(11) COLLATE utf8mb4_bin NOT NULL,
  `CUSTOMER_ADDRESS` varchar(500) COLLATE utf8mb4_bin NOT NULL,
  `CUSTOMER_PLACE` int(11) NOT NULL,
  `PAYMENT_TYPE` enum('TRANSFER','CREDIT_CARD','','') COLLATE utf8mb4_bin NOT NULL,
  `STATUS` enum('NEW','CUSTOMER_INFORMATION','INVOICE_INFORMATION','WAITING_PAYMENT','WAITING_CARGO','DELIVERED') COLLATE utf8mb4_bin NOT NULL DEFAULT 'NEW',
  `PROCESS_DATE` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ID`, `MEMBER_ID`, `TOTAL_AMOUNT`, `REFERENCE_NO`, `DELIVERY_CLOCK`, `DELIVERY_CITY`, `DELIVERY_DISTRICT`, `IS_DELIVERY`, `CARD_NOTE_ID`, `CARD_NOTE_NAME`, `CUSTOM_CARD_NOTE`, `SENDER_NAME`, `SENDER_PHONE`, `SENDER_EMAIL`, `INVOICE_TYPE`, `INVOICE_IDENTY_NO`, `INVOICE_COMPANY_NAME`, `INVOICE_TAX_OFFICE`, `INVOICE_ADDRESS`, `IS_ONLINE_CONTRACT`, `CUSTOMER_NAME`, `CUSTOMER_PHONE`, `CUSTOMER_ADDRESS`, `CUSTOMER_PLACE`, `PAYMENT_TYPE`, `STATUS`, `PROCESS_DATE`) VALUES
(8, 0, '14.89', '5ECDA82D4E1EE', '00:00:00', 0, 0, 0, NULL, '', '', 'Tunahan Çakıl', '5393239896', 'tunahancakil@gmail.com', 1, '11152369871', 'Tunahan', 'Atış', 'asda sd', 1, 'Tunahan Çakıl', '2147483647', 'gfhj fgh dfgh fh', 0, 'TRANSFER', 'WAITING_CARGO', '2020-05-27 03:44:07');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `URL` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `DESCRIPTION` text COLLATE utf8mb4_bin NOT NULL,
  `STATUS` tinyint(1) NOT NULL DEFAULT 1,
  `PAGE_TITLE_SEO` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `PAGE_META_KEYWORDS` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `PAGE_META_DESCRIPTION` varchar(250) COLLATE utf8mb4_bin DEFAULT NULL,
  `IMAGE` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `VIEW` int(11) NOT NULL DEFAULT 0,
  `PROCESS_DATE` datetime NOT NULL DEFAULT current_timestamp(),
  `ACTIVE` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`ID`, `TITLE`, `URL`, `DESCRIPTION`, `STATUS`, `PAGE_TITLE_SEO`, `PAGE_META_KEYWORDS`, `PAGE_META_DESCRIPTION`, `IMAGE`, `VIEW`, `PROCESS_DATE`, `ACTIVE`) VALUES
(1, 'Güller', 'coklu-guller', 'kırmızı güller', 1, 'kırmızı güller', 'kırmızı güller', 'kırmızı güller', '', 0, '2020-05-16 17:03:37', 1),
(2, 'Cicek Bakim', 'cicek-bakimi', '<p><strong style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\">Çiçeklerimize Nasıl Bakmalıyız?</strong><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><span style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\">Çiçek nasıl bakılır? Çiçek bakımında nelere dikkat etmeliyiz? Bu sorular ev ya da iş yerlerinde çiçek yetiştiren kişilerin sıkça sorduğu sorular. Ne yaparsanız yapın, nekadar özen gösterirseniz gösterin bazen çiçekleriniz istediğiniz gibi güzel görünmeyebilir. Onlara yeterince ilgi ve özen gösteriyor olabilirsiniz ancak her çiçeğin farklı özellikleri var. Bu da her çiçek için farklı bakım şekli demek.. Peki, onlara en uygun yeri nasıl ayarlayacağız? Evinizin içerisinde gelişigüzel bir yere bitkinizi koymamalısınız. Çünkü her nokta onları başarılı bir şekilde büyütmek için uygun değildir. Bitkiler için seçtiğiniz mekanların bitkinin temel ihtiyaçlarını karşılaması gerekmektedir. Bitkinin yerleştiği mekan bitki için gerekli olan ışığı almalı, yeterli nem ve uygun sıcaklık sağlamalıdır. Işık, nem ve sıcaklık sağlıklı bitki yetiştirmemin en önemli faktörlerindendir. Çoğumuz bitkimizi pencereye çok yakın yerlere koyarız. Fakat çiçekler çok fazla güneş ışığına maruz kalırlar. çiçeklerin çoğu doğrudan ışığı sevmezler.</span><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><strong style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\">Bitkiler İçin Işık</strong><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><span style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\">Bitkilerin gerektiği şekilde gelişme ve büyümeleri için ışık çok önemlidir. Söz ettiğimiz bitkiler çok karanlık mekanlara konulduğu zaman sağlıklı bitki görünümünü kaybeder. Açık renkli bir duvar karşısında bitkilerin daha iyi gelişmeleri ve koyu renkli bir duvar karşısında ise kötüleşmelerinin sebebi budur. Eğer bitki karanlık bir yere konulmak zorunda kalırsa yapay ışık yardımı ile bu sorun çözümlenebilir.</span><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><strong style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\">Bitkiler İçin Sıcaklık</strong><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><span style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\">Evlerimizde yetiştirdiğimiz salon bitkileri, her ne kadar seralardan gelmiş olsalar bile, bizim sahip olduğumuzdan daima ılık iklim kökenlidirler. Sürekli ve sık yer değişikliği bitkilerimiz için zararlı olacaktır. Bitkiler için ideal sıcaklık değerleri aşağıda belirtildiği gibi olmalıdır. 27-28°C (80°F) Yüksek hava nem de salon bitkileri için maksimum sıcaklık. 22-23°C (72°F) Salon bitkilerinin büyük çoğunluğu için maksimum sıcaklık. 15-16°C (60°F) Tropikal salon bitkiler için en düşük sıcaklık. 12-13°C (45°F) Bilinen salon bitkileri için minimum sıcaklık. 5-10°C(36°F-42°F) Dayanıklı salon bitkileri için kış sıcaklığı.</span><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><strong style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\">Uygun Su Miktarı</strong><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><span style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\">Bitkilerin su ihtiyacının ne zaman ve ne kadar olacağını bilebilmek için tecrübe gerekmektedir. Burada parmak uçlarınız zamanla tecrübe kazanacak ve ıslak (suyun topraktan sızması), orta nemli ve kuru (parmağın nem hissetmemesi) arasındaki farkı hissedecektir. Bu basit yöntemi uyguladığınız sürece günden güne fark eden toprak neminin derecesini ölçer hale gelebilirsiniz. Aynı zamanda saksının dibi ve altındaki tabak da sık sık kontrol edilmelidir. Saksının drenajı iyi yapılmalı su dipte birikmemelidir.</span><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><strong style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\">Saksı Ne Zaman Değiştirilir?</strong><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><br style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;\"><span style=\"font-famil', 1, NULL, NULL, NULL, '', 0, '2020-05-19 17:02:55', 1),
(3, 'Mesafeli Satış Sözleşmesi', 'mesafeli-satis-sozlesme', 'Mesafeli Satış Sözleşmesi\r\n1- TARAFLAR\r\n\r\nİşbu Mesafeli Satış Sözleşme (“Sözleşme”) madde 5’te adresi bulunan (\"Alıcı\") ile Tahtakale mahallesi. Fırat Caddesi No:2/A Avcılar/İstanbul adresinde bulunan Çiçek Filem  (\"Satıcı\") arasında aşağıda belirtilen hüküm ve şartlar çerçevesinde elektronik ortamda kurulmuştur.\r\n\r\n2- KONU\r\n\r\nSözleşme’nin konusu, Satıcının, Alıcı’ya satışını yaptığı, aşağıda nitelikleri ve satış fiyatı belirtilen ürünün satışı ve teslimi ile ilgili olarak 6502 sayılı Tüketicinin Korunması Hakkında Kanun, Mesafeli Sözleşmeler Yönetmeliği ve ilgili diğer yasal hükümler uyarınca tarafların hak ve yükümlülüklerinin belirlenmesidir.\r\n\r\n3- SÖZLEŞME’NİN KURULMASI\r\n\r\n3.1- ALICI SÖZLEŞME’Yİ OKUDUĞUNU, ANLADIĞINI, HAKLARININ VE YÜKÜMLÜLÜKLERİNİN BİLİNCİNDE OLDUĞUNU KABUL EDER. ALICI, SÖZLEŞME KAPSAMINDA YER ALAN İŞLEMLERİN KENDİ MENFAATİNE UYGUN OLDUĞU KONUSUNDA TAM BİR KANAATE VARDIĞINI VE TÜM ŞARTLARA KENDİ ÖZGÜR İRADESİ İLE KABUL EDER.\r\n\r\n3.2- SATICI VE ALICI, SÖZLEŞMENİN HÜKÜMLERİNİN HAKSIZ ŞART SAYILABİLECEK BİR ÖZELLİK TAŞIMADIĞINI, MENFAATLER DENGESİ BAKIMINDAN BİR HAKSIZLIK OLMADIĞINI KABUL EDER.   \r\n\r\n4- SATICI BİLGİLERİ\r\n\r\nUnvanı: Çiçek Filem\r\n\r\nAdresi:  Tahtakale mahallesi. Fırat Caddesi No:2/A Avcılar/İstanbul\r\n\r\nTel: 0539 414 31 05\r\n\r\nE-posta: info@cicekfilem.com\r\n\r\n5- ALICI BİLGİLERİ\r\n\r\nAd Soyad:  \r\n\r\nTel:\r\n\r\nE-Posta:\r\n\r\n6- SÖZLEŞME KONUSU ÜRÜN BİLGİLERİ\r\n\r\nMalın / Ürünün / Hizmetin türü, miktarı, marka/modeli, rengi adedi, satış bedeli, ödeme şekli, Aşağıda belirtildiği gibidir:\r\n\r\nGenel Toplam(Vergiler Dâhil): … TL\r\n\r\nİade halinde Taşıyıcı Bilgileri: Kargo\r\n\r\nCayma bildiriminin yapılacağı;\r\n\r\nAdres: Çakmak mahallesi Aşkın sokak  no:25/A  Ümraniye / İstanbul\r\n\r\nFaks: 0216 594 68 46\r\n\r\nElektronik posta adresi: bilgi@surprizmeyve.com\r\n\r\nÜrün Teslimat Süreleri\r\n\r\nŞubelerimizin bulunduğu illerde aynı gün de teslimatlarımız bulunmaktadır.\r\n\r\nŞubelerimizin bulunmadığı şehirlere gönderilen Kek-Kurabiye ve Truffle ürünlerinin teslim süreleri 1-4 iş günüdür. Gün içersin de saat 13:00\'a kadar oluşturulan siparişler aynı gün kargoya verilir. 13:00\'dan sonra oluşturulan siparişler bir sonraki gün kargoya verilir. Kargoya verilen ürünlerin teslimat süreleri tatil günlerine, şehir ve ilçeye göre değişiklik gösterebilir.\r\n\r\nŞubelerimizin bulunduğu şehirlere gönderilen ürünlerimiz (sadece kargo ile gönderime uygun ürünler hariç) teslimatı seçtiğiniz tarih ve (varsa) saat aralığı içerisinde gerçekleştirilecektir.\r\n\r\n 7- GENEL HÜKÜMLER\r\n\r\n7.1- Alıcı, Madde 6\'da belirtilen Sözleşme konusu ürünün temel nitelikleri, satış fiyatı ve ödeme şekli ile teslimata ilişkin tüm ön bilgileri okuyup bilgi sahibi olduğunu ve elektronik ortamda gerekli teyidi verdiğini beyan eder.\r\n\r\n7.2- Sözleşme konusu ürün, yasal 30 (otuz) günlük süreyi aşmamak koşulu ile her bir ürün için Alıcı\'nın yerleşim yerinin uzaklığına bağlı olarak ön bilgiler içinde açıklanan süre içinde Alıcı veya gösterdiği adresteki kişi/kuruluşa teslim edilir. Satıcı bu yükümlülüğüne aykırı davranır ise tüketici işbu Sözleşmeyi feshedebilir. Sözleşme’nin feshi durumunda, Satıcı, varsa teslimat masrafları da dâhil olmak üzere tahsil edilen tüm ödemeleri fesih bildiriminin kendisine ulaştığı tarihten itibaren 14 (on dört) gün içinde tüketiciye ilgili mevzuat uyarınca belirlenen kanuni faiziyle birlikte geri ödemek ve varsa tüketiciyi borç altına sokan tüm kıymetli evrak ve benzeri belgeleri iade etmek zorundadır.\r\n\r\n7.3- Sözleşme konusu ürün, Alıcı\'dan başka bir kişi/kuruluşa teslim edilecek ise, teslim edilecek kişi/kuruluşun teslimatı kabul etmemesinden Satıcı sorumlu tutulamaz.\r\n\r\n7.4 Satıcı, Sözleşme konusu ürünün sağlam, eksiksiz, siparişte belirtilen niteliklere uygun olarak teslim edilmesinden sorumludur. Haklı bir sebebe dayanmak şartıyla Satıcı, Sözleşme ’den doğan ifa yükümlülüğünün süresi dolmadan, Alıcı’ya eşit kalite ve fiyatta mal veya hizmet tedarik edebilir.\r\n\r\n7.5 Sözleşme konusu ürünün teslimatı için işbu Sözleşme’nin elektronik ortamda teyit edilmesi ve Sözleşme konusu siparişin bedelinin ödenmesi şarttır. Herhangi bir nedenle ürün bedeli ödenmez veya banka kayıtlarında iptal edilir ise, Satıcı ürün teslimi yükümlülüğünden kurtulmuş kabul edilir.\r\n\r\n7.6 Satıcı sipariş konusu mal ya da hizmet ediminin yerine getirilmesinin imkânsızlaştığı hallerde durumu öğrendiği tarihten itibaren 3 (üç) gün içerisinde Alıcı\'ya durumu yazılı olarak veya kalıcı veri saklayıcısı ile bildirmekle yükümlüdür. Bu durumda Satıcı teslimat masrafları da dâhil olmak üzere tahsil edilen tüm ödemeleri bildirim tarihinden itibaren en geç 14 (on dört) gün içerisinde Alıcı’ya iade eder.\r\n\r\n7.7 Satıcı, malın Alıcı ya da Alıcı’nın taşıyıcı dışında belirleyeceği üçüncü bir kişiye teslimine kadar oluşan kayıp ve hasarlardan sorumludur.\r\n\r\n7.8 Alıcı’nın Satıcının belirlediği taşıyıcı dışında başka bir taşıyıcı ile malın gönderilmesini talep etmesi durumunda, malın ilgili taşıyıcıya tesliminden itibaren oluşabilecek kayıp ya da hasardan Satıcı sorumlu değildir.\r\n\r\n7.9 Satıcı tarafından sunulan hizmet perakende satış kapsamında tüketiciye yöneliktir; Satıcı, Alıcı’nın yeniden satış amacı bulunduğundan şüphe etmesi halinde işbu Sözleşme kurulmuş olsa dahi siparişi iptal etme ve ürünleri teslim etmeme hakkını saklı tutar.\r\n\r\n7.10 Sözleşme konusu ürün, yasal 30 (otuz) günlük süreyi aşmamak koşulu ile her bir ürün için Alıcı\'nın yerleşim yerinin uzaklığına bağlı olarak internet sitesinde ön bilgiler içinde açıklanan süre içinde Alıcı veya gösterdiği adresteki kişi/kuruluşa, Satıcının anlaşmalı olduğu kargo firması tarafından teslim edilir. Satıcı sattığı ürünleri kargo firmaları aracılığı ile Alıcı’ya göndermekte ve teslim ettirmektedir. Genel olarak aksi belirtilmediği sürece teslimat masrafları (kargo ücreti vb.) Alıcı’ya aittir. Satıcı satış anında yürüttüğü ve internet sitesinde şartlarını ilan ettiği kampanyaların sonucuna bağlı olarak söz konusu teslimat masraflarının tamamını ya da bir kısmını Alıcı’ya yansıtmayabilir.\r\n\r\n8- CAYMA HAKKI\r\n\r\n6502 sayılı Tüketicinin Korunması Hakkında Kanun ve Mesafeli Sözleşmeler Yönetmeliği’nin ilgili hükümleri uyarınca;\r\n\r\n8.1 Tüketici; mal satışına ilişkin mesafeli sözleşmelerde, malı teslim aldığı tarihten itibaren 14 (on dört) gün içerisinde herhangi bir gerekçe göstermeksizin ve cezai şart ödemeksizin sözleşmeden cayma hakkına sahiptir. Ancak tüketici, işbu Sözleşme’nin kurulmasından malın teslimine kadar olan süre içinde de cayma hakkını kullanabilir. Cayma hakkının kullanıldığına dair bildirimin bu süre içinde yazılı olarak veya kalıcı veri saklayıcısı ile satıcı veya sağlayıcıya yöneltilmiş olması yeterlidir.\r\n\r\nCayma hakkı süresinin belirlenmesinde;\r\n\r\nTek sipariş konusu olup ayrı ayrı teslim edilen mallarda, tüketicinin veya tüketici tarafından belirlenen üçüncü kişinin son malı teslim aldığı gün,\r\nBirden fazla parçadan oluşan mallarda, tüketicinin veya tüketici tarafından belirlenen üçüncü kişinin son parçayı teslim aldığı gün,\r\nBelirli bir süre boyunca malın düzenli tesliminin yapıldığı sözleşmelerde, tüketicinin veya tüketici tarafından belirlenen üçüncü kişinin ilk malı teslim aldığı gün esas alınır.\r\n8.2 Tüketicinin cayma hakkı;\r\n\r\nİ. Tüketicinin istekleri veya kişisel ihtiyaçları doğrultusunda hazırlanan mallara,\r\n\r\nİİ. Çabuk bozulabilen veya son kullanma tarihi geçebilecek malların teslimine,\r\n\r\nİİİ. Tesliminden sonra ambalaj, bant, mühür, paket gibi koruyucu unsurları açılmış olan mallardan; iadesi sağlık ve hijyen açısından uygun olmayanların teslimine,\r\n\r\nİV. Tesliminden sonra başka ürünlerle karışan ve doğası gereği ayrıştırılması mümkün olmayan mallara,\r\n\r\nMalın tesliminden sonra ambalaj, bant, mühür, paket gibi koruyucu unsurları açılmış olması halinde maddi ortamda sunulan kitap, dijital içerik ve bilgisayar sarf malzemelerine,\r\nVİ. Abonelik sözleşmesi kapsamında sağlananlar dışında, gazete ve dergi gibi süreli yayınların teslimine,\r\n\r\nVİİ. Belirli bir tarihte veya dönemde yapılması gereken, konaklama, eşya taşıma, araba kiralama, yiyecek-içecek tedariki ve eğlence veya dinlenme amacıyla yapılan boş zamanın değerlendirilmesine,\r\n\r\nVİİİ. Elektronik ortamda anında ifa edilen hizmetler veya tüketiciye anında teslim edilen gayri maddi mallara,\r\n\r\n İX. Cayma hakkı süresi sona ermeden önce, tüketicinin onayı ile ifasına başlanan hizmetlere ve\r\n\r\nFiyatı finansal piyasalardaki dalgalanmalara bağlı olarak değişen ve satıcı veya sağlayıcının kontrolünde olmayan mal veya hizmetlere ilişkin sözleşmelere uygulanmaz.\r\n8.3- Tüketicinin cayma hakkını kullanması halinde satıcı veya sağlayıcı, cayma bildiriminin kendisine ulaştığı tarihten itibaren en geç 14 (on dört) gün içerisinde almış olduğu toplam bedeli ve tüketiciyi borç altına sokan kıymetli evrak ve benzeri her türlü belgeyi tüketiciye hiçbir masraf yüklemeksizin iade etmekle yükümlüdür.\r\n\r\n8.4- Tüketici cayma içinde malı, işleyişine, teknik özelliklerine ve kullanım talimatlarına uygun bir şekilde kullandığı takdirde meydana gelen değişiklik ve bozulmalardan sorumlu olmayacaktır.\r\n\r\n8.5- Tüketici, cayma hakkını kullandığında satıcının ön bilgilendirmede iade için belirttiği taşıyıcı aracılığıyla malı geri gönderir ise, iadeye ilişkin masrafları ödemekle sorumlu tutulamayacaktır. Satıcı ön bilgilendirmede iade için herhangi bir taşıyıcıyı belirtmediği durumda ise, tüketiciden iade masrafına ilişkin herhangi bir bedel talep edilemez. İade için ön bilgilendirmede belirtilen taşıyıcının, tüketicinin bulunduğu yerde şubesi olmaması durumunda satıcı, ilave hiçbir masraf talep etmeksizin iade edilmek istenen malın tüketiciden alınmasını sağlamakla yükümlüdür.\r\n\r\n8.6- Tüketici, satıcının malı kendisinin geri alacağına dair bir teklifte bulunmadıkça, tüketici cayma hakkını kullandığına ilişkin bildirimi yönelttiği tarihten itibaren 10 (on) gün içinde malı satıcıya geri göndermek zorundadır.\r\n\r\n8.7- Mesafeli Sözleşmeler Yönetmeliği\'nin 15. maddesinin 1. fıkrasının a bendinde de belirtildiği üzere kişiye özel olarak hazırlanan ürünlerde tüketicilerin cayma hakkı bulunmamaktadır.\r\n\r\nSiparişlerimiz müşterilerimize özel hazırlanıldığından sipariş verildikten ve ürünler hazırlık aşamasına geçildikten sonra müşterimizin siparişlerini iptal etme, değiştirme ve/veya cayma hakları bulunmamaktadır.\r\n\r\n9- DELİL ANLAŞMASI VE YETKİLİ MAHKEME\r\n\r\n9.1- Bu Sözleşme ‘den ve/veya uygulanmasından doğabilecek her türlü uyuşmazlığın çözümünde Satıcı kayıtları (bilgisayar-ses kayıtları gibi manyetik ortamdaki kayıtlar dâhil) kesin delil oluşturur. Taraflar, Sözleşme’nin uygulanmasından ve yorumundan doğan ihtilaflarda mevzuat çerçevesinde belirlenen parasal sınırlar dâhilinde Alıcı ve Satıcı ’nın ikametgâhının bulunduğu yerdeki Tüketici Hakem Heyetleri aşan durumlarda Alıcı\'nın ve Satıcı \'nın Tüketici Mahkemeleri yetkili olacağını kabul etmiştir.\r\n\r\n9.2- Parasal sınıra ilişkin bilgiler aşağıdadır:\r\n\r\n2017 yılı için tüketici hakem heyetlerine yapılacak başvurularda değeri:\r\n\r\na) 2.400 (iki bin dört yüz) Türk Lirasının altında bulunan uyuşmazlıklarda ilçe tüketici hakem heyetleri,\r\nb) Büyükşehir statüsünde olan illerde 2.400 (iki bin dört yüz) Türk Lirası ile 3.610 (üç bin altı yüz on) Türk Lirası arasındaki uyuşmazlıklarda il tüketici hakem heyetleri,\r\nc) Büyükşehir statüsünde olmayan illerin merkezlerinde 3.610 (üç bin altı yüz on) Türk Lirasının altında bulunan uyuşmazlıklarda il tüketici hakem heyetleri,\r\nç) Büyükşehir statüsünde olmayan illere bağlı ilçelerde 2.400 (iki bin dört yüz) Türk Lirası ile 3.610 (üç bin altı yüz on) Türk Lirası arasındaki uyuşmazlıklarda il tüketici hakem heyetleri, görevlidir.', 1, NULL, NULL, NULL, '', 0, '2020-05-26 16:20:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `TITLE` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `DESCRIPTION` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `STOCK` int(11) NOT NULL,
  `PRICE` float NOT NULL,
  `URL` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `MAIN_CATEGORY` int(100) NOT NULL,
  `VIEW` int(11) NOT NULL DEFAULT 0,
  `STATUS` tinyint(1) NOT NULL DEFAULT 0,
  `ACTIVE` tinyint(1) NOT NULL DEFAULT 1,
  `PROCESS_DATE` datetime NOT NULL DEFAULT current_timestamp(),
  `PRODUCT_TYPE` tinyint(1) NOT NULL DEFAULT 1,
  `TAX` int(11) NOT NULL,
  `INCLUDE_TAX` tinyint(1) NOT NULL DEFAULT 1,
  `DISCOUNT_PRICE` float DEFAULT NULL,
  `MIN_STOCK` int(11) NOT NULL DEFAULT 0,
  `STOCK_CODE` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ABROAD` tinyint(1) NOT NULL DEFAULT 0,
  `CUSTOMER_UPLOAD` tinyint(1) NOT NULL DEFAULT 0,
  `DECI` float DEFAULT NULL,
  `FREE_CARGO` tinyint(1) NOT NULL DEFAULT 0,
  `CARGO_NOTE` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `TITLE`, `DESCRIPTION`, `STOCK`, `PRICE`, `URL`, `MAIN_CATEGORY`, `VIEW`, `STATUS`, `ACTIVE`, `PROCESS_DATE`, `PRODUCT_TYPE`, `TAX`, `INCLUDE_TAX`, `DISCOUNT_PRICE`, `MIN_STOCK`, `STOCK_CODE`, `ABROAD`, `CUSTOMER_UPLOAD`, `DECI`, `FREE_CARGO`, `CARGO_NOTE`) VALUES
(52, 'Kırmızı 7 Adet Gül', '<p>Kırmızı Güllerin Bakımı : asda</p>', 999, 14.5, 'kırmızı-7-adet-gul', 0, 0, 1, 1, '2020-05-27 01:25:12', 1, 18, 1, 12.4, 9, 'GUL-051K', 0, 0, 1, 1, 'Geldik yoktunuz'),
(53, 'Beyaz Lilyum Saksılı', '<p><b>Beyaz Lilyum Saksılı</b><br></p>', 111, 570.8, 'beyaz-lilyum-saksılı', 0, 0, 1, 1, '2020-05-27 04:03:01', 1, 18, 1, 550.6, 1, 'LILO-90', 0, 0, 2, 1, 'Lilyum');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `PRODUCT_ID` int(11) NOT NULL,
  `IMAGE_ID` int(11) NOT NULL,
  `IS_MAIN_IMAGE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`PRODUCT_ID`, `IMAGE_ID`, `IS_MAIN_IMAGE`) VALUES
(52, 32, 1),
(53, 33, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `PRODUCT_ID` int(11) NOT NULL,
  `ORDER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `ID` int(11) NOT NULL,
  `LOGO` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `TITLE` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `PHONE` varchar(12) COLLATE utf8mb4_bin NOT NULL,
  `EMAIL` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `ACTIVE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`ID`, `LOGO`, `TITLE`, `PHONE`, `EMAIL`, `ACTIVE`) VALUES
(1, 'uploads/logo.png', 'TT Yazılım E-Ticaret Sitesi', '5393239896', 'tunahan@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `PASSWORD` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `ACTIVE` tinyint(1) NOT NULL DEFAULT 1,
  `SUPER_ADMIN` tinyint(1) NOT NULL DEFAULT 0,
  `PROCESS_DATE` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `USERNAME`, `PASSWORD`, `ACTIVE`, `SUPER_ADMIN`, `PROCESS_DATE`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 1, 1, '2020-05-19 02:50:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `card_note`
--
ALTER TABLE `card_note`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`PRODUCT_ID`,`CATEGORY_ID`,`IS_MAIN`),
  ADD KEY `category_product_cons` (`CATEGORY_ID`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `blog_fk` (`PRODUCT_ID`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `MENU_TYPE` (`MENU_TYPE`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `REFERENCE_NO` (`REFERENCE_NO`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`PRODUCT_ID`,`IMAGE_ID`,`IS_MAIN_IMAGE`),
  ADD KEY `image_product_cons` (`IMAGE_ID`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD KEY `product_order_con` (`PRODUCT_ID`),
  ADD KEY `order_product_cons` (`ORDER_ID`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `card_note`
--
ALTER TABLE `card_note`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2443;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_cons` FOREIGN KEY (`CATEGORY_ID`) REFERENCES `category` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `product_category_cons` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `product` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `image_product_cons` FOREIGN KEY (`IMAGE_ID`) REFERENCES `image` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `product_image_cons` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `product` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `order_product_cons` FOREIGN KEY (`ORDER_ID`) REFERENCES `orders` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `product_order_con` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `product` (`ID`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
