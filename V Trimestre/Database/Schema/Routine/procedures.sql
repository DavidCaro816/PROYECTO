use Perez_Lara_Cia_LTDA;

/* Usuarios
   =========== */
drop procedure if exists `sp_insert_usuario`;
create procedure `sp_insert_usuario`(in `_documento` varchar(20), in `_primer_nombre` varchar(45),
                                     in `_segundo_nombre` varchar(45), in `_primer_apellido` varchar(45),
                                     in `_segundo_apellido` varchar(45), in `_celular` varchar(15),
                                     in `_email` varchar(76), in `_clave` varchar(256), in _foto_perfil varchar(45),
                                     in `_tipo_documento` int(3),
                                     in `_tipo_usuario` int(3), in `_estado_usuario` int(3))
insert into usuario (documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, celular, email, clave,
                     foto_perfil, tipo_documento, tipo_usuario, estado)
values (_documento, _primer_nombre, _segundo_nombre, _primer_apellido, _segundo_apellido, _celular, _email,
        AES_ENCRYPT(_clave, 'colombia123'), _foto_perfil, _tipo_documento, _tipo_usuario, _estado_usuario);

drop procedure if exists `sp_update_usuario`;
create procedure `sp_update_usuario`(in `_documento` varchar(20), in `_documento2` varchar(20), in `_primer_nombre` varchar(45),
                                     in `_segundo_nombre` varchar(45), in `_primer_apellido` varchar(45),
                                     in `_segundo_apellido` varchar(45), in `_celular` varchar(15),
                                     in `_email` varchar(76), in `_clave` varchar(256), in _foto_perfil varchar(45),
                                     in `_tipo_documento` int(3))
update usuario set
documento = _documento2,
primer_nombre = _primer_nombre,
segundo_nombre = _segundo_nombre,
primer_apellido = _primer_apellido,
segundo_apellido = _segundo_apellido,
celular = _celular,
email = _email,
clave = AES_ENCRYPT(_clave,'colombia123'),
foto_perfil = _foto_perfil,
tipo_documento = _tipo_documento
where documento = _documento;

/* Clientes
   =========== */
drop procedure if exists `sp_insert_cliente`;
create procedure sp_insert_cliente(in `_documento` varchar(20), in `_primer_nombre` varchar(45),
                                   in `_segundo_nombre` varchar(45), in `_primer_apellido` varchar(45),
                                   in `_segundo_apellido` varchar(45), in `_fecha_nacimiento` date,
                                   in `_email` varchar(76), in `_telefono1` varchar(15), in `_telefono2` varchar(15),
                                   in `_direccion1` varchar(100), in `_direccion2` varchar(100),
                                   in `_tipo_documento` int,
                                   in `_ciudad` int, in `_estado_cliente` int, in `_fecha_ingreso` date)
insert into cliente (documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nacimiento,
                     email, telefono1, telefono2, direccion1, direccion2, tipo_documento, ciudad, estado, fecha_ingreso)
values (_documento, _primer_nombre, _segundo_nombre, _primer_apellido, _segundo_apellido, _fecha_nacimiento, _email,
        _telefono1, _telefono2, _direccion1, _direccion2, _tipo_documento, _ciudad, _estado_cliente, _fecha_ingreso);


drop procedure if exists `sp_update_cliente`;
create procedure sp_update_cliente(in `_documento` varchar(20), in `_documento2` varchar(20),
                                   in `_primer_nombre` varchar(45),
                                   in `_segundo_nombre` varchar(45), in `_primer_apellido` varchar(45),
                                   in `_segundo_apellido` varchar(45), in `_fecha_nacimiento` date,
                                   in `_email` varchar(76), in `_telefono1` varchar(15), in `_telefono2` varchar(15),
                                   in `_direccion1` varchar(100), in `_direccion2` varchar(100),
                                   in `_tipo_documento` int,
                                   in `_ciudad` int)
update cliente
set documento        = _documento2,
    primer_nombre    = _primer_nombre,
    segundo_nombre   = _segundo_nombre,
    primer_apellido  = _primer_apellido,
    segundo_apellido = _segundo_apellido,
    fecha_nacimiento = _fecha_nacimiento,
    email            = _email,
    telefono1        = _telefono1,
    telefono2        = _telefono2,
    direccion1       = _direccion1,
    direccion2       = _direccion2,
    tipo_documento   = _tipo_documento,
    ciudad           = _ciudad
where documento = _documento;

use perez_lara_cia_ltda;
drop procedure if exists `sp_delete_cliente`;
create procedure `sp_delete_cliente`(in _documento varchar(20))
update cliente set estado = 2 where documento = _documento;


/* Aseguradoras
   =========== */
drop procedure if exists `sp_insert_aseguradora`;
create procedure `sp_insert_aseguradora`(in `_aseguradora` varchar(45), in `_logo` varchar(150))
insert into aseguradora (aseguradora, logo) values (_aseguradora,_logo);

drop procedure if exists `sp_update_aseguradora`;
create procedure `sp_update_aseguradora`(in `_id_aseguradora` int, in `_aseguradora` varchar(45), in `_logo` varchar(150))
update aseguradora set aseguradora = _aseguradora, logo = _logo where id_aseguradora = _id_aseguradora;

drop procedure if exists `sp_delete_aseguradora`;
create procedure `sp_delete_aseguradora`(in `_id_aseguradora` int)
update seguro_aseguradora set estado = 2 where aseguradora = _id_aseguradora;

/* Seguro
   =========== */
drop procedure if exists `sp_insert_seguro`;
create procedure `sp_insert_seguro`(in `_seguro` varchar(45),`_imagen` varchar(150))
insert into seguro (seguro, imagen) values (_seguro,_imagen);

drop procedure if exists `sp_update_seguro`;
create procedure `sp_update_seguro`(in `_id_seguro` int , in `_seguro` varchar(45), `_imagen` varchar(150))
update seguro set seguro = _seguro, imagen = _imagen where id_seguro = _id_seguro;

drop procedure if exists `sp_delete_seguro`;
create procedure `sp_delete_seguro`(in `_id_seguro` int)
update seguro_aseguradora set estado = 2 where seguro = _id_seguro;

/* Seguros de aseguradora
   =========== */



/* Cotizaciones
   =========== */
drop procedure if exists `sp_insert_cotizacion`;
create procedure sp_insert_cotizacion(in `_documento_cliente` varchar(11), in `_fecha` date, in `_seguro` int,
                                      in `_cuadro_comparativo` varchar(150), in `_estado_cotizacion` int)
insert into cotizacion (documento_cliente, fecha, seguro, cuadro_comparativo, estado)
values (_documento_cliente, _fecha, _seguro, _cuadro_comparativo, _estado_cotizacion);


drop procedure if exists `sp_update_cotizacion`;
create procedure sp_update_cotizacion(in `_id_cotizacion` int, in `_documento_cliente` varchar(11), in `_fecha` date,
                                      in `_seguro` int, in `_cuadro_comparativo` varchar(150),
                                      in `_estado_cotizacion` int, in `_fecha_actualizacion` date)
update cotizacion
SET documento_cliente   = _documento_cliente,
    fecha               = _fecha,
    seguro              = _seguro,
    cuadro_comparativo  = _cuadro_comparativo,
    estado              = _estado_cotizacion,
    fecha_actualizacion = _fecha_actualizacion
where id_cotizacion = _id_cotizacion;


/* Pólizas
   =========== */
drop procedure if exists `sp_insert_poliza`;
create procedure sp_insert_poliza(IN _codigo int(45), IN _documento_cliente varchar(11),
                                  IN _fecha date, IN _seguro int, IN _aseguradora int,
                                  IN _valor_asegurado double, IN _valor_prima double,
                                  IN _archivo varchar(150), IN _estado_poliza int)
insert into poliza (codigo, documento_cliente, fecha, seguro, aseguradora,valor_asegurado,valor_prima, archivo, estado)
values (_codigo, _documento_cliente, _fecha, _seguro, _aseguradora,_valor_asegurado,_valor_prima, _archivo, _estado_poliza);



drop procedure if exists `sp_update_poliza`;

create procedure sp_update_poliza(IN _codigo int(45),IN _codigo2 int(45), IN _documento_cliente varchar(11),
                                                        IN _seguro int, IN _aseguradora int,
                                                        IN _valor_asegurado double, IN _valor_prima double,
                                                        IN _archivo varchar(150), IN _estado_poliza int,
                                                        IN _fecha_actualizacion date)
update poliza
SET codigo              = _codigo2,
    documento_cliente   = _documento_cliente,
    seguro              = _seguro,
    aseguradora         = _aseguradora,
    valor_asegurado     = _valor_asegurado,
    valor_prima         = _valor_prima,
    archivo             = _archivo,
    estado              = _estado_poliza,
    fecha_actualizacion = _fecha_actualizacion
where codigo = _codigo;


/* Siniestros
   =========== */
drop procedure if exists `sp_insert_siniestro`;
create procedure sp_insert_siniestro(in `_fecha` date, in `_descripcion` varchar(2000), in `_monto` double,
                                     in `_codigo_poliza` int, in `_anexo` varchar(150), in `_estado_siniestro` int)
insert into siniestro (fecha, descripcion, monto, codigo_poliza, anexo, estado)
values (_fecha, _descripcion, _monto, _codigo_poliza, _anexo, _estado_siniestro);


drop procedure if exists `sp_update_siniestro`;
create procedure sp_update_siniestro(in `_id_siniestro` int, in `_fecha` date, in `_descripcion` varchar(2000),
                                     in `_monto` double, in `_codigo_poliza` int, in `_anexo` varchar(150),
                                     in `_estado_siniestro` int)
update siniestro
SET fecha         = _fecha,
    descripcion   = _descripcion,
    monto         = _monto,
    codigo_poliza = _codigo_poliza,
    anexo         = _anexo,
    estado        = _estado_siniestro
where id_siniestro = _id_siniestro;