-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/07/2023 às 14:43
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `phpmotors`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `images`
--

CREATE TABLE `images` (
  `imgId` int(10) UNSIGNED NOT NULL,
  `invId` int(10) UNSIGNED NOT NULL,
  `imgName` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `imgPath` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `imgDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `imgPrimary` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `images`
--

INSERT INTO `images` (`imgId`, `invId`, `imgName`, `imgPath`, `imgDate`, `imgPrimary`) VALUES
(3, 1, 'jeep-wrangler.jpg', '/phpmotors/images/vehicles/jeep-wrangler.jpg', '2023-06-30 15:23:26', 1),
(4, 1, 'jeep-wrangler-tn.jpg', '/phpmotors/images/vehicles/jeep-wrangler-tn.jpg', '2023-06-30 15:23:26', 1),
(5, 2, 'ford-modelt.jpg', '/phpmotors/images/vehicles/ford-modelt.jpg', '2023-06-30 15:23:44', 1),
(6, 2, 'ford-modelt-tn.jpg', '/phpmotors/images/vehicles/ford-modelt-tn.jpg', '2023-06-30 15:23:44', 1),
(7, 3, 'lambo-Adve.jpg', '/phpmotors/images/vehicles/lambo-Adve.jpg', '2023-06-30 15:24:57', 1),
(8, 3, 'lambo-Adve-tn.jpg', '/phpmotors/images/vehicles/lambo-Adve-tn.jpg', '2023-06-30 15:24:57', 1),
(9, 4, 'monster.jpg', '/phpmotors/images/vehicles/monster.jpg', '2023-06-30 15:25:35', 1),
(10, 4, 'monster-tn.jpg', '/phpmotors/images/vehicles/monster-tn.jpg', '2023-06-30 15:25:35', 1),
(11, 5, 'ms.jpg', '/phpmotors/images/vehicles/ms.jpg', '2023-06-30 15:26:18', 1),
(12, 5, 'ms-tn.jpg', '/phpmotors/images/vehicles/ms-tn.jpg', '2023-06-30 15:26:18', 1),
(13, 6, 'bat.jpg', '/phpmotors/images/vehicles/bat.jpg', '2023-06-30 15:26:39', 1),
(14, 6, 'bat-tn.jpg', '/phpmotors/images/vehicles/bat-tn.jpg', '2023-06-30 15:26:39', 1),
(15, 7, 'mm.jpg', '/phpmotors/images/vehicles/mm.jpg', '2023-06-30 15:26:54', 1),
(16, 7, 'mm-tn.jpg', '/phpmotors/images/vehicles/mm-tn.jpg', '2023-06-30 15:26:54', 1),
(17, 8, 'fire-truck.jpg', '/phpmotors/images/vehicles/fire-truck.jpg', '2023-06-30 15:27:07', 1),
(18, 8, 'fire-truck-tn.jpg', '/phpmotors/images/vehicles/fire-truck-tn.jpg', '2023-06-30 15:27:07', 1),
(19, 9, 'crown-vic.jpg', '/phpmotors/images/vehicles/crown-vic.jpg', '2023-06-30 15:27:30', 1),
(20, 9, 'crown-vic-tn.jpg', '/phpmotors/images/vehicles/crown-vic-tn.jpg', '2023-06-30 15:27:30', 1),
(21, 10, 'camaro.jpg', '/phpmotors/images/vehicles/camaro.jpg', '2023-06-30 15:27:54', 1),
(22, 10, 'camaro-tn.jpg', '/phpmotors/images/vehicles/camaro-tn.jpg', '2023-06-30 15:27:54', 1),
(23, 11, 'escalade.jpg', '/phpmotors/images/vehicles/escalade.jpg', '2023-06-30 15:28:15', 1),
(24, 11, 'escalade-tn.jpg', '/phpmotors/images/vehicles/escalade-tn.jpg', '2023-06-30 15:28:15', 1),
(25, 12, 'hummer.jpg', '/phpmotors/images/vehicles/hummer.jpg', '2023-06-30 15:28:28', 1),
(26, 12, 'hummer-tn.jpg', '/phpmotors/images/vehicles/hummer-tn.jpg', '2023-06-30 15:28:28', 1),
(27, 13, 'aerocar.jpg', '/phpmotors/images/vehicles/aerocar.jpg', '2023-06-30 15:28:45', 1),
(28, 13, 'aerocar-tn.jpg', '/phpmotors/images/vehicles/aerocar-tn.jpg', '2023-06-30 15:28:45', 1),
(31, 14, 'fbi-img.png', '/phpmotors/images/vehicles/fbi-img.png', '2023-06-30 15:33:21', 1),
(32, 14, 'fbi-img-tn.png', '/phpmotors/images/vehicles/fbi-img-tn.png', '2023-06-30 15:33:21', 1),
(33, 15, 'dog-car-img.png', '/phpmotors/images/vehicles/dog-car-img.png', '2023-06-30 15:33:38', 1),
(34, 15, 'dog-car-img-tn.png', '/phpmotors/images/vehicles/dog-car-img-tn.png', '2023-06-30 15:33:38', 1),
(35, 17, 'lemon-car-img.png', '/phpmotors/images/vehicles/lemon-car-img.png', '2023-06-30 15:33:51', 1),
(36, 17, 'lemon-car-img-tn.png', '/phpmotors/images/vehicles/lemon-car-img-tn.png', '2023-06-30 15:33:51', 1),
(37, 18, 'banana-car-img.png', '/phpmotors/images/vehicles/banana-car-img.png', '2023-06-30 15:34:03', 1),
(38, 18, 'banana-car-img-tn.png', '/phpmotors/images/vehicles/banana-car-img-tn.png', '2023-06-30 15:34:03', 1),
(39, 24, 'delorean.jpg', '/phpmotors/images/vehicles/delorean.jpg', '2023-06-30 15:39:42', 1),
(40, 24, 'delorean-tn.jpg', '/phpmotors/images/vehicles/delorean-tn.jpg', '2023-06-30 15:39:42', 1),
(47, 7, 'mistery.jpg', '/phpmotors/images/vehicles/mistery.jpg', '2023-06-30 15:47:20', 0),
(48, 7, 'mistery-tn.jpg', '/phpmotors/images/vehicles/mistery-tn.jpg', '2023-06-30 15:47:20', 0),
(49, 6, 'batmovel.jpg', '/phpmotors/images/vehicles/batmovel.jpg', '2023-06-30 15:48:01', 0),
(50, 6, 'batmovel-tn.jpg', '/phpmotors/images/vehicles/batmovel-tn.jpg', '2023-06-30 15:48:01', 0),
(51, 12, 'hummer_2.jpg', '/phpmotors/images/vehicles/hummer_2.jpg', '2023-06-30 15:48:42', 0),
(52, 12, 'hummer_2-tn.jpg', '/phpmotors/images/vehicles/hummer_2-tn.jpg', '2023-06-30 15:48:42', 0),
(53, 19, 'banana-car.jpg', '/phpmotors/images/vehicles/banana-car.jpg', '2023-06-30 16:03:57', 1),
(54, 19, 'banana-car-tn.jpg', '/phpmotors/images/vehicles/banana-car-tn.jpg', '2023-06-30 16:03:57', 1),
(55, 20, 'apple-car.jpg', '/phpmotors/images/vehicles/apple-car.jpg', '2023-06-30 16:04:09', 1),
(56, 20, 'apple-car-tn.jpg', '/phpmotors/images/vehicles/apple-car-tn.jpg', '2023-06-30 16:04:09', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imgId`),
  ADD KEY `invId` (`invId`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `images`
--
ALTER TABLE `images`
  MODIFY `imgId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `FK_inv_images` FOREIGN KEY (`invId`) REFERENCES `inventory` (`invId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
