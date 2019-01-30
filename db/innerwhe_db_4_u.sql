-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2016 at 01:33 PM
-- Server version: 5.5.48-37.8
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `innerwhe_db_4_u`
--

-- --------------------------------------------------------

--
-- Table structure for table `chairman_message`
--

CREATE TABLE IF NOT EXISTS `chairman_message` (
  `fld_id` int(11) NOT NULL,
  `fld_title` varchar(255) NOT NULL,
  `fld_message` longtext NOT NULL,
  `short_title` varchar(255) NOT NULL,
  `short_message` longtext NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chairman_message`
--

INSERT INTO `chairman_message` (`fld_id`, `fld_title`, `fld_message`, `short_title`, `short_message`) VALUES
(1, 'Message from Dist. Chairman (IW Dist. 328)', '<p>New Inner Wheel year (2016-2017) was launched on 16<sup>th</sup> July, 2016 with DoaMohfil followed by workshop. DoaMohfil was a deviation from usual one. It included Hamd and Nath and heart-renderingMunajat. Workshop was quite successful with large number of participants. It continued till 2:30 PM followed by lunch with sumptuous food.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Yours in Inner Wheel Friendship</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Farida Hashem</strong></p>\r\n\r\n<p>District Chairman 2016-2017</p>\r\n\r\n<p>Inner Wheel District 328. Bangladesh</p>\r\n', 'Message from Dist. Chairman (IW Dist. 328)', '<p>New Inner Wheel year (2016-2017) was launched on 16<sup>th</sup> July, 2016 with DoaMohfil followed by workshop. DoaMohfil was a deviation from usual one. It included Hamd and Nath and heart-renderingMunajat. Workshop was quite successful with large number of participants. It continued till 2:30 PM followed by lunch with sumptuous food.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Yours in Inner Wheel Friendship</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Farida Hashem</strong></p>\r\n\r\n<p>District Chairman 2016-2017</p>\r\n\r\n<p>Inner Wheel District 328. Bangladesh</p>\r\n\r\n<address><a href="chairman_message.php"><strong>Read More</strong></a></address>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `fld_id` int(11) NOT NULL,
  `fld_order_level` int(11) NOT NULL,
  `fld_position_name` varchar(255) NOT NULL,
  `fld_name` varchar(255) NOT NULL,
  `fld_img` varchar(255) NOT NULL,
  `fld_details` longtext NOT NULL,
  `save_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`fld_id`, `fld_order_level`, `fld_position_name`, `fld_name`, `fld_img`, `fld_details`, `save_time`) VALUES
(2, 1, 'District Chairman', 'Farida Hashem ', 'farida_hashem .jpg', '<p>Extension Organizer<br />\r\nClub:IWC of Dhaka West<br />\r\nPhone: 01819-412154<br />\r\nE-mail: chairman@greenlandbd.com</p>\r\n', '2016-07-23 11:52:08'),
(3, 7, 'Extension Organizer ', 'Mrs. Naima Shakhawat', '3naima_shakhawat.jpg', '<p>Extension Organizer<br />\r\nClub:IWC of Dhaka West<br />\r\nPhone: 01778-319322<br />\r\nE-mail: naima_sha@yahoo.com</p>\r\n', '2016-07-25 10:09:04'),
(4, 2, 'Vice Chairman-I ', 'Nayar Islam', '5nayerIslam.png', '<p>Vice Chairman-I<br />\r\nClub:IWC of Dhanmondi<br />\r\nPhone: 01711-601363<br />\r\nE-mail: mysticriver_dhaka@yahoo.com</p>\r\n', '2016-07-28 04:13:40'),
(5, 12, 'Deputy National Representative ', 'Mrs. Nahid Nawaz', '1nahid_nawaz.jpg', '<p>Deputy National Representative<br />\r\nHouse: 173,(3rd Floor), Lane: 1 East DOHS,<br />\r\nBaridhara, Dhaka-1206<br />\r\nPhone: 01741-127579<br />\r\nEmail: nahid_nawaz@ymail.com</p>\r\n', '2016-07-25 10:28:30'),
(6, 3, 'Vice Chairman-II ', 'Mrs. Momtaz Mahal Ranu', '6momtaz_mahal.jpg', '<p>Vice Chairman - 2<br />\r\nClub:IWC of Dhaka North East<br />\r\nPhone: 01817-536030<br />\r\nmomtaz-mahal@live.com</p>\r\n', '2016-07-25 10:15:29'),
(7, 5, 'District Secretary ', 'Yasmin Alam', '05.jpg', '<p><strong>District Secretary&nbsp; </strong><br />\r\nClub:IWC of Dhaka North East<br />\r\nPhone: 01715077306<br />\r\nrahman.yalam@ymail.com</p>\r\n', '2016-07-25 10:26:09'),
(9, 8, 'International Service Organiser ', 'Musfaka Rahman', 'HosneAraHasna.jpg', '<p>International Service Organizer<br />\r\nHosne Ara Hasna</p>\r\n', '2016-08-01 04:47:05'),
(12, 10, 'National Representative ', 'Rtn. Hosne Ara Chowdhury', '4district_chairman.jpg', '<p>National Representative<br />\r\nClub: IWC of Uttara<br />\r\nPhone: 01715-061791<br />\r\nEmail: hosnearachowdhuryiw@gmail.com</p>\r\n', '2016-07-23 11:52:40'),
(14, 4, 'Imm. Past District Chairman ', 'Mariam Begum', 'mariam_begum.jpg', '<p>Imm. Past Chairman<br />\r\nMariam Begum</p>\r\n\r\n<p>Inner Wheel Bangladesh</p>\r\n', '2016-07-25 11:04:04'),
(15, 6, 'District Treasurer  ', 'Monowara Rahman', 'MonowaraRahman.jpg', '<p>District Treasurer<br />\r\nMonowara Rahman</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2016-08-01 04:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `menu_name_change`
--

CREATE TABLE IF NOT EXISTS `menu_name_change` (
  `fld_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_name_change`
--

INSERT INTO `menu_name_change` (`fld_id`, `name`, `time`) VALUES
(1, 'IWD EC Committee 2016-17', '2016-07-24 06:56:29'),
(2, 'Inner Wheel Functions 2016-17', '2016-07-21 18:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE IF NOT EXISTS `news_events` (
  `fld_id` int(11) NOT NULL,
  `fld_title` longtext NOT NULL,
  `Event_date` varchar(255) NOT NULL,
  `fld_news_event` longtext NOT NULL,
  `save_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`fld_id`, `fld_title`, `Event_date`, `fld_news_event`, `save_time`) VALUES
(10, 'ISO Meet 2015-2016', '21-11-2015', '<p><strong><big><span style="background-color:Lime;">ISO Meet of IWD 328 will be held on 21st November 2015 at Gulshan club</span></big></strong></p>\r\n', '2016-07-24 06:55:50'),
(9, 'District Rally 2015-2016', '10-10-2015', '<p><big><span style="background-color:Yellow;"><strong>Inner Wheel District 328 Rally 2015-2016 will be held on 10th October at 10:00 am in the morning at Uttara Club.</strong></span></big></p>\r\n', '2015-09-19 07:18:28'),
(8, '1st Meeting of the District Committee 2015', '12-09-2015', '<p><span style="background-color:Lime;"><big><q><strong>1st District Committee Meeting and Election for NR, DNR, IIW positions will be held on 12th September 2015 at Gulshan Ladies Community Club </strong></q></big></span></p>\r\n', '2015-08-26 16:06:15'),
(7, '14th Triennial Conference 2016', '05-02-2016', '<p><span style="background-color:Yellow;"><q><big><strong>14th Triennial Conference is going to be held on 4th February to 7th February 2016 at Kolkata</strong></big></q></span></p>\r\n', '2015-08-26 16:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery`
--

CREATE TABLE IF NOT EXISTS `photo_gallery` (
  `fld_id` int(11) NOT NULL,
  `fld_title` varchar(255) NOT NULL,
  `fld_desc` longtext NOT NULL,
  `fld_img` varchar(255) NOT NULL,
  `save_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_gallery`
--

INSERT INTO `photo_gallery` (`fld_id`, `fld_title`, `fld_desc`, `fld_img`, `save_at`) VALUES
(2, 'First Image', 'No Description', '1.jpg', '2015-07-27 10:04:54'),
(3, 'Second Image', 'No Desc', '2.jpg', '2015-07-27 10:05:17'),
(4, 'Third Image', 'No Desc', '3.jpg', '2015-07-27 10:05:36'),
(5, 'Joint Project - Bardem Hospital', '', 'Joint Project - Bardem Hospital.jpg', '2015-08-13 04:40:46'),
(6, 'Joint Project - Bidyanando School Mirpur 1', '', 'Joint Project - Bidyanando School Mirpur 1.jpg', '2015-08-13 04:41:42'),
(7, 'Joint Project - Bidyanando School Mirpur 2', '', 'Joint Project - Bidyanando School Mirpur 2.jpg', '2015-08-13 04:43:04'),
(8, 'Joint Project - Bidyanando School Mirpur 3', '', 'Joint Project - Bidyanando School Mirpur 3.jpg', '2015-08-13 04:43:59'),
(9, 'Joint Project - Bongobondhu Hospital', '', 'Joint Project - Bongobondhu Hospital.jpg', '2015-08-13 04:45:03'),
(10, 'Joint Project - Dhaka Medical Hospital', '', 'Joint Project - Dhaka Medical Hospital.jpg', '2015-08-13 04:45:49'),
(11, 'Joint Project - Maa o Shishu Hospital Mohammadpur', '', 'Joint Project - Maa o Shishu Hospital Mohammadpur.jpg', '2015-08-13 04:46:26'),
(12, 'Joint Project - Mental Hospital Shamoli', '', 'Joint Project - Mental Hospital Shamoli.jpg', '2015-08-13 04:46:55'),
(13, 'Joint Project - National Cancer Research Institute & Hospital ', '', 'Joint Project - National Cancer Research Institute & Hospital (1).jpg', '2015-08-13 04:48:14'),
(14, 'Joint Project - National TB Institute & Hospital', '', 'Joint Project - National TB Institute & Hospital.jpg', '2015-08-13 04:49:17'),
(15, 'Joint Project - Pongu Hospital Shamoli', '', 'Joint Project - Pongu Hospital Shamoli.jpg', '2015-08-13 04:49:55'),
(16, 'Joint Project - Shishu Hospital Shamoli', '', 'Joint Project - Shishu Hospital Shamoli.jpg', '2015-08-13 04:50:49'),
(17, 'Triennial Conference Discussion', '', '20150821_163420_resized_1.jpg', '2015-08-24 04:08:00'),
(20, 'Eid Reunion Friendship and Fellowship Conference at Restaurant Village', '', '20150822_145304.jpg', '2015-08-24 04:12:48'),
(21, 'Eid reunion friendship and fellowship IWC of Gulshan', '', '20150817_134449_resized_1.jpg', '2015-08-24 04:14:29'),
(23, 'Eid reunion friendship and fellowship IWC of Gulshan', '', '20150817_140049_resized.jpg', '2015-08-24 04:16:19'),
(26, 'EC Meeting', '', '20150816_175424.jpg', '2015-08-24 04:21:22'),
(27, 'EC Meeting', '', '20150816_182016_001_resized.jpg', '2015-08-24 04:22:42'),
(32, 'IWC Metropolitan club installation ', '', 'metro1.jpg', '2015-08-24 11:41:36'),
(34, 'Discussion meeting on 14th Triennial Conference which will be held in Kolkata', '', 'tri1.jpg', '2015-08-24 12:12:03'),
(37, 'Charter handing over program ', 'Charters are being given to the presidents of the two new IW clubs in District 328. Handed over took part by the District Committee.', 'charter-1.png', '2015-09-10 14:43:03'),
(38, '3rd EC meeting , before starting discussion on the agenda', '', 'IMG_0074-1.jpg', '2015-09-10 14:59:36'),
(39, 'First meeting of the District committee 2015-2016, IWD 328.', '', '12002556_899276196813906_1623566270791846894_o.jpg', '2015-09-19 06:55:20'),
(40, 'First meeting of the District committee 2015-2016, IWD 328. ', '', '12019950_1488070718159618_453008118379692640_n.jpg', '2015-09-19 07:04:07'),
(50, 'District Rally of Unity and Strength 2015', '', '20151010_103809.jpg', '2015-10-19 16:53:42'),
(51, 'Chief Guest Suraiya Alam, National Representative of IW Bangladesh delivering her speech at the rally', '', '20151010_113847.jpg', '2015-10-19 17:04:16'),
(52, 'Pinning floral badge to the Special guest Gulshan Nassrin Choudhury at the rally', '', '12086789_910339965707529_93124019_n.jpg', '2015-10-19 17:21:02'),
(53, '27th Installation ceremony of IWC of Greater Dhaka, IWD 328', '', '20151024_163512_resized.jpg', '2015-10-25 06:20:40'),
(57, 'The monthly meeting of the executive committee', '', '20151026_181006_resized.jpg', '2015-10-27 05:26:37'),
(65, 'Iso meet District 328 Bangladesh', '', '20151121_132941_resized.jpg', '2015-11-26 09:28:49'),
(68, 'Iso meet District 328 Bangladesh', '', '20151122_115824_resized.jpg', '2015-11-26 10:18:38'),
(71, 'Iso meet District 328 Bangladesh', '', '20151202_162225_resized.jpg', '2015-12-07 04:51:05'),
(73, 'Meeting of District Executive committee 2016-2017', 'Meeting of District Executive committee 2016-2017', 'District Executive committee.jpg', '2016-08-10 05:05:53'),
(75, 'Along with District Executive committee, chairman farida Hashem decorated National Representative Hosney ara chowdhury with I W pin on workshop', 'District Executive committee', '232354630.jpg', '2016-08-10 05:10:04');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `fld_id` int(11) NOT NULL,
  `fld_position` varchar(255) NOT NULL,
  `save_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`fld_id`, `fld_position`, `save_time`) VALUES
(1, 'Chairman', '2015-07-27 05:34:45'),
(2, 'Vice Chairman-I ', '2015-07-27 05:37:05'),
(3, 'Vice Chairman-II ', '2015-07-27 05:35:40'),
(4, 'Imm. Past District Chairman ', '2015-07-27 05:35:40'),
(5, 'District Secretary ', '2015-07-27 05:36:25'),
(6, 'District Treasurer  ', '2015-07-27 05:38:09'),
(7, 'Extension Organizer ', '2015-07-27 07:42:12'),
(8, 'International Service Organiser ', '2015-07-27 07:42:22'),
(9, 'District Editor ', '2015-07-27 07:42:28'),
(10, 'National Representative ', '2015-07-27 07:42:38'),
(11, 'Deputy National Representative ', '2015-07-27 07:42:42'),
(12, 'District Chairman', '2015-08-16 06:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `fld_id` int(11) NOT NULL,
  `fld_title` varchar(255) NOT NULL,
  `fld_desc` longtext NOT NULL,
  `fld_img` varchar(255) NOT NULL,
  `save_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`fld_id`, `fld_title`, `fld_desc`, `fld_img`, `save_at`) VALUES
(3, 'Joint Project-1', '', 'Joint Project - National Cancer Research Institute & Hospital (1)-8.jpg', '2015-08-26 16:29:25'),
(4, 'Joint Project-2', '', 'Joint Project - Bidyanando School Mirpur 1-2.jpg', '2015-08-26 16:31:09'),
(5, 'Joint Project-3', '', 'Joint Project - Bongobondhu Hospital-3.jpg', '2015-08-26 16:32:33'),
(6, 'Joint Project-6', '', 'Joint Project - Mental Hospital Shamoli-6.jpg', '2015-08-26 16:37:13'),
(7, 'Joint Project-7', '', 'Joint Project - National Cancer Research Institute & Hospital (1)-8.jpg', '2015-08-26 16:39:44'),
(8, 'Joint Project-8', '', 'Joint Project - National TB Institute & Hospital-9.jpg', '2015-08-26 16:41:14'),
(9, 'Joint Project-9', '', 'Joint Project - Pongu Hospital Shamoli-10.jpg', '2015-08-26 16:43:11'),
(10, 'Joint Project-10', '', 'Joint Project - Shishu Hospital Shamoli-11.jpg', '2015-08-26 16:44:57'),
(11, 'Joint Project-11', 'A joint project: Financial support given to the Autistic Children support center by IW clubs. District Chairman, NR along with IW club Presidents and others are seen in the pic', 'tumpa-2-12.jpg', '2015-08-27 05:48:50'),
(13, 'Joint Project-4', '', 'Joint Project - Dhaka Medical Hospital-4.jpg', '2015-08-26 16:57:30'),
(14, 'IWC of Dhanmondi project', 'Shelter and rehabilitation project: IWC Dhanmondi providing financial help to a poor lady to rebuild her house in village', 'shelter1.jpg', '2015-09-20 13:05:39'),
(15, 'Handwashing Project in a free primary school jointly done by IW clubs and arranged by IWC of Gulshan', '', '20150909_110841_resized-1.jpg', '2015-09-10 14:47:44'),
(17, 'IWC Dhanmondi Providing donation to Gojaria Public Library for the reader in order to make a healthy crime  free educative environment .', 'Donation has been given to the President of the Gojaria Public Library by the members of IWC Dhanmondi. ', 'image.jpg', '2015-09-20 12:34:00'),
(18, 'Project of IWC of Uttara', '', '12047505_1490893754543981_152583794_n.jpg', '2015-09-23 11:05:02');

-- --------------------------------------------------------

--
-- Table structure for table `slider_picture`
--

CREATE TABLE IF NOT EXISTS `slider_picture` (
  `fld_id` int(11) NOT NULL,
  `fld_title` varchar(255) NOT NULL,
  `fld_desc` varchar(255) NOT NULL,
  `fld_img` varchar(255) NOT NULL,
  `save_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_picture`
--

INSERT INTO `slider_picture` (`fld_id`, `fld_title`, `fld_desc`, `fld_img`, `save_at`) VALUES
(1, 'District Chairman', 'District Chairman', 'farida_hashem .jpg', '2016-07-21 18:39:44'),
(3, 'Vice Chairman-I', '', 'vice_chairman-2.jpg', '2016-07-28 05:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `users_list`
--

CREATE TABLE IF NOT EXISTS `users_list` (
  `fld_id` int(20) NOT NULL,
  `fld_name` varchar(300) NOT NULL,
  `fld_position` varchar(300) NOT NULL,
  `fld_phone_number` varchar(300) NOT NULL,
  `fld_email` varchar(300) NOT NULL,
  `fld_username` varchar(300) NOT NULL,
  `fld_password` varchar(300) NOT NULL,
  `fld_con_pass` varchar(255) NOT NULL,
  `fld_save_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fld_ip` varchar(300) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_list`
--

INSERT INTO `users_list` (`fld_id`, `fld_name`, `fld_position`, `fld_phone_number`, `fld_email`, `fld_username`, `fld_password`, `fld_con_pass`, `fld_save_at`, `fld_ip`) VALUES
(1, 'Admin_name', 'IT Admin', '017XXXXXXX', 'muhin.cse.diu@gmail.com', 'inner_superadmin', 'ac66a923b88c3a25381c3e2585736875', 'ac66a923b88c3a25381c3e2585736875', '2015-08-12 10:41:18', ''),
(22, 'Hossain', 'Programmer', '01745468682', 'email@gmail.com', 'super_admin', '4acb4bc224acbbe3c2bfdcaa39a4324e', '4acb4bc224acbbe3c2bfdcaa39a4324e', '2016-07-21 10:48:39', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chairman_message`
--
ALTER TABLE `chairman_message`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `menu_name_change`
--
ALTER TABLE `menu_name_change`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `slider_picture`
--
ALTER TABLE `slider_picture`
  ADD PRIMARY KEY (`fld_id`);

--
-- Indexes for table `users_list`
--
ALTER TABLE `users_list`
  ADD PRIMARY KEY (`fld_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chairman_message`
--
ALTER TABLE `chairman_message`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `menu_name_change`
--
ALTER TABLE `menu_name_change`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `slider_picture`
--
ALTER TABLE `slider_picture`
  MODIFY `fld_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users_list`
--
ALTER TABLE `users_list`
  MODIFY `fld_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
