use Perez_Lara_Cia_LTDA;

create procedure sp_insert_cliente(in _documento int(20), in _primer_nombre varchar(45), in _segundo_nombre varchar(45),
                                    in _primer_apellido varchar(45), in _segundo_apellido varchar(45), in _email varchar(45),
                                    in _tipo_documento int, in _fecha_nacimiento date, in _estado_cliente int, in _ciudad int,
                                    in _telefono1 varchar(15), in _telefono2 varchar(15), in _direccion1 varchar(100),
                                    in _direccion2 varchar(100))
    insert into cliente (documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, fecha_nacimiento,
                         email, telefono1, telefono2, direccion1, direccion2, tipo_documento, ciudad, estado_cliente)
    values (_documento,_primer_nombre,_segundo_nombre,_primer_apellido,_segundo_apellido,_fecha_nacimiento,_email,
            _telefono1,_telefono2,_direccion1,_direccion2,_tipo_documento,_ciudad,_estado_cliente);

create procedure sp_update_cliente(in _documento int(20), in _primer_nombre varchar(45), in _segundo_nombre varchar(45),
                                    in _primer_apellido varchar(45), in _segundo_apellido varchar(45), in _email varchar(45),
                                    in _tipo_documento int, in _fecha_nacimiento date, in _estado_cliente int, in _ciudad int,
                                    in _telefono1 varchar(15), in _telefono2 varchar(15), in _direccion1 varchar(100),
                                    in _direccion2 varchar(100))
    update cliente set documento = _documento, primer_nombre = _primer_nombre, segundo_nombre = _segundo_nombre,
                       primer_apellido = _primer_apellido, segundo_apellido = _segundo_apellido, email = _email,
                       tipo_documento = _tipo_documento , fecha_nacimiento = _fecha_nacimiento, estado_cliente = _estado_cliente,
                       ciudad = _ciudad, telefono1 = _telefono1, telefono2 = _telefono2, direccion1 = _direccion1, direccion2 = _direccion2
    where documento = _documento;

create procedure sp_insert_cotizacion(in _documento_cliente int, in _fecha date, in _seguro int,
                                      in _cuadro_comparativo varchar(45), in _estado_cotizacion int)
insert into cotizacion (documento_cliente, fecha, seguro, cuadro_comparativo, estado_cotizacion)
values (_documento_cliente,_fecha,_seguro,_cuadro_comparativo,_estado_cotizacion);

create procedure sp_update_cotizacion(in _id_cotizacion int, in _documento_cliente int, in _fecha date, in _seguro int,
                                      in _cuadro_comparativo varchar(500), in _estado_cotizacion int)
    update cotizacion SET documento_cliente = _documento_cliente, fecha = _fecha, seguro = _seguro,
                          cuadro_comparativo = _cuadro_comparativo, estado_cotizacion = _estado_cotizacion
                      where id_cotizacion = _id_cotizacion;

create  procedure sp_insert_poliza(in _codigo int(45), in _documento_cliente int(45), in _fecha date, in _seguro int, in _aseguradora int,
                                   in _archivo varchar(500), in _estado_poliza int)
    insert into poliza (codigo, documento_cliente, fecha, seguro, aseguradora, archivo, estado_poliza)
    values (_codigo, _documento_cliente, _fecha, _seguro, _aseguradora, _archivo, _estado_poliza);

create procedure sp_update_poliza(in _codigo int(45), in _documento_cliente int(45), in _fecha date, in _seguro int, in _aseguradora int,
                                   in _archivo varchar(500), in _estado_poliza int)
    update poliza SET codigo = _codigo, documento_cliente = _documento_cliente, fecha = _fecha, seguro = _seguro,
                  aseguradora = _aseguradora, archivo = _archivo, estado_poliza = _estado_poliza where codigo = _codigo;

create procedure sp_insert_siniestro(in _fecha date, in _descripcion varchar(200), in _monto double, in _codigo_poliza int,
                                     in _anexo varchar(500), in _estado_siniestro int)
    insert into siniestro (fecha, descripcion, monto, codigo_poliza, anexo, estado_siniestro)
    values (_fecha, _descripcion, _monto, _codigo_poliza, _anexo, _estado_siniestro);

create procedure sp_update_siniestro(in _id_siniestro int, in _fecha date, in _descripcion varchar(200), in _monto double, in _codigo_poliza int,
                                     in _anexo varchar(500), in _estado_siniestro int)
update siniestro SET fecha = _fecha, descripcion = _descripcion, monto = _monto, codigo_poliza = _codigo_poliza, anexo = _anexo,
                     estado_siniestro = _estado_siniestro where id_siniestro = _id_siniestro;



