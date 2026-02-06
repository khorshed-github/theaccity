-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2024 at 06:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supperknitting`
--

-- --------------------------------------------------------

--
-- Table structure for table `csr`
--

CREATE TABLE `csr` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `loginid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `csr`
--

INSERT INTO `csr` (`id`, `title`, `file_name`, `status`, `created_at`, `updated_at`, `loginid`) VALUES
(1, 'Blood Donation', '1735439133_blood-donation.jpg', 1, '2024-12-28 20:00:55', '2024-12-28 20:25:33', NULL),
(2, 'Health Sheba', '1735437949_garment_big(29).jpg', 1, '2024-12-28 20:05:49', '2024-12-28 20:05:49', NULL),
(3, 'Baby Care', '1735438063_garment_big(32).jpg', 1, '2024-12-28 20:07:43', '2024-12-28 20:17:47', NULL),
(4, 'Another Program', '1735438861_garment_big(30).jpg', 1, '2024-12-28 20:21:01', '2024-12-28 20:21:01', NULL),
(5, 'Another Program', '1735438945_printing_big(16).jpg', 1, '2024-12-28 20:22:25', '2024-12-28 20:22:25', NULL),
(6, 'Factory Office', '1735439194_big_scroll14.jpg', 1, '2024-12-28 20:26:34', '2024-12-28 20:26:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `author` varchar(20) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `shot_desc` text DEFAULT NULL,
  `file_name` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `loginid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `author`, `title`, `shot_desc`, `file_name`, `status`, `created_at`, `updated_at`, `loginid`) VALUES
(4, 'khorshed', 'Organogram of Knitting Section in Garments Industry.', 'Organogram:\r\nOrganogram means a drawing or plan that gives the names and job titles of all the staff in an organization or department, showing how they are connected to each other. Knitting section of a Garments Industry has an organogram. Organogram of knitting section in garments industry is given below:\r\nOrganogram of Knitting Section in Apparel Industry\r\nKnitting Manager\r\n↓\r\nKnitting Assistance Manager\r\n↓\r\nKnitting Master\r\n↓\r\nProduction Master\r\n↓\r\nProduction Officer\r\n↓\r\nKnitting Incharge\r\n↓\r\nKnitting Supervisor\r\n↓\r\nKnitting Technician\r\n↓\r\nKnitting Operator\r\n↓\r\nKnitting Helper\r\n↓\r\nKnitting Cleaner\r\n\r\n\r\nRoles of  Textile Engineer in Apparel Industry:Best clothing retailers\r\n1. Planning: Have to plan all told sections for the graceful flow of the production line.\r\n\r\n2. Control: Have to control the production and the people according to the plan to get the optimum efficiency.\r\n\r\n\r\n3. Organization: Needs to watch over the manufacturing process and introduces the required system needed for quality production.\r\n\r\n4. Re-viewing: He has to review all activities of a shift in charge and supervise every day/week/month according to production manager order.\r\n\r\n\r\n5. Administration: Textile engineer has to plan in all sections for the smooth flow of production.\r\n\r\n6. Leadership: A Textile engineer makes the worker give their best by inspiring and motivating.\r\n\r\n7. Management Contact: Textile Engineer needs consultation with production manager in a matter of production planning and work distribution of individuals.\r\n8. Maintenance schedule: Textile Engineer needs to check and maintain the proper maintenance schedule for every machine to remain to continue the production.\r\n\r\n9. Inventory Control: Textile Engineers plays an important role to control appropriate and necessary spare parts and raw material to smooth run the apparel industry.Best clothing retailers\r\n\r\n\r\n10. Product Development: Most of the  textile engineers works on product research and development, to improve current textile-based products or creating new products\r\n\r\n11. Product Improvement: They come up with innovative ideas and techniques to improve the process, production, and quality of yarns and fabrics produced in the plant.\r\n\r\n12. Sourcing: Source the product at the least price while maintaining the quality standard as required by the buyer.\r\n\r\n13. Fashion Design: Designers and merchandisers give careful consideration to these fundamentals for even the most basic apparel.\r\n\r\n14. Merchandising: Apparel merchandiser has to handle some buyers smartly to consider all of the features of a product, including design, quality, product life-cycle, consumer’s buying ability, and so on.', '1735286684_big_scroll18.jpg', 1, '2024-12-21 18:53:07', '2024-12-27 02:04:44', NULL),
(10, 'boltu', 'Garments Dyeing | Garments Dyeing Types and Processes', 'Garments Dyeing : The process of dyeing fully made apparel product like t-shirts , pants , trousers , shirts , jackets, tops, pullovers , dresses and bottoms is called garments dyeing. In Conventional method , Garments are made with pre-dyed fabrics and then cutting and sewing. But now grey fabrics are dyed in required color after manufacturing. It has become popular in recent days due to cost saving and fashion trends. Also it is capable to react much closer to actual market demand if the apparel is post dyed which reduces lead time and increases forecasting accuracy.\r\nAdvantages of garments dyeing :\r\n\r\nLower cost needed\r\nLess time needed\r\nLess shade variations occurs\r\nFlexible lot size\r\nOld garments can be redyed\r\nLower initial investment\r\nLower liquor ratio\r\nDesizing , Scouring , Bleaching can be done in same machine\r\nCapable to react with fast changing market trends\r\nFancy effects can be obtained\r\nLower inventory\r\nComparatively lower rejection rate\r\nDisadvantages of garments dyeing :\r\n\r\nHigh cost of processing\r\nMore material handling\r\nSpecial care for selection of interlining\r\nHigher seconds rate in production\r\nLabor intensive process\r\nRequries full checking of all pieces', '1735288868_dyeing3_big.jpg', 1, '2024-12-21 20:19:38', '2024-12-27 02:41:08', NULL),
(12, 'Khorshed', 'Working Process Flow Chart of Textile Printing Industry', 'The word “printing” is derived from the Latin word meaning “pressing” and implies the application of “pressure”. Textile printing is one branch of textile wet processing technology. The localised dyeing of textiles (e.g. to develop a colored pattern) is called printing. Unlike dyeing, printing designs or patterns are usually printed on only one side of the  fabric. In a most simple approach, the dye containing paste is printed on the textile fabric and the dye is fixed at elevated temperature (e.g. through steaming, drying). Then the excess paste containing dye and thickener is removed by thorough washing.\r\nA typical printing is carried out after pre-treatment of fabric or after dyeing of the fabric. It is the process of applying color to fabric in definite patterns or designs. In properly printed fabrics the color is bonded with the fiber, so as to resist washing and friction. Textile printing is related to dyeing but, whereas in dyeing proper the whole fabric is uniformly covered with one color, in printing one or more colors are applied to it in certain parts only, and in sharply defined patterns.\r\n\r\nAn enormous variety of printing techniques and machinery are technically available in textile printing industry. In this article I will discuss common styles and methods of textile printing and process flow chart of textile printing.\r\n\r\nCommon Styles of Textile Printing\r\n\r\nDirect Printing: In direct printing, a color pattern is printed directly from a dye or pigment paste onto a textile substrate without any prior mordanting step or a follow-up step of dyeing, etc.\r\n\r\nTransfer Printing: In transfer printing, a design is printed first on a flexible non-textile substrate (e. g. paper) and later transferred from the paper to a textile substrate.\r\n\r\n\r\nDischarge Printing: In discharge printing, chemicals are applied, which locally destroy the dyestuff. Textile fabric is first dyed with a suitable dye n discharge printing, and then the dye is selectively destroyed from certain areas of the fabric to give the look of a printed pattern.\r\n\r\nResist Printing: In resist printing, a paste or material is printed on the fabric which prevents access of the dye to the fibers. On dyeing, the fabric attains color only on areas where resist agent is not present. After dyeing, the resist agent is removed and the fabric gives the look of a printed pattern.\r\n\r\nCommon Methods of Textile Printing\r\n\r\nBlock Printing: The block printing is an old method of printing which involves the use of wooden blocks with raised printing surface, which are inked and then pressed on to the fabric. The transferred dye was then fixed on the fabric through appropriate methods. This printing method is used only at small scale or in cottage industry and is not used at industrial scale because of less flexibility and productivity.', '1735289055_printing_big(1).jpg', 1, '2024-12-27 02:44:15', '2024-12-27 02:45:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `salesman_id` int(11) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `entry_date` date DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  `loginid` int(11) DEFAULT NULL,
  `login_username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `salesman_id`, `amount`, `qty`, `entry_date`, `year`, `remarks`, `created_at`, `updated_at`, `status`, `loginid`, `login_username`) VALUES
(1, 2, 50, 10, '2024-12-12', '2024', 'Explicabo Praesenti', '2024-12-12 10:37:38', '2024-12-15 02:23:24', 1, 1, 'Supper Knitting'),
(2, 1, 1000, 200, '2024-12-11', '2024', 'test update', '2024-12-12 10:45:29', '2024-12-14 20:15:00', 1, 1, 'Supper Knitting'),
(3, 3, 17, 113, '2024-12-12', '2024', 'Aut ipsum esse duis', '2024-12-14 10:08:18', '2024-12-14 10:08:18', 1, 1, 'Supper Knitting'),
(4, 3, 1000, 100, '2024-12-13', '2024', 'Quo pariatur Asperi', '2024-12-14 10:08:59', '2024-12-14 20:15:45', 1, 1, 'Supper Knitting'),
(5, 1, 200, 100, '2024-12-12', '2024', 'Non autem ea ea aliq', '2024-12-14 10:09:36', '2024-12-14 10:09:36', 1, 1, 'Supper Knitting'),
(6, 4, 5000, 5, '2024-12-14', '2024', 'test purpose', '2024-12-14 10:34:53', '2024-12-14 10:34:53', 1, 1, 'Supper Knitting'),
(7, 2, 1000, 50, '2024-11-14', '2024', 'test', '2024-12-14 11:13:40', '2024-12-14 11:13:40', 1, 1, 'Supper Knitting'),
(8, 4, 100, 20, '2024-11-06', '2024', 'test', '2024-12-14 11:15:26', '2024-12-14 11:15:26', 1, 1, 'Supper Knitting'),
(9, 2, 500, 50, '2024-09-15', '2024', 'test', '2024-12-14 19:37:46', '2024-12-14 19:37:46', 1, 1, 'Developer'),
(10, 5, 500, 50, '2024-12-15', '2024', 'Consequuntur blandit', '2024-12-15 02:10:59', '2024-12-15 02:10:59', 1, 1, 'Developer');

-- --------------------------------------------------------

--
-- Table structure for table `salesman`
--

CREATE TABLE `salesman` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0,
  `loginid` int(11) DEFAULT NULL,
  `login_username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salesman`
--

INSERT INTO `salesman` (`id`, `name`, `fullname`, `designation`, `email`, `number`, `address`, `remarks`, `created_at`, `updated_at`, `status`, `loginid`, `login_username`) VALUES
(1, 'MR.ATIQ', 'MR.ATIQ', 'SR', 'example@gmail.com', NULL, 'chittagong', 'N/A', '2024-12-12 10:25:06', '2024-12-15 02:23:32', 1, 1, 'Developer'),
(2, 'MR.SHAFI', 'MR.SHAFI', 'SR', 'example@gmail.com', '01915357699', 'chittagong', 'N/A', '2024-12-12 10:26:18', '2024-12-14 10:42:53', 1, 1, 'Supper Knitting'),
(3, 'MR.NOOR', 'MR.NOOR', 'Pariatur Odio nostr', 'xeduva@mailinator.com', '+1 (985) 499-4739', 'Qui adipisci quisqua', 'Excepturi Nam accusa', '2024-12-14 10:07:00', '2024-12-14 10:07:00', 1, 1, 'Supper Knitting'),
(4, 'MR.MOJAHER', 'MR.MOJAHER', 'Voluptatem odio iure', 'vusa@mailinator.com', '+1 (959) 374-6586', 'Id aperiam iusto dol', 'Dolorum voluptatem', '2024-12-14 10:07:39', '2024-12-14 10:07:39', 1, 1, 'Supper Knitting'),
(5, 'Galena Kramer', 'Destiny Brooks', 'Nulla eaque illum i', 'lypi@mailinator.com', '+1 (328) 596-5636', 'Expedita quas impedi', 'Aliquip ex unde dolo', '2024-12-15 02:10:22', '2024-12-15 02:10:22', 1, 1, 'Developer');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('rjY6BQkrn9XG2D0rD1okAKvoFGm8B3VY7M2FozjS', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieGUzMHI4dksyTnE0SEJ2elZzcmhmYzMwZjgwZ1NvNXZlNXNvZ01xRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jb21wYW55LW92ZXJ2aWV3Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1735445201);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `shot_desc` text DEFAULT NULL,
  `file_name` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `loginid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `type`, `title`, `shot_desc`, `file_name`, `status`, `created_at`, `updated_at`, `loginid`) VALUES
(4, 'Home-Page', 'Super Knitting & Dyeing Mills Ltd.', 'A proficient apparel manufacturing company in Bangladesh.', '1735267293_big_scroll14.jpg', 1, '2024-12-21 18:53:07', '2024-12-26 20:41:33', NULL),
(5, 'Home-Page', 'CUSTOMER PRIORITY IS FIRST', 'Customer satisfaction and priority is First.', '1735267478_big_scroll2.jpg', 1, '2024-12-21 18:53:35', '2024-12-26 20:44:38', NULL),
(7, 'Home-Page', 'We Care For Out Work!', 'We understands only one logic that there is no limit of unlimited satisfaction of professionalism.', '1735267658_big_scroll18.jpg', 1, '2024-12-21 19:02:47', '2024-12-26 20:47:38', NULL),
(8, 'Home-Page', 'Doing the right thing', 'Doing the right thing at right time at our motto.', '1735267769_big_scroll13.jpg', 1, '2024-12-21 19:14:24', '2024-12-26 20:49:29', NULL),
(11, 'Product-Page', 'Product Slider 1', 'Product Slider 1', '1735440291_slider-product1-1.jpg', 1, '2024-12-28 20:44:51', '2024-12-28 20:44:51', NULL),
(12, 'Product-Page', 'Product Slider 2', 'Product Slider 2', '1735440346_slide-product4.jpg', 1, '2024-12-28 20:45:46', '2024-12-28 20:45:46', NULL),
(13, 'Product-Page', 'Product Slider 3', 'Product Slider 3', '1735440380_slider-product3.jpg', 1, '2024-12-28 20:46:20', '2024-12-28 20:46:20', NULL),
(14, 'Product-Page', 'Product Slider 4', 'Product Slider 4', '1735440496_slider-product2.jpg', 1, '2024-12-28 20:48:17', '2024-12-28 20:48:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `type` int(1) NOT NULL DEFAULT 0 COMMENT '1=software,2=website\r\n',
  `date` date DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `number`, `password`, `type`, `date`, `status`) VALUES
(1, 'Developer', '01915357699', '$2y$12$QpwEtKrHi0MB2agkO.A8ZeNeKNbroQJUQ.bXFMJGAfDhrXQ0vr3ma', 1, '2024-12-06', 1),
(2, 'Supper Knitting', '01816831165', '$2y$12$QpwEtKrHi0MB2agkO.A8ZeNeKNbroQJUQ.bXFMJGAfDhrXQ0vr3ma', 1, '2024-12-06', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `csr`
--
ALTER TABLE `csr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesman`
--
ALTER TABLE `salesman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `csr`
--
ALTER TABLE `csr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `salesman`
--
ALTER TABLE `salesman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
