drop database if exists Perez_Lara_Cia_LTDA;
create database if not exists Perez_Lara_Cia_LTDA;
use Perez_Lara_Cia_LTDA;

create table if not exists tipo_documento
(
    id_tipo_documento int auto_increment primary key,
    descripcion_documento varchar(45) not null,
    abreviacion varchar(2)
);

/* Usuarios
   =========== */
create table if not exists tipo_usuario
(
    id_tipo_usuario int auto_increment primary key,
    tipo_usuario tinyint(1) not null
);

create table if not exists estado_usuario
(
    id_estado_usuario int auto_increment primary key,
    estado_usuario tinyint(1) not null
);

create table if not exists usuario
(
    documento int primary key,
    primer_nombre varchar(45) not null,
    segundo_nombre varchar(45),
    primer_apellido varchar(45) not null,
    segundo_apellido varchar(45),
    celular varchar(15) not null,
    email varchar(45) not null UNIQUE,
    clave varchar(45) not null,
    tipo_documento int not null,
    tipo_usuario int not null,
    estado_usuario int not null,
    foreign key(tipo_documento) references tipo_documento(id_tipo_documento),
    foreign key (tipo_usuario) references tipo_usuario(id_tipo_usuario),
    foreign key (estado_usuario) references estado_usuario(id_estado_usuario)
);

create table if not exists notificacion
(
    id_notificacion int auto_increment primary key,
    fecha datetime not null,
    titulo varchar(45),
    mensaje varchar(45)
);

create table if not exists estado_notificacion
(
    id_estado_notificacion int auto_increment primary key,
    estado_notificacion varchar(45) not null
);

create table if not exists notificacion_usuario
(
    documento_usuario int not null,
    notificacion int not null,
    estado_notificacion int not null,
    foreign key (documento_usuario) references usuario(documento),
    foreign key (notificacion) references notificacion(id_notificacion),
    foreign key (estado_notificacion) references estado_notificacion(id_estado_notificacion)
);

/* Clientes
   =========== */
create table if not exists departamento
(
    id_departamento int auto_increment primary key,
    departamento varchar(60) not null
);

create table if not exists ciudad
(
    id_ciudad int auto_increment primary key,
    ciudad varchar(60) not null,
    departamento int not null,
    foreign key(departamento) references departamento(id_departamento)
);

create table if not exists estado_cliente
(
    id_estado_cliente int auto_increment primary key,
    estado_cliente varchar(45) not null
);

create table if not exists cliente
(
    documento int primary key,
    primer_nombre varchar(45) not null,
    segundo_nombre varchar(45),
    primer_apellido varchar(45) not null,
    segundo_apellido varchar(45),
    fecha_nacimiento date not null,
    email varchar(45) not null,
    telefono1 varchar(15) not null,
    telefono2 varchar(15),
    direccion1 varchar(100) not null ,
    direccion2 varchar(100),
    tipo_documento int not null,
    ciudad int not null,
    estado_cliente int not null,
    foreign key (tipo_documento) references tipo_documento(id_tipo_documento),
    foreign key (ciudad) references ciudad(id_ciudad),
    foreign key (estado_cliente) references estado_cliente(id_estado_cliente)
);

/* Productos
   =========== */
create table if not exists aseguradora
(
    id_aseguradora int auto_increment primary key,
    aseguradora varchar(45) not null,
    logo varchar(45) not null
);

create table if not exists seguro
(
    id_seguro int auto_increment primary key,
    seguro varchar(45) not null,
    imagen varchar(45) not null
);

create table if not exists seguro_aseguradora
(
    seguro int not null,
    aseguradora int not null,
    foreign key (seguro) references seguro(id_seguro),
    foreign key (aseguradora) references aseguradora(id_aseguradora)
);

/* Trabajo
   =========== */
create table if not exists estado_cotizacion
(
    id_estado_cotizacion int auto_increment primary key,
    estado_cotizacion varchar(45) not null
);

create table if not exists cotizacion
(
    id_cotizacion int auto_increment primary key,
    documento_cliente int not null,
    fecha date not null,
    seguro int not null,
    cuadro_comparativo varchar(45) not null,
    estado_cotizacion int not null,
    foreign key (documento_cliente) references cliente(documento),
    foreign key (seguro) references seguro(id_seguro),
    foreign key (estado_cotizacion) references estado_cotizacion(id_estado_cotizacion)
);

create table if not exists aseguradora_cotizante
(
    cotizacion int not null,
    aseguradora int not null,
    foreign key (cotizacion) references cotizacion(id_cotizacion),
    foreign key (aseguradora) references aseguradora(id_aseguradora)
);

create table if not exists estado_poliza
(
    id_estado_poliza int auto_increment primary key,
    estado_poliza varchar(45) not null
);

create table if not exists poliza
(
    codigo int auto_increment primary key,
    documento_cliente int not null,
    fecha date not null,
    seguro int not null,
    aseguradora int not null,
    archivo varchar(45) not null,
    estado_poliza int not null,
    foreign key (documento_cliente) references cliente(documento),
    foreign key (seguro) references seguro(id_seguro),
    foreign key (aseguradora) references aseguradora(id_aseguradora),
    foreign key (estado_poliza) references estado_poliza(id_estado_poliza)
);

create table if not exists estado_siniestro
(
    id_estado_siniestro int auto_increment primary key,
    estado_siniestro varchar(45) not null
);

create table if not exists siniestro
(
    id_siniestro int auto_increment primary key,
    fecha date not null,
    descripcion varchar(45) not null,
    monto DOUBLE,
    codigo_poliza int not null,
    anexo varchar(45) not null,
    estado_siniestro int not null,
    foreign key (codigo_poliza) references poliza(codigo),
    foreign key (estado_siniestro) references estado_siniestro(id_estado_siniestro)
);

create table if not exists reporte
(
    id_reporte int auto_increment primary key,
    fecha date not null,
    titulo varchar(45) not null,
    archivo varchar(45) not null,
    usuario int not null,
    foreign key (usuario) references usuario(documento)
);
