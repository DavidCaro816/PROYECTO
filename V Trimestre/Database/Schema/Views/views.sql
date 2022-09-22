use Perez_Lara_Cia_LTDA;

drop view if exists view_usuario;
create view view_usuario as
select documento                                                                               as `No. Documento`,
       concat(primer_nombre, ' ', segundo_nombre, ' ', primer_apellido, ' ', segundo_apellido) as Nombre,
       email                                                                                   as Email,
       celular                                                                                 as Celular,
       t2.tipo_usuario                                                                         as Rol
from usuario
         inner join tipo_documento t on usuario.tipo_documento = t.id_tipo_documento
         inner join tipo_usuario t2 on usuario.tipo_usuario = t2.id_tipo_usuario
         inner join estado e on usuario.estado = e.id_estado
order by Nombre;

drop view if exists view_cliente;
create view view_cliente as
select t.id_tipo_documento                                                                     as id_tipo_documento,
       t.descripcion_documento                                                                 as descripcion_documento,
       concat(t.abreviacion,' ',documento)                                                     as `No. Documento`,
       concat(primer_nombre, ' ', segundo_nombre, '&', primer_apellido, ' ', segundo_apellido) as Cliente,
       d.id_departamento                                                                       as id_departamento,
       d.departamento                                                                          as Departamento,
       cliente.ciudad                                                                          as id_ciudad,
       c.ciudad                                                                                as Ciudad,
       concat(direccion1,'&', direccion2)                                                      as Direccion,
       fecha_nacimiento                                                                        as `Fecha de nacimiento`,
       email                                                                                   as Email,
       concat(telefono1,'&', telefono2)                                                        as Telefono,
       fecha_ingreso                                                                           as `Fecha ingreso`,
       e.estado                                                                                as Estado
from cliente
         inner join tipo_documento t on cliente.tipo_documento = t.id_tipo_documento
         inner join ciudad c on cliente.ciudad = c.id_ciudad
         inner join departamento d on c.departamento = d.id_departamento
         inner join estado e on cliente.estado = e.id_estado
where cliente.estado <> 2;



drop view if exists view_cotizacion;
create view view_cotizacion as
select id_cotizacion                                                                                   as `No. Cotizacion`,
       fecha                                                                                           as Fecha,
       concat(c.primer_nombre, ' ', c.segundo_nombre, ' ', c.primer_apellido, ' ', c.segundo_apellido) as Cliente,
       cotizacion.seguro                                                                               as id_seguro,
       s.seguro                                                                                        as Seguro,
       group_concat(a2.id_aseguradora)                                                                 as id_aseguradora,
       group_concat(a2.aseguradora)                                                                    as nombre_aseguradora,
       group_concat(a2.logo)                                                                           as Aseguradora,
       cuadro_comparativo                                                                              as `Cuadro comparativo`,
       e.estado                                                                                        as Estado
from cotizacion
         inner join cliente c on cotizacion.documento_cliente = c.documento
         inner join seguro s on cotizacion.seguro = s.id_seguro
         inner join aseguradora_cotizante a on cotizacion.id_cotizacion = a.cotizacion
         inner join aseguradora a2 on a.aseguradora = a2.id_aseguradora
         inner join estado e on cotizacion.estado = e.id_estado
group by id_cotizacion;

drop view if exists view_poliza;
create view view_poliza as
select codigo                                                                                  as `Codigo poliza`,
       fecha                                                                                   as Fecha,
       documento_cliente                                                                       as Documento,
       concat(primer_nombre, ' ', segundo_nombre, ' ', primer_apellido, ' ', segundo_apellido) as Cliente,
       poliza.seguro                                                                           as id_seguro,
       s.seguro                                                                                as Seguro,
       poliza.aseguradora                                                                      as id_aseguradora,
       a.aseguradora                                                                           as nombre_aseguradora,
       a.logo                                                                                  as Aseguradora,
       archivo                                                                                 as Archivo,
       valor_asegurado                                                                         as `Valor asegurado`,
       valor_prima                                                                             as `Valor prima`,
       e.estado                                                                                as Estado
from poliza
         inner join cliente c on poliza.documento_cliente = c.documento
         inner join seguro s on poliza.seguro = s.id_seguro
         inner join aseguradora a on poliza.aseguradora = a.id_aseguradora
         inner join estado e on poliza.estado = e.id_estado
order by `Codigo poliza`;

drop view if exists view_siniestro;
create view view_siniestro as
select id_siniestro                                                                            as `No. Referencia`,
       siniestro.fecha                                                                         as Fecha,
       codigo                                                                                  as `Codigo poliza`,
       concat(primer_nombre, ' ', segundo_nombre, ' ', primer_apellido, ' ', segundo_apellido) as Cliente,
       p.seguro                                                                                as id_seguro,
       s.seguro                                                                                as Seguro,
       p.aseguradora                                                                           as id_aseguradora,
       a.aseguradora                                                                           as nombre_aseguradora,
       a.logo                                                                                  as Aseguradora,
       monto                                                                                   as Monto,
       anexo                                                                                   as Anexo,
       descripcion                                                                             as Observaciones,
       siniestro.estado                                                                        as id_estado,
       e.estado                                                                                as Estado
from siniestro
         inner join poliza p on siniestro.codigo_poliza = p.codigo
         inner join seguro s on p.seguro = s.id_seguro
         inner join aseguradora a on p.aseguradora = a.id_aseguradora
         inner join cliente c on p.documento_cliente = c.documento
         inner join estado e on siniestro.estado = e.id_estado
order by `No. Referencia`;

drop view if exists view_reporte;
create view view_reporte as
select id_reporte                                                                                      as `No. Reporte`,
       fecha                                                                                           as Fecha,
       titulo                                                                                          as Nombre,
       archivo                                                                                         as `Reporte`,
       concat(u.primer_nombre, ' ', u.segundo_nombre, ' ', u.primer_apellido, ' ', u.segundo_apellido) as `Generado por`
from reporte
         inner join usuario u on reporte.usuario = u.documento
order by `No. Reporte`;