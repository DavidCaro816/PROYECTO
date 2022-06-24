use Perez_Lara_Cia_LTDA;

create view view_usuario as
    select
        concat(primer_nombre,' ',segundo_nombre,' ',primer_apellido,' ',segundo_apellido) as Nombre,
        email as Email,celular as Celular,t2.tipo_usuario as Rol
    from usuario
        inner join tipo_documento t on usuario.tipo_documento = t.id_tipo_documento
        inner join tipo_usuario t2 on usuario.tipo_usuario = t2.id_tipo_usuario
        inner join estado_usuario e on usuario.estado_usuario = e.id_estado_usuario;

create view view_cliente as
    select
        concat(t.abreviacion,' ',documento) as `No. Documento`,
        concat(primer_nombre,' ',segundo_nombre,' ',primer_apellido,' ',segundo_apellido) as Cliente,
        d.departamento as Departamento, c.ciudad as Ciudad, concat(direccion1,' ',direccion2) as Direccion,
        fecha_nacimiento as `Fecha de Nacimiento`, email as Email, concat(telefono1,' ',telefono2) as Telefono, e.estado_cliente as Estado
    from cliente
        inner join tipo_documento t on cliente.tipo_documento = t.id_tipo_documento
        inner join ciudad c on cliente.ciudad = c.id_ciudad
        inner join departamento d on c.departamento = d.id_departamento
        inner join estado_cliente e on cliente.estado_cliente = e.id_estado_cliente;

create view view_cotizacion as
    select
        fecha as Fecha, id_cotizacion as `No. Cotizacion`, concat(c.primer_nombre,' ',c.segundo_nombre,' ',c.primer_apellido,' ',c.segundo_apellido) as Cliente,
        s.seguro as Seguro, a2.aseguradora as Aseguradora, e.estado_cotizacion as Estado
    from cotizacion
        inner join cliente c on cotizacion.documento_cliente = c.documento
        inner join seguro s on cotizacion.seguro = s.id_seguro
        inner join aseguradora_cotizante a on cotizacion.id_cotizacion = a.cotizacion
        inner join aseguradora a2 on a.aseguradora = a2.id_aseguradora
        inner join estado_cotizacion e on cotizacion.estado_cotizacion = e.id_estado_cotizacion;

create view view_poliza as
    select fecha as Fecha,codigo as `Codigo poliza`,
           concat(primer_nombre,' ',segundo_nombre,' ',primer_apellido,' ',segundo_apellido) as Cliente,
           s.seguro as Seguro,a.aseguradora as Aseguradora,e.estado_poliza as Estado
    from poliza
        inner join cliente c on poliza.documento_cliente = c.documento
        inner join seguro s on poliza.seguro = s.id_seguro
        inner join aseguradora a on poliza.aseguradora = a.id_aseguradora
        inner join estado_poliza e on poliza.estado_poliza = e.id_estado_poliza;

create view view_siniestro as
    select id_siniestro as `No. Referencia`,
           concat(primer_nombre,' ',segundo_nombre,' ',primer_apellido,' ',segundo_apellido) as Cliente,
           codigo as `Codigo poliza`,p.seguro as Seguro,a.aseguradora as Aseguradora, siniestro.fecha as Fecha,
           siniestro.estado_siniestro as Estado
    from siniestro
        inner join poliza p on siniestro.codigo_poliza = p.codigo
        inner join seguro s on p.seguro = s.id_seguro
        inner join aseguradora a on p.aseguradora = a.id_aseguradora
        inner join cliente c on p.documento_cliente = c.documento
        inner join estado_siniestro e on siniestro.estado_siniestro = e.id_estado_siniestro;

create view view_reporte as
    select id_reporte as `No. Reporte`,fecha as Fecha,titulo as Nombre,archivo as `Reporte`,usuario as `Generado por`
    from reporte
        inner join usuario u on reporte.usuario = u.documento;