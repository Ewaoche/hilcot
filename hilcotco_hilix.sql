-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 16, 2020 at 04:49 PM
-- Server version: 10.2.27-MariaDB-log
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hilcotco_hilix`
--

-- --------------------------------------------------------

--
-- Table structure for table `hilc_cms`
--

CREATE TABLE `hilc_cms` (
  `id` int(11) NOT NULL,
  `cmskey` varchar(100) DEFAULT NULL,
  `cms` text DEFAULT NULL,
  `stamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hilc_cms`
--

INSERT INTO `hilc_cms` (`id`, `cmskey`, `cms`, `stamp`, `admin`) VALUES
(1, '1001-2-1', 'Work With Us', '2020-06-13 11:58:57', NULL),
(2, '1001-3-1', 'We are hiring', '2020-06-13 12:00:32', NULL),
(3, 'home-footer-8', '%C2%A9 2017 Hilcot Energy Services - All Rights Reserved', '2020-06-13 12:57:34', NULL),
(4, '1003-4-1', 'Oil Drilling Services', '2020-06-13 12:08:31', NULL),
(5, '1003-4-2', 'OIL DRILLING IS GOOD OUR REAL COMMITMENT REACHES BEYOND GAS & OIL COMPANY.', '2020-06-13 12:09:06', NULL),
(6, '1003-5-1', './_store/cms/photos/1003-5-1.jpeg', '2020-06-13 12:10:47', NULL),
(7, 'home-header-2', 'services@hilcot.com', '2020-06-13 12:51:01', NULL),
(8, 'home-header-3', '234 803 550 3796', '2020-06-13 21:56:26', NULL),
(9, '1000-13-1', 'QUALITY DRIVEN', '2020-06-14 09:34:42', NULL),
(10, '1000-13-2', 'We have an unyielding approach to quality. By our uncompromising culture, we guarantee the degree of quality that ensures the extraordinary customer experience with very modest cost involvement.Hilcot expands on the best ideas and practices from many quality strategies to create an ideal methodology for our services.', '2020-06-14 10:07:56', NULL),
(11, '1000-13-3', 'CLIENT FOCUSED', '2020-06-15 22:13:04', NULL),
(12, '1000-13-6', 'We aim to exploit global efficiencies in the delivery of our products or services. Hilcot global sourcing initiatives and programs form an integral part of the strategic sourcing plan and procurement strategy. This is our way of maintaining optimum quality and standards to ensure remarkable impressions because every business deal count.', '2020-06-14 11:08:10', NULL),
(13, '1000-13-8', 'OUR REAL COMMITMENT REACHES BEYOND JUST OIL AND GAS SERVICES.', '2020-06-15 22:13:51', NULL),
(14, '1000-13-9', 'HILCOT Energy Services Limited is a spearheading organization established in the Oil and Gasindustry to advance our oil well services, engineering consultancy, and supply of oil rig drillingtools and consumables.', '2020-06-14 11:31:11', NULL),
(15, '1000-13-10', 'Key personnel at HILCOT came united from some pioneering offshore drilling companies around the world establishing a company of profoundly specific drilling professionals. With many years of hands-on experiences, understanding, the technical know-how and inventiveness HILCOT has built up a product offering of novel and imaginative engineering services and oil rig drilling supplies engaging to both offshore and onshore drilling facilities.', '2020-06-15 22:19:53', NULL),
(16, '1000-13-13', 'Hillary Machebe', '2020-06-14 11:40:12', NULL),
(17, '1000-13-15', 'Engr. Hillary Machebe is the Managing Director at Hilcot Energy Services Limited, where he works in the core Hilcot team to enrich the services to Hilcot clients in the oil and gas industry.Hillary had previously handled ample positions such as the consultant Drilling fluid engineer at an ultra-deepwater project forTOTAL Exploration, Angola, for Block 17, Clove Project, etc. He has also successfully drilled many CRA351,353, many PRPWells, many ACACIA Wells, GENGIBRE, MONSTARDA Wells, etc, using NABM, Reservoir Mud Systems, and Sieved ReservoirNAMB Systems. Hillary had bagged an MBA in addition to his Bachelors\'s Degree in Chemical Engineering. When not hard at work, he enjoys golfing.', '2020-06-15 22:17:38', NULL),
(18, '1000-13-16', 'Hilcot Energy continues to grow ever day thanks to the confidence our clients have in us. We cover quite a number of services and products in the oil and gas industry.', '2020-06-14 11:47:42', NULL),
(19, 'home-footer-12', 'Nigeria: Plot 42, Road 8, off Etche Road, Port-Harcourt, Rivers state.', '2020-06-16 15:25:25', NULL),
(20, '1000-13-36', 'Mud Logging Services', '2020-06-14 12:48:27', NULL),
(21, '1000-13-37', 'We have some expertise in masterly mudlogging with surface instrumentation and cautiousgeological analysis at drill sites', '2020-06-14 12:51:29', NULL),
(22, '1000-13-32', 'Supply of Drilling fluid & additives', '2020-06-14 12:43:29', NULL),
(23, '1000-13-31', 'The API specifications are the standards that govern our attributes', '2020-06-14 12:58:55', NULL),
(24, '1000-13-30', 'Supplies of Casings & Tubings', '2020-06-14 12:59:32', NULL),
(25, '1000-13-34', 'offshore tank cleaning', '2020-06-14 13:00:42', NULL),
(26, '1000-13-35', 'interestingly, our offshore tank cleaning services go along with accompanying slops treatment services with zero discharge', '2020-06-14 13:23:32', NULL),
(27, '1000-13-38', 'brine filtration', '2020-06-14 13:10:59', NULL),
(28, '1000-13-39', 'Our Team works to ensure that completion and workover fluids are filtered to prevent downhole contamination and formation damage', '2020-06-14 13:13:49', NULL),
(29, '1000-13-28', 'Solid control ENGINEERING', '2020-06-14 13:14:43', NULL),
(30, '1000-13-29', 'Hilcot Shaker Replacement Screens are made with our usual touch of outstanding quality', '2020-06-14 13:18:06', NULL),
(31, '1000-13-40', 'For our oil and gas engineering services and supplies... We are available to you.', '2020-06-16 15:14:07', NULL),
(32, 'home-footer-10', 'General: services@hilcot.com, <br/> Sales: sales@hilcot.com', '2020-06-16 14:17:38', NULL),
(57, '1000-13-21', 'Casings and Tubings', '2020-06-16 15:30:00', NULL),
(33, 'home-footer-14', 'Office Telephone: 234 803 550 3796 <br/> Mobile: 234 803 791 1837', '2020-06-16 14:18:00', NULL),
(34, 'home-footer-2', 'HILCOT Energy Services Limited is a spearheading organization established in the Oil and Gasindustry to advance our oil well services, engineering consultancy, and supply of oil rig drillingtools and consumables', '2020-06-14 13:41:56', NULL),
(35, 'home-footer-6', 'Get instant access to our treasure chest of newsletters and updates', '2020-06-14 14:00:39', NULL),
(36, '1000-13-4', 'We are oriented towards our clients\' needs. Accordingly, we focus on developing and sustaining productive client relationships to become acquainted with clients and their needs and expectations. Embedding in their strategy is our way of forging a deeper relationship with clients; showing them how your corporate strategy meshes with theirs.', '2020-06-15 14:11:55', NULL),
(37, '1000-13-19', 'Offshore Chemical Containers', '2020-06-16 15:33:33', NULL),
(38, '1000-13-7', 'COMPANY OVERVIEW', '2020-06-15 13:50:48', NULL),
(39, 'home-header-1', 'We are your significant associate in readiness with our oil and gas engineering services', '2020-06-15 17:26:40', NULL),
(40, '1021-19-2', 'We have an unyielding approach to quality. By our uncompromising culture, we guarantee the degree of quality that ensures the extraordinary customer experience with very modest cost involvement.Hilcot expands on the best ideas and practices from many quality strategies to create an ideal methodology for our services.', '2020-06-15 22:10:47', NULL),
(41, '1021-19-4', 'We are oriented towards our clients\' needs. Accordingly, we focus on developing and sustaining productive client relationships to become acquainted with clients and their needs and expectations. Embedding in their strategy is our way of forging a deeper relationship with clients; showing them how your corporate strategy meshes with theirs.', '2020-06-15 22:11:24', NULL),
(42, '1021-19-6', 'We aim to exploit global efficiencies in the delivery of our products or services. Hilcot global sourcing initiatives and programs form an integral part of the strategic sourcing plan and procurement strategy. This is our way of maintaining optimum quality and standards to ensure remarkable impressions because every business deal count.', '2020-06-15 22:12:09', NULL),
(43, '1021-19-3', 'CLIENT FOCUSED', '2020-06-15 22:12:48', NULL),
(44, '1021-19-8', 'OUR REAL COMMITMENT REACHES BEYOND JUST OIL AND GAS SERVICES.', '2020-06-15 22:14:22', NULL),
(45, '1021-19-9', 'HILCOT Energy Services Limited is a spearheading organization established in the Oil and Gasindustry to advance our oil well services, engineering consultancy, and supply of oil rig drillingtools and consumables.', '2020-06-15 22:15:02', NULL),
(46, '1021-19-10', 'Key personnel at HILCOT came united from some pioneering offshore drilling companies around the world establishing a company of profoundly specific drilling professionals. With many years of hands-on experiences, understanding, the technical know-how and inventiveness HILCOT has built up a product offering of novel and imaginative engineering services and oil rig drilling supplies engaging to both offshore and onshore drilling facilities.', '2020-06-15 22:18:51', NULL),
(47, '1021-21-3', 'Hillary Machebe', '2020-06-15 22:16:27', NULL),
(48, '1021-21-5', 'Engr. Hillary Machebe is the Managing Director at Hilcot Energy Services Limited, where he works in the core Hilcot team to enrich the services to Hilcot clients in the oil and gas industry.Hillary had previously handled ample positions such as the consultant Drilling fluid engineer at an ultra-deepwater project forTOTAL Exploration, Angola, for Block 17, Clove Project, etc. He has also successfully drilled many CRA351,353, many PRPWells, many ACACIA Wells, GENGIBRE, MONSTARDA Wells, etc, using NABM, Reservoir Mud Systems, and Sieved ReservoirNAMB Systems. Hillary had bagged an MBA in addition to his Bachelors\'s Degree in Chemical Engineering. When not hard at work, he enjoys golfing.', '2020-06-15 22:18:00', NULL),
(49, '1021-21-6', 'Hilcot Energy continues to grow ever day thanks to the confidence our clients have in us. We cover quite a number of services and products in the oil and gas industry.', '2020-06-15 22:20:41', NULL),
(50, '1021-22-4', 'Professionalism is our primary essence. Our key personnel came united from some pioneering offshore drilling companies around the world.', '2020-06-15 22:48:52', NULL),
(51, '1021-22-7', 'The trust we earn is the outcome of our regular custom and conventions at Hilcot. This is the glue that binds our business relationships with our clients. We are trusted because of our way of being.', '2020-06-15 23:00:19', NULL),
(52, '1021-22-10', 'We have a career-advancing mandate. Our personnel possess a wide and profound competence in terms of knowledge, aptitude, and experience through recurrent training.', '2020-06-15 23:30:11', NULL),
(53, '1008-24-7', 'Contact Our Team', '2020-06-16 07:22:31', NULL),
(54, '1008-24-6', 'We would be glad to hear from you. We will respond in 24hrs.', '2020-06-16 07:23:02', NULL),
(55, '1000-13-14', 'MANAGING DIRECTOR', '2020-06-16 14:16:11', NULL),
(56, '1000-13-11', 'MANAGING DIRECTOR', '2020-06-16 14:16:29', NULL),
(58, '1000-13-18', 'Drilling Fluid Chemicals & Additives', '2020-06-16 15:31:02', NULL),
(59, '1000-13-22', 'Replacement Shaker Screen Manufacturing and Supply', '2020-06-16 15:38:03', NULL),
(60, '1000-13-23', 'Rig Equipment Lease', '2020-06-16 15:36:02', NULL),
(61, '1000-13-26', 'Offshore Compressors', '2020-06-16 15:36:44', NULL),
(62, '1000-13-25', 'Brine Filtration Services', '2020-06-16 15:37:05', NULL),
(63, '1000-13-24', 'Offshore Tank Cleaning', '2020-06-16 15:37:39', NULL),
(64, '1000-13-51', './_store/cms/photos/1000-13-51.jpg', '2020-06-16 15:42:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hilc_pages`
--

CREATE TABLE `hilc_pages` (
  `id` int(11) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `parent` int(11) DEFAULT 0,
  `menutitle` varchar(100) DEFAULT NULL,
  `sort` int(11) DEFAULT 0,
  `title` varchar(300) DEFAULT NULL,
  `type` enum('page','blog','store','newspage') NOT NULL DEFAULT 'page',
  `category` varchar(100) NOT NULL DEFAULT '[]',
  `contents` text DEFAULT NULL,
  `page_photo` varchar(300) NOT NULL DEFAULT '/templates/assets/images/spa-treatments.jpg',
  `views` int(11) NOT NULL DEFAULT 1,
  `homepage` tinyint(1) DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hilc_pages`
--

INSERT INTO `hilc_pages` (`id`, `slug`, `parent`, `menutitle`, `sort`, `title`, `type`, `category`, `contents`, `page_photo`, `views`, `homepage`, `created`) VALUES
(1000, 'home', 0, 'Home', 0, 'Hilcot Energy Services | Oil & Gas', 'page', '[]', NULL, '/templates/assets/images/spa-treatments.jpg', 1, 1, '2020-06-13 11:44:29'),
(1001, 'career', 0, 'Career', 1, 'Jobs & Careers', 'page', '[\"cat1\"]', NULL, './_store/pages/photos/2_1.jpg', 1, 0, '2020-06-15 16:02:19'),
(1002, 'services', 0, 'SERVICES', 3, 'Our Services', 'page', '[\"cat2\"]', NULL, './_store/pages/photos/nnpc-oil-facilities_1.jpeg', 1, 0, '2020-06-15 14:12:00'),
(1018, 'mud-logging-services', 1002, 'Mud Logging Services', 5, 'Mud Logging Services', 'page', '[\"cat3\"]', NULL, './_store/pages/photos/Mud-logging.jpg', 1, 0, '2020-06-15 17:02:03'),
(1004, 'about-us', 0, 'ABOUT US', 2, 'About Hilcot Energy company', 'page', '[\"cat2\"]', NULL, './_store/pages/photos/favicon_2.png', 1, 0, '2020-06-15 11:54:35'),
(1005, 'our-team', 1004, 'OUR TEAM', 3, 'Our Team', 'page', '', NULL, './_store/pages/photos/favicon_3.png', 1, 0, '2020-06-16 13:40:45'),
(1006, 'gallery', 0, 'GALLERY', 5, 'Hilcot Gallery', 'page', '[\"cat2\"]', NULL, './_store/pages/photos/favicon_4.png', 1, 0, '2020-06-15 12:21:49'),
(1007, 'news-and-updates', 0, 'NEWS & UPDATES', 6, 'News and Updates', 'page', '[\"cat2\"]', NULL, './_store/pages/photos/favicon_5.png', 1, 0, '2020-06-15 16:44:54'),
(1008, 'contact', 0, 'CONTACT', 7, 'Contact Us', 'page', '[\"cat2\"]', NULL, './_store/pages/photos/favicon_6.png', 1, 0, '2020-06-15 16:11:14'),
(1012, 'company-history', 1004, 'COMPANY HISTORY', 2, 'Company History', 'page', '', NULL, './_store/pages/photos/blog-3.jpg', 1, 0, '2020-06-15 13:37:23'),
(1021, 'our-company', 1004, 'OUR COMPANY', 1, 'Our Company', 'page', '', NULL, './_store/pages/photos/2.jpg', 1, 0, '2020-06-15 15:14:41'),
(1013, 'our-partners', 1004, 'OUR PARTNERS', 4, 'Our Partners', 'page', '', NULL, './_store/pages/photos/logo.png', 1, 0, '2020-06-15 13:40:56'),
(1014, 'solid-control-engineering', 1002, 'Solid Control Engineering', 1, 'Solid Control Engineering', 'page', '[\"cat3\"]', NULL, './_store/pages/photos/Screen.jpg', 1, 0, '2020-06-15 16:55:31'),
(1015, 'supply-of-casings-and-tubings', 1002, 'Supply of Casings & Tubings', 2, 'Casings and Tubings', 'page', '[\"cat3\"]', NULL, './_store/pages/photos/5222463c94b79.jpg', 1, 0, '2020-06-15 17:03:53'),
(1016, 'supply-of-drilling-fluids-and-additives', 1002, 'Supply of Drilling Fluids & Additives', 3, 'Drilling Fluids & Additives', 'page', '[\"cat3\"]', NULL, './_store/pages/photos/Drilling-fluid-supply.jpg', 1, 0, '2020-06-15 17:04:54'),
(1017, 'offshore-tank-cleaning-services', 1002, 'Offshore Tank Cleaning Services', 4, 'Offshore Tank Cleaning', 'page', '[\"cat3\"]', NULL, './_store/pages/photos/Tank-Cleaning-Operation-1.png', 1, 0, '2020-06-15 16:56:38'),
(1019, 'brine-filtration-services', 1002, 'Brine Filtration Services', 6, 'Brine Filtration', 'page', '[\"cat3\"]', NULL, './_store/pages/photos/filtration-unit.jpg', 1, 0, '2020-06-15 17:00:18'),
(1020, 'lease-of-rig-equipment', 1002, 'Lease of Rig Equipment', 7, 'Rig Equipment Lease', 'page', '[\"cat3\"]', NULL, './_store/pages/photos/f53ceb860a3c850bd2afa806ac39c6d2.png', 1, 0, '2020-06-15 17:03:00'),
(1022, 'manufacturing-holds-key-to-recovery-of-oil-and-gas-markets-expert-says', 0, 'Manufacturing Holds Key to Recovery of Oil and Gas Markets, Expert says', 19, 'Manufacturing Holds Key to Recovery of Oil and Gas Markets, Expert says', 'blog', '', NULL, './_store/pages/photos/PHOTO-2020-04-28-05-33-34.jpg', 1, 0, '2020-06-15 15:51:49'),
(1023, 'give-feedback', 0, 'Give Feedback', 2, 'Feedback', 'page', '[\"cat1\"]', NULL, './_store/pages/photos/feedback-1.png', 1, 0, '2020-06-15 16:09:17'),
(1024, 'contact-us', 1008, 'CONTACT US', 1, 'Contact Us', 'page', '', NULL, './_store/pages/photos/Blue-half-logo.png', 1, 0, '2020-06-15 16:20:31'),
(1025, 'get-a-quote', 1008, 'GET A QUOTE', 2, 'Get a Quote', 'page', '', NULL, './_store/pages/photos/removals-quote.png', 1, 0, '2020-06-15 16:24:28'),
(1026, 'grid-bar', 1007, 'GRID BAR', 1, 'News and Updates', 'page', '', NULL, './_store/pages/photos/Blue-half-logo_1.png', 1, 0, '2020-06-15 16:32:58'),
(1027, 'sidebar', 1007, 'SIDEBAR', 2, 'News and Updates', 'page', '', NULL, './_store/pages/photos/Blue-half-logo_2.png', 1, 0, '2020-06-15 16:33:55'),
(1028, 'single-news', 1007, 'SINGLE NEWS', 3, 'News and Updates', 'page', '', NULL, './_store/pages/photos/Blue-half-logo_3.png', 1, 0, '2020-06-15 16:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `hilc_siteinfo`
--

CREATE TABLE `hilc_siteinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `value` text DEFAULT NULL,
  `type` enum('text','textarea','checkbox') NOT NULL DEFAULT 'text'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hilc_siteinfo`
--

INSERT INTO `hilc_siteinfo` (`id`, `name`, `value`, `type`) VALUES
(1, 'appname', 'hilcot', 'text'),
(2, 'domain', 'https://hilcot.com/', 'text'),
(3, 'username', 'admin', 'text'),
(4, 'password', 'admin', 'text'),
(5, 'mobile', '08037911837', 'text'),
(6, 'email', 'services@hilcot.com', 'text'),
(7, 'Get-A-Quote-Text', 'Get A Quote', 'text'),
(8, 'Get-A-Quote-Link', '/info/contact-us', 'text'),
(9, 'Facebook-Link', '#', 'text'),
(10, 'Twitter-Link', '#', 'text'),
(11, 'Instagram-Link', '#', 'text'),
(12, 'Pinterest-Link', '#', 'text'),
(13, 'Youtube-Link', '#', 'text'),
(14, 'Vimeo-Link', '#', 'text'),
(15, 'Youtube-Video', 'https://www.youtube.com/watch?v=JGYuCRYFxew', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `hilc_slides`
--

CREATE TABLE `hilc_slides` (
  `id` int(11) NOT NULL,
  `top_title` varchar(100) DEFAULT NULL,
  `main_title` varchar(50) DEFAULT NULL,
  `sub_title` text DEFAULT NULL,
  `button_text` varchar(100) NOT NULL DEFAULT 'Explore Now',
  `slide` varchar(500) DEFAULT '/templates/assets/images/welcome-carousel2.jpg',
  `page_link` varchar(100) DEFAULT '/',
  `created` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hilc_slides`
--

INSERT INTO `hilc_slides` (`id`, `top_title`, `main_title`, `sub_title`, `button_text`, `slide`, `page_link`, `created`) VALUES
(7, 'Strikingly Outstanding ', 'Oil and Gas Engineering Services', 'We are primarily intended to collaborate in advancing your oil well services via our engineering consultancy, and our supply of oil rig equipment and drilling consumables', 'Explore Now', './_store/sliders/photos/slide-2.jpg', '1004', '2020-06-13 21:31:55'),
(8, 'We aid the high-fliers', 'Make the Ideal Future', 'The future of your project outcome is hinged on your choices today. Your operations are principal; our expertise keeps the pace!', 'LEARN MORE', './_store/sliders/photos/slide-1.jpg', '1021', '2020-06-16 14:50:48'),
(9, 'Expert Consulting', 'Providing Innovative Solution', 'We analyze the operation; classify the decision criteria; come up with several relevant ideas, and then pick the best.', 'Consult Experts', './_store/sliders/photos/slide-3.jpg', '1024', '2020-06-16 15:11:32'),
(11, 'We are HILCOT', 'Probe the Distinction. Strike. Succeed.', 'We are primarily intended to collaborate in advancing your oil well services via our engineering consultancy, and our supply of oil rig equipment and drilling consumables', 'Contact Us', './_store/sliders/photos/23_2.jpg', '1024', '2020-06-16 15:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `hilc_testimonies`
--

CREATE TABLE `hilc_testimonies` (
  `id` int(11) NOT NULL,
  `client` varchar(300) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `testimony` text DEFAULT NULL,
  `photo` varchar(300) DEFAULT '/templates/assets/images/testify.png',
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hilc_testimonies`
--

INSERT INTO `hilc_testimonies` (`id`, `client`, `title`, `testimony`, `photo`, `created`) VALUES
(1, 'Agu Chux', 'CEO Golojan', 'Testimon ypw aeo wowq Testimon ypw aeo wowq Testimon ypw aeo wowq Testimon ypw aeo wowq Testimon ypw aeo wowq Testimon ypw aeo wowq Testimon ypw aeo wowq Testimon ypw aeo wowq Testimon ypw aeo wowq Testimon ypw aeo wowq Testimon ypw aeo wowq Testimon ypw aeo wowq Testimon ypw aeo wowq ', './_store/testimonies/photos/673e10914499f994330bc95819082143056e0180.jpeg', '2020-06-15 12:28:41');

-- --------------------------------------------------------

--
-- Table structure for table `hilc_webparts`
--

CREATE TABLE `hilc_webparts` (
  `id` int(11) NOT NULL,
  `page` int(11) DEFAULT NULL,
  `webpart` varchar(300) DEFAULT NULL,
  `params` varchar(1000) NOT NULL DEFAULT '[]',
  `sort` int(4) NOT NULL DEFAULT 0,
  `enabled` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hilc_webparts`
--

INSERT INTO `hilc_webparts` (`id`, `page`, `webpart`, `params`, `sort`, `enabled`) VALUES
(13, 1000, 'Default-Site-Home-Page', '[]', 0, 1),
(2, 1001, 'Title-Divider-Bar', '[]', 1, 1),
(5, 1003, 'Info-Image-And-Text', '[]', 2, 1),
(4, 1003, 'Info-Two-Cols-Box', '[]', 1, 1),
(17, 1002, 'Services-Grid-Box', '[]', 1, 1),
(14, 1007, 'Dynamic-Grid-News-Media', '[]', 1, 1),
(16, 1009, 'Multi-Cols-Combo-Box', '[]', 1, 1),
(19, 1021, 'Multi-Cols-Combo-Box', '[]', 1, 1),
(21, 1021, 'Board-Ceo-Feature-Box', '[]', 2, 1),
(22, 1021, 'Three-Media-Boxes', '[]', 5, 1),
(23, 1012, 'Info-Image-And-Text', '[]', 1, 1),
(25, 1024, 'Contact-Form-Details', '[]', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hilc_cms`
--
ALTER TABLE `hilc_cms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cmskey` (`cmskey`);

--
-- Indexes for table `hilc_pages`
--
ALTER TABLE `hilc_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `hilc_siteinfo`
--
ALTER TABLE `hilc_siteinfo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `hilc_slides`
--
ALTER TABLE `hilc_slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hilc_testimonies`
--
ALTER TABLE `hilc_testimonies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hilc_webparts`
--
ALTER TABLE `hilc_webparts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hilc_cms`
--
ALTER TABLE `hilc_cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `hilc_pages`
--
ALTER TABLE `hilc_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1029;

--
-- AUTO_INCREMENT for table `hilc_siteinfo`
--
ALTER TABLE `hilc_siteinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `hilc_slides`
--
ALTER TABLE `hilc_slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hilc_testimonies`
--
ALTER TABLE `hilc_testimonies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hilc_webparts`
--
ALTER TABLE `hilc_webparts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
