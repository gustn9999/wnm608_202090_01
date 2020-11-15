-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 20-11-07 18:19
-- 서버 버전: 5.6.49-cll-lve
-- PHP 버전: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `hyunsoo_wnm608`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(9,0) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `category` varchar(64) NOT NULL,
  `main_image` varchar(256) NOT NULL,
  `image_other` varchar(512) NOT NULL,
  `image_thumb` varchar(256) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `products`
--

INSERT INTO `products` (`id`, `name`, `email`, `url`, `price`, `date_create`, `date_modify`, `category`, `main_image`, `image_other`, `image_thumb`, `description`) VALUES
(1, 'topgun', '', 'topgun@jonathanux.com', 30, '2020-11-07 18:01:31', '2020-11-07 18:01:31', 'cocktail', 'topgun_main.jpg', 'topgun_main_1.jpg,topgun_main_2.jpg,topgun_main_3.jpg', 'topgun_main_t.jpg', 'citron vodka, cucumber, rosemary, lemon'),
(2, 'paradisetea', '', 'paradisetea@jonathanux.com', 30, '2020-11-07 18:03:11', '2020-11-07 18:03:11', 'cocktail', 'paradisetea_main.jpg', 'paradisetea_1.jpg, paradisetea_2.jpg, paradisetea_3.jpg', 'paradisetea_t.jpg', 'dark rum, thai tea, mint, sage, lime'),
(3, 'gardenparty', '', 'gardenparty@jonathanux.com', 30, '2020-11-07 18:05:08', '2020-11-07 18:05:08', 'cocktail', 'gardenparty_main.jpg', 'gardenparty_1.jpg, gardenparty_2.jpg, gardenparty_3.jpg', 'gardenparty_t.jpg', 'tequila, mezcal, strawberry, cucumber, lime'),
(4, 'dragonisland', '', 'dragonisland@jonathanux.com', 30, '2020-11-07 18:07:38', '2020-11-07 18:07:38', 'cocktail', 'dragonisland_main.jpg', 'dragonisland_1.jpg, dragonisland_2.jpg, dragonisland_3.jpg', 'dragonisland_t.jpg,', 'tequila, mezcal, falernum, ancho, verde, lemon'),
(5, 'flowersour', '', 'flowersour@jonathanux.com', 30, '2020-11-07 18:14:21', '2020-11-07 18:14:21', 'cocktail', 'flowersour_main.jpg', 'flowersour_1.jpg, flowersour_2.jpg, flowersour_3.jpg', 'flowersour_t.jpg', 'mezcal, creme de violette, jasmin water, hibiscus, egg white, lime'),
(6, 'samuraijack', '', 'samuraijack@jonathanux.com', 30, '2020-11-07 18:15:25', '2020-11-07 18:15:25', 'cocktail', 'samuraijack_main.jpg', 'samuraijack_1.jpg, samuraijack_2.jpg, samuraijack_3.jpg', 'samuraijack_t.jpg', 'ginger infused japanese whisky, spiced pear, amaro, vermouth di torino'),
(7, 'passionproject', '', 'passionproject@jonathanux.com', 30, '2020-11-07 18:18:03', '2020-11-07 18:18:03', 'cocktail', 'passionproject_main.jpg', 'passionproject_1.jpg, passionproject_2.jpg, passionproject_3.jpg', 'passionproject_t.jpg', 'lemongrass vodka, thai ginger, passionfruit, grapefruit, lemon'),
(8, 'madhatter', '', 'madhatter@jonathanux.com', 30, '2020-11-07 18:19:08', '2020-11-07 18:19:08', 'cocktail', 'madhatter_main.jpg', 'madhatter_1.jpg, madhatter_2.jpg, madhatter_3.jpg', 'madhatter_t.jpg', 'gin, chareau, green tea, mango, pineapple, lime');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
