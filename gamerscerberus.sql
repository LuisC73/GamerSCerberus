-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2021 a las 22:38:13
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gamerscerberus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nameP` varchar(50) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `valueP` int(11) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `nameP`, `brand`, `category`, `valueP`, `img`) VALUES
(8, 'Fallot 76', 'All', ' Game', 130000, ' https://generacionxbox.com/wp-content/uploads/2021/01/fallout-76.jpg'),
(13, 'Fifa 22', 'All', ' Game', 138000, 'https://www.gamerfocus.co/wp-content/uploads/2021/10/fifa_22_cambio_nombre_exito.jpg'),
(14, 'Mando Ps5', 'Playstation', ' Accesories', 220000, 'https://i.blogs.es/eaaf81/ps5-mando/1366_2000.jpeg'),
(15, 'Far Cry 6', 'All', ' Game', 210000, 'https://image.api.playstation.com/vulcan/img/rnd/202106/1514/fkPaEpz998Uu7QaofSj1VIhr.png'),
(16, 'Back 4 Blood', 'All', ' Game', 180000, 'https://cdn1.epicgames.com/57dfd95548214a138218e56cd9e5b9d8/offer/EGS_Back4Blood_TurtleRockStudios_S2-1200x1600-0cd4ac84bb5491a81aa6ebfcbea9dfbf.jpg'),
(18, 'Gta V', 'All', ' Game', 99000, 'https://cdn2.unrealengine.com/Diesel%2Fproductv2%2Fgrand-theft-auto-v%2Fhome%2FGTAV_EGS_Artwork_1920x1080_Hero-Carousel_V06-1920x1080-1503e4b1320d5652dd4f57466c8bcb79424b3fc0.jpg'),
(19, 'Doom SC', 'Playstation', ' Game', 149000, 'https://image.api.playstation.com/vulcan/ap/rnd/202007/2122/bY1xte88Ypvrt6TwE43g08YR.png'),
(20, 'Headset RGB', '', ' Accesories', 142000, 'https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Faudifonos.png?alt=media&token=259fcc49-0e01-4045-aa29-a3b71084aba7'),
(21, 'Mouse RGB', '', ' Accesories', 70000, 'https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Fmouse.png?alt=media&token=612cd2fc-2395-438e-ad18-69c798d41561'),
(22, 'Keyboard RGB', '', ' Accesories', 120000, 'https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Fteclado.png?alt=media&token=5a2105d7-188c-4879-aae5-992bd21ebd91'),
(23, 'Keyboard RGB', '', ' Accesories', 168900, 'https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Fteclado2.png?alt=media&token=fd0fe740-3762-4df6-82d5-28895ba77a6c'),
(24, 'Headset Gamer', '', ' Accesories', 125000, 'https://www.multimall.cr/web/image/product.template/10326/image_1024?unique=fbc491b'),
(25, 'Mouse Gamer', '', ' Accesories', 70000, 'https://jumbocolombiafood.vteximg.com.br/arquivos/ids/3233000-1000-1000/image-5ebcd5ad41a14f468286531d70e52855.jpg?v=636536270750630000'),
(26, 'Playstation 4 Pro', 'Playstation', ' Console', 1420000, 'https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Fps4.png?alt=media&token=d52fe157-37ee-41b9-ba86-a8408456bae9'),
(27, 'Playstation 5', 'Playstation', ' Console', 4000000, 'https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Fps5.png?alt=media&token=ef7af1d1-5854-4f3f-bab0-ede82673774b'),
(28, 'Xbox S', 'Xbox', ' Console', 1500000, 'https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Fxboxs.png?alt=media&token=1ba38958-d2e4-4b7f-8a9b-9abb9fdfd8e6'),
(29, 'Xbox X', 'Xbox', ' Console', 3100000, 'https://firebasestorage.googleapis.com/v0/b/gamerscerberus.appspot.com/o/inicio%2Fxboxx.png?alt=media&token=78592d02-d9eb-4722-aec7-6f2fd07fb8b3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nameUser` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwordUser` varchar(20) NOT NULL,
  `addressUser` varchar(50) NOT NULL,
  `photoUser` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
