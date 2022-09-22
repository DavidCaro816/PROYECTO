drop database if exists Perez_Lara_Cia_LTDA;
create database if not exists Perez_Lara_Cia_LTDA;
use Perez_Lara_Cia_LTDA;

drop table if exists tipo_documento;
create table if not exists tipo_documento
(
    id_tipo_documento     int auto_increment primary key,
    descripcion_documento varchar(45) not null,
    abreviacion           varchar(2)  not null
);

drop table if exists estado;
create table if not exists estado
(
    id_estado int auto_increment primary key,
    estado    varchar(45) not null
);

/* Usuarios
   =========== */
drop table if exists tipo_usuario;
create table if not exists tipo_usuario
(
    id_tipo_usuario int auto_increment primary key,
    tipo_usuario    tinyint(1) not null
);

drop table if exists usuario;
create table if not exists usuario
(
    documento        varchar(20) primary key,
    primer_nombre    varchar(45)  not null,
    segundo_nombre   varchar(45),
    primer_apellido  varchar(45)  not null,
    segundo_apellido varchar(45),
    celular          varchar(15)  not null,
    email            varchar(45)  not null unique,
    clave            varchar(256) not null,
    foto_perfil      varchar(150) not null,
    tipo_documento   int          not null,
    tipo_usuario     int          not null,
    estado           int          not null,
    foreign key (tipo_documento) references tipo_documento (id_tipo_documento),
    foreign key (tipo_usuario) references tipo_usuario (id_tipo_usuario),
    foreign key (estado) references estado (id_estado)
);

drop table if exists notificacion;
create table if not exists notificacion
(
    id_notificacion int auto_increment primary key,
    fecha           datetime not null,
    titulo          varchar(45) not null,
    mensaje         varchar(45) not null
);

drop table if exists notificacion_usuario;
create table if not exists notificacion_usuario
(
    id_notificacion_usuario int auto_increment primary key,
    documento_usuario       varchar(11) not null,
    notificacion            int         not null,
    estado                  int         not null,
    foreign key (documento_usuario) references usuario (documento) on update cascade,
    foreign key (notificacion) references notificacion (id_notificacion),
    foreign key (estado) references estado (id_estado)
);

/* Clientes
   =========== */
drop table if exists departamento;
create table if not exists departamento
(
    id_departamento int auto_increment primary key,
    departamento    varchar(60) not null
);

drop table if exists ciudad;
create table if not exists ciudad
(
    id_ciudad    int auto_increment primary key,
    ciudad       varchar(60) not null,
    departamento int         not null,
    foreign key (departamento) references departamento (id_departamento)
);

drop table if exists cliente;
create table if not exists cliente
(
    documento        varchar(20) primary key,
    primer_nombre    varchar(45)  not null,
    segundo_nombre   varchar(45),
    primer_apellido  varchar(45)  not null,
    segundo_apellido varchar(45),
    fecha_nacimiento date         not null,
    email            varchar(45)  not null,
    telefono1        varchar(15)  not null,
    telefono2        varchar(15),
    direccion1       varchar(100) not null,
    direccion2       varchar(100),
    tipo_documento   int          not null,
    ciudad           int          not null,
    estado           int          not null,
    fecha_ingreso    date         not null,
    foreign key (tipo_documento) references tipo_documento (id_tipo_documento),
    foreign key (ciudad) references ciudad (id_ciudad),
    foreign key (estado) references estado (id_estado)
);

/* Productos
   =========== */
drop table if exists aseguradora;
create table if not exists aseguradora
(
    id_aseguradora int auto_increment primary key,
    aseguradora    varchar(45)  not null,
    logo           varchar(150) not null
);

drop table if exists seguro;
create table if not exists seguro
(
    id_seguro int auto_increment primary key,
    seguro    varchar(45)  not null,
    imagen    varchar(150) not null
);

drop table if exists seguro_aseguradora;
create table if not exists seguro_aseguradora
(
    id_seguro_aseguradora int auto_increment primary key,
    seguro                int not null,
    aseguradora           int not null,
    estado         int not null,
    foreign key (seguro) references seguro (id_seguro),
    foreign key (aseguradora) references aseguradora (id_aseguradora),
    foreign key (estado) references estado (id_estado)
);

/* Trabajo
   =========== */
drop table if exists cotizacion;
create table if not exists cotizacion
(
    id_cotizacion       int auto_increment primary key,
    documento_cliente   varchar(20)  not null,
    fecha               date         not null,
    seguro              int          not null,
    cuadro_comparativo  varchar(150) not null,
    estado              int          not null,
    fecha_actualizacion date         null,
    foreign key (documento_cliente) references cliente (documento) on update cascade,
    foreign key (seguro) references seguro (id_seguro),
    foreign key (estado) references estado (id_estado)
);

drop table if exists cobertura;
create table if not exists cobertura
(
    id_cobertura int auto_increment primary key,
    cobertura varchar(130) not null
);

drop table if exists aseguradora_cotizante;
create table if not exists aseguradora_cotizante
(
    id_aseguradora_cotizante int auto_increment primary key,
    cotizacion               int not null,
    aseguradora              int not null,
    valor_prima              double not null,
    foreign key (cotizacion) references cotizacion (id_cotizacion),
    foreign key (aseguradora) references aseguradora (id_aseguradora)
);

drop table if exists cobertura_cotizacion;
create table if not exists cobertura_cotizacion
(
    id_cobertura_cotizacion int auto_increment primary key,
    id_aseguradora_cotizante int not null,
    id_cobertura int not null,
    precio varchar(20) not null,
    deducible varchar(20) not null,
    foreign key (id_aseguradora_cotizante) references aseguradora_cotizante(id_aseguradora_cotizante),
    foreign key (id_cobertura) references cobertura(id_cobertura)
);

drop table if exists poliza;
create table if not exists poliza
(
    codigo              int primary key,
    documento_cliente   varchar(20)  not null,
    fecha               date         not null,
    seguro              int          not null,
    aseguradora         int          not null,
    valor_asegurado     double       not null,
    valor_prima         double       not null,
    archivo             varchar(150) not null,
    estado              int          not null,
    fecha_actualizacion date         null,
    foreign key (documento_cliente) references cliente (documento) on update cascade,
    foreign key (seguro) references seguro (id_seguro),
    foreign key (aseguradora) references aseguradora (id_aseguradora),
    foreign key (estado) references estado (id_estado)
);

drop table if exists siniestro;
create table if not exists siniestro
(
    id_siniestro  int auto_increment primary key,
    fecha         date          not null,
    descripcion   varchar(2000) not null,
    monto         double        not null,
    codigo_poliza int           not null,
    anexo         varchar(150)  not null,
    estado        int           not null,
    foreign key (codigo_poliza) references poliza (codigo) on update cascade,
    foreign key (estado) references estado (id_estado)
);

drop table if exists reporte;
create table if not exists reporte
(
    id_reporte int auto_increment primary key,
    fecha      date         not null,
    titulo     varchar(45)  not null,
    archivo    varchar(150) not null,
    usuario    varchar(20)  not null,
    foreign key (usuario) references usuario (documento)
);