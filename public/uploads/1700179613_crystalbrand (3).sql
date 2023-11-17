-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 12:36 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crystalbrand_crystalbrand`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerorderitems`
--

CREATE TABLE `customerorderitems` (
  `id` int(11) NOT NULL,
  `orderId` int(11) NOT NULL,
  `itemsDescriptions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `stripeid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `email`, `name`, `phone`, `stripeid`) VALUES
(10, 'cus_P1FIOMn8jwIzUz', 'Khan Hamza', '+1+1+103162400202', 'Not Added Under Payment Process'),
(11, 'cus_P1FmoMt7hLNMhy', 'Khan sd', '031624020202', 'Not Added Under Payment Process'),
(12, 'cus_P1GYYp4dQ2BO8B', 'Khan sd', '031624020202', 'Not Added Under Payment Process'),
(13, 'cus_P1Gh2bPfK1SEix', 'Khan sd', '031624020202', 'Not Added Under Payment Process'),
(14, 'cus_P1GrrId9N6NXgp', 'Khan sd', '031624020202', 'Not Added Under Payment Process');

-- --------------------------------------------------------

--
-- Table structure for table `customorder`
--

CREATE TABLE `customorder` (
  `id` int(11) NOT NULL,
  `orderNumber` varchar(255) NOT NULL,
  `orderDate` date NOT NULL,
  `orderTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `orderFrom` varchar(255) NOT NULL,
  `packageName` varchar(255) NOT NULL,
  `packagePrice` varchar(255) NOT NULL,
  `stripeCustomerID` varchar(255) NOT NULL,
  `stripePaymentID` varchar(255) NOT NULL,
  `stripeInvoiceLink` text NOT NULL,
  `orderStatus` varchar(255) NOT NULL,
  `orderPaymentStatus` text NOT NULL,
  `stripePaymentLink` varchar(255) NOT NULL,
  `status` varchar(2552) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderbreif`
--

CREATE TABLE `orderbreif` (
  `id` int(11) NOT NULL,
  `ORDID` varchar(255) NOT NULL,
  `reDesign` varchar(255) NOT NULL,
  `logoTitle` varchar(255) NOT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `businessDescription` text DEFAULT NULL,
  `dislikes` varchar(255) DEFAULT NULL,
  `existingWebsites` varchar(255) DEFAULT NULL,
  `images` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderbreif`
--

INSERT INTO `orderbreif` (`id`, `ORDID`, `reDesign`, `logoTitle`, `tagline`, `businessDescription`, `dislikes`, `existingWebsites`, `images`) VALUES
(3, 'CLD-6001DIR', 'Yes', 'Hello World', 'Hamza Khan', NULL, NULL, NULL, '[\"uploads\\/1700168898_Group 1010.png\",\"uploads\\/1700168898_Path 11013.png\",\"uploads\\/1700168898_073e304b0da1a3516e43c41ee0e53ed1.png\",\"uploads\\/1700168898_824ae475301d4ff711abeb7f29d9687c1523368085.png\",\"uploads\\/1700168898_asset-1.png\",\"uploads\\/1700168898_good-firms-awards.png\",\"uploads\\/1700168898_MAD0.png\"]'),
(5, 'CLD-2483DIR', 'Yes', 'Hello World', 'Hamza Khan', 'gh', 'gh', 'gh', '[\"uploads\\/1700170705_824ae475301d4ff711abeb7f29d9687c1523368085.png\"]'),
(6, 'CLD-3229DIR', 'Yes', 'Hello World', 'Hamza Khan', 'sd', 'sd', 'sd', '[\"uploads\\/1700173611_1384046.png\"]'),
(7, 'CLD-8368DIR', 'Yes', 'Hello World', 'Hamza Khan', 'sd', 'sd', 'sd', '[\"uploads\\/1700174106_banner.png\"]'),
(8, 'CLD-8466DIR', 'Yes', 'HELLO KARKEN', 'Web Developer', 'NONE', 'NONE', 'https://www.creativelogodesigns.io/custom-logo-design', '[\"uploads\\/1700174706_1384046.png\"]');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `orderNumber` varchar(255) NOT NULL,
  `orderDate` varchar(255) NOT NULL,
  `orderTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `orderFrom` varchar(255) NOT NULL,
  `packageName` varchar(255) NOT NULL,
  `packagePrice` varchar(255) NOT NULL,
  `stripeCustomerID` varchar(255) NOT NULL,
  `stripePaymentID` varchar(255) NOT NULL,
  `stripeInvoiceLink` text NOT NULL,
  `orderStatus` varchar(255) NOT NULL,
  `orderPaymentStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderNumber`, `orderDate`, `orderTime`, `orderFrom`, `packageName`, `packagePrice`, `stripeCustomerID`, `stripePaymentID`, `stripeInvoiceLink`, `orderStatus`, `orderPaymentStatus`) VALUES
(13, 'CLD-6001DIR', '16-11-2023', '2023-11-16 21:08:44', 'Create Logo Design', 'Elite Logo', '175', 'cus_P1FIOMn8jwIzUz', 'cs_test_a1RlVM5CoGLIF45nAJRWfhMGocw0eb0eafCOrME0eGQFauLjNsS1mpT578', 'https://invoice.stripe.com/i/acct_1Hk6kuDiglXWKM9f/test_YWNjdF8xSGs2a3VEaWdsWFdLTTlmLF9QMUZJSU5yeEhVMTN1MUQzNEVjQnR4bWZvT3JLMXVFLDkwNzA5NzI00200fR2yJ15I?s=ap', 'Order Proccessing', 'Paid'),
(14, 'CLD-2483DIR', '16-11-2023', '2023-11-16 22:19:08', 'Create Logo Design', 'Basic Logo', '45', 'cus_P1FmoMt7hLNMhy', 'cs_test_a1YBaQmmAyaj9h7U2RkwOT4ISCD1ECjnZfYsnUytlldGpSzuSYtSmIQC1O', 'https://invoice.stripe.com/i/acct_1Hk6kuDiglXWKM9f/test_YWNjdF8xSGs2a3VEaWdsWFdLTTlmLF9QMUZtemJWOW5HZTd4THFyZUI2R3FrYzVydHdJTFNPLDkwNzEzOTQ40200D2nnn3rG?s=ap', 'Order Proccessing', 'Paid'),
(15, 'CLD-3229DIR', '16-11-2023', '2023-11-16 22:27:16', 'Create Logo Design', 'Basic Logo', '45', 'cus_P1GYYp4dQ2BO8B', 'cs_test_a1iniXmgkO6z6lQqwofXYiTYfr1B099q5MP6wtL3Y8iwF0sq9aal382pIY', 'https://invoice.stripe.com/i/acct_1Hk6kuDiglXWKM9f/test_YWNjdF8xSGs2a3VEaWdsWFdLTTlmLF9QMUdZajdLNDdKT3NUaVJmbnBTR2VEeE5ENTd6TzBPLDkwNzE0NDM202005raPZhv0?s=ap', 'Order Proccessing', 'Paid'),
(16, 'CLD-8368DIR', '16-11-2023', '2023-11-16 22:43:39', 'Create Logo Design', 'Basic Logo', '45', 'cus_P1Gh2bPfK1SEix', 'cs_test_a1ZrtCMtYcCBljqBbTMTCGPD7IOZlgT20X5nRtadLTIKx7fuyyUrb92KR8', 'https://invoice.stripe.com/i/acct_1Hk6kuDiglXWKM9f/test_YWNjdF8xSGs2a3VEaWdsWFdLTTlmLF9QMUdoeGZ5MFFPb3lsUDE1QUF4WDc4UlNBeFluTzJFLDkwNzE1NDE40200Ugu3hGkI?s=ap', 'Order Proccessing', 'Paid'),
(17, 'CLD-8466DIR', '16-11-2023', '2023-11-16 22:49:36', 'Create Logo Design', 'Basic Logo', '45', 'cus_P1GrrId9N6NXgp', 'cs_test_a1MlOqVcJxoZA8pbzbwVabSmvgl5onG0EagBgJPqXSCwfYwXAgIS3cexWB', 'https://invoice.stripe.com/i/acct_1Hk6kuDiglXWKM9f/test_YWNjdF8xSGs2a3VEaWdsWFdLTTlmLF9QMUdycTkyQnNjRGp0b2s1NFp0S0JqMnhIeXdVczlYLDkwNzE1Nzc10200HdsGX78G?s=ap', 'Order Proccessing', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `plancategory`
--

CREATE TABLE `plancategory` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plancategory`
--

INSERT INTO `plancategory` (`id`, `title`) VALUES
(1, 'Logo'),
(2, 'Website'),
(3, 'Illustration Design'),
(4, 'Branding'),
(5, 'Video'),
(6, 'Ecommerce'),
(7, 'SEO'),
(8, 'Digital Marketing'),
(9, 'Social Media Marketing'),
(10, 'Copy Writing'),
(11, 'combo-packages');

-- --------------------------------------------------------

--
-- Table structure for table `planitems`
--

CREATE TABLE `planitems` (
  `id` int(11) NOT NULL,
  `planId` int(11) NOT NULL,
  `itemsDescriptions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `planitems`
--

INSERT INTO `planitems` (`id`, `planId`, `itemsDescriptions`) VALUES
(1, 1, '1 Custom Logo Design'),
(2, 1, '3 Round Of Revisions\r\n'),
(3, 1, 'Web Ready File Format\r\n'),
(4, 1, '48 Hrs Turnaround Time'),
(5, 1, '100% Ownership Right\n'),
(6, 1, '100% Satisfaction'),
(7, 2, '3 Custom Logo Design'),
(8, 2, '3 Dedicated Designers\r\n'),
(9, 2, '3 Round Of Revisions'),
(10, 2, '24 - 48 Hrs Turnaround Time'),
(11, 2, '100% Ownership Right'),
(12, 2, '100% Satisfaction'),
(20, 3, 'Custom Logo Designs Primbed'),
(21, 3, '8 Creative Designers'),
(22, 3, 'Unlimited Revisions'),
(23, 3, '1 Stationary Concept'),
(24, 3, '24-48 Hrs Turnaround Time'),
(25, 3, '100% Ownership Right'),
(26, 3, '100% Satisfaction'),
(28, 7, 'Custom Logo Designs (Unlimited)'),
(29, 7, '10 Creative Designers'),
(30, 7, 'Untiented Revisions'),
(31, 7, '2 Stationary Concept'),
(32, 7, '1 Facebook Cover Photo'),
(33, 7, '1 Web Homepage Design'),
(34, 7, '2 Inner Pages Web Design'),
(35, 7, '24-48 Hrs Turnaround Time'),
(36, 7, '100% Ownership Right'),
(37, 7, '100% Satisfaction'),
(50, 9, 'UNLIMITED Logo Design Concepts'),
(51, 9, 'By 8 Award Winning Designers'),
(52, 9, 'UNLIMITED Revisions'),
(53, 9, '2 Stationary Design Sets (Business Card, Letterhead, Envelope)'),
(54, 9, 'Icon Design'),
(55, 9, 'Double Sided Flyer Design / Bi-Fold Brochure'),
(56, 9, 'FREE MS Word Letterhead'),
(57, 9, 'Free Email Signature'),
(58, 9, 'All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)'),
(59, 9, '100% Satisfaction Guarantee'),
(60, 9, '100% Unique Design Guarantee'),
(61, 9, '100% Money Back Guarantee *'),
(62, 10, 'UNLIMITED Logo Design Concepts'),
(63, 10, 'By 8 Award Winning Designers'),
(64, 10, 'Icon Design'),
(65, 10, 'UNLIMITED Revisions'),
(66, 10, '2 Stationary Design Sets (Business Card, Letterhead, Envelope)'),
(67, 10, 'FREE MS Word Letterhead'),
(68, 10, 'Free Email Signature'),
(69, 10, '3 Page Custom Website'),
(70, 10, '2 Stock Photos'),
(71, 10, '2 Banner Designs'),
(72, 10, '2 Banner Designs'),
(73, 10, 'jQuery Slider'),
(74, 10, 'All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)'),
(75, 10, '100% Satisfaction Guarantee'),
(76, 10, '100% Unique Design Guarantee'),
(77, 10, '100% Money Back Guarantee *'),
(78, 11, 'UNLIMITED Logo Design Concepts'),
(79, 11, 'By 8 Award Winning Designers'),
(80, 11, 'UNLIMITED Revisions'),
(81, 11, '2 Stationary Design Sets (Business Card, Letterhead, Envelope)'),
(82, 11, 'Icon Design'),
(83, 11, 'Double Sided Flyer Design / Bi-Fold Brochure'),
(84, 11, 'FREE MS Word Letterhead'),
(85, 11, 'Free Email Signature'),
(86, 11, 'All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)'),
(87, 11, '100% Satisfaction Guarantee'),
(88, 11, '100% Unique Design Guarantee'),
(89, 11, '100% Money Back Guarantee *'),
(90, 12, 'UNLIMITED Logo Design Concepts'),
(91, 12, 'By 8 Award Winning Designers'),
(92, 12, 'UNLIMITED Revisions'),
(93, 12, '2 Stationary Design Sets (Business Card, Letterhead, Envelope)'),
(94, 12, 'Icon Design'),
(95, 12, 'Double Sided Flyer Design / Bi-Fold Brochure'),
(96, 12, 'FREE MS Word Letterhead'),
(97, 12, 'Free Email Signature'),
(98, 12, 'All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)'),
(99, 12, '100% Satisfaction Guarantee'),
(100, 12, '100% Unique Design Guarantee'),
(101, 12, '100% Money Back Guarantee *'),
(102, 13, 'UNLIMITED Revisions'),
(103, 13, '48 to 72 hours TAT'),
(104, 13, 'All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)'),
(105, 13, '100% Ownership Rights'),
(106, 13, '100% Satisfaction Guarantee'),
(107, 13, '100% Unique Design Guarantee'),
(108, 13, '100% Money Back Guarantee *'),
(129, 14, '4 Custom Design Concepts'),
(130, 14, 'By 3 Designers'),
(131, 14, '48 to 72 hours TAT'),
(132, 14, 'UNLIMITED Revisions'),
(133, 14, 'All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)'),
(134, 14, '100% Ownership Rights'),
(135, 14, '100% Satisfaction Guarantee'),
(136, 14, '100% Unique Design Guarantee'),
(137, 14, '100% Money Back Guarantee *'),
(138, 15, 'UNLIMITED Logo Design Concepts'),
(139, 15, 'By 8 Award Winning Designers'),
(140, 15, 'Icon Design'),
(141, 15, 'UNLIMITED Revisions'),
(142, 15, '2 Stationary Design Sets (Business Card, Letterhead, Envelope)'),
(143, 15, 'FREE MS Word Letterhead'),
(144, 15, 'Free Email Signature'),
(145, 15, '2 Stock Photos'),
(146, 15, '2 Banner Designs'),
(147, 15, 'jQuery Slider'),
(148, 15, 'All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)'),
(149, 15, '100% Satisfaction Guarantee'),
(150, 15, '100% Unique Design Guarantee'),
(151, 15, '100% Money Back Guarantee *'),
(152, 16, '3 Unique 3D Logo Concepts'),
(153, 16, 'Light Effects and VFX'),
(154, 16, 'Fully Rendered'),
(155, 16, 'Multiple 3D Angles'),
(156, 16, 'By 3 Award Winning Designers'),
(157, 16, '72 hours Turnaround Time'),
(158, 16, 'UNLIMITED Revisions'),
(159, 16, '100% Ownership Rights'),
(160, 16, '100% Satisfaction Guarantee'),
(161, 16, '100% Unique Design Guarantee'),
(162, 16, '100% Satisfaction Guarantee'),
(163, 16, '100% Money Back Guarantee *'),
(174, 17, 'UNLIMITED Logo Design Concepts'),
(175, 17, 'By 4 Designers'),
(176, 17, 'UNLIMITED Revisions'),
(177, 17, 'Stationary Design (Business Card, Letterhead, Envelope)'),
(178, 17, 'FREE MS Word Letterhead'),
(179, 17, '48 to 72 hours TAT'),
(180, 17, 'All Final Files Format (AI, PSD, EPS, PNG, GIF, JPG, PDF)*'),
(181, 17, '100% Satisfaction Guarantee'),
(182, 17, '100% Unique Design Guarantee'),
(183, 17, '100% Money Back Guarantee *'),
(184, 18, '3 Page Website'),
(185, 18, 'Theme Based Design'),
(186, 18, 'Stock Photography'),
(187, 18, 'Responsive Design'),
(188, 18, 'Turnaround 3 Days'),
(189, 18, 'Social Media Integration'),
(190, 18, 'Contact Forms Included'),
(191, 18, 'Content Not Included!'),
(192, 19, '5 Page Website'),
(193, 19, 'Theme Based Design'),
(194, 19, 'Stock Photography'),
(195, 19, 'Turnaround 4 Days'),
(196, 19, 'Responsive Design'),
(197, 19, 'Content Management System'),
(198, 19, 'Social Media Integration'),
(199, 19, 'Blog Setup'),
(200, 19, 'Contact Forms Included'),
(201, 20, '10 Page Website'),
(202, 20, 'Custom Design'),
(203, 20, 'Stock Photography'),
(204, 20, 'Original Content'),
(205, 20, 'Turnaround 7 Days'),
(206, 20, 'Responsive Design'),
(207, 20, 'Content Management System'),
(208, 20, 'Sliders'),
(209, 20, 'Social Media Integration'),
(210, 20, 'SEO Features'),
(211, 20, 'Blog Setup'),
(212, 20, 'Contact Forms Included'),
(213, 21, 'Dedicated Project Manager'),
(214, 21, 'Upto 12-14 Unique Pages Website'),
(215, 21, 'Conceptual And Dynamic Website'),
(216, 21, 'Online Reservation/Appointment Tool (Optional)'),
(217, 21, 'Custom Forms'),
(218, 21, 'Lead Capturing Forms (Optional)'),
(219, 21, 'Striking Hover Effects'),
(220, 21, 'Newsletter Subscription (Optional)'),
(221, 21, 'Newsfeed Integration'),
(222, 21, 'Social Media Integration'),
(223, 21, 'Search Engine Submission'),
(224, 21, 'Mobile Responsive'),
(225, 21, '8 Stock Photos'),
(226, 21, '5 Unique Banner Design'),
(227, 21, '1 JQuery Slider Banner'),
(228, 21, '48 To 72 Hours TAT'),
(229, 21, 'Complete Deployment'),
(230, 21, '100% Unique Design Assurance'),
(231, 21, 'Complete Ownership Rights'),
(232, 22, 'Dedicated Project Manager'),
(233, 22, '15 Seconds 2D Explainer Video'),
(234, 22, 'Voice - Over & Sound Effects'),
(235, 22, 'Professional Script Writing'),
(236, 22, 'Storyboard'),
(237, 22, 'SEO Meta Tags'),
(238, 22, 'Unlimited Pages Website'),
(239, 22, 'Custom Made, Interactive, Dynamic & High End Design'),
(240, 22, 'Custom WP (Or) Custom PHP Development'),
(241, 22, '1 JQuery Slider Banner'),
(242, 22, 'Up To 10 Custom Made Banner Designs'),
(243, 22, '10 Stock Images'),
(244, 22, 'Unlimited Revisions'),
(245, 22, 'Unlimited Revisions'),
(246, 22, 'Special Hover Effects'),
(247, 22, 'Content Management System (CMS)'),
(248, 22, 'Online Appointment/Scheduling/Online Ordering Integration (Optional)'),
(249, 22, 'Online Payment Integration (Optional)Complete Deployment'),
(250, 22, 'Multi Lingual (Optional)'),
(251, 22, 'Custom Dynamic Forms (Optional)'),
(252, 22, 'Signup Area (For Newsletters, Offers Etc.)'),
(253, 22, 'Search Bar'),
(254, 22, 'Live Feeds Of Social Networks Integration (Optional)'),
(255, 22, 'Mobile Responsive'),
(256, 22, 'FREE 5 Years Domain Name'),
(257, 22, 'Free Google Friendly Sitemap'),
(258, 22, 'Search Engine Submission'),
(259, 22, 'Industry Specified Team Of Expert Designers And Developers'),
(260, 22, 'Complete Deployment'),
(261, 22, 'Dedicated Accounts Manager'),
(262, 22, '100% Unique Design Assurance'),
(263, 22, 'Complete Ownership Rights'),
(264, 23, 'Dedicated Project Manager'),
(265, 23, 'Dedicated Project Manager'),
(266, 23, 'Complete Custom Design & Development'),
(267, 23, 'Complete Branding Solution'),
(268, 23, 'Banner Designs'),
(269, 23, 'Unique Logo Designs'),
(270, 23, 'Unlimited Revisions'),
(271, 23, 'Custom Portal'),
(272, 23, 'Unique, User Friendly, Interactive, Dynamic Layout'),
(273, 23, 'High End UI Design'),
(274, 23, 'JQuery Slider'),
(275, 23, 'Special Hoover Effects'),
(276, 23, '20 Stock Images'),
(277, 23, 'Client/User Dashboard Area'),
(278, 23, 'Custom PHP Development'),
(279, 23, 'Content Management System (Custom)'),
(280, 23, 'Online Appointment'),
(281, 23, 'Scheduling Integration'),
(282, 23, 'Online Ordering Tool'),
(283, 23, 'Online Payment Integration'),
(284, 23, 'Multi Lingual'),
(285, 23, 'Sales Reports'),
(286, 23, 'Trend Analytics'),
(287, 23, 'Forecasting'),
(288, 23, 'Territory Management'),
(289, 23, 'Account Management'),
(290, 23, 'Event Integration'),
(291, 23, 'Advanced Data Security'),
(292, 23, 'Custom Dynamic Forms'),
(293, 23, 'User Signup Area'),
(294, 23, 'User Login Area'),
(295, 23, 'User Dashboard Area'),
(296, 23, 'Complete Database Creation'),
(297, 23, 'Signup Automated Email Authentication'),
(298, 23, 'Web Traffic Analytics Integration'),
(299, 23, '3rd Party API Integrations'),
(300, 23, 'Signup Area (For Newsletters, Offers Etc.)'),
(301, 23, 'Search Bar For Easy Search'),
(302, 23, 'Live Feeds Of Social Networks'),
(303, 23, 'Search Engine Submission'),
(304, 23, 'Module-Wise Architecture'),
(305, 23, 'Extensive Admin Panel'),
(306, 23, '1 Year Domain'),
(307, 23, '1 Year Dedicated Hosting Server'),
(308, 23, 'Dedicated Designers And Developers'),
(309, 23, 'Complete Deployment'),
(310, 23, '100% Unique Design Assurance'),
(311, 23, 'Complete Ownership Rights'),
(312, 24, '1 Stationery Design Set'),
(313, 24, 'FREE Fax Template'),
(314, 24, 'Print Ready Formats'),
(315, 24, 'UNLIMITED Revisions'),
(316, 24, 'Satisfaction Assurance'),
(317, 25, '2 Stationery Design Set'),
(318, 25, 'UNLIMITED Revisions'),
(319, 25, 'Flyer Design'),
(320, 25, 'Brochure Design (Bi-Fold/Tri-Fold)'),
(321, 25, 'Satisfaction Assurance'),
(322, 26, '4 Stationery Design Set'),
(323, 26, 'Packaging Design'),
(324, 26, 'UNLIMITED Revisions'),
(325, 26, 'T-Shirt Design'),
(326, 26, 'Satisfaction Assurance'),
(327, 32, '6 Stationery Design Set'),
(328, 32, 'Menu Card Design'),
(329, 32, 'T-Shirt Design'),
(330, 32, '1 Banner Design'),
(331, 32, '100% Satisfaction Guarantee'),
(332, 32, 'Satisfaction Assurance'),
(333, 33, '15s Duration - HD 1080'),
(334, 33, 'Professional Script'),
(335, 33, 'Storyboard Design'),
(336, 33, 'Animations & VFX'),
(337, 33, 'Music And Foley'),
(338, 33, 'Voice Over Artists'),
(339, 34, '30s Duration - HD 1080'),
(340, 34, 'Professional Script'),
(341, 34, 'Storyboard Design'),
(342, 34, 'Animations & VFX'),
(343, 34, 'Music And Foley'),
(344, 34, 'Voice Over Artists'),
(345, 35, '60 Second Video'),
(346, 35, 'Professional Script'),
(347, 35, 'Storyboard Design'),
(348, 35, 'Animations & VFX'),
(349, 35, 'Music And Foley'),
(350, 35, 'Voice Over Artists'),
(351, 35, 'Unlimited Revisions'),
(390, 36, 'Campaign Setup'),
(391, 36, 'Website Audit'),
(392, 36, '15 Selected Keywords Targeting'),
(393, 36, 'Keyword Research'),
(394, 36, 'Keyword Grouping'),
(395, 36, 'Keyword Mapping'),
(396, 36, 'SEO Road Map'),
(397, 36, 'Blog Creation'),
(398, 36, 'Webpage Copywriting (3 Pages, 350 Words Per Page)'),
(399, 36, 'Title Tag Optimization (10 Titles)'),
(400, 36, 'Meta Description Optimization (10 Meta Descriptions)'),
(401, 36, 'Meta Keyword Optimization (10 Meta Keywords)'),
(402, 36, 'Domain Redirect Optimization (10 Domain Redirects)'),
(403, 36, 'XML Sitemap Optimization'),
(404, 36, 'Robots.Txt Check'),
(405, 36, 'URL Rewrites (10 URL Rewrites)'),
(406, 36, 'Broken Link Report'),
(407, 36, 'Rich Snippet Recommendations'),
(408, 36, 'Breadcrumbs'),
(409, 36, 'Initial Off-Page SEO'),
(410, 36, 'Social Bookmarking'),
(411, 36, 'Slide Share Marketing'),
(412, 36, 'Forums/FAQ\'s'),
(413, 36, 'Link Building'),
(414, 36, 'Directory Submission'),
(415, 36, 'Local Business Listings'),
(416, 36, '10 Submissions'),
(417, 36, '10 Classifieds'),
(418, 36, '10 Community Participation'),
(419, 36, '10 Business Profiles'),
(420, 36, 'Meta Tags Creation'),
(421, 36, 'Web Content Optimization'),
(422, 36, 'Keyword Optimization'),
(423, 36, 'Anchor Text Optimization'),
(424, 36, 'Google Analytics Installation'),
(425, 36, 'Monthly Progress Report'),
(426, 36, 'Dedicated Project Manager'),
(427, 36, 'Support, 5 Days a Week'),
(428, 37, 'Prior Analysis'),
(429, 37, 'Business Analysis'),
(430, 37, 'Consumer Analysis'),
(431, 37, 'Competitor Analysis'),
(432, 37, '35 Selected Keywords Targeting'),
(433, 37, '15 Pages Keyword Targeted'),
(434, 37, 'Meta Tags Creation'),
(435, 37, 'Keyword Optimization'),
(436, 37, 'Image Optimization'),
(437, 37, 'Inclusion Of Anchors'),
(438, 37, 'Tracking & Analysis'),
(439, 37, 'Google Analytics Installation'),
(440, 37, 'Google Webmaster Installation'),
(441, 37, 'Call To Action Plan'),
(442, 37, 'Creation Of Sitemaps'),
(443, 37, 'Reporting'),
(444, 37, 'Monthly Reporting'),
(445, 37, 'Recommendation'),
(446, 37, 'Email Support'),
(447, 37, 'Phone Support'),
(448, 37, 'Social Bookmarking'),
(449, 37, 'Slide Share Marketing'),
(450, 37, 'Forums/FAQs'),
(451, 37, 'Link Building'),
(452, 37, 'Directory Submission'),
(453, 37, 'Local Business Listings'),
(454, 37, '15 Submissions'),
(455, 37, '15 Classifieds'),
(456, 37, '15 Community Participation'),
(457, 37, '15 Business Profiles'),
(458, 37, 'Meta Tags Creation'),
(459, 37, 'Web Content Optimization'),
(460, 37, 'Keyword Optimization'),
(461, 37, 'Landing Page Optimization'),
(462, 37, 'Anchor Text Optimization'),
(463, 37, 'Image Optimization'),
(464, 37, 'Google Analytics Installation'),
(465, 37, 'Monthly Progress Report'),
(466, 37, 'Dedicated Project Manager'),
(467, 37, 'Support, 5 Days a Week'),
(468, 38, 'PLAN INCLUDES:'),
(469, 38, 'Prior Analysis'),
(470, 38, 'Business Analysis'),
(471, 38, 'Consumer Analysis'),
(472, 38, 'Competitor Analysis'),
(473, 38, '60+ Selected Keywords Targeting'),
(474, 38, '30 Pages Keyword Targeted'),
(475, 38, 'Meta Tags Creation'),
(476, 38, 'Keyword Optimization'),
(477, 38, 'Image Optimization'),
(478, 38, 'Inclusion Of Anchors Tags'),
(479, 38, 'Inclusion Of Anchors Indexing Modifications'),
(480, 38, 'Tracking & Analysis'),
(481, 38, 'Google Analytics Installation'),
(482, 38, 'Google Webmaster Installation'),
(483, 38, 'Call To Action Plan'),
(484, 38, 'Creation Of Sitemaps'),
(485, 38, 'Reporting'),
(486, 38, 'Monthly Reporting'),
(487, 38, 'Recommendation'),
(488, 38, 'Email Support'),
(489, 38, 'Phone Support'),
(490, 38, 'Off Page Optimization'),
(491, 38, 'Social Bookmarking'),
(492, 38, 'Slide Share Marketing'),
(493, 38, 'Forums/FAQs'),
(494, 38, 'Link Building'),
(495, 38, 'Directory Submission'),
(496, 38, 'Local Business Listings'),
(497, 38, 'Local SEO'),
(508, 39, 'Customized Design'),
(509, 39, 'Up-To 50 Products'),
(510, 39, 'Content Management System (CMS)'),
(511, 39, 'Mini Shopping Cart Integration'),
(512, 39, 'Easy Product Search'),
(513, 39, 'Mobile Responsive'),
(514, 39, 'Dedicated Designer & Developer'),
(515, 39, 'Unlimited Revisions'),
(516, 39, '100% Unique Design Assurance'),
(517, 39, 'Complete Ownership Rights'),
(518, 40, 'Customized Design'),
(519, 40, 'Up-To 100 Products'),
(520, 40, 'Content Management System (CMS)'),
(521, 40, 'Mini Shopping Cart Integration'),
(522, 40, 'Payment Module Integration'),
(523, 40, 'Easy Product Search'),
(524, 40, 'Mobile Responsive'),
(525, 40, 'Dedicated Designer & Developer'),
(526, 40, 'Unlimited Revisions'),
(527, 40, '100% Unique Design Assurance'),
(528, 40, 'Complete Ownership Rights'),
(529, 41, 'Customized Design'),
(530, 41, 'Up-To 500 Products'),
(531, 41, 'Content Management System (CMS)'),
(532, 41, 'Full Shopping Cart Integration'),
(533, 41, 'Payment Module Integration'),
(534, 41, 'Easy Product Search'),
(535, 41, 'Product Reviews'),
(536, 41, '5 Promotional Banners'),
(537, 41, 'Mobile Responsive'),
(538, 41, 'Team Of Expert Designers & Developers'),
(539, 41, 'Unlimited Revisions'),
(540, 41, '100% Unique Design Assurance'),
(541, 41, 'Complete Ownership Rights'),
(542, 42, 'Dedicated Project Manager'),
(543, 42, 'Unlimited Pages Website'),
(544, 42, 'Customized Designed Logo'),
(545, 42, 'Unlimited Products'),
(546, 42, 'Mobile Responsive + Mobile Friendly'),
(547, 42, 'Content Management System (CMS)'),
(548, 42, 'Full Shopping Cart Integration'),
(549, 42, 'Payment Module Integration (Visa, MC, Discover & AMEX)'),
(550, 42, 'Easy Product Search'),
(551, 42, 'Product Reviews'),
(552, 42, '5 Promotional Banners'),
(553, 42, 'Mobile Responsive'),
(554, 42, 'Social Media Integration (Facebook Instagram & Twitter)'),
(555, 42, '6 Months Complimentary Website Maintenance'),
(556, 42, 'Newsletter Subscription'),
(557, 42, 'Unlimited Revisions'),
(558, 42, '100% Unique Design Assurance'),
(559, 42, 'Complete Ownership Rights'),
(560, 43, 'Unlimited Page Website'),
(561, 43, 'Unique Pages And UI Design'),
(562, 43, 'Complete Custom Development'),
(563, 43, 'Newsfeed Integration'),
(564, 43, 'Social Media Plugins Integration'),
(565, 43, 'Advanced Ecommerce Marketplace Features'),
(566, 43, 'Inventory Management'),
(567, 43, 'CRM (Customer Relation Management System)'),
(568, 43, 'Advanced Admin Features 2.0'),
(569, 43, 'Advanced User Features'),
(570, 43, 'Dashboard And Analytics'),
(571, 43, 'Seller/Shipping Distribution'),
(572, 43, 'Seller Profile Management'),
(573, 43, 'User Profile Management'),
(574, 43, 'General Configuration Features'),
(575, 43, 'Revenue Models'),
(576, 43, 'Featured Products'),
(577, 43, 'Google Advertisements'),
(578, 43, 'Flash Sales Module'),
(579, 43, 'Loyalty Rewards Module'),
(580, 43, 'Mobile Responsive'),
(581, 43, 'Upto 40 Stock Images'),
(582, 43, '10 Unique Banner Designs'),
(583, 43, 'JQuery Slider'),
(584, 43, 'Search Engine Submission'),
(585, 43, 'Free Google Friendly Sitemap'),
(586, 43, 'Social Media Page Designs (Facebook, Twitter, Instagram)'),
(587, 43, 'Complete W3C Certified HTML'),
(588, 43, 'Complete Deployment'),
(589, 43, '100% Unique Design Assurance'),
(590, 43, 'Complete Ownership Rights'),
(591, 44, 'Unlimited Page Website'),
(592, 44, 'Custom Content Management System (CMS)'),
(593, 44, 'Custom Content Management System (CMS)'),
(594, 44, 'Complete Custom Development'),
(595, 44, 'Process Automation Tools'),
(596, 44, 'Newsfeed Integration'),
(597, 44, 'Social Media Plugins Integration'),
(598, 44, 'Upto 40 Stock Images'),
(599, 44, '10 Unique Banner Designs'),
(600, 44, 'JQuery Slider'),
(601, 44, 'Search Engine Submission'),
(602, 44, 'Free Google Friendly Sitemap'),
(603, 44, 'FREE 5 Years Hosting'),
(604, 44, 'Custom Email Addresses'),
(605, 44, 'Social Media Page Designs (Facebook, Twitter, Instagram)'),
(606, 44, 'Complete W3C Certified HTML'),
(607, 44, 'Complete W3C Certified HTML'),
(608, 44, 'Complete Deployment'),
(609, 44, '100% Satisfaction Guarantee'),
(610, 44, '100% Unique Design Guarantee'),
(611, 44, 'Money Back Guarantee'),
(612, 44, 'Automated Inventory/Shipping/Supplier Module:'),
(613, 44, 'Manage Thousands To Millions Of Inventory With Ease And Check Stock Levels In Real-Time. Receive Low Inventory Notifications And Generate Purchase Orders To Replenish Your Stock.'),
(614, 44, 'Suppliers Integration (API NEEDED)'),
(615, 44, 'Shipper Integration (API NEEDED)'),
(616, 44, 'Order Management'),
(617, 44, 'LOT Numbers And Expire Date Tracking'),
(618, 44, 'Transfer Stock Between Warehouses (If Warehouse - API NEEDED)'),
(619, 44, 'Receive Stock Into A Specific Warehouse (If Warehouse - API NEEDED)'),
(620, 44, 'Fulfill Orders From A Particular Warehouse (If Warehouse - API NEEDED)'),
(621, 44, 'Stock Management'),
(622, 44, 'Actionable Insights'),
(623, 44, 'Real- Time Visibility'),
(624, 44, 'Inventory Opportunities'),
(625, 44, 'Advanced Features: (API Needed For Suppliers/Warehouse)'),
(626, 44, 'Speak To Suppliers During Trivial Conversations.'),
(627, 44, 'Set And Send Actions To Suppliers Regarding Governance And Compliance Materials. Place Purchasing Requests.'),
(628, 44, 'Research And Answer Internal Questions Regarding Procurement Functionalities Or A Supplier/Supplier Set.'),
(629, 44, 'Receiving/Filing/Documentation Of Invoices And Payments/Order Requests'),
(630, 44, 'Machine Learning (ML) For Supply Chain Planning (SCP)'),
(631, 44, 'Machine Learning For Warehouse Management'),
(632, 44, 'Natural Language Processing (NLP) For Data Cleansing And Building Data Robustness'),
(633, 44, 'Automated Invoices & Estimates'),
(634, 44, 'Create Beautiful, Professional Invoices & Estimates In Just A Few Seconds And Then Instantly Email Them As PDF\'s Directly To Your Customers Or Prospects.'),
(635, 44, 'Automated Split Invoicing'),
(636, 44, 'Automated Combine Invoices'),
(637, 44, 'Invoice Templates'),
(638, 44, 'Automated Barcode Scanning'),
(639, 44, 'Scan Inventory Into Your Orders, Generate Barcodes For Your Documents, And Search For Inventory Or Documents By Scanning Barcodes.'),
(640, 44, 'Locations And Zones'),
(641, 44, 'Have Multiple Warehouses, Offices, Or Retail Stores? No Problem. Easily Track Where All Your Inventory Is By Organizing Everything Into Locations And Zones. Organize Inventory Items Using Custom Attributes Such As Size, Color, And Location. View How Many '),
(642, 44, 'Customer Accounts'),
(643, 44, 'Performance And Analytics'),
(644, 44, 'Customization Of Personal Details'),
(645, 44, 'Process Management'),
(646, 44, 'Sales Automation'),
(647, 44, 'Team Collaboration'),
(648, 44, 'Marketing Automation'),
(649, 44, 'Security'),
(650, 44, 'Integrations'),
(651, 44, 'Mobile Notifications'),
(652, 44, 'Sales Reports'),
(653, 44, 'Trend Analytics'),
(654, 44, 'Forecasting'),
(655, 44, 'Territory Management'),
(656, 44, 'Account Management'),
(657, 44, 'Event Integration'),
(658, 44, 'Advanced Data Security'),
(659, 44, 'Purchase Orders'),
(660, 44, 'With Integrated Purchase Orders, You Can Easily Replenish Your Inventory Levels By Ordering More Stock And Even Track When Those New Items Will Arrive.'),
(661, 44, 'Partial Orders Fulfill'),
(662, 44, 'Backordering'),
(663, 44, 'Financial Reports'),
(664, 44, 'Generate Extremely Detailed Reports For Your Inventory, Sales And Services. Filter Your Reports By Date-Range And Category To See What\'s Making You The Most Money.'),
(665, 45, 'Unlimited Page Website'),
(666, 45, 'Unique Pages And UI Design'),
(667, 45, 'Unlimited Page Website'),
(668, 45, 'CRM (Customer Relation Management System)'),
(669, 45, 'Performance And Analytics'),
(670, 45, 'Customization Of Personal Details'),
(671, 45, 'Process Management'),
(672, 45, 'Sales Automation'),
(673, 45, 'Team Collaboration'),
(674, 45, 'Marketing Automation'),
(675, 45, 'Security'),
(676, 45, 'Integrations'),
(677, 45, 'Mobile Notifications'),
(678, 45, 'Sales Reports'),
(679, 45, 'Trend Analytics'),
(680, 45, 'Forecasting'),
(681, 45, 'Territory Management'),
(682, 45, 'Account Management'),
(683, 45, 'Event Integration'),
(684, 45, 'Advanced Data Security'),
(685, 45, 'Opportunity Management'),
(686, 45, 'Sales Forecasting'),
(687, 45, 'Call/Video Logging'),
(688, 45, 'Quotes'),
(689, 45, 'Contracts'),
(690, 45, 'Document Library'),
(691, 45, 'Case Management'),
(692, 45, 'Analytics And Dashboards'),
(693, 45, 'Lead Management'),
(694, 45, 'Resource Management'),
(695, 45, 'Analytics'),
(696, 45, 'Web Intelligence'),
(697, 45, 'Automated Emails, Invoices & Estimates'),
(698, 45, 'Automated Split Invoicing'),
(699, 45, 'Automated Combine Invoices'),
(700, 45, 'Invoice Templates'),
(701, 45, 'Financial Reports'),
(702, 45, 'Generate Extremely Detailed Reports For Your Sales And Services. Filter Your Reports By Date-Range And Category To See What\'s Making You The Most Money.'),
(703, 45, 'Generate Automated Sales Reports'),
(704, 45, 'Core Modules'),
(705, 45, 'Human Resources'),
(706, 45, 'Integration'),
(707, 45, 'Business Intelligence'),
(708, 45, 'Sales/Marketing'),
(709, 45, 'Finance'),
(710, 45, 'Core Features'),
(711, 45, 'Reporting'),
(712, 45, 'Accounting'),
(713, 45, 'Tracking And Visibility'),
(714, 45, 'Centralized Modules'),
(715, 45, 'ERP Database'),
(716, 45, 'Human Resources Management'),
(717, 45, 'Business Process Management'),
(718, 45, 'Enterprise Analytics'),
(719, 45, 'Business Intelligence'),
(720, 45, 'ERP Database'),
(721, 45, 'Integrations'),
(722, 45, 'If (Manufacturing) (Optional)'),
(723, 45, 'Accounting'),
(724, 45, 'Distribution'),
(725, 45, 'Business Intelligence'),
(726, 45, 'Insights'),
(727, 45, 'Standardization'),
(728, 45, 'Procurement'),
(729, 45, 'Reporting And Analytics'),
(730, 45, 'Forecasting'),
(731, 45, 'Projection'),
(732, 45, 'Enterprise-Wide Integration'),
(733, 45, 'Real-Time Operations'),
(734, 45, 'Problem Definition'),
(735, 45, 'Description Of The Programs Objectives And Scope'),
(736, 45, 'Assumptions'),
(737, 45, 'Implementation Costs'),
(738, 45, 'Implementation Schedule'),
(739, 45, 'Development And Operational Risks'),
(740, 45, 'Projected Benefits'),
(741, 45, 'Team Members'),
(742, 45, 'Contracts'),
(743, 45, 'Infrastructure Upgrades'),
(744, 45, 'Create Work Plans And Timelines'),
(745, 45, 'Analyze Gaps'),
(746, 45, 'Configure Parameters'),
(747, 45, 'Migrate Data'),
(748, 45, 'Test System'),
(749, 45, 'Document System'),
(750, 45, 'Advanced Admin Features 2.0'),
(751, 45, 'User Signup/Login Functionalities'),
(752, 45, 'Advanced User Features'),
(753, 45, 'User Profile Management'),
(754, 45, 'General Configuration Features'),
(755, 45, 'Complete W3C Certified HTML'),
(756, 46, 'Cover Photo Design'),
(757, 46, 'Profile Picture Design'),
(758, 46, 'Welcome Page Design'),
(759, 46, 'Unlimited Revisions'),
(760, 46, '100% Satisfaction Guarantee'),
(761, 46, '100% Money Back Guarantee *'),
(762, 47, 'Cover Photo Design'),
(763, 47, 'Profile Picture Design'),
(764, 47, 'Welcome Page Design'),
(765, 47, 'Twitter Page Design'),
(766, 47, 'Unlimited Revisions'),
(767, 47, '100% Money Back Guarantee *'),
(768, 48, 'Cover Photo Design'),
(769, 48, 'Profile Picture Design'),
(770, 48, 'Welcome Page Design'),
(771, 48, 'Twitter Page Design'),
(772, 48, 'YouTube Page Design'),
(773, 48, 'Unlimited Revisions'),
(774, 49, '2 Cover Photo Designs'),
(775, 49, 'Profile Picture Design'),
(776, 49, 'Welcome Page Design'),
(777, 49, 'Twitter Page Design'),
(778, 49, 'YouTube Page Design'),
(779, 49, 'Google+ Page Design'),
(780, 50, '2 Social Networks Included (Facebook,Instagram, Twitter)'),
(781, 50, '2 Posts Per Week'),
(782, 50, 'Account Creation/Optimization'),
(783, 50, 'Content Creation'),
(784, 50, 'Create Cover & Profile Picture'),
(785, 50, 'Account Monitoring & Engagment'),
(786, 50, 'Monthly Progress Report'),
(787, 51, '3 Social Networks Included (Facebook, Intagram & Twitter)'),
(788, 51, '4 Postings Per Week'),
(789, 51, 'Copywriting & Visual Designs'),
(790, 51, 'Account Creation/Optimization'),
(791, 51, 'Business Page Optimization'),
(792, 51, 'Monthly Progress Report'),
(793, 51, 'Reputation Management'),
(794, 51, 'Social Account Setup'),
(795, 51, 'Content Creation'),
(796, 51, 'Social Media Hearing'),
(797, 51, 'Query and Comments Reply'),
(798, 52, '5 Social Networks Included (Facebook, Instagram, Twitter, Linkedin & YouTube)'),
(799, 52, '5 Postings Per Week'),
(800, 52, 'Copywriting & Visual Designs'),
(801, 52, 'Account Creation/Optimization'),
(802, 52, 'Business Page Optimization'),
(803, 52, 'Comprehensive Ad Campaign Management'),
(804, 52, 'Spam Monitoring'),
(805, 52, 'Detailed Analytic Reporting'),
(806, 52, 'Social Media Hearing'),
(807, 52, 'Brand Monitoring'),
(808, 54, '1 Page Professional Copywriting Service'),
(809, 54, 'Creative & Well-Written by 1 Professional Copywriter'),
(810, 54, 'Industry Specified Expert Copywriter'),
(811, 54, '300 Words Per Page'),
(812, 54, '3 to 4 Business Days Rotation'),
(813, 54, 'Proofing by our in-house experts'),
(814, 54, '100% Original Content'),
(815, 54, '100% Approval Assurance'),
(816, 54, '30 Days Refund Warranty'),
(831, 55, '5 Pages Professional Copywriting Service'),
(832, 55, 'Creative & Well-Written by 2 Professional Copywriters'),
(833, 55, 'Industry Specified Expert Copywriters'),
(834, 55, '300 Words Per Page'),
(835, 55, '10 Revisions'),
(836, 55, '5 to 7 Business Days Rotation'),
(837, 55, 'According To Your Exact Requirements'),
(838, 55, 'Proofing by our in-house experts'),
(839, 55, 'Free Meta Tags Creation'),
(840, 55, 'Keyword Mapping'),
(841, 55, '100% Ownership Rights'),
(842, 55, '100% Original Content'),
(843, 55, '100% Approval Assurance'),
(844, 55, '30 Days Refund Warranty'),
(845, 56, '10 Pages Professional Copywriting Service'),
(846, 56, 'Creative & Well-Written by 3 Professional Copywriters'),
(847, 56, 'Industry Specified Expert Copywriters'),
(848, 56, '300 Words Per Page'),
(849, 56, 'Unlimited Revisions'),
(850, 56, '7 to 10 Business Days Rotation'),
(851, 56, 'According To Your Exact Requirements'),
(852, 56, 'Proofing by our in-house experts'),
(853, 56, 'Free Meta Tags Creation'),
(854, 56, 'Keyword Mapping'),
(855, 56, '100% Ownership Rights'),
(856, 56, '100% Original Content'),
(857, 56, '100% Approval Assurance'),
(858, 56, '30 Days Refund Warranty'),
(859, 57, 'Up To 20 Pages Professional Copywriting Service'),
(860, 57, 'Creative & Well-Written by 3 Professional Copywriters'),
(861, 57, 'Industry Specified Expert Copywriters'),
(862, 57, '300 Words Per Page'),
(863, 57, 'Unlimited Revisions'),
(864, 57, '7 to 10 Business Days Rotation'),
(865, 57, 'According To Your Exact Requirements'),
(866, 57, 'Proofing by our in-house experts'),
(867, 57, 'Free Meta Tags Creation'),
(868, 57, 'Keyword Mapping'),
(869, 57, '100% Ownership Rights'),
(870, 57, '100% Original Content'),
(871, 57, '100% Approval Assurance'),
(872, 57, '30 Days Refund Warranty'),
(873, 58, '– Logo Design'),
(874, 58, '5 Custom Logo Design Concepts'),
(875, 58, 'By 2 Designers'),
(876, 58, 'Icon Design'),
(877, 58, 'All Final File Formats'),
(878, 58, '– Business Stationary'),
(879, 58, 'Business Card, Letterhead, Envelope, Fax Template'),
(880, 58, 'MS Word Letterhead'),
(881, 58, '– Website Design'),
(882, 58, '5 Page Website'),
(883, 58, 'Mobile Responsive'),
(884, 58, 'Team of Expert Designers & Developers'),
(885, 58, '8 Stock images'),
(886, 58, '5 Banner Designs'),
(887, 58, 'jQuery Sliders'),
(888, 58, 'Free Google Friendly Sitemap'),
(889, 58, 'Facebook Page Design'),
(890, 58, 'Complete W3C Certified HTML'),
(891, 58, 'Complete Deployment'),
(892, 58, '– Value Added Services'),
(893, 58, 'Logo Design Final Files (.PNG, .JPG, .PDF)'),
(894, 58, 'Website Design Complete Source Files'),
(895, 58, 'Dedicated Project Manager'),
(896, 58, '100% Money Back Guarantee'),
(897, 58, 'Complete Deployment'),
(898, 58, '*NO MONTHLY OR ANY HIDDEN FEE*'),
(919, 59, '– Logo Design'),
(920, 59, 'Unlimited Logo Design Concepts'),
(921, 59, 'Unlimited Revisions'),
(922, 59, 'Icon Design'),
(923, 59, 'All Final File Formats'),
(924, 59, '– Stationary Design'),
(925, 59, 'Business Card, Letterhead, Envelope'),
(926, 59, 'MS Word Letterhead'),
(927, 59, '– Website Design'),
(928, 59, 'UNLIMITED Pages Website'),
(929, 59, 'Content Management System (CMS)'),
(930, 59, 'Mobile Responsive'),
(931, 59, '5 Stock Photos + 3 Banner Designs'),
(932, 59, 'Any 3 Social Media Platforms'),
(933, 59, 'Complete W3C Certified HTML'),
(934, 59, 'Complete Deployment'),
(935, 59, '– Value Added Services'),
(936, 59, 'Dedicated Account Manager'),
(937, 59, '100% Money Back Guarantee'),
(938, 59, 'Complete Deployment'),
(939, 60, '– Logo Design'),
(940, 60, 'Unlimited Logo Concepts'),
(941, 60, '8 Dedicated Designers'),
(942, 60, 'Icon Design'),
(943, 60, 'Unlimited Revisions'),
(944, 60, 'All file formats'),
(945, 60, '– Print Materials'),
(946, 60, '2 Free Custom Stationary Designs'),
(947, 60, 'MS Word Letterhead'),
(948, 60, 'Free Trifold Brochure Design'),
(949, 60, '– Website Design'),
(950, 60, 'Unlimited Pages Design'),
(951, 60, 'Conceptual and Dynamic Liquid Website'),
(952, 60, 'Team of Expert Designers &amp; Developers'),
(953, 60, 'Word Press OR Custom Php'),
(954, 60, 'Content Management System'),
(955, 60, 'Mobile Responsive'),
(956, 60, 'Online Reservation/Appointment Tool (Optional)'),
(957, 60, 'Custom Forms'),
(958, 60, 'Lead Capturing Forms (Optional)'),
(959, 60, 'Social Media Integration'),
(960, 60, 'Search Engine Submission'),
(961, 60, '15 Stock images'),
(962, 60, '8 Unique Banner Designs'),
(963, 60, 'jQuery Sliders'),
(964, 60, 'Free Google Friendly Sitemap'),
(965, 60, 'Complete W3C Certified HTML'),
(966, 60, '– – Social Media Page Design'),
(967, 60, 'Facebook Page Design'),
(968, 60, 'Twitter Page Design'),
(969, 60, 'YouTube Page Design'),
(970, 60, 'Google+ Page Design'),
(971, 60, '– Value Added Services'),
(972, 60, 'Dedicated Account Manager'),
(973, 60, '100% Satisfaction Guarantee'),
(974, 60, '100% Money Back Guarantee'),
(975, 60, '*NO MONTHLY OR ANY HIDDEN FEE*'),
(976, 61, '– Logo Design'),
(977, 61, '9 Logo Design Idea(s)'),
(978, 61, 'By 4 Expert Level Designer(s)'),
(979, 61, 'Free Icon Design'),
(980, 61, 'Unlimited Revisions'),
(981, 61, '2 to 3 Business Days TAT'),
(982, 61, '– Stationary Design'),
(983, 61, 'Letterhead Design'),
(984, 61, 'Business Card Design'),
(985, 61, 'Envelope Design'),
(986, 61, 'Email Signature Design'),
(987, 61, 'Electronic Letterhead'),
(988, 61, 'Invoice Design'),
(989, 61, '– Website Design'),
(990, 61, 'Unique 5 Pages Website Design'),
(991, 61, 'Custom, Interactive, Dynamic & High End Web Design'),
(992, 61, 'Custom WordPress Development'),
(993, 61, '5 Stock Images'),
(994, 61, '5 Banner Designs'),
(995, 61, 'Sliding Banners'),
(996, 61, 'Unlimited Revisions'),
(997, 61, 'Special Hoover Effects'),
(998, 61, 'Content Management System (WordPress)'),
(999, 61, 'Mobile Responsive'),
(1000, 61, 'Online Appointment/Booking/Scheduling/Online Ordering Integration (If Required)'),
(1001, 61, 'FREE 12 Months Domain Name'),
(1002, 61, 'FREE 12 Month Hosting'),
(1003, 61, '5 Professional Email ID’s'),
(1004, 61, 'Social Media Page Integration'),
(1005, 61, 'Google Friendly Sitemap'),
(1006, 61, 'Search Engine Submission'),
(1007, 61, 'Complete W3C Certified HTML'),
(1008, 61, 'Industry specified Team of Expert Designers and Developers'),
(1009, 61, 'Complete Deployment'),
(1010, 61, '– – Social Media Page Design'),
(1011, 61, 'Facebook Icon Image & Banner Design'),
(1012, 61, 'Twitter Icon Image & Banner Design'),
(1013, 61, 'Google+ Icon Image & Banner Design'),
(1014, 61, '– Value Added Services'),
(1015, 61, 'Logo Design Final Files (.AI, .PSD, .EPS, .PNG, .JPG, .PDF, .TIFF)'),
(1016, 61, 'Website Design Complete Source Files'),
(1017, 61, 'Dedicated Project Manager'),
(1018, 61, '100% Satisfaction Guarantee'),
(1019, 61, '100% Money Back Guarantee'),
(1020, 61, '*NO MONTHLY OR ANY HIDDEN FEE*'),
(1021, 61, '– Add on'),
(1022, 61, 'Professional Content/Copywriting'),
(1023, 61, 'Online Payment Integration'),
(1024, 61, 'Shopping Cart Integration'),
(1025, 61, 'Additional Professional Email ID'),
(1026, 62, '– Logo Design'),
(1027, 62, 'Unlimited Logo Design Idea(s)'),
(1028, 62, '8 Dedicated Designers'),
(1029, 62, 'Icon Design'),
(1030, 62, 'All final file formats'),
(1031, 62, '– Stationary Design'),
(1032, 62, '2 Free Custom Stationary Designs'),
(1033, 62, 'MS Word Letterhead'),
(1034, 62, 'Invoice Design'),
(1035, 62, 'FREE Tri fold Brochure Design'),
(1036, 62, '– Website Design'),
(1037, 62, 'Unlimited Pages Website'),
(1038, 62, 'Conceptual and Dynamic Website'),
(1039, 62, 'Word Press OR CUSTOM PHP'),
(1040, 62, 'Content Management System (CMS)'),
(1041, 62, 'Easy Product Search'),
(1042, 62, 'Product Reviews'),
(1043, 62, 'Unlimited Products'),
(1044, 62, 'Unlimited Categories'),
(1045, 62, 'Promotional Product Showcase'),
(1046, 62, 'New Product Showcase'),
(1047, 62, 'Full Shopping Cart Integration'),
(1048, 62, 'Payment Module Integration'),
(1049, 62, 'Sales & Inventory Management'),
(1050, 62, 'Custom Forms'),
(1051, 62, 'Lead Capturing Forms (Optional)'),
(1052, 62, 'Newsfeed Integration'),
(1053, 62, 'Social Media Integration'),
(1054, 62, 'Search Engine Submission'),
(1055, 62, 'Team of Dedicated Designers, Developers and Brand Experts'),
(1056, 62, '20 Stock images'),
(1057, 62, '6 Unique Banner Designs'),
(1058, 62, 'jQuery Slider'),
(1059, 62, 'Free Google Friendly Sitemap'),
(1060, 62, 'Complete W3C Certified HTML'),
(1061, 62, '– – Social Media Page Design'),
(1062, 62, 'Facebook Page Design'),
(1063, 62, 'Twitter Page Design'),
(1064, 62, 'YouTube Page Design'),
(1065, 62, 'Google+ Page Design'),
(1066, 62, 'Pinterest Page Design'),
(1067, 62, '– Value Added Services'),
(1068, 62, 'Dedicated Account Manager'),
(1069, 62, '100% Satisfaction Guarantee'),
(1070, 62, '100% Money Back Guarantee'),
(1071, 62, '*NO MONTHLY OR ANY HIDDEN FEE*'),
(1072, 63, '– Logo Design'),
(1073, 63, 'Unlimited Logo Design Idea(s)'),
(1074, 63, '8 Dedicated Designers'),
(1075, 63, 'Icon Design'),
(1076, 63, 'All final file formats'),
(1077, 63, '– Stationary Design'),
(1078, 63, '2 Free Custom Stationary Designs'),
(1079, 63, 'MS Word Letterhead'),
(1080, 63, 'Invoice Design'),
(1081, 63, 'FREE Tri fold Brochure Design'),
(1082, 63, '– Website Design'),
(1083, 63, 'Complete Custom Design & Development'),
(1084, 63, 'Any One: Dating Portal, Job Portal, Professional Network, Social Network, Medical Portal, Restaurant Portal, Medical Portal, News Portal, Enterprise Portal'),
(1085, 63, 'Unique, User Friendly, Interactive, Dynamic, High End UI Design'),
(1086, 63, 'Unlimited Banner Designs'),
(1087, 63, 'JQuery Slider'),
(1088, 63, 'Special Hoover Effects'),
(1089, 63, '20 Stock Images'),
(1090, 63, 'Client/User Dashboard Area'),
(1091, 63, 'Custom Coding'),
(1092, 63, 'Custom PHP Development'),
(1093, 63, 'Content Management System (Custom)'),
(1094, 63, 'Online Appointment/Scheduling/Online Ordering Integration (Optional)'),
(1095, 63, 'Online Payment Integration (Optional)'),
(1096, 63, 'Multi Lingual (Optional)'),
(1097, 63, 'Custom Dynamic Forms (Optional)'),
(1098, 63, 'User Signup Area'),
(1099, 63, 'User Login Area'),
(1100, 63, 'User Dashboard Area'),
(1101, 63, 'Complete Database Creation'),
(1102, 63, 'Signup Automated Email Authentication'),
(1103, 63, 'Web Traffic Analytics Integration'),
(1104, 63, '3rd Party API Integrations'),
(1105, 63, 'Signup Area (For Newsletters, Offers etc.)'),
(1106, 63, 'Search Bar for Easy Search'),
(1107, 63, 'Live Feeds of Social Networks integration (Optional)'),
(1108, 63, 'Search Engine Submission'),
(1109, 63, 'Module-wise Architecture'),
(1110, 63, 'Extensive Admin Panel'),
(1111, 63, 'Award Winning Team of Expert Designers and Developers'),
(1112, 63, 'Complete Deployment'),
(1113, 63, '– Value Added Services'),
(1114, 63, 'Dedicated Account Manager'),
(1115, 63, '100% Satisfaction Guarantee'),
(1116, 63, '100% Money Back Guarantee'),
(1117, 63, '*NO MONTHLY OR ANY HIDDEN FEE*');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discountPrice` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `featured` varchar(255) NOT NULL,
  `planCategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `title`, `price`, `discountPrice`, `comments`, `featured`, `planCategoryId`) VALUES
(1, 'Basic Logo', '45', '80', '', 'Yes', 1),
(2, 'Startup Logo', '80', '170', '', 'No', 1),
(3, 'Professional Logo', '125', '249', '', 'No', 1),
(7, 'Elite Logo', '175', '348', '', 'No', 1),
(9, 'Business Logo', '245', '248', '', 'No', 1),
(10, 'Gold Logo', '425', '849', '', 'No', 1),
(11, 'Basic Illustrative', '294', '588', '', 'No', 3),
(12, 'Startup Illustrative', '394', '788', '', 'No', 3),
(13, 'Startup Illustrative', '394', '788', '', 'No', 3),
(14, 'Professional Illustrative', '594', '1188', '', 'No', 3),
(15, '3D Logo Package', '644', '1088', '', 'No', 3),
(16, 'Business Logo', '345', '488', '', 'No', 3),
(17, 'Gold Logo', '525', '849', '', 'No', 3),
(18, 'Basic', '244', '488', '', 'No', 2),
(19, 'Startup', '494', '788', '', 'No', 2),
(20, 'Professional', '895', '1058', '', 'No', 2),
(21, 'Elite', '1899', '2900', '', 'No', 2),
(22, 'Identity', '3199', '4099', '', 'No', 2),
(23, 'Corporate', '7999', '10999', '', 'No', 2),
(24, 'Startup', '99', '198', '', 'No', 4),
(25, 'Classic', '199', '788', '', 'No', 4),
(26, 'Premium', '399', '1188', '', 'No', 4),
(32, 'Unlimited', '499', '1088', '', 'No', 4),
(33, 'Startup', '299', '499', '', 'No', 5),
(34, 'Classic', '599', '998', '', 'No', 5),
(35, 'Premium', '999', '1048', '', 'No', 5),
(36, 'Basic', '1000', '', 'FIRST MONTH TOTAL PAYMENT $3,500 (3 MONTHS PLAN) $1,500 (ON-GOING MONTHLY PAYMENT)', 'No', 7),
(37, 'Premium', '1500', '', 'FIRST MONTH TOTAL PAYMENT $5,000 (3 MONTHS PLAN) $2,000 (ON-GOING MONTHLY PAYMENT)', 'No', 7),
(38, 'Platinum', '2500', '', 'FIRST MONTH TOTAL PAYMENT $6,500 (3 MONTHS PLAN) $2,500 (ON-GOING MONTHLY PAYMENT)', 'No', 7),
(39, 'Basic', '499', '999', '', 'No', 6),
(40, 'Startup', '999', '1399', '', 'No', 6),
(41, 'Professional', '1799', '2399', '', 'No', 6),
(42, 'Identity', '2999', '3399', '', 'No', 6),
(43, 'Elite', '5099', '6999', '', 'No', 6),
(44, 'Corporate', '7699', '9398', '', 'No', 6),
(45, 'CUSTOM CRM/ERP', '11099', '13398', '', 'No', 6),
(46, 'Startup', '99', '198', '', 'No', 8),
(47, 'Classic', '149', '', '', 'No', 8),
(48, 'Premium', '199', '398', '', 'No', 8),
(49, 'Unlimited', '999', '1998', '', 'No', 8),
(50, 'Startup', '349', '699', '', 'No', 9),
(51, 'Scaling', '699', '1399', '', 'No', 9),
(52, 'Venture', '1,199', '2399', '', 'No', 9),
(53, 'Scaling', '199', '319', '', 'No', 10),
(54, 'Basic', '199', '139', '', 'No', 10),
(55, 'Starter', '599', '1119', '', 'No', 10),
(56, 'Identity', '1849', '4619', '', 'No', 10),
(57, 'Professional', '1049', '2119', '', 'No', 10),
(58, 'Basic', '229', '319', '', 'No', 11),
(59, 'Startup', '994', '1988', '', 'No', 11),
(60, 'Professional', '1299', '2599', '', 'No', 11),
(61, 'Identity', '1899', '3300', '', 'No', 11),
(62, 'Corporate', '2899', '3800', '', 'No', 11),
(63, 'Elite', '5499', '8999', '', 'No', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userRole` varchar(255) NOT NULL,
  `userBrand` varchar(255) NOT NULL,
  `userNumber` varchar(255) NOT NULL,
  `userProfileImage` varchar(255) NOT NULL,
  `userLastLogin` varchar(255) NOT NULL,
  `userStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerorderitems`
--
ALTER TABLE `customerorderitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customorder`
--
ALTER TABLE `customorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderbreif`
--
ALTER TABLE `orderbreif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plancategory`
--
ALTER TABLE `plancategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planitems`
--
ALTER TABLE `planitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `planId` (`planId`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `planCategoryId` (`planCategoryId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerorderitems`
--
ALTER TABLE `customerorderitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customorder`
--
ALTER TABLE `customorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orderbreif`
--
ALTER TABLE `orderbreif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `plancategory`
--
ALTER TABLE `plancategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `planitems`
--
ALTER TABLE `planitems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1118;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `planitems`
--
ALTER TABLE `planitems`
  ADD CONSTRAINT `planitems_ibfk_1` FOREIGN KEY (`planId`) REFERENCES `plans` (`id`);

--
-- Constraints for table `plans`
--
ALTER TABLE `plans`
  ADD CONSTRAINT `plans_ibfk_1` FOREIGN KEY (`planCategoryId`) REFERENCES `plancategory` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
