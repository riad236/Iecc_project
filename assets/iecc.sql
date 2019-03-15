-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2019 at 05:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iecc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_rank` varchar(20) NOT NULL,
  `admin_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin_name`, `admin_email`, `admin_pass`, `admin_rank`, `admin_image`) VALUES
(26, 'Nusrat Rahman', 'rdxriad236@gmail.com', 'c118514945f46138381e07f7005e2a75', 'admin', '154713566149826034_761855224172076_7704832816881598464_n.jpg'),
(27, 'Nusrat Rahman 236', 'rdxriad236@gmail.com', 'c118514945f46138381e07f7005e2a75', 'admin', '1547469877images.jpg'),
(28, 'Dipto Paul', 'dipto@gmail.com', 'b47bc9c3971a24ddbbfd211d7b692227', 'admin', '154767868047430887_2105699439488731_3017157299295748096_n.jpg'),
(29, 'riadkhan', 'riadkhan2367@gmail.com', 'c118514945f46138381e07f7005e2a75', 'Moderator', '154927739423519112_323421818061585_1338592250833348713_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apply`
--

CREATE TABLE `tbl_apply` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `country_code` varchar(20) NOT NULL,
  `mobile_number` varchar(30) NOT NULL,
  `destination` varchar(300) NOT NULL,
  `course` varchar(300) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_apply`
--

INSERT INTO `tbl_apply` (`id`, `first_name`, `last_name`, `email`, `country_code`, `mobile_number`, `destination`, `course`, `date`) VALUES
(1, 'Riad', 'Khan', 'riadkhan2367@gmail.com', '+880', '1704232782', 'Study In UK', 'IT', '2019-01-17'),
(2, 'Rh', 'Khan', 'rdxriad236@gmail.com', '+880', '1704232782', 'Study In UK', 'Health', '2019-01-17'),
(3, 'Rh', 'Khan', 'rdxriad236@gmail.com', '+880', '1704232782', 'Study in Australia', 'IELTS', '2019-01-17'),
(4, 'Rh', 'Khan', 'rdxriad236@gmail.com', '+880', '1632091197', 'Study In Canada', 'Agriculture', '2019-01-17'),
(5, 'Riad', 'Khan', 'rdxriad236@gmail.com', '+880', '1632091197', 'Study In Canada', 'Agriculture', '2019-01-17'),
(6, 'Nusrat', 'Khan', 'rdxriad236@gmail.com', '+880', '01704232782', 'study in asia', 'Agriculture', '2019-01-17'),
(7, 'Nusrat', 'Khan', 'riadkhan2367@gmail.com', '+880', '01704232782', 'Study In UK', 'Health', '2019-01-17'),
(8, 'Nusrat', 'Khan', 'rdxriad236@gmail.com', '+880', '01704232782', 'Study In UK', 'Health', '2019-01-17'),
(9, 'Dip', 'Paul', 'dipto.ingeniumbd@gmail.com', '+88', '1234567890', 'Study In Canada', 'Software Engineering ', '2019-01-24'),
(10, 'riad', 'khan', 'riadkhan2367@gmail.com', '+88', '1234567890', 'study in asia', 'Software Engineering ', '2019-01-24'),
(11, 'mihika', 'Khan', 'rdxriad236@gmail.com', '+880', '1704232782', 'Study in Australia', 'Software Engineering ', '2019-01-27'),
(12, 'vccv', 'dfd', 'riad@gmail.com', '+880', '1704232782', 'Study In UK', 'Health', '2019-02-01'),
(13, 'sojol', 'gg', 'riad@gmail.com', '+880', '1704232782', 'Study In UK', 'Agriculture', '2019-02-01'),
(14, 'sojol', 'gg', 'riad@gmail.com', '+880', '1704232782', 'Study In UK', 'Health', '2019-02-01'),
(15, 'Sadia ', 'Yeasmin', 'rita@gamil.com', '+880', '1704232782', '', '', '2019-02-06'),
(16, 'Sadia ', 'Yeasmin', 'rita@gamil.com', '+880', '1704232782', 'Bangladesh', 'Agriculture', '2019-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` text NOT NULL,
  `cat_des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`, `cat_des`) VALUES
(1, 'Scholarship 256', 'student scholarship'),
(2, 'Discount', '50%');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_country`
--

CREATE TABLE `tbl_country` (
  `id` int(11) NOT NULL,
  `country_name` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_country`
--

INSERT INTO `tbl_country` (`id`, `country_name`, `image`, `create_date`) VALUES
(4, 'Study In UK', '1547556640England-UK-Study-Abroad-Tips.jpg', '2019-01-15'),
(5, 'study in asia', '1547556789images.jpg', '2019-01-15'),
(6, 'Study In Canada', '1547557322modal-img.jpg', '2019-01-15'),
(7, 'Study in Australia', '1547557717modal-img.jpg', '2019-01-15'),
(8, 'Bangladesh', '154927106523519112_323421818061585_1338592250833348713_n.jpg', '2019-02-04'),
(9, 'India', '1549271899India lead-xlarge.jpg', '2019-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`id`, `course_name`, `image`, `date`) VALUES
(2, 'Health', '1547648282maxresdefault.jpg', '2019-01-16'),
(3, 'Agriculture', '154765323161160-8sbe5pbpfw.jpg', '2019-01-16'),
(4, 'IT', '1547680979download.jpg', '2019-01-17'),
(5, 'IELTS', '1547681919maxresdefault.jpg', '2019-01-17'),
(6, 'Software Engineering ', '1547708735IECC2.PNG', '2019-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_details`
--

CREATE TABLE `tbl_course_details` (
  `post_id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_des` text NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_course_details`
--

INSERT INTO `tbl_course_details` (`post_id`, `post_title`, `post_des`, `course_id`, `date`, `image`) VALUES
(5, 'Hons in IT', 'IECC is one of the leading international education consultancy agencies.\r\n Since 2005, we have supported more than 3000 students to get admission \r\nto the Top Ranked British, American, Canadian and Australian \r\nUniversities & Colleges. Students from Bangladesh, India, Pakistan, \r\nChina, Middle East, Africa, South America and Europe have highly \r\nbenefited from our world class services.', 6, '2019-02-05', '1549366782ss.png'),
(8, 'Application paperworks', '<p>Testing version 1</p>', 4, '2019-02-07', '1549536096Carousal-banner-FREE-IELTS.jpg'),
(9, 'Free Admission Counselling', '<p><span style=\"color: rgb(34, 34, 34); font-family: Roboto, sans-serif; font-size: 15.4px; letter-spacing: normal;\">We offer free admission counselling via phone/Skype/direct interview. We provide specialized one-to-one counselling service guiding applicants in selection of the right kind of courses, colleges or universities. You need to know the facts about studying abroad and the best possible options for you. Our expert team is trained to offer students the best advice and assistance keeping in mind individuals aptitude, budget, and country preferences. All you have to do is to give us a call, Skype us or drop into our office and together we will find the best International education opportunities for you.</span><img src=\"data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAABGAAD/4QMvaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzEzOCA3OS4xNTk4MjQsIDIwMTYvMDkvMTQtMDE6MDk6MDEgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo1MUFCRUUyNjc4Q0UxMUU3QTI1RTgzRkExRTMwRDc2NiIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo1MUFCRUUyNzc4Q0UxMUU3QTI1RTgzRkExRTMwRDc2NiI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjUxQUJFRTI0NzhDRTExRTdBMjVFODNGQTFFMzBENzY2IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjUxQUJFRTI1NzhDRTExRTdBMjVFODNGQTFFMzBENzY2Ii8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQABAMDAwMDBAMDBAYEAwQG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\" data-filename=\"alumini-stories.jpg\" style=\"width: 262px; float: right;\" class=\"note-float-right\"><br></p>', 3, '2019-02-07', '1549536292book-ielts.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_des`
--

CREATE TABLE `tbl_des` (
  `post_id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_des` text NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_des`
--

INSERT INTO `tbl_des` (`post_id`, `post_title`, `post_des`, `country_name`, `date`, `image`) VALUES
(6, 'Study in uK', '<p>cvcvbcc bvcbcbvcbcvbcv<br></p>', '0', '2019-02-04', '154926914723519112_323421818061585_1338592250833348713_n.jpg'),
(7, 'Study in uK2', '<p>cbdfcxvbdfbcfvdfdf<br></p>', 'Study In UK', '2019-02-04', '154926920423519112_323421818061585_1338592250833348713_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(11) NOT NULL,
  `event_title` text NOT NULL,
  `event_des` text NOT NULL,
  `event_venue` text NOT NULL,
  `event_date` date NOT NULL,
  `event_time` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `event_title`, `event_des`, `event_venue`, `event_date`, `event_time`, `image`) VALUES
(1, 'Meet an Expert - Student Information Sessions', '<p>Dummy text for event page...Testing dfcvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvzsdfzfddddddddddddddddddddddddddddddddddddddddddddddddddddddddddb</p>', 'Dhaka', '2019-02-22', '3.00PM', '15501586381547680979download.jpg'),
(3, 'gg', '<p>sdfsdfsf</p>', 'comilla', '2019-02-09', '3.00PM', '15501556961549400525find-a-university.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `filename` varchar(500) NOT NULL,
  `uploaded_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_file`
--

INSERT INTO `tbl_file` (`id`, `title`, `image`, `filename`, `uploaded_date`) VALUES
(1, 'FB Login', '', '1549455379FacebookLogin.zip', '2019-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `caption` text NOT NULL,
  `date` date NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `caption`, `date`, `image`) VALUES
(8, 'New image', '2019-01-14', '1547470794modal-img.jpg'),
(9, 'gallery', '2019-01-16', '1547589771England-UK-Study-Abroad-Tips.jpg'),
(10, 'Logo', '2019-01-17', '1547708533logo1.PNG'),
(11, 'Beautiful ', '2019-01-20', '1547981398images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `post_title` text NOT NULL,
  `post_des` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `post_category` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_des`, `image`, `admin_id`, `post_category`, `date`) VALUES
(13, 'math', '<p>fdgfdfvcfvdfbdbdb</p>', '', 26, 'Scholarship 256', '2019-01-15'),
(15, 'Application paperworks', '<p>this is dummy text for testing article section. if it ok then we will move into next section. stay with us we will complete as soon as possible.thank you&nbsp;<img src=\"data:image/jpeg;base64,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\" data-filename=\"1549383537images.jpg\" style=\"width: 242.577px; float: left; height: 161.416px;\" class=\"note-float-left\"></p>', '15500097771549453673University-rankings-MegaMenu-262x195-.jpg', 29, 'Choose an category', '2019-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `discription` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `name`, `discription`, `image`, `date`) VALUES
(7, 'Free Admission Counselling', 'We offer free admission counselling via phone/Skype/direct interview. We provide specialized one-to-one counselling service guiding applicants in selection of the right kind of courses, colleges or universities. You need to know the facts about studying abroad and the best possible options for you. Our expert team is trained to offer students the best advice and assistance keeping in mind individuals aptitude, budget, and country preferences. All you have to do is to give us a call, Skype us or drop into our office and together we will find the best International education opportunities for you.', '1549452951fid-a-course2.jpg', '2019-02-06'),
(8, 'Application paperworks', 'We also provide this service too', '1549453796find-a-university.jpg', '2019-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `number` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fname`, `lname`, `number`, `email`, `password`, `date`) VALUES
(1, 'riad', 'khan', '01704232782', 'rdxriad236@gmail.com', 'c118514945f46138381e07f7005e2a', '0000-00-00'),
(2, 'mihika', 'khan', '01632091197', 'rita@gamil.com', '309f73c2cca989517f61f7c79e215c', '0000-00-00'),
(10, 'sojol', 'khan', '01704232782', 'riadkhan2367@gmail.com', '$2y$10$BiPuQreLEExdUh03hoy1sOJhiLSz7o2X.h3MeMP9ZquiABRbng5l2', '0000-00-00'),
(11, 'Md', 'Salim', '01704232782', 'salim@gmail.com', '$2y$10$BFblc5M1AQeoXWXXE9XsOeXG8hWX0/B432BSW2gHidhTTd4ae0x7W', '2019-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `ins` text NOT NULL,
  `education` text NOT NULL,
  `country` varchar(100) NOT NULL,
  `discription` text NOT NULL,
  `image` varchar(350) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `ins`, `education`, `country`, `discription`, `image`, `date`) VALUES
(1, 'Riad', 'Daffodil', 'BSC IN IT', '0', 'Nice one GG', '1549193545hacker.jpg', '2019-02-03'),
(2, 'Riad Khan', 'Daffodil INT University', 'BSC IN IT', 'Bangladesh', 'Excellent services offered By IECC. I got some really great advises regarding Universities, per-departure, visa application etc. Thank you IECC for giving me this opportunity.GOD Bless You ', '154919373523519112_323421818061585_1338592250833348713_n.jpg', '2019-02-03'),
(3, 'Nusrat', 'Eden College', 'BSC', 'Ban', 'sdsfsdfsdfs', '154919526350324119_2189667874685310_1429202616021155840_n.jpg', '2019-02-03'),
(4, 'Rita', 'Daffodil INT University', 'BSC IN IT', 'Ban', 'hfgcbxvfdgfg', '1549195292modal-img.jpg', '2019-02-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_country`
--
ALTER TABLE `tbl_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_course_details`
--
ALTER TABLE `tbl_course_details`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_des`
--
ALTER TABLE `tbl_des`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_apply`
--
ALTER TABLE `tbl_apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_country`
--
ALTER TABLE `tbl_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_course_details`
--
ALTER TABLE `tbl_course_details`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_des`
--
ALTER TABLE `tbl_des`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
