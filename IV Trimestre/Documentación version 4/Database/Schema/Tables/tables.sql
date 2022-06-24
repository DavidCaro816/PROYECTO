drop database if exists perezLaraCiaLtda;
create database if not exists perezLaraCiaLtda;
use perezLaraCiaLtda;

create table if not exists tipoDocumento
(
    idTipoDocumento int auto_increment primary key,
    descripcionDocumento varchar(45) not null,
    abreviacion varchar(2)
);

create table if not exists estado
(
    idEstado int auto_increment primary key,
    estado varchar(45)
);

/* Usuarios
   =========== */
create table if not exists estadoUsuario
(
    idEstado int auto_increment primary key,
    estado tinyint(1) not null
);

create table if not exists tipoUsuario
(
    idTipoUsuario int auto_increment primary key,
    tipoUsuario tinyint(1) not null
);

create table if not exists usuario
(
    documento int primary key,
    primerNombre varchar(45) not null,
    segundoNombre varchar(45),
    primerApellido varchar(45) not null,
    segundoApellido varchar(45),
    celular varchar(15) not null,
    email varchar(45) not null UNIQUE,
    clave varchar(45) not null,
    tipoDocumento int not null,
    tipoUsuario int not null,
    estadoUsuario int not null,
    foreign key(tipoDocumento) references tipoDocumento(idTipoDocumento),
    foreign key (tipoUsuario) references tipoUsuario(idTipoUsuario),
    foreign key (estadoUsuario) references estadoUsuario(idEstado)
);

create table if not exists notificacion
(
    idNotificacion int auto_increment primary key,
    fecha datetime not null,
    titulo varchar(45),
    mensaje varchar(45),
    estado int not null,
    foreign key (estado) references estado(idEstado)

);

create table if not exists notificacionUsuario
(
    documento int not null,
    notificacion int not null,
    foreign key (documento) references usuario(documento),
    foreign key (notificacion) references notificacion(idNotificacion)
);

/* Clientes
   =========== */
create table if not exists departamento
(
    idDepartamento int auto_increment primary key,
    departamento varchar(60) not null
);

create table if not exists ciudad
(
    idCiudad int auto_increment primary key,
    ciudad varchar(60) not null,
    departamento int not null,
    foreign key(departamento) references departamento(idDepartamento)
);

create table if not exists cliente
(
    documento int auto_increment primary key,
    primerNombre varchar(45) not null,
    segundoNombre varchar(45),
    primerApellido varchar(45) not null,
    segundoApellido varchar(45),
    fechaNacimiento date not null,
    email varchar(45) not null,
    telefono1 varchar(15) not null,
    telefono2 varchar(15),
    direccion1 varchar(100) not null ,
    direccion2 varchar(100),
    tipoDocumento int not null,
    ciudad int not null,
    estado int not null,
    foreign key (tipoDocumento) references tipoDocumento(idTipoDocumento),
    foreign key (ciudad) references ciudad(idCiudad),
    foreign key (estado) references estado(idEstado)
);

/* Productos
   =========== */
create table if not exists aseguradora
(
    idAseguradora int auto_increment primary key,
    aseguradora varchar(45) not null,
    logo varchar(45) not null
);

create table if not exists seguro
(
    idSeguro int auto_increment primary key,
    seguro varchar(45) not null,
    imagen varchar(45) not null
);

create table if not exists seguroAseguradora
(
    seguro int not null,
    aseguradora int not null,
    foreign key (seguro) references seguro(idSeguro),
    foreign key (aseguradora) references aseguradora(idAseguradora)
);

/* Trabajo
   =========== */
create table if not exists cotizacion
(
    idCotizacion int auto_increment primary key,
    documentoCliente int not null,
    fecha date not null,
    seguro int not null,
    estado int not null,
    cuadroComparativo varchar(45) not null,
    foreign key (documentoCliente) references cliente(documento),
    foreign key (seguro) references seguro(idSeguro),
    foreign key (estado) references estado(idEstado)
);

create table if not exists aseguradoraCotizante
(
    cotizacion int not null,
    aseguradora int not null,
    foreign key (cotizacion) references cotizacion(idCotizacion),
    foreign key (aseguradora) references aseguradora(idAseguradora)
);

create table if not exists poliza
(
    codigo int auto_increment primary key,
    documentoCliente int not null,
    fecha date not null,
    seguro int not null,
    aseguradora int not null,
    archivo varchar(45) not null,
    estado int not null,
    foreign key (documentoCliente) references cliente(documento),
    foreign key (seguro) references seguro(idSeguro),
    foreign key (aseguradora) references aseguradora(idAseguradora),
    foreign key (estado) references estado(idEstado)
);

create table if not exists siniestro
(
    idSiniestro int auto_increment primary key,
    fecha date not null,
    descripcion varchar(45) not null,
    monto DOUBLE,
    codigoPoliza int not null,
    anexo varchar(45) not null,
    estado int not null,
    foreign key (codigoPoliza) references poliza(codigo),
    foreign key (estado) references estado(idEstado)
);

create table if not exists reporte
(
    idReporte int auto_increment primary key,
    fecha date not null,
    titulo varchar(45) not null,
    archivo varchar(45) not null,
    usuario int not null,
    foreign key (usuario) references usuario(documento)
);