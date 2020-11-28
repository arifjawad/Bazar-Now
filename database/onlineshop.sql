-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 07:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getcat` (IN `cid` INT)  SELECT * FROM categories WHERE cat_id=cid$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(300) NOT NULL,
  `admin_password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'admin', 'admin@gmail.com', '25f9e794323b453885f5181f1b624d0b');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'FnV'),
(2, 'Ispahani'),
(3, 'Nestle'),
(4, 'Pepsi'),
(5, 'MnF'),
(6, 'Catbery'),
(7, 'Bangla Dairy'),
(8, 'Kazi Farm'),
(9, 'hosen\r\n'),
(10, 'Pran\r\n'),
(11, 'Danish'),
(12, 'Wonder'),
(13, 'Organic'),
(14, 'Basundhara\r\n'),
(15, 'Ahmed\r\n'),
(16, 'Foster\r\n'),
(17, 'Quaker\r\n'),
(18, 'Chasi'),
(19, 'Pran'),
(20, 'Bashundahra'),
(21, 'Rupchanda'),
(22, 'ACI'),
(23, 'TEER'),
(24, 'Radhuni'),
(25, 'Fruits & Veggies'),
(26, 'Meat & Fish'),
(27, 'Mirinda'),
(28, 'Coco Cola'),
(29, 'Sprite'),
(30, 'Tropicana'),
(31, 'Kazi Farms'),
(32, 'Breads'),
(33, 'Pedigree');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(6, 26, '::1', 4, 1),
(9, 10, '::1', 7, 1),
(10, 11, '::1', 7, 1),
(11, 45, '::1', 7, 1),
(44, 5, '::1', 3, 0),
(46, 2, '::1', 3, 0),
(49, 60, '::1', 8, 1),
(50, 61, '::1', 8, 1),
(51, 1, '::1', 8, 1),
(52, 5, '::1', 9, 1),
(53, 2, '::1', 14, 1),
(55, 5, '::1', 14, 1),
(56, 1, '::1', 9, 1),
(57, 2, '::1', 9, 1),
(71, 61, '127.0.0.1', -1, 1),
(157, 74, '::1', -1, 1),
(158, 2, '::1', -1, 1),
(159, 3, '::1', -1, 1),
(160, 72, '::1', -1, 1),
(161, 6, '::1', -1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Fruits and Vegetables'),
(2, 'Baverages'),
(3, 'Meet and Fish'),
(4, 'Snaks'),
(5, 'Dairy'),
(6, 'Frozen and Canned'),
(7, 'Bread and Bakery\r\n'),
(8, 'Baking Needs'),
(9, 'Cooking Needs'),
(10, 'Diabetic foods'),
(11, 'Cooking Items'),
(12, 'Fish & Meats'),
(13, 'Frozen Foods'),
(14, 'Pet');

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 1, 0, 'dsfsf', '2020-04-22 14:15:14', 1),
(2, 1, 0, 'ds', '2020-04-22 14:46:08', 1),
(3, 1, 0, 'dsds', '2020-04-22 15:11:30', 1),
(4, 1, 0, 'dsds', '2020-04-22 15:11:32', 1),
(5, 1, 0, 'dsds', '2020-04-22 15:11:32', 1),
(6, 1, 0, 'dsds', '2020-04-22 15:11:33', 1),
(7, 1, 0, '', '2020-04-22 15:12:27', 1),
(8, 1, 0, '', '2020-04-22 15:22:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_person`
--

CREATE TABLE `delivery_person` (
  `delivery_person_id` int(100) NOT NULL,
  `delivery_person_name` varchar(100) NOT NULL,
  `delivery_person_email` varchar(100) NOT NULL,
  `delivery_person_nid` int(100) NOT NULL,
  `delivery_person_photo` varchar(100) NOT NULL,
  `delivery_person_phone` int(100) NOT NULL,
  `delivery_person_password` varchar(100) NOT NULL,
  `delivery_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_person`
--

INSERT INTO `delivery_person` (`delivery_person_id`, `delivery_person_name`, `delivery_person_email`, `delivery_person_nid`, `delivery_person_photo`, `delivery_person_phone`, `delivery_person_password`, `delivery_id`) VALUES
(1, 'diti', 'diti@gmail.com', 123456, 'diti.jpg', 1234567890, '2612', 1);

-- --------------------------------------------------------

--
-- Table structure for table `email_info`
--

CREATE TABLE `email_info` (
  `email_id` int(100) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_info`
--

INSERT INTO `email_info` (`email_id`, `email`) VALUES
(3, 'admin@gmail.com'),
(4, 'puneethreddy951@gmail.com'),
(5, 'puneethreddy@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`) VALUES
(2, 14, 2, 1, '07M47684BS5725041', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `orders_drawer`
--

CREATE TABLE `orders_drawer` (
  `order_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(10) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` varchar(20) NOT NULL,
  `expdate` varchar(255) NOT NULL,
  `prod_count` int(15) DEFAULT NULL,
  `total_amt` int(15) DEFAULT NULL,
  `cvv` int(5) NOT NULL,
  `completed` varchar(100) NOT NULL,
  `picked_by_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_drawer`
--

INSERT INTO `orders_drawer` (`order_id`, `user_id`, `f_name`, `email`, `address`, `city`, `state`, `zip`, `cardname`, `cardnumber`, `expdate`, `prod_count`, `total_amt`, `cvv`, `completed`, `picked_by_id`) VALUES
(4, 0, '', '', '', '', '', 0, '', '', '', 0, 0, 0, '', 0),
(5, 0, '', '', '', '', '', 0, '', '', '', 0, 0, 0, '', 0),
(6, 0, '', '', '', '', '', 0, '', '', '', 0, 0, 0, '', 0),
(12, 0, '', '', '', '', '', 0, '', '', '', 0, 0, 0, 'completed', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders_info`
--

CREATE TABLE `orders_info` (
  `order_id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(10) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` varchar(20) NOT NULL,
  `expdate` varchar(255) NOT NULL,
  `prod_count` int(15) DEFAULT NULL,
  `total_amt` int(15) DEFAULT NULL,
  `cvv` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_info`
--

INSERT INTO `orders_info` (`order_id`, `user_id`, `f_name`, `email`, `address`, `city`, `state`, `zip`, `cardname`, `cardnumber`, `expdate`, `prod_count`, `total_amt`, `cvv`) VALUES
(1, 12, 'Puneeth', 'puneethreddy951@gmail.com', 'Bangalore, Kumbalagodu, Karnataka', 'Bangalore', 'Karnataka', 560074, 'pokjhgfcxc', '4321 2345 6788 7654', '12/90', 3, 77000, 1234),
(2, 12, 'puneeth Reddy', 'puneethreddy951@gmail.com', '123456788', 'Bangalore', '', 0, 'pokjhgfcxc', '4321 2345 6788 7654', '12/90', 1, 55, 1234),
(3, 12, 'puneeth Reddy', 'puneethreddy951@gmail.com', '123456788', 'Bangalore', 'dhaka', 560074, 'pokjhgfcxc', '4561 2345 6789 1231', '12/21', 1, 55, 1234),
(4, 12, 'puneeth Reddy', 'puneethreddy951@gmail.com', '123456788', 'Bangalore', 'dhaka', 560074, 'pokjhgfcxc', '4561 2586 2145 1234', '12/29', 1, 55, 1234),
(5, 12, 'puneeth Reddy', 'puneethreddy951@gmail.com', '123456788', 'Bangalore', 'dhaka', 560074, 'pokjhgfcxc', '4567 1234 4568', '12/95', 1, 175, 4567),
(6, 12, 'puneeth Reddy', 'puneethreddy951@gmail.com', '123456788', 'bangalore', 'dhaka', 560074, 'pokjhgfcxc', '4567 1234 4567', '12/96', 1, 55, 1234),
(7, 12, 'puneeth Reddy', 'puneethreddy951@gmail.com', '123456788', 'Bangalore', 'dhaka', 560074, 'pokjhgfcxc', '123456781234', '12/96', 1, 55, 1234);

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `order_pro_id` int(10) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(15) DEFAULT NULL,
  `amt` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`order_pro_id`, `order_id`, `product_id`, `qty`, `amt`) VALUES
(73, 1, 1, 1, 5000),
(74, 1, 4, 2, 64000),
(75, 1, 8, 1, 40000),
(91, 2, 74, 1, 55),
(92, 3, 74, 1, 55),
(93, 4, 74, 1, 55),
(94, 5, 2, 1, 175),
(95, 6, 74, 1, 55),
(96, 7, 74, 1, 55);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 1, 'Apple', 102, 'Fruits', 'p1.jpg', 'Apple'),
(2, 1, 1, 'Orange', 175, 'fruits', 'p2.jpg', 'Orange'),
(3, 1, 1, 'grape', 95, 'fruits\r\n', 'p3.jpg', 'Grape'),
(4, 1, 1, 'Banana', 62, 'Fruits', 'p4.jpg', 'Banana'),
(5, 1, 1, 'Mango', 180, 'fruits', 'p5.jpg', 'Mango'),
(6, 1, 1, 'Potato', 31, 'Vegetables', 'p6.jpg', 'Potato'),
(7, 1, 1, 'Onion', 80, 'Vegetable', 'p7.jpg', 'Onion'),
(8, 1, 1, 'Tomato', 40, 'Vegetable', 'p8.jpg', 'Tomato'),
(9, 1, 1, 'Chilli', 100, 'Vegetable', 'p9.jpg', 'chilli'),
(10, 1, 1, 'Coriander leaf', 80, 'Vegetable', 'p10.jpg', 'Coriander leaf'),
(11, 2, 2, 'Ispahani Mirjapur Tea', 210, 'Tea', 'p11.jpg', 'tea'),
(12, 2, 3, 'Nestle Nescafe', 495, 'Coffee', 'p12.jpg', 'Coffee'),
(13, 2, 3, 'Nestlé Nesfruta', 120, 'Juice', 'p13.jpg', 'Juice'),
(14, 2, 4, 'Pepsi Diet Soft Drinks', 40, 'Soft Drinks', 'p14.jpg', 'Soft Drinks'),
(15, 2, 4, 'Aquafina Drinking Water', 15, 'Drinking Water', 'p15.jpg', 'Drinking Water'),
(16, 3, 5, 'Beef Regular', 600, 'Meat', 'p16.jpg', 'Meat'),
(17, 3, 5, 'Whole Broiler Chicken', 170, 'Chicken', 'p17.jpg', 'Chicken'),
(18, 3, 5, 'Mutton Regular', 800, 'Mutton', 'p18.jpg', 'mutton'),
(19, 3, 5, 'Duck with Skin', 700, 'duck', 'p19.jpg', 'duck'),
(20, 3, 5, 'Cow Liver', 800, 'liver', 'p20.jpg', 'liver'),
(21, 3, 5, 'Dried Fish', 1300, 'Fish', 'p21.jpg', 'Fish'),
(22, 3, 5, 'Rupchada Fish', 100, 'Fish', 'p22.jpg', 'Fish'),
(23, 3, 5, 'Koral Fish', 800, 'fish', 'p23.jpg', 'fish'),
(24, 3, 5, 'Prawn Fish', 900, 'fish', 'p24.jpg', 'fish'),
(25, 3, 5, 'Rui Fish', 800, 'fish', 'p25.jpg', 'fish'),
(32, 4, 3, 'Nestle Maggi Noodles', 250, 'noodles', 'p26.jpg', 'noodles'),
(33, 4, 3, 'Nestle Maggi Soup', 80, 'soup', 'p27.jpg', 'soup'),
(34, 4, 6, 'Catbery Dairy Milk', 100, 'Chocolate', 'p28.jpg', 'Chocolate'),
(35, 4, 4, 'Lays Cream and Onion Chips', 60, 'chips', 'p29.jpg', 'chips'),
(36, 4, 6, 'Cadbery Oreo Sandwich Cream Buiscuit', 150, 'buiscuit', 'p30.jpg', 'buiscuit'),
(37, 5, 7, 'Egg', 120, 'egg', 'p31.jpg\r\n', 'egg'),
(38, 5, 7, 'Raw Milk', 80, 'milk', 'p32.jpg', 'milk'),
(39, 5, 7, 'Sour Curd', 250, 'curd', 'p33.jpg', 'curd'),
(40, 5, 7, 'Sweetend Yogurt', 300, 'yogurt', 'p34.jpg', 'yogurt'),
(45, 5, 7, 'Cheese', 150, 'cheese', 'p35.jpg', 'cheese'),
(46, 6, 8, 'Kazi Farms Kitchen Plain Paratha', 250, 'paratha', 'p36.jpg', 'Paratha'),
(47, 6, 8, 'Kazi Farms Kitchen Chicken Samosa', 155, 'samosa', 'p37.jpg', 'samosa'),
(48, 6, 8, 'Kazi Farms Kitchen Chicken Spicy Meat Ball', 250, 'meat ball', 'p38.jpg', 'meat ball'),
(49, 6, 8, 'Kazi Farms Kitchen Chicken Strips', 250, 'chicken stips', 'p39.jpg', 'chicken strips'),
(50, 6, 8, 'Kazi Farm Chicken Lolipop', 210, 'Chicken Lolipop', 'p40.jpg', 'Chicken lolipop'),
(51, 6, 9, 'Hosen Baby Corn Young Spear Can', 110, 'baby corn', 'p41.jpg', 'baby corn'),
(52, 6, 9, 'Hosen Green Peas Choice Whole Can', 100, 'green pea', 'p42.jpg', 'green pea'),
(53, 6, 9, 'Hosen Mushroom Choice Whole Can', 220, 'mashroom', 'p43.jpg', 'mushroom'),
(54, 6, 9, 'Hosen Baked Beans In Tomato Sauce Can', 290, 'beans', 'p44.jpg', 'beans'),
(55, 6, 9, 'Hosen Fruit Cocktail ', 259, 'fruits', 'p45.jpg', 'fruits'),
(56, 7, 10, 'All Time Milk Bread ', 40, 'breads', 'p46.jpg', 'bread'),
(57, 7, 10, 'All Time Butter Bun ', 20, 'bun', 'p47.jpg', 'bun'),
(58, 7, 11, 'Danish Dry Cake Biscuit', 250, 'cake', 'p48.jpg', 'cake'),
(59, 7, 11, 'Danish Nutri Rich Malai Cookies', 55, 'cookies', 'p49.jpg', 'cookies'),
(60, 7, 12, 'Wonder Muffin Cake', 50, 'cake', 'p50.jpg', 'cake'),
(61, 7, 12, 'Nutella Hazelnut Ferrero Cocoa Spread', 500, 'nuttela', 'p51.jpg', 'nuttela'),
(62, 7, 13, 'Honey Gardens Organic Raw Honey', 600, 'honey', 'p52.jpg', 'honey'),
(63, 8, 14, 'Bashundhara Atta', 70, 'atta', 'p53.jpg', 'atta'),
(64, 8, 14, 'Bashundhara Maida', 92, 'maida', 'p54.jpg', 'maida'),
(65, 8, 15, 'Ahmed Custard Powder', 70, 'custard powder', 'p55.jpg', 'custard powder'),
(66, 8, 15, 'Ahmed Baking Powder Tin', 80, 'baking powder', 'p56.jpg', 'baking powder'),
(67, 8, 16, 'Foster Clark\'s Jelly Dessert Strawberry', 60, 'jelly', 'p57.jpg', 'jelly'),
(68, 8, 16, 'Foster Clark\'s Biocarbonate Soda', 115, 'baking soda', 'p58.jpg', 'baking soda'),
(69, 9, 10, 'PRAN Chinigura Rice', 235, 'rice', 'p59.jpg', 'rice'),
(70, 9, 10, 'PRAN Mustard Oil', 130, 'oil', 'p60.jpg', 'oil'),
(71, 9, 10, 'PRAN Mango Pickle', 135, 'pickle', 'p61.jpg', 'pickle'),
(72, 9, 10, 'PRAN Chili Powder Jar', 105, 'chilli', 'p62.jpg', 'chilli'),
(73, 9, 10, 'PRAN Dal 30 gm', 35, 'dal', 'p63.jpg', 'dal'),
(74, 9, 10, 'PRAN White Vinegar', 55, 'vinegar', 'p64.jpg', 'vinegar'),
(75, 10, 10, 'Bisk Club Sugar Free Cracker Biscuit', 50, 'biscuit', 'p65.jpg', 'buiscuit'),
(76, 10, 17, 'Quaker Oats Australia', 450, 'oats', 'p66.jpg', 'oats'),
(77, 10, 17, 'Blended Edible Vegetable Oil', 540, 'oil', 'p67.jpg', 'oil'),
(78, 10, 2, 'Ispahani Blender\'s Choice Green Tea', 4579, 'tea', 'p68.jpg', 'tea'),
(79, 10, 3, 'Nestle Nutren Diabetic -Vanilla', 569, 'milk', 'p69.jpg', 'milk'),
(80, 10, 4, 'Sprite Zero Soda', 120, 'soft drinks', 'p70.jpg', 'soft drinks'),
(81, 2, 4, 'Horlicks Jar', 300, 'horliks', 'p71.jpg', 'horlicks'),
(83, 4, 10, 'PRAN Badam Bhaja', 30, 'badam', 'p72.jpg', 'badam'),
(84, 5, 7, 'Quail Eggs', 95, 'egg', 'p73.jpg', 'egg'),
(85, 11, 18, 'Chasi Chinigura Rice', 150, 'Chasi Chinigura Rice', 'c1.png', 'rice'),
(86, 11, 19, 'Pran Minicate Rice', 80, 'Pran Minicate Rice', 'c2.png', 'rice'),
(87, 11, 14, 'Bashundhara Atta', 35, 'Bashundhara Atta', 'c3.jpg', 'atta'),
(88, 11, 14, 'Bashundhara Moida', 35, 'Bashundhara Moida ', 'c4.jpg', 'moida'),
(89, 11, 19, 'Pran Mustard Oil', 60, 'Pran Mustard Oil', 'c5.jpg', 'oil'),
(90, 11, 21, 'Rupchanda Soyabean Oil ', 500, 'Rupchanda Soyabean Oil ', 'c8.jpg', 'oil '),
(91, 11, 22, 'ACI Pure Salt', 40, 'ACI Pure Salt', 'c10.jpg', 'salt'),
(92, 11, 23, 'TEER Suger', 65, 'TEER Suger', 'c11.png', 'suger'),
(93, 1, 25, 'Garlic', 170, 'Garlic', 'c11.jpg', 'Garlic'),
(94, 1, 25, 'Giner', 165, 'Ginger', 'c12.jpg', 'Ginger'),
(95, 1, 25, 'Oninon', 60, 'Onion', 'c17.png', 'Onion'),
(96, 11, 24, 'Radhuni Cumin', 43, 'Radhuni Cumin', 'c13.jpg', 'cumin'),
(97, 11, 24, 'Radhuni Coriander ', 33, 'Radhuni Coriander ', 'c14.jpg', 'coriander'),
(98, 11, 24, 'Radhuni Turmeric Regular ', 48, 'Radhuni Turmeric Regular ', 'c15.jpg', 'turmeric'),
(99, 11, 24, 'Radhuni Biryani Masala ', 55, 'Radhuni Biryani Masala ', 'c16.jpg', 'biryani masala '),
(100, 1, 25, 'Apple', 130, 'Fruits', 'c18.png', 'apple'),
(101, 1, 25, 'Banana', 45, 'Fruits', 'c19.png', 'banana'),
(102, 1, 25, 'Mango', 250, 'Fruits', 'c20.png', 'mango'),
(103, 1, 25, 'Orange', 160, 'Fruits', 'c21.png', 'orange '),
(104, 1, 25, 'Grapes', 290, 'Fruits', 'c22.jpg', 'grapes'),
(105, 1, 25, 'Strawberry  ', 300, 'Fruits', 'c23.png', 'strawberry'),
(106, 1, 25, 'Brinjal', 40, 'Vegetable', 'c24.png', 'brinjal'),
(107, 1, 25, 'Broccoli', 60, 'Vegetable', 'c25.png', 'broccoli'),
(108, 1, 25, 'Cauliflower', 60, 'Vegetable', 'c26.png', 'cauliflower'),
(109, 1, 25, 'Spinach', 30, 'Vegetable', 'c27.png', 'spinch'),
(110, 1, 25, 'Sweet Lime', 25, 'Vegetable', 'c28.png', 'sweet lime'),
(111, 1, 25, 'Muskmelon', 350, 'Vegetable', 'c29.png', 'muskmelon'),
(112, 1, 25, 'Mushroom', 140, 'Vegetable', 'c30.png', 'mushroom'),
(113, 1, 25, 'Potato', 25, 'Vegetable', 'c31.jpg', 'potato'),
(114, 1, 25, 'Tomato', 45, 'Vegetable', 'c32.jpg', 'tomato'),
(115, 1, 25, 'Chilli', 30, 'Vegetable', 'c33.jpg', 'chilli'),
(116, 1, 25, 'Coriander leaf', 10, 'Vegetable', 'c34.jpg', 'Coriander leaf'),
(117, 12, 26, 'Beef Regular', 550, 'Meat', 'c35.jpg', 'beef'),
(118, 12, 26, 'Broiler Chicken', 150, 'Meat', 'c36.jpg', 'chicken'),
(119, 12, 26, 'Mutton Regular', 850, 'Meat', 'c37.jpg', 'mutton'),
(120, 12, 26, 'Duck', 600, 'Meat', 'c38.jpg', 'duck'),
(121, 12, 26, 'Cow Liver', 650, 'Meat', 'c39.jpg', 'liver'),
(122, 12, 26, 'Hilsha Fish', 1150, 'Fish', 'c40.jpg', 'fish'),
(123, 12, 26, 'Dried Fish', 250, 'Fish', 'c41.jpg', 'fish'),
(124, 12, 26, 'Rupchada Fish', 600, 'Fish', 'c43.jpg', 'fish'),
(125, 12, 26, 'Koral Fish', 790, 'Fish', 'c42.jpg', 'fish'),
(126, 12, 26, 'Prawn Fish', 850, 'Fish', 'c45.jpg', 'fish'),
(127, 12, 26, 'Rui Fish', 220, 'Fish', 'c46.jpg', 'fish'),
(128, 2, 27, 'Mirinda Can', 40, 'Mirinda', 'c47.png', 'soft drinks'),
(129, 2, 28, 'Coco Cola Zero Can', 80, 'Coco Cola', 'c48.png', 'soft drinks'),
(130, 2, 29, 'Sprite Bottle', 80, 'Sprite', 'c49.png', 'soft drinks'),
(131, 2, 30, 'Tropicana Fruit Juice', 240, 'Fruit Juice', 'c50.png', 'juice'),
(132, 4, 8, 'Kazi Farms Kitchen Plain Paratha', 250, 'Paratha', 'c51.jpg', 'parata'),
(133, 4, 8, 'Kazi Farms Kitchen Chicken Samosa', 155, 'Samosa', 'c52.jpg', 'samosa'),
(134, 4, 8, 'Kazi Farms Kitchen Chicken Spicy Meat Ball', 260, ' Meat Ball', 'c53.jpg', 'meat ball'),
(135, 4, 8, 'Kazi Farm Chicken Lolipop', 215, 'Lolipop', 'c54.jpg', 'lolipop'),
(136, 4, 8, 'Kazi Farms Kitchen Chicken Strips', 290, 'Strips', 'c55.jpg', 'strips'),
(137, 7, 32, 'Masala Bread', 50, 'Bread', 'c56.png', 'bread'),
(138, 7, 32, 'Bread White Pita', 60, 'Bread', 'c57.png', 'bread'),
(139, 4, 32, 'Rolls Chocolate', 40, 'Cake', 'c58.png', 'cake'),
(140, 7, 32, 'Chocolate Bread', 80, 'Bread', 'c59.png', 'bread'),
(141, 4, 32, 'Assorted Muffins', 60, 'Muffin', 'c60.png', 'muffin'),
(142, 14, 33, 'Pedigree Meat for dog', 550, 'Meat for dog', 'c61.png', 'pet food'),
(143, 14, 33, 'Pedigree Chicken In Jelly Can', 390, 'Chicken jelly ', 'c62.png', 'pet food'),
(144, 14, 33, 'Pedigree Young Adult Dogs ', 360, 'Young Adult Dogs ', 'c63.png', 'pet food'),
(145, 14, 33, 'Pedigree Gravy Food For Dogs', 400, 'Gravy Food For Dogs', 'c64.png', 'pet food');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL,
  `user_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`, `user_img`) VALUES
(12, 'arif', 'jawad', 'arifjawad.ajp@gmail.com', 'arif', '9448121556', '123456788', 'sdcjns,djc', '1587513310_arif.jpg');

--
-- Triggers `user_info`
--
DELIMITER $$
CREATE TRIGGER `after_user_info_insert` AFTER INSERT ON `user_info` FOR EACH ROW BEGIN 
INSERT INTO user_info_backup VALUES(new.user_id,new.first_name,new.last_name,new.email,new.password,new.mobile,new.address1,new.address2);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_info_backup`
--

CREATE TABLE `user_info_backup` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info_backup`
--

INSERT INTO `user_info_backup` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(22, 'puneeth', 'v', 'hemu@gmail.com', '1234534', '9877654334', 'snhdgvajfehyfygv', 'asdjbhfkeur'),
(26, 'arif', 'jawad', 'arifjawad.ajp@gmail.com', '', '1776760609', '', ''),
(27, 'arif', 'jawad', 'arifjawad.ajp@gmail.com', '', '1776760609', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `delivery_person`
--
ALTER TABLE `delivery_person`
  ADD PRIMARY KEY (`delivery_person_id`);

--
-- Indexes for table `email_info`
--
ALTER TABLE `email_info`
  ADD PRIMARY KEY (`email_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `orders_drawer`
--
ALTER TABLE `orders_drawer`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders_info`
--
ALTER TABLE `orders_info`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`order_pro_id`),
  ADD KEY `order_products` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_info_backup`
--
ALTER TABLE `user_info_backup`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `delivery_person`
--
ALTER TABLE `delivery_person`
  MODIFY `delivery_person_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `email_info`
--
ALTER TABLE `email_info`
  MODIFY `email_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders_drawer`
--
ALTER TABLE `orders_drawer`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders_info`
--
ALTER TABLE `orders_info`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `order_pro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user_info_backup`
--
ALTER TABLE `user_info_backup`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders_info`
--
ALTER TABLE `orders_info`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products` FOREIGN KEY (`order_id`) REFERENCES `orders_info` (`order_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `product_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
