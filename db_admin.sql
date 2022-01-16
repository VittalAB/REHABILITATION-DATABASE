
CREATE TABLE `camp` (
  `c_id` int(11) NOT NULL,
  `officer_1` varchar(100) NOT NULL,
  `officer_2` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `total_p` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`c_id`, `officer_1`, `officer_2`, `place`, `year`, `start_date`, `end_date`, `total_p`) VALUES
(5, 'sham', 'bham', 'kocchi', '2020', '2021-06-20', '2021-06-09', '');

-- --------------------------------------------------------

--
-- Table structure for table `councelling_1`
--

CREATE TABLE `councelling_1` (
  `p_id` int(11) NOT NULL,
  `counceller` varchar(100) NOT NULL,
  `age_of_1s_use` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `frequency` varchar(100) NOT NULL,
  `type_of_alcohol` varchar(100) NOT NULL,
  `year_of_use` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `councelling_1`
--

INSERT INTO `councelling_1` (`p_id`, `counceller`, `age_of_1s_use`, `quantity`, `frequency`, `type_of_alcohol`, `year_of_use`) VALUES
(1, 'a', '9', '', '3days', 'wisky', 2),
(2, 'a', '9', '250ml', '3days', 'wisky', 2),
(3, 'as', 'above 18', '750ml', '6days', 'wisky', 0),
(4, 'a', '9', '500ml', '3days', 'beer', 2),
(5, 'a', '9', '500ml', '3days', 'beer', 2),
(6, 'as', '9', '500ml', '6days', 'wisky', 0),
(7, 'as', '10', '500ml', '6days', 'rum', 23),
(8, 'as', '10', '500ml', '6days', 'wisky', 23);

-- --------------------------------------------------------

--
-- Table structure for table `councelling_2`
--

CREATE TABLE `councelling_2` (
  `p_id` int(11) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(29) NOT NULL,
  `bp` varchar(20) NOT NULL,
  `sugar` varchar(20) NOT NULL,
  `pulse_rate` varchar(20) NOT NULL,
  `phy_d` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `councelling_2`
--

INSERT INTO `councelling_2` (`p_id`, `height`, `weight`, `bp`, `sugar`, `pulse_rate`, `phy_d`) VALUES
(1, '0', '0', '0', '0', '0', 'Java'),
(2, '150-160', 'Python', 'Normal', 'High', 'High', 'Diabetics');

-- --------------------------------------------------------

--
-- Table structure for table `councelling_3`
--

CREATE TABLE `councelling_3` (
  `p_id` int(11) NOT NULL,
  `curr_living` varchar(100) NOT NULL,
  `finance` varchar(100) NOT NULL,
  `culture_issue` varchar(100) NOT NULL,
  `childhood_exp` varchar(100) NOT NULL,
  `job_issues` varchar(100) NOT NULL,
  `home_environment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `councelling_3`
--

INSERT INTO `councelling_3` (`p_id`, `curr_living`, `finance`, `culture_issue`, `childhood_exp`, `job_issues`, `home_environment`) VALUES
(1, 'd', 'Poor', 'early parental loss', 'Single Parentage', 'Less Salary', 'singal');

-- --------------------------------------------------------

--
-- Table structure for table `councelling_4`
--

CREATE TABLE `councelling_4` (
  `p_id` int(11) NOT NULL,
  `shaky_hands` varchar(10) NOT NULL,
  `sweating` varchar(10) NOT NULL,
  `anxiety` varchar(10) NOT NULL,
  `mental_stress` varchar(10) NOT NULL,
  `fever` varchar(10) NOT NULL,
  `visual_hallociation` varchar(10) NOT NULL,
  `sound_hallociation` varchar(10) NOT NULL,
  `nausea` varchar(10) NOT NULL,
  `headche` varchar(10) NOT NULL,
  `confusion` varchar(10) NOT NULL,
  `insomia` varchar(10) NOT NULL,
  `night_mare` varchar(10) NOT NULL,
  `high_bp` varchar(10) NOT NULL,
  `others` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `councelling_4`
--

INSERT INTO `councelling_4` (`p_id`, `shaky_hands`, `sweating`, `anxiety`, `mental_stress`, `fever`, `visual_hallociation`, `sound_hallociation`, `nausea`, `headche`, `confusion`, `insomia`, `night_mare`, `high_bp`, `others`) VALUES
(1, 'no', 'yes', 'yes', 'email', 'email', 'email', 'email', 'email', 'email', 'email', 'email', 'email', 'email', 'phone');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `field` varchar(100) NOT NULL,
  `prescription` varchar(100) NOT NULL,
  `cmt_o_h` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_id`, `name`, `address`) VALUES
(1, 'sans', 'hubli'),
(4, 'ramu', 'haveri');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `age` varchar(20) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `name`, `address`, `age`, `phone`, `gender`) VALUES
(4, '553', 'm', '55', '3444444', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `Name` varchar(50) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Categorie` varchar(50) NOT NULL,
  `etat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL COMMENT 'role_id',
  `role` varchar(255) DEFAULT NULL COMMENT 'role_text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Editor'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `roleid` tinyint(4) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `email`, `password`, `mobile`, `roleid`, `isActive`, `created_at`, `updated_at`) VALUES
(23, 'admin', 'admin', 'admin@admin.com', '6c7ca345f63f835cb353ff15bd6c5e052ec08e7a', '54852852', 1, 0, '2020-12-19 09:05:56', '2020-12-19 09:05:56'),
(25, 'Fathi', 'fathiA', 'fathianh@gmail.com', '0a859b9a4ebbde4f63383bca7e34890985782348', '54672828', 3, 0, '2020-12-19 09:45:52', '2020-12-19 09:45:52'),
(26, 'Makrem', 'makrem', 'makrem@gmail.com', 'adef7009a84a71c226ddf68671e929d68a707762', '42551771', 3, 0, '2020-12-19 09:46:59', '2020-12-19 09:46:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camp`
--
ALTER TABLE `camp`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `councelling_1`
--
ALTER TABLE `councelling_1`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `councelling_2`
--
ALTER TABLE `councelling_2`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `councelling_3`
--
ALTER TABLE `councelling_3`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `councelling_4`
--
ALTER TABLE `councelling_4`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camp`
--
ALTER TABLE `camp`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `councelling_1`
--
ALTER TABLE `councelling_1`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `councelling_2`
--
ALTER TABLE `councelling_2`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `councelling_3`
--
ALTER TABLE `councelling_3`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `councelling_4`
--
ALTER TABLE `councelling_4`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'role_id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
