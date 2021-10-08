-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 08-10-2021 a las 10:51:46
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.30-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `MOVI_DB`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CARRITO`
--

CREATE TABLE `CARRITO` (
  `idCarrito` int NOT NULL,
  `correo` varchar(100) NOT NULL,
  `fecha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CATEGORIA`
--

CREATE TABLE `CATEGORIA` (
  `idCategoria` int NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `detalle` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `CATEGORIA_LIBRO`
--

CREATE TABLE `CATEGORIA_LIBRO` (
  `idCategoria` int NOT NULL,
  `idArticulo` int NOT NULL,
  `esLibro` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `COMPRA`
--

CREATE TABLE `COMPRA` (
  `idCompras` int NOT NULL,
  `idFactura` int NOT NULL,
  `idArticulo` int NOT NULL,
  `detalle` varchar(100) NOT NULL,
  `idLibro` tinyint NOT NULL,
  `cantidad` int NOT NULL,
  `subtotal` float NOT NULL,
  `idOferta` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `DETALLE_CARRITO`
--

CREATE TABLE `DETALLE_CARRITO` (
  `idCarrito` int NOT NULL,
  `idProducto` int NOT NULL,
  `idLibro` tinyint NOT NULL,
  `cantidad` int NOT NULL,
  `detalle` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `FACTURA`
--

CREATE TABLE `FACTURA` (
  `idFactura` int NOT NULL,
  `fecha` date NOT NULL,
  `correo` varchar(45) NOT NULL,
  `tipoPago` int NOT NULL,
  `nit` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `LIBRO`
--

CREATE TABLE `LIBRO` (
  `idLibro` int NOT NULL,
  `Autor` varchar(100) NOT NULL,
  `nombreLibro` varchar(100) NOT NULL,
  `FechaPublicacion` date NOT NULL,
  `Editorial` varchar(100) NOT NULL,
  `sinopsis` longtext NOT NULL,
  `imagen` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MONEDA`
--

CREATE TABLE `MONEDA` (
  `idMoneda` int NOT NULL,
  `valorQuetzales` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MOVI_USUARIO`
--

CREATE TABLE `MOVI_USUARIO` (
  `correo` varchar(100) NOT NULL,
  `cantidad` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `OFERTA`
--

CREATE TABLE `OFERTA` (
  `idOferta` int NOT NULL,
  `porcentaje` float NOT NULL,
  `idCategoria` int NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PAGO_SUBSCRIPCION`
--

CREATE TABLE `PAGO_SUBSCRIPCION` (
  `idPago` int NOT NULL,
  `correo` varchar(100) NOT NULL,
  `idSubscripcion` int NOT NULL,
  `fechaPago` date NOT NULL,
  `monto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SUBSCRIPCION`
--

CREATE TABLE `SUBSCRIPCION` (
  `idSubscripcion` int NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `SUBSCRIPCION_USUARIO`
--

CREATE TABLE `SUBSCRIPCION_USUARIO` (
  `idSubscripcionUsuario` int NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TIPO_PAGO`
--

CREATE TABLE `TIPO_PAGO` (
  `idTipo` int NOT NULL,
  `int` varchar(45) NOT NULL,
  `detalle` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `USUARIO`
--

CREATE TABLE `USUARIO` (
  `correo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `esAdmin` tinyint NOT NULL,
  `isAcrivo` tinyint NOT NULL,
  `imagenPerfil` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `CARRITO`
--
ALTER TABLE `CARRITO`
  ADD PRIMARY KEY (`idCarrito`),
  ADD KEY `fk_CorreoCarrito_idx` (`correo`);

--
-- Indices de la tabla `CATEGORIA`
--
ALTER TABLE `CATEGORIA`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `CATEGORIA_LIBRO`
--
ALTER TABLE `CATEGORIA_LIBRO`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `COMPRA`
--
ALTER TABLE `COMPRA`
  ADD PRIMARY KEY (`idCompras`,`idFactura`),
  ADD KEY `fk_Factura_idx` (`idFactura`),
  ADD KEY `fk_OfertaU_idx` (`idOferta`);

--
-- Indices de la tabla `DETALLE_CARRITO`
--
ALTER TABLE `DETALLE_CARRITO`
  ADD PRIMARY KEY (`idCarrito`);

--
-- Indices de la tabla `FACTURA`
--
ALTER TABLE `FACTURA`
  ADD PRIMARY KEY (`idFactura`),
  ADD KEY `fk_correoU_idx` (`correo`),
  ADD KEY `fk_idPagoF_idx` (`tipoPago`);

--
-- Indices de la tabla `LIBRO`
--
ALTER TABLE `LIBRO`
  ADD PRIMARY KEY (`idLibro`,`Editorial`);

--
-- Indices de la tabla `MONEDA`
--
ALTER TABLE `MONEDA`
  ADD PRIMARY KEY (`idMoneda`);

--
-- Indices de la tabla `MOVI_USUARIO`
--
ALTER TABLE `MOVI_USUARIO`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `OFERTA`
--
ALTER TABLE `OFERTA`
  ADD PRIMARY KEY (`idOferta`),
  ADD KEY `fk_Categoria_idx` (`idCategoria`);

--
-- Indices de la tabla `PAGO_SUBSCRIPCION`
--
ALTER TABLE `PAGO_SUBSCRIPCION`
  ADD PRIMARY KEY (`idPago`),
  ADD KEY `fk_Correo_idx` (`correo`),
  ADD KEY `fk_IdSubscripcion_idx` (`idSubscripcion`);

--
-- Indices de la tabla `SUBSCRIPCION`
--
ALTER TABLE `SUBSCRIPCION`
  ADD PRIMARY KEY (`idSubscripcion`);

--
-- Indices de la tabla `SUBSCRIPCION_USUARIO`
--
ALTER TABLE `SUBSCRIPCION_USUARIO`
  ADD PRIMARY KEY (`idSubscripcionUsuario`);

--
-- Indices de la tabla `TIPO_PAGO`
--
ALTER TABLE `TIPO_PAGO`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `USUARIO`
--
ALTER TABLE `USUARIO`
  ADD PRIMARY KEY (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `CARRITO`
--
ALTER TABLE `CARRITO`
  MODIFY `idCarrito` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `CATEGORIA`
--
ALTER TABLE `CATEGORIA`
  MODIFY `idCategoria` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `COMPRA`
--
ALTER TABLE `COMPRA`
  MODIFY `idCompras` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `FACTURA`
--
ALTER TABLE `FACTURA`
  MODIFY `idFactura` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `LIBRO`
--
ALTER TABLE `LIBRO`
  MODIFY `idLibro` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `OFERTA`
--
ALTER TABLE `OFERTA`
  MODIFY `idOferta` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `PAGO_SUBSCRIPCION`
--
ALTER TABLE `PAGO_SUBSCRIPCION`
  MODIFY `idPago` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `SUBSCRIPCION`
--
ALTER TABLE `SUBSCRIPCION`
  MODIFY `idSubscripcion` int NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `TIPO_PAGO`
--
ALTER TABLE `TIPO_PAGO`
  MODIFY `idTipo` int NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `CARRITO`
--
ALTER TABLE `CARRITO`
  ADD CONSTRAINT `fk_CorreoCarrito` FOREIGN KEY (`correo`) REFERENCES `USUARIO` (`correo`);

--
-- Filtros para la tabla `CATEGORIA_LIBRO`
--
ALTER TABLE `CATEGORIA_LIBRO`
  ADD CONSTRAINT `fk_Categoria` FOREIGN KEY (`idCategoria`) REFERENCES `CATEGORIA` (`idCategoria`);

--
-- Filtros para la tabla `COMPRA`
--
ALTER TABLE `COMPRA`
  ADD CONSTRAINT `fk_Factura` FOREIGN KEY (`idFactura`) REFERENCES `FACTURA` (`idFactura`),
  ADD CONSTRAINT `fk_OfertaU` FOREIGN KEY (`idOferta`) REFERENCES `OFERTA` (`idOferta`);

--
-- Filtros para la tabla `DETALLE_CARRITO`
--
ALTER TABLE `DETALLE_CARRITO`
  ADD CONSTRAINT `fk_Carrito` FOREIGN KEY (`idCarrito`) REFERENCES `CARRITO` (`idCarrito`);

--
-- Filtros para la tabla `FACTURA`
--
ALTER TABLE `FACTURA`
  ADD CONSTRAINT `fk_correoU` FOREIGN KEY (`correo`) REFERENCES `USUARIO` (`correo`),
  ADD CONSTRAINT `fk_idPagoF` FOREIGN KEY (`tipoPago`) REFERENCES `TIPO_PAGO` (`idTipo`);

--
-- Filtros para la tabla `MOVI_USUARIO`
--
ALTER TABLE `MOVI_USUARIO`
  ADD CONSTRAINT `fk_userCorreo` FOREIGN KEY (`correo`) REFERENCES `USUARIO` (`correo`);

--
-- Filtros para la tabla `OFERTA`
--
ALTER TABLE `OFERTA`
  ADD CONSTRAINT `fk_CategoriaOf` FOREIGN KEY (`idCategoria`) REFERENCES `CATEGORIA` (`idCategoria`);

--
-- Filtros para la tabla `PAGO_SUBSCRIPCION`
--
ALTER TABLE `PAGO_SUBSCRIPCION`
  ADD CONSTRAINT `fk_Correo` FOREIGN KEY (`correo`) REFERENCES `USUARIO` (`correo`),
  ADD CONSTRAINT `fk_IdSubscripcion` FOREIGN KEY (`idSubscripcion`) REFERENCES `SUBSCRIPCION` (`idSubscripcion`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
