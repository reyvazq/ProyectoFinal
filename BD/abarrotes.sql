-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2023 at 05:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abarrotes`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nom_cliente` varchar(30) DEFAULT NULL,
  `tel_cliente` varchar(30) DEFAULT NULL,
  `correo_cliente` varchar(40) DEFAULT NULL,
  `password` varchar(245) DEFAULT NULL,
  `nivel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nom_cliente`, `tel_cliente`, `correo_cliente`, `password`, `nivel`) VALUES
(31, 'majouwu', '1234567890', 'majito@gmail.com', '$2y$10$BECOT6aHiR.YPWTc2aUUjukmFererme4jnaYMqohDLTQbejhMVbnS', 'admin'),
(42, 'Rey', '21627781469', 'rey@hotmail.com', '$2y$10$PpwExEvtxN2nxBSrQkkopuChVy9QdJaun9dhv35XRz9UAEqyUdfUm', 'cliente'),
(43, 'Admin', '0988766543', 'admin@admin.com', '$2y$10$P3HPEMYYITZc610/jMNq2.cQuPYd0wAgHnTZSU4j3wtaBrCFnfY4u', 'admin'),
(44, '[value-2]', '[value-3]', '[value-4]', '[value-5]', 'cliente'),
(45, '[value-2]', '[value-3]', 'asjdnlkja', '[value-5]', 'asdjkn a'),
(46, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]'),
(48, 'rey', '21313452', 'asda@asda.com', '123', 'admin'),
(49, '123', 'asdfasdf', '123', '123', '123'),
(51, 'Cacahuates', '2712311895', 'ascasfbfbsf', '$2y$10$I5GsPBUnB/HZW73UNNOOseG9RjGINj6ckxgV6PRcvafb0QQ7YRYcW', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `envios`
--

CREATE TABLE `envios` (
  `id_envio` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `direccion` varchar(250) NOT NULL,
  `id_venta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `envios`
--

INSERT INTO `envios` (`id_envio`, `nombre`, `apellido`, `correo`, `telefono`, `direccion`, `id_venta`) VALUES
(25, 'Majito', 'UWU', 'majito@gmail.com', '2712311895', 'Las conchitas', 45);

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `inventario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `imagen`, `inventario`) VALUES
(1, 'Aceite', 'Ingredientes de alta calidad', 20.9, 'aceite.png', 7),
(2, 'Jabon', 'Jabon Roma', 9.99, 'jabon.png', 20),
(3, 'Galletas', 'Distintos sabores', 10, 'galletas.png', -7),
(4, 'Arroz', 'Super extra grueso 900gr', 20, 'arroz.png', 6),
(5, 'spaghetti', 'Barrilla No.7', 23, 'spaguetti.png', 7),
(6, 'Coca cola', 'Sabor original 600ml', 18, 'cocacola.png', 9),
(7, 'Sal', 'La fina sal natural', 15, 'sal.png', 5),
(8, 'Chettos', 'xtra flamin hot', 12, 'sabritas.png', 4),
(9, 'Shampoo', 'Hair food sandia', 34, '1684483258.png', 10),
(10, 'Jamón FUD', 'De pavo virginia', 29, 'jamon.png', 7),
(11, 'Cacahuates', 'BOLSITA DE CACAHUATE JAPONES. 60 GRS.', 5, '1684466278.png', 20),
(12, 'Jugo del valle', 'Jugo del valle de 250ml', 13, '1684467031.png', 8),
(21, 'Prueba Modificar', 'Sigue siendo prueba', 33, '1684483237.png', 21);

-- --------------------------------------------------------

--
-- Table structure for table `productos_venta`
--

CREATE TABLE `productos_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `productos_venta`
--

INSERT INTO `productos_venta` (`id`, `id_venta`, `id_producto`, `cantidad`, `precio`, `total`) VALUES
(44, 45, 12, 1, 15, 15);

-- --------------------------------------------------------

--
-- Table structure for table `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `stotal` double(10,2) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL,
  `id_pago` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ventas`
--

INSERT INTO `ventas` (`id`, `id_usuario`, `stotal`, `fecha`, `status`, `id_pago`) VALUES
(45, 31, 15.00, '2023-05-20 03:31:23', 'Cancelado', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `envios`
--
ALTER TABLE `envios`
  ADD PRIMARY KEY (`id_envio`);

--
-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productos_venta`
--
ALTER TABLE `productos_venta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indexes for table `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `envios`
--
ALTER TABLE `envios`
  MODIFY `id_envio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `productos_venta`
--
ALTER TABLE `productos_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `productos_venta`
--
ALTER TABLE `productos_venta`
  ADD CONSTRAINT `id_producto` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
