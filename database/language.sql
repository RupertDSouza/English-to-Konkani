-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 08:34 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `language`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_words`
--

DROP TABLE IF EXISTS `all_words`;
CREATE TABLE `all_words` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) DEFAULT NULL,
  `Kon` varchar(50) DEFAULT NULL,
  `gramtyp` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_words`
--

INSERT INTO `all_words` (`Sno`, `Eng`, `Kon`, `gramtyp`) VALUES
(1, 'what', 'kaalee', 'interrogation'),
(2, 'name', 'Naav', NULL),
(3, 'how', 'kaeshe', 'Interrogative'),
(4, 'you\'re', 'Thuje', NULL),
(5, 'many', 'musth', 'adjective'),
(6, 'why', 'keetyaak', 'interrogation'),
(7, 'here', 'hanga', 'adverb'),
(8, 'type', 'baaraii', 'verb'),
(9, 'how many', 'kithle', 'interrogation'),
(10, 'are', 'asath', NULL),
(11, 'your', 'thumche', 'pronoun'),
(12, 'with', 'sevem', 'preposition'),
(13, 'at', 'thachya', NULL),
(14, 'they', 'thani', NULL),
(15, 'studied', 'shikle', 'verb'),
(16, 'rules', 'neeyaam', NULL),
(17, 'for', 'paasun', NULL),
(18, 'hours', 'ghante', NULL),
(19, 'decided', 'nerdhar kele', NULL),
(20, 'that', 'ki', NULL),
(21, 'writing', 'borovnche', 'verb'),
(22, 'made', 'karaile', NULL),
(23, 'sense', 'arth', NULL),
(24, 'because', 'thya kathe', NULL),
(25, 'it', 'thea', NULL),
(26, 'clear', 'spashtt', NULL),
(27, 'at hand', 'hatant', NULL),
(28, 'you', 'thumi', 'pronoun'),
(29, 'i\'m', 'Hamv', NULL),
(30, 'i am', 'Hamv', NULL),
(31, 'me', 'Hamv', NULL),
(32, 'he', 'to', NULL),
(33, 'said', 'sangle', NULL),
(34, 'he said', 'tane mule', NULL),
(35, 'where', 'kai', 'Interrogative'),
(36, 'and', 'ani', NULL),
(37, 'made sense', 'arth zale', 'verb'),
(38, 'in english', 'english anth', NULL),
(39, 'writing are', 'borovn asath', NULL),
(40, 'fuck', 'lot', NULL),
(41, 'i am good', 'hanv boro aasa', NULL),
(42, 'this', 'yee', 'pronoun'),
(43, 'how do you do', 'koosoň (or kashnee ) āsāi ', NULL),
(44, 'good', 'baaree', ''),
(45, 'work', 'kaam', 'verb'),
(46, 'does', 'kartha', '3pr_verb'),
(47, 'this works fine', 'yaee baarekaarn kaam kaarthaa', NULL),
(48, 'works', 'kaamkartha', 'verb'),
(49, 'you all', 'thumi poora', 'pronoun'),
(50, 'today', 'aaza', 'adverb'),
(51, 'ate', 'kele', 'verb'),
(52, 'i', 'hanve', NULL),
(53, 'did eat', 'kele ghi', 'verb'),
(54, 'doing', 'karn', 'verb'),
(55, 'to write', 'boroovnkk', NULL),
(56, 'final code', 'akair kanun', 'noun'),
(57, 'you eat banana', 'thumi kele khaaya', NULL),
(58, 'did do', 'kaelee', NULL),
(59, 'my', 'mujee', 'pronoun');

-- --------------------------------------------------------

--
-- Table structure for table `table_a`
--

DROP TABLE IF EXISTS `table_a`;
CREATE TABLE `table_a` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_a`
--

INSERT INTO `table_a` (`Sno`, `Eng`, `Kon`, `gramtyp`) VALUES
(1, 'abandon', 'sod', 'verb'),
(2, 'abandonment', 'niradhar', 'adjective'),
(3, 'abash', 'lazai', 'verb'),
(4, 'abbess', 'vodiln', 'noun'),
(5, 'abbreviate', 'motvo kar', 'verb'),
(6, 'abbreviation', 'motvepon', 'verb'),
(7, 'abdomen', 'pot', 'noun'),
(8, 'abet', 'kumok kar', 'verb'),
(9, 'abettor', 'kumok kartolo', 'noun'),
(10, 'abeyance', 'khali asa', 'noun'),
(11, 'abhorrence', 'kantalo', 'noun'),
(12, 'abide', 'rau', 'verb'),
(13, 'ability', 'samarthi', 'noun'),
(14, 'abject', 'uno', 'adjective'),
(15, 'abjectness', 'unepon', 'noun'),
(16, 'abjuration', 'parmanar', 'verb'),
(17, 'able', 'saktivont', 'adjective'),
(18, 'abode', 'thikanen', 'noun'),
(19, 'aboard', 'tarvar tsad', 'preposition'),
(20, 'abolish', 'damp', 'verb'),
(21, 'abolition', 'raddu', 'noun'),
(22, 'aborigines', 'mulvasi', 'noun'),
(23, 'abortion', 'volaunen', 'noun'),
(24, 'abound', 'bhorn asa', 'verb'),
(25, 'about', 'bahusa', 'preposition'),
(26, 'above', 'voir', 'preposition'),
(27, 'abrade', 'kad', 'verb'),
(28, 'abreast', 'harin', 'adverb'),
(29, 'abroad', 'bair', 'adverb'),
(30, 'abrupt', 'aucit', 'adjective'),
(31, 'abscess', 'fod', 'noun'),
(32, 'absence', 'gairhazari', 'adverb'),
(33, 'absent', 'gairhazar', 'adverb'),
(34, 'absolute', 'sampurn', 'adverb'),
(35, 'absolution', 'bogsanen', 'noun'),
(36, 'absolve', 'bogsi', 'verb'),
(37, 'absorb', 'girai', 'verb'),
(38, 'abstain', 'jinzvar dovor', 'verb'),
(39, 'abstemious', 'haltan piyeuntso', 'adverb'),
(40, 'abstract ', 'kad', 'verb'),
(41, 'abstraction', 'vingad karci cintna', 'noun'),
(42, 'abundance', 'sampurnai', 'noun'),
(43, 'abundant', 'sampurn', 'adverb'),
(44, 'abuse', 'gali sang', 'verb'),
(45, 'abusive', 'gali', 'adverb'),
(46, 'academy', 'vidyesal', 'noun'),
(47, 'accelerate', 'vegin kar', 'verb'),
(48, 'accept', 'kanghe', 'verb'),
(49, 'acceptable', 'mogal', 'adverb'),
(50, 'acceptation', 'manuap', 'noun'),
(51, 'access', 'rig', 'noun'),
(52, 'accessible', 'rigatso', 'adverb'),
(53, 'accident', 'gadap', 'noun'),
(54, 'accidental', 'aucit', 'adverb'),
(55, 'acclamation', 'hoglap', 'noun'),
(56, 'accommodate', 'zago di', 'verb'),
(57, 'accommodation', 'bori suat', 'noun'),
(58, 'accompaniment', 'dibban', 'noun'),
(59, 'accompany', 'sangata', 'verb'),
(60, 'accomplish', 'kabar kar', 'verb'),
(61, 'accord', 'sama pod', 'verb'),
(62, 'accordance', 'parmane', 'noun'),
(63, 'accordingly', 'dekun', 'adjective'),
(64, 'account', 'lek', 'noun'),
(65, 'accumulate', 'ras kar', 'verb'),
(66, 'accumulation', 'ras', 'noun'),
(67, 'accuracy', 'zagrutai', 'noun'),
(68, 'accurate', 'zagrut', 'adverb'),
(69, 'accursed', 'sirap podullo', 'adverb'),
(70, 'accusation', 'firyad', 'noun'),
(71, 'accuse ', 'firyad di', 'verb'),
(72, 'ache', 'duk', 'noun'),
(73, 'achieve', 'sampadan', 'verb'),
(74, 'acid', 'ambot', 'adverb'),
(75, 'acidity', 'amsan', 'noun'),
(76, 'ackowledge', 'voppige kar', 'verb'),
(77, 'ackowledgement', 'rasid', 'noun'),
(78, 'acquire', 'zod', 'verb'),
(79, 'across', 'poltadi', 'preposition'),
(80, 'act', 'karyen', 'noun'),
(81, 'action', 'karni', 'noun'),
(82, 'active', 'tsurk', 'adjective'),
(83, 'activity', 'sudsudai', 'noun'),
(84, 'actor', 'natakar', 'noun'),
(85, 'actual', 'kharots', 'adverb'),
(86, 'acute', 'dhar asullo', 'adverb'),
(87, 'adapt', 'zata', 'verb'),
(88, 'add', 'aniki ghal', 'verb'),
(89, 'addict', 'lag', 'verb'),
(90, 'addicted', 'lagullo', 'adverb'),
(91, 'addition', 'kusri', 'noun'),
(92, 'additional', 'tsadavot', 'adverb'),
(93, 'address', 'ulai', 'verb'),
(94, 'address', 'melvilas', 'adjective'),
(95, 'adequate', 'layek', 'adverb'),
(96, 'adjoin', 'yekkot', 'verb'),
(97, 'administer', 'tsalai', 'verb'),
(98, 'administration', 'karkano', 'noun'),
(99, 'administrator', 'karkaneagar', 'noun'),
(100, 'admiration', 'ajap', 'noun'),
(101, 'admission', 'rig', 'verb'),
(102, 'admit', 'kobul', 'verb'),
(103, 'adopt', 'posko kar', 'verb'),
(104, 'adoption', 'poskepon', 'verb'),
(105, 'adoptive ', 'posko', 'adverb'),
(106, 'adorable', 'namaskar favo zallo', ''),
(107, 'adoration', 'namaskar', 'noun'),
(108, 'adore', 'namaskar', 'verb'),
(109, 'adult', 'vodlo', 'adverb'),
(110, 'adulterate', 'pad kar', 'verb'),
(111, 'advance', 'mungad', 'verb'),
(112, 'advancement', 'badti', 'noun'),
(113, 'advantage', 'faido', 'noun'),
(114, 'advent', 'advent', 'noun'),
(115, 'adventure', 'adrust', 'noun'),
(116, 'adverse', 'virodhi', 'adverb'),
(117, 'adversity', 'kast', 'noun'),
(118, 'advertise', 'kalit kar', 'ver'),
(119, 'advertisement', 'kabar', 'noun'),
(120, 'advice', 'bud', 'noun'),
(121, 'advisable', 'kartso', 'adverb'),
(122, 'advise', 'bud sang', 'verb'),
(123, 'advocate', 'vakil', 'noun'),
(124, 'aerial', 'vareasto', 'adverb'),
(125, 'affair', 'karbar', 'noun'),
(126, 'affect', 'lag', 'verb'),
(127, 'affectation', 'kapat', 'noun'),
(128, 'affected', 'kapati', 'adverb'),
(129, 'affection', 'vondon', 'noun'),
(130, 'afford', 'di', 'verb'),
(131, 'affront', 'mukar vots', 'verb'),
(132, 'afraid ', 'bhen', 'adverb'),
(133, 'after', 'uprant', 'preposition'),
(134, 'afterwards', 'uprant', 'adjective'),
(135, 'after all', 'tari', 'adjective'),
(136, 'again', 'porthean', 'adjective'),
(137, 'against', 'sastracer', 'preposition'),
(138, 'age', 'prai', 'noun'),
(139, 'aged', 'prayetso', 'adverb'),
(140, 'agency', 'dalalpon', 'noun'),
(141, 'agent', 'dalal', 'noun'),
(142, 'aggregate', 'yektai kar', 'verb'),
(143, 'aggregation', 'melounen', 'noun'),
(144, 'aggressive', 'zulmetso', 'adverb'),
(145, 'agility', 'sudalai', 'noun'),
(146, 'ago', 'adin', 'adjective'),
(147, 'agree', 'kabul', 'verb'),
(148, 'agreement', 'karar', 'noun'),
(149, 'agriculture', 'buinsagoli', 'noun'),
(150, 'aid', 'adhar', 'noun'),
(151, 'aim', 'sevot', 'verb'),
(152, 'air', 'varen', 'noun'),
(153, 'akin', 'sairo', 'adverb'),
(154, 'alarm', 'avantar', 'noun'),
(155, 'alcohol', 'madyasar', 'noun'),
(156, 'alert', 'zagrut', 'adverb'),
(157, 'algebra', 'akseraganit', 'noun'),
(158, 'alight', 'deun', 'verb'),
(159, 'alike', 'sama', 'adverb'),
(160, 'aliment', 'khan', 'noun'),
(161, 'alive', 'jivo', 'adverb'),
(162, 'all', 'sakad', 'adverb'),
(163, 'allegation', 'daklo', 'noun'),
(164, 'alligator', 'sisar', 'noun'),
(165, 'allot ', 'vant', 'verb'),
(166, 'allotment', 'vanto', 'noun'),
(167, 'allow', 'sod', 'verb'),
(168, 'allowance', 'kabul', 'noun'),
(169, 'alloy', 'borsi', 'verb'),
(170, 'almighty', 'sarvupodvedar', 'adverb'),
(171, 'almond', 'badam', 'noun'),
(172, 'almost', 'tsad-unen', 'adjective'),
(173, 'alone', 'aplea-itleak', 'adverb'),
(174, 'along', 'kade', 'adjective'),
(175, 'aloud', 'vodlean', 'adjective'),
(176, 'alphabet', 'aksaranmala', 'noun'),
(177, 'already', 'poilots', 'adjective'),
(178, 'also', 'sait', 'adverb'),
(179, 'altar', 'altar', 'noun'),
(180, 'alter', 'badal', 'noun'),
(181, 'alteration', 'badlap', 'verb'),
(182, 'alternate', 'adalbadal', 'adverb'),
(183, 'alternately', 'adalbadal zaun', 'adjective'),
(184, 'alternative', 'vintsap', 'noun'),
(185, 'although', 'zaritar', 'conjunction'),
(186, 'altitude', 'ubarai', 'noun'),
(187, 'altogether', 'vottu', 'adjective'),
(188, 'alum', 'phatki', 'noun'),
(189, 'always', 'sadants', 'adjective'),
(190, 'ambiguous', 'gudarthatso', 'adverb'),
(191, 'ambition', 'ahankar', 'noun'),
(192, 'ambitious', 'ahankari', 'adverb'),
(193, 'ambulance', 'phirti-aspatri', 'noun'),
(194, 'amends', 'farikpon', 'verb'),
(195, 'among', 'paiki', 'preposition'),
(196, 'amount', 'rakkam', 'noun'),
(197, 'amusement', 'santos', 'noun'),
(198, 'analogy', 'sarken', 'noun'),
(199, 'analysis', 'pariksa', 'noun'),
(200, 'ananas', 'anas', 'noun'),
(201, 'anarchy', 'rainatullen', 'noun'),
(202, 'anatomy', 'angasodna', 'noun'),
(203, 'ancestor', 'malgodo', 'noun'),
(204, 'anchor', 'nangor', 'noun'),
(205, 'ancient', 'porno', 'adverb'),
(206, 'angel', 'bodvo', 'noun'),
(207, 'angelus', 'amori', 'noun'),
(208, 'anger', 'rag', 'noun'),
(209, 'angle', 'gari', 'noun'),
(210, 'angry', 'ragist', 'adverb'),
(211, 'anguish', 'kalvalo', 'noun'),
(212, 'anil', 'niulicen zad', 'noun'),
(213, 'animal', 'jiuzat', 'noun'),
(214, 'animate', 'vantsai', 'verb'),
(215, 'anniversary', 'vorsatso dis', 'adverb'),
(216, 'annotation', 'tsatrai', 'noun'),
(217, 'announce', 'khabar ad', 'verb'),
(218, 'annoy', 'karkar kar', 'verb'),
(219, 'annoying', 'karkaratso', 'adverb'),
(220, 'annual', 'vorsatso', 'adverb'),
(221, 'anonymous', 'naunnatullo', 'noun'),
(222, 'another', 'aniyek', 'adverb'),
(223, 'answer', 'zavab', 'noun'),
(224, 'ant', 'mui', 'noun'),
(225, 'anterior', 'adlo', 'adverb'),
(226, 'anthem', 'antifon', 'noun'),
(227, 'anticipate', 'adin kane', 'verb'),
(228, 'anxiety', 'husko', 'noun'),
(229, 'anxious', 'bezari', 'adverb'),
(230, 'any', 'kasolo', 'adverb'),
(231, 'anywhere', 'sarvu thain', 'adjective'),
(232, 'apart', 'vingad', 'adjective'),
(233, 'apartment', 'malai', 'noun'),
(234, 'aperture', 'fut', 'noun'),
(235, 'apologize', 'map mag', 'verb'),
(236, 'apology', 'udaran', 'noun'),
(237, 'apparent', 'disto', 'adverb'),
(238, 'appeal', 'maag', 'verb');

-- --------------------------------------------------------

--
-- Table structure for table `table_b`
--

DROP TABLE IF EXISTS `table_b`;
CREATE TABLE `table_b` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_b`
--

INSERT INTO `table_b` (`Sno`, `Eng`, `Kon`, `gramtyp`) VALUES
(1, 'brother', 'bhaav', 'noun'),
(2, 'banana', 'kele', 'noun'),
(3, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_c`
--

DROP TABLE IF EXISTS `table_c`;
CREATE TABLE `table_c` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_c`
--

INSERT INTO `table_c` (`Sno`, `Eng`, `Kon`, `gramtyp`) VALUES
(1, 'cabal', 'tand', 'noun'),
(2, 'cake', 'bakri', 'noun'),
(3, 'cabbage', 'kob', 'noun'),
(4, 'cabin', 'kotri', 'noun'),
(5, 'cabinet', 'kud', 'noun'),
(6, 'cable', 'alat', 'noun'),
(7, 'cadence', 'podnen', 'noun'),
(8, 'cadet', 'dakto put', 'noun'),
(9, 'cajole', 'fuslai', 'verb'),
(10, 'calculate', 'lek', 'verb'),
(11, 'calculation', 'lek', 'noun'),
(12, 'calender', 'pancang', 'noun'),
(13, 'calf', 'vasrun', 'noun'),
(14, 'caligraphy', 'barap', 'noun'),
(15, 'call', 'apoi', 'verb'),
(16, 'calling', 'apounen', 'noun'),
(17, 'calm', 'soukasai', 'adjective'),
(18, 'calmly', 'soukasayen', 'adjective'),
(19, 'camel', 'karen', 'noun'),
(20, 'camp', 'kamp', 'noun'),
(21, 'can', 'tankta', 'verb'),
(22, 'canal', 'tod', 'noun'),
(23, 'cancel', 'raddu kar', 'verb'),
(24, 'cancer', 'manpuli', 'noun'),
(25, 'candid', 'sado', 'adverb'),
(26, 'candidate', 'umeduar', 'noun'),
(27, 'candle', 'vat', 'noun'),
(28, 'cane', 'civo', 'noun'),
(29, 'cannon', 'nal', 'noun'),
(30, 'canon', 'kaido', 'noun'),
(31, 'canopy', 'pal', 'noun'),
(32, 'canvas', 'dadden lugat', 'noun'),
(33, 'cap', 'topi', 'noun'),
(34, 'capability', 'tran', 'noun'),
(35, 'capable', 'tran asullo', 'adverb'),
(36, 'cape', 'darnitso mulo', 'noun'),
(37, 'capacity', 'tran', 'noun'),
(38, 'capital', 'mukhya', 'adverb'),
(39, 'captain', 'kopit', 'noun'),
(40, 'captious', 'mosatso', 'adverb'),
(41, 'captivate', 'pisai', 'verb'),
(42, 'captive', 'bandivan', 'noun'),
(43, 'captivity', 'gulampon', 'noun'),
(44, 'capture', 'darnen', 'noun'),
(45, 'car', 'rath', 'noun'),
(46, 'career', 'daun', 'noun'),
(47, 'care', 'zatan', 'noun'),
(48, 'cardinal', 'kardial', 'adverb'),
(49, 'card', 'dat kagad', 'noun'),
(50, 'careful', 'zagrut', 'adverb'),
(51, 'careless', 'beparvi', 'adverb'),
(52, 'cargo', 'vojen', 'noun'),
(53, 'carious', 'pokal', 'adverb'),
(54, 'carmel', 'karmin', 'noun'),
(55, 'carnal', 'kuditso', 'adverb'),
(56, 'carnival', 'khel', 'noun'),
(57, 'carol', 'anand gayan', 'noun'),
(58, 'cascade', 'udkapodap', 'noun'),
(59, 'carving', 'kantounen', 'noun'),
(60, 'cart', 'bandi', 'noun'),
(61, 'carry', 'vovoi', 'verb'),
(62, 'carriage', 'gadi', 'noun'),
(63, 'carpet', 'zamkan', 'noun'),
(64, 'cash', 'nagdi ', 'noun'),
(65, 'cash-book', 'lakacen pustak', 'noun'),
(66, 'cashew', 'kaz', 'noun'),
(67, 'cashier', 'bartarap kar', 'verb'),
(68, 'cast', 'udai', 'verb'),
(69, 'caste', 'zat', 'noun'),
(70, 'castle', 'koten', 'noun'),
(71, 'casual', 'aucit', 'adverb'),
(72, 'cat', 'mazar', 'noun'),
(73, 'catch', 'dhar', 'verb'),
(74, 'catching', 'pagap', 'noun'),
(75, 'cathedral', 'saci-igraz', 'noun'),
(76, 'catholic', 'katholik', 'adverb'),
(77, 'cattle', 'gorun', 'noun'),
(78, 'casuality', 'karcen', 'noun'),
(79, 'causative', 'kartso', 'adverb'),
(80, 'cause', 'karan ', 'noun'),
(81, 'caution', 'bud', 'verb'),
(82, 'cautious', 'budivont', 'adverb'),
(83, 'cave', 'buyar', 'noun'),
(84, 'cavil', 'mudnai', 'verb'),
(85, 'ceilling', 'malo', 'noun'),
(86, 'celebrate', 'pasar', 'verb'),
(87, 'celebrated', 'navadgo', 'adverb'),
(88, 'celebration', 'pargat hoglap', 'noun'),
(89, 'celebrity', 'anand', 'noun'),
(90, 'cemetery', 'simiter', 'noun'),
(91, 'cement', 'garan gadsi', 'noun'),
(92, 'census', 'lokancen lek', 'noun'),
(93, 'cents', 'sakdo', 'noun'),
(94, 'central', 'moden asullo', 'adverb'),
(95, 'centre', 'maz', 'noun'),
(96, 'century', 'sataman', 'noun'),
(97, 'ceremony', 'sermoni', 'noun'),
(98, 'certain', 'kharo', 'adverb'),
(99, 'certainly', 'kharents', 'adjective'),
(100, 'certificate', 'asent', 'noun'),
(101, 'cerify', 'drad kar', 'verb'),
(102, 'chain', 'sankal', 'noun'),
(103, 'chair', 'kadel', 'noun'),
(104, 'chairman', 'sabhenaik', 'noun'),
(105, 'challenge', 'ladayek aponen', 'noun'),
(106, 'chamber', 'kud', 'noun'),
(107, 'chameleon', 'sirli', 'noun'),
(108, 'champion', 'vir', 'noun'),
(109, 'chance by', 'akasmat', 'verb'),
(110, 'chance', 'adrust', 'noun'),
(111, 'change', 'badlap', 'noun'),
(112, 'channel', 'khani', 'noun'),
(113, 'chapel', 'kopel', 'noun'),
(114, 'chapter', 'avasvar', 'noun'),
(115, 'character', 'ves', 'noun'),
(116, 'charcoal', 'inglo', 'noun'),
(117, 'charge', 'bhor', 'verb'),
(118, 'chariot', 'gadi', 'noun'),
(119, 'charity', 'izmol', 'noun'),
(120, 'charm', 'tantru', 'noun'),
(121, 'chase', 'sikar', 'verb'),
(122, 'charity', 'niskalai', 'noun'),
(123, 'chat', 'gazali', 'verb'),
(124, 'cheap', 'sovao', 'adverb'),
(125, 'cheat', 'mos', 'verb'),
(126, 'cheating', 'dago', 'verb'),
(127, 'check', 'ravoi', 'verb'),
(128, 'cheek', 'polo', 'noun'),
(129, 'cheer', 'khusal ker', 'verb'),
(130, 'chemist', 'rasavidyegar', 'noun'),
(131, 'chemistry', 'rasavidya', 'noun'),
(132, 'cheque', 'hundi', 'noun'),
(133, 'cherish', 'bhuzai', 'verb'),
(134, 'chew', 'tsab', 'noun'),
(135, 'chicken', 'kunkad', 'noun'),
(136, 'chicken-pox', 'kotlo', 'noun'),
(137, 'chief', 'mukhyest', 'adverb'),
(138, 'child', 'burgen', 'noun'),
(139, 'childhood', 'burgipirai', 'noun'),
(140, 'childish', 'burgeantso', 'adverb'),
(141, 'childless', 'burgenatullo ', 'adverb'),
(142, 'chill', 'thandso', 'noun'),
(143, 'chilli', 'mirsang', 'noun'),
(144, 'chimney', 'duvaci vat', 'noun'),
(145, 'chin', 'khadki', 'noun'),
(146, 'chocolate', 'cokolad', 'noun'),
(147, 'choice', 'vintsap', 'noun'),
(148, 'choir', 'kathereantso mel', 'noun'),
(149, 'choose', 'vints', 'verb'),
(150, 'chop', 'tstsai', 'verb'),
(151, 'christian', 'kristavantso', 'adverb'),
(152, 'church', 'igarz', 'noun'),
(153, 'circle', 'mandal', 'noun'),
(154, 'circuit', 'boundi', 'noun'),
(155, 'circulate', 'bountanin', 'verb'),
(156, 'citizen', 'seragar', 'noun'),
(157, 'city', 'sear', 'noun'),
(158, 'civil', 'sarkari', 'adverb'),
(159, 'claim', 'mag', 'verb'),
(160, 'clap', 'talio pet ', 'verb'),
(161, 'clarify', 'niulai', 'verb'),
(162, 'clash', 'adal', 'verb'),
(163, 'class', 'vorg', 'noun'),
(164, 'classic', 'namuneatso', 'adverb'),
(165, 'classify', 'vilevari', 'verb'),
(166, 'clay', 'avo', 'noun'),
(167, 'clean', 'nital', 'adverb'),
(168, 'clear', 'nital', 'adverb'),
(169, 'clergy', 'muniyarpon', 'noun'),
(170, 'clerk', 'gumosth', 'noun'),
(171, 'clever', 'usar', 'adverb'),
(172, 'cleverness', 'usarpon', 'noun'),
(173, 'client', 'kaksigar', 'noun'),
(174, 'climate', 'havo', 'noun'),
(175, 'climb', 'tsad', 'verb'),
(176, 'clip', 'kad', 'verb'),
(177, 'clock', 'gadiyal', 'noun'),
(178, 'close', 'lagsilo', 'adverb'),
(179, 'clot ', 'geto', 'noun'),
(180, 'clothe', 'lugat', 'noun'),
(181, 'cloud', 'mod', 'noun'),
(182, 'cloudy', 'modantso', 'adverb'),
(183, 'club', 'tonko', 'noun'),
(184, 'cluster', 'ghos', 'noun'),
(185, 'coach', 'gadi', 'noun'),
(186, 'coal', 'inglo', 'noun'),
(187, 'coast', 'tad', 'noun'),
(188, 'coat', 'kutaun', 'noun'),
(189, 'coak', 'kombo', 'noun'),
(190, 'cobra', 'nag', 'noun'),
(191, 'cockroach', 'zarlo', 'noun'),
(192, 'cocoanut', 'narl', 'noun'),
(193, 'code', 'kanun', 'noun'),
(194, 'coffee', 'kapi', 'noun'),
(195, 'coffin', 'mornaci pet', 'noun'),
(196, 'coin', 'nanen', 'noun'),
(197, 'coincide', 'sama ascen', 'verb'),
(198, 'coincidence', 'gadap', 'noun'),
(199, 'cold', 'thand', 'verb'),
(200, 'collapse', 'bhasma', 'verb'),
(201, 'colleague', 'sangati', 'noun'),
(202, 'collect', 'melai', 'verb'),
(203, 'collection', 'yektai', 'noun'),
(204, 'collector', 'kallekatar', 'noun'),
(205, 'college', 'kolej', 'noun'),
(206, 'collision', 'adlap', 'noun'),
(207, 'color', 'rang', 'noun'),
(208, 'comb', 'dantoni', 'noun'),
(209, 'comb', 'ugai', 'verb'),
(210, 'combine', 'melai', 'verb'),
(211, 'come', 'ye', 'verb'),
(212, 'comedy', 'hasountso nat', 'verb'),
(213, 'comfort', 'bhuzai', 'verb'),
(214, 'comfortable', 'soukasayetso', 'adverb'),
(215, 'coming', 'yenen', 'noun'),
(216, 'command', 'farman', 'verb'),
(217, 'commander', 'hukumdar', 'noun'),
(218, 'commence', 'suru kar', 'verb'),
(219, 'comment', 'vivor', 'verb'),
(220, 'commerce', 'vepar', 'verb'),
(221, 'commercial', 'vapartso', 'adverb'),
(222, 'commission', 'dalali', 'noun'),
(223, 'commissioner', 'dalal', 'noun'),
(224, 'commit', 'vopsun di', 'verb'),
(225, 'committee', 'dhazan', 'noun'),
(226, 'common', 'tsalto', 'adverb'),
(227, 'communicate', 'salavol', 'verb'),
(228, 'communication', 'salavol', 'verb'),
(229, 'communion', 'kumgar', 'noun'),
(230, 'compact', 'lagun', 'adverb'),
(231, 'companion', 'sangati', 'noun'),
(232, 'company', 'mel', 'noun'),
(233, 'compare', 'sarko kar', 'verb'),
(234, 'compass', 'vistar', 'noun'),
(235, 'complile', 'kar', 'verb'),
(236, 'complain', 'sin ulai', 'verb'),
(237, 'complete', 'saglo', 'adverb'),
(238, 'completely', 'purten', 'adjective'),
(239, 'completion', 'mugdanen', 'noun'),
(240, 'complex', 'zaite', 'adverb'),
(241, 'complicate', 'gabri kar', 'verb'),
(242, 'comply', 'tsalai', 'verb'),
(243, 'compose', 'melai', 'verb'),
(244, 'composed', 'melon', 'adverb'),
(245, 'composer', 'kart', 'noun'),
(246, 'composition', 'boraillen kam', 'noun'),
(247, 'compound', 'ital', 'noun'),
(248, 'compress', 'damb', 'verb'),
(249, 'compromise', 'raji', 'noun'),
(250, 'compulsory', 'bolkartso', 'adverb'),
(251, 'concatenation', 'yekot', 'noun'),
(252, 'concave', 'pokal', 'noun'),
(253, 'concentrate', 'melai', 'verb'),
(254, 'conception', 'garp', 'noun'),
(255, 'concern', 'zatan', 'verb'),
(256, 'concert', 'alocen kar', 'verb'),
(257, 'concession', 'kabuli', 'noun'),
(258, 'conclude', 'aker', 'verb'),
(259, 'conclusion', 'aker kar', 'verb'),
(260, 'concur', 'pau', 'verb'),
(261, 'conditional', 'sertatso', 'adverb'),
(262, 'condition', 'sthiti', 'verb'),
(263, 'condence', 'kantsai', 'verb'),
(264, 'conduct', 'tsalai', 'verb'),
(265, 'confessor', 'padri', 'noun'),
(266, 'confessional', 'kumsar', 'verb'),
(267, 'confession', 'voppigi', 'verb'),
(268, 'confess', 'kumsar', 'verb'),
(269, 'conference', 'ulonen', 'noun'),
(270, 'confirm', 'thir kar', 'verb'),
(271, 'confermation', 'thirasan', 'verb'),
(272, 'conflict', 'ladai', 'verb'),
(273, 'conform', 'rup', 'verb'),
(274, 'conformation', 'reup', 'verb'),
(275, 'cough', 'khonkli', ' verb'),
(276, 'council', 'sabha', 'noun'),
(277, 'councillor', 'alocenisabhergar', 'noun'),
(278, 'counsel', 'alocen', 'verb'),
(279, 'count', 'lek', 'verb'),
(280, 'course', 'daun dave', 'noun'),
(281, 'courier', 'dalayet', 'noun'),
(282, 'courageous', 'dhairadik', 'adverb'),
(283, 'courage', 'dhair', 'noun'),
(284, 'couple', 'zodi', 'verb'),
(285, 'country', 'gaun', 'noun'),
(286, 'countless', 'leknatullo', 'adverb'),
(287, 'court', 'man dakai', 'verb'),
(288, 'courtesy', 'maryad', 'noun'),
(289, 'cousin', 'balpul', 'noun'),
(290, 'cover', 'dank', 'verb'),
(291, 'cow', 'gai', 'noun'),
(292, 'cowdung', 'sen', 'noun'),
(293, 'crab', 'kurli', 'noun'),
(294, 'crack', 'fut', 'noun'),
(295, 'crash', 'gouji', 'noun'),
(296, 'cream', 'sai', 'noun'),
(297, 'create', 'rats', 'verb'),
(298, 'creation', 'ratsap', 'verb'),
(299, 'creator', 'ratsnar', 'verb'),
(300, 'creature', 'ratsna', 'verb'),
(301, 'credit', 'boren naun', 'noun'),
(302, 'creditor', 'rin dillo', 'noun'),
(303, 'cricket', 'birmoti', 'noun'),
(304, 'crime', 'akram', 'noun'),
(305, 'criminal', 'firyaditso', 'adverb'),
(306, 'crowd', 'zomoun', 'verb'),
(307, 'cross', 'ad', 'adverb'),
(308, 'crop', 'tsab', 'verb'),
(309, 'crown', 'mukut', 'verb'),
(310, 'crush', 'dadai', 'verb'),
(311, 'crust', 'kat', 'verb'),
(312, 'cry', 'radnen', 'noun'),
(313, 'cup', 'tambler', 'noun'),
(314, 'cure', 'vokat', 'noun'),
(315, 'current', 'tslta', 'verb'),
(316, 'curry', 'kadi', 'noun'),
(317, 'curtain', 'pordo', 'noun'),
(318, 'cylinder', 'adkulen', 'noun'),
(319, 'cutlet', 'katlet', 'noun'),
(320, 'cut', 'katar', 'verb'),
(321, 'customer', 'kekari', 'noun'),
(322, 'custom', 'dastur', 'noun');

-- --------------------------------------------------------

--
-- Table structure for table `table_d`
--

DROP TABLE IF EXISTS `table_d`;
CREATE TABLE `table_d` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_e`
--

DROP TABLE IF EXISTS `table_e`;
CREATE TABLE `table_e` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_e`
--

INSERT INTO `table_e` (`Sno`, `Eng`, `Kon`, `gramtyp`) VALUES
(1, 'each', 'haryek', 'adjective'),
(2, 'eager', 'urbest', 'adverb'),
(3, 'eagle', 'garud', 'noun'),
(4, 'ear', 'kan', 'noun'),
(5, 'ear-ache', 'kanafodapod', 'noun'),
(6, 'early', 'vegin', 'adjective'),
(7, 'earn', 'zod', 'verb'),
(8, 'earth', 'buin', 'noun'),
(9, 'earthquake', 'bhuinkamp', 'noun'),
(10, 'ear-wax', 'kaupo', 'noun'),
(11, 'ease', 'saukasai', 'noun'),
(12, 'easily', 'soukas', 'adjective'),
(13, 'east', 'udenti', 'noun'),
(14, 'easter', 'paskancen fest', 'noun'),
(15, 'eastern', 'udentiso', 'adverb'),
(16, 'easy', 'sasar', 'adverb'),
(17, 'eat', 'kha', 'verb'),
(18, 'eatable', 'khaunceo vastu', 'noun'),
(19, 'eating', 'khan', 'verb'),
(20, 'echo', 'pratitalo', 'verb'),
(21, 'eclipse', 'gran', 'verb'),
(22, 'economic', 'lekan kharcitolo', 'adverb'),
(23, 'economy', 'kasisi', 'noun'),
(24, 'edge', 'deg', 'noun'),
(25, 'edict', 'vartaman', 'noun'),
(26, 'edit', 'pargat kar', 'verb'),
(27, 'editior', 'pargatounen', 'noun'),
(28, 'educate', 'sikai', 'verb'),
(29, 'educated', 'sikpi', 'adverb'),
(30, 'education', 'sikap', 'noun'),
(31, 'eel', 'marimugud', 'noun'),
(32, 'effect', 'fol', 'noun'),
(33, 'efficient', 'gunest', 'adverb'),
(34, 'effort', 'prayatan', 'noun'),
(35, 'egg', 'tantin', 'noun'),
(36, 'eight', 'at', 'adverb'),
(37, 'either', 'ya', 'adverb'),
(38, 'eject', 'udai', 'verb'),
(39, 'elapse', 'utrun veta', 'verb'),
(40, 'elastic', 'vistarisarko', 'adverb'),
(41, 'elder', 'malgado', 'adverb'),
(42, 'elect', 'vints', 'verb'),
(43, 'election', 'vintsap', 'noun'),
(44, 'element', 'multso vanto', 'noun'),
(45, 'elephant', 'hast', 'noun'),
(46, 'esle', 'nan zalear', 'adverb'),
(47, 'elsewhere', 'dusre suater', 'adjective'),
(48, 'embarrass', 'tondre', 'verb'),
(49, 'emergency', 'akasmat', 'noun'),
(50, 'emission', 'bhair dhadap', 'noun'),
(51, 'emit', 'bhair udai', 'verb'),
(52, 'emotion', 'movalai', 'noun'),
(53, 'empire', 'razvot', 'noun'),
(54, 'employ', 'kharci', 'verb'),
(55, 'employment', 'udyog', 'noun'),
(56, 'empty', 'khali', 'adjective'),
(57, 'enable', 'bol di', 'verb'),
(58, 'encounter', 'mukar rau', 'verb'),
(59, 'encourage', 'dhair di', 'verb'),
(60, 'encouragement', 'dhaie', 'verb'),
(61, 'end', 'sevot', 'verb'),
(62, 'enemy', 'dusman', 'noun'),
(63, 'energy', 'sakat', 'noun'),
(64, 'engage', 'utar', 'verb'),
(65, 'engaged', 'kamar', 'adjective'),
(66, 'engagement', 'dillen utar', 'noun'),
(67, 'engine', 'cakru', 'noun'),
(68, 'engineer', 'bandpi', 'noun'),
(69, 'english', 'inglez', 'adverb'),
(70, 'enhance', 'vadai', 'verb'),
(71, 'enhancement', 'vistarap', 'noun'),
(72, 'enjoin', 'formai', 'verb'),
(73, 'enjoy', 'upkarak pod', 'verb'),
(74, 'enough', 'puro', 'adverb'),
(75, 'enquire', 'vitsar', 'verb'),
(76, 'enquiry', 'saval', 'noun'),
(77, 'enter', 'rig', 'verb'),
(78, 'enterprise', 'kartuven', 'noun'),
(79, 'entertainment', 'khusalai', 'noun'),
(80, 'entire', 'saglo', 'adverb'),
(81, 'entity', 'vastu', 'noun'),
(82, 'entrance', 'rig', 'noun'),
(83, 'entry', 'rig', 'noun'),
(84, 'episode', 'adkatha', 'noun'),
(85, 'equal', 'sarko', 'adverb'),
(86, 'equality', 'sar', 'adverb'),
(87, 'equity', 'nit', 'adverb'),
(88, 'era', 'kal', 'noun'),
(89, 'erase', '', ''),
(90, 'erase', 'pus', 'verb'),
(91, 'erect', 'nit', 'adverb'),
(92, 'error', 'tsuk', 'noun'),
(93, 'escape', 'pol', 'verb'),
(94, 'escort', 'paryar vor', 'verb'),
(95, 'especially', 'mukhyazaun', 'adjective'),
(96, 'essential', 'mukhya', 'adverb'),
(97, 'establish', 'stapan', 'verb'),
(98, 'establishment', 'bandap', 'noun'),
(99, 'estate', 'ast', 'noun'),
(100, 'estimate', 'andaz', 'verb'),
(101, 'eternal', 'sasnatso', 'adverb'),
(102, 'eternally', 'sasnacea sasnak', 'adjective'),
(103, 'eucharist', 'santisim sakrament', 'noun'),
(104, 'evade', 'tsukai', 'verb'),
(105, 'eve', 'adlo dis', 'noun'),
(106, 'even', 'sarko', 'adverb'),
(107, 'evening', 'sanz', 'noun'),
(108, 'event', 'gadap', 'noun'),
(109, 'ever', 'sadants', 'adjective'),
(110, 'everlasting', 'sasnatso', 'adverb'),
(111, 'evermore', 'sadants', 'adjective'),
(112, 'everybody', 'haryeklo', 'pronoun'),
(113, 'everything', 'sakat', 'pronoun'),
(114, 'everywhere', 'saglean', 'adverb'),
(115, 'evil', 'vait', 'noun'),
(116, 'evolve', 'sodai', 'verb'),
(117, 'ex', 'maji', 'noun'),
(118, 'exact', 'sarko', 'adverb'),
(119, 'exactly', 'sarken', 'adjective'),
(120, 'examination', 'pariksa', 'noun'),
(121, 'examine', 'pariksa kar', 'verb'),
(122, 'examiner', 'pariksa kartolo', 'noun'),
(123, 'example', 'daklo', 'noun'),
(124, 'exeed', 'tsad', 'verb'),
(125, 'excel', 'jik', 'verb'),
(126, 'excellence', 'vortepon', 'noun'),
(127, 'excellent', 'uttim', 'adverb'),
(128, 'expect', 'sivai', 'preposition'),
(129, 'expeption', 'virodai', 'noun'),
(130, 'excess', 'tsadau', 'noun'),
(131, 'excessive', 'tsadavot', 'adverb'),
(132, 'exchange', 'badal', 'verb'),
(133, 'excise', 'sunk', 'noun'),
(134, 'excite', 'utsambol', 'verb'),
(135, 'excitable', 'utsambolatso', 'adverb'),
(136, 'excitement', 'umalo', 'noun'),
(137, 'exclaim', 'bob', 'verb'),
(138, 'exclude', 'pois dovor', 'verb'),
(139, 'exclusion', 'bhair galap', 'noun'),
(140, 'exclusive', 'yeksuro', 'adverb'),
(141, 'excuse', 'maf', 'verb'),
(142, 'execute', 'jari kar', 'verb'),
(143, 'execution', 'karni ', 'verb'),
(144, 'exempt', 'raja', 'verb'),
(145, 'exemption', 'maf', 'noun'),
(146, 'exercise', 'abyas', 'verb'),
(147, 'exhibit', 'dakai', 'verb'),
(148, 'exhibition', 'dakonen', 'verb'),
(149, 'exist', 'asa', 'verb'),
(150, 'exotic', 'bhailo', 'adverb'),
(151, 'expand', 'vistar', 'verb'),
(152, 'expansion', 'vistarap', 'noun'),
(153, 'expect', 'rak', 'verb'),
(154, 'expectation', 'baruaso', 'verb'),
(155, 'expert', 'usar', 'adverb'),
(156, 'experience', 'anbou', 'verb'),
(157, 'expend', 'kharsi', 'verb'),
(158, 'expire', 'pran', 'verb'),
(159, 'explain', 'vivor', 'verb'),
(160, 'explanation', 'vivor', 'verb'),
(161, 'explicit', 'khandit', 'adverb'),
(162, 'exploit', 'vorti karni', 'noun'),
(163, 'explore', 'sodna', 'verb'),
(164, 'express', 'utsar', 'verb'),
(165, 'export', 'raft kar', 'verb'),
(166, 'expression', 'rup', 'noun'),
(167, 'extinct', 'sarullo', 'adverb'),
(168, 'external', 'bhailo', 'adverb'),
(169, 'extra', 'kusri', 'verb'),
(170, 'extract', 'sanksep', 'noun'),
(171, 'extreme', 'akritso', 'adverb'),
(172, 'eyebro', 'asdi', 'noun'),
(173, 'eyeglass', 'voklu', 'noun'),
(174, 'eyelid', 'doleacen dampnen', 'noun'),
(175, 'eyewitness', 'polaillo saksi', 'noun');

-- --------------------------------------------------------

--
-- Table structure for table `table_f`
--

DROP TABLE IF EXISTS `table_f`;
CREATE TABLE `table_f` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_f`
--

INSERT INTO `table_f` (`Sno`, `Eng`, `Kon`, `gramtyp`) VALUES
(1, 'fable', 'kani', 'noun'),
(2, 'fabric', 'bandap', 'noun'),
(3, 'fabulous', 'kharo', 'adverb'),
(4, 'face', 'muk', 'noun'),
(5, 'facilitate', 'sompo kar', 'verb'),
(6, 'facility', 'sompepon', 'noun'),
(7, 'fact', 'karyen', 'noun'),
(8, 'factor', 'dalal', 'noun'),
(9, 'factory', 'karkhano', 'noun'),
(10, 'faculty', 'podvi', 'noun'),
(11, 'fade', 'suk', 'verb'),
(12, 'fail', 'tsuk', 'verb'),
(13, 'failure', 'tsuk', 'noun'),
(14, 'faint', 'puro zallo', 'adverb'),
(15, 'fair', 'sobit', 'adverb'),
(16, 'faith', 'bavadt', 'noun'),
(17, 'faithful', 'bavadti', 'adverb'),
(18, 'fall', 'pod', 'verb'),
(19, 'falling', 'podtso', 'adverb'),
(20, 'fallow', 'banjer', 'adverb'),
(21, 'false', 'fotkiro', 'adverb'),
(22, 'fame', 'kobor', 'noun'),
(23, 'familiar', 'volok asa', 'adverb'),
(24, 'family', 'kutam', 'noun'),
(25, 'famous', 'navaddik', 'adverb'),
(26, 'fan', 'aino', 'noun'),
(27, 'fancy', 'kalpana kar', 'verb'),
(28, 'far', 'pois', 'adjective'),
(29, 'fare', 'mol', 'noun'),
(30, 'farewell', 'sukhu zaun', 'noun'),
(31, 'farm', 'ital', 'noun'),
(32, 'farmer', 'buinkar', 'noun'),
(33, 'farther', 'mukar', 'adjective'),
(34, 'farthing', 'tar', 'noun'),
(35, 'fashion', 'rup di', 'verb'),
(36, 'fast', 'veggi', 'verb'),
(37, 'fasten', 'ghat kar', 'verb'),
(38, 'fasting', 'upas kar', 'adverb'),
(39, 'fat', 'moto', 'adverb'),
(40, 'father', 'bapui', 'adverb'),
(41, 'father-in-law', 'maun', 'noun'),
(42, 'fault', 'tsuk', 'noun'),
(43, 'favour', 'upkar', 'noun'),
(44, 'favourable', 'gunatso', 'adverb'),
(45, 'favourite', 'mogal', 'adverb'),
(46, 'fear', 'bhen', 'verb'),
(47, 'fearful', 'bhiyatso', 'adverb'),
(48, 'fearless', 'bhennatullo', 'adverb'),
(49, 'feast', 'fest', 'noun'),
(50, 'feather', 'pak', 'noun'),
(51, 'feature', 'gun', 'noun'),
(52, 'fee', 'tergi', 'noun'),
(53, 'feed', 'khaunk di', 'verb'),
(54, 'feel', 'bhog', 'verb'),
(55, 'feeling', 'bhogap', 'noun'),
(56, 'fell', 'portun gal', 'verb'),
(57, 'fellow', 'sangati', 'noun'),
(58, 'fellowship', 'sangat', 'noun'),
(59, 'felt', 'burnas', 'noun'),
(60, 'female', 'bailmanis', 'noun'),
(61, 'ferry', 'kadou', 'noun'),
(62, 'fertile', 'fol diuntso', 'adverb'),
(63, 'festival', 'parab', 'noun'),
(64, 'festive', 'festaso', 'adverb'),
(65, 'fetch', 'apoun had', 'verb'),
(66, 'fever', 'tap', 'noun'),
(67, 'few', 'thode', 'adverb'),
(68, 'fibre', 'kato', 'noun'),
(69, 'fie', 'chi', 'exclamation'),
(70, 'field', 'zago', 'noun'),
(71, 'fig', 'anjur', 'noun'),
(72, 'fight', 'zagda', 'verb'),
(73, 'fighting', 'zuz', 'noun'),
(74, 'figure', 'akar', 'noun'),
(75, 'file', 'patti', 'noun'),
(76, 'fill', 'bhor', 'verb'),
(77, 'filled', 'bhorullo', 'adverb'),
(78, 'filter', 'gal', 'verb'),
(79, 'fin', 'sempato', 'noun'),
(80, 'final', 'akair', 'adverb'),
(81, 'finally', 'kadek', 'adjective'),
(82, 'finance', 'huttvol', 'noun'),
(83, 'find', 'sod', 'verb'),
(84, 'fine', 'suddu', 'adverb'),
(85, 'fine', 'zulman', 'verb'),
(86, 'finger', 'bot', 'noun'),
(87, 'finish', 'mugdi', 'verb'),
(88, 'fire', 'uzo', 'noun'),
(89, 'firewood', 'lankud', 'noun'),
(90, 'firm', 'thir', 'adverb'),
(91, 'first', 'poilo', 'adverb'),
(92, 'fiscal', 'sarkari khazano', 'noun'),
(93, 'fish', 'masli', 'noun'),
(94, 'fisherman', 'kharvi', 'noun'),
(95, 'fishing', 'maslepagap', 'noun'),
(96, 'fit', 'layek', 'adverb'),
(97, 'fitness', 'layekpon', 'noun'),
(98, 'five', 'pants', 'adverb'),
(99, 'fix', 'lai', 'verb'),
(100, 'fixed', 'sarko', 'adverb'),
(101, 'flag', 'bauto', 'noun'),
(102, 'flash', 'porzal', 'verb'),
(103, 'flat', 'telto', 'adverb'),
(104, 'flavour', 'ruts', 'noun'),
(105, 'flee', 'pol', 'verb'),
(106, 'flesh', 'mas', 'noun'),
(107, 'flexible', 'bagontso', 'adverb'),
(108, 'flight', 'udap', 'noun'),
(109, 'fling', 'udai', 'verb'),
(110, 'flirt', 'udai', 'verb'),
(111, 'float', 'upe', 'verb'),
(112, 'flood', 'auru', 'noun'),
(113, 'floor', 'darn', 'noun'),
(114, 'flora', 'fulan', 'noun'),
(115, 'flour', 'pit', 'noun'),
(116, 'flourish', 'fulan di', 'verb'),
(117, 'flow', 'sadil', 'verb'),
(118, 'fluency', 'sadilai', 'noun'),
(119, 'fluent', 'sadil', 'adverb'),
(120, 'flute', 'pirluk', 'noun'),
(121, 'fly', 'mus ', 'noun'),
(122, 'fly', 'ub', 'verb'),
(123, 'foam', 'fend', 'verb'),
(124, 'fog', 'duuri', 'noun'),
(125, 'foggy', 'duuretso', 'adverb'),
(126, 'fold ', 'gadi', 'verb'),
(127, 'follow', 'patlau kar', 'verb'),
(128, 'follower', 'sis', 'noun'),
(129, 'following', 'patlau', 'preposition'),
(130, 'fond', 'apurbayetso', 'adverb'),
(131, 'food', 'khan', 'noun'),
(132, 'foolish', 'piso', 'adverb'),
(133, 'foolishness', 'pisepon', 'noun'),
(134, 'foot', 'pai', 'noun'),
(135, 'footpath', 'asir vat', 'noun'),
(136, 'footstep', 'payantso girtu', 'noun'),
(137, 'for', 'pasun', 'preposition'),
(138, 'force', 'bol', 'noun'),
(139, 'force', 'bol kar', 'verb'),
(140, 'forced', 'aunstsaratso', 'adverb'),
(141, 'ford', 'utron vos', 'verb'),
(142, 'forehead', 'kapal', 'noun'),
(143, 'foreign', 'parki', 'adverb'),
(144, 'foreigner', 'pardesi', 'noun'),
(145, 'forest', 'aranen', 'noun'),
(146, 'forget', 'visar', 'verb'),
(147, 'forgive', 'bogsi', 'verb'),
(148, 'fork', 'garp', 'noun'),
(149, 'form', 'rup', 'noun'),
(150, 'formal', 'kharo', 'adverb'),
(151, 'formally', 'sarken', 'adjective'),
(152, 'former', 'asullo', 'adverb'),
(153, 'formula', 'utrantso thar', 'noun'),
(154, 'fort', 'koten', 'noun'),
(155, 'fortune', 'adrust', 'noun'),
(156, 'fortunate', 'sukhi', 'adverb'),
(157, 'forward', 'mukar', 'adjective'),
(158, 'found', 'stapisi', 'verb'),
(159, 'foundation', 'bunyad', 'noun'),
(160, 'founder', 'gadpist', 'noun'),
(161, 'fountain', 'zar', 'noun'),
(162, 'fracture', 'modap', 'noun'),
(163, 'frame', 'sama melai', 'verb'),
(164, 'frank', 'niskapti', 'adverb'),
(165, 'fraud', 'mos', 'noun'),
(166, 'freak', 'merji', 'noun'),
(167, 'free', 'sod', 'verb'),
(168, 'freedom', 'sutka', 'noun'),
(169, 'freeze', 'kare zata', 'verb'),
(170, 'frequent', 'thovol', 'adverb'),
(171, 'fresh', 'novo', 'adverb'),
(172, 'friend', 'ist', 'noun'),
(173, 'friendly', 'mogal', 'adverb'),
(174, 'friendship', 'istagat', 'noun'),
(175, 'frighten', 'bestai', 'verb'),
(176, 'frog', 'manko', 'noun'),
(177, 'from', 'kadtso', 'adjective'),
(178, 'front', 'mukar', 'noun'),
(179, 'frozen', 'ghat', 'adverb'),
(180, 'fry', 'baz', 'verb'),
(181, 'fuel', 'lankud', 'noun'),
(182, 'full', 'bhorn', 'adverb'),
(183, 'fun', 'tamaso', 'noun'),
(184, 'function', 'karyen', 'noun'),
(185, 'fund', 'asal', 'noun'),
(186, 'fundamental', 'bunyaditso', 'adverb'),
(187, 'funeral', 'morn', 'noun'),
(188, 'funnel', 'nali', 'noun'),
(189, 'future', 'yeuntso', 'adverb');

-- --------------------------------------------------------

--
-- Table structure for table `table_g`
--

DROP TABLE IF EXISTS `table_g`;
CREATE TABLE `table_g` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_h`
--

DROP TABLE IF EXISTS `table_h`;
CREATE TABLE `table_h` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_h`
--

INSERT INTO `table_h` (`Sno`, `Eng`, `Kon`, `gramtyp`) VALUES
(1, 'habit', 'sovoi', 'noun'),
(2, 'habitation', 'ghar', 'noun'),
(3, 'hack', 'katar', 'verb'),
(4, 'hail', 'salam', 'verb'),
(5, 'hair', 'kesu', 'noun'),
(6, 'half', 'ardo', 'adverb'),
(7, 'hall', 'sal', 'noun'),
(8, 'hallo', 'are', 'exclamation'),
(9, 'halt', 'rau', 'verb'),
(10, 'hamlet', 'gram ', 'noun'),
(11, 'hammer', 'kudanti', 'noun'),
(12, 'hamper', 'sampdai', 'verb'),
(13, 'holy', 'bhagevont', 'adverb'),
(14, 'holy-water', 'agment', 'noun'),
(15, 'home', 'ghar', 'noun'),
(16, 'homeless', 'gharnatullo', 'adverb'),
(17, 'honest', 'sado', 'adverb'),
(18, 'honesty', 'bori jini', 'adverb'),
(19, 'honey', 'moun', 'noun'),
(20, 'honey-bee', 'movatso mus', 'noun'),
(21, 'honey-comb', 'poli', 'noun'),
(22, 'honour', 'man kar', 'verb'),
(23, 'honarable', 'manadik', 'adverb'),
(24, 'hood ', 'topi', 'noun'),
(25, 'hook', 'gari', 'noun'),
(26, 'hop', 'donko gal', 'verb'),
(27, 'hope', 'barvaso', 'verb'),
(28, 'hopeful', 'patiyenitso', 'adverb'),
(29, 'hopeless', 'patiyenatullo', 'adverb'),
(30, 'horizontal', 'ad', 'adverb'),
(31, 'horrible', 'bhayankar', 'noun'),
(32, 'horror', 'bhen', 'noun'),
(33, 'horse', 'godo', 'noun'),
(34, 'hospitable', 'bidar diuntso', 'adverb'),
(35, 'hospital', 'aspatri', 'noun'),
(36, 'host', 'bidar', 'noun'),
(37, 'hostage', 'zamindar', 'noun'),
(38, 'hot', 'un', 'adverb'),
(39, 'hotel', 'musafari', 'noun'),
(40, 'hour', 'uor', 'noun'),
(41, 'house', 'ghar', 'noun'),
(42, 'housekeeper', 'gharrakno', 'noun'),
(43, 'house-wife', 'gharkarn', 'noun'),
(44, 'how', 'kaso', 'adjective'),
(45, 'however', 'tari', 'adjective'),
(46, 'howl', 'bobmar', 'verb'),
(47, 'human', 'manis', 'noun'),
(48, 'humanity', 'mansepon', 'noun'),
(49, 'humble', 'kaltho', 'verb'),
(50, 'humour', 'marji', 'noun'),
(51, 'hundred', 'sembor', 'adverb'),
(52, 'hunger', 'bhuk', 'verb'),
(53, 'hungry', 'bhukello', 'adverb'),
(54, 'hunt', 'sikari', 'verb'),
(55, 'hunter', 'sikari kartolo', 'verb'),
(56, 'hurry', 'ausar', 'verb'),
(57, 'hurt', 'luksan', 'noun'),
(58, 'husband', 'gou', 'noun'),
(59, 'hymn', 'kantig', 'noun'),
(60, 'hyphen', 'melagurtu', 'noun'),
(61, 'hypothesis', 'sart', 'noun');

-- --------------------------------------------------------

--
-- Table structure for table `table_i`
--

DROP TABLE IF EXISTS `table_i`;
CREATE TABLE `table_i` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_i`
--

INSERT INTO `table_i` (`Sno`, `Eng`, `Kon`, `gramtyp`) VALUES
(1, 'i', 'aun', 'pronoun'),
(2, 'ice', 'thand', 'adverb'),
(3, 'ice-cold', 'thandgar', 'adverb'),
(4, 'idea', 'kalpana', 'noun'),
(5, 'ideal', 'namuno', 'adverb'),
(6, 'identical', 'tots', 'adverb'),
(7, 'identify', 'sar kar', 'verb'),
(8, 'identity', 'sar', 'verb'),
(9, 'idiot', 'nenar', 'noun'),
(10, 'idle', 'alsi', 'adverb'),
(11, 'idol', 'bomben', 'noun'),
(12, 'if', 'zartar', 'conjunction'),
(13, 'ifnirance', 'nenarpon', 'noun'),
(14, 'ignorant', 'nenar', 'adverb'),
(15, 'ignore', 'nenan', 'verb'),
(16, 'ill', 'vait', 'adverb'),
(17, 'illigal', 'kaideavirod', 'adverb'),
(18, 'illiterate', 'sikanatullo', 'adverb'),
(19, 'illusion', 'bhram', 'noun'),
(20, 'image', 'imaz', 'noun'),
(21, 'imaginable', 'cinttso', 'adverb'),
(22, 'imaginary', 'kalpanetso', 'noun'),
(23, 'imagination', 'kalpana', 'noun'),
(24, 'imagine', 'kalpana kar', 'verb'),
(25, 'immediate', 'atants', 'adverb'),
(26, 'immediately', 'ksana', 'adjective'),
(27, 'immunity', 'sutka', 'noun'),
(28, 'impair', 'pad kar', 'verb'),
(29, 'impart', 'vanto', 'verb'),
(30, 'impartial', 'nitivont', 'adverb'),
(31, 'impatirnce', 'nansosnikai', 'adverb'),
(32, 'imperfect', 'asampurn', 'adverb'),
(33, 'implement', 'upai', 'noun'),
(34, 'import', 'arthu', 'verb'),
(35, 'importance', 'podvi asullo', 'noun'),
(36, 'important', 'garjetso', 'adverb'),
(37, 'impose', 'formai', 'verb'),
(38, 'impossible', 'tanknatullo', 'adverb'),
(39, 'impress', 'kantsai', 'verb'),
(40, 'impression', 'kantsounen', 'noun'),
(41, 'imprison', 'bundint', 'verb'),
(42, 'improve', 'boro kar', 'verb'),
(43, 'improvement', 'kurt', 'verb'),
(44, 'in', 'thain', 'preposition'),
(45, 'innacurate', 'zagrutnain', 'noun'),
(46, 'inactive', 'alsi', 'adverb'),
(47, 'inaugarate', 'suru kar', 'verb'),
(48, 'incapability', 'asakt', 'noun'),
(49, 'incapable', 'sakatnatullo', 'adverb'),
(50, 'inch', 'angal', 'noun'),
(51, 'incidence', 'podap', 'noun'),
(52, 'incident', 'gadap', 'noun'),
(53, 'include', 'atapi', 'verb'),
(54, 'inclusive', 'atapun', 'adverb'),
(55, 'income', 'huttavol', 'noun'),
(56, 'incommunicable', 'sarko natullo', 'adverb'),
(57, 'incomparable', 'saranatullo', 'adverb'),
(58, 'incompatible', 'vopanatullo', 'adverb'),
(59, 'incomplete', 'asampurn', 'adverb'),
(60, 'incorporate', 'melai', 'verb'),
(61, 'incurrupt', 'kusanatullo', 'adverb'),
(62, 'increase', 'tsadai', 'verb'),
(63, 'indifinate', 'gadnatullo', 'adverb'),
(64, 'independence', 'sotantru', 'adverb'),
(65, 'independent', 'aplea sotantrar', 'adverb'),
(66, 'independently', 'sotantran', 'adjective'),
(67, 'index', 'pananpatti', 'noun'),
(68, 'indian', 'indietso', 'adverb'),
(69, 'indicate', 'gurtu', 'noun'),
(70, 'indifferent', 'nidan', 'adverb'),
(71, 'indirect', 'nitnain', 'adverb'),
(72, 'indirectly', 'vankde', 'adjective'),
(73, 'individual', 'yeklots', 'adverb'),
(74, 'indoor', 'bitarlo', 'adverb'),
(75, 'induce', 'lai', 'verb'),
(76, 'indulge', 'soukasayen', 'verb');

-- --------------------------------------------------------

--
-- Table structure for table `table_j`
--

DROP TABLE IF EXISTS `table_j`;
CREATE TABLE `table_j` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_j`
--

INSERT INTO `table_j` (`Sno`, `Eng`, `Kon`, `gramtyp`) VALUES
(1, 'jacket', 'bhandiyan', 'noun'),
(2, 'jack-fruit', 'ponos', 'noun'),
(3, 'jaggery', 'god', 'noun'),
(4, 'jail', 'bandi', 'noun'),
(5, 'jailer', 'bandirakno', 'noun'),
(6, 'jam', 'mitai', 'noun'),
(7, 'jangle', 'zagad', 'verb'),
(8, 'jar', 'gouji', 'noun'),
(9, 'jasmine', 'kolo', 'noun'),
(10, 'jaw', 'gal', 'noun'),
(11, 'jealous', 'mosri', 'adverb'),
(12, 'jealousy', 'mosor', 'adverb'),
(13, 'jeer', 'yedai', 'verb'),
(14, 'jesus christ', 'somi jezu', 'noun'),
(15, 'jew', 'judeu', 'noun'),
(16, 'jewel', 'ratan', 'noun'),
(17, 'jilt', 'patoli', 'noun'),
(18, 'job', 'kam', 'noun'),
(19, 'jockey', 'godeapanthgar', 'noun'),
(20, 'jog', 'hisaro', 'verb'),
(21, 'join', 'melai', 'verb'),
(22, 'joint', 'gant', 'noun'),
(23, 'jolly', 'khusal', 'adverb'),
(24, 'journal', 'vartamana', 'noun'),
(25, 'journalism', 'vartamanapatracen kam', 'verb'),
(26, 'journalist', 'vartamanapatrist', 'verb'),
(27, 'journey', 'poin', 'noun'),
(28, 'joy', 'santos', 'noun'),
(29, 'judge', 'munsubdar', 'noun'),
(30, 'jubilee', 'jubileu', 'noun'),
(31, 'judgement', 'zadti', 'verb'),
(32, 'judicial', 'nitiso', 'adverb'),
(33, 'judicious', 'nitivont', 'adverb'),
(34, 'jug', 'aidan', 'noun'),
(35, 'juice', 'sar', 'noun'),
(36, 'jumble', 'ras kar', 'verb'),
(37, 'jump', 'ud', 'verb'),
(38, 'junction', 'mel', 'noun'),
(39, 'jungle', 'ran', 'noun'),
(40, 'junior', 'dakto', 'adverb'),
(41, 'junk', 'don', 'noun'),
(42, 'jurist', 'vakil', 'noun'),
(43, 'just', 'sarken', 'adjective'),
(44, 'justice', 'santipon', 'noun'),
(45, 'justification', 'udaran', 'noun'),
(46, 'justify', 'nitivont kar', 'verb');

-- --------------------------------------------------------

--
-- Table structure for table `table_k`
--

DROP TABLE IF EXISTS `table_k`;
CREATE TABLE `table_k` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_k`
--

INSERT INTO `table_k` (`Sno`, `Eng`, `Kon`, `gramtyp`) VALUES
(1, 'keel', 'tarvapond', 'noun'),
(2, 'keen', 'barik', 'adverb'),
(3, 'keep', 'dovor', 'verb'),
(4, 'keeper', 'rakno', 'verb'),
(5, 'keeping', 'raknen', 'noun'),
(6, 'kernel', 'bin', 'noun'),
(7, 'kettle', 'ketlu', 'noun'),
(8, 'key', 'tsavi', 'noun'),
(9, 'kick', 'khot', 'verb'),
(10, 'kid', 'burgen', 'noun'),
(11, 'kidnap', 'tsor', 'verb'),
(12, 'kill', 'jivisi mar', 'verb'),
(13, 'kimbo', 'vankdo', 'adverb'),
(14, 'kind', 'dayal', 'adverb'),
(15, 'kindly', 'mogal', 'adverb'),
(16, 'king ', 'rai', 'noun'),
(17, 'kiss', 'umo', 'verb'),
(18, 'kitchen', 'randpakud', 'noun'),
(19, 'kite', 'gon', 'noun'),
(20, 'kitten', 'mazracen pil', 'noun'),
(21, 'knee', 'dimbi', 'noun'),
(22, 'kneel', 'dimbi gal', 'verb'),
(23, 'knife', 'suri', 'noun'),
(24, 'knock', 'bodai', 'verb'),
(25, 'knot', 'gant', 'noun'),
(26, 'know', 'zanan', 'verb'),
(27, 'knowingly', 'zanazaun', 'adjective'),
(28, 'knowlegde', 'zanvai', 'noun'),
(29, 'known', 'navadgo', 'verb');

-- --------------------------------------------------------

--
-- Table structure for table `table_l`
--

DROP TABLE IF EXISTS `table_l`;
CREATE TABLE `table_l` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_l`
--

INSERT INTO `table_l` (`Sno`, `Eng`, `Kon`, `gramtyp`) VALUES
(1, 'label', 'melvilas', 'noun'),
(2, 'labour', 'vaur', 'noun'),
(3, 'labourer', 'vauradi', 'noun'),
(4, 'lack', 'garz', 'verb'),
(5, 'lad', 'burgo', 'noun'),
(6, 'ladder', 'nisan', 'noun'),
(7, 'lady', 'saibin', 'noun'),
(8, 'lake', 'khul', 'noun'),
(9, 'lamb', 'bokreacen pil', 'noun'),
(10, 'lame', 'thonto', 'adverb'),
(11, 'land', 'buin', 'noun'),
(12, 'landlord', 'zamindar', 'noun'),
(13, 'lane ', 'galli', 'noun'),
(14, 'lap', 'miri', 'noun'),
(15, 'lapse', 'zalea', 'verb'),
(16, 'large', 'rund', 'adverb'),
(17, 'last', 'nimano', 'adverb'),
(18, 'latch', 'khil', 'noun'),
(19, 'late', 'todou', 'adverb'),
(20, 'late', 'sarlolo', 'adverb'),
(21, 'laugh', 'has', 'verb'),
(22, 'laughter', 'haso', 'verb'),
(23, 'law', 'kaido', 'noun'),
(24, 'lawyer', 'vakil', 'noun'),
(25, 'lay', 'ghal', 'verb'),
(26, 'lazy', 'alsi', 'adverb'),
(27, 'lead', 'tsalai', 'verb'),
(28, 'leader', 'adhipati', 'noun'),
(29, 'leading', 'mukhya', 'adverb'),
(30, 'leaf', 'kholo', 'noun'),
(31, 'leap', 'ud', 'verb'),
(32, 'leap-year', 'upari vars', 'noun'),
(33, 'learn', 'sik', 'verb'),
(34, 'learing', 'sikap', 'noun'),
(35, 'lease', 'gen', 'noun'),
(36, 'leave', 'sod', 'verb'),
(37, 'lecture', 'shikounen', 'noun'),
(38, 'lecturer', 'shikonegar', 'noun'),
(39, 'left', 'davo', 'adverb'),
(40, 'leg', 'pai', 'noun'),
(41, 'legal', 'kaideatso', 'adverb'),
(42, 'legally', 'kaidea', 'adjective'),
(43, 'lemon', 'limbo', 'noun'),
(44, 'length', 'lambai', 'noun'),
(45, 'lent', 'karezm', 'noun'),
(46, 'less', 'uno', 'adverb'),
(47, 'lesson', 'lisaun', 'noun'),
(48, 'let', 'sod', 'verb'),
(49, 'letter', 'kagad', 'noun'),
(50, 'liberal', 'uddar', 'adverb'),
(51, 'license', 'hukum di', 'verb'),
(52, 'lid', 'dampnen', 'noun'),
(53, 'lie', 'foti', 'verb'),
(54, 'life', 'jini', 'noun'),
(55, 'lifeless', 'jivanatullo', 'adverb'),
(56, 'lift', 'ukol', 'verb'),
(57, 'light', 'uzuad', 'noun'),
(58, 'lighten', 'halu kar', 'verb'),
(59, 'light-house', 'bautokato', 'noun'),
(60, 'lightning', 'zaglanen', 'noun'),
(61, 'like', 'sarko', 'adverb'),
(62, 'limit', 'gad', 'verb'),
(63, 'line', 'git', 'noun'),
(64, 'limited', 'gad asullo', 'adverb'),
(65, 'link', 'band', 'verb'),
(66, 'lion', 'siun', 'noun'),
(67, 'lip', 'vont', 'noun'),
(68, 'liquid', 'vaunci vastu', 'noun'),
(69, 'liquor', 'ros', 'noun'),
(70, 'list', 'patti', 'noun'),
(71, 'listen', 'kan di', 'verb'),
(72, 'literary', 'sikpatso', 'adverb'),
(73, 'literature', 'sikap', 'noun'),
(74, 'little', 'thodo', 'noun'),
(75, 'live', 'rau', 'verb'),
(76, 'liver', 'kaliz', 'noun'),
(77, 'loss', 'hogdaunen', 'noun'),
(78, 'loud', 'sost', 'adverb'),
(79, 'loudly', 'vodlen', 'adjective'),
(80, 'love', 'mog kar', 'verb'),
(81, 'lovely', 'mogal', 'adverb'),
(82, 'loving', 'mog karthso', 'adverb'),
(83, 'low', 'uno', 'adverb'),
(84, 'low ', 'sakal', 'adjective'),
(85, 'lower', 'devoi', 'verb'),
(86, 'luck', 'adrust', 'noun'),
(87, 'lucky', 'adrustaso', 'adverb'),
(88, 'luggage', 'saman', 'noun'),
(89, 'lung', 'popis', 'noun'),
(90, 'lunch', 'phalar', 'noun'),
(91, 'luxury', 'most', 'noun');

-- --------------------------------------------------------

--
-- Table structure for table `table_m`
--

DROP TABLE IF EXISTS `table_m`;
CREATE TABLE `table_m` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_m`
--

INSERT INTO `table_m` (`Sno`, `Eng`, `Kon`, `gramtyp`) VALUES
(1, 'machin', 'carak', 'noun'),
(2, 'mad', 'piso', 'adverb'),
(3, 'madam', 'saibin', 'noun'),
(4, 'madness', 'pisepon', 'noun'),
(5, 'magazine', 'darkhano', 'noun'),
(6, 'magic', 'bolme', 'noun'),
(7, 'magician', 'bolmeagar', 'noun'),
(8, 'magistrate', 'adhipati', 'noun'),
(9, 'mail', 'kavaca', 'noun'),
(10, 'main', 'mukhya', 'adverb'),
(11, 'mainly', 'mukhya zaun', 'adjective'),
(12, 'maintain', 'sambal', 'verb'),
(13, 'maintenance', 'dispodto gras', 'noun'),
(14, 'mejority', 'vodlo vanto', 'noun'),
(15, 'make', 'kar', 'verb'),
(16, 'male', 'dadlo', 'adverb'),
(17, 'man', 'manis', 'noun'),
(18, 'manage', 'tsalai', 'verb'),
(19, 'managable', 'tsalaisarko', 'adverb'),
(20, 'management', 'karkhano', 'noun'),
(21, 'manager', 'tsalaitolo', 'noun'),
(22, 'mango', 'ambo', 'noun'),
(23, 'manner', 'maryad', 'noun'),
(24, 'manual', 'hatancen kam', 'adverb'),
(25, 'manual', 'hatpustak', 'noun'),
(26, 'manufactory', 'karkhano', 'noun'),
(27, 'manure', 'sen', 'noun'),
(28, 'manufacture', 'kar', 'verb'),
(29, 'many', 'sabar', 'adverb'),
(30, 'map', 'buinnaksa', 'noun'),
(31, 'march', 'poin', 'noun'),
(32, 'margin', 'deg', 'adverb'),
(33, 'marine', 'daryantlo', 'adverb'),
(34, 'mark', 'gurtu', 'adjective'),
(35, 'market', 'pent', 'noun'),
(36, 'marriage', 'kazar', 'noun'),
(37, 'married', 'kazari', 'adverb'),
(38, 'marry', 'kazar kar', 'verb'),
(39, 'marvellous', 'ajapatso', 'adverb'),
(40, 'mask', 'ves', 'verb'),
(41, 'mass', 'mis', 'noun'),
(42, 'massive', 'bhari', 'adverb'),
(43, 'master', 'dhani', 'noun'),
(44, 'mat', 'mandri', 'noun'),
(45, 'match', 'zod', 'noun'),
(46, 'mate', 'sangati', 'noun'),
(47, 'materiaal', 'jinos', 'noun'),
(48, 'materials', 'saman', 'noun'),
(49, 'maternal', 'mayetso', 'adverb'),
(50, 'mathematical', 'parimanatso', 'adverb'),
(51, 'mathematics', 'parimanavidya', 'noun'),
(52, 'matter', 'irado', 'verb'),
(53, 'mature', 'piko', 'adverb'),
(54, 'may be', 'zaunk puro', 'verb'),
(55, 'meal', 'jevan', 'noun'),
(56, 'mean', 'halt', 'noun'),
(57, 'meaning', 'arth', 'noun'),
(58, 'means', 'upai', 'noun'),
(59, 'measure', 'map', 'noun'),
(60, 'measured', 'vazbi', 'adverb'),
(61, 'meat ', 'mas', 'noun'),
(62, 'mechanic', 'acari', 'noun'),
(63, 'medal', 'arluk', 'noun'),
(64, 'medical', 'voizatso', 'adverb'),
(65, 'medicine', 'vokat', 'noun'),
(66, 'meditation', 'dhyan', 'noun'),
(67, 'medium', 'modli', 'noun'),
(68, 'meet', 'mel', 'verb'),
(69, 'meeting', 'sabha', 'noun'),
(70, 'melodious', 'gayanatso', 'adverb'),
(71, 'melody', 'gayan', 'noun'),
(72, 'melt', 'kadai', 'verb'),
(73, 'member', 'sando', 'noun'),
(74, 'memorable', 'navaddik', 'adverb'),
(75, 'memory', 'ugdas', 'noun'),
(76, 'mental', 'motitso', 'adverb'),
(77, 'mention', 'ugdas kar', 'noun'),
(78, 'merchamt', 'vyapari', 'noun'),
(79, 'mercy', 'kakult', 'noun'),
(80, 'merge', 'budai', 'verb'),
(81, 'merit', 'punen', 'noun'),
(82, 'merry', 'khusal', 'adverb'),
(83, 'mess', 'jevan', 'adverb'),
(84, 'message', 'kabar ', 'noun'),
(85, 'messenger', 'dut', 'noun'),
(86, 'metal', 'loha', 'noun'),
(87, 'method', 'kram', 'noun'),
(88, 'metre', 'slok', 'noun'),
(89, 'middle', 'moden', 'noun'),
(90, 'midnight', 'modenrat', 'noun'),
(91, 'might', 'podvi', 'noun'),
(92, 'migrate', 'bhairsar', 'verb'),
(93, 'mild', 'nidan', 'adverb'),
(94, 'military', 'fouji', 'adverb'),
(95, 'milk', 'dudu', 'noun'),
(96, 'million', 'dha lak', 'noun'),
(97, 'mind ', 'mot', 'noun'),
(98, 'mine', 'mozo', 'adverb'),
(99, 'minister', 'mantri', 'noun'),
(100, 'minor', 'uno', 'adverb'),
(101, 'minute', 'minut', 'noun'),
(102, 'minute', 'bhou barik', 'adverb'),
(103, 'miracle', 'ajap', 'noun'),
(104, 'mirror', 'arso', 'noun'),
(105, 'misbehave', 'aumaryain tsal', 'verb'),
(106, 'mischief', 'tanto', 'noun'),
(107, 'miss', 'saibin', 'noun'),
(108, 'miss', 'tsuk', 'verb'),
(109, 'mission', 'dhadap', 'noun'),
(110, 'mistake', 'tsuk', 'verb'),
(111, 'mister', 'saib', 'noun'),
(112, 'misuse', 'nisprayog kar', 'verb'),
(113, 'mix', 'borsi', 'verb'),
(114, 'model', 'namuno', 'noun'),
(115, 'moderate', 'tslai', 'verb'),
(116, 'modest', 'niskal', 'adverb'),
(117, 'modifty', 'badal', 'verb'),
(118, 'moment', 'ksan', 'noun'),
(119, 'money', 'dudu', 'noun'),
(120, 'monitor', 'upadesi', 'noun'),
(121, 'monkey', 'mankod', 'noun'),
(122, 'mansoon', 'paus', 'noun'),
(123, 'monster', 'vidrup', 'noun'),
(124, 'month', 'moino', 'noun'),
(125, 'month', 'moino', 'noun'),
(126, 'monthly', 'moineamoineastso', 'noun'),
(127, 'mood', 'rup', 'noun'),
(128, 'moody', 'ragist', 'adverb'),
(129, 'moon', 'tsandrem', 'noun'),
(130, 'moral', 'tsalitso', 'adverb'),
(131, 'more', 'tsad', 'adjective'),
(132, 'moreover', 'tace sevai', 'adjective'),
(133, 'morning', 'sakalin', 'noun'),
(134, 'mosque', 'mazid', 'noun'),
(135, 'mosquito', 'zalar', 'noun'),
(136, 'most', 'bhou', 'adverb'),
(137, 'mostly', 'tsadavot', 'adjective'),
(138, 'mother', 'mai', 'noun'),
(139, 'motion', 'halounen', 'noun'),
(140, 'motive', 'sabab', 'noun'),
(141, 'mould', 'namuno', 'noun'),
(142, 'mount', 'unts', 'verb'),
(143, 'mountain', 'gudo', 'noun'),
(144, 'mouse', 'undir', 'noun'),
(145, 'mouth', 'tond', 'noun'),
(146, 'move', 'tsalai', 'noun'),
(147, 'movement', 'halap', 'noun'),
(148, 'much', 'tsad', 'noun'),
(149, 'mud ', 'ubir', 'noun'),
(150, 'muddy', 'matiyetso', 'adverb'),
(151, 'mug', 'mog', 'noun'),
(152, 'multiply', 'gunakar', 'noun'),
(153, 'murder', 'khuni kar', 'verb'),
(154, 'muscle', 'snayu', 'noun'),
(155, 'mushroom', 'almben', 'noun'),
(156, 'music', 'gayan', 'noun'),
(157, 'musical', 'gayanatso', 'adverb'),
(158, 'musician', 'kantarist', 'noun'),
(159, 'mutter', 'manamana kar', 'verb'),
(160, 'mutton', 'bokrecen mas', 'noun'),
(161, 'mutual', 'yekamekatso', 'adverb'),
(162, 'myself', 'aunts', 'pronoun'),
(163, 'mystery', 'mister', 'noun');

-- --------------------------------------------------------

--
-- Table structure for table `table_n`
--

DROP TABLE IF EXISTS `table_n`;
CREATE TABLE `table_n` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_n`
--

INSERT INTO `table_n` (`Sno`, `Eng`, `Kon`, `gramtyp`) VALUES
(1, 'nail', 'naksi', 'noun'),
(2, 'naked', 'vingo', 'adverb'),
(3, 'name', 'naun', 'noun'),
(4, 'napkin', 'hat puscen lugat', 'noun'),
(5, 'narrate', 'sang', 'verb'),
(6, 'narration', 'katha', 'verb'),
(7, 'narrow', 'asir', 'adverb'),
(8, 'nation', 'parza', 'noun'),
(9, 'national', 'gauntso', 'adverb'),
(10, 'native', 'gauntso', 'adverb'),
(11, 'nativity', 'zalm', 'noun'),
(12, 'natural', 'niz', 'adverb'),
(13, 'nature', 'gun', 'adverb'),
(14, 'naughty', 'fadposi', 'adverb'),
(15, 'navigate', 'tarvar poin kar', 'verb'),
(16, 'navy', 'tarvanmel', 'noun'),
(17, 'near', 'lagin', 'adverb'),
(18, 'nearly', 'lagin lagin', 'adjective'),
(19, 'neat', 'nital', 'adverb'),
(20, 'necessary', 'gerjetso', 'noun'),
(21, 'necessity', 'garz', 'noun'),
(22, 'neck', 'golo', 'noun'),
(23, 'necklace', 'goleatso mhal', 'noun'),
(24, 'need ', 'garjetso', 'adverb'),
(25, 'needful', 'garjetso', 'adverb'),
(26, 'neglect', 'beparva kar', 'verb'),
(27, 'negligence', 'beparva ar', 'verb'),
(28, 'negligent', 'beparvi', 'adverb'),
(29, 'negotiate', 'ulai', 'verb'),
(30, 'negotiation', 'ulonen', 'verb'),
(31, 'neighbour', 'sezari', 'noun'),
(32, 'neighbouring', 'lagsilo', 'adverb'),
(33, 'neither', 'toyi nain', 'adverb'),
(34, 'nephew', 'batso', 'noun'),
(35, 'nerve', 'sir', 'noun'),
(36, 'nervous', 'bizud', 'adverb'),
(37, 'nest', 'gonteru', 'noun'),
(38, 'net', 'zal', 'noun'),
(39, 'neutral', 'paksapatnatullo', 'adverb'),
(40, 'never', 'kedints', 'adjective'),
(41, 'newish', 'novoso', 'adverb'),
(42, 'newly', 'ailevar', 'adjective'),
(43, 'news', 'kobar', 'noun'),
(44, 'newspaper', 'kobar patrika', 'noun'),
(45, 'next', 'lagsilo', 'adverb'),
(46, 'nice', 'sarko', 'noun'),
(47, 'nickname', 'adnaun', 'noun'),
(48, 'night', 'rat', 'noun'),
(49, 'nine', 'nou', 'adverb'),
(50, 'nipple', 'ciun', 'noun'),
(51, 'no', 'nan', 'adverb'),
(52, 'no more', 'ani nan', 'adverb'),
(53, 'noble', 'vorto', 'adverb'),
(54, 'noise', 'bob', 'noun'),
(55, 'noisy', 'bob martso', 'adverb'),
(56, 'nominal', 'parmane', 'adverb'),
(57, 'none', 'nan', 'adverb'),
(58, 'nonsense', 'nakazallo', 'noun'),
(59, 'noon', 'donpar', 'noun'),
(60, 'noose', 'pas', 'noun'),
(61, 'nor', 'ani nan', 'conjunction'),
(62, 'normal', 'kramantru', 'adverb'),
(63, 'north', 'badg', 'noun'),
(64, 'northern', 'badgatso', 'adverb'),
(65, 'nose', 'nak', 'noun'),
(66, 'not', 'nan', 'adjective'),
(67, 'notation', 'saro', 'noun'),
(68, 'note', 'gurtu', 'noun'),
(69, 'note-book', 'tsatrayencen', 'noun'),
(70, 'noted', 'vodlo', 'adverb'),
(71, 'nothing', 'kain nan', 'noun'),
(72, 'notice', 'kobar', 'noun'),
(73, 'notice', 'kalit', 'verb'),
(74, 'notify', 'kalai', 'verb'),
(75, 'nourish', 'pos', 'verb'),
(76, 'novel', 'katha', 'adverb'),
(77, 'now ', 'atan', 'adjective'),
(78, 'nowhere', 'khain nan', 'adjective'),
(79, 'null', 'raddu', 'adverb'),
(80, 'number', 'anko', 'noun'),
(81, 'numerous', 'sabar', 'adverb'),
(82, 'nurse', 'aya', 'noun'),
(83, 'nursery', 'burgeankud', 'noun'),
(84, 'nut', 'fol', 'noun'),
(85, 'nutrition', 'posap', 'noun');

-- --------------------------------------------------------

--
-- Table structure for table `table_o`
--

DROP TABLE IF EXISTS `table_o`;
CREATE TABLE `table_o` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_p`
--

DROP TABLE IF EXISTS `table_p`;
CREATE TABLE `table_p` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_q`
--

DROP TABLE IF EXISTS `table_q`;
CREATE TABLE `table_q` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_r`
--

DROP TABLE IF EXISTS `table_r`;
CREATE TABLE `table_r` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_s`
--

DROP TABLE IF EXISTS `table_s`;
CREATE TABLE `table_s` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_t`
--

DROP TABLE IF EXISTS `table_t`;
CREATE TABLE `table_t` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_u`
--

DROP TABLE IF EXISTS `table_u`;
CREATE TABLE `table_u` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_v`
--

DROP TABLE IF EXISTS `table_v`;
CREATE TABLE `table_v` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_w`
--

DROP TABLE IF EXISTS `table_w`;
CREATE TABLE `table_w` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_x`
--

DROP TABLE IF EXISTS `table_x`;
CREATE TABLE `table_x` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_y`
--

DROP TABLE IF EXISTS `table_y`;
CREATE TABLE `table_y` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_z`
--

DROP TABLE IF EXISTS `table_z`;
CREATE TABLE `table_z` (
  `Sno` int(11) NOT NULL,
  `Eng` varchar(50) NOT NULL,
  `Kon` varchar(50) NOT NULL,
  `gramtyp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_words`
--
ALTER TABLE `all_words`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_a`
--
ALTER TABLE `table_a`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_b`
--
ALTER TABLE `table_b`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_c`
--
ALTER TABLE `table_c`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_d`
--
ALTER TABLE `table_d`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_e`
--
ALTER TABLE `table_e`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_f`
--
ALTER TABLE `table_f`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_g`
--
ALTER TABLE `table_g`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_h`
--
ALTER TABLE `table_h`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_i`
--
ALTER TABLE `table_i`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_j`
--
ALTER TABLE `table_j`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_k`
--
ALTER TABLE `table_k`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_l`
--
ALTER TABLE `table_l`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_m`
--
ALTER TABLE `table_m`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_n`
--
ALTER TABLE `table_n`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_o`
--
ALTER TABLE `table_o`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_p`
--
ALTER TABLE `table_p`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_q`
--
ALTER TABLE `table_q`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_r`
--
ALTER TABLE `table_r`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_s`
--
ALTER TABLE `table_s`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_t`
--
ALTER TABLE `table_t`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_u`
--
ALTER TABLE `table_u`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_v`
--
ALTER TABLE `table_v`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_w`
--
ALTER TABLE `table_w`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_x`
--
ALTER TABLE `table_x`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_y`
--
ALTER TABLE `table_y`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `table_z`
--
ALTER TABLE `table_z`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_words`
--
ALTER TABLE `all_words`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `table_a`
--
ALTER TABLE `table_a`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `table_b`
--
ALTER TABLE `table_b`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_c`
--
ALTER TABLE `table_c`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;

--
-- AUTO_INCREMENT for table `table_d`
--
ALTER TABLE `table_d`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_e`
--
ALTER TABLE `table_e`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `table_f`
--
ALTER TABLE `table_f`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `table_g`
--
ALTER TABLE `table_g`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_h`
--
ALTER TABLE `table_h`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `table_i`
--
ALTER TABLE `table_i`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `table_j`
--
ALTER TABLE `table_j`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `table_k`
--
ALTER TABLE `table_k`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `table_l`
--
ALTER TABLE `table_l`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `table_m`
--
ALTER TABLE `table_m`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `table_n`
--
ALTER TABLE `table_n`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `table_o`
--
ALTER TABLE `table_o`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_p`
--
ALTER TABLE `table_p`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_q`
--
ALTER TABLE `table_q`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_r`
--
ALTER TABLE `table_r`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_s`
--
ALTER TABLE `table_s`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_t`
--
ALTER TABLE `table_t`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_u`
--
ALTER TABLE `table_u`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_v`
--
ALTER TABLE `table_v`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_w`
--
ALTER TABLE `table_w`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_x`
--
ALTER TABLE `table_x`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_y`
--
ALTER TABLE `table_y`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_z`
--
ALTER TABLE `table_z`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
