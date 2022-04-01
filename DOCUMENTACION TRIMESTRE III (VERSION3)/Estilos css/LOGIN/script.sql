DROP DATABASE IF EXISTS PEREZ_LARA_CIA_LTDA;
CREATE DATABASE PEREZ_LARA_CIA_LTDA;
USE PEREZ_LARA_CIA_LTDA;

CREATE TABLE tipoDocumento(
    idTipoDocumento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    descripcionDocumento VARCHAR(45) NOT NULL,
    abreviacion VARCHAR(2) NOT NULL
);

CREATE TABLE tipoUsuario(
    IdTipoUsuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    tipoUsuario VARCHAR(13) NOT NULL
);

CREATE TABLE usuario
(
    documento INT NOT NULL PRIMARY KEY,
    primerNombre VARCHAR(45) NOT NULL,
    segundoNombre VARCHAR(45),
    primerApellido VARCHAR(45) NOT NULL,
    segundoApellido VARCHAR(45),
    email VARCHAR(45) NOT NULL,
    celular VARCHAR(15) NOT NULL,
    idTipoDocumento INT NOT NULL,
    nombreUsuario VARCHAR(45) NOT NULL,
    contraseña VARCHAR(45) NOT NULL,
    tipoUsuario INT NOT NULL,
    FOREIGN KEY (idTipoDocumento) REFERENCES tipoDocumento(idTipoDocumento),
    FOREIGN KEY (tipoUsuario)REFERENCES tipoUsuario(idtipoUsuario)
);

CREATE TABLE departamento
(
    idDepartamento INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    departamento VARCHAR(45) NOT NULL
);

CREATE TABLE ciudad
(
    idCiudad INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    ciudad VARCHAR(45) NOT NULL,
    idDepartamento INT NOT NULL,
    FOREIGN KEY(idDepartamento) REFERENCES departamento(idDepartamento)
);

CREATE TABLE tipoCliente
(
    idTipoCliente INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    tipoCliente VARCHAR(9) NOT NULL
);

CREATE TABLE cliente
(
    documento INT NOT NULL PRIMARY KEY,
    primerNombre VARCHAR(45) NOT NULL,
    segundoNombre VARCHAR(45),
    primerApellido VARCHAR(45) NOT NULL,
    segundoApellido VARCHAR(45),
    email VARCHAR(45),
    idTipoDocumento INT NOT NULL,
    fechaNacimiento DATE NOT NULL,
    idTipoCliente INT NOT NULL,
    idCiudad INT NOT NULL,
    telefono1 varchar(15) not null,
    telefono2 varchar(15) null,
    direccion1 varchar(100) not null,
    direccion2 varchar(100) null,
    FOREIGN KEY (idTipoCliente) REFERENCES tipoCliente(idTipoCliente),
    FOREIGN KEY (idCiudad) REFERENCES ciudad(idCiudad),
    FOREIGN KEY (idTipoDocumento) REFERENCES tipoDocumento(idTipoDocumento)
);

CREATE TABLE estado
(
    idEstado INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    estado VARCHAR(45) NOT NULL
);

CREATE TABLE seguro
(
    idSeguro INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    seguro VARCHAR(45) NOT NULL,
    imagen VARCHAR(45) NOT NULL
);

CREATE TABLE cotizacion
(
    idCotizacion INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fechaCotizacion DATE NOT NULL,
    idSeguro INT NOT NULL,
    documento INT NOT NULL,
    idEstado INT NOT NULL,
    FOREIGN KEY (documento) REFERENCES cliente(documento),
    FOREIGN KEY (idSeguro) REFERENCES seguro(idSeguro),
    FOREIGN KEY (idEstado) REFERENCES estado(idEstado)
);

Create table aseguradora
(
    idAseguradora INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    aseguradora VARCHAR (45) NOT NULL,
    logo VARCHAR(45) NOT NULL
);

Create table poliza
(
    codigo INT NOT NULL PRIMARY KEY,
    fecha DATE NOT NULL,
    idSeguro INT NOT NULL,
    idAseguradora INT NOT NULL,
    documento INT NOT NULL,
    idEstado INT NOT NULL,
    archivo BLOB,
    FOREIGN KEY (idSeguro) REFERENCES seguro(idSeguro),
    FOREIGN KEY (idAseguradora) REFERENCES aseguradora(idAseguradora),
    FOREIGN KEY (documento) REFERENCES cliente(documento),
    FOREIGN KEY (idEstado) REFERENCES estado(idEstado)
);

Create table seguroAseguradora
(
    idSeguroAseguradora INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idSeguro INT NOT NULL,
    idAseguradora INT NOT NULL,
    FOREIGN KEY (idSeguro) REFERENCES seguro(idSeguro),
    FOREIGN KEY (idAseguradora) REFERENCES aseguradora(idAseguradora)
);

CREATE TABLE AseguradoraCotizante(
    idAseguradoraCotizante INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idCotizacion INT NOT NULL,
    idAseguradora INT NOT NULL,
    FOREIGN KEY(idCotizacion) REFERENCES cotizacion(idCotizacion),
    FOREIGN KEY(idAseguradora) REFERENCES aseguradora(idAseguradora)
);

CREATE TABLE Siniestro(
    idSiniestro INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fecha DATE NOT NULL,
    monto FLOAT NOT NULL,
    descripcion VARCHAR(45) NOT NULL,
    anexo BLOB NOT NULL,
    tipoSiniestro VARCHAR(45) NOT NULL,
    idPoliza INT NOT NULL,
    idEstado INT NOT NULL,
    FOREIGN KEY(idPoliza) REFERENCES poliza(codigo),
    FOREIGN KEY(idEstado) REFERENCES estado(idEstado)
);

INSERT INTO `departamento` (`Departamento`) VALUES
                                                ('AMAZONAS'),
                                                ('ANTIOQUIA'),
                                                ('ARAUCA'),
                                                ('ATLÁNTICO'),
                                                ('BOGOTA D.C'),
                                                ('BOLÍVAR'),
                                                ('BOYACÁ'),
                                                ('CALDAS'),
                                                ('CAQUETÁ'),
                                                ('CASANARE'),
                                                ('CAUCA'),
                                                ('CESAR'),
                                                ('CHOCÓ'),
                                                ('CÓRDOBA'),
                                                ('CUNDINAMARCA'),
                                                ('GUAINÍA'),
                                                ('GUAVIARE'),
                                                ('HUILA'),
                                                ('LA GUAJIRA'),
                                                ('META'),
                                                ('NARIÑO'),
                                                ('NORTE DE SANTANDER'),
                                                ('PUTUMAYO'),
                                                ('QUINDÍO'),
                                                ('RISARALDA'),
                                                ('SAN ANDRÉS Y PROVIDENCIA'),
                                                ('SANTANDER'),
                                                ('SUCRE'),
                                                ('TOLIMA'),
                                                ('VALLE DEL CAUCA'),
                                                ('VAUPÉS'),
                                                ('VICHADA');


INSERT INTO `tipocliente` (`idTipoCliente`, `tipoCliente`) VALUES
                                                               (1, 'Prospecto'),
                                                               (2, 'Potencial');

INSERT INTO `tipodocumento` (`idTipoDocumento`, `descripcionDocumento`, `abreviacion`) VALUES
                                                                                           (1,'Cédula de Ciudadanía' ,'CC'),
                                                                                           (2,'Cédula de extranjería','CE'),
                                                                                           (3,'Tarjeta de Identidad' ,'TI');

INSERT INTO `ciudad` (`idCiudad`, `ciudad`, `idDepartamento`) VALUES
                                                                  (1, 'BOGOTA D.C', 4),
                                                                  (2, 'SOACHA', 14);
INSERT INTO `cliente` (`documento`, `primerNombre`, `segundoNombre`, `primerApellido`, `segundoApellido`, `email`, `idTipoDocumento`, `fechaNacimiento`, `idTipoCliente`, `idCiudad`, `telefono1`, `telefono2`, `direccion1`, `direccion2`) VALUES
                                                                                                                                                                                                                                                (564684, 'camila ', 'andrea', 'sanchez', '', 'camila@gmail.com', 1, '2022-03-04', 1, 1, '51814984', '', 'cra 98', ''),
                                                                                                                                                                                                                                                (585818, 'David', 'fernando', 'urrea', 'daza', 'juan@gmail.com', 1, '2022-03-18', 1, 2, '2198259', '', 'cra 98b', ''),
                                                                                                                                                                                                                                                (5184184, 'juan', 'sebastian', 'alarcon', '', 'juan@gmail.com', 2, '2022-03-01', 1, 2, '31182215', '', 'cra 15 ', 'calle 100'),
                                                                                                                                                                                                                                                (5196149, 'katherine', '', 'Cárdenas ', '', 'khaterine@gmail.com', 1, '2003-07-16', 1, 1, '846848812', '', 'cra 125', ''),
                                                                                                                                                                                                                                                (8486414, 'juanes', 'fernando', 'urrea', '', 'daniel@gmail.com', 2, '2022-03-03', 2, 1, '31182215', '', 'cra 200', 'calle 100'),
                                                                                                                                                                                                                                                (51658418, 'oscar', 'gyovanny', 'lopez', '', 'oscar@gmail.com', 1, '2022-03-19', 1, 1, '31528454', '', 'cra 15 ', 'calle 100'),
                                                                                                                                                                                                                                                (1010760139, 'David', 'Santiago', 'caro', 'escobar', 'santiagocaro816@gmail.com', 1, '2004-02-24', 2, 1, '31182215', '5109816', 'cra 200', 'calle 100');
INSERT INTO `tipoUsuario` (`IdTipoUsuario`,`tipoUsuario`) VALUES
    (1,'Administrador'),
    (2,'Usuario');

INSERT INTO `usuario` (documento, primerNombre, segundoNombre, primerApellido, segundoApellido, email, celular, idTipoDocumento, nombreUsuario, contraseña, tipoUsuario)  VALUES
   (0,'0','','0','','0','0',1,'AdminPerezLara','perezlara',1),
   (1,'1','','1','','1','1',1,'Usuario','usuario',2);

INSERT INTO `aseguradora` (`idAseguradora`, `aseguradora`, `logo`) VALUES
                                                                       (1, 'Allianz', NULL),
                                                                       (2, 'Mapfre', NULL),
                                                                       (3, 'SURA', NULL);

INSERT INTO `estado` (`idEstado`, `estado`) VALUES
                                                (1, 'En expedición'),
                                                (2, 'Expirada'),
                                                (3, 'Proxima a vencer');

INSERT INTO `seguro` (`idSeguro`, `seguro`, `imagen`) VALUES
                                                          (1, 'Autos', '../LOGIN/images/seguro-de-autos.svg'),
                                                          (2, 'Responsabilidad civil', '../LOGIN/images/Polizas-de-cumplimiento.svg'),
                                                          (3, 'Mascotas', '../LOGIN/images/seguro-para-mascotas.svg'),
                                                          (4, 'Vida', '../LOGIN/images/seguro-de-vida.svg'),
                                                          (5, 'Arrendamiento', '../LOGIN/images/seguro-para-arrendamiento-1.svg'),
                                                          (6, 'Hogar', '../LOGIN/images/seguro-de-hogar.svg'),
                                                          (7, 'Copropiedades', '../LOGIN/images/seguro-de-copropiedades.svg');

INSERT INTO `poliza` (`codigo`, `fecha`, `idSeguro`, `idAseguradora`, `documento`, `idEstado`, `archivo`) VALUES
                                                                                                              (1, '2022-03-09', 1, 1, 564684, 1, NULL),
                                                                                                              (2, '2022-03-02', 2, 2, 585818, 1, NULL),
                                                                                                              (3, '2022-03-08', 2, 1, 5184184, 1, NULL),
                                                                                                              (4, '2022-03-22', 3, 2, 8486414, 2, NULL),
                                                                                                              (5, '2022-03-02', 3, 3, 8486414, 1, NULL),
                                                                                                              (6, '2022-03-01', 3, 3, 5196149, 1, NULL),
                                                                                                              (7, '2022-03-02', 4, 1, 5196149, 1, NULL),
                                                                                                              (8, '2022-03-01', 1, 2, 8486414, 1, NULL);


