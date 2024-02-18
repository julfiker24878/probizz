-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 28, 2022 at 03:59 AM
-- Server version: 10.3.34-MariaDB-log-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `probizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `title_red` varchar(100) NOT NULL,
  `title_blue` varchar(100) NOT NULL,
  `des` text NOT NULL,
  `about_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `sub_title`, `title_red`, `title_blue`, `des`, `about_image`) VALUES
(1, 'Who We Are', 'A Little Brief', 'About Us', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed aliquam adipisci rem, natus similique vitae.<br><br>\r\n\r\nlibero temporibus modi commodi molestias perspiciatis, enim dolorum! Magni tenetur error cum quaerat iste, dolorum explicabo fugiat! Pariatur rerum impedit assumenda at deleniti tempore voluptate, itaque modi et amet magni autem.<br><br>\r\n\r\nlibero temporibus modi commodi molestias perspiciatis, enim dolorum! Magni tenetur error cum quaerat iste, dolorum explicabo fugiat! Pariatur rerum impedit assumenda at deleniti tempore voluptate, itaque modi et amet magni autem.', 'about1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `btn1_text` varchar(100) NOT NULL,
  `btn1_link` varchar(255) NOT NULL,
  `btn2_text` varchar(100) NOT NULL,
  `btn2_link` varchar(255) NOT NULL,
  `banner_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `heading`, `description`, `btn1_text`, `btn1_link`, `btn2_text`, `btn2_link`, `banner_image`) VALUES
(1, 'We Love Make Things Amazing', 'Maecenas class semper class semper sollicitudin lectus lorem iaculis imperdiet aliquam vehicula tempor auctor curabitur pede aenean ornare.', 'About Us', '#about', 'Contact', '#contact', 'banner1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `icon`, `title`) VALUES
(1, 'fas fa-location-arrow', '23/4 Mount Avenue<br> New York, USA'),
(2, 'fas fa-envelope', 'support@email.com<br> example@support.com'),
(3, 'fas fa-mobile', '+011 12345 67890<br> +022 12345 67890'),
(4, 'fas fa-phone', '+011 12345 67890<br> +022 12345 67890');

-- --------------------------------------------------------

--
-- Table structure for table `contact_banner`
--

CREATE TABLE `contact_banner` (
  `id` int(11) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `btn_text` varchar(100) NOT NULL,
  `contact_banner_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_banner`
--

INSERT INTO `contact_banner` (`id`, `title1`, `title2`, `btn_text`, `contact_banner_image`) VALUES
(1, 'We Provide All Kind Of Business Services.', 'Do You Need Any Service ?', 'Contact Now', 'contact_banner1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `submitted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_header`
--

CREATE TABLE `contact_header` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `title_red` varchar(100) NOT NULL,
  `title_blue` varchar(100) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_header`
--

INSERT INTO `contact_header` (`id`, `sub_title`, `title_red`, `title_blue`, `des`) VALUES
(1, 'Need Any Help ?', 'CONTACT', 'WITH US', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum autem similique obcaecati non magni rerum maxime Officia.');

-- --------------------------------------------------------

--
-- Table structure for table `counter_image`
--

CREATE TABLE `counter_image` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter_image`
--

INSERT INTO `counter_image` (`id`, `name`, `image`) VALUES
(2, 'Image Background', 'counter_image2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `counter_text`
--

CREATE TABLE `counter_text` (
  `id` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `num` varchar(50) NOT NULL,
  `text` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counter_text`
--

INSERT INTO `counter_text` (`id`, `icon`, `num`, `text`) VALUES
(1, 'fas fa-users', '1,280', 'Total Client'),
(2, 'far fa-star', '1,020', '5 Star Rating'),
(3, 'fas fa-chess-pawn', '560', 'Won Award'),
(4, 'fas fa-flag-checkered', '1,550', 'Complete Project');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(11) NOT NULL,
  `choose_reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `choose_reason`) VALUES
(1, ' High Quality Service'),
(2, ' No Extra Or Hidden Charge'),
(3, ' 100% Satisfiction Gurantee'),
(4, ' All Kinds Of Business Support');

-- --------------------------------------------------------

--
-- Table structure for table `feature_header`
--

CREATE TABLE `feature_header` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `title_red` varchar(100) NOT NULL,
  `title_blue` varchar(100) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature_header`
--

INSERT INTO `feature_header` (`id`, `sub_title`, `title_red`, `title_blue`, `des`) VALUES
(1, 'Why Choose Our Company ?', 'We Are Best', 'Service Provider Company Of The Industry', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum labore minus dolore ab itaque animi sit, quae non quas architecto quaerat fugit in temporibus sequi laboriosam, repellat tempore consequuntur voluptatem.');

-- --------------------------------------------------------

--
-- Table structure for table `feature_image`
--

CREATE TABLE `feature_image` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature_image`
--

INSERT INTO `feature_image` (`id`, `name`, `image`) VALUES
(1, 'Image One', 'feature_image1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feature_right`
--

CREATE TABLE `feature_right` (
  `id` int(11) NOT NULL,
  `choose_reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature_right`
--

INSERT INTO `feature_right` (`id`, `choose_reason`) VALUES
(1, ' Dedicated Customer Support'),
(2, ' Great and Effective Tips'),
(3, ' Special Promotion Technique'),
(4, ' 24/7 Dedicated Support');

-- --------------------------------------------------------

--
-- Table structure for table `footer_credit`
--

CREATE TABLE `footer_credit` (
  `id` int(11) NOT NULL,
  `credit` varchar(255) NOT NULL,
  `link_text` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_credit`
--

INSERT INTO `footer_credit` (`id`, `credit`, `link_text`, `link`) VALUES
(1, 'Copy 2018. All Rights Reserved By', 'Probizz', '#');

-- --------------------------------------------------------

--
-- Table structure for table `important_links`
--

CREATE TABLE `important_links` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `important_links`
--

INSERT INTO `important_links` (`id`, `title`, `link`) VALUES
(1, 'Terms and Condition', 'terms-and-conditions.php'),
(2, 'Our Policy', 'privacy-policy.php'),
(3, 'Copyright Notice', 'notice.php'),
(4, 'Our Best Services', 'best-services.php'),
(5, 'Product Promotion Tips', 'promotion-tips.php'),
(6, 'Business Financing', 'business-financing.php');

-- --------------------------------------------------------

--
-- Table structure for table `latest_blog`
--

CREATE TABLE `latest_blog` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `banner_image` varchar(100) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latest_blog`
--

INSERT INTO `latest_blog` (`id`, `heading`, `description`, `banner_image`, `created_at`) VALUES
(2, 'Group Discussion Benefits', 'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Alerts are available for any length of text, as well as an optional close button. For proper styling, use one of the eight required contextual classes (e.g., .alert-success). For inline dismissal, use the alerts JavaScript plugin.', 'banner2.jpg', '2022-01-03'),
(3, ' Business Development', 'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Alerts are available for any length of text, as well as an optional close button. For proper styling, use one of the eight required contextual classes (e.g., .alert-success). For inline dismissal, use the alerts JavaScript plugin.', 'banner3.jpg', '2022-01-03'),
(4, 'Product Promotion Tips', 'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Alerts are available for any length of text, as well as an optional close button. For proper styling, use one of the eight required contextual classes (e.g., .alert-success). For inline dismissal, use the alerts JavaScript plugin.', 'banner4.jpg', '2022-01-03'),
(5, 'Effective Anlysis Ways', 'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Alerts are available for any length of text, as well as an optional close button. For proper styling, use one of the eight required contextual classes (e.g., .alert-success). For inline dismissal, use the alerts JavaScript plugin.', 'banner5.jpg', '2022-01-03'),
(6, 'Sample Post', 'Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Alerts are available for any length of text, as well as an optional close button. For proper styling, use one of the eight required contextual classes (e.g., .alert-success). For inline dismissal, use the alerts JavaScript plugin.', 'banner6.png', '2022-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `latest_blog_header`
--

CREATE TABLE `latest_blog_header` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `title_red` varchar(100) NOT NULL,
  `title_blue` varchar(100) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latest_blog_header`
--

INSERT INTO `latest_blog_header` (`id`, `sub_title`, `title_red`, `title_blue`, `des`) VALUES
(1, 'Up To Date', 'OUR', 'LATEST BLOG', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum autem similique obcaecati non magni rerum maxime Officia.');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo_text` varchar(100) NOT NULL,
  `logo_image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `logo_text`, `logo_image`) VALUES
(3, 'Probizz', 'logo3.png');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`) VALUES
(1, 'about', '#about'),
(2, 'services', '#services'),
(3, 'portfolio', '#portfolios'),
(4, 'pricing', '#pricing'),
(5, 'our team', '#team'),
(6, 'contact', '#contact');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_header`
--

CREATE TABLE `portfolio_header` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `title_red` varchar(100) NOT NULL,
  `title_blue` varchar(100) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_header`
--

INSERT INTO `portfolio_header` (`id`, `sub_title`, `title_red`, `title_blue`, `des`) VALUES
(1, 'Work Sample', 'OUR', 'PORTFOLIO', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum autem similique obcaecati non magni rerum maxime Officia.');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_image`
--

CREATE TABLE `portfolio_image` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `all_selected` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_image`
--

INSERT INTO `portfolio_image` (`id`, `image`, `all_selected`) VALUES
(1, 'portfolio_image1.jpg', 'joy'),
(2, 'portfolio_image2.jpg', 'shobuj'),
(3, 'portfolio_image3.jpg', 'mahbubur'),
(4, 'portfolio_image4.jpg', 'ashraf'),
(5, 'portfolio_image5.jpg', 'abdullah'),
(6, 'portfolio_image6.jpg', 'israt'),
(7, 'portfolio_image7.jpg', 'joy'),
(8, 'portfolio_image8.jpg', 'shobuj'),
(9, 'portfolio_image9.jpg', 'mahbubur'),
(10, 'portfolio_image10.jpg', 'ashraf'),
(11, 'portfolio_image11.jpg', 'abdullah'),
(12, 'portfolio_image12.jpg', 'israt'),
(13, 'portfolio_image13.jpg', 'ashraf abdullah israt'),
(14, 'portfolio_image14.jpg', 'joy'),
(15, 'portfolio_image15.jpg', 'shobuj'),
(16, 'portfolio_image16.jpg', 'mahbubur'),
(17, 'portfolio_image17.jpg', 'ashraf'),
(18, 'portfolio_image18.jpg', 'abdullah'),
(19, 'portfolio_image19.jpg', 'israt'),
(20, 'portfolio_image20.jpg', 'ashraf abdullah israt');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_tabs`
--

CREATE TABLE `portfolio_tabs` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio_tabs`
--

INSERT INTO `portfolio_tabs` (`id`, `title`) VALUES
(1, 'joy'),
(2, 'shobuj'),
(3, 'mahbubur'),
(4, 'ashraf'),
(5, 'abdullah'),
(7, 'israt');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_header`
--

CREATE TABLE `pricing_header` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `title_red` varchar(100) NOT NULL,
  `title_blue` varchar(100) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing_header`
--

INSERT INTO `pricing_header` (`id`, `sub_title`, `title_red`, `title_blue`, `des`) VALUES
(1, 'Choose Best One', 'OUR', 'PRICING PLAN', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum autem similique obcaecati non magni rerum maxime Officia.');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_items`
--

CREATE TABLE `pricing_items` (
  `id` int(11) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing_items`
--

INSERT INTO `pricing_items` (`id`, `package_name`, `price`) VALUES
(1, 'Basic', '12.99'),
(2, 'Standard', '14.99'),
(3, 'Premium', '19.99');

-- --------------------------------------------------------

--
-- Table structure for table `pricing_lists`
--

CREATE TABLE `pricing_lists` (
  `id` int(11) NOT NULL,
  `package_id` varchar(100) NOT NULL,
  `list` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricing_lists`
--

INSERT INTO `pricing_lists` (`id`, `package_id`, `list`) VALUES
(1, '1', 'PDF Reports'),
(3, '2', 'Basic Quota'),
(4, '1', 'Basic Quota'),
(5, '1', 'Five Brand Monitors'),
(6, '1', '24/7 Free Support'),
(7, '1', 'Private Forums'),
(8, '2', 'PDF Reports'),
(10, '2', '24/7 Free Support 2'),
(11, '2', 'Private Forums 2'),
(12, '3', 'PDF Reports 3'),
(13, '3', 'Basic Quota'),
(14, '3', 'Five Brand Monitors 3'),
(15, '3', '24/7 Free Support 3'),
(16, '3', 'Private Forums 3'),
(18, '2', 'Five Brand Monitors 2');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `des`) VALUES
(1, 'fas fa-handshake', 'Branding', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.'),
(2, 'fab fa-html5', 'HTML5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.'),
(3, 'fab fa-css3-alt', 'CSS3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.'),
(4, 'fab fa-js-square', 'Javascript', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.'),
(6, 'fab fa-python', 'Python', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.'),
(7, 'fab fa-node', 'Node JS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.'),
(8, 'fab fa-react', 'React JS', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.');

-- --------------------------------------------------------

--
-- Table structure for table `services_header`
--

CREATE TABLE `services_header` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `title_red` varchar(100) NOT NULL,
  `title_blue` varchar(100) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services_header`
--

INSERT INTO `services_header` (`id`, `sub_title`, `title_red`, `title_blue`, `des`) VALUES
(1, 'What We Do', 'OUR', 'SERVICES', 'We work with you to build comprehensive, thoughtful, and purpose-driven identities and experiences. Let’s talk about job.');

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` int(11) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_accounts`
--

INSERT INTO `social_accounts` (`id`, `account_name`, `icon`, `link`, `status`) VALUES
(1, 'Facebook', 'fab fa-facebook-square', '#', 1),
(2, 'Twitter', 'fab fa-twitter-square', '#', 1),
(3, 'Pinterest', 'fab fa-pinterest-square', '#', 1),
(4, 'Linkedin', 'fab fa-linkedin', '#', 1),
(5, 'Instagram', 'fab fa-instagram-square', '#', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `subscribed_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe_header`
--

CREATE TABLE `subscribe_header` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `title_red` varchar(100) NOT NULL,
  `title_blue` varchar(100) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe_header`
--

INSERT INTO `subscribe_header` (`id`, `sub_title`, `title_red`, `title_blue`, `des`) VALUES
(1, 'Get Touch With Us', 'SUBSCRIBE', 'NEWSLETTER', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum autem similique obcaecati non magni rerum maxime Officia.');

-- --------------------------------------------------------

--
-- Table structure for table `team_accounts`
--

CREATE TABLE `team_accounts` (
  `id` int(11) NOT NULL,
  `member_id` varchar(20) NOT NULL,
  `account_name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_accounts`
--

INSERT INTO `team_accounts` (`id`, `member_id`, `account_name`, `icon`, `link`) VALUES
(1, '3', 'Facebook', 'fab fa-facebook-square', '#'),
(2, '3', 'Twitter', 'fab fa-twitter-square', '#'),
(3, '3', 'Pinterest', 'fab fa-pinterest-square', '#'),
(4, '3', 'Linkedin', 'fab fa-linkedin', '#'),
(6, '1', 'Facebook', 'fab fa-facebook-square', '#'),
(7, '1', 'Twitter', 'fab fa-twitter-square', '#'),
(8, '1', 'Linkedin', 'fab fa-linkedin', '#'),
(9, '1', 'Pinterest', 'fab fa-pinterest-square', '#'),
(10, '2', 'Facebook', 'fab fa-facebook-square', '#'),
(11, '2', 'Twitter', 'fab fa-twitter-square', '#'),
(12, '2', 'Pinterest', 'fab fa-pinterest-square', '#'),
(13, '2', 'Linkedin', 'fab fa-linkedin', '#'),
(14, '4', 'Facebook', 'fab fa-facebook-square', '#'),
(15, '4', 'Twitter', 'fab fa-twitter-square', '#'),
(16, '4', 'Linkedin', 'fab fa-linkedin', '#'),
(17, '4', 'Pinterest', 'fab fa-pinterest-square', '#'),
(18, '5', 'Facebook', 'fab fa-facebook-square', '#'),
(19, '5', 'Twitter', 'fab fa-twitter-square', '#'),
(20, '5', 'Linkedin', 'fab fa-linkedin', '#'),
(21, '5', 'Pinterest', 'fab fa-pinterest-square', '#'),
(22, '6', 'Facebook', 'fab fa-facebook-square', '#'),
(23, '6', 'Twitter', 'fab fa-twitter-square', '#'),
(24, '6', 'Linkedin', 'fab fa-linkedin', '#'),
(25, '6', 'Pinterest', 'fab fa-pinterest-square', '#'),
(26, '7', 'Facebook', 'fab fa-facebook-square', '#'),
(30, '7', 'Twitter', 'fab fa-twitter-square', '#'),
(31, '7', 'Linkedin', 'fab fa-linkedin', '#'),
(32, '7', 'Pinterest', 'fab fa-pinterest-square', '#');

-- --------------------------------------------------------

--
-- Table structure for table `team_header`
--

CREATE TABLE `team_header` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `title_red` varchar(100) NOT NULL,
  `title_blue` varchar(100) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_header`
--

INSERT INTO `team_header` (`id`, `sub_title`, `title_red`, `title_blue`, `des`) VALUES
(0, 'We are expert', 'MEET OUR', 'CONSULTANT', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum autem similique obcaecati non magni rerum maxime Officia.');

-- --------------------------------------------------------

--
-- Table structure for table `team_member`
--

CREATE TABLE `team_member` (
  `id` int(11) NOT NULL,
  `nick_name` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `profile_image` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_member`
--

INSERT INTO `team_member` (`id`, `nick_name`, `first_name`, `last_name`, `designation`, `profile_image`, `status`) VALUES
(1, 'Joy', 'Joy', 'Chowdhury', 'Member 1', 'team_member1.jpg', 1),
(2, 'Shobuj', 'Shojib', 'Ahmed', 'Member 2', 'team_member2.jpg', 1),
(3, 'Mahbubur', 'Rokon', 'Uddin', 'Member 3', 'team_member3.jpg', 1),
(4, 'Ashraf', 'Md. Ashraf', 'Hossain', 'Member 4', 'team_member4.jpeg', 1),
(5, 'Abir', 'Asaf', 'Abir', 'Member 5', 'team_member5.jpg', 1),
(6, 'Abdullah', 'Md', 'Abdullah', 'Member 6', 'team_member6.jpg', 1),
(7, 'Israt', 'Israt Jahan', 'Snigdha', 'Member 7', 'team_member7.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `review` int(11) NOT NULL DEFAULT 0,
  `comment` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `profile_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `review`, `comment`, `name`, `designation`, `profile_image`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.', 'Henry Smith', 'Developer', 'testimonial1.jpg'),
(2, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.', 'Helen', 'Marketer', 'testimonial2.jpg'),
(3, 4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.', 'Aigars Silkalns', 'CEO of Colorlib', 'testimonial3.jpg'),
(4, 5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.', 'Jennifer', 'Developer', 'testimonial4.jpg'),
(6, 0, 'Hello World!', 'Guest', 'Designer', 'testimonial6.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_header`
--

CREATE TABLE `testimonial_header` (
  `id` int(11) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `title_red` varchar(100) NOT NULL,
  `title_blue` varchar(100) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial_header`
--

INSERT INTO `testimonial_header` (`id`, `sub_title`, `title_red`, `title_blue`, `des`) VALUES
(1, 'Our Client Reviews', 'OUR', 'TESTIMONIALS', '');

-- --------------------------------------------------------

--
-- Table structure for table `three_col`
--

CREATE TABLE `three_col` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `title_red` varchar(100) NOT NULL,
  `title_blue` varchar(100) NOT NULL,
  `des` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `three_col`
--

INSERT INTO `three_col` (`id`, `icon`, `title_red`, `title_blue`, `des`, `status`) VALUES
(1, 'fas fa-handshake', 'Great', 'Strategy', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.', 1),
(2, 'fab fa-accessible-icon', 'Effective', 'Marketing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.', 1),
(3, 'fab fa-adversal', 'Best', 'Promotion', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.', 1),
(4, 'fas fa-cat', 'Hello', 'World', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat id ex, facilis provident delectus, tempore.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `top_menu`
--

CREATE TABLE `top_menu` (
  `id` int(11) NOT NULL,
  `number` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `top_menu`
--

INSERT INTO `top_menu` (`id`, `number`, `email`) VALUES
(1, ' +1 12345 67890', 'support@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `password` varchar(100) NOT NULL,
  `registered_at` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `profile_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `registered_at`, `status`, `profile_image`) VALUES
(1, 'Julfiker Ali', 'joy@chowdhury.com', 1, '$2y$10$dYSEKbi62/N3X.7Qw54p3eBGGd7/rcMQ0nxsxVwDzEzPSnn4Q4d02', '2021-12-18 09:30:41', 0, '1.jpg'),
(2, 'Shobuj Ahmed', 'shobuj@ahmed.com', 2, '$2y$10$dxI.ivO5AYS34mRwQYAPseC5TnUxg04cwnU20FbkqPXYd8zDo6bjW', '2021-12-18 09:31:22', 0, '2.jpg'),
(3, 'Mahbubur Rahman', 'mahbubur@rahman.com', 2, '$2y$10$GecJ.YyVo47zU5nCVONtfODoXdsdQG8aXTppBM5MLPabmkVuPrtc6', '2021-12-18 09:31:47', 0, '3.jpg'),
(4, 'Ashraf Hossain', 'ashraf@hossain.com', 3, '$2y$10$Vn9rS8FlYtsS60cUqUDmd.Z5zDseU5ZawyjXXYdh6UsGzsqE4UTUS', '2021-12-18 09:32:21', 0, '4.jpeg'),
(5, 'Asaf Abir', 'asaf@abir.com', 3, '$2y$10$xuMldZXrFo02FAFp3EfIaOTnXszcJUgFrh52HVkjLqn/IRY5sQnr.', '2021-12-18 09:32:42', 0, '5.jpg'),
(6, 'MD. Abdullah', 'abdullah@gmail.com', 3, '$2y$10$IlYD2.zerVrzKvc2YrxXZeVDXnFVT92PJie3dQOF8ngZdWG4ZolRK', '2021-12-18 09:33:07', 0, '6.jpg'),
(7, 'Israt Jahan Snigdha', 'israt@jahan.com', 0, '$2y$10$YGgA5UhiIWbxH2yTyfwr/Oe27pfrxkQgj6laBD/KmGnCoiB8jtgT2', '2021-12-18 09:33:29', 0, '7.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_banner`
--
ALTER TABLE `contact_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_header`
--
ALTER TABLE `contact_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter_image`
--
ALTER TABLE `counter_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter_text`
--
ALTER TABLE `counter_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_header`
--
ALTER TABLE `feature_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_image`
--
ALTER TABLE `feature_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature_right`
--
ALTER TABLE `feature_right`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_credit`
--
ALTER TABLE `footer_credit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `important_links`
--
ALTER TABLE `important_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_blog`
--
ALTER TABLE `latest_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latest_blog_header`
--
ALTER TABLE `latest_blog_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_header`
--
ALTER TABLE `portfolio_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_image`
--
ALTER TABLE `portfolio_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio_tabs`
--
ALTER TABLE `portfolio_tabs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_header`
--
ALTER TABLE `pricing_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_items`
--
ALTER TABLE `pricing_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing_lists`
--
ALTER TABLE `pricing_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_header`
--
ALTER TABLE `services_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe_header`
--
ALTER TABLE `subscribe_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_accounts`
--
ALTER TABLE `team_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_member`
--
ALTER TABLE `team_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_header`
--
ALTER TABLE `testimonial_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `three_col`
--
ALTER TABLE `three_col`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_menu`
--
ALTER TABLE `top_menu`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_banner`
--
ALTER TABLE `contact_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_header`
--
ALTER TABLE `contact_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counter_image`
--
ALTER TABLE `counter_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `counter_text`
--
ALTER TABLE `counter_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feature_header`
--
ALTER TABLE `feature_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feature_image`
--
ALTER TABLE `feature_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feature_right`
--
ALTER TABLE `feature_right`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `footer_credit`
--
ALTER TABLE `footer_credit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `important_links`
--
ALTER TABLE `important_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `latest_blog`
--
ALTER TABLE `latest_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `latest_blog_header`
--
ALTER TABLE `latest_blog_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio_header`
--
ALTER TABLE `portfolio_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolio_image`
--
ALTER TABLE `portfolio_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `portfolio_tabs`
--
ALTER TABLE `portfolio_tabs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pricing_header`
--
ALTER TABLE `pricing_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pricing_items`
--
ALTER TABLE `pricing_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pricing_lists`
--
ALTER TABLE `pricing_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services_header`
--
ALTER TABLE `services_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribe_header`
--
ALTER TABLE `subscribe_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_accounts`
--
ALTER TABLE `team_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `team_member`
--
ALTER TABLE `team_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonial_header`
--
ALTER TABLE `testimonial_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `three_col`
--
ALTER TABLE `three_col`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `top_menu`
--
ALTER TABLE `top_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
