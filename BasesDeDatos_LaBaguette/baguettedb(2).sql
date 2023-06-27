-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2023 a las 15:37:47
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `baguettedb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajero`
--

CREATE TABLE `cajero` (
  `identificacion` int(11) NOT NULL COMMENT 'Numero de identificación del cajero',
  `nombre` varchar(255) NOT NULL COMMENT 'Nombre del cajero',
  `apellido` varchar(255) NOT NULL COMMENT 'Apellido del cajero',
  `numero_de_contacto` varchar(20) NOT NULL COMMENT 'Número de contacto del cajero'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL COMMENT 'Numero entero consecutivo autoincremental',
  `tdoc` varchar(50) NOT NULL COMMENT 'tipo de documento del ciente',
  `ndocu` int(10) NOT NULL COMMENT 'numero unico e irrepetible del documento del cliente',
  `nombre` varchar(255) NOT NULL COMMENT 'Nombre y apellido del cliente',
  `fnaci` varchar(255) NOT NULL COMMENT 'dia de nacimiento del cliente',
  `correo` varchar(100) NOT NULL COMMENT 'Correo electronico del cliente',
  `direccion` varchar(100) NOT NULL COMMENT 'Dirección de vivienda del cliente',
  `numcont` varchar(20) NOT NULL COMMENT 'Numero de contacto del cliente',
  `contra` int(11) NOT NULL COMMENT 'codigo numericio  clave para ingresar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `tdoc`, `ndocu`, `nombre`, `fnaci`, `correo`, `direccion`, `numcont`, `contra`) VALUES
(1, 'CC', 1003865834, 'sergio gaviria', '2023-05-15', 'sergiozuleta153@gmail.cm', 'calle4sur#5-25', '3188848639', 123456),
(2, 'CE', 1548522154, 'pepito perez', '2023-05-06', 'ser123gio@hotmail.com', 'carrera4b#35-4', '3143546087', 12345),
(3, 'TI', 1126445521, 'diego diaz', '2023-05-19', 'pipediaz@gmail.com', 'chilicambe', '3125859706', 321),
(4, 'TI', 1126445521, 'diego diaz', '2023-05-19', 'pipediaz@gmail.com', 'chilicambe', '3125859706', 321),
(5, 'CE', 2147483647, 'tatiana', '2023-05-26', 'tatianap425@gmail.com', 'las quintas', '44546564645645', 2147483647),
(6, 'CE', 123654798, 'jose', '2004-04-08', 'josem@gmail.com', 'win', '12454', 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente_producto`
--

CREATE TABLE `cliente_producto` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `idcontacto` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `correo` varchar(50) NOT NULL,
  `mensaje` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`idcontacto`, `nombre`, `apellido`, `correo`, `mensaje`) VALUES
(1, 'SERGIO', 'ZULETA', 'sergiozuleta153@gmail.cm', 'HAY BUÃ‘UELOS? SI NO PA CUANDO'),
(3, 'manquillo', 'coqui', 'manquillo@gmailcom', 'hay pan?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciarsesion`
--

CREATE TABLE `iniciarsesion` (
  `id_usuario` int(11) NOT NULL,
  `tdoc` text NOT NULL,
  `numb` int(10) NOT NULL,
  `contra` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `iniciarsesion`
--

INSERT INTO `iniciarsesion` (`id_usuario`, `tdoc`, `numb`, `contra`) VALUES
(1, 'ce', 4566, '45645645645456'),
(2, 'ce', 4566, '456'),
(3, 'ce', 4566, '456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_referencia` int(11) NOT NULL COMMENT 'Codigo de referencia del producto',
  `cantidad_inicial` int(11) NOT NULL COMMENT 'Cantidad Inicial del inventario',
  `cantidad_disponible` int(11) NOT NULL COMMENT 'Cantidad Disponible del inventario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL COMMENT 'Codigo del Pedido',
  `nom_producto` varchar(255) NOT NULL COMMENT 'Nombre del Producto',
  `cantidad` int(11) NOT NULL COMMENT 'Cantidad del Producto',
  `estado` enum('pendiente','enviado','recibido') NOT NULL COMMENT 'Estado del Pedido',
  `estado_producto` enum('disponible','agotado') NOT NULL COMMENT 'Estado del Producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_venta`
--

CREATE TABLE `pedido_venta` (
  `id_pedido_venta` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL COMMENT 'Código del Pedido',
  `id_venta` int(11) NOT NULL COMMENT 'Registro unico de la venta'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL COMMENT 'Codigo del Producto',
  `nombre` varchar(255) NOT NULL COMMENT 'Nombre del Producto',
  `precio` decimal(10,2) NOT NULL COMMENT 'Precio del Producto',
  `cantidad` int(11) NOT NULL COMMENT 'Cantidad del producto',
  `id_referencia` int(11) NOT NULL COMMENT 'Codigo de referencia del producto',
  `proveedor_id` int(11) NOT NULL COMMENT 'Identificacion del proveedor del producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL COMMENT 'Identificacion del proveedor',
  `nombre` varchar(255) NOT NULL COMMENT 'Nombre del proveedor',
  `apellidos` varchar(255) NOT NULL COMMENT 'Apellido del proveedor',
  `numero_de_contacto` varchar(20) NOT NULL COMMENT 'Numero del contacto del proveedor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recuperacion`
--

CREATE TABLE `recuperacion` (
  `id` int(11) NOT NULL,
  `codigo` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `recuperacion`
--

INSERT INTO `recuperacion` (`id`, `codigo`) VALUES
(1, 1454414),
(2, 454654),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 0),
(17, 0),
(18, 0),
(19, 0),
(20, 0),
(21, 0),
(22, 0),
(23, 0),
(24, 0),
(25, 0),
(26, 0),
(27, 0),
(28, 0),
(29, 0),
(30, 0),
(31, 0),
(32, 0),
(33, 0),
(34, 0),
(35, 0),
(36, 0),
(37, 0),
(38, 0),
(39, 0),
(40, 0),
(41, 0),
(42, 0),
(43, 0),
(44, 0),
(45, 0),
(46, 0),
(47, 0),
(48, 0),
(49, 0),
(50, 0),
(51, 0),
(52, 0),
(53, 0),
(54, 0),
(55, 0),
(56, 0),
(57, 0),
(58, 0),
(59, 0),
(60, 0),
(61, 0),
(62, 0),
(63, 0),
(64, 0),
(65, 0),
(66, 0),
(67, 0),
(68, 0),
(69, 0),
(70, 0),
(71, 0),
(72, 0),
(73, 0),
(74, 0),
(75, 0),
(76, 0),
(77, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL COMMENT 'Registro unico de la venta',
  `fecha` date NOT NULL COMMENT 'Fecha en la que se realizó la venta',
  `hora` time NOT NULL COMMENT 'Hora en la que se realizó la venta',
  `total` decimal(10,2) NOT NULL COMMENT 'Valor de total de la venta',
  `factura` varchar(255) NOT NULL COMMENT 'Factura generada por la venta',
  `cajero_identificacion` int(11) NOT NULL COMMENT 'Numero de identificacion del cajero'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cajero`
--
ALTER TABLE `cajero`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente_producto`
--
ALTER TABLE `cliente_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`idcontacto`);

--
-- Indices de la tabla `iniciarsesion`
--
ALTER TABLE `iniciarsesion`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_referencia`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `pedido_venta`
--
ALTER TABLE `pedido_venta`
  ADD PRIMARY KEY (`id_pedido_venta`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_referencia` (`id_referencia`),
  ADD KEY `proveedor_id` (`proveedor_id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `recuperacion`
--
ALTER TABLE `recuperacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `cajero_identificacion` (`cajero_identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Numero entero consecutivo autoincremental', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cliente_producto`
--
ALTER TABLE `cliente_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `idcontacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `iniciarsesion`
--
ALTER TABLE `iniciarsesion`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pedido_venta`
--
ALTER TABLE `pedido_venta`
  MODIFY `id_pedido_venta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recuperacion`
--
ALTER TABLE `recuperacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Registro unico de la venta';

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente_producto`
--
ALTER TABLE `cliente_producto`
  ADD CONSTRAINT `cliente_producto_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `cliente_producto_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `pedido_venta`
--
ALTER TABLE `pedido_venta`
  ADD CONSTRAINT `pedido_venta_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id_pedido`),
  ADD CONSTRAINT `pedido_venta_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id_venta`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_referencia`) REFERENCES `inventario` (`id_referencia`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedores` (`id_proveedor`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`cajero_identificacion`) REFERENCES `cajero` (`identificacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
