-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2025 a las 08:38:02
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `skyvoid`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe`
--

CREATE TABLE `informe` (
  `Id` int(100) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Telefono` varchar(50) NOT NULL,
  `Factura` varchar(50) NOT NULL,
  `FechaDeCompra` date NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Detalles` varchar(50) NOT NULL,
  `Daño` varchar(50) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Modelo` varchar(50) NOT NULL,
  `Serie` varchar(50) NOT NULL,
  `FechaDeReclamo` date NOT NULL,
  `Accesorios` varchar(50) NOT NULL,
  `FirmaDelCliente` varchar(50) NOT NULL,
  `FirmaDePanafoto` varchar(50) NOT NULL,
  `Estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `informe`
--

INSERT INTO `informe` (`Id`, `Nombre`, `Telefono`, `Factura`, `FechaDeCompra`, `Correo`, `Detalles`, `Daño`, `Marca`, `Modelo`, `Serie`, `FechaDeReclamo`, `Accesorios`, `FirmaDelCliente`, `FirmaDePanafoto`, `Estado`) VALUES
(2, 'Jose Gonzales', '6679-9081', '11', '2023-06-02', 'josego09@hotmail.com', 'laptop dañada', 'pantalla rota', 'HP', 'Oment 200', '201', '2023-06-03', 'cargador', 'Jose', 'Alberto', 'en_revision'),
(3, 'Efrain', '6609-9081', '12', '2023-05-04', 'efrcas12@gmail.com', 'radio dañado', 'bocina dañada', 'Sony', 'walkman 43', '23', '2023-05-05', 'cargador', 'Efrain', 'Alberto', 'revisado'),
(10, 'Jorge', 'Gonzales', '123456', '0000-00-00', 'jorge09@hotmail.com', 'televisor dañado', 'pantalla roto', 'sony', 'lb1200', 'Bravia', '0000-00-00', 'nada', 'Jorge', 'Albertp', 'requiere_cambio'),
(11, 'Austin caballero', '12345', '15', '0000-00-00', 'austin09@hotmail.com', 'telefono dañado', 'entrada de cargador defectuoso', 'samsung', 'galaxy', '12', '0000-00-00', 'cargador', 'Austin', 'Alberto', 'revisado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usertech`
--

CREATE TABLE `usertech` (
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Cedula` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usertech`
--

INSERT INTO `usertech` (`Nombre`, `Apellido`, `Cedula`, `Correo`, `Contraseña`) VALUES
('Anthony', 'Castillo', '4-739-1734', 'antocas109@hotmail.com', 'electronicas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userwork`
--

CREATE TABLE `userwork` (
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Cedula` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `userwork`
--

INSERT INTO `userwork` (`Nombre`, `Apellido`, `Cedula`, `Correo`, `Contraseña`) VALUES
('Alejandro', 'Carrera', '1-739-1733', 'aleanbykreig@hotmail.com', 'bicicletas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `informe`
--
ALTER TABLE `informe`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `informe`
--
ALTER TABLE `informe`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
