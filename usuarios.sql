CREATE TABLE `usuarios` (
  `dni` int(8),
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `fec_nac` date NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  PRIMARY KEY (`dni`)
);

CREATE TABLE `movimientos` (
  `mov_id` int AUTO_INCREMENT PRIMARY KEY,
  `dni` int(8),
  `concepto` varchar(10) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `importe` int(10) NOT NULL,
  FOREIGN KEY (`dni`) REFERENCES usuarios (`dni`)
);

CREATE TABLE `tarjetas_credito` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `numero_tarjeta` VARCHAR(16),
  `titular` VARCHAR(100),
  `fecha_vencimiento` DATE,
  `cvv` VARCHAR(4),
  `tipo` VARCHAR(20)
);
CREATE TABLE `tranferencia` (
  `nombre_comp` INT AUTO_INCREMENT PRIMARY KEY,
  `correo` VARCHAR(100),
  `num_cuenta` VARCHAR(16),
  `mes_ven` DATE,
  `año_ven` DATE,
  `cvv` VARCHAR(4),
  `concepto` VARCHAR(16),
  `monto` VARCHAR(16),
  `tipo` VARCHAR(20)
);