-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2014 at 10:05 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bracket`
--

-- --------------------------------------------------------

--
-- Table structure for table `bad_words`
--

CREATE TABLE IF NOT EXISTS `bad_words` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=582 ;

--
-- Dumping data for table `bad_words`
--

INSERT INTO `bad_words` (`ID`, `word`) VALUES
(1, 'xxx'),
(2, 'ass'),
(3, 'bbd'),
(4, 'bbw'),
(5, 'cum'),
(6, 'fag'),
(7, 'fuk'),
(8, 'gay'),
(9, 'h0r'),
(10, 'sex'),
(12, 'wtf'),
(13, '2g1c'),
(14, 'anal'),
(15, 'anus'),
(16, 'b00b'),
(17, 'b0ob'),
(18, 'bdsm'),
(19, 'blow'),
(20, 'bo0b'),
(21, 'boob'),
(22, 'butt'),
(23, 'c0ck'),
(24, 'cawk'),
(25, 'clit'),
(26, 'cnts'),
(27, 'cntz'),
(28, 'cock'),
(29, 'crap'),
(30, 'cunt'),
(31, 'damn'),
(32, 'Dick'),
(33, 'dike'),
(34, 'dyke'),
(35, 'fags'),
(36, 'fagz'),
(37, 'faig'),
(38, 'fart'),
(39, 'fcuk'),
(40, 'feck'),
(41, 'fuck'),
(42, 'gook'),
(43, 'h00r'),
(44, 'h0ar'),
(45, 'h0re'),
(46, 'Head'),
(47, 'hell'),
(48, 'hjob'),
(49, 'hoar'),
(50, 'hoer'),
(51, 'homo'),
(52, 'hoor'),
(53, 'hore'),
(54, 'japs'),
(55, 'jerk'),
(56, 'jism'),
(57, 'jiss'),
(58, 'jizm'),
(59, 'jizz'),
(60, 'kawk'),
(61, 'kike'),
(62, 'knob'),
(63, 'kunt'),
(64, 'kusi'),
(65, 'lmao'),
(66, 'milf'),
(67, 'n1gr'),
(68, 'nazi'),
(69, 'nude'),
(70, 'orgy'),
(71, 'p0rn'),
(72, 'Phuc'),
(73, 'Phuk'),
(74, 'piss'),
(75, 'porn'),
(76, 'pr0n'),
(77, 'pr1c'),
(78, 'pr1k'),
(79, 'puta'),
(80, 'puto'),
(81, 'rape'),
(82, 'sh1t'),
(83, 'shit'),
(84, 'Shyt'),
(85, 'slut'),
(86, 'smut'),
(87, 'Snob'),
(88, 'Snot'),
(89, 'suck'),
(90, 'tits'),
(91, 'titt'),
(92, 'turd'),
(93, 'twat'),
(94, 'wank'),
(95, 'Worm'),
(96, 'ahole'),
(97, 'amcik'),
(98, 'b17ch'),
(99, 'b1tch'),
(100, 'balls'),
(101, 'bi7ch'),
(102, 'bitch'),
(103, 'boner'),
(104, 'boobs'),
(105, 'Booby'),
(106, 'booty'),
(107, 'busty'),
(108, 'c0cks'),
(109, 'Camel'),
(110, 'chink'),
(111, 'clits'),
(112, 'Creep'),
(113, 'Devil'),
(114, 'dild0'),
(115, 'dildo'),
(116, 'dirty'),
(117, 'Dufus'),
(118, 'Dumbo'),
(119, 'Dummy'),
(120, 'Dumpy'),
(121, 'ecchi'),
(122, 'Ekrem'),
(123, 'enema'),
(124, 'fag1t'),
(125, 'faget'),
(126, 'fagit'),
(127, 'faigs'),
(128, 'fanny'),
(129, 'Fatso'),
(130, 'fecal'),
(131, 'feces'),
(132, 'felch'),
(133, 'Fixer'),
(134, 'Flake'),
(135, 'Fotze'),
(136, 'Freak'),
(137, 'fux0r'),
(138, 'Goose'),
(139, 'grope'),
(140, 'gspot'),
(141, 'h4x0r'),
(142, 'hairy'),
(143, 'handj'),
(144, 'hoore'),
(145, 'Idiot'),
(146, 'jisim'),
(147, 'Joker'),
(148, 'juggs'),
(149, 'kinky'),
(150, 'knobs'),
(151, 'knobz'),
(152, 'kraut'),
(153, 'kunts'),
(154, 'kuntz'),
(155, 'Kurac'),
(156, 'kurwa'),
(157, 'kyrpa'),
(158, 'labia'),
(159, 'lesbo'),
(160, 'lmfao'),
(161, 'Lumpy'),
(162, 'mibun'),
(163, 'Motha'),
(164, 'Mutha'),
(165, 'nazis'),
(166, 'negro'),
(167, 'nigga'),
(168, 'nigur'),
(169, 'niigr'),
(170, 'panty'),
(171, 'pen15'),
(172, 'pen1s'),
(173, 'penas'),
(174, 'penis'),
(175, 'penus'),
(176, 'Phuck'),
(177, 'pizda'),
(178, 'polac'),
(179, 'polak'),
(180, 'pr1ck'),
(181, 'prick'),
(182, 'pubes'),
(183, 'pusse'),
(184, 'pussy'),
(185, 'puuke'),
(186, 'queaf'),
(187, 'queef'),
(188, 'queer'),
(189, 'qweir'),
(190, 'scank'),
(191, 'screw'),
(192, 'semen'),
(193, 'sh1ts'),
(194, 'sh1tz'),
(195, 'skank'),
(196, 'Slave'),
(197, 'sluts'),
(198, 'slutz'),
(199, 'Snake'),
(200, 'strip'),
(201, 'sucks'),
(202, 'Swine'),
(203, 'teets'),
(204, 'testi'),
(205, 'tushy'),
(206, 'Tussi'),
(207, 'w00se'),
(208, 'wh00r'),
(209, 'wh0re'),
(210, 'whoar'),
(211, 'whore'),
(212, 'Witch'),
(213, 'women'),
(214, 'Woody'),
(215, 'ash0le'),
(216, 'Bandit'),
(217, 'beaver'),
(218, 'Biatch'),
(219, 'bimbos'),
(220, 'bitch?'),
(221, 'bloody'),
(222, 'Boozer'),
(223, 'buceta'),
(224, 'Cretin'),
(225, 'darkie'),
(226, 'dildos'),
(227, 'dilld0'),
(228, 'Dulles'),
(229, 'Egoist'),
(230, 'erotic'),
(231, 'escort'),
(232, 'eunuch'),
(233, 'fagg1t'),
(234, 'faggit'),
(235, 'faggot'),
(236, 'Fellow'),
(237, 'feltch'),
(238, 'female'),
(239, 'femdom'),
(240, 'fetish'),
(241, 'ficken'),
(242, 'flange'),
(243, 'hentai'),
(244, 'Hippie'),
(245, 'honkey'),
(246, 'hooker'),
(247, 'Huevon'),
(248, 'incest'),
(249, 'Junkey'),
(250, 'kanker'),
(251, 'Killer'),
(252, 'knulle'),
(253, 'l3itch'),
(254, 'lolita'),
(255, 'Looser'),
(256, 'Monkey'),
(257, 'Mother'),
(258, 'murder'),
(259, 'nigger'),
(260, 'nignog'),
(261, 'niiger'),
(262, 'nipple'),
(263, 'nudity'),
(264, 'nympho'),
(265, 'orafis'),
(266, 'orgasm'),
(267, 'pecker'),
(268, 'peenus'),
(269, 'peinus'),
(270, 'penuus'),
(271, 'phicka'),
(272, 'Phuker'),
(273, 'pillow'),
(274, 'polack'),
(275, 'pussee'),
(276, 'qahbeh'),
(277, 'queers'),
(278, 'queerz'),
(279, 'qweers'),
(280, 'qweerz'),
(281, 'raping'),
(282, 'rapist'),
(283, 'rectum'),
(284, 'retard'),
(285, 'rimjob'),
(286, 'Scarab'),
(287, 'sh1ter'),
(288, 'shipal'),
(289, 'skanck'),
(290, 'skribz'),
(291, 'Sleeze'),
(292, 'Slutty'),
(293, 'smegma'),
(294, 'snatch'),
(295, 'sodomy'),
(296, 'sonofa'),
(297, 'spooge'),
(298, 'teabag'),
(299, 'tiedup'),
(300, 'Toilet'),
(301, 'tranny'),
(302, 'tuchmy'),
(303, 'vag1na'),
(304, 'vagina'),
(305, 'vaj1na'),
(306, 'vajina'),
(307, 'Wanker'),
(308, 'Wierdo'),
(309, 'xrated'),
(310, 'ash0les'),
(311, 'asholes'),
(312, 'azzhole'),
(313, 'ballgag'),
(314, 'bastard'),
(315, 'basterd'),
(316, 'boffing'),
(317, 'bollock'),
(318, 'bondage'),
(319, 'breasts'),
(320, 'bukkake'),
(321, 'Bulloks'),
(322, 'camgirl'),
(323, 'camslut'),
(324, 'Chicken'),
(325, 'cumming'),
(326, 'dilld0s'),
(327, 'Dogshit'),
(328, 'Drinker'),
(329, 'enculer'),
(330, 'erotism'),
(331, 'Felcher'),
(332, 'fellate'),
(333, 'figging'),
(334, 'fisting'),
(335, 'Flikker'),
(336, 'footjob'),
(337, 'Goddamn'),
(338, 'googirl'),
(339, 'handjob'),
(340, 'helvete'),
(341, 'humping'),
(342, 'jack0ff'),
(343, 'Jackass'),
(344, 'jackoff'),
(345, 'jigaboo'),
(346, 'kinbaku'),
(347, 'knobend'),
(348, 'Learner'),
(349, 'Lesbian'),
(350, 'Lezzian'),
(351, 'Luzifer'),
(352, 'mamhoon'),
(353, 'mrhands'),
(354, 'numbnut'),
(355, 'nutsack'),
(356, 'orgasim'),
(357, 'orgasum'),
(358, 'oriface'),
(359, 'orifice'),
(360, 'orifiss'),
(361, 'panties'),
(362, 'peeenus'),
(363, 'pegging'),
(364, 'Pervert'),
(365, 'Phukker'),
(366, 'playboy'),
(367, 'Poonani'),
(368, 'pricked'),
(369, 'raghead'),
(370, 'rapping'),
(371, 'recktum'),
(372, 'rimming'),
(373, 'schlong'),
(374, 'schmuck'),
(375, 'scissor'),
(376, 'scrotum'),
(377, 'sh1tter'),
(378, 'shemale'),
(379, 'shibari'),
(380, 'Skuzbag'),
(381, 'splooge'),
(382, 'Stinker'),
(383, 'strapon'),
(384, 'swinger'),
(385, 'tastemy'),
(386, 'topless'),
(387, 'tubgirl'),
(388, 'upskirt'),
(389, 'urethra'),
(390, 'va1jina'),
(391, 'vagiina'),
(392, 'wetback'),
(393, 'andskota'),
(394, 'arsehole'),
(395, 'ballsack'),
(396, 'bangbros'),
(397, 'bareback'),
(398, 'bastardo'),
(399, 'bigblack'),
(400, 'blumpkin'),
(401, 'bulldyke'),
(402, 'bunghole'),
(403, 'camwhore'),
(404, 'clitoris'),
(405, 'cornhole'),
(406, 'daterape'),
(407, 'Dizbrain'),
(408, 'dogstyle'),
(409, 'dpaction'),
(410, 'Drunkard'),
(411, 'felching'),
(412, 'fellatio'),
(413, 'foreskin'),
(414, 'frotting'),
(415, 'futanari'),
(416, 'gangbang'),
(417, 'genitals'),
(418, 'girlsare'),
(419, 'goregasm'),
(420, 'hardcore'),
(421, 'Hooligan'),
(422, 'hotchick'),
(423, 'jailbait'),
(424, 'jiggaboo'),
(425, 'kinkster'),
(426, 'klootzak'),
(427, 'knobbing'),
(428, 'knockers'),
(429, 'kuksuger'),
(430, 'Lipshits'),
(431, 'Lipshitz'),
(432, 'masokist'),
(433, 'pedobear'),
(434, 'ponyplay'),
(435, 'poontsee'),
(436, 'rosypalm'),
(437, 'sharmuta'),
(438, 'sharmute'),
(439, 'Simulant'),
(440, 'sodomize'),
(441, 'swastika'),
(442, 'Swindler'),
(443, 'vibrator'),
(444, 'weregirl'),
(445, 'wetdream'),
(446, 'zabourah'),
(447, 'Alcoholic'),
(448, 'anilingus'),
(449, 'arschloch'),
(450, 'ballgravy'),
(451, 'barenaked'),
(452, 'bassterds'),
(453, 'bastinado'),
(454, 'bicurious'),
(455, 'Derrbrain'),
(456, 'Desperado'),
(457, 'ejakulate'),
(458, 'fingering'),
(459, 'futkretzn'),
(460, 'girlsgone'),
(461, 'girlswere'),
(462, 'Hillbilly'),
(463, 'Ignoramus'),
(464, 'jiggerboo'),
(465, 'Lard face'),
(466, 'masochist'),
(467, 'masterbat'),
(468, 'masturbat'),
(469, 'monkleigh'),
(470, 'mouliewop'),
(471, 'Mucky pub'),
(472, 'muffdiver'),
(473, 'pedophile'),
(474, 'peeenusss'),
(475, 'poopchute'),
(476, 'Querulant'),
(477, 'Saprophyt'),
(478, 'shrimping'),
(479, 'skurwysyn'),
(480, 'sphencter'),
(481, 'squirting'),
(482, 'threesome'),
(483, 'throating'),
(484, 'tongueina'),
(485, 'towelhead'),
(486, 'tribadism'),
(487, 'urophilia'),
(488, 'Weeze Bag'),
(489, 'wheregirl'),
(490, 'Womanizer'),
(491, 'zoophilia'),
(492, '2girls1cup'),
(493, 'babybatter'),
(494, 'baltbeaver'),
(495, 'beaverlips'),
(496, 'bestiality'),
(497, 'bluewaffle'),
(498, 'bulletvibe'),
(499, 'circlejerk'),
(500, 'deepthroat'),
(501, 'doggystyle'),
(502, 'domination'),
(503, 'dominatrix'),
(504, 'doubledong'),
(505, 'ejackulate'),
(506, 'fudgepaker'),
(507, 'fudgepcker'),
(508, 'fudgpacker'),
(509, 'homoerotic'),
(510, 'Homosexual'),
(511, 'lovemaking'),
(512, 'makemecome'),
(513, 'masstrbait'),
(514, 'masstrbate'),
(515, 'masterbate'),
(516, 'masturbate'),
(517, 'missionary'),
(518, 'muffdiving'),
(519, 'nepesaurio'),
(520, 'nsfwimages'),
(521, 'polesmoker'),
(522, 'rautenberg'),
(523, 'spierdalaj'),
(524, 'spreadlegs'),
(525, 'styledoggy'),
(526, 'tightwhite'),
(527, 'undressing'),
(528, 'violetblue'),
(529, 'violetwand'),
(530, 'Wallflower'),
(531, 'whitepower'),
(532, 'ballkicking'),
(533, 'balllicking'),
(534, 'ballsucking'),
(535, 'barelylegal'),
(536, 'Conmerchant'),
(537, 'coprolagnia'),
(538, 'coprophilia'),
(539, 'cunnilingus'),
(540, 'Disguesting'),
(541, 'doggiestyle'),
(542, 'dominatrics'),
(543, 'donkeypunch'),
(544, 'ejaculation'),
(545, 'Flash Harry'),
(546, 'fudgepacker'),
(547, 'intercourse'),
(548, 'lemon party'),
(549, 'massterbait'),
(550, 'masterbates'),
(551, 'Nerfhearder'),
(552, 'nimphomania'),
(553, 'ragingboner'),
(554, 'taintedlove'),
(555, 'brownshowers'),
(556, 'cloverclamps'),
(557, 'dominatricks'),
(558, 'goldenshower'),
(559, 'masterbaiter'),
(560, 'menageatrois'),
(561, 'moundofvenus'),
(562, 'oneguyonejar'),
(563, 'shavedbeaver'),
(564, 'suicidegirls'),
(565, 'vorarephilia'),
(566, 'beavercleaver'),
(567, 'carpetmuncher'),
(568, 'malesquirting'),
(569, 'pleasurechest'),
(570, 'rustytrombone'),
(571, 'yellowshowers'),
(572, 'acrotomophilia'),
(573, 'brunetteaction'),
(574, 'Countrybumpkin'),
(575, 'Latchkey child'),
(576, 'onecuptwogirls'),
(577, 'reversecowgirl'),
(578, 'twogirlsonecup'),
(579, 'flippingthebird'),
(580, 'clevelandsteamer'),
(581, 'doublepenetration');

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `tournament_ID` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(100) NOT NULL,
  `team_1_ID` int(100) NOT NULL,
  `team_2_ID` int(100) NOT NULL,
  `team_1_score` int(11) NOT NULL,
  `team_2_score` int(11) NOT NULL,
  `round` int(1) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `team_1_ID` (`team_1_ID`),
  KEY `team_2_ID` (`team_2_ID`),
  KEY `tournament_ID` (`tournament_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`ID`, `tournament_ID`, `date`, `time`, `location`, `team_1_ID`, `team_2_ID`, `team_1_score`, `team_2_score`, `round`) VALUES
(38, 1, '0000-00-00', '00:00:01', '1', 17, 23, 54, 45, 1),
(39, 1, '0000-00-00', '00:00:01', 'asdfg', 17, 28, 45, 55, 6);

-- --------------------------------------------------------

--
-- Table structure for table `picks`
--

CREATE TABLE IF NOT EXISTS `picks` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_ID` int(11) NOT NULL,
  `team_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ticket_ID` (`ticket_ID`),
  KEY `team_ID` (`team_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=289 ;

--
-- Dumping data for table `picks`
--

INSERT INTO `picks` (`ID`, `ticket_ID`, `team_ID`) VALUES
(145, 3, 17),
(146, 3, 23),
(147, 3, 52),
(148, 3, 57),
(149, 3, 59),
(150, 3, 41),
(151, 3, 44),
(152, 3, 19),
(153, 3, 43),
(154, 3, 6),
(155, 3, 36),
(156, 3, 20),
(157, 3, 14),
(158, 3, 30),
(159, 3, 67),
(160, 3, 7),
(193, 7, 17),
(194, 7, 23),
(195, 7, 22),
(196, 7, 26),
(197, 7, 42),
(198, 7, 5),
(199, 7, 37),
(200, 7, 19),
(201, 7, 45),
(202, 7, 47),
(203, 7, 53),
(204, 7, 50),
(205, 7, 14),
(206, 7, 34),
(207, 7, 2),
(208, 7, 7),
(209, 2, 65),
(210, 2, 60),
(211, 2, 52),
(212, 2, 57),
(213, 2, 42),
(214, 2, 5),
(215, 2, 37),
(216, 2, 25),
(217, 2, 24),
(218, 2, 6),
(219, 2, 46),
(220, 2, 35),
(221, 2, 14),
(222, 2, 34),
(223, 2, 2),
(224, 2, 1),
(225, 5, 3),
(226, 5, 31),
(227, 5, 12),
(228, 5, 26),
(229, 5, 42),
(230, 5, 39),
(231, 5, 37),
(232, 5, 25),
(233, 5, 45),
(234, 5, 51),
(235, 5, 13),
(236, 5, 35),
(237, 5, 14),
(238, 5, 34),
(239, 5, 2),
(240, 5, 9),
(257, 1, 17),
(258, 1, 60),
(259, 1, 12),
(260, 1, 26),
(261, 1, 59),
(262, 1, 39),
(263, 1, 44),
(264, 1, 25),
(265, 1, 18),
(266, 1, 51),
(267, 1, 53),
(268, 1, 40),
(269, 1, 14),
(270, 1, 62),
(271, 1, 67),
(272, 1, 63),
(273, 6, 17),
(274, 6, 23),
(275, 6, 52),
(276, 6, 57),
(277, 6, 59),
(278, 6, 41),
(279, 6, 37),
(280, 6, 10),
(281, 6, 45),
(282, 6, 51),
(283, 6, 13),
(284, 6, 50),
(285, 6, 55),
(286, 6, 62),
(287, 6, 16),
(288, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`ID`, `Name`) VALUES
(3, 'East'),
(4, 'Midwest'),
(1, 'South'),
(2, 'West');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`ID`, `name`, `contact_name`, `address`, `city`, `state`, `zip`, `phone`, `email`) VALUES
(1, 'Dearborn High School', 'Sari Rahal', '114 Otter Dr', 'Dearborn', 'MI', '49418', '(313) 384-8369', 'Rahals@mail.gvsu.edu'),
(2, 'Forest Hills Northern', 'Joe Sack', '3227 3Mile', 'Walker', 'MI', '49534', '(313) 384-8369', 'Rahals@mail.gvsu.edu'),
(3, 'Fordson', 'Derek Smith', '152 Ford Rd', 'Dearborn', 'MI', '49505', '(313) 384-8369', 'Rahals@mail.gvsu.edu');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`ID`, `name`, `logo`) VALUES
(1, 'Albany NY', ''),
(2, 'American Univ', ''),
(3, 'Arizona', ''),
(4, 'Arizona St', ''),
(5, 'Baylor', ''),
(6, 'BYU', ''),
(7, 'Cal Poly SLO', ''),
(8, 'Cincinnati', ''),
(9, 'Coastal Car', ''),
(10, 'Colorado', ''),
(11, 'Connecticut', ''),
(12, 'Creighton', ''),
(13, 'Dayton', ''),
(14, 'Delaware', ''),
(15, 'Duke', ''),
(16, 'E Kentucky', ''),
(17, 'Florida', ''),
(18, 'G Washington', ''),
(19, 'Gonzaga', ''),
(20, 'Harvard', ''),
(21, 'Iowa', ''),
(22, 'Iowa St', ''),
(23, 'Kansas', ''),
(24, 'Kansas St', ''),
(25, 'Kentucky', ''),
(26, 'Louisville', ''),
(27, 'Manhattan', ''),
(28, 'Massachusetts', ''),
(29, 'Memphis', ''),
(30, 'Mercer', ''),
(31, 'Michigan', ''),
(32, 'Michigan St', ''),
(33, 'Mt St Mary''s', ''),
(34, 'N Dakota St', ''),
(35, 'NC Central', ''),
(36, 'NC State', ''),
(37, 'Nebraska', ''),
(38, 'New Mexico', ''),
(39, 'New Mexico St', ''),
(40, 'North Carolina', ''),
(41, 'Ohio St', ''),
(42, 'Oklahoma', ''),
(43, 'Oklahoma St', ''),
(44, 'Oregon', ''),
(45, 'Pittsburgh', ''),
(46, 'Providence', ''),
(47, 'San Diego St', ''),
(48, 'SF Austin', ''),
(49, 'St Joseph''s PA', ''),
(50, 'St Louis', ''),
(51, 'Stanford', ''),
(52, 'Syracuse', ''),
(53, 'Tennessee', ''),
(54, 'Texas', ''),
(55, 'Tulsa', ''),
(56, 'TX Southern', ''),
(57, 'UCLA', ''),
(58, 'ULL', ''),
(59, 'VA Commonwealth', ''),
(60, 'Villanova', ''),
(61, 'Virginia', ''),
(62, 'W Michigan', ''),
(63, 'Weber St', ''),
(64, 'WI Milwaukee', ''),
(65, 'Wichita St', ''),
(66, 'Wisconsin', ''),
(67, 'Wofford', ''),
(68, 'Xavier', ''),
(69, 'LA-Lafayette', ''),
(70, 'TBA', '');

-- --------------------------------------------------------

--
-- Table structure for table `team_tournament_region`
--

CREATE TABLE IF NOT EXISTS `team_tournament_region` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `team_ID` int(100) NOT NULL,
  `tournament_region_ID` int(100) NOT NULL,
  `seed` int(2) NOT NULL,
  `overall_seed` int(2) NOT NULL,
  `starting_placement` int(2) NOT NULL,
  `total_points` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `team_ID` (`team_ID`,`tournament_region_ID`),
  KEY `tournament_ID` (`tournament_region_ID`),
  KEY `tournament_region_ID` (`tournament_region_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `team_tournament_region`
--

INSERT INTO `team_tournament_region` (`ID`, `team_ID`, `tournament_region_ID`, `seed`, `overall_seed`, `starting_placement`, `total_points`) VALUES
(1, 17, 1, 1, 1, 1, 99),
(2, 1, 1, 16, 63, 2, 0),
(3, 10, 1, 8, 49, 3, 0),
(4, 45, 1, 9, 26, 4, 0),
(5, 59, 1, 5, 24, 5, 0),
(6, 50, 1, 12, 99, 6, 0),
(7, 57, 1, 4, 11, 7, 0),
(8, 55, 1, 13, 45, 8, 0),
(9, 41, 1, 6, 20, 9, 0),
(10, 13, 1, 11, 39, 10, 0),
(11, 52, 1, 3, 22, 11, 0),
(12, 62, 1, 14, 51, 12, 0),
(13, 37, 1, 7, 13, 13, 0),
(14, 51, 1, 10, 41, 14, 0),
(15, 23, 1, 2, 16, 15, 45),
(16, 16, 1, 15, 53, 16, 0),
(17, 3, 2, 1, 2, 17, 0),
(18, 63, 2, 16, 60, 18, 0),
(19, 19, 2, 8, 9, 19, 0),
(20, 43, 2, 9, 28, 20, 0),
(21, 42, 2, 5, 33, 21, 0),
(22, 40, 2, 12, 99, 22, 0),
(23, 49, 2, 4, 99, 23, 0),
(24, 38, 2, 13, 40, 24, 0),
(25, 5, 2, 6, 34, 25, 0),
(26, 36, 2, 11, 52, 26, 0),
(27, 12, 2, 3, 12, 27, 0),
(28, 69, 2, 14, 99, 28, 0),
(29, 44, 2, 7, 29, 29, 0),
(30, 6, 2, 10, 35, 30, 0),
(31, 66, 2, 2, 10, 31, 0),
(32, 2, 2, 15, 57, 32, 0),
(33, 61, 3, 1, 7, 33, 0),
(34, 9, 3, 16, 54, 34, 0),
(35, 29, 3, 8, 32, 35, 0),
(36, 18, 3, 9, 36, 36, 0),
(37, 8, 3, 5, 14, 37, 0),
(38, 20, 3, 12, 64, 38, 0),
(39, 31, 4, 2, 19, 39, 0),
(40, 14, 3, 13, 50, 40, 0),
(41, 39, 3, 6, 31, 41, 0),
(42, 46, 3, 11, 47, 42, 0),
(43, 22, 3, 3, 17, 43, 0),
(44, 34, 3, 14, 62, 44, 0),
(45, 11, 3, 7, 23, 45, 0),
(46, 47, 3, 10, 44, 46, 0),
(47, 60, 3, 2, 6, 47, 0),
(48, 33, 3, 15, 99, 48, 0),
(49, 65, 4, 1, 3, 49, 0),
(50, 7, 4, 16, 59, 50, 0),
(51, 25, 4, 8, 21, 51, 0),
(52, 24, 4, 9, 48, 52, 0),
(53, 48, 4, 5, 25, 53, 0),
(54, 35, 4, 12, 55, 54, 0),
(55, 26, 4, 4, 4, 55, 0),
(56, 27, 4, 13, 61, 56, 0),
(57, 28, 4, 6, 37, 57, 55),
(58, 53, 4, 11, 30, 58, 0),
(59, 15, 4, 3, 8, 59, 0),
(60, 30, 4, 14, 58, 60, 0),
(61, 54, 4, 7, 42, 61, 0),
(62, 4, 4, 10, 38, 62, 0),
(63, 32, 3, 4, 15, 63, 0),
(64, 67, 4, 15, 56, 64, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_ID` int(100) NOT NULL,
  `tournament_ID` int(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `rd_1` int(3) NOT NULL DEFAULT '0',
  `rd_2` int(3) NOT NULL DEFAULT '0',
  `rd_3` int(3) NOT NULL DEFAULT '0',
  `rd_4` int(3) NOT NULL DEFAULT '0',
  `rd_5` int(3) NOT NULL DEFAULT '0',
  `rd_6` int(3) NOT NULL,
  `total_points` int(4) NOT NULL DEFAULT '0',
  `placement` int(11) NOT NULL DEFAULT '1',
  `prev_placement` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`),
  KEY `tournament_region_ID` (`tournament_ID`,`code`),
  KEY `user_ID` (`user_ID`),
  KEY `tournament_ID` (`tournament_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ID`, `user_ID`, `tournament_ID`, `code`, `rd_1`, `rd_2`, `rd_3`, `rd_4`, `rd_5`, `rd_6`, `total_points`, `placement`, `prev_placement`) VALUES
(1, 3, 1, '1-29td3', 54, 0, 0, 0, 0, 45, 99, 2, 2),
(2, 3, 1, '1-48rc', 0, 0, 0, 0, 0, 0, 0, 5, 5),
(3, 3, 1, '2-chj3', 99, 0, 0, 0, 0, 45, 144, 1, 1),
(5, 3, 1, '2-zfr5', 0, 0, 0, 0, 0, 0, 0, 3, 3),
(6, 4, 1, '2-adm2', 0, 0, 0, 0, 0, 0, 0, 6, 6),
(7, 1, 1, '1-zfr5', 99, 0, 0, 0, 0, 45, 144, 1, 1),
(8, 1, 1, '1-zfer', 0, 0, 0, 0, 0, 0, 0, 3, 3),
(9, 3, 1, '1-zf25', 0, 0, 0, 0, 0, 0, 0, 6, 6),
(10, 5, 1, '1-8f25', 0, 0, 0, 0, 0, 0, 0, 7, 7),
(11, 3, 1, '2-1351', 0, 0, 0, 0, 0, 0, 0, 4, 4),
(12, 3, 1, '2-ch58', 0, 0, 0, 0, 0, 0, 0, 5, 5),
(13, 1, 1, '2-zgrs', 0, 0, 0, 0, 0, 0, 0, 2, 2),
(14, 1, 1, '1-77Gg', 0, 0, 0, 0, 0, 0, 0, 4, 4),
(15, 1, 1, '3-2784', 0, 0, 0, 0, 0, 0, 0, 1, 1),
(16, 1, 1, '3-GG23', 0, 0, 0, 0, 0, 0, 0, 2, 2),
(17, 1, 1, '3-ww5d', 0, 0, 0, 0, 0, 0, 0, 3, 3),
(18, 1, 1, '3-1164', 0, 0, 0, 0, 0, 0, 0, 4, 4),
(19, 1, 1, '3-99Ty', 0, 0, 0, 0, 0, 0, 0, 5, 5),
(20, 1, 1, '3-89Ui', 0, 0, 0, 0, 0, 0, 0, 6, 6),
(21, 1, 1, '3-U764', 0, 0, 0, 0, 0, 0, 0, 7, 7),
(22, 4, 1, '3-TTre', 0, 0, 0, 0, 0, 0, 0, 8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tournament`
--

CREATE TABLE IF NOT EXISTS `tournament` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `year` (`year`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tournament`
--

INSERT INTO `tournament` (`ID`, `year`) VALUES
(1, 2014);

-- --------------------------------------------------------

--
-- Table structure for table `tournament_region`
--

CREATE TABLE IF NOT EXISTS `tournament_region` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `tournament_ID` int(11) NOT NULL,
  `region_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `tournament_ID` (`tournament_ID`,`region_ID`),
  KEY `region_ID` (`region_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tournament_region`
--

INSERT INTO `tournament_region` (`ID`, `tournament_ID`, `region_ID`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tournament_results`
--

CREATE TABLE IF NOT EXISTS `tournament_results` (
  `ID` int(11) NOT NULL,
  `team_tournament_region_ID` int(11) NOT NULL,
  `placement` int(2) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `team_tournament_region_ID` (`team_tournament_region_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournament_results`
--

INSERT INTO `tournament_results` (`ID`, `team_tournament_region_ID`, `placement`) VALUES
(1, 1, 2),
(2, 2, 2),
(3, 3, 2),
(4, 4, 2),
(5, 5, 2),
(6, 6, 2),
(7, 7, 2),
(8, 8, 2),
(9, 9, 2),
(10, 10, 2),
(11, 11, 2),
(12, 12, 2),
(13, 13, 2),
(14, 14, 2),
(15, 15, 2),
(16, 16, 2),
(17, 17, 2),
(18, 18, 2),
(19, 19, 2),
(20, 20, 2),
(21, 21, 2),
(22, 22, 2),
(23, 23, 2),
(24, 24, 2),
(25, 25, 2),
(26, 26, 2),
(27, 27, 2),
(28, 28, 2),
(29, 29, 2),
(30, 30, 2),
(31, 31, 2),
(32, 32, 2),
(33, 33, 2),
(34, 34, 2),
(35, 35, 2),
(36, 36, 2),
(37, 37, 2),
(38, 38, 2),
(39, 39, 2),
(40, 40, 2),
(41, 41, 2),
(42, 42, 2),
(43, 43, 2),
(44, 44, 2),
(45, 45, 2),
(46, 46, 2),
(47, 47, 2),
(48, 48, 2),
(49, 49, 2),
(50, 50, 2),
(51, 51, 2),
(52, 52, 2),
(53, 53, 2),
(54, 54, 2),
(55, 55, 2),
(56, 56, 2),
(57, 57, 2),
(58, 58, 2),
(59, 59, 2),
(60, 60, 2),
(61, 61, 2),
(62, 62, 2),
(63, 63, 2),
(64, 64, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zip` varchar(8) NOT NULL,
  `phone` varchar(18) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`,`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `first_name`, `last_name`, `email`, `city`, `state`, `zip`, `phone`, `user_name`, `password`) VALUES
(1, 'Admin', 'Admin_last', 'admin@industrialtimesinc.com', 'grand rapids', 'MI', '49418', '3133848369', 'admin', 'sari'),
(3, 'mike', 'b', 'biggyistheman@yahoo.com', 'grand rapids', 'MI', '49534', '3133848369', 'sirrahal', 'bjc4400'),
(4, 'mike', 'b', 'sari@btmindustrial.com', 'grand rapids', 'MI', '49534', '3133848369', 'sirrahal3133848369', 'bjc4400'),
(5, 'asdfasdf', 'asdfasd', 'asdfaf@yahoo.com', '23as', 'AL', '12313', '123123123', 'SirRahal23', 'bjc4400'),
(6, 'Sari', 'Rahal', 'bigg2@yahoo.com', 'asdf', 'MI', '12341', '1234123412', 'sameman', 'Feinma');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`team_1_ID`) REFERENCES `team` (`ID`),
  ADD CONSTRAINT `game_ibfk_2` FOREIGN KEY (`team_2_ID`) REFERENCES `team` (`ID`),
  ADD CONSTRAINT `game_ibfk_3` FOREIGN KEY (`tournament_ID`) REFERENCES `tournament` (`ID`);

--
-- Constraints for table `picks`
--
ALTER TABLE `picks`
  ADD CONSTRAINT `picks_ibfk_1` FOREIGN KEY (`ticket_ID`) REFERENCES `ticket` (`ID`),
  ADD CONSTRAINT `picks_ibfk_2` FOREIGN KEY (`team_ID`) REFERENCES `team` (`ID`);

--
-- Constraints for table `team_tournament_region`
--
ALTER TABLE `team_tournament_region`
  ADD CONSTRAINT `team_tournament_region_ibfk_1` FOREIGN KEY (`team_ID`) REFERENCES `team` (`ID`),
  ADD CONSTRAINT `team_tournament_region_ibfk_2` FOREIGN KEY (`tournament_region_ID`) REFERENCES `tournament_region` (`ID`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`user_ID`) REFERENCES `user` (`ID`),
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`tournament_ID`) REFERENCES `tournament` (`ID`);

--
-- Constraints for table `tournament_region`
--
ALTER TABLE `tournament_region`
  ADD CONSTRAINT `tournament_region_ibfk_1` FOREIGN KEY (`tournament_ID`) REFERENCES `tournament` (`ID`),
  ADD CONSTRAINT `tournament_region_ibfk_2` FOREIGN KEY (`region_ID`) REFERENCES `region` (`ID`);

--
-- Constraints for table `tournament_results`
--
ALTER TABLE `tournament_results`
  ADD CONSTRAINT `tournament_results_ibfk_1` FOREIGN KEY (`team_tournament_region_ID`) REFERENCES `team_tournament_region` (`ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
