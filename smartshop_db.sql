-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2025 at 10:56 PM
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
-- Database: `smartshop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` bigint(20) UNSIGNED NOT NULL,
  `permissions` varchar(255) NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `permissions`, `userID`, `created_at`, `updated_at`) VALUES
(1, 'read/write/delete/update/craete', 1, '2025-06-03 15:32:44', '2025-06-03 15:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_ahmad.mhana@example.com|127.0.0.1', 'i:1;', 1749393176),
('laravel_cache_ahmad.mhana@example.com|127.0.0.1:timer', 'i:1749393176;', 1749393176),
('laravel_cache_test5@example.com|127.0.0.1', 'i:1;', 1749500840),
('laravel_cache_test5@example.com|127.0.0.1:timer', 'i:1749500840;', 1749500840);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `customerID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartID`, `created_at`, `updated_at`, `customerID`) VALUES
(7, '2025-06-07 21:25:53', '2025-06-07 21:25:53', 8),
(8, '2025-06-07 22:26:26', '2025-06-07 22:26:26', 9),
(9, '2025-06-08 16:23:48', '2025-06-08 16:23:48', 10),
(10, '2025-06-09 17:28:27', '2025-06-09 17:28:27', 11);

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `cartItemID` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `cartID` bigint(20) UNSIGNED NOT NULL,
  `productID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`cartItemID`, `quantity`, `cartID`, `productID`) VALUES
(29, 1, 9, 8);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Kitchenware', '2025-06-03 15:32:44', '2025-06-05 12:16:23'),
(3, 'Electronics', '2025-06-04 19:24:27', '2025-06-04 19:24:27'),
(4, 'Home Decor', '2025-06-04 23:15:02', '2025-06-04 23:15:02'),
(5, 'Household Essentials', '2025-06-05 12:17:33', '2025-06-05 12:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `contacterID` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`contacterID`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'noura', 'testing@example.com', 'fkfk', 'ghjuku67fk7g69fv6986', '2025-06-07 12:49:17', '2025-06-07 12:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` bigint(20) UNSIGNED NOT NULL,
  `shippAddress` varchar(255) DEFAULT NULL,
  `phoneNB` varchar(255) DEFAULT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `shippAddress`, `phoneNB`, `userID`, `created_at`, `updated_at`) VALUES
(8, 'city center, beirut mall, floor 6, block E', '7694130565', 23, '2025-06-07 21:25:46', '2025-06-07 21:27:04'),
(9, 'bolivar kamin shamoun, bshemon, taire', '76941305', 24, '2025-06-07 22:26:20', '2025-06-07 22:27:05'),
(10, 'iafb', '123456789', 26, '2025-06-08 16:22:24', '2025-06-08 16:24:09'),
(11, 'beirut', '123 455 7899', 27, '2025-06-09 17:28:17', '2025-06-09 17:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `deliveryID` bigint(20) UNSIGNED NOT NULL,
  `vehicleType` varchar(255) NOT NULL,
  `phoneNB` varchar(255) DEFAULT NULL,
  `deliveryStatus` enum('available','onDelivery','inactive') NOT NULL DEFAULT 'available',
  `userID` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`deliveryID`, `vehicleType`, `phoneNB`, `deliveryStatus`, `userID`) VALUES
(4, 'Car', '76 345 657 657', 'available', 10),
(5, 'Mercedes', '76 345 657 657', 'available', 11),
(6, 'Motor', '76 345 657 657', 'available', 12),
(7, 'Motorcyle', '76 258 147 963', 'onDelivery', 13),
(8, 'Motorcyle', '76941305', 'available', 22);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_user_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_05_22_181100_create_contact_message_table', 1),
(5, '2025_05_22_181248_admin_table', 1),
(6, '2025_05_22_181326_create_delivery_table', 1),
(7, '2025_05_22_181402_create_customer_table', 1),
(8, '2025_05_22_181422_create_product_table', 1),
(9, '2025_05_22_181439_create_category_table', 1),
(10, '2025_05_22_181599_create_cart_table', 1),
(11, '2025_05_22_181600_create_order_table', 1),
(12, '2025_05_22_181601_create_order_items_table', 1),
(13, '2025_05_22_181635_create_product_order_items_table', 1),
(14, '2025_05_22_181654_create_product_rating_table', 1),
(15, '2025_05_22_181720_create_cart_items_table', 1),
(16, '2025_05_22_181734_create_wish_list_table', 1),
(17, '2025_05_22_181747_create_wish_list_items_table', 1),
(18, '2025_05_22_181901_create_shipment_table', 1),
(19, '2025_05_24_220831_add_feature_and_sales_to_product_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderID` bigint(20) UNSIGNED NOT NULL,
  `totalPrice` decimal(10,2) NOT NULL,
  `customerID` bigint(20) UNSIGNED NOT NULL,
  `cartID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderID`, `totalPrice`, `customerID`, `cartID`, `created_at`, `updated_at`) VALUES
(25, 511.18, 8, 7, '2025-06-07 21:27:04', '2025-06-07 21:27:04'),
(26, 62.49, 9, 8, '2025-06-07 22:27:05', '2025-06-07 22:27:05'),
(27, 20.00, 10, 9, '2025-06-08 16:24:09', '2025-06-08 16:24:09'),
(28, 20.00, 10, 9, '2025-06-08 16:24:53', '2025-06-08 16:24:53'),
(29, 55.96, 11, 10, '2025-06-09 17:34:37', '2025-06-09 17:34:37'),
(30, 0.00, 11, 10, '2025-06-09 17:34:59', '2025-06-09 17:34:59'),
(31, 0.00, 11, 10, '2025-06-09 17:35:15', '2025-06-09 17:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) DEFAULT NULL,
  `image3` varchar(100) DEFAULT NULL,
  `image4` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `categoryID` bigint(20) UNSIGNED NOT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `sales_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `name`, `price`, `description`, `image1`, `image2`, `image3`, `image4`, `created_at`, `updated_at`, `deleted_at`, `categoryID`, `is_featured`, `sales_count`) VALUES
(7, 'Vegetable Cutter', 20.00, 'Vegetable cutter contains different cutter for all vegetable types like tomatos, cucumbers, onions, carrots and so many others. it comes with different head shapes.', 'vigtableCutter.png', NULL, NULL, NULL, '2025-06-03 20:15:26', '2025-06-03 20:15:26', NULL, 1, 1, 128),
(8, 'Hover Brush', 299.00, 'Hover Brush N wash carpet and hard floor washer, gray, HOV-02f5916911', 'hoverBrush.jpg', NULL, NULL, NULL, '2025-06-03 20:36:53', '2025-06-05 11:29:03', NULL, 3, 1, 300),
(9, 'Clock Crystal', 49.99, 'Clock Crystal fits all home designs, shines in darkness.', 'clockCrystal.jpg', NULL, NULL, NULL, '2025-06-04 23:28:12', '2025-06-04 23:30:53', NULL, 4, 1, 150),
(10, 'Ninja Air Frier', 129.99, 'Instant Vortex Plus 6QT Air Fryer with Odor Erase Technology, 6-in-1 Functions that Crisps, Roasts, Broils, Dehydrates, Bakes & Reheats, 100+In-App Recipes, from the Makers of Instant Pot,1700W,Black', 'ninjaAirFrier.jpg', NULL, NULL, NULL, '2025-06-05 11:46:57', '2025-06-05 11:46:57', NULL, 1, 1, 245),
(11, 'Stainless Steel Air Frier', 209.99, 'Emeril Lagasse Extra Large French Door Air Fryer Toaster Oven Combo, 24 Cooking Functions and Digital Controls, 7 Accessories Included, Stainless Steel Finish, 26QT Capacity', 'door_air_frier_1.jpg', 'door_air_frier_2.jpg', 'door_air_frier_3.jpg', 'door_air_frier_4.jpg', '2025-06-05 11:53:13', '2025-06-05 11:53:13', NULL, 1, 0, 50),
(12, 'Bounty Paper Towel', 3.45, 'Bounty Quick Size Paper Towels, White, 8 Family Rolls = 20 Regular Rolls (Packaging May Vary)', 'bounty_paper_towel_1.jpg', 'bounty_paper_towel_2.jpg', 'bounty_paper_towel_3.jpg', 'bounty_paper_towel_4.jpg', '2025-06-05 12:19:22', '2025-06-05 12:19:22', NULL, 5, 0, 34),
(13, 'Viva Paper Towel', 4.00, 'Viva Multi-Surface Cloth Paper Towels, 12 Triple Rolls, 165 Sheets Per Roll (2 Packs of 6)', 'viva_paper_towel_1.jpg', 'viva_paper_towel_2.jpg', 'viva_paper_towel_3.jpg', 'viva_paper_towel_4.jpg', '2025-06-05 12:22:36', '2025-06-05 12:22:36', NULL, 5, 0, 75),
(14, 'Kendol Cleaning Sheet', 1.99, 'KLEENDOL150 Sheet Disposable Cleaning Cloths Disposable Dish Cloths Paper Towels Reusable Household Cleaning Towel 3 Rolls', 'kleendol_sheet_1.jpg', NULL, 'kleendol_sheet_3.jpg', 'kleendol_sheet_4.jpg', '2025-06-05 12:26:48', '2025-06-08 14:53:06', NULL, 5, 0, 80),
(15, 'Shardor Expresso', 149.99, 'Coffee Grinder with 100 Grind Settings and All-Metal Chamber, Coffee Bean Grinder with Adjustable Electronic Timer and LED Display, Anti-Static,Black', 'shardor_expresso_1.jpg', 'shardor_expresso_2.jpg', 'shardor_expresso_3.jpg', 'shardor_expresso_4.jpg', '2025-06-05 12:33:06', '2025-06-05 12:33:06', NULL, 1, 1, 233),
(16, 'Nisso Projector', 150.00, 'Projector with WiFi and Bluetooth, Upgrade Outdoor Projector, Mini Movie Projector Supports 1080P Synchronize Smartphone Screen by WiFi/USB Cable for Home Entertainment', 'nisso_lcd_1.jpg', 'nisso_lcd_2.jpg', 'nisso_lcd_3.jpg', 'nisso_lcd_4.jpg', '2025-06-05 13:01:25', '2025-06-05 13:44:21', NULL, 3, 0, 261),
(17, 'Mini Projector', 59.99, 'Mini Projector with WiFi6 and Bluetooth 5.4, Portable Projector 4K 1080P Support, 180°Rotatable Smart Small Projector Outdoor for Phone/TV Stick/Laptop', 'mini_lcd_1.jpg', 'mini_lcd_2.jpg', 'mini_lcd_3.jpg', 'mini_lcd_4.jpg', '2025-06-05 13:04:55', '2025-06-05 13:05:11', NULL, 3, 1, 350),
(18, 'Kitchen Scaler', 13.99, 'Basics Digital Kitchen Scale with LCD Display, Batteries Included, Weighs up to 11 pounds, Black and Stainless Steel', 'kitchen_scale_1.jpg', 'kitchen_scale_2.jpg', 'kitchen_scale_3.jpg', 'kitchen_scale_4.jpg', '2025-06-05 13:09:30', '2025-06-05 13:09:30', NULL, 1, 1, 531),
(19, 'Kitchen Bowls Set', 28.99, 'Mixing Bowls with Airtight Lids Set, 26PCS Stainless Steel Khaki Bowls with Grater Attachments, Non-Slip Bottoms & Kitchen Gadgets Set, Size 7, 4, 2.5, 2.0,1.5, 1QT, Great for Mixing &', 'kitchen_set_bowls_1.jpg', 'kitchen_set_bowls_2.jpg', 'kitchen_set_bowls_3.jpg', 'kitchen_set_bowls_4.jpg', '2025-06-05 13:43:57', '2025-06-05 13:43:57', NULL, 1, 1, 600);

-- --------------------------------------------------------

--
-- Table structure for table `product_order_items`
--

CREATE TABLE `product_order_items` (
  `productOrderItemID` bigint(20) UNSIGNED NOT NULL,
  `productID` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_order_items`
--

INSERT INTO `product_order_items` (`productOrderItemID`, `productID`, `order_id`) VALUES
(16, 8, 25),
(17, 10, 25),
(18, 7, 25),
(19, 9, 26),
(20, 14, 26),
(21, 7, 27),
(22, 7, 28),
(23, 18, 29);

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

-- --------------------------------------------------------

--
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `shipmentID` bigint(20) UNSIGNED NOT NULL,
  `shipAddress` varchar(100) NOT NULL,
  `shipCity` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` enum('preparing','onWay','delivered','failed') NOT NULL,
  `orderID` bigint(20) UNSIGNED NOT NULL,
  `deliveryManID` bigint(20) UNSIGNED DEFAULT NULL,
  `customerID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipment`
--

INSERT INTO `shipment` (`shipmentID`, `shipAddress`, `shipCity`, `country`, `state`, `orderID`, `deliveryManID`, `customerID`, `created_at`, `updated_at`) VALUES
(20, 'city center, beirut mall, floor 6, block E', 'beirut', 'Lebanon', 'onWay', 25, 8, 8, '2025-06-07 21:27:04', '2025-06-07 22:25:06'),
(21, 'bolivar kamin shamoun, bshemon, taire', 'beirut', 'Lebanon', 'delivered', 26, 8, 9, '2025-06-07 22:27:05', '2025-06-07 22:28:07'),
(22, 'iafb', 'dvpkds', 'nevpe', 'preparing', 27, NULL, 10, '2025-06-08 16:24:09', '2025-06-08 16:24:09'),
(23, 'iafb', 'dvpkds', 'nevpe', 'preparing', 28, NULL, 10, '2025-06-08 16:24:53', '2025-06-08 16:24:53'),
(24, 'beirut', 'b', 'beirut', 'preparing', 29, NULL, 11, '2025-06-09 17:34:37', '2025-06-09 17:34:37'),
(25, 'beirut', 'beirut', 'beirut', 'preparing', 30, NULL, 11, '2025-06-09 17:34:59', '2025-06-09 17:34:59'),
(26, 'beirut', 'beirut', 'beirut', 'preparing', 31, NULL, 11, '2025-06-09 17:35:15', '2025-06-09 17:35:15');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'Customer',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_status` enum('active','inactive','deleted') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `full_name`, `email`, `password`, `role`, `created_at`, `updated_at`, `user_status`) VALUES
(1, 'test', 'admin.test@example.com', '$2y$12$PHZk.Pyf7GGke2eNC5Jc4O4wXU34alYRj5Ry/mpvC64XiNwWxz4Iu', 'admin', '2025-06-03 15:32:44', '2025-06-03 15:32:44', 'active'),
(10, 'test4', 'test4@example.com', '$2y$12$2Oxv2cEdGX8Eg5Dhk3WRLONLNkUKA8bJGvMgUZxeIZVRDm4IMZtF2', 'Delivery', '2025-06-04 18:36:06', '2025-06-04 18:36:06', 'active'),
(11, 'test5', 'test5@example.com', '$2y$12$Lk5alGsP7xyUtLrquPpwXewhKXX72i04FC4HJ2YAEp05ngFvTgXk2', 'Delivery', '2025-06-04 18:46:10', '2025-06-04 18:46:10', 'active'),
(12, 'tset6', 'test6@example.com', '$2y$12$emiiSHpvx0ApPH.Ty/00EOjQ5.xCcCLokCFtKA8KjnplwPlLVf28y', 'Delivery', '2025-06-04 18:47:03', '2025-06-04 18:47:03', 'active'),
(13, 'test7', 'test7@example.com', '$2y$12$yrWL26Y31su3NVrqUvOZEO5g01vai1g86JifYl3zNRR8499aZK83m', 'Delivery', '2025-06-04 18:55:40', '2025-06-04 18:55:40', 'active'),
(22, 'Ahmad Mhanna', 'ahmad.mhanna@example.com', '$2y$12$rkJAZSIreC01F55H6jTVPeMGHrmA1ZKJLMzI3kD/rJJbIbEXNni/m', 'Delivery', '2025-06-07 21:16:16', '2025-06-07 21:16:16', 'active'),
(23, 'Nour', 'nour18merhi@gmail.com', '$2y$12$WTkBG9ZFK6piJqOo1SxbaeNzrCfQqiMnqCe5gKFmpAnaDfrf/MTLq', 'Customer', '2025-06-07 21:25:46', '2025-06-07 21:25:46', 'active'),
(24, 'test', 'test@example.com', '$2y$12$VAjytbLEPYXoxBiTjJ1V1.Po6rFG5oewTpYShIg8RAC/JYJFKc.AK', 'Customer', '2025-06-07 22:26:20', '2025-06-07 22:26:20', 'active'),
(26, 'customer', 'customer@example.com', '$2y$12$lTkZnPa1sOYwNn7jyNnxUeKLCxOIp47hxp95h11BHoYGt8T2koe2u', 'Customer', '2025-06-08 16:22:24', '2025-06-08 16:22:24', 'active'),
(27, 'user1', 'user@gamil.com', '$2y$12$rwQlLCEw5/KgV4RmByXAgOZ4biJnG404PnL6ACnDEbQcN2QpeI4zO', 'Customer', '2025-06-09 17:28:17', '2025-06-09 17:28:17', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`),
  ADD KEY `admin_userid_foreign` (`userID`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `cart_customerid_foreign` (`customerID`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`cartItemID`),
  ADD KEY `cart_items_cartid_foreign` (`cartID`),
  ADD KEY `cart_items_productid_foreign` (`productID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`contacterID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`),
  ADD KEY `customer_userID_foreign` (`userID`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`deliveryID`),
  ADD KEY `delivery_userID_foreign` (`userID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `order_customerid_foreign` (`customerID`),
  ADD KEY `order_cartid_foreign` (`cartID`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `product_order_items`
--
ALTER TABLE `product_order_items`
  ADD PRIMARY KEY (`productOrderItemID`),
  ADD KEY `product_order_items_productid_foreign` (`productID`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shipment`
--
ALTER TABLE `shipment`
  ADD PRIMARY KEY (`shipmentID`),
  ADD KEY `shipment_orderid_foreign` (`orderID`),
  ADD KEY `shipment_deliveryid_foreign` (`deliveryManID`),
  ADD KEY `shipment_customerid_foreign` (`customerID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `cartItemID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `contacterID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `deliveryID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_order_items`
--
ALTER TABLE `product_order_items`
  MODIFY `productOrderItemID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `shipment`
--
ALTER TABLE `shipment`
  MODIFY `shipmentID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_customerid_foreign` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE CASCADE;

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_cartid_foreign` FOREIGN KEY (`cartID`) REFERENCES `cart` (`cartID`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_items_productid_foreign` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_userID_foreign` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_userID_foreign` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_cartid_foreign` FOREIGN KEY (`cartID`) REFERENCES `cart` (`cartID`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_customerid_foreign` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE CASCADE;

--
-- Constraints for table `product_order_items`
--
ALTER TABLE `product_order_items`
  ADD CONSTRAINT `order_id` FOREIGN KEY (`order_id`) REFERENCES `order` (`orderID`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_order_items_productid_foreign` FOREIGN KEY (`productID`) REFERENCES `product` (`productID`) ON DELETE CASCADE;

--
-- Constraints for table `shipment`
--
ALTER TABLE `shipment`
  ADD CONSTRAINT `shipment_customerid_foreign` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE CASCADE,
  ADD CONSTRAINT `shipment_deliveryid_foreign` FOREIGN KEY (`deliveryManID`) REFERENCES `delivery` (`deliveryID`) ON DELETE CASCADE,
  ADD CONSTRAINT `shipment_orderid_foreign` FOREIGN KEY (`orderID`) REFERENCES `order` (`orderID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
