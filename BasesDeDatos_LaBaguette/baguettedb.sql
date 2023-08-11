-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-08-2023 a las 18:22:20
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

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
-- Estructura de tabla para la tabla `cajeros`
--

CREATE TABLE `cajeros` (
  `identificacion` int(11) NOT NULL COMMENT 'Numero de identificación del cajero',
  `nombre` varchar(255) NOT NULL COMMENT 'Nombre del cajero',
  `apellido` varchar(255) NOT NULL COMMENT 'Apellido del cajero',
  `numero_de_contacto` varchar(20) NOT NULL COMMENT 'Número de contacto del cajero'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL COMMENT 'Numero entero consecutivo autoincremental',
  `tdoc` varchar(50) NOT NULL COMMENT 'tipo de documento del ciente',
  `ndocu` int(10) NOT NULL COMMENT 'numero unico e irrepetible del documento del cliente',
  `nombre` varchar(255) NOT NULL COMMENT 'Nombre y apellido del cliente',
  `fnaci` varchar(255) NOT NULL COMMENT 'dia de nacimiento del cliente',
  `correo` varchar(100) NOT NULL COMMENT 'Correo electronico del cliente',
  `direccion` varchar(100) NOT NULL COMMENT 'Dirección de vivienda del cliente',
  `numcont` varchar(13) NOT NULL COMMENT 'Numero de contacto del cliente',
  `contra` varchar(11) NOT NULL COMMENT 'codigo numericio  clave para ingresar',
  `codigos` int(6) NOT NULL,
  `role_id` int(2) DEFAULT NULL,
  `regisFecha` date NOT NULL COMMENT 'fecha del registro de un usuario',
  `regisHora` time(6) NOT NULL COMMENT 'hora de registro de un usuario o cliente',
  `fechaContra` date NOT NULL COMMENT 'fecha de cambio de contraseña',
  `horaContra` time(6) NOT NULL COMMENT 'hora del cambio de contraseña de un cliente o ususario'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `tdoc`, `ndocu`, `nombre`, `fnaci`, `correo`, `direccion`, `numcont`, `contra`, `codigos`, `role_id`, `regisFecha`, `regisHora`, `fechaContra`, `horaContra`) VALUES
(2, 'CC', 1047393266, 'Jose E', '2023-05-06', 'ser123gio@hotmail.com', 'carrera4b#35-4', '3143546087', '1234', 0, 2, '0000-00-00', '00:00:00.000000', '0000-00-00', '00:00:00.000000'),
(3, 'TI', 1126445521, 'diego diaz', '2023-05-19', 'baparra728@gmail.com', 'chilicambe', '3125859706', '32111', 773081, 1, '0000-00-00', '00:00:00.000000', '0000-00-00', '00:00:00.000000'),
(4, 'TI', 1126445524, 'diego diaz', '2023-05-19', 'jhojanmega123@gmail.com', 'chilicambe', '3125859706', '321', 224412, 1, '0000-00-00', '00:00:00.000000', '0000-00-00', '00:00:00.000000'),
(5, 'CE', 2147483647, 'tatiana', '2023-05-26', 'tatianap425@gmail.com', 'las quintas', '4454656464564', '2147483647', 0, 1, '0000-00-00', '00:00:00.000000', '0000-00-00', '00:00:00.000000'),
(6, 'CE', 123456789, 'jose', '2004-04-08', 'josem@gmail.com', 'win', '12454', '45', 0, 1, '0000-00-00', '00:00:00.000000', '0000-00-00', '00:00:00.000000'),
(7, 'CC', 123456, 'pepe', '1989-08-25', 'pepe@gmail.com', 'calle 52 a  # 17-45 int 3 apt 205', '3333331245444', '0', 0, 1, '0000-00-00', '00:00:00.000000', '0000-00-00', '00:00:00.000000'),
(8, 'CC', 1, 'pepe', '1989-08-25', 'pepe@gmail.com', 'calle 52 a  # 17-45 int 3 apt 205', '3333331245444', '1234', 0, 1, '0000-00-00', '00:00:00.000000', '0000-00-00', '00:00:00.000000'),
(9, 'CC', 1083866827, 'Brayan Armando', '789577', 'baparra728@gmail.com', 'sdfsdfsdf', 'sdfsdf', '1234', 773081, 2, '0000-00-00', '00:00:00.000000', '0000-00-00', '00:00:00.000000'),
(11, 'CC', 2147483647, 'josue', '01-01-01', 'negrito@gmail.com', 'El Paraiso', '4654654532132', '1236', 0, 1, '0000-00-00', '00:00:00.000000', '0000-00-00', '00:00:00.000000');

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
(3, 'manquillo', 'coqui', 'manquillo@gmailcom', 'hay pan?'),
(4, 'pepe', 'picaso', 'pepe@gmail.com', 'hola quiero pan de la abuela y como y porque tan caro. '),
(5, 'pepe', 'picaso', 'pepe@gmail.com', 'hola quiero pan de la abuela y como y porque tan caro. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciarsesions`
--

CREATE TABLE `iniciarsesions` (
  `id_usuario` int(11) NOT NULL,
  `tdoc` text NOT NULL,
  `numb` int(10) NOT NULL,
  `contra` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `iniciarsesions`
--

INSERT INTO `iniciarsesions` (`id_usuario`, `tdoc`, `numb`, `contra`) VALUES
(1, 'ce', 4566, '45645645645456'),
(2, 'ce', 4566, '456'),
(3, 'ce', 4566, '456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventarios`
--

CREATE TABLE `inventarios` (
  `id_referencia` int(11) NOT NULL COMMENT 'identificador del producto',
  `nombre_prd` varchar(30) NOT NULL COMMENT 'nombre del producto',
  `cantidad_inicial` int(11) NOT NULL COMMENT 'cantidad inicial del producto',
  `cantidad_disponible` int(11) NOT NULL COMMENT 'cantidad disponible del producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL COMMENT 'Codigo del Pedido',
  `nom_producto` varchar(255) NOT NULL COMMENT 'Nombre del Producto',
  `cantidad` int(11) NOT NULL COMMENT 'Cantidad del Producto',
  `estado` enum('pendiente','enviado','recibido') NOT NULL COMMENT 'Estado del Pedido',
  `estado_producto` enum('disponible','agotado') NOT NULL COMMENT 'Estado del Producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `nom_producto`, `cantidad`, `estado`, `estado_producto`) VALUES
(0, 'pan de la abuela', 3, 'pendiente', 'disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL COMMENT 'identificador del producto',
  `precio` decimal(10,0) NOT NULL COMMENT 'precio del producto',
  `cantidad` int(11) NOT NULL COMMENT 'cantidad de adquisición del producto',
  `nombre_p` varchar(30) NOT NULL COMMENT 'nombre del producto'
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

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre`, `apellidos`, `numero_de_contacto`) VALUES
(0, 'Brayan Armando', 'Parra Barrios', '3134156651');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recuperaciones`
--

CREATE TABLE `recuperaciones` (
  `id` int(11) NOT NULL,
  `codigo` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `recuperaciones`
--

INSERT INTO `recuperaciones` (`id`, `codigo`) VALUES
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
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(2) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'Cliente'),
(2, 'Administrador'),
(3, 'supervisor');

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
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`idcontacto`);

--
-- Indices de la tabla `iniciarsesions`
--
ALTER TABLE `iniciarsesions`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  ADD PRIMARY KEY (`nombre_prd`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `nombre_p` (`nombre_p`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `recuperaciones`
--
ALTER TABLE `recuperaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Numero entero consecutivo autoincremental', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `idcontacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `iniciarsesions`
--
ALTER TABLE `iniciarsesions`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identificador del producto';

--
-- AUTO_INCREMENT de la tabla `recuperaciones`
--
ALTER TABLE `recuperaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`nombre_p`) REFERENCES `inventarios` (`nombre_prd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
