-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2023 a las 21:16:51
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `painthousebd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `empleados_id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `sexo` bit(1) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `fecha_de_nacimiento` date DEFAULT NULL,
  `Sucursal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`empleados_id`, `nombre`, `edad`, `sexo`, `direccion`, `fecha_de_nacimiento`, `Sucursal_id`) VALUES
(1, 'kevin Edel Castañeda Carrasco', 21, b'1', 'culiacansito', '2022-11-11', 2),
(2, 'Marlon Cristian Beltran Gomez', 34, b'1', 'Culiacan', '2022-09-09', 1),
(3, 'Morales Zayas Yael Magdiel', 81, b'1', 'Culiacan', '2022-08-15', 2),
(4, 'Aguirre Grijalva Eduardo Agustin', 52, b'1', 'Culiacan', '2022-10-06', 3),
(5, 'Sandoval Espinoza Armando', 25, b'1', 'Culiacansito', '2022-12-31', 4),
(6, 'Medinabeytia Barraza David Antonio', 34, b'1', 'Culiacan', '2022-08-11', 5),
(7, 'Santana Acosta Luis Fernando', 43, b'1', 'Culiacan', '2022-12-02', 6),
(8, 'Valdez de los Rios Jesus omar', 47, b'1', 'Culiacan', '2022-10-21', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ofertas`
--

CREATE TABLE `ofertas` (
  `ofertas_id` int(11) NOT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ofertas`
--

INSERT INTO `ofertas` (`ofertas_id`, `descripcion`, `url`, `fecha`) VALUES
(1, '60% de descuento en Pintura Vinil Exterior Interior- Acrílica Blanca Comex Pro1000 19 L                     ', 'subida_imagenes/51L1IP370wL._AC_SX425_.jpg', '2023-06-22'),
(2, '41% de descuento en cubetas de pintura color rojo de la marca Duralatex                                  ', 'subida_imagenes/images.jpg', '2023-06-22'),
(3, '24% de descuento en Sika - Sellador de resina acrílica - Sika Latex N - Blanco - Aditivo mejorador de resistencia y adherencias para morteros - Cubeta 19 L                             ', 'subida_imagenes/61KnpPGhaVL.__AC_SX300_SY300_QL70_ML2_.jpg', '2023-06-22'),
(4, 'Cubeta De Pintura Vinilica Acrilica Para Casas Interiores y Exteriores Techados 19 Litros 3 años (Blanco)      ', 'subida_imagenes/41NWRUiQqiL.__AC_SX300_SY300_QL70_ML2_.jpg', '2023-06-22'),
(5, '10% de descuento en Pintura Esmalte Secado Rapido 1 Litro (Cafe)\r\n', 'subida_imagenes/4174lxEvCLL.__AC_SX300_SY300_QL70_ML2_.jpg', '2023-06-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Productos_id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `ruta` varchar(45) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Productos_id`, `nombre`, `descripcion`, `precio`, `ruta`, `url`) VALUES
(1, 'Kit Completo para Pintar Brochas, Rodillo, Es', 'Papel crepado de alta resistencia, Fabricada ', 445, '‎GENERIC                       ', 'subida_imagenes/616bcieNW4L._AC_SX522_.jpg'),
(2, 'Truper PIPI-33E, Pistola para pintar eléctric', 'Pistola eléctrica para pintura con flujo de p', 1135, '‎Truper           ', 'subida_imagenes/61Ef1ptwhFL.__AC_SX300_SY300_QL70_ML2_.jpg'),
(3, 'Truper ROPI-920, Rodillos para pintar 9\", sup', 'Felpa de poliéster, en color amarillo.\r\nTubo ', 77, '‎GENERIC', 'subida_imagenes/61NHldnV4EL.__AC_SX300_SY300_QL70_ML2_.jpg'),
(4, 'SWRWJ Pistola de Pintura,Pulverizador de Pint', 'Este modelo está fabricado con piel de alta c', 759, 'SWRWJ          ', 'subida_imagenes/61RPzAj93+L._AC_SY300_SX300_.jpg'),
(5, 'Asixxsix Pulverizador de Pintura HVLP, Pistol', '【PERFECTO PARA UNA VARIEDAD DE PROYECTOS】 El ', 831, 'Spray Gun', 'subida_imagenes/71Zzfsc4M8L.__AC_SX300_SY300_QL70_ML2_.jpg'),
(6, 'de', 'de', 32, 'cde', 'subida_imagenes/61NHldnV4EL.__AC_SX300_SY300_QL70_ML2_.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `Sucursal_id` int(11) NOT NULL,
  `nombre` varchar(500) DEFAULT NULL,
  `direccion` varchar(500) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`Sucursal_id`, `nombre`, `direccion`, `url`) VALUES
(1, 'Azul Medio', 'Esmalte sintético de excelente resistencia a la intemperie y al amarilleo, basado en resinas alcídicas secantes y pigmentos de alta calidad y estabilidad. Interior y Exterior. Alto brillo. Excelente resistencia a la intemperie.                        ', 'subida_imagenes/azul_m.jpg'),
(2, 'Rojo Cherry', 'Pintura especializada y de alta calidad, fácil de aplicar y con una válvula que facilita la dispersión del producto para un acabado más uniforme y perfecto. Ideal para cualquier proyecto, ya sea casero o profesional. Ideal para todo tipo de proyectos, caseros o profesionales.                        ', 'subida_imagenes/rjo.jpg'),
(3, 'Blanco Puro', 'Se trata del blanco más común; sin matiz, ni esencia, ni una ligera coloración, es simplemente blanco. Utilizar pintura blanca de este estilo puede generar un espacio lleno de tranquilidad, homogéneo, sin distracciones.                        ', 'subida_imagenes/blanc.jpg'),
(4, 'Cafe Brown', 'Es un color seguro y confiable. Es un color asociado a la tierra, por eso es cálido, cómodo, seguro y natural. Es robusto, pero también puede ser sofisticado, sobre todo cuando se combinan entre sí distintos tonos de marrón. Se dice de él que es el color de la resiliencia y también de la seguridad material.                        ', 'subida_imagenes/caf.jpg'),
(5, 'Rojo Candy', 'La pintura Candy es un tinte intenso y traslúcido con un acabado extraordinario, muy luminoso e intenso que suele utilizarse principalmente para personalizar los coches, las motos o los cascos de estas, aunque hay quien la usa para pintar otras piezas.                        ', 'subida_imagenes/cany.jpg'),
(6, 'Morado Iris', 'Es un colorante muy fácil de usar para teñir ropa y cualquier otro tipo fibra textil natural, sintética (química) o la mezcla de estas, donde el porcentaje de natural sea mayor.                        ', 'subida_imagenes/mor.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`empleados_id`),
  ADD KEY `fk_empleados_Sucursal_idx` (`Sucursal_id`);

--
-- Indices de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  ADD PRIMARY KEY (`ofertas_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Productos_id`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`Sucursal_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `empleados_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ofertas`
--
ALTER TABLE `ofertas`
  MODIFY `ofertas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Productos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `Sucursal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `fk_empleados_Sucursal` FOREIGN KEY (`Sucursal_id`) REFERENCES `sucursal` (`Sucursal_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
