-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2016 at 04:08 PM
-- Server version: 5.7.9
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spikl`
--

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

DROP TABLE IF EXISTS `universities`;
CREATE TABLE IF NOT EXISTS `universities` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(52) DEFAULT NULL,
  `lat` decimal(8,6) DEFAULT NULL,
  `lon` decimal(8,6) DEFAULT NULL,
 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`name`, `lat`, `lon`, `id`) VALUES
('The University of Aberdeen', '57.165019', '-2.099122', 1),
('University of Abertay Dundee', '56.463340', '-2.973441', 2),
('Aberystwyth University', '52.403473', '-4.043584', 3),
('Anglia Ruskin University', '51.741381', '0.474495', 4),
('Aston University', '52.486637', '-1.890952', 5),
('Bangor University', '53.229193', '-4.129437', 6),
('Bath Spa University', '51.373209', '-2.440912', 7),
('The University of Bath', '51.380441', '-2.330673', 8),
('University of Bedfordshire', '51.878250', '-0.411539', 9),
('The Queen''s University of Belfast', '54.584772', '-5.934438', 10),
('Birkbeck College', '51.521891', '-0.130359', 11),
('Birmingham City University', '52.517271', '-1.897287', 12),
('The University of Birmingham', '52.451408', '-1.930047', 13),
('Bishop Grosseteste University', '53.243563', '-0.537139', 14),
('The University of Bolton', '53.573511', '-2.436238', 15),
('The Arts University Bournemouth', '50.741370', '-1.898107', 16),
('Bournemouth University', '50.742979', '-1.897168', 17),
('The University of Bradford', '53.791242', '-1.766231', 18),
('The University of Brighton', '50.842454', '-0.119170', 19),
('The University of Bristol', '51.459066', '-2.603291', 20),
('Brunel University London', '51.532838', '-0.472856', 21),
('The University of Buckingham', '51.995998', '-0.991839', 22),
('Buckinghamshire New University', '51.628497', '-0.753097', 23),
('The University of Cambridge', '52.205296', '0.117067', 24),
('The Institute of Cancer Research', '51.490831', '-0.181284', 25),
('Canterbury Christ Church University', '51.279643', '1.089364', 26),
('Cardiff University', '51.489057', '-3.179825', 27),
('Cardiff Metropolitan University', '51.483608', '-3.223624', 28),
('The University of Central Lancashire', '53.761338', '-2.707384', 29),
('University of Chester ', '53.198641', '-2.898061', 30),
('The University of Chichester', '50.844310', '-0.775010', 31),
('The City University', '51.527704', '-0.102614', 32),
('Conservatoire for Dance and Drama', '51.526206', '-0.129115', 33),
('Courtauld Institute of Art', '51.510732', '-0.116938', 34),
('Coventry University', '52.405314', '-1.500063', 35),
('Cranfield University', '52.073918', '-0.628755', 36),
('University for the Creative Arts ', '51.215684', '-0.805973', 37),
('University of Cumbria', '54.891163', '-2.921417', 38),
('De Montfort University', '52.629286', '-1.137817', 39),
('University of Derby', '52.938527', '-1.496681', 40),
('The University of Dundee', '56.457345', '-2.978269', 41),
('University of Durham', '54.768112', '-1.571874', 42),
('The University of East Anglia', '52.622369', '1.241391', 43),
('The University of East London', '51.507485', '0.064759', 44),
('Edge Hill University', '53.559608', '-2.873836', 45),
('The University of Edinburgh', '55.947691', '-3.187347', 46),
('The University of Essex', '51.876715', '0.946666', 47),
('The University of Exeter', '50.735156', '-3.535048', 48),
('Falmouth University', '50.149625', '-5.071079', 49),
('Glasgow Caledonian University', '55.867290', '-4.250057', 50),
('Glasgow School of Art', '55.865958', '-4.263405', 51),
('The University of Glasgow', '55.871751', '-4.288360', 52),
('University of Gloucestershire', '51.887496', '-2.088788', 53),
('Glynd?r University', '53.052626', '-3.006109', 54),
('Goldsmiths College', '51.474144', '-0.035401', 55),
('The University of Greenwich', '51.484468', '-0.004005', 56),
('Guildhall School of Music and Drama', '51.519517', '-0.092374', 57),
('Harper Adams University', '52.779896', '-2.425558', 58),
('Heriot-Watt University', '55.909385', '-3.320682', 59),
('University of Hertfordshire', '51.753128', '-0.240975', 60),
('Heythrop College', '51.499883', '-0.190908', 61),
('The University of Huddersfield', '53.643723', '-1.776864', 62),
('The University of Hull', '53.771778', '-0.366384', 63),
('Imperial College of Science, Technology and Medicine', '51.498317', '-0.176923', 64),
('Institute of Education', '51.522977', '-0.127965', 65),
('The University of Keele', '53.003262', '-2.273581', 66),
('The University of Kent', '51.298503', '1.070975', 67),
('King''s College London', '51.511612', '-0.116253', 68),
('Kingston University', '51.406309', '-0.307860', 69),
('Leeds College of Art ', '53.808429', '-1.551775', 70),
('Liverpool School of Tropical Medicine', '53.408563', '-2.969135', 71),
('University of Wales Trinity Saint David', '51.858361', '-4.328713', 72),
('The University of Lancaster', '54.010418', '-2.786451', 73),
('Leeds Beckett University', '53.826337', '-1.590750', 74),
('Leeds Trinity University', '53.848780', '-1.647350', 75),
('The University of Leeds', '53.807958', '-1.553329', 76),
('The University of Leicester', '52.622086', '-1.124531', 77),
('The University of Lincoln', '53.228709', '-0.548641', 78),
('Liverpool Hope University', '53.391475', '-2.891936', 79),
('The Liverpool Institute for Performing Arts ', '53.399657', '-2.972271', 80),
('Liverpool John Moores University', '53.403685', '-2.973176', 81),
('The University of Liverpool', '53.380314', '-2.976431', 82),
('London Business School', '51.526581', '-0.161378', 83),
('University of London (Institutes and activities)', '51.520642', '-0.128724', 84),
('London Metropolitan University', '51.551471', '-0.110381', 85),
('London School of Economics and Political Science', '51.514114', '-0.116971', 86),
('London School of Hygiene and Tropical Medicine', '51.520925', '-0.130687', 87),
('University of the Arts, London', '51.517765', '-0.116388', 88),
('Loughborough University', '52.764828', '-1.229520', 89),
('The Manchester Metropolitan University', '53.470917', '-2.239115', 90),
('The University of Manchester', '53.467926', '-2.233224', 91),
('Middlesex University', '51.589826', '-0.229909', 92),
('Edinburgh Napier University', '55.918050', '-3.240060', 93),
('University of Newcastle-upon-Tyne', '54.980320', '-1.615713', 94),
('Newman University', '52.434122', '-1.995028', 95),
('The University of Northampton', '52.271992', '-0.883103', 96),
('University of Northumbria at Newcastle', '54.976897', '-1.607575', 97),
('Norwich University of the Arts', '52.630494', '1.297272', 98),
('The Nottingham Trent University', '52.956436', '-1.152077', 99),
('University of Nottingham', '52.938184', '-1.194380', 100),
('Oxford Brookes University', '51.754380', '-1.223200', 101),
('The University of Oxford', '51.758038', '-1.262010', 102),
('Plymouth College of Art', '50.373410', '-4.137411', 103),
('University of Plymouth', '50.375329', '-4.138735', 104),
('The University of Portsmouth', '50.795187', '-1.093628', 105),
('Queen Margaret University, Edinburgh', '55.931281', '-3.073057', 106),
('Queen Mary University of London', '51.524636', '-0.040710', 107),
('Ravensbourne', '51.501677', '0.005651', 108),
('The University of Reading', '51.457625', '-0.945636', 109),
('The Robert Gordon University', '57.118344', '-2.144740', 110),
('Roehampton University ', '51.455585', '-0.247673', 111),
('Rose Bruford College', '51.439271', '0.106446', 112),
('Royal Academy of Music', '51.523497', '-0.151700', 113),
('Royal Agricultural University', '51.709508', '-1.994916', 114),
('The Royal Central School of Speech and Drama', '51.544325', '-0.174205', 115),
('Royal College of Art', '51.501354', '-0.178473', 116),
('Royal College of Music', '51.499279', '-0.176913', 117),
('Royal Conservatoire of Scotland', '55.865813', '-4.257595', 118),
('Royal Holloway and Bedford New College', '51.424814', '-0.566745', 119),
('Royal Northern College of Music', '53.468557', '-2.236963', 120),
('The Royal Veterinary College', '51.536851', '-0.133524', 121),
('SRUC', '55.921623', '-3.176228', 122),
('The University of St Andrews', '56.341239', '-2.793287', 123),
('St George''s Hospital Medical School', '51.427798', '-0.175228', 124),
('University of St Mark and St John', '50.420866', '-4.110758', 125),
('St Mary''s University College', '54.593162', '-5.961323', 126),
('St Mary''s University, Twickenham', '51.436152', '-0.335907', 127),
('The University of Salford', '53.483487', '-2.270651', 128),
('The School of Oriental and African Studies', '51.522350', '-0.129259', 129),
('Sheffield Hallam University', '53.379194', '-1.465255', 130),
('The University of Sheffield', '53.381363', '-1.488530', 131),
('London South Bank University', '51.498708', '-0.101772', 132),
('University of South Wales', '51.587622', '-3.327445', 133),
('Southampton Solent University', '50.907747', '-1.400166', 134),
('The University of Southampton', '50.934099', '-1.395714', 135),
('Staffordshire University', '52.812975', '-2.081855', 136),
('The University of Stirling', '56.145463', '-3.920023', 137),
('Stranmillis University College', '54.571733', '-5.936458', 138),
('The University of Strathclyde', '55.861250', '-4.244706', 139),
('The University of Sunderland', '54.904456', '-1.390973', 140),
('The University of Surrey', '51.242572', '-0.587946', 141),
('The University of Sussex', '50.864470', '-0.087076', 142),
('Swansea University', '51.609627', '-3.980616', 143),
('The National Film and Television School', '51.604752', '-0.638385', 144),
('Teesside University', '54.572076', '-1.234694', 145),
('The University of West London ', '51.507259', '-0.303013', 146),
('The Open University', '52.024914', '-0.709747', 147),
('The University of Wales', '51.485538', '-3.181031', 148),
('Trinity Laban Conservatoire of Music and Dance', '51.483587', '-0.007198', 149),
('University of the Highlands and Islands', '57.469405', '-4.230246', 150),
('University of Ulster', '55.149335', '-6.676089', 151),
('University Campus Suffolk', '52.052392', '1.163459', 152),
('University College Birmingham', '52.481840', '-1.905939', 153),
('University College London', '51.523569', '-0.132424', 154),
('The University of Warwick', '52.385576', '-1.564787', 155),
('University of the West of England, Bristol', '51.501079', '-2.547458', 156),
('The University of the West of Scotland', '55.843316', '-4.429782', 157),
('The University of Westminster', '51.516792', '-0.143367', 158),
('The University of Winchester', '51.060002', '-1.326740', 159),
('The University of Wolverhampton', '52.587529', '-2.128060', 160),
('University of Worcester', '52.197366', '-2.243085', 161),
('Writtle College', '51.737196', '0.428133', 162),
('York St John University', '53.964844', '-1.079543', 163),
('The University of York', '53.948278', '-1.051673', 164);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `universities`
--
ALTER TABLE `universities` ADD FULLTEXT KEY `name` (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
