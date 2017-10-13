-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2017 a las 16:37:55
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `title` text NOT NULL,
  `date_pub` date NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id_blog`, `title`, `date_pub`, `image`, `content`, `author`) VALUES
(2, 'asdasd', '2017-09-08', 'epa.png', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, obcaecati id labore enim quos adipisci fugiat sit molestias. Illum, amet totam. Fugiat, natus maiores? Aperiam quibusdam blanditiis iusto nisi ullam esse repudiandae ratione assumenda non alias quae, laboriosam sed facilis temporibus dignissimos provident voluptatibus aliquam, ad ducimus ex corporis! Quidem officiis facere, harum quod iste voluptatum explicabo dolor officia ipsa repudiandae vitae dignissimos cum dolore tempora iusto iure maxime quo itaque, autem, aut praesentium quia modi neque possimus! Ducimus quod fugiat ipsum excepturi temporibus, eaque voluptates, consectetur recusandae quo rem, obcaecati necessitatibus veniam blanditiis quas harum. Veritatis, quia dolorem in incidunt distinctio rem amet! Et perspiciatis amet, eaque consequuntur cumque quos dolorem fugit incidunt nisi molestias maiores optio doloremque officia ipsa sunt repudiandae quasi reiciendis sequi asperiores saepe! Vero dignissimos iure recusandae sapiente liber', 'Roger ZuÃ±iga Torres'),
(4, 'Recomendaciones para comprar', '2017-09-08', '2.jpg', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate, obcaecati id labore enim quos adipisci fugiat sit molestias. Illum, amet totam. Fugiat, natus maiores? Aperiam quibusdam blanditiis iusto nisi ullam esse repudiandae ratione assumenda non alias quae, laboriosam sed facilis temporibus dignissimos provident voluptatibus aliquam, ad ducimus ex corporis! Quidem officiis facere, harum quod iste voluptatum explicabo dolor officia ipsa repudiandae vitae dignissimos cum dolore tempora iusto iure maxime quo itaque, autem, aut praesentium quia modi neque possimus! Ducimus quod fugiat ipsum excepturi temporibus, eaque voluptates, consectetur recusandae quo rem, obcaecati necessitatibus veniam blanditiis quas harum. Veritatis, quia dolorem in incidunt distinctio rem amet! Et perspiciatis amet, eaque consequuntur cumque quos dolorem fugit incidunt nisi molestias maiores optio doloremque officia ipsa sunt repudiandae quasi reiciendis sequi asperiores saepe! Vero dignissimos iure recusandae sapiente liber', 'Otro Author');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `iddetallepedido` int(11) NOT NULL,
  `idpedido` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detallepedido`
--

INSERT INTO `detallepedido` (`iddetallepedido`, `idpedido`, `idproducto`, `cantidad`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 1, 1),
(5, 1, 2, 1),
(6, 1, 3, 1),
(7, 3, 1, 1),
(8, 3, 2, 1),
(9, 3, 3, 1),
(10, 4, 1, 1),
(11, 4, 2, 1),
(12, 4, 3, 1),
(13, 5, 1, 1),
(14, 5, 2, 1),
(15, 5, 3, 1),
(16, 6, 1, 1),
(17, 6, 2, 1),
(18, 6, 3, 1),
(19, 7, 1, 1),
(20, 7, 2, 1),
(21, 7, 3, 1),
(22, 8, 1, 1),
(23, 8, 2, 1),
(24, 8, 3, 1),
(25, 9, 1, 1),
(26, 9, 2, 1),
(27, 9, 3, 1),
(28, 10, 1, 1),
(29, 10, 2, 1),
(30, 10, 3, 1),
(31, 11, 1, 1),
(32, 11, 2, 1),
(33, 11, 3, 1),
(34, 12, 1, 1),
(35, 12, 2, 1),
(36, 12, 3, 1),
(37, 13, 1, 1),
(38, 13, 2, 1),
(39, 13, 3, 1),
(40, 14, 1, 1),
(41, 14, 2, 1),
(42, 14, 3, 1),
(43, 14, 1, 1),
(44, 14, 2, 1),
(45, 14, 3, 1),
(46, 14, 1, 1),
(47, 14, 2, 1),
(48, 14, 3, 1),
(49, 14, 1, 1),
(50, 14, 2, 1),
(51, 14, 3, 1),
(52, 14, 1, 1),
(53, 14, 2, 1),
(54, 14, 3, 1),
(55, 14, 1, 1),
(56, 14, 2, 1),
(57, 14, 3, 1),
(58, 14, 1, 1),
(59, 14, 2, 1),
(60, 14, 3, 1),
(61, 14, 1, 1),
(62, 14, 2, 1),
(63, 14, 3, 1),
(64, 14, 1, 1),
(65, 14, 2, 1),
(66, 14, 3, 1),
(67, 14, 1, 1),
(68, 14, 2, 1),
(69, 14, 3, 1),
(70, 14, 1, 1),
(71, 14, 2, 1),
(72, 14, 3, 1),
(73, 14, 1, 1),
(74, 14, 2, 1),
(75, 14, 3, 1),
(76, 14, 1, 1),
(77, 14, 2, 1),
(78, 14, 3, 1),
(79, 14, 1, 1),
(80, 14, 2, 1),
(81, 14, 3, 1),
(82, 14, 1, 1),
(83, 14, 2, 1),
(84, 14, 3, 1),
(85, 14, 1, 1),
(86, 14, 2, 1),
(87, 14, 3, 1),
(88, 14, 1, 1),
(89, 14, 2, 1),
(90, 14, 3, 1),
(91, 14, 1, 1),
(92, 14, 2, 1),
(93, 14, 3, 1),
(94, 14, 1, 1),
(95, 14, 2, 1),
(96, 14, 3, 1),
(97, 14, 1, 1),
(98, 14, 2, 1),
(99, 14, 3, 1),
(100, 14, 1, 1),
(101, 14, 2, 1),
(102, 14, 3, 1),
(103, 14, 1, 1),
(104, 14, 2, 1),
(105, 14, 3, 1),
(106, 14, 1, 1),
(107, 14, 2, 1),
(108, 14, 3, 1),
(109, 14, 1, 1),
(110, 14, 2, 1),
(111, 14, 3, 1),
(112, 14, 1, 1),
(113, 14, 2, 1),
(114, 14, 3, 1),
(115, 39, 3, 1),
(116, 39, 2, 1),
(117, 39, 3, 1),
(118, 39, 3, 1),
(119, 39, 2, 1),
(120, 39, 3, 1),
(121, 39, 2, 1),
(122, 39, 3, 1),
(123, 39, 3, 1),
(124, 39, 2, 1),
(125, 41, 3, 1),
(126, 41, 2, 1),
(127, 41, 3, 1),
(128, 41, 3, 1),
(129, 41, 2, 1),
(130, 42, 3, 1),
(131, 42, 2, 1),
(132, 42, 3, 1),
(133, 42, 3, 1),
(134, 42, 2, 1),
(135, 43, 3, 1),
(136, 43, 2, 1),
(137, 43, 3, 1),
(138, 43, 3, 1),
(139, 43, 3, 1),
(140, 43, 2, 1),
(141, 43, 3, 1),
(142, 43, 3, 1),
(143, 43, 3, 1),
(144, 43, 2, 1),
(145, 43, 3, 1),
(146, 43, 3, 1),
(147, 43, 3, 1),
(148, 43, 2, 1),
(149, 43, 3, 1),
(150, 43, 3, 1),
(151, 43, 3, 1),
(152, 43, 3, 1),
(153, 43, 3, 1),
(154, 43, 3, 1),
(155, 43, 3, 1),
(156, 43, 3, 1),
(157, 43, 3, 1),
(158, 43, 3, 1),
(159, 43, 3, 1),
(160, 43, 3, 1),
(161, 43, 3, 1),
(162, 43, 3, 1),
(163, 43, 3, 1),
(164, 43, 3, 1),
(165, 43, 2, 1),
(166, 43, 3, 1),
(167, 43, 3, 1),
(168, 43, 3, 1),
(169, 43, 3, 1),
(170, 43, 3, 1),
(171, 43, 3, 1),
(172, 43, 3, 1),
(173, 43, 3, 1),
(174, 43, 3, 1),
(175, 43, 3, 1),
(176, 43, 3, 1),
(177, 43, 3, 1),
(178, 43, 3, 1),
(179, 43, 3, 1),
(180, 43, 3, 1),
(181, 43, 3, 1),
(182, 43, 2, 1),
(183, 43, 2, 1),
(184, 43, 2, 1),
(185, 43, 2, 1),
(186, 43, 2, 1),
(187, 43, 2, 1),
(188, 43, 2, 1),
(189, 43, 2, 1),
(190, 43, 2, 1),
(191, 43, 2, 1),
(192, 43, 2, 1),
(193, 43, 2, 1),
(194, 43, 2, 1),
(195, 43, 3, 1),
(196, 43, 2, 1),
(197, 43, 3, 1),
(198, 43, 3, 1),
(199, 43, 3, 1),
(200, 43, 3, 1),
(201, 43, 3, 1),
(202, 43, 3, 1),
(203, 43, 3, 1),
(204, 43, 3, 1),
(205, 43, 3, 1),
(206, 43, 3, 1),
(207, 43, 3, 1),
(208, 43, 3, 1),
(209, 43, 3, 1),
(210, 43, 3, 1),
(211, 43, 3, 1),
(212, 43, 3, 1),
(213, 43, 2, 1),
(214, 43, 2, 1),
(215, 43, 2, 1),
(216, 43, 2, 1),
(217, 43, 2, 1),
(218, 43, 2, 1),
(219, 43, 2, 1),
(220, 43, 2, 1),
(221, 43, 2, 1),
(222, 43, 2, 1),
(223, 43, 2, 1),
(224, 43, 2, 1),
(225, 43, 2, 1),
(226, 43, 3, 1),
(227, 43, 2, 1),
(228, 43, 3, 1),
(229, 43, 3, 1),
(230, 43, 3, 1),
(231, 43, 3, 1),
(232, 43, 3, 1),
(233, 43, 3, 1),
(234, 43, 3, 1),
(235, 43, 3, 1),
(236, 43, 3, 1),
(237, 43, 3, 1),
(238, 43, 3, 1),
(239, 43, 3, 1),
(240, 43, 3, 1),
(241, 43, 3, 1),
(242, 43, 3, 1),
(243, 43, 3, 1),
(244, 43, 2, 1),
(245, 43, 2, 1),
(246, 43, 2, 1),
(247, 43, 2, 1),
(248, 43, 2, 1),
(249, 43, 2, 1),
(250, 43, 2, 1),
(251, 43, 2, 1),
(252, 43, 2, 1),
(253, 43, 2, 1),
(254, 43, 2, 1),
(255, 43, 2, 1),
(256, 43, 2, 1),
(257, 43, 3, 1),
(258, 43, 2, 1),
(259, 43, 3, 1),
(260, 43, 3, 1),
(261, 43, 2, 1),
(262, 43, 3, 1),
(263, 43, 3, 1),
(264, 43, 3, 1),
(265, 43, 3, 1),
(266, 43, 3, 1),
(267, 43, 3, 1),
(268, 43, 3, 1),
(269, 43, 3, 1),
(270, 43, 3, 1),
(271, 43, 3, 1),
(272, 43, 3, 1),
(273, 43, 3, 1),
(274, 43, 3, 1),
(275, 43, 3, 1),
(276, 43, 3, 1),
(277, 43, 3, 1),
(278, 43, 2, 1),
(279, 43, 2, 1),
(280, 43, 2, 1),
(281, 43, 2, 1),
(282, 43, 2, 1),
(283, 43, 2, 1),
(284, 43, 2, 1),
(285, 43, 2, 1),
(286, 43, 2, 1),
(287, 43, 2, 1),
(288, 43, 2, 1),
(289, 43, 2, 1),
(290, 43, 2, 1),
(291, 43, 3, 1),
(292, 43, 2, 1),
(293, 43, 3, 1),
(294, 43, 3, 1),
(295, 43, 3, 1),
(296, 43, 3, 1),
(297, 43, 3, 1),
(298, 43, 3, 1),
(299, 43, 3, 1),
(300, 43, 3, 1),
(301, 43, 3, 1),
(302, 43, 3, 1),
(303, 43, 3, 1),
(304, 43, 3, 1),
(305, 43, 3, 1),
(306, 43, 3, 1),
(307, 43, 3, 1),
(308, 43, 3, 1),
(309, 43, 3, 1),
(310, 43, 3, 1),
(311, 43, 3, 1),
(312, 43, 3, 1),
(313, 43, 3, 1),
(314, 43, 3, 1),
(315, 43, 3, 1),
(316, 43, 3, 1),
(317, 43, 3, 1),
(318, 43, 3, 1),
(319, 43, 3, 1),
(320, 43, 3, 1),
(321, 43, 2, 1),
(322, 43, 1, 1),
(323, 43, 3, 1),
(324, 43, 3, 1),
(325, 43, 3, 1),
(326, 43, 3, 1),
(327, 43, 3, 1),
(328, 43, 3, 1),
(329, 43, 2, 1),
(330, 43, 3, 1),
(331, 43, 3, 1),
(332, 43, 2, 1),
(333, 43, 1, 1),
(334, 43, 3, 1),
(335, 43, 2, 1),
(336, 43, 1, 1),
(337, 43, 2, 1),
(338, 43, 3, 1),
(339, 43, 3, 1),
(340, 43, 3, 1),
(341, 43, 3, 1),
(342, 43, 3, 1),
(343, 43, 3, 1),
(344, 43, 3, 1),
(345, 43, 3, 1),
(346, 43, 2, 1),
(347, 43, 3, 1),
(348, 43, 2, 1),
(349, 43, 2, 1),
(350, 43, 2, 1),
(351, 43, 1, 1),
(352, 43, 3, 1),
(353, 43, 3, 1),
(354, 43, 3, 1),
(355, 43, 3, 1),
(356, 43, 3, 1),
(357, 43, 3, 1),
(358, 43, 3, 1),
(359, 43, 3, 1),
(360, 43, 3, 1),
(361, 43, 3, 1),
(362, 43, 3, 1),
(363, 43, 3, 1),
(364, 43, 3, 1),
(365, 43, 3, 1),
(366, 43, 3, 1),
(367, 43, 3, 1),
(368, 43, 3, 1),
(369, 43, 3, 1),
(370, 43, 3, 1),
(371, 43, 2, 1),
(372, 43, 2, 1),
(373, 43, 3, 1),
(374, 43, 3, 1),
(375, 43, 3, 1),
(376, 43, 3, 1),
(377, 43, 3, 1),
(378, 43, 3, 1),
(379, 43, 2, 1),
(380, 43, 3, 1),
(381, 43, 3, 1),
(382, 43, 2, 1),
(383, 43, 3, 1),
(384, 43, 2, 1),
(385, 43, 3, 1),
(386, 43, 3, 1),
(387, 43, 2, 1),
(388, 43, 3, 1),
(389, 43, 3, 1),
(390, 43, 3, 1),
(391, 43, 3, 1),
(392, 43, 3, 1),
(393, 43, 3, 1),
(394, 43, 3, 1),
(395, 43, 3, 1),
(396, 43, 3, 1),
(397, 43, 3, 1),
(398, 43, 3, 1),
(399, 43, 3, 1),
(400, 43, 3, 1),
(401, 43, 2, 1),
(402, 43, 2, 1),
(403, 43, 2, 1),
(404, 43, 2, 1),
(405, 43, 3, 1),
(406, 43, 3, 1),
(407, 43, 3, 1),
(408, 43, 3, 1),
(409, 43, 3, 1),
(410, 43, 3, 1),
(411, 43, 3, 1),
(412, 43, 3, 1),
(413, 43, 3, 1),
(414, 43, 3, 1),
(415, 43, 3, 1),
(416, 43, 3, 1),
(417, 43, 2, 1),
(418, 43, 3, 1),
(419, 43, 3, 1),
(420, 43, 3, 1),
(421, 43, 3, 1),
(422, 43, 2, 1),
(423, 43, 1, 1),
(424, 43, 3, 1),
(425, 43, 2, 1),
(426, 43, 3, 1),
(427, 43, 2, 1),
(428, 43, 2, 1),
(429, 43, 2, 1),
(430, 43, 2, 1),
(431, 43, 2, 1),
(432, 43, 2, 1),
(433, 43, 2, 1),
(434, 43, 2, 1),
(435, 43, 2, 1),
(436, 43, 2, 1),
(437, 43, 2, 1),
(438, 43, 2, 1),
(439, 43, 2, 1),
(440, 43, 2, 1),
(441, 43, 2, 1),
(442, 43, 2, 1),
(443, 43, 2, 1),
(444, 43, 2, 1),
(445, 43, 2, 1),
(446, 43, 2, 1),
(447, 43, 3, 1),
(448, 43, 3, 1),
(449, 43, 3, 1),
(450, 43, 2, 1),
(451, 43, 1, 1),
(452, 43, 2, 1),
(453, 43, 3, 1),
(454, 43, 3, 1),
(455, 43, 3, 1),
(456, 43, 3, 1),
(457, 43, 3, 1),
(458, 43, 3, 1),
(459, 43, 3, 1),
(460, 43, 3, 1),
(461, 43, 3, 1),
(462, 43, 3, 1),
(463, 43, 3, 1),
(464, 43, 3, 1),
(465, 43, 3, 1),
(466, 43, 3, 1),
(467, 43, 3, 1),
(468, 43, 3, 1),
(469, 43, 3, 1),
(470, 43, 3, 1),
(471, 43, 3, 1),
(472, 43, 3, 1),
(473, 43, 3, 1),
(474, 43, 3, 1),
(475, 43, 3, 1),
(476, 43, 3, 1),
(477, 43, 3, 1),
(478, 43, 3, 1),
(479, 43, 3, 1),
(480, 43, 3, 1),
(481, 43, 3, 1),
(482, 43, 3, 1),
(483, 43, 3, 1),
(484, 43, 3, 1),
(485, 43, 3, 1),
(486, 43, 2, 1),
(487, 43, 3, 1),
(488, 43, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idpedido` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `fechapedido` date NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idpedido`, `idcliente`, `fechapedido`, `estado`) VALUES
(1, 1, '0000-00-00', 0),
(2, 1, '0000-00-00', 0),
(3, 1, '0000-00-00', 0),
(4, 1, '0000-00-00', 0),
(5, 1, '0000-00-00', 0),
(6, 1, '0000-00-00', 0),
(7, 1, '0000-00-00', 0),
(8, 1, '0000-00-00', 0),
(9, 1, '0000-00-00', 0),
(10, 1, '0000-00-00', 0),
(11, 1, '0000-00-00', 0),
(12, 1, '0000-00-00', 0),
(13, 1, '0000-00-00', 0),
(14, 1, '2017-08-26', 0),
(15, 1, '2017-08-26', 0),
(16, 1, '2017-08-26', 0),
(17, 1, '2017-08-26', 0),
(18, 1, '2017-08-26', 0),
(19, 1, '2017-08-26', 0),
(20, 1, '2017-08-26', 0),
(21, 1, '2017-08-26', 0),
(22, 1, '2017-08-26', 0),
(23, 1, '2017-08-26', 0),
(24, 1, '2017-08-26', 0),
(25, 1, '2017-08-26', 0),
(26, 1, '2017-08-26', 0),
(27, 1, '2017-08-26', 0),
(28, 1, '2017-08-26', 0),
(29, 1, '2017-08-26', 0),
(30, 1, '2017-08-26', 0),
(31, 1, '2017-08-26', 0),
(32, 1, '2017-08-26', 0),
(33, 1, '2017-08-26', 0),
(34, 1, '2017-08-26', 0),
(35, 1, '2017-08-26', 0),
(36, 1, '2017-08-26', 0),
(37, 1, '2017-08-26', 0),
(38, 1, '2017-08-26', 0),
(39, 2, '2017-08-27', 0),
(40, 2, '2017-08-27', 0),
(41, 2, '2017-08-27', 0),
(42, 2, '2017-08-27', 0),
(43, 2, '2017-09-04', 0),
(44, 2, '2017-09-04', 0),
(45, 2, '2017-09-04', 0),
(46, 2, '2017-09-04', 0),
(47, 2, '2017-09-04', 0),
(48, 2, '2017-09-04', 0),
(49, 2, '2017-09-04', 0),
(50, 2, '2017-09-04', 0),
(51, 2, '2017-09-04', 0),
(52, 2, '2017-09-04', 0),
(53, 2, '2017-09-04', 0),
(54, 2, '2017-09-04', 0),
(55, 2, '2017-09-04', 0),
(56, 2, '2017-09-04', 0),
(57, 2, '2017-09-04', 0),
(58, 2, '2017-09-04', 0),
(59, 2, '2017-09-04', 0),
(60, 2, '2017-09-04', 0),
(61, 2, '2017-09-04', 0),
(62, 2, '2017-09-04', 0),
(63, 2, '2017-09-04', 0),
(64, 2, '2017-09-04', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproducto` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcioncorta` varchar(300) NOT NULL,
  `descripcionlarga` varchar(1000) DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `nombreimagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproducto`, `titulo`, `descripcioncorta`, `descripcionlarga`, `precio`, `stock`, `nombreimagen`) VALUES
(1, 'chocolates sublime 50gr', 'Chocolates con esencia de lucuma', 'Chocolates con esencia de lucuma bañados de chocolate con almendras', '1.50', -4, 'sublime.png'),
(2, 'chocosoda chocomax de 500mg', 'Galletas bañadas en chocolate con pisco', 'Galletas bañadas en chocolate con pisco, galletas saladas', '0.80', -108, 'chocosoda.png'),
(3, 'snickers en barra de 100g', 'Cubierto de chocolate con leche y cubierto', 'Cubierto de chocolate con leche y cubierto con mantequilla', '1.00', -241, 'snickers.png'),
(4, 'Hola', 'Hola', 'HOla', '2.00', 300, 'apple-touch-icon.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tipousuario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nickname`, `password`, `tipousuario`) VALUES
(1, 'Alfredo', '10470c3b4b1fed12c3baac014be15fac67c6e815', 'lector'),
(2, 'jdiego', '8d99c5c8a9ba71047aa4b6c927d2afabbe493b0e', 'lector');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD PRIMARY KEY (`iddetallepedido`),
  ADD KEY `idpedido` (`idpedido`),
  ADD KEY `idproducto` (`idproducto`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `idcliente` (`idcliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproducto`),
  ADD UNIQUE KEY `titulo` (`titulo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `nickname` (`nickname`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  MODIFY `iddetallepedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=489;
--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `detallepedido_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detallepedido_ibfk_2` FOREIGN KEY (`idpedido`) REFERENCES `pedidos` (`idpedido`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
