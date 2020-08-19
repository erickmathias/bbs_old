-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 10:21 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bss`
--

-- --------------------------------------------------------

--
-- Table structure for table `bbs_formula`
--

CREATE TABLE `bbs_formula` (
  `id` int(10) UNSIGNED NOT NULL,
  `stdcode_id` int(11) NOT NULL,
  `shape_code` int(11) NOT NULL,
  `shape` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formula` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d6` double(8,2) NOT NULL,
  `d8` double(8,2) NOT NULL,
  `d10` double(8,2) NOT NULL,
  `d12` double(8,2) NOT NULL,
  `d16` double(8,2) NOT NULL,
  `d20` double(8,2) NOT NULL,
  `d25` double(8,2) NOT NULL,
  `d32` double(8,2) NOT NULL,
  `d40` double(8,2) NOT NULL,
  `d50` double(8,2) NOT NULL,
  `steel_type_t` int(11) NOT NULL,
  `steel_type_y` int(11) NOT NULL,
  `steel_type_r` int(11) NOT NULL,
  `created_at` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bbs_formula`
--

INSERT INTO `bbs_formula` (`id`, `stdcode_id`, `shape_code`, `shape`, `formula`, `d6`, `d8`, `d10`, `d12`, `d16`, `d20`, `d25`, `d32`, `d40`, `d50`, `steel_type_t`, `steel_type_y`, `steel_type_r`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 20, NULL, 'A', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 0, '7/25/2020 21:37', '7/25/2020 21:37', NULL),
(2, 1, 32, NULL, 'A+x', 100.00, 100.00, 110.00, 140.00, 180.00, 220.00, 350.00, 450.00, 560.00, 700.00, 1, 1, 0, NULL, NULL, NULL),
(3, 1, 33, NULL, 'A+x', 200.00, 200.00, 220.00, 280.00, 360.00, 440.00, 700.00, 900.00, 1120.00, 1400.00, 1, 1, 0, NULL, NULL, NULL),
(4, 1, 34, NULL, 'A+x', 100.00, 100.00, 100.00, 100.00, 100.00, 110.00, 180.00, 230.00, 280.00, 350.00, 1, 1, 0, NULL, NULL, NULL),
(5, 1, 35, NULL, 'A+x', 200.00, 200.00, 200.00, 200.00, 200.00, 220.00, 360.00, 460.00, 560.00, 700.00, 1, 1, 0, NULL, NULL, NULL),
(6, 1, 37, NULL, 'A+B+x', -12.00, -16.00, -20.00, -24.00, -32.00, -40.00, -50.00, -64.00, -80.00, -100.00, 1, 1, 0, NULL, NULL, NULL),
(7, 1, 38, NULL, 'A+B+C+x', -24.00, -32.00, -40.00, -48.00, -64.00, -80.00, -100.00, -128.00, -160.00, -200.00, 1, 1, 0, NULL, NULL, NULL),
(8, 1, 39, NULL, 'A+B+C+x', -9.42, -12.56, -15.70, -18.84, -25.12, -31.40, -39.25, -50.24, -62.80, -78.50, 1, 1, 0, NULL, NULL, NULL),
(9, 1, 41, NULL, 'A+B+C', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 0, NULL, NULL, NULL),
(10, 1, 42, NULL, 'A+B+C+n', 100.00, 100.00, 100.00, 100.00, 100.00, 110.00, 180.00, 230.00, 280.00, 350.00, 1, 1, 0, NULL, NULL, NULL),
(11, 1, 43, NULL, 'A+2B+C+E', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 0, NULL, NULL, NULL),
(12, 1, 45, NULL, 'A+B+C+x', -12.00, -16.00, -20.00, -24.00, -32.00, -40.00, -50.00, -64.00, -80.00, -100.00, 1, 1, 0, NULL, NULL, NULL),
(13, 1, 49, NULL, 'A+B+C', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 0, NULL, NULL, NULL),
(14, 1, 51, NULL, 'A+B-0.5R+x', -6.00, -8.00, -10.00, -12.00, -16.00, -20.00, -25.00, -32.00, -40.00, -50.00, 1, 1, 0, NULL, NULL, NULL),
(15, 1, 52, NULL, 'A+B+C+D+x', -36.00, -48.00, -60.00, -72.00, -96.00, -120.00, -150.00, -192.00, -240.00, -300.00, 1, 1, 0, NULL, NULL, NULL),
(16, 1, 53, NULL, 'A+B+C+D+x', -48.00, -64.00, -80.00, -96.00, -128.00, -160.00, -200.00, -256.00, -320.00, -400.00, 1, 1, 0, NULL, NULL, NULL),
(17, 1, 54, NULL, 'A+B+C+x', -24.00, -32.00, -40.00, -48.00, -64.00, -80.00, -100.00, -128.00, -160.00, -200.00, 1, 1, 0, NULL, NULL, NULL),
(18, 1, 55, NULL, 'A+B+C+D+E+x', -48.00, -64.00, -80.00, -96.00, -128.00, -160.00, -200.00, -256.00, -320.00, -400.00, 1, 1, 0, NULL, NULL, NULL),
(19, 1, 61, NULL, '2(A+B)+x', 72.00, 96.00, 120.00, 144.00, 192.00, 240.00, 350.00, 448.00, 560.00, 700.00, 1, 1, 0, NULL, NULL, NULL),
(20, 1, 62, NULL, 'A+B', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 0, NULL, NULL, NULL),
(21, 1, 65, NULL, 'A', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 0, NULL, NULL, NULL),
(22, 1, 77, NULL, 'A+B+x', 120.00, 160.00, 200.00, 240.00, 320.00, 400.00, 500.00, 640.00, 800.00, 1000.00, 1, 1, 0, NULL, NULL, NULL),
(23, 1, 78, NULL, '2A+B+C+x', 18.00, 24.00, 30.00, 36.00, 48.00, 60.00, 75.00, 96.00, 120.00, 150.00, 1, 1, 0, NULL, NULL, NULL),
(24, 1, 79, NULL, '2A+3B+x', 60.00, 80.00, 100.00, 120.00, 160.00, 200.00, 250.00, 320.00, 400.00, 500.00, 1, 1, 0, NULL, NULL, NULL),
(25, 1, 82, NULL, '2A+3B+x', 108.00, 144.00, 180.00, 216.00, 288.00, 360.00, 450.00, 576.00, 720.00, 900.00, 1, 1, 0, NULL, NULL, NULL),
(26, 1, 85, NULL, 'A+B+0.57C+D+x', -21.42, -28.56, -35.70, -42.84, -57.12, -71.40, -89.25, -114.24, -142.80, -178.50, 1, 1, 0, NULL, NULL, NULL),
(27, 1, 86, NULL, 'A+2B+C+D+x', -48.00, -64.00, -80.00, -96.00, -128.00, -160.00, -200.00, -256.00, -320.00, -400.00, 1, 1, 0, NULL, NULL, NULL),
(28, 1, 87, NULL, '(22C/7B) (A+x)   =   Pi (C/B (A+x)', -6.00, -8.00, -10.00, -12.00, -16.00, -20.00, -25.00, -32.00, -40.00, -50.00, 1, 1, 0, NULL, NULL, NULL),
(29, 1, 99, NULL, 'A+B+C+D+E', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 0, NULL, NULL, NULL),
(30, 1, 20, NULL, 'A', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 1, NULL, NULL, NULL),
(31, 1, 32, NULL, 'A+x', 100.00, 100.00, 100.00, 110.00, 150.00, 180.00, 230.00, 290.00, 360.00, 450.00, 0, 0, 1, NULL, NULL, NULL),
(32, 1, 33, NULL, 'A+x', 200.00, 200.00, 200.00, 220.00, 300.00, 360.00, 460.00, 580.00, 720.00, 900.00, 0, 0, 1, NULL, NULL, NULL),
(33, 1, 34, NULL, 'A+x', 100.00, 100.00, 100.00, 100.00, 100.00, 100.00, 130.00, 160.00, 200.00, 250.00, 0, 0, 1, NULL, NULL, NULL),
(34, 1, 35, NULL, 'A+x', 200.00, 200.00, 200.00, 200.00, 200.00, 200.00, 260.00, 320.00, 400.00, 500.00, 0, 0, 1, NULL, NULL, NULL),
(35, 1, 37, NULL, 'A+B+x', -12.00, -16.00, -20.00, -24.00, -32.00, -40.00, -50.00, -64.00, -80.00, -100.00, 0, 0, 1, NULL, NULL, NULL),
(36, 1, 38, NULL, 'A+B+C+x', -24.00, -32.00, -40.00, -48.00, -64.00, -80.00, -100.00, -128.00, -160.00, -200.00, 0, 0, 1, NULL, NULL, NULL),
(37, 1, 39, NULL, 'A+B+C+x', -9.42, -12.56, -15.70, -18.84, -25.12, -31.40, -39.25, -50.24, -62.80, -78.50, 0, 0, 1, NULL, NULL, NULL),
(38, 1, 41, NULL, 'A+B+C', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 1, NULL, NULL, NULL),
(39, 1, 42, NULL, 'A+B+C+n', 100.00, 100.00, 100.00, 100.00, 100.00, 100.00, 130.00, 160.00, 200.00, 250.00, 0, 0, 1, NULL, NULL, NULL),
(40, 1, 43, NULL, 'A+2B+C+E', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 1, NULL, NULL, NULL),
(41, 1, 45, NULL, 'A+B+C+x', -12.00, -16.00, -20.00, -24.00, -32.00, -40.00, -50.00, -64.00, -80.00, -100.00, 0, 0, 1, NULL, NULL, NULL),
(42, 1, 49, NULL, 'A+B+C', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 1, NULL, NULL, NULL),
(43, 1, 51, NULL, 'A+B-0.5R+x', -6.00, -8.00, -10.00, -12.00, -16.00, -20.00, -25.00, -32.00, -40.00, -50.00, 0, 0, 1, NULL, NULL, NULL),
(44, 1, 52, NULL, 'A+B+C+D+x', -36.00, -48.00, -60.00, -72.00, -96.00, -120.00, -150.00, -192.00, -240.00, -300.00, 0, 0, 1, NULL, NULL, NULL),
(45, 1, 53, NULL, 'A+B+C+D+x', -48.00, -64.00, -80.00, -96.00, -128.00, -160.00, -200.00, -256.00, -320.00, -400.00, 0, 0, 1, NULL, NULL, NULL),
(46, 1, 54, NULL, 'A+B+C+x', -24.00, -32.00, -40.00, -48.00, -64.00, -80.00, -100.00, -128.00, -160.00, -200.00, 0, 0, 1, NULL, NULL, NULL),
(47, 1, 55, NULL, 'A+B+C+D+E+x', -48.00, -64.00, -80.00, -96.00, -128.00, -160.00, -200.00, -256.00, -320.00, -400.00, 0, 0, 1, NULL, NULL, NULL),
(48, 1, 61, NULL, '2(A+B)+x', 72.00, 96.00, 120.00, 144.00, 192.00, 240.00, 350.00, 448.00, 560.00, 700.00, 0, 0, 1, NULL, NULL, NULL),
(49, 1, 62, NULL, 'A+B', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 1, NULL, NULL, NULL),
(50, 1, 65, NULL, 'A', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 1, NULL, NULL, NULL),
(51, 1, 77, NULL, 'A+B+x', 120.00, 160.00, 200.00, 240.00, 320.00, 400.00, 500.00, 640.00, 800.00, 1000.00, 0, 0, 1, NULL, NULL, NULL),
(52, 1, 78, NULL, '2A+B+C+x', 18.00, 24.00, 30.00, 36.00, 48.00, 60.00, 75.00, 96.00, 120.00, 150.00, 0, 0, 1, NULL, NULL, NULL),
(53, 1, 79, NULL, '2A+3B+x', 60.00, 80.00, 100.00, 120.00, 160.00, 200.00, 250.00, 320.00, 400.00, 500.00, 0, 0, 1, NULL, NULL, NULL),
(54, 1, 82, NULL, '2A+3B+x', 108.00, 144.00, 180.00, 216.00, 288.00, 360.00, 450.00, 576.00, 720.00, 900.00, 0, 0, 1, NULL, NULL, NULL),
(55, 1, 85, NULL, 'A+B+0.57C+D+x', -21.42, -28.56, -35.70, -42.84, -57.12, -71.40, -89.25, -114.24, -142.80, -178.50, 0, 0, 1, NULL, NULL, NULL),
(56, 1, 86, NULL, 'A+2B+C+D+x', -48.00, -64.00, -80.00, -96.00, -128.00, -160.00, -200.00, -256.00, -320.00, -400.00, 0, 0, 1, NULL, NULL, NULL),
(57, 1, 87, NULL, '(22C/7B) (A+x)   =   Pi (C/B (A+x)', -6.00, -8.00, -10.00, -12.00, -16.00, -20.00, -25.00, -32.00, -40.00, -50.00, 0, 0, 1, NULL, NULL, NULL),
(58, 1, 99, NULL, 'A+B+C+D+E', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0, 0, 1, NULL, NULL, NULL),
(59, 2, 0, NULL, 'A', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 1, NULL, NULL, NULL),
(60, 2, 1, NULL, 'A', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 1, NULL, NULL, NULL),
(61, 2, 11, NULL, 'A+x', 0.00, 0.00, 0.00, 0.00, 0.00, -35.00, -43.50, -56.00, -70.00, -87.50, 1, 1, 1, NULL, NULL, NULL),
(62, 2, 12, NULL, 'A+B-0.43R+x', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 1, NULL, NULL, NULL),
(63, 2, 13, NULL, 'A+0.57B+C+x', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 1, NULL, NULL, NULL),
(64, 2, 14, NULL, 'A+C+x', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 1, NULL, NULL, NULL),
(65, 2, 15, NULL, 'A+C', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 1, NULL, NULL, NULL),
(66, 2, 21, NULL, 'A+B+C+x', 0.00, 0.00, 0.00, 0.00, 0.00, -70.00, -87.00, -112.00, -140.00, -175.00, 1, 1, 1, NULL, NULL, NULL),
(67, 2, 22, NULL, 'A+B+C+D+x', 0.00, 0.00, 0.00, 0.00, 0.00, -105.00, -130.50, -168.00, -210.00, -262.50, 1, 1, 1, NULL, NULL, NULL),
(68, 2, 23, NULL, 'A+B+C+x', 0.00, 0.00, 0.00, 0.00, 0.00, -70.00, -87.00, -112.00, -140.00, -175.00, 1, 1, 1, NULL, NULL, NULL),
(69, 2, 24, NULL, 'A+B+C', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 1, NULL, NULL, NULL),
(70, 2, 25, NULL, 'A+B+E', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 1, NULL, NULL, NULL),
(71, 2, 26, NULL, 'A+B+C', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 1, NULL, NULL, NULL),
(72, 2, 27, NULL, 'A+B+C+x', 0.00, 0.00, 0.00, 0.00, 0.00, -35.00, -43.50, -56.00, -70.00, -87.50, 1, 1, 1, NULL, NULL, NULL),
(73, 2, 28, NULL, 'A+B+C+x', 0.00, 0.00, 0.00, 0.00, 0.00, -35.00, -43.50, -56.00, -70.00, -87.50, 1, 1, 1, NULL, NULL, NULL),
(74, 2, 29, NULL, 'A+B+C+x', 0.00, 0.00, 0.00, 0.00, 0.00, -70.00, -87.00, -112.00, -140.00, -175.00, 1, 1, 1, NULL, NULL, NULL),
(75, 2, 31, NULL, 'A+B+C+D+x', 0.00, 0.00, 0.00, 0.00, 0.00, -105.00, -130.50, -168.00, -210.00, -262.50, 1, 1, 1, NULL, NULL, NULL),
(76, 2, 32, NULL, 'A+B+C+D+x', 0.00, 0.00, 0.00, 0.00, 0.00, -105.00, -130.50, -168.00, -210.00, -262.50, 1, 1, 1, NULL, NULL, NULL),
(77, 2, 33, NULL, '2A+1.7B+2C+x', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 1, NULL, NULL, NULL),
(78, 2, 34, NULL, 'A+B+C+E+x', 0.00, 0.00, 0.00, 0.00, 0.00, -35.00, -43.50, -56.00, -70.00, -87.50, 1, 1, 1, NULL, NULL, NULL),
(79, 2, 35, NULL, 'A+B+C+E+x', 0.00, 0.00, 0.00, 0.00, 0.00, -35.00, -43.50, -56.00, -70.00, -87.50, 1, 1, 1, NULL, NULL, NULL),
(80, 2, 36, NULL, 'A+B+C+D+x', 0.00, 0.00, 0.00, 0.00, 0.00, -70.00, -87.00, -112.00, -140.00, -175.00, 1, 1, 1, NULL, NULL, NULL),
(81, 2, 41, NULL, 'A+B+C+D+E+x', 0.00, 0.00, 0.00, 0.00, 0.00, -70.00, -87.00, -112.00, -140.00, -175.00, 1, 1, 1, NULL, NULL, NULL),
(82, 2, 44, NULL, 'A+B+C+D+E+x', 0.00, 0.00, 0.00, 0.00, 0.00, -140.00, -174.00, -224.00, -280.00, -350.00, 1, 1, 1, NULL, NULL, NULL),
(83, 2, 46, NULL, 'A+2B+C+E', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 1, NULL, NULL, NULL),
(84, 2, 47, NULL, '2A+B+C+D+x', 0.00, 0.00, 0.00, 0.00, 0.00, 105.00, 130.50, 168.00, 210.00, 262.50, 1, 1, 1, NULL, NULL, NULL),
(85, 2, 51, NULL, '2(A+B)+C+D+x', 0.00, 0.00, 0.00, 0.00, 0.00, -175.00, -217.50, -280.00, -350.00, -437.50, 1, 1, 1, NULL, NULL, NULL),
(86, 2, 56, NULL, 'A+B+C+D+2E+x', 0.00, 0.00, 0.00, 0.00, 0.00, -175.00, -217.50, -280.00, -350.00, -437.50, 1, 1, 1, NULL, NULL, NULL),
(87, 2, 63, NULL, '2A+3B+C+D+x', 0.00, 0.00, 0.00, 0.00, 0.00, -210.00, -261.00, -336.00, -420.00, -525.00, 1, 1, 1, NULL, NULL, NULL),
(88, 2, 64, NULL, 'A+B+C+2D+E+F+x', 0.00, 0.00, 0.00, 0.00, 0.00, -210.00, -261.00, -336.00, -420.00, -525.00, 1, 1, 1, NULL, NULL, NULL),
(89, 2, 67, NULL, 'A', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 1, NULL, NULL, NULL),
(90, 2, 75, NULL, '22/7(A+x)+B', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 1, NULL, NULL, NULL),
(91, 2, 77, NULL, '(22/7)C(A+x)', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 1, NULL, NULL, NULL),
(92, 2, 98, NULL, 'A+2B+C+D+x', 0.00, 0.00, 0.00, 0.00, 0.00, -140.00, -174.00, -224.00, -280.00, -350.00, 1, 1, 1, NULL, NULL, NULL),
(93, 2, 99, NULL, 'A+B+C+D+E', 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 1, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_activity` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_path` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `main_activity`, `postal_address`, `email`, `fax`, `telephone`, `website`, `municipal`, `region`, `national`, `logo_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Main Company', 'BSS Administrator', 'P.o Box 31988', 'info@bss.com', '255898955', '0765983234', 'www.abc.go.tz', 'Ubungo', 'Dar es salaam', 'Tanzania', 'upload/5f2f0f4565f9d.jpg', '2020-08-08 16:49:29', '2020-08-08 16:55:31', NULL),
(2, 'ABC Company', 'Construction', 'P.O Box Manza', 'info@abc.go.tz', '123456', '0765983234', 'www.abc.go.tz', 'Mwanza', 'Dar es salaam', 'Tanzania', 'upload/5f2f0f4565f9d.jpg', '2020-08-08 17:47:01', '2020-08-08 17:47:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `company_clients`
--

CREATE TABLE `company_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(11) NOT NULL,
  `client_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `municipal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_clients`
--

INSERT INTO `company_clients` (`id`, `company_id`, `client_name`, `postal_address`, `street_name`, `municipal`, `region`, `nationality`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Nyatta Construction', 'P.O Box Manza', 'Kirumba', 'Mwanza', 'Mwanza', 'Tanzania', '2020-08-08 17:02:31', '2020-08-08 17:02:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `elements`
--

CREATE TABLE `elements` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `element_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stdcode_id` int(11) NOT NULL,
  `steel_type_id` int(11) NOT NULL,
  `density` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `elements`
--

INSERT INTO `elements` (`id`, `project_id`, `element_name`, `stdcode_id`, `steel_type_id`, `density`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'First Floor', 1, 1, 7850.00, '2020-08-08 18:01:56', '2020-08-08 18:01:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `main_members`
--

CREATE TABLE `main_members` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stdcode_id` int(11) NOT NULL,
  `mproperty_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `material_properties`
--

CREATE TABLE `material_properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `standard_code_id` int(11) NOT NULL,
  `property` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `material_properties`
--

INSERT INTO `material_properties` (`id`, `standard_code_id`, `property`, `created_at`, `updated_at`) VALUES
(1, 0, 'T', '2020-08-08 17:26:22', '2020-08-08 17:26:22'),
(2, 0, 'R', '2020-08-08 17:26:22', '2020-08-08 17:26:22'),
(3, 0, 'Y', '2020-08-08 17:26:22', '2020-08-08 17:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(11) NOT NULL,
  `element_id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bar_mark` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bar_type` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bar_size` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_members` int(11) NOT NULL,
  `no_of_bar_in_each` int(11) NOT NULL,
  `total_no_of_bars` int(11) NOT NULL,
  `total_length_of_bars` double(8,2) NOT NULL,
  `shape_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `length_a` double(8,2) DEFAULT NULL,
  `length_b` double(8,2) DEFAULT NULL,
  `length_c` double(8,2) DEFAULT NULL,
  `length_d` double(8,2) DEFAULT NULL,
  `length_e` double(8,2) DEFAULT NULL,
  `length_f` double(8,2) DEFAULT NULL,
  `length_r` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `project_id`, `element_id`, `name`, `bar_mark`, `bar_type`, `bar_size`, `total_members`, `no_of_bar_in_each`, `total_no_of_bars`, `total_length_of_bars`, `shape_code`, `length_a`, `length_b`, `length_c`, `length_d`, `length_e`, `length_f`, `length_r`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'BEAM 01', '01', NULL, 'T8', 2, 4, 8, 4000.00, '32', 300.00, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-16 16:22:13', '2020-08-16 16:22:13', NULL),
(2, 1, 1, 'BEAM 02', '01', NULL, 'T8', 3, 5, 15, 6000.00, '32', 200.00, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-16 16:49:03', '2020-08-16 16:49:03', NULL),
(3, 1, 1, 'BEAM 03', '01', NULL, 'T10', 10, 2, 20, 9600.00, '35', 200.00, 300.00, NULL, NULL, NULL, NULL, NULL, '2020-08-16 16:59:12', '2020-08-16 17:00:44', '2020-08-16 17:00:44'),
(4, 1, 1, 'BEAM 03', '01', NULL, 'T8', 7, 3, 21, 6720.00, '32', 120.00, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-16 17:02:52', '2020-08-16 17:02:52', NULL),
(5, 1, 1, 'BEAM 04', '01', NULL, 'T10', 12, 3, 36, 14760.00, '32', 210.00, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-16 17:05:40', '2020-08-16 17:05:40', NULL),
(6, 1, 1, 'BEAM 04', '01', NULL, 'T12', 12, 2, 24, 8160.00, '32', 120.00, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-16 17:11:19', '2020-08-16 17:11:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_07_14_220504_create_companies_table', 1),
(4, '2020_07_14_223134_create_projects_table', 1),
(5, '2020_07_14_224932_create_company_clients_table', 1),
(6, '2020_07_15_100422_create_standard_codes_of_practice__table', 1),
(7, '2020_07_15_101154_create_material_properties__table', 1),
(8, '2020_07_24_063711_create_main_members_table', 1),
(9, '2020_07_24_102439_create_elements_table', 1),
(10, '2020_07_24_102749_create_members_table', 1),
(11, '2020_07_25_211007_create_bbs_formula_table', 1),
(12, '2020_07_25_215112_create_steel_type_table', 1),
(13, '2020_08_01_202250_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2020-08-08 16:53:01', '2020-08-08 16:53:01'),
(2, 'role-create', 'web', '2020-08-08 16:53:01', '2020-08-08 16:53:01'),
(3, 'role-edit', 'web', '2020-08-08 16:53:01', '2020-08-08 16:53:01'),
(4, 'role-delete', 'web', '2020-08-08 16:53:01', '2020-08-08 16:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` int(11) NOT NULL,
  `prepared_by` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_prepared` datetime NOT NULL,
  `checked_by` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_checked` datetime NOT NULL,
  `reviewed_by` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_reviewed` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `client_id`, `prepared_by`, `date_prepared`, `checked_by`, `date_checked`, `reviewed_by`, `date_reviewed`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Construction of Ubungo Bus Terminal', 1, 'Eng Mgusi N', '2020-08-08 00:00:00', 'Eng Nyamtukila', '2020-08-08 00:00:00', '-', '2020-08-08 00:00:00', '2020-08-08 17:03:04', '2020-08-08 17:03:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2020-08-08 16:53:01', '2020-08-08 16:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `standard_codes_of_practice`
--

CREATE TABLE `standard_codes_of_practice` (
  `id` int(10) UNSIGNED NOT NULL,
  `standard_code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shape_code` int(11) NOT NULL,
  `remarks` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `standard_codes_of_practice`
--

INSERT INTO `standard_codes_of_practice` (`id`, `standard_code`, `shape_code`, `remarks`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'BS. 4466 – 1989', 0, 'none', '2020-08-08 20:24:00', '2020-08-08 20:24:00', NULL),
(2, 'BS. 8866 – 2005', 0, 'none', '2020-08-08 20:24:00', '2020-08-08 20:24:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `steel_type`
--

CREATE TABLE `steel_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `steel_type`
--

INSERT INTO `steel_type` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'T', '2020-08-08 17:30:52', '2020-08-08 17:30:52', NULL),
(2, 'R', '2020-08-08 17:30:52', '2020-08-08 17:30:52', NULL),
(3, 'Y', '2020-08-08 17:30:52', '2020-08-08 17:30:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `member_id`, `company_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 0, 'Erick Mathias', 'erickmathias34@gmail.com', NULL, '$2y$10$dL3ta8dHHgqrutZI0Cy2KuATXuIUaknddU4yavC44D93r/OuInzGK', 'phhkXg3sCSBlQZ2zNSN62i2QAomjST3nJlT91rOXw6opa2oe0QVcOvx8rHNc', '2020-08-08 16:53:00', '2020-08-08 16:53:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bbs_formula`
--
ALTER TABLE `bbs_formula`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_clients`
--
ALTER TABLE `company_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elements`
--
ALTER TABLE `elements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_members`
--
ALTER TABLE `main_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material_properties`
--
ALTER TABLE `material_properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `standard_codes_of_practice`
--
ALTER TABLE `standard_codes_of_practice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `steel_type`
--
ALTER TABLE `steel_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bbs_formula`
--
ALTER TABLE `bbs_formula`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company_clients`
--
ALTER TABLE `company_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `elements`
--
ALTER TABLE `elements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_members`
--
ALTER TABLE `main_members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `material_properties`
--
ALTER TABLE `material_properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `standard_codes_of_practice`
--
ALTER TABLE `standard_codes_of_practice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `steel_type`
--
ALTER TABLE `steel_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
